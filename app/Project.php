<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected $fillable = [
        'slug',
        'category',
        'title',
        'content',
        'video',
        'image',
        'status'
    ];
}