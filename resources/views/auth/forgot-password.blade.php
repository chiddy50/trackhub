<x-guest-layout>
    <!--<section class="login-content">
        <div class="container">
           <div class="row align-items-center justify-content-center height-self-center">
              <div class="col-lg-8">
                 <div class="card auth-card">
                    <div class="card-body p-0">
                       <div class="d-flex align-items-center auth-content">
                          <div class="col-lg-6  content-left">
                             <div class="p-3">
                                <h2 class="mb-2 ">Reset Password</h2>
                                <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>-->
                                <!-- Session Status -->
                               <!-- <x-auth-session-status class="mb-4" :status="session('status')" />-->

                                <!-- Validation Errors -->
                              <!--  <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form method="POST" action="{{ route('password.email') }}">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="floating-label form-group">
                                                <input class="floating-input form-control" type="email" placeholder=" " id="email"   name="email" :value="old('email')" required autofocus>
                                                <label>Email <span class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                   <button type="submit" class="btn btn-primary">{{ __('Email Password Reset Link') }}</button>
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
    </section>-->

    <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <h2 class="mb-2">Reset Password</h2>
                        <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                              <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        @if (session('error'))
                           <div class="alert alert-danger">
                              {{ session('error') }}
                           </div>
                        @endif
                        
                        <form method="POST" action="{{ route('password.email') }}">
                           {{csrf_field()}}
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class=" form-group">
                                    <label class="mb-0">Email<span class="text-danger">*</span></label>
                                    <input class=" form-control" type="email" placeholder=" " id="email"   name="email" :value="old('email')" required autofocus>
                                    
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-lg">Reset</button>
                        </form>
                     </div>
                     <div class="col-lg-6 rmb-30">
                        <img src="{{asset('/images/login/01.png')}}" style="width:80%;" class="img-fluid w-80" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
</x-guest-layout>
