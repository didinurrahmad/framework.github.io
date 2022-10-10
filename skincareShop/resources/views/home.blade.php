@extends('layouts.global')

@section('title')
Ini Halaman Home
@endsection

@section('content')
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Daftar Customer SkinCareShop</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HandPhone</th>
                <th scope="col">SkinCare Face</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <th scope="row">{{ $customer->id }}</th>
                <td>{{ $customer->nama }}</td>
                <td>{{ $customer->alamat }}</td>
                <td>{{ $customer->noHP }}</td>
                <td>{{ $customer->face->merk }}</td>
                <td>{{ $customer->face->harga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection