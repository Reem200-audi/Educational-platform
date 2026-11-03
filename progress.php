<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class progress extends Model
{
    protected $fillable=['user_id','level_id','course_id',
    'status'];
    public function course()
    {
return $this->belongsTo(Course::class);

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

}
