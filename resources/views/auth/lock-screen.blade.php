<x-guest-layout>
<section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <img src="{{asset('images/user/one.png')}}" class="rounded avatar-80 mb-3" alt="">
                        <h2 class="mb-2">Hi ! Bart Ender</h2>
                        <p>Enter your password to access the admin.</p>
                        <form>
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class=" form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" placeholder=" ">        
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </form>
                     </div>
                     <div class="col-lg-6 rmb-30">
                        <img src="{{asset('/images/login/01.png')}}" class="img-fluid w-80" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
</x-guest-layout>