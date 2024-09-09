<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Techmybiz</title>
    <link rel="stylesheet" href="css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="js/three.min.js"></script>
    <script src="js/vanta.globe.min.js"></script>

    @vite('resources/css/app.css');

    <link rel="stylesheet" href="css/custom.css">



    <style>
        .bg-primary {
            background: <?php echo $color_theme->theme_color ?>;
        }

        *::after:not(i),
        *::before:not(i) {
            background: <?php echo $color_theme->sec_color ?> !important;
        }


        .btnswip {
            background: <?php echo $color_theme->theme_color ?> !important;
        }

        .btnswip::before {
            background: none !important;
        }

        .btnswip:hover {
            background: <?php echo $color_theme->sec_color ?> !important;
        }



        .dashboard:hover {
            background: <?php echo $color_theme->theme_color ?> !important;
        }

        .faq:hover {
            background: <?php echo $color_theme->sec_color ?> !important;
        }

        .bg-gradient {
            background: linear-gradient(to right, <?php echo $color_theme->theme_color ?>, <?php echo $color_theme->sec_color ?>) !important;
        }

        .text-gradient {
            background: linear-gradient(to right, <?php echo $color_theme->theme_color ?>, <?php echo $color_theme->sec_color ?>) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
        }

        .bg-call-gradient::before {
            background: linear-gradient(to right, <?php echo $color_theme->theme_color ?>, <?php echo $color_theme->sec_color ?>) !important;
        }

        .text-primary {
            color: <?php echo $color_theme->theme_color ?>;
        }

        .text-secondary {
            color: <?php echo $color_theme->sec_color ?>;
        }

        .register-btn:hover {
            color: <?php echo $color_theme->theme_color ?>;
        }

        .border-primary {
            border-color: <?php echo $color_theme->theme_color ?>;
        }
    </style>
</head>

