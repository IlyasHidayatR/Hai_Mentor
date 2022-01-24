@extends('dashboard')
@section('content')
    <center>
        <form action="/search/beasiswa" method="GET" class="form-inline d-flex justify-content-center md-form form-sm active-cyan-2 mt-4" style="margin-bottom: 60px">
            <div class="input-group mr-3 w-50 border rounded" style="border-color: #0A2E54">
                <input class="form-control border-end-0 border rounded" type="search" placeholder="Search" id="example-search-input" name="searchbea">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0 border-bottom-0 border-top-0 border rounded" style="margin-left: -40px" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </center>
    <div class="mb-4" style="font-family: Comfortaa">
        <h4><b>{{$beasiswa->TITLE}}</b></h4>
        <h6 class="text-muted">{{$beasiswa->NAME}} - {{$beasiswa->created_at}} WIB</h6>
    </div>
    <div class="row" style="margin-bottom: 240px; font-family: Comfortaa">
        <div class="col-md-8 mr-4 mb-3">
            <img class="mb-4" src="{{$beasiswa->IMG_PATH}}" alt="" width="90%" height="70%">
            <h4 class="mt-2 mb-3"><b>Tentang Beasiswa</b></h4>
            <p>{{$beasiswa->DESC}}</p>
        </div>
        <div class="col-md">
            <h6><b>Beasiswa Lainnya</b></h6>
            <br>
            <ul class="list-group" style="list-style-type: none">
            @forelse ($data1 as $data)
                <li>
                    <div class="border-0">
                        <div class="mb-4">
                            <img class="mr-3 float-left" style="border-radius: 7px" src="{{$data->IMG_PATH}}" alt="" width="60px" height="50px">
                            <h6 class="card-title"><b><a style="color: black" href="/beasiswa/{{$data->ID_BEASISWA}}">{{$data->TITLE}}</a></b></h6>
                            <h6 class="card-subtitle text-muted"><SMall>{{$data->NAME}}</SMall></h6>
                        </div>
                    </div>
                </li>
            @empty
            <p>data not found</p>
            @endforelse
            </ul>
        </div>
    </div>
@endsection
