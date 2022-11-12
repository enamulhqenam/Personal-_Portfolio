<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table ='About';

    protected $fillable = [
        'AboutMe',
        'Title',
        'Description',
        'Photo',
        'Birthday',
        'Degree',
        'Phone',
        'Email',
        'City',
        'Website',
        'Freelance'
    ];
}
