<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['question', 'question_group_id', 'question_type', 'question_options', 'correct_answer', 'weight'];
}
