<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
    </head>
</html>

<body>
    <section class="vh-100">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6 text-black">

            <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
            <span class="h1 fw-bold mb-0">Logo</span>
            </div>

            <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form style="width: 23rem;" method="POST" action="{{ route('login') }}">
            @csrf

                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control form-control-lg" name="email" :value="old('email')" required autofocus />
                        <label class="form-label" for="form2Example18">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="current-password" />
                        <label class="form-label" for="password" :value="__('Password')">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-lg btn-block" type="submit">login</button>
                    </div>
                @if (Route::has('password.request'))
                <p class="small mb-5 pb-lg-2"><a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a></p>
                @endif
                <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

            </form>

            </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
        </div>
    </div>
    </section>
</body>
        
