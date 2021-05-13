<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function answers(){
        return $this->hasMany(QuizAnswer::class);
    }
}
