<x-app-layout>
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 mb-3">
         <div class="d-flex flex-wrap align-items-top justify-content-between">
            <div class="iq-members">
               <h2 class="mb-2">Generate Forms For Website</h2>
               <p class="pb-3">Grow your double Opt-In list using custom templates and redirects using web form tool.</p>
            </div>
            <div class="mt-0">
               <a class="btn btn-outline-primary btn-lg iq-create-btn" href="{{route('create')}}">Create Form</a>
            </div>
         </div>
      </div>
      <div class="col-lg-8 col-md-8">
         <ul class="d-flex nav nav-pills text-center" id="pills-tab" role="tablist">
            <li class="nav-item">
               <a class="nav-link btn btn-outline-primary active show" data-toggle="pill" href="#pills-1" role="tab" aria-selected="true">Your Forms</a>
            </li>
            <li class="nav-item">
               <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-2" data-hide="#view-event" role="tab" aria-selected="false">Gallery</a>
            </li>
         </ul>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="tab-content">
            <div id="pills-1" class="tab-pane fade active show">
               <div class="card">
                  <div class="card-body pb-0">
                     <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-info-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/01.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Dapper Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>03 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-warning-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/02.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Scale Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>04 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                       <a class="dropdown-item copy copy" href="#" ><i class="far fa-copy mr-3" ></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-success-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/03.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Citron Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>07 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton3" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-danger-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/04.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i> Authority Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>08 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton4" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-success-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/05.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Pink Circle Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>09 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton5" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5" style="">
                                       <a class="dropdown-item copy" href="#"><i
                                          class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i
                                          class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-danger-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/06.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Marvel Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>10 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton6" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-info-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/07.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Blue Circle Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>11 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton7" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-warning-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/08.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Orange Cube Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>12 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton8" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-danger-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/12.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Yellow Circle Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>08 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-eight" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-eight" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-success-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/11.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Pink Cube Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>09 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-nine" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-nine" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-warning-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/10.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Orange Circle Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>06 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-2" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-2" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-info-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/13.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-3"><i class="las la-file-alt text-dark mr-3"></i>Authority Form</h5>
                                    <p class="mb-0"><i class="las la-calendar-minus text-light mr-3 font-size-18"></i>11 / 12 / 2020</p>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-ten" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-ten" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="pills-2" class="tab-pane fade">
               <div class="card">
                  <div class="card-body pb-0">
                     <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-info-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/09.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Dapper Forms</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton9" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton9" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-warning-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/10.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Scale Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton10" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-success-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/11.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Citron Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton12" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-danger-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/12.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i> Authority Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton13" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-success-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/03.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Cylinder Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton14" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton14" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-danger-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/04.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Yellow Slant Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton15" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton15" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-info-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/01.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Blue Cube Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton16" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton16" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-warning-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/02.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Authority Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton17" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton17" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-warning-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/08.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Orange Cube Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-eleven" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-eleven" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-success-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/05.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Pink Circle Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-5" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="dropdownMenuButton-5" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="forms-box">
                              <div class="bg-danger-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/12.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Yellow Circle Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-4" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-4" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                           <div class="forms-box">
                              <div class="bg-info-light image-box text-center p-5">
                                 <img src="{{asset('images/forms/13.png')}}" class="img-fluid avatar-90" alt="image">
                              </div>
                              <div class="forms-text d-flex flex-wrap justify-content-between text-left">
                                 <div>
                                    <h5 class="mb-0"><i class="las la-file-alt text-dark mr-3"></i>Blue Slant Form</h5>
                                 </div>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton-7" data-toggle="dropdown" aria-expanded="false" role="button">
                                    <i class="fas fa-cog mt-2"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton-7" style="">
                                       <a class="dropdown-item copy" href="#"><i class="far fa-copy mr-3"></i>Copy</a>
                                       <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="ri-delete-bin-6-fill mr-3"></i>Delete</a>
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
   <!-- Page end  -->
</div>
<!-- Modal Edit -->
    <div class="modal fade" id="edit-note1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">                            
                            <h3 class="mb-3">Weekly Planner</h3>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <div class="content edit-notes">
                            <div class="card card-transparent card-block card-stretch event-note mb-0">
                                <div class="card-body px-0 bukmark">
                                    <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">                                                    
                                        <div class="quill-tool">
                                        </div>
                                    </div>
                                    <div id="quill-toolbar1">
                                        <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                    </div>
                                </div>
                                <div class="card-footer border-0">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                        <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
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