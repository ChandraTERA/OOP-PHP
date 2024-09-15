<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Konfigurasi database
$host = 'localhost';
$db   = 'nama_database';
$user = 'username';
$pass = 'password';
$charset = 'utf8mb4';

// Koneksi ke database menggunakan PDO
try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Fungsi untuk membersihkan input
function bersihkanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Contoh penggunaan fungsi dan query database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = bersihkanInput($_POST['nama']);
    $email = bersihkanInput($_POST['email']);

    $sql = "INSERT INTO users (nama, email) VALUES (:nama, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nama' => $nama, 'email' => $email]);

    echo "Data berhasil disimpan!";
}
?>

<h1>Formulir Pendaftaran</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nama: <input type="text" name="nama" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Daftar">
</form>
    
</body>
</html>