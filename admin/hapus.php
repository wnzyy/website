<a href="hapusdata_siswa.php?id_siswa=<?php echo $data['nis']; ?>">Hapus</a>
<?php
include 'koneksi.php';
$nis = $_GET['nis'];
$hapus = mysqli_query($connection, "DELETE FROM siswa WHERE nis='$nis'");
if ($hapus) {
    echo "<script>
                alert('Hapus data berhasil!');
                document.location='admin_siswa.php';
                </script>";
} else {
    echo "<script>
                alert('Hapus data gagal!');
                document.location='admin_siswa.php';
            </script>";
}
?>