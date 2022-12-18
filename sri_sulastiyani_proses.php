<?php
/**
 * membuat deret fibonacci
 * outputnya
 * 1
 * 1 1
 * 1 1 2
 * 1 1 2 3
 * 1 1 2 3 5
 * 1 1 2 3 5 8
 */

// cek apakah inputannya ada
if(isset($_POST['jumlah_baris'])) {
  // memastikan bahwa yang diinput bilangan bulat
  if (($_POST['jumlah_baris']) > 0) {
    $jumlah_baris = round($_POST['jumlah_baris']);
    // fungsi rekursif
    function rekursif($jumlah_baris_tersisa = 1, $deret = 1) {
      $num1 = 1;
      $num2 = 1;
      $num3 = 0;

      for ($i=1; $i<=$deret; $i++) {
        echo ' ' . $num1;
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
      }
      echo '<br>';

      if ($jumlah_baris_tersisa <= 1) return '';
      rekursif($jumlah_baris_tersisa-1, $deret+1);
    }
    // menjalankan fungsi rekursif pertama kali
    rekursif($jumlah_baris);
  }
}
echo '<br> <a href="sri_sulastiyani_input.php">Kembali</a>';


// $n = 10;
// $num1 = 0;
// $num2 = 1;
// $counter = 0;
// while ($counter < $n){
//   echo ' '.$num1;
//   $num3 = $num2 + $num1;
//   $num1 = $num2;
//   $num2 = $num3;
//   $counter = $counter + 1;
// }