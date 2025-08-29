<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function home()
    {
        $main_lang = [
            [
                'name' => 'C',
                'image' => 'c.png'
            ],
            [
                'name' => 'C++',
                'image' => 'cpp.png'
            ],
            [
                'name' => 'Express',
                'image' => 'express.png'
            ],
            [
                'name' => 'Java',
                'image' => 'java.png'
            ],
            [
                'name' => 'js',
                'image' => 'js.png'
            ],
            [
                'name' => 'Laravel',
                'image' => 'laravel.png'
            ],
            [
                'name' => 'PHP',
                'image' => 'php.png'
            ],
            [
                'name' => 'Python',
                'image' => 'python.png'
            ],
            [
                'name' => 'React',
                'image' => 'react.png'
            ],
            [
                'name' => 'Node Js',
                'image' => 'nodejs.png'
            ],

        ];

        $main_lang2 = [
            ['name' => 'Ajax',       'image' => 'ajax.png'],
            ['name' => 'Bootstrap',  'image' => 'bootstrap.png'],
            ['name' => 'CSS',        'image' => 'css.png'],
            ['name' => 'Git',        'image' => 'git.png'],
            ['name' => 'GitHub',     'image' => 'github.png'],
            ['name' => 'HTML',       'image' => 'html.png'],
            ['name' => 'jQuery',     'image' => 'jquery.png'],
            ['name' => 'JSON',       'image' => 'json.png'],
            ['name' => 'Linux',      'image' => 'linux.jpeg'],
            ['name' => 'MongoDB',    'image' => 'mongodb.png'],
            ['name' => 'MySQL',      'image' => 'mysql.png'],
            ['name' => 'Postman',    'image' => 'postman.png'],
            ['name' => 'Redux',      'image' => 'redux.png'],
            ['name' => 'Tailwind',   'image' => 'tailwind.png'],
            ['name' => 'Vite',       'image' => 'vite.jpeg'],
            ['name' => 'XAMPP',      'image' => 'xampp.png'],
        ];

        $projects = [
            [
                'title' => 'Sorting Visualizer',
                'slug' => 'sorting-visualizer',
                'info' => 'A React + Redux project for visualizing sorting algorithms project for visualizing sorting algorithms project for visualizing sorting algorithms project for visualizing sorting algorithms.',
                'stack' => ['React', 'Redux', 'DSA'],
                'category' => 'DSA',
                'status' => 'done',
                'banner' => 'images/projects/sorting-visualizer.png',
                'link' => 'https://github.com/yourusername/sorting-visualizer',
            ],
            [
                'title' => 'E-commerce Website',
                'slug' => 'e-commerce-website',
                'info' => 'A PHP + Laravel based e-commerce application  based e-commerce application  based e-commerce application  based e-commerce application  based e-commerce application.',
                'stack' => ['Laravel', 'MySQL', 'PHP'],
                'category' => 'Laravel',
                'status' => 'processing',
                'banner' => 'images/projects/ecommerce.png',
                'link' => 'https://github.com/yourusername/ecommerce-website',
            ],
            [
                'title' => 'Blog App',
                'slug' => 'blog-app',
                'info' => 'A MERN stack blog app with authentication blog app with authentication blog app with authentication blog app with authentication blog app with authentication.',
                'stack' => ['MongoDB', 'Express', 'React', 'Node.js'],
                'category' => 'MERN',
                'status' => 'started',
                'banner' => 'images/projects/blog.png',
                'link' => 'https://github.com/yourusername/blog-app',
            ],
            [
                'title' => 'Sudoku Solver',
                'slug' => 'sudoku-solver',
                'info' => 'A real-time Sudoku solver built with React & Vite. It allows users to input their Sudoku puzzles and provides step-by-step solutions.',
                'stack' => ['React', 'Vite', 'Game'],
                'category' => 'Game',
                'status' => 'done',
                'banner' => 'images/projects/sudoku.png',
                'link' => 'https://github.com/yourusername/sudoku-solver',
            ]
        ];

        $filters = ['All', 'MERN', 'Laravel', 'DSA', 'App', 'Game'];


        $testimonials = [
            [
                'name' => 'John Doe',
                'role' => 'Software Engineer',
                'photo' => 'images/testimonials/john_doe.jpg',
                'feedback' => 'This is an amazing portfolio! The projects showcased here are impressive and demonstrate a strong skill set.'
            ],
            [
                'name' => 'Jane Smith',
                'role' => 'Project Manager',
                'photo' => 'images/testimonials/jane_smith.jpg',
                'feedback' => 'I had the pleasure of working with this developer, and I can attest to their professionalism and expertise.'
            ],
            [
                'name' => 'Alice Johnson',
                'role' => 'UX Designer',
                'photo' => 'images/testimonials/alice_johnson.jpg',
                'feedback' => 'The attention to detail in the design and functionality of the projects is outstanding. Highly recommended!'
            ]
        ];

        return view('home', compact('main_lang', 'main_lang2', 'projects', 'filters', 'testimonials'));
    }

