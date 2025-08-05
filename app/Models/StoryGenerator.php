<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryGenerator extends Model
{
    protected $fillable = [
        'title',
        'story',
        'category',
        'image',
        'image_url',
        'audio',
        'audio_url',
    ];
}
