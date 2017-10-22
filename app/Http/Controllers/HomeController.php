<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Tag;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $post =  Posts::orderBy('updated_at','DESC')->where('highlight', 1)->limit(1)->get();
      $posts =  Posts::orderBy('updated_at','DESC')->where('highlight', 1)->limit(1)->offset(1)->take(5)->get();

      $latest =  Posts::orderBy('updated_at','DESC')->limit(1)->take(2)->get();
      $latest2 =  Posts::orderBy('updated_at','DESC')->limit(1)->offset(2)->take(3)->get();

      $must_reads =  Posts::orderBy('updated_at','DESC')->where('must_reads', 1)->take(5)->get();
      return view('index', compact('posts','post','latest','latest2','must_reads'));
    }

    public function indexAdmin()
    {
      return view('admin/index');
    }

    public function show($slug)
    {

      $category = Category::all();
       $tags = Tag::all();
        $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
        $post = Posts::where('slug',$slug)->first();
        if (!$post) {
          return redirect()->back()->withErrors('requested page not found');
        }
       $related = Posts::where('title', 'like','%'.$post.'%')->paginate(4);

        return view('p.show', compact('post', 'recent', 'related','slug','tags','category'));

    }



    public function about()
    {
      return view('about_me');
    }
    public function maintenance()
    {
      return view('maintenance');
    }

    public function service()
    {
      return view('service');
    }

    public function contact()
    {
      return view('contact');
    }

    public function faq()
    {
      return view('faq');
    }


    public function indexPost()
    {

      $category = Category::all();
       $tags = Tag::all();
        $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
        $posts =  Posts::orderBy('updated_at','DESC')->paginate(8);

        return view('article', compact('recent','tags','category', 'posts'));

    }

}
