<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', [
        'title'       => 'Contact Prince Kumar | Hire Full-Stack Developer — scriptxprince',
        'description' => 'Contact Prince Kumar (scriptxprince) for freelance web development, collaboration, or job opportunities. Based in Kota, Rajasthan, India.',
        'keywords'    => 'contact Prince Kumar, hire developer India, freelance developer contact, scriptxprince contact, full stack developer hire Kota',
    ])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
        .contact_list { display: flex; gap: 20px; margin-top: 20px; }
        .contact_list li { font-size: 24px; list-style: none; }
        .contact_list li:hover { color: red; }
        .select {
            background: transparent; color: #fff; border: none; padding: 10px;
            font-size: 15px; border-radius: 6px; cursor: pointer; outline: none;
            border-bottom: 1px solid #ccc; width: 100%;
        }
        .select option { background: #111517; color: #fff; padding: 10px; font-size: 15px; }
        .select option:checked, .select option:hover { background: red !important; color: #fff !important; }
        form { width: 100%; }
        .form-container { display: flex; justify-content: space-between; gap: 40px; margin-top: 40px; flex-wrap: wrap; }
        .form-group { margin-bottom: 40px; width: 48%; display: flex; flex-direction: column; gap: 20px; }
        label { font-size: 16px; color: #fff; }
        input, textarea { border: none; border-bottom: 1px solid #ccc; padding: 10px; color: #fff; background: transparent; font-size: 15px; outline: none; }
        textarea { border: 1px solid #ccc; border-radius: 5px; resize: vertical; }
        @media screen and (max-width: 768px) {
            .form-container { flex-direction: column; gap: 20px; }
            .form-group { width: 100%; margin-bottom: 20px; }
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

        <!-- Contact Info -->
        <section id="up" class="pos-rel section-bg-dark-1">
            <div class="pos-rel flex-min-height-10vh">
                <div class="padding-top-120 padding-bottom-40 container">
                    <div class="js-scrollanim">
                        <h1 class="headline-l">
                            <span class="anim-text-double-fill" data-text="Contact">Contact</span>
                            <span class="anim-text-double-fill tr-delay-02" data-text="Me">Me</span>
                        </h1>
                    </div>
                    <div class="flex-container padding-top-30">
                        <div class="four-columns column-50-100 padding-top-60">
                            <div class="column-r-margin-20 js-scrollanim">
                                <p class="headline-xs anim-text-double-fill invert" data-text="Email">Email</p>
                                <div class="padding-top-20">
                                    <h6 class="anim-fade tr-delay-01">
                                        <a href="mailto:princepk7878kumar@gmail.com"
                                            class="subhead-m text-color-dadada text-hover-to-red js-pointer-small">princepk7878kumar@gmail.com</a>
                                    </h6>
                                    <br>
                                    <ul class="list contact_list list_center list_margin-20px hidden-box" style="list-style:none;padding:0;">
                                        <li class="list__item">
                                            <a href="https://www.linkedin.com/in/prince-kumar-788673253/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="anim-slide js-pointer-small">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="https://github.com/PrinceInScripts" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="anim-slide tr-delay-02 js-pointer-small">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="https://www.instagram.com/scriptxprince/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="anim-slide tr-delay-04 js-pointer-small">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="https://t.me/scriptxprince" target="_blank" rel="noopener noreferrer" aria-label="Telegram" class="anim-slide tr-delay-06 js-pointer-small">
                                                <i class="fab fa-telegram"></i>
                                            </a>
                                        </li>
                                        <li class="list__item">
                                            <a href="https://x.com/Princek02057932" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="anim-slide tr-delay-08 js-pointer-small">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="four-columns column-50-100 padding-top-60">
                            <div class="column-r-margin-20 js-scrollanim">
                                <p class="headline-xs anim-text-double-fill invert" data-text="Phone">Phone</p>
                                <div class="padding-top-20">
                                    <h6 class="anim-fade tr-delay-01">
                                        <a href="tel:+918955783570" class="subhead-m text-color-dadada text-hover-to-red js-pointer-small">+91 89557 83570</a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="four-columns column-50-100 padding-top-60">
                            <div class="column-r-margin-20 js-scrollanim">
                                <p class="headline-xs anim-text-double-fill invert" data-text="Location">Location</p>
                                <h6 class="list list_margin-1px padding-top-20 text-color-b0b0b0">
                                    <span class="list__item">
                                        <span class="d-inline-block hidden-box">
                                            <span class="subhead-m anim-reveal tr-delay-01">Kota, Rajasthan, India 🇮🇳</span>
                                        </span>
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form -->
        <section id="down" class="pos-rel section-bg-dark-1">
            <div class="pos-rel flex-min-height-10vh">
                <div class="padding-top-bottom-10 container">
                    <h2 class="headline-l js-scrollanim">
                        <span class="hidden-box d-block">
                            <span class="anim-slide"><span class="text-color-red">Send a Message</span></span>
                        </span>
                    </h2>
                    <div class="padding-top-20">
                        <p class="body-text-m anim-text-reveal js-scrollanim">Feel free to reach out for collaborations or freelance opportunities!</p>
                        <form id="contactForm" novalidate>
                            @csrf
                            <div class="form-container">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Enter Your Name" required>

                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required>

                                    <label for="contact">Contact Number:</label>
                                    <input type="text" id="contact" name="contact" placeholder="Enter Your Contact Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="reason">Reason:</label>
                                    <select class="select" id="reason" name="reason" required>
                                        <option value="">Select Reason</option>
                                        <option value="collaboration">Collaboration</option>
                                        <option value="freelance">Freelance Opportunity</option>
                                        <option value="job">Job / Internship</option>
                                        <option value="other">Other</option>
                                    </select>

                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" rows="5" required></textarea>
                                </div>
                            </div>
                            <button style="cursor:pointer" type="submit" class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner">Send Message</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <x-footer />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <script src="{{ asset('assets/js/footer-reveal_init.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#contactForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('contact.submit') }}",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        Toastify({ text: response.message, duration: 3000, close: true, gravity: "top", position: "right", backgroundColor: '#5cb85c' }).showToast();
                        $("#contactForm")[0].reset();
                    },
                    error: function () {
                        Toastify({ text: "Failed to send. Try again!", duration: 3000, gravity: "top", position: "right", backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)" }).showToast();
                    }
                });
            });
        });
    </script>
</body>
</html>
