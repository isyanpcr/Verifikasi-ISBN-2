<?php
    include 'Core/Database.php';
    class Buku_Model extends Database {
        private $db;
    
        function __construct() {
            $this->db = new Database();
        }
    
        function getAllData() {
            $query = "SELECT * FROM buku ORDER BY created DESC";
            $data = $this->db->execute($query);
            return $data;
        }
    
        function hapusData($id) {
            $where = 'id_buku='.$id;
            $status = $this->db->delete('buku',$where);
    
            if ($status) {
                echo "<script>
                    alert('Data Berhasil Dihapus!');
                    window.location.href = 'DataBuku.php';
                    </script>";
            } else {
                echo "<script>
                    alert('Data Gagal Dihapus!');
                    </script>";
            }
        }
    
        function tambahData($data) {
            $col = ['id_buku', 'tgl_pengajuan', 'status', 'id_penulis', 'id_staff', 'nip'];
            $status = $this->db->insert('buku', $col, $data);
            if (!$status) {
                echo "<script>
                alert('Data Berhasil Ditambahkan!');
                window.location.href = 'DataBuku.php';
                </script>";
            } else {
                echo "<script>
                alert('Data Gagal Ditambahkan!');
                </script>";
            }
        }
    
        function editData($id) {
            $query = "SELECT * FROM buku WHERE id_buku = ?";
            $data = $this->db->execute($query, [$id]);
            return $data;
        }
        
    
        function updateData($data) {
                $query = "UPDATE buku SET judul = ?, tgl_pengajuan = ?, id_penulis = ?, id_staff=?, nip=? WHERE id_-buku = ?";
                $status = $this->db->execute($query, [$data['judul'], $data['tgl_pengajuan'], $data['id_penulis'], $data['id_staff'], $data['nip']]);
        
            if (!$status) {
                echo "<script>
                    alert('Data Berhasil Diupdate!');
                    window.location.href = 'iDataBuku.php';
                    </script>";
            } else {
                echo "<script>
                    alert('Data Gagal Diupdate!');
                    </script>";
            }
        }
        
    }
?>