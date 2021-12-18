<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                          <h4 class="card-title">{{ $rider->user_info->firstname }} {{ $rider->user_info->lastname }}</h4>
                       </div>
                    <div class="header-action">
                             <i  type="button" data-toggle="collapse" data-target="#tabs-7" aria-expanded="false" aria-controls="alert-1">
                                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                             </i>
                          </div>
                    </div>
                    <div class="card-body">
                       <div class="collapse" id="tabs-7">
                             <div class="card"></div>
                          </div>
                       <ul class="nav nav-pills mb-5 nav-fill" id="pills-tab-1" role="tablist">
                            
                            <li class="nav-item">
                              <a class="nav-link active" id="pills-home-tab-fill" data-toggle="pill" href="#pills-home-fill" role="tab" aria-controls="pills-home" aria-selected="true">Add Vehicle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-information-tab-fill" data-toggle="pill" href="#pills-information-fill" role="tab" aria-controls="pills-information" aria-selected="false">Vehicle List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab-fill" data-toggle="pill" href="#pills-profile-fill" role="tab" aria-controls="pills-profile" aria-selected="false">User Information</a>
                            </li>
                            {{-- <li class="nav-item">
                             <a class="nav-link" id="pills-contact-tab-fill" data-toggle="pill" href="#pills-contact-fill" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                            </li> --}}
                       </ul>
                       <div class="tab-content" id="pills-tabContent-1">
                            <div class="tab-pane fade show active" id="pills-home-fill" role="tabpanel" aria-labelledby="pills-home-tab-fill">
                                <x-auth-validation-errors class="mb-4" :errors="$errors" /> 

                                <form method="POST" action="{{ route('addRiderInformation') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <input type="hidden" name="rider_id" value="{{ $rider->id }}">
                                        <div class="form-group col-md-6">
                                            <label for="vehicle_type">Vehicle:</label>
                                            <select name="vehicle_type_id" value="{{ old('vehicle_type_id') }}" id="vehicle_type"
                                                style="@error('vehicle_type_id') border-bottom-color:#f97575; @enderror" class="selectpicker form-control" data-style="py-0">
                                               <option>Choose Vehicle</option>
                                               @foreach($vehicle_types as $vehicle)                        
                                                  <option value="{{ $vehicle['id'] }}">
                                                     {{ ucfirst($vehicle['type']) }}
                                                  </option>
                                               @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="plate_number">Plate Number:</label>
                                            <input type="text" class="form-control"  
                                            style="@error('plate_number') border-bottom-color:#f97575; @enderror"
                                            name="plate_number" id="plate_number" placeholder="Plate Number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="licence_path">Licence Path:</label>
                                            <input type="text" class="form-control"  
                                            style="@error('licence_path') border-bottom-color:#f97575; @enderror"
                                            name="licence_path" id="licence_path" placeholder="Licence Path">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Information</button>

                                </form>

                            </div>
                            <div class="tab-pane fade" id="pills-information-fill" role="tabpanel" aria-labelledby="pills-information-tab-fill">
                                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                    <thead>
                                        <tr>
                                            <th>Vehicle</th>
                                            <th>Plate Number</th>
                                            <th>Licence Path</th>
                                            <th style="min-width: 100px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rider->rider_information as $info)
        
                                            <tr>
                                                {{-- <td class="text-center"><img class="rounded img-fluid avatar-40" src="{{asset('images/user/01.jpg')}}" alt="profile"></td> --}}
                                                <td>{{ ucfirst($info->vehicle_type->type) }}</td>
                                                <td>{{ $info->plate_number }}</td>
                                                <td>{{ $info->licence_path }}</td>
                                                
                                                <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="{{ 'rider-info/'.$rider->id }}"><i class="ri-user-add-line"></i></a>
                                                    <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href=""><i class="ri-pencil-line"></i></a>
                                                    <form action="{{ route('rider.destroy', $rider->id) }}" method="post">
                                                        @csrf 
                                                        @method('DELETE') 
                                                        <a class="iq-bg-primary" type="submit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" ><i class="ri-delete-bin-line"></i></a>
                                                    </form>
                                                </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="pills-profile-fill" role="tabpanel" aria-labelledby="pills-profile-tab-fill">
                                <div class="col-lg-12">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">First Name: {{ $rider->user_info->firstname }}</li>
                                        <li class="list-group-item">Last Name: {{ $rider->user_info->lastname }}</li>
                                        <li class="list-group-item">Email: {{ $rider->user_info->email }}</li>
                                        <li class="list-group-item">State: {{ $rider->user_info->state }}</li>
                                        <li class="list-group-item">Country: {{ $rider->user_info->country }}</li>
                                     </ul>
                                 </div>
                            </div>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
