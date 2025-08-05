<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoryGenerator extends Model
{
    protected $fillable = [
        'title',
        'story',
        'category_id',
        'image',
        'image_url',
        'audio',
        'audio_url',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
