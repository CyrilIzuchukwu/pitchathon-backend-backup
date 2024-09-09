@extends('layouts.home')

@section('content')
            <!-- List of all solution  -->
        <section class="w-full h-auto flex flex-col gap-10 px-7 mt-28">
            <h1 class="text-center text-primary flex items-center gap-2 justify-center font-poppin uppercase font-medium text-xl"
                data-aos="fade-right" data-aos-duration="1000"><span class="text-gradient">Shortlisted Solutions</span>
                <i class="ri-award-fill"></i>
            </h1>

            <!-- Solution wrapper  -->
            <main class="w-full grid lg:grid-cols-4 md:grid-cols-2 gap-7">
            @if (count($details) > 0)
                @foreach ( $details as $detail )
                    <!-- Card  -->
                    <div class="h-52 relative overflow-hidden rounded-lg bg-white hover:border shadow-lg shadow-gray-900/40 cursor-pointer transition-all duration-700 hover:border-primary hover:shadow-none"
                        data-aos="fade-up" data-aos-duration="1000" id="shortlisted">
                        <div
                            class="rounded-lg absolute z-10 bg-gradient-to-tr from-primary to-secondary h-[96%] w-[96%] left-1.5 top-1 flex flex-col items-center justify-end overflow-hidden gap-10">
                            <a href="/shortlisted-solution-details/{{ $detail->id }}" class="text-white text-base font-medium">{{$detail->name_of_business}}</a>
    
                            <a href="/shortlisted-solution-details/{{ $detail->id }}"
                                class="w-full py-2 bg-primary text-white flex items-center justify-center gap-1 text-xl transition-all duration-300 hover:gap-2 group">
                                <i class="ri-arrow-right-circle-line"></i>
                                <span class="text-xs uppercase transition-all duration-300 group-hover:tracking-wider">Click
                                    to view</span>
                            </a>
                        </div>
                    </div>
                    <!-- End of a card  -->
                 @endforeach
            @else
                 <!-- Card  -->
                    <div class="h-52 relative overflow-hidden rounded-lg bg-white hover:border shadow-lg shadow-gray-900/40 cursor-pointer transition-all duration-700 hover:border-primary hover:shadow-none"
                        data-aos="fade-up" data-aos-duration="1000" id="shortlisted">
                        <div
                            class="rounded-lg absolute z-10 bg-gradient bg-gradient-to-tr from-primary to-secondary h-[96%] w-[96%] left-1.5 top-1 flex flex-col items-center justify-end overflow-hidden gap-10">
                            <a href="/" class="text-white text-base font-medium">Coming soon</a>
    
                            <a href="/"
                                class="w-full py-2 bg-primary text-white flex items-center justify-center gap-1 text-xl transition-all duration-300 hover:gap-2 group">
                                <i class="ri-arrow-right-circle-line"></i>
                                <span class="text-xs uppercase transition-all duration-300 group-hover:tracking-wider">Stay tuned!</span>
                            </a>
                        </div>
                    </div>
                    <!-- End of a card  -->
            @endif
            </main>

 {{ $details->links('pagination::tailwind') }}
        </section>
@endsection