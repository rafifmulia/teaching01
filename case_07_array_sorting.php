<?php
/**
 * OBJECTIVE
 * - Manual sorting pada array menggunakan bubble sort algorithm
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Study Case 07 - Sorting</title>
</head>
<body>
  <?php
  // Buble sort: https://www.alphacodingskills.com/php/pages/php-program-for-bubble-sort.php

  $abjads = ['D', 'C', 'A', 'B', 'E'];
  echo '<h3>Sebelum disorting</h3>';
  foreach ($abjads as $abjad) {
    echo "$abjad<br>";
  }
  
  // proses sorting ascending, code here...

  echo '<h3>Sesudah sorting ascending</h3>';
  foreach ($abjads as $abjad) {
    echo "$abjad<br>";
  }

  // proses sorting descending, code here...

  echo '<h3>Sesudah sorting descending</h3>';
  foreach ($abjads as $abjad) {
    echo "$abjad<br>";
  }
  ?>
</body>
</html>