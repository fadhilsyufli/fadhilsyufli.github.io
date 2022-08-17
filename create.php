<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>add</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url(assets/img/background2.jpg);
            width: 100vw;
            height: 100vh;
            background-size: cover;
            z-index: -1;
            background-position: center;
        }

        .alert  {
            padding-top: 100px;
        }
        .submit {
            padding: 5px;
        }
        .submit:hover {
            background: #00BFFF;
            border-radius: 6px;
            transition: 0.5s;
        }
        .mb-1 {
            margin-left: 36px;
        }
        .mb-2 {
            margin-left: 5px;
        }
        .mb-3 {
            margin-left: 2px;
        }
        .mb-4 {
            margin-left: 33px;
        }
        .mb-5 {
            margin-left: 23px;
        }
    </style>
</head>
<body align="center" style="text-align: center; color: #00BFFF;">
<div class="alert alert-denger" role="alert">
        <p>Semua Formulir Harus Diisi</p>
        <br>
        <h1 style="text-align: center; color: #00BFFF;">Form Tambahan Pegawai</h1>
        <br>
    </div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                </div>
                <form action="add.php" method="POST">
                    <div class="mb-1">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <br>
                    <div class="mb-2">
                        <label for="noid" class="form-label">Nomor ID :</label>
                        <input type="number" class="form-control" id="noid" name="noid" required>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor HP :</label>
                        <input type="number" class="form-control" id="nohp" name="nohp" required>
                    </div>
                    <br>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <br>
                    <div class="mb-5">
                        <label for="alamat" class="form-label">Alamat :</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <br>
                    <button type="submit" class="submit" name="tblkirim">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>