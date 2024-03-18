<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Clone</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">

  @vite('resources/sass/app.scss')
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg ">
    <div class="container fw-bold">
      <a class="navbar-brand mb-0 h1" href="#">
        <img class="img-fluid" src="img/TelU.png" alt="logo" style="width: 140px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto"> <!-- MX-AUTO -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Tentang Kami
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Informasi Umum</a></li>
              <li><a class="dropdown-item" href="#">Organisasi</a></li>
              <li><a class="dropdown-item" href="#">Penghargaan</a></li>
              <li><a class="dropdown-item" href="#">Kerja Sama</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Akademik
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Struktur Kurikulum</a></li>
              <li><a class="dropdown-item" href="#">Rencana Belajar</a></li>
              <li><a class="dropdown-item" href="#">Beasiswa</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Kehidupan Kampus
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Kehidupan di Surabaya</a></li>
              <li><a class="dropdown-item" href="#">Galeri Kegiatan</a></li>
              <li><a class="dropdown-item" href="#">Penelitian</a></li>
              <li><a class="dropdown-item" href="#">Pengabdian Masyarakat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Dosen & Staff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Blog</a>
          </li>
        </ul>
        <button type="button" class="btn btn-outline-white">Daftar Sekarang</button>

      </div>
    </div>
  </nav>

  <!-- Main Section -->
  <div class="main-section my-5">
    <div class="container konten-atas">
      <h1 class="text-center text-light fw-bold pb-3 pt-5">Dosen & Staff Sistem Informasi</h1>
      <p class="text-center text-light pb-4">Dosen & Staff Sistem Informasi Telkom University Surabaya yang
        berpengalaman,
        memiliki latar belakang sebagai <br> peneliti, akademisi, maupun praktisi di industri.</p>
    </div>
  </div>

  <!-- Section -->
  <!-- Additional Section -->
  <section class="konten-card bg-white py-5">
    <div class="container mt-5">
      <div class="row mb-5">
        <div class="col-md-4 mb-4 ">
          <div class="card border-0">
            <img src="./images/Ully.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Ully Asfari, S.Kom., M.Kom.</h5>
              <p class="card-text text-center">Manajemen Portofolio TI, Budaya Organisasi, Interaksi Manusia Komputer
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Nizar.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Mochamad Nizar Palefi Ma’ady, S.Kom., M.Kom., M.IM</h5>
              <p class="card-text text-center">Dynamic Programming, Machine Learning, Social Computing</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Agus-Sulistya.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Agus Sulistya, P.hd</h5>
              <p class="card-text text-center">Social Computing, Data Scientist & Engineering, Software Engineering, IT
                Planning</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-4 ">
          <div class="card border-0">
            <img src="./images/No-Photo.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Yupit Sudianto, S.Kom., M.Kom.</h5>
              <p class="card-text text-center">Rekayasa Perangkat Lunak, Enterprise Architecture, Internet of Things</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Hawwin.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Hawwin Mardhiana, S.Kom., M.Kom.</h5>
              <p class="card-text text-center">Pemodelan dan Simulasi, DSS, Sistem Enterprise</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Toton.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Noerma Pudji Istiyanto, S.Kom., M.Kom</h5>
              <p class="card-text text-center">Bussiness Intelligence, Project Management, e-Government, e-SME, Start-Up
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4 mb-4 ">
          <div class="card border-0">
            <img src="./images/Iin.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Rokhmatul Insani, S.T., M.T.</h5>
              <p class="card-text text-center">Data Warehouse, Data Base, Data Mining</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Nasrul.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Muhamad Nasrullah, S.Kom., M.Kom.</h5>
              <p class="card-text text-center">Smart City, Adopsi IT, Security Engineering</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/No-Photo.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Aris Kusumawati, S.Kom., M.Kom</h5>
              <p class="card-text text-center">IT Business Value, Strategic Information System, IT Risk Management, IT
                Governance, Management Information System</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4 mb-4 ">
          <div class="card border-0">
            <img src="./images/No-Photo.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Purnama Anaking, S.Kom, M.Kom</h5>
              <p class="card-text text-center">Software Engineering, Hybrid Mobile App Development, Agile Project
                Management, Human Computer Interaction</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/bu-aan-1.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Anfazul Faridatul Azizah, S.Kom., M.Kom.</h5>
              <p class="card-text text-center">Perancangan interaksi, Tata kelola IT, IT Quality Management, Manajemen
                Proyek TI, Adoption Technology, Audit TI</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Fian.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Alifiansyah Arrizqy Hidayat, S.Kom., M.Kom.</h5>
              <p class="card-text text-center">Customer Relationship Management, Adoption and Acceptance of Information
                Technology, Business Process Management</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4 mb-4 ">
          <div class="card border-0">
            <img src="./images/No-Photo.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Adzanil Rachmadhi Putra, S.Kom, M.Kom</h5>
              <p class="card-text text-center">Software Engineering, Hybrid Mobile App Development, Agile Project
                Management, Human Computer Interaction</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Arip.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Arip Ramadan, S.Si., M.Stat.</h5>
              <p class="card-text text-center">Computational Statistics, Linear Model, Nonparametric Regression</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Berlian.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Berlian Rahmy Lidiawaty, S.ST., M.MT.</h5>
              <p class="card-text text-center">Text Mining, Risk Management, Data Management</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4 mb-4 ">
          <div class="card border-0">
            <img src="./images/Anita.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Anita Hakim Nasution, S.T., M.T.</h5>
              <p class="card-text text-center">Risk Management, Human Resource Development, Sales Management, Supply
                Chain Management, Bussiness Development</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Fina.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Affifiana Prisyanti, S.Kom, M.Kom</h5>
              <p class="card-text text-center">Sistem Enterprise, management strategi Sistem Informasi</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Anisa.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Anisa Dzulkarnain, S.Kom., M.Kom</h5>
              <p class="card-text text-center">Pemodelan Sistem Dinamik, System Thinking, Travelling Salesman Problem,
                Sistem Informasi Geografis</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4 mb-4 ">
          <div class="card border-0">
            <img src="./images/Rosyid.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Rosyid Abdillah, S.Si., M.Kom</h5>
              <p class="card-text text-center">UI Design, User Experience & Data Analysis</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Raulia.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Raulia Riski, S.Kom., M.Kom., M.M.Sc.</h5>
              <p class="card-text text-center">Sistem Enterprise, Pemodelan dan Simulasi, Business Process Management
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Tita.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Tita Ayu Rospricilia, S.Kom., M.Kom.</h5>
              <p class="card-text text-center">Customer Relationship Management, Information System Management,
                Enterprise System</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4 mb-4 ">
          <div class="card border-0">
            <img src="./images/No-Photo.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Sri Hidayati, S.Si., M.Stat.</h5>
              <p class="card-text text-center">Applied Statistics, Data Analytics, Time Series Forecasting</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card border-0">
            <img src="./images/Pak-Ilham.svg" class="card-img-top mx-auto" alt="Foto Dosen">
            <div class="card-body">
              <h5 class="card-title text-center fw-bold pt-4">Muhammad Ilham Alhari, S.Kom., M.Kom.</h5>
              <p class="card-text text-center">IT Governance, Enterprise Architecture, Smart Village</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- footer -->
  <footer class="footer p-5">
    <div class="container text-light">
      <div class="row">
        <div class="col-md-6">
          <h5>Sistem Informasi</h5>
          <p class="paragraf-atas">Situs resmi Program Studi Sistem Informasi Universitas Telkom Surabaya. Website ini
            diperuntukkan sebagai media komunikasi internal & eksternal bagi mahasiswa, dosen, dan karyawan.</p>
          <p class="parahgraf-tengah">Program Studi Sistem Informasi sudah ada sejak berdirinya Universitas Telkom
            Surabaya, berdasarkan Keputusan Menteri Riset, Teknologi, dan Pendidikan Tinggi no. 733 / KPT / I / 2018.
          </p>
          <p class="paragraf-bawah">Website ini menyajikan informasi tentang Program Studi Sistem Informasi, profil,
            visi dan misi, struktur organisasi, akademisi, kurikulum, dosen, penelitian dan pengabdian kepada
            masyarakat.</p>
        </div>

        <div class="col-md-3">
          <h5>Tautan Penting</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="tautan-1 text-light">Kerja Sama</a></li>
            <li><a href="#" class="tautan-1 text-light">Blog</a></li>
            <li><a href="#" class="tautan-1 text-light">Penghargaan</a></li>
            <li><a href="#" class="tautan-1 text-light">Beasiswa</a></li>
          </ul>
          <br>
          <h5>Tautan Bermanfaat</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="tautan-1 text-light">Telkom Indonesia</a></li>
            <li><a href="#" class="tautan-1 text-light">Yayasan Pendidikan Telkom</a></li>
            <li><a href="#" class="tautan-1 text-light">Universitas Telkom Surabaya</a></li>
            <li><a href="#" class="tautan-1 text-light">Fakultas (FRI)</a></li>
            <li><a href="#" class="tautan-1 text-light">Website SMB</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Info Kontak</h5>
          <ul class="list-inline footer-links left-footer">
            <li class="list-inline-item">
              <div class="d-flex" href="#">
                <a class="" href=""><i class="ikon bi bi-geo-alt me-3"></i></a>
                <p><span class="fw-bold">Alamat</span><br>Jl. Ketintang No.156, Surabaya, Jawa Timur 60231</p>
              </div>
            </li>
            <li class="list-inline-item">
              <div class="d-flex">
                <a href=""><i class="ikon bi bi-telephone me-3"></i></a>
                <p><span class="fw-bold">Telepon:</span><br><a href="">+62 31 8280800</a></p>
              </div>
            </li>
            <li class="list-inline-item">
              <div class="d-flex">
                <a href=""><i class="ikon bi bi-threads me-3"></i></a>
                <p><span>Email :</span><br><a href="">is@ittelkom-sby.ac.id</a></p>
              </div>
            </li>
            <li class="list-inline-item">
              <p class="fw-bold">Media Sosial</p>
              <a href="#">
                <i class="ikon-ig bi bi-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <p>Copyright © 2024 Information Systems</p>
          <p>Build with ♥ by Information System Web Team</p>
        </div>

      </div>
    </div>
  </footer>
  @vite('resources/js/app.js')
</body>

</html>
