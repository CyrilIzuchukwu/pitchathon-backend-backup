<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pitchathon</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
    <link rel="stylesheet" href="css/styles_last.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/three.min.js"></script>
    <script src="js/vanta.globe.min.js"></script>

    <style>
        .bg-primary {
            background: <?php echo $color_theme->theme_color ?>;
        }

        .login-hover:hover {
            background: <?php echo $color_theme->sec_color ?>;
        }


        *::after:not(i),
        *::before:not(i) {
            background: <?php echo $color_theme->sec_color ?> !important;
        }

        .dashboard:hover {
            background: <?php echo $color_theme->theme_color ?> !important;
        }

        .text-gradient {
            background: linear-gradient(to right, <?php echo $color_theme->theme_color ?>, <?php echo $color_theme->sec_color ?>) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
        }

        .bg-gradient {
            background: linear-gradient(to right, <?php echo $color_theme->theme_color ?>, <?php echo $color_theme->sec_color ?>) !important;
        }

        .text-primary {
            color: <?php echo $color_theme->theme_color ?>;
        }

        .text-secondary {
            color: <?php echo $color_theme->sec_color ?>;
        }

        .text-gradient {
            color: <?php echo $color_theme->sec_color ?>;

        }

        .border-primary {
            border-color: <?php echo $color_theme->theme_color ?>;
        }
    </style>
</head>

<body class="js-container" id="container">

    <!-- General wrapper  -->
    <div class="wrapper">
        <div class="w-full lg:h-[80px] h-auto px-2 md:px-4 lg:px-96 bg-gradient-to-t from-sky-200 to-white">
            <img src="/updates/{{ $navimg->top_nav_img }}" alt="logos" class="w-full h-full">
        </div>
        <!-- Navbar  -->
        <nav class="lg:px-12 md:px-3 font-poppin px-6 shadow sticky top-0 left-0 z-50 w-full bg-white border-gray-200" data-aos="fade-up">
            <div class="container md:h-20  flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center">
                    <img src="/updates/{{ $logoui->logo }}" class="h-16 md:scale-125 scale-110" alt="Logo" />
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-md text-primary rounded-lg md:hidden hover:bg-primary hover:text-white transition-all duration-300 focus:outline-none" aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full transition-all duration-500 md:flex md:items-center md:gap-4 md:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col p-4 mt-4 mb-4 md:mb-0 rounded-md bg-slate-300 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                        <li>
                            <a href="/" class="inline-block py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="https://dtcnigeria.ng/" class="inline-block py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">About
                                Us</a>
                        </li>
                        <li>
                            <a href="https://dtcnigeria.ng/contact" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Contact
                                Us</a>
                        </li>
                        <li style="display:none">
                            <a href="/all-solutions" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">All Solutions</a>
                        </li>
                        <li>
                            <a href="/shortlisted" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Shortlisted Solutions</a>
                        </li>
                        <li>
                            <a href="/selectedSolution" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Selected Solutions</a>
                        </li>

                    </ul>
                    @if (Route::has('login'))
                    <div class="flex items-center gap-4 md:pb-0 pb-6">
                        @auth
                        @if(Auth::user()->role_as == 1)
                        <a href="{{ url('admin/dashboard') }}" class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white dashboard">Dashboard</a>
                        @elseif(Auth::user()->role_as == 2)
                        <a href="{{ url('Sub_admin/dashboard') }}" class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white dashboard">Dashboard</a>
                        @elseif(Auth::user()->role_as == 3)
                        <a href="{{ url('Jury/dashboard') }}" class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white dashboard">Dashboard</a>
                        @elseif(Auth::user()->role_as == 4)
                        <a href="{{ url('Review/dashboard') }}" class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white dashboard">Dashboard</a>
                        @else
                        <a href="{{ url('/home') }}" class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white dashboard">Dashboard</a>
                        @endif

                        @else
                        <a href="{{ route('login') }}" class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white dashboard">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-10 rounded-lg py-2 border border-primary bg-primary text-white transition-all duration-300 hover:bg-white hover:text-primary dashboard">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </nav>

        @yield('content')





        <!-- Footer  -->
        <footer class="w-full h-auto bg-primary ">
            <div class="grid md:grid-cols-3 gap-6 md:gap-0 md:p-10 p-6 border-b border-white">
                <div class="flex flex-col md:gap-5 gap-3 justify-start items-start text-white text-base">
                    <h2 class="text-white text-base">
                        Contact
                    </h2>

                    <ul class="flex flex-col text-sm items-start gap-3">
                        <li>
                            <a href="mailto:dtc-nigeria@giz.de" class="flex gap-2 justify-center items-center">
                                <i class="ri-mail-line"></i>
                                {{ $pageFooter->email }}
                            </a>
                        </li>
                        <li>
                            <p class="flex gap-2 justify-center items-center"><i class="ri-map-pin-line"></i>{{ $pageFooter->location }}</p>
                        </li>
                    </ul>
                    <!--<div class="flex gap-4 flex-row md:text-2xl text-sm">-->
                    <!--    <a href="#"> <i class="ri-instagram-fill text-"></i></a>-->
                    <!--    <a href="#"><i class="ri-twitter-fill"></i></a>-->
                    <!--    <a href="#"><i class="ri-youtube-fill"></i></a>-->
                    <!--</div>-->
                </div>

                <div class="flex flex-col md:gap-5 gap-3 justify-start items-start text-white text-base">
                    <h2 class="text-whit text-base">
                        Quick Links
                    </h2>

                    <ul class="flex flex-col text-sm items-start gap-3">
                        <li><a href="/">Home</a></li>
                        <li><a href="https://dtcnigeria.ng/">About Us</a></li>
                        <li><a href="https://dtcnigeria.ng/contact">Contact Us</a></li>
                        <li style="display:none;"><a href="/all-solutions">All Solution</a></li>
                        <li><a href="/shortlisted">Shortlisted Solutions</a></li>
                        <li><a href="/selectedSolution">Selected Solutions</a></li>
                    </ul>
                </div>

                <div class="flex flex-col md:gap-5 gap-3 justify-start items-start text-white text-base">
                    <h2 class="text-white text-base">
                        Postal Address
                    </h2>
                    <ul class="flex flex-col text-sm items-start gap-3">
                        <li>{{ $pageFooter->giz }}</li>
                        <li>{{ $pageFooter->postal_address }}</li>
                        <li>{{ $pageFooter->po_box  }}</li>
                        <li>{{ $pageFooter->city }}</li>
                    </ul>
                </div>
            </div>

            <p class="text-white text-sm py-8 md:pl-12 flex items-center flex-wrap gap-2 text-center md:text-start px-3 md:px-0">
                ©
                2023
                {{ $pageFooter->copyright }}. All
                Rights Reserved. | <a href="#">Imprint</a> | <a href="#">Privacy Notice</a> | <a href="#">Disclaimer</a>
            </p>


        </footer>
        <!-- End of Footer  -->
    </div>


    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>