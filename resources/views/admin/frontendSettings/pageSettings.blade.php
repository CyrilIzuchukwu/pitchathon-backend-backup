@extends('layouts.admin')
@section('title')
Welcome admin
@endsection
@section('content')





<!-- Main section  -->
<section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
    <!-- List of submitted solution -->
    <!-- Reviews   -->
    <main class="w-full grid lg:grid-cols-1 md:grid-cols-1 gap-3
                                        mb-10
                                        lg:pt-8 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up" data-aos-duration="1000">



        <style>
            .danger {
                color: red !important;
            }

            label {
                font-weight: 800;
            }
        </style>

        <!-- Login form  -->

        <div class="md:mt-20 mt-0 pt-0 px-4 md:px-10" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; padding-bottom: 30px;">
            <div class="w-full  items-center
                justify-center">

                <!-- @if(Session::has('message'))

                <script>
                    swal("Done", "{{ Session::get('message') }}", 'success', {
                        button: true,
                        button: "OK",
                        timer: 7000,
                        dangerMode: true,
                    })
                </script>

                @endif -->
                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_theme_color') }}">
                        @csrf

                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                COLOR THEME
                            </h3>
                        </div>


                        <div class="mt-6">

                            <div class="w-full gap-5 flex flex-col md:grid md:grid-cols-2 justify-center ">

                                <div class="w-full flex flex-col items-start mt-4 md:mt-0">

                                    <label for="">Enter Color code( eg:#FFF000)->Primary Color</label>
                                    <input type="text" placeholder="#FFF000" name="theme_color" class="w-full border rounded px-3 py-2 focus:outline" oninput="validateThemeColor(this)" />
                                    <span class="danger">@error('theme_color'){{ $message }} @enderror</span>
                                </div>

                                <div class="w-full flex flex-col items-start mt-4 md:mt-0">

                                    <label for="">Enter Color code( eg:#FFF000)->Secondary Color</label>
                                    <input type="text" placeholder="#FFF000" name="sec_color" class="w-full border rounded px-3 py-2 focus:outline" oninput="validateSecColor(this)" />
                                    <span class="danger">@error('sec_color'){{ $message }} @enderror</span>

                                </div>

                            </div>

                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                            text-gray-100
                                            focus:outline-dashed
                                            bg-primary

                                            hover:bg-secondary
                                            hover:text-white">
                                Save
                            </button>

                    </form>

                    <div class="mt-4" style="width: 100%; height:3px; background: red;">

                    </div>
                </div>


                <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_top_nav_img') }}" enctype="multipart/form-data">
                    @csrf

                    <div class=" justify-center mt-6">
                        <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                            CREATE TOP NAV IMAGE
                        </h3>
                    </div>


                    <div class="mt-6">

                        <div class="w-full gap-5 flex-col md:flex md:justify-around justify-center ">
                            <div class="w-full flex flex-col items-start">
                                <label for="">Old Nav Image </label>

                                <img src="/updates/{{$current_nav_img->top_nav_img}}" alt="" width="500">
                            </div>

                            <div class="w-full flex flex-col items-start mt-4 md:mt-0">
                                <label for="New Logo">New Nav Image</label>
                                <input type="file" name="nav_img" class="w-full border rounded px-3 py-5 focus:outline text-gray-700 " />
                                <span class="danger">@error('nav_img'){{ $message }} @enderror</span>
                            </div>

                        </div>

                        <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                            text-gray-100
                                            focus:outline-dashed
                                            bg-primary

                                            hover:bg-secondary
                                            hover:text-white">
                            Save
                        </button>

                </form>

                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_logo') }}" enctype="multipart/form-data">
                    @csrf
                    <div class=" justify-center mt-6">
                        <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                            CREATE LOGO
                        </h3>
                    </div>


                    <div class="mt-6">

                        <div class="w-full gap-5 flex-col md:flex md:justify-around justify-around">
                            <div class="w-full flex flex-col items-start">
                                <label for="">Old Logo</label>
                                <img src="/updates/{{$current_logo->logo}}" alt="" width="120">
                            </div>

                            <div class="w-full flex flex-col items-start mt-4 md:mt-0">
                                <label for="New Logo">New Logo</label>
                                <input type="file" name="image" class="w-full border rounded px-3 py-5 focus:outline text-gray-700 " />
                                <span class="danger">@error('image'){{ $message }} @enderror</span>
                            </div>

                        </div>

                        <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                            text-gray-100
                                            focus:outline-dashed
                                            bg-primary

                                            hover:bg-secondary
                                            hover:text-white">
                            Save
                        </button>

                </form>



                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_hero_text') }}">
                        @csrf
                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                HERO PAGE TEXT
                            </h3>
                        </div>


                        <div class="mt-6">
                            <div class="w-full gap-5">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Title</label>
                                    <input type="text" value="{{ $current_hero_text->title }}" name="title" class=" w-full md:w-1/2 border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="w-full gap-5 mt-4">
                                <div class="w-full flex flex-col items-start">
                                    <label for="">Description</label>
                                    <textarea name="description" cols=" 30" rows="5" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 ">{{ $current_hero_text->description }}</textarea>
                                    <span class="danger">@error('description'){{ $message }} @enderror</span>

                                </div>

                            </div>

                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                                text-gray-100
                                                focus:outline-dashed
                                                bg-primary

                                                hover:bg-secondary
                                                hover:text-white">
                                Save
                            </button>

                    </form>
                </div>

                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_journey') }}" enctype="multipart/form-data">
                        @csrf
                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                The Journey Begins With A Pitchathon!
                            </h3>
                        </div>


                        <div class="mt-6">
                            <div class="w-full gap-5">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Title</label>
                                    <input type="text" value="{{ $current_journey->title }}" name="title" class="w-full md:w-1/2 border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="w-full gap-5  mt-4 flex-col md:flex">
                                <div class="w-full flex flex-col items-start">
                                    <label for="">Old Image</label>
                                    <img src="/updates/{{$current_journey->image}}" alt="" width="400">
                                </div>

                                <div class="w-full flex flex-col items-start mt-4 md:mt-0">
                                    <label for="">New Image</label>
                                    <input type="file" value="" name="image" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('image'){{ $message }} @enderror</span>
                                </div>

                            </div>

                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                                text-gray-100
                                                focus:outline-dashed
                                                bg-primary

                                                hover:bg-secondary
                                                hover:text-white">
                                Save
                            </button>

                    </form>
                </div>


                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" id="mycountdown" method="POST" action="{{ url('admin/create_countDown') }}">
                        @csrf
                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                TIME COUNTDOWN
                            </h3>
                        </div>


                        <div class="mt-6">
                            <div class="w-full gap-5">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Countdown(Note:must be in this format eg Jul 5, 2023 11:59:59)</label>
                                    <input type="text" value="{{ $current_countdown->countDown }}" id="countDown" name="countDown" class=" w-full md:w-full border rounded px-3 py-3 focus:outline text-gray-700 " oninput="validateCountDown()" />
                                    <span class="danger">@error('countDown'){{ $message }} @enderror</span>
                                </div>
                            </div>



                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                                text-gray-100
                                                focus:outline-dashed
                                                bg-primary

                                                hover:bg-secondary
                                                hover:text-white">
                                Save
                            </button>

                    </form>
                </div>


                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_eligibility') }}" enctype="multipart/form-data">
                        @csrf
                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                ELIGIBILITY (WHO IS ELIGBLE)
                            </h3>
                        </div>


                        <div class="mt-6">
                            <div class="w-full gap-5">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Title</label>
                                    <input type="text" value="{{ $current_eligibility->title }}" name="title" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="w-full gap-5 flex mt-4">
                                <div class="w-full flex flex-col items-start">
                                    <label for="">Old Image</label>
                                    <!-- <input type="file" value="" name="image" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " /> -->
                                    <img src="/updates/{{$current_eligibility->image}}" alt="" width="120">
                                </div>

                                <div class="w-full flex flex-col items-start">
                                    <label for="">New Image</label>
                                    <input type="file" value="" name="image" class="w-full border rounded px-3 py-6 focus:outline text-gray-700 " />
                                    <span class="danger">@error('image'){{ $message }} @enderror</span>
                                </div>

                            </div>

                            <div class="w-full gap-5 mt-4">
                                <div class="w-full flex flex-col items-start">
                                    <label for="">Description</label>
                                    <textarea name="description" cols=" 30" rows="3" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 ">{{ $current_eligibility->description }}</textarea>
                                    <span class="danger">@error('description'){{ $message }} @enderror</span>

                                </div>

                            </div>

                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                                text-gray-100
                                                focus:outline-dashed
                                                bg-primary

                                                hover:bg-secondary
                                                hover:text-white">
                                Save
                            </button>

                    </form>
                </div>


                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_criteria') }}">
                        @csrf
                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                ELIGIBILITY AND SELECTION CRITERIA
                            </h3>
                        </div>


                        <div class="mt-6">

                            <div class="w-full gap-5 mt-4">
                                <div class="w-full flex flex-col items-start">
                                    <label for="">Focus Sector Text</label>
                                    <textarea name="focus_text" cols=" 30" rows="2" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 ">{{ $current_criteria->focus_text }}</textarea>
                                    <span class="danger">@error('focus_text'){{ $message }} @enderror</span>

                                </div>
                            </div>

                            <div class="w-full gap-5 flex-col  mt-4">
                                <div class="w-full flex flex-col items-start mt-4">
                                    <label for="" class="">Eligibility Criteria Title</label>
                                    <input type="text" value="{{ $current_criteria->eligibility_title }}" name="eligibility_title" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                </div>

                                <div class="w-full flex flex-col items-start mt-4">
                                    <label for="">Eligibility Description</label>
                                    <textarea name="eligibility_criteria" cols=" 30" rows="2" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 ">{{ $current_criteria->eligibility_criteria }}</textarea>

                                </div>
                            </div>

                            <div class="w-full gap-5 flex flex-col mt-4">

                                <div class="w-full flex-col items-start mt-4">
                                    <label for="" class="">Selection Criteria Title</label>
                                    <input type="text" value="{{ $current_criteria->selection_title }}" name="selection_title" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                </div>

                                <div class="w-full flex-col items-start mt-4">
                                    <label for="">Selection Description</label>
                                    <textarea name="selection_criteria" cols=" 30" rows="2" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 ">{{ $current_criteria->selection_criteria }}</textarea>
                                </div>
                            </div>

                            <div class="w-full flex flex-col items-start mt-4">
                                <label for="" class="">Learn More Button</label>
                                <input type="text" value="{{ $current_criteria->more_btn }}" name="more_btn" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                            </div>


                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                                text-gray-100
                                                focus:outline-dashed
                                                bg-primary

                                                hover:bg-secondary
                                                hover:text-white">
                                Save
                            </button>

                    </form>
                </div>


                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_timeline') }}" enctype="multipart/form-data">
                        @csrf
                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                TIMELINE (CREATE NEW TIMELINE)
                            </h3>
                        </div>


                        <div class="mt-6">
                            <div class="w-full gap-5">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Title</label>
                                    <input type="text" value="{{$current_timeline->title}}" name="title" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('title'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="w-full gap-5 mt-4 flex">
                                <div class="w-full flex flex-col items-start">
                                    <label for="">Old Image</label>
                                    <!-- <input type="file" value="" name="image" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " /> -->
                                    <img src="/updates/{{$current_timeline->image}}" alt="" width="60">
                                </div>

                                <div class="w-full flex flex-col items-start">
                                    <label for="">New Image</label>
                                    <input type="file" value="" name="image" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('image'){{ $message }} @enderror</span>
                                </div>

                            </div>

                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                                text-gray-100
                                                focus:outline-dashed
                                                bg-primary

                                                hover:bg-secondary
                                                hover:text-white">
                                Save
                            </button>

                    </form>
                </div>



                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_title') }}">
                        @csrf
                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                PAGE TITTLES
                            </h3>
                        </div>


                        <div class="mt-6">

                            <div class="w-full gap-5 mt-4">
                                <div class="w-full flex flex-col items-start">
                                    <label for="">Digital Solution Title</label>
                                    <input type="text" value="{{ $current_title->solultion_title }}" name="solultion_title" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('solution_title'){{ $message }} @enderror</span>

                                </div>
                            </div>

                            <div class="w-full gap-5 flex flex-col mt-4">
                                <div class="w-full flex flex-col items-start mt-4">
                                    <label for="" class="">Focus Sector Title</label>
                                    <input type="text" value="{{ $current_title->sector_title }}" name="sector_title" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('sector_title'){{ $message }} @enderror</span>
                                </div>

                                <div class="w-full flex flex-col items-start mt-4">
                                    <label for="" class="">Benefit Title</label>
                                    <input type="text" value="{{ $current_title->benefit_title }}" name="benefit_title" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('benefit_title'){{ $message }} @enderror</span>
                                </div>
                            </div>




                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                                text-gray-100
                                                focus:outline-dashed
                                                bg-primary

                                                hover:bg-secondary
                                                hover:text-white">
                                Save
                            </button>

                    </form>
                </div>


                <div class="mt-4" style="width: 100%; height:3px; background: red;">

                </div>

                <div>
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_footer') }}">
                        @csrf
                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                CREATE FOOTER
                            </h3>
                        </div>


                        <div class="mt-6">
                            <div class="w-full gap-5 flex flex-col justify-around">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Email</label>
                                    <input type="email" value="{{ $current_footer->email }}" name="email" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('email'){{ $message }} @enderror</span>
                                </div>

                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Location</label>
                                    <input type="text" value="{{ $current_footer->location }}" name="location" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('location'){{ $message }} @enderror</span>
                                </div>

                            </div>

                            <div class=" justify-center mt-6">
                                <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                    POSTAL ADDRESS
                                </h3>
                            </div>

                            <div class="w-full gap-5 flex flex-col justify-around mt-6">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">GIZ - Country</label>
                                    <input type="text" value="{{ $current_footer->giz }}" name="giz" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('giz'){{ $message }} @enderror</span>
                                </div>

                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Postal Adrress</label>
                                    <input type="text" value="{{ $current_footer->postal_address }}" name="postal_address" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('postal_address'){{ $message }} @enderror</span>
                                </div>

                            </div>

                            <div class="w-full gap-5 flex flex-col justify-around mt-6">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">PO-BOX</label>
                                    <input type="text" value="{{ $current_footer->po_box }}" name="po_box" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('po_box'){{ $message }} @enderror</span>
                                </div>

                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">City</label>
                                    <input type="text" value="{{ $current_footer->city }}" name="city" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('city'){{ $message }} @enderror</span>
                                </div>

                            </div>

                            <div class="w-full gap-5 flex justify-around mt-6">
                                <div class="w-full flex flex-col items-start">
                                    <label for="" class="">Copyright</label>
                                    <input type="text" value="{{ $current_footer->copyright }}" name="copyright" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 " />
                                    <span class="danger">@error('city'){{ $message }} @enderror</span>
                                </div>
                            </div>

                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                                text-gray-100
                                                focus:outline-dashed
                                                bg-primary

                                                hover:bg-secondary
                                                hover:text-white">
                                Save
                            </button>

                    </form>
                </div>
            </div>

        </div>
    </main>

    <script>
        function validateThemeColor(input) {
            // Get the input value
            const value = input.value.trim();

            // Regular expression pattern for theme color validation
            const pattern = /^#[a-fA-F0-9]{6}$/;

            // Check if the value matches the pattern
            if (pattern.test(value)) {
                input.setCustomValidity(''); // Valid input, clear any previous error message
            } else {
                input.setCustomValidity('Invalid theme color'); // Invalid input, set error message
            }
        }


        function validateSecColor(input) {
            // Get the input value
            const value = input.value.trim();

            // Regular expression pattern for theme color validation
            const pattern = /^#[a-fA-F0-9]{6}$/;

            // Check if the value matches the pattern
            if (pattern.test(value)) {
                input.setCustomValidity(''); // Valid input, clear any previous error message
            } else {
                input.setCustomValidity('Invalid theme color'); // Invalid input, set error message
            }
        }

        // function validateCountDown(input) {
        //     // Get the input value
        //     const value = input.value.trim();

        //     // Regular expression pattern for count down validation
        //     const pattern = /^([a-zA-Z]{3}\s\d{1,2},\s\d{4}\s\d{2}:\d{2}:\d{2})$/;

        //     // Check if the value matches the pattern
        //     if (pattern.test(value)) {
        //         input.setCustomValidity(''); // Valid input, clear any previous error message
        //     } else {
        //         input.setCustomValidity('Invalid Date format'); // Invalid input, set error message
        //     }
        // }


        // Add event listener to the form submit event
        document.getElementById('mycountdown').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Get the countDown input value
            const countDownInput = document.getElementById('countDown');
            const countDownValue = countDownInput.value.trim();

            // Perform client-side validation
            const dateRegex = /^(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec) \d{1,2}, \d{4} \d{1,2}:\d{2}:\d{2}$/;
            const isValidDate = dateRegex.test(countDownValue);

            if (!isValidDate) {
                // Display error message to the user
                countDownInput.setCustomValidity('Invalid Date format');
                countDownInput.reportValidity();
            } else {
                // Clear error message
                countDownInput.setCustomValidity('');
                countDownInput.reportValidity();
                // Proceed with form submission
                event.target.submit();
            }
        });
    </script>

</section>



@endsection