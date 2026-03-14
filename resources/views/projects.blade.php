<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', [
        'title'       => 'Projects | Prince Kumar — Full-Stack Developer',
        'description' => 'Portfolio of projects by Prince Kumar (scriptxprince) — MERN stack, Laravel, PHP, React, Node.js and more. View live demos and GitHub repos.',
        'keywords'    => 'Prince Kumar projects, scriptxprince portfolio, MERN projects, Laravel projects, full stack developer projects India',
    ])

    <style>
        /* ─── Reset & Base ─────────────────────────────── */
        *, *::before, *::after { box-sizing: border-box; }

        /* ─── Page Layout ──────────────────────────────── */
        .projects-page {
            padding: 120px 0 100px;
            min-height: 100vh;
        }

        .projects-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 40px;
        }

        /* ─── Hero Title ────────────────────────────────── */
        .projects-hero {
            text-align: center;
            margin-bottom: 60px;
        }

        .projects-hero .eyebrow {
            display: inline-block;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #d20120;
            margin-bottom: 16px;
            padding: 6px 16px;
            border: 1px solid rgba(210,1,32,0.3);
            border-radius: 99px;
            background: rgba(210,1,32,0.06);
        }

        .projects-hero h1 {
            font-size: clamp(48px, 8vw, 96px);
            font-weight: 900;
            line-height: 1;
            letter-spacing: -2px;
            color: #fff;
            margin: 0 0 20px;
        }

        .projects-hero h1 em {
            font-style: normal;
            color: #d20120;
        }

        .projects-hero p {
            color: #666;
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto;
        }

        /* ─── Toolbar ───────────────────────────────────── */
        .projects-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 48px;
            flex-wrap: wrap;
        }

        /* Search */
        .search-wrap {
            position: relative;
            flex: 1;
            max-width: 320px;
        }

        .search-wrap svg {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #555;
            pointer-events: none;
            flex-shrink: 0;
        }

        #projectSearch {
            width: 100%;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 12px 16px 12px 42px;
            color: #fff;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s, background 0.2s;
            font-family: inherit;
        }

        #projectSearch::placeholder { color: #555; }
        #projectSearch:focus {
            border-color: rgba(210,1,32,0.5);
            background: rgba(255,255,255,0.06);
        }

        /* Layout toggle */
        .layout-toggle {
            display: flex;
            gap: 4px;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 10px;
            padding: 4px;
        }

        .layout-btn {
            background: none;
            border: none;
            color: #555;
            cursor: pointer;
            padding: 8px 10px;
            border-radius: 7px;
            transition: all 0.2s;
            display: flex;
            align-items: center;
        }

        .layout-btn.active {
            background: rgba(210,1,32,0.15);
            color: #d20120;
        }

        .layout-btn:hover:not(.active) { color: #fff; background: rgba(255,255,255,0.06); }

        /* Result count */
        .result-count {
            font-size: 13px;
            color: #555;
            white-space: nowrap;
        }

        .result-count strong { color: #d20120; }

        /* ─── Filter Tabs ───────────────────────────────── */
        .filter-bar {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-tab {
            position: relative;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            padding: 10px 20px;
            color: #888;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: all 0.25s ease;
            font-family: inherit;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-tab:hover {
            color: #fff;
            border-color: rgba(255,255,255,0.25);
            background: rgba(255,255,255,0.04);
        }

        .filter-tab.active {
            color: #fff;
            border-color: #d20120;
            background: rgba(210,1,32,0.12);
        }

        .filter-tab .tab-count {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 20px;
            height: 20px;
            padding: 0 5px;
            border-radius: 5px;
            font-size: 10px;
            font-weight: 700;
            background: rgba(255,255,255,0.08);
            color: #888;
            transition: all 0.25s;
        }

        .filter-tab.active .tab-count {
            background: rgba(210,1,32,0.25);
            color: #ff6b6b;
        }

        /* ─── Project Grid ──────────────────────────────── */
        #projectGrid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            transition: opacity 0.2s ease;
        }

        #projectGrid.layout-list {
            grid-template-columns: 1fr;
        }

        #projectGrid.filtering {
            opacity: 0.4;
            pointer-events: none;
        }

        /* ─── Project Card ──────────────────────────────── */
        .project-card {
            background: #111;
            border: 1px solid rgba(255,255,255,0.07);
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            animation: cardIn 0.4s ease both;
        }

        .project-card:hover {
            transform: translateY(-6px);
            border-color: rgba(210,1,32,0.4);
            box-shadow: 0 20px 60px rgba(210,1,32,0.08), 0 8px 24px rgba(0,0,0,0.4);
        }

        .project-card.hidden {
            display: none;
        }

        @keyframes cardIn {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* Card image */
        .card-img-wrap {
            position: relative;
            overflow: hidden;
            height: 210px;
        }

        .card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            display: block;
        }

        .project-card:hover .card-img-wrap img {
            transform: scale(1.05);
        }

        .card-category-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 4px 10px;
            background: rgba(0,0,0,0.75);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(210,1,32,0.4);
            border-radius: 6px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #d20120;
        }

        .card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 50%);
            opacity: 0;
            transition: opacity 0.3s;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding-bottom: 20px;
        }

        .project-card:hover .card-overlay { opacity: 1; }

        .overlay-btn {
            background: #d20120;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 24px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.5px;
            cursor: pointer;
            text-decoration: none;
            transform: translateY(8px);
            transition: transform 0.3s ease 0.05s, background 0.2s;
        }

        .project-card:hover .overlay-btn { transform: translateY(0); }
        .overlay-btn:hover { background: #a8001a; }

        /* Card body */
        .card-body {
            padding: 20px 22px 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .card-title {
            font-size: 19px;
            font-weight: 800;
            color: #fff;
            line-height: 1.3;
            letter-spacing: -0.3px;
        }

        .card-desc {
            font-size: 13px;
            color: #777;
            line-height: 1.6;
            flex: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Tech stack pills */
        .stack-row {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        .stack-pill {
            padding: 4px 10px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            color: #aaa;
            transition: all 0.2s;
            letter-spacing: 0.3px;
        }

        .project-card:hover .stack-pill {
            border-color: rgba(210,1,32,0.2);
            color: #d8d8d8;
        }

        /* Card footer */
        .card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid rgba(255,255,255,0.06);
        }

        .card-view-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 700;
            color: #d20120;
            text-decoration: none;
            letter-spacing: 0.3px;
            transition: gap 0.2s;
        }

        .card-view-link:hover { gap: 10px; }
        .card-view-link svg { transition: transform 0.2s; }
        .card-view-link:hover svg { transform: translateX(3px); }

        /* ─── LIST Layout overrides ─────────────────────── */
        #projectGrid.layout-list .project-card {
            flex-direction: row;
            max-height: 200px;
        }

        #projectGrid.layout-list .card-img-wrap {
            width: 280px;
            min-width: 280px;
            height: 100%;
            border-radius: 0;
        }

        #projectGrid.layout-list .card-body {
            padding: 20px 28px;
        }

        #projectGrid.layout-list .card-desc {
            -webkit-line-clamp: 2;
        }

        #projectGrid.layout-list .card-overlay { display: none; }

        /* ─── Empty State ───────────────────────────────── */
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 80px 20px;
            display: none;
        }

        .empty-state .empty-icon {
            font-size: 56px;
            margin-bottom: 16px;
        }

        .empty-state h3 {
            font-size: 20px;
            color: #fff;
            margin-bottom: 8px;
        }

        .empty-state p { color: #555; font-size: 14px; }

        .empty-state.visible { display: block; }

        /* ─── Responsive ────────────────────────────────── */
        @media (max-width: 1100px) {
            #projectGrid { grid-template-columns: repeat(2, 1fr); }
        }

        @media (max-width: 720px) {
            .projects-container { padding: 0 20px; }
            #projectGrid { grid-template-columns: 1fr; }
            #projectGrid.layout-list .project-card { flex-direction: column; max-height: none; }
            #projectGrid.layout-list .card-img-wrap { width: 100%; height: 200px; }
            .projects-toolbar { flex-direction: column; align-items: stretch; }
            .search-wrap { max-width: 100%; }
            .result-count { text-align: center; }
        }
    </style>
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <x-loader />

    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box"><span class="scroll-to-btn__arrow"></span></span>
    </a>

    <x-header />

    <main id="up" class="js-animsition-overlay" data-animsition-overlay="true">
        <section class="pos-rel section-bg-dark-1 projects-page">
            <div class="projects-container">

                {{-- ─── Hero ─── --}}
                <div class="projects-hero">
                    <span class="eyebrow">Portfolio</span>
                    <h1>My <em>Projects</em></h1>
                    <p>Things I've built — from hackathon prototypes to production apps.</p>
                </div>

                {{-- ─── Filter Tabs ─── --}}
                <div class="filter-bar" id="filterBar">
                    @foreach ($filters as $filter)
                        @php
                            $cat = strtolower($filter);
                            $count = $cat === 'all'
                                ? $projects->count()
                                : $projects->where('category', $filter)->count();
                        @endphp
                        <button
                            class="filter-tab {{ $loop->first ? 'active' : '' }}"
                            data-category="{{ $cat }}"
                            aria-pressed="{{ $loop->first ? 'true' : 'false' }}"
                        >
                            {{ $filter }}
                            <span class="tab-count">{{ $count }}</span>
                        </button>
                    @endforeach
                </div>

                {{-- ─── Toolbar ─── --}}
                <div class="projects-toolbar">
                    {{-- Search --}}
                    <div class="search-wrap">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                        <input type="text" id="projectSearch" placeholder="Search projects or tech…" autocomplete="off">
                    </div>

                    {{-- Result count --}}
                    <div class="result-count" id="resultCount">
                        Showing <strong id="visibleCount">{{ $projects->count() }}</strong> of <strong>{{ $projects->count() }}</strong> projects
                    </div>

                    {{-- Layout toggle --}}
                    <div class="layout-toggle" role="group" aria-label="Layout">
                        <button class="layout-btn active" id="gridBtn" aria-label="Grid view" title="Grid view">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
                                <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
                            </svg>
                        </button>
                        <button class="layout-btn" id="listBtn" aria-label="List view" title="List view">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- ─── Project Grid ─── --}}
                <div id="projectGrid">
                    @foreach ($projects as $i => $project)
                        <div
                            class="project-card"
                            data-category="{{ strtolower($project->category) }}"
                            data-title="{{ strtolower($project->title) }}"
                            data-stack="{{ strtolower(implode(' ', json_decode($project->tech_stack, true) ?? [])) }}"
                            style="animation-delay: {{ $i * 60 }}ms"
                        >
                            {{-- Image --}}
                            <div class="card-img-wrap">
                                <img
                                    src="{{ asset($project->banner_image) }}"
                                    alt="{{ $project->title }} — by Prince Kumar"
                                    loading="lazy"
                                >
                                <span class="card-category-badge">{{ $project->category }}</span>
                                <div class="card-overlay">
                                    <a href="/project-details/{{ $project->slug }}" class="overlay-btn">View Details →</a>
                                </div>
                            </div>

                            {{-- Body --}}
                            <div class="card-body">
                                <div class="card-title">{{ $project->title }}</div>

                                <div class="card-desc">
                                    {{ strip_tags(html_entity_decode($project->short_description)) }}
                                </div>

                                <div class="stack-row">
                                    @foreach (json_decode($project->tech_stack) as $tech)
                                        <span class="stack-pill">{{ $tech }}</span>
                                    @endforeach
                                </div>

                                <div class="card-footer">
                                    <a href="/project-details/{{ $project->slug }}" class="card-view-link">
                                        View Project
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                                        </svg>
                                    </a>
                                    @if($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                                           style="color:#555;display:inline-flex;align-items:center;gap:4px;font-size:13px;text-decoration:none;transition:color 0.2s;"
                                           onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#555'">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.1.82-.26.82-.57v-2c-3.34.73-4.04-1.61-4.04-1.61-.54-1.38-1.33-1.75-1.33-1.75-1.08-.74.08-.73.08-.73 1.2.08 1.83 1.23 1.83 1.23 1.06 1.82 2.8 1.3 3.48.99.1-.77.41-1.3.75-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.17 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 0 1 3-.4c1.02.005 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.66 1.65.24 2.87.12 3.17.77.84 1.24 1.91 1.24 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.68.82.57C20.56 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/>
                                            </svg>
                                            GitHub
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Empty state --}}
                    <div class="empty-state" id="emptyState">
                        <div class="empty-icon">🔍</div>
                        <h3>No projects found</h3>
                        <p>Try a different filter or search term.</p>
                    </div>
                </div>

            </div>
        </section>
    </main>

    @include('components.footer')

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>

    <script>
    (function () {
        const grid        = document.getElementById('projectGrid');
        const cards       = Array.from(document.querySelectorAll('.project-card'));
        const tabs        = Array.from(document.querySelectorAll('.filter-tab'));
        const searchInput = document.getElementById('projectSearch');
        const visibleEl   = document.getElementById('visibleCount');
        const emptyState  = document.getElementById('emptyState');
        const gridBtn     = document.getElementById('gridBtn');
        const listBtn     = document.getElementById('listBtn');

        let activeCategory = 'all';
        let searchQuery    = '';

        /* ── Filter Logic ───────────────────────────── */
        function applyFilters() {
            grid.classList.add('filtering');

            setTimeout(() => {
                let visible = 0;

                cards.forEach(card => {
                    const cat   = card.dataset.category;
                    const title = card.dataset.title;
                    const stack = card.dataset.stack;

                    const matchCat    = activeCategory === 'all' || cat === activeCategory;
                    const matchSearch = !searchQuery ||
                        title.includes(searchQuery) ||
                        stack.includes(searchQuery) ||
                        cat.includes(searchQuery);

                    if (matchCat && matchSearch) {
                        card.classList.remove('hidden');
                        card.style.animationDelay = (visible * 40) + 'ms';
                        card.style.animation = 'none';
                        card.offsetHeight; // reflow
                        card.style.animation = '';
                        visible++;
                    } else {
                        card.classList.add('hidden');
                    }
                });

                visibleEl.textContent = visible;
                emptyState.classList.toggle('visible', visible === 0);
                grid.classList.remove('filtering');
            }, 120);
        }

        /* ── Tab Clicks ─────────────────────────────── */
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => {
                    t.classList.remove('active');
                    t.setAttribute('aria-pressed', 'false');
                });
                tab.classList.add('active');
                tab.setAttribute('aria-pressed', 'true');
                activeCategory = tab.dataset.category;
                applyFilters();
            });
        });

        /* ── Search ─────────────────────────────────── */
        let searchTimer;
        searchInput.addEventListener('input', () => {
            clearTimeout(searchTimer);
            searchTimer = setTimeout(() => {
                searchQuery = searchInput.value.toLowerCase().trim();
                applyFilters();
            }, 220);
        });

        /* ── Layout Toggle ──────────────────────────── */
        gridBtn.addEventListener('click', () => {
            grid.classList.remove('layout-list');
            gridBtn.classList.add('active');
            listBtn.classList.remove('active');
            localStorage.setItem('projectsLayout', 'grid');
        });

        listBtn.addEventListener('click', () => {
            grid.classList.add('layout-list');
            listBtn.classList.add('active');
            gridBtn.classList.remove('active');
            localStorage.setItem('projectsLayout', 'list');
        });

        // Restore saved layout
        if (localStorage.getItem('projectsLayout') === 'list') {
            listBtn.click();
        }

        /* ── URL hash filter on load ────────────────── */
        const hash = window.location.hash.replace('#', '').toLowerCase();
        if (hash) {
            const matchTab = tabs.find(t => t.dataset.category === hash);
            if (matchTab) matchTab.click();
        }

    })();
    </script>
</body>
</html>