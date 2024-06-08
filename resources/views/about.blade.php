@extends('layout.main')

@section('title','About Us')

@section('container')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid mt-4 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Tentang Kami</h1>
            <p class="text-justify">Sebagai penggemar anime sendiri, kami menyadari betapa sulitnya mencari kostum-kostum anime yang sesuai dengan karakter yang diinginkan. Terinspirasi oleh kebutuhan ini, kami menciptakan toko kostum anime yang menawarkan berbagai pilihan kostum dari seri anime terkenal, mulai dari karakter ikonik hingga yang terbaru.

Kami berkomitmen untuk menyediakan kostum-kostum berkualitas tinggi dengan desain yang akurat dan detail yang teliti. Dengan koleksi kostum yang terus diperbarui, kami ingin memastikan bahwa setiap penggemar anime dapat menemukan kostum yang mereka impikan untuk acara cosplay, konvensi, atau hanya untuk menikmati saat-saat menyenangkan.</div>
          <div class="col-sm-6">
            <img src="{{asset('undraw_web_shopping_re_owap.svg')}}" class="w-100" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- AKHIR JUMBOTRON -->


    <!-- about -->
    <section id="about" class="about">
      <h2 class="text-center"><b>About</b></h2>
      <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Jika Anda memiliki pertanyaan atau membutuhkan bantuan dalam menemukan toko kami, jangan ragu untuk menghubungi kami melalui kontak yang tercantum di website kami. Tim kami akan dengan senang hati membantu Anda </div>
        <div class="col-sm-6">
          <p>Tim kami yang berpengetahuan luas siap memberikan bantuan dan rekomendasi yang Anda butuhkan. Kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan dan memuaskan kepada setiap pengunjung kami.</div>
      </div>
      </div>
    </section>
    <iframe src="https://www.google.com/maps/embed/v1/place?q=Toko+Ikan+Hias+Ar+Sifa,+Jalan+Wolter+Monginsidi,+Bangetayu+Kulon,+Kota+Semarang,+Jawa+Tengah,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="600" height="450" frameborder="0" style="border:0;width:100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
    <!-- akhir about -->

    <!-- faq -->
    <h2 class="text-center">Faq</h2>
    <div class="container">
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Apakah tersedia ukuran yang sesuai dengan saya?
            </button>
          </h2>
        </div>
    
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
          Ya, kami menyediakan berbagai ukuran kostum anime untuk memenuhi kebutuhan semua pengunjung kami. dan harap diperhatikan untuk setiap stok mempunyai size standar yang tersedia berbeda masing-masingnya</div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Apakah Anda menyewakan kostum anime juga?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
          Ya, kami menyediakan layanan sewa kostum anime. Akan tetapi kami disini melayani pembelian kostum kak. Silakan hubungi tim kami untuk informasi lebih lanjut tentang persyaratan penyewaan.</div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Apakah Anda menerima pesanan khusus untuk kostum yang tidak tersedia di toko?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
          Ya, kami menerima pesanan khusus untuk kostum yang tidak tersedia di toko kami. Silakan hubungi tim kami dengan detail kostum yang Anda inginkan, dan kami akan berusaha memenuhi permintaan Anda.</div>
        </div>
      </div>
    </div>
    </div>
    <!-- akhir faq -->

    <br>
    <!-- contact -->
    <h2 class="text-center">CONTACT</h2>
    <div class="container">
    <div class="row mt-4 text-center">
      <div class="col-md-4">
     <img src="https://images.bisnis-cdn.com/thumb/posts/2020/09/15/1291989/instagram.jpg?w=600&h=400" alt="ig" width="100">
     <p><a href="https://www.instagram.com/17achmadfadliiskandar/" class="btn btn-dark">Pantau Instagram Kami</a></p>
      </div>
      <div class="col-md-4">
   <img src="https://assets.jalantikus.com/assets/cache/0/0/apps/2020/02/20/youtube-logo-6cd54.jpg" alt="yt" width="70">
   <p><a href="https://www.youtube.com/results?search_query=achmad+fadli+iskandar" class="btn btn-danger">Ikuti Konten Youtube Kami</a></p>
      </div>
      <div class="col-md-4">
     <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/update-whatsapp1.jpg" alt="wa" width="130">
     <p><a href="https://api.whatsapp.com/send?phone=6287744455279&text=namaachmad" class="btn btn-success">Hubungi Kami di Whatsapp</a></p>
      </div>
    </div>
  </div>
    <!-- end contact -->
    
@endsection