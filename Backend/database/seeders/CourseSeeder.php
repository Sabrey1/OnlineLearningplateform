<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Courses;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['title' => 'Laravel for Beginners', 'description' => 'Learn Laravel from scratch', 'price' => 50, 'teacher_id' => 2, 'category_id' => 1],
            ['title' => 'Vue.js Essentials', 'description' => 'Build dynamic front-end apps', 'price' => 40, 'teacher_id' => 2, 'category_id' => 1],
            ['title' => 'Graphic Design Basics', 'description' => 'Learn Photoshop and Illustrator', 'price' => 35, 'teacher_id' => 3, 'category_id' => 2],
            ['title' => 'Digital Marketing 101', 'description' => 'Learn SEO, Ads & Social Media', 'price' => 60, 'teacher_id' => 3, 'category_id' => 5],
            ['title' => 'Business Communication', 'description' => 'Improve your communication skills', 'price' => 30, 'teacher_id' => 2, 'category_id' => 3],
        ];

        foreach ($courses as $course) {
            Courses::create($course);
        }
    }
}
