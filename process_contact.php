<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "username"; // Ganti dengan username database Anda
$password = "password"; // Ganti dengan password database Anda
$dbname = "kontak";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Variabel untuk menyimpan pesan
$message = "";

// Menjalankan perintah SQL untuk menyimpan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message_content = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message_content')";

    if ($conn->query($sql) === TRUE) {
        $message = "Pesan Anda berhasil dikirim.";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>