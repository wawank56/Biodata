<?php
    include('Database.php');
    $data = new Database();

    if (isset($_POST['submit'])) {
        $pengalaman_kelas = $_POST['pengalaman_kelas'];
        $pengalaman_lab = $_POST['pengalaman_lab'];
        $pengalaman_masyarakat = $_POST['pengalaman_masyarakat'];
        $pengalaman_magang = $_POST['pengalaman_magang'];
        $pengalaman_organisasi = $_POST['pengalaman_organisasi'];
        $pengalaman_kampus = $_POST['pengalaman_kampus'];
        $belajar_mandiri = $_POST['belajar_mandiri'];

        
        $sql = "INSERT INTO biodata (pengalaman_kelas, pengalaman_lab, pengalaman_masyarakat, pengalaman_magang, pengalaman_organisasi, pengalaman_kampus, belajar_mandiri) 
            VALUES('$pengalaman_kelas', '$pengalaman_lab', '$pengalaman_masyarakat', '$pengalaman_magang', '$pengalaman_organisasi', '$pengalaman_kampus', '$belajar_mandiri')";
       echo "<pre>";
       print_r($sql);
       die();
       if ($data->simpanData($sql)) {
        header("location: step4.php?email=$email");
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
    <form action="step3.php" class="horizontal" method="GET">
        <div class="row" style="padding-top: 12px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pengalaman pembelajaran dan masukan bagi pendidikan di UNPI</h3>
                    </div>
                    <div class="card-header">
                        <h3 class="card-title">Saat belajar di UNPI, menurut Saudara seberapa penting pengalaman pembelajaran berikut ini memberikan kontribusi dalam dunia kerja?</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Pengalaman belajar di dalam kelas *</label> <br>
                            <label for="">Tidak Penting</label> &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_kelas" id="pengalaman_kelas" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_kelas" id="pengalaman_kelas" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_kelas" id="pengalaman_kelas" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_kelas" id="pengalaman_kelas" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Penting</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengalaman belajar di laboratorium *</label> <br>
                            <label for="">Tidak Penting</label> &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_lab" id="pengalaman_lab" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_lab" id="pengalaman_lab" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_lab" id="pengalaman_lab" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_lab" id="pengalaman_lab" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Penting</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengalaman belajar di masyarakat *</label> <br>
                            <label for="">Tidak Penting</label> &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_masyarakat" id="pengalaman_masyarakat" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_masyarakat" id="pengalaman_masyarakat" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_masyarakat" id="pengalaman_masyarakat" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_masyarakat" id="pengalaman_masyarakat" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Penting</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengalaman magang di perusahaan/instansi *</label> <br>
                            <label for="">Tidak Penting</label> &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_magang" id="pengalaman_magang" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_magang" id="pengalaman_magang" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_magang" id="pengalaman_magang" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_magang" id="pengalaman_magang" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Penting</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengalaman belajar dalam organisasi kemahasiswaan *</label> <br>
                            <label for="">Tidak Penting</label> &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_organisasi" id="pengalaman_organisasi" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_organisasi" id="pengalaman_organisasi" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_organisasi" id="pengalaman_organisasi" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_organisasi" id="pengalaman_organisasi" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Penting</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengalaman belajar dalam pergaulan kampus *</label> <br>
                            <label for="">Tidak Penting</label> &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_kampus" id="pengalaman_kampus" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_kampus" id="pengalaman_kampus" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_kampus" id="pengalaman_kampus" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="pengalaman_kampus" id="pengalaman_kampus" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Penting</label> <br><br>
                        </div>
                        <div class="form-group">
                            <label for="">Pengalaman belajar mandiri *</label><br>
                            <label for="">Tidak Penting</label> &nbsp; &nbsp;
                            <input required type="radio" name="belajar_mandiri" id="belajar_mandiri" value="1"> 1 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="belajar_mandiri" id="belajar_mandiri" value="2"> 2 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="belajar_mandiri" id="belajar_mandiri" value="3"> 3 &nbsp; &nbsp; &nbsp;
                            <input required type="radio" name="belajar_mandiri" id="belajar_mandiri" value="4"> 4 &nbsp; &nbsp; 
                            <label for="">Sangat Penting</label> <br>
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary btn-md">Next</button>
                        </div>    
            </form>
    </div>
</body>
</html>