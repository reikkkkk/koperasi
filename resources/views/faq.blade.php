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
    <!-- FAQ Section -->
    <section class="faq-section">
      <div class="container">
        <div class="faq-box">
          <h2 class="faq-title">Frequently Asked Questions (FAQ)</h2>

          <!-- Pertanyaan dan Jawaban FAQ -->
          <div class="faq-item">
            <div class="faq-question">1. Bagaimana cara mengajukan pinjaman di KSP Maju Terus?</div>
            <div class="faq-answer">
              Untuk mengajukan pinjaman, Anda harus menjadi anggota KSP Maju Terus. Setelah menjadi anggota, Anda bisa datang langsung ke kantor atau mengajukan pinjaman melalui website kami pada bagian pengajuan pinjaman.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">2. Apa syarat-syarat menjadi anggota KSP Maju Terus?</div>
            <div class="faq-answer">
              Syarat utama untuk menjadi anggota adalah warga negara Indonesia yang berusia minimal 17 tahun. Selain itu, Anda perlu melengkapi dokumen seperti KTP, NPWP, dan melakukan setoran awal simpanan.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">3. Berapa bunga pinjaman di KSP Maju Terus?</div>
            <div class="faq-answer">
              Bunga pinjaman yang kami tawarkan bervariasi tergantung jenis pinjaman yang diajukan. Informasi lengkap mengenai bunga dapat dilihat pada halaman jenis pinjaman atau dengan menghubungi customer service kami.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">4. Bagaimana cara membayar angsuran pinjaman?</div>
            <div class="faq-answer">
              Angsuran pinjaman dapat dibayar melalui transfer bank, layanan mobile banking, atau dengan datang langsung ke kantor KSP Maju Terus.
            </div>
          </div>

          <div class="faq-item">
            <div class="faq-question">5. Apakah saya bisa melunasi pinjaman lebih awal?</div>
            <div class="faq-answer">
              Ya, Anda bisa melunasi pinjaman lebih awal tanpa dikenakan biaya tambahan. Namun, pastikan untuk menghubungi kami terlebih dahulu agar proses pelunasan berjalan lancar.
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end FAQ Section -->

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