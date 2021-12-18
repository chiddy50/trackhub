<x-guest-layout>
<section class="login-content">
         <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6 rmb-30">
                        <img src="{{asset('images/login/1.png')}}" class="img-fluid w-80" alt="">
                     </div>
                     <div class="col-lg-6">
                        <img src="{{asset('images/login/mail.png')}}" class="img-fluid" width="80" alt="">
                        <h2 class="mt-3 mb-0">Success !</h2>
                        <p class="cnf-mail mb-1">A email has been send to youremail@domain.com. Please check for an
                           email from company and click
                           on the included link to reset your password.</p>
                        <div class="d-inline-block w-100">
                           <a href="{{ route('login') }}">
                              <button type="button"  class="btn btn-primary btn-lg mt-3">Back to Home</button>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
</x-guest-layout>