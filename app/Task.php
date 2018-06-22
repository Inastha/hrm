<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'name', 
        'company_id',
        'user_id',
        'days',
        'hours',
        'project_id'
    ];
}
