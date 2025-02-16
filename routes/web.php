<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/cache-clear', function () {
    Artisan::call('optimize:clear');
    return "Cache is cleared";
});

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return "Storage link is created.";
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return "Migration is completed.";
});

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/encrypt', function (Request $request) {

//     $token = Crypt::encryptString($request->token);
//     echo $token;
// });


// Route::get('/decrypt', function () {
//     $token = "eyJpdiI6IjVkYXNrYWlSZGRqUEEvWmtJSWhxQ1E9PSIsInZhbHVlIjoiVEpZbWxDQU5nWGlMQnk3c2ZvSVZIdz09IiwibWFjIjoiZmUyZTZhZGMxYmZlZjNkOTA1Y2QwOTczNGQyYWI5NTU2NmRjM2E0ODVjYjQ1YTE4MmI2ZjM3Y2EzYWM3MmI4OSIsInRhZyI6IiJ9";
//     $value = Crypt::decryptString($token);
//     echo $value;
// });
