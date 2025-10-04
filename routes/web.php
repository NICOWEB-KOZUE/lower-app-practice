<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/lower/{word}', function ($word) {
    $lower = strtolower($word);
    return view('lower', [
        'original' => $word,
        'lower' => $lower,
    ]);
});

Volt::route('/lower/{word}', 'lower');
