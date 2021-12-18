<x-app-layout>
    <div class="container-fluid">
        <div class="row">
           <div class="col-xl-12 col-lg-12">
                 <div class="card">
                    <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                          <h4 class="card-title">Edit Rider Information</h4>
                       </div>
                    </div>
                    <div class="card-body">
                        
                       <div class="new-user-info">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" /> 
                        
                        <form method="POST" action="{{ route('updateRider') }}" enctype="multipart/form-data" >
                             {{ csrf_field() }}
                             <input type="hidden" name="user_id" value="{{ $rider->user_id }}">
                             <div class="row">

                                <div class="form-group col-md-12">
                                    <div class="crm-profile-img-edit position-relative">
                                        <img class="crm-profile-pic rounded avatar-100" id='rider_img' 
                                            src="@if($rider->user_info->display_image) 
                                            {{  asset('uploads/images/'.$rider->user_info->display_image) }} 
                                            @else 
                                            {{ asset('images/user/1.png') }} 
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
                                </div>

                                <div class="col-md-12 my-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="availability" class="custom-control-input" 
                                        @if($rider->availability == 1) checked @endif
                                        data-id="{{ $rider->id }}"
                                        id="switch_availability">
                                        <label class="custom-control-label" for="switch_availability">Switch Availability</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="firstname">First Name:</label>
                                   <input type="text" class="form-control" 
                                   style="@error('firstname') border-bottom-color:#f97575; @enderror"
                                    name="firstname" value="{{ $rider->user_info->firstname }}" id="firstname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                   <label for="lastname">Last Name:</label>
                                   <input type="text" class="form-control"
                                   style="@error('lastname') border-bottom-color:#f97575; @enderror"
                                   value="{{ $rider->user_info->lastname }}"
                                   name="lastname" id="lastname" placeholder="Last Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Country:</label>
                                    <select name="country" value="{{ old('country') }}" 
                                         style="@error('country') border-bottom-color:#f97575; @enderror" 
                                         class="selectpicker form-control" data-style="py-0">
                                         <option>Select Country</option>
                                         @foreach($countries as $country)                        
                                             <option 
                                             @if(isset($rider->user_info->country_id) && $rider->user_info->country_id == $country['id']) selected @endif 
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
                                            @if(isset($rider->user_info->state_id) && $rider->user_info->state_id == $state['id']) selected @endif 
                                            value="{{ $state['id'] }}">
                                            {{ $state['name'] }}
                                            </option>
                                        @endforeach
                                    </select>                                  
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Mobile Number:</label>
                                    <input type="text" class="form-control" 
                                    value="{{ $rider->user_info->phone }}"                            
                                    name="phone" id="phone" placeholder="Mobile Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" 
                                   value="{{ $rider->user_info->email }}"                                    
                                    name="email" id="email" placeholder="Email">
                                </div>

                            </div>
                             
                             {{-- <div class="checkbox">
                                <label><input class="mr-2" type="checkbox">Enable Two-Factor-Authentication</label>
                             </div> --}}
                             <button type="submit" class="btn btn-primary">Update</button>
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

    // $('#switch_availability').change(function(e){
    //     var formData = new FormData();
    //     formData.append('availability', this.checked)
    //     formData.append('rider_id', e.target.dataset.id)

    //     $.ajax({
    //         type:'POST',
    //         url: "{{ url('update-availablity')}}",
    //         data: formData,
    //         cache:false,
    //         contentType: false,
    //         processData: false,
    //         success: (data) => {
    //             // this.reset();
    //             console.log(data);
    //         //  document.getElementById('display_image').value = 
    //             // alert('Image has been uploaded successfully');
    //         },
    //         error: function(data){
    //             console.log(data);
    //         }
    //     });
    // });

});

</script>