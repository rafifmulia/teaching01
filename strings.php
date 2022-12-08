<?php
$variable = 'abcdefg';

/**
 * Single quote
 */
echo '<h3>Single quote</h3>';
echo '
$variable
$variable
';

echo '<br><br>';

/**
 * Double quote
 */
echo '<h3>Double quote</h3>';
echo "
$variable<br>
$variable
";

echo '<br><br>';

/**
 * Concatenation
 */
echo '<h3>Concatenation</h3>';
$kalimat = '';
$words = ['Concatenation', 'adalah', 'proses', 'atau', 'cara', 'untuk', 'menggabungkan', 'string', 'menjadi', 'satu'];
foreach($words as $word) {
  $kalimat .= $word . ' ';
}
echo $kalimat;

echo '<br><br>';

/**
 * Memperlakukan string seperti arrays
 */
echo '<h3>Memperlakukan string seperti arrays</h3>';
$kalimat = 'DKI Jakarta,Jawa Barat,Jawa Timur';
// echo $kalimat[0].'<br>';
// echo $kalimat.'<br>';
$kalimat[0] = 'd'; // diganti
echo $kalimat.'';

echo '<br><br>';

/**
 * Fungsi strlen() => menghitung jumlah karakter yang ada di string
 */
echo '<h3>Fungsi strlen() => menghitung jumlah karakter yang ada di string</h3>';
$count = strlen('DKI Jakarta,Jawa Barat,Jawa Timur');
var_dump($count);

echo '<br><br>';

/**
 * Fungsi strpos() => mendapatkan posisi index pada string yang dicari
 */
echo '<h3>Fungsi strpos() => mendapatkan posisi index pada string yang dicari</h3>';
$kalimat = 'DKI Jakarta,Jawa Barat,Jawa Timur';
// $a = strpos($kalimat, 'DKI');    // return 0;
$a = strpos($kalimat, 'Jawa Timur');    // return 23;
var_dump($a);

echo '<br><br>';

/**
 * Mengganti karakter atau kata dari sebuah string
 */
echo '<h3>Mengganti karakter dari sebuah string</h3>';
$kalimat = 'Concatenation adalah proses atau cara untuk menggabungkan string menjadi satu.';
// $kalimat = substr_replace($kalimat, '', -1);    // -1 untuk mengganti karakter terakhir menjadi tiada
// $kalimat = substr_replace($kalimat, '', 0, 13);    // mengganti karakter pada range tertentu. dari index 0 dihapus 13 karakter "Concatenation",
$kalimat = substr_replace($kalimat, '.', strpos($kalimat, ' satu.'), 6);    // mengganti kata " satu." menjadi "."
echo $kalimat;

echo '<br><br>';

/**
 * Fungsi str_word_count() => menghitung jumlah kata yang ada di string
 */
echo '<h3>Fungsi str_word_count() => menghitung jumlah kata yang ada di string</h3>';
$count = str_word_count('DKI Jakarta,Jawa Barat,Jawa Timur');
var_dump($count);

echo '<br><br>';

?>