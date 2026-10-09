<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = Idea::query()
    ->when(request('state'), function ($query, $state) {
        $query->where('state', $state);
    })
    ->get();

    return view('ideas')->with('ideas', $ideas);
});

Route::post('/ideas', function () {
    Idea::create([
        'description'    => request()->idea,
        'state'         => 'pending'
    ]);

    return redirect('/');
});

Route::get('/delete-ideas', function () {
    session()->remove('ideas');

    return redirect('/');
});