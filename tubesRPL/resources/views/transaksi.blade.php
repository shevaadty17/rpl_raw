@extends('layout')

@section('title','Transaksi') 

@section('content')
<div class="container" style="margin:20px auto 50px auto">
    <h1 class="text-center">Tambah Transaksi</h1>
    <form action="/transaksi" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="mb-3 col-md-8">
            <label for="exampleFormControlInput1" class="form-label">Pilih Barang</label>
            <input type="text" class="form-control" name= "nama_barang" id="exampleFormControlInput1" list="datalistOptions">
            <datalist id="datalistOptions">
                
                @foreach ($barang as $item)
                    <option value="{{ $item->nama_barang }}">{{ $item->id }}</option>
                @endforeach
            </datalist>
        </div>
        <div class="mb-3 col-md-4">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" name= "harga_barang" id="exampleFormControlInput1">
        </div>
    </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </div>
        
    </form>
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="mb-3 col">
                    <p class="card-text">Kasur Busa</p>
                </div>
                <div class="mb-3 col">
                    <p class="card-text">180000</p>
                </div>
                <div class="mb-3 col">
                    <p class="card-text">2x</p>
                </div>
                <div class="mb-3 col">
                    <p class="card-text">360000</p>
                </div>
            </div>
            <a href="#" class="btn btn-warning">Print</a>
    </div>
    
    
    
</div>

@endsection
