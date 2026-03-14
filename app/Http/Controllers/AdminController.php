<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // ─── Credentials (change these in production via .env) ───────────────────
    private function credentials(): array
    {
        return [
            'username' => env('ADMIN_USERNAME', 'admin'),
            'password' => env('ADMIN_PASSWORD', 'scriptxprince@admin'),
        ];
    }

    private function guard(): void
    {
        if (!session('admin_logged_in')) {
            abort(redirect()->route('admin.login'));
        }
    }

    // ─── Auth ─────────────────────────────────────────────────────────────────

    public function loginForm()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function loginPost(Request $request)
    {
        // return $request;
        $creds = $this->credentials();
       

        if (
            $request->input('username') === $creds['username'] &&
            $request->input('password') === $creds['password']
        ) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Invalid credentials. Please try again.');
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    // ─── Dashboard ────────────────────────────────────────────────────────────

    public function dashboard()
    {
        $this->guard();

        $totalProjects   = DB::table('projects')->count();
        $activeProjects  = DB::table('projects')->where('status', 1)->count();
        $totalMessages   = DB::table('contact')->count();
        $recentMessages  = DB::table('contact')
            ->where('created_at', '>=', now()->subWeek())
            ->count();

        $recentContacts  = DB::table('contact')
            ->orderByDesc('created_at')
            ->limit(5)
            ->get();

        $projects = DB::table('projects')
            ->orderBy('sort')
            ->get();

        return view('admin.dashboard', compact(
            'totalProjects', 'activeProjects',
            'totalMessages', 'recentMessages',
            'recentContacts', 'projects'
        ));
    }

    // ─── Projects ─────────────────────────────────────────────────────────────

    public function projects()
    {
        $this->guard();
        $projects = DB::table('projects')->orderBy('sort')->get();
        return view('admin.projects', compact('projects'));
    }

    public function storeProject(Request $request)
    {
        $this->guard();

        $request->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'required|string|max:255',
            'repo_name'    => 'required|string|max:255',
            'category'     => 'required|string|max:50',
            'github_url'   => 'required|string|max:500',
            'banner_image' => 'required|string|max:500',
            'tech_stack'   => 'required|json',
        ]);

        DB::table('projects')->insert([
            'title'             => $request->title,
            'slug'              => Str::slug($request->slug),
            'repo_name'         => $request->repo_name,
            'short_description' => $request->short_description ?? '',
            'long_description'  => $request->long_description  ?? '',
            'tech_stack'        => $request->tech_stack,
            'category'          => $request->category,
            'github_url'        => $request->github_url,
            'live_url'          => $request->live_url ?? '',
            'role_contribution' => $request->role_contribution ?? '',
            'features'          => $request->features ?? '',
            'banner_image'      => $request->banner_image,
            'video_url'         => $request->video_url ?? '',
            'screenshot'        => $request->screenshot ?: '[]',
            'sort'              => (int) ($request->sort ?? 1),
            'status'            => (int) ($request->status ?? 1),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);

        return redirect()->route('admin.projects')->with('success', 'Project added successfully!');
    }

    public function updateProject(Request $request, int $id)
    {
        $this->guard();

        $request->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'required|string|max:255',
            'repo_name'    => 'required|string|max:255',
            'category'     => 'required|string|max:50',
            'github_url'   => 'required|string|max:500',
            'banner_image' => 'required|string|max:500',
            'tech_stack'   => 'required|json',
        ]);

        DB::table('projects')->where('id', $id)->update([
            'title'             => $request->title,
            'slug'              => Str::slug($request->slug),
            'repo_name'         => $request->repo_name,
            'short_description' => $request->short_description ?? '',
            'long_description'  => $request->long_description  ?? '',
            'tech_stack'        => $request->tech_stack,
            'category'          => $request->category,
            'github_url'        => $request->github_url,
            'live_url'          => $request->live_url ?? '',
            'role_contribution' => $request->role_contribution ?? '',
            'features'          => $request->features ?? '',
            'banner_image'      => $request->banner_image,
            'video_url'         => $request->video_url ?? '',
            'screenshot'        => $request->screenshot ?: '[]',
            'sort'              => (int) ($request->sort ?? 1),
            'status'            => (int) ($request->status ?? 1),
            'updated_at'        => now(),
        ]);

        return redirect()->route('admin.projects')->with('success', 'Project updated successfully!');
    }

    public function toggleProject(int $id)
    {
        $this->guard();
        $project = DB::table('projects')->where('id', $id)->first();
        if ($project) {
            DB::table('projects')->where('id', $id)->update([
                'status'     => $project->status ? 0 : 1,
                'updated_at' => now(),
            ]);
        }
        return back()->with('success', 'Project status updated!');
    }

    public function deleteProject(int $id)
    {
        $this->guard();
        DB::table('projects')->where('id', $id)->delete();
        return back()->with('success', 'Project deleted.');
    }

    // ─── Contacts ─────────────────────────────────────────────────────────────

    public function contacts()
    {
        $this->guard();
        $contacts = DB::table('contact')->orderByDesc('created_at')->get();
        return view('admin.contacts', compact('contacts'));
    }

    public function deleteContact(int $id)
    {
        $this->guard();
        DB::table('contact')->where('id', $id)->delete();
        return back()->with('success', 'Message deleted.');
    }
}
