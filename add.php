<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'login');

if(isset($_POST['tblkirim']))
{
    $nama = $_POST['nama'];
    $noid = $_POST['noid'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];


    $query = "INSERT INTO tabel_pegawai (`nama`,`noid`,`nohp`,`email`,`alamat`) VALUES ('$nama','$noid','$nohp','$email','$alamat')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo "<script>alert('anda berhasil masuk')</script>";
        header("Refresh:0.3; url=hasil.php");
    }
    else {
        echo "<script>alert('anda gagal login')</script>";
        header("Refresh:0.3; url=add.php");
    }
}

?>