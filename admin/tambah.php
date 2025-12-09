<?php
require_once '../config.php';

// Cek jika user belum login, redirect ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: login.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $image = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $_FILES['image']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);

        if (in_array(strtolower($filetype), $allowed)) {
            $image = 'uploads/' . uniqid() . '.' . $filetype;
            if (!file_exists('uploads')) {
                mkdir('uploads', 0777, true);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], $image);
        } else {
            echo "File gambar tidak valid.";
            exit;
        }
    }

    if (!empty($title) && !empty($content)) {
        $stmt = $conn->prepare("INSERT INTO articles (title, content, image) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $content, $image);
        
        if ($stmt->execute()) {
            header("location: index.php");
            exit();
        } else {
            echo "Terjadi kesalahan. Silakan coba lagi.";
        }
        $stmt->close();
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Artikel Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.tiny.cloud/1/yni39lvlwmh83n5bluwqgbvh2ocm6om1dj8fmyhw5xgj7vk2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea#content',
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image'
      });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg cv-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Admin Panel</a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="cv-container p-4">
            <h1 class="section-title">Tambah Artikel Baru</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" id="title" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" class="form-control" id="content" rows="10" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" onclick="tinymce.triggerSave()">Simpan Artikel</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>