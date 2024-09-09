@extends('layouts.login')
@section('title')
Password Reset
@endsection
@section('content')

<!-- password reset section starts here   -->

<div class="container">
    <div class="w-full h-screen flex items-center justify-center
                    ">
        <form class="max-w-lg mx-auto w-3/4" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            <div class="justify-center ">
                <h3 class="text-center md:text-3xl text-primary text-xl font-medium">
                    Password Reset
                </h3>
                <p class="text-center pt-3 font-light text-gray-400">
                    Input your New Password Below
                </p>
            </div>
            <div class="w-full mt-6">
                <div class="flex items-center rounded">
                    <input type="email" placeholder="Email Address" class=" form-control @error('email') is-invalid @enderror w-full border rounded px-3 py-2  text-gray-700 focus:outline" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                </div>
                @error('email')
                <span class="text-xs text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="w-full mt-6">
                <div class="flex items-center rounded relative">
                    <input id="password-input-1" type="password" placeholder="New password" class="form-control @error('password') is-invalid @enderror w-full border rounded px-3 py-2
                                    text-gray-700
                                    focus:outline" name="password" required autocomplete="new-password">

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
                @error('password')
                <span class="text-xs text-red-500" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="w-full mt-6">
                <div class="flex items-center rounded relative">
                    <input id="password-input-2" type="password" placeholder="Confirm New Password" class="w-full border rounded px-3 py-2
                                            text-gray-700
                                            focus:outline" name="password_confirmation" required autocomplete="new-password">
                    <div class="absolute inset-y-0 right-0 pr-3
                                            flex items-center
                                            text-gray-700">
                        <svg class="h-6 w-6 cursor-pointer
                                                toggle-password" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0
                                                    000 4z" />
                            <path fill-rule="evenodd" d="M10
                                                        3c-3.866 0-7 3.134-7
                                                        7s3.134 7 7 7 7-3.134
                                                        7-7-3.134-7-7-7zm0 12a5 5 0
                                                        110-10 5 5 0 010 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>


            <button type="submit" class="w-full py-2 mt-8 rounded
                                            text-white
                                            hover:bg-red-500
                                            focus:outline-none
                                            bg-primary
                                            ">
                Reset Password
            </button>

        </form>
    </div>

</div>
<!-- password reset section ends here   -->
@endsection
