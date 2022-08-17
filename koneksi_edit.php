<?php
include 'koneksi_admin.php';

if(isset($_POST['simpan'])){
    $id= $_POST['id'];
    $nama = $_POST['nama'];
    $noid = $_POST['noid'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $qs=mysqli_query($connect, "UPDATE tabel_pegawai SET nama='$nama', noid='$noid',  nohp='$nohp', email='$email', alamat='$alamat' where id='$id'");
    if ($qs){
    echo "data tersimpan";
    header('location: hasil.php');
    }else{
    echo "data gagal";
    }
}

if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    
    $qdataakhir = mysqli_query($connect,"SELECT * FROM tabel_pegawai WHERE id='$id'");
    $tampil = mysqli_fetch_assoc($qdataakhir);

    $qsiswa = mysqli_query($connect,"SELECT * FROM tabel_pegawai WHERE nama = '$tampil[nama]'");
    $tsiswa = mysqli_fetch_assoc($qsiswa);


    ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .logo{
            text-align:center;
        }
        body {
            background-image: url(assets/img/background2.jpg);
            width: 100vw;
            height: 100vh;
            background-size: cover;
            z-index: -1;
            background-position: center;
            color: white;
        }
    </style>

        <!-- form -->
        <div class="container"><br>
        

        <div id="example-div" class="bg-secondary border d-flex aligns-items-center justify-content-center rounded-3" style="height:50px ">
            <h1 >INPUT DATA </h1>
        </div>

        <div id="example-div" class="bg-secondary border d-flex aligns-items-center justify-content-center rounded-3" style="height:280px">
            

            <form action="" method="post">
                <table>

                    <input type="hidden" name="id" value="<?=$tsiswa['id']?>">
    
                    <tr>
                        <td width="200">Masukkan Nama </td>
                        <td width="15">:</td>
                        <td><input type="text" value="<?=$tsiswa['nama']?>" name="nama" required></td>
                    </tr>
                    <tr>
                        <td width="200">Masukkan Kode </td>
                        <td width="15">:</td>
                        <td><input type="text" value="<?=$tsiswa['noid']?>" name="noid" required></td>
                    </tr>
                    <tr>
                        <td width="200">Masukkan No HP </td>
                        <td width="15">:</td>
                        <td><input type="text" value="<?=$tsiswa['nohp']?>" name="nohp" required></td>
                    </tr>
                    <tr>
                        <td width="200">Masukkan Email </td>
                        <td width="15">:</td>
                        <td><input type="text" value="<?=$tsiswa['email']?>" name="email" required></td>
                    </tr>
                    <tr>
                        <td width="200">Masukkan Alamat </td>
                        <td width="15">:</td>
                        <td><input type="text" value="<?=$tsiswa['alamat']?>" name="alamat" required></td>
                    </tr>
                    
                    
                </table><br>
                <td><button type="submit" class="btn btn-light" name="simpan">Update</button></td>
            </div>
        </div>
        
</form>
</body>
</html>



    
<?php };
?>
