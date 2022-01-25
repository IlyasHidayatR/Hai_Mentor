<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('judul')</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <style>
            .max-desc {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            }

            .max-title {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            }

            .dropdown:hover>.dropdown-menu {
            display: block;
            }
        </style>
    </head>
    <body>
        <!-- navbar -->
        <header>
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark navbar-default fixed-top" style="background-color: #0A2E54; padding: 14px 16px">
                    <img src="https://haimentor.com/webs/img/logo-white.png" alt="" width="140px" height="30px">
                    <button class="navbar-toggler order-3 mr-1" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="mx-auto">
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto w-100">
                            <li class="nav-item active">
                                <a class="nav-link mx-3" style ="border-radius: nullpx; color:white; font-family: Comfortaa" href="#">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link mx-3" style ="border-radius: nullpx; color:white; font-family: Comfortaa" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Informasi <i class="fas fa-angle-down"></i> 
                                </a>
                                <div class="dropdown-menu" style="font-family: Comfortaa" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="/beasiswa">Beasiswa</a>
                                    <a class="dropdown-item" href="/pelatihan">Pelatihan</a>
                                    <a class="dropdown-item" href="/karir">Karir</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" style ="border-radius: nullpx; color:white; font-family: Comfortaa" href="#">Gabung Menjadi Mentor</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                    <div class="order-3">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <button type="button" class="btn" style="background-color: white; color:#0A2E54; font-weight: bold; font-family: Comfortaa;">Download Sekarang</button>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- bagian isi -->
        <main>
            <div class="container" style="background-color: white; margin-top: 110px">
                @yield('content')
            </div>
        </main>
        <!-- bagian footer -->
        <footer class="text-white mt-3" style="background-color: #0A2E54; font-family: Comfortaa">
            <section class="footer-content">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12 mt-3">
                            <img src="https://haimentor.com/webs/img/logo-white.png" alt="" width="140px" height="30px">
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12 mt-3">
                            <div class="widget">
                                <h4 class="block-title">Site Map</h4>
                                <ul class="list-group" style="list-style-type: none">
                                    <small>
                                        <li><a class="text-white" href="#">Beasiswa</a></li>
                                        <br>
                                        <li><a class="text-white" href="#">Pelatihan</a></li>
                                        <br>
                                        <li><a class="text-white" href="#">Karir</a></li>
                                        <br>
                                        <li><a class="text-white" href="#">List Mentor</a></li>
                                        <br>
                                        <li><a class="text-white" href="#">Cara Daftar</a></li>
                                        <br>
                                        <li><a class="text-white" href="#">Benifit</a></li>
                                    </small>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12 mt-3">
                            <div class="widget">
                                <h4 class="block-title">Hubungi Kami</h4>
                                <ul class="list-group" style="list-style-type: none">
                                    <small>
                                        <li><a class="text-white" href="#">Jl. Jupiter Tengah I No.44, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286 </a></li>
                                        <br>
                                        <li><a class="text-white" href="#">+6282132135749</a></li>
                                        <br>
                                        <li><a class="text-white" href="#">contact@haimentor.com</a></li>
                                    </small>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12 mt-3">
                            <div class="widget">
                                <h4 class="block-title">Download App</h4>
                                <ul class="list-inline" style="list-style-type: none">
                                    <li><a class="text-white" href="#" style="padding-left: 0px; padding-right: 2px;">
                                        <img class="img-fluid" src="https://haimentor.com/webs/img/AppStore.png" alt="" style="width: 130px; height: 40px;">
                                    </a>
                                    <a class="text-white" href="#" style="padding-left: 0px;">
                                        <img class="img-fluid" src="https://haimentor.com/webs/img/PlayStore.png" alt="" style="width: 130px; height: 40px;">
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <hr width="90%" align="center" color="white">
                <div class="p-2" style="background-color: #0A2E54; font-family: Comfortaa">
                    
                </div>
            </section>
        </footer>
    </body>
</html>