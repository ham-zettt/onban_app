@extends('layouts.worker-layout')

@section('content')
{{-- Main Card --}}
<div class="border-2 border-primary rounded-lg p-4">
    <div class="flex justify-between">
        <div class="">
            <p class="text-2xl">Total<br> Pendapatan</p>
            <h1 class="text-3xl text-primary font-bold">Rp100.000</h1>
        </div>
        <div class="">
            <p class="text-center">Status Work</p>
            <div class="border-2 border-gray-800 rounded-lg p-4">
                <p>Terima Orderan</p>
                <input type="checkbox" value="" class="sr-only peer">

<label class="inline-flex items-center cursor-pointer">
    <input type="checkbox" value="" class="sr-only peer">
    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Toggle me</span>
  </label>

            </div>
        </div>
    </div>
</div>
@endsection

{{-- {{ $worker }}
@if ($worker->foto_ktp)
    <img src="{{ asset('storage/' . $worker->foto_ktp) }}" alt="Foto KTP">
@endif
@if ($worker->foto_formal)
    <img src="{{ asset('storage/' . $worker->foto_formal) }}" alt="Foto Formal">
@endif
<p>{{ $role }}</p> --}}
