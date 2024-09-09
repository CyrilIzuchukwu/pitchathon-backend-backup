
@extends('layouts.login')

@section('content')

    <!-- forget password starts here  -->

    <div class="container md:mt-20 mt-10">
        <div class="w-full h-screen flex items-center -mt-28
                justify-center">
            <form class="max-w-lg mx-auto " method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="justify-center mt-6">
                    <h3 class="text-center md:text-3xl text-xl text-primary font-medium">
                        Forgot password
                    </h3>
                    @if (session('status'))
                    <div class="text-center pt-3 font-light text-gray-400" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                </div>
                <div class="w-full mt-6">
                    <div class="flex items-center rounded">
                        <input type="email" placeholder="Email Address" class="w-full border rounded px-3 py-2  text-gray-700 focus:outline" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                    <span class="text-xs text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>


                <button type="submit" class="w-full py-2 mt-8 rounded text-gray-100
                        focus:outline-none hover:bg-secondary
                        hover:text-white
                        bg-primary">
                        {{ __('Send Password Reset Link') }}
                </button>

            </form>
        </div>

    </div>
    <!--End of forget password  -->
@endsection
