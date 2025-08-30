<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


        $projects = DB::table('projects')->where('status', 1)->orderBy('sort', 'asc')->get();

        $filters = ['All', 'MERN', 'Laravel', 'DSA', 'App', 'Game'];

        $testimonials=DB::table('testimonials')->where('status',1)->orderBy('sort','asc')->get();


        // return $projects1;

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


  

    public function projects()
    {
        $projects = DB::table('projects')->where('status', 1)->orderBy('sort', 'asc')->get();
        $filters = ['All', 'MERN', 'Laravel', 'DSA', 'App', 'Game'];
        return view('projects', compact('projects', 'filters'));
    }

    public function notFound()
    {
        return view('404');
    }

   public function projectDetails($id)
{
    // Fetch single project instead of get()->first()
    $project = DB::table('projects')
        ->where('slug', $id)
        ->where('status', 1)
        ->orderBy('sort', 'asc')
        ->first();

    if ($project) {
        $repoPath = "https://api.github.com/repos/PrinceInScripts/{$project->repo_name}";

        try {
            // GitHub requires User-Agent header
            $response = Http::withHeaders([
                'User-Agent' => 'Laravel-App',
                'Accept' => 'application/vnd.github.v3+json',
            ])->get($repoPath);

            if ($response->successful()) {
                $repoData = $response->json();

                $project->github = [
                    'name'        => $repoData['name'] ?? 'N/A',
                    'stars'       => $repoData['stargazers_count'] ?? 0,
                    'forks'       => $repoData['forks_count'] ?? 0,
                    'watchers'    => $repoData['watchers_count'] ?? 0,
                    'open_issues' => $repoData['open_issues_count'] ?? 0,
                    'language'    => $repoData['language'] ?? 'N/A',
                    'updated_at'  => $repoData['pushed_at'] ?? null,
                ];
            } else {
                // If GitHub API fails, set default
                $project->github = [
                    'name'        => $project->repo_name,
                    'stars'       => 0,
                    'forks'       => 0,
                    'watchers'    => 0,
                    'open_issues' => 0,
                    'language'    => 'N/A',
                    'updated_at'  => null,
                ];
            }
        } catch (\Exception $e) {
            // Handle exception (network issue, invalid repo, etc.)
            $project->github = [
                'name'        => $project->repo_name,
                'stars'       => 0,
                'forks'       => 0,
                'watchers'    => 0,
                'open_issues' => 0,
                'language'    => 'N/A',
                'updated_at'  => null,
            ];
        }
    }

    // return $project;

    return view('project-details', compact('project'));
}

      public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
            'contact' => 'required|string|max:20',
            'reason' => 'required|string|max:100',
        ]);



       DB::table('contact')->insert([
           'name' => $validated['name'],
           'email' => $validated['email'],
           'message' => $validated['message'],
           'mobile' => $validated['contact'],
           'reason' => $validated['reason'],
       ]);

      

       return response()->json(['success' => true, 'message' => 'Your message has been sent successfully!']);
    }

    public function myResume()
    {
        $resume_link="assets/images/resume.pdf";
        return view('my-resume', compact('resume_link'));
    }
}
