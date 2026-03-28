<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>{{ $editing ? 'Edit Problem' : 'Add Problem' }} | DSA Admin</title>
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        body{background:#0d0d0d;color:#fff;font-family:'Segoe UI',sans-serif}
        .sidebar{width:240px;background:#111;min-height:100vh;position:fixed;left:0;top:0;display:flex;flex-direction:column;border-right:1px solid #222;z-index:100}
        .sidebar-logo{padding:24px 20px 20px;font-size:18px;font-weight:900;font-family:monospace;letter-spacing:1px;border-bottom:1px solid #222}
        .sidebar-logo span{color:#d20120}
        .sidebar nav{padding:16px 0;flex:1}
        .nav-link{display:flex;align-items:center;gap:12px;padding:13px 20px;color:#aaa;text-decoration:none;font-size:14px;font-weight:500;transition:all .2s;border-left:3px solid transparent}
        .nav-link:hover,.nav-link.active{color:#fff;background:rgba(210,1,32,.1);border-left-color:#d20120}
        .sidebar-footer{padding:16px 20px;border-top:1px solid #222}
        .logout-btn{display:block;width:100%;padding:10px 16px;background:transparent;border:1px solid #333;border-radius:8px;color:#aaa;text-align:center;text-decoration:none;font-size:13px;transition:all .2s}
        .logout-btn:hover{background:rgba(210,1,32,.15);border-color:#d20120;color:#fff}
        .main{margin-left:240px;padding:32px;min-height:100vh}
        .page-header{margin-bottom:28px}
        .page-header h1{font-size:24px;font-weight:700;margin-bottom:4px}
        .page-header p{color:#555;font-size:13px}
        .back-link{display:inline-flex;align-items:center;gap:6px;color:#666;text-decoration:none;font-size:13px;margin-bottom:20px;transition:color .2s}
        .back-link:hover{color:#fff}
        .form-card{background:#1a1a1a;border:1px solid #222;border-radius:14px;padding:32px}
        .form-section{margin-bottom:32px;padding-bottom:28px;border-bottom:1px solid #1e1e1e}
        .form-section:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0}
        .form-section-title{font-size:12px;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:#d20120;margin-bottom:20px}
        .form-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
        .form-group{display:flex;flex-direction:column;gap:8px;margin-bottom:0}
        .form-group.full{grid-column:1/-1}
        label{font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:#555}
        input,textarea,select{background:#111;border:1px solid #2a2a2a;border-radius:8px;padding:11px 14px;color:#fff;font-size:14px;outline:none;transition:border-color .2s;font-family:inherit;width:100%}
        input:focus,textarea:focus,select:focus{border-color:rgba(210,1,32,.5)}
        textarea{resize:vertical;min-height:90px}
        select option{background:#111}
        .code-area{font-family:'Courier New',monospace;font-size:13px;min-height:220px;line-height:1.7;background:#0d0d0d;border-color:#333}

        /* Difficulty selector */
        .diff-selector{display:flex;gap:10px;flex-wrap:wrap}
        .diff-opt input{display:none}
        .diff-opt label{
            padding:8px 24px;border-radius:8px;font-size:13px;font-weight:700;cursor:pointer;
            background:#111;border:1px solid #333;color:#666;transition:all .2s;text-transform:none;letter-spacing:0;
        }
        .diff-opt input:checked + label.easy  {background:rgba(74,222,128,.12);color:#4ade80;border-color:rgba(74,222,128,.3)}
        .diff-opt input:checked + label.medium{background:rgba(251,191,36,.12);color:#fbbf24;border-color:rgba(251,191,36,.3)}
        .diff-opt input:checked + label.hard  {background:rgba(248,113,113,.12);color:#f87171;border-color:rgba(248,113,113,.3)}
        .diff-opt label:hover{border-color:#555;color:#ccc}

        /* Pattern suggestions */
        .pattern-suggestions{display:flex;flex-wrap:wrap;gap:6px;margin-top:8px}
        .pattern-chip{padding:4px 12px;background:#111;border:1px solid #333;border-radius:6px;font-size:11px;font-weight:600;color:#777;cursor:pointer;transition:all .2s}
        .pattern-chip:hover{border-color:#d20120;color:#d20120;background:rgba(210,1,32,.08)}

        .btn{display:inline-flex;align-items:center;gap:6px;padding:11px 22px;border-radius:8px;font-size:14px;font-weight:600;cursor:pointer;border:none;transition:all .2s;font-family:inherit;text-decoration:none}
        .btn-primary{background:#d20120;color:#fff}.btn-primary:hover{background:#a8001a}
        .btn-ghost{background:transparent;color:#aaa;border:1px solid #333}.btn-ghost:hover{border-color:#555;color:#fff}
        .form-actions{display:flex;gap:12px;margin-top:28px;justify-content:flex-end}
        .alert-error{background:rgba(239,68,68,.1);border:1px solid #7f1d1d;border-radius:8px;padding:13px 18px;margin-bottom:20px;color:#f87171;font-size:13px}
        @media(max-width:768px){.sidebar{width:60px}.sidebar-logo span,.nav-link span,.sidebar-footer{display:none}.main{margin-left:60px;padding:16px}.form-grid{grid-template-columns:1fr}}
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-logo">&lt;<span>sx</span>/&gt;</div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="nav-link">📊 <span>Dashboard</span></a>
            <a href="{{ route('admin.projects') }}"  class="nav-link">🗂 <span>Projects</span></a>
            <a href="{{ route('admin.dsa.index') }}"  class="nav-link active">🧩 <span>DSA Tracker</span></a>
            <a href="{{ route('admin.contacts') }}"  class="nav-link">📬 <span>Messages</span></a>
            <a href="/" target="_blank" class="nav-link">🌐 <span>View Site</span></a>
        </nav>
        <div class="sidebar-footer"><a href="{{ route('admin.logout') }}" class="logout-btn">🚪 Logout</a></div>
    </aside>

    <main class="main">
        <a href="{{ route('admin.dsa.index') }}" class="back-link">← Back to DSA Tracker</a>

        <div class="page-header">
            <h1>{{ $editing ? '✏️ Edit Problem' : '➕ Add New Problem' }}</h1>
            <p>{{ $editing ? 'Update the problem details below.' : 'Log a new DSA problem to your tracker.' }}</p>
        </div>

        @if($errors->any())
            <div class="alert-error">
                @foreach($errors->all() as $e) • {{ $e }}<br> @endforeach
            </div>
        @endif

        <form method="POST"
              action="{{ $editing ? route('admin.dsa.update', $problem->id) : route('admin.dsa.store') }}">
            @csrf
            @if($editing) @method('PUT') @endif

            <div class="form-card">

                {{-- ── Section 1: Core Info ── --}}
                <div class="form-section">
                    <div class="form-section-title">📝 Problem Info</div>
                    <div class="form-grid">
                        <div class="form-group full">
                            <label>Problem Title *</label>
                            <input type="text" name="title" value="{{ old('title', $problem->title ?? '') }}"
                                   placeholder="e.g. Two Sum" required>
                        </div>
                        <div class="form-group">
                            <label>Platform *</label>
                            <select name="platform">
                                @foreach(['LeetCode','CodeStudio','Other'] as $pl)
                                    <option value="{{ $pl }}" {{ old('platform', $problem->platform ?? 'LeetCode') === $pl ? 'selected' : '' }}>{{ $pl }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Problem Link</label>
                            <input type="url" name="problem_link" value="{{ old('problem_link', $problem->problem_link ?? '') }}"
                                   placeholder="https://leetcode.com/problems/...">
                        </div>
                        <div class="form-group full">
                            <label>Difficulty *</label>
                            <div class="diff-selector">
                                @foreach(['Easy','Medium','Hard'] as $d)
                                    <div class="diff-opt">
                                        <input type="radio" name="difficulty" id="diff_{{ $d }}" value="{{ $d }}"
                                               {{ old('difficulty', $problem->difficulty ?? 'Medium') === $d ? 'checked' : '' }}>
                                        <label for="diff_{{ $d }}" class="{{ strtolower($d) }}">{{ $d }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pattern *</label>
                            <input type="text" name="pattern" id="patternInput"
                                   value="{{ old('pattern', $problem->pattern ?? '') }}"
                                   placeholder="e.g. Sliding Window" required>
                            <div class="pattern-suggestions">
                                @foreach(['Array','Hashing','Sliding Window','Two Pointers','Binary Search','Stack','Queue','Linked List','Tree','Graph','Dynamic Programming','Recursion','Backtracking','Greedy','Sorting','Heap','Trie','Math','String','Bit Manipulation'] as $pat)
                                    <span class="pattern-chip" onclick="setPattern('{{ $pat }}')">{{ $pat }}</span>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Date Solved *</label>
                            <input type="date" name="solved_date"
                                   value="{{ old('solved_date', isset($problem) ? \Carbon\Carbon::parse($problem->solved_date)->format('Y-m-d') : date('Y-m-d')) }}" required>
                        </div>
                    </div>
                </div>

                {{-- ── Section 2: Complexity ── --}}
                <div class="form-section">
                    <div class="form-section-title">⚡ Complexity</div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Time Complexity</label>
                            <input type="text" name="time_complexity" value="{{ old('time_complexity', $problem->time_complexity ?? '') }}"
                                   placeholder="e.g. O(n), O(n log n)">
                        </div>
                        <div class="form-group">
                            <label>Space Complexity</label>
                            <input type="text" name="space_complexity" value="{{ old('space_complexity', $problem->space_complexity ?? '') }}"
                                   placeholder="e.g. O(1), O(n)">
                        </div>
                    </div>
                </div>

                {{-- ── Section 3: Solution ── --}}
                <div class="form-section">
                    <div class="form-section-title">🧠 Solution Details</div>
                    <div class="form-grid">
                        <div class="form-group full">
                            <label>Key Idea (one-liner)</label>
                            <input type="text" name="key_idea" value="{{ old('key_idea', $problem->key_idea ?? '') }}"
                                   placeholder="The core insight to solve this problem…">
                        </div>
                        <div class="form-group full">
                            <label>Approach (step-by-step)</label>
                            <textarea name="approach" placeholder="1. Start with...&#10;2. Then...&#10;3. Finally...">{{ old('approach', $problem->approach ?? '') }}</textarea>
                        </div>
                        <div class="form-group full">
                            <label>Code Solution</label>
                            <textarea name="code_solution" class="code-area"
                                      placeholder="// Paste your solution code here">{{ old('code_solution', $problem->code_solution ?? '') }}</textarea>
                        </div>
                        <div class="form-group full">
                            <label>Mistakes & Learnings</label>
                            <textarea name="mistakes_learnings" placeholder="What did you get wrong? What did you learn?">{{ old('mistakes_learnings', $problem->mistakes_learnings ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                {{-- ── Visibility ── --}}
                <div class="form-section">
                    <div class="form-section-title">👁 Visibility</div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status">
                                <option value="1" {{ old('status', $problem->status ?? 1) == 1 ? 'selected' : '' }}>Public (Visible on DSA page)</option>
                                <option value="0" {{ old('status', $problem->status ?? 1) == 0 ? 'selected' : '' }}>Hidden (Draft)</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-actions">
                <a href="{{ route('admin.dsa.index') }}" class="btn btn-ghost">Cancel</a>
                <button type="submit" class="btn btn-primary">
                    {{ $editing ? '💾 Save Changes' : '➕ Add Problem' }}
                </button>
            </div>
        </form>
    </main>

    <script>
    function setPattern(p) {
        document.getElementById('patternInput').value = p;
        document.getElementById('patternInput').focus();
    }
    </script>
</body>
</html>
