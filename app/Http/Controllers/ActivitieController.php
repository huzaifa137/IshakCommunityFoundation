<?php

namespace App\Http\Controllers;
use App\Models\activitie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActivitieController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]));

        $request->image->store('activities_pics','public');

        $pic_store = new activitie([
            "title" => $request->input('title'),
            "image" => $request->image->hashName(),
            'money_up' =>$request->input('money_up'),
            "goal" => $request->input('goal')
        ]);

        $pic_store->save();

        return Redirect()->back();

    }
}
