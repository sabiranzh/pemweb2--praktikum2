<?php
//tangkap input form
$nama = $_GET['nama'];
$matkul =$_GET['matkul'];
$uts =$_GET['uts'];
$uas =$_GET['uas'];
$tugas =$_GET['tugas'];

//nilai total (30% uts + 35% uas + 35% tugas)
$nilai_total = (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);

if($nilai_total > 55){
    $hasil = 'LULUS';
} else {
    $hasil = 'TIDAK LULUS';
}

 // Menentukan grade berdasarkan nilai total
 switch (true) {
    case ($nilai_total <= 35):
        $grade = 'E';
        $predikat = 'Sangat Kurang';
        break;
    case ($nilai_total <= 55):
        $grade = 'D';
        $predikat = 'Kurang';
        break;
    case ($nilai_total <= 69):
        $grade = 'C';
        $predikat = 'Cukup';
        break;
    case ($nilai_total <= 84):
        $grade = 'B';
        $predikat = 'Memuaskan';
        break;
    case ($nilai_total <= 100):
        $grade = 'A';
        $predikat = 'Sangat Memuaskan';
        break;
    default:
        $grade = 'I';
        $predikat = 'Tidak Ada';
        break;
}




//tampilkan hasil input
echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matkul";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai UAS: $uas";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Hasil: $hasil";
echo "<br/>Grade : $grade ($predikat)";