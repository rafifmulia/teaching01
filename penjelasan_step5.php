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
        $sum = 0;

        for ($i=0; $i<$deret;) {
          $hasil_sekarang = $hasil_sebelumnya + $penambah;
          echo $hasil_sekarang;

          /**
           * kenapa $deret - 1
           * karena nilai awal $i = 0
           * sedangkan $deret = 1;
           * jadi prosesnya gini
           * $i      =>  0   1   2   3  ...   19
           * $deret  =>  1   2   3   4  ...   20
           * 
           * gaakan pernah ketemu di nilai akhirnya, tapi kalau $deret - 1, jadi ketemu nilai akhirnya
           * 
           * $i      =>  0        1      2      3       ...   19
           * $deret  =>  20-1     20-1   20-1   20-1    ...   20-1
           */
          if ($i >= $deret-1) {
            echo ' = ';
          } else {
            echo ' + ';
          }

          $hasil_sebelumnya = $hasil_sekarang;
          $sum += $hasil_sekarang;

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
        echo $sum.'<br>';

        if ($jumlah_baris_tersisa <= 1) return '';
        rekursif($jumlah_baris_tersisa-1, $deret+1);
      }
      // menjalankan fungsi rekursif pertama kali
      rekursif($jumlah_baris, 1);
    }
  }
  echo '<br><a href="sri_sulastiyani_input.php">Kembali</a>';
?>