<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClientMessage;
use Illuminate\Http\Request;

class ClientMessageController extends Controller
{
   
    public function index()
    {
        $data = ClientMessage::all();
        return view('admin.pages.client_message.index',compact('data'));
    }

    public function create()
    {
       
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        ClientMessage::destroy($id);
        return redirect()->back()->with('error','Client Message Deleted successfully!');
    }
}
