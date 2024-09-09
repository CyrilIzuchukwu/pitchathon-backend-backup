@extends('layouts.login')

@section('content')

    <!-- Login form  -->
          
       <!-- Login form  -->

    <div class="md:mt-20 mt-0">
        <div class="w-full h-screen flex items-center
                justify-center">
            <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" name="myForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="justify-center mt-6">
                    <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                        Hi, Welcome back
                    </h3>
                    <p class="text-center pt-3 font-light text-gray-400">
                        Enter your details below
                    </p>
                </div>
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
                <div class="flex justify-center gap-3 mt-2 mb-4">
                    <div class="w-1/2 -pt-4 border-b font-semibold
                            border-gray-500"></div>
                    <div class="w-1/2 border-b font-semibold
                            border-gray-400"></div>
                </div>
                <div class="w-full mt-6">
                    <div class="flex items-center rounded">
                    <input type="email" placeholder="Email Address" class=" form-control @error('email') is-invalid @enderror w-full border rounded px-3 py-2 text-gray-700 focus:outline-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
               
                    </div>

                </div>

                <div class="w-full mt-6">
                    <div class="flex items-center relative">
                        <input id="password-input-1" type="password" placeholder="Password" class="w-full border rounded px-3 py-2
                                text-gray-700
                                focus:outline-none" name="password" required autocomplete="current-password">
                        <div class="absolute inset-y-0 right-0 pr-3 flex
                                items-center
                                text-gray-700">
                            <svg class="h-6 w-6 cursor-pointer
                                    toggle-password" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                <path fill-rule="evenodd" d="M10
                                            3c-3.866 0-7 3.134-7
                                            7s3.134 7 7 7 7-3.134
                                            7-7-3.134-7-7-7zm0 12a5 5 0 110-10 5
                                            5 0 010 10z" clip-rule="evenodd" />
                            </svg>
                        </div>

                    </div>
                    <div class="flex justify-end mt-2">
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            <p class="flex
                                            justify-end text-sm text-secondary
                                            font-medium">
                                Forgot password?
                            </p>
                        </a>
                        @endif
                    </div>

                </div>
                <button type="submit" class="w-full py-2 mt-8 rounded
                                text-gray-100
                                bg-primary
                                focus:outline-none
                                hover:bg-secondary
                                hover:text-white login-hover">
                    Log in
                </button>


        </div>
        </form>
    </div>
    <!-- End of Login form  -->
@endsection
