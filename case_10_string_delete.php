<?php
/**
 * OBJECTIVE
 * - Menghapus string pada posisi tertentu
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 10</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Posisi Awal: <input type="number" name="posisi_awal" required> <br>
    Jumlah: <input type="number" name="jumlah" required> <br>
    <button type="submit">Hapus</button>
  </form>
  <?php
  $kalimat = 'Concatenation adalah proses atau cara untuk menggabungkan string menjadi satu';
  $kalimat_baru = '';

  if (isset($_POST['jumlah'])) {
    $posisi_awal = $_POST['posisi_awal'];
    $jumlah = $_POST['jumlah'];

    // code...
  }
  
  echo '<h3>Kalimat asli</h3>';
  echo $kalimat;

  echo '<h3>Kalimat baru</h3>';
  echo $kalimat_baru;
  ?>
</body>
</html>