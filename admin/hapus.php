<?php
require('koneksi.php');
$id = $_GET['id'];

$query_hapus = $koneksi->query("DELETE FROM siswa WHERE nis='$nis'");

if ($query_hapus) {
?>
    <script>
        window.alert('Data Berhasil Dihapus!!');
        window.location.href = 'halamansiswa.php?page=siswa';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Dihapus!!');
        window.location.href = 'halamansiswa.php?page=siswa';
    </script>
<?php
}
?>