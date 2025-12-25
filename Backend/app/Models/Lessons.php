<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    protected $fillabel = [
        'course_id',
        'title',
        'video_url',
        'content',
        'lesson_order',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
    
}
