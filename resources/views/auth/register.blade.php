
<x-guest-layout>
<section class="login-content">
   <div class="container h-100">
      <div class="row align-items-center justify-content-center h-100">
         <div class="col-12 mt-5">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <img src="{{asset('/images/trackhub_logo.jpeg')}}" class="img-fluid w-10 mb-5 main-logo" alt="">
                  {{-- <h2 class="mb-3">Sign Up</h2> --}}

                  {{-- <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card">
                              
                              <div class="card-body">
                                 <form method="post" enctype="multipart/form-data" 
                                 action="{{ route('upload.store') }}"
                                 class="dropzone dz-clickable" id="image-upload"
                                 >
                                 @csrf
                                 
                                 <div class="dz-default dz-message">
                                    <span>Drop image here to upload</span>
                                 </div>
                              </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> --}}

                  {{-- <form method="POST" enctype="multipart/form-data" id="upload_image_form" action="javascript:void(0)" >
                  
                     <div class="row">
                         <div class="col-md-12 mb-2">
                             <img id="image_preview_container" src="{{ asset('/images/user/1.jpg') }}"
                                 alt="preview image" style="max-height: 150px;">
                         </div>
                         <div class="col-md-12">
                             <div class="form-group">
                                 <input type="file" name="image" placeholder="Choose image" id="image">
                                 <span class="text-danger">{{ $errors->first('title') }}</span>
                             </div>
                         </div>
                           
                           
                         <div class="col-md-12">
                             <button type="submit" class="btn btn-primary">Submit</button>
                         </div>
                     </div>     
                 </form> --}}

                     <!-- Session Status -->
                     <x-auth-session-status class="mb-4" :status="session('status')" /> 

                     <!-- Validation Errors -->
                     <x-auth-validation-errors class="mb-4" :errors="$errors" /> 
                       
                  <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" data-toggle="validator">
                     {{ csrf_field() }}
                     {{-- <div class="row">
                        <div class="col-md-12 mb-2">
                            <img id="image_preview_container" class="img-responsive rounded" src="{{ asset('/images/user/1.jpg') }}"
                                alt="preview image" style="max-height: 150px;">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="display_image" placeholder="Choose image" id="image">
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                        </div>
                    </div>   --}}
                     
                     <input type="hidden" id="display_image" name="display_image">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="mb-0">First Name<span class="text-danger"></span></label>
                              <input class="form-control" name='firstname' 
                              style="@error('firstname') border-bottom-color:#f97575; @enderror"
                              type="text" value="{{ old('firstname') }}" placeholder=" ">
                              
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="mb-0">Last Name<span class="text-danger"></span></label>
                              <input class="form-control" name='lastname' 
                              style="@error('lastname') border-bottom-color:#f97575; @enderror"
                              value="{{ old('lastname') }}" type="text" placeholder=" ">
                              
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="mb-0">Email</label>
                              <input class="form-control" name='email' style="@error('email') border-bottom-color:#f97575; @enderror" 
                              value="{{ old('email') }}" type="email" placeholder=" ">
                              
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="mb-0">Phone No.</label>
                              <input class="form-control" value="{{ old('phone') }}" 
                              style="@error('phone') border-bottom-color:#f97575; @enderror" name='phone' type="text" placeholder=" ">
                              
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label>Country:</label>
                              <select name="country" value="{{ old('country') }}" 
                              style="@error('country') border-bottom-color:#f97575; @enderror" class="selectpicker form-control" data-style="py-0">
                                 <option>Select Country</option>
                                 @foreach($countries as $country)                        
                                    <option value="{{ $country['id'] }}">
                                       {{ $country['name'] }}
                                    </option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label>State:</label>
                              <select name="state" value="{{ old('state') }}" 
                              style="@error('state') border-bottom-color:#f97575; @enderror" class="selectpicker form-control" data-style="py-0">
                                 <option>Select State</option>
                                 @foreach($states as $state)                        
                                    <option value="{{ $state['id'] }}">
                                       {{ $state['name'] }}
                                    </option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="mb-0">Password</label>
                              <input class="form-control" type="password" 
                              style="@error('password') border-bottom-color:#f97575; @enderror" name="password" placeholder=" ">
                              
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                              <label class="mb-0">Confirm Password</label>
                              <input class="form-control" type="password" 
                              style="@error('password') border-bottom-color:#f97575; @enderror" name="password_confirmation" placeholder=" ">
                              
                           </div>
                        </div>
                        
                     </div>
                     <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                     <p class="mt-3">
                        Already have an Account <a href="/login" class="text-primary">Sign In</a>
                     </p>
                  </form>
                  
                  
               </div>
               <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                  <img src="{{asset('/images/login/01.png')}}" class="img-fluid w-80" style="width:80%;" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section> 
<!--<section class="login-content">
    <div class="container">
       <div class="row align-items-center justify-content-center height-self-center">
          <div class="col-lg-8">
             <div class="card auth-card">
                <div class="card-body p-0">
                   <div class="d-flex align-items-center auth-content">
                      <div class="col-lg-6  content-left">
                         <div class="p-3">
                            <h2 class="mb-2 ">Sign Up</h2>
                            <p>Create your Glare account.</p>
                            <!-- Session Status -->
                            <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

                            <!-- Validation Errors -->
                            <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
                            <!-- <form method="POST" action="{{ route('register') }}" data-toggle="validator">
                                {{csrf_field()}}
                                <div class="row">
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input id="name"  name="first_name" value="{{old('first_name')}}"  class="floating-input form-control" type="text" placeholder=" " required >
                                        <label>Full Name <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="text" name="last_name" placeholder=" " value="{{old('last_name')}}" required>
                                        <label>Last Name <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="email" id="email"  name="email" value="{{old('email')}}" required placeholder=" ">
                                        <label>Email <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" name="phone_number" type="text" placeholder=" ">
                                        <label>Phone No. <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="password" id="password" name="password" required autocomplete="new-password" placeholder=" ">
                                        <label>Password <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="password" name="password_confirmation" required placeholder=" ">
                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-12">
                                     <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                        <label class="custom-control-label " for="customCheck1">I agree with the terms of use</label>
                                     </div>
                                  </div>
                               </div>
                               <button type="submit" class="btn btn-primary">{{ __('sign up') }}</button>
                               <p class="mt-3">
                                  Already have an Account <a href="{{route('auth.login')}}" class=" text-underline">Sign In</a>
                               </p>
                            </form>
                         </div>
                      </div>
                      <div class="col-lg-6 content-right">
                         <img src="{{ asset('images/login/01.png') }}" class="img-fluid image-right" alt="">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div> 
 </section>--> 
</x-guest-layout>

<script>
     
   $(document).ready(function (e) {
 
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });

       $('#image').change(function(){
         
           let reader = new FileReader();
           reader.onload = (e) => { 
             $('#image_preview_container').attr('src', e.target.result); 
           }
           reader.readAsDataURL(this.files[0]); 

       });

      //  $('#upload_image_form').submit(function(e) {
      //      e.preventDefault();

      //      var formData = new FormData(this);

      //      $.ajax({
      //          type:'POST',
      //          url: "{{ url('save-photo')}}",
      //          data: formData,
      //          cache:false,
      //          contentType: false,
      //          processData: false,
      //          success: (data) => {
      //              this.reset();
      //              console.log(data);
      //             //  document.getElementById('display_image').value = 
      //              alert('Image has been uploaded successfully');
      //          },
      //          error: function(data){
      //              console.log(data);
      //          }
      //      });
      //  });
   });

</script>