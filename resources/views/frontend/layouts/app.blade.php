<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        <meta name="author" content="vecuro">
        <meta name="description" content="TechBiz - IT Solution & Service HTML Template">
        <meta name="keywords" content="TechBiz - IT Solution & Service HTML Template" />
        <meta name="robots" content="INDEX,FOLLOW">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicons - Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="57x57" href="frontend/assets/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="frontend/assets/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="frontend/assets/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="frontend/assets/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="frontend/assets/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="frontend/assets/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="frontend/assets/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="frontend/assets/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="frontend/assets/img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="frontend/assets/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="frontend/assets/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="frontend/assets/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="frontend/assets/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="frontend/assets/img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="frontend/assets/img/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- <link rel="stylesheet" href="frontend/assets/css/app.min.css"> -->
        <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="frontend/assets/css/fontawesome.min.css">
        <!-- Layerslider -->
        <link rel="stylesheet" href="frontend/assets/css/layerslider.min.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="frontend/assets/css/magnific-popup.min.css">
        <!-- Slick Slider -->
        <link rel="stylesheet" href="frontend/assets/css/slick.min.css">
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="frontend/assets/css/style.css">

    </head>
    <body class="antialiased">
        {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}

        <div class="preloader  ">
            <button class="vs-btn preloaderCls">Cancel Preloader </button>
            <div class="preloader-inner">
                <span class="loader"></span>
            </div>
        </div>
        
        <div class="vs-menu-wrapper">
            <div class="vs-menu-area text-center">
                <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo">
                    <a href="#"><img src="frontend/assets/img/logo.png" alt="TechBiz" class="logo"></a>
                </div>
                <div class="vs-mobile-menu">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog List</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="sidemenu-wrapper d-none d-lg-block  ">
            <div class="sidemenu-content">
                <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
                <div class="widget  ">
                    <div class="vs-widget-about">
                        <div class="footer-logo">
                            <a href="index.html"><img src="frontend/assets/img/logo.png" alt="TechBiz" class="logo"></a>
                        </div>
                        <p class="footer-text">Intrinsicly evisculate emerging cutting edge scenarios redefine future-proof e-markets demand line</p>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="widget  ">
                    <h4 class="widget_title">Gallery Posts</h4>
                    <div class="sidebar-gallery">
                        <div class="gallery-thumb">
                            <img src="frontend/assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100">
                        </div>
                        <div class="gallery-thumb">
                            <img src="frontend/assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="widget  ">
                    <h3 class="widget_title">Office Maps</h3>
                    <div class="footer-map">
                        <iframe title="office location map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163720.11965853968!2d8.496481908353967!3d50.121347879150306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1651732317319!5m2!1sen!2sbd" width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    
    @include('frontend.includes.header')

        <section class="  ">
            <div class="vs-carousel hero-layout2" data-slide-show="1" data-fade="true">
                <div>
                    <div class="hero-inner">
                        <div class="hero-bg" data-bg-src="frontend/assets/img/hero/hero-1-1.jpg"></div>
                        <div class="hero-shape1"><img src="frontend/assets/img/hero/hero-shape-2-1.png" alt="bg shape"></div>
                        <div class="hero-shape2"><img src="frontend/assets/img/hero/hero-shape-2-2.png" alt="bg shape"></div>
                        <span class="hero-bg-text">Solution</span>
                        <div class="container">
                            <div class="hero-content">
                                <div class="hero-play">
                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fas fa-play"></i></a>
                                    <div class="media-body">
                                        <span class="hero-play__title">Watch Our Story</span>
                                        <p class="hero-play__label">Subscribe Now</p>
                                    </div>
                                </div>
                                <span class="hero-subtitle">SUCCESS YOUR BUSINESS</span>
                                <h1 class="hero-title">Excellent IT services for your success</h1>
                                <div class="hero-btns">
                                    <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                                    <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hero-inner">
                        <div class="hero-bg" data-bg-src="frontend/assets/img/hero/hero-1-2.jpg"></div>
                        <div class="hero-shape1"><img src="frontend/assets/img/hero/hero-shape-2-1.png" alt="bg shape"></div>
                        <div class="hero-shape2"><img src="frontend/assets/img/hero/hero-shape-2-2.png" alt="bg shape"></div>
                        <span class="hero-bg-text">Support</span>
                        <div class="container">
                            <div class="hero-content">
                                <div class="hero-play">
                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fas fa-play"></i></a>
                                    <div class="media-body">
                                        <span class="hero-play__title">Watch Our Story</span>
                                        <p class="hero-play__label">Subscribe Now</p>
                                    </div>
                                </div>
                                <span class="hero-subtitle">CONVERY YOU BRAND ESSENCE</span>
                                <h1 class="hero-title">Take Service from Expert IT Professinal</h1>
                                <div class="hero-btns">
                                    <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                                    <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hero-inner">
                        <div class="hero-bg" data-bg-src="frontend/assets/img/hero/hero-1-3.jpg"></div>
                        <div class="hero-shape1"><img src="frontend/assets/img/hero/hero-shape-2-1.png" alt="bg shape"></div>
                        <div class="hero-shape2"><img src="frontend/assets/img/hero/hero-shape-2-2.png" alt="bg shape"></div>
                        <span class="hero-bg-text">Consult</span>
                        <div class="container">
                            <div class="hero-content">
                                <div class="hero-play">
                                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fas fa-play"></i></a>
                                    <div class="media-body">
                                        <span class="hero-play__title">Watch Our Story</span>
                                        <p class="hero-play__label">Subscribe Now</p>
                                    </div>
                                </div>
                                <span class="hero-subtitle">DEDICATED SUPPORT TEAM</span>
                                <h1 class="hero-title">Take Free Consultaion For Your Brand</h1>
                                <div class="hero-btns">
                                    <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                                    <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="z-index-common  space-top" data-sec-pos="bottom" data-pos-amount="30px" data-pos-for="#aboutv2">
            <div class="container  wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xxl-3 text-center text-xxl-start">
                        <div class="title-area">
                            <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Why Choose Us</span>
                            <h2 class="sec-title3 h1">Why People Choose Our Services</h2>
                        </div>
                    </div>
                    <div class="col-xxl-9">
                        <div class="row vs-carousel feature-slide2 text-center text-xxl-start" data-slide-show="3" data-md-slide-show="2">
                            <div class="col-xl-4">
                                <div class="feature-style2">
                                    <div class="feature-icon"><img src="frontend/assets/img/icon/fe-2-2.png" alt="Features"></div>
                                    <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">IT Solution</a></h3>
                                    <p class="feature-text">Seize magnetic before visa alignment network wireless whereas frictionless</p>
                                    <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="feature-style2">
                                    <div class="feature-icon"><img src="frontend/assets/img/icon/fe-2-1.png" alt="Features"></div>
                                    <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">IT Consultant</a></h3>
                                    <p class="feature-text">Seize magnetic before visa alignment network wireless whereas frictionless</p>
                                    <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class=" space" data-bg-src="frontend/assets/img/bg/ab-bg-2-1.jpg" id="aboutv2">
            <div class="container">
                <div class="row gx-60">
                    <div class=" col-xl-6 mb-50 mb-xl-0  wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box3">
                            <div class="img-1"><img src="frontend/assets/img/about/ab-2-1.jpg" alt="About image"></div>
                            <div class="img-2"><img src="frontend/assets/img/about/ab-2-2.jpg" alt="About image"></div>
                            <div class="award-box">
                                <div class="award-box__shape"></div>
                                <div class="award-box__icon"><i class="fal fa-award"></i></div>
                                <div class="media-body">
                                    <p class="award-box__number">100+</p>
                                    <div class="award-box__text">Awards we won</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xl-6 align-self-center text-center text-xl-start">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>ABOUT OUR COMPANY</span>
                        <h2 class="sec-title3 h1">Connecting people & technology</h2>
                        <p class="mb-4 pb-2 pe-xl-5">Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore magna aliquaenim ad minim veniam quis nostrud exercitation laboris.</p>
                        <div class="row gx-60 mb-4 pb-1 gy-2 text-start justify-content-center justify-content-xl-start">
                            <div class="col-auto">
                                <div class="about-media">
                                    <div class="about-media__icon"><img src="frontend/assets/img/icon/ab-ic-2-1.png" alt="icon"></div>
                                    <div class="media-body">
                                        <h3 class="about-media__title h6">Provide Skills<br>Services</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="about-media">
                                    <div class="about-media__icon"><img src="frontend/assets/img/icon/ab-ic-2-2.png" alt="icon"></div>
                                    <div class="media-body">
                                        <h3 class="about-media__title h6">Urgent Support<br>For Clients</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="contact.html" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    
        <section class=" space">
            <div class="container  wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">Great Team Members</span>
                            <h2 class="sec-title3 h1">We Have Expert Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.html"><img src="frontend/assets/img/team/t-2-1.jpg" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Grayson Gabriel</a></h3>
                                <p class="team-degi">Cheif Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.html"><img src="frontend/assets/img/team/t-2-2.jpg" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Samuel Thomas</a></h3>
                                <p class="team-degi">Cheif Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.html"><img src="frontend/assets/img/team/t-2-3.jpg" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">William Lucas</a></h3>
                                <p class="team-degi">Cheif Expert</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="team-style2">
                            <div class="team-img">
                                <div class="team-shape1"></div>
                                <div class="team-shape2"></div>
                                <a href="team-details.html"><img src="frontend/assets/img/team/t-2-4.jpg" alt="image"></a>
                                <div class="team-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title h5"><a class="text-inherit" href="team-details.html">Daniel Matthew</a></h3>
                                <p class="team-degi">Cheif Expert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <div class=" space" data-bg-src="frontend/assets/img/bg/counter-bg-2-1.jpg">
            <div class="container">
                <div class="row justify-content-between gy-4">
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="frontend/assets/img/icon/count-1-1.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">858</span>
                                <p class="counter-media__title text-white">Successful Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="frontend/assets/img/icon/count-1-2.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">650</span>
                                <p class="counter-media__title text-white">Media Activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="frontend/assets/img/icon/count-1-3.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">567</span>
                                <p class="counter-media__title text-white">Skilled Experts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-auto">
                        <div class="counter-media">
                            <div class="counter-media__icon"><img src="frontend/assets/img/icon/count-1-4.png" alt="icon"></div>
                            <div class="media-body">
                                <span class="counter-media__number h1 text-white">28k</span>
                                <p class="counter-media__title text-white">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <section class=" space-top space-extra-bottom">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6 mb-30  wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box4">
                            <div class="img-1"><img src="frontend/assets/img/about/ab-3-1.jpg" alt="about image"></div>
                            <div class="img-2"><img src="frontend/assets/img/about/ab-3-2.jpg" alt="about image"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30 pt-10 pt-lg-0 text-center text-md-start">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get best It solution 2022</span>
                        <h2 class="sec-title3 h1 mb-3 pb-3">Ready To Get Our Best Quality Services</h2>
                        <div class="media-order">
                            <div class="media-order__number">01</div>
                            <div class="media-body">
                                <h3 class="media-order__title h6">We Deliver Perfect Solution</h3>
                                <p class="media-order__text">Rapidiously leverage existing quality services with wireless bandwidth seize functionalized methods...</p>
                            </div>
                        </div>
                        <div class="media-order">
                            <div class="media-order__number">02</div>
                            <div class="media-body">
                                <h3 class="media-order__title h6">Specialised Support Service</h3>
                                <p class="media-order__text">Rapidiously leverage existing quality services with wireless bandwidth seize functionalized methods...</p>
                            </div>
                        </div>
                        <div class="media-order">
                            <div class="media-order__number">03</div>
                            <div class="media-body">
                                <h3 class="media-order__title h6">We Deliver Perfect Solution</h3>
                                <p class="media-order__text">Rapidiously leverage existing quality services with wireless bandwidth seize functionalized methods...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class=" space-top space-extra-bottom" data-bg-src="frontend/assets/img/bg/sr-bg-2-1.jpg">
            <div class="container  wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">WHAT WE’RE OFFERING</span>
                            <h2 class="sec-title3 h1">Available Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="service-style2">
                            <div class="service-img">
                                <span class="service-number">01</span>
                                <img src="frontend/assets/img/service/sr-2-1.jpg" alt="image">
                            </div>
                            <div class="service-content">
                                <div class="service-shape" data-bg-src="frontend/assets/img/shape/sr-bg-shape-2-1.png"></div>
                                <h3 class="service-title h5"><a href="service-details.html">Digital Marketing</a></h3>
                                <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and revolutionary quality...</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-style2">
                            <div class="service-img">
                                <span class="service-number">02</span>
                                <img src="frontend/assets/img/service/sr-2-2.jpg" alt="image">
                            </div>
                            <div class="service-content">
                                <div class="service-shape" data-bg-src="frontend/assets/img/shape/sr-bg-shape-2-1.png"></div>
                                <h3 class="service-title h5"><a href="service-details.html">Web Development</a></h3>
                                <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and revolutionary quality...</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-style2">
                            <div class="service-img">
                                <span class="service-number">03</span>
                                <img src="frontend/assets/img/service/sr-2-3.jpg" alt="image">
                            </div>
                            <div class="service-content">
                                <div class="service-shape" data-bg-src="frontend/assets/img/shape/sr-bg-shape-2-1.png"></div>
                                <h3 class="service-title h5"><a href="service-details.html">Software Services</a></h3>
                                <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and revolutionary quality...</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-style2">
                            <div class="service-img">
                                <span class="service-number">04</span>
                                <img src="frontend/assets/img/service/sr-2-4.jpg" alt="image">
                            </div>
                            <div class="service-content">
                                <div class="service-shape" data-bg-src="frontend/assets/img/shape/sr-bg-shape-2-1.png"></div>
                                <h3 class="service-title h5"><a href="service-details.html">Machine Learning</a></h3>
                                <p class="service-text">Intrinsicly reinvent virtual imperatives methods of empowerment and revolutionary quality...</p>
                                <a href="service-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class=" space-top">
            <div class="container  wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-between">
                    <div class="col-lg-auto text-center text-lg-start">
                        <div class="title-area">
                            <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our LATEST PROJECTS</span>
                            <h2 class="sec-title3 h1">Our Successful Projects</h2>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="sec-btns">
                            <button class="vs-btn style4" data-slick-prev="#projectslide1"><i class="far fa-arrow-left"></i>Prev</button>
                            <button class="vs-btn style4" data-slick-next="#projectslide1">Next<i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid overflow-hidden px-xxl-0">
                <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" id="projectslide1">
                    <div class="col-xl-3">
                        <div class="project-style2">
                            <div class="project-img">
                                <img src="frontend/assets/img/gallery/gal-1-1.jpg" alt="project">
                                <div class="project-shape"></div>
                                <a href="frontend/assets/img/gallery/gal-1-1.jpg" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="project-label">IT Solution</span>
                                <h3 class="project-title h5"><a href="project-details.html" class="text-reset">Digital Marketing</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="project-style2">
                            <div class="project-img">
                                <img src="frontend/assets/img/gallery/gal-1-2.jpg" alt="project">
                                <div class="project-shape"></div>
                                <a href="frontend/assets/img/gallery/gal-1-2.jpg" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="project-label">App Solution</span>
                                <h3 class="project-title h5"><a href="project-details.html" class="text-reset">App Development</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="project-style2">
                            <div class="project-img">
                                <img src="frontend/assets/img/gallery/gal-1-3.jpg" alt="project">
                                <div class="project-shape"></div>
                                <a href="frontend/assets/img/gallery/gal-1-3.jpg" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="project-label">UI Design</span>
                                <h3 class="project-title h5"><a href="project-details.html" class="text-reset">Portfolio Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="project-style2">
                            <div class="project-img">
                                <img src="frontend/assets/img/gallery/gal-1-4.jpg" alt="project">
                                <div class="project-shape"></div>
                                <a href="frontend/assets/img/gallery/gal-1-4.jpg" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="project-label">Cyber Security</span>
                                <h3 class="project-title h5"><a href="project-details.html" class="text-reset">Database checkup</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="project-style2">
                            <div class="project-img">
                                <img src="frontend/assets/img/gallery/gal-1-5.jpg" alt="project">
                                <div class="project-shape"></div>
                                <a href="frontend/assets/img/gallery/gal-1-5.jpg" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                            </div>
                            <div class="project-content">
                                <span class="project-label">Affiliate</span>
                                <h3 class="project-title h5"><a href="project-details.html" class="text-reset">Digital Marketing</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class=" space-extra">
            <div class="container  wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">Our Prices</span>
                            <h2 class="sec-title3 h1">Pricing Plans</h2>
                        </div>
                    </div>
                </div>
                <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" data-center-mode="true">
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape" data-bg-src="frontend/assets/img/shape/price-bg-shape-1-1.png"></div>
                            <h3 class="price-package h5">Basic Plan</h3>
                            <div class="price-amount h1">$29.99 <span class="price-duration">/monthly</span></div>
                            <div class="price-features">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Ad Management</li>
                                    <li><i class="far fa-check-circle"></i>Live Chat</li>
                                    <li><i class="far fa-check-circle"></i>Multi-Language Content</li>
                                    <li><i class="far fa-check-circle"></i>Conversational Bots</li>
                                    <li><i class="far fa-check-circle"></i>Programmable Chatbots</li>
                                </ul>
                            </div>
                            <a href="contact.html" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape" data-bg-src="frontend/assets/img/shape/price-bg-shape-1-1.png"></div>
                            <h3 class="price-package h5">Silver Plan</h3>
                            <div class="price-amount h1">$39.99 <span class="price-duration">/anually</span></div>
                            <div class="price-features">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Ad Management</li>
                                    <li><i class="far fa-check-circle"></i>Live Chat</li>
                                    <li><i class="far fa-check-circle"></i>Multi-Language Content</li>
                                    <li><i class="far fa-check-circle"></i>Conversational Bots</li>
                                    <li><i class="far fa-check-circle"></i>Programmable Chatbots</li>
                                </ul>
                            </div>
                            <a href="contact.html" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape" data-bg-src="frontend/assets/img/shape/price-bg-shape-1-1.png"></div>
                            <h3 class="price-package h5">Gold Plan</h3>
                            <div class="price-amount h1">$79.99 <span class="price-duration">/yearly</span></div>
                            <div class="price-features">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Ad Management</li>
                                    <li><i class="far fa-check-circle"></i>Live Chat</li>
                                    <li><i class="far fa-check-circle"></i>Multi-Language Content</li>
                                    <li><i class="far fa-check-circle"></i>Conversational Bots</li>
                                    <li><i class="far fa-check-circle"></i>Programmable Chatbots</li>
                                </ul>
                            </div>
                            <a href="contact.html" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="price-style1">
                            <div class="price-shape" data-bg-src="frontend/assets/img/shape/price-bg-shape-1-1.png"></div>
                            <h3 class="price-package h5">VIP Plan</h3>
                            <div class="price-amount h1">$99.99 <span class="price-duration">/lifetime</span></div>
                            <div class="price-features">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Ad Management</li>
                                    <li><i class="far fa-check-circle"></i>Live Chat</li>
                                    <li><i class="far fa-check-circle"></i>Multi-Language Content</li>
                                    <li><i class="far fa-check-circle"></i>Conversational Bots</li>
                                    <li><i class="far fa-check-circle"></i>Programmable Chatbots</li>
                                </ul>
                            </div>
                            <a href="contact.html" class="vs-btn">Get Started<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section data-bg-src="frontend/assets/img/bg/appoin-bg-1-1.jpg">
            <div class="container">
                <div class="row gx-60">
                    <div class="col-xl-6 align-self-center space  wow fadeInUp" data-wow-delay="0.2s">
                        <span class="sec-subtitle text-white">Make An Appointment</span>
                        <h2 class="sec-title3 h1 text-white">We Provide Best Advice For Your Future</h2>
                        <hr class="hr-style1">
                        <p class="mb-4 mt-1 pb-3 text-white">Compellingly mesh cross-platform portals through functional human capital world-class architectures for orthogonal initiatives. Assertively benchmark visionary quality vectors after covalent e-tailers. Intrinsicly</p>
                        <div class="row gy-30">
                            <div class="col-md-6">
                                <div class="contact-media">
                                    <div class="contact-media__icon"><i class="fal fa-phone-alt"></i></div>
                                    <div class="media-body">
                                        <span class="contact-media__label">24/7 Call Available</span>
                                        <p class="contact-media__info"><a href="tel:+0423565446789">+042356 5446 (789)</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-media">
                                    <div class="contact-media__icon"><i class="fal fa-envelope"></i></div>
                                    <div class="media-body">
                                        <span class="contact-media__label">Write a Quick mail</span>
                                        <p class="contact-media__info"><a href="mailto:support@example.com">support@example.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-media">
                                    <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <div class="media-body">
                                        <span class="contact-media__label">Visite America Office</span>
                                        <p class="contact-media__info">3401 Ladera Dr NW, <br> New York</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-media">
                                    <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                                    <div class="media-body">
                                        <span class="contact-media__label">Visite German Office</span>
                                        <p class="contact-media__info">Kaiserbleek 4 Goslar<br>Lower Saxony</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-wrap1">
                        <form action="#" class="form-style1">
                            <h2 class="form-title h4">Make An Appointment</h2>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Appointment Subject">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="mm/dd/yyyy">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Write a short message..."></textarea>
                            </div>
                            <div class="form-btn">
                                <button class="vs-btn style5">Make An Appointment<i class="far fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="vs-blog-wrapper space-top space-extra-bottom">
            <div class="container  wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">Weekly Updates</span>
                            <h2 class="sec-title3 h1">Weekly Latest Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                    <div class="col-xl-4">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="frontend/assets/img/blog/blog-1-1.jpg" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>24 Feb, 2022</a>
                                        <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                    </div>
                                    <h3 class="blog-title h5"><a href="blog-details.html">Contrary to popular belief ipsum is not simply </a></h3>
                                    <a href="blog-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="frontend/assets/img/blog/blog-1-4.jpg" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>30 Mar, 2022</a>
                                        <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                    </div>
                                    <h3 class="blog-title h5"><a href="blog-details.html">Lorem ipsum placeholder text commonly used</a></h3>
                                    <a href="blog-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="frontend/assets/img/blog/blog-1-2.jpg" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>31 Jul, 2022</a>
                                        <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                    </div>
                                    <h3 class="blog-title h5"><a href="blog-details.html">From its medieval to the digital learn everything</a></h3>
                                    <a href="blog-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="vs-blog blog-style1">
                            <div class="blog-img">
                                <img src="frontend/assets/img/blog/blog-1-3.jpg" alt="Blog Image" class="w-100">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-calendar"></i>26 Aug, 2022</a>
                                        <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                    </div>
                                    <h3 class="blog-title h5"><a href="blog-details.html">Global Business Goal Make Life Easy From Tech</a></h3>
                                    <a href="blog-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <div class=" space" data-bg-src="frontend/assets/img/bg/brand-bg-2-1.jpg">
            <div class="container">
                <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
                    <div class="col-auto"><img src="frontend/assets/img/brand/br-1-1.png" alt="Brand"></div>
                    <div class="col-auto"><img src="frontend/assets/img/brand/br-1-2.png" alt="Brand"></div>
                    <div class="col-auto"><img src="frontend/assets/img/brand/br-1-3.png" alt="Brand"></div>
                    <div class="col-auto"><img src="frontend/assets/img/brand/br-1-4.png" alt="Brand"></div>
                    <div class="col-auto"><img src="frontend/assets/img/brand/br-1-5.png" alt="Brand"></div>
                    <div class="col-auto"><img src="frontend/assets/img/brand/br-1-6.png" alt="Brand"></div>
                </div>
            </div>
        </div>
    
        @include('frontend.includes.footer')
    
        <!-- Scroll To Top -->
        <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
    
        <!-- Jquery -->
        <script src="frontend/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <!-- Slick Slider -->
        <!-- <script src="frontend/assets/js/app.min.js"></script> -->
        <script src="frontend/assets/js/slick.min.js"></script>
        <!-- Bootstrap -->
        <script src="frontend/assets/js/bootstrap.min.js"></script>
        <!-- WOW.js Animation -->
        <script src="frontend/assets/js/wow.min.js"></script>
        <!-- Magnific Popup -->
        <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope Filter -->
        <script src="frontend/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="frontend/assets/js/isotope.pkgd.min.js"></script>
        <!-- Main Js File -->
        <script src="frontend/assets/js/main.js"></script>
        
        
        
    </body>
</html>