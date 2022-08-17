<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>form pegawai</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
            background-image: url(assets/img/background2.jpg);
            width: 100vw;
            height: 100vh;
            background-size: cover;
            z-index: -1;
            background-position: center;
            }

            h2 {
                margin-bottom: 15px;
                color: white;
                margin-left: 630px;
                padding-top: 100px;
            }
            table {
                color: white;
                border: 1px solid #fff;
                margin-left: 350px;
                border-radius: 6px;
            }
            tr {
                padding: 8px 20px;
            }
            li a {
                margin-left: 330px;
                text-decoration: none;
                list-style: none;
                color: white;
                border: 1px solid #fff;
                padding: 5px;
                transition: 0.7s;
                border-radius: 6px;
            }
            li a:hover {
                background-color: #00BFFF;
            }

        </style>
    </head>
    <body>
        <h2>List Pegawai </h2>
        <table border="1">
            <tr><th>NO</th><th>Nama</th><th>Nomor ID</th><th>Nomor HP</th><th>Email</th><th>Alamat</th><th>Action</th></tr>
            <?php
            include 'koneksi_admin.php';
            $mahasiswa = mysqli_query($connect, "SELECT * from tabel_pegawai");
            $no = 1;
            foreach ($mahasiswa as $row) {

                echo "<tr>
            <td>$no</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['noid'] . "</td>
            <td>" . $row['nohp'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['alamat'] . "</td>
            <td>
                <a href='koneksi_edit.php?id=$row[id]'>Edit</a>
                <a href='delete.php?id=$row[id]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table>
        <br>
        <li><a href="create.php">Logout</a></li>
    </body>
</html>