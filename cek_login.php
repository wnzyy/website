<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
 $data = mysqli_fetch_assoc($login);
 
 // cek jika user login sebagai admin
 if($data['level']=="adminstator"){
 
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "adminstator";
 // alihkan ke halaman dashboard admin
 header("location:adminstator.php");
 
 // cek jika user login sebagai pegawai
 }else if($data['level']=="guru"){
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "guru";
 // alihkan ke halaman dashboard pegawai
 header("location:guru.php");
 
 // cek jika user login sebagai pengurus
 }else if($data['level']=="siswa"){
 // buat session login dan username
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "siswa";
 // alihkan ke halaman dashboard pengurus
 header("location:siswa.php");
 
}else if($data['level']=="staff"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "staff";
    // alihkan ke halaman dashboard pegawai
    header("location:staff.php");

 }else if($data['level']=="orang tua"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "orang tua";
    // alihkan ke halaman dashboard pegawai
    header("location:orang_tua.php");
 
}else if($data['level']=="admin sekolah"){
    // buat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin sekolah";
    // alihkan ke halaman dashboard pegawai
    header("location:admin_sekolah.php");
}else{
    
 // alihkan ke halaman login kembali
 header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}
 
?>