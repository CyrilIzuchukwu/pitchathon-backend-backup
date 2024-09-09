@extends('layouts.admin')
@section('title')
    Welcome admin
@endsection
@section('content')

    <!-- Main section  -->
    <!-- Main section  -->
    <section class="lg:col-span-5 w-full lg:w-auto flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
        @if ($errors->any())
            <div class="text-red-500"id="demo">
                <button class="float-right" onclick="myFunction()">X</button>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <script>
            function myFunction() {
                const element = document.getElementById("demo");
                element.remove();
            }
        </script>
        <!-- List of shortlisted Solutions -->
        {{-- <form method="POST" action="{{ url('finalistss') }}"
            class="w-full flex flex-col gap-2 lg:my-8 my-4 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up"
            data-aos-duration="1000">
            @csrf
            <div class="w-full flex justify-between items-center px-4" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="lg:text-lg text-base text-center font-medium text-primary">
                    Finalist <span class="text-gradient">Solutions</span></h1>
                @if ($product == 1)
                    <button type="submit"
                        class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"><span
                            class="bg-primary text-white text-xs px-2 py-1 rounded-full" id="count">0</span>Publish
                        Winners</button>
                @elseif($product > 1)
                    <button type="submit"
                        class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"><span
                            class="bg-primary text-white text-xs px-2 py-1 rounded-full" id="count">0</span>Publish
                        Winners</button>
                @else
                    <button type="submit"
                        class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"><span
                            class="bg-primary text-white text-xs px-2 py-1 rounded-full" id="count">0</span>Publish
                        Winners</button>
                @endif
            </div> --}}



        <div class="relative overflow-x-auto">
            <div class="w-full flex  items-center px-4" data-aos="fade-up" data-aos-duration="1000">


                <form id="filter-form" action="" method="GET" class="flex justify-start gap-2 items-center" data-aos="fade-down"
                    data-aos-duration="1000">
                    <label for="filter" class="text-sm md:text-base font-medium text-primary">Filter:</label>
                    <select name="filter" id="filter"
                        class="border-none text-sm font-light rounded-md bg-slate-100 py-1.5 px-2 focus:outline focus:outline-primary">
                        <option value="">All</option>
                        <option value="Retail"{{ Request::get('filter') == 'Retail' ? 'selected' : '' }}>Retail
                        </option>
                        <option
                            value="Manufacturing/production"{{ Request::get('filter') == 'Manufacturing/production' ? 'selected' : '' }}>
                            Manufacturing/Production</option>
                        <option value="Green Economy"{{ Request::get('filter') == 'Green Economy' ? 'selected' : '' }}>
                            Green Economy</option>
                    </select>
                    <!--<button type="submit"-->
                    <!--    class="text-white text-sm md:text-base bg-primary lg:px-5 px-3 rounded py-1.5 flex items-center">Filter</button>-->
                </form>
   <script>
                    $(document).ready(function() {
                        $('#filter').change(function() {
                            $('#filter-form').submit();
                        });
                    });
                </script>
            </div>
        </div>
        <form method="POST" action="{{ url('finalistss') }}"
            class="w-full flex flex-col gap-2 lg:my-8 my-4 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up"
            data-aos-duration="1000">
            @csrf
            <div class="w-full flex justify-between items-center px-4" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="lg:text-lg text-base text-center font-medium text-primary">
                    Finalist <span class="text-gradient">Solutions</span></h1>
                @if ($product == 1)
                    <button type="submit"
                        class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"><span
                            class="bg-primary text-white text-xs px-2 py-1 rounded-full" id="count">0</span>Publish
                        Winners</button>
                @elseif($product > 1)
                    <button type="submit"
                        class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"><span
                            class="bg-primary text-white text-xs px-2 py-1 rounded-full" id="count">0</span>Publish
                        Winners</button>
                @else
                    <button type="submit"
                        class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"><span
                            class="bg-primary text-white text-xs px-2 py-1 rounded-full" id="count">0</span>Publish
                        Winners</button>
                @endif
            </div>
            <table class="w-full text-sm text-center text-primary border border-primary">
                <thead class="text-xs uppercase bg-primary text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Sector
                        </th>
                        <!--<th scope="col" class="px-6 py-3 whitespace-nowrap">-->
                        <!--    Total Score 1-->
                        <!--</th>-->
                        <!--<th scope="col" class="px-6 py-3 whitespace-nowrap">-->
                        <!--    Total Score 2-->
                        <!--</th>-->
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Average
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Ranking
                        </th>
                        <th scope="col" class="px-6 py-3 whitespace-nowrap">
                            Select
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($review as $item)
                        @if (isset($item->average))
                            <tr
                                class="border-b cursor-pointer font-poppin border-primary hover:bg-secondary/20 text-center transition-all duration-300 bg-white ">
                                <th scope="row"
                                    class="px-6 py-2 font-medium text-primary whitespace-nowrap flex flex-col gap-1 justify-center border-r border-primary">
                                    <h3 class="text-base font-medium hover:underline" data-modal-target="businessName{{ $loop->index }}"
                                        data-modal-toggle="businessName{{ $loop->index }}">{{ $item->business }}
                                    </h3>
                                    <span class="text-sm font-light hover:underline" data-modal-target="profileName{{ $loop->index }}"
                                        data-modal-toggle="profileName{{ $loop->index }}">{{ $item->user->name }}</span>
                                    <!-- Modal Display for Business Name  -->
                                            <div id="businessName{{ $loop->index }}" tabindex="-1"
                                                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full bg-gray-900/70">
                                                <div class="relative w-full h-screen max-w-4xl md:h-auto">
                                                    <div class="relative bg-white rounded-lg shadow md:pb-8 pb-3">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-primary bg-transparent hover:bg-primary hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                            data-modal-hide="businessName{{ $loop->index }}">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="py-6 px-4 w-full md:h-96 h-4/5">
                                                            <div class="relative overflow-auto mt-8 h-full">
                                                                <table class="w-full h-full text-sm text-center text-primary border border-primary">
                                                                    <thead class="text-xs uppercase bg-primary text-white">
                                                                        <tr>
                                                                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                                                                Name
                                                                            </th>
                                                                            <th scope="col" colspan="2" class="px-6 py-3 whitespace-nowrap">
                                                                                Criteria & Rating
                                                                            </th>
                                                                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                                                                Total
                                                                            </th>
                                                                            <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                                                                Comments
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>   
                                                                    
                                              @forelse ($review as $item_two)
                                              @if ($item->userid == $item_two->userid)
                                          
                                          <!--{{ $item->id }} -->
                                             <tr
                                                                                                                class="border-b cursor-pointer font-poppin border-primary hover:bg-slate-200 text-left transition-all duration-300 bg-white ">
                                                                                                                <td
                                                                                                                    class="px-6 py-2 font-medium text-primary whitespace-nowrap border-r border-primary">
                                                                                                                    @if (isset($item_two->review->name))
                                                                                                                        {{ $item_two->review->name }}
                                                                                                                    @else
                                                                                                                        This reviewer has been deleted
                                                                                                                    @endif
                                    
                                                                                                                </td>
                                                                                                                <td class="border-r border-primary"
                                                                                                                    colspan="2">
                                                                                                                    <!-- Criteria and Rating  -->
                                                                                                                    <table class="w-full">
                                                                                                                        <tr
                                                                                                                            class="border-b cursor-pointer font-poppin border-primary">
                                                                                                                            <td
                                                                                                                                class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                                                                                                Local Content</td>
                                                                                                                            <td class="px-6 py-2">
                                                                                                                                {{ $item_two->rate1 }}</td>
                                                                                                                        </tr>
                                                                                                                        <tr
                                                                                                                            class="border-b cursor-pointer font-poppin border-primary">
                                                                                                                            <td
                                                                                                                                class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                                                                                                Focal Sector Alignment
                                                                                                                            </td>
                                                                                                                            <td class="px-6 py-2">
                                                                                                                                {{ $item_two->rate2 }}</td>
                                                                                                                        </tr>
                                                                                                                        <tr
                                                                                                                            class="border-b cursor-pointer font-poppin border-primary">
                                                                                                                            <td
                                                                                                                                class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                                                                                                Market Viability
                                                                                                                            </td>
                                                                                                                            <td class="px-6 py-2">
                                                                                                                                {{ $item_two->rate3 }}</td>
                                                                                                                        </tr>
                                                                                                                        <tr
                                                                                                                            class="border-b cursor-pointer font-poppin border-primary">
                                                                                                                            <td
                                                                                                                                class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                                                                                                Industry Impact
                                                                                                                                Potential
                                                                                                                            </td>
                                                                                                                            <td class="px-6 py-2">
                                                                                                                                {{ $item_two->rate4 }}</td>
                                                                                                                        </tr>
                                                                                                                        <tr
                                                                                                                            class="border-b cursor-pointer font-poppin border-primary">
                                                                                                                            <td
                                                                                                                                class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                                                                                                Team
                                                                                                                                Qualification
                                                                                                                            </td>
                                                                                                                            <td class="px-6 py-2">
                                                                                                                                {{ $item_two->rate5 }}</td>
                                                                                                                        </tr>
                                                                                                                        <tr
                                                                                                                            class=" cursor-pointer font-poppin ">
                                                                                                                            <td
                                                                                                                                class="px-6 py-2 border-r border-primary ">
                                                                                                                                Design Thinking
                                                                                                                            </td>
                                                                                                                            <td class="px-6 py-2">
                                                                                                                                {{ $item_two->rate6 }}</td>
                                                                                                                        </tr>
                                                                                                                    </table>
                                                                                                                </td>
                                                                                                                <td class="px-6 py-2 border-r border-primary">
                                                                                                                    {{ $item_two->total }}
                                                                                                                </td>
                                                                                                                <td class="px-4 py-2 border-r border-primary">
                                                                                                                    {{ $item_two->summary }}
                                                                                                                </td>
                                                                                                            </tr>
                                                  @endif
                                         @empty
                                                    <tr>
                                                        <td colspan="7">No Finalist yet</td>
                                                    </tr>
                                                @endforelse
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Modal Display  -->
                                    
                                            <!-- Modal Display for Profile Name  -->
                                            <div id="profileName{{ $loop->index }}" tabindex="-1"
                                                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full bg-gray-900/70">
                                                <div class="relative w-full h-full max-w-2xl md:h-auto">
                                                    <div class="relative bg-white rounded-lg shadow">
                                                        <button type="button"
                                                            class="absolute top-3 right-2.5 text-primary bg-transparent hover:bg-primary hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                            data-modal-hide="profileName{{ $loop->index }}">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="pt-12 pb-6 px-6">
                                                            <p style="white-space: normal;" class="text-base text-primary font-light text-justify">
                                                                My name is {{ $item->user->name }}, and my business name
                                                                called {{ $item->business }}.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Modal Display  -->
                                </th>
                                <td class="px-6 py-2 border-r border-primary">
                                    <button
                                        class="text-secondary capitalize bg-secondary/10 px-4 py-1">{{ $item->target_sector }}</button>
                                </td>
                                <!--<td class="px-6 py-2 border-r border-primary">-->
                                <!--    44-->
                                <!--</td>-->
                                <!--<td class="px-6 py-2 border-r border-primary">-->
                                <!--    65-->
                                <!--</td>-->
                                <td class="px-6 py-2 border-r border-primary">
                                    {{ $item->average }}
                                </td>
                                <td class="px-6 py-2 border-r border-primary">
                                    {{ $loop->index + 1 }}
                                </td>

                                <td class="px-6 py-2">
                                    @if ($item->status == 2)
                                       <a onclick="checker1()" href="{{ url('finalistsss/' . $item->user->id) }}"><button
                                            type="button"
                                            class="py-2 px-4  text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white">Winner</button></a>
                                    <script>
    function checker1(){
        var result = confirm('Please do you want to unselect this Winner Applicant.?');
        if(result == false){
            event.preventDefault();
        }
    }
