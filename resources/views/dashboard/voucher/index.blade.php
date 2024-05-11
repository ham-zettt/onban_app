@extends('layouts.dashboard-layout')


@section('content')
    <div class="flex flex-col">
        <div class="flex justify-end"><a class="text-blue-600" href="{{ route('vouchers.create') }}">Tambah Voucher</a></div>
        <div class="w-full mt-6">
            @if (session()->has('success'))
                <div id="alert-1"
                    class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('success') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-1" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            @if ($vouchers->count() > 0)
                <div class="bg-white overflow-auto">

                    <table class="text-left w-full border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Kode Voucher</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Nama Voucher</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Potongan</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Tanggal Awal</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Tanggal Akhir</th>
                                <th
                                    class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                                    Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vouchers as $voucher)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $voucher->kode_voucher }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $voucher->nama_voucher }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $voucher->potongan_harga * 100 }}%</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $voucher->tanggal_mulai }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $voucher->tanggal_berakhir }}</td>
                                    {{-- buatkan action --}}
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        <a href="{{ route('vouchers.edit', $voucher->kode_voucher) }}"
                                            class="text-blue-600">Edit</a>
                                        <form action="{{ route('vouchers.destroy', $voucher->kode_voucher) }}"
                                            method="post" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="text-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            @else
                <h1 class="text-center font-bold text-md">Voucher Kosong</h1>
            @endif
        </div>
    </div>
@endsection
