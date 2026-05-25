<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST["judul"];
    $tgl_pengajuan = $_POST["tgl_pengajuan"];
    $status = $_POST["status"];
    $id_staff = $_POST["id_staff"];
    $id_penulis = $_POST["id_penulis"];
    $nip = $_POST["nip"];

    $sql = "INSERT INTO buku (judul, tgl_pengajuan, status, id_staff, id_penulis, nip) VALUES ('$judul', '$tgl_pengajuan', '$status', '$id_staff', '$id_penulis', '$nip')";

    if ($conn->query($sql) === TRUE) {
        header("Location: DataBuku.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2 class="mt-5">Add New Book</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="judul">Title</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="tgl_pengajuan">Date of Submission</label>
            <input type="date" class="form-control" id="tgl_pengajuan" name="tgl_pengajuan" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Pengajuan">Pengajuan</option>
                <option value="Edit">Edit</option>
                <option value="Selesai Edit">Selesai Edit</option>
                <option value="Diterima">Diterima</option>
            </select>
        </div>
        <div class="form-group">
            <label for="id_staff">Staff ID</label>
            <input type="number" class="form-control" id="id_staff" name="id_staff" required>
        </div>
        <div class="form-group">
            <label for="id_penulis">Author ID</label>
            <input type="number" class="form-control" id="id_penulis" name="id_penulis" required>
        </div>
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" required>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
