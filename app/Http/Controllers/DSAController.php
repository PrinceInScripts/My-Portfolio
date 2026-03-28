<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DsaController extends Controller
{
    /* ──────────────────────────────────────────────────────────────
       PUBLIC PAGE
    ────────────────────────────────────────────────────────────── */

    public function index(Request $request)
    {
        $query = DB::table('dsa_problems')->where('status', 1);

        // Filters
        if ($request->filled('difficulty')) {
            $query->where('difficulty', $request->difficulty);
        }
        if ($request->filled('pattern')) {
            $query->where('pattern', $request->pattern);
        }
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $problems = $query->orderByDesc('solved_date')->orderByDesc('id')->get();

        // Stats
        $all       = DB::table('dsa_problems')->where('status', 1)->get();
        $total     = $all->count();
        $easy      = $all->where('difficulty', 'Easy')->count();
        $medium    = $all->where('difficulty', 'Medium')->count();
        $hard      = $all->where('difficulty', 'Hard')->count();

        // Most used pattern
        $topPattern = DB::table('dsa_problems')
            ->where('status', 1)
            ->select('pattern', DB::raw('count(*) as cnt'))
            ->groupBy('pattern')
            ->orderByDesc('cnt')
            ->first();

        // Current streak
        $streak = $this->calculateStreak();

        // Distinct patterns for filter
        $patterns = DB::table('dsa_problems')
            ->where('status', 1)
            ->distinct()
            ->orderBy('pattern')
            ->pluck('pattern');

        return view('dsa.index', compact(
            'problems', 'total', 'easy', 'medium', 'hard',
            'topPattern', 'streak', 'patterns',
            'request'
        ));
    }

    public function show($id)
    {
        $problem = DB::table('dsa_problems')
            ->where('id', $id)
            ->where('status', 1)
            ->first();

        if (!$problem) {
            abort(404);
        }

        // Prev / Next for navigation
        $prev = DB::table('dsa_problems')
            ->where('status', 1)
            ->where('id', '<', $id)
            ->orderByDesc('id')
            ->first(['id', 'title']);

        $next = DB::table('dsa_problems')
            ->where('status', 1)
            ->where('id', '>', $id)
            ->orderBy('id')
            ->first(['id', 'title']);

        return view('dsa.show', compact('problem', 'prev', 'next'));
    }

    /* ──────────────────────────────────────────────────────────────
       ADMIN CRUD
    ────────────────────────────────────────────────────────────── */

    public function adminIndex()
    {
        $this->guard();
        $problems = DB::table('dsa_problems')->orderByDesc('solved_date')->orderByDesc('id')->get();

        $total  = $problems->count();
        $easy   = $problems->where('difficulty', 'Easy')->count();
        $medium = $problems->where('difficulty', 'Medium')->count();
        $hard   = $problems->where('difficulty', 'Hard')->count();
        $streak = $this->calculateStreak();

        return view('admin.dsa.index', compact('problems', 'total', 'easy', 'medium', 'hard', 'streak'));
    }

    public function adminCreate()
    {
        $this->guard();
        return view('admin.dsa.form', ['problem' => null, 'editing' => false]);
    }

    public function adminStore(Request $request)
    {
        $this->guard();
        $data = $request->validate($this->rules());

        DB::table('dsa_problems')->insert([
            ...$data,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.dsa.index')->with('success', '✅ Problem added successfully!');
    }

    public function adminEdit($id)
    {
        $this->guard();
        $problem = DB::table('dsa_problems')->where('id', $id)->first();
        if (!$problem) abort(404);
        return view('admin.dsa.form', ['problem' => $problem, 'editing' => true]);
    }

    public function adminUpdate(Request $request, $id)
    {
        $this->guard();
        $data = $request->validate($this->rules());

        DB::table('dsa_problems')->where('id', $id)->update([
            ...$data,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.dsa.index')->with('success', '✅ Problem updated!');
    }

    public function adminDelete($id)
    {
        $this->guard();
        DB::table('dsa_problems')->where('id', $id)->delete();
        return back()->with('success', '🗑 Problem deleted.');
    }

    public function adminToggle($id)
    {
        $this->guard();
        $p = DB::table('dsa_problems')->where('id', $id)->first();
        if ($p) {
            DB::table('dsa_problems')->where('id', $id)->update([
                'status'     => $p->status ? 0 : 1,
                'updated_at' => now(),
            ]);
        }
        return back()->with('success', 'Visibility toggled.');
    }

    /* ──────────────────────────────────────────────────────────────
       HELPERS
    ────────────────────────────────────────────────────────────── */

    private function guard(): void
    {
        if (!session('admin_logged_in')) {
            abort(redirect()->route('admin.login'));
        }
    }

    private function calculateStreak(): int
    {
        $dates = DB::table('dsa_problems')
            ->where('status', 1)
            ->distinct()
            ->orderByDesc('solved_date')
            ->pluck('solved_date')
            ->map(fn($d) => Carbon::parse($d)->toDateString())
            ->unique()
            ->values();

        if ($dates->isEmpty()) return 0;

        $streak  = 0;
        $current = Carbon::today();

        foreach ($dates as $date) {
            $d = Carbon::parse($date);
            if ($d->eq($current) || $d->eq($current->copy()->subDays($streak))) {
                $streak++;
                $current = $d->copy()->subDay();
            } else {
                break;
            }
        }

        return $streak;
    }

    private function rules(): array
    {
        return [
            'title'              => 'required|string|max:255',
            'platform'           => 'required|in:LeetCode,CodeStudio,Other',
            'problem_link'       => 'nullable|string|max:500',
            'difficulty'         => 'required|in:Easy,Medium,Hard',
            'pattern'            => 'required|string|max:100',
            'time_complexity'    => 'nullable|string|max:50',
            'space_complexity'   => 'nullable|string|max:50',
            'key_idea'           => 'nullable|string',
            'approach'           => 'nullable|string',
            'code_solution'      => 'nullable|string',
            'mistakes_learnings' => 'nullable|string',
            'solved_date'        => 'required|date',
            'status'             => 'nullable|integer',
        ];
    }
}
