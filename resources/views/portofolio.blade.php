<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Martin M.R. Simamora | Portofolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;800&family=Figtree:wght@400;600&display=swap">
@vite('resources/sass/app.scss')
</head>
<body>

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="dark">
  <div class="container py-2 px-4">
    <a href="#beranda" class="navbar-brand mb-0 h1" aria-label="Beranda"><span class="brand-mark">M</span></a>
    <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-label="Buka menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end bg-purple" id="offcanvasNavbar" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header pb-0 px-4">
        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Martin M.R. Simamora</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
      </div>
      <div class="offcanvas-body pt-0 px-4">
        <hr class="d-lg-none text-white-50">
        <ul class="navbar-nav flex-row flex-wrap">
          <li class="nav-item col-6 col-lg-auto"><a href="#tentang" class="nav-link active">Tentang</a></li>
          <li class="nav-item col-6 col-lg-auto"><a href="#pendidikan" class="nav-link">Pendidikan</a></li>
          <li class="nav-item col-6 col-lg-auto"><a href="#organisasi" class="nav-link">Organisasi</a></li>
          <li class="nav-item col-6 col-lg-auto"><a href="#traveling" class="nav-link">Traveling</a></li>
          <li class="nav-item col-6 col-lg-auto"><a href="#skill" class="nav-link">Skill</a></li>
          <li class="nav-item col-6 col-lg-auto"><a href="#kontak" class="nav-link">Kontak</a></li>
        </ul>
        <hr class="d-lg-none text-white-50">
        <ul class="navbar-nav flex-row flex-wrap ms-lg-auto">
          <li class="nav-item col-6 col-lg-auto"><a href="https://wa.me/6282310900102" class="nav-link active"><i class="bi bi-whatsapp"></i><small class="ms-2 d-lg-none">WhatsApp</small></a></li>
          <li class="nav-item col-6 col-lg-auto"><a href="mailto:martinsimamora799@gmail.com" class="nav-link active"><i class="bi bi-envelope-fill"></i><small class="ms-2 d-lg-none">Email</small></a></li>
          <li class="nav-item col-6 col-lg-auto"><a href="https://instagram.com/its_tinn03" class="nav-link active"><i class="bi bi-instagram"></i><small class="ms-2 d-lg-none">Instagram</small></a></li>
          <li class="nav-item col-12 col-lg-auto">
            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
            <hr class="d-lg-none my-2 text-white-50">
          </li>
          <li class="nav-item">
            <div class="dropdown" data-bs-theme="light">
              <button type="button" class="btn nav-link text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-circle-half"></i><span class="ms-2">Tema</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><button class="dropdown-item" type="button" data-theme="light"><small><i class="bi bi-brightness-high-fill me-2"></i>Light</small></button></li>
                <li><button class="dropdown-item" type="button" data-theme="dark"><small><i class="bi bi-moon-stars-fill me-2"></i>Dark</small></button></li>
                <li><button class="dropdown-item" type="button" data-theme="auto"><small><i class="bi bi-circle-half me-2"></i>Auto</small></button></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- Main / Hero -->
<div class="surface mt-5" id="main">
  <div class="container py-5 px-4" id="beranda">
    <div class="row align-items-center g-5">
      <div class="col-md-5 order-md-2">
        <div class="profile-wrap">
          <img class="profile" src="{{ Vite::asset('resources/images/portfolio/profil.jpg') }}" alt="Foto profil Martin M.R. Simamora">
        </div>
      </div>
      <div class="col-md-7 order-md-1">
        <p class="fs-5 mb-1 text-muted">Halo, saya</p>
        <h1 class="display-3">Martin M.R. Simamora</h1>
        <p class="fs-5 mt-3">Mahasiswa Sistem Informasi Telkom University Surabaya. Saya suka merapikan data, bekerja bersama tim, dan sesekali kabur ke gunung dan pantai untuk mengisi ulang tenaga.</p>
        <div class="d-flex flex-column flex-md-row">
          <a href="#tentang" class="btn bg-purple text-white btn-lg mb-3 me-md-3 px-4 py-3">Kenalan dulu</a>
          <a href="#kontak" class="btn btn-outline-secondary btn-lg mb-3 px-4 py-3">Hubungi saya</a>
        </div>
        <div class="text-muted"><i class="bi bi-geo-alt-fill me-1"></i>Lahir di Doloksanggul, kini belajar di Surabaya</div>
      </div>
    </div>
  </div>
</div>

