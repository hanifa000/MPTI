<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami!</title>
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
    
    <link rel="stylesheet" href="{{ asset('profil/css/style.css?v=1.0') }}" />
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css?v=1.0') }}">
    <style>
        .about {
          padding: 1rem 7% 2rem;
        }
        .about h2{
          text-align: center;
        } 
        .about p{
            margin-bottom: 0.8rem;
            font-size: 400;
            line-height: 1.6;
            text-align: justify;
        }
        .filosofi {
            margin-top: 50px;
        }
        .filosofi h3 {
            margin-bottom: 30px;
            /* text-align: center; */
        }
        .filosofi ul {
            list-style: none;
            padding: 0;
        }
        .filosofi ul li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .filosofi ul li img {
            max-width: 60px;
            margin-right: 15px;
            border-radius: 10px;
        }
        .filosofi ul li span {
            font-size: 1.1rem;
        }
        .add-to-cart {
          padding: 10px 30px;
          background-color: var(--secondary);
          color: white;
          border: none;
          border-radius: 20px;
          cursor: pointer;
        }
        .add-to-cart:hover {
          background-color: var(--primary);
        }
    </style>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar1">
        <a href="{{route('welcome')}}">
            <img src="{{ asset('profil/img/logo.png')}}" class="navbar-logo"> 
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

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <p>TENTANG KAMI</p>
            <h1>Membawa Hutan Kedalam Ruangan</h1>
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section class="about" id="about">
        <div class="content">
            <h3><span>Terrarium.qu</span></h3>
            <h4>Latar Belakang</h4>
            <p>
                Produk Terrarium.qu hadir sebagai produk terapi pereda stres di tengah keterbatasan
                lahan tanam di perkotaan. Berdasarkan penelitian, terapi tanaman terbukti efektif
                menurunkan kadar hormon kortisol pemicu stres.
            </p>
            <h4>Tujuan</h4>
            <p>
                Produk ini diusung sebagai media pereda stres dan relaksasi masyarakat perkotaan akibat
                tuntutan pekerjaan. Produk ini dapat menjadi dekorasi ruangan hijau biotik, bingkisan,
                atau hadiah momen perayaan tertentu bernilai jual tinggi. Produk ini juga menjadi sarana
                edukasi terkait kesehatan mental dan pelestarian lingkungan.
            </p>
            <h4>Layanan</h4>
            <p>
                Usaha produk Terrarium.qu memiliki misi untuk memberikan pelayanan terbaik bagi
                konsumen, diantaranya memberikan garansi produk dan buku panduan tentang cara
                merawat dan menanam tanaman dalam terarium, serta memberikan referensi DIY wadah
                tanam dari barang-barang bekas.
            </p>
            <h4>Target Pasar</h4>
            <p>
                Produk Terrarium.qu menyasar masyarakat perkotaan, khususnya pekerja kantoran
                dengan tingkat stres tinggi akibat tuntutan pekerjaan. Produk ini menarget semua jenis
                kelamin, profesi, dan kalangan ekonomi, utamanya perempuan pekerja kantoran dari
                kalangan menengah ke atas dengan usia berkisar 18-40 tahun yang menyukai estetika
                serta memiliki kesadaran tinggi terhadap kesehatan mental dan pelestarian lingkungan.
            </p>
            <h4>Keunggulan</h4>
            <p>
                Produk Terrarium.qu merupakan produk multifungsi, yakni disamping sebagai media
                pereda stres, produk yang didesain dengan penuh estetika ini dapat menjadi dekorasi
                ruangan hijau biotik dan bingkisan atau hadiah momen perayaan tertentu. Produk
                bertemakan suasana hutan ini dikemas dalam kemasan ramah lingkungan dalam upaya
                pelestarian lingkungan.
            </p>
        </div>
        </div>
        <div class="filosofi">
            <h3><span>Filosofi Logo Produk</span></h3>
            <ul>
                <li><img src="{{asset('profil/img/filosofi-1.png')}}" alt="Filosofi 1"><span>Memberikan produk berkualitas tinggi dengan harga terjangkau</span></li>
                <li><img src="{{asset('profil/img/filosofi-2.png')}}" alt="Filosofi 2"><span>Mengembangkan inovasi produk sesuai selera konsumen dan trend pasar</span></li>
                <li><img src="{{asset('profil/img/filosofi-3.png')}}" alt="Filosofi 3"><span>Memberikan kepuasan pada konsumen dengan pelayanan yang maksimal</span></li>
            </ul>
        </div>
        <a href="{{route('item')}}" class="add-to-cart">Beli Sekarang <i class="fa-solid fa-cart-shopping fa-beat"></i></a>
    </section>
    <!-- About Section End -->

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
                    <a href="https://www.instagram.com/terrarium.qu?igsh=MW50ZHpjNTYyb2YxNQ=="><i class="fab fa-instagram"></i></a>
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

</body>
</html>
