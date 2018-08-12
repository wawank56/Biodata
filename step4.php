<?php
    include('Database.php');
    $data = new Database();

    if (isset($_POST['submit'])) {
        $mampu_bersaing = $_POST['mampu_bersaing'];
        $pengetahuan_umum = $_POST['pengetahuan_umum'];
        $bhs_inggris = $_POST['bhs_inggris'];
        $komputer = $_POST['komputer'];
        $penelitian = $_POST['penelitian'];
        $kerjasama_tim = $_POST['kerjasama_tim'];
        $lisan = $_POST['lisan'];
        $tertulis = $_POST['tertulis'];
        $pemberdayaan = $_POST['pemberdayaan'];
        $teoritis = $_POST['teoritis'];
        $praktis = $_POST['praktis'];
        $organisasi = $_POST['organisasi'];
        $leadership = $_POST['leadership'];
        $p_pengetahuan_umum = $_POST['p_pengetahuan_umum'];
        $p_bhs_inggris  = $_POST['p_bhs_inggris'];
        $p_komputer= $_POST['p_komputer'];
        $p_penelitian= $_POST['p_penelitian'];
        $p_kerjasama_tim= $_POST['p_kerjasama_tim'];
        $p_lisan= $_POST['p_lisan'];
        $p_tertulis= $_POST['p_tertulis'];
        $p_masyarakat= $_POST['p_masyarakat'];
        $p_teoritis= $_POST['p_teoritis'];
        $p_praktis= $_POST['p_praktis'];
        $p_organisasi= $_POST['p_organisasi'];
        $p_leadership= $_POST['p_leadership'];
        
        $sql = "UPDATE biodata (mampu_bersaing, pengetahuan_umum, bhs_inggris, komputer, penelitian, kerjasama_tim, lisan, tertulis, pemberdayaan, teoritis, praktis, organisasi, leadership, p_pengetahuan_umum, p_bhs_inggris, p_komputer, p_penelitian, p_kerjasama_tim, p_lisan, p_tertulis, p_masyarakat, p_teoritis, p_praktis, p_organisasi, p_leadership) 
            VALUES('$mampu_bersaing', '$pengetahuan_umum', '$bhs_inggris', '$komputer', '$penelitian', '$kerjasama_tim', '$lisan' '$tertulis', '$pemberdayaan', '$teoritis', '$praktis', '$organisasi', '$leadership', '$p_pengetahuan_umum', '$p_bhs_inggris', '$p_komputer', '$p_penelitian', '$p_kerjasama_tim', '$p_lisan', '$p_tertulis', '$p_masyarakat', '$p_teoritis', '$p_praktis', '$p_organisasi', '$p_leadership')";
       
       if ($data->simpanData($sql)) {
            header("location: index.php");
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
    <form action="step4.php" class="horizontal" method="GET">
        <div class="row" style="padding-top: 12px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Indikator kompetensi dan daya saing </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Saat baru lulus, sejauh mana Saudara merasa mampu bersaing dengan lulusan perguruan tinggi lain? *</label> <br>
                            <label for="">Sangat Tidak Mampu</label> &nbsp; &nbsp;
                            <input required type="radio" name="mampu_bersaing" id="mampu_bersaing" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="mampu_bersaing" id="mampu_bersaing" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="mampu_bersaing" id="mampu_bersaing" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="mampu_bersaing" id="mampu_bersaing" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Mampu</label> <br>
                        </div>
                     </div>
                        <div class="card-header">
                        <h3 class="card-title">Saat baru lulus, menurut penilaian Saudara, sejauh mana Saudara menguasai kompetensi berikut?</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Pengetahuan umum *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="pengetahuan_umum" id="pengetahuan_umum" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengetahuan_umum" id="pengetahuan_umum" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengetahuan_umum" id="pengetahuan_umum" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengetahuan_umum" id="pengetahuan_umum" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Bahasa Inggris *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="bhs_inggris" id="bhs_inggris" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="bhs_inggris" id="bhs_inggris" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="bhs_inggris" id="bhs_inggris" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="bhs_inggris" id="bhs_inggris" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Komputer *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="komputer" id="komputer" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="komputer" id="komputer" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="komputer" id="komputer" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="komputer" id="komputer" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Penelitian*</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="penelitian" id="penelitian" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="penelitian" id="penelitian" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="penelitian" id="penelitian" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="penelitian" id="penelitian" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Kerja Sama Tim *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="kerjasama_tim" id="kerjasama_tim" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="kerjasama_tim" id="kerjasama_tim" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="kerjasama_tim" id="kerjasama_tim" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="kerjasama_tim" id="kerjasama_tim" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Keterampilan komunikasi lisan  *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="lisan" id="lisan" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="lisan" id="lisan" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="lisan" id="lisan" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="lisan" id="lisan" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Keterampilan komunikasi tertulis *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="tertulis" id="tertulis" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="tertulis" id="tertulis" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="tertulis" id="tertulis" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="tertulis" id="tertulis" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Proses pemberdayaan masyarakat *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="pemberdayaan" id="pemberdayaan" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pemberdayaan" id="pemberdayaan" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pemberdayaan" id="pemberdayaan" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pemberdayaan" id="pemberdayaan" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengetahuan teoritis spesifik Program Studi *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="teoritis" id="teoritis" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="teoritis" id="teoritis" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="teoritis" id="teoritis" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="teoritis" id="teoritis" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengetahuan praktis spesifik Program Studi *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="praktis" id="praktis" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="praktis" id="praktis" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="praktis" id="praktis" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="praktis" id="praktis" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Manajemen organisasi *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="organisasi" id="organisasi" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="organisasi" id="organisasi" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="organisasi" id="organisasi" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="organisasi" id="organisasi" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Kepemimpinan/leadership *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="leadership" id="leadership" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="leadership" id="leadership" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="leadership" id="leadership" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="leadership" id="leadership" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                    </div>

                    <div class="card-header">
                        <h3 class="card-title">Dalam pekerjaan, menurut penilaian Saudara sejauh mana kompetensi berikut diperlukan?</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Pengetahuan umum *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_pengetahuan_umum" id="p_pengetahuan_umum" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_pengetahuan_umum" id="p_pengetahuan_umum" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_pengetahuan_umum" id="p_pengetahuan_umum" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_pengetahuan_umum" id="p_pengetahuan_umum" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Bahasa Inggris *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_bhs_inggris" id="p_bhs_inggris" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_bhs_inggris" id="p_bhs_inggris" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_bhs_inggris" id="p_bhs_inggris" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_bhs_inggris" id="p_bhs_inggris" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Komputer *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_komputer" id="p_komputer" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_komputer" id="p_komputer" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_komputer" id="p_komputer" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_komputer" id="p_komputer" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Penelitian*</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_penelitian" id="p_penelitian" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_penelitian" id="p_penelitian" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_penelitian" id="p_penelitian" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_penelitian" id="p_penelitian" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Kerja Sama Tim *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_kerjasama_tim" id="p_kerjasama_tim" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_kerjasama_tim" id="p_kerjasama_tim" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_kerjasama_tim" id="p_kerjasama_tim" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_kerjasama_tim" id="p_kerjasama_tim" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Keterampilan komunikasi lisan  *</label> <br>
                            <label for="">Tidak Menguasai</label>
                            <input required type="radio" name="p_lisan" id="p_lisan" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_lisan" id="p_lisan" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_lisan" id="p_lisan" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_lisan" id="p_lisan" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Keterampilan komunikasi tertulis *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_tertulis" id="p_tertulis" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_tertulis" id="p_tertulis" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_tertulis" id="p_tertulis" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_tertulis" id="p_tertulis" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Proses pemberdayaan masyarakat *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_masyarakat" id="p_masyarakat" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_masyarakat" id="p_masyarakat" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_masyarakat" id="p_masyarakat" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_masyarakat" id="p_masyarakat" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengetahuan teoritis spesifik Program Studi *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_teoritis" id="p_teoritis" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_teoritis" id="p_teoritis" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_teoritis" id="p_teoritis" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_teoritis" id="p_teoritis" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengetahuan praktis spesifik Program Studi *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_praktis" id="p_praktis" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_praktis" id="p_praktis" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_praktis" id="p_praktis" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_praktis" id="p_praktis" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Manajemen organisasi *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_organisasi" id="p_organisasi" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_organisasi" id="p_organisasi" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_organisasi" id="p_organisasi" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_organisasi" id="p_organisasi" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Kepemimpinan/leadership *</label> <br>
                            <label for="">Tidak Menguasai</label> &nbsp; &nbsp;
                            <input required type="radio" name="p_leadership" id="p_leadership" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_leadership" id="p_leadership" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_leadership" id="p_leadership" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="p_leadership" id="p_leadership" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Menguasai</label> <br><br>
                        </div>
                    </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary btn-md">Next</button>
                        </div>    
                </form>
        </div>
</body>
</html>