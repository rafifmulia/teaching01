<?php
/**
 * OBJECTIVE
 * - User input password & konfirmasi password
 * - Harus case sensitive, artinya pengaruh terhadap huruf besar dan kecil
 * - Jika password sesuai, maka echo 'sama persis'
 * - Jika password tidak sama, maka echo 'password tidak sesuai'
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 02</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Password: <input type="password" name="password" required> <br>
    Konfirmasi Password: <input type="password" name="conf_password" required> <br>
    <button type="submit">Kirim</button>
  </form>
  <?php
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $konfirmasi_password = $_POST['conf_password'];
    // code...
  }
  ?>
</body>
</html>