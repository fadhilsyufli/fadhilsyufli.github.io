<?php

include 'koneksi_admin.php';

$id= $_GET['id'];


// query SQL untuk insert data
$query="DELETE from tabel_pegawai where id='$id'";
mysqli_query($connect, $query);
// mengalihkan ke halaman index.php
header("location:hasil.php");
