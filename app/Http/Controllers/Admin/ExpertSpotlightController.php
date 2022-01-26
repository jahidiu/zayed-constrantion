<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExpertSpotlight;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ExpertSpotlightController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts=ExpertSpotlight::orderBy('id','DESC')->get();
        return view('admin.pages.expert.index',compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('admin.pages.expert.create');
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
            'name' => 'required',
            'designation' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'speech' => 'required',
        ]);
        $imageName = NULL;
        if ($request->has('image')) {
            $image = $request->file('image');
            $folder = 'images/expert';
            $imageName = $this->uploadLocal($image, null, $folder);
        }
        $expert = [
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
            'speech' => $request->speech,
            'created_by' => Auth()->user()->id,
            'updated_by' => Auth()->user()->id,
            'status' => 1,
        ];
        // return $expert;
        ExpertSpotlight::create($expert);
        return redirect()->route('admin.expert.index')->with('success', 'ExpertSpotlight Created successfully!');
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
        $expert = ExpertSpotlight::find($id);
        return view('admin.pages.expert.edit',compact('expert'));
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
            'name' => 'required',
            'designation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'speech' => 'required',
        ]);

        $event = ExpertSpotlight::find($id);
        $imageName = $event->image;
        if ($request->has('image')) {
            $image = $request->file('image');
            $folder = 'images/expert';
            $oldfile = $event->image;

            $imageName = $this->uploadLocal($image, $oldfile, $folder);
        }
        $expert = [
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
            'speech' => $request->speech,
            'created_by' => Auth()->user()->id,
            'updated_by' => Auth()->user()->id,
            'status' => 1,
        ];
        // return $expert;

        ExpertSpotlight::where('id', $id)->update($expert);
        return redirect()->route('admin.expert.index')->with('info', 'ExpertSpotlight Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExpertSpotlight::destroy($id);
        return redirect()->back()->with('error','ExpertSpotlight Deleted successfully!');

    }
}
