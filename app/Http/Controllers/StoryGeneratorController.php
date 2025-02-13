<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use App\Models\StoryGenerator;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoryRequest;
use App\Http\Resources\StoryResource;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class StoryGeneratorController extends Controller
{
    use HttpResponses;

    public function index(): JsonResponse
    {
        $stories = Cache::remember('stories', 60, function () {
            return StoryGenerator::latest()->paginate(10);
        });
        return $this->success(StoryResource::collection($stories)->response()->getData(true), 'Stories Details Fetched Successfully.', 200);
    }

    public function store(StoryRequest $request): JsonResponse
    {

        $validatedData = $request->validated();


        // Handle Image Upload
        if ($request->hasFile('image')) {
            $validatedData['image'] = Storage::disk('public')->put('stories/images', $request->file('image')); // Saves in storage/app/public/stories/images
        }
        // Handle Audio Upload
        if ($request->hasFile('audio')) {
            $validatedData['audio'] = Storage::disk('public')->put('stories/audios', $request->file('audio')); // Saves in storage/app/public/stories/audios
        }



        $story = StoryGenerator::create($validatedData);
        // Clear cache when a new post is added
        Cache::forget('stories');

        return response()->json(new StoryResource($story), 201);
    }

    public function show($id): JsonResponse
    {
        $story = StoryGenerator::find($id);
        if (! $story) {
            return $this->error(json_decode('{}'), 'No Story Found.', 404);
        }
        return $this->success(new StoryResource(Cache::remember("story_{$story->id}", 60, function () use ($story) {
            return $story;
        })), 'Story Details Fetched Successfully.', 200);
    }

    public function update(StoryRequest $request, $id): JsonResponse
    {

        $validatedData = $request->validated();


        $story = StoryGenerator::find($id);
        if (! $story) {
            return $this->error(json_decode('{}'), 'No Story Found.', 404);
        }

        // Delete Old Image If New Image is Uploaded
        if ($request->hasFile('image')) {
            if ($story->image) {
                Storage::disk('public')->delete($story->image);
            }
            $validatedData['image'] = Storage::disk('public')->put('stories/images', $request->file('image'));
        }
        // Delete Old Audio If New Audio file is Uploaded
        if ($request->hasFile('audio')) {
            if ($story->audio) {
                Storage::disk('public')->delete($story->audio);
            }
            $validatedData['audio'] = Storage::disk('public')->put('stories/audios', $request->file('audio'));
        }

        $story->update($validatedData);

        // Clear cache for updated post
        Cache::forget("story_{$story->id}");
        Cache::forget('stories');

        return $this->success(new StoryResource($story), 'Story Details Updated Successfully.', 200);
    }

    public function destroy($id): JsonResponse
    {
        $story = StoryGenerator::find($id);
        if (! $story) {
            return $this->error(json_decode('{}'), 'No Story Found.', 404);
        }

        // Delete Old Image and Audio
        if (isset($story->image) && !empty($story->image)) {
            Storage::disk('public')->delete($story->image);
        }
        if (isset($story->audio) && !empty($story->audio)) {
            Storage::disk('public')->delete($story->audio);
        }
        $story->delete();
        // Clear cache for updated post
        Cache::forget("story_{$story->id}");
        Cache::forget('stories');

        return $this->success('', 'Story Deleted Successfully.', 200);
    }
}
