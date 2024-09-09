@extends('layouts.admin')
@section('title')
Welcome admin
@endsection
@section('content')




<!-- Main section  -->
<section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
    <style>
        .danger {
            color: red !important;
        }

        label {
            font-weight: 800;
        }
    </style>
    <main class="w-full grid lg:grid-cols-1 md:grid-cols-1 gap-3 mb-10 lg:pt-8 lg:pr-8 md:pr-2 pr-1" data-aos="fade-up" data-aos-duration="1000">


        <!-- create questions and answers  -->

        <div class="md:mt-20 mt-0 w-full" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; padding: 0px 30px 40px">

            <div class="w-full  items-center justify-center">
                <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/update_faq', $data->id) }}">
                    @csrf
                    <div class=" justify-center mt-6">

                        <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                            FAQ
                        </h3>
                        <p class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-4 md:mt-0">Update Questions and Answers</p>
                    </div>


                    <div class="mt-6">
                        <div class="w-full gap-5">
                            <div class="w-full flex flex-col items-start">
                                <label for="" class="">Question</label>
                                <input type="text" value="{{ $data->question }}" name="question" class="w-full md:w-1/2 border rounded px-3 py-3 focus:outline text-gray-700 " />
                                <span class="danger">@error('question'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="w-full gap-5 mt-4">
                            <div class="w-full flex flex-col items-start">
                                <label for="">Answers</label>
                                <textarea name="answer" cols=" 30" rows="3" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 "> {{ $data->answer }} </textarea>
                                <span class="danger">@error('answer'){{ $message }} @enderror</span>

                            </div>

                        </div>

                        <button type="submit" value="Submit" class="w-full py-3 mt-5 rounded text-white
                                            text-gray-100
                                            focus:outline-dashed
                                            bg-primary

                                            hover:bg-secondary
                                            hover:text-white">
                            Update
                        </button>

                </form>
            </div>
        </div>

    </main>

</section>



@endsection