<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />


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
                        <h4 class="card-title">Sign Up</h4>
                        <p class="card-subtitle">Create a new account</p>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-label"
                                       for="name">Name:</label>
                                <div class="input-group input-group-merge">
                                    <input id="name"
                                           type="text"
                                           name="name" value="{{old('name')}}" required autofocus autocomplete="name"
                                           class="form-control form-control-prepended"
                                           placeholder="Your first and last name">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="email">Email address:</label>
                                <div class="input-group input-group-merge">
                                    <input id="email"
                                           type="email"
                                           name="email" value="{{old('email')}}" required
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
                                       for="password">Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password"
                                           type="password" name="password" required autocomplete="new-password"
                                           class="form-control form-control-prepended"
                                           placeholder="Choose a password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password2">Confirm Password:</label>
                                <div class="input-group input-group-merge">
                                    <input id="password2"
                                           type="password" name="password_confirmation" required autocomplete="new-password"
                                           class="form-control form-control-prepended"
                                           placeholder="Confirm password">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <span class="far fa-key"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-primary btn-block mb-3">Sign Up</button>

                        </form>
                    </div>
                    <div class="card-footer text-center text-black-50">Already signed up? <a href="{{route('login')}}">Login</a></div>
                </div>
            </div>
        </div>

    </x-jet-authentication-card>
</x-guest-layout>
