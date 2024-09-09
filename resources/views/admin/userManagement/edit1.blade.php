
@extends('layouts.admin')
@section('title')
    Welcome admin
@endsection
@section('content')
     
       <!-- Main section  -->
            <section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
                <!-- List of submitted solution -->
                <main class="w-full flex flex-col gap-3 lg:my-8 my-4 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up"
                    data-aos-duration="1000">


                    <div class="flex gap-3 items-center my-8">
                          @if(isset($user->profile_image))
                        <img src="{{ asset("$user->profile_image") }}" alt="Profile" class="w-12 h-12 rounded-full">
                        @else
                        <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" alt="Profile" class="w-12 h-12 rounded-full">
                        @endif
                        <h2 class="text-primary text-base">{{ $btcs->review->name }}</h2>
                    </div>


                    <h1 class=" lg:text-2xl text-base text-left font-medium text-primary" data-aos="fade-up"
                        data-aos-duration="1000">Reviewed<span class="text-gradient"> Solutions</span></h1>

    
     @forelse ($btc as $item)
      @if ($item->juryid == $item->juryid)
        <!-- card  -->
                    <section class="w-full flex flex-col gap-3 py-5 px-5 rounded-md mt-3 bg-slate-100">
                        <div class="w-full md:flex grid grid-cols-3 flex-row items-center md:gap-3 " data-aos="fade-up"
                            data-aos-duration="1000">
                            <!--<div class="w-16 h-16">-->
                            <!--</div>-->
                            <!-- User Info  -->
                            <div class="flex col-span-2 flex-wrap items-center gap-3">
                                <h3
                                    class="lg:text-lg md:text-base text-sm text-primary font-medium font-poppin flex items-center lg:gap-2 gap-1">
                                    {{ $item->review->name }} <i class="ph-light ph-seal-check"></i></h3>
                                <h4
                                    class="text-secondary text-sm md:text-base bg-secondary/20 lg:px-5 px-3 rounded py-1.5">
                                    Retail</h4>

                                <a href="{{ url('userManagementsss2/'. $item->user->id) }}"
                                    class="text-white text-sm md:text-base bg-primary lg:px-5 px-3 rounded py-1.5 flex items-center">View
                                    Solution</a>
                            </div>
                        </div>
                        <!-- About text for user  -->
                        <p class="text-base text-primary w-full font-poppin font-light text-justify" data-aos="fade-up"
                            data-aos-duration="1000">My name is {{ $item->user->name }}, and my
                            company is called
                            {{ $item->business }}.</p>
                    </section>
      
           @endif
     @empty
                <tr>
                    <td colspan="7">No Applicant Reviewed yet</td>
                </tr>
            @endforelse
                </main>


            </section>
            @endsection
