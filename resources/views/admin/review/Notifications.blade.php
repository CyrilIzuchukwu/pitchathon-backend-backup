@extends('layouts.review')
@section('title')
    Notification
  @endsection  
@section('content')
            <!-- Main section  -->
            <section
                class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start lg:p-0 py-4 px-4 gap-8 lg:mb-8 mb-4">
                <!-- Notifications -->

                <div class="my-2 w-full flex flex-col lg:pr-8 pr-4 pl-4">
                    <h1 class="text-center font-bold lg:text-xl text-base mt-4 text-primary" data-aos="fade-up"
                        data-aos-duration="1000">Notifications</h1>

                    <div class="border-b border-primary my-3"></div>


@if (count(auth()->user()->notifications) > 0)

    @foreach ($notifications as $notification)
        <div class="w-full">
            <div class="flex justify-between items-center my-6">
                <h2 class="lg:text-lg text-base font-medium text-primary">Notification {{$loop->index + 1}}</h2>
    
                <!--<button-->
                <!--    class="bg-primary flex items-center hover:bg-secondary p-1 md:p-3 md:w-auto text-white rounded @if (!$notification->read_at) unread @endif" onclick="location.href='{{ route('home', $notification->id) }}'">-->
                <!--    <i class="ri-check-double-fill pr-4"></i>   Mark as read-->
                <!--</button>-->
    
            </div>
            <p class="text-justify text-primary font-light">
                {{ $notification->message }}
            </p>
        </div>
    @endforeach
    

@else
    <div class="w-full">
        <div class="flex justify-between items-center my-6">
            <h2 class="lg:text-lg text-base font-medium text-primary">No Notifications Available</h2>
        </div>
        <p class="text-justify text-primary font-light">
           Check Later
        </p>
    </div>
@endif






                </div>


            </section>
@endsection