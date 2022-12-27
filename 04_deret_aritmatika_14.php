<?php
/**
 * deret aritmatika dengan penjumlahan kelipatan dari hasil sebelumnya
 * output:
 * 1 = 1
 * 1 + 4 = 5
 * 1 + 4 + 9 = 14
 * 1 + 4 + 9 + 16 = 30
 * ...
 * 1 + 4 + 9 + 16 + 25 + 36 + 49 + 64 + 81 + 100 + 121 + 144 + 169 + 196 + 225 + 256 + 289 + 324 + 361 + 400 = 2870
 * penjelasan:
 * jarak antara 1 ke 4 = 3
 * jarak antara 3 ke 9 = 5
 * jarak antara 9 ke 16 = 7
 * jarak antara 16 ke 25 = 9
 * dst...
 */

// tidak ada baris
// $jumlah_baris = 20;
// for ($i=1; $i<=$jumlah_baris; $i++) {
//   echo $i;
// }

// supaya lebih rapih ada baris
// $jumlah_baris = 20;
// for ($i=1; $i<=$jumlah_baris; $i++) {
//   echo $i . '<br>';
// }

// supaya berderet, tambahkan for lagi
// $jumlah_baris = 20;
// for ($i=1; $i<=$jumlah_baris; $i++) {
//   for ($x=1; $x<=$i; $x++) {
//     echo $x . ' + ';
//   }
//   echo '<br>';
// }

// supaya nilai deretnya betul, step 1 (jarak)
// $jumlah_baris = 20;
// for ($i=1; $i<=$jumlah_baris; $i++) {
//   $jarak = 0;
//   for ($x=1; $x<=$i; $x++) {
//     echo $x + $jarak . ' + ';
//     $jarak += 2;
//   }
//   echo '<br>';
// }

// supaya nilai deretnya betul, step 2 (nilai sebelumnya dan nilai saat ini)
// $jumlah_baris = 20;
// for ($i=1; $i<=$jumlah_baris; $i++) {
//   $jarak = 0;
//   $nilai_sebelumnya = 1;
//   for ($x=1; $x<=$i; $x++) {
//     $nilai_saat_ini = $nilai_sebelumnya + $jarak;
//     echo $nilai_saat_ini . ' + ';
//     $jarak += 2;
//     $nilai_sebelumnya = $nilai_saat_ini;
//   }
//   echo '<br>';
// }

// supaya nilai deretnya betul, step 3
// $jumlah_baris = 20;
// for ($i=1; $i<=$jumlah_baris; $i++) {
//   $jarak = 0;
//   $nilai_sebelumnya = 1;
//   for ($x=1; $x<=$i; $x++) {
//     $nilai_saat_ini = $nilai_sebelumnya + $jarak;
//     echo $nilai_saat_ini . ' + ';
//     if ($x === 1) {
//       $jarak += 3;
//     } else {
//       $jarak += 2;
//     }
//     $nilai_sebelumnya = $nilai_saat_ini;
//   }
//   echo '<br>';
// }

// supaya ada sumnya disetiap deret
// $jumlah_baris = 20;
// for ($i=1; $i<=$jumlah_baris; $i++) {
//   $jarak = 0;
//   $nilai_sebelumnya = 1;
//   $sum_deret = 0;
//   for ($x=1; $x<=$i; $x++) {
//     $nilai_saat_ini = $nilai_sebelumnya + $jarak;
//     echo $nilai_saat_ini . ' + ';
//     if ($x === 1) {
//       $jarak += 3;
//     } else {
//       $jarak += 2;
//     }
//     $nilai_sebelumnya = $nilai_saat_ini;
//     $sum_deret += $nilai_saat_ini;
//   }
//   echo $sum_deret . '<br>';
// }

// merubah simbol "+" di akhir menjadi "="
$jumlah_baris = 20;
for ($i=1; $i<=$jumlah_baris; $i++) {
  $jarak = 0;
  $nilai_sebelumnya = 1;
  $sum_deret = 0;
  for ($x=1; $x<=$i; $x++) {
    $nilai_saat_ini = $nilai_sebelumnya + $jarak;
    echo $nilai_saat_ini;
    if ($x === 1) {
      $jarak += 3;
    } else {
      $jarak += 2;
    }

    if ($x >= $i) {
      echo ' = ';
    } else {
      echo ' + ';
    }

    $nilai_sebelumnya = $nilai_saat_ini;
    $sum_deret += $nilai_saat_ini;
  }
  echo $sum_deret . '<br>';
}
?>