<?php
session_start();

// File untuk membuat tabel-tabel yang diperlukan jika belum ada
include 'config.php';

echo "<h2>Membuat Tabel-tabel untuk CV Website</h2>";

// Query untuk membuat tabel users (untuk login admin)
$sql_users = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Query untuk membuat tabel articles (untuk artikel)
$sql_articles = "CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Eksekusi query
if ($conn->query($sql_users) === TRUE) {
    echo "Tabel 'users' berhasil dibuat (atau sudah ada)<br>";
} else {
    echo "Error membuat tabel 'users': " . $conn->error . "<br>";
}

if ($conn->query($sql_articles) === TRUE) {
    echo "Tabel 'articles' berhasil dibuat (atau sudah ada)<br>";
} else {
    echo "Error membuat tabel 'articles': " . $conn->error . "<br>";
}

// Cek apakah sudah ada pengguna admin
$check_admin = "SELECT * FROM users WHERE username='admin'";
$result = $conn->query($check_admin);

if ($result->num_rows > 0) {
    echo "<h3>Admin sudah terdaftar di database!</h3>";
    echo "<p>Anda bisa login menggunakan username 'admin' dan password yang sudah Anda buat sebelumnya.</p>";
    echo "<a href='admin/login.php' class='btn btn-primary'>Ke Halaman Login Admin</a>";
} else {
    echo "<h3>Belum ada admin di database</h3>";
    echo "<p>Gunakan form di bawah untuk membuat akun admin pertama:</p>";
    
    if ($_POST) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $insert = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        
        if ($conn->query($insert) === TRUE) {
            echo "<h3 style='color: green;'>Admin berhasil dibuat!</h3>";
            echo "<p>Silakan hapus file buat_admin.php setelah login untuk alasan keamanan</p>";
            echo "<a href='admin/login.php' class='btn btn-primary'>Ke Halaman Login Admin</a>";
        } else {
            echo "<p style='color: red;'>Error: " . $insert . "<br>" . $conn->error . "</p>";
        }
    }
    
    echo "
    <form method='post' style='margin-top: 20px; max-width: 400px; margin: 0 auto;'>
        <div style='margin-bottom: 15px;'>
            <label for='username' style='display: block; margin-bottom: 5px;'>Username:</label>
            <input type='text' name='username' required style='width: 100%; padding: 8px;'>
        </div>
        <div style='margin-bottom: 15px;'>
            <label for='password' style='display: block; margin-bottom: 5px;'>Password:</label>
            <input type='password' name='password' required style='width: 100%; padding: 8px;'>
        </div>
        <input type='submit' value='Buat Admin' style='background: #4e73df; color: white; padding: 10px 20px; border: none; cursor: pointer;'>
    </form>
    ";
}

$conn->close();
?>

<style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
        background-color: #f5f7fb;
    }
    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4e73df;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .btn:hover {
        background-color: #3a56c4;
    }
</style>