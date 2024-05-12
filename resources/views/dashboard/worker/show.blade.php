@extends('layouts.dashboard-layout')
@section('content')
    <div class="w-full my-6 pr-0 lg:pr-2">
        <h1>Nama : {{ $worker->nama }} </h1>
        <h1>Alamat : {{ $worker->alamat }}</h1>
        <h1>no hp : {{ $worker->no_hp }}</h1>
        <h1>Foto formal dan foto</h1>
        <div class="flex gap-x-6">
            <img class="h-40" src="{{ asset('storage/' . $worker->foto_formal) }}" alt="">
            <img class="h-40" src="{{ asset('storage/' . $worker->foto_ktp) }}" alt="">
        </div>
        <h1>Status menerima order : @if ($worker->status_menerima_order)
                <span class="text-green-900">Aktif</span>
            @endif
        </h1>
        <h1>Status verifikasi : @if ($worker->status_verifikasi)
                <span class="text-green-900">Terverifikasi</span>
            @else
                <span class="text-red-900">Belum Terverifikasi</span>
            @endif
        </h1>
        <h1>Jenis kelamin : {{ $worker->jenis_kelamin }}</h1>
        <h1>Latitude : {{ $worker->latitude }}</h1>
        <h1>Longitude : {{ $worker->longitude }}</h1>
    </div>
@endsection
