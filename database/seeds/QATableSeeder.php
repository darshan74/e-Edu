<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QATableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('qa_db')->truncate();
        DB::table('qa_db')->insert([

            // Copy the below code to feed all questions in database.
            [
            'subject' => 'DSA',
            'question' => 'Queue data structure works on ?',
            'correct_option' => 'FIFO',
            'other_option1' => 'LIFO',
            'other_option2' => 'FILO',
            'other_option3' => 'None of the above',
            'answer_explanation' => 'Input some sense here please',
            'answer_diagram' => 'Not available',
            ],
            [
            'subject' => 'DSA',
            'question' => 'What could be the worst case height of an AVL tree?',
            'correct_option' => '1.44 log n',
            'other_option1' => '0.97 log n',
            'other_option2' => '2.13 log n',
            'other_option3' => 'n2 log n',
            'answer_explanation' => 'Input some sense here please',
            'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'DSA',
                'question' => 'If locality is a concern, you can use _______ to traverse the graph?',
                'correct_option' => 'Depth First Search',
                'other_option1' => 'Breadth First Search',
                'other_option2' => 'Either BFS or DFS',
                'other_option3' => 'None of the above',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'DSA',
                'question' => 'Which of the following asymptotic notation is the worst among all?',
                'correct_option' => 'Ο(n3)',
                'other_option1' => 'Ο(n+9378)',
                'other_option2' => 'nΟ(1)',
                'other_option3' => ' 2Ο(n)',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'DSA',
                'question' => 'To represent hierarchical relationship between elements, Which data structure is suitable??',
                'correct_option' => 'Tree',
                'other_option1' => 'Priority',
                'other_option2' => 'Graph',
                'other_option3' => 'Dequeue',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'DSA',
                'question' => '…………… is not the component of data structure.?',
                'correct_option' => 'None of above',
                'other_option1' => 'Operations',
                'other_option2' => 'Storage Structures',
                'other_option3' => 'Algorithms',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'DSA',
                'question' => 'Which of the following is the most widely used external memory data structure?',
                'correct_option' => 'B-tree',
                'other_option1' => 'AVL tree',
                'other_option2' => 'Red-black tree',
                'other_option3' => 'Both AVL tree and Red-black tree',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'ML',
                'question' => 'Machine learning is',
                'correct_option' => 'The autonomous acquisition of knowledge through the use of computer programs',
                'other_option1' => 'The autonomous acquisition of knowledge through the use of manual programs',
                'other_option2' => 'The selective acquisition of knowledge through the use of computer programs',
                'other_option3' => 'The selective acquisition of knowledge through the use of manual programs',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'ML',
                'question' => 'Bayesian classifiers is',
                'correct_option' => 'A class of learning algorithm that tries to find an optimum classification of a set of examples using the probabilistic theory.',
                'other_option1' => 'Any mechanism employed by a learning system to constrain the search space of a hypothesis',
                'other_option2' => 'An approach to the design of learning algorithms that is inspired by the fact that when people encounter new situations, they often explain them by reference to familiar experiences, adapting the explanations to fit the new situation.',
                'other_option3' => 'None of these.',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'ML',
                'question' => 'Classification is',
                'correct_option' => 'A subdivision of a set of examples into a number of classes',
                'other_option1' => 'A measure of the accuracy, of the classification of a concept that is given by a certain theory',
                'other_option2' => 'The task of assigning a classification to a set of examples',
                'other_option3' => 'None of these',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'ML',
                'question' => 'How many types of agents are there in artificial intelligence',
                'correct_option' => '4',
                'other_option1' => '1',
                'other_option2' => '2',
                'other_option3' => '3',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'Java',
                'question' => 'Method Overriding is an example of',
                'correct_option' => 'Dynamic Binding',
                'other_option1' => 'Static Binding.',
                'other_option2' => 'Both of the above',
                'other_option3' => 'None of the above',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'Java',
                'question' => 'Java Source Code is compiled into ______________',
                'correct_option' => 'Bytecode',
                'other_option1' => '.Obj',
                'other_option2' => 'Source Code',
                'other_option3' => '.Exe',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'Java',
                'question' => 'Which of the tool is used to compile java code ?',
                'correct_option' => 'javac',
                'other_option1' => 'javadoc',
                'other_option2' => 'jar',
                'other_option3' => 'java',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'Java',
                'question' => 'Which of the following tool used to execute java code.?',
                'correct_option' => 'java',
                'other_option1' => 'javac',
                'other_option2' => 'javadoc',
                'other_option3' => 'rmic',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'Java',
                'question' => 'Which of the following is used to interpret and execute Java Applet Classes hosted by HTML.',
                'correct_option' => 'appletviewer',
                'other_option1' => 'appletscreen',
                'other_option2' => 'appletwatcher',
                'other_option3' => 'appletshow',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'Java',
                'question' => 'HTML based Java Documentary help can be accessed using ______________.',
                'correct_option' => 'javadoc',
                'other_option1' => 'javamanual',
                'other_option2' => 'none of these',
                'other_option3' => 'javahelp',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
            [
                'subject' => 'Java',
                'question' => 'jar stands for _____________.',
                'correct_option' => 'Java Archive',
                'other_option1' => 'Java Application Runner',
                'other_option2' => 'Java Archive Runner',
                'other_option3' => 'none of these',
                'answer_explanation' => 'Input some sense here please',
                'answer_diagram' => 'Not available',
            ],
        ]);
    }
}
?>