@extends('layouts.design')

@section('content')

            <!-- Main section  -->
            <section class="lg:col-span-3 w-full lg:w-auto flex flex-col items-start lg:p-0 p-4 gap-8 ">
                @if(isset($applicantProfile))
                <!-- Top section of the user info  -->
                <main class="w-full md:grid flex flex-col items-center  md:grid-cols-4 gap-3 lg:pt-8 pt-3"
                    data-aos="fade-up" data-aos-duration="1000">
                    <!-- User Profile Image  -->
                    <div class="md:col-span-1 h-36 w-36 ">
                        @if($applicantProfile->profile_image)
                            <img src="{{ asset($applicantProfile->profile_image) }}" alt="Profile Pic" class="rounded-lg h-full w-full object-cover object-top">
                        @endif  
                    </div>
                    <!-- User Info  -->
                    <div class="md:col-span-3 flex flex-col justify-center gap-6">
                        <div class="flex justify-center lg:justify-start items-center gap-4">
                            <h3
                                class="lg:text-2xl text-base text-primary font-medium font-poppin flex items-center lg:gap-2 gap-1">
                                {{ $applicantProfile->name }}  <i class="ph-light ph-seal-check"></i></h3>
                            <h4 class="text-primary bg-primary/50 lg:px-5 px-3 rounded py-1.5">{{ ucfirst($applicantProfile->target_sector) }} </h4>
                        </div>
                        <div class="flex items-center flex-wrap justify-center md:justify-start gap-4">
                            <p class="flex items-center font-light text-sm  text-primary">
                                <i class="ph-light ph-map-pin"></i> 
                                {{ $applicantProfile->address }}
                            </p>
                            <p class="flex items-center font-light text-sm  text-primary">
                                <i class="ph-light ph-envelope"></i>
                                {{ $applicantProfile->email }}
                            </p>
                            <p class="flex items-center font-light text-sm  text-primary">
                                <i class="ph-light ph-check-square"></i>
                                 {{ $applicantProfile->phone }}
                            </p>
                        </div>
                    </div>
                </main>
                <!-- About text for user  -->
                <p class="text-base text-primary w-full font-poppin font-light text-justify" data-aos="fade-up"
                    data-aos-duration="1000">{{ $applicantProfile->about_business }}</p>
                @endif
                
                
                
                
                
                    @if(empty($applicantProfiles))
                    
                        
                          <!-- Main modal -->
                                <div id="startApplicationModal"
                                    class="fixed top-0 right-0 z-50 hidden transition-all duration-500 justify-center items-center w-full p-4 overflow-x-hidden overflow-y-auto h-screen bg-gray-900/90">
                                    <div class="relative w-full h-1/2 max-w-2xl">
                                        <!-- Modal content -->
                                        <div class="relative w-full h-full bg-gradient-to-br from-primary to-secondary rounded-lg shadow"
                                            id="modalBox">
                        
                                            <!-- Modal body -->
                                            <div class="flex flex-col gap-4 items-center justify-center w-full h-full">
                                                <h1 class="md:text-4xl animate-bounce text-2xl">📝
                                                </h1>
                                                <a href="profile.html"
                                                    class="capitalize text-gray-200 md:text-2xl font-semibold font-poppin text-base tracking-widest flex items-center gap-2">
                                                    <span class="relative flex h-3 w-3">
                                                        <span
                                                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-500 opacity-75"></span>
                                                        <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-600"></span>
                                                    </span>
                                                    Start
                                                    your
                                                    application! </a>
                        
                                                <div class="flex mt-4 md:flex-row flex-col gap-6 justify-center items-center">
                                                    <a href="/apply-form" class="btn-flip md:text-base text-xs" data-back="Great 👍"
                                                        data-front="Start Now!"></a>
                                                    <!--<button type="button" id="btnRemoveModal" class="btn-flip2 md:text-base text-xs"-->
                                                    <!--    data-back="Okay 😉" data-front="Start Later!"></button>-->
                                                </div>
                                            </div>
                        
                                        </div>
                                    </div>
                                </div>
                                <script>
                                //for the modal prompting the applicant to start application
                                const applymodal = document.getElementById('startApplicationModal');
                                const modalContent = document.getElementById("modalBox");
                                const removeModalBtn = document.getElementById("btnRemoveModal");
                                window.onload = () => {
                                    applymodal.style.display = "flex";
                                }
                                removeModalBtn.addEventListener("click", () => {
                                    applymodal.style.transition = "all 1s ease";
                                    applymodal.style.right = "-100px";
                                    applymodal.style.width = "0";
                                    modalContent.style.transition = "all 1s ease";
                                    modalContent.style.opacity = "0";
                                });
                                </script>
                    
                     @elseif(empty($applicantProfile))
          
                                      <!-- Main modal -->
                        <div id="defaultModal">
                            <div id="inner">
                        <!-- Modal content -->
                                <div id="modalBox">
        
                            <!-- Modal body -->
                                    <div>
                                        <h1>👇</h1>
                                        <a href="/applicant-profile" id="modalText">Click
                                    to Setup your profile</a>
                                    </div>
        
                                </div>
                            </div>
                         </div>
                         
                        <script>
                            const modal = document.getElementById('defaultModal');
                            window.onload = () => {
                                modal.style.display = "flex";
                            }
                        </script>
                        <!--<p class="mb-12 mt-24 text-center text-lg text-secondary">Kindly Fill the Profile form <a class="underline text-primary" href="/applicant-profile">here</a> to see your details</p>-->  
                   
                     @endif
             
            

                <div class="w-full h-[1px] lg:block hidden bg-primary"></div>
                <!-- Review Display  -->
                <main class="w-full h-auto flex flex-col p-2 gap-8 mb-6">
                  
                   
                    @if($or->count() == 1)
                    <p class="lg:text-xl text-xl text-gradient">In Progress</p>
                    @elseif($or->count() == 2)
                      <p class="lg:text-xl text-xl text-gradient">Reviewed</p>
                      @else
                      <p class="lg:text-xl text-xl text-gradient">Not Reviewed</p>
                    @endif

  <!-- Swiper -->
  @if($or->count() <= 0)
  <div class="swiper mySwiper w-full h-[300px]" data-aos="fade-up" data-aos-duration="1500">
                        <div class="swiper-wrapper ">
                            
                            <div class="swiper-slide flex flex-col rounded-3xl justify-center items-center">
                                <div
                                    class="w-full h-full shadow-lg bg-slate-200 flex rounded-3xl flex-col justify-center items-center gap-5 p-4">
                                    <p class="text-sm text-primary text-center"><q>No review yet.</q></p>
                                    <h3 class="self-end text-gradient font-poppin text-base font-medium"></h3>
                                </div>
                            </div>
                            

                        </div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
                    </div>
   @endif
 
               
         
            
              <!-- Swiper -->
                    <div class="swiper mySwiper w-full h-[300px]" data-aos="fade-up" data-aos-duration="1500">
                        <div class="swiper-wrapper ">
                            <!--<div class="swiper-slide flex flex-col rounded-3xl justify-center items-center">-->
                            <!--    <div-->
                            <!--        class="w-full h-full shadow-lg bg-slate-200 flex rounded-3xl flex-col justify-center items-center gap-5 p-4">-->
                            <!--        <p class="text-sm text-primary text-center"><q>The first thing I look for – is there-->
                            <!--                a-->
                            <!--                clear,-->
                            <!--                sizeable customer-->
                            <!--                ‘problem‘ this-->
                            <!--                new idea is solving? So many pitches-->
                            <!--                look like they are describing really cool ideas, but dig down a little-->
                            <!--                deeper-->
                            <!--                and there is no.</q></p>-->
                            <!--        <h3 class="self-end text-gradient font-poppin text-base font-medium">John Okeke</h3>-->
                            <!--    </div>-->
                            <!--</div>-->
                              @foreach ($or as $items)
                            <div class="swiper-slide">
                                <div
                                    class="w-full h-full shadow-lg bg-slate-200 flex rounded-3xl flex-col justify-center items-center gap-5 p-4">
                                    <p class="text-sm text-primary text-center" style="
    width: 320px;
    height: 250px;
    line-height: 3em;
    overflow-y: scroll;
    border: #0000 solid;
    padding: 8px;
