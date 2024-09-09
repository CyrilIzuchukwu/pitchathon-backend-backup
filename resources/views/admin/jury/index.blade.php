 @extends('layouts.jury')
@section('title')
    Pitcthaton
@endsection
@section('content')
<section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
    @if (Auth::user()->password_changed_at)
                <!-- List of submitted solution -->
                <main class="w-full flex flex-col gap-3 lg:my-8 my-4 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up"
                    data-aos-duration="1000">
                    <h1 class=" lg:text-2xl text-base text-center font-medium text-primary" data-aos="fade-up"
                        data-aos-duration="1000">Shortlisted Solutions</h1>

                    <!-- filter  input -->
                     <form id="filter-form" action="" method="GET" class="flex justify-start gap-2 items-center" data-aos="fade-up"
                        data-aos-duration="1000">
                        <label for="filter" class="text-sm md:text-base font-medium text-primary">Filter:</label>
                        <select name="filter" id="filter"
                            class="border-none text-sm font-light rounded-md bg-slate-100 py-1.5 px-2 focus:outline focus:outline-primary">
                           <option value="">All</option>
                           <option value="Retail"{{Request::get('filter') == 'Retail' ? 'selected' : ''}}>Retail</option>
                            <option value="Manufacturing/production"{{Request::get('filter') == 'Manufacturing/production' ? 'selected' : ''}}>Manufacturing/Production</option>
                            <option value="Green Economy"{{Request::get('filter') == 'Green Economy' ? 'selected' : ''}}>Green Economy</option>
                        </select>
                        <button style="display:none" type="submit" class="text-white text-sm md:text-base bg-primary lg:px-5 px-3 rounded py-1.5 flex items-center">Filter</button>
                    </form>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    
                    <script>
                        $(document).ready(function() {
                            $('#filter').change(function() {
                                $('#filter-form').submit();
                            });
                        });
                    </script>

                              {{ $btc->links('pagination::tailwind') }}       
                     
                     @forelse ($btc as $item)
                     @if ($item->status == 'Approved')
                                 <section class="w-full flex flex-col gap-3 py-5 px-5 rounded-md mt-3 bg-slate-100">
                        <div class="w-full flex flex-row items-center md:gap-3" data-aos="fade-up"
                            data-aos-duration="1000">
                            <!-- User Info  -->
                            <div class="flex flex-wrap items-center gap-3">
                                <h3
                                    class="lg:text-lg md:text-base text-sm text-primary font-medium font-poppin flex items-center lg:gap-2 gap-1">
                                    {{ $item->user->name }} <i class="ph-light ph-seal-check"></i></h3>
                                <h4
                                    class="text-secondary text-sm md:text-base bg-secondary/20 lg:px-5 px-3 rounded py-1.5">
                                   {{ ucfirst($item->target_sector) }}</h4>

@if($item->checkout == 3)
 <p
                                    class="text-white text-sm md:text-base bg-slate-500 lg:px-5 px-3 rounded py-1.5 flex items-center">Reviewed
                                    </p>
@else
                                 <a href="{{ url('Jury/review/' . $item->id) }}"
                                    class="text-white text-sm md:text-base bg-primary lg:px-5 px-3 rounded py-1.5 flex items-center">Rate Pitch</a>
@endif


                            </div>
                        </div>
                        <!-- About text for user  -->
                        <p class="text-base text-primary w-full font-poppin font-light text-justify" data-aos="fade-up"
                            data-aos-duration="1000">My name is {{ $item->user->name }}, and my
                            company is called
                            {{ $item->name_of_business }}.<hr/>About my business is  {{ $item->description }}.</p>
                    </section>
                     @endif
        
            @empty
                <tr>
                    <td colspan="7">No ShortListed Avaliable</td>
                </tr>
            @endforelse
                  

                </main>
    @else
         <!-- Main modal -->
                <div id="defaultModal">
                    <div id="inner">
                <!-- Modal content -->
                        <div id="modalBox">

                    <!-- Modal body -->
                            <div>
                                <h1>👇</h1>
                                <a href="/Jury/setting" id="modalText">Click
                            to change your password</a>
                            </div>

                        </div>
                    </div>
                 </div>
@endif
            </section>
@endsection
 