<body>

    {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
    @else
    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900  dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
    @endif
    @endauth
    </div>
    @endif
    </div> --}}

    <!-- General wrapper  -->
    <div class="wrapper font-poppin">

        <div class="w-full lg:h-[80px] h-auto px-2 md:px-4 lg:px-96 bg-gradient-to-t from-sky-200 to-white">
            <!-- <img src="images/bannerlogos.png" alt="logos" class="w-full h-full"> -->
            <img src="/updates/{{ $navimg->top_nav_img }}" class="h-full w-full" alt="Logos" />
        </div>

        <!-- Navbar  -->
        <nav class="lg:px-12 md:px-3 font-poppin px-6 shadow sticky top-0 left-0 z-50 w-full bg-white border-gray-200">
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
                            <a href="/shortlisted" class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary test">Shortlisted Solutions</a>
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
                        <a href="{{ route('register') }}" class="px-10 rounded-lg py-2 border border-primary bg-primary text-white transition-all duration-300 hover:bg-white hover:text-primary border-primary register-btn" id="applyBtn">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </nav>

        <!-- Hero section  -->
        <section class="w-full md:h-[520px] h-screen lg:px-16 md:px-8 px-3 md:pt-28 pt-24 bg-right md:bg-cover flex justify-center items-center relative" id="hero">
            <div class="w-full h-full absolute top-0 left-0 flex justify-center items-center">
                <main class="w-full h-full md:h-auto md:grid md:grid-cols-2 flex flex-col justify-end md:justify-start  lg:px-12 md:px-8 px-1.5">
                    <div class="flex font-poppin mb-24 md:mb-0 flex-col md:gap-8 gap-4 justify-start items-start px-4 md:px-0" data-aos="fade-right">
                        <h1 class="font-medium bg-gray-900/70 md:bg-transparent capitalize lg:text-[2.8rem] md:text-[2rem] text-3xl font-poppin md:leading-none tracking-wider text-white">
                            {{ $herotext->title }}
                            <span class="typed-text text-secondary"></span><span class="cursor">&nbsp;</span>
                        </h1>
                        <p class="text-start font-poppin  text-base text-white font-light">
                            {{ ucfirst($herotext->description) }}
                        </p>
                        @if (!Auth::check())
                        <a href="{{ route('register') }}" class="md:px-10 px-4 rounded-lg md:py-1.5 py-1 bg-gradient bg-gradient-to-r from-primary to-secondary text-white transition-all duration-300 capitalize hover:bg-slate-700 border border-white" id="applyBtn">Apply
                            Now!</a>
                        @endif

                    </div>
                </main>
            </div>

        </section>
        <!--End of Hero section  -->



        <!-- techmybiz journey  -->
        <section class="w-full bg-gray-200 flex flex-col md:py-16 pb-6 md:pb-0 justify-center items-center gap-14" data-aos="fade-up">
            <h1 class="text-center capitalize md:text-3xl text-xl mt-4 font-poppin text-primary">{{ $journey->title }}
                <!-- <span class="text-gradient">Pitchathon!</span> -->
            </h1>
            <div class=" md:w-[70%] w-full">
                <img src="/updates/{{ $journey->image }}" alt="Banner" class="w-full">
            </div>
        </section>


        <!-- Call for Application -->
        <section class="w-full h-auto font-poppin md:mt-16 mt-6 flex flex-col justify-center items-center gap-6" data-aos="zoom-in">
            <!-- <h1 class="text-center capitalize md:text-4xl text-xl font-poppin text-primary">Call for <span class="text-gradient">Digital Solutions</span> ends in</h1> -->

            <h1 class="text-center capitalize md:text-4xl text-xl font-poppin text-primary">{{ $title->solution_title }}</h1>

            <main class="grid grid-cols-4 md:gap-12 gap-2 md:mt-12 mt-4" id="countDownDate" data-countdown="<?php echo $countDown->countDown ?>">
                <!-- Countdown Time  -->
                <div class="flex flex-col md:w-32 w-20 md:py-4 py-2 md:gap-2 bg-primary text-white rounded-lg items-center justify-center">
                    <h1 class="md:text-6xl text-3xl font-semibold" id="day"></h1>
                    <small class="uppercase text-sm md:text-base font-light">days</small>
                </div>

                <div class="flex flex-col md:w-32 w-20 md:py-4 py-2 md:gap-2 bg-primary text-white rounded-lg items-center justify-center">
                    <h1 class="md:text-6xl text-3xl font-semibold" id="hour"></h1>
                    <small class="uppercase text-sm md:text-base font-light">hours</small>
                </div>

                <div class="flex flex-col md:w-32 w-20 md:py-4 py-2 md:gap-2 bg-primary text-white rounded-lg items-center justify-center">
                    <h1 class="md:text-6xl text-3xl font-semibold" id="min"></h1>
                    <small class="uppercase text-sm md:text-base font-light">mins</small>
                </div>

                <div class="flex flex-col md:w-32 w-20 md:py-4 py-2 md:gap-2 bg-primary text-white rounded-lg items-center justify-center">
                    <h1 class="md:text-6xl text-3xl font-semibold" id="sec"></h1>
                    <small class="uppercase text-sm md:text-base font-light">sec</small>
                </div>
                <!--End of Countdown Time  -->
            </main>

            <!-- Expired display  -->
            <p id="expired" class=" mt-1 text-2xl text-primary capitalize"></p>

            
            <!--End of Expired display  -->
            @if (!Auth::check())
            <a href="{{ route('register') }}" class="md:px-10 px-4 w-1/2 md:w-auto text-base flex justify-center items-center rounded-lg md:py-1.5 py-1 bg-primary text-white transition-all duration-300 capitalize hover:bg-slate-700 whitespace-nowrap" id="applyBtn">Apply Now!</a>
            @endif
        </section>
        <!-- Call for Application -->

        <!-- Who is eligible  -->
        <section class="w-full mt-28 bg-gray-200 pb-12 pt-8 md:pt-0 font-poppin flex flex-col justify-center items-center">
            <h1 class="text-gradient md:text-4xl text-2xl font-medium md:my-10 mb-16 md:mb-0 capitalize gradient" data-aos="fade-up">
                {{ $eligibility->title }}
            </h1>
            <main class="w-full grid md:h-[450px] md:grid-cols-2 md:gap-0 gap-20" data-aos="fade-right">
                <div class="flex flex-col z-10 justify-center md:items-end items-center relative before:content-[''] before:absolute lg:before:left-16 md:before:left-14 before:left-3 lg:before:top-0 md:before:top-16 before:-top-8 lg:before:h-full md:before:h-[320px] before:h-[280px] before:w-1/2 bg-call-gradient  before:bg-gradient-to-r before:from-primary before:to-red-500 before:-z-10">
                    <div class="w-[75%]">
                        <img src="/updates/{{ $eligibility->image }}" alt="Who is eligible" class="w-full">
                    </div>
                </div>
                <div class="flex flex-col justify-center items-start gap-8">
                    <h3 class="text-xl font-light md:px-8 px-4">{{ $eligibility->description }}.</h3>
                    <!-- <a href="/eligibility" class="text-primary md:text-xl w-1/2 md:w-auto text-base font-medium hover:underline md:px-8 px-4">Learn
                        <span class="text-gradient">More</span></a> -->

                    <a href="/eligibility" class="text-gradient md:text-xl w-1/2 md:w-auto text-base font-medium hover:underline md:px-8 px-4">{{ $criteria->more_btn }}</a>
                </div>
            </main>
        </section>
        <!--End of Who is eligible  -->

        <!-- Eligibility  -->

        <!--End of Eligibility  -->

        <!-- organisation  -->
        <section class="w-full mt-12 font-poppin md:mt-32 flex flex-col items-center">
            <div class="md:px-12 px-4 flex flex-col items-center md:gap-4 gap-2  w-full" data-aos="fade-up">
                <h1 class="text-gradient font-poppin md:text-4xl text-2xl font-medium md:my-8 mb-4 md:mb-0 capitalize">
                    {{ $title->sector_title }}
                </h1>
            </div>
            <main class="w-4/5 grid md:grid-cols-3 gap-4 mt-8" data-aos="fade-up">
                @foreach($focusSector as $sector)
                <div class="flex flex-col justify-center items-center" data-aos="fade-up">
                    <div class="bg-gray-50 w-56 h-56 flex items-center relative">
                        <img src="/updates/{{$sector->image}}" class="w-full" alt="Icon">
                        <h3 class="font-light font-poppin absolute bottom-0 left-0 bg-primary text-white w-full text-sm text-center py-1">
                            {{ $sector->img_title }}
                        </h3>
                    </div>
                </div>
                @endforeach
            </main>

            <p class="md:w-1/2 text-center md:mt-12 mt-6 text-primary md:text-xl text-base px-5 md:px-0">{{ $criteria->focus_text }}</p>

        </section>
        <!-- organisation  -->

        <!-- Eligibility & Selection Criteria  -->
        <section class="px-12 lg:mt-36 font-poppin mt-20  mb-16">
            <main class="w-full grid md:grid-cols-2 justify-center md:gap-8 gap-16" data-aos="fade-up">
                <div class="flex flex-col justify-center items-end">
                    <div class="w-4/5 md:w-3/4 bg-gray-200 shadow-md rounded-3xl md:px-8 px-6 py-5 flex-col flex gap-4 relative before:content-[''] before:absolute before:-left-10 before:-bottom-10 before:rounded-l-3xl before:h-full before:w-1/4 before:bg-secondary before:-z-10">
                        <h1 class="font-normal md:text-2xl text-xl text-primary">{{$criteria->eligibility_title}}</h1>
                        <p class="text-base text-primary">{{ $criteria->eligibility_criteria }}</p>
                        <a href="/eligibility" class="text-gradient md:text-xl text-base font-medium hover:underline">{{ $criteria->more_btn }}</a>
                        <!-- <a href="/eligibility" class="text-primary md:text-xl text-base font-medium hover:underline">Learn
                            <span class="text-gradient">More</span></a> -->
                    </div>

                </div>

                <div class="flex flex-col justify-center items-start">
                    <div class="w-4/5 md:w-3/4 bg-gray-200 shadow-md rounded-3xl md:px-8 px-6 py-5 flex-col flex gap-4 relative before:content-[''] before:absolute before:-right-10 before:-bottom-10 before:rounded-r-3xl before:h-full before:w-1/4 before:bg-secondary before:-z-10">
                        <h1 class="font-normal md:text-2xl text-xl text-primary">{{$criteria->selection_title}}</h1>
                        <p class="text-base text-primary">{{$criteria->selection_criteria}}</p>
                        <a href="/criterion" class="text-gradient md:text-xl text-base font-medium hover:underline">{{ $criteria->more_btn }}</a>
                        <!-- <a href="/criterion" class="text-primary md:text-xl text-base font-medium hover:underline">Learn
                            <span class="text-gradient">More</span></a> -->
                    </div>

                </div>
            </main>
        </section>
        <!--End of Eligibility & Selection Criteria  -->


        <!-- Our Offer  -->

        <!--End of Our Offer  -->


        <!-- Timeline  -->
        <section class="flex flex-col bg-gray-200 font-poppin w-full items-center md:gap-20 gap-7 md:mt-24 mt-36 py-6">
            <h1 class="text-gradient md:text-4xl text-2xl font-medium md:my-5 capitalize" data-aos="fade-up">
                {{ $timeline->title }}
            </h1>


            <main class="flex justify-center items-center" data-aos="fade-up">

                <img src="/updates/{{ $timeline->image }}" alt="Tree Structure Timeline" class="md:w-1/2 w-4/5 md:-mt-28 -mt-10">
            </main>


        </section>
        <!-- End of timeline  -->


        <!-- Benefits section  -->
        <section class="w-full lg:px-20 md:px-12 px-6 my-12 h-auto flex flex-col items-center gap-4" data-aos="fade-up" data-aos-duration="2000">
            <h1 class="text-gradient md:text-4xl text-2xl font-medium md:my-5 capitalize" data-aos="fade-up">
                {{ $title->benefit_title }}
            </h1>
            <!-- Swiper -->
            <div class="swiper mySwiper w-full h-[100px]" data-aos="fade-up" data-aos-duration="2000">
                <div class="swiper-wrapper">
                    @foreach($benefits as $benefit)
                    <div class="swiper-slide flex flex-col rounded-3xl justify-center items-center">
                        <div class="w-full h-full shadow-lg bg-slate-200 flex rounded-3xl flex-col justify-center p-4 items-center">
                            <p class=" text-primary text-base w-4/5 font-normal text-center capitalize">{{ $benefit->benefit }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next swiper-navBtn btnswip"></div>
                <div class="swiper-button-prev swiper-navBtn btnswip"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- End of benefits  -->


        <!-- Faqs  -->
        <section class="flex flex-col font-poppin mb-12 w-full items-center
                        md:gap-20 gap-7 md:mt-24 mt-12">
            <h1 class="text-gradient md:text-4xl text-2xl font-medium
                            md:my-10 mb-6 md:mb-0 capitalize" data-aos="fade-right">FAQs</h1>

            <main class="w-[90%]" data-aos="zoom-in">

                <?php $cnt = 1; ?>

                @foreach($faqs as $faq)
                <div id="accordion-color" data-accordion="collapse">
                    <h2 id="accordion-color-heading-{{ $faq->id }}">
                        <button type="button" class="flex items-center justify-between w-full
                                        p-5 font-medium text-left text-white border
                                        border-b-0 border-gray-200 bg-primary rounded-t-xl
                                        transition-all duration-300 faq hover:bg-secondary
                                        hover:text-white" data-accordion-target="#accordion-color-body-{{ $faq->id }}" aria-expanded="<?php echo $faq->id == 1 ? 'true' : 'false'  ?>" aria-controls="accordion-color-body-{{ $faq->id }}">
                            <span><?php echo $cnt ?>. {{ ucfirst($faq->question) }}?</span>
                            <svg data-accordion-icon class="w-6 h-6
                                            rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10
                                                10.586l3.293-3.293a1 1 0 111.414
                                                1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0
                                                010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-{{ $faq->id }}" class="hidden" aria-labelledby="accordion-color-heading-{{ $faq->id }}">
                        <div class="p-5 font-light border border-b-0
                                        border-gray-200 ">
                            <p class="mb-2 text-primary ">{{ ucfirst($faq->answer) }}</p>
                        </div>
                    </div>

                    <!--
                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex items-center justify-between w-full
                                        p-5 font-medium text-left text-white border
                                        border-b-0 border-gray-200 rounded-t-xl
                                        transition-all hover:text-white duration-300
                                        hover:bg-secondary " data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                            <span>2. What is a Nigerian Startup?</span>
                            <svg data-accordion-icon class="w-6 h-6
                                            shrink-0" fill="currentColor" viewBox="0 0
                                            20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10
                                                10.586l3.293-3.293a1 1 0 111.414
                                                1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0
                                                010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="p-5 font-light border border-b-0
                                        border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-primary ">To be considered a
                                Nigerian startup, the startup must be
                                registered in Nigeria and its solution
                                targeting the Nigerian market. The
                                nationality of the founders will not affect
                                eligibility.
                            </p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button" class="flex items-center justify-between w-full
                                        p-5 font-medium text-left text-white border
                                        border-b-0 border-gray-200 rounded-t-xl
                                        transition-all hover:text-white duration-300
                                        hover:bg-secondary " data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                            <span>3. Can I apply with more than one
                                solution?</span>
                            <svg data-accordion-icon class="w-6 h-6
                                            shrink-0" fill="currentColor" viewBox="0 0
                                            20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10
                                                10.586l3.293-3.293a1 1 0 111.414
                                                1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0
                                                010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="p-5 font-light border border-t-0
                                        border-gray-200">
                            <p class="mb-2 text-primary ">Multiple
                                applications will be disqualified.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-color-heading-4">
                        <button type="button" class="flex items-center justify-between w-full
                                        p-5 font-medium text-left text-white border
                                        border-b-0 border-gray-200 rounded-t-xl
                                        transition-all hover:text-white duration-300
                                        hover:bg-secondary " data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
                            <span>4. What type of solutions are eligible?</span>
                            <svg data-accordion-icon class="w-6 h-6
                                            shrink-0" fill="currentColor" viewBox="0 0
                                            20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10
                                                10.586l3.293-3.293a1 1 0 111.414
                                                1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0
                                                010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>

                    <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                        <div class="p-5 font-light border border-t-0
                                        border-gray-200">
                            <p class="mb-2 text-primary ">To be eligible,
                                solutions must be post-MVP, generating
                                revenue and addressing a defined problem for
                                MSMEs in Green Economy, Retail or
                                Manufacturing/Production sectors.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-color-heading-5">
                        <button type="button" class="flex items-center justify-between w-full
                                        p-5 font-medium text-left text-white border
                                        border-b-0 border-gray-200 rounded-t-xl
                                        transition-all hover:text-white duration-300
                                        hover:bg-secondary " data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
                            <span>5. I have an idea but do not have an MVP
                                yet. Can I apply?</span>
                            <svg data-accordion-icon class="w-6 h-6
                                            shrink-0" fill="currentColor" viewBox="0 0
                                            20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10
                                                10.586l3.293-3.293a1 1 0 111.414
                                                1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0
                                                010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>

                    <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                        <div class="p-5 font-light border border-t-0
                                        border-gray-200">
                            <p class="mb-2 text-primary ">Idea stage
                                solutions are not eligible.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-color-heading-6">
                        <button type="button" class="flex items-center justify-between w-full
                                        p-5 font-medium text-left text-white border
                                        border-b-0 border-gray-200 rounded-t-xl
                                        transition-all hover:text-white duration-300
                                        hover:bg-secondary " data-accordion-target="#accordion-color-body-6" aria-expanded="false" aria-controls="accordion-color-body-6">
                            <span>6. I do not have a digital solution, but my
                                business falls within the thematic areas.
                                Can I apply?</span>
                            <svg data-accordion-icon class="w-6 h-6
                                            shrink-0" fill="currentColor" viewBox="0 0
                                            20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10
                                                10.586l3.293-3.293a1 1 0 111.414
                                                1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0
                                                010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>

                    <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                        <div class="p-5 font-light border border-t-0
                                        border-gray-200">
                            <p class="mb-2 text-primary ">The techmybiz
                                pitchathon specifically targets digital
                                solutions. If you are an MSME, you will be able to join the program in the future if you
                                are eligible. Please keep an eye on our
                                page for more details.
                            </p>
                        </div>
                    </div>

                    <h2 id="accordion-color-heading-7">
                        <button type="button" class="flex items-center justify-between w-full
                                        p-5 font-medium text-left text-white border
                                        border-b-0 border-gray-200 rounded-t-xl
                                        transition-all hover:text-white duration-300
                                        hover:bg-secondary " data-accordion-target="#accordion-color-body-7" aria-expanded="false" aria-controls="accordion-color-body-7">
                            <span>7. I have a digital solution that does not fall
                                within the target sectors. Can I apply?</span>
                            <svg data-accordion-icon class="w-6 h-6
                                            shrink-0" fill="currentColor" viewBox="0 0
                                            20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10
                                                10.586l3.293-3.293a1 1 0 111.414
                                                1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0
                                                010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>

                    <div id="accordion-color-body-7" class="hidden" aria-labelledby="accordion-color-heading-7">
                        <div class="p-5 font-light border border-t-0
                                        border-gray-200">
                            <p class="mb-2 text-primary ">TechMyBiz
                                currently focuses on the Green Economy,
                                Retail and Manufacturing/Production Sectors
                                only. However we are working to expand the
                                scope of our target sectors. We encourage
                                you to keep an eye on our page and social
                                media handles for updates.
                            </p>
                        </div>
                    </div> -->
                </div>
                <?php
                $cnt = $cnt + 1;
                ?>
                @endforeach
            </main>


        </section>
        <!-- End of Faqs  -->


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
            backgroundColor: '<?php echo $color_theme->theme_color ?>',
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
