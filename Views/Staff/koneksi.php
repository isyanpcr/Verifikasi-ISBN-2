<?php 
// membuat koneksi ke mysql
$con = mysqli_connect("localhost","root","","project_k4");
// Mengecek apakah koneksi gagal?
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{

}
?>