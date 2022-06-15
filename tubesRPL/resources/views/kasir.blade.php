@extends('layout')

@section('title','Kasir') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Daftar Barang</h1>
    <a class="btn btn-primary mb-3" href="/barang/create">Tambah Barang</a>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nama Barang</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-warning">Edit</a>
        <a href="#" class="btn btn-danger">Delete</a>
      </div>
  </div>
</div>

@endsection
