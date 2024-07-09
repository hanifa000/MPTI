<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kami!</title>
    <link rel="icon" type="image/png" href="{{ asset('profil/img/logo.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- font google APIs -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Comfortaa:wght@300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <!-- font awasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('profil/css/style.css?v=1.0')}}" />
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css')}}">
    <style>
      /* Portfolio CSS */
      .portfolio-container {
        margin-top: 50px;
      }
      
      .portfolio-image {
        max-width: 100%;
        height: 300px;
        object-fit: cover;
      }
    </style>
</head>
<body>
  <!-- Navbar Start -->
  <nav class="navbar1">
    <a href="{{route('welcome')}}">
      <img src="{{asset('profil/img/logo.png')}}" class="navbar-logo"> 
    </a>

    <div class="navbar1-nav">
      <a href="{{route('welcome')}}">HOME</a>
      <a href="{{route('about')}}">TENTANG KAMI</a>
      <a href="{{route('item')}}">PRODUK</a>
      <a href="{{route('foto')}}">GALERI</a>
      <a href="{{route('panduan')}}">PANDUAN</a>
      <a href="{{route('kontak')}}">KONTAK</a>
  </div>

    <div class="navbar1-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->
  <section class="hero" id="home">
    <main class="content">
        <p>GALERI KAMI</p>
        <h1>Membawa Hutan Kedalam Ruangan</h1>
    </main>
  </section>

    <!-- Main Content -->
    <div class="container portfolio-container">
      <h3 class="text-center">Beberapa foto kami</h3>
      <!-- <p class="text-center">
        beberapa foto kami
      </p> -->

      <div class="row justify-content-center">
        <?php $counter = 0; ?>
        @foreach($album as $photo)
            <div class="col-md-4 mb-4">
              <div class="card">
                <img
                  src="{{ asset('foto_album/' . $photo->foto) }}"
                  class="card-img-top portfolio-image"
                  alt="Portfolio Item {{ $counter + 1 }}"
                />
              </div>
            </div>
            <?php $counter++; ?>
            @if($counter % 3 == 0 && $counter != count($album))
                </div><div class="row justify-content-center">
            @endif
        @endforeach
      </div>
    </div>

    <!-- Footer Start -->
  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <a href="{{route('welcome')}}">
        <img src="{{ asset('profil/img/logo.png')}}" alt="Terrarium.qu Logo" class="footer-logo"></a>
      </div>
      <div class="footer-center">
        <h3>TERRARIUM.QU</h3>
        <p>Membawa Hutan Kedalam Ruangan</p><br>
        <p>© Created and Copyright by Tech Titans. 2024.</p>
      </div>
      <div class="footer-right">
        <div class="social-icons">
            <a href="https://www.instagram.com/terrarium.qu?igsh=MW50ZHpjNTYyb2YxNQ=="><i class="fab fa-instagram"></i></i></a>
            <a href="https://www.tiktok.com/@terrarium.qu?_t=8mamJWuB8St&_r=1"><i class="fab fa-tiktok"></i></a>
            <a href="https://wa.me/089608543320"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->

  <!-- My JavaScript -->
  <script src="{{ asset('profil/javascript/nav.js')}}"></script>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
  </body>
</html>
