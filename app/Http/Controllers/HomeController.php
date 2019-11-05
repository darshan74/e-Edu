<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScoresModel;
use App\QAModel;
Use Session;
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

        // retrieving scores
        $total_response = $request->all();
        $token_removed = array_shift($total_response);

        $index=0;
        $q = [];
        $a = [];

        foreach($total_response as $data) {
            if($index % 2 == 0) {
                $q[$index] = $data;
            }
            else if($index %2 != 0){
                $a[$index] = $data;
            }
            $index++;
        }
        $question_array = array_values($q);
        $answer_array = array_values($a);
        // echo $question_array[0];
        // echo $answer_array[0];

        $newindex = 0; // for answers array
        //Positive Scores
        $score = 0;
        $dsa_score = 0;
        $ml_score = 0;
        $java_score = 0;

        //Negative Scores
        $score_negative = 0;
        $dsa_score_negative = 0;
        $ml_score_negative = 0;
        $java_score_negative = 0;

        // dd($question_array);
        foreach($question_array as $question_array) {
            $question = QAModel::where('question', $question_array)->first();
            if($question) {
                // dd($question->correct_option == $answer_array[$newindex]);
                if ($question->correct_option == $answer_array[$newindex]) {
                    $score += 5;
                    $subject = $question->subject;
                    if ($subject === 'DSA') { $dsa_score += 5; }
                    else if ($subject === 'ML') { $ml_score += 5; }
                    else if ($subject === 'Java') { $java_score += 5; }
                    else {Session::flash('message', 'One Subject not found'); } 
                    // echo $score;
                }
                else {
                    $score_negative -= 5;
                    $subject = $question->subject;
                    if ($subject === 'DSA') { $dsa_score_negative -= 5; }
                    else if ($subject === 'ML') { $ml_score_negative -= 5; }
                    else if ($subject === 'Java') { $java_score_negative -= 5; }
                    else {Session::flash('message', 'One Subject not found'); } 
                }
                $newindex++; // To increment answers array
            }
            else {
                // echo "One question not found";
                Session::flash('message', 'One question not found. check db for errors'); 
            }
        }
        // echo 'Total Score = '.$score.' ';
        // echo 'ML = '.$ml_score.' ';
        // echo 'DSA = '.$dsa_score.' ';
        // echo 'Java = '.$java_score.' ';

        // echo 'Total Score = '.$score_negative.' ';
        // echo 'ML = '.$ml_score_negative.' ';
        // echo 'DSA = '.$dsa_score_negative.' ';
        // echo 'Java = '.$java_score_negative.' ';

        // Recommending Courses
        $ml_eval = ($ml_score + $ml_score_negative)/2;
        $dsa_eval = ($dsa_score + $dsa_score_negative)/2;
        $java_eval = ($java_score + $java_score_negative)/2;

        $array = array("Machine Learning"=>$ml_eval, "Data Structures"=>$dsa_eval, "Java"=>$java_eval);
        asort($array);
        $first_priority = array_key_first($array);
        $f = (string)$first_priority;
        // dd($f);

        // Saving scores to db
        // $score = new ScoresModel;
        // // dd(auth()->user()->id);
        // $score->uid = auth()->user()->id;
        
        // $score->score_positive = $score;
        // $score->ml_score_positive = $ml_score;
        // $score->dsa_score_positive = $dsa_score;
        // $score->java_score_positive = $java_score;

        // $score->score_negative = $score_negative;
        // $score->ml_score_negative = $ml_score_negative;
        // $score->dsa_score_negative = $dsa_score_negative;
        // $score->java_score_negative = $java_score_negative;
        // $score->recommended_course = $f;
        // $score->save();
        return view('recommend')->with('data', $f); 
    }
}
