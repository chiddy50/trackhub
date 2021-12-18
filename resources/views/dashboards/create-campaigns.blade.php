<x-app-layout>
<div class="container-fluid">
   <div class="card">
      <div class="card-body">
         <div class="row">
            <div class="col-lg-12">
               <div class="d-flex align-items-top border-bottom justify-content-between mb-4">
                  <div class="form-name">
                     <h3 class="mb-2">Campaign Creator</h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="row">
                  <div class="col-sm-12">
                     <form>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Send To:</label>
                                 <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Enter list name or choose from list</option>
                                    <option>Engaged Contacts</option>
                                    <option>Active Contacts</option>
                                    <option>Blocked Contacts</option>
                                    <option>Stale Contacts</option>
                                    <option>Home</option>
                                    <option>Demo List</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group mb-0">
                                 <label class="mb-0">Subject / Content</label>
                                 <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select..</option>
                                    <option>Templates</option>
                                    <option>Email designer</option>
                                    <option>Raw HTML</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Campaign name</label>
                                 <input class="form-control" type="text" placeholder="">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">When to send</label>
                                 <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select..</option>
                                    <option>Send now</option>
                                    <option>When contact is added to audience</option>
                                    <option>When contact from audience opens an email</option>
                                    <option>When contact from audience clicks an email</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Send-time optimization:</label>
                                 <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select..</option>
                                    <option>1. none</option>
                                    <option>2. Send to the most engaged contacts first to optimize delivery</option>
                                    <option>3. Send this campaign to each contacts optimal open time over the next 24 hours</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Your Name</label>
                                 <input class="form-control" type="text" placeholder="Enter your firstname">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Last Name</label>
                                 <input class="form-control" type="text" placeholder="Enter your lastname">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Phone</label>
                                 <input class="form-control" type="number" placeholder="1234567890">
                              </div>
                           </div>
                           <div class="col-lg-12 mb-3">
                              <div class="form-group">
                                 <label class="mb-2">Address</label>
                                 <textarea class="form-control description" id="exampleFormControlTextarea2" rows="4" placeholder=""></textarea>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Zip / Postal code</label>
                                 <input class="form-control" type="text" placeholder="">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">City</label>
                                 <input class="form-control" type="text" placeholder="">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">State</label>
                                 <input class="form-control" type="text" placeholder="">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Country</label>
                                 <input class="form-control" type="text" placeholder="India">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <div class="form-group">
                                 <label class="mb-0">Website</label>
                                 <input class="form-control" type="text" placeholder="">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Company</label>
                                 <input class="form-control" type="text" placeholder="">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 mb-3">
                              <div class="form-group">
                                 <label class="mb-0">Company Logo</label>
                                 <div class="logo mt-3">
                                    <img src="{{asset('images/logo.png')}}" class="img-fluid avatar-60" alt="logo">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg mt-4">Save Info</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Page end  -->
</div>
</x-app-layout>
