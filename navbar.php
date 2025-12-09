<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- File navbar.php -->
<!-- Navbar utama yang mencakup menu untuk halaman utama, artikel, dan fungsi admin -->
<!-- Navbar ini menampilkan link admin berdasarkan status login pengguna -->
<!-- Jika pengguna admin login, muncul link Admin Panel dan Logout -->
<!-- Jika pengguna belum login, muncul link Login Admin -->
<!-- Navbar ini digunakan di halaman artikel.php untuk menggabungkan fungsionalitas admin -->
<!-- dengan tampilan artikel -->
<!-- Navbar Utama dengan Integrasi Admin -->
    <nav class="navbar navbar-expand-lg cv-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-user-circle me-2"></i>Raflyy
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-user me-1"></i> Tentang Saya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.php">
                            <i class="fas fa-newspaper me-1"></i> Artikel
                        </a>
                    </li>
                    <!-- Bagian admin akan ditampilkan berdasarkan status login pengguna -->
                    <!-- Jika sudah login sebagai admin, muncul menu Admin Panel dan Logout -->
                    <!-- Jika belum login, muncul menu Login Admin -->
                    <!-- Kondisi untuk menampilkan link admin berdasarkan status login -->
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <!-- Jika pengguna sudah login sebagai admin, tampilkan link Admin Panel dan Logout -->
                        <li class="nav-item">
                            <a class="nav-link" href="admin/index.php">
                                <i class="fas fa-user-cog me-1"></i> Admin Panel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/logout.php">
                                <i class="fas fa-sign-out-alt me-1"></i> Logout
                            </a>
                        </li>
                    <?php else: ?>
                        <!-- Jika pengguna belum login, tampilkan link Login Admin -->
                        <li class="nav-item">
                            <a class="nav-link" href="admin/login.php">
                                <i class="fas fa-sign-in-alt me-1"></i> Login Admin
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>