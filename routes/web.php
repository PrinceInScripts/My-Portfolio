<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// ─── Public Routes ────────────────────────────────────────────────────────────
Route::get('/',                      [PageController::class, 'home'])->name('home');
Route::get('/about',                 [PageController::class, 'about'])->name('about');
Route::get('/projects',              [PageController::class, 'projects'])->name('projects');
Route::get('/project-details/{id}',  [PageController::class, 'projectDetails'])->name('project.details');
Route::get('/contact',               [PageController::class, 'contact'])->name('contact');
Route::post('/contact',              [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/my-resume',             [PageController::class, 'myResume'])->name('my.resume');
Route::get('/404',                   [PageController::class, 'notFound'])->name('404');

// ─── Admin Routes ─────────────────────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->group(function () {

    // Auth
    Route::get('/login',  [AdminController::class, 'loginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'loginPost'])->name('login.post');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/',           [AdminController::class, 'dashboard'])->name('dashboard');

    // Projects CRUD
    Route::get('/projects',              [AdminController::class, 'projects'])->name('projects');
    Route::post('/projects',             [AdminController::class, 'storeProject'])->name('project.store');
    Route::put('/projects/{id}',         [AdminController::class, 'updateProject'])->name('project.update');
    Route::patch('/projects/{id}/toggle',[AdminController::class, 'toggleProject'])->name('project.toggle');
    Route::delete('/projects/{id}',      [AdminController::class, 'deleteProject'])->name('project.delete');

    // Contacts
    Route::get('/contacts',            [AdminController::class, 'contacts'])->name('contacts');
    Route::delete('/contacts/{id}',    [AdminController::class, 'deleteContact'])->name('contact.delete');
});

// ─── SEO ─────────────────────────────────────────────────────────────────────
Route::get('/robots.txt', function () {
    $content = "User-agent: *\nAllow: /\nDisallow: /admin/\n\nSitemap: " . url('/sitemap.xml');
    return response($content, 200)->header('Content-Type', 'text/plain');
});

Route::get('/sitemap.xml', function () {
    $projects = \Illuminate\Support\Facades\DB::table('projects')->where('status', 1)->get();
    $xml = view('sitemap', compact('projects'));
    return response($xml, 200)->header('Content-Type', 'application/xml');
});
