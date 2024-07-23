<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Sekarang!</title>
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
    <link rel="stylesheet" href="{{ asset('profil/css/style.css?v=1.0') }}">
    <link rel="stylesheet" href="{{ asset('profil/css/nav.css') }}">
    <style>
        .bold-option {
            font-weight: 600;
        }
        .toggle-input {
        display: none;
    }

    .toggle-label {
        display: inline-block;
        padding: 8px 16px;
        cursor: pointer;
        background-color: #f0f0f0;
        margin-right: 10px;
    }

    .toggle-label:hover {
        background-color: #e0e0e0;
    }

    .toggle-target {
        display: none;
    }

    #premium:checked ~ #options .toggle-target[label="Premium"],
    #standar:checked ~ #options .toggle-target[label="Standar"] {
        display: block;
    }
    </style>
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar1">
        <a href="{{route('welcome')}}">
            <img src="{{ asset('profil/img/logo.png') }}" class="navbar-logo" alt="Terrarium.qu Logo">
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Beli Sekarang</h4>
                        <p class="card-description">Form pembelian produk</p>
                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        <script>
                            setTimeout(function() {
                                window.location.href = "{{ route('welcome') }}";}, 5000); // Waktu delay sebelum redirect
                        </script>
                        @endif
                        <form class="forms-sample" action="{{route('buy.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" id="Nama" placeholder="Nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <input type="text" class="form-control" id="telp" name="telp" placeholder="Telp" required pattern="[0-9]+" title="Please enter a valid phone number">
                            </div>
                            <div class="form-group">
                                <label for="produk">Pilih Produk</label>
                                <select name="produk" class="form-select" id="produk" required>
                                    <option value="" disabled selected>Pilih Produk</option>
                                    <option value="spesial-1">Kit DIY Terrarium Tipe Spesial Edition (Rp. 100.000)</option>
                                    <option value="spesial-2">Kit DIY Terrarium Tipe Spesial Edition Tanpa Wadah Kaca (Rp. 90.000)</option>
                                    <option value="premium-1">Kit DIY Terrarium Tipe Premium (Rp. 75.000)</option>
                                    <option value="premium-2">Kit DIY Terrarium Tipe Premium Tanpa Wadah Kaca (Rp. 65.000)</option>
                                    <option value="medium-1">Kit DIY Terrarium Tipe Medium (Rp. 50.000)</option>
                                    <option value="medium-2">Kit DIY Terrarium Tipe Medium Tanpa Wadah Kaca (Rp. 40.000)</option>
                                    <option value="standard-1">Kit DIY Terrarium Tipe Standard (Rp. 25.000)</option>
                                    <option value="standard-2">Kit DIY Terrarium Tipe Standard Tanpa Wadah Kaca (Rp. 20.000)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah produk</label>
                                <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" min="1" name="jumlah" required>
                            </div><br>
                            @forelse($qris as $qris)
                            <div class="form-group">
                                <img src="{{ asset('foto_qris/' . $qris->foto) }}" alt="QRIS Screenshot" width="200">
                            </div>
                            @endforeach
                            <div class="form-group">
                                <label for="foto">Bukti Bayar jpg/png</label><br>
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                            <br>
                            <p style="font-size: small; text-align:left;"><em>*Harap diperiksa sebelum dikirim</em></p>
                            <button type="submit" class="btn btn-success me-2">Submit</button>
                            <a href="{{route('item')}}" class="btn btn-light">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                <a href="https://wa.me/089611334305"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </footer>
    <!-- Footer End -->

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        // fungsi untuk bold tanpa wadah kaca
        $(document).ready(function() {
            $('#produk option').each(function() {
                if ($(this).text().indexOf('Tanpa Wadah Kaca') !== -1) {
                    $(this).addClass('bold-option');
                }
            });
        });
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

    <script src="{{ asset('profil/javascript/nav.js') }}"></script>
</body>
</html>