</script>
                                        <!-- Main modal -->
                                        <div id="defaultModal" tabindex="-1" aria-hidden="true"
                                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                            <div class="relative w-full h-full max-w-2xl md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                            {{ $item->user->name }}
                                                        </h3>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="defaultModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-6 space-y-6">
                                                        <p
                                                            class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                            Please do you want to unselect this Winner Applicant.
                                                        </p>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div
                                                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                        <form action="{{ url('finalistsss/' . $item->user->id) }}"
                                                            method="POST" class="flex justify-start gap-2 items-center"
                                                            data-aos="fade-up">
                                                            @csrf
                                                            <button type="submit"
                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Yes</button>
                                                        </form>
                                                        <button data-modal-hide="defaultModal" type="button"
                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($item->status == 1)
                                        <input onclick="checkboxes();" type="checkbox" value="{{ $item->user->id }}"
                                            class="accent-primary" name="selected[]">
                                        <script>
                                            //Counting checked checkboxes
                                            const countDisplay = document.getElementById("count");

                                            const checkboxes = () => {
                                                var inputElems = document.getElementsByTagName("input"),
                                                    count = 0;

                                                for (var i = 0; i < inputElems.length; i++) {
                                                    if (inputElems[i].type == "checkbox" && inputElems[i].checked == true) {
                                                        count++;
                                                        let a = inputElems[i].parentElement;
                                                        let b = a.parentElement;
                                                        b.style.backgroundColor = "rgb(221, 45, 56, 0.2)";
                                                    } else {
                                                        let a = inputElems[i].parentElement;
                                                        let b = a.parentElement;
                                                        b.style.backgroundColor = "rgb(255, 255, 255)";
                                                    }
                                                }
                                                countDisplay.innerHTML = count;
                                            };
                                        </script>
                                        {{-- <!--<a href="{{ url('finalists/' . $item->user->id) }}" class="py-2 px-4  text-sm items-center gap-2 bg-primary from-secondary to-primary rounded-lg text-white">Select</a> --> --}}
                                    @endif

                                </td>
                            </tr>
                        @endif

                    @empty
                        <tr>
                            <td colspan="7">No Finailist Applicant</td>
                        </tr>
                    @endforelse
                    {{ $review->links('pagination::tailwind') }}
                </tbody>
            </table>
        </form>



    </section>
@endsection

