<?php
/**
 * IF STATEMENT (conditional comparion)
 */
$grade = 'A';

if ($grade === 'A') {
  echo 4.0;
} else if ($grade === 'B') {
  echo 3.0;
} else if ($grade === 'C') {
  echo 2.0;
} else {
  echo 1.0;
}

echo '<br><br>';

/**
 * SWITCH STATEMENT (strict comparion)
 */
$grade = 'A';

switch ($grade) {
  case 'a':
    echo 4.0;
    break;

  case 'b':
    echo 3.0;
    break;

  case 'c':
    echo 2.0;
    break;
  
  default:
    echo 1.0;
    break;
}

/**
 * RELAX Gaada STUDY CASE
 */
?>