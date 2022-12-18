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

// membuat baris
// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   echo $i;
//   echo '<br><br>';
// }

// membuat deret kesamping
// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   for ($a=1; $a<=$i; $a++) {
//     echo $a . ' ';
//   }
//   echo '<br><br>';
// }

$input_jumlah_baris = 20;
for ($i=1; $i<=$input_jumlah_baris; $i++) {
  for ($a=1; $a<=2; $a++) {
    echo $a . ' ';
  }
  echo '<br><br>';
}

// $input_jumlah_baris = 20;
// for ($i=1; $i<=$input_jumlah_baris; $i++) {
//   for ($x=1; $x<=$i*2; $x+=2) {
//     echo $x . ' + ';
//   }
//   echo '<br><br>';
// }
?>