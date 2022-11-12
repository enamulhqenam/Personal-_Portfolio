<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;

    protected $table ='Testimonials';

    protected $fillable = [
        'Names',
        'Designation',
        'Testimony',
        'Picture',
    ];
}
