@extends('layouts.app')

<title>Welcome</title>

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success text-uppercase text-marquee"><marquee>Selamat Datang {{ Auth::user()->name }}</marquee></div>
            <div class="card">
                <div class="card-header">Selamat Berbelanja</div>

                <div class="card-body">
                    <p>Jelajahi koleksi kami sekarang dan wujudkan karakter anime favorit Anda. Temukan koleksi baju cosplay anime berkualitas yang terinspirasi oleh chara favorit Anda. Dengan desain yang autentik dan detail yang menakjubkan, kami hadir untuk memenuhi kebutuhan cosplay Anda Terima kasih telah memilih kami sebagai tempat pilihan kostum Anda. Selamat berbelanja!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
