@extends('layouts.login')
@section('title')
Registration_form
@endsection
@section('content')

<!-- Login form  -->

<div style="margin-top: 150px;" class="md:mt-36">
    <div class="w-full items-center
                justify-center">
        <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="justify-center mt-6">
                <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                    Get Started with Techmybiz
                </h3>
                <p class="text-center pt-3 font-light text-gray-400">
                    Enter your personal details below
                </p>
            </div>
            @if ($errors->any())
            <div class="text-red-500" id="demo">
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
            <div class="flex justify-center gap-3 mt-2 mb-4">
                <div class="w-1/2 -pt-4 border-b font-semibold
                            border-gray-500"></div>
                <div class="w-1/2 border-b font-semibold
                            border-gray-400"></div>
            </div>
            <div class="mt-6">
                <div class="w-full gap-3 flex justify-around">
                    <div class="w-full flex items-center">
                        <input type="text" placeholder="Name" id="firstName" required name="name" oninput="validateForm()" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline" />

                        @error('name')
                        <span id="firstNameError" class="text-xs text-red-500">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="w-full flex items-center">
                        <input type="email" placeholder="Email Address" id="email" required name="email" oninput="validateForm()" class="w-full border rounded px-3 py-2 focus:outline text-gray-700 " />

                        @error('email')
                        <span id="emailError" class="text-xs text-red-500">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div style="display:none" class="w-full mt-6">
                    <label class="block text-primary mb-2 ml-3 ">Role</label>
                    <select onchange="toggleOtherInputx(this)" name="role" class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                        <option value="applicant">Applicant</option>
                        <!--<option value="reviewer">Reviewer</option>-->
                        <!--<option value="3">Jury</option>-->
                    </select>
                    @error('role')
                    <span class="text-xs text-red-500">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--<div class="w-full mt-6" id="otherInputx" style="display:none;">-->
                <!--        <input type="number" placeholder="Code" name="code" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline" />-->

                <!--        @error('code')-->
                <!--        <span class="text-xs text-red-500">-->
                <!--            <strong>{{ $message }}</strong>-->
                <!--        </span>-->
                <!--        @enderror-->
                <!--    </div>-->
                <script>
                    // function toggleOtherInputx(selectElement) {
                    //     var otherInput = document.getElementById("otherInputx");
                    //     if (selectElement.value == "reviewer") {
                    //         otherInputx.style.display = "block";
                    //     }
                    //     else if(selectElement.value == "3"){
                    //         otherInputx.style.display = "block";
                    //     }
                    //     else {
                    //         otherInputx.style.display = "none";
                    //     }
                    // }
                </script>
                <div class="w-full mt-6">
                    <div class="flex items-center relative">
                        <input id="password-input-1" type="password" placeholder="Password" id="password" name="password" oninput="validateForm()" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline" name="password" required autocomplete="new-password">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-700">
                            <svg class="h-6 w-6 cursor-pointer
                                        toggle-password" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000
                                            4z" />
                                <path fill-rule="evenodd" d="M10
                                                3c-3.866 0-7 3.134-7 7s3.134 7 7
                                                7
                                                7-3.134 7-7-3.134-7-7-7zm0 12a5
                                                5 0
                                                110-10 5 5 0 010 10z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    @error('password')
                    <span id="passwordError" class="text-xs text-red-500">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="w-full mt-6">
                    <div class="flex items-center relative">
                        <input id="password-input-2" type="password" placeholder="Confirm Password" id="confirmPassword" oninput="validateForm()" class="w-full border rounded px-3
                                            py-2
                                            text-gray-700 focus:outline" name="password_confirmation" required autocomplete="new-password">
                        <div class="absolute inset-y-0 right-0
                                            pr-3
                                            flex items-center text-gray-700">
                            <svg class="h-6 w-6 cursor-pointer
                                                toggle-password" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2
                                                    0
                                                    000 4z" />
                                <path fill-rule="evenodd" d="M10
                                                        3c-3.866 0-7 3.134-7
                                                        7s3.134
                                                        7 7 7 7-3.134
                                                        7-7-3.134-7-7-7zm0 12a5
                                                        5 0
                                                        110-10 5 5 0 010 10z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                </div>
                <button type="submit" value="Submit" class="w-full py-2 mt-8 rounded
                                            text-gray-100
                                            focus:outline-dashed
                                            bg-primary

                                            hover:bg-secondary
                                            hover:text-white login-hover">
                    Register
                </button>
                <p class=" text-base my-3 inline-flex gap-2">
                    Already have an account?
                    <span class="text-primary"><a href="/login">login</a>
                    </span>
                </p>
                <div class="mt-4 w-full flex
                                            justify-center
                                            text-center pb-6">
                    <p class="md:font-medium 
                                                text-center text-sm">
                        By Signing up, I agree to
                        Techmybiz
                        <span class="
                                                    text-primary
                                                    font-medium text-sm"><a href=""><span>
                                    Terms of
                                    service
                            </a></span> and <span class="
                                                        text-primary text-sm
                                                        font-medium"><a href="">privacy
                                policy</a></span>
                    </p>
                </div>

            </div>

        </form>
    </div>

</div>
<!-- End of Login form  -->
@endsection