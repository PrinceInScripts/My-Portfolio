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
        .contact_list {
            display: flex;
            gap: 20px;
            margin-top: 20px
        }

        .contact_list li {
            font-size: 24px;

        }

        .contact_list li:hover {
            color: red;
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

        /* Hide download button by default */
        .pdf-download {
            display: none;
            cursor: pointer;
        }

        .pdf-viewer {
            width: 100%;
            height: 800px;
            border: none;
        }

        /* On small screens (<768px), hide iframe and show button */
        @media (max-width: 768px) {
            .pdf-viewer {
                display: none;
            }

            .pdf-download {
                display: block;
            }
        }
    </style>


    <!-- fonts -->
    <link
        href="css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- styles -->
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
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

        <section class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-10vh">
                <!-- container start -->
                <div class="padding-top-bottom-100 container">
                    <!-- title start -->
                    <h2 class="headline-l js-scrollanim">
                        <span class="hidden-box d-block">
                            <span class="anim-slide">
                                <span class="text-color-red">My Resume</span>
                            </span>
                        </span>

                    </h2><!-- title end -->
                    <div class="container flex-container padding-top-20">
                        <!-- Show only on large screens -->
                        <div class="pdf-viewer d-none d-md-block">
                            <iframe src="{{ $resume_link }}" frameborder="0"
                                style="width: 100%; height: 800px;"></iframe>
                        </div>

                        <!-- Show only on small screens -->
                        <div class="pdf-download d-md-none text-center mt-4">
                            <a href="{{ $resume_link }}" target="_blank"
                                class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner"> <img style="width: 30px; height: 30px; margin-right: 5px;" src="https://cdn-icons-png.flaticon.com/128/136/136522.png" alt="pdf" > Download Resume (PDF)</span>
                                <span class="border-btn__lines-1"></span>
                                        <span class="border-btn__lines-2"></span>
                                    </a>
                        </div>
                    </div>


                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section>
    </main><!-- main end -->

    <!-- footer start -->
    <x-footer />

    <!-- scripts -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/footer-reveal.js"></script>
    <script src="assets/js/main.js"></script>
      <script src="assets/js/preloader.js"></script>
    <script src="assets/js/footer-reveal_init.js"></script>
</body>

</html>
