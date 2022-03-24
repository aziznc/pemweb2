<table border="1" width=300px class="table">
       
<td>
<style>

        td {
            background-color: pink;
        }

       
    </style>     
<?php
    require_once 'libfungsi.php';
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai = $nilai_uts * 30 / 100 + $nilai_uas * 35 / 100 + $nilai_tugas * 35 / 100;
    $nilai_ujian = kelulusan($nilai);
    $predikat = grade($nilai);

    
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas atau Praktikum : '.$nilai_tugas;

    echo '<br/>Nilai Akhir: '.$nilai;
    echo '<br/> Status:' .$nilai_ujian;
    echo '<br/> Predikat:' .$predikat;

?>
</td>
</table>