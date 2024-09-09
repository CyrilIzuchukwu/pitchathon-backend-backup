@extends('layouts.admin')
@section('title')
    Welcome admin
@endsection
@section('content')

            <section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
                <!-- List of shortlisted Solutions -->
                <form action="{{ url('finalistss/' . $item->user->id) }}" method="POST" class="w-full flex flex-col gap-2 lg:my-8 my-4 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up"
                    data-aos-duration="1000" enctype="multipart/form-data">
                   @csrf
                    <div class="w-full flex justify-between items-center px-4" data-aos="fade-up"
                        data-aos-duration="1000">
                        <h1 class="lg:text-lg text-base text-center font-medium text-primary">
                            Finalist <span class="text-gradient">Solutions</span></h1>

                        <!--<button type="submit"-->
                        <!--    class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"><span-->
                        <!--        class="bg-primary text-white text-xs px-2 py-1 rounded-full"-->
                        <!--        id="count">0</span>Publish</button>-->
                    </div>



                    <div class="relative overflow-x-auto">
                        
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
                                    <!--<th scope="col" class="px-6 py-3 whitespace-nowrap">-->
                                    <!--    Ranking-->
                                    <!--</th>-->
                                    <th scope="col" class="px-6 py-3 whitespace-nowrap">
                                       Select
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                    <tr
                                    class="border-b cursor-pointer font-poppin border-primary hover:bg-secondary/20 text-center transition-all duration-300 bg-white ">
                                    <th scope="row"
                                        class="px-6 py-2 font-medium text-primary whitespace-nowrap flex flex-col gap-1 justify-center border-r border-primary">
                                        <h3 class="text-base font-medium hover:underline"
                                            data-modal-target="businessName" data-modal-toggle="businessName">{{ $item->business }}
                                        </h3>
                                        <span class="text-sm font-light hover:underline" data-modal-target="profileName"
                                            data-modal-toggle="profileName">{{ $item->user->name }}</span>
                                    </th>
                                    <td class="px-6 py-2 border-r border-primary">
                                        <button class="text-secondary bg-secondary/10 px-4 py-1">{{ $item->target_sector }}</button>
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
                                    <!--<td class="px-6 py-2 border-r border-primary">-->
                                    <!--    1-->
                                    <!--</td>-->
                                    
                                    <td class="px-6 py-2"> 
                                  <button type="submit"
                            class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white">Select</button>        
                                        
                                    </td>
                                </tr>



                            </tbody>
                        </table>
                    </div>

                </form>
            </section>


       <!-- Modal Display for Business Name  -->
        <div id="businessName" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full bg-gray-900/70">
            <div class="relative w-full h-screen max-w-4xl md:h-auto">
                <div class="relative bg-white rounded-lg shadow md:pb-8 pb-3">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-primary bg-transparent hover:bg-primary hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="businessName">
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
                                
          @forelse ($reviewCount as $item)
      @if ($item->userid == $item->userid)
      
      <!--{{ $item->id }} -->
         <tr
                                        class="border-b cursor-pointer font-poppin border-primary hover:bg-slate-200 text-left transition-all duration-300 bg-white ">
                                        <td
                                            class="px-6 py-2 font-medium text-primary whitespace-nowrap border-r border-primary">
                                            
                                                @if(isset($item->review->name))
                                            {{ $item->review->name }}
                                            @else
                                            This jury has been deleted
                                            @endif
                                        </td>
                                        <td class="border-r border-primary" colspan="2">
                                            <!-- Criteria and Rating  -->
                                            <table class="w-full">
                                                <tr class="border-b cursor-pointer font-poppin border-primary">
                                                    <td class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                        Local Content</td>
                                                    <td class="px-6 py-2">{{ $item->rate1 }}</td>
                                                </tr>
                                                <tr class="border-b cursor-pointer font-poppin border-primary">
                                                    <td class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                        Focal Sector Alignment
                                                    </td>
                                                    <td class="px-6 py-2">{{ $item->rate2 }}</td>
                                                </tr>
                                                <tr class="border-b cursor-pointer font-poppin border-primary">
                                                    <td class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                        Market Viability
                                                    </td>
                                                    <td class="px-6 py-2">{{ $item->rate3 }}</td>
                                                </tr>
                                                <tr class="border-b cursor-pointer font-poppin border-primary">
                                                    <td class="px-6 py-2 border-r border-primary whitespace-nowrap">
                                                        Industry Impact
                                                        Potential
                                                    </td>
                                                    <td class="px-6 py-2">{{ $item->rate4 }}</td>
                                                </tr>
                                                <tr class="border-b cursor-pointer font-poppin border-primary">
                                                    <td class="px-6 py-2 border-r border-primary whitespace-nowrap">Team
                                                        Qualification
                                                    </td>
                                                    <td class="px-6 py-2">{{ $item->rate5 }}</td>
                                                </tr>
                                                <tr class=" cursor-pointer font-poppin ">
                                                    <td class="px-6 py-2 border-r border-primary ">Design Thinking
                                                    </td>
                                                    <td class="px-6 py-2">{{ $item->rate6 }}</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="px-6 py-2 border-r border-primary">
                                            {{ $item->total }}
                                        </td>
                                        <td class="px-4 py-2 border-r border-primary">
                                           {{ $item->summary }}
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
        <div id="profileName" tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-full bg-gray-900/70">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button"
                        class="absolute top-3 right-2.5 text-primary bg-transparent hover:bg-primary hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="profileName">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="pt-12 pb-6 px-6">
                        <p
                            class="text-base text-primary font-light md:first-letter:text-7xl first-letter:text-5xl first-letter:font-semibold first-letter:font-serif first-letter:text-primary first-letter:mr-3 first-letter:float-left text-justify">
                            My name is {{ $item->user->name }}, and my business name
                            called {{ $item->business }}.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Modal Display  -->
@endsection