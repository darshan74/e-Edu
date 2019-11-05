<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QAModel;
use DB;

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
        // making a model object
        $model = new QAModel;

        // check if all categories of question exist
        $all_categories_exist = DB::table('qa_db')->where([
            ['subject','=','DSA'],
            ['subject','=','ML'],
            ['subject','=','Java'],
        ])->get(); // This will check whether Questions with all categories exist

        // if all category doesn't exist, get any questions
        if($all_categories_exist->isEmpty()) {
            $any_questions = QAModel::all()->random()->get();
            $total = count($any_questions);
            // if total number of question is less than 9, get them ALL!
            if($total < 9) {
                $any_questions = QAModel::all()->random($total);
            }
            else {
                // else only get 9 questions.
                $any_questions = QAModel::all()->random(9);
            }
            return view('test')->with('data' ,$any_questions);
        }
        
        else {
            $dsa_questions = QAModel::all()->random(3)->where('subject', 'DSA');
            $ml_questions = QAModel::all()->random(3)->where('subject', 'ML');
            $java_questions = QAModel::all()->random(3)->where('subject', 'Java');
            $test_questions = [
                'dsa'  => $dsa_questions,
                'ml'   => $ml_questions,
                'java' => $java_questions
            ];
            // return view('test')->with(compact('dsa_questions', 'ml_questions', 'java_questions'));
            return view('test')->with('data', $test_questions);
        }
    }

    public function checkScore(Request $request) {
        $total_response = $request->all();
        foreach($total_response as $data) {
            dd($total_response);
        }
    }
}
