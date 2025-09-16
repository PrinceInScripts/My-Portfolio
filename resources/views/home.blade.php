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
       .select {
    background: transparent;
    color: #fff;
    border: none;
    padding: 10px;
    font-size: 15px;
    border-radius: 6px;
    cursor: pointer;
       vertical-align: middle;
    outline: none;
    background: none;
        border-bottom: 1px solid #ccc;
}


.select option {
    background: #111517;  /* gradient inside dropdown */
    color: #fff; 
    padding: 10px;
     border: none;
            border-bottom: 1px solid #ccc;
            font-size: 15px; 
}

/* Custom hover and selected effect */
.select option:checked,
.select option:hover {
    background: red !important;
    color: #fff !important;
}
              
    </style>

    <!-- styles -->
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    {{-- meta csrf --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .video-bg {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        ul li {
            margin-left: 40px;
            list-style-type: disc;
        }

        .filter-btn {
            color: #d20120;
            background-color: #fff;
            padding: 8px 50px;
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


        .testimonial-section {
            max-width: 1200px;
            margin: auto;
            padding: 80px 20px;
        }

        .testimonial {
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #1f1f1f, #2a2a2a);
            border-radius: 20px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4);
            margin-bottom: 60px;
            padding: 40px;
            gap: 40px;
            opacity: 0;
            transform: translateY(50px);
        }

        .avatar {
            flex-shrink: 0;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #ffffff44;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-content {
            flex: 1;
        }

        .quote {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .author {
            font-weight: bold;
            font-size: 1.1rem;
            color: #ff5e99;
        }

        .role {
            font-size: 0.9rem;
            color: #aaa;
        }

        .lottie-wrapper {
            max-width: 100px;
        }

        @media (max-width: 768px) {
            .testimonial {
                flex-direction: column;
                text-align: center;
                padding: 30px;
            }

            .avatar {
                width: 100px;
                height: 100px;
            }

            .lottie-wrapper {
                margin-top: 20px;
            }
        }

        .block {
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            gap: 40px;
            align-items: center;
        }

        form {
            width: 100%;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            margin-top: 40px;
            flex-wrap: wrap;
            /* allows wrapping on small screens */
        }

        .form-group {
            margin-bottom: 40px;
            width: 48%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 16px;
            color: #fff;
        }

        input,
        textarea {
            border: none;
            border-bottom: 1px solid #ccc;
            padding: 10px;
            color: #fff;
            background: transparent;
            font-size: 15px;
            outline: none;
        }

        textarea {
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .form-container {
                flex-direction: column;
                gap: 20px;
            }

            .form-group {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        
    </style>
</head>

<body class="preloader cursor-anim-enable dark-nav">
    <!-- preloader-loading start -->
    <x-loader />

    <!-- pointer start -->
    <!-- <div class="pointer js-pointer" id="js-pointer">
   <i class="pointer__inner fas fa-long-arrow-alt-right"></i>
   <i class="pointer__inner fas fa-search"></i>
   <i class="pointer__inner fas fa-link"></i>
  </div> -->
    <!-- pointer end -->

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

    <x-header />

    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        <!-- home slider start -->
        <section id="up" class="pos-rel section-bg-dark-1 js-home-slider fullscreen-slider">
            <!-- swiper-wrapper start -->
            <div class="swiper-wrapper">


                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <!-- slide-bg -->
                    <div class="js-parallax-slide-bg bg-img-cover">
                        <video class="video-bg" src="https://shyknytkian.s3.eu-north-1.amazonaws.com/vedio-1.mp4"
                            loop="" muted="" autoplay=""></video>
                    </div>
                    <!-- bg-overlay -->
                    <div class="bg-overlay-black"></div>

                    <!-- content start -->
                    <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                        <div class="container small padding-top-bottom-120">
                            <h2 class="headline-xl">
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-02">Hi, I’m Prince Kumar — <span
                                            class="text-color-red">Full‑Stack Developer!</span></span>
                                </span>

                            </h2>

                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <a href="/about" class="border-btn js-pointer-large">
                                    <span class="border-btn__inner">About</span>
                                    <span class="border-btn__lines-1"></span>
                                    <span class="border-btn__lines-2"></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- content end -->
                </div><!-- swiper-slide end -->
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <!-- slide-bg -->
                    <div class="js-parallax-slide-bg bg-img-cover">
                        <video class="video-bg" src="https://shyknytkian.s3.eu-north-1.amazonaws.com/vedio-1.mp4"
                            autoplay="" loop="" muted=""></video>
                    </div>
                    <!-- bg-overlay -->
                    <!-- <div class="bg-overlay-black"></div> -->

                    <!-- content start -->
                    <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                        <div class="container small text-center padding-top-bottom-120">
                            <h2 class="headline-xl">
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-02"> Turning ideas</span>
                                </span>
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-03">
                                        <span class="text-color-red">into</span> production‑ready
                                    </span>
                                </span>
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-04 text-color-red">Apps</span>
                                </span>
                            </h2>
                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <p class="body-text-s anim-text-reveal js-scrollanim">
                                    I design reliable dashboards, solve backend challenges, and build clean UIs.<br />
                                </p>
                            </div>
                            <br />
                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <a href="/projects" class="border-btn js-pointer-large">
                                    <span class="border-btn__inner">Read more</span>
                                    <span class="border-btn__lines-1"></span>
                                    <span class="border-btn__lines-2"></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- content end -->
                </div><!-- swiper-slide end -->
                <!-- swiper-slide start -->
                <div class="swiper-slide">
                    <!-- slide-bg -->
                    <div class="js-parallax-slide-bg bg-img-cover">
                        <video class="video-bg" src="https://shyknytkian.s3.eu-north-1.amazonaws.com/vedio-1.mp4"
                            autoplay="" loop="" muted=""></video>
                    </div>
                    <!-- bg-overlay -->
                    <!-- <div class="bg-overlay-black"></div> -->

                    <!-- content start -->
                    <div class="flex-min-height-100vh pos-rel" data-swiper-parallax-x="30%">
                        <div class="container small text-center padding-top-bottom-120">
                            <h2 class="headline-xl">
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-02">Focused on</span>
                                </span>
                                <span class="hidden-box d-block">
                                    <span class="anim-slide tr-delay-03 text-color-red">efficiency & clarity</span>
                                </span>

                            </h2>
                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <p class="body-text-s anim-text-reveal js-scrollanim">
                                    From algorithms to admin dashboards, I deliver features that scale.
                                </p>
                            </div>
                            <br />
                            <div class="margin-top-30 anim-fade tr-delay-08">
                                <a href="/about" class="border-btn js-pointer-large">
                                    <span class="border-btn__inner">Read more</span>
                                    <span class="border-btn__lines-1"></span>
                                    <span class="border-btn__lines-2"></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- content end -->
                </div><!-- swiper-slide end -->

            </div><!-- swiper-wrapper end -->

            <!-- swiper-button-prev start -->
            <div class="swiper-button-prev-box fullscreen-slider-arrow after-preloader-anim">
                <div class="anim-fade">
                    <div class="swiper-button-prev"></div>
                </div>
            </div><!-- swiper-button-prev end -->
            <!-- swiper-button-next start -->
            <div class="swiper-button-next-box fullscreen-slider-arrow after-preloader-anim">
                <div class="anim-fade tr-delay-06">
                    <div class="swiper-button-next"></div>
                </div>
            </div><!-- swiper-button-next end -->

            <!-- swiper-pagination start -->
            <div class="pagination-box fullscreen-slider-pagination after-preloader-anim">
                <div class="anim-fade tr-delay-03">
                    <div class="swiper-pagination counter-pagination"></div>
                </div>
            </div><!-- swiper-pagination end -->
        </section><!-- home slider end -->

        <!-- about us start -->
        <section id="down" class="pos-rel section-bg-dark-2">
            <!-- pos-rel start -->
            <div class="pos-rel padding-top-bottom-100">
                <!-- flex-container start -->

                <div class="container flex-container padding-bottom-70">
                    <!-- title start -->
                    <h2 class="column-l-r-margin-10 headline-m js-scrollanim">
                        {{-- <span class="hidden-box d-block">
                            <span class="anim-slide">
                                <span class="text-color-red"></span>
                            </span>
                        </span> --}}
                        <span class="hidden-box d-block">
                            <span class="anim-slide tr-delay-01 text-color-red">About Me (scriptxprince)</span>
                        </span>
                    </h2><!-- title end -->
                    <br><br>
                    <p class="body-text-s anim-text-reveal js-scrollanim">
                        <br> Hi 👋 I’m Prince Kumar, a Full-Stack Developer from Kota, India.
                        <br><br>
                        A passionate developer who loves building impactful projects and solving real-world problems
                        with technology. Over the years, I have explored different areas of development, from frontend
                        design to backend logic, and I continuously push myself to learn and grow in every aspect of
                        coding. I believe in writing clean, efficient code and creating user-friendly solutions that
                        make a difference.
                        <br><br>
                        Apart from my academic journey in BCA, I dedicate a lot of time to improving my skills through
                        platforms like GitHub, LeetCode, and other coding communities. These platforms not only help me
                        sharpen my problem-solving abilities but also allow me to contribute to open-source projects and
                        showcase my work. I regularly track my progress through stats such as repositories, coding
                        streaks, problem-solving achievements, and other milestones, which reflect my consistency and
                        dedication as a developer.
                        <br><br>
                        I am also doing freelancing, where I get the opportunity to work on diverse projects and
                        collaborate with different clients. This experience helps me understand real-world requirements
                        better and polish my skills in delivering professional solutions. Whether it’s web development,
                        solving coding challenges, or experimenting with new technologies, I always strive to give my
                        best and keep growing in my journey as a developer.
                    </p>

                  
                    <br>

                      <div style="gap:40px" class="container flex-container">
									  <a href="/contact" target="_blank"
                                                        class="border-btn js-pointer-large margin-top-20">
                                                        <span class="border-btn__inner">Hire Me</span>
                                                        <span class="border-btn__lines-1"></span>
                                                        <span class="border-btn__lines-2"></span>
                                                    </a>
									  <a href="/my-resume" target="_blank"
                                                        class="border-btn js-pointer-large margin-top-20">
                                                        <span class="border-btn__inner">My Resume</span>
                                                        <span class="border-btn__lines-1"></span>
                                                        <span class="border-btn__lines-2"></span>
                                                    </a>
									

								</div>


                    <!-- column start -->
                    <div class="six-columns padding-bottom-20">

                        <p class="body-text-s anim-text-reveal js-scrollanim"></p>
                    </div><!-- column end -->

                    <!-- column start -->
                    <div class="six-columns padding-bottom-20">
                        <div class="column-l-r-margin-10">
                        </div>
                    </div><!-- column end -->
                </div><!-- flex-container end -->

                <!-- js-infinite-slider start -->
                <div class="js-infinite-slider about-slider hidden-box">
                    <!-- swiper-wrapper start -->
                    <div class="swiper-wrapper">

                        @foreach ($main_lang as $lang)
                            @if ($loop->iteration % 2 == 1)
                                <div class="swiper-slide" style="text-align: center;padding:10px 20px;width:140px">
                                    <h2 class="text">{{ $lang['name'] }}</h2>
                                    <img style="width:60%" class="padding-top-20" src="assets/images/skills/lang1/{{ $lang['image'] }}"
                                        alt="{{ $lang['name'] }}">
                                </div>
                            @else
                                <div class="swiper-slide" style="text-align: center;padding:10px 20px">
                                    <img style="width:60%" src="assets/images/skills/lang1/{{ $lang['image'] }}"
                                        alt="{{ $lang['name'] }}">
                                    <h2 class="padding-top-20 text">{{ $lang['name'] }}</h2>
                                </div>
                            @endif
                        @endforeach


                    </div><!-- swiper-wrapper end -->
                </div><!-- js-infinite-slider end -->
            </div><!-- pos-rel end -->
        </section><!-- about us end -->

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
                                @foreach ($projects as $project)
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide" data-category="{{ strtolower($project->category) }}">
                                        <div class="flex-container reverse flex-align-center margin-left-right-10">
                                            <div class="six-columns column-100-100 padding-top-30">

                                                <div class="column-r-margin-40-999">
                                                    <h3 style="font-size:40px;font-weight:bold" class="subhead-xl">
                                                        {{ $project->title }}</h3>
                                                    <p style="line-height: 1.2"
                                                        class="body-text-l text-color-dadada margin-top-20">
                                                        {{ $project->short_description }}</p>

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

                <div class="text-center padding-bottom-60">
                    {{-- <button class="filter-btn">
                        View All
                    </button> --}}

                     <a href="/projects" target="_blank"
                                        class="border-btn js-pointer-large margin-top-20">
                                        <span class="border-btn__inner">View All</span>
                                        <span class="border-btn__lines-1"></span>
                                        <span class="border-btn__lines-2"></span>
                                    </a>
                </div>

            </div><!-- pos-rel end -->


        </section><!-- new videos end -->


        <!-- albums start -->
        {{-- <section class="pos-rel padding-top-60 section-bg-dark-1">
            <div class="pos-rel padding-top-bottom-30">
                <h2 class="headline-xxl text-center js-scrollanim">
                    <span class="text-color-red anim-text-fill tr-delay-02"
                        data-text="Testimonials">Testimonials</span>
                </h2>

                <div class="js-3-view-slider padding-top-bottom-30 hidden-box pos-rel">
                    <div class="swiper-wrapper js-slider-scroll-anim">

                        @foreach ($testimonials as $feedback)
                            <div class="swiper-slide block">

                                <div class="avatar">
                                    <img class="anim-img-scale__inner"
                                        src="{{ asset($feedback->image) }}" alt="album">
                                </div>



                                <div class="margin-top-20 margin-left-right-20 text-center">
                                    <h3 class="d-inline-block hidden-box">
                                        <span
                                            class="headline-xxxs anim-reveal red tr-delay-01">“{{ $feedback->message }}”</span>
                                    </h3><br>
                                    <span class="d-inline-block hidden-box padding-top-10">
                                        <span style="color: #d20120;font-weight:bold"
                                            class="subhead-xxs text-color-b0b0b0 anim-reveal tr-delay-03">{{ $feedback->name }}</span>

                                    </span>
                                    <br />
                                    <span class="d-inline-block hidden-box">
                                        <span class="subhead-xxs text-color-b0b0b0 anim-reveal tr-delay-03">{{ $feedback->role }}</span>
                                    </span>

                                    <div class="lottie-wrapper" id="lottie-2"></div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="swiper-button-prev-box">
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper-button-next-box">
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="pagination-box">
                        <div class="swiper-pagination counter-pagination"></div>
                    </div>
                </div>
            </div>
        </section> --}}



        <!-- clients start -->
        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <!-- container start -->
                <div class="padding-top-bottom-30 container">
                    <!-- title start -->
                    <h2 class="headline-l js-scrollanim">
                        <span class="hidden-box d-block">
                            <span class="anim-slide">
                                <span class="text-color-red">Contact</span>
                            </span>
                        </span>

                    </h2><!-- title end -->

                    <div class="padding-top-20">
                        <p class="body-text-m anim-text-reveal js-scrollanim">Feel free to reach out for collaborations
                            or
                            freelance opportunities!</p>

                        <form id="contactForm">
                            @csrf
                            <div class="form-container">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name"
                                        placeholder="Enter Your Name" required>

                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email"
                                        placeholder="Enter Your Email" required>

                                    <label for="contact">Contact Number:</label>
                                    <input type="text" id="contact" name="contact"
                                        placeholder="Enter Your Contact Number" required>
                                </div>

                                <div class="form-group">
                                    <label for="reason">Reason:</label>
                                    <select class="select" id="reason" name="reason" required>
                                        <option value="">Select Reason</option>
                                        <option value="collaboration">Collaboration</option>
                                        <option value="freelance">Freelance Opportunity</option>
                                        <option value="other">Other</option>
                                    </select>

                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" rows="4" required></textarea>
                                </div>
                            </div>

                            <button style="cursor: pointer" type="submit" class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner">Send Message</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </button>
                        </form>
                    </div>

                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section><!-- clients end -->
    </main><!-- main end -->


    @include('components.footer')

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- scripts -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/footer-reveal.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/preloader.js"></script>
    <script src="assets/js/footer-reveal_init.js"></script>


<script>
    $(document).ready(function() {
        $('#contactForm').on('submit',function(e){
            e.preventDefault();

            $.ajax({
                url:"{{ route('contact.submit') }}",
                method:"POST",
                data:$(this).serialize(),
                success:function(response){
                    Toastify({
                        text: response.message,
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: '#5cb85c	',
                    }).showToast();

                    $("#contactForm")[0].reset(); // reset form
                },
                error: function(xhr) {
                Toastify({
                    text: "Failed to send message. Try again!",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)"
                }).showToast();
            }
                
            })
        })
    });
</script>


</body>

</html>
