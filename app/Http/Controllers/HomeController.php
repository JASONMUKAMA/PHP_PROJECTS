<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::simplePaginate(1);
        return view('index', ['posts' => $posts]);
    }


    public function show($slug){
        $pst = Post:: findBySlug($slug);
        return view('post.show', ['post' => $pst]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        return view('index');
//    }
}
