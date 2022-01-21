@extends('dashboard')
@section('content')
<center>
    <form action="/search/karir" method="GET" class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-4" style="margin-bottom: 60px">
        <div class="input-group mr-3 w-50 border rounded" style="border-color: #0A2E54">
            <input class="form-control border-end-0 border rounded" type="search" placeholder="Search" id="example-search-input" name="searchkarir">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary border-left-0 border-bottom-0 border-top-0 border rounded" style="margin-left: -40px" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
</center>

<div class="mb-4" style=" color:#0A2E54 ;font-family: Comfortaa">
    <h4>Karir</h4>
</div>
<div class="row justify-content-center" style="margin-bottom: 150px; font-family: Comfortaa">
    @forelse ($data as $data)
    <div class="col-md-4 mb-4">
        <div class="card"
            style="width: 18rem; border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
            <img src="{{$data->IMG_PATH}}" class="card-img-top" alt="..." style="border-top-right-radius: 2em; border-top-left-radius: 2em">
            <div class="card border-0 p-2" style="border-radius: 2em">
                <h5 class="card-title">{{$data->TITLE}}</h5>
                <h6 class="card-subtitle mb-2 text-muted"><small>{{$data->NAME}}</small></h6>
                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg> {{$data->LOCATION}}</p>
                <p class="card-text text-muted">ditutup pada {{$data->END_DATE}}</p>
<<<<<<< HEAD
                <a href="karir/{{$data->ID_KARIR}}" class="text-right mb-2 mr-1">selengkapnya</a>
=======
                <a href="karir/{{$data->ID_KARIR}}" class="text-right">selengkapnya</a>
>>>>>>> 5e72c66617564d578a5da014120cebddf5d283f6
            </div>
        </div>
    </div>
    @empty
    <p>data not found</p>
    @endforelse
</div>
@endsection
