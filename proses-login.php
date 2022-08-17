<?php
include 'koneksi_admin.php';
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) && !empty($password)) {
    $sql = mysqli_query($connect, "SELECT * FROM proses_login WHERE username = '$username' AND password = '$password'");
    $result = mysqli_num_rows($sql);
    if ($result) {
        echo "<script>alert('Selamat datang $username')</script>";
        header("Refresh:0.3 url=belajar.php");
        
    } else {
        echo "<script>alert('Username atau password salah!')</script>";
         header("Refresh:0,3 url=index.php");
    }
} 
else {
    echo "<script>alert('Inputan kosong, silahkan diisi!')</script>";
    header("Refresh:0.3 url=login.php");
}
?>



    