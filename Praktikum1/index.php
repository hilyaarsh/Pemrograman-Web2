<?php
// Ini komentar yaaaa

/* ini sebuah komentar 
ini sebuah komentar 
ini sebuah komentar 
*/

# ini sebuah komentar jugaa

// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Hilya Rasiha <br>");
// var_dump("STT Nurul Fikri");
// var_dump(123);


//Membuat variabel user
$nama = "Hilya Rasiha";
$umur = 18;
$berat = 62.5;
$mahasiswa = true;

// echo "Hallo, Nama saya $nama ";  // dikasih spasi di akhir biar nanti ada spasi diantara nama dan umur
// echo "Umurku $umur th ";
// echo "dan memiliki berat badan $berat kg";


//Membuat variabel sistem

// echo "Dokumen root " . $_SERVER['DOCUMENT_ROOT'];  // titik untuk menambahkan kalimat diluar string
// echo "<br>";
// echo"Nama file " . $_SERVER['PHP_SELF'];

//Membuat variabel konstanta
define('PHI', 3.14);
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

// echo "<br> Luas lingkaran dengan jari-jari $jari = $luas cm";
// echo "<br> Keliling lingkaran dengan jari-jari $jari = $keliling cm";

// Membuat array
$programs = ["Php", "Javascript", "HTML", "CSS"];
// echo $programs[0];
echo "jumlah data sebanyak" . count($programs);


?>