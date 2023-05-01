<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $datos=Post::all();
        return view('post.index', compact('datos'));
    }
}
