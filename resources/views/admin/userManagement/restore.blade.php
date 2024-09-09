
@extends('layouts.admin')
@section('title')
    Welcome admin
@endsection
@section('content')




    <!-- Main section  -->
    <section class="lg:col-span-5 w-full lg:w-auto flex flex-col items-start pl-3 lg:pr-8 pr-3  gap-8">
        <!-- List of submitted solution -->
        <!-- Reviews   -->
        <main
            class="w-full grid lg:grid-cols-1 md:grid-cols-1 gap-3
                                        mb-10
                                        lg:pt-8 lg:pr-8 md:pr-2 pr-1"
            data-aos="fade-up" data-aos-duration="1000">

            <!-- Reviewer Profile-->

            <div class=" mt-10 gap-6 flex-col flex ">
                <h1 class="text-gradient md:text-xl text-base font-medium">Reviewers</h1>
                @forelse ($user as $item)
                               @if($item->role_as == 4)  
                    <div class="flex items-center justify-start gap-6">
                        <div
                            class="flex md:flex-row flex-col
                                                    items-start
                                                    md:items-center
                                                    md:justify-center gap-3 ">

                            <p class="text-base text-primary"> 
                            
                            
                                            {{ $item->name }}
                                         
                            </p>
                            

                                            
                                             <a onclick="checker11111()" href ="{{route('users.update1.restore',['user_id' => $item->id,'deleted_at'=> 'restore' ])}}"><i class=" px-3 bg-primary p-1 text-white
                                                            rounded ph ph-clock-clockwise text-secondary text-xl"></i></a>
                                                            
                                                           
                        </div>
                    </div>
@endif
                @empty
                    <tr>
                        <td colspan="7">No Reviewers yet</td>
                    </tr>
                @endforelse
                
           
            </div>



            <!-- Juries  -->



            <div class=" mt-20 gap-6 flex-col flex md:w-10/12
                                            w-full">
               
                                                 <h1 class="text-gradient md:text-xl text-base font-medium">Juries</h1>
                                               
                @forelse ($user as $item)
               @if($item->role_as == 3)  
                    <div class="flex items-center justify-start gap-6">
                        <div
                            class="flex md:flex-row flex-col
                                                    items-start
                                                    md:items-center
                                                    md:justify-center gap-3 ">

                            <p class="text-base text-primary">{{ $item->name }} </p>
                            <div
                                class="flex items-center
                                                        justify-center gap-3">

                                             <a onclick="checker111111()" href ="{{route('users.update2.restore',['user_id' => $item->id,'deleted_at'=> 'restore' ])}}"><i class=" px-3 bg-primary p-1 text-white
                                                            rounded ph ph-clock-clockwise text-secondary text-xl"></i></a>

                                <!--<button   data-modal-target="defaultModal" data-modal-toggle="defaultModal"  type="button"><i class="ph ph-trash text-secondary text-xl"></i></button>-->
                            </div>
                        </div>
                    </div>
               @endif
                @empty
                    <tr>
                        <td colspan="7">No Jury yet</td>
                    </tr>
                @endforelse

            </div>

        </main>
    </section>
<script>
    function checker(){
        var result = confirm('Are you sure you want to delete this Reviewer');
        if(result == false){
            event.preventDefault();
        }
    }
</script>
<script>
    function checker111(){
        var result = confirm('Are you sure you want to delete this Jury');
        if(result == false){
            event.preventDefault();
        }
    }
</script>
<script>
    function checker11111(){
        var result = confirm('Are you sure you want to restored this reviewers');
        if(result == false){
            event.preventDefault();
        }
    }
</script>
<script>
    function checker111111(){
        var result = confirm('Are you sure you want to restored this jury');
        if(result == false){
            event.preventDefault();
        }
    }
</script>
@endsection