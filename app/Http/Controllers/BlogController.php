<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages.blog.index');
    }
    
    public function show(Post $post)
    {
        return view('pages.blog.show', compact('post'));
    }
}
