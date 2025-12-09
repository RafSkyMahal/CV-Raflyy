<?php
require_once '../config.php';

// Cek jika user belum login, redirect ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg cv-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Admin Panel</a>
            <div class="ms-auto">
                <a href="logout.php" class="btn btn-danger">Logout <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="cv-container p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="section-title mb-0">Manajemen Artikel</h1>
                <a href="tambah.php" class="btn btn-primary"><i class="fas fa-plus me-2"></i>Tambah Artikel Baru</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover admin-table">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Tanggal Dibuat</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT id, title, image, created_at FROM articles ORDER BY created_at DESC";
                        $result = $conn->query($sql);
                        $i = 1;
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $i++ . "</td>";
                                echo "<td>";
                                if (!empty($row['image'])) {
                                    echo '<img src="' . htmlspecialchars($row['image']) . '" width="100" class="img-thumbnail">';
                                } else {
                                    echo 'Tidak ada gambar';
                                }
                                echo "</td>";
                                echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                                echo "<td>" . date('d M Y, H:i', strtotime($row['created_at'])) . "</td>";
                                echo '<td class="text-center">
                                    <a href="../baca_artikel.php?id=' . $row['id'] . '" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> Lihat</a>
                                    <a href="edit.php?id=' . $row['id'] . '" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="hapus.php?id=' . $row['id'] . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Anda yakin ingin menghapus artikel ini?\');"><i class="fas fa-trash"></i> Hapus</a>
                                </td>';
                                echo "</tr>";
                            }
                        } else {
                            echo '<tr><td colspan="5" class="text-center">Tidak ada artikel.</td></tr>';
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>