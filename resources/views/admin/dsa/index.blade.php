<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>DSA Manager | Admin</title>
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
        .page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px;flex-wrap:wrap;gap:16px}
        .page-header h1{font-size:26px;font-weight:700}
        .stats-row{display:grid;grid-template-columns:repeat(5,1fr);gap:14px;margin-bottom:28px}
        .scard{background:#1a1a1a;border:1px solid #222;border-radius:12px;padding:20px;text-align:center}
        .scard .val{font-size:32px;font-weight:900;color:#d20120;line-height:1}
        .scard .lbl{font-size:11px;text-transform:uppercase;letter-spacing:1.5px;color:#555;margin-top:6px}
        .scard.easy .val{color:#4ade80}
        .scard.medium .val{color:#fbbf24}
        .scard.hard .val{color:#f87171}
        .scard.streak .val{color:#a78bfa}
        .section{background:#1a1a1a;border:1px solid #222;border-radius:12px;overflow:hidden}
        .section-header{padding:18px 24px;border-bottom:1px solid #222;display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap}
        .section-header h2{font-size:17px;font-weight:600}
        .btn{display:inline-flex;align-items:center;gap:6px;padding:9px 18px;border-radius:8px;font-size:13px;font-weight:600;cursor:pointer;text-decoration:none;border:none;transition:all .2s;font-family:inherit}
        .btn-primary{background:#d20120;color:#fff}.btn-primary:hover{background:#a8001a}
        .btn-warning{background:#92400e;color:#fff}.btn-warning:hover{background:#b45309}
        .btn-danger{background:#7f1d1d;color:#fff}.btn-danger:hover{background:#991b1b}
        .btn-ghost{background:transparent;color:#aaa;border:1px solid #333}.btn-ghost:hover{border-color:#555;color:#fff}
        .btn-sm{padding:5px 12px;font-size:12px}

        /* Search in header */
        .header-search{position:relative;flex:1;max-width:280px}
        .header-search svg{position:absolute;left:11px;top:50%;transform:translateY(-50%);color:#555;pointer-events:none}
        .header-search input{width:100%;background:#111;border:1px solid #333;border-radius:8px;padding:9px 12px 9px 36px;color:#fff;font-size:13px;outline:none;transition:border-color .2s;font-family:inherit}
        .header-search input:focus{border-color:#d20120}

        table{width:100%;border-collapse:collapse}
        th,td{padding:13px 18px;text-align:left;border-bottom:1px solid #1e1e1e;font-size:13px}
        th{color:#555;font-weight:500;font-size:11px;text-transform:uppercase;letter-spacing:.5px;white-space:nowrap}
        td{color:#ccc}
        tr:last-child td{border-bottom:none}
        tr:hover td{background:rgba(255,255,255,.02)}
        .actions{display:flex;gap:6px;flex-wrap:wrap}
        .pill{display:inline-block;padding:3px 9px;border-radius:6px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.5px;white-space:nowrap}
        .pill-easy{background:rgba(74,222,128,.1);color:#4ade80;border:1px solid rgba(74,222,128,.2)}
        .pill-medium{background:rgba(251,191,36,.1);color:#fbbf24;border:1px solid rgba(251,191,36,.2)}
        .pill-hard{background:rgba(248,113,113,.1);color:#f87171;border:1px solid rgba(248,113,113,.2)}
        .badge{display:inline-block;padding:2px 8px;border-radius:5px;font-size:10px;font-weight:600;text-transform:uppercase;background:rgba(255,255,255,.05);border:1px solid #222;color:#777}
        .pattern-tag{display:inline-block;padding:3px 9px;border-radius:6px;font-size:11px;font-weight:600;background:rgba(210,1,32,.1);color:#ff9999;border:1px solid rgba(210,1,32,.2)}
        .alert-success{background:rgba(34,197,94,.1);border:1px solid #166534;border-radius:8px;padding:13px 18px;margin-bottom:20px;color:#4ade80;font-size:14px}
        @media(max-width:768px){.sidebar{width:60px}.sidebar-logo span,.nav-link span,.sidebar-footer{display:none}.main{margin-left:60px;padding:16px}.stats-row{grid-template-columns:repeat(2,1fr)}}
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
        <div class="page-header">
            <div><h1>🧩 DSA Tracker</h1><p style="color:#555;margin-top:4px;font-size:13px;">Manage your daily problem-solving log.</p></div>
            <a href="{{ route('admin.dsa.create') }}" class="btn btn-primary">＋ Add Problem</a>
        </div>

        @if(session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <div class="stats-row">
            <div class="scard"><div class="val">{{ $total }}</div><div class="lbl">Total</div></div>
            <div class="scard easy"><div class="val">{{ $easy }}</div><div class="lbl">Easy</div></div>
            <div class="scard medium"><div class="val">{{ $medium }}</div><div class="lbl">Medium</div></div>
            <div class="scard hard"><div class="val">{{ $hard }}</div><div class="lbl">Hard</div></div>
            <div class="scard streak"><div class="val">{{ $streak }}🔥</div><div class="lbl">Streak</div></div>
        </div>

        <div class="section">
            <div class="section-header">
                <h2>All Problems ({{ $problems->count() }})</h2>
                <div class="header-search">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" id="tableSearch" placeholder="Search…">
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th><th>Title</th><th>Platform</th><th>Difficulty</th>
                        <th>Pattern</th><th>Date</th><th>Status</th><th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    @forelse($problems as $i => $p)
                        <tr data-search="{{ strtolower($p->title.' '.$p->pattern) }}">
                            <td style="color:#444;font-family:monospace;">{{ str_pad($i+1,3,'0',STR_PAD_LEFT) }}</td>
                            <td style="max-width:240px;font-weight:600;color:#ddd;">{{ $p->title }}</td>
                            <td><span class="badge">{{ $p->platform }}</span></td>
                            <td>
                                @php $cls = match($p->difficulty){ 'Easy'=>'pill-easy','Hard'=>'pill-hard',default=>'pill-medium' }; @endphp
                                <span class="pill {{ $cls }}">{{ $p->difficulty }}</span>
                            </td>
                            <td><span class="pattern-tag">{{ $p->pattern }}</span></td>
                            <td style="white-space:nowrap;color:#666;">{{ \Carbon\Carbon::parse($p->solved_date)->format('d M Y') }}</td>
                            <td>
                                <span class="badge" style="{{ $p->status ? 'color:#4ade80;border-color:rgba(74,222,128,.2)' : '' }}">
                                    {{ $p->status ? 'Public' : 'Hidden' }}
                                </span>
                            </td>
                            <td>
                                <div class="actions">
                                    <a href="{{ route('admin.dsa.edit', $p->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                                    <form method="POST" action="{{ route('admin.dsa.toggle', $p->id) }}" style="display:inline">
                                        @csrf @method('PATCH')
                                        <button type="submit" class="btn btn-ghost btn-sm">{{ $p->status ? '🙈' : '👁' }}</button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.dsa.delete', $p->id) }}" style="display:inline" onsubmit="return confirm('Delete this problem?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">🗑</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="8" style="text-align:center;padding:40px;color:#444">No problems logged yet. <a href="{{ route('admin.dsa.create') }}" style="color:#d20120;">Add your first one →</a></td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <script>
    document.getElementById('tableSearch').addEventListener('input', function(){
        const q = this.value.toLowerCase();
        document.querySelectorAll('#tableBody tr[data-search]').forEach(row => {
            row.style.display = row.dataset.search.includes(q) ? '' : 'none';
        });
    });
    </script>
</body>
</html>
