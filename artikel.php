<?php
// File artikel.php - Halaman Daftar Artikel dengan Integrasi Admin
// File ini menampilkan daftar artikel dan menggunakan navbar utama yang menyertakan fungsi admin
// Dengan menggabungkan navbar admin ke halaman artikel, pengguna admin dapat dengan mudah
// mengakses panel admin tanpa harus kembali ke halaman utama
include 'config.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel - Raflyy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar Artikel (tanpa integrasi admin) -->
    <!-- Menggunakan navbar_public.php untuk tampilan yang lebih bersih -->
    <!-- Jika ingin mengakses panel admin, pengguna dapat melalui link login di footer -->
    <?php include 'navbar_public.php'; ?>

    <div class="container mt-5 pt-5">
        <div class="cv-container p-4">
            <h1 class="section-title center">Daftar Artikel</h1>
            <div class="row">
                <?php
                $sql = "SELECT id, title, content, image, created_at FROM articles ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $short_content = substr(strip_tags($row['content']), 0, 100) . '...';
                        echo '<div class="col-md-6 col-lg-4 mb-4">';
                        echo '<div class="article-card card h-100">';
                        if (!empty($row['image'])) {
                            echo '<img src="admin/' . htmlspecialchars($row['image']) . '" class="card-img-top" alt="Gambar Artikel">';
                        }
                        echo '<div class="card-body d-flex flex-column">';
                        echo '<h5 class="card-title">' . htmlspecialchars($row['title']) . '</h5>';
                        echo '<p class="card-text text-muted flex-grow-1">' . htmlspecialchars($short_content) . '</p>';
                        echo '<a href="baca_artikel.php?id=' . $row['id'] . '" class="btn btn-primary mt-auto">Baca Selengkapnya</a>';
                        echo '</div>';
                        echo '<div class="card-footer text-muted text-center">';
                        echo 'Diposting pada ' . date('d M Y', strtotime($row['created_at']));
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="col-12"><p class="text-center">Belum ada artikel yang dipublikasikan.</p></div>';
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Link ke Admin Panel di bagian bawah halaman -->
    <div class="container mt-4 mb-4">
        <div class="text-center admin-links-bottom">
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <!-- Jika admin sudah login, tampilkan link ke panel admin -->
                <a href="admin/index.php" class="btn btn-primary me-2">Admin Panel</a>
                <a href="admin/logout.php" class="btn btn-outline-secondary">Logout</a>
            <?php else: ?>
                <!-- Jika belum login, tampilkan link login admin -->
                <a href="admin/login.php" class="btn btn-outline-primary">Login Admin</a>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>