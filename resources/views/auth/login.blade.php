<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{ session('status') }}</strong>
            </div>
        @endif

        <div class="d-flex align-items-center"
             style="min-height: 100vh">
            <div class="col-sm-8 col-md-6 col-lg-4 mx-auto"
                 style="min-width: 300px;">

                <div class="d-flex justify-content-center mb-5 navbar-light">
                    <a href="/"
                       class="navbar-brand m-0">EPZ GLOBAL</a>
                </div>
                <div class="card navbar-shadow">
                    <div class="card-header text-center">
                        <h4 class="card-title">Login</h4>
                        <p class="card-subtitle">Access your account</p>
                    </div>
                    <div class="card-body">


                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Your email address:</label>
                                <div class="input-group input-group-merge">
                                    <input id="email"
                                           type="email" name="email" :value="old('email')" required autofocus
                                           class="form-control form-control-prepended"
                                           placeholder="Your email address">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Your password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password"
                                           type="password" name="password" required autocomplete="current-password"
                                           class="form-control form-control-prepended"
                                           placeholder="Your password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit"
                                        class="btn btn-primary btn-block">Login</button>
                            </div>

                            @if (Route::has('password.request'))
                            <div class="text-center">
                                <a href="{{ route('password.request') }}"
                                   class="text-black-70"
                                   style="text-decoration: underline;">Forgot Password?</a>
                            </div>
                            @endif
                        </form>
                    </div>
                    <div class="card-footer text-center text-black-50">
                        Not yet a member? <a href="{{route('register')}}">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>


    </x-jet-authentication-card>
</x-guest-layout>
