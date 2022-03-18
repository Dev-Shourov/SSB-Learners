<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bangla_name',
        'slug',
        'address_1',
        'address_2',
        'phone',
        'status'
    ];
}
