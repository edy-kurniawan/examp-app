<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = ['question_id', 'label', 'answer_text', 'is_correct', 'weight'];
}
