<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = [
         [
            'title' => 'Personal Portfolio Website',
            'description' => 'A responsive site built with Laravel and Bootstrap.',
            'image' => 'images/project1.png',
            'url' => 'https://myportfolio.com'
        ],
        [
            'title' => 'Sudoku Solver Web App',
            'description' => 'A real-time Sudoku solving app using React, Vite, and Tailwind CSS.',
            'image' => 'images/project2.png',
            'url' => '#'
        ],
        [
            'title' => 'File Sharing Platform',
            'description' => 'A PHP-based app to upload, generate shareable links, and download files securely.',
            'image' => 'images/project3.png',
            'url' => '#'
        ],
        [
            'title' => 'Full-Stack Authentication System',
            'description' => 'JWT-powered auth system with protected routes, built using Node.js, MongoDB, and React.',
            'image' => 'images/project4.png',
            'url' => '#'
        ],
      
    ];

    return view('welcome', compact('projects'));
});