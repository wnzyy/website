<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {

    $simpan = mysqli_query($connection, "INSERT INTO siswa(nis, nama, tempat_lahir, tgl_lahir,jenis_kelamin, agama, alamat)
                                        VALUES ('$_POST[nis]',
                                                '$_POST[nama]',
                                                '$_POST[tempat_lahir]',
                                                '$_POST[tgl_lahir]',
                                                '$_POST[jenis_kelamin]',
                                                '$_POST[agama]',
                                                '$_POST[alamat]') ");
    if ($simpan) {
        echo "<script>
                    alert('Simpan data berhasil!');
                    document.location='admin_siswa.php';
                    </script>";
    } else {
        echo "<script>
                    alert('Simpan data gagal!');
                    document.location='admin_siswa.php';
                </script>";
    }
}

if (isset($_POST['bedit'])) {

    $edit = mysqli_query($connection, "UPDATE siswa SET nis = '$_POST[nis]', nama = '$_POST[nama]', tempat_lahir = '$_POST[tempat_lahir]', tanggal_lahir = '$_POST[tgl_lahir]', jenis_kelamin = '$_POST[jenis_kelamin]', agama = '$_POST[agama]', alamat = '$_POST[alamat] 
    WHERE nis = '$_POST[nis]'");
    if ($edit) {
        echo "<script>
                    alert('Edit data berhasil!');
                    document.location='admin_siswa.php';
                    </script>";
    } else {
        echo "<script>
                    alert('Edit data gagal!');
                    document.location='admin_siswa.php';
                </script>";
    }
}
