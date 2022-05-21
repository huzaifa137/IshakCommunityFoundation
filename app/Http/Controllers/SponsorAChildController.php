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

    public function destroy($id)
    {
        $record = sponsor_a_child::find($id);
        $record->delete();
        return redirect()->back();
    }

    public function display($id)
    {
        $data = sponsor_a_child::find($id);
        return view('dashboard.updates.modify')->with('data',$data);
    }

    public function update(Request $request)
    {
        $save = sponsor_a_child::find($request->id);

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
              
             $save['firstname'] = $request->input('firstname');
             $save['lastname'] = $request->input('lastname');
             $save['image'] = $filename;
             $save['age'] =$request->input('age');
             $save['supportcatogory'] =$request->input('supportcatagory');
             $save['birthday']=Carbon::parse($request->date);
             $save['location']=$request->input('country');

         }

        $save->save();
        return redirect('Admin/information');

    }
}
