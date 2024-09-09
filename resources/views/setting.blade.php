@extends('layouts.setting')

@section('content')

<!-- Main section  -->
<section class="lg:col-span-5 w-full h-screen lg:w-auto flex flex-col items-center lg:p-0 py-4 px-8 gap-8 lg:mb-8 mb-4">
    <!-- Reviews -->
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
    <div class="flex justify-center items-center w-full lg:mt-8 mt-4">
        <h1 class="lg:text-xl text-base font-medium text-primary">Change Password</h1>
    </div>

    <main class="lg:w-4/5 w-full">
        <form class="w-full flex flex-col gap-7" action="{{ url('settings') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Current Password  -->
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Current Password</label>
                <input type="password" name="oldpassword" placeholder="Your Current Password" class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                @error('oldpassword')
                <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- New Password  -->
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">New Password</label>
                <input type="password" name="password" placeholder="Your New Password" class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                @error('password')
                <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm New Password  -->
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Confirm New Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm New Password" class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                @error('password')
                <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full mt-6">
                <button type="submit" class="outline-none border-none text-white bg-primary px-6 py-2 rounded-md transition-all duration-300 hover:bg-secondary">Update
                    Password</button>
            </div>
        </form>
    </main>

</section>
@endsection