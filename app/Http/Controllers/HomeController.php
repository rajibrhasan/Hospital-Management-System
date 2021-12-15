<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('dashboard');
            }
            else if(Auth::user()->usertype=='1')
            {
                return view('admin.home'); 
            }
            else if(Auth::user()->usertype=='2')
            {
                return view('admin.home'); //dr.home
            }

        }
        else
        {
            return redirect()->back();
        }
    }
}
