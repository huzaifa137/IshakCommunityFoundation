<?php

namespace App\Http\Controllers;
use App\Models\sponsor_a_child;
use Illuminate\Http\Request;

class SponsorAChildController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'imgfile'=>'required|mimes:jpg,jpeg,bmp,png',
            'simple_desc'=>'required',
            'detailed_desc'=>'required'
         ]);

        $request->imgfile->store('project_pics','public');
        
        $save = new sponsor_a_child([
        "title" => $request->input('title'),
        "image" => $request->imgfile->hashName(),
        "simple_desc" => $request->input('simple_desc'),
        "detailed_desc" => $request->input('detailed_desc')
        ]);

        $save->save();
    
        return redirect()->back();
    }
}