<!-- Tentang -->
<div id="tentang">
  <div class="container py-5 px-4">
    <div class="row g-5">
      <div class="col-lg-6">
        <div class="mb-3"><i class="bi bi-person-fill icon-box bg-warning"></i></div>
        <h2 class="display-5 mb-3">Perkenalan singkat</h2>
        <p class="fs-5">Nama saya Martin M.R. Simamora. Saya tumbuh di Doloksanggul dan merantau ke Surabaya untuk kuliah. Di kampus saya belajar mengelola basis data dan mengolah data, di luar kelas saya aktif di himpunan mahasiswa dan senang berkeliling ke tempat baru.</p>
        <p class="fs-5">Bagi saya, teknologi paling berguna ketika ia mempermudah orang lain, dan kerja tim membuatnya jauh lebih seru.</p>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <div class="skill-card">
          <h3 class="h5 mb-3">Data diri</h3>
          <dl class="fact mb-0">
            <dt>Nama lengkap</dt><dd>Martin M.R. Simamora</dd>
            <dt>Tempat, tanggal lahir</dt><dd>Doloksanggul, 3 September 2007</dd>
            <dt>Kampus</dt><dd>Telkom University Surabaya, S1 Sistem Informasi</dd>
            <dt>Minat</dt><dd class="mb-0">Database, data, organisasi, traveling</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pendidikan -->
<div id="pendidikan" class="surface">
  <div class="container py-5 px-4">
    <div class="mb-3"><i class="bi bi-mortarboard-fill icon-box bg-info"></i></div>
    <h2 class="display-5 mb-4">Pendidikan</h2>
    <div class="tl col-lg-8">
      <div class="tl-item">
        <h3 class="h5 mb-1">Telkom University Surabaya</h3>
        <div class="text-muted">S1 Sistem Informasi, sedang berjalan</div>
        <p class="mt-2 mb-0">Mendalami basis data, analisis data, dan pengembangan aplikasi web, termasuk praktikum Bootstrap dan Laravel yang menjadi dasar halaman ini.</p>
      </div>
      <div class="tl-item mb-0">
        <h3 class="h5 mb-1">SMA Negeri 1 Doloksanggul</h3>
        <div class="text-muted">Lulus</div>
        <p class="mt-2 mb-0">Tempat saya mulai belajar berorganisasi dan berani tampil di depan orang banyak.</p>
      </div>
    </div>
  </div>
</div>

<!-- Organisasi -->
<div id="organisasi">
  <div class="container py-5 px-4">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <div class="mb-3"><i class="bi bi-people-fill icon-box bg-purple"></i></div>
        <h2 class="display-5 mb-3">Berorganisasi bersama Himpunan Sistem Informasi</h2>
        <p class="fs-5">Seragam ungu itu bukan sekadar seragam. Di balik setiap kegiatan ada belajar bekerja dalam tim.</p>
        <ul class="list-unstyled fs-5 mb-0">
          <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Aktif dalam kegiatan Himpunan Mahasiswa Sistem Informasi</li>
          <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Mengikuti kegiatan study banding</li>
          <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Panitia perlombaan yang diadakan himpunan</li>
          <li class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i>Panitia kaderisasi himpunan</li>
          <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i>Peserta East Java Student Leader Summit (EJSLS)</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="row g-3 mosaic">
          <div class="col-12 big"><img src="{{ Vite::asset('resources/images/portfolio/org_kampus.jpg') }}" alt="Foto bersama pengurus himpunan di halaman kampus"></div>
          <div class="col-6 sm"><img src="{{ Vite::asset('resources/images/portfolio/org_studio.jpg') }}" alt="Foto tim himpunan di dalam ruangan"></div>
          <div class="col-6 sm"><img src="{{ Vite::asset('resources/images/portfolio/org_tangga.jpg') }}" alt="Foto bersama di tangga gedung"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Traveling -->
