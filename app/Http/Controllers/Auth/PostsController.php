<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Posts;
use App\User;
use Redirect;
use App\Category;
use App\Tag;
use Session;


class PostsController extends Controller
{

    public function index(Request $request)
    {

        $search = $request->get('search');
        $posts = Posts::where('title', 'like', '%'.$search.'%')->where('active', 1)->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin/posts/index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $categories = Category::all();
       $tags = Tag::all();
        if ($request->user()->can_post()) {
          return view('admin/posts/create')->withTags($tags)->withCategories($categories);
        }else {
          return redirect('/')->withErrors('You Have not Permissions');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        $post = new Posts();
        $post->title = $request->get('title');

        $post->body = $request->get('body');
        $post->highlight = (boolean)$request->get('highlight');
        $post->must_reads = (boolean)$request->get('must_reads');
        $post->slug = str_slug($post->title);

        $post->author_id = $request->user()->id;

        $post->category_id = $request->input('category_id');

        if ($request->file('images')) {
          $fileName = str_random(30);
          $request->file('images')->move("photos/post",$fileName);
        }else {
          $fileName = $post->images;
        }
        $post->images = $fileName;

        if ($request->has('save')) {
          $post->active = 0;
          Session::flash('save', 'Post disimpan di DRAFT');
        }else {
          //for Posts
          $post->active=1;
          Session::flash('success', 'Post di Publish');
        }
        $post->save();

        if (isset($request->tags)) {
          $post->tags()->sync($request->tags);
        }else {
          $post->tags()->sync(array());
        }

        return redirect('admin/posts/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $slug)
    {
      $tags = Tag::all();
      $tags2 = array();
      foreach ($tags as $tag) {
        $tags2[$tag->id] = $tag->name;
      }

      $categories = Category::all();
      $cats = array();
      foreach ($categories as $category) {
        $cats[$category->id] = $category->name;
      }

        $post = Posts::where('slug', $slug)->first();
        if ($post && ($request->user()->id == $post->author_id || $request->user()->is_admin())) {
          return view('admin/posts/edit')->with('post', $post)->withTags($tags2)->withCategories($cats);
        }
        return redirect('/')->withErrors('You have not sufficient Permissions');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $post_id = $request->input('post_id');
        $post = Posts::find($post_id);
        if ($post && ($post->author_id == $request->user()->id || $request->user()->is_admin())) {
          $title = $request->input('title');
          $slug = str_slug($title);
          $post->category_id = $request->input('category_id');
          $duplicate = Posts::where('slug', $slug)->first();
          if ($duplicate) {
            if ($duplicate->id != $post_id) {
              return redirect('admin/posts/editposts/'.$post->slug)->withErrors('Title Already Exists')->withInput();
            } else {
              $post->slug = $slug;
            }
          }
          $post->title =  $title;
          // upload images

                  if ($request->file('images')) {
                    $fileName = str_random(30);
                    $request->file('images')->move("photos/post/",$fileName);
                  }else {
                    $fileName = $post->images;
                  }
                  $post->images = $fileName;
            $post->body = $request->input('body');

            $post->highlight = (boolean)$request->input('highlight');
            $post->must_reads = (boolean)$request->input('must_reads');

            if ($request->has('save')) {
                $post->active = 0;
                $message = 'Post disimpan ke DRAFT';
                $goto = 'admin/post/';
            } else {
              $post->active = 1;

            }
            $post->save();
            if (isset($request->tags)) {
              $post->tags()->sync($request->tags);
            }else {
              $post->tags()->sync(array());
            }

            Session::flash('success', 'Post Updated');
            return redirect('admin/posts/');
        } else{
          return redirect('/')->withErrors('you not have permissions');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $post = Posts::find($id);
      if ($post && ($post->author_id == $request->user()->id || $request->user()->is_admin())) {
        $post->delete();
        Session::flash('deleted', 'Post sudah di hapus');
      } else {
        Session::flash('failed', 'You dont have permission');
      }
      return redirect('admin/posts/');
    }
}
