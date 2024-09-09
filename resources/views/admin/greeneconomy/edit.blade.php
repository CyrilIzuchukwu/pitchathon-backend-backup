
@extends('layouts.admin')
@section('title')
    Welcome admin
@endsection
@section('content')



  <!-- Main section  -->
            <section
                class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start lg:pl-1.5 lg:pr-6 pl-4 pr-4  gap-8">
                <!-- Solution display and review  -->
                <main class="w-full flex flex-col md:gap-4 gap-7 items-center py-4" data-aos="fade-up"
                    data-aos-duration="1000">
                    <h1 class=" lg:text-2xl text-xl font-medium text-primary">{{ $btc->user->name }}</h1>
                    <div class="w-full flex flex-col gap-5">
                        <div class="w-full grid md:grid-cols-2 gap-5">
                            <!-- Name of Business  -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Name of Business </label>
                                <input type="text"value="{{ $btc->name_of_business }}"  name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>
                            <!-- Name of Product  -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Name of Product </label>
                                <input type="text" value="{{ $btc->name_of_product }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>
                        </div>

                        <div class="w-full grid md:grid-cols-4 gap-5">
                            <!-- Country of Registration  -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Country of
                                    Registration</label>
                                <input type="text" value="{{ $btc->country_of_registration }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Country of Operation  -->
                            <div class="w-full">
                                <label for="input-box"   class="block text-primary mb-2 ml-3 ">Country of
                                    Operation</label>
                                <input type="text" name="input-box" value="{{ $btc->country_of_operation }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Name of founder -->
                            <div class="w-full md:col-span-2">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Name(s) of
                                    Founder(s)</label>
                                <input type="text" value="{{ $btc->founder_name }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>
                        </div>

                        <div class="w-full grid md:grid-cols-2 gap-5">
                            <!-- What was your total revenue last year? -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Total revenue
                                    last year</label>
                                <input type="tel" value="{{ $btc->total_revenue }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Target sector  -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Target Sector</label>
                                <input type="text" value="{{ $btc->target_sector }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>
                        </div>

                        <!-- What impact will your solution have on MSMEs?  -->
                        <div class="w-full">
                            <label for="input-box" class="block text-primary mb-2 ml-3 capitalize">The impact of your
                                solution
                                have on MSMEs </label>
                            <textarea id="message" rows="5"
                                class="block p-2.5 w-full text-sm text-primary bg-gray-100 border-none shadow rounded-md text-justify focus:outline focus:outline-primary resize-none"readonly>{{ $btc->impact_on_msme }}</textarea>
                        </div>

                        <div class="w-full grid md:grid-cols-5 gap-5">
                            <!-- How long have you been operational? -->
                            <div class="w-full flex flex-col justify-end">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Duration of operation
                                </label>
                                <input type="email" value="{{ $btc->time_in_operation }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Team size full time -->
                            <div class="w-full flex flex-col justify-end">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Team size (Full
                                    Time)</label>
                                <input type="text" value="{{ $btc->team_size_full }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Team size part time -->
                            <div class="w-full flex flex-col justify-end">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Team size (Part
                                    Time)</label>
                                <input type="text" value="{{ $btc->team_size_part }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Monthly Recurring Revenue -->
                            <div class="w-full flex flex-col justify-end">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Monthly Recurring
                                    Revenue</label>
                                <input type="text" value="{{ $btc->mrr }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- How did you hear about Techmybiz? -->
                            <div class="w-full flex flex-col justify-end">
                                <label for="input-box" class="block text-primary mb-2 ml-3 capitalize">Knew about
                                    Techmybiz through</label>
                                <input type="text" value="{{ $btc->hear_about_techmybiz }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>
                        </div>

                        <div class="w-full grid md:grid-cols-3 gap-5">
                            <!-- Solution (URL of your product): -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Solution URL</label>
                                
                                    
                                                               <button>   <a href = "{{ $btc->solution_url }}" target="_blank">Solution URL </a></button>

                            </div>

                            <!-- Account Credentials -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Account Credentials</label>
                                <input type="text" value="{{ $btc->name_of_business }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Pitch Deck: -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Pitch Deck</label>

                                <button>   <a href = "http://www.techmybiz.org/storage/{{ $btc->pitch_deck }}" target="_blank">Click Applicant Pdf</a></button>
                            </div>
                        </div>

                         <div class="w-full grid md:grid-cols-2 gap-5">
                            <!-- Participation Reason -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Participation
                                    Reason</label>
                                <input type="text" value="{{ $btc->participation_reason }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Video Pitch -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Video Pitch</label>
                                                                                           
