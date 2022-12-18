<?php
/**
 * misalkan ada kasus melakukan penjumlahan selalu ditambah 2 sampai barisnya mencapai ... baris
 * baris 1 + 2 = 3;
 * baris 2 + 2 = 4;
 * baris 3 + 2 = 5;
 * yang harus dilakukan apa ?
 * 1. inputan jumlah baris = ...
 * 2. lakukan perulangan sampai jumlah baris
 * 3. setiap perulangan ditambah 2, kemudian tampilkan
 * 4. selesai
 */

// tidak membuat baris baru
// $input_jumlah_baris = 20;
// for ($counter=1; $counter<=$input_jumlah_baris; $counter++) {
//   echo $counter . '<br>';
// }

$input_jumlah_baris = 20;
for ($baris=1; $baris<=$input_jumlah_baris; $baris++) {
  $hasil = $baris + 2;
  echo $baris. ' + 2 = ' . $hasil . '<br>';
}

// tambahkan tag <br> untuk membuat baris baru
// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   echo $i . '<br>';
// }

// tambahkan nilai 2
// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   echo $i + 2 . '<br>';
// }

// kalau pengen ada total hasilnya gimana
// $input_jumlah_baris = 20;
// $hasil = 0;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   echo $i + 2 . '<br>';
//   $hasil = $hasil + $i + 2;
// }
// echo '<h3>'.$hasil.'</h3>';
?>