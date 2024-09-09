@extends('layouts.admin')
@section('title')
    Welcome admin
@endsection
@section('content')

            <!-- Main section  -->
            <section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
                <!-- Notifications -->

                <div
                    class="w-full flex flex-col items-center gap-7 mb-11 md:mb-20 lg:mb-0 lg:my-8 my-4 lg:pr-8 md:pr-2 pr-1">
                    <h1 class="text-center font-medium md:text-2xl text-xl mt-4 text-primary" data-aos="fade-up"
                        data-aos-duration="1000">Notifications</h1>

                    <form method="POST" action="/admin/notificationx" class="md:w-3/4 w-full flex flex-col gap-8" data-aos="fade-up"
                        data-aos-duration="1000">
                        @csrf
                        <!-- Role to notify  -->
                        <div class="w-full">
                            <label for="role" class="block text-primary mb-2 ml-3 ">Select Which Role to Notify
                            </label>
                            <select name="role"
                                class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 text-primary leading-tight focus:outline focus:outline-primary">
                                <option value="">Select</option>
                                <option value="0">Applicant</option>
                                <option value="4">Reviewer</option>
                                <option value="3">Jury</option>
                            </select>
                        </div>

                        <!-- Notification Message  -->
                        <div class="w-full">
                            <label for="message" class="block text-primary mb-2 ml-3 ">Notification Message
                            </label>
                            <textarea name="message" cols="30" rows="10" placeholder="Write your message here..."
                                class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 text-primary leading-tight focus:outline focus:outline-primary"></textarea>
                        </div>

                        <div class="w-full">
                            <button type="submit"
                                class="px-5 py-2 flex items-center gap-2 bg-primary transition-all duration-300 hover:bg-secondary text-white text-base font-light rounded-lg">Send<i
                                    class="ph-light ph-paper-plane-tilt"></i></button>
                        </div>
                    </form>
                </div>
  @endsection

            </section>