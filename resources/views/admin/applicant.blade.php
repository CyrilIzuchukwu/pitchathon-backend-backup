@extends('layouts.admin')
@section('title')
Welcome admin
@endsection
@section('content')


<section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
    <!-- List of submitted solution -->
    <main class="w-full flex flex-col gap-3 lg:my-8 my-4 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up" data-aos-duration="1000">

        <h1 class=" lg:text-2xl text-base text-center font-medium text-primary" data-aos="fade-up" data-aos-duration="1000">All<span class="text-gradient"> Applications</span></h1>
        <div class="w-full flex  items-center px-4" data-aos="fade-up" data-aos-duration="1000">

            <br /><br />
            <form id="filter-form" action="" method="GET" class="flex justify-start gap-2 items-center" data-aos="fade-down" data-aos-duration="1000">
                <label for="filter" class="text-sm md:text-base font-medium text-primary">Filter:</label>
                <select name="filter" id="filter" class="border-none text-sm font-light rounded-md bg-slate-100 py-1.5 px-2 focus:outline focus:outline-primary">
                    <option value="">All</option>
                    <option value="Retail" {{Request::get('filter') == 'Retail' ? 'selected' : ''}}>Retail</option>
                    <option value="Manufacturing/production" {{Request::get('filter') == 'Manufacturing/production' ? 'selected' : ''}}>Manufacturing/Production</option>
                    <option value="Green Economy" {{Request::get('filter') == 'Green Economy' ? 'selected' : ''}}>Green Economy</option>
                </select>
                <button style="display:none" type="submit" class="text-white text-sm md:text-base bg-primary lg:px-5 px-3 rounded py-1.5 flex items-center">Filter</button>
            </form>
            <script>
                $(document).ready(function() {
                    $('#filter').change(function() {
                        $('#filter-form').submit();
                    });
                });
            </script>

        </div>

        <ul class="pagination flex justify-start items-center gap-5">
            <!-- Previous Page Link -->
            @if ($btc->onFirstPage())
            <li class="disabled"><span>&laquo;</span></li>
            @else
            <li><a href="{{ $btc->previousPageUrl() }}" class="prev bg-primary text-white" rel="prev"> Previous &laquo; {{ $btc->currentPage() - 1 }}</a></li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($btc as $item)
            @if ($item['url'])
            @php
            $pageNumber = (int) str_replace(url()->current().'?page=', '', $item['url']);
            @endphp
            <li class="{{ $page == $pageNumber ? 'active' : '' }}">
                <a href="{{ $item['url'] }}">{{ $pageNumber }}</a>
            </li>
            @endif
            @endforeach
            <span class="cp bg-secondary">{{ $btc->currentPage() }}</span>

            <!-- Next Page Link -->
            @if ($btc->hasMorePages())
            <li><a href="{{ $btc->nextPageUrl() }}" class="next bg-primary text-white" rel="next">{{ $btc->currentPage() + 1 }} &raquo; Next</a></li>
            @else
            <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>




        <style>
            .prev,
            .next {
                border: none;
                padding: 6px 20px;
                border-radius: 5px;
                transition: 0.7s;

            }

            .cp {
                border: none;
                border-radius: 50%;
                height: 40px;
                width: 40px;
                color: #fff;
                text-align: center;
                line-height: 39px;
            }
        </style>










        @forelse ($btc as $item)

        <section class="w-full flex flex-col gap-3 py-5 px-5 rounded-md mt-3 bg-slate-100 " style="height: 320px !important; overflow-y:scroll;">
            <div class="w-full flex flex-row items-center md:gap-3" data-aos="fade-up" data-aos-duration="1000">
                <!--<div class="w-16 h-16">-->
                <!--    <img src="img/5.jpg" alt="Profile" class="w-full h-full">-->
                <!--</div>-->

                <!-- User Info  -->
                <div class="flex flex-wrap items-center gap-3">
                    <h3 class="lg:text-lg md:text-base text-sm text-primary font-medium font-poppin flex items-center lg:gap-2 gap-1">
                        {{ $item->user->name }} <i class="ph-light ph-seal-check"></i>
                    </h3>
                    <h4 class="text-secondary text-sm md:text-base bg-secondary/20 lg:px-5 px-3 rounded py-1.5">
                        {{ ucfirst($item->target_sector) }}
                    </h4>

                    <a href="{{ url('applications/'. $item->id) }}" class="text-white text-sm md:text-base bg-primary lg:px-5 px-3 rounded py-1.5 flex items-center">View
                        Solution</a>
                </div>
            </div>
            <!-- About text for user  -->
            <p class="text-base text-primary w-full font-poppin font-light text-justify" data-aos="fade-up" data-aos-duration="1000">My name is {{ $item->user->name }}, and my
                company is called
                {{ $item->name_of_business }}.
                <hr />About my business is  {{ $item->description }}.
            </p>
            
        </section>
        @empty
        <tr>
            <td colspan="7">No Applicant_form Avaliable</td>
        </tr>
        @endforelse







    </main>


</section>

@endsection
