<x-app-layout>
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Rider List</h4>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        @if (count($riders) > 0)

                        <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                            <thead>
                                <tr>
                                <th>Profile</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Availability</th>
                                <th>Join Date</th>
                                <th style="min-width: 100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($riders as $rider)

                                    <tr>
                                        <td class="text-center"><img class="rounded img-fluid avatar-40" 
                                            src="@if($rider->user_info->display_image) 
                                            {{  asset('uploads/images/'.$rider->user_info->display_image) }} 
                                            @else 
                                            {{ asset('images/user/01.jpg') }} 
                                            @endif"
                                            alt="profile">
                                        </td>
                                        <td>{{ $rider->user_info->firstname }} {{ $rider->user_info->lastname }}</td>
                                        <td>{{ $rider->user_info->phone }}</td>
                                        <td>                                            
                                            <span class="badge iq-bg-primary"> 
                                                {{ $rider->availability == '1' ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>

                                        <td>{{ date('j \\ F Y', strtotime($rider->user_info->created_at)) }}</td>
                                        <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Information" href="{{ 'rider-info/'.$rider->id }}">
                                                <i class="ri-user-add-line"></i>
                                            </a>
                                            <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ 'edit-rider/'.$rider->id }}">
                                                <i class="ri-pencil-line"></i>
                                            </a>
                                            {{-- <form action="{{ route('rider.destroy', $rider->id) }}" method="post">
                                                @csrf 
                                                @method('DELETE') 
                                                <a class="iq-bg-primary" type="submit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" ><i class="ri-delete-bin-line"></i></a>
                                                <a class="iq-bg-primary" data-toggle="tooltip" type="submit" data-placement="top" title="" data-original-title="Delete" href="#"><i class="ri-delete-bin-line"></i></a>
                                            </form> --}}
                                            
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach                                                                
                            </tbody>
                        </table>
                        @else
                            <h4 class="text-muted">No riders added yet</h4>
                        @endif
                    </div>
                    {{ $riders->links() }}
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
    </x-app-layout>