<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'eng_title',
        'slug',
        'into_video',
        'price',
        'graduate_num',
        'class_hour',
        'total_lecture',
        'course_duration',
        'motivational_content',
        'course_opportunity',
        'course_requirements',
        'curriculumn_desc',
        'coupon_status',
        'course_status',
        'course_img'
    ];
    
}
