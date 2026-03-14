<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Admin Dashboard | scriptxprince</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body { background: #0d0d0d; color: #fff; font-family: 'Segoe UI', sans-serif; }
        /* Sidebar */
        .sidebar {
            width: 240px; background: #111; min-height: 100vh;
            position: fixed; left: 0; top: 0; display: flex; flex-direction: column;
            border-right: 1px solid #222; z-index: 100;
        }
        .sidebar-logo {
            padding: 24px 20px 20px;
            font-size: 18px; font-weight: 900; font-family: monospace;
            letter-spacing: 1px; border-bottom: 1px solid #222;
        }
        .sidebar-logo span { color: #d20120; }
        .sidebar nav { padding: 16px 0; flex: 1; }
        .nav-link {
            display: flex; align-items: center; gap: 12px;
            padding: 13px 20px; color: #aaa; text-decoration: none;
            font-size: 14px; font-weight: 500; transition: all 0.2s;
            border-left: 3px solid transparent;
        }
        .nav-link:hover, .nav-link.active { color: #fff; background: rgba(210,1,32,0.1); border-left-color: #d20120; }
        .sidebar-footer { padding: 16px 20px; border-top: 1px solid #222; }
        .logout-btn {
            display: block; width: 100%; padding: 10px 16px;
            background: transparent; border: 1px solid #333; border-radius: 8px;
            color: #aaa; text-align: center; text-decoration: none;
            font-size: 13px; cursor: pointer; transition: all 0.2s;
        }
        .logout-btn:hover { background: rgba(210,1,32,0.15); border-color: #d20120; color: #fff; }
        /* Main */
        .main { margin-left: 240px; padding: 32px; min-height: 100vh; }
        .page-header { margin-bottom: 32px; }
        .page-header h1 { font-size: 28px; font-weight: 700; }
        .page-header p { color: #888; margin-top: 4px; }
        /* Stats */
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px; margin-bottom: 32px; }
        .stat-card {
            background: #1a1a1a; border: 1px solid #222; border-radius: 12px;
            padding: 24px; text-align: center; transition: border-color 0.2s;
        }
        .stat-card:hover { border-color: #d20120; }
        .stat-card .number { font-size: 40px; font-weight: 900; color: #d20120; }
        .stat-card .label { color: #aaa; font-size: 13px; margin-top: 4px; }
        /* Section */
        .section { background: #1a1a1a; border: 1px solid #222; border-radius: 12px; margin-bottom: 32px; overflow: hidden; }
        .section-header {
            padding: 20px 24px; border-bottom: 1px solid #222;
            display: flex; align-items: center; justify-content: space-between;
        }
        .section-header h2 { font-size: 18px; font-weight: 600; }
        .btn-primary {
            background: #d20120; color: #fff; border: none; border-radius: 8px;
            padding: 10px 20px; font-size: 13px; font-weight: 600;
            cursor: pointer; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;
            transition: background 0.2s;
        }
        .btn-primary:hover { background: #a8001a; }
        .btn-danger { background: #7f1d1d; }
        .btn-danger:hover { background: #991b1b; }
        .btn-sm { padding: 6px 14px; font-size: 12px; }
        /* Table */
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 24px; text-align: left; border-bottom: 1px solid #222; font-size: 14px; }
        th { color: #888; font-weight: 500; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        td { color: #ccc; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: rgba(255,255,255,0.02); }
        /* Badge */
        .badge {
            display: inline-block; padding: 3px 10px; border-radius: 99px;
            font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;
        }
        .badge-green { background: rgba(34,197,94,0.15); color: #4ade80; }
        .badge-red   { background: rgba(239,68,68,0.15);  color: #f87171; }
        /* Alert */
        .alert-success {
            background: rgba(34,197,94,0.12); border: 1px solid #166534;
            border-radius: 8px; padding: 14px 20px; margin-bottom: 24px;
            color: #4ade80; font-size: 14px;
        }
        /* Modal overlay */
        .modal-overlay {
            display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.7);
            z-index: 1000; align-items: center; justify-content: center;
        }
        .modal-overlay.active { display: flex; }
        .modal {
            background: #1a1a1a; border: 1px solid #333; border-radius: 16px;
            padding: 32px; width: 90%; max-width: 700px; max-height: 90vh;
            overflow-y: auto;
        }
        .modal h2 { font-size: 22px; margin-bottom: 24px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-size: 13px; color: #aaa; margin-bottom: 8px; }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%; background: #111; border: 1px solid #333; border-radius: 8px;
            padding: 10px 14px; color: #fff; font-size: 14px; outline: none;
            transition: border-color 0.2s; font-family: inherit;
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #d20120; }
        .form-group textarea { min-height: 90px; resize: vertical; }
        .form-group select option { background: #111; }
        .modal-actions { display: flex; gap: 12px; justify-content: flex-end; margin-top: 8px; }
        .btn-secondary {
            background: transparent; color: #aaa; border: 1px solid #333; border-radius: 8px;
            padding: 10px 20px; font-size: 13px; cursor: pointer; transition: all 0.2s;
        }
        .btn-secondary:hover { border-color: #555; color: #fff; }
        /* Mobile sidebar */
        @media (max-width: 768px) {
            .sidebar { width: 60px; }
            .sidebar-logo .text, .nav-link span, .sidebar-footer { display: none; }
            .main { margin-left: 60px; padding: 20px; }
            .form-row { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">
            &lt;<span>sx</span>/&gt; <span class="text" style="margin-left:4px;font-size:14px;color:#aaa;font-weight:400;">Admin</span>
        </div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                📊 <span>Dashboard</span>
            </a>
            <a href="{{ route('admin.projects') }}" class="nav-link">
                🗂 <span>Projects</span>
            </a>
            <a href="{{ route('admin.contacts') }}" class="nav-link">
                📬 <span>Messages</span>
            </a>
            <a href="/" target="_blank" class="nav-link">
                🌐 <span>View Site</span>
            </a>
        </nav>
        <div class="sidebar-footer">
            <a href="{{ route('admin.logout') }}" class="logout-btn">🚪 Logout</a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main">
        <div class="page-header">
            <h1>Dashboard</h1>
            <p>Welcome back, Admin! Here's an overview of your portfolio.</p>
        </div>

        @if(session('success'))
            <div class="alert-success">✅ {{ session('success') }}</div>
        @endif

        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="number">{{ $totalProjects }}</div>
                <div class="label">Total Projects</div>
            </div>
            <div class="stat-card">
                <div class="number">{{ $activeProjects }}</div>
                <div class="label">Live Projects</div>
            </div>
            <div class="stat-card">
                <div class="number">{{ $totalMessages }}</div>
                <div class="label">Messages</div>
            </div>
            <div class="stat-card">
                <div class="number">{{ $recentMessages }}</div>
                <div class="label">New This Week</div>
            </div>
        </div>

        <!-- Recent Messages -->
        <div class="section">
            <div class="section-header">
                <h2>📬 Recent Messages</h2>
                <a href="{{ route('admin.contacts') }}" class="btn-primary btn-sm">View All</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th><th>Email</th><th>Reason</th><th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentContacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td><span class="badge badge-green">{{ $contact->reason }}</span></td>
                            <td>{{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="4" style="text-align:center;color:#555;">No messages yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Projects Overview -->
        <div class="section">
            <div class="section-header">
                <h2>🗂 Projects Overview</h2>
                <a href="{{ route('admin.projects') }}" class="btn-primary btn-sm">Manage Projects</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Title</th><th>Category</th><th>Status</th><th>Sort</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->category }}</td>
                            <td>
                                <span class="badge {{ $project->status ? 'badge-green' : 'badge-red' }}">
                                    {{ $project->status ? 'Active' : 'Hidden' }}
                                </span>
                            </td>
                            <td>{{ $project->sort }}</td>
                        </tr>
                    @empty
                        <tr><td colspan="4" style="text-align:center;color:#555;">No projects yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>
