<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table = 'schedule';

    protected $fillable = [
        'day', 'lesson', 'people', 'teacher', 'location', 'homework'
    ];

}
