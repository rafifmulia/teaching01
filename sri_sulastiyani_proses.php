<?php
  // cek apakah inputannya ada
  if(isset($_POST['jumlah_baris'])) {
    // memastikan bahwa yang diinput bilangan bulat
    if (($_POST['jumlah_baris']) > 0) {
      $jumlah_baris = round($_POST['jumlah_baris']);
      echo 'Jumlah baris : ' . $jumlah_baris . '<br>';
      // fungsi rekursif
      function rekursif($jumlah_baris_tersisa = 1, $initial = 1) {
        $penambah = 1;
        $temp = 0;
        $hasil = 0;

        for ($i=0; $i<$initial;) {
          // echo ($i + $penambah).' + ';
          // echo $penambah.' + ';
          // echo $i.' + ';
          echo $temp + $penambah;

          if ($i >= $initial-1) {
            echo ' = ';
          } else {
            echo ' + ';
          }

          $temp = $temp+$penambah;
          $hasil += $temp;

          $i++; 
          $penambah += 2;
        }
        echo $hasil.'<br>';

        if ($jumlah_baris_tersisa <= 1) return '';
        rekursif($jumlah_baris_tersisa-1, $initial+1);
      }
      // menjalankan fungsi rekursif pertama kali
      rekursif($jumlah_baris, 1);
    }
  }
  echo '<br><a href="sri_sulastiyani_input.php">Kembali</a>';
?>