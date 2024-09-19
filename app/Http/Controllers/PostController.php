<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::paginate(5);
        return view("posts.index", compact('posts'));
    }

    public function create(Request $request)
    {
        return view("posts.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "body" => "required"
        ]);

        Post::create([
            "title" => $request->title,
            "body" => $request->body
        ]);

        return redirect()->route("posts.index")->with("success", "Post has been created!");
        // dd($request->all());
    }

}
