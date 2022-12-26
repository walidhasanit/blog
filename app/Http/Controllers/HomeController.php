<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index', ['blogs' => Blog::where('status', 1)->orderBy('id', 'desc')->take(8)->get(),]);
    }

    public function productDetail()
    {
        return view('website.blog.index');
    }
    public function blogDetail($id)
    {
        return view('website.blog.detail', ['blog' => Blog::find($id),]);
    }
}
