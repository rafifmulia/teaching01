<?php
/**
 * OBJECTIVE
 * - Menampilkan bilangan genap
 * - Penggunaan fungsi rekursif
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 03</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Maksimal angka: <input type="number" name="max_angka" required> <br>
    <button type="submit">Kirim</button>
  </form>
  <?php
  if (isset($_POST['max_angka'])) {
    $max_angka = $_POST['max_angka'];

    // code...
  }
  ?>
</body>
</html>