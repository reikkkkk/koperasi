<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo.png" type="">

  <title> KSP Maju Terus </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
              <img src="css/images/logo.png" alt="Logo Kelurahan Pandan" style="height: 50px; width: auto;"> <!-- Ubah path/to/logo.png dengan lokasi gambar logo -->
              <span>KSP Maju Terus</span>
          </a>
        </nav>      
        </nav>
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profil Koperasi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/sejarah') }}">Sejarah </a>
                  <a class="dropdown-item" href="{{ url('/vismis') }}">Visi Misi</a>
                  <a class="dropdown-item" href="{{ url('/struktur') }}">Struktur Organisasi</a>
                  <a class="dropdown-item" href="{{ url('/about') }}">Tentang Kami</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Simpanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/pokok') }}">Simpanan Pokok</a>
                  <a class="dropdown-item" href="{{ url('/wajib') }}">Simpanan Wajib</a>
                  <a class="dropdown-item" href="{{ url('/sukarela') }}">Simpanan Sukarela</a>
                  <a class="dropdown-item" href="{{ url('/deposito') }}">Deposito</a>
                  <a class="dropdown-item" href="{{ url('/simulsim') }}">Simulasi Simpanan</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pinjaman
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/konsumtif') }}">Pinjaman Konsumtif</a>
                  <a class="dropdown-item" href="{{ url('/usaha') }}">Pinjaman Usaha</a>
                  <a class="dropdown-item" href="{{ url('/multi') }}">Pinjaman Multiguna</a>
                  <a class="dropdown-item" href="{{ url('/tanpaagunan') }}">Pinjaman Tanpa Agunan</a>
                  <a class="dropdown-item" href="{{ url('/simupin') }}">Simulasi Pinjaman</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Info Koperasi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/pengajuan') }}">Pengajuan Simpanan/Pinjaman</a>
                  <a class="dropdown-item" href="{{ url('/mutasi') }}">Mutasi</a>
                  <a class="dropdown-item" href="{{ url('/ceksaldo') }}">Cek Saldo Simpanan</a>
                  <a class="dropdown-item" href="{{ url('/angsuran') }}">Cek Angsuran Pinjaman</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/faq') }}">FAQ </a>
              </li>            
              </ul>              
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <section class="struktur-section">
      <div class="container">
        <div class="struktur-box">
          <h2 class="struktur-title">Struktur Organisasi</h2>

          <!-- Row of Team Members -->
          <div class="row">
            <!-- Member 1 -->
            <div class="col-md-4 team-member">
              <img src="css/images/2.jpeg" alt="Ketua Koperasi" class="member-photo">
              <div class="member-name">Ahmad Nur</div>
              <div class="member-role">Ketua Koperasi</div>
            </div>

            <!-- Member 2 -->
            <div class="col-md-4 team-member">
              <img src="css/images/2.jpeg" alt="Sekretaris" class="member-photo">
              <div class="member-name">Siti Hajar</div>
              <div class="member-role">Sekretaris</div>
            </div>

            <!-- Member 3 -->
            <div class="col-md-4 team-member">
              <img src="css/images/2.jpeg" alt="Bendahara" class="member-photo">
              <div class="member-name">Budi Santoso</div>
              <div class="member-role">Bendahara</div>
            </div>

            <!-- Member 4 -->
            <div class="col-md-4 team-member">
              <img src="css/images/2.jpeg" alt="Manajer Simpan Pinjam" class="member-photo">
              <div class="member-name">Dewi Lestari</div>
              <div class="member-role">Manajer Simpan Pinjam</div>
            </div>

            <!-- Member 5 -->
            <div class="col-md-4 team-member">
              <img src="css/images/2.jpeg" alt="Pengawas Koperasi" class="member-photo">
              <div class="member-name">Faisal Anwar</div>
              <div class="member-role">Pengawas Koperasi</div>
            </div>

            <!-- Member 6 -->
            <div class="col-md-4 team-member">
              <img src="css/images/2.jpeg" alt="Staff Administrasi" class="member-photo">
              <div class="member-name">Linda Setiawan</div>
              <div class="member-role">Staff Administrasi</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end Struktur Organisasi Section -->
  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>