@extends('layouts.user-layout')
@section('content')
    <img src="{{ asset('assets/images/motor.svg') }}" alt="kendaraan"
        class="absolute top-28 left-20 md:left-1/2 lg:right-1/2 lg:translate-x-[-50%]">
    <div class="bg-primary rounded-lg px-8 py-4 mx-4 mt-10 md:w-3/4 md:mx-auto lg:w-1/3 lg:mx-auto">
        <p class="text-2xl text-white font-bold text-center">Informasi Order</p>
        <div class="flex justify-between text-lg py-4">
            <div class="text-orange-300">
                <p>Kendaraan</p>
                <p>Harga</p>
                <p>Harga per km</p>
            </div>
            <div class="text-right text-white">
                <p>Mobil</p>
                <p>Rp 30000</p>
                <p>Rp 3000</p>
            </div>
        </div>
    </div>

    <div class="flex flex-col text-center py-8 md:py-10 space-y-4 md:gap-10 font-bold w-full">
        <div x-data="{ open: false }" class="md:gap-4 w-2/3 md:w-2/4 lg:w-1/3p mx-auto md:mx-auto h-20">
            <select class="w-full h-20" id="voucher" name="state" style="background-color: orange; height: 10%;">
                <option value="AL">nunu</option>
                <option value="AL">asda</option>
                <option value="AL">Aldsadabama</option>
                <option value="AL">Alaasdadada sbama</option>
                <option value="AL">Alabasda dama</option>
                <option value="AL">Alabsadada ama</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>
        <div class="flex flex-col gap-4 md:gap-6 md:w-2/3 md:mx-auto lg:w-1/3">
            <a href="{{ route('worker-find') }}" id="confirmOrder"
                class="bg-white border-4 border-primary content-center text-primary mx-16 p-2 rounded-lg hover:text-orange-400 hover:border-orange-400">Konfirmasi</a>
            <a href="{{ route('order-choose-vehicle') }}"
                class="bg-primary text-white mx-16 p-2 content-center rounded-lg hover:bg-orange-400">kembali</a>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // pop up when logout
        document.getElementById('confirmOrder').addEventListener('click', function(event) {
            event.preventDefault();
            const hrefValue = event.currentTarget.href;
            Swal.fire({
                title: 'Pesanan',
                text: 'Apakah pesanan anda sudah benar?',
                icon: 'warning',
                showCancelButton: true,
                dangerMode: true,
                confirmButtonText: 'Ya!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = hrefValue;
                }
            });
        });

        $(document).ready(function() {
            $('#voucher').select2({
                placeholder: "Gunakan Voucher",
                allowClear: true
            });
        });
    </script>
@endsection
