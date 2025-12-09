<?php
require_once 'config.php';

// SQL untuk membuat tabel admin
$sql_create_table = "CREATE TABLE IF NOT EXISTS admins (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Tabel 'admins' berhasil dibuat atau sudah ada.<br>";

    // Cek apakah admin sudah ada
    $check_admin = $conn->query("SELECT id FROM admins WHERE username = 'admin'");
    if ($check_admin->num_rows == 0) {
        // Tambahkan admin default
        $username = 'admin';
        $password = 'password123'; // Password default, ganti nanti
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql_insert_admin = "INSERT INTO admins (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql_insert_admin);
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            echo "Admin default berhasil ditambahkan.<br>";
            echo "Silakan login dengan:<br>";
            echo "Username: <strong>" . $username . "</strong><br>";
            echo "Password: <strong>" . $password . "</strong><br>";
        } else {
            echo "Error saat menambahkan admin: " . $stmt->error . "<br>";
        }
        $stmt->close();
    } else {
        echo "Admin default sudah ada di database.<br>";
        echo "Silakan login dengan username <strong>admin</strong>.<br>";
        echo "Jika Anda lupa password, Anda perlu meresetnya secara manual di database.";
    }

} else {
    echo "Error saat membuat tabel 'admins': " . $conn->error . "<br>";
}

$conn->close();
?>
