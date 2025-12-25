<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificates;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $certificates = [
            ['student_id'=>4,'course_id'=>1,'updated_at'=>now()],
            ['student_id'=>5,'course_id'=>1,'updated_at'=>now()],
        ];

        foreach ($certificates as $c) {
            Certificates::create($c);
        }
    }
}
