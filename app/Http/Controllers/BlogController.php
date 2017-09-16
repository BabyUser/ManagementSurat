<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
      $blogs = Blog::all();

      return view('blog/home', ['blogs' => $blogs]);
    }

    public function show($id)
    {
      $blog = Blog::find($id);

      return view('blog/single', ['blog' => $blog]);
    }

    public function create()
    {
      return view('blog/create');
    }

    public function store(Request $request)
    {
      // insert
      $blog = new Blog;
      $blog->title       = $request->title;
      $blog->description = $request->description;
      $blog->save();
      return redirect('/blog');

    }

    public function edit($id)
    {
      $blog = Blog::find($id);

      return view('blog/edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {

      //updated
      $blog = Blog::find($id);
      $blog->title       = $request->title;
      $blog->description = $request->description;
      $blog->save();
      return redirect('blog/' . $id);
    }

    public function destroy($id)
    {
      // delete 1
      $blog = Blog::find($id);
      $blog->delete();
      return redirect('/blog');
    }

}
