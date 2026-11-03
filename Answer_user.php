<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer_user extends Model
{
    protected $fillable=['user_id','question_id','slected_answer_id'];
    public  function user()
    {
return $this->belongsTo(User::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function option()
    {
     return $this->belongsTo(Option::class)  ;
    }
}
