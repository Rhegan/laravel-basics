<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

// index
Route::get('/ideas', function () {
    $ideas = Idea::all();

    return view('ideas.index')->with('ideas', $ideas);
});

// create
Route::get('/ideas/create', function () {
    return view('ideas.create');
});

// store
Route::post('/ideas', function () {
    Idea::create([
        'description'    => request()->description,
        'state'         => 'pending'
    ]);

    return redirect('/ideas');
});

// show
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show')->with('idea', $idea);
});

// edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit')->with('idea', $idea);
});

// update
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description'   => request('description')
    ]);

    return redirect("/ideas/{$idea->id}");
});

// destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});