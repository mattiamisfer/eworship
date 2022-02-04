<?php

namespace App\Http\Controllers;

use App\Models\Homam;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $homams  = Homam::all();

        return view('web.home',compact('homams'));
    }


    public function horoscope() {
        return view('web.horoscope');
    }

    
}
