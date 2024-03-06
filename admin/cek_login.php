<?php 

session_start();

include 'koneksi.php';
 

$username = $_POST['username'];
$password = $_POST['password'];
 
 

$login = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
 
 $data = mysqli_fetch_assoc($login);
 
 
 if($data['level']=="adminstator"){
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "adminstator";
 header("location:adminstator.php");
 
 
 }else if($data['level']=="guru"){

 $_SESSION['username'] = $username;
 $_SESSION['level'] = "guru";
 
 header("location:guru.php");
 
 
 }else if($data['level']=="siswa"){
 
 $_SESSION['username'] = $username;
 $_SESSION['level'] = "siswa";
 
 header("location:siswa.php");
 
}else if($data['level']=="staff"){
    
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "staff";
    
    header("location:staff.php");

 }else if($data['level']=="orang tua"){
    
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "orang tua";
    
    header("location:orang_tua.php");
 
}else if($data['level']=="admin sekolah"){
    
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin sekolah";
    
    header("location:admin_sekolah.php");
}else{
    
 
 header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}
 
?>