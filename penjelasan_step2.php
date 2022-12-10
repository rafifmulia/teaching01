<?php
  $_POST['jumlah_baris'] = 20;

  // cek apakah inputannya ada
  if(isset($_POST['jumlah_baris'])) {
    // memastikan bahwa yang diinput bilangan bulat
    if (($_POST['jumlah_baris']) > 0) {
      $jumlah_baris = round($_POST['jumlah_baris']);
      echo 'Jumlah baris : ' . $jumlah_baris . '<br>';
      // fungsi rekursif
      function rekursif($jumlah_baris_tersisa = 1, $deret = 1) {
        
        echo $deret.'<br>';
        // echo $jumlah_baris_tersisa.'<br>';

        if ($jumlah_baris_tersisa <= 1) return '';
        rekursif($jumlah_baris_tersisa-1, $deret+1);
      }
      // menjalankan fungsi rekursif pertama kali
      rekursif($jumlah_baris, 1);
    }
  }
  echo '<br><a href="sri_sulastiyani_input.php">Kembali</a>';
?>