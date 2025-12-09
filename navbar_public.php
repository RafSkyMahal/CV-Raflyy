<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Public Navbar (without admin links) -->
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
                </ul>
            </div>
        </div>
    </nav>