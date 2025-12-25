<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enrollments;

class EnrollmentSeeder extends Seeder
{
    public function run(): void
    {
        $enrollments = [
            ['student_id'=>4,'course_id'=>1],
            ['student_id'=>4,'course_id'=>2],
            ['student_id'=>5,'course_id'=>1],
            ['student_id'=>5,'course_id'=>3],
            ['student_id'=>5,'course_id'=>4],
        ];

        foreach ($enrollments as $enroll) {
            Enrollments::create($enroll);
        }
    }
}
