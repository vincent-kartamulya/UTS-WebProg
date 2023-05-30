<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id){
        $post = Post::find($id);

        $post->count++;
        $post->latest = now();
        $post->save();
        $category = $post->category->category;
        return view("detail", compact("post", "category"));
    }
}
