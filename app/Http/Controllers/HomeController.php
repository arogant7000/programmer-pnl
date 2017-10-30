<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Tag;
use App\Category;
use Mail;
use Session;

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
      $category = Category::all();
      $latest =  Posts::orderBy('updated_at','DESC')->limit(1)->take(2)->get();
      $latest2 =  Posts::orderBy('updated_at','DESC')->limit(1)->offset(2)->take(3)->get();

      $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);

      $must_reads =  Posts::orderBy('updated_at','DESC')->where('must_reads', 1)->take(5)->get();
      return view('index', compact('posts','post','latest','latest2','must_reads','category','recent'));
    }

    public function indexAdmin()
    {
      return view('admin/index');
    }

    public function search(Request $request)
    {

        $search = $request->input('q');
        $posts = Posts::where('title','like','%'.$search.'%')->paginate(10);

        $category = Category::all();
         $tags = Tag::all();
          $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
          $popular = Posts::orderBy('updated_at', 'DESC')->where('highlight', 1)->paginate(5);

        return view('p.search', compact('recent','tags','category','search','posts','popular'));
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
       $popular = Posts::orderBy('updated_at', 'DESC')->where('highlight', 1)->paginate(5);
        return view('p.show', compact('post', 'recent', 'related','slug','tags','category','popular'));

    }

    public function indexPost()
    {

      $category = Category::all();
       $tags = Tag::all();
        $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
        $posts =  Posts::orderBy('updated_at','DESC')->paginate(8);
        $popular = Posts::orderBy('updated_at', 'DESC')->where('highlight', 1)->paginate(5);
        return view('p.article', compact('recent','tags','category', 'posts','popular'));

    }

    public function showcats($id)
    {
      $cate = Category::find($id);

      $category = Category::all();

      $post = Posts::where('category_id',$cate->id)->paginate(8);
      if (!$post) {
        return redirect()->back()->withErrors('requested page not found');
      }

       $tags = Tag::all();
        $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
        $popular = Posts::orderBy('updated_at', 'DESC')->where('highlight', 1)->paginate(5);
      return view('category',compact('category','cate','tags','recent','post','popular'));
    }

    public function showtags($id)
    {
      $tag = Tag::find($id);
      $category = Category::all();
       $tags = Tag::all();
        $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
        $popular = Posts::orderBy('updated_at', 'DESC')->where('highlight', 1)->paginate(5);
      return view('tags',compact('category','tag','tags','recent','popular'));
    }

    public function about()
    {
      $category = Category::all();
      $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
      return view('p.about-me', compact('category','recent'));
    }
    public function about_team()
    {
      $category = Category::all();
      $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
      return view('p.about-team', compact('category','recent'));
    }

    public function coming()
    {
      $category = Category::all();
      $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
      return view('p.coming-soon',compact('recent','category'));
    }

    public function service()
    {
      $category = Category::all();
      $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
      return view('p.service',compact('category','recent'));
    }

    public function GetContact()
    {
        $category = Category::all();
        $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
      return view('p.contact',compact('category','recent'));
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
          'email' => 'required|email',
          'name' =>  'required',
          'subject' => 'min:3',
          'message' => 'min:10']);

          $data = array(
            'email' => $request->email,
            'name' =>$request->name,
            'subject' => $request->subject,
            'bodyMessage' => $request->message,
            'survey' => ['Q1' => "Hello", 'Q2' => 'YES']
            );

          Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('arogant7000@gmail.com');
            $message->subject($data['subject']);
          });

          Session::flash('success', 'Your Email was Sent!');

          return redirect('/');

    }

    public function faq()
    {
      $recent = Posts::orderBy('updated_at', 'DESC')->paginate(5);
      return view('p.faq',compact('recent'));
    }





}
