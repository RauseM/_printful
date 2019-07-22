@extends('layout.main-printful')
@section('content')

    <h2>LABOT</h2>

    @foreach ($posts as $postItem)
    @include('index')

    {{--Šeit man radās kļūda - nevaru saprast kāpēc tad, kad palaižu lapu izmet erroru - Trying to get property 'Virsraksts' of non-object - izmklējos un kaut ko salaboju, bet tik un tā rādās tāds errors.}}

    

    {{-- <form action="/submit-newblogpost" method="post">

        <div class="form-group">
        <h5 contenteditable="true" class="card-title card">{{$postItem->Virsraksts}}</h5>
        <br>
        <p contenteditable="true" class="card-title card">{{$postItem->Apraksts}}</p>
        </div>
            
        <button type="submit" class="save">SAGLABĀT</button>

        <div class="button-right">
          <button type="delete" class="delete">DZĒST</button>
          <a href="/_printful/public/" class="save">ATPAKAĻ</a>
        </div>

  </form> --}}
@endforeach

@endsection