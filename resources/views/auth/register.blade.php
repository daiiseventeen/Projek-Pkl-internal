<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>Register - Modernize Admin</title>
</head>

<body>
    <div class="preloader">
        <img src="{{ asset('assets/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
                <div class="card mb-0">
                    <div class="card-body">
                        <a href="#" class="text-nowrap logo-img text-center d-block mb-4 w-100">
                            <img src="{{ asset('assets/images/logos/dark-logo.svg') }}" class="dark-logo"
                                alt="Logo-Dark" />
                            <img src="{{ asset('assets/images/logos/light-logo.svg') }}" class="light-logo"
                                alt="Logo-light" />
                        </a>
                        <div class="row">
                            <div class="col-6 mb-2 mb-sm-0">
                                <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                                    href="javascript:void(0)" role="button">
                                    <img src="../assets/images/svgs/google-icon.svg" alt="modernize-img"
                                        class="img-fluid me-2" width="18" height="18">
                                    <span class="flex-shrink-0">with Google</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="btn text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                                    href="javascript:void(0)" role="button">
                                    <img src="../assets/images/svgs/facebook-icon.svg" alt="modernize-img"
                                        class="img-fluid me-2" width="18" height="18">
                                    <span class="flex-shrink-0">with FB</span>
                                </a>
                            </div>
                        </div>
                        <div class="position-relative text-center my-4">
                            <p class="mb-0 fs-4 px-3 d-inline-block bg-white z-index-5 position-relative">Register with
                                email</p>
                            <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 py-2 mb-4 rounded-2">Sign Up</button>

                            <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-4 mb-0 text-dark">Already have an account?</p>
                                <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Sign In</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
</body>

</html>
