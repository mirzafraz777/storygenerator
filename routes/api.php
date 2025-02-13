<?php

use App\Http\Controllers\StoryGeneratorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('story')->name('story')->middleware(['throttle:60,1', 'api.key'])->group(function () {
    // Route::apiResource('/story', StoryGeneratorController::class);
    // Route::get('share/{id}', [StoryGeneratorController::class, 'sharePost'])->name('share');
    Route::get('all', [StoryGeneratorController::class, 'index'])->name('all');
    Route::get('single/{story}', [StoryGeneratorController::class, 'show'])->name('single');
    Route::post('add', [StoryGeneratorController::class, 'store'])->name('add');
    Route::post('update/{story}', [StoryGeneratorController::class, 'update'])->name('update');
    Route::delete('delete/{story}', [StoryGeneratorController::class, 'destroy'])->name('delete');
});
