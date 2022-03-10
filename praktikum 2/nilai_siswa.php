<!DOCTYPE html>

<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .container {
    margin-top: 50px;
    margin-bottom: 50px;
    width: 500px;
    padding: 10px 20px 10px 20px;
    }
    h2 {
        text-align: center;
        padding-bottom: 20px;
    }

</style>
    <body>

        <div class="container">
            <h2>FORM NILAI SISWA</h2>
            <form action="form_nilai_POST.php" method="POST" class="form-horizontal">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="text" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="" name="matkul" class="custom-select">
                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                    <option value="BDI">Basis Data 1</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="" name="nilai_uts" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="" name="nilai_uas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="" name="nilai_tugas" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary" value="simpan">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>
<?php
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    $nilai = $nilai_uts * 30 / 100 + $nilai_uas * 35 / 100 + $nilai_tugas * 35 / 100;

    $predikat;

    if ($nilai >= 85){
        $predikat = "A";
    }elseif ($nilai >= 70) {
        $predikat = "B";
    }elseif ($nilai >= 56) {
        $predikat = "C";
    }elseif ($nilai >= 36) {
        $predikat = "D";
    }elseif ($nilai >= 0) {
        $predikat = "E";
    }else {
        $predikat = "I";
    }

        echo 'Proses : '.$proses;
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nilai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
        echo '<br/>Predikat : '.$predikat;
?>