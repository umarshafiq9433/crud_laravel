<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'roll_no',
        'program_id'
    ];

    public function program(){
        return $this->belongsTo('App\Models\Program');
    }
}
