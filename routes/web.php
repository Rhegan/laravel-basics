<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('ideas', []);

    return view('ideas')->with('ideas', $ideas);
});

Route::post('/ideas', function () {
    $idea = request()->idea;
    session()->push('ideas', $idea);

    return redirect('/');
});

Route::get('/delete-ideas', function () {
    session()->remove('ideas');

    return redirect('/');
});