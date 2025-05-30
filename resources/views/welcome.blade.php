<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="DDFM1o77jAxZU6eftHKMH27xj0GlXLKDJm4lyR2a">
    <!-- SEO -->
    <title>Prince Kumar | Full Stack Developer & Freelancer</title>
<meta name="keywords"
    content="Prince Kumar, scriptxprince, Full Stack Developer, MERN Developer, Portfolio, Resume, Web Developer, Freelancer, React Developer, PHP Developer, JavaScript, Tailwind CSS, Laravel, Coding Projects">
<meta name="description"
    content="I'm Prince Kumar, a passionate Full Stack Developer and Freelancer. Explore my portfolio showcasing modern web apps, UI design, and coding projects.">
<meta name="author" content="Prince Kumar">
<meta name="robots" content="index, follow">
  <!-- Open Graph (Facebook, LinkedIn) -->
<meta property="og:title" content="Prince Kumar | Full Stack Developer & Freelancer">
<meta property="og:site_name" content="scriptxprince.me">
<meta property="og:description"
    content="Explore the personal portfolio of Prince Kumar — a skilled developer passionate about building user-friendly web applications.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://scriptxprince.me/">
<meta property="og:image" content="https://scriptxprince.me/media/portfolio-preview.jpg"> <!-- Replace with your own image -->
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
   <meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://scriptxprince.me/">
<meta name="twitter:title" content="Prince Kumar | Full Stack Developer & Freelancer">
<meta name="twitter:description"
    content="Portfolio of Prince Kumar – experienced in MERN stack, React, PHP, Laravel, and creative web solutions.">
