<?php

namespace App\Http\Controllers;
use App\Models\sponsor_a_child;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SponsorAChildController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=>'required|string',
            'lastname'=>'required|string',
            'age'=>'required',
            'supportcatagory'=>'required',
            'date'=>'required',
            'country'=>'required',
            'image'=>'required|mimes:jpeg,jpg,bmp,png'
         ]);

         if($request->file('image'))
         {
             $file=$request->file('image');
             $filename=date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('public/sponsor_a_child'),$filename);
             $save = new sponsor_a_child([
                "firstname" => $request->input('firstname'),
                "lastname" => $request->input('lastname'),
                "image" => $filename,
                "age"=> $request->input('age'),
                "supportcatogory" => $request->input('supportcatagory'),
                "birthday"=>Carbon::parse($request->date),
                "location"=>$request->input('country')
                ]);
         }

        $save->save();
        return redirect()->back();
    }
}
