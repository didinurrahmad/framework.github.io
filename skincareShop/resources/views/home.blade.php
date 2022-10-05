@extends('layouts.global')

@section('title')
    Ini Halaman Home
@endsection

@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Welcome to My Shop!</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            @foreach ($SkinCare as $sk)
                <div class=" col">
                    <div class="d-inline-flex align-items-centerjustify-content-center bg-gradient fs-2 mb-3">

                        <i class="bi {{ $sk['logo'] }}"></i>
                    </div>
                    <h3 class="fs-2">{{ $sk['merk'] }}</h3>
                    <p>{{ $sk['harga'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection