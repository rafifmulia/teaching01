<?php
/**
 * Data Type
 * https://www.php.net/manual/en/language.types.php
 */
$a = 1;		    // 1 sebagai integer
$b = '1';	    // 1 sebagai string
$c = null;	  // data kosong
$d = 3.14;	  // float
$d = 5e7;	    // integer, menambahkan 0 dengan e
$e = true;	  // boolean
$f = [0,'1'];	// array
echo '<h3>Data Type</h3>';
echo '<b>$a</b><br>';
var_dump($a);
echo '<br><br>';

echo '<b>$b</b><br>';
var_dump($b);
echo '<br><br>';

echo '<b>$c</b><br>';
var_dump($c);
echo '<br><br>';

echo '<b>$d</b><br>';
var_dump($d);
echo '<br><br>';

echo '<b>$e</b><br>';
var_dump($e);
echo '<br><br>';

echo '<b>$f</b><br>';
var_dump($f);
echo '<br><br>';

/**
 * Type Juggling / Casting to specific data type
 * https://www.php.net/manual/en/language.types.type-juggling.php
 */
$a = (string) 1;  // integer convert to string
$b = (int) '1';  // string convert to integer
$c = (float) 1;  // integer convert to float
echo '<h3>Type Juggling / Casting to specific data type</h3>';
echo '<b>$a</b><br>';
var_dump($a);
echo '<br><br>';

echo '<b>$b</b><br>';
var_dump($b);
echo '<br><br>';

echo '<b>$c</b><br>';
var_dump($c);
echo '<br><br>';

/**
 * Fungsi round() => pembulatan menengah, cth: 0.5 ke 1, 0.4 ke 0
 */
echo '<h3>Fungsi round() => pembulatan menengah, cth: 0.5 ke 1, 0.4 ke 0</h3>';
var_dump(round(0.5));
var_dump(round(0.4));

echo '<br><br>';

/**
 * Fungsi floor() => pembulatan kebawah, cth: 0.5 ke 0
 */
echo '<h3>Fungsi floor() => pembulatan kebawah, cth: 0.5 ke 0</h3>';
var_dump(floor(0.5));

echo '<br><br>';

/**
 * Fungsi ceil() => pembulatan keatas, cth: 0.5 ke 1
 */
echo '<h3>Fungsi ceil() => pembulatan keatas, cth: 0.5 ke 1</h3>';
var_dump(ceil(0.5));

echo '<br><br>';

/**
 * STUDY CASE ubah inputan string/koma/negatif jadi bilangan bulat
 */
?>