<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Progress;

class ProgressSeeder extends Seeder
{
    public function run(): void
    {
        $progress = [
            ['student_id'=>4,'lesson_id'=>1,'is_completed'=>true,'updated_at'=>now()],
            ['student_id'=>4,'lesson_id'=>2,'is_completed'=>false],
            ['student_id'=>5,'lesson_id'=>1,'is_completed'=>true,'updated_at'=>now()],
        ];

        foreach ($progress as $p) {
            Progress::create($p);
        }
    }
}
