<x-app-layout>
    <div class="container-fluid">
        <div class="row">
           {{-- <div class="col-xl-3 col-lg-4">
                 <div class="card">
                    <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                          <h4 class="card-title">Add New User</h4>
                       </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="crm-profile-img-edit position-relative">
                                    <img class="crm-profile-pic rounded avatar-100" src="{{ asset('images/user/1.png') }}" alt="profile-pic">
                                    <div class="crm-p-image bg-primary">
                                        <i class="las la-pen upload-button"></i>
                                        <input class="file-upload" type="file" accept="image/*">
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
                            </div>
                            <div class="form-group">
                                <label>User Role:</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select</option>
                                    <option>Web Designer</option>
                                    <option>Web Developer</option>
                                    <option>Tester</option>
                                    <option>Php Developer</option>
                                    <option>Ios Developer </option>
                                </select>
                            </div>
                          <div class="form-group">
                             <label for="furl">Facebook Url:</label>
                             <input type="text" class="form-control" id="furl" placeholder="Facebook Url">
                          </div>
                          <div class="form-group">
                             <label for="turl">Twitter Url:</label>
                             <input type="text" class="form-control" id="turl" placeholder="Twitter Url">
                          </div>
                          <div class="form-group">
                             <label for="instaurl">Instagram Url:</label>
                             <input type="text" class="form-control" id="instaurl" placeholder="Instagram Url">
                          </div>
                          <div class="form-group">
                             <label for="lurl">Linkedin Url:</label>
                             <input type="text" class="form-control" id="lurl" placeholder="Linkedin Url">
                          </div>
                       </form>
                    </div>
                 </div>
           </div> --}}
           <div class="col-xl-12 col-lg-12">
                 <div class="card">
                    <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                          <h4 class="card-title">New Rider Information</h4>
                       </div>
                    </div>
                    <div class="card-body">
                        
                       <div class="new-user-info">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" /> 
                        
                        <form method="POST" action="{{ route('addRider') }}" enctype="multipart/form-data" >
                             {{ csrf_field() }}
                             <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="crm-profile-img-edit position-relative">
                                        <img class="crm-profile-pic rounded avatar-100" id='rider_img' src="{{ asset('images/user/1.png') }}" alt="profile-pic">
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
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="firstname">First Name:</label>
                                   <input type="text" class="form-control" 
                                   value="{{ old('firstname') }}"
                                   style="@error('firstname') border-bottom-color:#f97575; @enderror"
                                    name="firstname" id="firstname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="lastname">Last Name:</label>
                                   <input type="text" class="form-control"
                                   value="{{ old('lastname') }}"
                                   style="@error('lastname') border-bottom-color:#f97575; @enderror"
                                   name="lastname" id="lastname" placeholder="Last Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Country:</label>
                                    <select name="country" value="{{ old('country') }}" 
                                         style="@error('country') border-bottom-color:#f97575; @enderror" 
                                         class="selectpicker form-control" data-style="py-0">
                                         <option>Select Country</option>
                                         @foreach($countries as $country)                        
                                             <option value="{{ $country['id'] }}">
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
                                             <option value="{{ $state['id'] }}">
                                             {{ $state['name'] }}
                                             </option>
                                         @endforeach
                                     </select>                                  
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Mobile Number:</label>
                                    <input type="text" class="form-control" 
                                    value="{{ old('phone') }}"                                    
                                    name="phone" id="phone" placeholder="Mobile Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email"
                                    value="{{ old('email') }}"                                                                    
                                    id="email" placeholder="Email">
                                </div>

                            </div>
                             <hr>
                             <h5 class="mb-3">Security</h5>
                             <div class="row">
                                {{-- <div class="form-group col-md-12">
                                   <label for="uname">User Name:</label>
                                   <input type="text" class="form-control" id="uname" placeholder="User Name">
                                </div> --}}
                                <div class="form-group col-md-6">
                                   <label for="pass">Password:</label>
                                   <input type="password" class="form-control" name='password' id="pass"                                    
                                   style="@error('password') border-bottom-color:#f97575; @enderror"
                                   placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="rpass">Repeat Password:</label>
                                   <input type="password" class="form-control" id="rpass" placeholder="Repeat Password "
                                   style="@error('password') border-bottom-color:#f97575; @enderror" 
                                   name="password_confirmation">
                                </div>
                             </div>
                             {{-- <div class="checkbox">
                                <label><input class="mr-2" type="checkbox">Enable Two-Factor-Authentication</label>
                             </div> --}}
                             <button type="submit" class="btn btn-primary">Create</button>
                          </form>
                       </div>
                    </div>
                 </div>
           </div>
        </div>
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
       $('#rider_img').attr('src', e.target.result); 
     }
     reader.readAsDataURL(this.files[0]); 

 });

});

</script>