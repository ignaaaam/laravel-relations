<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = \App\Models\User::first();

    $post = $user->posts()->create([
        'title' => 'foobar',
        'body' => 'lorem ipsum'
    ]);

    $post->tags()->attach(1);

    return view('welcome');
});
