<?php
/**
 * OBJECTIVE
 * - Menghapus array pada index tertentu
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 06</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Index: <input type="number" name="index" required> <br>
    <button type="submit">Hapus</button>
  </form>
  <?php
  $citys = ['Jakarta Pusat', 'Depok', 'Jakarta Selatan'];

  if (isset($_POST['index'])) {
    $index = $_POST['index'];

    // code...
  }
  echo 'List kota: <br>';
  echo '<table border="1">';
  echo '<tr> <td>Index</td> <td>Kota</td> </tr>';
  foreach ($citys as $key => $city) {
    echo '<tr>';
    echo "<td>$key.</td>";
    echo "<td>$city</td>";
    echo '</tr>';
  }
  echo '</table>';
  ?>
</body>
</html>