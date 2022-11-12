<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    use HasFactory;

    protected $table = 'Facts';

    protected $fillable =[
        'Icon',
        'HappyClients',
        'Project',
        'HoursOfSupport',
        'HardWorkers',
        'Description',
    ];
}
