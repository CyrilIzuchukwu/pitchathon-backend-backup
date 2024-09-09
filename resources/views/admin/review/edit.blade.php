@extends('layouts.review')
@section('title')
    Profile_Update
@endsection
@section('content')

<!-- Main section  -->
<section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start lg:p-0 p-4 gap-8 ">
    <!-- Profile Form -->
    <div class="flex justify-center items-center w-full lg:mt-8 mt-4">
        <h1 class="lg:text-2xl text-base font-medium text-primary">Update_Profile</h1>
    </div>
    @if ($errors->any())
    <div class="text-secondary" id="demo">
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
  <main class="w-full flex lg:flex-row flex-col pt-4 justify-center items-center lg:justify-start lg:items-start">
    <div class="h-36 w-40">
        @if ($user->profile_image)
        <img src="{{ asset("$user->profile_image") }}" alt="Profile Pic"
            class="lg:rounded-lg w-full h-full rounded-full " style="
height: 90px;
">
 @endif

    </div>
    <form class="w-full mb-4" method="POST" action="{{ url('updatez') }}"
        enctype="multipart/form-data">
        @csrf
           @method('PUT')
        <div class="col-span-3 flex flex-col md:px-12 px-3 md:gap-6 gap-8 w-full">
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Name <span class="text-secondary">*</span></label>
                <input
                    class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                    type="text" name="name" value="{{ $user->name }}" />
                @error('name')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Address <span class="text-secondary">*</span></label>
                <input
                    class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                    type="text" name="address" value="{{ $user->address }}" />
                @error('address')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Email_Address <span
                        class="text-secondary">*</span></label>
                <input
                    class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                    type="email" name="email" value="{{ $user->email }}" />
                @error('email')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex gap-3 md:flex-row flex-col">
                <!-- Contact -->
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Contact<span
                            class="text-secondary">*</span></label>
                    <input type="number" name="phone" value="{{ $user->phone }}" placeholder=""
                        class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                    @error('name')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>
<div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Target_sector<span
                            class="text-secondary">*</span></label>
                    <input type="text" name="target_sector" value="{{ $user->target_sector }}" placeholder=""
                        class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
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
                        <option value="{{ $user->role }}">{{ $user->role }}</option>
                        <option value="Investor">Investor</option>
                        <option value="Founder">Founder</option>
                        <option value="Mentor">Mentor</option>
                        <option value="Other">Other</option>
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
                    <input type="text" name="country" value="{{ $user->country }}" placeholder=""
                        class="text-primary shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                    @error('country')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Organization  -->
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Organization<span
                            class="text-secondary">*</span></label>
                    <input type="text" name="organization" value="{{ $user->organization }}" placeholder=""
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
                        <span class="inline-flex items-center p-2 px-3 text-base text-white bg-primary rounded-l-md">
                            <i class="ri-twitter-fill"></i>
                        </span>
                        <input type="text" name="twitter" value="{{ $user->twitter }}" placeholder=""
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
                        <span class="inline-flex items-center p-2 px-3 text-base text-white bg-primary rounded-l-md">
                            <i class="ri-facebook-fill"></i>
                        </span>
                        <input type="text" name="facebook" value="{{ $user->facebook }}" placeholder=""
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
                        <span class="inline-flex items-center p-2 px-3 text-base text-white bg-primary rounded-l-md">
                            <i class="ri-linkedin-fill"></i>
                        </span>
                        <input type="text" name="linkedin" value="{{ $user->linkedin }}" placeholder=""
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
                        <option value="{{ $user->sex }}">{{ $user->sex }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('sex')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex gap-3 md:flex-row flex-col">
                <!-- Linkedin -->
                @if ($user->profile_image)
                   <img src="{{ asset("$user->profile_image") }}" style="width: 70px;height:70px;" class="me-4 border" alt="img" />
                  @endif
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Profile Image<span
                            class="text-secondary">*</span></label>
                    <input type="file" value="{{ $user->profile_image }}" name="profile_image" placeholder=""
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
                        <option value="{{ $user->age }}">{{ $user->age }}</option>
                        <option value="18-25">18-25</option>
                        <option value="26-35">26-35</option>
                        <option value="36-45">36-45</option>
                        <option value="46-55">46-55</option>
                        <option value="55+">55+</option>
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
                        <option value="{{ $user->education }}">{{ $user->education }}</option>
                        <option value="Primary">Primary</option>
                        <option value="Secondary">Secondary</option>
                        <option value="Ordinary-Diploma">Ordinary Diploma</option>
                        <option value="Higher-Diploma">Higher Diploma</option>
                        <option value="Degree">Degree</option>
                        <option value="Postgraduate">Postgraduate</option>
                    </select>
                    @error('education')
                        <p class="text-secondary mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Organization  -->
                <div class="w-full">
                    <label class="block text-primary mb-2 ml-3 ">Profession<span
                            class="text-secondary">*</span></label>
                    <input type="text" name="profession" value="{{ $user->profession }}" placeholder=""
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
                    type="text" name="question" value="{{ $user->question }}" />
                @error('question')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Tell us about yourself (100 words max):<span
                        class="text-secondary">*</span></label>
                <textarea
                    class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                    name="about_yourself" value="{{ old('about_yourself') ?? session('formFields.about_yourself') }}"
                    rows="10">{{ $user->about_yourself }}</textarea>
                @error('about_yourself')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Tell us about your Business (100 words max):<span
                        class="text-secondary">*</span></label>
                <textarea
                    class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                    name="about_business" value="{{ old('about_business') ?? session('formFields.about_business') }}"
                    rows="10">{{ $user->about_business }}</textarea>
                @error('about_business')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full mt-6 mb-12">
                <button type="submit"
                    class="outline-none p-2.5 border-none text-white bg-primary px-6 py-2 rounded-md transition-all duration-300 hover:bg-secondary">Submit
                </button>
            </div>



        </div>

    </form>
</main>
</section>




@endsection