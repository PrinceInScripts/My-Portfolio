<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class, 'home'])->name('home');
Route::get('/about',[PageController::class, 'about'])->name('about');
Route::get('/contact',[PageController::class, 'contact'])->name('contact');
Route::get('/projects',[PageController::class, 'projects'])->name('projects');
Route::get('/404',[PageController::class, 'notFound'])->name('404');
Route::get('/project-details/{id}',[PageController::class, 'projectDetails'])->name('project.details');