"><q> {{ $items->summary}}.</q></p>
                                    <h3 class="self-end text-gradient font-poppin text-base font-medium">{{ $items->review->name}}</h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                        <div class="swiper-pagination"></div>
                    </div>


                </main>
            </section>

            <div class="w-full h-[1px] lg:hidden block bg-primary"></div>
            <!-- Aside section  -->
            <aside class="lg:col-span-2 p-5 shadow-lg flex flex-col items-center gap-3">
                <section class="w-full py-3 flex flex-col items-center bg-gray-200 gap-4 rounded-2xl">
                    <h1 class="text-center capitalize md:text-base text-sm font-poppin text-primary">Call for <span
                            class="text-gradient">Digital Solutions</span> ends in;</h1>
                    <main class="grid grid-cols-4 md:gap-6 gap-2">
                        <!-- Countdown Time  -->
                        <div
                            class="flex flex-col w-10 h-10 md:py-4 py-1  bg-primary text-white rounded-lg items-center justify-center">
                            <h1 class="md:text-base text-sm font-medium" id="day"></h1>
                            <small class="uppercase text-[0.5rem] font-light">days</small>
                        </div>

                        <div
                            class="flex flex-col w-10 h-10 md:py-4 py-1  bg-primary text-white rounded-lg items-center justify-center">
                            <h1 class="md:text-base text-sm font-medium" id="hour"></h1>
                            <small class="uppercase text-[0.5rem] font-light">hours</small>
                        </div>

                        <div
                            class="flex flex-col w-10 h-10 md:py-4 py-1  bg-primary text-white rounded-lg items-center justify-center">
                            <h1 class="md:text-base text-sm font-medium" id="min"></h1>
                            <small class="uppercase text-[0.5rem] font-light">min</small>
                        </div>

                        <div
                            class="flex flex-col w-10 h-10 md:py-4 py-1  bg-primary text-white rounded-lg items-center justify-center">
                            <h1 class="md:text-base text-sm font-medium" id="sec"></h1>
                            <small class="uppercase text-[0.5rem] font-light">sec</small>
                        </div>
                        <!--End of Countdown Time  -->
                    </main>
                </section>

                @if(isset($applicantProfile))
 
                         <a href="{{url('applicant-profile-edit')}}" class="w-full py-1.5 mt-3 bg-gray-200 text-center text-primary rounded-xl">Edit
                    Profile</a>
                          @else
                       <a href="/applicant-profile" class="w-full py-1.5 mt-3 bg-gray-200 text-center text-primary rounded-xl">Setup
                    Profile</a>
                    @endif

                    
                @if(isset($applicantProfiles))
 
                     <a href="/apply-form" class="w-full py-1.5 bg-primary rounded-xl text-center text-white">View Application</a>
                          @else
                    <a href="/apply-form"
                    class="w-full py-1.5 bg-gray-100 rounded-xl text-center text-primary hover:bg-primary hover:text-white transition duration-200 relative capitalize"
                    id="animatedButton">Start your
                    Application</a>
                    @endif
                

                <section class="w-full flex flex-col gap-3 mt-6">
                    <h3 class="lg:text-base text-sm text-gradient">Events</h3>
                    
                    <div class="w-full p-4 border border-primary text-primary flex flex-col rounded-3xl items-center">
                        <p class="mb-3 md:text-base text-sm">22<sup>nd</sup> March - 10<sup>th</sup> May</p>
                        <p class="text-sm md:text-base">Call for Digital Solutions</p>
                    </div>
                    
                    <div class="w-full p-4 border border-primary text-primary flex flex-col rounded-3xl items-center">
                        <p class="mb-3 md:text-base text-sm">10<sup>th</sup> May</p>
                        <p class="text-sm md:text-base">Call for Digital Solution Event</p>
                        <q class="text-sm md:text-base">Launch Event</q>
                    </div>

                    <div class="w-full p-4 border border-primary text-primary flex flex-col rounded-3xl items-center">
                        <p class="mb-3 md:text-base text-sm">22<sup>nd</sup> March - 10<sup>th</sup> May</p>
                        <p class="text-sm md:text-base">Weekly Information Session (Virtual)</p>
                        
                    </div>

                    <div class="w-full p-4 border border-primary text-primary flex flex-col rounded-3xl items-center">
                        <p class="mb-3 md:text-base text-sm">27<sup>th</sup> April - 19<sup>th</sup> May</p>
                        <p class="text-sm md:text-base">Assesment of Digital Solutions</p>
                        
                    </div>

                    <div class="w-full p-4 border border-primary text-primary flex flex-col rounded-3xl items-center">
                        <p class="mb-3 md:text-base text-sm">20<sup>th</sup> May</p>
                        <p class="text-sm md:text-base">Announcements of Finalists</p>
                        
                    </div>
                    
                    
                    <div class="w-full p-4 border border-primary text-primary flex flex-col rounded-3xl items-center">
                        <p class="mb-3 md:text-base text-sm">6<sup>th</sup> June</p>
                        <p class="text-sm md:text-base">Pre Pitchathon Bootcamp</p>
                        
                    </div>
                    
                    
                    <div class="w-full p-4 border border-primary text-primary flex flex-col rounded-3xl items-center">
                        <p class="mb-3 md:text-base text-sm">7<sup>th</sup> June - 9<sup>th</sup> June</p>
                        <p class="text-sm md:text-base">Pitchathon</p>
                    
                    </div>
                </section>
            </aside>



@endsection
