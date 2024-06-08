@extends('layout/main')
@section('title','SIERENT')

@section('container') 
{{-- <div class="container">  --}}
  {{-- awal kesatu 1 --}}
  {{-- <div class="col-sm-9 mt-4 pt-5"> --}}
    <div class="jumbotron jumbotron-fluid mt-5 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Penjualan Kostum Sierent </h1>
            <p class="text-justify">Hai!

Selamat datang di layanan toko kami, tempat terbaik untuk memenuhi kebutuhanmu dalam memilih kostum chara!

Kini, kamu dapat dengan mudah menjelajahi koleksi kami, memilih barang favoritmu, dan membelinya dalam beberapa langkah sederhana. Kami berkomitmen untuk memberikan pengalaman customer yang menyenangkan, aman, dan praktis..</p>
          </div>
          <div class="col-sm-6">
            <img src="{{asset('undraw_add_to_cart_vkjp.svg')}}" class="w-100" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row mt-5">
      @foreach($baskets as $basket)
  <div class="col-lg-4 col-md-6 mt-4">
    <div class="card">
      <img src="/gambar/{{$basket->gambar}}" class="card-img-top h-100" alt="gambar">
      <div class="card-body">
        <h5 class="card-title text-uppercase">{{$basket->namabarang}}</h5>
        <p class="card-text"> Harga : {{ number_format($basket->hargabarang) }}</p>
        <p class="card-text">Keterangan : {{$basket->keterangan}}</p>
        {{-- <p class="card-text">Jumlah Beli : {{$basket->jumlah_beli}}</p> --}}
        {{-- <p class="card-text">Total Harga Rp . {{ number_format($basket->totalharga) }}</p> --}}
      @if(Auth::user()->role === "penjual")
      @if ($basket->user->name === Auth::user()->name)
      <p class="text-danger">Ini barang anda</p>
      @else
      <p class="text-primary">Bukan Barang anda</p>
      @endif
      @endif
        @if ($basket->stok == 0)
        <a href="/baskets/{{ $basket->id }}" class="btn btn-danger d-block disabled">Stok Habis</a>
        @else
        <a href="/baskets/{{ $basket->id }}" class="btn btn-info d-block">Detail Barang</a>
        @endif
      </div>
    </div>
  </div>
@endforeach
{{-- Halaman : 
Jumlah Data : {{ $baskets->total() }}
Data Per Halaman : {{ $baskets->perPage() }}
{{ $baskets->links() }} --}}
        </div>
      </div>
    </div>
      {{-- akhir kesatu 1 --}}
      {{--  --}}
  </div>
</div>
</div>
@endsection