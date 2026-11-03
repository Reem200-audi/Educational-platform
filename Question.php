<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['level_id','text'];


    public function Option()
    {
        return $this->hasMany(Option::class);
    }
public function level()
{
 return $this->belongsTo(Level::class)   ;
}
}
