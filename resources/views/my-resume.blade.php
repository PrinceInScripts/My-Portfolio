<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head', [
        'title'       => 'Resume | Prince Kumar — Full-Stack Developer',
        'description' => 'View or download the resume of Prince Kumar (scriptxprince), Full-Stack Developer from Kota, India.',
        'keywords'    => 'Prince Kumar resume, scriptxprince CV, full stack developer resume India, hire developer',
    ])
    <style>
        .pdf-viewer  { width: 100%; height: 800px; border: none; display: block; }
        .pdf-download { display: none; }
        @media (max-width: 768px) {
            .pdf-viewer  { display: none; }
            .pdf-download { display: block; }
        }
    </style>
</head>
<body class="preloader cursor-anim-enable dark-nav">
    <x-loader />
    <a href="#up" class="scroll-to-btn js-headroom js-midnight-color js-smooth-scroll js-pointer-large">
        <span class="scroll-to-btn__box"><span class="scroll-to-btn__arrow"></span></span>
    </a>
    <x-header />

    <main class="js-animsition-overlay" data-animsition-overlay="true">
        <section class="pos-rel section-bg-dark-1">
            <div class="pos-rel flex-min-height-10vh">
                <div class="padding-top-bottom-100 container">
                    <h1 class="headline-l js-scrollanim">
                        <span class="hidden-box d-block">
                            <span class="anim-slide"><span class="text-color-red">My Resume</span></span>
                        </span>
                    </h1>
                    <div class="container flex-container padding-top-20">
                        <!-- Large screen: inline PDF -->
                        <iframe class="pdf-viewer" src="{{ $resume_link }}" title="Prince Kumar Resume"></iframe>
                        <!-- Small screen: download button -->
                        <div class="pdf-download text-center">
                            <a href="{{ $resume_link }}" target="_blank" class="border-btn js-pointer-large margin-top-20">
                                <span class="border-btn__inner">📄 Download Resume (PDF)</span>
                                <span class="border-btn__lines-1"></span>
                                <span class="border-btn__lines-2"></span>
                            </a>
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
