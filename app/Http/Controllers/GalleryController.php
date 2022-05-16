<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\gallery;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'caption'=>'required',
            'imgfile'=>'required|mimes:jpg,jpeg,png,bmp'
        ]);

        $request->imgfile->store('gallery_pics','public');

        $imgsave = new gallery([
            "caption"=>$request->input('caption'),
            "image"=>$request->imgfile->hashName()
        ]);

        $imgsave->save();
        return Redirect()->back();
    }
}
