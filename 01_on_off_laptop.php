<?php
/**
 * misalkan ada kasus menyalakan laptop
 * 1. power on
 * 2. wake up, mendapatkan nilai
 * 3. pemilihan kondisi
 *    jika nilainya 0, maka power off
 *    jika nilainya 1, maka yang dilakukan: mendapatkan gambar wallpaper untuk tampilan login kemudian menampilkannya
 *    jika nilainya 2, maka buka aplikasi word
 * 4. lalu balik lagi ke step 2
 */

$nilai = 2;
if ($nilai === 0) {
  // jikalau kondisi ini benar, maka kode ini akan tereksekusi
  echo 'power off';
} else if ($nilai === 1) {
  // jikalau kondisi ini benar, maka kode ini akan tereksekusi
  echo 'muncul tampilan login';
} else {
  // jikalau semua kondisi diatas salah, maka kode ini akan tereksekusi
  echo 'buka aplikasi word';
}

// nilai awal
// $nilai = 1;
// if (isset($input)) {
//   $nilai = $input;
// }

// if ($nilai === 1) {
//   echo 'power on';
// } else if ($nilai === 2) {
//   echo 'buka word';
// } else if ($nilai === 0) {
//   echo 'power off';
// } else {
//   echo 'tidak dikenali';
// }
?>