<iframe width="320" height="240" src="http://www.techmybiz.org/storage/{{ $btc->video_pitch }}" frameborder="0" allowfullscreen ></iframe>
                              
                            </div>
                        </div>

                        <!-- Describe your product  -->
                        <div class="w-full">
                            <label for="input-box" class="block text-primary mb-2 ml-3 capitalize">Describe your
                                product</label>
                            <textarea id="message" rows="5"
                                class="block p-2.5 w-full text-sm text-primary bg-gray-100 border-none shadow rounded-md text-justify focus:outline focus:outline-primary resize-none"readonly>{{ $btc->description }}</textarea>
                        </div>

                    </div>


                                        <section
                        class="w-full border-t-2 border-primary my-4 px-4 py-6 flex flex-col items-center bg-slate-200 rounded-lg gap-7"
                        data-aos="fade-up" data-aos-duration="1000">

                        <!-- Display of reviewer's assessment  -->
                        <main class="w-full flex flex-col items-start">
                            <h1 class="lg:text-2xl text-base font-medium text-gradient">Reviewers' Assessment Grid
                            </h1>
                            <section class="w-full grid md:grid-cols-2 mt-8 md:border-y border-b border-primary">
                                                           @forelse ($review as $item)
                                 @if ($item->userid == $btc->user->id)
                                <!-- Reviewer One  -->
                                <div class="w-full flex flex-col items-center md:border-r border-primary">
                                    <h1
                                        class="text-base text-center font-medium w-full text-primary border-b border-primary py-3">
                                        {{ $item->review->name}}
                                    </h1>

                                    <div class="w-full grid md:grid-cols-2 p-4 gap-4">
                                        <!-- Local Content -->
                                        <div class="w-full flex flex-col gap-2">
                                            <div class="w-full flex items-center gap-2">
                                                <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                               <input type="text" value="{{ $item->rate1 }}"
                                                    class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"readonly>
                                 
                                    </select>
                                            </div>
                                            <textarea rows="3"
                                                class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                                placeholder="Enter reason for the grade allocated"readonly>{{ $item->description1}}</textarea>
                                        </div>

                                        <!-- Local Content -->
                                        <div class="w-full flex flex-col gap-2">
                                            <div class="w-full flex items-center flex-wrap gap-2">
                                                <h2 class="text-sm text-primary font-medium">Focal Sector Alignment</h2>
                                                <input type="text" value="{{ $item->rate2 }}"
                                                    class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"readonly>
                                            </div>
                                            <textarea rows="3"
                                                class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                                placeholder="Enter reason for the grade allocated"readonly>{{ $item->description2}}</textarea>
                                        </div>

                                        <!-- Local Content -->
                                        <div class="w-full flex flex-col gap-2">
                                            <div class="w-full flex items-center gap-2">
                                                <h2 class="text-sm text-primary font-medium">Market Viability</h2>
                                                <input type="text" value="{{ $item->rate3 }}"
                                                    class="border-none w-9  text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"readonly>
                                            </div>
                                            <textarea rows="3"
                                                class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                                placeholder="Enter reason for the grade allocated"readonly>{{ $item->description3}}</textarea>
                                        </div>

                                        <!-- Local Content -->
                                        <div class="w-full flex flex-col gap-2">
                                            <div class="w-full flex items-center flex-wrap gap-2">
                                                <h2 class="text-sm text-primary font-medium">Industry Impact Potential</h2>
                                                <input type="text" value="{{ $item->rate4 }}"
                                                    class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"readonly>
                                            </div>
                                            <textarea rows="3"
                                                class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                                placeholder="Enter reason for the grade allocated"readonly>{{$item->description4}}</textarea>
                                        </div>

                                        <!-- Local Content -->
                                        <div class="w-full flex flex-col gap-2">
                                            <div class="w-full flex items-center gap-2">
                                                <h2 class="text-sm text-primary font-medium">Team Qualification</h2>
                                                <input type="text"  value="{{ $item->rate5 }}"
                                                    class="border-none w-9  text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"readonly>
                                            </div>
                                            <textarea rows="3"
                                                class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                                placeholder="Enter reason for the grade allocated"readonly>{{$item->description5}}</textarea>
                                        </div>

                                        <!-- Local Content -->
                                        <div class="w-full flex flex-col gap-2">
                                            <div class="w-full flex items-center flex-wrap gap-2">
                                                <h2 class="text-sm text-primary font-medium">Design Thinking</h2>
                                                <input type="text"  value="{{ $item->rate6 }}"
                                                    class="border-none w-9  text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"readonly>
                                            </div>
                                            <textarea rows="3"
                                                class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                                placeholder="Enter reason for the grade allocated"readonly>{{ $item->description6}}</textarea>
                                        </div>



                                        <!-- Summary Review  -->
                                        <div class="w-full md:col-span-2 flex flex-col">
                                            <h2 class="text-secondary text-base font-medium mb-2">Summary
                                                Review</h2>
                                            <p class="text-justify font-light text-primary text-sm">{{ $item->summary}}.</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @empty
                               <tr>
                                 <td colspan="7">Not Yet Reviewed</td>
                                </tr>
                               @endforelse
                            </section>
                        </main>



                        <!-- Jury's assessment grid  -->
                        <main class="w-full h-auto bg-primary/30 rounded-md px-4 py-4">
                            <h1 class="lg:text-2xl text-base self-start font-medium text-primary pb-6">Jury's
                                <span class="text-gradient">Assessment
                                    Grid</span>
                            </h1>
                                @forelse ($btcss as $item)
                                 @if ($item->userid == $btc->user->id)
                            <div class="w-full grid md:grid-cols-4 gap-4">
                                <!-- Local Content -->
                                <div class="w-full flex flex-col gap-2">
                                    <div class="w-full flex items-center flex-wrap gap-2">
                                        <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                        <input type="text" value="{{ $item->rate1 }}"
                                            class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-1 focus:outline focus:outline-primary"readonly>
                                    </div>
                                    <textarea rows="3"
                                        class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                        placeholder="Enter reason for the grade allocated"readonly>{{ $item->description1}}</textarea>
                                </div>


                                <!-- Local Content -->
                                <div class="w-full flex flex-col gap-2">
                                    <div class="w-full flex items-center flex-wrap gap-2">
                                        <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                        <input type="text" value="{{ $item->rate2 }}"
                                            class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-1 focus:outline focus:outline-primary"readonly>
                                    </div>
                                    <textarea rows="3"
                                        class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                        placeholder="Enter reason for the grade allocated"readonly>{{ $item->description2}}</textarea>
                                </div>


                                <!-- Local Content -->
                                <div class="w-full flex flex-col gap-2">
                                    <div class="w-full flex items-center flex-wrap gap-2">
                                        <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                        <input type="text"  value="{{ $item->rate3 }}"
                                            class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-1 focus:outline focus:outline-primary"readonly>
                                    </div>
                                    <textarea rows="3"
                                        class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                        placeholder="Enter reason for the grade allocated"readonly>{{ $item->description3}}</textarea>
                                </div>


                                <!-- Local Content -->
                                <div class="w-full flex flex-col gap-2">
                                    <div class="w-full flex items-center flex-wrap gap-2">
                                        <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                        <input type="text"  value="{{ $item->rate4 }}"
                                            class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-1 focus:outline focus:outline-primary"readonly>
                                    </div>
                                    <textarea rows="3"
                                        class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                        placeholder="Enter reason for the grade allocated"readonly>{{ $item->description4}}</textarea>
                                </div>


                                <!-- Local Content -->
                                <div class="w-full flex flex-col gap-2">
                                    <div class="w-full flex items-center flex-wrap gap-2">
                                        <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                        <input type="text"  value="{{ $item->rate5 }}"
                                            class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-1 focus:outline focus:outline-primary"readonly>
                                    </div>
                                    <textarea rows="3"
                                        class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                        placeholder="Enter reason for the grade allocated"readonly>{{ $item->description5}}</textarea>
                                </div>


                                <!-- Local Content -->
                                <div class="w-full flex flex-col gap-2">
                                    <div class="w-full flex items-center flex-wrap gap-2">
                                        <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                        <input type="text" value="{{ $item->rate6 }}"
                                            class="border-none w-9 text-sm font-light rounded-md bg-gray-50 py-1 px-1 focus:outline focus:outline-primary"readonly>
                                    </div>
                                    <textarea rows="3"
                                        class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                        placeholder="Enter reason for the grade allocated"readonly>{{ $item->description6}}</textarea>
                                </div>

                                <!-- Summary Remark  -->
                                <div class="md:col-span-4 flex flex-col pb-10">
                                    <h2 class="text-secondary text-base font-medium mb-2">Summary
                                        Review</h2>
                                    <p
                                        class="text-justify border border-primary py-3 rounded-md px-4 font-light text-primary text-sm">{{ $item->summary}}
                                        </p>
                                </div>


                            </div>
                            <hr/>
                                @endif
                                @empty
                               <tr>
                                 <td colspan="7">Not Yet Reviewed</td>
                                </tr>
                               @endforelse
                        </main>
                    </section>
                </main>

            </section>
            @endsection