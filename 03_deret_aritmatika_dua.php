<?php
/**
 * membuat deret aritmatika dengan penjumlahan kelipatan 2, beserta total hasilnya disetiap deret
 * outputnya
 * 1 = 1
 * 1 + 3 = 4
 * 1 + 3 + 5 = 9
 * ...
 * 1 + 3 + 5 + 7 + 9 + 11 + 13 + 15 + 17 + 19 + 21 + 23 + 25 + 27 + 29 + 31 + 33 + 35 + 37 + 39 = 400
 */

// tidak ada barisnya
// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   echo $i;
// }

// ada barisnya
// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   echo $i . '<br>';
// }

// tambah for lagi supaya bisa berderet, dengan jumlah kelipatan 2
// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   for ($x=1; $x<=$i*2; $x += 2) {
//     echo $x . ' + ';
//   }
//   echo '<br>';
// }

// supaya di akhir simbolnya jadi "=" sama dengan
// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   for ($x=1; $x<=$i*2; $x += 2) {
//     echo $x;

//     if ($x+2 >= $i*2) {
//       echo ' = ';
//     } else {
//       echo ' + ';
//     }
//   }
//   echo '<br>';
// }

// supaya diakhir deret ada total hasilnya
$input_jumlah_baris = 20;
for ($i=1; $i<=$input_jumlah_baris; $i++) {
  $sum_deret = 0;
  for ($x=1; $x<=$i*2; $x += 2) {
    echo $x;

    if ($x+2 >= $i*2) {
      echo ' = ';
    } else {
      echo ' + ';
    }

    $sum_deret += $x;
  }
  echo $sum_deret . '<br>';
}

?>