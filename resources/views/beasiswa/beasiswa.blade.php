@extends('dashboard')
@section('content')
<div class="mb-4" style="color:#0A2E54 ;font-family: Comfortaa">
    <h4>Beasiswa</h4>
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
                <p class="card-text">{{$data->DESC}}</p>
                <a href="beasiswa/{{$data->ID_BEASISWA}}" class="text-right">selengkapnya</a>
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
