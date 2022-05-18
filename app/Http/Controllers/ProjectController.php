<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    public function store(Request $request)
    {

        $save = new project();
        $request->validate([
            'title'=>'required',
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
}
