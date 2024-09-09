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

        <div class="md:mt-20 mt-0">
            <div class="w-full  items-center
                justify-center">
                <form class="max-w-lg mx-auto xs:mt-20 w-3/4 mb-6 max-h-full" method="POST" action="{{ url('adminregister') }}">
                    @csrf
                    <div class="justify-center mt-6">
                        <h3 class="text-center md:text-3xl capitalize text-xl text-primary font-medium mt-10 md:mt-0">
                            Create Reviewers and Jury
                        </h3>
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


                                <span id="emailError" class="text-xs text-red-500">
                                    <strong>@error('email'){{ $message }} @enderror</strong>
                                </span>

                            </div>
                        </div>
                        <div class="w-full mt-6">
                            <label class="block text-primary mb-2 ml-3 ">Role</label>
                            <select onchange="toggleOtherInputx(this)" name="role_as" class="shadow border-none rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary">
                                <option value="">Select</option>
                                <option value="4">Reviewer</option>
                                <option value="3">Jury</option>
                            </select>
                            @error('role')
                            <span class="text-xs text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="w-full mt-6">
                            <div class="flex items-center relative">
                                <input id="password" type="password" placeholder="Password" id="password" name="password" oninput="validateForm()" class="w-full border rounded px-3 py-2 text-gray-700 focus:outline" name="password" required autocomplete="new-password">
                                <div style="margin-left: -55px;" class="right-4 text-primary text-xl top-2.5 cursor-pointer" id="pswdEye1">
                                    <i class="ph-light ph-eye-closed"></i>
                                    <i class="ph-light ph-eye" style="display: none;"></i>
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
                                <input id="confirmPassword" type="password" placeholder="Confirm Password" id="confirmPassword" oninput="validateForm()" class="w-full border rounded px-3
                                            py-2
                                            text-gray-700 focus:outline" name="password_confirmation" required autocomplete="new-password">
                                <div style="margin-left: -55px;" class="right-4 text-primary text-xl top-2.5 cursor-pointer" id="pswdEye2">
                                    <i class="ph-light ph-eye-closed"></i>
                                    <i class="ph-light ph-eye" style="display: none;"></i>
                                </div>
                            </div>

                        </div>

                        <br />
                        <button type="submit" value="Submit" class="w-full py-2 mt-8 rounded text-white
                                            text-gray-100
                                            focus:outline-dashed
                                            bg-primary

                                            hover:bg-secondary
                                            hover:text-white">
                            Register
                        </button>


                    </div>

                </form>
                <script>
                    // Show & Hide Password
                    const passwordEye1 = document.getElementById("pswdEye1"),
                        passwordEye2 = document.getElementById("pswdEye2"),
                        password = document.getElementById("password"),
                        confirmPassword = document.getElementById("confirmPassword");

                    //icons
                    const iconClose1 = passwordEye1.querySelector(".ph-eye-closed"),
                        iconOpen1 = passwordEye1.querySelector(".ph-eye"),
                        iconClose2 = passwordEye2.querySelector(".ph-eye-closed"),
                        iconOpen2 = passwordEye2.querySelector(".ph-eye");

                    //for Password
                    passwordEye1.addEventListener("click", () => {
                        if (password.type === "password") {
                            password.type = "text";
                            iconClose1.style.display = "none";
                            iconOpen1.style.display = "inline-block";
                        } else if (password.type === "text") {
                            password.type = "password";
                            iconClose1.style.display = "inline-block";
                            iconOpen1.style.display = "none";
                        }
                    });
                    //
                    passwordEye2.addEventListener("click", () => {
                        if (confirmPassword.type === "password") {
                            confirmPassword.type = "text";
                            iconClose2.style.display = "none";
                            iconOpen2.style.display = "inline-block";
                        } else if (confirmPassword.type === "text") {
                            confirmPassword.type = "password";
                            iconClose2.style.display = "inline-block";
                            iconOpen2.style.display = "none";
                        }
                    });
                </script>
            </div>

        </div>

        <!-- Reviewer Profile-->

        <div class=" mt-10 gap-6 flex-col flex ">
            <h1 class="text-gradient md:text-xl text-base font-medium">Reviewers</h1>
            @forelse ($btc as $item)
            <div class="flex items-center justify-start gap-6">
                <div class="flex md:flex-row flex-col
                                                    items-start
                                                    md:items-center
                                                    md:justify-center gap-3 ">

                    <p class="text-base text-primary">


                        @if(isset($item->review->name))
                        {{ $item->review->name }}
                        @else
                        This reviewer has been deleted
                        @endif
                    </p>

                    @if(isset($item->review->id))


                    <div class="flex items-center
                                                        justify-center gap-3">

                        <a href="{{ url('userManagements/' . $item->review->id) }}" class="px-3 bg-primary p-1 text-white
                                                            rounded">Reviewed
                            Solutions</a>
                        @if($item->review->status == 1) {{-- <!--disenable-->--> --}}
                        <a onclick="checker1()" href="{{route('users.update.status',['user_id' => $item->review->id,'status'=> 0 ])}}"><i class="ph ph-eye text-xl"></i></a>
                        <script>
                            function checker1() {
                                var result = confirm('Are you sure you want to restrict this Reviewer?');
                                if (result == false) {
                                    event.preventDefault();
                                }
                            }
                        </script>
                        @else {{-- <!--enable-->--> --}}
                        <a onclick="checker11()" href="{{route('users.update.status',['user_id' => $item->review->id,'status'=> 1 ])}}"><i class="ph ph-eye-slash text-xl"></i></a>
                        <script>
                            function checker11() {
                                var result = confirm('Are you sure you want to enable this Reviewer');
                                if (result == false) {
                                    event.preventDefault();
                                }
                            }
                        </script>
                        @endif

                        <!--<a onclick="checker()" href ="{{url('admin/delete-reviewer/'. $item->review->id)}}"><i class="ph ph-trash text-secondary text-xl"></i></a>-->
                        <a onclick="checker()" href="{{route('users.update.deleted_at',['user_id' => $item->review->id,'deleted_at'=> 'delete' ])}}"><i class="ph ph-trash text-secondary text-xl"></i></a>
                    </div>

                    @else

                    <a onclick="checker11111()" href="{{url('admin/restore')}}"><i class="ph ph-clock-clockwise text-xl"></i></a>
                    @endif
                </div>
            </div>

            @empty
            <tr>
                <td colspan="7">No Reviewers yet</td>
            </tr>
            @endforelse


            {{ $btc->links('pagination::tailwind') }}
        </div>



        <!-- Juries  -->



        <div class=" mt-20 gap-6 flex-col flex md:w-10/12
                                            w-full">
            <h1 class="text-secondary text-xl
                                                font-bold">Juries</h1>
            @forelse ($btcs as $item)
            <div class="flex items-center justify-start gap-6">
                <div class="flex md:flex-row flex-col
                                                    items-start
                                                    md:items-center
                                                    md:justify-center gap-3 ">

                    <p class="text-base text-primary"> @if(isset($item->review->name))
                        {{ $item->review->name }}
                        @else
                        This Jury has been deleted
                        @endif
                    </p>
                    @if(isset($item->review->id))
                    <div class="flex items-center
                                                        justify-center gap-3">

                        <a href="{{ url('userManagementss/' . $item->review->id) }}" class="px-3 bg-primary p-1 text-white
                                                            rounded">Reviewed
                            Solutions</a>

                        @if($item->review->status1 == 1) {{-- <!--disenable-->--> --}}

                        <a onclick="checker1111111()" href="{{route('users.updates.status',['user_id' => $item->review->id,'status1'=> 0 ])}}"><i class="ph ph-eye text-xl"></i></a>
                        @else {{-- <!--enable-->--> --}}
                        <a onclick="checker11111111()" href="{{route('users.updates.status',['user_id' => $item->review->id,'status1'=> 1 ])}}"><i class="ph ph-eye-slash text-xl"></i></a>
                        @endif
                        <!--<a onclick="checker111()" href ="#"><i class="ph ph-trash text-secondary text-xl"></i></a>-->
                        <a onclick="checker()" href="{{route('users.update.deleted_at',['user_id' => $item->review->id,'deleted_at'=> 'delete' ])}}"><i class="ph ph-trash text-secondary text-xl"></i></a>

                    </div>
                    @else

                    <a onclick="checker11111()" href="{{url('admin/restore')}}"><i class="ph ph-clock-clockwise text-xl"></i></a>
                    @endif
                </div>
            </div>

            @empty
            <tr>
                <td colspan="7">No Jury yet</td>
            </tr>
            @endforelse
            {{ $btcs->links('pagination::tailwind') }}
        </div>

    </main>
</section>
<script>
    function checker() {
        var result = confirm('Are you sure you want to delete this Reviewer');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>
<script>
    function checker111() {
        var result = confirm('Are you sure you want to delete this Jury');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>
<script>
    function checker11111() {
        var result = confirm('Are you sure you want to view the trashed');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>
<script>
    function checker1111111() {
        var result = confirm('Are you sure you want to disable this Jury');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>
<script>
    function checker11111111() {
        var result = confirm('Are you sure you want to enable this Jury');
        if (result == false) {
            event.preventDefault();
        }
    }
</script>
@endsection