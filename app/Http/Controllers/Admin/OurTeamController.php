<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OurTeamController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=OurTeam::orderBy('id','DESC')->get();
        return view('admin.pages.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('admin.pages.team.create');
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
            'details' => 'required',
        ]);
        $imageName = NULL;
        if ($request->has('image')) {
            $image = $request->file('image');
            $folder = 'images/team';
            $imageName = $this->uploadLocal($image, null, $folder);
        }
        $team = [
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
            'details' => $request->details,
            'created_by' => Auth()->user()->id,
            'updated_by' => Auth()->user()->id,
            'status' => 1,
        ];
        // return $team;
        OurTeam::create($team);
        return redirect()->route('admin.team.index')->with('success', 'OurTeam Created successfully!');
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
        $team = OurTeam::find($id);
        return view('admin.pages.team.edit',compact('team'));
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
            'details' => 'required',
        ]);

        $event = OurTeam::find($id);
        $imageName = $event->image;
        if ($request->has('image')) {
            $image = $request->file('image');
            $folder = 'images/team';
            $oldfile = $event->image;

            $imageName = $this->uploadLocal($image, $oldfile, $folder);
        }
        $team = [
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
            'details' => $request->details,
            'created_by' => Auth()->user()->id,
            'updated_by' => Auth()->user()->id,
            'status' => 1,
        ];
        // return $team;

        OurTeam::where('id', $id)->update($team);
        return redirect()->route('admin.team.index')->with('info', 'OurTeam Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OurTeam::destroy($id);
        return redirect()->back()->with('error','OurTeam Deleted successfully!');

    }
}
