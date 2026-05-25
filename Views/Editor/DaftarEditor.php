
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Editor</title>
    <style>
        /* Styling untuk keperluan presentasi */
        body {
            background-image: url(https://pcr.ac.id/assets/media/pcr_media20210421024826.jpg);
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .signup-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .signup-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .signup-form input[type="text"],
        .signup-form input[type="email"],
        .signup-form input[type="tel"],
        .signup-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .signup-form button {
            width: 100%;
            background-color: #4691d6;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .signup-form button:hover {
            background-color: #0f70df;
        }
    </style>
</head>

<body>
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <input type="text" name="nama" placeholder="Masukkan nama" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="text" name="alamat" placeholder="Masukkan alamat" required>
            <input type="tel" name="phone" placeholder="Enter your phone number" required><br>           
            <input type="password" name="password" placeholder="Password" required>
            <label><input type="radio" name="gender" value="male" required> Laki-Laki</label>
            <label><input type="radio" name="gender" value="female" required>Perempuan</label><br><br>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>

</html>

<?php
// Mengambil data yang di-submit dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Mengambil nilai jenis kelamin yang dipilih dari form
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $alamat = $_POST['alamat'];

    // Proses penyimpanan data atau validasi bisa dilakukan di sini
    // Contoh sederhana hanya untuk menampilkan kembali data yang di-submit
    echo "<h2>Sign Up Successful!</h2>";
    echo "<p>Nama: $name</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Jenis Kelamin: $gender</p>";
    echo "<p>No Telp: $phone</p>";
    
    // Jangan pernah menampilkan password secara langsung di aplikasi nyata!
}
?>