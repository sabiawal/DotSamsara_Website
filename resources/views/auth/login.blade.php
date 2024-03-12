{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="loading authentication-bg authentication-bg-pattern">
    <div class="account-pages my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="text-center">   
                        <a href="index.html">
                            <img src="assets/images/logo-dark.png" alt="" height="22" class="mx-auto">
                        </a>
                        <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                    </div>                        
                    <div class="card">
                        <div class="card-body p-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="mb-4 font-medium text-sm text-red-600">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">{{ __('Email') }}</label>
                                    <input class="form-control" type="email" id="emailaddress" name="email" :value="old('email')" required autofocus autocomplete="username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input class="form-control" type="password" required id="password" name="password" autocomplete="current-password">
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" name="remember">
                                        <label class="form-check-label" for="checkbox-signin">{{ __('Remember me') }}</label>
                                    </div>
                                </div>
                                <div class="mb-3 d-grid text-center">
                                    <button class="btn btn-primary" type="submit"> {{ __('Log in') }} </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @auth
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Two Factor Authentication') }}</div>
                            <div class="card-body">
                                @if (session('status') == "two-factor-authentication-disabled")
                                    <div class="alert alert-success" role="alert">
                                        Two factor Authentication has been disabled.
                                    </div>
                                @endif

                                @if (session('status') == "two-factor-authentication-enabled")
                                    <div class="alert alert-success" role="alert">
                                        Two factor Authentication has been enabled.
                                    </div>
                                @endif

                                <form method="GET" action="/user/two-factor-authentication">
                                    @csrf

                                    @if (auth()->user()->two_factor_secret)
                                        @method('DELETE')
                                        <button class="btn btn-danger">Disable</button>
                                    @else
                                        <button class="btn btn-primary">Enable</button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
</body>
</html>



