<?php
require_once '../config.php';

// Cek jika user belum login, redirect ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: login.php');
    exit;
}

$title = $content = $image = "";
$id = $_GET['id'];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $new_image = $_FILES['image'];
    $old_image = $_POST['old_image'];

    if ($new_image['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $new_image['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);

        if (in_array(strtolower($filetype), $allowed)) {
            $image = 'uploads/' . uniqid() . '.' . $filetype;
            if (!file_exists('uploads')) {
                mkdir('uploads', 0777, true);
            }
            move_uploaded_file($new_image['tmp_name'], $image);
            if (!empty($old_image) && file_exists($old_image)) {
                unlink($old_image);
            }
        } else {
            echo "File gambar tidak valid.";
            exit;
        }
    } else {
        $image = $old_image;
    }

    if (!empty($title) && !empty($content)) {
        $stmt = $conn->prepare("UPDATE articles SET title = ?, content = ?, image = ? WHERE id = ?");
        $stmt->bind_param("sssi", $title, $content, $image, $id);
        
        if ($stmt->execute()) {
            header("location: index.php");
            exit();
        } else {
            echo "Terjadi kesalahan. Silakan coba lagi.";
        }
        $stmt->close();
    }
}

// Ambil data artikel yang akan diedit
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $id = trim($_GET['id']);
    $stmt = $conn->prepare("SELECT title, content, image FROM articles WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
        $image = $row['image'];
    } else{
        echo "Artikel tidak ditemukan.";
        exit();
    }
    $stmt->close();
} else {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Artikel</title>
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
            <h1 class="section-title">Edit Artikel</h1>
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <input type="hidden" name="old_image" value="<?php echo $image; ?>"/>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" id="title" value="<?php echo htmlspecialchars($title); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" class="form-control" id="image">
                    <?php if (!empty($image)): ?>
                        <img src="<?php echo htmlspecialchars($image); ?>" class="img-fluid rounded mt-2" width="200">
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" class="form-control" id="content" rows="10" required><?php echo htmlspecialchars($content); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Artikel</button>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>