<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Traits\ImageUpload;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    use ImageUpload;
   
    
    public function index()
    {
        $blogs=Blog::with('category')->orderBy('id','DESC')->get();
        return view('admin.pages.blog.index',compact('blogs'));
    }

    public function create()
    {
        
        $categories=BlogCategory::orderBy('name','ASC')->get();
        return view('admin.pages.blog.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
        ]);
        $imageName = NULL;
        if ($request->has('image')) {
            $image = $request->file('image');
            $folder = 'images/blog';
            $imageName = $this->uploadLocal($image, null, $folder);
        }
        $blog = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $imageName,
            'slug' => Str::slug($request->title),
            'embed_code' => $request->embed_code,
            'details' => $request->details,
            'status' => 1,
        ];
        // return $blog;
        Blog::create($blog);
        return redirect()->route('admin.blog.index')->with('success', 'Blog Created successfully!');
    }
   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories=BlogCategory::orderBy('name','ASC')->get();
        return view('admin.pages.blog.edit',compact('blog','categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
        ]);

        $event = Blog::find($id);
        $imageName = $event->image;
        if ($request->has('image')) {
            $image = $request->file('image');
            $folder = 'images/blog';
            $oldfile = $event->image;

            $imageName = $this->uploadLocal($image, $oldfile, $folder);
        }
        $blog = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $imageName,
            'embed_code' => $request->embed_code,
            'details' => $request->details,
            'status' => 1,
        ];
        // return $blog;

        Blog::where('id', $id)->update($blog);
        return redirect()->route('admin.blog.index')->with('info', 'Blog Updated Successfully!');
    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->back()->with('error','Blog Deleted successfully!');

    }
}
