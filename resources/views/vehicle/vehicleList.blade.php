<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                       <div class="header-title">
                          <h4 class="card-title">Vehicle Types</h4>
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
                        <ul class="nav nav-pills mb-1 nav-fill" id="pills-tab-1" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="pills-vehicles-fill" data-toggle="pill" href="#pills-vehicles" role="tab" aria-controls="pills-home" aria-selected="true">Vehicles</a>
                           </li> 
                           <li class="nav-item">
                              <a class="nav-link " id="pills-add-new-fill" data-toggle="pill" href="#pills-add-new" role="tab" aria-controls="pills-profile" aria-selected="false">Add New</a>
                           </li>
                            
                            
                        </ul>
                       <div class="tab-content" id="pills-tabContent-1">
                            <div class="tab-pane fade" id="pills-add-new" role="tabpanel" aria-labelledby="pills-add-new-fill">
                                <x-auth-validation-errors class="mb-4" :errors="$errors" /> 

                                <form method="POST" action="{{ route('addVehicle') }}">
                                    {{ csrf_field() }}
                                    <div class="row mt-5">
                                        <div class="form-group col-md-6">
                                            <label for="type">Type:</label>
                                            <select name="type" value="{{ old('type') }}" 
                                                style="@error('type') border-bottom-color:#f97575; @enderror" class="selectpicker form-control" data-style="py-0">
                                               <option>Choose Type</option>
                                                  <option value="car">Car</option>
                                                  <option value="motorcycle">Motorcycle</option>
                                                  <option value="tricycle">Tricycle</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="vehicle_icon">Vehicle Icon:</label>
                                            <input type="text" class="form-control"  
                                            style="@error('vehicle_icon') border-bottom-color:#f97575; @enderror"
                                            name="vehicle_icon" id="vehicle_icon" placeholder="First Name">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="description">Description:</label>
                                            <textarea name="description" id="description" rows="2"
                                            style="@error('description') border-bottom-color:#f97575; @enderror"
                                            class="form-control" 
                                            ></textarea>
                                         </div>
                                    </div>

                                     <button type="submit" class="btn btn-primary">Add Vehicle</button>
                                </form>
                            </div>
                            <div class="tab-pane fade show active" id="pills-vehicles" role="tabpanel" aria-labelledby="pills-vehicles-fill">

                                <div class="row">
                                    <div class="col-sm-12">
                                          <div class="card">
                                             {{-- <div class="card-header d-flex justify-content-between">
                                                <div class="header-title">
                                                   <h4 class="card-title">Vehicle List</h4>
                                                </div>
                                             </div> --}}
                                             <div class="card-body">
                                                <div class="table-responsive">
                                                   {{-- <div class="row justify-content-between">
                                                      <div class="col-sm-6 col-md-6">
                                                         <div id="user_list_datatable_info" class="dataTables_filter">
                                                            <form class="mr-3 position-relative">
                                                               <div class="form-group mb-0">
                                                                  <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                                               </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-6 col-md-6">
                                                         <div class="user-list-files d-flex">
                                                            <a class="bg-primary" href="javascript:void();" >
                                                               Print
                                                            </a>
                                                            <a class="bg-primary" href="javascript:void();">
                                                               Excel
                                                            </a>
                                                            <a class="bg-primary" href="javascript:void();">
                                                               Pdf
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div> --}}
                                                   <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                                   <thead>
                                                         <tr>
                                                            <th>Image</th>
                                                            <th>Type</th>
                                                            <th>Description</th>
                                                            <th>Icon</th>
                                                            <th style="min-width: 100px">Action</th>
                                                         </tr>
                                                   </thead>
                                                   <tbody>
                                                        @foreach ($vehicles as $vehicle)
                    
                                                            <tr>
                                                               <td class="text-center"><img class="rounded img-fluid avatar-40" src="{{asset('images/user/01.jpg')}}" alt="profile"></td>
                                                               <td>{{ ucfirst($vehicle->type) }}</td>
                                                               <td>{{ $vehicle->description }}</td>
                                                               <td class="text-center"><img class="rounded img-fluid avatar-40" src="{{asset('images/user/01.jpg')}}" alt="profile"></td>
                                                  
                                                               <td>
                                                                  <div class="flex align-items-center list-user-action">
                                                                     <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add" href="{{ 'rider-info/'.$vehicle->id }}"><i class="ri-user-add-line"></i></a>
                                                                     <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href=""><i class="ri-pencil-line"></i></a>
                                                                     <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                                                  </div>
                                                               </td>
                                                            </tr>
                                                        @endforeach
                                                        
                                                   </tbody>
                                                   </table>
                                                </div>
                                                   {{ $vehicles->links() }}

                                                   {{-- <div class="row justify-content-between mt-3">
                                                      <div id="user-list-page-info" class="col-md-6">
                                                         <span>Showing 1 to 5 of 5 entries</span>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <nav aria-label="Page navigation example">
                                                            <ul class="pagination justify-content-end mb-0">
                                                               <li class="page-item disabled">
                                                                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                                               </li>
                                                               <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                               <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                               <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                               <li class="page-item">
                                                                  <a class="page-link" href="#">Next</a>
                                                               </li>
                                                            </ul>
                                                         </nav>
                                                      </div>
                                                   </div> --}}
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
