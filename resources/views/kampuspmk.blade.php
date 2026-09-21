@extends('layouts.app')

@section('title', 'Kampus_PSDKU')

@section('content')

<div class="container">


    <div class="card identitas-card">

    <div class="identitas-text">

        <h2>Identitas Kampus</h2>

        <p>
            <strong>Nama Kampus</strong>
            <span>{{ $namaKampus }}</span>
        </p>

        <p>
            <strong>Tahun Berdiri</strong>
            <span>{{ $tahunBerdiri }}</span>
        </p>

        <p>
            <strong>Kota</strong>
            <span>{{ $kota }}</span>
        </p>

        <p>
            <strong>Status</strong>
            <span>{{ $status }}</span>
        </p>

        @if ($status == "Aktif")
            
        @endif

    </div>


    <div class="identitas-image">

        <img src="{{ asset('images/image1.jpeg') }}"
             alt="Kampus Polinema PSDKU Pamekasan">

    </div>

</div>

    


    <div class="card">

        <h2>Tentang Kampus</h2>

        <p>
            {{ $tentang }}
        </p>

    </div>


    <div class="card">

        <h2>Visi</h2>

        <p>
            {{ $visi }}
        </p>

    </div>


 

    <div class="card">

        <h2>Misi</h2>

        <ul class="tanpa-titik">

            @foreach ($misi as $item)

                <li>
                    {{ $loop->iteration }}.
                    {{ $item }}
                </li>

            @endforeach

        </ul>

    </div>


    <div class="card">

        <h2>Program Studi</h2>

       <ul class="tanpa-titik">

            @foreach ($prodi as $item)

                <li>
                    {{ $loop->iteration }}.
                    {{ $item }}
                </li>

            @endforeach

        </ul>

    </div>


    <div class="card">

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

@endsection