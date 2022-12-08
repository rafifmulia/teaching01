<?php
/**
 * Dasar Perbandingan
 */
$a = 1;     // sebagai integer

echo '<h3>Perbandingan menggunakan operator ==(equality comparison), dan ===(strict comparions)</h3>';
echo '<b>$a == 1</b><br>';
var_dump($a == 1);       // membandingkan value; return true
echo '<br><br>';

echo '<b>$a == \'1\'</b><br>';
var_dump($a == '1');     // membandingkan value (ignore type); return true
echo '<br><br>';

echo '<b>$a === 1</b><br>';
var_dump($a === 1);      // membandingkan type/value (integer vs. integer); return true
echo '<br><br>';

echo '<b>$a === \'1\'</b><br>';
var_dump($a === '1');    // membandingkan type/value (integer vs. string); return false
echo '<br><br>';


/**
 * Fungsi strpos()
 */
echo '<h3>Perbandingan menggunakan fungsi <i>strpos</i> (bawaan php native): equality comparison, dan strict comparions</h3>';
// Equality comparisons
if (strpos('testing', 'test')) {    // 'test' ditemukan pada index ke 0, angka 0 pada kondisional artinya sama dengan false
	echo 'test <br>';
}
if (strpos('testing', 'ting')) {    // 'ting' ditemukan pada index ke 3, angka 3 pada kondisional artinya sama dengan true
	echo 'ting <br>';
}

// vs. strict comparisons
if (strpos('testing', 'test') !== false) {    // 'test' ditemukan pada index ke 0, pada kondisional 0 !== false artinya true
	echo 'test 2 <br>';
}
if (strpos('testing', 'ting') !== false) {    // 'ting' ditemukan pada index ke 3, pada kondisional 3 !== false artinya true
	echo 'ting 2 <br>';
}

/**
 * STUDY CASE bandingkan password dengan konfirmasi password
 */
?>