<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', [
        'title'       => $problem->title . ' | DSA Tracker — Prince Kumar',
        'description' => 'Solution and approach for ' . $problem->title . ' — ' . $problem->pattern . ' pattern. By Prince Kumar (scriptxprince).',
        'keywords'    => 'DSA solution, ' . $problem->title . ', ' . $problem->pattern . ', Prince Kumar DSA',
    ])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github-dark.min.css">
    <style>
        :root {
            --red:    #d20120;
            --red-d:  rgba(210,1,32,0.1);
            --bg:     #080808;
            --card:   #111;
            --border: rgba(255,255,255,0.07);
            --muted:  #555;
        }

        .reveal { opacity:0; transform:translateY(24px); transition:opacity .6s cubic-bezier(.22,1,.36,1), transform .6s cubic-bezier(.22,1,.36,1); }
        .reveal.in { opacity:1; transform:none; }

        .show-page { max-width:900px; margin:0 auto; padding:130px 40px 80px; }

        /* Breadcrumb */
        .breadcrumb { display:flex; align-items:center; gap:8px; font-size:13px; color:var(--muted); margin-bottom:36px; flex-wrap:wrap; }
        .breadcrumb a { color:var(--muted); text-decoration:none; transition:color .2s; }
        .breadcrumb a:hover { color:#fff; }
        .breadcrumb .sep { color:#333; }
        .breadcrumb .current { color:#888; }

        /* Problem header */
        .prob-header { margin-bottom:40px; }
        .prob-meta-row { display:flex; flex-wrap:wrap; gap:8px; margin-bottom:16px; align-items:center; }
        .pill { display:inline-block; padding:4px 12px; border-radius:7px; font-size:11px; font-weight:700; letter-spacing:.5px; text-transform:uppercase; }
        .pill-easy   { background:rgba(74,222,128,.1);  color:#4ade80;  border:1px solid rgba(74,222,128,.2); }
        .pill-medium { background:rgba(251,191,36,.1);  color:#fbbf24;  border:1px solid rgba(251,191,36,.2); }
        .pill-hard   { background:rgba(248,113,113,.1); color:#f87171;  border:1px solid rgba(248,113,113,.2); }
        .badge { display:inline-block; padding:3px 10px; border-radius:6px; font-size:11px; font-weight:600; text-transform:uppercase; letter-spacing:.5px; background:rgba(255,255,255,.05); border:1px solid var(--border); color:#888; }
        .pattern-badge { background:var(--red-d); color:#ff9999; border:1px solid rgba(210,1,32,.2); }

        .prob-title { font-size:clamp(28px,4vw,44px); font-weight:900; color:#fff; letter-spacing:-1.5px; line-height:1.15; margin-bottom:12px; }
        .prob-date  { font-size:13px; color:var(--muted); }

        .prob-link {
            display:inline-flex; align-items:center; gap:6px; font-size:13px;
            font-weight:600; color:var(--red); text-decoration:none;
            padding:8px 16px; border:1px solid rgba(210,1,32,.3);
            border-radius:8px; background:var(--red-d);
            transition:background .2s; margin-top:16px;
        }
        .prob-link:hover { background:rgba(210,1,32,.2); }

        /* Complexity row */
        .complexity-row { display:flex; gap:16px; flex-wrap:wrap; margin-bottom:36px; }
        .complexity-box {
            display:flex; flex-direction:column; gap:4px;
            background:var(--card); border:1px solid var(--border);
            border-radius:10px; padding:14px 20px; flex:1; min-width:140px;
        }
        .complexity-box .clbl { font-size:10px; text-transform:uppercase; letter-spacing:2px; color:var(--muted); }
        .complexity-box .cval { font-size:18px; font-weight:700; color:#fff; font-family:monospace; }

        /* Sections */
        .prob-section { margin-bottom:36px; }
        .prob-section-title {
            font-size:13px; font-weight:700; text-transform:uppercase; letter-spacing:2px;
            color:var(--red); margin-bottom:14px;
            display:flex; align-items:center; gap:8px;
        }
        .prob-section-title::after { content:''; flex:1; height:1px; background:var(--border); }

        .prob-section-body {
            background:var(--card); border:1px solid var(--border);
            border-radius:12px; padding:22px 24px;
            font-size:15px; color:#bbb; line-height:1.8;
        }

        /* Code block */
        .code-wrap { position:relative; }
        .code-wrap pre { margin:0; border-radius:12px; overflow-x:auto; }
        .code-wrap code { font-size:13.5px !important; font-family:'Courier New', monospace !important; }
        .copy-btn {
            position:absolute; top:12px; right:12px;
            background:rgba(255,255,255,.08); border:1px solid var(--border);
            border-radius:7px; padding:6px 12px; font-size:12px; font-weight:600;
            color:#aaa; cursor:pointer; transition:all .2s;
        }
        .copy-btn:hover { background:rgba(210,1,32,.15); color:var(--red); border-color:rgba(210,1,32,.3); }
        .copy-btn.copied { color:#4ade80; border-color:rgba(74,222,128,.3); }

        /* Mistakes box */
        .mistakes-box {
            background:rgba(251,191,36,.05); border:1px solid rgba(251,191,36,.2);
            border-radius:12px; padding:22px 24px;
            font-size:15px; color:#e0c97a; line-height:1.8;
        }

        /* Nav prev/next */
        .prob-nav { display:flex; justify-content:space-between; gap:16px; margin-top:52px; padding-top:32px; border-top:1px solid var(--border); }
        .nav-link {
            display:flex; align-items:center; gap:10px;
            background:var(--card); border:1px solid var(--border);
            border-radius:12px; padding:16px 20px; text-decoration:none;
            flex:1; max-width:320px; transition:border-color .2s;
        }
        .nav-link:hover { border-color:rgba(210,1,32,.35); }
        .nav-link.next  { margin-left:auto; text-align:right; flex-direction:row-reverse; }
        .nav-link .dir  { font-size:10px; text-transform:uppercase; letter-spacing:2px; color:var(--muted); margin-bottom:4px; }
        .nav-link .ntitle { font-size:14px; font-weight:600; color:#fff; }
        .nav-arrow { font-size:18px; color:var(--red); flex-shrink:0; }

        /* Back button */
        .back-btn {
            display:inline-flex; align-items:center; gap:8px;
            font-size:13px; font-weight:600; color:var(--muted);
            text-decoration:none; transition:color .2s;
            margin-bottom:36px;
        }
        .back-btn:hover { color:#fff; }

        @media(max-width:680px) { .show-page { padding:110px 20px 60px; } .complexity-row { flex-direction:column; } .prob-nav { flex-direction:column; } .nav-link.next { margin-left:0; } }
    </style>
</head>
<body class="preloader cursor-anim-enable dark-nav">
    <x-loader />
    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box"><span class="scroll-to-btn__arrow"></span></span>
    </a>
    <x-header />

    <main id="up" class="js-animsition-overlay" data-animsition-overlay="true">
        <div class="show-page">

            {{-- Breadcrumb --}}
            <div class="breadcrumb reveal">
                <a href="/">Home</a>
                <span class="sep">›</span>
                <a href="{{ route('dsa.index') }}">DSA Tracker</a>
                <span class="sep">›</span>
                <span class="current">{{ Str::limit($problem->title, 40) }}</span>
            </div>

            {{-- Back --}}
            <a href="{{ route('dsa.index') }}" class="back-btn reveal">
                ← Back to all problems
            </a>

            {{-- Header --}}
            <div class="prob-header reveal">
                <div class="prob-meta-row">
                    @php $cls = match($problem->difficulty){ 'Easy'=>'pill-easy','Hard'=>'pill-hard',default=>'pill-medium' }; @endphp
                    <span class="pill {{ $cls }}">{{ $problem->difficulty }}</span>
                    <span class="badge pattern-badge">{{ $problem->pattern }}</span>
                    <span class="badge">{{ $problem->platform }}</span>
                </div>
                <h1 class="prob-title">{{ $problem->title }}</h1>
                <div class="prob-date">Solved on {{ \Carbon\Carbon::parse($problem->solved_date)->format('d F Y') }}</div>
                @if($problem->problem_link)
                    <a href="{{ $problem->problem_link }}" target="_blank" rel="noopener noreferrer" class="prob-link">
                        View Problem on {{ $problem->platform }} ↗
                    </a>
                @endif
            </div>

            {{-- Complexity --}}
            @if($problem->time_complexity || $problem->space_complexity)
            <div class="complexity-row reveal">
                @if($problem->time_complexity)
                <div class="complexity-box">
                    <span class="clbl">Time Complexity</span>
                    <span class="cval">{{ $problem->time_complexity }}</span>
                </div>
                @endif
                @if($problem->space_complexity)
                <div class="complexity-box">
                    <span class="clbl">Space Complexity</span>
                    <span class="cval">{{ $problem->space_complexity }}</span>
                </div>
                @endif
            </div>
            @endif

            {{-- Key Idea --}}
            @if($problem->key_idea)
            <div class="prob-section reveal">
                <div class="prob-section-title">💡 Key Idea</div>
                <div class="prob-section-body">{{ $problem->key_idea }}</div>
            </div>
            @endif

            {{-- Approach --}}
            @if($problem->approach)
            <div class="prob-section reveal">
                <div class="prob-section-title">🧠 Approach</div>
                <div class="prob-section-body" style="white-space:pre-wrap;">{{ $problem->approach }}</div>
            </div>
            @endif

            {{-- Code --}}
            @if($problem->code_solution)
            <div class="prob-section reveal">
                <div class="prob-section-title">👨‍💻 Code Solution</div>
                <div class="code-wrap">
                    <button class="copy-btn" id="copyBtn" onclick="copyCode()">Copy</button>
                    <pre><code class="language-javascript" id="codeBlock">{{ $problem->code_solution }}</code></pre>
                </div>
            </div>
            @endif

            {{-- Mistakes / Learnings --}}
            @if($problem->mistakes_learnings)
            <div class="prob-section reveal">
                <div class="prob-section-title">⚠️ Mistakes & Learnings</div>
                <div class="mistakes-box" style="white-space:pre-wrap;">{{ $problem->mistakes_learnings }}</div>
            </div>
            @endif

            {{-- Prev / Next --}}
            <div class="prob-nav reveal">
                @if($prev)
                    <a href="{{ route('dsa.show', $prev->id) }}" class="nav-link">
                        <span class="nav-arrow">←</span>
                        <div>
                            <div class="dir">Previous</div>
                            <div class="ntitle">{{ Str::limit($prev->title, 40) }}</div>
                        </div>
                    </a>
                @else
                    <div></div>
                @endif

                @if($next)
                    <a href="{{ route('dsa.show', $next->id) }}" class="nav-link next">
                        <span class="nav-arrow">→</span>
                        <div>
                            <div class="dir">Next</div>
                            <div class="ntitle">{{ Str::limit($next->title, 40) }}</div>
                        </div>
                    </a>
                @endif
            </div>

        </div>
    </main>

    {{-- @include('components.footer') --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>

    <script>
    hljs.highlightAll();

    const io = new IntersectionObserver(e => e.forEach(x => { if(x.isIntersecting){ x.target.classList.add('in'); io.unobserve(x.target); } }), { threshold:.08, rootMargin:'0px 0px -40px 0px' });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));

    function copyCode() {
        const code = document.getElementById('codeBlock').innerText;
        navigator.clipboard.writeText(code).then(() => {
            const btn = document.getElementById('copyBtn');
            btn.textContent = 'Copied!'; btn.classList.add('copied');
            setTimeout(() => { btn.textContent = 'Copy'; btn.classList.remove('copied'); }, 2000);
        });
    }
    </script>
</body>
</html>
