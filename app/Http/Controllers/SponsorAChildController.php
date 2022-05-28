<?php

namespace App\Http\Controllers;
use App\Models\sponsor_a_child;
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
            'city'=>'required',
            'image'=>'required|mimes:jpeg,jpg,bmp,png',
            'schoolname'=>'required',
            'grade'=>'required|integer'
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
                "location"=>$request->input('city'),
                "schoolname"=>$request->input('schoolname'),
                "grade"=>$request->input('grade')
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
            'city'=>'required',
            'image'=>'required|mimes:jpeg,jpg,bmp,png',
            'schoolname'=>'required',
            'grade'=>'required|integer'
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
             $save['schoolname']=$request->input('schoolname');
             $save['grade']=$request->input('grade');
             $save['location']=$request->input('city');
         }
        $save->save();
        return redirect('Admin/information');
    }

    public function displayinformation()
    {
        $data = sponsor_a_child::all();

        return view('sponsor-a-child')->with('data',$data);
    }
}
