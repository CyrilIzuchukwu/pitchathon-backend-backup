@extends('layouts.design')

@section('content')

@if ($user)
        <section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-center lg:p-0 p-4 gap-8 ">
            <!-- Profile Form -->
            <div class="flex justify-center items-center w-full lg:mt-8 mt-4">
                <h1 class="lg:text-xl text-base font-medium text-primary">View Application</h1>
            </div>

            <main class="w-full lg:px-8 md:px-4 px-2">
                <form class="w-full flex flex-col gap-7"  action="" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full grid md:grid-cols-2 gap-6">
                        <!-- Name of Business  -->
                        <div class="w-full">
                            <label for="name_of_business" class="block text-primary mb-2 ml-3 ">Name of Business</label>
                            <input value="{{ $user->name_of_business }}" type="text"
                                name="name_of_business"
                                value="{{ old('name_of_business') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"
                                readonly>
                            @error('name_of_business')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Name of Product  -->
                        <div class="w-full">
                            <label for="name_of_product" class="block text-primary mb-2 ml-3 ">Name of Product </label>
                            <input value="{{ $user->name_of_product }}" type="text"
                                name="name_of_product"
                                value="{{ old('name_of_product') ?? session('formFields.name_of_product') }}" id="oo"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('name_of_product')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full grid md:grid-cols-2 gap-6">
                        <!-- Country of Registration  -->
                        <div class="w-full">
                            <label for="country_of_registration" class="block text-primary mb-2 ml-3 ">Country of
                                Registration


                                <select name="country_of_registration"
                                    class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary" diabled>
                                    <option value="Nigeria">Nigeria</option>
                                </select>

                                @error('country_of_registration')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                        </div>

                        <!-- Country of Operation  -->
                        <div class="w-full">
                            <label for="country_of_operation" class="block text-primary mb-2 ml-3 ">Region


                                <select name="country_of_operation"
                                    class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"diabled>
                                <option value="{{ $user->country_of_operation }}">{{ $user->country_of_operation }}</option>
                                </select>
                                @error('country_of_operation')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>

                    <div class="w-full grid md:grid-cols-2 gap-6">
                        <!-- Name of founder -->
                        <div class="w-full">
                            <label for="founder_name" class="block text-primary mb-2 ml-3 ">Name(s) of
                                Founder(s)</label>
                            <input value="{{ $user->founder_name }}" type="text" name="founder_name"
                                value="{{ old('founder_name') ?? session('formFields.founder_name') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('founder_name')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Business Address -->
                        <div class="w-full">
                            <label for="address" class="block text-primary mb-2 ml-3 ">Business Address</label>
                            <input value="{{ $user->address }}" type="text" name="address"
                                value="{{ old('address') ?? session('formFields.address') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('address')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full grid md:grid-cols-2 gap-6">
                        <!-- Business Email -->
                        <div class="w-full">
                            <label for="founder_name" class="block text-primary mb-2 ml-3 ">Business Email</label>
                            <input value="{{ $user->email }}" type="text" name="email"
                                value="{{ old('email') ?? session('formFields.email') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('email')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Business Phone Number -->
                        <div class="w-full">
                            <label for="phone" class="block text-primary mb-2 ml-3 ">Business Phone number</label>
                            <input value="{{ $user->phone }}" type="text" name="phone"
                                value="{{ old('phone') ?? session('formFields.phone') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('phone')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="w-full grid md:grid-cols-3 gap-6">
                        <!-- Facebook -->
                        <div class="w-full">
                            <label for="facebook" class="block text-primary mb-2 ml-3 ">Facebook Link</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                    <i class="ri-facebook-fill"></i>
                                </span>
                                <input value="{{ $user->facebook }}" type="text" name="facebook"
                                    value="{{ old('facebook') ?? session('formFields.facebook') }}"
                                    class=" border-none rounded-r-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                                @error('facebook')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Twitter -->
                        <div class="w-full">
                            <label for="twitter" class="block text-primary mb-2 ml-3 ">Twitter Link</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                    <i class="ri-twitter-fill"></i>
                                </span>
                                <input value="{{ $user->twitter }}" type="text" name="twitter"
                                    value="{{ old('twitter') ?? session('formFields.twitter') }}"
                                    class=" border-none rounded-r-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                                @error('twitter')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Linkedin -->
                        <div class="w-full">
                            <label for="linkedin" class="block text-primary mb-2 ml-3 ">LinkedIn Link</label>
                            <div class="flex">
                                <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                    <i class="ri-linkedin-fill"></i>
                                </span>
                                <input value="{{ $user->linkedin }}" type="text" name="linkedin"
                                    value="{{ old('linkedin') ?? session('formFields.linkedin') }}"
                                    class=" border-none rounded-r-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                                @error('linkedin')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Describe Your Product (500
                                                                words max)  -->
                    <div class="w-full">
                        <label for="description" class="block text-primary mb-2 ml-3 ">Describe Your Product (500
                            words max)<span class="text-secondary">*</span></label>
                        <textarea id="message" rows="6" name="description"
                            value="{{ old('description') ?? session('formFields.description') }}"
                            class="block p-2.5 w-full text-sm text-primary  border-none  rounded-md text-justify focus:outline focus:outline-primary"
                            placeholder="Write here..."readonly>{{ $user->description }}</textarea>
                        @error('description')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Target sector  -->
                    <div class="w-full">
                        <label for="target_sector" class="block text-primary mb-2 ml-3 ">Target Sector</label>
                        <select name="target_sector"
                            class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"disabled>
                            <option value="{{ $user->target_sector }}">
                                {{ $user->target_sector }}</option>
                            <option value="green economy">Green Economy</option>
                            <option value="retail">Retail</option>
                            <option value="manufacturing/production">Manufacturing/Production</option>
                        </select>
                        @error('target_sector')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <!-- What impact will your
                                                                solution
                                                                have on MSMEs?  -->
                    <div class="w-full">
                        <label for="impact_on_msme" class="block text-primary mb-2 ml-3 capitalize">What impact will
                            your
                            solution
                            have on MSMEs? (500 words max):</label>
                        <textarea id="message" rows="6" name="impact_on_msme"
                            class="block p-2.5 w-full text-sm text-primary  border-none  rounded-md text-justify focus:outline focus:outline-primary"
                            placeholder="Write here..."readonly>{{ $user->impact_on_msme }}</textarea>
                        @error('impact_on_msme')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="w-full grid md:grid-cols-2 gap-6">
                        <!-- Business Email -->
                        <div class="w-full">
                            <label for="time_in_operation" class="block text-primary mb-2 ml-3 ">How long have you been
                                operational? (Years)</label>
                            <input value="{{ $user->time_in_operation }}" type="number"
                                name="time_in_operation"
                                value="{{ old('time_in_operation') ?? session('formFields.time_in_operation') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('time_in_operation')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- What was your total revenue last year? -->
                        <div class="w-full">
                            <label for="total_revenue" class="block text-primary mb-2 ml-3 capitalize">What was your
                                total revenue last year? (₦)</label>
                            <input value="{{ $user->total_revenue }}" type="number" name="total_revenue"
                                value="{{ old('total_revenue') ?? session('formFields.total_revenue') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('total_revenue')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Radio input for revenue range -->
                    <div class="w-full">
                        <label for="mrr" class="block text-primary mb-2 ml-3 ">What is your Verifiable Monthly
                            Recurring Revenue? (₦)</label>
                        <div class="w-full grid lg:grid-cols-4 md:grid-cols-2 gap-4 mt-3">
                            <div class="flex items-center gap-2">
                                <input value="{{ $user->mrr }}" type="radio" name="mrr"
                                    value="0 - 1,000,000"readonly>
                                <span class="text-primary text-base">0 - 1,000,000</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <input value="{{ $user->mrr }}" type="radio" name="mrr"
                                    value="1,000,001 - 5,000,000"readonly>
                                <span class="text-primary text-base">1,000,001 - 5,000,000</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <input value="{{ $user->mrr }}" type="radio" name="mrr"
                                    value="5,000,001 - 10,000,000"readonly>
                                <span class="text-primary text-base">5,000,001 - 10,000,000</span>
                            </div>

                            <div class="flex items-center gap-2">
                                <input value="{{ $user->mrr }}" type="radio" name="mrr"
                                    value="Above 10,000,000"readonly>
                                <span class="text-primary text-base">Above 10,000,000</span>
                            </div>
                            @error('mrr')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full grid md:grid-cols-2 gap-6">
                        <!-- Team size full time -->
                        <div class="w-full">
                            <label for="team_size_full" class="block text-primary mb-2 ml-3 ">Team Size (Full
                                Time):</label>
                            <select name="team_size_full"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"disabled>
                                <option value="{{ $user->team_size_full }}">
                                    {{ $user->team_size_full }}</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select>
                            @error('team_size_full')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Team size part time -->
                        <div class="w-full">
                            <label for="team_size_part" class="block text-primary mb-2 ml-3 ">Team Size (Part
                                Time):</label>
                            <select name="team_size_part"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"diabled>
                                <option value="{{ $user->team_size_part }}">
                                    {{ $user->team_size_part }}</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                            </select>
                            @error('team_size_part')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>



                    <div class="w-full grid md:grid-cols-2 gap-6">
                        <!-- Video Pitch:(Max Size: 20mb) -->
                        <!--<div class="w-full">-->
                        <!--    <label for="video_pitch" class="block text-primary mb-2 ml-3 ">Video Pitch:(Max Size:-->
                        <!--        20mb)</label>-->
                                   <!-- @if ($user->video_pitch )-->
                                   <!--<video width="220px" height="240px" controls>-->
                                   <!--    <source src="{{ asset("$user->video_pitch") }}" type="video/mp4">-->
                                            <!--<source src="movie.ogg" type="video/ogg">-->
                                            <!--   Your browser does not support the video tag.-->
                                   <!--                     </video>-->
                                   <!--@endif-->
                        <!--    <input value="{{ $user->video_pitch }}" type="file" name="video_pitch"-->
                        <!--        accept="video/mp4" max-size="20mb"-->
                        <!--        class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary">-->
                        <!--    @if (session('formFields.video_pitch'))-->
                        <!--        <p class="text-success">Previously uploaded file:-->
                        <!--            {{ session('formFields.video_pitch') }}-->
                        <!--        </p>-->
                        <!--    @endif-->
                        <!--    @error('video_pitch')-->
                        <!--        <p class="text-danger mt-1">{{ $message }}</p>-->
                        <!--    @enderror-->
                        <!--</div>-->

                        <!-- Pitch Deck: -->
                        <!--<div class="w-full">-->
                        <!--    <label for="pitch_deck" class="block text-primary mb-2 ml-3 ">Pitch Deck:</label>-->
                             <!--@if ($user->pitch_deck )-->
                             <!--   <iframe src="{{ asset("$user->pitch_deck") }}" style="width: 100%;height: 100%;border: none;"></iframe>-->
                                     
                             <!--          <embed src="{{ asset("$user->pitch_deck") }}" width="80px" height="70px" />-->

                             <!--      @endif-->
                        <!--    <input value="{{ $user->pitch_deck }}" type="file" name="pitch_deck"-->
                        <!--        accept="application/pdf"-->
                        <!--        class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary">-->
                        <!--    @if (session('formFields.pitch_deck'))-->
                        <!--        <p class="text-success">Previously uploaded file: {{ session('formFields.pitch_deck') }}-->
                        <!--        </p>-->
                        <!--    @endif-->
                        <!--    @error('pitch_deck')-->
                        <!--        <p class="text-danger mt-1">{{ $message }}</p>-->
                        <!--    @enderror-->
                        <!--</div>-->
                    </div>



                    <div class="w-full grid md:grid-cols-2 gap-6">
                        <!-- Solution (URL of your product): -->
                        <div class="w-full">
                            <label for="solution_url" class="block text-primary mb-2 ml-3 ">Solution (URL of your
                                product):</label>
                            <input value="{{ $user->solution_url }}" type="text" name="solution_url"
                                value="{{ old('solution_url') ?? session('formFields.solution_url') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('solution_url')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- If access to premium features is paid kindly provide a test account credentials for review -->
                        <div class="w-full">
                            <label for="solution_url_confirm" class="block text-primary mb-2 ml-3 ">If access to premium
                                features is paid kindly provide a test account credentials for review</label>
                            <input value="{{ $user->name }}" type="text" name="solution_url_confirm"
                                value="{{ old('solution_url_confirm') ?? session('formFields.solution_url_confirm') }}"
                                class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"readonly>
                            @error('solution_url_confirm')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Why do you want to participate in the Techmybiz pitchathon? (250 words max):  -->
                    <div class="w-full">
                        <label for="participation_reason" class="block text-primary mb-2 ml-3 capitalize">Why do you
                            want
                            to
                            participate in the Techmybiz pitchathon? (250 words max):</label>
                        <textarea id="message" name="participation_reason" rows="6"
                            value="{{ old('participation_reason') ?? session('formFields.participation_reason') }}"
                            class="block p-2.5 w-full text-sm text-primary  border-none  rounded-md text-justify focus:outline focus:outline-primary"
                            placeholder="Write here..."readonly>{{ $user->participation_reason }}</textarea>
                        @error('participation_reason')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- How did you hear about Techmybiz? -->
                    <div class="w-full">
                        <label for="hear_about_techmybiz" class="block text-primary mb-2 ml-3 capitalize">How did you
                            hear
                            about Techmybiz?</label>
                        <select name="hear_about_techmybiz" onchange="toggleOtherInput(this)"
                            class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"disabled>
                            <option value="{{ $user->hear_about_techmybiz }}">
                                {{ $user->hear_about_techmybiz }}</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Newspaper">Newspaper</option>
                            <option value="Our Website">Our Website</option>
                            <option value="A Friend">A Friend</option>
                            <option value="other">Other</option>
                        </select>
                        @error('hear_about_techmybiz')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="w-full" id="otherInput" style="display:none;">
                        <label for="otherOption">Please specify:</label>
                        <input value="{{ $user->otherOption }}" type="text"
                            class=" border-none rounded-md w-full py-3 px-3  leading-tight focus:outline focus:outline-primary"
                            name="otherOption" id="otherOption"readonly>
                        @error('name_of_business')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                        <div class=" w-full mt-6 mb-12">
        <!--<button type="submit"-->
        <!--    class="outline-none border-none text-white bg-primary px-6 py-2 rounded-md transition-all duration-300 hover:bg-secondary"></button>-->
    </div>
                </form>
            </main>
        </section>
        <script>
            function toggleOtherInput(selectElement) {
                var otherInput = document.getElementById("otherInput");
                if (selectElement.value == "other") {
                    otherInput.style.display = "block";
                } else {
                    otherInput.style.display = "none";
                }
            }
        </script>
