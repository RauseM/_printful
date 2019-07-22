@extends('layout.main-printful')
@section('content')
  <h2>JAUNS UZDEVUMS</h2>
  <form action="/submit-newblogpost" method="post">
      
      <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input name="title" type="text" class="form-control" placeholder="Virsraksts">
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlTextarea1"></label>
        <textarea name="body" class="form-control" rows="3" placeholder="Apraksts"></textarea>
      </div>

      
      
      <button type="submit" class="save">SAGLABĀT</button>
        <div class="button-right">
          <a href="/_printful/public/" class="save">ATPAKAĻ</a>
        </div>

  </form>
@endsection

{{--arī šeit kaut kas it kā iet, bet arī neiet, no datubāzes aiziet uz index lapu, bet no šīs lapas neaizsūtās uz datubāzi}}