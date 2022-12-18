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

// cek apakah inputannya ada
if(isset($_POST['jumlah_baris'])) {
  // memastikan bahwa yang diinput bilangan bulat
  if (($_POST['jumlah_baris']) > 0) {
    $jumlah_baris = round($_POST['jumlah_baris']);
    // fungsi rekursif
    function rekursif($jumlah_baris_tersisa = 1, $deret = 1) {
      $penambah = 2;

      $hasil = 0;
      for ($i=1; $i<=$deret;) {
        echo $i;
        $hasil += $i;
        if ($deret > 1) {
          if ($i+1 >= $deret) {
            echo ' = ';
          } else {
            echo ' + ';
          }
        } else {
          echo ' = ';
        }
        $i += 2;
      }
      echo $hasil.'<br>';

      if ($jumlah_baris_tersisa <= 1) return '';
      rekursif($jumlah_baris_tersisa-1, $deret+$penambah);
    }
    // menjalankan fungsi rekursif pertama kali
    rekursif($jumlah_baris);
  }
}
echo '<br> <a href="sri_sulastiyani_input.php">Kembali</a>';