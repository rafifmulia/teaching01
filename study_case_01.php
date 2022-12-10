<html>
  <head>
    <title>Study Case 01</title>
  </head>
  <body>
    <form method="post">
      Angka: <input type="number" step="any" name="huruf" required>
      <button type="submit">Kirim</button>
    </form>
    <?php
      echo round($_POST['huruf']);
    ?>
  </body>
</html>