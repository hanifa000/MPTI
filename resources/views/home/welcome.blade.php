<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
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
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css') }}">
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar1">
      <a href="{{route('welcome')}}">
      <img src="{{ asset('profil/img/logo.png') }}" class="navbar-logo"> </a>
  
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
        <p>TERRARIUM.QU</p>
        <h1>Membawa Hutan Kedalam Ruangan</h1>
    </main>
  </section>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section class="about" id="about">
    <h2><span>PROFIL</span></h2>

    <div class="row">
      <div class="about-img">
        <img src="{{ asset('profil/img/about-us.jpg') }}" alt="Profil" />
      </div>
      <div class="content">
        <h3>Apa itu <span>Terrarium.qu</span>?</h3>
        <p>
          Terrarium.qu adalah produk terrarium pertama di Yogyakarta, yang menawarkan miniatur
        hutan dalam wadah kaca sebagai wujud perpaduan seni dan tanaman yang apik. Terrarium.qu
        menjadi pilihan terbaik sebagai media relaksasi dan pereda stres di tengah tuntutan hidup yang
        tinggi. Dikemas dengan penuh estetika, terrarium.qu juga cocok menjadi dekorasi ruangan
        hijau biotik dan bingkisan atau hadiah momen perayaan tertentu.
        </p>
        <p>
          Didistribusikan dalam bentuk kit, satu terrarium.qu berisikan tanaman hias khas hutan
        berkualitas, seperti moss, fittonia, baby tears, dan pakis kancing, serta tambahan aksesoris
        sebagai hiasan, seperti pasir malang, pasir putih, pasir merah, dan batu koral.
      </p>
        <p>
          Terrarium.qu tidak hanya menawarkan keindahan visual, tetapi juga kemudahan perawatan
        bagi siapa saja yang ingin memiliki sepotong alam di dalam rumah. Setiap kit dilengkapi
        dengan panduan perawatan yang detail, memastikan tanaman tetap tumbuh subur dan sehat.
        Bahan-bahan yang digunakan dalam setiap terrarium dipilih dengan cermat untuk menciptakan
        ekosistem mini yang harmonis dan berkelanjutan.
      </p>
      <p>
      <em> Genggam terrarium.qu dan rasakan euforia hutan di dalam ruangan.</em>
      </p>
      </div>
    </div>
      
    <div class="visi-misi">
      <div class="visi">
        <h4>VISI USAHA :</h4>
        <p>
          Menjadikan Terrarium.qu sebagai Produk Terarium Unggulan di Indonesia yang Berkualitas dan Multifungsi
        </p>
      </div>
      <div class="misi">
        <h4>MISI USAHA :</h4>
        <ul>
          <li> Memberikan produk berkualitas tinggi dengan harga terjangkau</li>
          <li> Mengembangkan inovasi produk sesuai selera konsumen dan trend pasar</li>
          <li> Memberikan kepuasan pada konsumen dengan pelayanan yang maksimal</li>
          <li> Memasarkan sekaligus memberikan edukasi terkait kesehatan mental dan lingkungan hidup</li>
        </ul>
      </div>
    </div>
  </section>
  
 <!-- location Section Start -->
 <section id="location" class="location">
  <h2><span>KONTAK</span></h2>
  <!-- <p>Our Location📍</p> -->

  <div class="row">
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.188370743318!2d110.40727397319435!3d-7.769839677068732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5993dcd3a59f%3A0xb4f5bab3a939f52b!2sJl.%20Seturan%20Raya%2C%20Kledokan%2C%20Caturtunggal%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1716306678695!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      </div>
      <div class="contact-form">
        <form action="{{ route('pesan.store') }}" method="post" onsubmit="return validateForm()">
          @csrf
          <h2>Contact Us</h2>
          <label for="nama">Name:</label>
          <input type="text" id="nama" name="nama" required>
          
          <label for="telp">No. Telp:</label>
          <input type="tel" id="telp" name="telp" required pattern="[0-9]+" title="Please enter a valid phone number">
          
          <label for="msg">Message:</label>
          <textarea id="msg" name="msg" rows="5" required></textarea>
          
          <p style="font-size: small; text-align:left;"><em>*Harap diperiksa sebelum dikirim</em></p>
          
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </section>
  <!-- location Section End -->

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
    function validateForm() {
      var telp = document.getElementById('telp').value;
      var pattern = /^[0-9]+$/;
      if (!pattern.test(telp)) {
          alert("Please enter a valid phone number with digits only.");
          return false;
      }
      return true;
    }
  </script>

</body>
</html>
