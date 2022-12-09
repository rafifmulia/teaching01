<?php
/**
 * OBJECTIVE
 * - Mengubah data pada string yang sudah ada
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 09</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Posisi Awal: <input type="number" name="posisi_awal" required> <br>
    Jumlah: <input type="number" name="jumlah" required> <br>
    Kata atau frasa pengganti: <input type="text" name="kata" required> <br>
    <button type="submit">Edit</button>
  </form>
  <?php
  $kalimat = 'Concatenation adalah proses atau cara untuk menggabungkan string menjadi satu';
  $kalimat_baru = '';

  if (isset($_POST['kata'])) {
    $posisi_awal = $_POST['posisi_awal'];
    $jumlah = $_POST['jumlah'];
    $kata = $_POST['kata'];

    // code...
  }
  
  echo '<h3>Kalimat asli</h3>';
  echo $kalimat;

  echo '<h3>Kalimat baru</h3>';
  echo $kalimat_baru;
  ?>
</body>
</html>