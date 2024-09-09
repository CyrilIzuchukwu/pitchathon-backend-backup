<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Picthaton</title>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <script src="js/three.min.js"></script>
        <script src="js/vanta.globe.min.js"></script>
                <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>



           <!-- General wrapper  -->
    <div class="wrapper font-poppin">

        <!-- Navbar  -->
        <nav class="lg:px-12 md:px-3 font-poppin px-6 shadow fixed top-0 left-0 z-50 w-full bg-white border-gray-200"
            data-aos="fade-up">
            <div class="container md:h-20  flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center">
                    <img src="images/logo.png" class="h-16" alt="Logo" />
                </a>
                <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 ml-3 text-md text-primary rounded-lg md:hidden hover:bg-primary hover:text-white transition-all duration-300 focus:outline-none"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full transition-all duration-500 md:flex md:items-center md:gap-4 md:w-auto"
                    id="navbar-dropdown">
                    <ul
                        class="flex flex-col p-4 mt-4 mb-4 md:mb-0 rounded-md bg-slate-300 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                        <li>
                            <a href="/"
                                class="inline-block py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="https://dtcnigeria.ng/"
                                class="inline-block py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">About
                                Us</a>
                        </li>
                        <li>
                            <a href="https://dtcnigeria.ng/contact"
                                class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Contact
                                Us</a>
                        </li>

                    </ul>
                    @if (Route::has('login'))
                    <div class="flex items-center gap-4 md:pb-0 pb-6">
                        @auth
                            <a href="{{ url('/home') }}"
                                class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white">Log in</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-10 rounded-lg py-2 border border-primary bg-primary text-white transition-all duration-300 hover:bg-white hover:text-primary">Register</a>
                        @endif 
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

</main>
</section>
<!-- End of Timeline  -->



</div>


<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
    VANTA.GLOBE({
        el: "#hero",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        color: '#ffffff',
        backgroundColor: '#05162d',
        scaleMobile: 1.00,
    })
</script>
<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        // Swiper js 
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 20,
            autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            },
            loop: true,
            centerSlide: 'true',
            fade: 'true',
            grabCursor: 'true',
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                }
            },
        });
    </script>
</body>
</html>
