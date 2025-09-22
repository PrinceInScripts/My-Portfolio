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

    <!-- fonts -->
    <link
        href="css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        .filter-btn {
            color: #d20120;
            background-color: #fff;
            padding: 6px 40px;
            border: 1px solid #d20120;
            border-radius: 5px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Active button style */
        .filter-btn.active {
            color: #fff;
            background-color: #d20120;
        }

        .filter-btn:hover {
            color: #fff;
            background-color: #d20120;
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

        .swiper-slide {
            width: 48% !important;
        }

        /* media queries */
        @media (max-width: 768px) {
            .swiper-slide {
                width: 100% !important;
            }

            .filter-btn {
                padding: 4px 30px;
                font-size: 16px;
            }
        }
    </style>
    <!-- styles -->
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
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
        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <!-- padding-top-bottom-120 start -->
                <div class="width-100perc padding-top-bottom-120">
                    <!-- title start -->
                    <h2 class="headline-xxl text-center js-scrollanim">
                        <span class="hidden-box d-block">
                            <span class="anim-slide tr-delay-01">
                                <span class="text-color-red">Projects</span>
                            </span>

                            <div class="filters">
                                @foreach ($filters as $filter)
                                    <button class="filter-btn" data-category="{{ strtolower($filter) }}">
                                        {{ $filter }}
                                    </button>
                                @endforeach
                            </div>


                        </span>
                    </h2><!-- title end -->

                    <!-- pos-rel start -->
                    <div class="padding-top-40 padding-bottom-90 pos-rel">
                        <!-- js-1-view-slider start -->
                        <div class="container flex-container hidden-box">
                            <!-- swiper-wrapper start -->
                            @foreach ($projects as $project)
                                <!-- swiper-slide start -->
                                <div class="swiper-slide" data-category="{{ strtolower($project->category) }}">
                                    <div style="flex-direction: column-reverse"
                                        class="flex-container reverse flex-align-center margin-left-right-10">
                                        <div class="six-columns column-100-100 padding-top-30">

                                            <div class="column-r-margin-40-999">
                                                <h3 style="font-size:40px;font-weight:bold" class="subhead-xl">
                                                    {{ $project->title }}</h3>
                                                {{-- <p style="line-height: 1.2"
                                                    class="body-text-l text-color-dadada margin-top-20">
                                                    {{ $project->short_description }}</p> --}}
                                                      {!! html_entity_decode($project->short_description) !!}

                                                <div class="stack-container">
                                                    @foreach (json_decode($project->tech_stack) as $tech)
                                                        <div class="stack-tag">
                                                            {{ $tech }}
                                                        </div>
                                                    @endforeach
                                                </div>




                                                <a href="project-details/{{ $project->slug }}" target="_blank"
                                                    class="border-btn js-pointer-large margin-top-20">
                                                    <span class="border-btn__inner">View Project</span>
                                                    <span class="border-btn__lines-1"></span>
                                                    <span class="border-btn__lines-2"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="six-columns column-100-100 padding-top-30 pos-rel">
                                            <div class="anim-img-scale">
                                                <img class="anim-img-scale__inner" style="border-radius: 20px"
                                                    src="{{ asset($project->banner_image) }}"
                                                    alt="{{ $project->title }}">
                                            </div>

                                        </div>
                                    </div>
                                </div><!-- swiper-slide end -->
                            @endforeach



                        </div><!-- js-1-view-slider end -->


                    </div><!-- pos-rel end -->
                </div><!-- padding-top-bottom-120 end -->
            </div><!-- pos-rel end -->
        </section><!-- new videos end -->

    </main><!-- main end -->

    <!-- footer start -->
    <x-footer />


    <script>
        // Simple JS Filter
        const buttons = document.querySelectorAll('.filter-btn');
        const cards = document.querySelectorAll('.swiper-slide');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const category = btn.getAttribute('data-category');
                cards.forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <!-- scripts -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/footer-reveal.js"></script>
    <script src="assets/js/main.js"></script>
      <script src="assets/js/preloader.js"></script>
    <script src="assets/js/footer-reveal_init.js"></script>
</body>

</html>
