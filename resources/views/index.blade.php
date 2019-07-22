@extends('layout.main-printful')
@section('content')

    <h2>TO DO LIST</h2>
    <a href="add"><i class="fa fa-plus-circle"></i> Pievienot jaunu uzdevumu</a>
          
    <hr>

@foreach ($posts as $postItem)
    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-1 check">
                <input class="checkbx" type="checkbox" >
            </div>

            <div class="col-md-10 stils">
                <div class="card-body">
                  <h5 class="card-title">{{$postItem->Virsraksts}}</h5>
                  <p class="card-text">{{$postItem->Apraksts}}</p>
                <p class="card-text"><small class="text-muted">Publicēts: {{$postItem->updated_at}}</small></p>
                </div>
            </div>

            <div class="col-md-1 ">
                {{-- <a href="edit"><small>labot</small></a> --}}

                <a href="edit/{{$postItem->id}}"><small>labot</small></a>
            </div>
        </div>
    </div>
@endforeach


@endsection