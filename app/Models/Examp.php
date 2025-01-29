<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examp extends Model
{
    protected $table = 'exams';
    protected $fillable = ['exam_name', 'package_name'];
}
