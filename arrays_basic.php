<?php
/**
 * Inti supaya jago dalam menangani data arrays
 * 1. membuat,mendefinisikan array baik numerical,associative,multidimensional
 * 2. menghitung arrays
 * 3. memisahkan dan menyambung array
 * 4. menambahkan arrays
 * 5. mengganti arrays
 * 6. menghapus arrays
 * 7. sorting arrays
 */

/**
 * Cara mendefinisikan array, baik kosong atau ada isinya
 */
echo '<h3>Mendifinisikan arrays</h3>';
// kurung persegi (default)
$ar1 = [];
var_dump($ar1);
echo '<br>';

// menggunakan fungsi, Pada array bisa menyimpan berbagai macam tipe data (campuran)
$ar2 = array(1,'a');
var_dump($ar2);
echo '<br>';

// type casting
$ar3 = (array)'123';
var_dump($ar3);
echo '<br>';

echo '<br><br>';

/**
 * Indexed arrays / Numerical arrays => Arrays dengan index numeric
 */
echo '<h3>Indexed arrays</h3>';
$numeric = [1,'a',2,'b'];
echo '<pre>';
var_dump($numeric);
echo '</pre> <b>output array yang diakses: </b>';
echo $numeric[0];
echo '<br>';

/**
 * Associative arrays => Arrays dengan index bernama
 */
echo '<h3>Associative arrays</h3>';
$associative = [
  'kepala' => 'helm',
  'badan' => 'jaket',
];
echo '<pre>';
var_dump($associative);
echo '</pre> <b>output array yang diakses: </b>';
echo $associative['kepala'];
echo '<br>';

/**
 * Multidimensional arrays => Arrays yang didalamnya terdapat array lagi
 */
echo '<h3>Multidimensionnal arrays</h3>';
$multidimensi = [
  'human' => [
    'atas' => 'kepala',
    'tengah' => 'badan',
    'bawah' => 'kaki',
  ],
];
echo '<pre>';
var_dump($multidimensi);
echo '</pre> <b>output array yang diakses: </b>';
// echo $multidimensi['human'];   // array to string conversion
echo $multidimensi['human']['atas'];
echo '<br>';

echo '<br><br>';

/**
 * For loop
 */
echo '<h3>For loop</h3>';
for ($i=0; $i<10;) {
  $i++;
	echo $i.'<br>';
}

echo '<br><br>';

/**
 * Foreach loop
 */
echo '<h3>Foreach loop</h3>';
$states = [
  'DKI Jakarta' => [
    'Jakarta Selatan',
    'Jakarta Timur',
    'Jakarta Pusat',
  ],
  'Jawa Barat' => [
    'Depok',
    'Bogor',
    'Planet Bekasi',
  ],
];
foreach ($states as $nama_provinsi => $citys) {
  echo "<ol>Provinsi $nama_provinsi:";
  foreach ($citys as $index_kota => $kota) {
    echo "<li>Kota $kota</li>";
  }
  echo "</ol>";
}
?>