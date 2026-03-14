<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Manage Projects | Admin</title>
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
        .page-header { margin-bottom: 32px; display: flex; align-items: center; justify-content: space-between; }
        .page-header h1 { font-size: 28px; font-weight: 700; }
        .section { background: #1a1a1a; border: 1px solid #222; border-radius: 12px; margin-bottom: 32px; overflow: hidden; }
        .section-header { padding: 20px 24px; border-bottom: 1px solid #222; display: flex; align-items: center; justify-content: space-between; }
        .section-header h2 { font-size: 18px; font-weight: 600; }
        .btn-primary { background: #d20120; color: #fff; border: none; border-radius: 8px; padding: 10px 20px; font-size: 13px; font-weight: 600; cursor: pointer; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: background 0.2s; }
        .btn-primary:hover { background: #a8001a; }
        .btn-warning { background: #92400e; }
        .btn-warning:hover { background: #b45309; }
        .btn-danger { background: #7f1d1d; }
        .btn-danger:hover { background: #991b1b; }
        .btn-sm { padding: 6px 14px; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 14px 24px; text-align: left; border-bottom: 1px solid #222; font-size: 14px; }
        th { color: #888; font-weight: 500; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        td { color: #ccc; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: rgba(255,255,255,0.02); }
        .badge { display: inline-block; padding: 3px 10px; border-radius: 99px; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }
        .badge-green { background: rgba(34,197,94,0.15); color: #4ade80; }
        .badge-red   { background: rgba(239,68,68,0.15);  color: #f87171; }
        .badge-blue  { background: rgba(59,130,246,0.15); color: #60a5fa; }
        .alert-success { background: rgba(34,197,94,0.12); border: 1px solid #166534; border-radius: 8px; padding: 14px 20px; margin-bottom: 24px; color: #4ade80; font-size: 14px; }
        /* Modal */
        .modal-overlay { display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.8); z-index: 1000; align-items: flex-start; justify-content: center; padding: 20px; overflow-y: auto; }
        .modal-overlay.active { display: flex; }
        .modal { background: #1a1a1a; border: 1px solid #333; border-radius: 16px; padding: 32px; width: 100%; max-width: 800px; margin: auto; }
        .modal h2 { font-size: 22px; margin-bottom: 24px; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .form-group { margin-bottom: 18px; }
        .form-group.full { grid-column: 1 / -1; }
        .form-group label { display: block; font-size: 13px; color: #aaa; margin-bottom: 8px; }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%; background: #111; border: 1px solid #333; border-radius: 8px;
            padding: 10px 14px; color: #fff; font-size: 14px; outline: none; transition: border-color 0.2s; font-family: inherit;
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus { border-color: #d20120; }
        .form-group textarea { min-height: 80px; resize: vertical; }
        .form-group select option { background: #111; }
        .form-hint { font-size: 11px; color: #666; margin-top: 4px; }
        .modal-actions { display: flex; gap: 12px; justify-content: flex-end; margin-top: 16px; }
        .btn-secondary { background: transparent; color: #aaa; border: 1px solid #333; border-radius: 8px; padding: 10px 20px; font-size: 13px; cursor: pointer; transition: all 0.2s; }
        .btn-secondary:hover { border-color: #555; color: #fff; }
        .project-img { width: 56px; height: 40px; object-fit: cover; border-radius: 6px; }
        .actions-cell { display: flex; gap: 8px; flex-wrap: wrap; }
        @media (max-width: 768px) { .sidebar { width: 60px; } .sidebar-logo .text, .nav-link span, .sidebar-footer { display: none; } .main { margin-left: 60px; padding: 16px; } .form-row { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">&lt;<span>sx</span>/&gt; <span class="text" style="margin-left:4px;font-size:14px;color:#aaa;font-weight:400;">Admin</span></div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="nav-link">📊 <span>Dashboard</span></a>
            <a href="{{ route('admin.projects') }}" class="nav-link active">🗂 <span>Projects</span></a>
            <a href="{{ route('admin.contacts') }}" class="nav-link">📬 <span>Messages</span></a>
            <a href="/" target="_blank" class="nav-link">🌐 <span>View Site</span></a>
        </nav>
        <div class="sidebar-footer"><a href="{{ route('admin.logout') }}" class="logout-btn">🚪 Logout</a></div>
    </aside>

    <main class="main">
        <div class="page-header">
            <div>
                <h1>🗂 Manage Projects</h1>
                <p style="color:#888;margin-top:4px;">Add, edit, or toggle visibility of your portfolio projects.</p>
            </div>
            <button class="btn-primary" onclick="openModal()">＋ Add Project</button>
        </div>

        @if(session('success'))
            <div class="alert-success">✅ {{ session('success') }}</div>
        @endif

        <div class="section">
            <div class="section-header">
                <h2>All Projects ({{ $projects->count() }})</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Sort</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                        <tr>
                            <td><img class="project-img" src="{{ asset($project->banner_image) }}" alt="{{ $project->title }}"></td>
                            <td><strong>{{ $project->title }}</strong><br><span style="font-size:12px;color:#666;">{{ $project->slug }}</span></td>
                            <td><span class="badge badge-blue">{{ $project->category }}</span></td>
                            <td>{{ $project->sort }}</td>
                            <td>
                                <span class="badge {{ $project->status ? 'badge-green' : 'badge-red' }}">
                                    {{ $project->status ? 'Active' : 'Hidden' }}
                                </span>
                            </td>
                            <td>
                                <div class="actions-cell">
                                    <button class="btn-primary btn-sm btn-warning" onclick='editProject(@json($project))'>✏️ Edit</button>
                                    <form method="POST" action="{{ route('admin.project.toggle', $project->id) }}" style="display:inline;">
                                        @csrf @method('PATCH')
                                        <button type="submit" class="btn-primary btn-sm">
                                            {{ $project->status ? '🙈 Hide' : '👁 Show' }}
                                        </button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.project.delete', $project->id) }}" style="display:inline;" onsubmit="return confirm('Delete this project?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn-primary btn-sm btn-danger">🗑 Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" style="text-align:center;color:#555;padding:40px;">No projects yet. Add your first project!</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <!-- Add / Edit Modal -->
    <div class="modal-overlay" id="projectModal">
        <div class="modal">
            <h2 id="modalTitle">➕ Add New Project</h2>
            <form id="projectForm" method="POST" action="{{ route('admin.project.store') }}">
                @csrf
                <input type="hidden" name="_method" id="formMethod" value="POST">
                <input type="hidden" name="project_id" id="projectId">

                <div class="form-row">
                    <div class="form-group">
                        <label>Project Title *</label>
                        <input type="text" name="title" id="f_title" required placeholder="e.g. PasteBox — File Sharing">
                    </div>
                    <div class="form-group">
                        <label>Slug *</label>
                        <input type="text" name="slug" id="f_slug" required placeholder="e.g. pastebox-file-sharing">
                        <div class="form-hint">URL-friendly, lowercase, hyphens only</div>
                    </div>
                    <div class="form-group">
                        <label>GitHub Repo Name *</label>
                        <input type="text" name="repo_name" id="f_repo_name" required placeholder="e.g. pastebox-file-sharing-platform">
                    </div>
                    <div class="form-group">
                        <label>Category *</label>
                        <select name="category" id="f_category" required>
                            <option value="">Select Category</option>
                            <option value="MERN">MERN</option>
                            <option value="Laravel">Laravel</option>
                            <option value="DSA">DSA</option>
                            <option value="App">App</option>
                            <option value="Game">Game</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>GitHub URL *</label>
                        <input type="text" name="github_url" id="f_github_url" required placeholder="https://github.com/PrinceInScripts/...">
                    </div>
                    <div class="form-group">
                        <label>Live URL</label>
                        <input type="text" name="live_url" id="f_live_url" placeholder="https://your-project.com">
                    </div>
                    <div class="form-group">
                        <label>Banner Image URL *</label>
                        <input type="text" name="banner_image" id="f_banner_image" required placeholder="https://... or assets/images/...">
                    </div>
                    <div class="form-group">
                        <label>Video URL</label>
                        <input type="text" name="video_url" id="f_video_url" placeholder="https://...mp4">
                    </div>
                    <div class="form-group">
                        <label>Tech Stack (JSON array) *</label>
                        <input type="text" name="tech_stack" id="f_tech_stack" required placeholder='["React","Node.js","MongoDB"]'>
                        <div class="form-hint">Valid JSON array of strings</div>
                    </div>
                    <div class="form-group">
                        <label>Screenshots (JSON array)</label>
                        <input type="text" name="screenshot" id="f_screenshot" placeholder='["https://img1.png","https://img2.png"]'>
                    </div>
                    <div class="form-group">
                        <label>Sort Order</label>
                        <input type="number" name="sort" id="f_sort" value="1" min="1">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="f_status">
                            <option value="1">Active (Visible)</option>
                            <option value="0">Hidden</option>
                        </select>
                    </div>
                    <div class="form-group full">
                        <label>Short Description (HTML allowed)</label>
                        <textarea name="short_description" id="f_short_description" rows="3" placeholder="Brief description shown in listings..."></textarea>
                    </div>
                    <div class="form-group full">
                        <label>Long Description (HTML allowed)</label>
                        <textarea name="long_description" id="f_long_description" rows="5" placeholder="Detailed project description for the project detail page..."></textarea>
                    </div>
                    <div class="form-group full">
                        <label>Role &amp; Contribution (HTML/list)</label>
                        <textarea name="role_contribution" id="f_role_contribution" rows="4" placeholder="<ul><li>...</li></ul>"></textarea>
                    </div>
                    <div class="form-group full">
                        <label>Features (HTML/list)</label>
                        <textarea name="features" id="f_features" rows="4" placeholder="<ul><li>🔐 Feature 1</li></ul>"></textarea>
                    </div>
                </div>

                <div class="modal-actions">
                    <button type="button" class="btn-secondary" onclick="closeModal()">Cancel</button>
                    <button type="submit" class="btn-primary" id="submitBtn">➕ Add Project</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Auto-generate slug from title
        document.getElementById('f_title').addEventListener('input', function () {
            const val = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
            document.getElementById('f_slug').value = val;
        });

        function openModal(reset = true) {
            if (reset) {
                document.getElementById('modalTitle').textContent = '➕ Add New Project';
                document.getElementById('projectForm').action = '{{ route("admin.project.store") }}';
                document.getElementById('formMethod').value = 'POST';
                document.getElementById('submitBtn').textContent = '➕ Add Project';
                document.getElementById('projectForm').reset();
                document.getElementById('projectId').value = '';
            }
            document.getElementById('projectModal').classList.add('active');
        }

        function closeModal() {
            document.getElementById('projectModal').classList.remove('active');
        }

        function editProject(project) {
            document.getElementById('modalTitle').textContent = '✏️ Edit Project';
            document.getElementById('projectForm').action = '/admin/projects/' + project.id;
            document.getElementById('formMethod').value = 'PUT';
            document.getElementById('submitBtn').textContent = '💾 Save Changes';
            document.getElementById('projectId').value = project.id;

            // Populate fields
            document.getElementById('f_title').value          = project.title ?? '';
            document.getElementById('f_slug').value           = project.slug ?? '';
            document.getElementById('f_repo_name').value      = project.repo_name ?? '';
            document.getElementById('f_category').value       = project.category ?? '';
            document.getElementById('f_github_url').value     = project.github_url ?? '';
            document.getElementById('f_live_url').value       = project.live_url ?? '';
            document.getElementById('f_banner_image').value   = project.banner_image ?? '';
            document.getElementById('f_video_url').value      = project.video_url ?? '';
            document.getElementById('f_tech_stack').value     = project.tech_stack ?? '';
            document.getElementById('f_screenshot').value     = project.screenshot ?? '';
            document.getElementById('f_sort').value           = project.sort ?? 1;
            document.getElementById('f_status').value         = project.status ?? 1;
            document.getElementById('f_short_description').value   = project.short_description ?? '';
            document.getElementById('f_long_description').value    = project.long_description ?? '';
            document.getElementById('f_role_contribution').value   = project.role_contribution ?? '';
            document.getElementById('f_features').value            = project.features ?? '';

            openModal(false);
        }

        // Close on backdrop click
        document.getElementById('projectModal').addEventListener('click', function (e) {
            if (e.target === this) closeModal();
        });
    </script>
</body>
</html>
