@extends('layout')

@section('title','Profile') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Profile</h1>
    <div class="card mb-3">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nama</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="/profile/edit" class="btn btn-warning">Edit</a>
      </div>
  </div>
</div>

@endsection
