<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\QuizQuestion;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        $quiz1 = Quiz::create(['course_id'=>1,'title'=>'Laravel Basics Quiz']);
        QuizQuestion::create([
            'quiz_id'=>$quiz1->id,
            'question'=>'What is Laravel?',
            'option_a'=>'PHP Framework',
            'option_b'=>'JS Library',
            'option_c'=>'Database',
            'option_d'=>'Server',
            'correct_option'=>'A'
        ]);

        $quiz2 = Quiz::create(['course_id'=>2,'title'=>'Vue Basics Quiz']);
        QuizQuestion::create([
            'quiz_id'=>$quiz2->id,
            'question'=>'Vue.js is used for?',
            'option_a'=>'Backend',
            'option_b'=>'Frontend',
            'option_c'=>'Database',
            'option_d'=>'Server',
            'correct_option'=>'B'
        ]);
    }
}
