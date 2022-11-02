@extends('layouts.global')
@section('title')
Ini adalah halaman Customer

@endsection

@section('content')
<div class="container px-4 py-5">
    @if (session('success'))
    <div class="alert alert-success">
        <b>Yeah!</b> {{ session('success') }}
    </div>
    @endif
    <a href="{{ route('customer.create') }}" class=""><Button class="btn btn-primary mb-3">Tambah</Button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HandPhone</th>
                <th scope="col">SkinCare</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $cs)
            <tr>
                <th scope="row">{{ $cs->id }}</th>
                <td>{{ $cs->nama }}</td>
                <td>{{ $cs->alamat }}</td>
                <td>{{ $cs->noHP }}</td>
                <td>{{ $cs->face->merk }}</td>
                <td>{{ $cs->face->harga }}</td>
                
                <td>
                    <a href="#" class=""><Button class="btn btn-success mb-3">Lihat</Button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection