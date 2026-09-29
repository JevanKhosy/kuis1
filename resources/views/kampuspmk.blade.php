@extends('layouts.app')

@section('title', 'Kampus PSDKU')

@section('content')

{{-- BOOTSTRAP --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>

    body {
        background-color: #f5f7fa;
    }

    .container-kampus {
        width: 90%;
        max-width: 1200px;
        margin: 25px auto;
    }

    .card-kampus {
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.10);
        margin-bottom: 20px;
        overflow: hidden;
        background-color: white;
    }

    /* IDENTITAS KAMPUS */

    .identitas-text {
        padding: 25px;
    }

    .identitas-text h2,
    .card-kampus h2 {
        color: #123c69;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .identitas-text p {
        margin-bottom: 12px;
    }

    .identitas-text strong {
        display: inline-block;
        width: 140px;
    }

    /* GAMBAR */

    .identitas-image {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        height: 100%;
    }

    .identitas-image img {
        width: 90%;
        height: 280px;
        object-fit: cover;
        border-radius: 10px;
        display: block;
    }

    /* LIST */

    .tanpa-titik {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .tanpa-titik li {
        margin-bottom: 8px;
    }

    /* RESPONSIVE */

    @media (max-width: 767px) {

        .container-kampus {
            width: 95%;
        }

        .identitas-text {
            padding: 20px;
        }

        .identitas-image {
            padding: 15px;
        }

        .identitas-image img {
            width: 100%;
            height: 220px;
        }

    }

</style>

<div class="container-kampus">

    {{-- IDENTITAS KAMPUS --}}
    <div class="card card-kampus">

        <div class="row g-0">

            {{-- TEKS --}}
            <div class="col-md-6">

                <div class="identitas-text">

                    <h2>Identitas Kampus</h2>

                    <p>
                        <strong>Nama Kampus</strong>
                        {{ $namaKampus }}
                    </p>

                    <p>
                        <strong>Tahun Berdiri</strong>
                        {{ $tahunBerdiri }}
                    </p>

                    <p>
                        <strong>Kota</strong>
                        {{ $kota }}
                    </p>

                    <p>
                        <strong>Status</strong>
                        {{ $status }}
                    </p>

                </div>

            </div>


            {{-- GAMBAR --}}
            <div class="col-md-6">

                <div class="identitas-image">

                    <img
                        src="{{ asset('images/image1.jpeg') }}"
                        alt="Kampus Polinema PSDKU Pamekasan"
                    >

                </div>

            </div>

        </div>

    </div>


    {{-- TENTANG KAMPUS --}}
    <div class="card card-kampus">

        <div class="card-body p-4">

            <h2>Tentang Kampus</h2>

            <p>
                {{ $tentang }}
            </p>

        </div>

    </div>


    {{-- VISI --}}
    <div class="card card-kampus">

        <div class="card-body p-4">

            <h2>Visi</h2>

            <p>
                {{ $visi }}
            </p>

        </div>

    </div>


    {{-- MISI --}}
    <div class="card card-kampus">

        <div class="card-body p-4">

            <h2>Misi</h2>

            <ul class="tanpa-titik">

                @foreach ($misi as $item)

                    <li>
                        {{ $loop->iteration }}. {{ $item }}
                    </li>

                @endforeach

            </ul>

        </div>

    </div>


    {{-- PROGRAM STUDI --}}
    <div class="card card-kampus">

        <div class="card-body p-4">

            <h2>Program Studi</h2>

            <ul class="tanpa-titik">

                @foreach ($prodi as $item)

                    <li>
                        {{ $loop->iteration }}. {{ $item }}
                    </li>

                @endforeach

            </ul>

        </div>

    </div>


    {{-- INFORMASI KAMPUS --}}
    <div class="card card-kampus">

        <div class="card-body p-4">

            <h2>Informasi Kampus</h2>

            @php
                $jumlahProdi = count($prodi);
            @endphp

            <p>
                Saat ini tersedia
                <strong>{{ $jumlahProdi }}</strong>
                program studi.
            </p>

        </div>

    </div>

</div>

@endsection