<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Pendaftaran Mahasiswa</title>
</head>

<body>

    <div class="container p-3 my-3 border">
        <h1 class="text-center">Form Pendaftaran Mahasiswa Baru</h1>

        <form action="formulirValidation.php" method="POST">
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 15px;">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="trip-start" class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 15px;">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan">
                            <option>Pilih</option>
                            <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>
                            <option value="Warga Negara Asing">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung">
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 15px;">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
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
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 15px;">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi" id="provinsi">
                            <option>Pilih</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten" id="kabupaten">
                            <option>Pilih</option>
                            <option value="Banyuwangi">Banyuwangi</option>
                            <option value="Malang">Malang</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Jember">Jember</option>
                            <option value="Madiun">Madiun</option>
                            <option value="Lainnya">Lainnya</option>
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <option>Pilih</option>
                            <option value="Banyuwangi">Banyuwangi</option>
                            <option value="Genteng">Genteng</option>
                            <option value="Kalipuro">Kalipuro</option>
                            <option value="Wongsorjo">Wongsorjo</option>
                            <option value="Rogojampi">Rogojampi</option>
                            <option value="Lainnya">Lainnya</option>
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="alert alert-primary" style="margin-top: 17px;">
                    <strong>Data Pendidikan</strong>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pendidikan Terakhir:</label>
                            <select class="form-control" name="pendidikan">
                                <option>Pilih</option>
                                <option value="SMA-IPA">SMA - IPA</option>
                                <option value="SMA-IPS">SMA - IPS</option>
                                <option value="SMK-IPA">SMK - IPA</option>
                                <option value="SMK-IPS">SMK - IPS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Nama Sekolah:</label>
                            <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Rata-rata Nilai Rapor Kelas 12:</label>
                            <input type="text" name="nilai_raport" class="form-control"
                                placeholder="Masukan Rata-rata nilai raport">
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
                            <select class="form-control" name="prog1">
                                <option>Pilih</option>
                                <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                                <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                                <option value="D3 - Teknik Informatika">D3 - Manajemen Informatika</option>
                                <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                                <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pilih Program Studi 2:</label>
                            <select class="form-control" name="prog2">
                                <option>Pilih</option>
                                <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                                <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                                <option value="D3 - Teknik Informatika">D3 - Manajemen Informatika</option>
                                <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                                <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-4">
                        <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>

                </div>
        </form>
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