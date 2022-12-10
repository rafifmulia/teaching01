<?php
  $_POST['jumlah_baris'] = 20;

  // cek apakah inputannya ada
  if(isset($_POST['jumlah_baris'])) {
    // memastikan bahwa yang diinput bilangan bulat
    if (($_POST['jumlah_baris']) > 0) {
      $jumlah_baris = round($_POST['jumlah_baris']);
      echo 'Jumlah baris : ' . $jumlah_baris . '<br>';
    }
  }
  echo '<br><a href="sri_sulastiyani_input.php">Kembali</a>';
?>