<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Courier Information</h4>
                        </div>
                        
                    </div>
                    
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="alert text-white bg-info" role="alert">
                                <div class="iq-alert-icon">
                                <i class="ri-information-line"></i>
                                </div>
                                <div class="iq-alert-text">
                                    Please provide the courier information below                    
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills mb-5 nav-fill" id="pills-tab-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-add-new-fill" data-toggle="pill" href="#pills-add-new" role="tab" aria-controls="pills-profile" aria-selected="true">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="pills-vehicles-fill" data-toggle="pill" href="#pills-vehicles" role="tab" aria-controls="pills-home" aria-selected="false">Upload Documents</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="pills-tabContent-1">
                            <div class="tab-pane fade show active" id="pills-add-new" role="tabpanel" aria-labelledby="pills-add-new-fill">
                                <div class="row">                                    
                        
                                    <div class="col-lg-12">
                                        <div class="tab-content">  
                                            <x-auth-validation-errors class="mb-4" :errors="$errors" /> 

                                            <form method="POST" action="{{ route('create.courier') }}">
                                                {{ csrf_field() }}
                        
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label for="cac_number">CAC Number:</label>
                                                                <input type="text" class="form-control" value="{{ $courier->cac_number }}"
                                                                style="@error('cac_number') border-bottom-color:#f97575; @enderror"
                                                                name="cac_number" id="cac_number" placeholder="CAC Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="mb-2">Company Address</label>
                                                            <textarea class="form-control description"
                                                                style="@error('company_address') border-bottom-color:#f97575; @enderror"
                                                                id="exampleFormControlTextarea3"
                                                                name="company_address"
                                                                rows="4" placeholder="Company Address.">{{ $courier->company_address }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="company_name">Company Name:</label>
                                                            <input type="text" class="form-control" 
                                                            value="{{ $courier->company_name }}"
                                                            style="@error('company_name') border-bottom-color:#f97575; @enderror"
                                                                name="company_name" id="company_name" placeholder="Company Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="company_phone">Company Phone:</label>
                                                                <input type="text" class="form-control"
                                                                value="{{ $courier->company_phone }}"
                                                                style="@error('company_phone') border-bottom-color:#f97575; @enderror"
                                                                name="company_phone" id="company_phone" placeholder="Company Phone">
                                                        </div>
                                                    </div>
                                                    
                        
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="mb-0">Work Opening Time</label>
                                                            <input class="form-control" type="time" 
                                                            value="{{ $courier->working_opening_time }}"
                                                            style="@error('working_opening_time') border-bottom-color:#f97575; @enderror"                                                        
                                                            name="working_opening_time">
                                                        </div>
                                                    </div>
                        
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="mb-0">Work Closing Time</label>
                                                            <input class="form-control" type="time" 
                                                            value="{{ $courier->working_closing_time }}"
                                                            style="@error('working_closing_time') border-bottom-color:#f97575; @enderror"                                                                                                                
                                                            name="working_closing_time">
                                                        </div>
                                                    </div>
                        
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>Country:</label>
                                                            <select name="country" value="{{ old('country') }}" 
                                                                value="{{ $courier->country_id }}"
                                                                style="@error('country') border-bottom-color:#f97575; @enderror" 
                                                                class="selectpicker form-control" data-style="py-0">
                                                                <option>Select Country</option>
                                                                @foreach($countries as $country)                        
                                                                <option 
                                                                    value="{{ $country['id'] }}"
                                                                    @if(isset($courier->country_id) && $courier->country_id == $country['id']) selected @endif 
                                                                >
                                                                    {{ $country['name'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>State:</label>
                                                            <select name="state" value="{{ old('state') }}" 
                                                                value="{{ $courier->state_id }}"
                                                                style="@error('state') border-bottom-color:#f97575; @enderror" class="selectpicker form-control" data-style="py-0">
                                                                <option>Select State</option>
                                                                @foreach($states as $state)                        
                                                                    <option value="{{ $state['id'] }}"
                                                                        @if(isset($courier->state_id) && $courier->state_id == $state['id']) selected @endif 
                                                                    >
                                                                    {{ $state['name'] }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>  
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary btn-lg
                                                    my-4">Save</button>
                                            </form>        
                                                                                  
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="tab-pane fade" id="pills-vehicles" role="tabpanel" aria-labelledby="pills-vehicles-fill">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-4">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Upload CAC Document</h4>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" enctype="multipart/form-data" 
                                                    action="{{ route('upload.cac') }}"
                                                    class="dropzone dz-clickable" id="image-upload"
                                                    >
                                                    @csrf
                                                    
                                                    <div class="dz-default dz-message">
                                                        <span>Click or Drop here</span>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>  

                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-8">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Upload Other Documents</h4>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" enctype="multipart/form-data" 
                                                    action="{{ route('upload.othercac') }}"
                                                    class="dropzone dz-clickable" id="image-upload"
                                                    >
                                                    {{-- <div class="form-group">
                                                        <label class="mb-0">Title:</label>
                                                        <input class="form-control" type="text" name="title" placeholder="Title here">
                                                    </div> --}}
                                                    @csrf
                                                    
                                                    <div class="dz-default dz-message">
                                                        <span>Drop other documents here to upload</span>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</x-app-layout>