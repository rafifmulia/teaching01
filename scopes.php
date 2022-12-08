<?php
function tambah($a, $b) {
  echo $a + $b;
  $c = 3;
}
// tambah(1, 2); // coba jalankan fungsi ini
// echo $a; // undefined variable $a
// echo $c; // undefined variable $c

$d = 5;
function dikurang($e) {
  // return $d - $e; // undefined variable $d
  return $GLOBALS['d'] - $e;
}
// echo dikurang(1); // coba jalankan fungsi ini

if ($d == 5) {
	$f = 1;
  echo 'lima';
} else {
	$f = 1;
  echo 'bukanlima';
}
// echo $f; // dianggal sebagai global variable

for ($i=0; $i<=2; $i++) {
	$g = 9;
}
// echo $g; // dianggal sebagai global variable

/**
 * RELAX Gaada STUDY CASE
 */
?>