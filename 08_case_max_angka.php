<?php
/**
 * STUDY CASE tampilkan bilangan genap menggunakan fungsi rekursif, dengan maksimal angka 100
 * OUTPUT
 * 2
 * 4
 * 6
 * 8
 * dst..
 */

$max_angka = 20;

function rekursif($start = 0, $penambah = 2, $max = 100) {
  $genap = $start + $penambah;
  if ($start >= $max) return true;
  if (($start % 2) === 0) {
    echo $genap.'<br>';
  }
  rekursif($genap, $penambah, $max);
}
rekursif(0, 2, $max_angka);
?>