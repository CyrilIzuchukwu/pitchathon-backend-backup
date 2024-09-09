<aside class="lg:col-span-1 h-screen fixed top-[5.3rem] w-48 lg:flex left-0 flex-col" id="sidenavbar">
                <div
                    class="overflow-y-auto pt-8 pb-5 pr-4 h-full flex flex-col justify-between items-start bg-white shadow-lg">
                    <ul class="font-poppin" id="navlinks">
                        <li>
                            <a href="{{url('Review/dashboard')}}"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-command"></i>
                                <span class="ml-2 text-base">Dashboard</span>
                            </a>
                        </li>
                      
                         <li>
                            <a href="{{url('Review/settings')}}"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-user-switch"></i>
                                <span class="ml-2 text-base">Change password</span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="{{url('Review/notification')}}"
                                class="flex items-center pl-6 pr-2 py-2 font-normal text-primary hover:text-white rounded-r-full hover:bg-primary transition-all duration-300 text-xl ">
                                <i class="ph-light ph-bell"></i>
                                <span class="ml-2 text-base">Notification</span>
                            </a>
                        </li>
                    </ul>


                    <ul class="pb-28 font-poppin ">
                        <li>
                            <a href="{{ route('logout') }}"
                                class="flex items-center pl-6 pr-2 py-2 font-normal transition-all duration-300 text-xl" onclick="event.preventDefault();
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