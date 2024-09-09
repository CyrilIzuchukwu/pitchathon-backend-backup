<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pitchathon</title>
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="js/three.min.js"></script>
        <script src="js/vanta.globe.min.js"></script>
    </head>
    <body>

    <!-- General wrapper  -->
    <div class="wrapper">
        
        <div class="w-full lg:h-[80px] h-auto px-2 md:px-4 lg:px-96 bg-gradient-to-t from-sky-200 to-white">
            <img src="images/bannerlogos.png" alt="logos" class="w-full h-full">
        </div>

        <!-- Navbar  -->
        <nav class="lg:px-12 md:px-3 font-poppin px-6 shadow sticky top-0 left-0 z-50 w-full bg-white border-gray-200"
            data-aos="fade-up">
            <div class="container md:h-20  flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center">
                    <img src="images/logo.png" class="h-16 md:scale-125 scale-110" alt="Logo" />
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
                        <li style="display:none">
                            <a href="/all-solutions"
                                class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">All Solutions</a>
                        </li>
                        <li>
                            <a href="/shortlisted"
                                class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Shortlisted Solutions</a>
                        </li>
                        <li>
                            <a href="/selectedSolution"
                                class="inline-block  py-2 pl-3 pr-4 text-primary rounded bg-transparent md:text-primary md:p-0 relative before:content-[''] before:absolute md:before:-bottom-1 before:bottom-1 before:left-0 hover:before:w-full before:w-0 before:h-[0.12rem] before:transition-all before:duration-300 before:bg-primary">Selected Solutions</a>
                        </li>

                    </ul>
                    @if (Route::has('login'))
                    <div class="flex items-center gap-4 md:pb-0 pb-6">
                        @auth
                           @if(Auth::user()->role_as  ==  1)
                                                 <a href="{{ url('admin/dashboard') }}"
                                             class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white">Dashboard</a>
                                                @elseif(Auth::user()->role_as  ==  2)
                                                 <a href="{{ url('Sub_admin/dashboard') }}"
                                class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white">Dashboard</a>
                                                @elseif(Auth::user()->role_as  ==  3)
                                                 <a href="{{ url('Jury/dashboard') }}"
                                class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white">Dashboard</a>
                                @elseif(Auth::user()->role_as  ==  4)
                                 <a href="{{ url('Review/dashboard') }}"
                                class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white">Dashboard</a>
                                @else
                                 <a href="{{ url('/home') }}"
                                class="px-10 rounded-lg py-2 bg-white border border-primary text-primary transition-all duration-300 hover:bg-primary hover:text-white">Dashboard</a>
                                                @endif
                           
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


        <!-- Eligibility starts here  -->
        <section class="w-full mb-28 mt-12 px-12">
            <div>

                <div class="flex flex-col container mx-auto mt-10">
                    <div class="flex-col gap-4 flex md:w-3/5 w-full p-3 ">
                        <div class="md:text-4xl text-2xl py-4">
                            <h1 class="text-gradient uppercase">Eligibility</h1>
                        </div>
                        <div class="md:text-xl text-base font-normal">
                            <h3>To be eligible for the Techmybiz Pitchathon, you
                                must meet the following criteria:</h3>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 mt-5">
                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item"> Be a Nigerian start-up
                                        or innovation organization.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item"> Be set up as a
                                        for-profit.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item"> Have a functional
                                        product that is actively serving
                                        customers.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item"> Have a clearly defined
                                        market, with a verifiable customer base.
                                    </p>
                                </div>
                            </div>
                        </div>

                        

                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item">Have measurable and
                                        verifiable Monthly Recurring Revenue
                                        (MRR).
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item"> Have been in operation
                                        not less than six (6) months.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item"> Have a full-time team
                                        of not less than two (2) inclusive of
                                        the CTO.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item"> Either have a B2B
                                        offering, or be able and willing to
                                        pivot to B2B.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="shadow-xl ">
                            <div class="bg-gray-100 rounded-md ">
                                <div class=" md:text-xl text-base p-5 px-8 md:px-16
                                            w-full">
                                    <p class="list-item"> Be serving or able
                                        to serve MSMEs operating in Green
                                        Economy, Retail or
                                        Manufacturing/Production.

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- Eligibility ends  here  -->
        
         <!-- Footer  -->
        <footer class="w-full h-auto bg-primary mt-12">
            <div class="grid md:grid-cols-3 gap-6 md:gap-0 md:p-10 p-6 border-b border-white">
                <div class="flex flex-col md:gap-5 gap-3 justify-start items-start text-white text-base">
                    <h2 class="text-white text-base">
                        Contact
                    </h2>

                    <ul class="flex flex-col text-sm items-start gap-3">
                        <li>
                            <a href="mailto:dtc-nigeria@giz.de" class="flex gap-2 justify-center items-center">
                                <i class="ri-mail-line"></i>
                                dtc-nigeria@giz.de
                            </a>
                        </li>
                        <li>
                            <p class="flex gap-2 justify-center items-center"><i class="ri-map-pin-line"></i>6 Ojora,
                                Close, Victoria Island, Lagos.</p>
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
                        <li>GIZ – Country</li>
                        <li>No. 12 Charles de Gaulle Close, Asokoro</li>
                        <li>PO Box 5374</li>
                        <li>Abuja, Nigeria</li>
                    </ul>
                </div>
            </div>

            <p
                class="text-white text-sm py-8 md:pl-12 flex items-center flex-wrap gap-2 text-center md:text-start px-3 md:px-0">
                ©
                2023
                GIZ. All
                Rights Reserved. | <a href="#">Imprint</a> | <a href="#">Privacy Notice</a> | <a href="#">Disclaimer</a>
            </p>


        </footer>
        <!-- End of Footer  -->




        <script src="js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>
</html>