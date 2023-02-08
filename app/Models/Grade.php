<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'trimester',
        'subject',
        'exam',
        'year',
        'grade'
    ];

    public function user(){
        return $this->belongsTo(User::class);

    }
}