<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\WelcomeController::class);


Route::get('fakePost', function() {

    $validated = [
        'title' => 'Sample Germant Post Title',
        'content' => 'This is a sample body of the post for testing purposes.',
    ];

    Article::create($validated);

    return redirect('/');
});
