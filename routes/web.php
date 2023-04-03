<?php

use App\Http\Livewire\Actions;
use App\Http\Livewire\Calculation;
use App\Http\Livewire\Comments;
use App\Http\Livewire\CrudForm;
use App\Http\Livewire\Form;
use App\Http\Livewire\Forms;
use App\Http\Livewire\Lifecycle;
use App\Http\Livewire\ParamComponent;
use App\Http\Livewire\Registration;
use App\Http\Livewire\SecondComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\ThirdComponent;

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
    return view('welcome');
});

Route::get('/showposts',  ShowPosts::class);
Route::get('/secondcomponent',  SecondComponent::class);
Route::get('/thirdcomponent', ThirdComponent::class );
Route::get('/paramcomponent/{param?}', ParamComponent::class);
Route::get('/register', Registration::class);
Route::get('/comments', Comments::class);
Route::get('/actions', Actions::class);
Route::get('/calculation', Calculation::class);
Route::get('/life-cycle', Lifecycle::class);
Route::get('/forms', Forms::class);
Route::get('/form', Form::class);
Route::get('/crud', CrudForm::class);