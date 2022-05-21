<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    public function store(Request $request)
    {

        $save = new project();
        $request->validate([
            'title'=>'required|string',
            'imgfile'=>'required|mimes:jpg,jpeg,bmp,png',
            'simple_desc'=>'required',
            'detailed_desc'=>'required'
         ]);

        if($request->file('imgfile')){
            $file= $request->file('imgfile');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $save['image']= $filename;
        }
        
            $save->title=$request->input('title');
            $save->simple_desc=$request->input('simple_desc');
            $save->detailed_desc=$request->input('detailed_desc');
            $save->save();

        return redirect()->back();
    }

    public function turnish($id)
    {
        $record = project::find($id);
        $record->delete();

        return redirect()->back();
    }

    public function display($id)
    {
        $data = project::find($id);
        return view('dashboard.updates.update')->with('data',$data);
    }

    public function updating(Request $request)
    {
        $data = project::find($request->id);

        if($request->file('imgfile'))
        {
            $file=$request->file('imgfile');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/Image'),$filename);
            $data['image']=$filename;
        }
        $data->title=$request->input('title');
        $data->simple_desc=$request->input('simple_desc');
        $data->detailed_desc=$request->input('detailed_desc');
        $data->save();

        return redirect('Admin/information')->with('success','Data has been updated successfully');
    }
}
