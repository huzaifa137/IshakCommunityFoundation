<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\gallery;
use App\Models\project;
use App\Models\activitie;
use App\Models\sponsor_a_child;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
        $data = new gallery();
        $request->validate([
            'caption'=>'required',
            'imgfile'=>'required|mimes:jpg,jpeg,png,bmp'
        ]);

        if($request->file('imgfile'))
        {
            $file=$request->file('imgfile');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/galley_pics'),$filename);
            $data['image']=$filename;
        }

        $data->caption=$request->input('caption');
        $data->save();
        return Redirect()->back();
    }


    public function show()
    {
        $results = gallery::all();
        $data =  project::all();
        $info = activitie::all();
        return $metadata = sponsor_a_child::all();

        return view('dashboard.information')->with('results',$results)->with('data',$data)
        ->with('info',$info)->with('metadata',$metadata);
    }

    public function delete($id)
    {
        $info = gallery::find($id);
        $info->delete();
        return redirect()->back();
    }

    public function display($id)
    {
        $info = gallery::find($id);
        return view('dashboard.updates.galleryupdate')->with('info',$info);
    }
    public function update(Request $request)
    {
        $data =  gallery::find($request->id);

        $request->validate([
            'caption'=>'required',
            'imgfile'=>'required|mimes:jpg,jpeg,png,bmp'
        ]);

        if($request->file('imgfile'))
        {
            $file=$request->file('imgfile');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/galley_pics'),$filename);
            $data['image']=$filename;
        }

        $data->caption=$request->input('caption');
        $data->save();
        
        return redirect('Admin/information');
    }

    public function displayinformation()
    {
        $data = gallery::all();
        
        return view('gallery')->with('data',$data);
    }
}
