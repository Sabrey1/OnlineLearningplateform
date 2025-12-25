<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'course_id',
        'title'
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
}
