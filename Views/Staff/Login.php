<?php
// Include file koneksi ke database
include "koneksi.php";

// Ambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Query untuk mencari user berdasarkan email dan password
$query = "SELECT * FROM staff WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con, $query);

// Check apakah query berhasil dieksekusi
if (mysqli_num_rows($result) == 1) {
    // Jika berhasil, redirect ke halaman dashboard atau halaman selanjutnya
    echo "<script>
    alert('Anda Berhasil Login!');
    window.location.href = 'DataBuku.php';
    </script>";
   
} else {
    echo "<script>
    alert('Email atau Password Anda Salah!');
    window.location.href = 'FormLoginStaff.php';
    </script>"; 
}

?>