<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['exam_id', 'group_id', 'question_type', 'question_title', 'question_content', 'correction_mode', 'weight'];
}
