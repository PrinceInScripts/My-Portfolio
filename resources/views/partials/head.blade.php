{{--
    Shared <head> partial — clean, SEO-optimised, clean, no third-party branding.
    Usage: @include('partials.head', ['title' => '...', 'description' => '...', 'keywords' => '...'])
--}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">
<meta name="author" content="Prince Kumar (scriptxprince)">
<meta name="description" content="{{ $description ?? 'Prince Kumar — Full-Stack Developer & Freelancer from Kota, India. Available for hire. Specialises in MERN stack, Laravel, PHP, React, Node.js and more.' }}">
<meta name="keywords" content="{{ $keywords ?? 'hire full stack developer India, freelance web developer Kota, MERN stack developer, Laravel developer, React developer, Node.js developer, PHP developer, Prince Kumar, scriptxprince, software engineer India' }}">

{{-- Open Graph --}}
<meta property="og:type" content="website">
<meta property="og:site_name" content="Prince Kumar | scriptxprince">
<meta property="og:title" content="{{ $title ?? 'Prince Kumar | Full-Stack Developer & Freelancer' }}">
<meta property="og:description" content="{{ $description ?? 'Prince Kumar — Full-Stack Developer & Freelancer. Available for hire. Building production-ready apps with MERN, Laravel and more.' }}">
<meta property="og:image" content="{{ asset('assets/images/og-image.png') }}">
<meta property="og:url" content="{{ url()->current() }}">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@Princek02057932">
<meta name="twitter:creator" content="@Princek02057932">
<meta name="twitter:title" content="{{ $title ?? 'Prince Kumar | Full-Stack Developer & Freelancer' }}">
<meta name="twitter:description" content="{{ $description ?? 'Prince Kumar — Full-Stack Developer & Freelancer. Building production-ready apps.' }}">
<meta name="twitter:image" content="{{ asset('assets/images/og-image.png') }}">

{{-- Canonical --}}
<link rel="canonical" href="{{ url()->current() }}">

{{-- Favicon (use your own favicon — put favicon.ico in public/assets/images/favicon/) --}}
<link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">

<title>{{ $title ?? 'Prince Kumar | Full-Stack Developer & Freelancer' }}</title>

{{-- Structured Data: Person --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Prince Kumar",
  "alternateName": "scriptxprince",
  "url": "{{ config('app.url') }}",
  "image": "{{ asset('assets/images/og-image.png') }}",
  "jobTitle": "Full-Stack Developer",
  "worksFor": { "@type": "Organization", "name": "Freelance" },
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Kota",
    "addressRegion": "Rajasthan",
    "addressCountry": "IN"
  },
  "sameAs": [
    "https://github.com/PrinceInScripts",
    "https://www.linkedin.com/in/prince-kumar-788673253/",
    "https://x.com/Princek02057932",
    "https://www.instagram.com/scriptxprince/",
    "https://t.me/scriptxprince"
  ]
}
</script>

{{-- Google Fonts --}}
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

{{-- Styles --}}
<link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
