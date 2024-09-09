@extends('layouts.design')

@section('content')

<!-- Main section  -->
<section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start lg:p-0 p-4 gap-8 ">
    <!-- Profile Form -->
    <div class="flex justify-center items-center w-full lg:mt-8 mt-4">
        <h1 class="lg:text-2xl text-base font-medium text-primary">Profile</h1>
    </div>
         @if ($errors->any())
                <div class="text-secondary"id="demo">
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
    <!--<main class="w-full flex lg:flex-row flex-col pt-4 justify-center items-center lg:justify-start lg:items-start">-->
    <!--    <div class="h-36 w-40">-->
    <!--        <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" alt="Profile Pic" class="lg:rounded-lg w-full h-full rounded-full ">-->
    <!--    </div>-->
    <!--    <form class="w-full mb-4" method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data">-->
    <!--        @csrf-->
    <!--        <div class="col-span-3 flex flex-col md:px-12 px-3 md:gap-6 gap-8 w-full">-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Name <span class="text-secondary">*</span></label>-->
    <!--                <input class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" type="text" name="name" value="{{ old('name') }}" />-->
    <!--                @error('name')-->
    <!--                <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Address <span class="text-secondary">*</span></label>-->
    <!--                <input class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" type="text" name="address" value="{{ old('address') }}" />-->
    <!--                @error('address')-->
    <!--                <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Email_Address <span class="text-secondary">*</span></label>-->
    <!--                <input class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" type="email" name="email" value="{{ old('email') }}" />-->
    <!--                @error('email')-->
    <!--                <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Contact -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Contact<span class="text-secondary">*</span></label>-->
    <!--                    <input type="number" name="phone"  placeholder="" class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">-->
    <!--                    @error('name')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->

                    <!-- Role  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Role<span class="text-secondary">*</span></label>-->
    <!--                    <select class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" name="role">-->
    <!--                        <option value="">Choose One</option>-->
    <!--                        <option value="Investor">Investor</option>-->
    <!--                        <option value="Founder">Founder</option>-->
    <!--                        <option value="Mentor">Mentor</option>-->
    <!--                        <option value="Other">Other</option>-->
    <!--                    </select>-->
    <!--                    @error('role')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Country -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Country<span class="text-secondary">*</span></label>-->
    <!--                    <input type="text" name="country" placeholder="" class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">-->
    <!--                    @error('country')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->

                    <!-- Organization  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Organization<span class="text-secondary">*</span></label>-->
    <!--                    <input type="text" name="organization" placeholder="" class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">-->
    <!--                    @error('organization')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- City -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Twitter<span class="text-secondary">*</span></label>-->
    <!--                    <div class="flex">-->
    <!--                        <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">-->
    <!--                            <i class="ri-twitter-fill"></i>-->
    <!--                        </span>-->
    <!--                        <input type="text" name="twitter" placeholder="" class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" aria-label="Recipient's username" aria-describedby="basic-addon2">-->
    <!--                        @error('twitter')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                        @enderror-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- State  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Facebook<span class="text-secondary">*</span></label>-->
    <!--                    <div class="flex">-->
    <!--                        <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">-->
    <!--                            <i class="ri-facebook-fill"></i>-->
    <!--                        </span>-->
    <!--                        <input type="text" name="facebook" placeholder="" class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" aria-label="Recipient's username" aria-describedby="basic-addon2">-->
    <!--                        @error('facebook')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                        @enderror-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Linkedin -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Linkedin<span class="text-secondary">*</span></label>-->
    <!--                    <div class="flex">-->
    <!--                        <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">-->
    <!--                            <i class="ri-linkedin-fill"></i>-->
    <!--                        </span>-->
    <!--                        <input type="text" name="linkedin" placeholder="" class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" aria-label="Recipient's username" aria-describedby="basic-addon2">-->
    <!--                        @error('linkedin')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                        @enderror-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- State  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Sex<span class="text-secondary">*</span></label>-->
    <!--                    <select class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" name="sex">-->
    <!--                        <option value="">Choose One</option>-->
    <!--                        <option value="Male">Male</option>-->
    <!--                        <option value="Female">Female</option>-->
    <!--                    </select>-->
    <!--                    @error('sex')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Linkedin -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Profile Image<span class="text-secondary">*</span></label>-->
    <!--                    <input type="file" name="profile_image" placeholder="" class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">-->
    <!--                    @error('profile_image')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->

                    <!-- State  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Age<span class="text-secondary">*</span></label>-->
    <!--                    <select class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" name="age">-->
    <!--                        <option value="">Choose One</option>-->
    <!--                        <option value="18-25">18-25</option>-->
    <!--                        <option value="26-35">26-35</option>-->
    <!--                        <option value="36-45">36-45</option>-->
    <!--                        <option value="46-55">46-55</option>-->
    <!--                        <option value="55+">55+</option>-->
    <!--                    </select>-->
    <!--                    @error('age')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Country -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Educational Background<span class="text-secondary">*</span></label>-->
    <!--                    <select class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" name="education">-->
    <!--                        <option value="">Choose One</option>-->
    <!--                        <option value="Primary">Primary</option>-->
    <!--                        <option value="Secondary">Secondary</option>-->
    <!--                        <option value="Ordinary-Diploma">Ordinary Diploma</option>-->
    <!--                        <option value="Higher-Diploma">Higher Diploma</option>-->
    <!--                        <option value="Degree">Degree</option>-->
    <!--                        <option value="Postgraduate">Postgraduate</option>-->
    <!--                    </select>-->
    <!--                    @error('education')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->

                    <!-- Organization  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Profession<span class="text-secondary">*</span></label>-->
    <!--                    <input type="text" name="profession" placeholder="" class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">-->
    <!--                    @error('profession')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->


    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Have you built a business before? <span class="text-secondary">*</span></label>-->
    <!--                <input class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" type="text" name="question" />-->
    <!--                @error('question')-->
    <!--                <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Tell us about yourself (100 words max):<span class="text-secondary">*</span></label>-->
    <!--                <textarea class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" name="about_yourself" value="{{ old('about_yourself') ?? session('formFields.about_yourself') }}" rows="10"></textarea>-->
    <!--                @error('about_yourself')-->
    <!--                <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Tell us about your Business (100 words max):<span class="text-secondary">*</span></label>-->
    <!--                <textarea class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" name="about_business" value="{{ old('about_business') ?? session('formFields.about_business') }}" rows="10"></textarea>-->
    <!--                @error('about_business')-->
    <!--                <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->

    <!--            <div class="w-full mt-6 mb-12">-->
    <!--                <button type="submit" class="outline-none border-none text-white bg-primary px-6 py-2 rounded-md transition-all duration-300 hover:bg-secondary">Submit-->
    <!--                    </button>-->
    <!--            </div>-->
                <!--<div class="w-full mt-6 mb-12">-->
                <!--      <div class="flex">-->
                            <!--<span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">-->
                            <!--    <i class="ph-light ph-user-circle"></i>-->
                            <!--</span>-->
                    <!--<p class="text-gradient" >Submit Application</p>-->
                    <!--<a class="text-gradient" href="{{url('applicant-profile-edit')}}">Edit_profile</a>-->
                <!--    </div>-->
                <!--</div>-->


    <!--        </div>-->

    <!--    </form>-->
    <!--</main>-->
    @if ($user)
    <!--<p>{{ $user->name }}</p>-->
    <!--<main class="w-full flex lg:flex-row flex-col pt-4 justify-center items-center lg:justify-start lg:items-start">-->
    <!--    <div class="h-36 w-40">-->

    <!--        <img src="{{ asset("$user->profile_image") }}" alt="Profile Pic" class="lg:rounded-lg w-full h-full rounded-full ">-->

    <!--    </div>-->
    <!--    <form class="w-full mb-4" method="POST" action=""-->
    <!--        enctype="multipart/form-data">-->
    <!--        @csrf-->
    <!--        <div class="col-span-3 flex flex-col md:px-12 px-3 md:gap-6 gap-8 w-full">-->
    <!--            <div class="w-full">-->
    <!--                <label  class="block text-primary mb-2 ml-3 ">Name </label>-->
    <!--                <input value="{{ $user->name }}"-->
    <!--                    class=" border-none text-primary rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                    type="text" name="name" value="{{ old('name') }}" readonly/>-->
    <!--                @error('name')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Address </label>-->
    <!--                <input value="{{ $user->address }}"-->
    <!--                    class=" border-none text-primary rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                    type="text" name="address" value="{{ old('address') }}" readonly/>-->
    <!--                @error('address')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Email Address </label>-->
    <!--                <input value="{{ $user->email }}"-->
    <!--                    class=" border-none text-primary rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                    type="email" name="email" value="{{ old('email') }}" readonly/>-->
    <!--                @error('email')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Contact -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Contact</label>-->
    <!--                    <input value="{{ $user->phone }}" type="number" name="phone" placeholder=""-->
    <!--                        class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary" readonly>-->
    <!--                    @error('name')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->

                    <!-- Role  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Role</label>-->
    <!--                    <select-->
    <!--                        class=" border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                        name="role" disabled >-->
    <!--                        <option value="{{ $user->role }}">{{ $user->role }}</option>-->
    <!--                        <option value="Investor">Investor</option>-->
    <!--                        <option value="Founder">Founder</option>-->
    <!--                        <option value="Mentor">Mentor</option>-->
    <!--                        <option value="Other">Other</option>-->
    <!--                    </select>-->
    <!--                    @error('role')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Country -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Country</label>-->
    <!--                    <input value="{{ $user->country }}" type="text" name="country" placeholder=""-->
    <!--                        class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary" readonly>-->
    <!--                    @error('country')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->

                    <!-- Organization  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Organization</label>-->
    <!--                    <input value="{{ $user->organization }}" type="text" name="organization" placeholder=""-->
    <!--                        class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary" readonly>-->
    <!--                    @error('organization')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
                    
    <!--                  <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">target_sector</label>-->
    <!--                    <input value="{{ $user->target_sector }}" type="text" name="target_sector" placeholder=""-->
    <!--                        class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary" readonly>-->
    <!--                    @error('target_sector')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- City -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Twitter</label>-->
    <!--                    <div class="flex">-->
    <!--                        <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">-->
    <!--                            <i class="ri-twitter-fill"></i>-->
    <!--                        </span>-->
    <!--                        <input value="{{ $user->twitter }}" type="text" name="twitter" placeholder=""-->
    <!--                            class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                            aria-label="Recipient's username" aria-describedby="basic-addon2" readonly>-->
    <!--                        @error('twitter')-->
    <!--                            <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                        @enderror-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- State  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Facebook</label>-->
    <!--                    <div class="flex">-->
    <!--                        <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">-->
    <!--                            <i class="ri-facebook-fill"></i>-->
    <!--                        </span>-->
    <!--                        <input value="{{ $user->facebook }}" type="text" name="facebook" placeholder=""-->
    <!--                            class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                            aria-label="Recipient's username" aria-describedby="basic-addon2" readonly>-->
    <!--                        @error('facebook')-->
    <!--                            <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                        @enderror-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Linkedin -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Linkedin</label>-->
    <!--                    <div class="flex">-->
    <!--                        <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">-->
    <!--                            <i class="ri-linkedin-fill"></i>-->
    <!--                        </span>-->
    <!--                        <input value="{{ $user->linkedin }}"   type="text" name="linkedin" placeholder=""-->
    <!--                            class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                            aria-label="Recipient's username" aria-describedby="basic-addon2" readonly>-->
    <!--                        @error('linkedin')-->
    <!--                            <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                        @enderror-->
    <!--                    </div>-->
    <!--                </div>-->

                    <!-- State  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Sex</label>-->
    <!--                    <select-->
    <!--                        class=" border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                        name="sex" disabled>-->
    <!--                        <option value="{{ $user->sex }}">{{ $user->sex }}</option>-->
    <!--                        <option value="Male">Male</option>-->
    <!--                        <option value="Female">Female</option>-->
    <!--                    </select>-->
    <!--                    @error('sex')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Linkedin -->
    <!--                {{-- @if ($user->profile_image) --}}-->
    <!--                <img src="{{ asset("$user->profile_image") }}" style="width: 70px;height:70px;" class="me-4 border" alt="img" />-->
    <!--                {{-- @endif --}}-->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Profile Image</label>-->
    <!--                    <input type="file" value="{{ $user->profile_image }}" name="profile_image" placeholder=""-->
    <!--                        class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary" readonly>-->
    <!--                    @error('profile_image')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->

                    <!-- State  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Age</label>-->
    <!--                    <select-->
    <!--                        class=" border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                        name="age" disabled>-->
    <!--                        <option value="{{ $user->age }}">{{ $user->age }}</option>-->
    <!--                        <option value="18-25">18-25</option>-->
    <!--                        <option value="26-35">26-35</option>-->
    <!--                        <option value="36-45">36-45</option>-->
    <!--                        <option value="46-55">46-55</option>-->
    <!--                        <option value="55+">55+</option>-->
    <!--                    </select>-->
    <!--                    @error('age')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <div class="flex gap-3 md:flex-row flex-col">-->
                    <!-- Country -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Educational Background</label>-->
    <!--                    <select-->
    <!--                        class=" border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                        name="education"disabled>-->
    <!--                        <option value="{{ $user->education }}">{{ $user->education }}</option>-->
    <!--                        <option value="Primary">Primary</option>-->
    <!--                        <option value="Secondary">Secondary</option>-->
    <!--                        <option value="Ordinary-Diploma">Ordinary Diploma</option>-->
    <!--                        <option value="Higher-Diploma">Higher Diploma</option>-->
    <!--                        <option value="Degree">Degree</option>-->
    <!--                        <option value="Postgraduate">Postgraduate</option>-->
    <!--                    </select>-->
    <!--                    @error('education')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->

                    <!-- Organization  -->
    <!--                <div class="w-full">-->
    <!--                    <label class="block text-primary mb-2 ml-3 ">Profession</label>-->
    <!--                    <input value="{{ $user->profession }}" type="text" name="profession" placeholder=""-->
    <!--                        class="text-primary border-none rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary" readonly>-->
    <!--                    @error('profession')-->
    <!--                        <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                    @enderror-->
    <!--                </div>-->
    <!--            </div>-->


    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Have you built a business before? </label>-->
    <!--                <input  value="{{ $user->question }}"-->
    <!--                    class=" border-none text-primary rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                    type="text" name="question" readonly/>-->
    <!--                @error('question')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Tell us about yourself (100 words max):</label>-->
    <!--                <textarea-->
    <!--                    class=" border-none text-primary rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                    name="about_yourself" value="{{ old('about_yourself') ?? session('formFields.about_yourself') }}"readonly-->
    <!--                    rows="10">{{ $user->about_yourself }}</textarea>-->
    <!--                @error('about_yourself')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->
    <!--            <div class="w-full">-->
    <!--                <label class="block text-primary mb-2 ml-3 ">Tell us about your Business (100 words max):</label>-->
    <!--                <textarea-->
    <!--                    class=" border-none text-primary rounded-md w-full py-3 px-3 bg-white leading-tight focus:outline focus:outline-primary"-->
    <!--                    name="about_business" value="{{ old('about_business') ?? session('formFields.about_business') }}" readonly-->
    <!--                    rows="10">{{ $user->about_business }}</textarea>-->
    <!--                @error('about_business')-->
    <!--                    <p class="text-secondary mt-1">{{ $message }}</p>-->
    <!--                @enderror-->
    <!--            </div>-->

    <!--            <div hidden class="w-full mt-6 mb-12">-->
    <!--                <button type="submit"-->
    <!--                    class="outline-none border-none text-white bg-primary px-6 py-2 rounded-md transition-all duration-300 hover:bg-secondary">Submit-->
    <!--                </button>-->
    <!--            </div>-->



    <!--        </div>-->

    <!--    </form>-->
    <!--</main>-->
    <main class="w-full">
        
        
        <section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start lg:pr-8 p-4 gap-8 ">
                <!-- Profile Form -->
                <div class="w-full">

                    <div class="flex gap-8 bg-slate-200 h-auto rounded-md">
                        <div
                            class="lg:py-0 md:pl-12 py-6 px-4 md:p-8 flex md:flex-row flex-col gap-2 items-center justify-center lg:gap-14 md:gap-5">
                            <!-- profile picture -->
                            <img data-aos="fade-up" src="{{ asset("$user->profile_image") }}" alt=""
                                class="rounded-full md:w-40 md:h-40 w-20 h-20">
                            <div class="flex flex-col justify-center items-start lg:gap-9 md:gap-10 md:mt-20 gap-3">
                                <!-- profile details -->
                                <div data-aos="fade-side" duration="2000"
                                    class="flex flex-col items-center md:items-start gap-4">
                                    <div class="flex justify-center items-center gap-3 text-primary">
                                        <h1 class=" text-xl md:text-3xl text-primary font-medium">{{ $user->name }}</h1>
                                        <i class="ph-light ph-seal-check text-xl"></i>
                                        <p
                                            class="text-secondary inline-block px-5 p-1  bg-secondary/20 font-medium text-sm">
                                            {{ ucfirst($user->target_sector) }}</p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <h1 class="text-primary md:text-xl text-base font-light">{{ $user->organization}} </h1>

                                    </div>
                                    <div class="flex items-center flex-wrap justify-center gap-2 text-primary">
                                        <i class="ph-light ph-map-pin text-lg"></i>
                                        <span class="font-light"> {{ $user->address }},</span>
                                        <span class="font-light">Nigeria.</span>
                                    </div>
                                </div>

                                <!-- contact details -->

                                <div data-aos="fade-up"
                                    class="lg:flex lg:flex-row items-center grid grid-cols-2 w-full lg:text-sm md:text-xs lg:pb-5 text-sm gap-2 text-primary">
                                    <div class="flex flex-col">
                                        <h4 class="text-primary">Phone</h4>
                                        <p
                                            class="flex py-2 px-2 md:w-auto items-center gap-2 text-white rounded bg-primary ">
                                            {{ $user->phone }}
                                        </p>
                                    </div>

                                    <div class="flex flex-col">
                                        <h4 class="text-primary">Email</h4>
                                        <p class="flex py-2 px-2 md:w-auto items-center gap-2 text-white bg-primary">
                                             {{ $user->email }}
                                        </p>
                                    </div>
                                    <div class="flex flex-col">
                                        <h4 class="text-primary">Education</h4>
                                        <p class="flex py-2 px-2 md:w-auto items-center gap-2 bg-primary text-white">
                                            {{ $user->education }}
                                        </p>
                                    </div>

                                    <div class="flex flex-col">
                                        <h4 class="text-primary">Profession</h4>
                                        <p class="flex py-2 px-2 md:w-auto items-center gap-2 bg-primary text-white">
                                            {{ $user->profession }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- personal details -->
                    <div class="grid lg:grid-cols-6 my-3 gap-6 p-3 grid-flow-col-1">

                        <!-- professional details -->
                        <div class="col-span-3">
                            <p class="font-medium text-xl my-3 text-primary">Personal
                                Bio</p>
                            <div
                                class="w-full md:p-5 p-2 border rounded-md border-primary/40 flex flex-col items-start">

                                <p class="p-2 text-justify font-light text-base text-primary">  {{ $user->about_yourself }} </p>
                            </div>
                        </div>


                        <!-- personal details -->
                        <div class="lg:col-span-3 col-span-3">
                            <p class="font-medium text-xl my-3 text-primary">Business
                                Bio</p>
                            <div class="w-full p-5 bg-slate-200 rounded-md flex flex-col items-end">

                                <p class=" p-2 text-justify text-base font-normal text-primary"> {{ $user->about_business }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
        
        </main>
@else
    <main class="w-full flex lg:flex-row flex-col pt-4 justify-center items-center lg:justify-start lg:items-start">
        <div class="h-36 w-40">

            <img src="https://img.freepik.com/free-icon/user_318-159711.jpg" alt="Profile Pic"
                class="lg:rounded-lg w-full h-full rounded-full ">

        </div>
        <form class="w-full mb-4" method="POST" action="{{ route('store.profile') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="col-span-3 flex flex-col md:px-12 px-3 md:gap-6 gap-8 w-full">
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Name <span class="text-secondary">*</span></label>
                    <input
                        class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                        type="text" name="name" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Address <span class="text-secondary">*</span></label>
                    <input
                        class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                        type="text" name="address" value="{{ old('address') }}" />
                    @error('address')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Email Address <span
                            class="text-secondary">*</span></label>
                    <input
                        class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                        type="email" name="email" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex gap-3 md:flex-row flex-col">
                    <!-- Contact -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Contact<span
                                class="text-secondary">*</span></label>
                        <input type="number" name="phone" value="{{ old('phone') }}" placeholder=""
                            class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                        @error('name')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>
 <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Target Sector<span
                                class="text-secondary">*</span></label>
                            
                        <select class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary" name="target_sector">
                            <option value="">Select</option>
                             <option value="green economy" {{ old('target_sector') == 'green economy' ? 'selected' : '' }}>Green Economy</option>
                                <option value="retail" {{ old('target_sector') == 'retail' ? 'selected' : '' }}>Retail</option>
                                <option value="manufacturing/production" {{ old('target_sector') == 'manufacturing/production' ? 'selected' : '' }}>Manufacturing/Production</option>
                        </select>
                            
                        @error('target_sector')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Role  -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Role<span class="text-secondary">*</span></label>
                        <select
                            class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                            name="role">
                            <option value="">Select</option> 
                            <option value="Investor" {{ old('role') == 'Investor' ? 'selected' : '' }}>Investor</option>
                            <option value="Founder" {{ old('role') == 'Founder' ? 'selected' : '' }}>Founder</option>
                            <option value="Mentor" {{ old('role') == 'Mentor' ? 'selected' : '' }}>Mentor</option> 
                            <option value="Other" {{ old('role') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('role')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex gap-3 md:flex-row flex-col">
                    <!-- Country -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Country<span
                                class="text-secondary">*</span></label>
                        <input type="text" name="country" value="{{ old('country') }}" placeholder=""
                            class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                        @error('country')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Organization  -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Organization<span
                                class="text-secondary">*</span></label>
                        <input type="text" name="organization" value="{{ old('organization') }}" placeholder=""
                            class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                        @error('organization')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex gap-3 md:flex-row flex-col">
                    <!-- City -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Twitter</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                <i class="ri-twitter-fill"></i>
                            </span>
                            <input type="text" name="twitter" value="{{ old('twitter') }}" placeholder=""
                                class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            @error('twitter')
                                <p class="text-secondary mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- State  -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Facebook</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                <i class="ri-facebook-fill"></i>
                            </span>
                            <input type="text" name="facebook" value="{{ old('facebook') }}" placeholder=""
                                class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            @error('facebook')
                                <p class="text-secondary mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex gap-3 md:flex-row flex-col">
                    <!-- Linkedin -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Linkedin</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-base text-white bg-primary rounded-l-md">
                                <i class="ri-linkedin-fill"></i>
                            </span>
                            <input type="text" name="linkedin" value="{{ old('linkedin') }}" placeholder=""
                                class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            @error('linkedin')
                                <p class="text-secondary mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- State  -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Sex<span class="text-secondary">*</span></label>
                        <select
                            class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                            name="sex">
                            <option value="">Select</option>
                            <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('sex')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex gap-3 md:flex-row flex-col">
                    <!-- Linkedin -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Profile Image<span
                                class="text-secondary">*</span></label>
                        <input type="file" value="{{ old('profile_image') }}" name="profile_image" placeholder=""
                            class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                        @error('profile_image')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- State  -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Age<span class="text-secondary">*</span></label>
                        <select
                            class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                            name="age">
                            <option value="">Select</option>
                            <option value="18-25" {{ old('age') == '18-25' ? 'selected' : '' }}>18-25</option>
                            <option value="26-35" {{ old('age') == '26-35' ? 'selected' : '' }}>26-35</option>
                            <option value="36-45" {{ old('age') == '36-45' ? 'selected' : '' }}>36-45</option>
                            <option value="46-55" {{ old('age') == '46-55' ? 'selected' : '' }}>46-55</option>
                            <option value="55+" {{ old('age') == '55+' ? 'selected' : '' }}>55+</option>
                        </select>
                        @error('age')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex gap-3 md:flex-row flex-col">
                    <!-- Country -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Educational Background<span
                                class="text-secondary">*</span></label>
                        <select
                            class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                            name="education">
                            <option value="">Select</option>
                            <option value="Primary" {{ old('education') == 'Primary' ? 'selected' : '' }}>Primary</option>
                            <option value="Secondary" {{ old('education') == 'Secondary' ? 'selected' : '' }}>Secondary</option>
                            <option value="Ordinary-Diploma" {{ old('education') == 'Ordinary-Diploma' ? 'selected' : '' }}>Ordinary Diploma</option>
                            <option value="Higher-Diploma" {{ old('education') == 'Higher-Diploma' ? 'selected' : '' }}>Higher Diploma</option>
                            <option value="Degree" {{ old('education') == 'Degree' ? 'selected' : '' }}>Degree</option>
                            <option value="Postgraduate" {{ old('education') == 'Postgraduate' ? 'selected' : '' }}>Postgraduate</option>
                        </select>
                        @error('education')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Organization  -->
                    <div class="w-full">
                        <label class="block text-primary mb-2 ml-3 ">Profession<span
                                class="text-secondary">*</span></label>
                        <input type="text" name="profession" value="{{ old('profession') }}" placeholder=""
                            class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                        @error('profession')
                            <p class="text-secondary mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Have you built a business before? <span
                            class="text-secondary">*</span></label>
                    <input
                        class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                        type="text" name="question" value="{{ old('question') }}" />
                    @error('question')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Tell us about yourself (100 words max):<span
                            class="text-secondary">*</span></label>
                    <textarea
                        class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                        name="about_yourself"
                        rows="10">{{ old('about_yourself') }}</textarea>
                    @error('about_yourself')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Tell us about your Business (100 words max):<span
                            class="text-secondary">*</span></label>
                    <textarea
                        class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                        name="about_business"
                        rows="10">{{ old('about_business') }}</textarea>
                    @error('about_business')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="w-full mt-6 mb-12">
                    <button type="submit"
                        class="outline-none border-none text-white bg-primary px-6 py-2 rounded-md transition-all duration-300 hover:bg-secondary">Submit
                    </button>
                </div>



            </div>

        </form>
    </main>
@endif
</section>




@endsection
