<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lessons;

class LessonSeeder extends Seeder
{
    public function run(): void
    {
        $lessons = [
            ['course_id'=>1,'title'=>'Introduction to Laravel','video_url'=>'https://youtu.be/laravel1','content'=>'Laravel basics','lesson_order'=>1],
            ['course_id'=>1,'title'=>'Routing & Controllers','video_url'=>'https://youtu.be/laravel2','content'=>'Routing and controllers','lesson_order'=>2],
            ['course_id'=>2,'title'=>'Vue Setup','video_url'=>'https://youtu.be/vue1','content'=>'Install Vue','lesson_order'=>1],
            ['course_id'=>3,'title'=>'Photoshop Basics','video_url'=>'https://youtu.be/design1','content'=>'Layers and tools','lesson_order'=>1],
            ['course_id'=>4,'title'=>'SEO Fundamentals','video_url'=>'https://youtu.be/marketing1','content'=>'SEO basics','lesson_order'=>1],
        ];

        foreach ($lessons as $lesson) {
            Lessons::create($lesson);
        }
    }
}
