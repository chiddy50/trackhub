<x-app-layout>
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 mb-3">
         <div class="d-flex flex-wrap align-items-top justify-content-between">
            <div class="iq-members">
               <h2 class="mb-2">Detailed Activity Log For Your Campaigns</h2>
               <p class="pb-3">Use the power of our comprehensive activity log to complete and support a current activity. </p>
            </div>
            <div class="mt-0">
               <!-- Large modal -->
               <div class="form-group mb-0">
                  <select name="type" class="selectpicker" data-style="py-0">
                     <option>View</option>
                     <option>In progress</option>
                     <option>Export history</option>
                     <option>Notification log</option>
                     <option>Unsubscribe reasons</option>
                     <option>Device details</option>
                     <option>Email log</option>
                  </select>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-12 col-md-12">
         <ul class="d-flex nav nav-pills text-center" id="pills-tab" role="tablist">
            <li class="nav-item">
               <a class="nav-link btn btn-outline-primary active show" data-toggle="pill" href="#pills-1" role="tab" aria-selected="true">Summary</a>
            </li>
            <li class="nav-item">
               <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-2" role="tab" aria-selected="false">Campaigns</a>
            </li>
            <li class="nav-item">
               <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-3" data-hide="#view-event" role="tab" aria-selected="false">Channels</a>
            </li>
            <li class="nav-item">
               <a class="nav-link btn btn-outline-primary" data-toggle="pill" href="#pills-4" data-hide="#view-event-last" role="tab" aria-selected="false">Autoresponder</a>
            </li>
         </ul>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="tab-content">
            <div id="pills-1" class="tab-pane fade active show">
               <div class="row">
                  <div class="col-sm-12 text-center">
                     <div class="card">
                        <div class="card-body">
                           <div class="header-title">
                              <h4 class="card-title">Account Overall Activity</h4>
                           </div>
                           <div id="chart-statistic"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="pills-2" class="tab-pane fade">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="table-responsive">
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">
                                 <span>Image</span>
                              </th>
                              <th scope="col">
                                 <span>Name</span>
                              </th>
                              <th scope="col">
                                 <span>Delivered</span>
                              </th>
                              <th scope="col">
                                 <span>Opened</span>
                              </th>
                              <th scope="col">
                                 <span>Bounced</span>
                              </th>
                              <th scope="col">
                                 <span>Unsubscribed</span>
                              </th>
                              <th scope="col">
                                 <span>Status</span>
                              </th>
                              <th scope="col">
                                 <span></span>
                              </th>
                              <th scope="col">
                                 <span></span>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/01.png')}}" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>03 Dec , 2020</span>
                              </td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/04.png')}}" class="bg-info-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>29 Nov , 2020</span>
                              </td>
                              <td>2</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton12" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/02.png')}}" class="bg-danger-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>29 dec , 2020</span>
                              </td>
                              <td>2</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton3" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/05.png')}}" class="bg-warning-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>20 Oct , 2020</span>
                              </td>
                              <td>2</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton4" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/06.png')}}" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>03 Dec , 2020</span>
                              </td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton19" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton19" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/07.png')}}" class="bg-info-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>29 Nov , 2020</span>
                              </td>
                              <td>2</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-warning-light badge">Completed</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
                     </div>
                  </div>
               </div>
            </div>
            <div id="pills-3" class="tab-pane fade">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="table-responsive">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">
                                    <span>Image</span>
                                 </th>
                                 <th scope="col">
                                    <span>Name</span>
                                 </th>
                                 <th scope="col">
                                    <span>Delivered</span>
                                 </th>
                                 <th scope="col">
                                    <span>Opened</span>
                                 </th>
                                 <th scope="col">
                                    <span>Bounced</span>
                                 </th>
                                 <th scope="col">
                                    <span>Unsubscribed</span>
                                 </th>
                                 <th scope="col">
                                    <span>Status</span>
                                 </th>
                                 <th scope="col">
                                    <span></span>
                                 </th>
                                 <th scope="col">
                                    <span></span>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <img src="{{asset('images/options/01.png')}}" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                                 </td>
                                 <td>
                                    <h6 class="mb-2">Campaigns Name</h6>
                                    <span>03 Dec , 2020</span>
                                 </td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td><a href="#" class="bg-success-light badge">Active</a></td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="dropdown-toggle1" id="dropdownMenuButton5" data-toggle="dropdown" aria-expanded="false" role="button">
                                          <i class="fas fa-cog"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5" style="">
                                          <a class="dropdown-item" href="#">Show activity</a>
                                          <a class="dropdown-item" href="#">View details</a>
                                          <a class="dropdown-item" href="#">Copy campaign</a>
                                          <a class="dropdown-item" href="#">Create list</a>
                                          <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td>
                                    <img src="{{asset('images/options/04.png')}}" class="bg-info-light rounded p-3 img-fluid avatar-70" alt="image">
                                 </td>
                                 <td>
                                    <h6 class="mb-2">Campaigns Name</h6>
                                    <span>29 Nov , 2020</span>
                                 </td>
                                 <td>2</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td><a href="#" class="bg-success-light badge">Active</a></td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="dropdown-toggle1" id="dropdownMenuButton14" data-toggle="dropdown" aria-expanded="false" role="button">
                                          <i class="fas fa-cog"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton14" style="">
                                          <a class="dropdown-item" href="#">Show activity</a>
                                          <a class="dropdown-item" href="#">View details</a>
                                          <a class="dropdown-item" href="#">Copy campaign</a>
                                          <a class="dropdown-item" href="#">Create list</a>
                                          <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td>
                                    <img src="{{asset('images/options/02.png')}}" class="bg-danger-light rounded p-3 img-fluid avatar-70" alt="image">
                                 </td>
                                 <td>
                                    <h6 class="mb-2">Campaigns Name</h6>
                                    <span>29 dec , 2020</span>
                                 </td>
                                 <td>2</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td><a href="#" class="bg-success-light badge">Active</a></td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="dropdown-toggle1" id="dropdownMenuButton7" data-toggle="dropdown" aria-expanded="false" role="button">
                                          <i class="fas fa-cog"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7" style="">
                                          <a class="dropdown-item" href="#">Show activity</a>
                                          <a class="dropdown-item" href="#">View details</a>
                                          <a class="dropdown-item" href="#">Copy campaign</a>
                                          <a class="dropdown-item" href="#">Create list</a>
                                          <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td>
                                    <img src="{{asset('images/options/05.png')}}" class="bg-warning-light rounded p-3 img-fluid avatar-70" alt="image">
                                 </td>
                                 <td>
                                    <h6 class="mb-2">Campaigns Name</h6>
                                    <span>20 Oct , 2020</span>
                                 </td>
                                 <td>2</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td><a href="#" class="bg-success-light badge">Active</a></td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="dropdown-toggle1" id="dropdownMenuButton8" data-toggle="dropdown" aria-expanded="false" role="button">
                                          <i class="fas fa-cog"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8" style="">
                                          <a class="dropdown-item" href="#">Show activity</a>
                                          <a class="dropdown-item" href="#">View details</a>
                                          <a class="dropdown-item" href="#">Copy campaign</a>
                                          <a class="dropdown-item" href="#">Create list</a>
                                          <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td>
                                    <img src="{{asset('images/options/06.png')}}" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                                 </td>
                                 <td>
                                    <h6 class="mb-2">Campaigns Name</h6>
                                    <span>03 Dec , 2020</span>
                                 </td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td><a href="#" class="bg-success-light badge">Active</a></td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="dropdown-toggle1" id="dropdownMenuButton13" data-toggle="dropdown" aria-expanded="false" role="button">
                                          <i class="fas fa-cog"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13" style="">
                                          <a class="dropdown-item" href="#">Show activity</a>
                                          <a class="dropdown-item" href="#">View details</a>
                                          <a class="dropdown-item" href="#">Copy campaign</a>
                                          <a class="dropdown-item" href="#">Create list</a>
                                          <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td>
                                    <img src="{{asset('images/options/07.png')}}" class="bg-info-light rounded p-3 img-fluid avatar-70" alt="image">
                                 </td>
                                 <td>
                                    <h6 class="mb-2">Campaigns Name</h6>
                                    <span>29 Nov , 2020</span>
                                 </td>
                                 <td>2</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td>0</td>
                                 <td><a href="#" class="bg-success-light badge">Active</a></td>
                                 <td>
                                    <div class="dropdown">
                                       <span class="dropdown-toggle1" id="dropdownMenuButton6" data-toggle="dropdown" aria-expanded="false" role="button">
                                          <i class="fas fa-cog"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6" style="">
                                          <a class="dropdown-item" href="#">Show activity</a>
                                          <a class="dropdown-item" href="#">View details</a>
                                          <a class="dropdown-item" href="#">Copy campaign</a>
                                          <a class="dropdown-item" href="#">Create list</a>
                                          <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div id="pills-4" class="tab-pane fade">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="table-responsive">
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">
                                 <span>Image</span>
                              </th>
                              <th scope="col">
                                 <span>Name</span>
                              </th>
                              <th scope="col">
                                 <span>Delivered</span>
                              </th>
                              <th scope="col">
                                 <span>Opened</span>
                              </th>
                              <th scope="col">
                                 <span>Bounced</span>
                              </th>
                              <th scope="col">
                                 <span>Unsubscribed</span>
                              </th>
                              <th scope="col">
                                 <span>Status</span>
                              </th>
                              <th scope="col">
                                 <span></span>
                              </th>
                              <th scope="col">
                                 <span></span>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/01.png')}}" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>03 Dec , 2020</span>
                              </td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-success-light badge">Active</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton9" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton9" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/04.png')}}" class="bg-info-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>29 Nov , 2020</span>
                              </td>
                              <td>2</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-success-light badge">Active</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton16" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton16" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/02.png')}}" class="bg-danger-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>29 dec , 2020</span>
                              </td>
                              <td>2</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-success-light badge">Active</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton11" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton11" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/05.png')}}" class="bg-warning-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>20 Oct , 2020</span>
                              </td>
                              <td>2</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-success-light badge">Active</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton20" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton20" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/01.png')}}" class="bg-success-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>03 Dec , 2020</span>
                              </td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-success-light badge">Active</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton15" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton15" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                           <tr>
                              <td>
                                 <img src="{{asset('images/options/04.png')}}" class="bg-info-light rounded p-3 img-fluid avatar-70" alt="image">
                              </td>
                              <td>
                                 <h6 class="mb-2">Campaigns Name</h6>
                                 <span>29 Nov , 2020</span>~
                              </td>
                              <td>2</td>
                              <td>0</td>
                              <td>0</td>
                              <td>0</td>
                              <td><a href="#" class="bg-success-light badge">Active</a></td>
                              <td>
                                 <div class="dropdown">
                                    <span class="dropdown-toggle1" id="dropdownMenuButton10" data-toggle="dropdown" aria-expanded="false" role="button">
                                       <i class="fas fa-cog"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10" style="">
                                       <a class="dropdown-item" href="#">Show activity</a>
                                       <a class="dropdown-item" href="#">View details</a>
                                       <a class="dropdown-item" href="#">Copy campaign</a>
                                       <a class="dropdown-item" href="#">Create list</a>
                                       <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#">Delete</a>
                                    </div>
                                 </div>
                              </td>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
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