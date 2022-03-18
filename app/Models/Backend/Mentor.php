<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'designation',
        'slug',
        'description',
        'phone',
        'email',
        'address',
        'fiverr_url',
        'upwork_url',
        'facebook_url',
        'fiverr_img',
        'upwork_img',
        'profile_img',
        'status'
    ];
}
