<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        return view('projects');
    }

    public function notFound()
    {
        return view('404');
    }

    public function projectDetails($id)
    {
        return view('project-details', compact('id'));
    }
}
