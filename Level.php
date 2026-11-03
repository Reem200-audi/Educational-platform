<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable=['name','description','course_id','level_order','duration'];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function vidio()
    {
        return $this->hasMany(Vidio::class);
    }
    public function question()
    {
       return $this->hasMany(Question::class) ;
    }
    public function progress()
    {
        return $this->hasMany(progress::class);
    }
}
