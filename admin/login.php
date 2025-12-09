<?php
require_once '../config.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"])) || empty(trim($_POST["password"]))) {
        $error = 'Nama pengguna dan kata sandi tidak boleh kosong.';
    } else {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        $stmt = $conn->prepare("SELECT id, username, password FROM admins WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $hashed_password);
            if ($stmt->fetch()) {
                // Gunakan password_verify untuk memeriksa password
                if (password_verify($password, $hashed_password)) {
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                    header("location: index.php");
                    exit;
                } else {
                    $error = 'Nama pengguna atau kata sandi salah.';
                }
            }
        } else {
            $error = 'Nama pengguna atau kata sandi salah.';
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
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <style>
        body { display: flex; align-items: center; justify-content: center; height: 100vh; background-color: #f5f7fb; }
        .login-wrapper { max-width: 400px; width: 100%; padding: 2rem; background: white; border-radius: var(--border-radius); box-shadow: var(--shadow); }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <h2 class="text-center mb-4">Admin Login</h2>
        <?php if(!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>    
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <div class="text-center mt-3">
            <a href="../index.php">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>
</html>