@extends('layouts.dashboard-layout')
@section('content')
    @if (session()->has('success'))
        <div id="alert-1"
            class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
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
    <form method="POST" action="{{ route('updateStatusPenerimaan', $status_penerimaan_worker->id) }}">
        @csrf
        @method('put')

        <label for="status_penerimaan">Status Penerimaan:</label>
        <select name="status_penerimaan" id="status_penerimaan">
            <option value="1" {{ $status_penerimaan_worker->status_penerimaan ? 'selected' : '' }}>Buka</option>
            <option value="0" {{ !$status_penerimaan_worker->status_penerimaan ? 'selected' : '' }}>Tutup</option>
        </select>
        {{-- buat input deskripsinya --}}
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" name="keterangan" class="w-96" value="{{ $status_penerimaan_worker->keterangan }}">

        <button type="submit" class="border border-black p-3">Update</button>
    </form>
@endsection
