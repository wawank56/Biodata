<?php
    include('Database.php');
    $data = new Database();

    if (isset($_POST['submit'])) {
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $asal_sekolah = $_POST['asal_sekolah'];
        $kabupaten = $_POST['kabupaten'];
        $propinsi = $_POST['propinsi'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat_kantor = $_POST['alamat_kantor'];
        $telp_kantor = $_POST['telp_kantor'];
        $alamat_rumah = $_POST['alamat_rumah'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];   
        $tahun_masuk = $_POST['tahun_masuk'];
        $thn_lulus = $_POST['thn_lulus'];
        $fakultas = $_POST['fakultas'];
        $prodi = $_POST['prodi'];
        $ners = $_POST['ners'];
        $organisasi_mahasiswa = $_POST['organisasi_mahasiswa'];
        $sekolah_lagi = $_POST['sekolah_lagi'];
        $lokasi_sekolah = $_POST['lokasi_sekolah'];
        $alasan_sekolah = $_POST['alasan_sekolah'];
        $target_kerja = $_POST['target_kerja'];
        $ipk = $_POST['ipk'];

        $format_date = date_format($tgl_lahir, "Y-m-d");
        
        $sql = "INSERT INTO biodata (nama_lengkap, jenis_kelamin, asal_sekolah, kabupaten, propinsi, tempat_lahir, tgl_lahir, alamat_kantor, telp_kantor, alamat_rumah, no_hp, email, tahun_masuk, thn_lulus, fakultas, prodi, ners, organisasi_mahasiswa, sekolah_lagi, lokasi_sekolah, alasan_sekolah, target_kerja, ipk) 
            VALUES('$nama_lengkap', '$jenis_kelamin', '$asal_sekolah', '$kabupaten', '$propinsi', '$tempat_lahir', '$tgl_lahir', '$alamat_kantor', '$telp_kantor', '$alamat_rumah', '$no_hp', '$email', '$tahun_masuk', '$thn_lulus', '$fakultas', '$prodi', '$ners', '$organisasi_mahasiswa', '$sekolah_lagi', '$lokasi_sekolah', '$alasan_sekolah', '$target_kerja', '$ipk')";
          if ($data->simpanData($sql)) {
            header("location: step2.php?email=$email");
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KUISIONER TRACER STUDY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <form action="index.php" class="horizontal" method="POST">
        <div class="row" style="padding-top: 12px">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pribadi</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Lengkap *</label>
                            <input type="text" name="nama_lengkap" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin *</label>
                            <select name="jenis_kelamin" required class="form-control">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Asal SMA / SMK *</label>
                            <input type="text" name="asal_sekolah" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Kabupaten / Kota *</label>
                            <input type="text" name="kabupaten" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Propinsi *</label>
                            <input type="text" name="propinsi" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir *</label>
                            <input type="text" name="tempat_lahir" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir *</label>
                            <input type="date" name="tgl_lahir" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Kantor</label>
                            <input type="text" name="alamat_kantor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No Telp Kantor</label>
                            <input type="text" name="telp_kantor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Rumah</label>
                            <input type="text" name="alamat_rumah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No HP *</label>
                            <input type="text" name="no_hp" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email *</label>
                            <input type="email" name="email" required class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Pendidikan</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tahun Masuk *</label>
                            <input type="text" name="tahun_masuk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Bulan & Tahun Lulus</label>
                            <input type="text" name="thn_lulus" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Fakultas *</label>
                            <select name="fakultas" required id="fakultas" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Keperawatan">Keperawatan</option>
                                <option value="Hukum">Hukum</option>
                                <option value="Teknik">Teknik</option>
                                <option value="Ilmu Sosial Dan Ilmu Politik">Ilmu Sosial Dan Ilmu Politik</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Sastra">Sastra</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Program Studi *</label>
                            <select name="prodi" required id="prodi" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Keperawatan">Keperawatan</option>
                                <option value="Hukum">Hukum</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Ilmu Politik">Ilmu Politik</option>
                                <option value="Agribisnis">Agribisnis</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Profesi Ners *</label><br>
                            <input type="radio" name="ners" id="ners" value="0"> Tidak <br>
                            <input type="radio" name="ners" id="ners" value="1"> Ya
                        </div>
                        <div class="form-group">
                            <label for="">Apakah Saudara mengikuti Organisasi Kemahasiswaan ketika masih mahasiswa? *</label><br>
                            <input type="radio" name="organisasi_mahasiswa" id="organisasi_mahasiswa" value="0"> Tidak <br>
                            <input type="radio" name="organisasi_mahasiswa" id="organisasi_mahasiswa" value="1"> Ya
                        </div>
                        <div class="form-group">
                            <label for="">Setelah lulus Sarjana apakah saudara bersekolah lagi? *</label><br>
                            <input type="radio" name="sekolah_lagi" id="sekolah_lagi" value="0"> Tidak <br>
                            <input type="radio" name="sekolah_lagi" id="sekolah_lagi" value="1"> Ya
                        </div>
                        <div class="form-group">
                            <label for="">Dimana saudara bersekolah : Masukan sesuai format --> (Nama Universitas/Kota/Program Studi/Jenjang Pendidikan/Tahun Masuk/Tahun Lulus)</label>
                            <input type="text" name="lokasi_sekolah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Apa alasan utama saudara bersekolah lagi?</label>
                            <select name="alasan_sekolah" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Mengisi Kekosongan Menganggur">Mengisi Kekosongan Menganggur</option>
                                <option value="Perlu untuk bekerja">Perlu untuk bekerja</option>
                                <option value="Merasa ilmu yang dimiliki masih kurang">Merasa ilmu yang dimiliki masih kurang</option>
                                <option value="Ada kesempatan">Ada kesempatan</option>
                                <option value="Sebagai Syarat Dalam Pekerjaan">Sebagai Syarat Dalam Pekerjaan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pada saat lulus, dimana saudara ingin bekerja *</label>
                            <select name="target_kerja" class="form-control" required>
                                <option value="">Pilih</option>
                                <option value="Pemerintah (Pusat/Departemen)">Pemerintah (Pusat/Departemen)</option>
                                <option value="Pemerintah (Daerah)">Pemerintah (Daerah)</option>
                                <option value="Pemerintah (BUMN, BHMN)">Pemerintah (BUMN, BHMN)</option>
                                <option value="Swasta (Jasa)">Swasta (Jasa)</option>
                                <option value="Swasta (Manufaktur)">Swasta (Manufaktur)</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">IPK *</label>
                            <input type="text" name="ipk" required class="form-control">
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary btn-md">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
</body>
</html>