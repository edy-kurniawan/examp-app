<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionGroup extends Model
{
    protected $table = 'question_groups';
    protected $fillable = ['group_name', 'group_description'];
}
