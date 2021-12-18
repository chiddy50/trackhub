<x-guest-layout>

   <section class="login-content">
        <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-12 text-center">
                                    <img src="{{asset('/images/trackhub_logo.jpeg')}}" class="img-fluid mb-3" width="150" alt="">
                                    <h2>Reset Password</h2>
                                    <p>{{ __('This is a secure area of the application. Please reset your password.') }}</p>
                                    <!-- Validation Errors -->
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    <form method="POST" action="{{ route('confirmPassword') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label for="password">New Password</label>
                                            <input id="password" class="form-control"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password" />
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input id="password_confirmation" class="form-control"
                                                            type="password"
                                                            name="password_confirmation"
                                                            required autocomplete="current-password" />
                                        </div>

                                        <button class="btn btn-primary btn-block">
                                            {{ __('Confirm') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>


