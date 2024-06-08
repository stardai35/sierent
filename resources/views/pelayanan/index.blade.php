@extends('layout.main')

@section('title','Layanan')

@section('container')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="jumbotron jumbotron-fluid mt-4 bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1>Tata cara Pemesanan</h1>
        <p class="text-left"><b>Alur Pembelian COD (Cash on Delivery):<p></b>

        Memilih produk > Keranjang > Checkout > Bayar "COD" > Toko konfirmasi > Kurir mengirimkan > Membayar Barang Datang > Selesai <p>
          
<b>Alur Pembelian Online:<p></b>

Memilih produk > Keranjang > Checkout > Pilih Bayar Transaksi > Toko konfirmasi > Kurir mengirimkan > Menerima Barang Datang > Selesai.</div>
      <div class="col-sm-6">
        <img src="{{asset('undraw_performance_overview_p9bm.svg')}}" class="w-100" alt="">
      </div>
    </div>
  </div>
</div>
<h1 class="text-center mt-5 pt-5">Pelayanan kami</h1>
<div class="container">
<div class="row text-center">
    <div class="col-md-4">
    <i class="fa fa-calculator" style='font-size:75px'></i>
    <p><b>Hitung Otomatis</b></p>
    <p class="text-justify">Dengan sistem ini, pelanggan dapat dengan mudah dan cepat mengetahui total biaya sewa</p>
    </div>
    <div class="col-md-4">
    <i class="fa fa-usd" style='font-size:75px'></i>
    <p><b>Sistem pembayaran COD(cash on delivery)</b></p>
    <p class="text-justify">Dengan COD, Anda tidak perlu khawatir tentang pembayaran di muka atau transaksi online yang rumit.</p>
    </div>
    <div class="col-md-4">
    <i class="fa fa-gear" style="font-size:75px;"></i>
    <p><b>Keamanan Terjamin</b></p>
    <p class="text-justify"> Anda juga dapat menghindari risiko penipuan online dan memiliki kebebasan untuk memutuskan apakah ingin melanjutkan pembelian atau tidak</p>
    </div>
  </div>
  </div>
@endsection