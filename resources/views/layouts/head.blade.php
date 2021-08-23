<head>
	{{--  Required Meta Tags --}}
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>

	{{-- CSRF --}}
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	{{-- Schema.org --}}
	<meta itemprop="title" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta iyemprop="description" content="Vigitrick Commission Website and Artwork Gallery" />
	<meta itemprop="image" content="{{ asset('assets/img/favicon/logo_summary.jpg') }}" />

	{{-- Primary --}}
	<meta name="title" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="description" content="Vigitrick Commission Website and Artwork Gallery" />
	<meta name="image" content="{{ asset('assets/img/favicon/logo_summary.jpg') }}" />
	<meta name="HandledFriendly" content="true" />
	<meta name="MobileOptimized" content="320" />
	<meta name="copyright" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="robots" content="noindex, nofollow" />
	<meta name="abstract" content />
	<meta name="topic" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="summary" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="Classification" content="Business" />
	<meta name="author" content="Vigitrick, vigitrick@gmail.com" />
	<meta name="designer" content="Vigitrick, vigitrick@gmail.com" />
	<meta name="reply-to" content="vigitrick@gmail.com" />
	{{-- <meta name="url" content="https://kadinindonesia.or.id" /> --}}
	{{-- <meta name="identifier-URL" content="https://kadinindonesia.or.id" /> --}}
	<meta name="directory" content="submission" />
	<meta name="pagename" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="revisit-after" content="1 day" />
	<meta name="subtitle" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="target" content="all" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="ResourceLoaderDynamicStyles" content="" />
	<meta name="medium" content="blog" />
	<meta name="category" content="Portfolio Website" />
	<meta name="owner" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="coverage" content="Worldwide" />
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />

	{{-- Open Graph/Facebook --}}
	<meta property="og:type" content="website" />
	{{-- <meta property="og:url" content="https://kadinindonesia.or.id" /> --}}
	<meta property="og:title" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta property="og:image" content="{{ asset('assets/img/favicon/logo_summary.jpg') }}" />
	<meta property="og:description" content="Vigitrick Commission Website and Artwork Gallery" />
	<meta property="og:keywords" content="Portfolio, Comission, Artwork, Graffiti, Anime, Illustration. Vtuber, Virtual YouTuber, Nijisanji, Hololive" />
	<meta property="og:region" content="ID" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:country-property" content="ID" />
	<meta property="og:country-name" content="Indonesia"/>
	<meta property="og:email" content="vigitrick@gmail.com" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:alt" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta property="og:author" content="Authentic Guards Technology" />
	<meta property="og:site_name" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />

	{{-- Twitter --}}
	<meta property="twitter:card" content="summary_large_image" />
	{{-- <meta property="twitter:url" content="https://kadinindonesia.or.id" /> --}}
	<meta property="twitter:title" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta property="twitter:description" content="Vigitrick Commission Website and Artwork Gallery" />
	<meta property="twitter:image" content="{{ asset('assets/img/favicon/logo_summary.jpg') }}" />
	<meta name="twitter:dnt" content="on" />

	{{-- Tweetmeme --}}
	<meta name="tweetmeme-title" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="blogcatalog" />

	{{-- Pinterest --}}
	<meta name="pinterest" content="nopin" description="Sorry, you can't save from my website!" />

	{{-- Google --}}
	<meta name="google" content="notranslate, nositelinkssearchbox, nopagereadaloud" />
	<meta name="googlebot" content="index,follow" />
	<meta name="news_keywords" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="mobile-web-app-capable" content="yes" />

	{{-- Apple --}}
	<meta name="apple-mobile-web-app-title" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<meta name="apple-moblie-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no" />
	<!-- <meta name="viewport" content="width=320, initial-scale=2.3, user-scalable=no" /> -->

	{{-- Windows 8 --}}
	<meta name="application-name" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="msapplication-TileColor" content="#0C0A83" />
	<meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/mstile-144x144.png') }}" />
	<meta name="msapplication-square70x70logo" content="{{ asset('assets/img/favicon/mstile-70x70.png') }}" />
	<meta name="msapplication-square150x150logo" content="{{ asset('assets/img/favicon/mstile-150x150.png') }}" />
	<meta name="msapplication-wide310x150logo" content="{{ asset('assets/img/favicon/mstile-310x150.png') }}" />
	<meta name="msapplication-square310x310logo" content="{{ asset('assets/img/favicon/mstile-310x310.png') }}" />

	{{-- IE --}}
	<meta http-equiv="Page-Enter" content="RevealTrans(Duration=2.0, Transition=2)" />
	<meta http-equiv="Page-Exit" content="RevealTrans(Duration=3.0, Transition=12)" />
	<meta http-equiv="cleartype" content="on" />
	<meta name="mssmarttagspreventparsing" content="true" />
	{{-- <meta name="msapplication-starturl" content="https://kadinindonesia.or.id" /> --}}
	<meta name="msapplication-window" content="width=800;height=600" />
	<meta name="msapplication-navbutton-color" content="blue" />
	<meta name="application-name" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="msappliaction-tooltip" content="{{ str_replace('_', ' ', config('app.name', 'Vigitrick Illustration')) }}" />
	<meta name="theme-color" content="#FFFFFF" />
	<meta name="skype_toolbar" content="skype_toolbar_parser_compatible" />
	<meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}" />

	{{--  Other Browsers  --}}
	<meta name="renderer" content="webkit|ie-comp|ie-stand" />
	<meta name="x5-orientation" content="landscape/portrait" />
	<meta name="x5-fullscreen" content="true" />
	<meta name="x5-page-mode" content="app" />
	<meta name="screen-orientation" content="landscape/portrait" />
	<meta name="full-screen" content="yes" />
	<meta name="imagemode" content="force" />
	<meta name="browsermode" content="application" />
	<meta name="nightmode" content="disable" />
	<meta name="layoutmode" content="fitscreen" />
	<meta name="wap-font-scale" content="no" />

	{{--  Favicon  --}}
	<link rel="manifest" href="{{ asset('site.webmanifest') }}" />
	<link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#0C0A83" />
	{{-- <link rel="author" href="https://authenticguards.com" /> --}}
	<link rel="fluid-icon" href="{{ asset('assets/img/favicon/logo_summary.jpg') }}" type="image/jpeg" />
	<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
	<link rel="logo" href="{{ asset('assets/img/kadin_indonesia_logo.png') }}" />
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicon/apple-touch-icon-57x57.png') }}" />
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}" />
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}" />
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicon/apple-touch-icon-144x144.png') }}" />
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicon/apple-touch-icon-60x60.png') }}" />
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon-120x120.png') }}" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon/apple-touch-icon-76x76.png') }}" />
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon/apple-touch-icon-152x152.png') }}" />
	<link rel="apple-touch-startup-image" href="{{ asset('assets/img/kadin_indonesia_logo.png') }}" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-196x196.png') }}" sizes="196x196" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}" sizes="96x96" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}" sizes="32x32" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}" sizes="16x16" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon/favicon-128.png') }}" sizes="128x128" />

	<title>@yield('title', 'Vigitrick Illustration')</title>

	{{-- Mix Styles --}}
	<link rel="stylesheet" href="{{ mix('assets/css/vendor.css') }}" />
	<link rel="stylesheet" href="{{ mix('assets/css/app.css') }}" />

	{{-- Swiper CSS --}}
	<link rel="stylesheet" href="{{ asset('assets/css/swiper/swiper-bundle.min.css') }}" />

	{{-- AOS CSS --}}
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	@stack('style')
</head>
