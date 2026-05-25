<?php
// Mengambil data yang di-submit dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Mengambil nilai jenis kelamin yang dipilih dari form
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $alamat = $_POST['alamat'];

    // Proses penyimpanan data atau validasi bisa dilakukan di sini
    // Contoh sederhana hanya untuk menampilkan kembali data yang di-submit
    echo "<h2>Sign Up Successful!</h2>";
    echo "<p>Name: $fullname</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Jenis Kelamin: $gender</p>";
    echo "<p>No Telp: $phone</p>";
    
    // Jangan pernah menampilkan password secara langsung di aplikasi nyata!
}
