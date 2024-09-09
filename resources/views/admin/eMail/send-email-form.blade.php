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
                    <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('send_email') }}">
                        @csrf

                        <div class=" justify-center mt-6">
                            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                                SEND EMAIL
                            </h3>
                        </div>


                        <div class="mt-6">

                            <div class="w-full gap-5 flex flex-col md:grid md:grid-cols-2 justify-center ">

                                <div class="w-full flex flex-col items-start mt-3">

                                    <label for="">Email</label>
                                    <input type="email" placeholder="Email" name="email" class="w-full border rounded px-3 py-3 focus:outline" />
                                </div>

                                <div class="w-full flex flex-col items-start mt-3">

                                    <label for="">Subject</label>
                                    <input type="text" placeholder="title" name="title" class="w-full border rounded px-3 py-3 focus:outline" />

                                </div>

                                <div class="w-full flex flex-col items-start">
                                    <label for="">Message</label>
                                    <textarea name="message" cols=" 30" rows="3" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 "></textarea>

                                </div>

                            </div>

                            <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                            text-gray-100
                                            focus:outline-dashed
                                            bg-primary

                                            hover:bg-secondary
                                            hover:text-white">
                                Send Email
                            </button>

                    </form>

                </div>

            </div>

        </div>
    </main>
</section>



@endsection