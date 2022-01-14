<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    </head>
    <body>
        <!-- navbar -->
        <header>
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark navbar-default" style="background-color: #0A2E54; padding: 14px 16px">
                    <img src="https://haimentor.com/webs/img/logo-white.png" alt="" width="140px" height="30px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="mx-auto order-0">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto w-100">
                            <li class="nav-item active">
                                <a class="nav-link mx-auto" style ="border-radius: nullpx; color:white; font-family: Comfortaa" href="#">Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link mx-auto" style ="border-radius: nullpx; color:white; font-family: Comfortaa" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Informasi <i class="fas fa-angle-down"></i> 
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Beasiswa</a>
                                    <a class="dropdown-item" href="#">Pelatihan</a>
                                    <a class="dropdown-item" href="#">Karir</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-auto" style ="border-radius: nullpx; color:white; font-family: Comfortaa" href="#">Gabung Menjadi Mentor</a>
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
            <div class="container" style="background-color: white">
                <center>
                    <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
                    <div class="input-group  mr-3 w-50">
                <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="Search" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0 border-bottom-0 border-top-0 border rounded-pill" style="margin-left: -40px" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
                    <!-- <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-2">
                        <input class="form-control border form-control-sm mr-3 w-50 rounded-3" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn bg-white border rounded-pill" style="margin-left: -40px" type="button">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </button>
                    </form> -->
                </center>
                @yield('content')
            </div>
        </main>
        <!-- bagian footer -->
        <footer class="text-white" style="background-color: #0A2E54; font-family: Comfortaa">
            <section class="footer-content">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                            <img src="https://haimentor.com/webs/img/logo-white.png" alt="" width="140px" height="30px">
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
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
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
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
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-mb-12">
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
                <div class="border-top border-white p-3" style="background-color: #0A2E54; font-family: Comfortaa">

                </div>
            </section>
        </footer>
    </body>
</html>