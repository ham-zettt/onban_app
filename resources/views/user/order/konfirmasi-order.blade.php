@extends('layouts.user-layout')
@section('content')
    <img src="{{ asset('storage/' . $informasi_order->tipe_layanan->foto_tipe_layanan)}}" alt="kendaraan" class="absolute top-28 left-20 md:left-1/2 lg:right-1/2 lg:translate-x-[-50%]">
    <div class="bg-primary rounded-lg px-8 py-4 mx-4 mt-10 md:w-3/4 md:mx-auto lg:w-1/3 lg:mx-auto">
        <p class="text-2xl text-white font-bold text-center">Informasi Order</p>
        <div class="flex justify-between text-lg py-4">
            <div class="text-orange-300">
                <p>Kendaraan</p>
                <p>Harga</p>
                <p>Harga per km</p>
            </div>
            <div class="text-right text-white">
                <p>{{ $informasi_order->tipe_layanan->nama_tipe_layanan }}</p>
                <p>{{ $informasi_order->tipe_layanan->harga_tipe_layanan }}</p>
                <p>Rp 3000</p>
            </div>

        </div>
    </div>

    <div class="flex flex-col text-center py-8 md:py-10 space-y-4 md:gap-10 font-bold ">
        <div x-data="{ open: false }" class="md:gap-4">
            <div x-on:click="open = ! open" class="border-primary w-3/4 md:w-96 flex gap-6 p-4 justify-between rounded-md mx-auto h-10 border-2  text-center content-center  hover:border-orange-400">
                <a href="#" class="text-primary content-center md:content-center flex flex- items-center justify-center text-sm  lg:content-center hover:text-orange-400">Gunakan Voucher</a>
                <img src="{{asset('assets/images/downArrow.svg')}}" alt="arrow" class="">
            </div>
            <form x-show="open" x-transition class="flex flex-col  mx-auto">
                <input type="submit" value="potongan harga 5%" class=" text-primary border-gray-500 w-3/4 md:w-96 hover:text-orange-400  mx-auto h-10 border-b-2 text-center content-center">
                <input type="submit" value="potongan harga 5%" class=" text-primary border-gray-500 w-3/4 md:w-96 hover:text-orange-400  mx-auto h-10 border-b-2 text-center content-center">
                <input type="submit" value="potongan harga 5%" class=" text-primary border-gray-500 w-3/4 md:w-96 hover:text-orange-400  mx-auto h-10 border-b-2 text-center content-center">
                <input type="submit" value="potongan harga 5%" class=" text-primary border-gray-500 w-3/4 md:w-96 hover:text-orange-400  mx-auto h-10 border-b-2 text-center content-center">
            </form>
        </div>
        <div class="flex flex-col gap-4 md:gap-6 md:w-2/3 md:mx-auto lg:w-1/3">
            <a href="{{ route('worker-find') }}" id="confirmOrder" class="bg-white border-4 border-primary text-primary mx-16 p-2 rounded-lg hover:text-orange-400 hover:border-orange-400">Konfirmasi</a>
            <a href="{{ route('order-choose-vehicle', ['id_order' => $informasi_order->id_order ]) }}" class="bg-primary text-white mx-16 p-2 rounded-lg hover:bg-orange-400">kembali</a>
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
</script>

@endsection
