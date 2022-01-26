<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\News;
use App\Models\NewsCategory;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::with('category')->orderBy('id','DESC')->get();
        return view('admin.pages.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories=BlogCategory::orderBy('name','ASC')->get();
        return view('admin.pages.news.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            $folder = 'images/news';
            $imageName = $this->uploadLocal($image, null, $folder);
        }
        $news = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $imageName,
            'slug' => Str::slug($request->title),
            'embed_code' => $request->embed_code,
            'details' => $request->details,
            'status' => 1,
        ];
        // return $new;
        News::create($news);
        return redirect()->route('admin.news.index')->with('success', 'News Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $categories=NewsCategory::orderBy('name','ASC')->get();
        return view('admin.pages.news.edit',compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
        ]);

        $event = News::find($id);
        $imageName = $event->image;
        if ($request->has('image')) {
            $image = $request->file('image');
            $folder = 'images/news';
            $oldfile = $event->image;

            $imageName = $this->uploadLocal($image, $oldfile, $folder);
        }
        $news = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $imageName,
            'embed_code' => $request->embed_code,
            'details' => $request->details,
            'status' => 1,
        ];
        // return $new;

        News::where('id', $id)->update($news);
        return redirect()->route('admin.news.index')->with('info', 'News Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return redirect()->back()->with('error','News Deleted successfully!');

    }
}
