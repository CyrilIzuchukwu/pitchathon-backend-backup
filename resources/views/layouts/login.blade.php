<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techmybiz</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .bg-primary {
            background: <?php echo $color_theme->theme_color ?>;
        }

        .login-hover:hover {
            background: <?php echo $color_theme->sec_color ?>;
        }

        .signup-hover:hover {
            background: <?php echo $color_theme->theme_color ?>;
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

        .login-btn:hover {
            color: <?php echo $color_theme->theme_color ?>;
        }

        .text-gradient {
            color: <?php echo $color_theme->sec_color ?>;

        }

        .border-primary {
            border-color: <?php echo $color_theme->theme_color ?>;
        }
    </style>
</head>

<body>

    <!-- Navbar  -->
    <nav class="lg:px-12 md:px-3 font-poppin px-6 shadow fixed top-0 left-0 z-50 w-full bg-white border-gray-200" data-aos="fade-up">
        <div class="container md:h-20  flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <img src="/updates/{{ $logoui->logo }}" class="h-16" alt="Logo" />
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
                        <a href="{{url('/')}}" class="inline-block py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="https://dtcnigeria.ng/" class="inline-block py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">About
                            Us</a>
                    </li>
                    <li>
                        <a href="https://dtcnigeria.ng/contact" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Contact
                            Us</a>
                    </li>
                    <li style="display: none">
                        <a href="/all-solutions" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">All Solutions</a>
                    </li>
                    <li>
                        <a href="/shortlisted" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Shortlisted Solutions</a>
                    </li>
                    <li>
                        <a href="/selectedSolution" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Selected Solutions</a>
                    </li>

                </ul>
                <div class="flex items-center gap-4 md:pb-0 pb-6">
                    <a href="{{ route('register') }}" class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary signup-hover hover:text-white">Signup</a>

                    <a href="{{ route('login') }}" class="px-10 rounded-lg py-2 border border-primary bg-primary text-white transition-all duration-300 hover:bg-white hover:text-primary login-btn">Login</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- yieldcontent -->
    @yield('content')

    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session('message'))
    <script>
        swal("Good job!", "{{ session('message') }}!", "success");
    </script>
    @endif
    @if (session('error'))
    <script>
        swal("Error!", "{{ session('error') }}!", "warning");
    </script>
    @endif

</body>


</html>