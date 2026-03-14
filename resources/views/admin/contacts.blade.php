<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Messages | Admin</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body { background: #0d0d0d; color: #fff; font-family: 'Segoe UI', sans-serif; }
        .sidebar { width: 240px; background: #111; min-height: 100vh; position: fixed; left: 0; top: 0; display: flex; flex-direction: column; border-right: 1px solid #222; z-index: 100; }
        .sidebar-logo { padding: 24px 20px 20px; font-size: 18px; font-weight: 900; font-family: monospace; letter-spacing: 1px; border-bottom: 1px solid #222; }
        .sidebar-logo span { color: #d20120; }
        .sidebar nav { padding: 16px 0; flex: 1; }
        .nav-link { display: flex; align-items: center; gap: 12px; padding: 13px 20px; color: #aaa; text-decoration: none; font-size: 14px; font-weight: 500; transition: all 0.2s; border-left: 3px solid transparent; }
        .nav-link:hover, .nav-link.active { color: #fff; background: rgba(210,1,32,0.1); border-left-color: #d20120; }
        .sidebar-footer { padding: 16px 20px; border-top: 1px solid #222; }
        .logout-btn { display: block; width: 100%; padding: 10px 16px; background: transparent; border: 1px solid #333; border-radius: 8px; color: #aaa; text-align: center; text-decoration: none; font-size: 13px; cursor: pointer; transition: all 0.2s; }
        .logout-btn:hover { background: rgba(210,1,32,0.15); border-color: #d20120; color: #fff; }
        .main { margin-left: 240px; padding: 32px; min-height: 100vh; }
        .page-header { margin-bottom: 32px; }
        .page-header h1 { font-size: 28px; font-weight: 700; }
        .section { background: #1a1a1a; border: 1px solid #222; border-radius: 12px; overflow: hidden; }
        .section-header { padding: 20px 24px; border-bottom: 1px solid #222; display: flex; align-items: center; justify-content: space-between; }
        .section-header h2 { font-size: 18px; font-weight: 600; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 20px; text-align: left; border-bottom: 1px solid #222; font-size: 14px; }
        th { color: #888; font-weight: 500; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        td { color: #ccc; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: rgba(255,255,255,0.02); }
        .badge { display: inline-block; padding: 3px 10px; border-radius: 99px; font-size: 11px; font-weight: 600; text-transform: uppercase; }
        .badge-green { background: rgba(34,197,94,0.15); color: #4ade80; }
        .badge-blue  { background: rgba(59,130,246,0.15); color: #60a5fa; }
        .badge-yellow{ background: rgba(234,179,8,0.15);  color: #fbbf24; }
        .btn-danger { background: #7f1d1d; color: #fff; border: none; border-radius: 6px; padding: 6px 12px; font-size: 12px; cursor: pointer; transition: background 0.2s; }
        .btn-danger:hover { background: #991b1b; }
        .message-cell { max-width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        @media (max-width: 768px) { .sidebar { width: 60px; } .sidebar-logo .text, .nav-link span, .sidebar-footer { display: none; } .main { margin-left: 60px; padding: 16px; } }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-logo">&lt;<span>sx</span>/&gt; <span class="text" style="margin-left:4px;font-size:14px;color:#aaa;font-weight:400;">Admin</span></div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="nav-link">📊 <span>Dashboard</span></a>
            <a href="{{ route('admin.projects') }}" class="nav-link">🗂 <span>Projects</span></a>
            <a href="{{ route('admin.contacts') }}" class="nav-link active">📬 <span>Messages</span></a>
            <a href="/" target="_blank" class="nav-link">🌐 <span>View Site</span></a>
        </nav>
        <div class="sidebar-footer"><a href="{{ route('admin.logout') }}" class="logout-btn">🚪 Logout</a></div>
    </aside>

    <main class="main">
        <div class="page-header">
            <h1>📬 Contact Messages</h1>
            <p style="color:#888;margin-top:4px;">All messages sent through the contact form.</p>
        </div>

        <div class="section">
            <div class="section-header">
                <h2>Messages ({{ $contacts->count() }})</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Reason</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $contact->name }}</strong></td>
                            <td><a href="mailto:{{ $contact->email }}" style="color:#60a5fa;text-decoration:none;">{{ $contact->email }}</a></td>
                            <td>{{ $contact->mobile ?: '—' }}</td>
                            <td>
                                @php
                                    $colors = ['freelance'=>'badge-green','collaboration'=>'badge-blue','job'=>'badge-yellow'];
                                    $cls = $colors[$contact->reason] ?? 'badge-green';
                                @endphp
                                <span class="badge {{ $cls }}">{{ $contact->reason }}</span>
                            </td>
                            <td class="message-cell" title="{{ $contact->message }}">{{ $contact->message }}</td>
                            <td style="white-space:nowrap;">{{ \Carbon\Carbon::parse($contact->created_at)->format('d M Y') }}<br><span style="color:#666;font-size:11px;">{{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}</span></td>
                            <td>
                                <form method="POST" action="{{ route('admin.contact.delete', $contact->id) }}" onsubmit="return confirm('Delete this message?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn-danger">🗑</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="8" style="text-align:center;color:#555;padding:40px;">No messages yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
