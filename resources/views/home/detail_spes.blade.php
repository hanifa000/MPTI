<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Special Edition</title>
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
    <link rel="stylesheet" href="{{ asset('profil/css/detail.css?v=1.0') }}">
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css') }}">
</head>
<body>
  <!-- Navbar Start -->
  <nav class="navbar1">
    <a href="{{route('welcome')}}">
        <img src="{{ asset('profil/img/logo.png') }}" class="navbar-logo" alt="Terrarium.qu Logo">

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

  <section id="product" class="product">
      <div class="product-display">
          <div class="main-image" id="sticky-image">
              <img src="{{ asset('profil/img/Special/spesial.png')}}" id="main-img" class="main-img">
              <div class="thumbnails">
                  <img src="{{ asset('profil/img/Special/spesial.png')}}" alt="Premium Terrarium Substrate Mix Thumbnail" class="thumbnail-img" onclick="changeMainImage(this)">
                  <img src="{{ asset('profil/img/Special/spesial-1.jpg')}}" alt="Another Thumbnail" class="thumbnail-img" onclick="changeMainImage(this)">
                  <img src="{{ asset('profil/img/Special/spesial-4.jpg')}}" alt="Another Thumbnail" class="thumbnail-img" onclick="changeMainImage(this)">
                  <img src="{{ asset('profil/img/Special/spesial-6.jpg')}}" alt="Another Thumbnail" class="thumbnail-img" onclick="changeMainImage(this)">
              </div>
          </div>
          
          <div class="product-details">
              <p>Terrarium.qu</p>
              <h2>TERRARIUM.QU KIT SPECIAL EDITION</h2>
              <!-- <p>Rp 100.000 IDR (sementara)</p><br> -->
              <div class="price">
                <span id="product-price">Rp 160.000</span> IDR
              </div>
              <div class="options">
                <div class="option-buttons">
                    <button id="without-mister" class="option-button selected" onclick="updatePrice('with')">Wadah Kaca</button>
                    <button id="with-mister" class="option-button" onclick="updatePrice('without')">Tanpa Wadah Kaca</button>
                </div>
              </div><br>
              <a href="{{route('dashboard.beli')}}" class="add-to-cart">Beli Sekarang <i class="fa-solid fa-cart-shopping fa-bounce"></i></a>
          
              <div class="description"><br><br>
                  <label for="description">Deskripsi:</label>
                  <p>
                        Miniatur hutan dalam wadah kaca variasi special edition berkualitas tinggi.
                    </p>
                    <p>
                        Produk dijual terpisah dalam 1 kit. Bebas kreasikan dunia terrarium.qu milikmu!
                    </p>
                    <p>Dapatkan 1 kit terrarium.qu variasi special edition berisikan: </p>
                    <ol>
                        <li>Wadah kaca berbentuk <em>fishbowl</em></li>
                        <li><em>Stand</em> kayu estetik</li>
                        <li>Tanaman Hias</li>
                        <li>Moss</li>
                        <li>Pupuk</li>
                        <li>Pasir malang</li>
                        <li>Pasir hitam</li>
                        <li>Sendok kayu</li>
                        <li>Pinset</li>
                        <li>Botol semprot</li>
                        <li>Buku panduan</li>
                        <li><em>Greeting card</em></li>
                    </ol>
                    <p>100% REALPICT</p>
                    <p>Ready, siap kirim keseluruh Indonesia!</p>
                    <br>
                    <p><strong>WAJIB DIBACA</strong></p>
                    <ul>
                        <li>Porsi bahan disesuaikan dengan ukuran wadah variasi kit.</li>
                        <li>Kemasan estetik, cocok digunakan sebagai media relaksasi dan pereda stres, dekorasi
                            ruangan, serta bingkisan atau hadiah momen perayaan tertentu.</li>
                        <li><em>Packaging</em> super aman (boks kemasan dilapisi <em>bubble wrap</em> dan stiker <em>fragile</em>).</li>
                        <li><em>Packaging</em> ekstra dapat menambahkan variasi <em>bubble wrap</em> tambahan saat <em>checkout</em>.</li>
                        <li>Garansi kaca pecah dan tanaman mati selama pengiriman, bukan akibat kecelakaan
                            pribadi atau hal-hal diluar pengiriman. Wajib mengirimkan video <em>unboxing</em> untuk klaim
                            garansi.</li>
                        <li>Dapat <em>request</em> dengan atau tanpa wadah kaca (tersedia pilihan saat <em>checkout</em>).</li>
                    </ul>
                    <p><strong>MEMBELI = SETUJU</strong></p>
                    <p>
                    <em>Checkout</em> sekarang dan rasakan euforia hutan di dalam ruangan!
                    </p>
              </div>
          </div>
      </div>
  </section>
  
  <!-- Footer Start -->
  <footer>
      <div class="footer-container">
      <div class="footer-left">
        <a href="{{route('welcome')}}">
          <img src="{{ asset('profil/img/logo.png') }}" alt="Terrarium.qu Logo" class="footer-logo"></a>
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

  <!-- Feather Icons -->
  <script>
      feather.replace();
  </script>
  
  <!-- My JavaScript -->
  <script src="{{ asset('profil/javascript/nav.js') }}"></script>
  <script>
      function changeMainImage(img) {
          var mainImg = document.getElementById('main-img');
          mainImg.src = img.src;
      }
      function updatePrice(option) {
        const priceElement = document.getElementById('product-price');
        const withoutMisterButton = document.getElementById('with-mister');
        const withMisterButton = document.getElementById('without-mister');
            if (option === 'with') {
                priceElement.textContent = 'Rp 160.000';
                withoutMisterButton.classList.remove('selected');
                withMisterButton.classList.add('selected');
            } else {
                priceElement.textContent = 'Rp 100.000';
                withoutMisterButton.classList.add('selected');
                withMisterButton.classList.remove('selected');
            }
       }
  </script>
  
  </body>
  </html>
