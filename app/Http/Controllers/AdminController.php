<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {   
        return view('admin.dashboard');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'post_body' => 'required',
            'author' => 'required',
            'category' => 'required',
            'tags' => 'required',
        ]);
        
        Post::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'post_body' => $request->post,
            'author' => $request->author,
            'category' => $request->category,
            'tags' => $request->tags,
        ]);

        return back();

    }

    public function edit(Post $post)
    {   
        return view('admin.edit', compact('post'));
    }

    public function update(Post $post)
    {   
        $attr = request()->validate([
            'title' => 'required',
            'post_body' => 'required',
            'author' => 'required',
            'category' => 'required',
            'tags' => 'required',
        ]);

        dd($attr);
        
        // $post->update($attr);

        // return back();
        
    }


    
}
