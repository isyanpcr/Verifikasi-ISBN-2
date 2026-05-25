<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .sidebar a {
            color: #333;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #ddd;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <h5>Menu</h5>
                <a href="DataBuku.php">Data buku</a>
                <a href="DataEditor.php">Data Editor</a>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 content">
            <img src="logo.png" width="200px" height="50px" align="right"><br><br><br>
            <a href="add.php" class="btn btn-primary mb-3">Tambah Data Buku</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status buku</th>
                        <th>Staff ID</th>
                        <th>Penulis ID</th>
                        <th>NIP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM buku";
                    $result = $conn->query($sql);
                    $counter = 1;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['id_buku']}</td>
                                <td>{$row['judul']}</td>
                                <td>{$row['tgl_pengajuan']}</td>
                                <td>{$row['status']}</td>
                                <td>{$row['id_staff']}</td>
                                <td>{$row['id_penulis']}</td>
                                <td>{$row['nip']}</td>
                                <td>
                                    <a href='edit.php?id={$row['id_buku']}' class='btn btn-info btn-sm'>Edit</a>
                                    <a href='delete.php?id={$row['id_buku']}' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>";
                            $counter++;
                        }
                    } else {
                        echo "<tr><td colspan='9'>No records found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
