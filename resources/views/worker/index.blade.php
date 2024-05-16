@extends('layouts.worker-layout')

@section('content')
    {{-- Worker Profile --}}
    <div class="flex">
        <img class="w-[100px] h-[100px] rounded-full border-4 border-primary" src="{{ asset('assets/images/alvan-nee-ZCHj_2lJP00-unsplash.jpg') }}" alt="">
        <div class="pl-3">
            <p class="font-bold text-[1.1rem]">Selamat Datang Worker,</p>
            <p class="pb-2"> {{ $worker->nama }}! </p>
            <hr class="border-1 border-gray-500 py-1">
            <p class="text-sm">Telah Bekerja selama 74 Tahun</p>
            <p class="text-sm">Sebagai Worker OnBan</p>
        </div>
    </div>

    {{-- Main Card --}}
    <div class="border-4 border-primary rounded-lg py-4 px-5 shadow-2xl">
        <div class="flex justify-between">
            <div class="flex flex-col justify-center">
                <p class="text-lg font-bold leading-6">Total Pendapatan</p>
                <p class="text-xs">1 Mei - 30 Mei 2024</p>
                <h1 class="text-2xl text-primary font-bold">Rp100.000</h1>
            </div>
            <div class="">
                <p class="text-center">Status Work</p>
                <div class="border-2 border-gray-500 rounded-lg p-3 mx-3 space-y-3 flex flex-col">
                    <p class="text-center font-bold leading-4">Terima Orderan?</p>
                    <input type="checkbox" value="1" class="sr-only peer">
                    <label class="justify-center inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    {{-- Detail Order List --}}


    <div class="w-full max-w-md p-4 bg-white border border-gray-400 rounded-lg shadow">
        <div class="flex items-center justify-between mb-2">
            <h5 class="text-xl font-bold text-gray-900">Daftar Pesanan</h5>
    </div>
    <div class="flow-root h-40 overflow-y-auto">
        @if ($orders->isEmpty())
        <div class="flex items-center justify-center h-full">
            <p class="text-gray-500">Belum Ada Pesanan</p>
        </div>
        @else
        <ul role="list" class="divide-y divide-gray-300">
            @foreach ($orders as $order)
            <li class="py-3">
                <div class="flex items-center">
                    <div class="flex-1 min-w-0 ">
                        <p class="text-sm font-sm text-gray-900 truncate italic">
                            ID Order: {{ $order->id_order }}
                        </p>
                        <p class="text-sm font-sm text-gray-900 truncate">
                            {{ $order->alamat }} ({{ $order->jarak }}km)
                        </p>
                        <p class="text-sm font-sm font-bold text-gray-900 truncate">
                            Total: Rp{{ $order->total_harga }}
                        </p>
                    </div>
                    <div class="items-center text-base font-semibold text-gray-900 text-center">
                        @if ($order->status_order == 'Menunggu')
                            <p class="text-red-500">{{ $order->status_order }}</p>
                        @elseif ($order->status_order == 'Diproses')
                            <p class="text-primary">{{ $order->status_order }}</p>
                        @elseif ($order->status_order == 'Selesai')
                            <p class="text-green-500">{{ $order->status_order }}</p>
                        @endif
                        <div class="pt-2">
                            <a href="" class="text-xs bg-primary text-white hover:bg-primary-dark rounded-lg p-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        @endif
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
