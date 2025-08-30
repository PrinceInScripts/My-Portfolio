<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sumbhav">
    <meta name="description" content="Graphic India: India's Leading Character Entertainment Company">
    <meta name="keywords" content="creative, modern, graphic, India, animation, cartoons, novels, audio comics">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/GI_favicon_io/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/GI_favicon_io/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="32x32" href="assets/images/GI_favicon_io/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="512x512" href="assets/images/GI_favicon_io/android-chrome-512x512.png">

    <title>Prince Kumar | Hire Freelance Developer</title>

    <style>
        .six-columns {
            width: 70%;
            margin: 0 auto;
        }

        .video-background {
            margin: 0 auto;
            width: 100%;
        }

        @media (max-width: 768px) {
            .six-columns {
                width: 100%;
            }

            .video-background {
                margin: 0;
                width: 100%;
            }
        }

        .stack-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }

        .stack-tag {
            padding: 6px 14px;
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
            color: #d20120;
            border-radius: 12px;
            font-size: 14px;
            font-weight: 600;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
            transition: all 0.2s ease-in-out;
            cursor: default;
        }

        .stack-tag:hover {
            background: linear-gradient(135deg, #dbeafe, #93c5fd);
            transform: scale(1.05);
        }

        .lines-section ul,
        .lines-section ol {
            margin: 10px !important;
            padding: 10px !important;
            margin-left: 40px !important;
        }

        .lines-section ul li,
        .lines-section ol li {
            margin-bottom: 10px !important;
        }

        .lines-section li {
            margin: 0 !important;
            padding: 0 !important;
            list-style: disc !important;
            font-size: 20px !important;
        }
    </style>

    <!-- fonts -->
    <link
        href="css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- styles -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <!-- preloader-loading start -->
    <x-loader />

    <!-- to top btn start -->
    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box">
            <span class="scroll-to-btn__arrow"></span>
        </span>
    </a><!-- to top btn end -->

    <!-- scroll down btn start -->
    <a href="#down"
        class="scroll-to-btn to-down js-headroom js-midnight-color js-smooth-scroll js-pointer-large js-scroll-btn">
        <span class="scroll-to-btn__box">
            <span class="scroll-to-btn__arrow"></span>
        </span>
    </a><!-- scroll down btn end -->

    <!-- header start -->
    <x-header />

    <!-- main start -->
    <main id="up" class="js-animsition-overlay" data-animsition-overlay="true">
        <!-- new videos start -->
        <!-- new videos start -->
        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            {{-- <div class="pos-rel flex-min-height-100vh"> --}}
            <div class="pos-rel ">
                <!-- padding-top-bottom-120 start -->
                <div class="width-100perc padding-top-bottom-30">
                    <!-- title start -->
                    <h2 class="headline-xxl text-center js-scrollanim">
                        <span class="hidden-box d-block">
                            <span>My</span> <span class="text-color-red">Projects</span>
                        </span>
                    </h2><!-- title end -->

                    <!-- pos-rel start -->
                    <div class="padding-top-40 padding-bottom-90 pos-rel">
                        <!-- js-1-view-slider start -->
                        <div class="container hidden-box js-1-view-slider">
                            <!-- swiper-wrapper start -->
                            <div class="swiper-wrapper js-slider-scroll-anim">
                                <!-- swiper-slide start -->
                                <div class="swiper-slide" data-category="{{ strtolower($project->category) }}">
                                    <div class="six-columns column-100-100 padding-top-30 pos-rel">
                                        <div class="anim-img-scale">
                                            <video class="video-background anim-img-scale__inner" autoplay muted loop>
                                                <source src="{{ asset($project->video_url) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                                @foreach (json_decode($project->screenshot) as $screenshot)
                                    <div class="swiper-slide" data-category="{{ strtolower($project->category) }}">
                                        <div class="six-columns column-100-100 padding-top-30 pos-rel">
                                            <div class="anim-img-scale">
                                                <img class="anim-img-scale__inner" style="border-radius: 20px"
                                                    src="{{ asset($screenshot) }}" alt="Screenshot">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div><!-- swiper-wrapper end -->

                            <!-- swiper-button-prev start -->
                            <div class="swiper-button-prev-box">
                                <div class="swiper-button-prev"></div>
                            </div><!-- swiper-button-prev end -->
                            <!-- swiper-button-next start -->
                            <div class="swiper-button-next-box">
                                <div class="swiper-button-next"></div>
                            </div><!-- swiper-button-next end -->

                            <!-- swiper-pagination start -->
                            <div class="pagination-box">
                                <div class="swiper-pagination counter-pagination"></div>
                            </div><!-- swiper-pagination end -->
                        </div><!-- js-1-view-slider end -->


                    </div><!-- pos-rel end -->
                </div><!-- padding-top-bottom-120 end -->



            </div><!-- pos-rel end -->


        </section>
          <section class="lines-section pos-rel section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <!-- flex-container start -->
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <!-- column start -->
                    <div class="twelve-columns column-100-100">
                        <!-- wo we are start -->
                        <div class="">
                            <div class="js-scrollanim">
                                <h2 class="headline-m js-scrollanim">
                                    <span class="hidden-box d-block text-color-red margin-bottom-20 ">
                                        Description</span>
                                    </span>
                                </h2><!-- title end -->
                             {!! html_entity_decode($project->long_description) !!}
                            </div>
                        </div><!-- wo we are end -->



                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>
      
        <section class="lines-section pos-rel section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <!-- flex-container start -->
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <!-- column start -->
                    <div class="twelve-columns column-100-100">
                        <!-- wo we are start -->
                        <div class="">
                            <div class="js-scrollanim">
                                <h2 class="headline-m js-scrollanim">
                                    <span class="hidden-box d-block">
                                        <span>Tech</span> <span class="text-color-red">Stack</span>
                                    </span>
                                </h2><!-- title end -->
                                <div class="stack-container">
                                    @foreach (json_decode($project->tech_stack) as $tech)
                                        <div class="stack-tag">
                                            {{ $tech }}
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div><!-- wo we are end -->



                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>
        <section class="lines-section pos-rel section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <!-- flex-container start -->
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <!-- column start -->
                    <div class="twelve-columns column-100-100">
                        <!-- wo we are start -->
                        <div class="">
                            <div class="js-scrollanim">
                                <h2 class="headline-m js-scrollanim">
                                    <span class="hidden-box d-block">
                                        <span>My </span> <span class="text-color-red">Role</span> <span>& </span> <span
                                            class="text-color-red">Contribution</span>
                                    </span>
                                </h2><!-- title end -->
                             {!! html_entity_decode($project->role_contribution) !!}
                            </div>
                        </div><!-- wo we are end -->



                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>
        <section class="lines-section pos-rel section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <!-- flex-container start -->
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <!-- column start -->
                    <div class="twelve-columns column-100-100">
                        <!-- wo we are start -->
                        <div class="">
                            <div class="js-scrollanim">
                                <h2 class="headline-m js-scrollanim">
                                    <span class="hidden-box d-block">
                                        <span>Feature </span> <span class="text-color-red">Implemented</span>
                                    </span>
                                </h2><!-- title end -->

                                {!! html_entity_decode($project->features) !!}
                            </div>
                        </div><!-- wo we are end -->



                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>
        <section class="lines-section pos-rel section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <!-- flex-container start -->
                <div class="container flex-container reverse padding-top-40 padding-bottom-10">
                    <!-- column start -->
                    <div class="twelve-columns column-100-100">
                        <!-- wo we are start -->
                        <div class="">
                            <div class="js-scrollanim">
                                <h2 class="headline-m js-scrollanim">
                                    <span class="hidden-box d-block">
                                        <span>Github </span> <span class="text-color-red">Reactions</span>
                                    </span>
                                </h2><!-- title end -->
                                <div class="margin-top-10 anim-fade tr-delay-08">
                                    <p style="font-size: 25px" class="body-text-s">
                                        {{ $project->github['name'] }}
                                    </p>
                                </div>
                                <ul>
                                    <li>⭐ Stars: {{ $project->github['stars'] }}</li>
                                    <li>🍴 Forks: {{ $project->github['forks'] }}</li>
                                    <li>👀 Watchers: {{ $project->github['watchers'] }}</li>
                                    <li>🐛 Open Issues: {{ $project->github['open_issues'] }}</li>
                                    <li>🌐 Language: {{ $project->github['language'] }}</li>
                                    <li>🕒 Last Update:
                                        {{ \Carbon\Carbon::parse($project->github['updated_at'])->diffForHumans() }}
                                    </li>
                                </ul>
                                <div style="justify-content: center;align-items: center;gap:40px"
                                    class="container flex-container">
                                    <a href="https://github.com/PrinceInScripts/{{ $project->repo_name }}/stargazers"
                                        target="_blank" class="border-btn js-pointer-large margin-top-20">
                                        <span class="border-btn__inner">⭐ Star</span>
                                        <span class="border-btn__lines-1"></span>
                                        <span class="border-btn__lines-2"></span>
                                    </a>
                                    <a href="https://github.com/PrinceInScripts/{{ $project->repo_name }}/fork"
                                        target="_blank" class="border-btn js-pointer-large margin-top-20">
                                        <span class="border-btn__inner">🍴 Fork</span>
                                        <span class="border-btn__lines-1"></span>
                                        <span class="border-btn__lines-2"></span>
                                    </a>


                                </div>


                            </div>
                        </div><!-- wo we are end -->



                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>

        <section class="lines-section pos-rel section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <!-- flex-container start -->
                <div class="container flex-container reverse padding-top-40 padding-bottom-60">
                    <!-- column start -->
                    <div class="twelve-columns column-100-100">
                        <!-- wo we are start -->
                        <div class="">
                            <div class="js-scrollanim">
                                <h2 class="headline-m js-scrollanim">
                                    <span class="hidden-box d-block">
                                        <span>Action </span> <span class="text-color-red"></span>
                                    </span>
                                </h2><!-- title end -->
                                <div style="justify-content: center;align-items: center;gap:40px"
                                    class="container flex-container">
                                    <a href="{{ $project->live_url }}" target="_blank"
                                        class="border-btn js-pointer-large margin-top-20">
                                        <span class="border-btn__inner">Live Demo</span>
                                        <span class="border-btn__lines-1"></span>
                                        <span class="border-btn__lines-2"></span>
                                    </a>
                                    <a href="{{ $project->github_url }}" target="_blank"
                                        class="border-btn js-pointer-large margin-top-20">
                                        <span class="border-btn__inner">Github Demo</span>
                                        <span class="border-btn__lines-1"></span>
                                        <span class="border-btn__lines-2"></span>
                                    </a>


                                </div>
                            </div>
                        </div><!-- wo we are end -->



                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>

    </main><!-- main end -->

    <!-- footer start -->
    <x-footer />


    <script></script>

    <!-- scripts -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="assets/js/preloader.js"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>
</body>

</html>