public function about()
{
    $main_lang = [
        ['name' => 'C', 'image' => 'c.png'],
        ['name' => 'C++', 'image' => 'cpp.png'],
        ['name' => 'Express', 'image' => 'express.png'],
        ['name' => 'Java', 'image' => 'java.png'],
        ['name' => 'js', 'image' => 'js.png'],
        ['name' => 'Laravel', 'image' => 'laravel.png'],
        ['name' => 'PHP', 'image' => 'php.png'],
        ['name' => 'Python', 'image' => 'python.png'],
        ['name' => 'React', 'image' => 'react.png'],
        ['name' => 'Node Js', 'image' => 'nodejs.png'],
    ];

    $main_lang2 = [
        ['name' => 'Ajax', 'image' => 'ajax.png'],
        ['name' => 'Bootstrap', 'image' => 'bootstrap.png'],
        ['name' => 'CSS', 'image' => 'css.png'],
        ['name' => 'Git', 'image' => 'git.png'],
        ['name' => 'GitHub', 'image' => 'github.png'],
        ['name' => 'HTML', 'image' => 'html.png'],
        ['name' => 'jQuery', 'image' => 'jquery.png'],
        ['name' => 'JSON', 'image' => 'json.png'],
        ['name' => 'Linux', 'image' => 'linux.jpeg'],
        ['name' => 'MongoDB', 'image' => 'mongodb.png'],
        ['name' => 'MySQL', 'image' => 'mysql.png'],
        ['name' => 'Postman', 'image' => 'postman.png'],
        ['name' => 'Redux', 'image' => 'redux.png'],
        ['name' => 'Tailwind', 'image' => 'tailwind.png'],
        ['name' => 'Vite', 'image' => 'vite.jpeg'],
        ['name' => 'XAMPP', 'image' => 'xampp.png'],
    ];

    $username = "PrinceInScripts";

    // APIs
    $github_user_api     = "https://api.github.com/users/$username";
    $github_repos_api    = "https://api.github.com/users/$username/repos?per_page=100"; 
    $leetcode_api        = "https://leetcode-stats-api.herokuapp.com/$username";

    // Fetch user profile
    $github = Http::withHeaders([
        'User-Agent' => 'Laravel-App'
    ])->get($github_user_api)->json();

    // Fetch repos (for stars, forks, languages)
    $repos = Http::withHeaders([
        'User-Agent' => 'Laravel-App'
    ])->get($github_repos_api)->json();

    // Calculate stars & forks
    $totalStars = collect($repos)->sum('stargazers_count');
    $totalForks = collect($repos)->sum('forks_count');


    // Most used languages (aggregate from repos)
    $languages = [];
    foreach ($repos as $repo) {
        $lang = $repo['language'] ?? null;
        if ($lang) {
            if (!isset($languages[$lang])) {
                $languages[$lang] = 0;
            }
            $languages[$lang] += 1;
        }
    }
    arsort($languages); // sort by most used

    // Leetcode stats
    $leetcode = Http::get($leetcode_api)->json();

    return view('about', compact(
        'main_lang',
        'main_lang2',
        'github',
        'leetcode',
        'totalStars',
        'totalForks',
        'languages'
    ));
}


    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {



        $projects = [
            [
                'title' => 'Sorting Visualizer',
                'slug' => 'sorting-visualizer',
                'info' => 'A React + Redux project for visualizing sorting algorithms project for visualizing sorting algorithms project for visualizing sorting algorithms project for visualizing sorting algorithms.',
                'stack' => ['React', 'Redux', 'DSA'],
                'category' => 'DSA',
                'status' => 'done',
                'banner' => 'images/projects/sorting-visualizer.png',
                'link' => 'https://github.com/yourusername/sorting-visualizer',
            ],
            [
                'title' => 'E-commerce Website',
                'slug' => 'e-commerce-website',
                'info' => 'A PHP + Laravel based e-commerce application  based e-commerce application  based e-commerce application  based e-commerce application  based e-commerce application.',
                'stack' => ['Laravel', 'MySQL', 'PHP'],
                'category' => 'Laravel',
                'status' => 'processing',
                'banner' => 'images/projects/ecommerce.png',
                'link' => 'https://github.com/yourusername/ecommerce-website',
            ],
            [
                'title' => 'Blog App',
                'slug' => 'blog-app',
                'info' => 'A MERN stack blog app with authentication blog app with authentication blog app with authentication blog app with authentication blog app with authentication.',
                'stack' => ['MongoDB', 'Express', 'React', 'Node.js'],
                'category' => 'MERN',
                'status' => 'started',
                'banner' => 'images/projects/blog.png',
                'link' => 'https://github.com/yourusername/blog-app',
            ],
            [
                'title' => 'Sudoku Solver',
                'slug' => 'sudoku-solver',
                'info' => 'A real-time Sudoku solver built with React & Vite. It allows users to input their Sudoku puzzles and provides step-by-step solutions.',
                'stack' => ['React', 'Vite', 'Game'],
                'category' => 'Game',
                'status' => 'done',
                'banner' => 'images/projects/sudoku.png',
                'link' => 'https://github.com/yourusername/sudoku-solver',
            ]
        ];

        $filters = ['All', 'MERN', 'Laravel', 'DSA', 'App', 'Game'];
        return view('projects', compact('projects', 'filters'));
    }

    public function notFound()
    {
        return view('404');
    }

    public function projectDetails($id)
    {
        // id== title for now 
        $projects = [
            [
                'title' => 'Sorting Visualizer',
                'slug' => 'sorting-visualizer',
                'repo_name' => 'Sorting-Visualizer',
                'info' => 'A React + Redux project for visualizing sorting algorithms project for visualizing sorting algorithms project for visualizing sorting algorithms project for visualizing sorting algorithms.',
                'stack' => ['React', 'Redux', 'DSA'],
                'category' => 'DSA',
                'status' => 'done',
                'banner' => 'images/projects/sorting-visualizer.png',
                'link' => 'https://github.com/yourusername/sorting-visualizer',
            ],
            [
                'title' => 'E-commerce Website',
                'slug' => 'e-commerce-website',
                'info' => 'A PHP + Laravel based e-commerce application  based e-commerce application  based e-commerce application  based e-commerce application  based e-commerce application.',
                'stack' => ['Laravel', 'MySQL', 'PHP'],
                'category' => 'Laravel',
                'status' => 'processing',
                'banner' => 'images/projects/ecommerce.png',
                'link' => 'https://github.com/yourusername/ecommerce-website',
            ],
            [
                'title' => 'Blog App',
                'slug' => 'blog-app',
                'info' => 'A MERN stack blog app with authentication blog app with authentication blog app with authentication blog app with authentication blog app with authentication.',
                'stack' => ['MongoDB', 'Express', 'React', 'Node.js'],
                'category' => 'MERN',
                'status' => 'started',
                'banner' => 'images/projects/blog.png',
                'link' => 'https://github.com/yourusername/blog-app',
            ],
            [
                'title' => 'Sudoku Solver',
                'slug' => 'sudoku-solver',
                'info' => 'A real-time Sudoku solver built with React & Vite. It allows users to input their Sudoku puzzles and provides step-by-step solutions.',
                'stack' => ['React', 'Vite', 'Game'],
                'category' => 'Game',
                'status' => 'done',
                'banner' => 'images/projects/sudoku.png',
                'link' => 'https://github.com/yourusername/sudoku-solver',
            ]
        ];

        // filter from $projects
        $project = collect($projects)->firstWhere('slug', $id);

        $repoPath = '';
        if ($project) {
            $repoPath = "https://api.github.com/repos/PrinceInScripts/{$project['repo_name']}";

            $response = Http::get($repoPath);

            if ($response->successful()) {
                $repoData = $response->json();

                $project['github'] = [
                    'name' => $repoData['name'] ?? 'N/A',
                    'stars' => $repoData['stargazers_count'] ?? 0,
                    'forks' => $repoData['forks_count'] ?? 0,
                    'watchers' => $repoData['watchers_count'] ?? 0,
                    'open_issues' => $repoData['open_issues_count'] ?? 0,
                    'language' => $repoData['language'] ?? 'N/A',
                    'updated_at' => $repoData['pushed_at'] ?? null,
                ];
            }
        }

        return view('project-details', compact('project'));
    }
}
