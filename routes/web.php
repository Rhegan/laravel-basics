<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting'  => 'Hello',
    'person'    => request('person', 'world')
]);

// Same same as above
// Route::get('/', function () {
//     return view('welcome', [
//         'greeting'  => 'Hello',
//         'person'    => request('person', 'world')
//     ]);
// })

Route::view('/tasks', 'task', [
    'tasks' => [
        'Go to the market',
        'Walk the dog',
        'Watch a video tutorial',
    ],
]);
Route::view('/about', 'about');
Route::view('/contact', 'contact');