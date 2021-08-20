<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Validasi Pendaftaran Mahasiswa</title>
</head>

<body>

    <!-- PHP include program to formulir -->
    <?PHP

    // initialization
    $name = $_POST["nama"];
    $numberKTP = $_POST["nik"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["trip-start"];
    $jenisKelamin = $_POST["jk"];
    $kewarganegaraan = $_POST["kewarganegaraan"];
    $agama = $_POST["agama"];
    $nama_ibu = $_POST["nama_ibu"];
    $email = $_POST["email"];
    $telp = $_POST["no_telp"];
    $alamat = $_POST["alamat"];
    $kode_pos = $_POST["kode_pos"];
    $provinsi = $_POST["provinsi"];
    $kabupaten = $_POST["kabupaten"];
    $kecamatan = $_POST["kecamatan"];
    $pendidikan = $_POST["pendidikan"];
    $sekolah = $_POST["sekolah"];
    $nilai_raport = $_POST["nilai_raport"];
    $prog1 = $_POST["prog1"];
    $prog2 = $_POST["prog2"];

    // validation formulir 
    if ($name == "") {
        header('Location:formulir.php');
    } 

    if ($numberKTP == "") {
        header("Location:formulir.php");
    }

    if ($tempat_lahir == "") {
        header("Location:formulir.php");
    }

    if ($tanggal_lahir == "") {
        header("Location:formulir.php");
    }

    if ($jenisKelamin == "") {
        header("Location:formulir.php");
    }

    if ($kewarganegaraan == "") {
        header("Location:formulir.php");
    }

    if ($agama == "") {
        header("Location:formulir.php");
    }

    if ($nama_ibu == "") {
        header("Location:formulir.php");
    }

    if ($email == "") {
        header("Location:formulir.php");
    }

    if ($telp == "") {
        header("Location:formulir.php");
    }
    
    if ($alamat == "") {
        header("Location:formulir.php");
    }

    if ($kode_pos == "") {
        header("Location:formulir.php");
    }

    if ($provinsi == "") {
        header("Location:formulir.php");
    }

    if ($kabupaten == "") {
        header("Location:formulir.php");
    }

    if ($kecamatan == "") {
        header("Location:formulir.php");
    }

    if ($pendidikan == "") {
        header("Location:formulir.php");
    }

    if ($sekolah == "") {
        header("Location:formulir.php");
    }

    if ($nilai_raport == "") {
        header("Location:formulir.php");
    }

    if ($prog1 == "") {
        header("Location:formulir.php");
    }

    if ($prog2 == "") {
        header("Location:formulir.php");
    }

    ?>

    <!-- Formulir Validation -->
    <div class="container p-3 my-3 border">
        <h1 class="text-center">Form Validasi Pendaftaran Mahasiswa Baru</h1>

        <div class="alert alert-primary">
            <strong>Data Diri</strong>
        </div>
        <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <label>Nama Lengkap:</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $name;?>" disabled>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Nomor Identitas (NIK):</label>
                    <input type="text" name="nik" class="form-control" value="<?php echo $numberKTP;?>" disabled>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir;?>"
                        disabled>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="date" name="trip-start" class="form-control" value="<?php echo $tanggal_lahir; ?>"
                        disabled>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <input type="text" name="jk" class="form-control" value="<?php echo $jenisKelamin; ?>" disabled>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 15px;">

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kewarganegaraan:</label>
                    <input type="text" name="kewarganegaraan" class="form-control"
                        value="<?php echo $kewarganegaraan; ?>" disabled>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>Agama:</label>
                    <input type="text" name="agama" class="form-control" value="<?php echo $agama; ?>" disabled>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Nama Ibu Kandung:</label>
                    <input type="text" name="nama_ibu" class="form-control" value="<?php echo $nama_ibu;?>" disabled>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email;?>" disabled>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label>No Telp:</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $telp;?>" disabled>
                </div>
            </div>
        </div>
        <div class="alert alert-primary" style="margin-top: 18px;">
            <strong>Data Alamat Asal</strong>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Alamat:</label>
                    <input class="form-control" name="alamat" rows="2" id="alamat" value="<?php echo $alamat ?>"
                        disabled></input>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Kode Pos:</label>
                    <input type="text" name="kode_pos" class="form-control" value="<?php echo $kode_pos;?>" disabled>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 15px;">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Provinsi:</label>
                    <input type="text" name="Provinsi" class="form-control" value="<?php echo $provinsi; ?>" disabled>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kabupaten:</label>
                    <input type="text" name="kabupaten" class="form-control" value="<?php echo $kabupaten ?>" disabled>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kecamatan:</label>
                    <input type="text" name="kecamatan" class="form-control" value="<?php echo $kecamatan; ?>" disabled>
                </div>
            </div>

        </div>
        <div class="alert alert-primary" style="margin-top: 17px;">
            <strong>Data Pendidikan</strong>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Pendidikan Terakhir:</label>
                    <input type="text" name="pendidikan-" class="form-control" value="<?php echo $pendidikan; ?>"
                        disabled>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nama Sekolah:</label>
                    <input type="text" name="sekolah" class="form-control" value="<?php echo $sekolah; ?>" disabled>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Rata-rata Nilai Rapor Kelas 12:</label>
                    <input type="text" name="nilai_raport" class="form-control" value="<?php echo $nilai_raport ?>"
                        disabled>
                </div>
            </div>
        </div>
        <div class="alert alert-primary" style="margin-top: 17px;">
            <strong>Pilihan Program Studi</strong>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Pilih Program Studi 1:</label>
                    <input type="text" name="prog1" class="form-control" value="<?php echo $prog1 ?>" disabled>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Pilih Program Studi 2:</label>
                    <input type="text" name="prog2" class="form-control" value="<?php echo $prog2 ?>" disabled>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-4">
                <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Cetak</button>
                <button type="reset" class="btn btn-secondary">Read</button>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>