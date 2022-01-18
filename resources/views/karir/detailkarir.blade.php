@extends('dashboard')
@section('content')
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
        <div class="col-md">
            <h6><b>Karir Lainnya</b></h6>
            <br>
            <ul class="list-group" style="list-style-type: none">
                @forelse ($data as $data)
                <li>
                    <div class="border-0">
                        <div class="mb-4">
                            <img class="mr-3 float-left" style="border-radius: 7px" src="{{$data->IMG_PATH}}" alt="" width="60px" height="50px">
                            <h6 class="card-title"><b><a style="color: black" href="/karir/{{$data->ID_KARIR}}">{{$data->TITLE}}</a></b></h6>
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