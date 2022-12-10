<html>
  <head>
    <title>Form GET</title>
  </head>
  <body>
    <form method="get">
      Angka: <input type="number" step="any" name="inputan1" required>
      <button type="submit">Kirim</button>
    </form>
    <?php
      echo round($_GET['inputan1']);
    ?>
  </body>
</html>