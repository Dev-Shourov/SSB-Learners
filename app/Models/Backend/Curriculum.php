<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    Protected $fillable = [
        'curriculum_name',
        'one_en',
        'one_desc',
        'two_en',
        'two_desc',
        'three_en',
        'three_desc',
        'four_en',
        'four_desc',
        'five_en',
        'five_desc',
        'curriculum_status'
    ];

    Public function course(){
        return $this->belongsto(Course::class);
    }
}
