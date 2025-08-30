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
        .cards-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background: transparent;
            border: 2px solid #fff;
            border-radius: 12px;
            padding: 40px;
            flex: 1 1 48%;
            /* 👈 50% on large screens */
            min-width: 320px;
            /* 👈 ensures it doesn’t get too small */
            box-sizing: border-box;
        }

        /* Profile section */
        .profile {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile img {
            border-radius: 50%;
            width: 60px;
        }

        .name {
            font-weight: bold;
            font-size: 20px;
        }

        .username {
            color: #888;
            font-size: 14px;
        }

        /* Stats section */
        .stats {
            display: flex;
            justify-content: space-between;
            text-align: center;
            margin-top: 20px;
            gap: 20px;
            flex-wrap: wrap;
        }

        .stats div {
            flex: 1;
            min-width: 80px;
            border-right: 2px solid #ccc;
            padding-right: 10px;
        }

        .stats div:last-child {
            border-right: none;
        }

        .stats p {
            font-size: 22px;
            font-weight: bold;
        }

        .stats span {
            font-size: 14px;
        }

        /* Info */
        .info {
            margin-top: 20px;
            font-size: 14px;
            color: #ccc;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .lang {
            color: #34d399;
        }

        /* Difficulty */
        .difficulty {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .difficulty p {
            font-weight: bold;
        }

        .difficulty .easy {
            color: green;
        }

        .difficulty .medium {
            color: orange;
        }

        .difficulty .hard {
            color: red;
        }

        /* Heatmap */
        .heatmap {
            margin-top: 20px;
        }

        .heatmap p {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .heatmap .grid {
            display: grid;
            grid-template-columns: repeat(30, 10px);
            gap: 3px;
        }

        .heatmap .grid div {
            width: 10px;
            height: 10px;
            border-radius: 2px;
        }

        /* ✅ Responsive */
        @media (max-width: 992px) {
            .card {
                flex: 1 1 100%;
                /* full width on tablets/mobiles */
            }

            .stats {
                justify-content: space-around;
            }

            .heatmap .grid {
                grid-template-columns: repeat(20, 10px);
            }
        }

        /* for small screens */
        @media (max-width: 576px) {
            .cards-container {
                flex-direction: column;
            }

            .card {
                flex: 1 1 100%;
                /* full width on small screens */
                padding: 10px
            }

            .stats {
                justify-content: space-between
            }

            .heatmap .grid {
                grid-template-columns: repeat(20, 10px);
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

    <!-- header start -->
    <x-header />
    <!-- main start -->
    <main class="js-animsition-overlay" data-animsition-overlay="true">
        <!-- about start -->
        <section id="up" class="lines-section pos-rel section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel no-lines flex-min-height-100vh">
                <!-- flex-container start -->
                <div class="container flex-container reverse padding-top-30 padding-bottom-60">
                    <!-- column start -->
                    <div class="twelve-columns column-100-100">
                        <!-- wo we are start -->
                        <div class="padding-top-90">
                            <div class="js-scrollanim">
                                <h2 class="headline-s hidden-box">
                                    <span class="anim-slide"> My Journey in Web Development & Freelancing</span>
                                </h2>
                                <p class="body-text-s margin-top-20 anim-text-reveal tr-delay-02">I am Prince Kumar, a
                                    passionate developer who loves building impactful projects and solving real-world
                                    problems with technology. Over the years, I have explored different areas of
                                    development, from frontend design to backend logic, and I continuously push myself
                                    to learn and grow in every aspect of coding. I believe in writing clean, efficient
                                    code and creating user-friendly solutions that make a difference.<br><br>

                                    Apart from my academic journey in BCA, I dedicate a lot of time to improving my
                                    skills through platforms like GitHub, LeetCode, and other coding communities. These
                                    platforms not only help me sharpen my problem-solving abilities but also allow me to
                                    contribute to open-source projects and showcase my work. I regularly track my
                                    progress through stats such as repositories, coding streaks, problem-solving
                                    achievements, and other milestones, which reflect my consistency and dedication as a
                                    developer.<br><br>

                                    I am also doing freelancing, where I get the opportunity to work on diverse projects
                                    and collaborate with different clients. This experience helps me understand
                                    real-world requirements better and polish my skills in delivering professional
                                    solutions. Whether it’s web development, solving coding challenges, or experimenting
                                    with new technologies, I always strive to give my best and keep growing in my
                                    journey as a developer.<br><br>

                                    I enjoy turning ambiguous product needs into simple UX and reliable backends: small,
                                    testable components on the frontend, clear REST endpoints on the backend, and
                                    thoughtful database schemas that avoid common pitfalls (N+1 queries, missing
                                    indexes). I prefer shipping usable features quickly and iterating with real user
                                    feedback.<br><br>

                                </p>
                            </div>
                        </div><!-- wo we are end -->

                        <!-- what we do start -->
                        {{-- <div class="padding-top-90">
                            <h2 class="headline-s hidden-box">
                                <span class="anim-slide js-scrollanim">What We Do</span>
                            </h2>
                            <!-- accordion start -->
                            <div
                                class="accordion accordion_underline js-accordion js-accordion-first-active margin-top-60">
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">What type of
                                            information is collected and How?</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">Personal information (also known as personally
                                            identifiable information) as used in this Privacy Policy is information that
                                            directly identifies you and that may also be used to contact you either
                                            online or offline. Graphic India collects personal information on our
                                            websites and apps. Graphic India may also collect personal information in
                                            connection with marketing or email campaigns. The type of personal
                                            information collected will vary depending upon the activity and may include
                                            your first and last name, e-mail address, account information for certain
                                            third party sites or networks such as Facebook or Twitter, phone numbers
                                            (including cell phone numbers), home address, and zip code.<br><br>
                                            In addition, we may collect demographic information such as gender;
                                            information about your computer, hardware, software and/or platform;
                                            Internet IP address and connection; information about online activity such
                                            as website/ mobile app usage and time spent on the Graphic Pop app; and,
                                            other data that you may provide.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->

                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Cookies and
                                            Analytics</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">Graphic India uses "cookies" in connection with the
                                            Services. A cookie is a piece of data stored on a website visitor's hard
                                            drive to help us improve your access to our website and identify repeat
                                            visitors to our website. For instance, when we use a cookie to identify you,
                                            you would not have to log in a password more than once, thereby saving time
                                            while on our website. Usage of a cookie is in no way linked to any personal
                                            information on our website. The information that we collect with cookies may
                                            include your IP address, information about how you interact with
                                            advertisements and other content, browser type, system type, device type,
                                            the content and pages that you access, the date and time you view pages, and
                                            the page from which you navigated. In addition to cookies, we may use
                                            analytics tools and other third party technologies to collect non-personal
                                            information in the form of various usage and user metrics when you use our
                                            online products and services. These tools and technologies collect and
                                            analyze certain types of information, including cookies, IP addresses,
                                            device and software identifiers, referring and exit URLs, onsite behavior
                                            and usage information, app use metrics and statistics, feature use metrics
                                            and statistics, usage and purchase history, MAC Address, mobile unique
                                            device ID, and/or other similar information.<br><br>

                                            The third party analytics companies who collect information on our websites,
                                            apps and other online products and/or services may combine the information
                                            collected with other information they have independently collected from
                                            other websites and/or apps or other online products and services relating to
                                            your activities across their network of websites as well as apps and/or
                                            online products and services. Many of these companies collect and use
                                            information under their own privacy policies. Some of these companies may
                                            also help us tailor advertising that we think may be of interest to our
                                            users and to collect and use other data about user activities on our
                                            services (e.g., to allow them to tailor ads on third party
                                            services).<br><br>

                                            If you wish to not have this information used for the purpose of serving you
                                            targeted ads, you may opt-out as described below.<br><br>

                                            Please note this does not opt you out of being served advertising. To the
                                            extent we permit such advertising to occur, you will continue to receive
                                            generic ads.<br><br>

                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->

                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Children
                                            (Below the age of 13 years): Special Note</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">We do not knowingly seek or collect personal information
                                            from children under the age of thirteen (13), nor do we provide it to third
                                            parties. If we determine we have inadvertently gathered any personal
                                            information from a user under the age of 13, we will promptly delete any and
                                            all such personal information from our records.<br><br></p>
                                    </div>
                                </div><!-- accordion__tab end -->

                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">How Personal
                                            Information is Used?</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">We may use information from users of our mobile app and
                                            website, including personal information, behavioral metrics, and other
                                            non-personally identifiable information to operate, provide, improve, and
                                            maintain our app, websites and services, to develop new products and
                                            services, to prevent abuse and fraud, to personalize and display
                                            advertisements and other content for you, and for other administrative and
                                            internal business purposes. The personal information you provide us will
                                            allow you to access the Services and also allow us to deliver messages to
                                            your personal accounts on certain third party sites or networks, such as
                                            Facebook and Twitter. It will also be used to alert you of new products;
                                            handle and route your customer service or technical support questions or
                                            issues; and, notify you of promotions, special events, and offers. By
                                            providing us with a cell phone number, you agree that we may send you text
                                            messages either directly or through a third party site or service (and you
                                            are responsible for any data rates or text fees that may apply).<br><br>

                                            We may also need to use your personal information to: (1) respond to
                                            subpoenas or court orders; (2) establish or exercise our legal rights or
                                            defend against legal claims; (3) protect ourselves, our employees,
                                            contractors, customers, users and others and our Services from fraudulent,
                                            abusive, or unlawful uses; (4) investigate and defend ourselves against
                                            third party claims or allegations; (5) enforce our Terms of Use; or, (6) the
                                            extent otherwise required by applicable law.<br><br>

                                            If you provide us account information for a third-party service, such as
                                            Facebook or Twitter, we may also contact you on such third-party service to
                                            provide information or updates about our Services. This Privacy Policy is
                                            implemented pursuant to the framework of the U.S/EU Safe Harbor and the
                                            U.S./Swiss Safe Harbor and adheres to the Safe Harbor privacy principles
                                            contained therein and complies with the European Union Directive on Data
                                            Protection or the Federal Data Protection and Information Commission of
                                            Switzerland. If at any time you wish to opt-out from having your personal
                                            information used in order to deliver information from Graphic Pop about new
                                            products, services, or promotions, you may contact us at
                                            info@graphicindia.com with the words “Opt Out” in the subject line of your
                                            email.<br><br>

                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Disclosure of
                                            Personal Information</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">We do not sell, rent, or give any retained customer
                                            information to third parties outside of what is necessary to provide the
                                            Services. Such third parties have access to personal information needed to
                                            perform their functions, but may not use it for other purposes. We may
                                            provide personal information to third parties for their use in performing
                                            internal business functions (e.g., payment processing, customer service,
                                            maintenance, security, data analysis, email transmission, beta testing, or
                                            data hosting) on our behalf. Additionally, some third party service
                                            providers may collect information, including personal information, on our
                                            behalf. Whenever possible, we require such third-parties to only collect and
                                            use personal information in accordance with this Privacy Policy, to maintain
                                            the confidentiality, security, and integrity of such personal information,
                                            and for no purpose other than providing us with our requested services. In
                                            the event we are acquired by or merged with another company we may transfer
                                            your personal information to the new company.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Your Access
                                            to and Control Over Your Personal Information</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">You may request that we modify or delete your user
                                            account(s) and any related data at any time. If you wish to delete your user
                                            account(s), please email us at info@graphicindia.com<br><br>

                                            with the words “Delete Account” in the subject line of your email. You may,
                                            at any time, update or correct personal information that you have provided
                                            to us by contacting us at the mailing or email address provided
                                            below.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Personal
                                            Information Protection</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">The security of your personal information is important
                                            to us. We have implemented technical, administrative and physical security
                                            measures to attempt to protect your personal information from unauthorized
                                            access and improper use. However, please understand that no security measure
                                            is perfect or impenetrable and therefore we cannot and do not guarantee the
                                            security of your personal information. We also protect your information
                                            offline. Only employees who need the information to perform a specific job
                                            (for example, customer service) are granted access to personal information.
                                            The computers/servers in which we store personal information are kept in a
                                            secure environment.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Submitting
                                            Personal Information</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">In some of our email messages, we may use a
                                            "click-through URL" linked to content on an app/ website. When you click one
                                            of these URLs, you pass through a separate web server before arriving at the
                                            destination page. We track this click-through data to help us determine
                                            interest in particular topics and measure the effectiveness of our customer
                                            communications. If you prefer not to be tracked in this way, you should not
                                            click text or graphic links in the email messages.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Interactive
                                            Features</h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">If you use a forum, blog, bulletin board, chat room,
                                            user commenting features, or other interactive or social features that may
                                            be offered through any of our Services, you should be aware that any
                                            personal information you submit, display, or publish there is considered
                                            publicly available and can be read, collected, used, and disclosed by other
                                            users of those features, by us, and other third parties without restriction.
                                            To request removal of your personal information from our blog or community
                                            forum, contact us at info@graphicindia.com. In some cases, we may not be
                                            able to remove your personal information, in which case we will let you know
                                            if we are unable to do so and why.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Submitting
                                            Personal Information
                                        </h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">If you use a forum, blog, bulletin board, chat room,
                                            user commenting features, or other interactive or social features that may
                                            be offered through any of our Services, you should be aware that any
                                            personal information you submit, display, or publish there is considered
                                            publicly available and can be read, collected, used, and disclosed by other
                                            users of those features, by us, and other third parties without restriction.
                                            To request removal of your personal information from our blog or community
                                            forum, contact us at info@graphicindia.com. In some cases, we may not be
                                            able to remove your personal information, in which case we will let you know
                                            if we are unable to do so and why.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Links and
                                            Third Party Messaging
                                        </h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">The mobile app/ website may contain links to other
                                            websites including social networking sites and services. Please be aware
                                            that we are not responsible for the content or privacy practices of such
                                            other websites. This Privacy Policy does not apply to third party websites
                                            and we encourage our users to be aware when they leave our app/ website and
                                            to read the privacy statements of any other website that collects personal
                                            information since your rights will be governed by those third party policies
                                            (and not by this Privacy Policy or Graphic India). Additionally, when using
                                            the Services if you choose to download apps or other products you may be
                                            redirected to a third party site or service in order to complete the
                                            download. Those third party sites and services may employ cookies. You may
                                            receive messages or other forms of communication in connection with your use
                                            of the app or other products both from us and from third parties.
                                            Additionally, your use of the app or other products is governed by and
                                            subject to the applicable terms of use and/or privacy policy associated with
                                            the third party site or service, and we are not responsible for the content
                                            or privacy practices of such other sites or services.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">How You Can
                                            Ask Questions or Send Us Comments About This Privacy Policy
                                        </h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">Graphic India welcomes your comments regarding this
                                            Privacy Policy. If you have any questions about this Privacy Policy or have
                                            technical or general support questions, please contact us at
                                            info@graphicindia.com.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->
                                <!-- accordion__tab start -->
                                <div class="accordion__tab js-accordion-tab">
                                    <div class="accordion__btn js-accordion-btn js-pointer-large">
                                        <h6 class="accordion__btn-title headline-xxs margin-top-bottom-20">Notice of
                                            Changes to the Privacy Policy
                                        </h6>
                                    </div>
                                    <div class="accordion__content js-accordion-content">
                                        <p class="body-text-xs">We may update this Privacy Policy from time to time. If
                                            we do, we will update the “Last Updated” date at the bottom of the Privacy
                                            Policy. If we make material changes to how we use personal information, we
                                            will attempt to notify you of the change and to give you the opportunity to
                                            exercise choice as to how your personal information is used. For all changes
                                            to this Privacy Policy, we will post the updated Privacy Policy on Graphic
                                            Pop app or website. We encourage you to review this Privacy Policy
                                            periodically to stay informed about our collection, use and disclosure of
                                            personal information.<br><br>
                                        </p>
                                    </div>
                                </div><!-- accordion__tab end -->

                            </div><!-- accordion end -->
                        </div> --}}
                        <!-- what we do end -->

                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section><!-- about end -->

        <section class="lines-section pos-rel section-bg-dark-1">
            <!-- lines-container start -->
            <div class="lines-container pos-rel no-lines flex-min-height-40vh">
                <!-- flex-container start -->
                <div class="container flex-container reverse padding-top-10 padding-bottom-10">
                    <!-- column start -->
                    <div class="twelve-columns column-100-100">
                        <!-- wo we are start -->
                        <div class="">
                            <div class="js-scrollanim">
                                <h2 class="headline-s hidden-box">
                                    <span class="anim-slide"> My Approach, Mission & Vision</span>
                                </h2>
                                <p class="body-text-s margin-top-20 anim-text-reveal tr-delay-02"
                                    style="font-size: 20px">
                                    My mission as a developer is simple: to build software that is reliable, impactful,
                                    and easy to use. I believe technology should solve problems without adding
                                    complexity, and that’s what drives my work every single day.<br><br>
                                    My vision is to grow into a versatile full-stack and mobile developer who creates
                                    projects that genuinely help people in their daily lives. I aim to design solutions
                                    that not only look good but also perform well under real-world challenges. For me,
                                    development isn’t just about coding—it’s about making an impact. <br><br>
                                    <strong>How I Work:</strong>
                                    I follow a clear and practical approach. I always start small and iterate fast,
                                    breaking down big ideas into manageable steps. I keep my code clean and readable
                                    because I believe good code should be easy to understand for both humans and
                                    machines. I design with users in mind, ensuring the experience is smooth and
                                    intuitive. At the same time, I never compromise on data integrity or scalability,
                                    because a strong foundation is what makes software truly reliable.
                                </p>
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
                                <h2 class="headline-s hidden-box">
                                    <span class="anim-slide"> A Fun Personal Touch</span>
                                </h2>
                                <p class="body-text-s margin-top-20 anim-text-reveal tr-delay-02"
                                    style="font-size: 20px">
                                    Outside of coding, I’m someone who enjoys the simple things—like sipping chai while
                                    sketching new UI ideas or exploring little productivity hacks that make life easier.
                                    For me, coding is not just technical work; it feels like solving a puzzle while also
                                    creating art. It’s this balance of logic and creativity that keeps me inspired every
                                    day.
                                    <br><br>
                                    <em>“I believe in the mindset: dream big, start small, and ship often—because
                                        consistent progress always leads to meaningful results.”</em>
                                </p>
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
                                <h2 style="margin-bottom: 20px;" class="headline-s hidden-box">
                                    <span class="anim-slide"> Coding Journey</span>
                                </h2>
                                <!-- about.blade.php -->
                                <div class="cards-container">

                                    <!-- GitHub Card -->
                                    <div class="card github-card">
                                        <h6 class="headline-xxs hidden-box" style="margin-bottom: 20px;">
                                            <span class="anim-slide text-color-red">👨‍💻 My GitHub Journey</span>
                                        </h6>

                                        <!-- Profile Section -->
                                        <div class="profile">
                                            <img src="{{ $github['avatar_url'] }}" alt="Avatar">
                                            <div>
                                                <p class="name">{{ $github['name'] }}</p>
                                                <p class="username">{{ '@' . $github['login'] }}</p>
                                            </div>
                                        </div>

                                        <!-- Stats Section -->
                                        <div class="stats">
                                            <div>
                                                <p>{{ $github['followers'] }}</p><span>Followers</span>
                                            </div>
                                            <div>
                                                <p>{{ $github['following'] }}</p><span>Following</span>
                                            </div>
                                            <div>
                                                <p>{{ $github['public_repos'] }}</p><span>Repos</span>
                                            </div>
                                            <div>
                                                <p>{{ $totalStars ?? 0 }}</p><span>Stars</span>
                                            </div>
                                            <div>
                                                <p>{{ $totalForks ?? 0 }}</p><span>Forks</span>
                                            </div>
                                        </div>

                                        <!-- Additional Info -->
                                        <div class="info">
                                            <p>📍 <span>{{ $github['location'] }}</span></p>
                                            <p>📅 Since
                                                {{ \Carbon\Carbon::parse($github['created_at'])->format('M Y') }}</p>
                                            <p>⏳ Updated
                                                {{ \Carbon\Carbon::parse($github['updated_at'])->diffForHumans() }}</p>
                                            <p>🟢 Languages:
                                                @foreach ($languages as $lang => $bytes)
                                                    <span class="lang">{{ $lang }}</span>
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </p>
                                        </div>

                                        <a href="https://github.com/{{ $github['login'] }}" target="_blank"
                                            class="border-btn js-pointer-large margin-top-20">
                                            <span class="border-btn__inner">Visit Profile</span>
                                            <span class="border-btn__lines-1"></span>
                                            <span class="border-btn__lines-2"></span>
                                        </a>
                                    </div>

                                    <!-- LeetCode Card -->
                                    <div class="card leetcode-card">
                                        <h6 class="headline-xxs hidden-box" style="margin-bottom: 20px;">
                                            <span class="anim-slide text-color-red">🧩 My LeetCode Practice</span>
                                        </h6>

                                        <!-- Profile Section -->
                                        <div class="profile">
                                            <img src="{{ $leetcode['profile']['profile']['userAvatar'] }}" alt="LeetCode Logo">
                                            <div>
                                                <p class="name">{{ $leetcode['profile']['username'] }}</p>
                                                <p class="username">Ranking #{{ number_format($leetcode['profile']['profile']['ranking']) }}
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Stats Section -->
                                        <div class="stats">
        <div>
            <p>{{ collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty', 'EASY')['count']+collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty', 'MEDIUM')['count']+collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty', 'HARD')['count'] ?? 0 }}</p><span>Solved Problem</span>
        </div>
        <div>
            <p>{{ round($leetcode['contest']['rating'], 2) }}</p><span>Rating</span>
        </div>
        <div>
            <p>{{ $leetcode['contest']['globalRanking'] }}</p><span>Global Rank</span>
        </div>
    </div>

                                       <!-- Difficulty Breakdown -->
    <div class="difficulty">
        <div>
            <p class="easy">{{ collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty', 'EASY')['count'] ?? 0 }}</p>
            <span>Easy</span>
        </div>
        <div>
            <p class="medium">{{ collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty', 'MEDIUM')['count'] ?? 0 }}</p>
            <span>Medium</span>
        </div>
        <div>
            <p class="hard">{{ collect($leetcode['problems']['numAcceptedQuestions'])->firstWhere('difficulty', 'HARD')['count'] ?? 0 }}</p>
            <span>Hard</span>
        </div>
    </div>
                                        <!-- Submission Calendar -->
                                        <div class="heatmap">
                                           <p>🔥 Daily Streak: {{ $leetcode['calendar']['streak'] }} days</p>
        {{-- <div class="grid">
            @foreach (json_decode($leetcode['calendar']['submissionCalendar'], true) as $day => $count)
                <div style="width:10px;height:10px;display:inline-block;
                            background: {{ $count > 0 ? '#34d399' : '#e5e7eb' }}">
                </div>
            @endforeach
        </div> --}}
                                        </div>

                                        <a href="https://leetcode.com/{{ $github['login'] }}" target="_blank"
                                            class="border-btn js-pointer-large margin-top-20">
                                            <span class="border-btn__inner">Visit Profile</span>
                                            <span class="border-btn__lines-1"></span>
                                            <span class="border-btn__lines-2"></span>
                                        </a>
                                    </div>
                                </div>



                            </div>
                        </div><!-- wo we are end -->



                    </div><!-- column end -->
                </div><!-- flex-container end -->
            </div><!-- lines-container end -->
        </section>

        <!-- clients start -->
        <section id="down" class="pos-rel section-bg-dark-1">
            <!-- pos-rel start -->
            <div class="pos-rel flex-min-height-100vh">
                <!-- container start -->
                <div class="padding-top-bottom-30 container">
                    <!-- title start -->
                    <h2 class="headline-l js-scrollanim">
                        <span class="hidden-box d-block">
                            <span class="">
                                <span class="text-color-red">Skills</span>
                            </span>
                        </span>

                    </h2><!-- title end -->


                    <!-- clients-lines start -->
                    <div class="clients-lines padding-top-90">

                        @foreach ($main_lang as $lang)
                            <div class="clients-lines__column">
                                <div class="clients-lines__inner hover-box pos-rel">
                                    <div class=" client-hover-out pos-abs pos-center-center text-color-white"
                                        style="font-size: 40px;width: 100%;display: flex;justify-content: center;align-items: center;">
                                        <img class="client-logo client-hover-out pos-abs pos-center-center"
                                            src="assets/images/skills/lang1/{{ $lang['image'] }}" alt="clients logo"
                                            style="width: 70px">
                                    </div>
                                    <div class="client-logo client-hover-in pos-abs pos-center-center">
                                        <span style="font-size: 40px;font-weight:bold"
                                            class="text-color-red">{{ $lang['name'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @foreach ($main_lang2 as $lang)
                            <div class="clients-lines__column">
                                <div class="clients-lines__inner hover-box pos-rel">
                                    <div class=" client-hover-out pos-abs pos-center-center text-color-white"
                                        style="font-size: 40px;width: 100%;display: flex;justify-content: center;align-items: center;">
                                        <img class="client-logo client-hover-out pos-abs pos-center-center"
                                            src="assets/images/skills/lang2/{{ $lang['image'] }}" alt="clients logo"
                                            style="width: 70px">
                                    </div>
                                    <div class="client-logo client-hover-in pos-abs pos-center-center">
                                        <span style="font-size: 40px;font-weight:bold"
                                            class="text-color-red">{{ $lang['name'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- clients-lines__column start -->
                        {{-- <div class="clients-lines__column">
                            <div class="clients-lines__inner hover-box pos-rel">
                                <img class="client-logo client-hover-out pos-abs pos-center-center"
                                    src="assets/images/GI_Partners_Logo/White/Hotstar.png" alt="clients logo">
                                <img class="client-logo client-hover-in pos-abs pos-center-center"
                                    src="assets/images/GI_Partners_Logo/Red/HotStar_R.png" alt="clients logo">
                            </div>
                        </div> --}}
                        <!-- clients-lines__column end -->


                        <!-- clients-lines__column end -->
                    </div><!-- clients-lines end -->


                </div><!-- container end -->
            </div><!-- pos-rel end -->
        </section><!-- clients end -->



    </main><!-- main end -->

    @include('components.footer')

    <!-- scripts -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/footer-reveal.js"></script>
    <script src="assets/js/main.js"></script>
      <script src="assets/js/preloader.js"></script>
    <script src="assets/js/footer-reveal_init.js"></script>
</body>

</html>
