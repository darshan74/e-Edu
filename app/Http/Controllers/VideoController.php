<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScoresModel;
use App\QAModel;
use App\video_table;

Use Session;
use DB;

class VideoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     public function getVideo(Request $request)
     {
         $reponse = $request->all();
         dd($reponse);
     } 
}

