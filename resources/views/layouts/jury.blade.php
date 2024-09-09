<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitcthaton</title>
    <link href="{{ asset('jury/css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="{{ asset('css/animation.css')}}">
            <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <!-- General wrapper  -->
    <div class="wrapper font-poppin">

        <!-- Top Navbar section  -->
        <!-- inc -->
         @include('layouts.inc.jury.header')
 <!-- inc -->
        <main class="w-full h-auto lg:grid lg:grid-cols-6 flex flex-col gap-8 mt-24">
            <!-- Side Navbar  -->
             <!-- inc -->
              @include('layouts.inc.jury.sidebar')
 <!-- inc -->
 <!-- yield content -->
            <!-- Main section  -->
@yield('content')
<!-- yield content -->

        </main>
         <!-- inc -->
        <footer class="w-full flex items-center justify-center py-4 bg-primary">
            <p class="text-center text-sm text-white">DTC Nigeria &copy; 2023. All Rights Reserved</p>
        </footer>
 <!-- inc -->




    </div>

<script src="{{ asset('jury/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        const modal = document.getElementById('defaultModal');
        window.onload = () => {
            modal.style.display = "flex";
            document.body.style.overflow = "hidden";
        }
    </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('scripts')
    @if (session('message'))
        <script>
            swal("Good job!", "{{ session('message') }}!", "success");
        </script>
    @endif
    @if (session('error'))
        <script>
            swal("Error!", "{{ session('error') }}!", "warning");
        </script>
    @endif
</body>

</html>