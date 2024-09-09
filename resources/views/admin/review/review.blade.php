@extends('layouts.review')
@section('title')
    Review
  @endsection  
@section('content')



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
                                <input type="text" value="{{ $btc->name_of_business }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" readonly>
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
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Region</label>
                                <input type="text" value="{{ $btc->country_of_operation }}" name="input-box"
                                    class="shadow capitalize  border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
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
                                <label for="input-box" class="block text-primary mb-2 ml-3 "> 
                                    Last Annual Revenue</label>
                                <input type="tel" value="{{ $btc->total_revenue }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Target sector  -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Target Sector</label>
                                <input type="text" value="{{ $btc->target_sector }}" name="input-box"
                                    class="shadow capitalize border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>
                        </div>

                        <!-- What impact will your solution have on MSMEs?  -->
                        <div class="w-full">
                            <label for="input-box" class="block text-primary mb-2 ml-3 capitalize">Value proposition </label>
                            <textarea id="message" rows="5"
                                class="block p-2.5 w-full text-sm text-primary bg-gray-100 border-none shadow rounded-md text-justify focus:outline focus:outline-primary resize-none" readonly>{{ $btc->impact_on_msme }}</textarea>
                        </div>

                        <div class="w-full grid md:grid-cols-5 gap-5">
                            <!-- How long have you been operational? -->
                            <div class="w-full flex flex-col justify-end">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Experience</label>
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
                                <label for="input-box" class="block text-primary mb-2 ml-3 capitalize">How did you hear
                                    about Techmybiz?</label>
                                <input type="text" value="{{ $btc->hear_about_techmybiz }}" name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>
                        </div>

                        <div class="w-full grid md:grid-cols-3 gap-5">
                            <!-- Solution (URL of your product): -->
                            <div class="w-full">
                                <label for="input-box" class="  block text-primary mb-2 ml-3 ">Solution URL</label>
                            <input type="text" value="{{ $btc->solution_url }}"name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
