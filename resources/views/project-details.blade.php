<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', [
        'title'       => ($project->title ?? 'Project') . ' | Prince Kumar',
        'description' => strip_tags(html_entity_decode($project->short_description ?? '')),
        'keywords'    => 'Prince Kumar project, scriptxprince, '.implode(', ', json_decode($project->tech_stack ?? '[]', true) ?? []),
    ])
    <style>
        .six-columns { width: 70%; margin: 0 auto; }
        .video-background { margin: 0 auto; width: 100%; }
        @media (max-width: 768px) { .six-columns { width: 100%; } .video-background { width: 100%; } }
        .stack-container { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 10px; }
        .stack-tag {
            padding: 6px 14px; background: linear-gradient(135deg,#f3f4f6,#e5e7eb);
            color: #d20120; border-radius: 12px; font-size: 14px; font-weight: 600;
            box-shadow: 0 2px 5px rgba(0,0,0,0.08); transition: all 0.2s ease-in-out;
        }
        .stack-tag:hover { background: linear-gradient(135deg,#dbeafe,#93c5fd); transform: scale(1.05); }
        .lines-section ul, .lines-section ol { margin: 10px !important; padding: 10px !important; margin-left: 40px !important; }
        .lines-section ul li, .lines-section ol li { margin-bottom: 10px !important; }
        .lines-section li { margin: 0 !important; padding: 0 !important; list-style: disc !important; font-size: 20px !important; }
    </style>
</head>
<body class="preloader cursor-anim-enable dark-nav">
    <x-loader />
    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box"><span class="scroll-to-btn__arrow"></span></span>
    </a>
    <x-header />

    <main id="up" class="js-animsition-overlay" data-animsition-overlay="true">

        <!-- Media Slider -->
        <section class="pos-rel section-bg-dark-1">
            <div class="pos-rel">
                <div class="width-100perc padding-top-bottom-30">
                    <h1 class="headline-xxl text-center js-scrollanim">
                        <span class="hidden-box d-block"><span>My</span> <span class="text-color-red">Projects</span></span>
                    </h1>
                    <div class="padding-top-40 padding-bottom-90 pos-rel">
                        <div class="container hidden-box js-1-view-slider">
                            <div class="swiper-wrapper js-slider-scroll-anim">
                                @if($project->video_url!='null')
                                <div class="swiper-slide">
                                    <div class="six-columns column-100-100 padding-top-30 pos-rel">
                                        <div class="anim-img-scale">
                                            <video class="video-background anim-img-scale__inner" autoplay muted loop playsinline>
                                                <source src="{{ asset($project->video_url) }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @foreach (json_decode($project->screenshot) as $screenshot)
                                    <div class="swiper-slide">
                                        <div class="six-columns column-100-100 padding-top-30 pos-rel">
                                            <div class="anim-img-scale">
                                                <img class="anim-img-scale__inner" style="border-radius:20px"
                                                    src="{{ asset($screenshot) }}" alt="{{ $project->title }} screenshot" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev-box"><div class="swiper-button-prev"></div></div>
                            <div class="swiper-button-next-box"><div class="swiper-button-next"></div></div>
                            <div class="pagination-box"><div class="swiper-pagination counter-pagination"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Description -->
        <section class="lines-section pos-rel section-bg-dark-1">
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <div class="twelve-columns column-100-100">
                        <h2 class="headline-m js-scrollanim">
                            <span class="hidden-box d-block text-color-red margin-bottom-20">Description</span>
                        </h2>
                        {!! html_entity_decode($project->long_description) !!}
                    </div>
                </div>
            </div>
        </section>

        <!-- Tech Stack -->
        <section class="lines-section pos-rel section-bg-dark-1">
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <div class="twelve-columns column-100-100">
                        <h2 class="headline-m js-scrollanim">
                            <span class="hidden-box d-block"><span>Tech</span> <span class="text-color-red">Stack</span></span>
                        </h2>
                        <div class="stack-container">
                            @foreach (json_decode($project->tech_stack) as $tech)
                                <div class="stack-tag">{{ $tech }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Role & Contribution -->
        <section class="lines-section pos-rel section-bg-dark-1">
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <div class="twelve-columns column-100-100">
                        <h2 class="headline-m js-scrollanim">
                            <span class="hidden-box d-block">
                                <span>My </span><span class="text-color-red">Role</span><span> &amp; </span><span class="text-color-red">Contribution</span>
                            </span>
                        </h2>
                        {!! html_entity_decode($project->role_contribution) !!}
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="lines-section pos-rel section-bg-dark-1">
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <div class="twelve-columns column-100-100">
                        <h2 class="headline-m js-scrollanim">
                            <span class="hidden-box d-block"><span>Features </span><span class="text-color-red">Implemented</span></span>
                        </h2>
                        {!! html_entity_decode($project->features) !!}
                    </div>
                </div>
            </div>
        </section>

        <!-- GitHub Stats -->
        <section class="lines-section pos-rel section-bg-dark-1">
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <div class="twelve-columns column-100-100">
                        <h2 class="headline-m js-scrollanim">
                            <span class="hidden-box d-block"><span>GitHub </span><span class="text-color-red">Stats</span></span>
                        </h2>
                        <div class="margin-top-10 anim-fade tr-delay-08">
                            <p style="font-size:25px" class="body-text-s">{{ $project->github['name'] }}</p>
                        </div>
                        <ul>
                            <li>⭐ Stars: {{ $project->github['stars'] }}</li>
                            <li>🍴 Forks: {{ $project->github['forks'] }}</li>
                            <li>👀 Watchers: {{ $project->github['watchers'] }}</li>
                            <li>🐛 Open Issues: {{ $project->github['open_issues'] }}</li>
                            <li>🌐 Language: {{ $project->github['language'] }}</li>
                            @if($project->github['updated_at'])
                            <li>🕒 Last Update: {{ \Carbon\Carbon::parse($project->github['updated_at'])->diffForHumans() }}</li>
                            @endif
                        </ul>
                        <div style="justify-content:center;align-items:center;gap:40px" class="container flex-container">
                            <a href="https://github.com/PrinceInScripts/{{ $project->repo_name }}/stargazers" target="_blank" rel="noopener noreferrer" class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner">⭐ Star on GitHub</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
                            <a href="https://github.com/PrinceInScripts/{{ $project->repo_name }}/fork" target="_blank" rel="noopener noreferrer" class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner">🍴 Fork</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Live Demo & GitHub -->
        <section class="lines-section pos-rel section-bg-dark-1">
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <div class="container flex-container reverse padding-top-40 padding-bottom-60">
                    <div class="twelve-columns column-100-100">
                        <h2 class="headline-m js-scrollanim">
                            <span class="hidden-box d-block"><span class="text-color-red">Live Demo</span></span>
                        </h2>
                        <div style="justify-content:center;align-items:center;gap:40px" class="container flex-container">
                            @if($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank" rel="noopener noreferrer" class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner">🌐 Live Demo</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
                            @endif
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer" class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner">🐙 GitHub Repo</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <x-footer />

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>
</body>
</html>
