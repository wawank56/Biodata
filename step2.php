<?php
    include('Database.php');
    $data = new Database();

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $tempat_kerja = $_POST['tempat_kerja'];
        $jenis_instansi = $_POST['jenis_instansi'];
        $jabatan = $_POST['jabatan'];
        $thn_kerja = $_POST['thn_kerja'];
        $proses_kerja = $_POST['proses_kerja'];
        $referensi_kerja = $_POST['referensi_kerja'];
        $harapan_belajar = $_POST['harapan_belajar'];
        $rate_kerja = $_POST['rate_kerja'];
        $pertimbangan_kerja = $_POST['pertimbangan_kerja'];
        $pendapatan = $_POST['pendapatan'];
        $hubungan_kerja = $_POST['hubungan_kerja'];
        $kebutuhan_kerja = $_POST['kebutuhan_kerja'];
        $ganti_pekerjaan = $_POST['ganti_pekerjaan'];
        $ingin_kerja = $_POST['ingin_kerja'];
        $relevan_kerja = $_POST['relevan_kerja'];
        $saran= $_POST['saran'];

        $format_date = date_format($thn_kerja, "Y-m");
        
        $sql = "UPDATE biodata SET tempat_kerja='$tempat_kerja', jenis_instansi='$jenis_instansi', jabatan='$jabatan', thn_kerja='$thn_kerja', proses_kerja='$proses_kerja', referensi_kerja='$referensi_kerja', harapan_belajar='$harapan_belajar', rate_kerja='$rate_kerja', pertimbangan_kerja='$pertimbangan_kerja', pendapatan='$pendapatan', hubungan_kerja='$hubungan_kerja', kebutuhan_kerja='$hubungan_kerja, ganti_pekerjaan='$ganti_pekerjaan', ingin_kerja='$ingin_kerja, relevan_kerja='$relevan_kerja', saran='$saran' WHERE id=$id"; 
        if ($data->simpanData($sql)) {
            header("location: step3.php?email=$email");
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
    <form action="step2.php" class="horizontal" method="GET">
        <div class="row" style="padding-top: 12px">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Pekerjaan</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Tempat Kerja *</label>
                            <input type="text" name="tempat_kerja"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Instansi/Bidang Usaha/Industri *</label>
                            <select name="jenis_instansi"  class="form-control">
                                <option value="">Pilih</option>
                                <option value="Pemerintah (Pusat/Departement)">Pemerintah (Pusat/Departement)</option>
                                <option value="Pemerintah (BUMN/BHMN)">Pemerintah (BUMN/BHMN)</option>
                                <option value="Swasta (Jasa)">Swasta (Jasa)</option>
                                <option value="Swasta (Manufaktu)">Swasta (Manufaktur)</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan / Posisi dalam pekerjaan *</label>
                            <select name="jabatan"  class="form-control">
                                <option value="">Pilih</option>
                                <option value="Aktif (Mencari Sendiri)">Aktif (Mencari Sendiri)</option>
                                <option value="Pasif (Ditawari Pekerjaan)">Pasif (Ditawari Pekerjaan)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Bulan dan Tahun mulai bekerja *</label>
                            <input type="date" name="thn_kerja"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Bagaimana proses saudara mendapatkan pekerjaan ini *</label> <br>
                            <input type="radio" name="proses_kerja" id="proses_kerja" value="Iklan"> Iklan <br>
                            <input type="radio" name="proses_kerja" id="proses_kerja" value="Internet"> Internet <br>
                            <input type="radio" name="proses_kerja" id="proses_kerja" value="Pengumuman di Kampus"> Pengumuman di Kampus <br>
                            <input type="radio" name="proses_kerja" id="proses_kerja" value="Koneksi (Teman, Dosen, Saudara / Keluarga, dll)"> Koneksi (Teman, Dosen, Saudara / Keluarga, dll) <br>
                            <input type="radio" name="proses_kerja" id="proses_kerja" value="Info lowongan kemahasiswaan (Web UNPI)"> Info lowongan kemahasiswaan (Web UNPI) <br>
                            <input type="radio" name="proses_kerja" id="proses_kerja" value="Lainnya"> Lainnya 
                        </div>
                        <div class="form-group">
                            <label for="">Sejauh mana pekerjaan Saudara yang terakhir/sekarang sesuai dengan harapan ketika pertama kali belajar di UNPI? *</label>
                            <select name="referensi_kerja"  class="form-control">
                                <option value="">Pilih</option>
                                <option value="Sangat sesuai dengan harapan">Sangat sesuai dengan harapan</option>
                                <option value="Sesuai dengan harapan">Sesuai dengan harapan</option>
                                <option value="Kurang sesuai harapan">Kurang sesuai harapan</option>
                                <option value="Tidak sesuai harapan">Tidak sesuai harapan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Apakah Saudara puas dengan pekerjaan Saudara yang terakhir/sekarang? *</label>
                            <select name="harapan_belajar"  class="form-control">
                                <option value="">Pilih</option>
                                <option value="Sangat Puas">Sangat Puas</option>
                                <option value="Puas">Puas</option>
                                <option value="Kurang Puas">Kurang Puas</option>
                                <option value="Tidak Puas">Tidak Puas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Apakah Saudara puas dengan pekerjaan Saudara yang terakhir/sekarang? *</label>
                            <select name="rate_kerja"  class="form-control">
                                <option value="">Pilih</option>
                                <option value="Sangat sesuai dengan harapan">Sangat sesuai dengan harapan</option>
                                <option value="Sesuai dengan harapan">Sesuai dengan harapan</option>
                                <option value="Kurang sesuai harapan">Kurang sesuai harapan</option>
                                <option value="Tidak sesuai harapan">Tidak sesuai harapan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Secara umum, apa pertimbangan utama Saudara dalam memilih pekerjaan yang terakhir/sekarang? </label>
                            <select name="pertimbangan_kerja"  class="form-control">
                                <option value="">Pilih</option>
                                <option value="Gaji Memadai">Gaji Memadai</option>
                                <option value="Sesuai Bidang Keilmuan">Sesuai Bidang Keilmuan</option>
                                <option value="Mendapatkan Pengalaman">Mendapatkan Pengalaman</option>
                                <option value="Mendapatkan Ilmu Pengetahuan">Mendapatkan Ilmu Pengetahuan</option>
                                <option value="Mendapatkan Keterampilan">Mendapatkan Keterampilan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Berapa rata-rata pendapatan (take home pay = seluruh pendapatan per bulan termasuk bonus, insentif, dsb.) Saudara pada pekerjaan terakhir/sekarang? </label>
                            <select name="pendapatan"  class="form-control">
                                <option value="">Pilih</option>
                                <option value="<Rp. 1.000.000"> < Rp. 1.00.000</option>
                                <option value=">Rp. 1.000.000-Rp. 3.000.000"> >Rp. 1.00.000-Rp. 3.000.000</option>
                                <option value=">Rp. 3.000.000-Rp. 5.000.000"> >Rp. 3.00.000-Rp. 5.000.000</option>
                                <option value=">Rp. 5.000.000-Rp. 7.500.000"> >Rp. 5.00.000-Rp. 7.500.000</option>
                                <option value=">Rp. 7.500.000-Rp. 10.000.000"> >Rp. 7.500.000-Rp. 10.000.000</option>
                                <option value=">Rp. 10.000.000-Rp. 12.500.000"> >Rp. 10.000.000-Rp. 12.500.000</option>
                                <option value=">Rp. 12.500.000-Rp. 15.000.000"> Rp. 12.500.000-Rp. 15.000.000</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Apakah pekerjaan Saudara ini berhubungan dengan bidang ilmu yang Saudara pelajari? *</label>
                            <select name="hubungan_kerja"  class="form-control">
                            <option value="">Pilih</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Menurut Saudara, bagaimana kebutuhan institusi tempat Saudara bekerja terhadap lulusan dari Program Studi / jurusan Saudara *</label>
                            <select name="kebutuhan_kerja"  class="form-control">
                            <option value="">Pilih</option>
                            <option value="Sangat Tinggi">Sangat Tinggi</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Rendah">Rendah</option>
                            <option value="Sangat Rendah">Sangat Rendah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Sudah berapa kali Saudara berganti pekerjaan? *</label>
                            <select name="ganti_pekerjaan"  class="form-control">
                            <option value="">Pilih</option>
                            <option value="1 Kali">1 Kali</option>
                            <option value="2 Kali">2 Kali</option>
                            <option value="3 Kali">3 Kali</option>
                            <option value="Lebih dari 3 Kali">Lebih dari 3 Kali</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Apakah Saudara masih ingin berpindah kerja? *</label>
                            <select name="ingin_kerja"  class="form-control">
                            <option value="">Pilih</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Relevansi Pendidikan dengan Pekerjaan</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Apakah pendidikan yang Saudara dapat di UNPI relevan dengan pekerjaan Saudara? *</label>
                            <input type="radio" name="relevan_kerja" id="relevan_kerja" value="Ya"> Ya <br>
                            <input type="radio" name="relevan_kerja" id="relevan_kerja" value="Tidak"> Tidak <br>
                        </div>
                        <div class="form-group">
                            <label for="">Dari pengalaman Saudara bekerja, apa saran praktis Saudara untuk pendidikan di UNPI dalam rangka meningkatkan kesesuaian antara pendidikan dengan lapangan pekerjaan</label>
                            <input type="text" name="saran" class="form-control">
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