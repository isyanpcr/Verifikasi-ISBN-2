<?php
include 'db.php';

$id_buku = $_GET['id'];
$sql = "DELETE FROM buku WHERE id_buku=$id_buku";

if ($conn->query($sql) === TRUE) {
    header("Location: DataBuku.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
