<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }
    public function homapageAcademic() {
        return view('homepage-academic');
    }

    public function homepageProfile()
    {
        return view('homepage-profile');
    }

    public function homapageStatus1()
    {
        return view('homepage-status-1');
    }
    public function homapageStatus2()
    {
        return view('homepage-status-2');
    }
    public function homapageStatus()
    {
        return view('homepage-status');
    }
    public function homapageSupport()
    {
        return view('homepage-support');
    }

}
