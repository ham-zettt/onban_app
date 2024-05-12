@extends('layouts.dashboard-layout')


@section('content')
    <div class="flex flex-col">
        <div class="flex justify-end"><a class="text-blue-600" href="{{ route('vouchers.create') }}">Tambah Voucher</a></div>
        <div class="w-full mt-6">
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
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $voucher->potongan_harga * 100 }}%
                                    </td>
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
