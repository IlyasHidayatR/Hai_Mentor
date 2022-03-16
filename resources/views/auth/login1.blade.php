<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
    </head>
</html>

<body>
    <section class="vh-100 comfortaa">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-8 text-black">            
            <div class="d-flex justify-content-center align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                <form style="width: 40rem;" method="POST" action="{{ route('login') }}">
                @csrf
                    <img src="https://haimentor.com/webs/img/logo-white.png" class="mt-3" alt="" width="140px" height="30px">
                    <h1 class="my-4" style="color:blue"><b>Selamat Datang</b></h2>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Hai, Silakan melakukan login untuk memasuki dashboard Hai Mentor</h6>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example18">Email</label>
                        <input type="email" id="email" class="form-control form-control-lg shadow-sm bg-white rounded border-0" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password" :value="__('Password')">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg shadow-sm bg-white rounded border-0" name="password" required autocomplete="current-password" />
                    </div>
                    <div class="d-flex justify-content-between">
                        <label for="remember_me" class="items-center">
                            <input id="remember_me" type="checkbox" class="mb-4 pb-lg-2 rounded border-primary-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">Ingat aku</span>
                        </label>
                        @if (Route::has('password.request'))
                            <p class="small mb-2 pb-lg-2 d-inline" style="color:blue"><a href="{{ route('password.request') }}">Lupa password?</a></p>
                        @endif
                    </div>
                    <div class="pt-1 mb-4">
                        <button class="btn btn-lg btn-block" style="background-color: blue; color: white" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-4 px-0 d-none d-sm-block">
            <img src="https://i.pinimg.com/originals/63/e8/9a/63e89a7319903167660fa48268158ce0.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
        </div>
    </div>
    </section>
</body>
        
