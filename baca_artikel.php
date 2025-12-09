<?php 
include 'config.php'; 

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: artikel.php');
    exit();
}

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT title, content, image, created_at FROM articles WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Artikel tidak ditemukan.";
    exit();
}

$article = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?> - Raflyy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar_public.php'; ?>

    <div class="container mt-5 pt-5">
        <div class="cv-container p-4 p-md-5">
            <article>
                <header class="mb-4">
                    <h1 class="fw-bold mb-1"><?php echo htmlspecialchars($article['title']); ?></h1>
                    <div class="text-muted fst-italic mb-2">Diposting pada <?php echo date('d F Y', strtotime($article['created_at'])); ?></div>
                </header>
                <figure class="mb-4">
                    <?php if (!empty($article['image'])): ?>
                        <img src="admin/<?php echo htmlspecialchars($article['image']); ?>" class="img-fluid rounded" alt="Gambar Artikel">
                    <?php endif; ?>
                </figure>
                <section class="mb-5 fs-5">
                    <?php echo $article['content']; ?>
                </section>
            </article>
            <a href="artikel.php" class="btn btn-primary"><i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Artikel</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>