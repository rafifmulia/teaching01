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
        $penambah = 1;
        $hasil_sebelumnya = 0;

        for ($i=0; $i<$deret;) {
          $hasil_sekarang = $hasil_sebelumnya + $penambah;
          echo $hasil_sekarang.' + ';

          $hasil_sebelumnya = $hasil_sekarang;

          $i++;

          /**
           * Kenapa ditambah 2 ?
           * karena dari 1 ke 4 = 3
           * dari 4 ke 9 = 5
           * dari 9 ke 16 = 7
           * dari 16 ke 25 = 9
           * dst...
           */
          $penambah += 2;
        }
        echo '<br>';

        if ($jumlah_baris_tersisa <= 1) return '';
        rekursif($jumlah_baris_tersisa-1, $deret+1);
      }
      // menjalankan fungsi rekursif pertama kali
      rekursif($jumlah_baris, 1);
    }
  }
  echo '<br><a href="sri_sulastiyani_input.php">Kembali</a>';
?>