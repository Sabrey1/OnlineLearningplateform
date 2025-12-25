<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        $payments = [
            ['student_id'=>4,'course_id'=>1,'amount'=>50,'status'=>'paid'],
            ['student_id'=>4,'course_id'=>2,'amount'=>40,'status'=>'paid'],
            ['student_id'=>5,'course_id'=>1,'amount'=>50,'status'=>'paid'],
            ['student_id'=>5,'course_id'=>3,'amount'=>35,'status'=>'pending'],
            ['student_id'=>5,'course_id'=>4,'amount'=>60,'status'=>'paid'],
        ];

        foreach ($payments as $p) {
            Payment::create($p);
        }
    }
}
