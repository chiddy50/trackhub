<x-guest-layout>
<!-- <section class="login-content">
    <div class="container">
       <div class="row align-items-center justify-content-center height-self-center">
          <div class="col-lg-8">
             <div class="card auth-card">
                <div class="card-body p-0">
                   <div class="d-flex align-items-center auth-content">
                      <div class="col-lg-6  content-left">
                         <div class="p-3">
                            <h2 class="mb-2 ">Sign In</h2>
                            <p>Login to stay connected.</p>
                            <!-- Session Status -->
                            <!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

                            <!-- Validation Errors -->
                            <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->
                            <!--<form method="POST" action="{{ route('login') }}" data-toggle="validator">
                            {{csrf_field()}}
                               <div class="row">
                                  <div class="col-lg-12">
                                     <div class="floating-label form-group">
                                        <input id="email" type="email" name="email"  value="{{old('email')}}" class="floating-input form-control"  placeholder=" " required >
                                        <label>Email <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-12">
                                     <div class="floating-label form-group">
                                        <input class="floating-input form-control" type="password" name="password"  required autocomplete="current-password" placeholder=" ">
                                        <label>Password <span class="text-danger">*</span></label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label control-label-1 " for="customCheck1">Remember Me</label>
                                     </div>
                                  </div>
                                  <div class="col-lg-6">
                                     <a href="{{route('auth.recover-password')}}" class=" float-right">Forgot Password?</a>
                                  </div>
                               </div>
                               <button type="submit" class="btn btn-primary">{{ __('sign') }}</button>
                               <p class="mt-3">
                                  Create an Account <a href="{{route('auth.register')}}" class=" text-underline">Sign Up</a>
                               </p>
                            </form>
                         </div>
                      </div>
                      <div class="col-lg-6 content-right">
                         <img src="{{ asset('images/login/01.png') }}" class="img-fluid image-right" alt="">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section> -->
<section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <img src="{{asset('/images/trackhub_logo.jpeg')}}" class="img-fluid w-10 mb-3 main-logo" alt="">

                        <h2 class="mb-2">Sign In</h2>
                        <p>To Keep connected with us please login with your personal info.</p>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        @if (session('status'))
                           <p class="text-xs text-red-400 pb-2">
                              {{ session('status') }}
                           </p>
                        @endif

                        @if (session('error'))
                           <p class="text-xs text-red-400 pb-2">
                              {{ session('error') }}
                           </p>
                        @endif
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            
                        <form method="POST" action="{{ route('login') }}" data-toggle="validator">
                            {{csrf_field()}}
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="mb-0" >Email<span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" placeholder=" " id="email" name="email"  value="{{old('email')}}">
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="mb-0">Password<span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" placeholder=" " name="password"  required autocomplete="current-password">
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <a href="{{route('auth.recover-password')}}" class="text-primary float-right">Forgot Password?</a>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                           <p class="mt-3">
                              Create an Account <a  href="{{route('auth.register')}}" class="text-primary">Sign Up</a>
                           </p>
                        </form>
                     </div>
                     <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                        <img src="{{asset('images/login/01.png')}}" class="img-fluid w-80" style="width:80%;" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
</x-guest-layout>
