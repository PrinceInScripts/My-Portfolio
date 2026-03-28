<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', [
        'title'       => 'DSA Tracker | Prince Kumar — scriptxprince',
        'description' => 'DSA problem solving tracker by Prince Kumar. Documenting LeetCode solutions, patterns, approaches and learnings daily.',
        'keywords'    => 'DSA tracker, LeetCode solutions, Prince Kumar DSA, scriptxprince leetcode, data structures algorithms',
    ])
    <style>
        :root {
            --red:    #d20120;
            --red-d:  rgba(210,1,32,0.12);
            --bg:     #080808;
            --bg2:    #0e0e0e;
            --card:   #111;
            --border: rgba(255,255,255,0.07);
            --muted:  #555;
            --text:   #ccc;
        }

        /* ── Reveal ── */
        .reveal { opacity:0; transform:translateY(28px); transition: opacity .65s cubic-bezier(.22,1,.36,1), transform .65s cubic-bezier(.22,1,.36,1); }
        .reveal.in { opacity:1; transform:none; }

        /* ── Page ── */
        .dsa-page { padding:130px 40px 80px; max-width:1240px; margin:0 auto; }

        /* ── Hero ── */
        .dsa-hero { margin-bottom:56px; }
        .dsa-eyebrow {
            display:inline-flex; align-items:center; gap:8px;
            font-size:11px; font-weight:700; letter-spacing:4px;
            text-transform:uppercase; color:var(--red); margin-bottom:16px;
        }
        .dsa-eyebrow::before { content:''; width:28px; height:2px; background:var(--red); }
        .dsa-title {
            font-size:clamp(38px,5vw,68px); font-weight:900;
            letter-spacing:-2px; color:#fff; line-height:1.05; margin:0 0 16px;
        }
        .dsa-title em { font-style:normal; color:var(--red); }
        .dsa-sub { font-size:16px; color:var(--muted); line-height:1.7; max-width:580px; }

        /* ── Stats Bar ── */
        .stats-bar {
            display:grid; grid-template-columns:repeat(5,1fr);
            gap:16px; margin-bottom:48px;
        }
        .stat-card {
            background:var(--card); border:1px solid var(--border);
            border-radius:14px; padding:22px 20px;
            transition: border-color .25s, transform .25s;
        }
        .stat-card:hover { border-color:rgba(210,1,32,.3); transform:translateY(-2px); }
        .stat-card .val {
            font-size:36px; font-weight:900; color:#fff;
            line-height:1; letter-spacing:-1px;
        }
        .stat-card .val span { color:var(--red); }
        .stat-card .lbl {
            font-size:11px; text-transform:uppercase; letter-spacing:2px;
            color:var(--muted); margin-top:6px;
        }
        .stat-easy   .val { color:#4ade80; }
        .stat-medium .val { color:#fbbf24; }
        .stat-hard   .val { color:#f87171; }
        .stat-streak .val { color:#a78bfa; }

        /* ── Toolbar ── */
        .toolbar {
            display:flex; gap:12px; align-items:center;
            flex-wrap:wrap; margin-bottom:28px;
        }
        .search-wrap { position:relative; flex:1; min-width:220px; }
        .search-wrap svg { position:absolute; left:13px; top:50%; transform:translateY(-50%); color:var(--muted); pointer-events:none; }
        #search {
            width:100%; background:var(--card); border:1px solid var(--border);
            border-radius:10px; padding:11px 14px 11px 40px;
            color:#fff; font-size:14px; outline:none; font-family:inherit;
            transition:border-color .2s;
        }
        #search:focus { border-color:rgba(210,1,32,.4); }
        #search::placeholder { color:var(--muted); }

        .filter-select {
            background:var(--card); border:1px solid var(--border);
            border-radius:10px; padding:11px 16px;
            color:#fff; font-size:13px; outline:none; cursor:pointer;
            font-family:inherit; transition:border-color .2s;
        }
        .filter-select:focus { border-color:rgba(210,1,32,.4); }
        .filter-select option { background:#111; }

        .result-info { font-size:13px; color:var(--muted); white-space:nowrap; }
        .result-info strong { color:var(--red); }

        /* ── Difficulty pills ── */
        .pill {
            display:inline-block; padding:3px 10px; border-radius:6px;
            font-size:11px; font-weight:700; letter-spacing:.5px; text-transform:uppercase;
        }
        .pill-easy   { background:rgba(74,222,128,.1);  color:#4ade80;  border:1px solid rgba(74,222,128,.2); }
        .pill-medium { background:rgba(251,191,36,.1);  color:#fbbf24;  border:1px solid rgba(251,191,36,.2); }
        .pill-hard   { background:rgba(248,113,113,.1); color:#f87171;  border:1px solid rgba(248,113,113,.2); }

        .platform-badge {
            display:inline-block; padding:2px 8px; border-radius:5px;
            font-size:10px; font-weight:700; letter-spacing:.5px; text-transform:uppercase;
            background:rgba(255,255,255,.05); border:1px solid var(--border); color:#888;
        }

        .pattern-tag {
            display:inline-block; padding:3px 10px; border-radius:6px;
            font-size:11px; font-weight:600; background:var(--red-d);
            color:#ff9999; border:1px solid rgba(210,1,32,.2);
        }

        /* ── Problem Grid ── */
        #problemGrid {
            display:grid; grid-template-columns:repeat(3,1fr); gap:18px;
        }

        .problem-card {
            background:var(--card); border:1px solid var(--border);
            border-radius:14px; padding:22px 22px 20px;
            text-decoration:none; display:block;
            transition:border-color .25s, transform .25s, box-shadow .25s;
            position:relative; overflow:hidden;
            animation: cardIn .35s ease both;
        }
        @keyframes cardIn { from{opacity:0;transform:translateY(16px)} to{opacity:1;transform:none} }

        .problem-card::before {
            content:''; position:absolute; top:0; left:0; right:0;
            height:2px; background:transparent;
            transition: background .25s;
        }
        .problem-card:hover { border-color:rgba(210,1,32,.3); transform:translateY(-3px); box-shadow:0 16px 48px rgba(0,0,0,.4); }
        .problem-card:hover::before { background:var(--red); }

        .card-top { display:flex; justify-content:space-between; align-items:flex-start; gap:8px; margin-bottom:12px; }
        .card-num { font-size:11px; color:var(--muted); font-family:monospace; }
        .card-title { font-size:16px; font-weight:700; color:#fff; line-height:1.35; margin-bottom:10px; }
        .card-meta  { display:flex; flex-wrap:wrap; gap:6px; margin-bottom:14px; }
        .card-footer { display:flex; justify-content:space-between; align-items:center; padding-top:12px; border-top:1px solid var(--border); }
        .card-date  { font-size:11px; color:var(--muted); }
        .card-arrow { font-size:13px; color:var(--red); transition:transform .2s; }
        .problem-card:hover .card-arrow { transform:translateX(4px); }

        /* ── Key idea preview ── */
        .card-idea {
            font-size:12px; color:var(--muted); line-height:1.6;
            margin-bottom:10px;
            display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;
        }

        /* ── Empty state ── */
        .empty-state { grid-column:1/-1; text-align:center; padding:80px 20px; }
        .empty-state .icon { font-size:52px; margin-bottom:16px; }
        .empty-state h3 { font-size:20px; color:#fff; margin-bottom:8px; }
        .empty-state p  { color:var(--muted); font-size:14px; }
        .empty-state.hidden { display:none; }

        /* ── Responsive ── */
        @media(max-width:1024px) { #problemGrid { grid-template-columns:repeat(2,1fr); } .stats-bar { grid-template-columns:repeat(3,1fr); } }
        @media(max-width:680px)  { .dsa-page { padding:110px 20px 60px; } #problemGrid { grid-template-columns:1fr; } .stats-bar { grid-template-columns:repeat(2,1fr); } .toolbar { flex-direction:column; } .search-wrap { min-width:100%; } }
    </style>
</head>
<body class="preloader cursor-anim-enable dark-nav">
    <x-loader />
    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box"><span class="scroll-to-btn__arrow"></span></span>
    </a>
    <x-header />

    <main id="up" class="js-animsition-overlay" data-animsition-overlay="true">
        <div class="dsa-page">

            {{-- Hero --}}
            <div class="dsa-hero">
                <div class="dsa-eyebrow reveal">Problem Solving</div>
                <h1 class="dsa-title reveal">DSA <em>Tracker</em></h1>
                <p class="dsa-sub reveal">
                    A daily log of data structures & algorithm problems — patterns, approaches,
                    and learnings. Proof of consistency, not just notes.
                </p>
            </div>

            {{-- Stats Bar --}}
            <div class="stats-bar reveal-group">
                <div class="stat-card reveal">
                    <div class="val">{{ $total }}<span>+</span></div>
                    <div class="lbl">Total Solved</div>
                </div>
                <div class="stat-card stat-easy reveal">
                    <div class="val">{{ $easy }}</div>
                    <div class="lbl">Easy</div>
                </div>
                <div class="stat-card stat-medium reveal">
                    <div class="val">{{ $medium }}</div>
                    <div class="lbl">Medium</div>
                </div>
                <div class="stat-card stat-hard reveal">
                    <div class="val">{{ $hard }}</div>
                    <div class="lbl">Hard</div>
                </div>
                <div class="stat-card stat-streak reveal">
                    <div class="val">{{ $streak }}<span>🔥</span></div>
                    <div class="lbl">Day Streak</div>
                    @if($topPattern)
                        <div style="font-size:11px;color:#888;margin-top:4px;">Top: {{ $topPattern->pattern }}</div>
                    @endif
                </div>
            </div>

            {{-- Toolbar --}}
            <div class="toolbar reveal">
                <div class="search-wrap">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" id="search" placeholder="Search problem title…" value="{{ $request->search ?? '' }}">
                </div>

                <select class="filter-select" id="filterDifficulty">
                    <option value="">All Difficulties</option>
                    <option value="Easy"   {{ ($request->difficulty ?? '') === 'Easy'   ? 'selected' : '' }}>Easy</option>
                    <option value="Medium" {{ ($request->difficulty ?? '') === 'Medium' ? 'selected' : '' }}>Medium</option>
                    <option value="Hard"   {{ ($request->difficulty ?? '') === 'Hard'   ? 'selected' : '' }}>Hard</option>
                </select>

                <select class="filter-select" id="filterPattern">
                    <option value="">All Patterns</option>
                    @foreach($patterns as $pattern)
                        <option value="{{ $pattern }}" {{ ($request->pattern ?? '') === $pattern ? 'selected' : '' }}>{{ $pattern }}</option>
                    @endforeach
                </select>

                <div class="result-info">
                    Showing <strong id="visibleCount">{{ $problems->count() }}</strong> of <strong>{{ $total }}</strong>
                </div>
            </div>

            {{-- Problem Cards --}}
            <div id="problemGrid" class="reveal">
                @forelse($problems as $i => $p)
                    <a href="{{ route('dsa.show', $p->id) }}"
                       class="problem-card"
                       data-title="{{ strtolower($p->title) }}"
                       data-difficulty="{{ $p->difficulty }}"
                       data-pattern="{{ $p->pattern }}"
                       style="animation-delay:{{ min($i * 40, 400) }}ms">

                        <div class="card-top">
                            <span class="card-num">#{{ str_pad($i+1, 3, '0', STR_PAD_LEFT) }}</span>
                            <span class="platform-badge">{{ $p->platform }}</span>
                        </div>

                        <div class="card-title">{{ $p->title }}</div>

                        @if($p->key_idea)
                            <div class="card-idea">{{ $p->key_idea }}</div>
                        @endif

                        <div class="card-meta">
                            @php
                                $cls = match($p->difficulty) { 'Easy'=>'pill-easy', 'Hard'=>'pill-hard', default=>'pill-medium' };
                            @endphp
                            <span class="pill {{ $cls }}">{{ $p->difficulty }}</span>
                            <span class="pattern-tag">{{ $p->pattern }}</span>
                            @if($p->time_complexity)
                                <span class="platform-badge">⏱ {{ $p->time_complexity }}</span>
                            @endif
                        </div>

                        <div class="card-footer">
                            <span class="card-date">{{ \Carbon\Carbon::parse($p->solved_date)->format('d M Y') }}</span>
                            <span class="card-arrow">→</span>
                        </div>
                    </a>
                @empty
                    <div class="empty-state">
                        <div class="icon">🧩</div>
                        <h3>No problems logged yet</h3>
                        <p>Check back soon — problems will appear here as they're added.</p>
                    </div>
                @endforelse

                <div class="empty-state hidden" id="noResults">
                    <div class="icon">🔍</div>
                    <h3>No problems match</h3>
                    <p>Try a different filter or search term.</p>
                </div>
            </div>

        </div>
    </main>

    {{-- @include('components.footer') --}}

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>

    <script>
    /* Scroll reveal */
    const io = new IntersectionObserver(e => e.forEach(x => { if(x.isIntersecting){ x.target.classList.add('in'); io.unobserve(x.target); } }), { threshold:.1, rootMargin:'0px 0px -50px 0px' });
    document.querySelectorAll('.reveal').forEach((el,i) => {
        if(el.closest('.reveal-group')){ const s = el.closest('.reveal-group').querySelectorAll('.reveal'); el.style.transitionDelay = (Array.from(s).indexOf(el)*70)+'ms'; }
        io.observe(el);
    });

    /* Client-side filter */
    const cards = Array.from(document.querySelectorAll('.problem-card'));
    const noRes = document.getElementById('noResults');
    const cnt   = document.getElementById('visibleCount');
    let search='', difficulty='', pattern='';

    function applyFilters() {
        let visible = 0;
        cards.forEach((c,i) => {
            const ok =
                (!search     || c.dataset.title.includes(search)) &&
                (!difficulty || c.dataset.difficulty === difficulty) &&
                (!pattern    || c.dataset.pattern === pattern);
            c.style.display = ok ? '' : 'none';
            if(ok){ c.style.animationDelay = (visible*35)+'ms'; visible++; }
        });
        cnt.textContent = visible;
        noRes.classList.toggle('hidden', visible > 0);
    }

    let timer;
    document.getElementById('search').addEventListener('input', e => {
        clearTimeout(timer);
        timer = setTimeout(() => { search = e.target.value.toLowerCase().trim(); applyFilters(); }, 200);
    });
    document.getElementById('filterDifficulty').addEventListener('change', e => { difficulty = e.target.value; applyFilters(); });
    document.getElementById('filterPattern').addEventListener('change',    e => { pattern    = e.target.value; applyFilters(); });
    </script>
</body>
</html>
