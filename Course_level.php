<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course_level extends Model
{
    protected $fillable=['course_id','level_id','description','level_order'];
}
