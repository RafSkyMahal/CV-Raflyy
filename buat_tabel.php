<?php
include 'config.php';

$sql = "CREATE TABLE articles (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabel 'articles' berhasil dibuat.";
} else {
    echo "Error saat membuat tabel: " . $conn->error;
}

$conn->close();
?>
