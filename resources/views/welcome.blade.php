<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pagar Nusa Pekalongan</title>
    <!-- Memanggil CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Warna Khas Pagar Nusa (Hijau Gelap) */
        :root {
            --pn-green: #0b5e2c;
            --pn-light: #e8f5e9;
        }

        .navbar {
            background-color: var(--pn-green) !important;
        }

        .hero-section {
            background: linear-gradient(rgba(11, 94, 44, 0.9), rgba(11, 94, 44, 0.8)), url('https://assets.promediateknologi.id/crop/0x0:0x0/1200x0/webp/photo/p1/882/2023/10/25/WhatsApp-Image-2023-10-24-at-200912-3712169735.jpeg') center/cover;
            color: white;
            padding: 120px 0;
            text-align: center;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 50px;
            text-transform: uppercase;
            color: var(--pn-green);
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background-color: var(--pn-green);
            margin: 10px auto 0;
            border-radius: 2px;
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        .btn-pn {
            background-color: var(--pn-green);
            color: white;
        }

        .btn-pn:hover {
            background-color: #084721;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <!-- Bisa diganti logo img -->
                ⚔️ Pagar Nusa Kota Pekalongan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="target=" #navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link text-white" href="#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#prestasi">Prestasi</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#struktural">Struktural</a></li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-light text-success fw-bold px-4 rounded-pill" href="#login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">PSNU Pagar Nusa Kota Pekalongan</h1>
            <h3 class="fw-normal mb-4">Pimpinan Cabang Pagar Nusa Kota Pekalongan</h3>
            <p class="lead mb-5">Seputar Informasi Pagar Nusa Kota Pekalongan</p>
            <a href="#berita" class="btn btn-light btn-lg text-success fw-bold px-5 rounded-pill shadow-sm">Jelajahi Portal</a>
        </div>
    </div>

    <!-- Section Berita -->
    <div id="berita" class="container mt-5 pt-5">
        <div class="text-center">
            <h2 class="section-title">Berita Terbaru</h2>
        </div>
        <div class="row g-4">
            <!-- Berita 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://i.pinimg.com/originals/90/25/f5/9025f5fd81731bcf6dd7da9883546c05.jpg?nii=t" class="card-img-top rounded-top" alt="Berita 1">
                    <div class="card-body">
                        <small class="text-muted">10 Oktober 2026</small>
                        <h5 class="card-title fw-bold mt-2">Ujian Kenaikan Tingkat Santri Cabang Pekalongan 2026</h5>
                        <p class="card-text text-muted">Sebanyak 250 santri mengikuti ujian kenaikan tingkat yang diselenggarakan di Alun-Alun Kota Pekalongan...</p>
                        <a href="#" class="text-decoration-none fw-bold text-success">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
            <!-- Berita 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://i.pinimg.com/originals/90/25/f5/9025f5fd81731bcf6dd7da9883546c05.jpg?nii=t" class="card-img-top rounded-top" alt="Berita 2">
                    <div class="card-body">
                        <small class="text-muted">5 Oktober 2026</small>
                        <h5 class="card-title fw-bold mt-2">Pawai Panjang Jimat Pagar Nusa Kota Pekalongan</h5>
                        <p class="card-text text-muted">Seluruh santri Pagar Nusa Se-Kota Pekalongan ikut memeriahkan pawai panjang jimat yang ada di...</p>
                        <a href="#" class="text-decoration-none fw-bold text-success">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
            <!-- Berita 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm h-100 border-0">
                    <img src="https://i.pinimg.com/originals/90/25/f5/9025f5fd81731bcf6dd7da9883546c05.jpg?nii=t" class="card-img-top rounded-top" alt="Berita 3">
                    <div class="card-body">
                        <small class="text-muted">28 September 2026</small>
                        <h5 class="card-title fw-bold mt-2">Latihan Gabungan PAC Pagar Nusa Se-Kota Pekalongan</h5>
                        <p class="card-text text-muted">Mempererat tali silaturahmi antar santri, PC Pagar Nusa mengadakan latihan gabungan yang dihadiri oleh...</p>
                        <a href="#" class="text-decoration-none fw-bold text-success">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Prestasi -->
    <div id="prestasi" class="bg-light mt-5 py-5">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title mt-2">Prestasi Santri</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Prestasi 1 -->
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100 text-center py-4">
                        <div class="card-body">
                            <div class="display-4 mb-3">🥇</div>
                            <h5 class="card-title text-success fw-bold">Juara 1 Tanding Kelas C</h5>
                            <h6 class="card-subtitle mb-3 text-muted">Kejurda Pencak Silat Jateng</h6>
                            <hr class="w-50 mx-auto">
                            <p class="card-text fw-bold mb-0">Ahmad Fauzi</p>
                            <small class="text-muted">PAC Pekalongan Selatan</small>
                        </div>
                    </div>
                </div>
                <!-- Prestasi 2 -->
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100 text-center py-4">
                        <div class="card-body">
                            <div class="display-4 mb-3">🥈</div>
                            <h5 class="card-title text-success fw-bold">Juara 2 Seni Tunggal</h5>
                            <h6 class="card-subtitle mb-3 text-muted">Porsema Tingkat Nasional</h6>
                            <hr class="w-50 mx-auto">
                            <p class="card-text fw-bold mb-0">Siti Aminah</p>
                            <small class="text-muted">PAC Pekalongan Timur</small>
                        </div>
                    </div>
                </div>
                <!-- Prestasi 3 -->
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm h-100 text-center py-4">
                        <div class="card-body">
                            <div class="display-4 mb-3">🥇</div>
                            <h5 class="card-title text-success fw-bold">Pesilat Terbaik Putra</h5>
                            <h6 class="card-subtitle mb-3 text-muted">UIN Gusdur Cup Pekalongan</h6>
                            <hr class="w-50 mx-auto">
                            <p class="card-text fw-bold mb-0">Budi Santoso</p>
                            <small class="text-muted">PAC Pekalongan Barat</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Struktural -->
    <div id="struktural" class="container mt-5 pt-5 mb-5 pb-5">
        <div class="text-center">
            <h2 class="section-title">Susunan Pengurus Cabang</h2>
        </div>
        <div class="row justify-content-center g-4 mt-3">
            <!-- Orang 1 -->
            <div class="col-md-3 text-center">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                    <img src="https://i.pinimg.com/originals/90/25/f5/9025f5fd81731bcf6dd7da9883546c05.jpg?nii=t" class="rounded-circle mb-3 shadow-sm" width="140" height="140" style="object-fit: cover; border: 4px solid var(--pn-green);" alt="Ketua">
                    <h5 class="fw-bold mb-1">Alfan Maulana</h5>
                    <span class="badge bg-success px-3 py-2 rounded-pill mt-2">Ketua PC Pagar Nusa</span>
                </div>
            </div>
            <!-- Orang 2 -->
            <div class="col-md-3 text-center">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                    <img src="https://i.pinimg.com/originals/90/25/f5/9025f5fd81731bcf6dd7da9883546c05.jpg?nii=t" class="rounded-circle mb-3 shadow-sm" width="140" height="140" style="object-fit: cover; border: 4px solid var(--pn-green);" alt="Sekretaris">
                    <h5 class="fw-bold mb-1">Ahmad Mujibun</h5>
                    <span class="badge bg-success px-3 py-2 rounded-pill mt-2">Sekretaris</span>
                </div>
            </div>
            <!-- Orang 3 -->
            <div class="col-md-3 text-center">
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light h-100">
                    <img src="https://i.pinimg.com/originals/90/25/f5/9025f5fd81731bcf6dd7da9883546c05.jpg?nii=t" class="rounded-circle mb-3 shadow-sm" width="140" height="140" style="object-fit: cover; border: 4px solid var(--pn-green);" alt="Dewan Pelatih">
                    <h5 class="fw-bold mb-1">Muhammad Rizal</h5>
                    <span class="badge bg-success px-3 py-2 rounded-pill mt-2">Ketua Divisi Pelatih</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white text-center py-4" style="background-color: #111;">
        <div class="container">
            <p class="mb-1">&copy; 2026 Informasi Santri Pagar Nusa Kota Pekalongan.</p>
            <p class="text-muted small mb-0">Dikembangkan untuk Skripsi: Penerapan Algoritma RBAC pada Digitalisasi Jurus Baku.</p>
        </div>
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>