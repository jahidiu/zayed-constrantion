<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\SliderCategory;
use Illuminate\Http\Request;
use App\Traits\ImageUpload;

class SliderController extends Controller
{
    use ImageUpload;
    public function index()
    {
        $sliders=Slider::orderBy('id','DESC')->get();
        return view('admin.pages.slider.index',compact('sliders'));
    }

    public function create()
    {
        
        $categories=SliderCategory::orderBy('name','ASC')->get();
        return view('admin.pages.slider.create',compact('categories'));
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
            $folder = 'images/slider';
            $imageName = $this->uploadLocal($image, null, $folder);
        }
        $slider = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $imageName,
            'details' => $request->details,
            'status' => 1,
        ];
        // return $slider;
        Slider::create($slider);
        return redirect()->route('admin.slider.index')->with('success', 'Slider Created successfully!');
    }
   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        $categories=SliderCategory::orderBy('name','ASC')->get();
        return view('admin.pages.slider.edit',compact('slider','categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details' => 'required',
        ]);

        $event = Slider::find($id);
        $imageName = $event->image;
        if ($request->has('image')) {
            $image = $request->file('image');
            $folder = 'images/slider';
            $oldfile = $event->image;

            $imageName = $this->uploadLocal($image, $oldfile, $folder);
        }
        $slider = [
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image' => $imageName,
            'details' => $request->details,
            'status' => 1,
        ];
        // return $slider;

        Slider::where('id', $id)->update($slider);
        return redirect()->route('admin.slider.index')->with('info', 'Slider Updated Successfully!');
    }

    public function destroy($id)
    {
        Slider::destroy($id);
        return redirect()->back()->with('error','Slider Deleted successfully!');

    }
}
