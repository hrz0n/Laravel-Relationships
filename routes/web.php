<?php

use App\Models\Posts;
use App\Models\User;
use App\Models\UserGroups;
use App\Models\UserSettings;
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
    return view('welcome');
});


Route::prefix('relationships')->group(function() {
    Route::get('one-to-one', function () {

        $users = User::all();

        $userSettings = UserSettings::all();

        return view('relationships.one-to-one', compact('users','userSettings'));

    });

    Route::get('one-to-many', function () {

        $posts = Posts::all();

        $users = User::all();

        return view('relationships.one-to-many', compact('posts', 'users'));

    });

    Route::get('many-to-many', function () {

        $users = User::all();
        $groups = UserGroups::all();

        return view('relationships.many-to-many', compact('users', 'groups'));


    });
});