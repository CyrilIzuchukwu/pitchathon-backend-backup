<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitcthaton</title>

    <!-- sweet alert cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <!-- General wrapper  -->
    <div class="wrapper font-poppin">

        <!-- Top Navbar section  -->
        <header class="w-full fixed top-0 left-0 z-50">
            <nav class="bg-primary px-4 lg:px-6 py-2.5 shadow-lg ">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="flex justify-start items-center">
                        <button id="sidebarBtn" aria-expanded="true" aria-controls="sidebar" class="p-2 mr-2 text-white rounded cursor-pointer lg:hidden hover:text-primary transition-all duration-300 px-2 py-1 hover:bg-white text-xl">
                            <i class="ri-menu-2-line"></i>
                        </button>
                        <a href="{{url('admin/dashboard')}}" class="flex mr-4">
                            <img src="{{ asset('images/logo2.png') }}" class="mr-3 h-16" alt="Logo" />
                        </a>
                    </div>
                    <div class="flex items-center lg:order-2">
                        <!-- Notifications -->
                        <a href="{{url('admin/notification')}}" class="px-2 py-1 mr-1 text-white rounded-lg hover:text-primary hover:bg-gray-100 text-xl">
                            <!-- Bell icon -->
                            <i class="ri-notification-3-line"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </header>

        <main class="w-full h-auto lg:grid lg:grid-cols-6 flex flex-col gap-8 mt-24">
            <!-- Side Navbar  -->
            <aside class="lg:col-span-1 h-screen fixed top-[5.3rem] w-48 lg:flex left-0 flex-col" id="sidenavbar">
                <div class="overflow-y-auto pt-8 pb-5 pr-4 h-full flex flex-col justify-between items-start bg-white shadow-lg">
                    <ul class="font-poppin" id="navlinks">
                        <li>
                            <a href="{{url('admin/dashboard')}}" class="flex items-center pl-3 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-command"></i>
                                <span class="ml-2 text-base">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center pl-3 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl">
                                <i class="ph-light ph-user-gear"></i>
                                <span class="ml-2 text-base">Applications</span>
                                <i class="ph-light ph-caret-down"></i>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-primary divide-y divide-gray-100 rounded-lg shadow w-40">
                                <ul class="py-2 text-sm text-white" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="{{url('admin/application')}}" class="block px-4 py-2 hover:bg-secondary">All</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/retail')}}" class="block px-4 py-2 hover:bg-secondary">Retail</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/greenEconomy')}}" class="block px-4 py-2 hover:bg-secondary">Green
                                            Economy</a>
                                    </li>
                                    <li>
                                        <a href="{{url('admin/production')}}" class="block px-4 py-2 hover:bg-secondary">Manufacturing/Production</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="{{url('admin/userManagement')}}" class="flex items-center pl-3 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-user-switch"></i>
                                <span class="ml-2 text-base">User Management</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('admin/notification')}}" class="flex items-center pl-3 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-bell"></i>
                                <span class="ml-2 text-base">Notification</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('admin/shortlist')}}" class="flex items-center pl-3 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-list-checks"></i>
                                <span class="ml-2 text-base">Shortlist</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/finalist')}}" class="flex items-center pl-3 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-trophy"></i>
                                <span class="ml-2 text-base">Finalist</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('admin/sendEmailForm') }}" class="flex items-center pl-3 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-paper-plane-tilt"></i>
                                <span class="ml-2 text-base">Send Email</span>
                            </a>
                        </li>

                        <li>
                            <div class="dropdown w-full flex items-center pl-3 pr-4 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-gear"></i>
                                <span class="dropbtn text-base cursor-pointer ">Ui Settings</span>
                                <!-- <i class="ph-light ph-caret-down"></i> -->
                                <div class="dropdown-content py-2">
                                    <a class="block px-4 py-2 hover:bg-secondary" href="{{url('admin/uisetting')}}">General Settings</a>
                                    <a class="block px-4 py-2 hover:bg-secondary" href="{{ url('admin/focus_sector') }}">Focus Sector</a>
                                    <a class="block px-4 py-2 hover:bg-secondary" href="{{url('admin/benefit_setting')}}">Benefits</a>
                                    <a class="block px-4 py-2 hover:bg-secondary" href="{{url('admin/faq')}}">FAQ</a>
                                </div>
                            </div>
                        </li>




                    </ul>


                    <ul class="pb-20 font-poppin ">
                        <li>
                            <a href="{{ route('logout') }}" class="flex items-center pl-6 pr-2 py-2 font-normal transition-all duration-300 text-xl" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="ph-light ph-sign-out text-secondary"></i>
                                <span class="ml-2 text-base text-gradient">Logout</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <!-- Main section  -->

            @yield('content')
        </main>

        <footer class="w-full flex items-center justify-center py-4 bg-primary">
            <p class="text-center text-sm text-white">DTC Nigeria &copy; 2023. All Rights Reserved</p>
        </footer>


    </div>


    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
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