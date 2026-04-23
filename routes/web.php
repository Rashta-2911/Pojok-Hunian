<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/video-stream', function () {
    $path = public_path('videos/Fasilitas.mp4');
    if (!file_exists($path)) {
        abort(404);
    }
    return response()->file($path);
});