<!--                        <button  class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white" style="background: linear-gradient(173deg, #a13193, #000000b8); margin-left: 20px;-->
<!--">   <a href = "{{ $btc->solution_url }}" target="_blank">View   </a></button>-->
                            </div>

                            <!-- Account Credentials -->
                            <div class="w-full">
                                <label for="input-box" class="block text-primary mb-2 ml-3 ">Name of business</label>
                                <input type="text" value="{{ $btc->name_of_business }}"name="input-box"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"readonly>
                            </div>

                            <!-- Pitch Deck: -->
                            <div class="w-full">
                                <label for="input-box" class="  block text-primary mb-2 ml-3 ">Pitch Deck</label>
                               
                                       <button  class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"   style="
    background: linear-gradient(173deg, #a13193, #000000b8); margin-left: 20px;
">    <a href = "http://www.techmybiz.org/storage/{{ $btc->pitch_deck }}" target="_blank">View </a></button> 
                                
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
                                <label for="input-box" class="  block text-primary mb-2 ml-3 ">Video Pitch</label>
                               
 <button  class="py-2 px-4 flex text-sm items-center gap-2 bg-gradient-to-r from-secondary to-primary rounded-lg text-white"   style="
    background: linear-gradient(173deg, #a13193, #000000b8); margin-left: 20px;
">    <a href = "{{ $btc->video_pitch }}"  target="_blank">View </a></button>
                                     
                            </div>
                        </div>

                        <!-- Describe your product  -->
                        <div class="w-full">
                            <label for="input-box" class="block text-primary mb-2 ml-3 capitalize">Product Description
                                </label>
                            <textarea id="message" rows="5"
                                class="block p-2.5 w-full text-sm text-primary bg-gray-100 border-none shadow rounded-md text-justify focus:outline focus:outline-primary resize-none"readonly>{{ $btc->description }}</textarea>
                        </div>

                    </div>

                    
                                        
                                 
<hr/>
              @if(isset($btcss))
                       <form action="" class="w-full border-t-2 border-primary my-4 px-4 py-6 flex flex-col items-center bg-slate-200 rounded-lg gap-7"
                        data-aos="fade-up" data-aos-duration="1000" method="POST" enctype="multipart/form-data">
 
                        <h1 class="lg:text-2xl text-base font-medium text-gradient">Report Assessment Grid
                        </h1>  
                        <main class="w-full grid md:grid-cols-3 gap-4">
                            <!-- Local Content -->
                            <!--kip this for me-->
                           <!--<input type="text" value="{{ $btcss->user->name}}" class="border-none w-9  text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary">-->
                              <!--kip this for me-->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                    <select name="score1"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary" disabled>
                                       <option value="{{ $btcss->score1 }}">{{ $btcss->rate1 }}</option>
                                 
                                    </select>
                                </div>
                                <textarea  name=description1 rows="7"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated" readonly>{{ $btcss->description1}}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Focal Sector Alignment</h2>
                                    <select name="score2"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"disabled>
                                       <option value="{{ $btcss->score2 }}">{{ $btcss->rate2 }}</option>
                                        
                                    </select>
                                </div>
                                
                                <textarea name=description2 rows="7"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated"readonly>{{ $btcss->description2}}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Market Viability</h2>
                                    <select name="score3"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"disabled>
                                       <option value="{{ $btcss->score3 }}">{{ $btcss->rate3 }}</option>
                                        
                                    </select>
                                </div>
                                <textarea name=description3 rows="7"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated"readonly>{{ $btcss->description3}}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Industry Impact Potential</h2>
                                    <select name="score4"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"disabled>
                                       <option value="{{ $btcss->score4 }}">{{ $btcss->rate4 }}</option>
                                       
                                    </select>
                                </div>
                                <textarea name=description4 rows="7"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated"readonly>{{ $btcss->description4}}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Team Qualification</h2>
                                    <select name="score5"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"disabled>
                                       <option value="{{ $btcss->score5 }}">{{ $btcss->rate5 }}</option>
                                       
                                    </select>
                                </div>
                                <textarea name=description5 rows="7"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated"readonly>{{ $btcss->description5}}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Design Thinking</h2>
                                    <select name="score6"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary"disabled>
                                       <option value="{{ $btcss->score6 }}">{{ $btcss->rate6 }}</option>
                                
                                    </select>
                                </div>
                                <textarea name=description6 rows="7"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated"readonly>{{ $btcss->description6}}</textarea>
                            </div>



                            <!-- Summary Remark  -->
                            <div class="md:col-span-3 flex flex-col">
                                <label for="summary" class="text-secondary font-medium mb-2 ml-3 ">Summary
                                    Review</label>
                                <textarea name=summary rows="7"
                                    class="block p-2 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter summary review that will be shared with applicant as feedback"readonly>{{ $btcss->summary}}</textarea>
                            </div>

                        </main>
                    </form>
                    @else
                    <form action="{{ url('Review/post/'  . $btc->id) }}" class="w-full border-t-2 border-primary my-4 px-4 py-6 flex flex-col items-center bg-slate-200 rounded-lg gap-7"
                        data-aos="fade-up" data-aos-duration="1000" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                          @if ($errors->any())
        <div class="alert alert-warning text-center text-gradient"id="demos">
            <button class="float-right" onclick="myFunction()">X</button>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
    <script>
        function myFunction() {
            const element = document.getElementById("demos");
            element.remove();
        }
    </script>
                        
                        <h1 class="lg:text-2xl text-base font-medium text-gradient">Assessment Grid
                        </h1>  
                        <input hidden text="text" value="{{ Auth::user()->id }}" name="reviewer" readonly>
                         <input hidden text="text" value="{{ $btc->user->id }}" name="userid" readonly>    
                         <input hidden text="text" value=" {{ $btc->target_sector }}" name="sector" readonly>
                         <input hidden text="text" value=" {{ $btc->name_of_business }}" name="business" readonly>
                          <input hidden text="text" value=" {{ $btc->country_of_operation }}" name="country" readonly>
                         
                        <main class="w-full grid md:grid-cols-3 gap-4">
                            <!-- Local Content -->
                           
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Local Content</h2>
                                    <select name="score1" value="{{ old('score1') }}"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary">
                                        <option value="0" {{ old('score1') == '0' ? 'selected' : '' }}>0</option>
                                            <option value="1" {{ old('score1') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ old('score1') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ old('score1') == '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ old('score1') == '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ old('score1') == '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ old('score1') == '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ old('score1') == '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ old('score1') == '8' ? 'selected' : '' }}>8</option>
                                            <option value="9" {{ old('score1') == '9' ? 'selected' : '' }}>9</option>
                                            <option value="10" {{ old('score1') == '10' ? 'selected' : '' }}>10</option>
                                    </select>
                                </div>
                                <textarea name=description1 rows="3"  value="{{ old('description1') }}"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated">{{ old('description1') }}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Focal Sector Alignment</h2>
                                    <select name="score2" value="{{ old('score2') }}"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary">
                                        <option value="0" {{ old('score2') == '0' ? 'selected' : '' }}>0</option>
                                            <option value="1" {{ old('score2') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ old('score2') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ old('score2') == '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ old('score2') == '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ old('score2') == '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ old('score2') == '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ old('score2') == '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ old('score2') == '8' ? 'selected' : '' }}>8</option>
                                            <option value="9" {{ old('score2') == '9' ? 'selected' : '' }}>9</option>
                                            <option value="10" {{ old('score2') == '10' ? 'selected' : '' }}>10</option>
                                    </select>
                                </div>
                                <textarea name=description2 rows="3"  value="{{ old('description2') }}"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated">{{ old('description2') }}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Market Viability</h2>
                                    <select name="score3" value="{{ old('score3') }}" 
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary">
                                         <option value="0" {{ old('score3') == '0' ? 'selected' : '' }}>0</option>
                                            <option value="1" {{ old('score3') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ old('score3') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ old('score3') == '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ old('score3') == '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ old('score3') == '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ old('score3') == '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ old('score3') == '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ old('score3') == '8' ? 'selected' : '' }}>8</option>
                                            <option value="9" {{ old('score3') == '9' ? 'selected' : '' }}>9</option>
                                            <option value="10" {{ old('score3') == '10' ? 'selected' : '' }}>10</option>
                                    </select>
                                </div>
                                <textarea name=description3 rows="3" value="{{ old('description3') }}"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated">{{ old('description3') }}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Industry Impact Potential</h2>
                                    <select name="score4" value="{{ old('score4') }}"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary">
                                        <option value="0" {{ old('score4') == '0' ? 'selected' : '' }}>0</option>
                                            <option value="1" {{ old('score4') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ old('score4') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ old('score4') == '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ old('score4') == '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ old('score4') == '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ old('score4') == '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ old('score4') == '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ old('score4') == '8' ? 'selected' : '' }}>8</option>
                                            <option value="9" {{ old('score4') == '9' ? 'selected' : '' }}>9</option>
                                            <option value="10" {{ old('score4') == '10' ? 'selected' : '' }}>10</option>
                                    </select>
                                </div>
                                <textarea name=description4 rows="3" value="{{ old('description4') }}"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated">{{ old('description4') }}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Team Qualification</h2>
                                    <select name="score5" value="{{ old('score5') }}"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary">
                                       <option value="0" {{ old('score5') == '0' ? 'selected' : '' }}>0</option>
                                            <option value="1" {{ old('score5') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ old('score5') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ old('score5') == '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ old('score5') == '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ old('score5') == '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ old('score5') == '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ old('score5') == '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ old('score5') == '8' ? 'selected' : '' }}>8</option>
                                            <option value="9" {{ old('score5') == '9' ? 'selected' : '' }}>9</option>
                                            <option value="10" {{ old('score5') == '10' ? 'selected' : '' }}>10</option>
                                    </select>
                                </div>
                                <textarea name=description5 rows="3" value="{{ old('description5') }}"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated">{{ old('description5') }}</textarea>
                            </div>

                            <!-- Local Content -->
                            <div class="w-full flex flex-col gap-2">
                                <div class="w-full flex items-center flex-wrap gap-2">
                                    <h2 class="text-sm text-primary font-medium">Design Thinking</h2>
                                    <select name="score6" value="{{ old('score6') }}"
                                        class="border-none text-sm font-light rounded-md bg-gray-50 py-1 px-2 focus:outline focus:outline-primary">
                                        <option value="0" {{ old('score6') == '0' ? 'selected' : '' }}>0</option>
                                            <option value="1" {{ old('score6') == '1' ? 'selected' : '' }}>1</option>
                                            <option value="2" {{ old('score6') == '2' ? 'selected' : '' }}>2</option>
                                            <option value="3" {{ old('score6') == '3' ? 'selected' : '' }}>3</option>
                                            <option value="4" {{ old('score6') == '4' ? 'selected' : '' }}>4</option>
                                            <option value="5" {{ old('score6') == '5' ? 'selected' : '' }}>5</option>
                                            <option value="6" {{ old('score6') == '6' ? 'selected' : '' }}>6</option>
                                            <option value="7" {{ old('score6') == '7' ? 'selected' : '' }}>7</option>
                                            <option value="8" {{ old('score6') == '8' ? 'selected' : '' }}>8</option>
                                            <option value="9" {{ old('score6') == '9' ? 'selected' : '' }}>9</option>
                                            <option value="10" {{ old('score6') == '10' ? 'selected' : '' }}>10</option>
                                    </select>
                                </div>
                                <textarea name=description6 rows="3" value="{{ old('description6') }}"
                                    class="block p-1.5 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter reason for the grade allocated">{{ old('description6') }}</textarea>
                            </div>

                            

                            


                            <!-- Summary Remark  -->
                            <div class="md:col-span-3 flex flex-col">
                                <label for="summary" class="text-secondary font-medium mb-2 ml-3 ">Summary
                                    Review</label>
                                <textarea name=summary rows="6"
                                    class="block p-2 w-full text-sm text-primary bg-gray-50 border-none rounded-md text-left focus:outline focus:outline-primary resize-none"
                                    placeholder="Enter summary review that will be shared with applicant as feedback">{{ old('summary') }}</textarea>
                            </div>

                            <!-- Buttons  -->
                            <div class="md:col-span-3 flex flex-wrap justify-start items-center md:gap-7 gap-4">

                                <!--<button type="button"-->
                                <!--    class="border-none outline-none bg-primary text-white text-sm py-2 px-4 rounded-md transition duration-300 hover:bg-secondary"></button>-->

                                <button type="submit"
                                    class="border-none outline-none  bg-gradient-to-br from-primary to-secondary text-white text-sm py-2 px-4 rounded-md transition-all duration-300 hover:from-secondary hover:to-primary">Submit
                                    Assessment</button>
                            </div>
                        </main>
                    </form>
            @endif
                </main>

            </section>
//             <script>
//     function autoRefresh() {
//         window.location = window.location.href;
//     }
//     setInterval('autoRefresh()', 70000);
// </script>
            @endsection