@extends('layout')

@section('title','TambahBarang') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Tambah Barang</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contoh: Kasur Busa">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga Barang</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Barang</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</div>

@endsection
