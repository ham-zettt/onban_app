@extends('layouts.dashboard-layout')
@section('content')
    <div class="flex gap-x-6">
        <div>
            <h1>Jumlah Worker : {{ $jumlahWorkerAktif }}</h1>
        </div>
        <div>
            <h1>Jumlah Worker belum terverifikasi : {{ $jumlahWorkerNonAktif }}</h1>
        </div>
        <div>
            <h1>Jumlah User : {{ $jumlahCustomer }}</h1>
        </div>
    </div>
@endsection
