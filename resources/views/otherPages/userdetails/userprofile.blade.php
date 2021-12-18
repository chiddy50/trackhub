<x-app-layout>
   <div class="container-fluid">
      <div class="card">
         <div class="card-body">
            <div class="row">
               <div class="col-lg-12">
                  <div class="d-flex align-items-center border-bottom justify-content-between mb-4">
                     <div class="form-name">
                        <h3 class="mb-2">User Information</h3>
                     </div>
                     
                  </div>
               </div>
               
            </div>
          
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content">
                     <div id="pill-1" class="tab-pane fade active show">
                        <div class="row">
                           <div class="col-sm-12">
                              <!-- Session Status -->
                              <x-auth-session-status class="mb-4" :status="session('status')" /> 

                              <x-auth-validation-errors class="mb-4" :errors="$errors" /> 

                              <form method="POST" action="{{ route('user.updateProfile') }}" enctype="multipart/form-data" data-toggle="validator">
                                 {{ csrf_field() }}
                                 <div class="form-group col-md-12">
                                    <div class="crm-profile-img-edit position-relative">
                                       <img class="crm-profile-pic rounded avatar-100" id='user_img' 
                                          src="@if($user->display_image) 
                                            {{  asset('uploads/images/'.$user->display_image) }} 
                                            @else 
                                            {{ asset('images/user/1.jpg') }} 
                                            @endif"
                                          alt="profile-pic"
                                       >
                                       <div class="crm-p-image bg-primary">
                                          <i class="las la-pen upload-button"></i>
                                          <input class="file-upload" type="file" name="display_image" id="image" accept="image/*">
                                       </div>
                                    </div>
                                    <div class="img-extension mt-3">
                                        <div class="d-inline-block align-items-center">
                                            <span>Only</span>
                                            <a href="javascript:void();">.jpg</a>
                                            <a href="javascript:void();">.png</a>
                                            <a href="javascript:void();">.jpeg</a>
                                            <span>allowed</span>
                                        </div>
                                    </div>
                                    {{-- <button class="btn btn-warning btn-sm mt-2 px-3">Update Photo</button> --}}
                                </div>
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <label class="mb-0">First Name</label>
                                          <input class="form-control" type="text" name="firstname" value="{{ $user->firstname }}" placeholder="Enter your firstname">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <label class="mb-0">Last Name</label>
                                          <input class="form-control" type="text" name="lastname" value="{{ $user->lastname }}" placeholder="Enter your lastname">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <label class="mb-0">Email</label>
                                          <input class="form-control" type="email" name="email" value="{{ $user->email }}" placeholder="Enter your email">
                                       </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                       <div class="form-group">
                                          <label class="mb-0">Phone</label>
                                          <input class="form-control" type="text" name="phone" value="{{ $user->phone }}" placeholder="Enter your phone">
                                       </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label>Country:</label>
                                       <select name="country" value="{{ old('country') }}" 
                                            style="@error('country') border-bottom-color:#f97575; @enderror" 
                                            class="selectpicker form-control" data-style="py-0">
                                            <option>Select Country</option>
                                            @foreach($countries as $country)                        
                                                <option 
                                                @if(isset($user->country_id) && $user->country_id == $country['id']) selected @endif 
                                                value="{{ $country['id'] }}">
                                                {{ $country['name'] }}
                                                </option>
                                            @endforeach
                                        </select>                                   
                                   </div>
                                   <div class="form-group col-sm-6">
                                       <label>State:</label>
                                       <select name="state" value="{{ old('state') }}" 
                                           style="@error('state') border-bottom-color:#f97575; @enderror" class="selectpicker form-control" data-style="py-0">
                                           <option>Select State</option>
                                           @foreach($states as $state)                        
                                               <option 
                                               @if(isset($user->state_id) && $user->state_id == $state['id']) selected @endif 
                                               value="{{ $state['id'] }}">
                                               {{ $state['name'] }}
                                               </option>
                                           @endforeach
                                       </select>                                  
                                   </div>
                                   
                                 </div>
                                 <button type="submit" class="btn btn-primary btn-lg">Save</button>
                              </form>
                           </div>
                        </div>
                     </div>
                   
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Page end  -->
   </div>
   </x-app-layout>

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
             $('#user_img').attr('src', e.target.result); 
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