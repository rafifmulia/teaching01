<?php
/**
 * OBJECTIVE
 * - User input angka
 * - User input angka
 * - Cast tipe data
 * - Ubah menjadi bilangan bulat positif
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 01</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Angka: <input type="number" step="any" name="angka" required>
    <button type="submit">Kirim</button>
  </form>
  <span>Hasil: </span>
  <?php
  if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    // code...
  }
  ?>
</body>
</html>