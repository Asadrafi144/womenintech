<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ProfileController;

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

Route::get('/edit/{id}', [ProfileController::class, 'edit']);
Route::get('/profilecheck/{id}', [ProfileController::class, 'profilecheck']);

Route::get('/', function () {
    return view('welcome');
    
});


Route::get('/makeevent', function () {
    return view('adminevent');
    
});

Route::get('/survey', [SurveyController::class, 'index']); 

Route::get('/home', function () {
    return redirect('home');
});

Route::post('/contactus', [ProfileController::class, 'contactus']);
Route::post('/survey', [SurveyController::class, 'savesurvey']);
Route::get('/viewsurvey', [SurveyController::class, 'viewsurvey']);
Route::post('/profile', [ProfileController::class, 'saveprofile']);
Route::post('/profileupdate/{id}', [ProfileController::class, 'profileupdate']);
Route::post('/remove/{id}', [ProfileController::class, 'remove']);
Route::post('/addevent', [ProfileController::class, 'addevent']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/viewprofile', [ProfileController::class, 'viewprofile']);



Route::get('/events', [ProfileController::class, 'events']);
Route::get('/sortbyasc', [ProfileController::class, 'sortbyasc']);
Route::get('/sortbydesc', [ProfileController::class, 'sortbydesc']);




Route::get('/aboutus', function () {
    return view('aboutus');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contactus', function () {
    return view('contactus');
});