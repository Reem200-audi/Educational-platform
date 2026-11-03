<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vidio extends Model
{
    protected $fillable=['vidio','level_id','title'];

    public function level()
    {
     return $this->belongsTo(Level::class)  ;
    }



}
