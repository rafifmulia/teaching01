<!DOCTYPE html>
<html lang="id">
<head>
  <title>Form GET</title>
</head>
<body>
  <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Nama Lengkap: <input type="text" name="fname" required>
    <button type="submit">Kirim</button>
  </form>
  <?php
  if (isset($_GET['fname'])) {
    echo $_GET['fname'];
  }
  ?>
</body>
</html>