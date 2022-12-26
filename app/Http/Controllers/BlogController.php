<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index');
    }
    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect()->back()->with('message', 'blog all info successfully');
    }
    public function manage()
    {
        return view('admin.blog.mange', ['blogs' => Blog::orderBY('id', 'desc')->get(),]);
    }
    public function edit($id)
    {
        return view('admin.blog.edit', ['blog' => Blog::find($id),]);
    }
    public function detail($id)
    {
        return view('admin.blog.detail', ['blog' => Blog::find($id),]);
    }
    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage-blog')->with('message', 'update blog  info successfully');

    }
    public function status($id)
    {
        return redirect('/manage-blog')->with('message', Blog::updateStatus($id));

    }
    public function delete($id)
    {
        Blog:: deleteBlog($id);
        return redirect('/manage-blog')->with('message', 'delete blog  info successfully');

    }
}
