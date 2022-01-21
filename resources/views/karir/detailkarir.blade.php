@extends('dashboard')
@section('content')
<<<<<<< HEAD
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
    <div class="mb-4" style="font-family: Comfortaa">
        <h4><b>{{$karir->TITLE}}</b></h4>
        <h6 class="text-muted">{{$karir->NAME}} - 04/08, 12:52</h6>
    </div>
    <div class="row" style="margin-bottom: 240px; font-family: Comfortaa">
        <div class="col-md-8 mr-4 mb-3">
            <img class="mb-4" src="{{$karir->IMG_PATH}}" alt="" width="90%" height="70%">
            <h4 class="mt-2 mb-3"><b>Deskripsi Pekerjaan</b></h4>
            <p>{{$karir->DESC}}</p>
        </div>
=======
<div class="mb-4" style="font-family: Comfortaa">
    <h4><b>{{$karir->TITLE}}</b></h4>
    <h6 class="text-muted">{{$karir->NAME}} - 04/08, 12:52</h6>
</div>
<div class="row" style="margin-bottom: 240px; font-family: Comfortaa">
    <div class="col-md-8 mr-4 mb-3">
        <img class="mb-4" src="{{$karir->IMG_PATH}}" alt="" width="90%" height="70%">
        <h4 class="mt-2 mb-3"><b>Deskripsi Pekerjaan</b></h4>
        <p>{{$karir->DESC}}</p>
    </div>
>>>>>>> 5e72c66617564d578a5da014120cebddf5d283f6
        <div class="col-md">
            <h6><b>Karir Lainnya</b></h6>
            <br>
            <ul class="list-group" style="list-style-type: none">
<<<<<<< HEAD
                @forelse ($data1 as $data)
=======
                @forelse ($data as $data)
>>>>>>> 5e72c66617564d578a5da014120cebddf5d283f6
                <li>
                    <div class="border-0">
                        <div class="mb-4">
                            <img class="mr-3 float-left" style="border-radius: 7px" src="{{$data->IMG_PATH}}" alt="" width="60px" height="50px">
                            <h6 class="card-title"><b><a style="color: black" href="/karir/{{$data->ID_KARIR}}">{{$data->TITLE}}</a></b></h6>
                            <h6 class="card-subtitle text-muted"><SMall>{{$data->NAME}}</SMall></h6>
                        </div>
                    </div>
                </li>
<<<<<<< HEAD
                @empty
                <p>data not found</p>
                @endforelse
=======
            @empty
            <p>data not found</p>
            @endforelse
>>>>>>> 5e72c66617564d578a5da014120cebddf5d283f6
            </ul>
        </div>
    </div>
@endsection