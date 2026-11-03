<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categore extends Model
{
    protected $fillable=['name'];
    public function course()
    {
       return $this->hasOne(Course::class) ;
    }
}
