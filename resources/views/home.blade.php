<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', [
        'title'       => 'Prince Kumar | Full-Stack Developer & Freelancer | Hire Me',
        'description' => 'Prince Kumar (scriptxprince) — Full-Stack Developer from Kota, India. Expert in MERN stack, Laravel, PHP, React, Node.js. Available for freelance & full-time hire.',
        'keywords'    => 'hire full stack developer India, freelance developer Kota Rajasthan, MERN developer, Laravel developer, React developer, Node.js developer, PHP developer, Prince Kumar scriptxprince',
    ])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <style>
        /* ─── Variables ──────────────────────────── */
        :root {
            --red:       #d20120;
            --red-dim:   rgba(210,1,32,0.12);
            --red-glow:  rgba(210,1,32,0.3);
            --bg:        #080808;
            --bg2:       #0e0e0e;
            --card:      #111111;
            --border:    rgba(255,255,255,0.07);
            --muted:     #5a5a5a;
            --text:      #e0e0e0;
            --white:     #ffffff;
        }

        /* ─── Scroll Reveal ──────────────────────── */
        .reveal {
            opacity: 0;
            transform: translateY(36px);
            transition: opacity 0.75s cubic-bezier(.22,1,.36,1),
                        transform 0.75s cubic-bezier(.22,1,.36,1);
        }
        .reveal.from-left  { transform: translateX(-48px); }
        .reveal.from-right { transform: translateX(48px); }
        .reveal.from-scale { transform: scale(0.93); }
        .reveal.visible    { opacity: 1; transform: none !important; }

        /* ─── HERO ───────────────────────────────── */
        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: var(--bg);
        }

        .hero-video-bg {
            position: absolute;
            inset: 0;
            width: 100%; height: 100%;
            object-fit: cover;
            opacity: 0.18;
            z-index: 0;
        }

        /* Gradient vignette over video */
        .hero-section::after {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 60% at 50% 100%, rgba(210,1,32,0.07), transparent),
                linear-gradient(to bottom, rgba(8,8,8,0.3) 0%, transparent 40%, rgba(8,8,8,0.9) 100%);
            z-index: 1;
            pointer-events: none;
        }

        .hero-inner {
            position: relative;
            z-index: 2;
            max-width: 1240px;
            margin: 0 auto;
            padding: 160px 48px 120px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 480px;
            gap: 60px;
            align-items: center;
        }

        /* Animated noise grain overlay */
        .hero-grain {
            position: absolute;
            inset: 0;
            z-index: 1;
            opacity: 0.025;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
            pointer-events: none;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: 24px;
        }

        .hero-eyebrow::before {
            content: '';
            width: 32px; height: 2px;
            background: var(--red);
            display: block;
        }

        .hero-name {
            font-size: clamp(44px, 6vw, 80px);
            font-weight: 900;
            line-height: 1.0;
            letter-spacing: -3px;
            color: var(--white);
            margin: 0 0 12px;
        }

        .hero-role {
            font-size: clamp(18px, 2.5vw, 28px);
            font-weight: 700;
            color: var(--red);
            letter-spacing: -0.5px;
            margin: 0 0 28px;
        }

        .hero-desc {
            font-size: 16px;
            line-height: 1.85;
            color: var(--muted);
            max-width: 520px;
            margin-bottom: 40px;
        }

        .hero-desc strong { color: #999; font-weight: 600; }

        .hero-cta {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 56px;
        }

        /* Status pill */
        .hero-status {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: rgba(74,222,128,0.08);
            border: 1px solid rgba(74,222,128,0.2);
            border-radius: 99px;
            font-size: 13px;
            font-weight: 600;
            color: #4ade80;
        }

        .status-dot {
            width: 7px; height: 7px;
            border-radius: 50%;
            background: #4ade80;
            animation: pulse-green 2s infinite;
        }

        @keyframes pulse-green {
            0%, 100% { box-shadow: 0 0 0 0 rgba(74,222,128,0.4); }
            50%       { box-shadow: 0 0 0 6px rgba(74,222,128,0); }
        }

        /* Quick stats row */
        .hero-stats {
            display: flex;
            gap: 32px;
            flex-wrap: wrap;
        }

        .hstat {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .hstat-num {
            font-size: 28px;
            font-weight: 900;
            color: var(--white);
            letter-spacing: -1px;
            line-height: 1;
        }

        .hstat-num span { color: var(--red); }
        .hstat-lbl { font-size: 12px; color: var(--muted); text-transform: uppercase; letter-spacing: 1.5px; }

        /* Right: terminal card */
        .terminal-card {
            background: #0d0d0d;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 40px 100px rgba(0,0,0,0.6), 0 0 0 1px rgba(255,255,255,0.04);
        }

        .terminal-header {
            background: #1a1a1a;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .t-dot {
            width: 12px; height: 12px;
            border-radius: 50%;
        }
        .t-red    { background: #ff5f57; }
        .t-yellow { background: #ffbd2e; }
        .t-green  { background: #28c840; }

        .t-title {
            margin-left: 8px;
            font-size: 12px;
            color: var(--muted);
            font-family: monospace;
        }

        .terminal-body {
            padding: 28px 24px;
            font-family: 'Courier New', monospace;
            font-size: 13.5px;
            line-height: 2;
        }

        .t-prompt { color: var(--red); }
        .t-cmd    { color: #e0e0e0; }
        .t-out    { color: #888; padding-left: 16px; }
        .t-key    { color: #60a5fa; }
        .t-val    { color: #4ade80; }
        .t-str    { color: #fbbf24; }
        .t-cursor {
            display: inline-block;
            width: 8px; height: 16px;
            background: var(--red);
            animation: blink 1s step-end infinite;
            vertical-align: text-bottom;
            margin-left: 2px;
        }

        @keyframes blink {
            0%,100% { opacity: 1; }
            50%      { opacity: 0; }
        }

        /* ─── SECTION BASE ───────────────────────── */
        .home-section {
            padding: 110px 48px;
            position: relative;
        }

        .home-section--alt { background: var(--bg2); }

        .section-wrap {
            max-width: 1240px;
            margin: 0 auto;
        }

        .section-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: 18px;
        }

        .section-eyebrow::after {
            content: '';
            width: 36px; height: 1px;
            background: var(--red);
        }

        .section-heading {
            font-size: clamp(32px, 4vw, 54px);
            font-weight: 900;
            letter-spacing: -2px;
            color: var(--white);
            line-height: 1.1;
            margin: 0 0 16px;
        }

        .section-heading em { font-style: normal; color: var(--red); }

        .section-sub {
            font-size: 16px;
            color: var(--muted);
            line-height: 1.7;
            max-width: 580px;
            margin-bottom: 56px;
        }

        /* ─── ABOUT SECTION ──────────────────────── */
        .about-split {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 64px;
            align-items: center;
        }

        .about-text p {
            font-size: 16px;
            color: var(--muted);
            line-height: 1.85;
            margin-bottom: 20px;
        }

        .about-text strong { color: #bbb; font-weight: 600; }

        .about-facts {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-top: 36px;
        }

        .fact-box {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 20px;
            transition: border-color 0.3s;
        }

        .fact-box:hover { border-color: rgba(210,1,32,0.3); }

        .fact-icon { font-size: 22px; margin-bottom: 8px; }
        .fact-label { font-size: 11px; text-transform: uppercase; letter-spacing: 2px; color: var(--muted); margin-bottom: 4px; }
        .fact-val   { font-size: 15px; font-weight: 600; color: var(--white); }

        /* Skills ticker */
        .skills-ticker-wrap {
            margin-top: 56px;
            overflow: hidden;
            position: relative;
        }

        .skills-ticker-wrap::before,
        .skills-ticker-wrap::after {
            content: '';
            position: absolute;
            top: 0; bottom: 0;
            width: 80px;
            z-index: 2;
            pointer-events: none;
        }

        .skills-ticker-wrap::before { left: 0;  background: linear-gradient(to right,  var(--bg2), transparent); }
        .skills-ticker-wrap::after  { right: 0; background: linear-gradient(to left,   var(--bg2), transparent); }

        .skills-ticker {
            display: flex;
            gap: 12px;
            width: max-content;
            animation: ticker 28s linear infinite;
        }

        .skills-ticker-wrap:hover .skills-ticker { animation-play-state: paused; }

        @keyframes ticker {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }

        .skill-chip {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 99px;
            font-size: 13px;
            font-weight: 600;
            color: #aaa;
            white-space: nowrap;
            transition: border-color 0.2s, color 0.2s;
            flex-shrink: 0;
        }

        .skill-chip img { width: 20px; height: 20px; object-fit: contain; }

        /* ─── PROJECTS SECTION ───────────────────── */
        .projects-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 48px;
            flex-wrap: wrap;
            gap: 20px;
        }

        /* Featured project card */
        .featured-project {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 20px;
            overflow: hidden;
            margin-bottom: 24px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .featured-project:hover {
            border-color: rgba(210,1,32,0.35);
            box-shadow: 0 24px 80px rgba(0,0,0,0.5);
        }

        .featured-img {
            position: relative;
            overflow: hidden;
        }

        .featured-img img {
            width: 100%; height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .featured-project:hover .featured-img img { transform: scale(1.04); }

        .featured-cat {
            position: absolute;
            top: 16px; left: 16px;
            padding: 5px 12px;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(210,1,32,0.35);
            border-radius: 6px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--red);
        }

        .featured-body {
            padding: 44px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .featured-label {
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--red);
            margin-bottom: 16px;
        }

        .featured-title {
            font-size: 30px;
            font-weight: 800;
            color: var(--white);
            line-height: 1.2;
            letter-spacing: -0.5px;
            margin-bottom: 16px;
        }

        .featured-desc {
            font-size: 14px;
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 24px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .stack-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 32px;
        }

        .stack-pill {
            padding: 4px 10px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            color: #888;
            letter-spacing: 0.3px;
        }

        .view-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 700;
            color: var(--red);
            text-decoration: none;
            letter-spacing: 0.3px;
            transition: gap 0.2s;
        }

        .view-link:hover { gap: 14px; }

        /* Project grid below featured */
        .mini-projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .mini-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            overflow: hidden;
            transition: border-color 0.3s, transform 0.3s;
        }

        .mini-card:hover {
            border-color: rgba(210,1,32,0.3);
            transform: translateY(-4px);
        }

        .mini-card-img {
            height: 160px;
            overflow: hidden;
        }

        .mini-card-img img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform 0.4s;
        }

        .mini-card:hover .mini-card-img img { transform: scale(1.06); }

        .mini-card-body { padding: 18px 20px 22px; }
        .mini-card-title { font-size: 16px; font-weight: 700; color: var(--white); margin-bottom: 10px; }

        .mini-card-stack { display: flex; flex-wrap: wrap; gap: 5px; margin-bottom: 16px; }

        .mini-view {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 13px;
            font-weight: 700;
            color: var(--red);
            text-decoration: none;
            transition: gap 0.2s;
        }

        .mini-view:hover { gap: 10px; }

        /* ─── CONTACT SECTION ────────────────────── */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: 64px;
            align-items: start;
        }

        .contact-info h3 {
            font-size: 22px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 12px;
        }

        .contact-info p {
            font-size: 15px;
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 36px;
        }

        .contact-methods { display: flex; flex-direction: column; gap: 16px; }

        .contact-method {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 20px;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 12px;
            text-decoration: none;
            transition: border-color 0.25s, background 0.25s;
        }

        .contact-method:hover {
            border-color: rgba(210,1,32,0.3);
            background: rgba(210,1,32,0.04);
        }

        .contact-method-icon {
            width: 40px; height: 40px;
            background: var(--red-dim);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .contact-method-text { display: flex; flex-direction: column; }
        .cm-label { font-size: 11px; text-transform: uppercase; letter-spacing: 1.5px; color: var(--muted); }
        .cm-val   { font-size: 14px; font-weight: 600; color: var(--white); }

        /* Form styling */
        .contact-form { display: flex; flex-direction: column; gap: 0; }

        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

        .fgroup {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .fgroup label {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #666;
        }

        .fgroup input,
        .fgroup textarea,
        .fgroup select {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 14px 16px;
            color: var(--white);
            font-size: 15px;
            outline: none;
            transition: border-color 0.2s;
            font-family: inherit;
            width: 100%;
        }

        .fgroup input:focus,
        .fgroup textarea:focus,
        .fgroup select:focus { border-color: rgba(210,1,32,0.5); }

        .fgroup textarea { min-height: 120px; resize: vertical; }

        .fgroup select option { background: #111; }

        /* ─── Responsive ─────────────────────────── */
        @media (max-width: 1100px) {
            .hero-inner   { grid-template-columns: 1fr; }
            /* .terminal-card { display: none; } */
            .about-split  { grid-template-columns: 1fr; gap: 40px; }
            .featured-project { grid-template-columns: 1fr; }
            .featured-img { height: 260px; }
            .mini-projects-grid { grid-template-columns: 1fr 1fr; }
            .contact-grid { grid-template-columns: 1fr; gap: 40px; }
        }

        @media (max-width: 768px) {
            .home-section { padding: 80px 24px; }
            .hero-inner   { padding: 140px 24px 80px; }
            .hero-name    { letter-spacing: -1.5px; }
            .hero-stats   { gap: 20px; }
            .about-facts  { grid-template-columns: 1fr; }
            .mini-projects-grid { grid-template-columns: 1fr; }
            .form-row     { grid-template-columns: 1fr; }
            .featured-body { padding: 28px 24px; }
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

        {{-- ══════════════════════ HERO ══════════════════════ --}}
        <section id="up" class="hero-section">
            <video class="hero-video-bg" src="https://shyknytkian.s3.eu-north-1.amazonaws.com/vedio-1.mp4"
                   autoplay loop muted playsinline></video>
            <div class="hero-grain"></div>

            <div class="hero-inner">
                {{-- Left column --}}
                <div>
                    <div class="hero-eyebrow reveal">Full-Stack Developer · Freelancer</div>

                    <h1 class="hero-name reveal">Prince<br>Kumar</h1>
                    <p class="hero-role reveal">Building the web, one commit at a time.</p>

                    <p class="hero-desc reveal">
                        I'm <strong>scriptxprince</strong> — a developer from <strong>Kota, India</strong>
                        who turns ideas into production-ready software. MERN Stack, Laravel, PHP, React,
                        Node.js. Available for <strong>freelance & full-time hire.</strong>
                    </p>

                    <div class="hero-cta reveal">
                        <a href="/contact" class="border-btn js-pointer-large">
                            <span class="border-btn__inner">Hire Me</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </a>
                        <a href="/projects" class="border-btn js-pointer-large">
                            <span class="border-btn__inner">View Work</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </a>
                        <a href="/my-resume" class="border-btn js-pointer-large">
                            <span class="border-btn__inner">Resume</span>
                            <span class="border-btn__lines-1"></span>
                            <span class="border-btn__lines-2"></span>
                        </a>
                    </div>

                    <div class="hero-status reveal" style="margin-bottom:40px;">
                        <span class="status-dot"></span>
                        Open to freelance &amp; full-time opportunities
                    </div>

                    <div class="hero-stats reveal">
                        <div class="hstat">
                            <div class="hstat-num">{{ $projects->count() }}<span>+</span></div>
                            <div class="hstat-lbl">Projects Built</div>
                        </div>
                        <div class="hstat">
                            <div class="hstat-num">2<span>+</span></div>
                            <div class="hstat-lbl">Years Coding</div>
                        </div>
                        <div class="hstat">
                            <div class="hstat-num">{{ count($main_lang) + count($main_lang2) }}<span>+</span></div>
                            <div class="hstat-lbl">Technologies</div>
                        </div>
                        <div class="hstat">
                            <div class="hstat-num">100<span>%</span></div>
                            <div class="hstat-lbl">Client Focus</div>
                        </div>
                    </div>
                </div>

                {{-- Right: terminal card --}}
                <div class="reveal from-right">
                    <div class="terminal-card">
                        <div class="terminal-header">
                            <span class="t-dot t-red"></span>
                            <span class="t-dot t-yellow"></span>
                            <span class="t-dot t-green"></span>
                            <span class="t-title">~/scriptxprince — bash</span>
                        </div>
                        <div class="terminal-body">
                            <div><span class="t-prompt">❯ </span><span class="t-cmd">whoami</span></div>
                            <div class="t-out">Prince Kumar · @scriptxprince</div>
                            <br>
                            <div><span class="t-prompt">❯ </span><span class="t-cmd">cat developer.json</span></div>
                            <div class="t-out">{</div>
                            <div class="t-out">&nbsp;&nbsp;<span class="t-key">"role"</span>: <span class="t-str">"Full-Stack Developer"</span>,</div>
                            <div class="t-out">&nbsp;&nbsp;<span class="t-key">"location"</span>: <span class="t-str">"Kota, India 🇮🇳"</span>,</div>
                            <div class="t-out">&nbsp;&nbsp;<span class="t-key">"stack"</span>: [<span class="t-str">"MERN"</span>, <span class="t-str">"Laravel"</span>, <span class="t-str">"PHP"</span>],</div>
                            <div class="t-out">&nbsp;&nbsp;<span class="t-key">"available"</span>: <span class="t-val">true</span>,</div>
                            <div class="t-out">&nbsp;&nbsp;<span class="t-key">"education"</span>: <span class="t-str">"BCA"</span>,</div>
                            <div class="t-out">&nbsp;&nbsp;<span class="t-key">"freelance"</span>: <span class="t-val">true</span></div>
                            <div class="t-out">}</div>
                            <br>
                            <div><span class="t-prompt">❯ </span><span class="t-cmd">git log --oneline -3</span></div>
                            <div class="t-out"><span style="color:#888;">a4f2c1b</span> <span style="color:#ccc;">feat: add admin panel with project CRUD</span></div>
                            <div class="t-out"><span style="color:#888;">9d3e5f2</span> <span style="color:#ccc;">fix: seo meta tags & sitemap</span></div>
                            <div class="t-out"><span style="color:#888;">2b8a7d4</span> <span style="color:#ccc;">refactor: clean portfolio from scratch</span></div>
                            <br>
                            <div><span class="t-prompt">❯ </span><span class="t-cursor"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════════════════ ABOUT ══════════════════════ --}}
        <section id="down" class="home-section home-section--alt">
            <div class="section-wrap">
                <div class="about-split">
                    {{-- Left: text --}}
                    <div class="about-text">
                        <div class="section-eyebrow reveal">Who I Am</div>
                        <h2 class="section-heading reveal">
                            Developer.<br><em>Problem-solver.</em><br>Freelancer.
                        </h2>
                        <p class="reveal">
                            Hi 👋 I'm <strong>Prince Kumar</strong> — a passionate Full-Stack Developer from
                            Kota, India. I love building impactful projects and solving real-world problems
                            with technology. From pixel-perfect frontend to scalable backend APIs, I work
                            across the entire stack.
                        </p>
                        <p class="reveal">
                            Pursuing <strong>BCA</strong>, active on GitHub &amp; LeetCode, and doing
                            <strong>freelance</strong> work with clients who need real solutions shipped fast.
                            I believe in clean code, honest timelines, and delivering features that actually work.
                        </p>
                        <div class="hero-cta reveal" style="margin-top:32px;margin-bottom:0;">
                            <a href="/about" class="border-btn js-pointer-large">
                                <span class="border-btn__inner">Full Story</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
                        </div>
                    </div>

                    {{-- Right: fact boxes --}}
                    <div>
                        <div class="about-facts reveal-group">
                            <div class="fact-box reveal">
                                <div class="fact-icon">🎓</div>
                                <div class="fact-label">Education</div>
                                <div class="fact-val">BCA — Bachelor of Computer Applications</div>
                            </div>
                            <div class="fact-box reveal">
                                <div class="fact-icon">📍</div>
                                <div class="fact-label">Location</div>
                                <div class="fact-val">Kota, Rajasthan, India 🇮🇳</div>
                            </div>
                            <div class="fact-box reveal">
                                <div class="fact-icon">💼</div>
                                <div class="fact-label">Availability</div>
                                <div class="fact-val" style="color:#4ade80;">Open to Work · Freelance &amp; Full-Time</div>
                            </div>
                            <div class="fact-box reveal">
                                <div class="fact-icon">⚡</div>
                                <div class="fact-label">Specialty</div>
                                <div class="fact-val">MERN Stack · Laravel · REST APIs</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Skills ticker --}}
                <div class="skills-ticker-wrap reveal" style="margin-top:64px;">
                    @php
                        $allSkills = array_merge($main_lang, $main_lang2);
                        $doubled   = array_merge($allSkills, $allSkills); // doubled for seamless loop
                    @endphp
                    <div class="skills-ticker">
                        @foreach ($doubled as $s)
                            @php $folder = in_array($s, $main_lang) ? 'lang1' : 'lang2'; @endphp
                            <div class="skill-chip">
                                <img src="{{ asset('assets/images/skills/'.$folder.'/'.$s['image']) }}" alt="{{ $s['name'] }}" loading="lazy">
                                {{ $s['name'] }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ══════════════════════ PROJECTS ══════════════════════ --}}
        <section class="home-section">
            <div class="section-wrap">
                <div class="projects-header">
                    <div>
                        <div class="section-eyebrow reveal">Portfolio</div>
                        <h2 class="section-heading reveal">Featured <em>Work</em></h2>
                    </div>
                    <a href="/projects" class="border-btn js-pointer-large reveal from-right">
                        <span class="border-btn__inner">View All Projects</span>
                        <span class="border-btn__lines-1"></span>
                        <span class="border-btn__lines-2"></span>
                    </a>
                </div>

                {{-- First project as featured --}}
                @if($projects->count() > 0)
                    @php $featured = $projects->first(); @endphp
                    <div class="featured-project reveal">
                        <div class="featured-img">
                            <img src="{{ asset($featured->banner_image) }}"
                                 alt="{{ $featured->title }}" loading="lazy">
                            <span class="featured-cat">{{ $featured->category }}</span>
                        </div>
                        <div class="featured-body">
                            <div class="featured-label">Featured Project</div>
                            <div class="featured-title">{{ $featured->title }}</div>
                            <div class="featured-desc">{{ strip_tags(html_entity_decode($featured->short_description)) }}</div>
                            <div class="stack-pills">
                                @foreach(json_decode($featured->tech_stack) as $tech)
                                    <span class="stack-pill">{{ $tech }}</span>
                                @endforeach
                            </div>
                            <a href="/project-details/{{ $featured->slug }}" class="view-link">
                                View Case Study
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif

                {{-- Rest of projects in mini grid (skip first) --}}
                @if($projects->count() > 1)
                    <div class="mini-projects-grid reveal-group">
                        @foreach($projects->skip(1)->take(3) as $i => $project)
                            <div class="mini-card reveal">
                                <div class="mini-card-img">
                                    <img src="{{ asset($project->banner_image) }}"
                                         alt="{{ $project->title }}" loading="lazy">
                                </div>
                                <div class="mini-card-body">
                                    <div class="mini-card-title">{{ $project->title }}</div>
                                    <div class="mini-card-stack">
                                        @foreach(json_decode($project->tech_stack) as $tech)
                                            <span class="stack-pill">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                    <a href="/project-details/{{ $project->slug }}" class="mini-view">
                                        View
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>

        {{-- ══════════════════════ CONTACT ══════════════════════ --}}
        <section class="home-section home-section--alt">
            <div class="section-wrap">
                <div class="section-eyebrow reveal">Let's Talk</div>
                <h2 class="section-heading reveal">Get in <em>Touch</em></h2>
                <p class="section-sub reveal">
                    Open for freelance work, collaborations, or a quick chat about your project idea.
                    I typically respond within 24 hours.
                </p>

                <div class="contact-grid">
                    {{-- Left: contact info --}}
                    <div class="reveal from-left">
                        <div class="contact-methods">
                            <a href="mailto:princepk7878kumar@gmail.com" class="contact-method">
                                <div class="contact-method-icon">✉️</div>
                                <div class="contact-method-text">
                                    <span class="cm-label">Email</span>
                                    <span class="cm-val">princepk7878kumar@gmail.com</span>
                                </div>
                            </a>
                            <a href="tel:+918955783570" class="contact-method">
                                <div class="contact-method-icon">📞</div>
                                <div class="contact-method-text">
                                    <span class="cm-label">Phone</span>
                                    <span class="cm-val">+91 89557 83570</span>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/in/prince-kumar-788673253/" target="_blank" rel="noopener noreferrer" class="contact-method">
                                <div class="contact-method-icon">💼</div>
                                <div class="contact-method-text">
                                    <span class="cm-label">LinkedIn</span>
                                    <span class="cm-val">Prince Kumar</span>
                                </div>
                            </a>
                            <a href="https://github.com/PrinceInScripts" target="_blank" rel="noopener noreferrer" class="contact-method">
                                <div class="contact-method-icon">🐙</div>
                                <div class="contact-method-text">
                                    <span class="cm-label">GitHub</span>
                                    <span class="cm-val">PrinceInScripts</span>
                                </div>
                            </a>
                            <a href="https://t.me/scriptxprince" target="_blank" rel="noopener noreferrer" class="contact-method">
                                <div class="contact-method-icon">✈️</div>
                                <div class="contact-method-text">
                                    <span class="cm-label">Telegram</span>
                                    <span class="cm-val">@scriptxprince</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    {{-- Right: form --}}
                    <div class="reveal from-right">
                        <form id="contactForm" class="contact-form" novalidate>
                            @csrf
                            <div class="form-row">
                                <div class="fgroup">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" placeholder="Your name" required>
                                </div>
                                <div class="fgroup">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="fgroup">
                                    <label for="contact">Phone</label>
                                    <input type="text" id="contact" name="contact" placeholder="+91 xxxxx xxxxx" required>
                                </div>
                                <div class="fgroup">
                                    <label for="reason">Reason</label>
                                    <select id="reason" name="reason" required>
                                        <option value="">Select reason…</option>
                                        <option value="freelance">Freelance Project</option>
                                        <option value="collaboration">Collaboration</option>
                                        <option value="job">Job / Internship</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="fgroup">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="Tell me about your project or idea…" required></textarea>
                            </div>
                            <button type="submit" class="border-btn js-pointer-large" style="cursor:pointer;width:fit-content;">
                                <span class="border-btn__inner">Send Message →</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('components.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>

    <script>
    /* ─── Scroll Reveal ──────────────────────────────────── */
    (function () {
        const io = new IntersectionObserver(
            entries => entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    io.unobserve(e.target);
                }
            }),
            { threshold: 0.1, rootMargin: '0px 0px -60px 0px' }
        );

        document.querySelectorAll('.reveal').forEach((el, i) => {
            // stagger siblings in a reveal-group
            if (el.closest('.reveal-group')) {
                const siblings = el.closest('.reveal-group').querySelectorAll('.reveal');
                const idx = Array.from(siblings).indexOf(el);
                el.style.transitionDelay = (idx * 80) + 'ms';
            }
            io.observe(el);
        });
    })();

    /* ─── Contact Form ───────────────────────────────────── */
    $(document).ready(function () {
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();
            const btn = $(this).find('button[type=submit]');
            btn.prop('disabled', true);
            $.ajax({
                url: "{{ route('contact.submit') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function (response) {
                    Toastify({
                        text: "✅ " + response.message,
                        duration: 4000, close: true,
                        gravity: "top", position: "right",
                        style: { background: '#166534', border: '1px solid #4ade80' }
                    }).showToast();
                    $("#contactForm")[0].reset();
                    btn.prop('disabled', false);
                },
                error: function () {
                    Toastify({
                        text: "❌ Failed to send. Try again!",
                        duration: 4000, gravity: "top", position: "right",
                        style: { background: '#7f1d1d', border: '1px solid #f87171' }
                    }).showToast();
                    btn.prop('disabled', false);
                }
            });
        });
    });
    </script>
</body>
</html>