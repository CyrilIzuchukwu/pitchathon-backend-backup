@extends('layouts.home')

@section('content')
<!-- List of all solution  -->
<section class="w-full h-auto flex flex-col gap-10 px-7 mt-28">
    <h1 class="text-center text-primary font-poppin uppercase font-medium text-xl" data-aos="fade-right" data-aos-duration="1000">All Solutions</h1>

    <!-- Solution wrapper  -->
    <main class="w-full grid lg:grid-cols-4 md:grid-cols-2 gap-7">
        @foreach ( $details as $detail )
        <!-- Card  -->
        <div class="h-48 rounded-lg bg-white border border-primary/20 shadow-lg shadow-gray-900/40 p-2 cursor-pointer transition-all duration-700 hover:border-primary hover:shadow-none" data-aos="fade-up" data-aos-duration="1000">
            <div class="rounded-lg bg-gradient-to-tr from-primary to-secondary h-full w-full z-10 flex flex-col items-center justify-end overflow-hidden gap-10">
                <a href="/solution-details/{{ $detail->id }}" class="text-white text-base text-center font-medium">{{$detail->name_of_business}}</a>

                <a href="/solution-details/{{ $detail->id }}" class="w-full py-2 bg-primary text-white flex items-center justify-center gap-1 text-xl transition-all duration-300 hover:gap-2 group">
                    <i class="ri-arrow-right-circle-line"></i>
                    <span class="text-xs uppercase transition-all duration-300 group-hover:tracking-wider">Click
                        to view</span>
                </a>
            </div>
        </div>
        <!-- End of a card  -->
        @endforeach
    </main>

    <!-- Pagination  -->
    {{ $details->links('pagination::tailwind') }}
</section>
@endsection