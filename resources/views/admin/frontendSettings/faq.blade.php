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
                <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('admin/create_faq') }}">
                    @csrf
                    <div class=" justify-center mt-6">

                        <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                            FAQ
                        </h3>
                        <p class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-4 md:mt-0">Create Questions and Answers</p>
                    </div>


                    <div class="mt-6">
                        <div class="w-full gap-5">
                            <div class="w-full flex flex-col items-start">
                                <label for="" class="">Question</label>
                                <input type="text" value="" name="question" class="w-full md:w-1/2 border rounded px-3 py-3 focus:outline text-gray-700 " />
                                <span class="danger">@error('question'){{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="w-full gap-5 mt-4">
                            <div class="w-full flex flex-col items-start">
                                <label for="">Answers</label>
                                <textarea name="answer" cols=" 30" rows="3" class="w-full border rounded px-3 py-3 focus:outline text-gray-700 ">  </textarea>
                                <span class="danger">@error('answer'){{ $message }} @enderror</span>

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

    </main>


    <div class="" style=" width: 97%; margin-bottom: 70px; box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; padding: 0px 30px 40px; margin-top:-30px">


        <div class="w-full  items-center justify-center">
            <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                List of Questions and Answers
            </h3>
        </div>

        <div class="mt-6 overflow-x-auto">
            <div class="w-full relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                S/N
                            </th>
                            <th scope="col" class="px-6 py-3">
                                QUESTIONS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ANSWERS
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cnt = 1;
                        ?>
                        @foreach($faqs as $faq)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $cnt ?>.
                            </th>
                            <td class="px-6 py-4">
                                {{ ucfirst( $faq->question) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ ucfirst($faq->answer) }}
                            </td>
                            <td class="flex items-center gap-2 px-6 py-4 space-x-3">
                                <a onclick="return confirm('Confirm Edit')" href="{{ url('admin/edit_faq', $faq->id) }}" class="font-medium text-white dark:text-blue-500  px-4 py-2 bg-primary rounded-lg hover:text-decoration-none">Edit</a>



                                <a onclick="return confirm('Are you sure you want to delete')" href="{{ url('admin/deleteFaq', $faq->id) }}" class="font-medium text-white  px-4 py-2 rounded-lg" style="background-color: #ff0000;">Delete</a>


                            </td>
                        </tr>
                        <?php
                        $cnt = $cnt + 1;
                        ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>








</section>



@endsection