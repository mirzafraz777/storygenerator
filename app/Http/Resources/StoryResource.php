<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'story' => $this->story,
            'category' => $this->category,
            'image'   => $this->image ? asset('storage/' . $this->image) : "",
            'audio' => $this->audio ? asset('storage/' . $this->audio) : "",
            'created_at' => $this->created_at->toDateTimeString()
        ];
    }
}
