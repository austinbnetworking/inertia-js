<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return inertia('Home', ['name' => 'Austin Brown']); // is identical to...
    return Inertia::render('Home', [
        'name' => 'Austin Brown',
        'frameworks' => [
            'Laravel', 'Vue', 'Inertia'
        ]
    ]);
});

Route::get('/welcome', function () {
    return Inertia::render('Welcome', ['name' => 'Austin Brown']);
});

Route::get('/welcome-non-script', function () {
    // This example uses a non-script Vue JS setup
    // Purpose: Show how the SFC (single-file component) could be accomplished with a non-script setup
    return Inertia::render('WelcomeNonScript', ['name' => 'Austin Brown']);
});

Route::get('/users', function () {
    return Inertia::render('Users');
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    // Example post request using Inertia - See `resources/js/Shared/Nav.vue` Logout link
    dd('Example post requst to log out triggered...');
});
