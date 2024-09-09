  <header class="w-full fixed top-0 left-0 z-50">
            <nav class="bg-primary px-4 lg:px-6 py-2.5 shadow-lg ">
                <div class="flex flex-wrap justify-between items-center">
                    <div class="flex justify-start items-center">
                        <button id="sidebarBtn" aria-expanded="true" aria-controls="sidebar"
                            class="p-2 mr-2 text-white rounded cursor-pointer lg:hidden hover:text-primary transition-all duration-300 px-2 py-1 hover:bg-white text-xl">
                            <i class="ri-menu-2-line"></i>
                        </button>
                        <a href="/" class="flex mr-4">
                            <img src="{{ asset('jury/images/logo2.png') }}" class="mr-3 h-16" alt="Logo" />
                        </a> 
                    </div>
                    <div class="flex items-center lg:order-2">
                        <!-- Notifications -->
                        <a href="/Review/notification"
                            class="px-2 py-1 mr-1 text-white rounded-lg hover:text-primary hover:bg-gray-100 text-xl">
                            <!-- Bell icon -->
                           @if (count(auth()->user()->notifications) > 0)
                                        <i class="ri-notification-3-line"></i><span class="p-1 animate-ping font-bold text-2xl">{{ count(auth()->user()->notifications) }}</span>
                            @else
                                <i class="ri-notification-3-line"></i><span class="p-1 font-bold text-2xl">0</span>
                            @endif
                        </a>

                        <!-- User -->
                        <button type="button" class="flex mx-3 text-sm border-2 border-white rounded-full md:mr-0"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">   
                            
                            
                               @if(isset($user))
                                        <img class="w-8 h-8 rounded-full"
                                        src="{{ asset($user->profile_image) }}" alt="user photo"> 
                                         
                                    @else
                                        <img class="w-8 h-8 rounded-full"
                                        src="https://img.freepik.com/free-icon/user_318-159711.jpg" alt="user photo">
                                    @endif
                            
                            
                            
                            
                      
                            
                        </button>
                        <!-- Dropdown menu -->
                        <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:divide-primary px-2"
                            id="dropdown">
                            <ul class="py-1 font-light text-primary" aria-labelledby="dropdown">
                                <li>
                                    <a href="{{ route('logout') }}" class="block py-2 px-4 text-sm hover:text-secondary"onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                                   </a>
                                   
                                </li>
                                

                                
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>