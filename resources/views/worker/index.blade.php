@extends('layouts.worker-layout')

@section('content')
    {{ $worker }}
    @if ($worker->foto_ktp)
        <img src="{{ asset('storage/' . $worker->foto_ktp) }}" alt="Foto KTP">
    @endif
    @if ($worker->foto_formal)
        <img src="{{ asset('storage/' . $worker->foto_formal) }}" alt="Foto Formal">
    @endif
    <p>{{ $role }}</p>
@endsection
