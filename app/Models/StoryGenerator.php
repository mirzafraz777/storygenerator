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
        'audio'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
