<!DOCTYPE html>
<html lang="id">
<head>
  <title>14</title>
</head>
<body>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <table border="1">
      <tr>
        <td>Jumlah Baris yang akan dicetak</td>
        <td>:</td>
        <td><input type="number" name="jumlah_baris" value="0"></td>
      </tr>
      <tr style="text-align: center;">
        <td colspan="3"><button type="submit">Kirim Data</button></td>
      </tr>
    </table>
  </form>
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
</body>
</html>