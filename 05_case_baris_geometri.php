<?php
/**
 * baris geometri dengan kelipatan perkalian 3, sampai baris tertentu
 * output:
 * 3
 * 9
 * 27
 * ...
 * hasil: 39
 */

/**
 * sebelum masuk ke study case jelasin dulu
 * operators
 * comparison
 */

$jumlah_baris = 20;
$sum = 0;
for ($i=1; $i<=$jumlah_baris; $i++) {
  echo ($i * 3) . '<br>';
  $sum += $i * 3;
}
echo $sum;
?>