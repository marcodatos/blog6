<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FrontController extends Controller
{
    public function index()
    {
    	$posts = Post::orderBy('id','DESC')->paginate(6);
    	return view('frontend',compact('posts'));
        
    }    
}
