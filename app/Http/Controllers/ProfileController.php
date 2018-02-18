<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
     #  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('ads');
    }
    public function profile()
    {
        return view('profile');
    }


    public function picture()
    {
        return view('profile');
    }
}