<div id="traveling" class="surface">
  <div class="container py-5 px-4">
    <div class="mb-3"><i class="bi bi-compass-fill icon-box bg-danger"></i></div>
    <h2 class="display-5 mb-3">Traveling</h2>
    <p class="quote mb-5 col-lg-9">Tidak semua yang tersesat itu hilang. Kadang justru di sanalah cerita terbaik dimulai.</p>
    <div class="row g-3 row-cols-2 row-cols-lg-3">
      <div class="col"><figure class="shot"><img src="{{ Vite::asset('resources/images/portfolio/gunung.jpg') }}" alt="Gunung di atas lautan kabut saat fajar"><figcaption><b>Di atas awan</b>Fajar mengajarkan sabar: gelap dulu, indahnya menyusul.</figcaption></figure></div>
      <div class="col"><figure class="shot"><img src="{{ Vite::asset('resources/images/portfolio/siluet.jpg') }}" alt="Siluet matahari terbit di atas awan"><figcaption><b>Matahari terbit</b>Bangun pagi sekali ini terbayar lunas.</figcaption></figure></div>
      <div class="col"><figure class="shot"><img src="{{ Vite::asset('resources/images/portfolio/jalan.jpg') }}" alt="Duduk di jalan desa dengan latar gunung"><figcaption><b>Jeda sebentar</b>Tidak harus selalu berlari, duduk dan menatap gunung juga kemajuan.</figcaption></figure></div>
      <div class="col"><figure class="shot"><img src="{{ Vite::asset('resources/images/portfolio/pantai.jpg') }}" alt="Selfie bersama teman di pantai"><figcaption><b>Pantai bareng teman</b>Pasir, ombak, dan tawa. Resep sederhana untuk hari yang baik.</figcaption></figure></div>
      <div class="col"><figure class="shot"><img src="{{ Vite::asset('resources/images/portfolio/kafe.jpg') }}" alt="Bersama dua teman di depan kafe"><figcaption><b>Refresh, relax, recharge</b>Perjalanan terbaik adalah yang pulangnya membawa tenaga baru.</figcaption></figure></div>
    </div>
  </div>
</div>

<!-- Skill -->
<div id="skill">
  <div class="container py-5 px-4">
    <div class="mb-3"><i class="bi bi-lightning-charge-fill icon-box bg-success"></i></div>
    <h2 class="display-5 mb-4">Skill</h2>
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="skill-card">
          <h3 class="h5 mb-3"><i class="bi bi-database-fill text-primary me-2"></i>Database Management</h3>
          <span class="chip">MySQL</span><span class="chip">SQL</span><span class="chip">Database design</span><span class="chip">ERD</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="skill-card">
          <h3 class="h5 mb-3"><i class="bi bi-bar-chart-fill text-success me-2"></i>Data Management</h3>
          <span class="chip">Microsoft Excel</span><span class="chip">Data processing</span><span class="chip">Analisis data dasar</span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="skill-card">
          <h3 class="h5 mb-3"><i class="bi bi-stars text-warning me-2"></i>Soft skill</h3>
          <ul class="list-unstyled soft mb-0">
            <li><b>Communication</b><br><small class="text-muted">Mampu menyampaikan informasi dengan baik.</small></li>
            <li><b>Teamwork</b><br><small class="text-muted">Mampu bekerja sama dalam kelompok.</small></li>
            <li><b>Problem Solving</b><br><small class="text-muted">Mampu menganalisis dan mencari solusi.</small></li>
            <li><b>Public Speaking</b><br><small class="text-muted">Mampu berbicara dan presentasi di depan umum.</small></li>
            <li class="mb-0"><b>Time Management</b><br><small class="text-muted">Mampu mengatur waktu dan prioritas.</small></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Kontak -->
<div id="kontak" class="surface">
  <div class="container py-5 px-4">
    <div class="mb-3"><i class="bi bi-chat-dots-fill icon-box bg-purple"></i></div>
    <h2 class="display-5 mb-2">Ayo ngobrol</h2>
    <p class="fs-5 mb-4">Punya ide, proyek, atau sekadar ingin menyapa? Pilih jalur yang paling nyaman.</p>
    <div class="row g-3">
      <div class="col-md-4"><a class="contact-link" href="https://wa.me/6282310900102"><i class="bi bi-whatsapp"></i><span><b>WhatsApp</b><br>082310900102</span></a></div>
      <div class="col-md-4"><a class="contact-link" href="mailto:martinsimamora799@gmail.com"><i class="bi bi-envelope-fill"></i><span><b>Email</b><br>martinsimamora799@gmail.com</span></a></div>
      <div class="col-md-4"><a class="contact-link" href="https://instagram.com/its_tinn03"><i class="bi bi-instagram"></i><span><b>Instagram</b><br>@its_tinn03</span></a></div>
    </div>
  </div>
</div>

<!-- Footer -->
<div id="footer" class="py-4">
  <div class="container px-4 d-flex flex-column flex-md-row justify-content-between gap-2 text-muted">
    <small>Dibuat dengan Laravel 13, Vite, dan Bootstrap 5 untuk Praktikum Pengembangan Aplikasi Web, Modul 9.</small>
    <small>&copy; 2026 Martin M.R. Simamora &middot; <a href="#beranda">Kembali ke atas</a></small>
  </div>
</div>

@vite('resources/js/app.js')
</body>
</html>
