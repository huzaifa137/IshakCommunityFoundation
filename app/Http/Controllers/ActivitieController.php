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
           $save['details']=$request->input('detail');
           $save->save();
       }

        return Redirect()->back();
    }

    public function erase($id)
    {   
        $record = activitie::find($id);
        $record->delete();

        return redirect()->back();
    }

    public function display($id)
    {
        $data = activitie::find($id);
        return view('dashboard.updates.activityupdate')->with('data',$data);
    }

    public function update(Request $request)
    {

        $save = activitie::find($request->id);
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
           $save['details']=$request->input('detail');
           $save['goal']=$request->input('goal');
           $save->save();
       }

        return Redirect('Admin/information');

    }

    public function displayinformation()
    {
        $data = activitie::all();
        
        return view('activities')->with('data',$data);

    }
}
