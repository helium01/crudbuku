@extends('buku.core')
@section('content')
<div class="container-fluid">

<form method="post" action="/buku">
    <!-- @methode=post -->
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Judul</label>
    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pengarang</label>
    <input type="text" name="pengarang" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tahun Terbit</label>
    <input type="number" name="tahun_terbit" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection