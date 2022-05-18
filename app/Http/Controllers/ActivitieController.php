<?php

namespace App\Http\Controllers;
use App\Models\activitie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActivitieController extends Controller
{
    public function store(Request $request)
    {
        $save = new activitie();
        $this->validate($request,([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]));

       if($request->file('image'))
       {
           $file= $request->file('image');
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('public/activity_pics'),$filename);
           $save['image']=$filename;
           $save['title']=$request->input('title');
           $save['money_up']=$request->input('money_up');
           $save['goal']=$request->input('goal');
           $save->save();
       }

        return Redirect()->back();

    }
}
