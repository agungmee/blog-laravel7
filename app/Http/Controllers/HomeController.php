<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{   

    public function index()
    {
        $posts = Post::paginate('8'); //buat paginasi 8 post
        return view('home',compact('posts'));
    }

    public function show($slug)
    {
        $posts = Post::where('slug', $slug)->firstOrFail(); //first untuk mengambil data yang pertama ditambah OrFail kalo misal ga ada dibalikin ke 404
        return view('posts.show', compact('posts')); //passing data ke view show, data yang di passing posts
    }
    
    public function list()
    {
        $posts = Post::all(); //buat paginasi 10 post
        return view('admin.dashboard',compact('posts'));
    }

}
