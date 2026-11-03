<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['categore_id','title','description','learn','content','trainer_id','time','image'];

    public function rat()
    {
        return $this->hasMany(Ratigs::class);
    }
    public  function categore()
    {
     return $this->belongsTo(Categore::class)   ;
    }

public function levels()
{
   return $this->hasMany(Level::class) ;
}
public function users()
{
  return $this->belongsToMany(User::class,'course_users')->withPivot('enrolled_at')->withTimestamps() ;
}
public  function  train()
{
   return $this->belongsTo(User::class,'trainer_id') ;
}

public  function progress()
{
   return $this->hasMany(progress::class) ;
}
}
