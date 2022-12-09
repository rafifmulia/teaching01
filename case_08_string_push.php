<?php
/**
 * OBJECTIVE
 * - Menambahkan data pada string kosong
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 08</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Kata atau frasa baru: <input type="text" name="kata" required> <br>
    <button type="submit">Tambah</button>
  </form>
  <?php
  $kalimat = '';
  $kalimat_baru = '';

  if (isset($_POST['kata'])) {
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