@extends('dashboard')
@section('content')
<div class="mb-4" style=" color:#0A2E54 ;font-family: Comfortaa">
    <h4>Karir</h4>
</div>
<div class="row justify-content-center" style="margin-bottom: 150px; font-family: Comfortaa">
    @forelse ($data as $data)
    <div class="col col-md-4 mb-4">
        <div class="card"
            style="width: 18rem; padding: 1.5em .5em .5em; border-radius: 2em; box-shadow: 0 5px 10px rgba(0,0,0,.2);">
            <img src="{{$data->IMG_PATH}}" class="card-img-top" alt="...">
            <div class="card border-0 p-2">
                <h5 class="card-title">{{$data->TITLE}}</h5>
                <h6 class="card-subtitle mb-2 text-muted"><small>{{$data->NAME}}</small></h6>
                <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                    </svg> {{$data->LOCATION}}</p>
                <p class="card-text">ditutup pada {{$data->END_DATE}}</p>
                <a href="beasiswa/{{$data->ID_KARIR}}" class="text-right">selengkapnya</a>
            </div>
        </div>
    </div>
    @empty
    <p>data not found</p>
    @endforelse
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 16640cc81e94f8651e23ab446c705c6a624b6a73
