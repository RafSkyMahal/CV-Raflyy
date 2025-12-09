<?php
require_once '../config.php';

// Cek jika user belum login, redirect ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: login.php');
    exit;
}

if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){    
    $id = trim($_GET["id"]);
    $stmt = $conn->prepare("DELETE FROM articles WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if($stmt->execute()){
        header("location: index.php");
        exit();
    } else{
        echo "Oops! Terjadi kesalahan. Silakan coba lagi nanti.";
    }

    $stmt->close();
    $conn->close();
} else{
    // Jika tidak ada id, redirect
    header("location: index.php");
    exit();
}
?>