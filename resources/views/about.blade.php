<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', [
        'title'       => 'About Prince Kumar | Full-Stack Developer — scriptxprince',
        'description' => 'Learn about Prince Kumar (scriptxprince) — Full-Stack Developer from Kota, India. BCA student, freelancer, GitHub & LeetCode enthusiast.',
        'keywords'    => 'Prince Kumar about, scriptxprince developer, full stack developer Kota India, BCA developer, freelance developer India, GitHub LeetCode',
    ])

    <style>
        /* ───────────────────────────────────────────────────
           CSS VARIABLES
        ─────────────────────────────────────────────────── */
        :root {
            --red:      #d20120;
            --red-dim:  rgba(210,1,32,0.12);
            --red-glow: rgba(210,1,32,0.25);
            --white:    #ffffff;
            --off:      #f5f0eb;
            --muted:    #666;
            --border:   rgba(255,255,255,0.08);
            --card-bg:  #111111;
            --page-bg:  #0a0a0a;
        }

        /* ───────────────────────────────────────────────────
           SCROLL REVEAL — base state
        ─────────────────────────────────────────────────── */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s cubic-bezier(.22,1,.36,1),
                        transform 0.7s cubic-bezier(.22,1,.36,1);
        }
        .reveal.reveal--left  { transform: translateX(-50px); }
        .reveal.reveal--right { transform: translateX(50px); }
        .reveal.reveal--scale { transform: scale(0.94); }
        .reveal.in-view {
            opacity: 1;
            transform: none;
        }

        /* stagger siblings */
        .reveal-group .reveal:nth-child(1) { transition-delay: 0ms; }
        .reveal-group .reveal:nth-child(2) { transition-delay: 100ms; }
        .reveal-group .reveal:nth-child(3) { transition-delay: 200ms; }
        .reveal-group .reveal:nth-child(4) { transition-delay: 300ms; }
        .reveal-group .reveal:nth-child(5) { transition-delay: 400ms; }

        /* ───────────────────────────────────────────────────
           HERO SECTION
        ─────────────────────────────────────────────────── */
        .about-hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: var(--page-bg);
            padding: 140px 40px 80px;
        }

        /* Big decorative background number */
        .about-hero::before {
            content: "01";
            position: absolute;
            right: -60px;
            top: 50%;
            transform: translateY(-50%);
            font-size: clamp(200px, 30vw, 400px);
            font-weight: 900;
            color: rgba(255,255,255,0.02);
            line-height: 1;
            pointer-events: none;
            user-select: none;
        }

        /* Red accent line left */
        .about-hero::after {
            content: '';
            position: absolute;
            left: 0; top: 20%; bottom: 20%;
            width: 3px;
            background: linear-gradient(to bottom, transparent, var(--red), transparent);
        }

        .hero-inner {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: 24px;
        }

        .hero-eyebrow::before {
            content: '';
            display: block;
            width: 28px;
            height: 2px;
            background: var(--red);
        }

        .hero-title {
            font-size: clamp(42px, 5vw, 72px);
            font-weight: 900;
            line-height: 1.05;
            letter-spacing: -2px;
            color: var(--white);
            margin: 0 0 28px;
        }

        .hero-title em {
            font-style: normal;
            color: var(--red);
            display: block;
        }

        .hero-body {
            font-size: 16px;
            line-height: 1.85;
            color: var(--muted);
            max-width: 520px;
        }

        .hero-body strong { color: #ccc; font-weight: 600; }

        .hero-cta-row {
            display: flex;
            gap: 16px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        /* Right — identity card */
        .identity-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .identity-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--red), transparent);
        }

        .id-label {
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 28px;
        }

        .id-name {
            font-size: 28px;
            font-weight: 800;
            color: var(--white);
            margin-bottom: 4px;
        }

        .id-handle {
            font-size: 14px;
            color: var(--red);
            font-family: monospace;
            margin-bottom: 28px;
        }

        .id-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 28px;
        }

        .id-badge {
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .id-badge--red  { background: var(--red-dim); color: #ff7070; border: 1px solid var(--red-glow); }
        .id-badge--gray { background: rgba(255,255,255,0.05); color: #aaa; border: 1px solid rgba(255,255,255,0.08); }

        .id-meta {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .id-meta-item { display: flex; flex-direction: column; gap: 4px; }
        .id-meta-item .label { font-size: 10px; text-transform: uppercase; letter-spacing: 2px; color: var(--muted); }
        .id-meta-item .val   { font-size: 14px; color: #ccc; font-weight: 500; }

        /* ───────────────────────────────────────────────────
           SECTION COMMON
        ─────────────────────────────────────────────────── */
        .about-section {
            padding: 100px 40px;
            position: relative;
            overflow: hidden;
        }

        .about-section--alt { background: #0d0d0d; }

        .section-inner {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: 20px;
        }

        .section-label::after {
            content: '';
            display: block;
            width: 40px;
            height: 1px;
            background: var(--red);
        }

        .section-title {
            font-size: clamp(32px, 4vw, 54px);
            font-weight: 900;
            color: var(--white);
            line-height: 1.1;
            letter-spacing: -1.5px;
            margin: 0 0 32px;
        }

        .section-title span { color: var(--red); }

        /* ───────────────────────────────────────────────────
           APPROACH PILLARS
        ─────────────────────────────────────────────────── */
        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 48px;
        }

        .pillar-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 32px;
            position: relative;
            transition: border-color 0.3s, transform 0.3s;
        }

        .pillar-card:hover {
            border-color: rgba(210,1,32,0.35);
            transform: translateY(-4px);
        }

        .pillar-number {
            font-size: 56px;
            font-weight: 900;
            color: rgba(255,255,255,0.04);
            line-height: 1;
            margin-bottom: 16px;
            font-family: monospace;
        }

        .pillar-icon {
            font-size: 28px;
            margin-bottom: 14px;
            display: block;
        }

        .pillar-title {
            font-size: 18px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 10px;
        }

        .pillar-body {
            font-size: 14px;
            color: var(--muted);
            line-height: 1.7;
        }

        /* ───────────────────────────────────────────────────
           QUOTE BANNER
        ─────────────────────────────────────────────────── */
        .quote-section {
            padding: 100px 40px;
            background: var(--page-bg);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .quote-section::before,
        .quote-section::after {
            content: '"';
            position: absolute;
            font-size: 300px;
            font-weight: 900;
            color: rgba(210,1,32,0.04);
            line-height: 1;
            pointer-events: none;
        }

        .quote-section::before { left: -20px; top: -40px; }
        .quote-section::after  { right: -20px; bottom: -80px; transform: scaleX(-1); }

        .big-quote {
            max-width: 860px;
            margin: 0 auto;
            font-size: clamp(22px, 3vw, 36px);
            font-weight: 700;
            color: var(--white);
            line-height: 1.5;
            letter-spacing: -0.5px;
            position: relative;
            z-index: 1;
        }

        .big-quote em {
            font-style: normal;
            color: var(--red);
        }

        .quote-attr {
            margin-top: 24px;
            font-size: 14px;
            color: var(--muted);
            position: relative;
            z-index: 1;
        }

        /* ───────────────────────────────────────────────────
           CODING JOURNEY CARDS
        ─────────────────────────────────────────────────── */
        .journey-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
            margin-top: 48px;
        }

        .journey-card {
            background: var(--card-bg);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 36px;
            position: relative;
            overflow: hidden;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .journey-card:hover {
            border-color: rgba(210,1,32,0.3);
            box-shadow: 0 24px 60px rgba(0,0,0,0.5), 0 0 0 1px rgba(210,1,32,0.08);
        }

        /* Subtle corner glow on hover */
        .journey-card::after {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 120px; height: 120px;
            background: radial-gradient(circle at top right, var(--red-dim), transparent 70%);
            opacity: 0;
            transition: opacity 0.4s;
            pointer-events: none;
        }

        .journey-card:hover::after { opacity: 1; }

        .journey-card-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 16px;
            font-weight: 700;
            color: var(--red);
            margin-bottom: 28px;
        }

        /* Profile row */
        .dev-profile {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 28px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border);
        }

        .dev-avatar {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            border: 2px solid rgba(210,1,32,0.3);
            object-fit: cover;
            flex-shrink: 0;
        }

        .dev-name  { font-size: 17px; font-weight: 700; color: var(--white); }
        .dev-handle{ font-size: 13px; color: var(--muted); margin-top: 2px; }

        /* Stat grid inside cards */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 20px;
        }

        .stat-box {
            background: rgba(255,255,255,0.03);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 14px 10px;
            text-align: center;
        }

        .stat-box .val  { font-size: 22px; font-weight: 800; color: var(--white); line-height: 1; }
        .stat-box .lbl  { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: var(--muted); margin-top: 4px; }

        /* Github card stat grid — 5 cols */
        .stat-grid--5 { grid-template-columns: repeat(5, 1fr); }

        .meta-row {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 20px;
        }

        .meta-item { font-size: 13px; color: #888; display: flex; align-items: center; gap: 6px; }
        .meta-item .lang-dot { color: #34d399; font-weight: 600; }

        /* Difficulty row */
        .diff-row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 8px;
            margin-bottom: 20px;
        }

        .diff-box {
            background: rgba(255,255,255,0.03);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 14px 10px;
            text-align: center;
        }

        .diff-box .dval { font-size: 24px; font-weight: 800; }
        .diff-box .dlbl { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; color: var(--muted); margin-top: 4px; }
        .diff-easy   { color: #4ade80; }
        .diff-medium { color: #fbbf24; }
        .diff-hard   { color: #f87171; }

        .streak-banner {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(210,1,32,0.08);
            border: 1px solid rgba(210,1,32,0.2);
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 14px;
            font-weight: 600;
            color: #ff9999;
            margin-bottom: 20px;
        }

        /* ───────────────────────────────────────────────────
           SKILLS SECTION
        ─────────────────────────────────────────────────── */
        .skills-section {
            padding: 100px 40px;
            background: var(--page-bg);
        }

        .skills-inner {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* ───────────────────────────────────────────────────
           MOBILE
        ─────────────────────────────────────────────────── */
        @media (max-width: 1024px) {
            .hero-inner    { grid-template-columns: 1fr; gap: 48px; }
            .pillars-grid  { grid-template-columns: 1fr 1fr; }
            .about-hero::before { display: none; }
        }

        @media (max-width: 768px) {
            .about-hero, .about-section, .quote-section, .skills-section { padding: 80px 24px; }
            .hero-title    { font-size: 38px; letter-spacing: -1px; }
            .pillars-grid  { grid-template-columns: 1fr; }
            .journey-grid  { grid-template-columns: 1fr; }
            .stat-grid--5  { grid-template-columns: repeat(3, 1fr); }
            .id-meta       { grid-template-columns: 1fr; }
        }

        @media (max-width: 480px) {
            .stat-grid     { grid-template-columns: repeat(2, 1fr); }
        }
    </style>
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <x-loader />

    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box"><span class="scroll-to-btn__arrow"></span></span>
    </a>
    <a href="#down" class="scroll-to-btn to-down js-headroom js-midnight-color js-smooth-scroll js-pointer-large js-scroll-btn">
        <span class="scroll-to-btn__box"><span class="scroll-to-btn__arrow"></span></span>
    </a>

    <x-header />

    <main class="js-animsition-overlay" data-animsition-overlay="true">

        {{-- ══════════════════════════════════════════
             HERO
        ══════════════════════════════════════════ --}}
        <section id="up" class="about-hero">
            <div class="hero-inner">

                {{-- Left: text --}}
                <div>
                    <div class="hero-eyebrow reveal">About Me</div>

                    <h1 class="hero-title reveal">
                        Building the web,
                        <em>one commit at a time.</em>
                    </h1>

                    <p class="hero-body reveal">
                        I'm <strong>Prince Kumar</strong> — a Full-Stack Developer from Kota, India.
                        I love turning complex ideas into clean, fast, production-ready software.
                        From pixel-perfect UIs to scalable backends, I work across the entire stack.<br><br>
                        Pursuing <strong>BCA</strong>, active on GitHub &amp; LeetCode, and doing
                        <strong>freelance</strong> work for clients who need real solutions shipped fast.
                    </p>

                    <div class="hero-cta-row reveal">
                        <a href="/contact" class="border-btn js-pointer-large">
                            <span class="border-btn__inner">Hire Me</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </a>
                        <a href="/my-resume" class="border-btn js-pointer-large">
                            <span class="border-btn__inner">My Resume</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </a>
                    </div>
                </div>

                {{-- Right: identity card --}}
                <div class="reveal reveal--right">
                    <div class="identity-card">
                        <div class="id-label">Developer Profile</div>
                        <div class="id-name">Prince Kumar</div>
                        <div class="id-handle">@scriptxprince</div>

                        <div class="id-badges">
                            <span class="id-badge id-badge--red">Full-Stack Dev</span>
                            <span class="id-badge id-badge--red">Freelancer</span>
                            <span class="id-badge id-badge--gray">MERN Stack</span>
                            <span class="id-badge id-badge--gray">Laravel</span>
                            <span class="id-badge id-badge--gray">BCA Student</span>
                        </div>

                        <div class="id-meta">
                            <div class="id-meta-item">
                                <span class="label">Location</span>
                                <span class="val">🇮🇳 Kota, Rajasthan</span>
                            </div>
                            <div class="id-meta-item">
                                <span class="label">Status</span>
                                <span class="val" style="color:#4ade80;">● Open to Work</span>
                            </div>
                            <div class="id-meta-item">
                                <span class="label">GitHub</span>
                                <span class="val">PrinceInScripts</span>
                            </div>
                            <div class="id-meta-item">
                                <span class="label">Email</span>
                                <span class="val" style="font-size:12px;">princepk7878kumar@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        {{-- ══════════════════════════════════════════
             APPROACH / PILLARS
        ══════════════════════════════════════════ --}}
        <section class="about-section about-section--alt">
            <div class="section-inner">
                <div class="reveal">
                    <div class="section-label">How I Work</div>
                    <h2 class="section-title">Mission, <span>Vision</span> & Approach</h2>
                    <p style="color:var(--muted);font-size:16px;line-height:1.8;max-width:680px;">
                        My mission is to build software that is reliable, impactful and easy to use.
                        Technology should solve problems without adding complexity — that's the north star
                        for every line of code I write.
                    </p>
                </div>

                <div class="pillars-grid reveal-group">
                    <div class="pillar-card reveal">
                        <div class="pillar-number">01</div>
                        <span class="pillar-icon">🎯</span>
                        <div class="pillar-title">Start Small, Ship Fast</div>
                        <div class="pillar-body">Break big ideas into small, testable steps. Ship an MVP, gather real feedback, then iterate. No analysis paralysis.</div>
                    </div>
                    <div class="pillar-card reveal">
                        <div class="pillar-number">02</div>
                        <span class="pillar-icon">🧹</span>
                        <div class="pillar-title">Clean Code First</div>
                        <div class="pillar-body">Readable, maintainable, documented code. Avoid N+1 queries, missing indexes, and tangled logic that haunts future-you.</div>
                    </div>
                    <div class="pillar-card reveal">
                        <div class="pillar-number">03</div>
                        <span class="pillar-icon">👤</span>
                        <div class="pillar-title">User-Centric Design</div>
                        <div class="pillar-body">Every feature is designed around the user journey — smooth UX, intuitive flows, and accessible interfaces that just feel right.</div>
                    </div>
                    <div class="pillar-card reveal">
                        <div class="pillar-number">04</div>
                        <span class="pillar-icon">📐</span>
                        <div class="pillar-title">Scalable Architecture</div>
                        <div class="pillar-body">REST APIs with clear contracts, thoughtful DB schemas, and decoupled components that grow without rewriting everything.</div>
                    </div>
                    <div class="pillar-card reveal">
                        <div class="pillar-number">05</div>
                        <span class="pillar-icon">🔄</span>
                        <div class="pillar-title">Continuous Learning</div>
                        <div class="pillar-body">GitHub streaks, LeetCode grind, new frameworks. Staying sharp isn't optional — it's how I stay valuable to clients.</div>
                    </div>
                    <div class="pillar-card reveal">
                        <div class="pillar-number">06</div>
                        <span class="pillar-icon">🤝</span>
                        <div class="pillar-title">Client First</div>
                        <div class="pillar-body">Clear communication, honest timelines, and deliverables that match requirements. I treat every project like it's my own.</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════════
             QUOTE BANNER
        ══════════════════════════════════════════ --}}
        <section class="quote-section">
            <p class="big-quote reveal">
                "Dream big, start small, and <em>ship often</em> —
                because consistent progress always leads to
                meaningful results."
            </p>
            <p class="quote-attr reveal">— Prince Kumar, scriptxprince</p>
        </section>

        {{-- ══════════════════════════════════════════
             CODING JOURNEY (GitHub + LeetCode)
        ══════════════════════════════════════════ --}}
        <section class="about-section about-section--alt">
            <div class="section-inner">
                <div class="reveal">
                    <div class="section-label">By the Numbers</div>
                    <h2 class="section-title">Coding <span>Journey</span></h2>
                    <p style="color:var(--muted);font-size:16px;line-height:1.8;max-width:640px;">
                        Every repository, star, and solved problem is a step forward.
                        Here's what the data says.
                    </p>
                </div>

                <div class="journey-grid">

                    {{-- GitHub Card --}}
                    <div class="journey-card reveal reveal--left">
                        <div class="journey-card-title">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.38.6.1.82-.26.82-.57v-2c-3.34.73-4.04-1.61-4.04-1.61-.54-1.38-1.33-1.75-1.33-1.75-1.08-.74.08-.73.08-.73 1.2.08 1.83 1.23 1.83 1.23 1.06 1.82 2.8 1.3 3.48.99.1-.77.41-1.3.75-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.17 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 0 1 3-.4c1.02.005 2.04.14 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.66 1.65.24 2.87.12 3.17.77.84 1.24 1.91 1.24 3.22 0 4.61-2.81 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.68.82.57C20.56 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/>
                            </svg>
                            My GitHub Journey
                        </div>

                        <div class="dev-profile">
                            <img class="dev-avatar" src="{{ $github['avatar_url'] }}" alt="Prince Kumar GitHub">
                            <div>
                                <div class="dev-name">{{ $github['name'] }}</div>
                                <div class="dev-handle">@{{ $github['login'] }} · Since {{ \Carbon\Carbon::parse($github['created_at'])->format('M Y') }}</div>
                            </div>
                        </div>

                        <div class="stat-grid stat-grid--5">
                            <div class="stat-box">
                                <div class="val">{{ $github['followers'] }}</div>
                                <div class="lbl">Followers</div>
                            </div>
                            <div class="stat-box">
                                <div class="val">{{ $github['following'] }}</div>
                                <div class="lbl">Following</div>
                            </div>
                            <div class="stat-box">
                                <div class="val">{{ $github['public_repos'] }}</div>
                                <div class="lbl">Repos</div>
                            </div>
                            <div class="stat-box">
                                <div class="val">{{ $totalStars ?? 0 }}</div>
                                <div class="lbl">Stars</div>
                            </div>
                            <div class="stat-box">
                                <div class="val">{{ $totalForks ?? 0 }}</div>
                                <div class="lbl">Forks</div>
                            </div>
                        </div>

                        <div class="meta-row">
                            <div class="meta-item">📍 {{ $github['location'] }}</div>
                            <div class="meta-item">
                                🟢 Languages:
                                @foreach ($languages as $lang => $bytes)
                                    <span class="lang-dot">{{ $lang }}</span>@if(!$loop->last),&nbsp;@endif
                                @endforeach
                            </div>
                            <div class="meta-item">⏳ Updated {{ \Carbon\Carbon::parse($github['updated_at'])->diffForHumans() }}</div>
                        </div>

                        <a href="https://github.com/{{ $github['login'] }}" target="_blank" rel="noopener noreferrer" class="border-btn js-pointer-large">
                            <span class="border-btn__inner">Visit GitHub Profile</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </a>
                    </div>

                    {{-- LeetCode Card --}}
                    <div class="journey-card reveal reveal--right">
                        <div class="journey-card-title">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.483 0a1.374 1.374 0 0 0-.961.438L7.116 6.226l-3.854 4.126a5.266 5.266 0 0 0-1.209 2.104 5.35 5.35 0 0 0-.125.513 5.527 5.527 0 0 0 .062 2.362 5.83 5.83 0 0 0 .349 1.017 5.938 5.938 0 0 0 1.271 1.818l4.277 4.193.039.038c2.248 2.165 5.852 2.133 8.063-.074l2.396-2.392c.54-.54.54-1.414.003-1.955a1.378 1.378 0 0 0-1.951-.003l-2.396 2.392a3.021 3.021 0 0 1-4.205.038l-.02-.019-4.276-4.193c-.652-.64-.972-1.469-.948-2.263a2.68 2.68 0 0 1 .066-.523 2.545 2.545 0 0 1 .619-1.164L9.13 8.114c1.058-1.134 3.204-1.27 4.43-.278l3.501 2.831c.593.48 1.461.387 1.94-.207a1.384 1.384 0 0 0-.207-1.943l-3.5-2.831c-.8-.647-1.766-1.045-2.774-1.202l2.015-2.158A1.384 1.384 0 0 0 13.483 0zm-2.866 12.815a1.38 1.38 0 0 0-1.38 1.382 1.38 1.38 0 0 0 1.38 1.382H20.79a1.38 1.38 0 0 0 1.38-1.382 1.38 1.38 0 0 0-1.38-1.382z"/>
                            </svg>
                            My LeetCode Practice
                        </div>

                        <div class="dev-profile">
                            <img class="dev-avatar" src="{{ $leetcode['profile']['profile']['userAvatar'] }}" alt="LeetCode Avatar">
                            <div>
                                <div class="dev-name">{{ $leetcode['profile']['username'] }}</div>
                                <div class="dev-handle">Ranking #{{ number_format($leetcode['profile']['profile']['ranking']) }} worldwide</div>
                            </div>
                        </div>

                        <div class="stat-grid">
                            <div class="stat-box">
                                <div class="val">{{ collect($leetcode['problems']['numAcceptedQuestions'])->sum('count') }}</div>
                                <div class="lbl">Solved</div>
                            </div>
                            <div class="stat-box">
                                <div class="val">{{ round($leetcode['contest']['rating'], 0) }}</div>
                                <div class="lbl">Rating</div>
                            </div>
                            <div class="stat-box">
                                <div class="val">{{ number_format($leetcode['contest']['globalRanking']) }}</div>
                                <div class="lbl">Global Rank</div>
                            </div>
                        </div>

                        <div class="diff-row">
                            <div class="diff-box">
                                <div class="dval diff-easy">{{ collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty','EASY')['count'] ?? 0 }}</div>
                                <div class="dlbl">Easy</div>
                            </div>
                            <div class="diff-box">
                                <div class="dval diff-medium">{{ collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty','MEDIUM')['count'] ?? 0 }}</div>
                                <div class="dlbl">Medium</div>
                            </div>
                            <div class="diff-box">
                                <div class="dval diff-hard">{{ collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty','HARD')['count'] ?? 0 }}</div>
                                <div class="dlbl">Hard</div>
                            </div>
                        </div>

                        <div class="streak-banner">
                            🔥 Daily Streak: {{ $leetcode['calendar']['streak'] }} days — Keep it going!
                        </div>

                        <a href="https://leetcode.com/PrinceInScripts" target="_blank" rel="noopener noreferrer" class="border-btn js-pointer-large">
                            <span class="border-btn__inner">Visit LeetCode Profile</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        {{-- ══════════════════════════════════════════
             SKILLS GRID
        ══════════════════════════════════════════ --}}
        <section id="down" class="skills-section">
            <div class="skills-inner">
                <div class="reveal">
                    <div class="section-label">Tech Stack</div>
                    <h2 class="section-title">My <span>Skills</span></h2>
                    <p style="color:var(--muted);font-size:16px;line-height:1.8;max-width:600px;margin-bottom:60px;">
                        The tools, languages and frameworks I use to build things that work.
                    </p>
                </div>

                <div class="clients-lines reveal">
                    @foreach (array_merge($main_lang, $main_lang2) as $lang)
                        <div class="clients-lines__column">
                            <div class="clients-lines__inner hover-box pos-rel">
                                <div class="client-hover-out pos-abs pos-center-center text-color-white"
                                    style="font-size:40px;width:100%;display:flex;justify-content:center;align-items:center;">
                                    @php $folder = in_array($lang, $main_lang) ? 'lang1' : 'lang2'; @endphp
                                    <img class="client-logo client-hover-out pos-abs pos-center-center"
                                        src="{{ asset('assets/images/skills/'.$folder.'/'.$lang['image']) }}"
                                        alt="{{ $lang['name'] }} skill"
                                        style="width:70px"
                                        loading="lazy">
                                </div>
                                <div class="client-logo client-hover-in pos-abs pos-center-center">
                                    <span style="font-size:36px;font-weight:800;color:var(--red)">{{ $lang['name'] }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
    /* ─── Scroll Reveal using IntersectionObserver ─────────── */
    (function () {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: '0px 0px -60px 0px' }
        );

        /* Observe all .reveal elements */
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        /* Stagger children inside .reveal-group */
        document.querySelectorAll('.reveal-group').forEach(group => {
            group.querySelectorAll('.reveal').forEach((child, i) => {
                child.style.transitionDelay = (i * 80) + 'ms';
                observer.observe(child);
            });
        });
    })();
    </script>
</body>
</html>