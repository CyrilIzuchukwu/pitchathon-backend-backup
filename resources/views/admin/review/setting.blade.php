@extends('layouts.review')
@section('title')
    Profile_Update
@endsection
@section('content')

<!-- Main section  -->
<section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start lg:p-0 p-4 gap-8 ">
    <!-- Profile Form -->
    <div class="flex justify-center items-center w-full lg:mt-8 mt-4">
        <h1 class="lg:text-2xl text-base font-medium text-primary">Update Profile</h1>
    </div>
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
  <main class="w-full flex lg:flex-row flex-col pt-4 justify-center items-center lg:justify-start lg:items-start">
    <form class="w-full mb-4" action="{{ url('Review/settings1') }}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="col-span-3 flex flex-col md:px-12 px-3 md:gap-6 gap-8 w-full">
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Old Password <span class="text-secondary">*</span></label>
                <input
                    class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                    type="password" name="oldpassword"  />
                @error('name')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">New password <span class="text-secondary">*</span></label>
                <div class="flex items-center relative">
                <input id="password" class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                    type="password" name="password"  />
                     <div style="margin-left: -55px;" class="right-4 text-primary text-xl top-2.5 cursor-pointer"
                                            id="pswdEye1">
                        <i class="ph-light ph-eye-closed"></i>
                        <i class="ph-light ph-eye" style="display: none;"></i>
                    </div>
                </div>
                @error('password')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="w-full">
                <label class="block text-primary mb-2 ml-3 ">Confirm New password <span class="text-secondary">*</span></label>
                <div class="flex items-center relative">
                <input id="confirmPassword" class="shadow border-none text-primary rounded-md w-full py-3 px-3 bg-gray-100 leading-tight focus:outline focus:outline-primary"
                    type="password" name="password_confirmation"  />
                    <div style="margin-left: -55px;" class="right-4 text-primary text-xl top-2.5 cursor-pointer"
                                            id="pswdEye2">
                                            <i class="ph-light ph-eye-closed"></i>
                                            <i class="ph-light ph-eye" style="display: none;"></i>
                                        </div>
                </div>
                @error('name="password_confirmation"')
                    <p class="text-secondary mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="w-full mt-6 mb-12">
                <button type="submit"
                    class="outline-none p-2.5 border-none text-white bg-primary px-6 py-2 rounded-md transition-all duration-300 hover:bg-secondary">Update
                </button>
            </div>



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
</main>
</section>




@endsection