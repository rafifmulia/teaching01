<?php
/**
 * OBJECTIVE
 * - Menambahkan data pada array kosong
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 04</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Kota baru: <input type="text" name="kota_baru" required> <br>
    <button type="submit">Tambah</button>
  </form>
  <?php
  $citys = [];

  if (isset($_POST['kota_baru'])) {
    $kota_baru = $_POST['kota_baru'];

    // code...
  }
  echo 'List kota: <br>';
  foreach ($citys as $city) {
    echo '- '.$city.'<br>';
  }
  ?>
</body>
</html>