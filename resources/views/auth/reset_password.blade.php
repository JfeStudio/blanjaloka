@extends('layouts.base')
@section('content')
<div class="container" >
<h1 align="center">Kode verifikasi dan link reset telah dikirim ke email anda :). Token akan kadaluwarsa dalam 24 jam.</h1>
<div class="d-flex justify-content-center">
<form method="post" action="{{route('tokenInputVerify')}}">
   @csrf
<div class="mb-3 row">
    <label class="col-sm-10 col-form-label">Masukkan Kode token untuk reset password !</label>
    <div class="col-sm-10">
      <input type="text" name="token"  class="form-control " >
    </div>
  </div>
<button type="submit" class="btn btn-primary">Kirim</button><br>
</form>
    </div>

</div>
@endsection