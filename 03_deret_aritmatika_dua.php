<?php
/**
 * membuat deret aritmatika dengan penjumlahan selisih setiap deretnya 2, beserta total hasilnya disetiap deret
 * outputnya
 * 1 = 1
 * 1 + 3 = 4
 * 1 + 3 + 5 = 9
 * ...
 * 1 + 3 + 5 + 7 + 9 + 11 + 13 + 15 + 17 + 19 + 21 + 23 + 25 + 27 + 29 + 31 + 33 + 35 + 37 + 39 = 400
 */

// membuat jumlah baris sebanyak 20 baris
// $input_jumlah_baris = 20;
// for ($y=1; $y<=$input_jumlah_baris; $y++) {
//   echo $y;
//   echo '<br>';
// }

// membuat jumlah deret sebanyak 20 deret
// $input_jumlah_baris = 20;
// for ($x=1; $x<=$input_jumlah_baris; $x++) {
//   echo $x . ' ';
// }

// contoh concatenation adalah menggunakan tanda titik
// $hasil = 1;
// echo 1 . ' = ' . $hasil;

// membuat baris dan deret sebanyak 20 baris dan deret
// $input_jumlah_baris = 20;
// for ($y=1; $y<=$input_jumlah_baris; $y++) {
//   for ($x=1; $x<=$y; $x++) {
//     echo $x . ' ';
//   }
//   echo '<br>';
// }

// arithmatic operator
// $a = 3;
// $b = $a * 2;
// echo $b;

// assignment operator
// $a = 2;
// $b = 3;
// $b *= $a;
// echo $b;

// membuat baris dan deret dengan penjumlahan selisih setiap deretnya 2
// $input_jumlah_baris = 20;
// for ($y=1; $y<=$input_jumlah_baris; $y++) {
//   for ($x=1; $x<=$y*2; $x+=2) {
//     echo $x . ' + ';
//   }
//   echo '<br>';
// }

// supaya di akhir simbolnya jadi "=" sama dengan
// $input_jumlah_baris = 20;
// for ($y=1; $y<=$input_jumlah_baris; $y++) {
//   for ($x=1; $x<=$y*2; $x+=2) {
//     echo $x;
//     if ($x+2 >= $y*2) {
//       echo ' = ';
//     } else {
//       echo ' + ';
//     }
//   }
//   echo '<br>';
// }

// supaya diakhir deret ada total hasilnya
$input_jumlah_baris = 20;
for ($y=1; $y<=$input_jumlah_baris; $y++) {
  $sum_deret = 0;
  for ($x=1; $x<=$y*2; $x+=2) {
    echo $x;
    if ($x+2 >= $y*2) {
      echo ' = ';
    } else {
      echo ' + ';
    }
    $sum_deret += $x;
  }
  echo $sum_deret . '<br>';
}

?>
