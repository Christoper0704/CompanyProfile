<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>PearInc</title>
    <style>
    nav a {
        font-size: 18px;
        font-weight: 400;
        text-decoration: none;
        color: white;
    }

    nav li {
        margin-right: 20px;
    }

    nav a:hover {
        font-weight: bold;
    }

    body {
        margin: 0;
        padding: 0;
    }

    main {
        padding: 20px;
        overflow: auto;
    }

    html{
      scroll-behavior: smooth;
    }

    .head {
        height: 100vh;
        min-height: 500px;
        background-image: url('/images/background.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.7;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#home"><img src="<?php echo e(url('/images/pear.png')); ?>" alt="Pear Logo" style="width:40px;" class="rounded-pill">PearInc</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tentang">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#visimisi">Visi & Misi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#keunggulan">Keunggulan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="head" id="home">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="text-light fw-bold">Perusahaan Smartphone Andalan</h1>
        <p class="text-light fw-bold">Temukan Smartphone Favoritmu Bersama Kami</p>
      </div>
    </div>
  </div>
</header>

<main>
    <section class="py-5" id="tentang">
    <div class="container">
        <h2 class="fw-light">Tentang Kami</h2>
        <p style="text-align:justify;">
            Kami hadir dengan smartphone canggih buatan kami dan menjadi andalan bagi kamu. 
            Lewat Website kami, kamu dapat cari tahu lebih tentang perusahaan kami.
            Kunjungi gerai PearInc terdekat untuk mendapatkan smartphone favoritmu.
        </p>
        <p style="text-align:justify;">
            Kami tumbuh untuk mendengarkan kebutuhan dan kesukaan kamu sebagai pengguna. Kami siap melayani dan menghadirkan smartphone 
            unggulan bagi kamu.
        </p>
        <p style="text-align:justify;">
            PearInc tidak begitu saja berdiri. PearInc pertama kali merupakan toko smartphone kecil pada tahun 2007. Kini kami menjadi perusahaan 
            penghasil smartphone mulai dari tahun 2014. Lebih dari puluhan smartphone sudah digunakan oleh pengguna.
        </p>
    </div>
    </section>

    <section class="py-5" id="visimisi" style="background-color:#EAEAEA; background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-md-6"><img src="<?php echo e(url('/images/visi.jpg')); ?>" style="width:500px; height:500px"></div>
        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
          <h3 class="text-dark fw-bold">VISI</h3>
          <h5 class="text-dark fw-bold">Menjadi perusahaan smartphone yang mendengarkan kebutuhan pengguna.</h5>
          <br><br>
          <h3 class="text-dark fw-bold">MISI</h3>
          <h5 class="text-dark fw-bold">- Memahami kebutuhan pengguna.</h5>
          <h5 class="text-dark fw-bold">- Menyediakan layanan yang selalu terdepan.</h5>
        </div>
      </div>
    </div>
    </section>

    <section class="py-5" id="keunggulan">
    <div class="container">
      <div class="row">
        <div>
          <h3 class="mb-3 text-center text-dark fw-bold">YANG MEMBEDAKAN KAMI</h3>
        </div>
          <div class="col-sm-4">
            <div class="card shadow-lg">
                <img class="card-img-top img-fluid mx-auto d-block mt-2" src="<?php echo e(url('/images/certificate.png')); ?>" alt="certificate" style="width:100px; height:100px;">
                <div class="card-block m-3">
                    <h4 class="card-title text-center">Sertifikasi</h4>
                    <p class="card-text" style="text-align:justify;">Telah mendapatkan sertifikasi resmi dari PT. ABC Tech Group.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow-lg">
            <img class="card-img-top img-fluid mx-auto d-block mt-2" src="<?php echo e(url('/images/feature.png')); ?>" alt="feature" style="width:100px; height:100px;">
                <div class="card-block m-3">
                    <h4 class="card-title text-center">Fitur</h4>
                    <p class="card-text">Fitur beragam dan bervariasi sesuai kebutuhan pengguna.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow-lg">
            <img class="card-img-top img-fluid mx-auto d-block mt-2" src="<?php echo e(url('/images/price.png')); ?>" alt="harga" style="width:100px; height:100px;">
                <div class="card-block m-3">
                    <h4 class="card-title text-center">Harga</h4>
                    <p class="card-text">Harga disesuaikan dan ramah bagi pengguna.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
    </section>

    <section class="py-5" id="produk">
    <div class="container">
      <div>
          <h3 class="mb-3 text-center text-dark fw-bold">PRODUK UNGGULAN KAMI</h3>
      </div>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="<?php echo e(url('/images/p10.jpg')); ?>" class="card-img-top" alt="Pear P10">
            <div class="card-body">
              <h5 class="card-title">Pear P10</h5>
              <p class="card-text">Smartphone cocok bagi anak muda.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?php echo e(url('/images/advance.jpg')); ?>" class="card-img-top" alt="Pear Advance">
            <div class="card-body">
              <h5 class="card-title">Pear Advance</h5>
              <p class="card-text">Smartphone dengan fitur kamera terbagus.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?php echo e(url('/images/super.jpg')); ?>" class="card-img-top" alt="Pear Super" style="height:363px;">
            <div class="card-body">
              <h5 class="card-title">Pear Super</h5>
              <p class="card-text">Smartphone untuk pecinta game.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?php echo e(url('/images/mm3.jpg')); ?>" class="card-img-top" alt="Pear MM3">
            <div class="card-body">
              <h5 class="card-title">Pear MM3</h5>
              <p class="card-text">Smartphone keluaran terbaru dan menyajikan fitur yang canggih.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
</main>

<footer class="bg-dark text-white text-center text-lg-start" id="kontak">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5>PearInc</h5>

        <p>
          Terima kasih sudah melihat dan mengenal kami. Semoga kami menjadi favorit bagi kalian semua.
        </p>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5>Kontak</h5>

        <ul class="list-unstyled mb-0">
          <li class="text-white">
            pearinc@email.com
          </li>
          <li class="text-white">
            081123345678
          </li>
          <li class="text-white">
            Jalan Bunga Merah 12 (Kantor Pusat)
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <p>COPYRIGHT PEARINC &#169;2021</p>
  </div>
</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\company_profile\resources\views/profile.blade.php ENDPATH**/ ?>