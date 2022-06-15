@extends('layout')

@section('title','Barang') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Daftar Barang</h1>
    <div class="col-sm-2" style="margin-bottom:20px">
      <div class="card">
        <center>
          <img src="{{asset('assets/snack.png')}}" class="card-img-top" alt="..." style="height:100px; width:100px; margin-top:20px">
        </center>
          <div class="card-body">
              <h5 class="card-title">Snack</h5>
              <p class="card-text">Stock : ...</p>
          </div>
          <div class="card-footer">
              <center>
                  <a href="" class="btn btn-danger">Delete</a>
                  <a href="" class="btn btn-warning">Edit</a>
              </center>
          </div>
      </div>
  </div>
</div>

@endsection
