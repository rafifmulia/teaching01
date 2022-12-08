<!DOCTYPE html>
<html lang="id">
<head>
  <title>Form POST</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Nama Lengkap: <input type="text" name="fname" required>
    <button type="submit">Kirim</button>
  </form>
  <?php
  if (isset($_POST['fname'])) {
    echo $_POST['fname'];
  }
  ?>
</body>
</html>