<meta name="twitter:image" content="https://scriptxprince.me/media/07072020133655-avatar.jpg"> <!-- Replace with your own image -->
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('media/07072020142254-favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('media/07072020142254-favicon.ico') }}" type="image/x-icon">

    <!-- google fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.animatedheadline.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/lity.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <!-- Theme color change in settings menu -->
    <style type="text/css">
        body,
        .btn.black-btn,
        .resume-items .item .bullet,
        .tw-loader,
        .contact-form input,
        .contact-form textarea {
            background: #111111;
        }

        body,
        a,
        a:visited,
        a:active,
        p,
        p a,
        .navbar-expand-md .navbar-nav .nav-link,
        ul.social-icons li a,
        .btn.black-btn,
        .tp-btn-close i,
        .page-title .subtitle,
        .page-title .subtitle a,
        .item-info h3,
        .item-info h3>a,
        .item-info a span,
        .blog-content .blog-meta span,
        .contact-info .info,
        .barfiller .tip,
        .blog-content .blog-meta span,
        .single-blog .blog-meta span,
        .contact-form input,
        .contact-form textarea,
        .contact-form input:focus,
        .contact-form textarea:focus,
        .contact-info .info,
        .entry ol li,
        .entry ul li,
        .entry ol li a,
        .entry ul li a,
        .entry .blockquote pre,
        .entry pre,
        .entry .table-bordered td,
        .entry .table-bordered th {
            color: #a6a6a6;
        }

        .tw-ellipsis .load-dot,
        .barfiller,
        .item-info a:hover span {
            background: #a6a6a6;
        }

        .btn.black-btn,
        .resume-items .item::before,
        .resume-items .item .bullet,
        .contact-form input:focus,
        .contact-form textarea:focus,
        .entry .blockquote,
        .entry pre {
            border-color: #a6a6a6;
        }

        p a:hover,
        a:hover,
        a:focus,
        .navbar-expand-md .navbar-nav .active .nav-link,
        .navbar-expand-md .navbar-nav .nav-link:hover,
        .btn.black-btn:hover,
        .blog-content .blog-title a:hover,
        .entry ol li a:hover,
        .entry ul li a:hover {
            color: #ffffff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .blog-content .blog-title a,
        .page-title h1.title a {
            color: #dddddd;
        }

        .item-info a:hover span {
            color: #111111;
        }

        .home-overlay::before,
        .item-box::before {
            background: rgba(0, 0, 0, 0.8);
        }

        .avatar img,
        .info-image img,
        .info-content,
        .item-info a span,
        .recent-post-heading {
            border-color: rgba(255, 255, 255, 0.2);
        }

        .tp-btn-close {
            background: rgba(255, 255, 255, 0.2);
        }

        .barfiller .fill,
        .barfiller .tip {
            background: #4f4f4f;
        }

        .barfiller .tip:after {
            border-color: #4f4f4f transparent;
        }

        .contact-form input,
        .contact-form textarea,
        .contact-info .info .icon {
            border-color: #4f4f4f;
        }

        @media (max-width: 767px) {

            .navbar .menu-toggler .line,
            .navbar .menu-toggler .line::before,
            .navbar .menu-toggler .line::after {
                background: #dddddd;
            }

            .navbar .navbar-collapse .navbar-nav {
                background: #111111;
            }
        }

        @media only screen and (min-width: 480px) and (max-width: 767px) {

            .navbar .menu-toggler .line,
            .navbar .menu-toggler .line::before,
            .navbar .menu-toggler .line::after {
                background: #dddddd;
            }

            .navbar .navbar-collapse .navbar-nav {
                background: #111111;
            }
        }
    </style>
</head>

<body>
    <!--loader-->
    <div class="tw-loader">
        <div class="preloader-block">
            <div class="tw-ellipsis">
                <span class="load-dot load-dot-1"></span>
                <span class="load-dot load-dot-2"></span>
                <span class="load-dot load-dot-3"></span>
                <span class="load-dot load-dot-4"></span>
            </div>
        </div>
    </div><!--/loader/-->

    <!--Navbar-->
    <nav class="navbar-expand-md navbar fixed-top">
        <a class="" style="font-size: large;" href="#">
            {{-- <a class="navbar-brand" style="font-size: large;" href="#"> --}}
            <img class="img-fluid"
                    src="{{ asset('/media/07072020142258-logo.png') }}" width="100"  alt="logo">
            
        </a>
        <span class="menu-toggler ml-auto" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" role="button">
            <span class="line"></span>
        </span>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a style="font-size: large;" class="nav-link" href="#about">Home</a></li>
                <li class="nav-item"><a style="font-size: large;" class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a style="font-size: large;" class="nav-link" href="#portfolio">Portfolio</a></li>
                {{-- <li class="nav-item"><a class="nav-link"
                            href="#blog">Blog</a></li> --}}
                <li class="nav-item"><a style="font-size: large;" class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!--/Navbar/-->
    <!--Home Section-->
   <section class="home-section home-screen home-overlay" style="background-image:url({{ asset('/frontend/images/home-bg.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-lg-12 text-center">
                    <div class="home-content">
                        <div class="avatar">
                            <img src="{{ asset('/media/07072020133655-avatar.jpg') }}" alt="image">
                        </div>
                        <h1>Prince Kumar</h1>
                        <h2 class="ah-headline clip">
                            <span>I&#039;m a </span>
                            <span class="ah-words-wrapper">

                                <b class="is-visible">Full Stack Developer</b>
                                <b>MERN Stack Developer</b>
                                <b>Problem Solver</b>
                                <b>Open Source Contributor</b>
                                <b>Tech Enthusiast</b>
                                <b>Freelancer</b>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-copyright d-none d-lg-block">
            <p>scriptxprince © 2025 All Rights Reserved.</p>
        </div>
        <div class="social-icons-area d-none d-lg-block">
            <ul class="social-icons">
                <li><a style="font-size: xx-large;" href="https://x.com/Princek02057932"><i class="fa fa-twitter"></i></a></li>
                {{-- <li><a href=""><i class="fa fa-facebook"></i></a></li> --}}
                <li><a style="font-size: xx-large;" href="https://www.linkedin.com/in/prince-kumar-788673253/"><i class="fa fa-linkedin"></i></a></li>
                <li><a style="font-size: xx-large;" href="https://github.com/PrinceInScripts"><i class="fa fa-github"></i></a></li>
                <li><a style="font-size: xx-large;" href="https://www.instagram.com/cds_knightprince/"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </section><!--/Home Section/-->
    <!--About Section-->
    <section class="section none-block display-none" id="about" data-simplebar>
        <div class="tp-btn-close close-about">
            <i class="fa fa-times"></i>
        </div>
        <div class="container">
            <div class="page-title text-center">
                <p class="subtitle">About</p>
                <h1 class="title">My Resume</h1>
            </div>
            <div class="section-inner">
                <!--About Info-->
                <div class="row">
                    <!-- <div class="col-12 col-md-5 col-lg-5">
                            <div class="info-image">
                                <img
                                    src="public/media/07072020134320-about-me.jpg"
                                    alt="image">
                            </div>
                        </div> -->
                    <!-- <div class="col-12 col-md-7 col-lg-7"> -->
                    <div class="col-12 col-md-7 col-lg-12">
                        <div class="info-content">
                            <h2>let’s
                                Introduce about
                                myself</h2>
                            <div class="entry">
                                <p>I began my coding journey as a self-taught developer, diving into the world of
                                    programming through C++ and algorithms. Over time, my passion for web development
                                    grew, and I started learning JavaScript, Node.js, React, and Laravel. Each project I
                                    build enhances my skills, and I’m excited to contribute to innovative projects that
                                    make a difference.</p>
                            </div>
                        </div>
                        <div class="row single-info">
                            <div class="col-12 col-md-12 col-lg-6">
                                <p><span>Name:</span>Prince Kumar</p>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <p><span>Email:</span><a
                                        href="mailto:princepk7878kumar@gmail.com">princepk7878kumar@gmail.com</a></p>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <p><span>Skype:</span>princekumar</p>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <p><span>Phone:</span>+91 8955783570</p>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <p><span>Experience:</span>1.5 years</p>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6">
                                <p><span>Address:</span>Kota, Rajasthan,
                                    India</p>
                            </div>
                        </div>
                        <div class="row single-info-btn">
                            <div class="col-12 col-md-12">
                                <!-- href="public/media/07072020135516-resume.pdf" -->
                                <a href="{{ asset('media/07072020135516-resume.pdf') }}" download class="btn black-btn margin-rb">Download
                                    CV</a>
                                <a href="https://www.instagram.com/cds_knightprince" class="btn black-btn margin-rb">Hire
                                    Me</a>
                            </div>
                        </div>
                    </div>
                </div><!--/About Info/-->
                <!--Resume Block-->
                <div class="row resume-block">
                    <!--Education-->
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="resume-items">
                            <h2 class="col-title">Education</h2>
                            <div class="item">
                                <span class="bullet"></span>
                                <div class="item-card">
                                    <span><i class="fa fa-calendar"></i>2019
                                        - 2021</span>
                                    <h3>Secondary School Certificate</h3>
                                    <p>Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                            <div class="item">
                                <span class="bullet"></span>
                                <div class="item-card">
                                    <span><i class="fa fa-calendar"></i>2022
                                        - 2025</span>
                                    <h3>Bachelor of Computer Application</h3>
                                    <p>Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                            <!-- <div class="item">
                                    <span class="bullet"></span>
                                    <div class="item-card">
                                        <span><i class="fa fa-calendar"></i>2012
                                            - 2016</span>
                                        <h3>Bachelor of Science</h3>
                                        <p>Lorem Ipsum is simply dummy text of
                                            the printing and typesetting
                                            industry.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="item-card">
                                        <span><i class="fa fa-calendar"></i>2016
                                            - 2017</span>
                                        <h3>Master of Science</h3>
                                        <p>Lorem Ipsum is simply dummy text of
                                            the printing and typesetting
                                            industry.</p>
                                    </div>
                                </div> -->
                        </div>
                    </div><!--/Education/-->
                    <!--Experience-->
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="resume-items">
                            <h2 class="col-title">Experience</h2>
                            <div class="item">
                                <span class="bullet"></span>
                                <div class="item-card">
                                    <span><i class="fa fa-calendar"></i>2024
                                        - 2025</span>
                                    <h3>Full-Stack Developer</h3>
                                    <p>Lorem Ipsum is simply dummy text of
                                        the printing and typesetting
                                        industry.</p>
                                </div>
                            </div>
                            <!-- <div class="item">
                                    <span class="bullet"></span>
                                    <div class="item-card">
                                        <span><i class="fa fa-calendar"></i>2018
                                            - 2020</span>
                                        <h3>Back-end Developer</h3>
                                        <p>Lorem Ipsum is simply dummy text of
                                            the printing and typesetting
                                            industry.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="item-card">
                                        <span><i class="fa fa-calendar"></i>2018
                                            - 2020</span>
                                        <h3>UI/UX Designer</h3>
                                        <p>Lorem Ipsum is simply dummy text of
                                            the printing and typesetting
                                            industry.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="bullet"></span>
                                    <div class="item-card">
                                        <span><i class="fa fa-calendar"></i>2018
                                            - 2020</span>
                                        <h3>Wordpress Theme and Plugin
                                            Development</h3>
                                        <p>Lorem Ipsum is simply dummy text of
                                            the printing and typesetting
                                            industry.</p>
                                    </div>
                                </div> -->
                        </div>
                    </div><!--/Experience/-->
                </div><!--/Resume Block/-->
                <!--Skills Block-->
                <div class="skills-block">
                    <h2 class="col-title">My Skills</h2>
                    <div class="row">
                        <!-- Skill Chart Image -->
                        {{-- <div class="col-12 mb-4 text-center">
                            <img src="{{ asset('images/skills-chart.png') }}" alt="Skills Chart" class="img-fluid"
                                style="max-height: 300px;">
                        </div> --}}

                        <!-- HTML -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="progress-bar-linear">
                                <p class="progress-bar-text">HTML</p>
                                <div class="barfiller html">
                                    <div class="tipWrap"><span class="tip"></span></div><span class="fill"
                                        data-percentage="90"></span>
                                </div>
                            </div>
                        </div>

                        <!-- CSS -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="progress-bar-linear">
                                <p class="progress-bar-text">CSS</p>
                                <div class="barfiller css">
                                    <div class="tipWrap"><span class="tip"></span></div><span class="fill"
                                        data-percentage="88"></span>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="progress-bar-linear">
                                <p class="progress-bar-text">JavaScript</p>
                                <div class="barfiller javascript">
                                    <div class="tipWrap"><span class="tip"></span></div><span class="fill"
                                        data-percentage="85"></span>
                                </div>
                            </div>
                        </div>

                        <!-- React -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="progress-bar-linear">
                                <p class="progress-bar-text">React.js</p>
                                <div class="barfiller react">
                                    <div class="tipWrap"><span class="tip"></span></div><span class="fill"
                                        data-percentage="82"></span>
                                </div>
                            </div>
                        </div>

                        <!-- PHP -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="progress-bar-linear">
                                <p class="progress-bar-text">PHP</p>
                                <div class="barfiller php">
                                    <div class="tipWrap"><span class="tip"></span></div><span class="fill"
                                        data-percentage="85"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Laravel -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="progress-bar-linear">
                                <p class="progress-bar-text">Laravel</p>
                                <div class="barfiller laravel">
                                    <div class="tipWrap"><span class="tip"></span></div><span class="fill"
                                        data-percentage="80"></span>
                                </div>
                            </div>
                        </div>

                        <!-- MySQL -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="progress-bar-linear">
                                <p class="progress-bar-text">MySQL</p>
                                <div class="barfiller mysql">
                                    <div class="tipWrap"><span class="tip"></span></div><span class="fill"
                                        data-percentage="83"></span>
                                </div>
                            </div>
                        </div>

                        <!-- Node.js -->
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="progress-bar-linear">
                                <p class="progress-bar-text">Node.js</p>
                                <div class="barfiller nodejs">
                                    <div class="tipWrap"><span class="tip"></span></div><span class="fill"
                                        data-percentage="78"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--/Skills Block/-->
            </div>
        </div>
    </section><!--/About Section/-->
    <!--Portfolio Section-->
    <section class="section none-block display-none" id="portfolio" data-simplebar>
        <div class="tp-btn-close close-portfolio">
            <i class="fa fa-times"></i>
        </div>
        <div class="container">
            <div class="page-title text-center">
                <p class="subtitle">Portfolio</p>
                <h1 class="title">My Works</h1>
            </div>
            <div id="tp_portfolio" class="section-inner">
                <div class="row no-gutters grid-items">
                    @foreach ($projects as $project)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-item">
                            <div class="item-box">
                                <div class="item-img">
                                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                                </div>
                                <div class="item-info">
                                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer">
                                        <span class="fa fa-link"></span>
                                    </a>
                                    <!-- You have a static image link for lightbox, make it dynamic if needed -->
                                    <a href="{{ asset($project['image']) }}" data-lity>
                                        <span class="fa fa-picture-o"></span>
                                    </a>
                                    <h3>
                                        <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer">
                                            {{ $project['title'] }}
                                        </a>
                                    </h3>
                                    <p>{{ $project['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section><!--/Portfolio Section/-->
    <!--Blog Section-->
    {{-- <section class="section none-block display-none" id="blog" data-simplebar>
        <div class="tp-btn-close close-blog">
            <i class="fa fa-times"></i>
        </div>
        <div class="container">
            <div class="page-title text-center">
                <p class="subtitle">Blog</p>
                <h1 class="title">My Articles</h1>
            </div>
            <!--Blog List-->
            <div id="tp_blog" class="section-inner">
                <div class="row no-gutters grid-blogs">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020155909-1.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/12/lorem-ipsum-is-not-simply-random-text.html">Lorem
                                        Ipsum is not simply random text</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020155733-2.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/11/making-it-over-2000-years-old.html">Making
                                        it over 2000 years old</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020155540-3.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/10/it-was-popularised-in-the-1960s.html">It
                                        was popularised in the 1960s</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020155450-4.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/9/various-versions-have-evolved-over-the-years.html">Various
                                        versions have evolved over the
                                        years</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020155342-5.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/8/it-uses-a-dictionary-of-over-200.html">It
                                        uses a dictionary of over 200</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020155217-6.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/7/many-desktop-publishing-packages.html">Many
                                        desktop publishing packages</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020155111-7.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/6/scrambled-it-to-make-a-type-specimen-book.html">Scrambled
                                        it to make a type specimen book</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020155006-8.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/5/the-cites-of-the-word-in-classical-literature.html">The
                                        cites of the word in classical
                                        literature</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020154842-9.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/4/contrary-to-popular-belief.html">Contrary
                                        to popular belief</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020154737-10.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/3/lorem-ipsum-is-simply-dummy-text.html">Lorem
                                        Ipsum is simply dummy text</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020154622-11.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/2/it-is-a-long-established-fact-that-a-reader.html">It
                                        is a long established fact that a
                                        reader</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 grid-blog">
                        <div class="blog-post blog-overlay">
                            <div class="thumbnail">
                                <img src="public/media/07072020150956-12.jpg" alt="image">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">
                                    <a href="article/1/there-are-many-variations-of-passages.html">There
                                        are many variations of passages</a>
                                </h2>
                                <div class="blog-meta">
                                    <span><i class="fa fa-clock-o"></i>07
                                        Jul , 2020 </span>
                                    <span><i class="fa fa-user"></i>Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Blog list/-->
            <div class="more-posts">
                <a href="blog.html" class="btn black-btn">More Posts</a>
            </div>
        </div>
    </section> --}}
    <!--/Blog Section/-->
    <!--Contact Section-->
    <section class="section none-block display-none" id="contact" data-simplebar>
        <div class="tp-btn-close close-contact">
            <i class="fa fa-times"></i>
        </div>
        <div class="container">
            <div class="page-title text-center">
                <p class="subtitle">Say Hello</p>
                <h1 class="title">Contact Me</h1>
            </div>
            <div class="section-inner">
                <div class="row">
                    <!--Contact Form-->
                    <div class="col-12 col-md-7 col-lg-7">
                        <div class="contact-form">
                            <h2 class="col-title">Contact Form</h2>
                            <div id="sent_message"></div>
                            <form id="contact-form" novalidate data-validate="parsley">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name"
                                                class="form-control parsley-validated" data-required="true"
                                                placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email"
                                                class="form-control parsley-validated" data-required="true"
                                                placeholder="Email Address*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" id="subject"
                                                class="form-control parsley-validated" data-required="true"
                                                placeholder="Subject*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control parsley-validated" data-required="true"
                                                placeholder="Message*"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="g-recaptcha"
                                                data-sitekey="6Lffg9gbAAAAAOyccx1grYnCxKd5KE-aIVJK_Urv"></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="isreCaptcha" id="isreCaptcha" class="display-none"
                                    value="1">
                                <!--route-->
                                <input id="sentContactFormMessageId" type="text" class="display-none"
                                    value="https://exp.themeposh.net/sentContactFormMessage">
                                <a href="javascript:void(0);" class="btn black-btn submit-form-class">Send
                                    Message</a>
                            </form>
                        </div>
                    </div><!--/Contact Form/-->
                    <!--Contact Info-->
                    <div class="col-12 col-md-5 col-lg-5">
                        <div class="contact-info">
                            <h2 class="col-title">Contact Info</h2>
<p>I'm always open to discussing new projects, opportunities in web development, or collaborations. Whether you have a question or just want to say hi — feel free to reach out!</p>

                            <div class="row">
                                <div class="col-12">
                                    <div class="info">
                                        <span class="icon">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                        <div class="desc">
                                            <span>Email</span>
                                            <p><a href="mailto:princepk7878kumar@gmail.com">princepk7878kumar@gmail.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="info">
                                        <span class="icon">
                                            <i class="fa fa-skype"></i>
                                        </span>
                                        <div class="desc">
                                            <span>Skype</span>
                                            <p>princekumar</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="info">
                                        <span class="icon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <div class="desc">
                                            <span>Phone</span>
                                            <p>+91 8955783570</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="info">
                                        <span class="icon">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                        <div class="desc">
                                            <span>Address</span>
                                            <p>Kota, Rajasthan, India</p>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/Contact Info/-->
                </div>
            </div>
        </div>

        <!--Google Map-->
        {{-- <div class="google_map" id="google_map"></div> --}}
        <!--/Google Map/-->
    </section><!--/Contact Section/-->

    <!-- JS -->
    <script src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animatedheadline.min.js') }}"></script>
    <script src="{{ asset('frontend/js/animatedModal.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lity.min.js') }}"></script>
    <script src="{{ asset('frontend/js/parsley.min.js') }}"></script>

    {{-- <script src='recaptcha/api.js' async defer></script> --}}
    <script type="text/javascript">
        function initMap() {
            var latlng = {
                lat: 23.824442,
                lng: 90.2125329
            };
            var map = new google.maps.Map(document.getElementById('google_map'), {
                zoom: 10,
                center: latlng,
                zoomControl: true,
                scaleControl: false,
                scrollwheel: false,
                disableDoubleClickZoom: true
            });
            var contentString = '<div class="map-tooltip">' +
                '<ul class="map-tooltip-content">' +
                '<li><h2>Email</h2><p>kawsarahmed@gmail.com</p></li>' +
                '<li><h2>Skype</h2><p>kawsarahmed</p></li>' +
                '<li><h2>Phone</h2><p>+00 123456789</p></li>' +
                '<li><h2>Address</h2><p>Monipur, Dhaka, Bangladesh</p></li>' +
                '</ul>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7tvmKDI1rNPxCezId3lorKS5n4fI7oOM&callback=initMap"></script>
    <script src="{{ asset('frontend/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jarallax-video.min.js') }}"></script>

    <script type="text/javascript">
        var skill_barColor = "#4f4f4f";
        var animatedColor = "#111111";
        var home_page = "video_background";
        var isreCaptcha = "1";
        var skillsdata = [{
            "id": 14,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "HTML",
            "post_content": "{\"percentage\":\"83\",\"alias\":\"html\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:07:36",
            "updated_at": "2020-07-07 04:07:36"
        }, {
            "id": 15,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "CSS",
            "post_content": "{\"percentage\":\"95\",\"alias\":\"css\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:07:52",
            "updated_at": "2020-07-07 04:07:52"
        }, {
            "id": 16,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "PHP",
            "post_content": "{\"percentage\":\"85\",\"alias\":\"php\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:08:06",
            "updated_at": "2020-07-07 04:08:06"
        }, {
            "id": 17,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "MySQL",
            "post_content": "{\"percentage\":\"83\",\"alias\":\"mysql\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:08:23",
            "updated_at": "2020-07-07 04:08:23"
        }, {
            "id": 18,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "Wordpress",
            "post_content": "{\"percentage\":\"80\",\"alias\":\"wordpress\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:08:38",
            "updated_at": "2020-07-07 04:08:38"
        }, {
            "id": 19,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "Javascript",
            "post_content": "{\"percentage\":\"70\",\"alias\":\"javascript\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:08:54",
            "updated_at": "2020-07-07 04:08:54"
        }, {
            "id": 20,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "jQuery",
            "post_content": "{\"percentage\":\"75\",\"alias\":\"jquery\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:09:08",
            "updated_at": "2020-07-07 04:09:08"
        }, {
            "id": 21,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "Laravel",
            "post_content": "{\"percentage\":\"74\",\"alias\":\"laravel\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:09:52",
            "updated_at": "2020-07-07 04:09:52"
        }, {
            "id": 22,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "Adobe Photoshop",
            "post_content": "{\"percentage\":\"80\",\"alias\":\"adobephotoshop\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:10:10",
            "updated_at": "2020-07-07 04:10:10"
        }, {
            "id": 23,
            "user_id": 4,
            "category": "my_skills",
            "post_title": "Illustrator",
            "post_content": "{\"percentage\":\"76\",\"alias\":\"illustrator\"}",
            "status_id": 1,
            "created_at": "2020-07-07 04:10:25",
            "updated_at": "2020-07-07 04:10:25"
        }];
    </script>
    <script src={{ asset('/frontend/js/main.js') }}></script>

    <script>
    jarallax(document.querySelectorAll('.jarallax'), {
        speed: 0.5,
        videoSrc: 'mp4: images/video.mp4',
    });
</script>

</body>

</html>
