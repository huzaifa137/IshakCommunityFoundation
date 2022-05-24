<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logoutContoller extends Controller
{
    public function logoutuser()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
