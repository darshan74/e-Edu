<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QAModel;

class HomeController extends Controller
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

    public function testCandidate() {
        $model = new QAModel;
        $test_questions = $model::all(); // will retrieve all questions nmw. 
        return view('test')->with('data', $test_questions);
    }

    public function checkScore(Request $request) {
        $total_response = $request->all();
        foreach($total_response as $data) {
            dd($total_response);
        }
    }
}
