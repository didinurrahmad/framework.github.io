@extends('layouts.global')
@section('title')
Create Customer
@endsection
@section('content')
<div class="container">
    <form action="/customer/store" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Customer" required>
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid 
@enderror" id="alamat" name="alamat" placeholder="Alamat" required>
            @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="noHP" class="form-label">No HP</label>
            <input type="text" class="form-control @error('noHP') is-invalid 
@enderror" id="noHP" name="noHP" placeholder="No Handphone" required>
            @error('noHP')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
       
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Tambah</button>
        </div>
    </form>
</div>
@endsection