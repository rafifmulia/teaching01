<?php
/**
 * deret geometri dengan kelipatan 3, sampai baris tertentu
 * output:
 * 1 = 1
 * 1 + 3 = 4
 * 1 + 3 + 9 = 13
 * 1 + 3 + 9 + 27 = 40
 * ...
 * penjelasan
 * 1
 * dari 1 ke 3 karena 1 * 3
 * dari 3 ke 9 karena 3 * 3
 * dari 9 ke 27 karena 9 * 3
 */

/**
 * sebelum masuk ke study case jelasin dulu
 * operators
 * comparison
 */

$jumlah_baris = 20;
for ($i=1; $i<=$jumlah_baris; $i++) {
  $sum_deret = 0;
  for ($x=1;$x<=$i; $x++) {
    echo (3**$x);
    if ($x >= $i) {
      echo ' = ';
    } else {
      echo ' + ';
    }
    $sum_deret += 3**$x;
  }
  echo $sum_deret.'<br><br>';
}
?>