@else

<style>
    .text-danger{
        color: red !important;
    }
</style>
            <!-- Main section  -->
            <section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-center lg:p-0 p-4 gap-8 ">
                <!-- Profile Form -->
                <div class="flex justify-center items-center w-full lg:mt-8 mt-4">
                    <h1 class="lg:text-xl text-base font-medium text-primary">Application Form</h1>
                </div>

                <main class="w-full lg:px-8 md:px-4 px-2">
                    <form class="w-full flex flex-col gap-7"  method="POST" action="{{ route('store.applicant') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full grid md:grid-cols-2 gap-6">
                            <!-- Name of Business  -->
                            <div class="w-full">
                                <label for="name_of_business" class="block text-primary mb-2 ml-3 ">Name of Business</label>
                                <input type="text" name="name_of_business" value="{{ old('name_of_business') }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                    @error('name_of_business')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                            </div>

                            <!-- Name of Product  -->
                            <div class="w-full">
                                <label for="name_of_product" class="block text-primary mb-2 ml-3 ">Name of Product <span
                                        class="text-secondary">*</span></label>
                                <input type="text" name="name_of_product" value="{{ old('name_of_product') }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                    @error('name_of_product')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>

                        <div class="w-full grid md:grid-cols-2 gap-6">
                            <!-- Country of Registration  -->
                            <div class="w-full">
                                <label for="country_of_registration" class="block text-primary mb-2 ml-3 ">Country of Registration
                                    <span class="text-secondary">*</span></label>
                                    
                            <select name="country_of_registration"
                                class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                <option value="Nigeria">Nigeria</option>
                            </select>

                        @error('country_of_registration')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                            </div>

                            <!-- Country of Operation  -->
                            <div class="w-full">
                                <label for="country_of_operation" class="block text-primary mb-2 ml-3 ">Region <span
                                        class="text-secondary">*</span></label>
                                        
                            <select name="country_of_operation"
                                class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                <option value="">Select</option>
                                <option value="south-east" {{ old('country_of_operation') == 'south-east' ? 'selected' : '' }}>South East</option>
                                <option value="south-south" {{ old('country_of_operation') == 'south-south' ? 'selected' : '' }}>South South</option>
                                <option value="north-central" {{ old('country_of_operation') == 'north-central' ? 'selected' : '' }}>North Central</option>
                                <option value="north-west" {{ old('country_of_operation') == 'north-west' ? 'selected' : '' }}>North West</option>
                                <option value="north-east" {{ old('country_of_operation') == 'north-east' ? 'selected' : '' }}>North East</option>
                                <option value="south-west" {{ old('country_of_operation') == 'south-west' ? 'selected' : '' }}>South West</option>
                            </select>
                                     @error('country_of_operation')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>

                        <div class="w-full grid md:grid-cols-2 gap-6">
                            <!-- Name of founder -->
                            <div class="w-full">
                                <label for="founder_name" class="block text-primary mb-2 ml-3 ">Name(s) of Founder(s)<span
                                        class="text-secondary">*</span></label>
                                <input type="text" name="founder_name" value="{{ old('founder_name') ?? session('formFields.founder_name') }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                    @error('founder_name')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                            </div>

                            <!-- Business Address -->
                            <div class="w-full">
                                <label for="address" class="block text-primary mb-2 ml-3 ">Business Address<span
                                        class="text-secondary">*</span></label>
                                <input type="text" name="address" value="{{ old('address') ?? session('formFields.address') }}" 
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                @error('address')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="w-full grid md:grid-cols-2 gap-6">
                            <!-- Business Email -->
                            <div class="w-full">
                                <label for="founder_name" class="block text-primary mb-2 ml-3 ">Business Email<span
                                        class="text-secondary">*</span></label>
                                <input type="text" name="email" value="{{ old('email') ?? session('formFields.email') }}" 
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                    @error('email')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                            </div>

                            <!-- Business Phone Number -->
                            <div class="w-full">
                                <label for="phone" class="block text-primary mb-2 ml-3 ">Business Phone number<span
                                        class="text-secondary">*</span></label>
                                <input type="text" name="phone" value="{{ old('phone') ?? session('formFields.phone') }}" 
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                @error('phone')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="w-full grid md:grid-cols-3 gap-6">
                            <!-- Facebook -->
                            <div class="w-full">
                                <label for="facebook" class="block text-primary mb-2 ml-3 ">Facebook Link</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                        <i class="ri-facebook-fill"></i>
                                    </span>
                                    <input type="text" name="facebook" value="{{ old('facebook') ?? session('formFields.facebook') }}"
                                        class="shadow border-none rounded-r-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                         @error('facebook')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>

                            <!-- Twitter -->
                            <div class="w-full">
                                <label for="twitter" class="block text-primary mb-2 ml-3 ">Twitter Link</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                        <i class="ri-twitter-fill"></i>
                                    </span>
                                    <input type="text" name="twitter" value="{{ old('twitter') ?? session('formFields.twitter') }}"
                                        class="shadow border-none rounded-r-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                        @error('twitter')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>

                            <!-- Linkedin -->
                            <div class="w-full">
                                <label for="linkedin" class="block text-primary mb-2 ml-3 ">LinkedIn Link</label>
                                <div class="flex">
                                    <span
                                        class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                        <i class="ri-linkedin-fill"></i>
                                    </span>
                                    <input type="text" name="linkedin" value="{{ old('linkedin') ?? session('formFields.linkedin') }}"
                                        class="shadow border-none rounded-r-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                        @error('linkedin')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Describe Your Product (500
                                words max)  -->
                        <div class="w-full">
                            <label for="description" class="block text-primary mb-2 ml-3 ">Describe Your Product (500
                                words max)<span class="text-secondary">*</span></label>
                            <textarea id="message" rows="6" name="description"
                                class="block p-2.5 w-full text-sm text-primary bg-gray-100 border-none shadow rounded-md text-justify focus:outline focus:outline-primary"
                                placeholder="Write here...">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                        </div>

                        <!-- Target sector  -->
                        <div class="w-full">
                            <label for="target_sector" class="block text-primary mb-2 ml-3 ">Target Sector<span
                                    class="text-secondary">*</span></label>
                            <select name="target_sector"
                                class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                <option value="">Select</option>
                                <option value="green economy" {{ old('target_sector') == 'green economy' ? 'selected' : '' }}>Green Economy</option>
                                <option value="retail" {{ old('target_sector') == 'retail' ? 'selected' : '' }}>Retail</option>
                                <option value="manufacturing/production" {{ old('target_sector') == 'manufacturing/production' ? 'selected' : '' }}>Manufacturing/Production</option>
                            </select>
                            @error('target_sector')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <!-- What impact will your
                                solution
                                have on MSMEs?  -->
                        <div class="w-full">
                            <label for="impact_on_msme" class="block text-primary mb-2 ml-3 capitalize">What impact will your
                                solution
                                have on MSMEs? (500 words max):<span class="text-secondary">*</span></label>
                            <textarea id="message" rows="6" name="impact_on_msme" class="block p-2.5 w-full text-sm text-primary bg-gray-100 border-none shadow rounded-md text-justify focus:outline focus:outline-primary"
                                placeholder="Write here...">{{ old('impact_on_msme') }}</textarea>
                            @error('impact_on_msme')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="w-full grid md:grid-cols-2 gap-6">
                            <!-- Business Email -->
                            <div class="w-full">
                                <label for="time_in_operation" class="block text-primary mb-2 ml-3 ">How long have you been
                                    operational? (Years)<span class="text-secondary">*</span></label>
                                <input type="number" name="time_in_operation" value="{{ old('time_in_operation') ?? session('formFields.time_in_operation') }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                             @error('time_in_operation')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                            </div>

                            <!-- What was your total revenue last year? -->
                            <div class="w-full">
                                <label for="total_revenue" class="block text-primary mb-2 ml-3 capitalize">What was your
                                    total revenue last year? (₦)<span class="text-secondary">*</span></label>
                                <input type="number" name="total_revenue" value="{{ old('total_revenue') ?? session('formFields.total_revenue') }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                @error('total_revenue')
                                <p class="text-danger mt-1">{{ $message }}</p>
                                 @enderror
                            </div>
                        </div>

                        <!-- Radio input for revenue range -->
                        <div class="w-full">
                            <label for="mrr" class="block text-primary mb-2 ml-3 ">What is your Verifiable Monthly
                                Recurring Revenue? (₦)<span class="text-secondary">*</span></label>
                            <div class="w-full grid lg:grid-cols-4 md:grid-cols-2 gap-4 mt-3">
                                <div class="flex items-center gap-2">
                                    <input type="radio" name="mrr" value="0 - 1,000,000" {{ old('mrr') == '0 - 1,000,000' ? 'checked' : '' }}>
                                    <span class="text-primary text-base">0 - 1,000,000</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <input type="radio" name="mrr" value="1,000,001 - 5,000,000" {{ old('mrr') == '1,000,001 - 5,000,000' ? 'checked' : '' }}>
                                    <span class="text-primary text-base">1,000,001 - 5,000,000</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <input type="radio" name="mrr" value="5,000,001 - 10,000,000" {{ old('mrr') == '5,000,001 - 10,000,000' ? 'checked' : '' }}>
                                    <span class="text-primary text-base">5,000,001 - 10,000,000</span>
                                </div>

                                <div class="flex items-center gap-2">
                                    <input type="radio" name="mrr" value="Above 10,000,000" {{ old('mrr') == 'Above 10,000,000' ? 'checked' : '' }}>
                                    <span class="text-primary text-base">Above 10,000,000</span>
                                </div>
                            @error('mrr')
                            <p class="text-danger mt-1">{{ $message }}</p>
                             @enderror
                            </div>
                        </div>

                        <div class="w-full grid md:grid-cols-2 gap-6">
                            <!-- Team size full time -->
                            <div class="w-full">
                                <label for="team_size_full" class="block text-primary mb-2 ml-3 ">Team Size (Full Time):<span
                                        class="text-secondary">*</span></label>
                                <select name="team_size_full"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                    <option value="" selected>Full Time</option>
                                    @for ($i = 0; $i <= 20; $i++)
                                        <option value="{{ $i }}" {{ old('team_size_full') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('team_size_full')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Team size part time -->
                            <div class="w-full">
                                <label for="team_size_part" class="block text-primary mb-2 ml-3 ">Team Size (Part Time):<span
                                        class="text-secondary">*</span></label>
                                <select name="team_size_part"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                    <option value="">Part Time</option>
                                    @for ($i = 0; $i <= 20; $i++)
                                        <option value="{{ $i }}" {{ old('team_size_part') == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('team_size_part')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        <div class="w-full grid md:grid-cols-2 gap-6">
                            <!-- Video Pitch:(Max Size: 20mb) -->
                            <div class="w-full">
                                <label for="video_pitch" class="block text-primary mb-2 ml-3 ">Video Pitch Link:(Youtube, Facebook, Google drive, Instagram etc)<span class="text-secondary">*</span></label>
                                 <input type="text" name="video_pitch" value="{{ old('video_pitch') }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                    @error('video_pitch')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                            </div>

                            <!-- Pitch Deck: -->
                            <div class="w-full">
                                <label for="pitch_deck" class="block text-primary mb-2 ml-3 ">Pitch Deck:<span
                                        class="text-secondary">*</span></label>
                                <input type="file" name="pitch_deck" accept="application/pdf"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                    @if(session('formFields.pitch_deck'))
                                            <p class="text-success">Previously uploaded file: {{ session('formFields.pitch_deck') }}</p>
                                    @endif
                                     @error('pitch_deck')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                            </div>
                        </div>



                        <div class="w-full grid md:grid-cols-2 gap-6">
                            <!-- Solution (URL of your product): -->
                            <div class="w-full">
                                <label for="solution_url" class="block text-primary mb-2 ml-3 ">Solution (URL of your
                                    product):<span class="text-secondary">*</span></label>
                                <input type="text" name="solution_url" value="{{ old('solution_url') ?? session('formFields.solution_url') }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                     @error('solution_url')
                                        <p class="text-danger mt-1">{{ $message }}</p>
                                    @enderror
                            </div>

                            <!-- If access to premium features is paid kindly provide a test account credentials for review -->
                            <div class="w-full">
                                <label for="solution_url_confirm" class="block text-primary mb-2 ml-3 ">If access to premium
                                    features is paid kindly provide a test account credentials for review
                                    <!--<span-->
                                    <!--    class="text-secondary">*</span>-->
                                        </label>
                                <input type="text" name="solution_url_confirm" value="{{ old('solution_url_confirm') ?? session('formFields.solution_url_confirm') }}"
                                    class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                @error('solution_url_confirm')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Why do you want to participate in the Techmybiz pitchathon? (250 words max):  -->
                        <div class="w-full">
                            <label for="participation_reason" class="block text-primary mb-2 ml-3 capitalize">Why do you want to
                                participate in the Techmybiz pitchathon? (250 words max):<span
                                    class="text-secondary">*</span></label>
                            <textarea id="message" name="participation_reason" rows="6"
                                class="block p-2.5 w-full text-sm text-primary bg-gray-100 border-none shadow rounded-md text-justify focus:outline focus:outline-primary"
                                placeholder="Write here...">{{ old('participation_reason') }}</textarea>
                            @error('participation_reason')
                                <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- How did you hear about Techmybiz? -->
                        <div class="w-full">
                            <label for="hear_about_techmybiz" class="block text-primary mb-2 ml-3 capitalize">How did you hear
                                about Techmybiz?<span class="text-secondary">*</span></label>
                            <select name="hear_about_techmybiz" onchange="toggleOtherInput(this)"
                                class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                <option value="">Select</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Newspaper">Newspaper</option>
                                <option value="Our Website">Our Website</option>
                                <option value="A Friend">A Friend</option>
                                <option value="other">Other</option>
                            </select>
                            @error('hear_about_techmybiz')
                            <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="w-full" id="otherInput" style="display:none;">
                             <label for="otherOption">Please specify:</label>
                            <input type="text" class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" name="otherOption" id="otherOption">
                             @error('name_of_business')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                            @enderror
                        </div>

    <div class=" w-full mt-6 mb-12">
        <button type="submit"
            class="outline-none border-none text-white bg-primary px-6 py-2 rounded-md transition-all duration-300 hover:bg-secondary">Submit
            Application</button>
    </div>
 
                    </form>
                </main>
            </section>



<script>
function toggleOtherInput(selectElement) {
    var otherInput = document.getElementById("otherInput");
    if (selectElement.value == "other") {
        otherInput.style.display = "block";
    } else {
        otherInput.style.display = "none";
    }
}
</script>
@endif
@endsection

