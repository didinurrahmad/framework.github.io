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
                <th scope="col">action</th>
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

                <td>

                    <a href="#" class=""><Button class="btn btn-success mb-3">Lihat</Button></a>
                    <a href="#" class=""><Button class="btn btn-warning mb-3">Edit</Button></a>
                    <form action="" method="post" style="display:inline" onsubmit="confirm('apakah anda yakin ingin menghapus mahasiswa ini?')">
                    @csrf
                    @method('delete')
                    <Button type="submit" class="btn btn-danger mb-3">Delete</Button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection