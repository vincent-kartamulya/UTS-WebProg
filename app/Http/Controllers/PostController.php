<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $postLatest = Post::orderBy('latest', 'desc')->take(4)->get(); //ambil paling terakhir dikunjungi
        $postHighlight = Post::orderBy('count', 'desc')->first(); //ambil count paling banyak
        return view("home", compact("posts", "postLatest", "postHighlight"));

    }
}
