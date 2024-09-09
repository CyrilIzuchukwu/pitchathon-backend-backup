@extends('layouts.home')

@section('content')

@if (count($details) > 0)
<link rel="stylesheet" href="css/congrats.css">
<script src="https://unpkg.com/@phosphor-icons/web"></script>
<!-- List of all solution  -->
<section class="w-full h-auto flex flex-col items-center gap-2 px-7 mt-28 js-container">
    <span class="bg-primary text-white text-5xl font-semibold px-3 py-2 rounded-full" data-aos="fade-down" data-aos-duration="2000"><i class="ri-check-line"></i></span>
    <h1 class="text-center text-amber-500 flex items-center gap-2 justify-center font-poppin uppercase font-medium text-2xl" data-aos="fade-right" data-aos-duration="1000"><span>Congratulations</span>
        <i class="ri-medal-line"></i>
    </h1>
    <p class="text-xl font-medium text-primary flex items-center gap-2" data-aos="fade-up" data-aos-duration="1000">Winning Solutions<i class="ph-light ph-trophy"></i></p>



    <!-- Winning Solutions  -->
    <main class="w-full grid lg:grid-cols-4 md:grid-cols-2 gap-7 mt-8">
        @foreach ( $details as $detail )
        <!-- Card  -->
        <div style="z-index: 999" class="h-48 rounded-lg bg-white border border-primary/20 shadow-lg shadow-gray-900/40 p-2 cursor-pointer transition-all duration-700 hover:border-primary hover:shadow-none" data-aos="fade-up" data-aos-duration="1000">
            <div class="rounded-lg bg-gradient-to-tr from-primary to-secondary h-full w-full z-10 flex flex-col items-center justify-end overflow-hidden gap-10">
                <a href="/shortlisted-solution-details/{{ $detail->id }}" class="text-white text-base font-medium">{{$detail->name_of_business}}</a>

                <a href="/shortlisted-solution-details/{{ $detail->id }}" class="w-full py-2 bg-primary text-white flex items-center justify-center gap-1 text-xl transition-all duration-300 hover:gap-2 group">
                    <i class="ri-arrow-right-circle-line"></i>
                    <span class="text-xs uppercase transition-all duration-300 group-hover:tracking-wider">Click to View</span>
                </a>
            </div>
        </div>
        <!-- End of a card  -->
        @endforeach

    </main>
</section>
<script src="js/congrats.js"></script>

@else
<!-- List of all solution  -->
<section class="w-full h-auto flex flex-col items-center gap-2 px-7 mt-28 js-container">
    <span class="bg-primary text-white text-5xl font-semibold px-3 py-2 rounded-full" data-aos="fade-down" data-aos-duration="2000"><i class="ri-check-line"></i></span>
    <h1 class="text-center text-amber-500 flex items-center gap-2 justify-center font-poppin uppercase font-medium text-2xl" data-aos="fade-right" data-aos-duration="1000"><span>Coming Soon</span>
        <i class="ri-medal-line"></i>
    </h1>
    <p class="text-xl font-medium text-primary flex items-center gap-2" data-aos="fade-up" data-aos-duration="1000">Winning Solutions<i class="ph-light ph-trophy"></i></p>



    <!-- Winning Solutions  -->
    <main class="w-1/2 gap-7 mt-8">
        <!-- Card  -->
        <div style="z-index: 999" class="h-48 rounded-lg bg-white border border-primary/20 shadow-lg shadow-gray-900/40 p-2 cursor-pointer transition-all duration-700 hover:border-primary hover:shadow-none" data-aos="fade-up" data-aos-duration="1000">
            <div class="rounded-lg bg-gradient bg-gradient-to-tr from-primary to-secondary h-full w-full z-10 flex flex-col items-center justify-end overflow-hidden gap-10">
                <a href="/" class="text-white text-base font-medium">Coming soon</a>

                <a href="/" class="w-full py-2 bg-primary text-white flex items-center justify-center gap-1 text-xl transition-all duration-300 hover:gap-2 group">
                    <i class="ri-arrow-right-circle-line"></i>
                    <span class="text-xs uppercase transition-all duration-300 group-hover:tracking-wider">Stayed Tuned</span>
                </a>
            </div>
        </div>
        <!-- End of a card  -->

    </main>
</section>
@endif

@endsection