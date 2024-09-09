<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techmybiz</title>
    <link rel="stylesheet" href="css/stylesx.css">
    <link rel="stylesheet" href="css/animation.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
            <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/png">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
        .d-nonex{
            display:none;
        }
    </style>
</head>

<body>

    <!-- General wrapper  -->
    <div class="wrapper font-poppin">

        <!-- Top Navbar section  -->
        <header class="w-full fixed top-0 left-0 z-50">
            <nav class="bg-primary px-4 lg:px-6 py-2.5 shadow-lg ">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="flex justify-start items-center">
                        <button id="sidebarBtn" aria-expanded="true" aria-controls="sidebar"
                            class="p-2 mr-2 text-white rounded cursor-pointer lg:hidden hover:text-primary transition-all duration-300 px-2 py-1 hover:bg-white text-xl">
                            <i class="ri-menu-2-line"></i>
                        </button>
                        <a href="/" class="flex mr-4">
                            <img src="images/logo2.png" class="mr-3 h-16" alt="Logo" />
                        </a>
                    </div>
                    <div class="flex items-center lg:order-2">
                          @guest
                            @if (Route::has('login'))
                                <a class="px-2 py-1 mr-1 text-white rounded-lg hover:text-primary hover:bg-gray-100 text-xl" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif
            
                            @if (Route::has('register'))
                                <a class="px-2 py-1 mr-1 text-white rounded-lg hover:text-primary hover:bg-gray-100 text-xl" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif  
                            @else
                                <!-- Notifications -->
                                <a href="/applicant-notification"
                                    class="px-2 py-1 mr-1 text-white rounded-lg hover:text-primary hover:bg-gray-100 text-xl">
                                    <!-- Bell icon -->
                                    <i class="ri-notification-3-line"></i>
                                </a>
                                <!-- User -->
                                <button type="button" class="flex mx-3 text-sm border-2 border-white rounded-full md:mr-0"
                                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                                    @if(isset($applicantProfile))
                                        <img class="w-8 h-8 rounded-full"
                                        src="{{ asset($applicantProfile->profile_image) }}" alt="user photo"> 
                                    @else
                                        <img class="w-8 h-8 rounded-full"
                                        src="https://img.freepik.com/free-icon/user_318-159711.jpg" alt="user photo">
                                    @endif
                                </button>
                                <!-- Dropdown menu -->
                                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:divide-primary px-2"
                                    id="dropdown">
                                    <p class="mt-4 text-center mb-4">{{ Auth::user()->name }}</p>
                                    <ul class="py-1 font-light text-primary" aria-labelledby="dropdown">
                                        <li>
                                            <a href="{{url('setting')}}"
                                                class="block py-2 px-4 text-sm hover:text-secondary border-b border-primary">Change
                                                Password</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block py-2 px-4 text-sm hover:text-secondary"> {{ __('Logout') }}</a>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @endguest
                    </div>
                </div>
            </nav>
        </header>

        <main class="w-full h-auto lg:grid lg:grid-cols-6 flex flex-col gap-8 mt-24">
            <!-- Side Navbar  -->
            <aside class="lg:col-span-1 h-screen fixed top-[5.3rem] w-48 lg:flex left-0 flex-col" id="sidenavbar">
                <div
                    class="overflow-y-auto pt-8 pb-5 pr-4 h-full flex flex-col justify-between items-start bg-white shadow-lg">
                    <ul class="@if(empty($applicantProfiles)) d-nonex @endif font-poppin" id="navlinks">
                        <li>
                            <a href="/home"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-command"></i>
                                <span class="ml-2 text-base">Dashboard</span>
                            </a>
                        </li>

                                   @if(isset($applicantProfile))

                         
                        @else
                        <li>
                            <a href="/apply-form"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-article"></i>
                                <span class="ml-2 text-base">Application Form</span>
                            </a>
                        </li>
                                    @endif
                        
                        <li>
                            <a href="/applicant-profile"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-user-circle"></i>
                                <span class="ml-2 text-base">Profile</span>
                            </a>
                        </li>
                        
                        
                         @if(isset($applicantProfile))
 
                        <!--<li>-->
                        <!--    <a href="{{url('applicant-profile-edit')}}"-->
                        <!--        class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">-->
                        <!--        <i class="ph-light ph-user-circle-gear"></i> -->
                        <!--        <span class="ml-2 text-base">Profile Edit</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        
                         
                        @else
                        
                        <li>
                            <a href="{{url('applicant-profile-edit')}}"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-user-circle-gear"></i> 
                                <span class="ml-2 text-base">Profile Edit</span>
                            </a>
                        </li>
                    @endif
                        
                        

                        
                        <li>
                            <a href="/applicant-review"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-thumbs-up"></i>
                                <span class="ml-2 text-base">Reviews</span>
                            </a>
                        </li>
                        <li>
                            <a href="/applicant-office"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl  ">
                                <i class="ph-light ph-clock"></i>
                                <span class="ml-2 text-base">Office Hour</span>
                            </a>
                        </li>
                        <li>
                            <a href="/applicant-notification"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl">
                                <i class="ph-light ph-bell"></i>
                                <span class="ml-2 text-base">Notification</span>
                            </a>
                        </li>
                    </ul>


                    <ul class="@if(empty($applicantProfiles)) d-nonex @endif pb-28 font-poppin ">
                        <li>
                            <a href="https://dtcnigeria.ng/"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl">
                                <i class="ph-light ph-lightbulb"></i>
                                <span class="ml-2 text-base">About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://dtcnigeria.ng/contact"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl">
                                <i class="ph-light ph-phone"></i>
                                <span class="ml-2 text-base">Contact Us </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="flex items-center pl-6 pr-2 py-2 font-normal transition-all duration-300 text-xl">
                                <i class="ph-light ph-sign-out text-secondary"></i>
                                <span class="ml-2 text-base text-gradient">{{ __('Logout') }}</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            @yield('content')

        </main>
        <footer class="w-full flex items-center justify-center py-4 bg-primary">
            <p class="text-center text-sm text-white">DTC Nigeria &copy; 2023. All Rights Reserved</p>
        </footer>


    </div>


    <script src="js/mainx.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const modal = document.getElementById('defaultModal');
        window.onload = () => {
            modal.style.display = "flex";
        }
    </script>
  

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
        <script>
            swal("Successful!", "{{ session('message') }}!", "success");
        </script>
    @endif
    @if (session('error'))
        <script>
            swal("Error!", "{{ session('error') }}!", "warning");
        </script>
    @endif
    @if (Session::has('success'))
        <script>
            swal("Successful!", "{{ Session::get('success') }}!", "success");
        </script>
    @endif
    
    @if (Session::has('error'))
         <script>
            swal("Error!", "{{ Session::get('error') }}!", "warning");
        </script>
    @endif
</body>

</html>