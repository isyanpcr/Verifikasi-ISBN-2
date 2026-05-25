<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_buku = $_POST["id_buku"];
    $judul = $_POST["judul"];
    $tgl_pengajuan = $_POST["tgl_pengajuan"];
    $status = $_POST["status"];
    $id_staff = $_POST["id_staff"];
    $id_penulis = $_POST["id_penulis"];
    $nip = $_POST["nip"];

    $sql = "UPDATE buku SET judul='$judul', tgl_pengajuan='$tgl_pengajuan', status='$status', id_staff='$id_staff', id_penulis='$id_penulis', nip='$nip' WHERE id_buku=$id_buku";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    $id_buku = $_GET["id"];
    $sql = "SELECT * FROM buku WHERE id_buku=$id_buku";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container"><br><br>
<img src="logo.png" width="200px" height="50px" align="right"><br><br>
    <center><h2 class="mt-5">Edit Data Buku</h2></center><br>
    <form method="post" action="">
        <input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>">
        <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row['judul']; ?>" required>
        </div>
        <div class="form-group">
            <label for="tgl_pengajuan">Tanggal Pengajuan</label>
            <input type="date" class="form-control" id="tgl_pengajuan" name="tgl_pengajuan" value="<?php echo $row['tgl_pengajuan']; ?>" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Diajukan" <?php if ($row['status'] == 'Diajukan') echo 'selected'; ?>>Diajukan</option>
                <option value="Diedit" <?php if ($row['status'] == 'Diedit') echo 'selected'; ?>>Diedit</option>
                <option value="Selesai Edit" <?php if ($row['status'] == 'Selesai Edit') echo 'selected'; ?>>Selesai Edit</option>
                <option value="Selesai" <?php if ($row['status'] == 'Selesai') echo 'selected'; ?>>Selesai</option>
            </select>
        </div>
        <div class="form-group">
            <label for="id_staff">Staff ID</label>
            <input type="number" class="form-control" id="id_staff" name="id_staff" value="<?php echo $row['id_staff']; ?>" required>
        </div>
        <div class="form-group">
            <label for="id_penulis">Penulis ID</label>
            <input type="number" class="form-control" id="id_penulis" name="id_penulis" value="<?php echo $row['id_penulis']; ?>" required>
        </div>
        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $row['nip']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
