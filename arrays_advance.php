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
 * Fungsi explode() => memisahkan string menjadi array
 */
echo '<h3>Fungsi explode() => memisahkan string menjadi array</h3>';
$string_provinsi = 'DKI Jakarta,Jawa Barat,Jawa Timur';
$arr_provinsi = explode(',', $string_provinsi);
echo '<pre>';
var_dump($arr_provinsi);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi implode() => mengubah array menjadi string biasa
 */
echo '<h3>Fungsi implode() => mengubah array menjadi string biasa</h3>';
$arr_provinsi = [
  'DKI Jakarta',
  'Jawa Barat',
  'Jawa Timur',
];
$implode_provinsi = implode(' | ', $arr_provinsi);
echo '<pre>';
var_dump($implode_provinsi);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi count() => menghitung jumlah array
 */
echo '<h3>Fungsi count() => menghitung jumlah array</h3>';
$arr_provinsi = [
  'DKI Jakarta',
  'Jawa Barat',
  'Jawa Timur',
];
$count = count($arr_provinsi);
var_dump($count);

echo '<br><br>';

/**
 * Manual replacement pada array
 */
echo '<h3>Manual replacement pada array</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
$numerical[5] = 'LIMA';
echo '<pre>';
var_dump($numerical);
echo '</pre>';

echo '<br><br>';

/**
 * Manual menambahkan data pada array
 */
echo '<h3>Manual menambahkan data pada array</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima'];
$numerical[] = 'ENAM';
$numerical[] = 'TUJUH';
$numerical[8] = 'DELAPAN';
$numerical[9] = 'SEMBILAN';
echo '<pre>';
var_dump($numerical);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi array_merge() => mencampurkan 2 array atau lebih menjadi 1 array
 */
echo '<h3>Fungsi array_merge() => mencampurkan 2 array atau lebih menjadi 1 array</h3>';
$arr1 = ['nol','satu','dua','tiga','empat','lima'];
$arr2 = ['enam','tujuh','delapan','sembilan'];
$merge = array_merge($arr1, $arr2);
echo '<pre>';
var_dump($merge);
echo '</pre>';

echo '<br><br>';

/**
 * Manual menghapus data pada array menggunakan fungsi unset()
 */
echo '<h3>Manual menghapus data pada array menggunakan fungsi unset()</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
unset($numerical[7]);
echo '<pre>';
var_dump($numerical);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi array_splice() => menghapus array di urutan tertentu
 */
echo '<h3>Fungsi array_splice() => menghapus array di urutan tertentu</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
$splice = array_splice($numerical, 7, 1);
echo '<pre>';
var_dump($numerical);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi array_slice() => mengambil sebagian array pada urutan tertentu, tanpa menghapus yang original
 */
echo '<h3>Fungsi array_slice() => mengambil sebagian array pada urutan tertentu, tanpa menghapus yang original</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
$slice = array_slice($numerical, 7, 2);
echo '<pre>';
var_dump($slice);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi array_reverse() => mengubah urutan dari yang terbelakang ke terdepan
 */
echo '<h3>Fungsi array_reverse() => mengubah urutan dari yang terbelakang ke terdepan</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
$reverse = array_reverse($numerical);   // hanya mereverse valuenya saja
// $reverse = array_reverse($numerical, true);    // mereverse indexnya juga
echo '<pre>';
var_dump($reverse);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi sort() => mengurutkan array value secara ascending
 */
echo '<h3>Fungsi sort() => mengurutkan array value secara ascending</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
$sort = sort($numerical);
echo '<pre>';
var_dump($numerical);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi rsort() => mengurutkan array value secara desending
 */
echo '<h3>Fungsi rsort() => mengurutkan array value secara desending</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
$rsort = rsort($numerical);
echo '<pre>';
var_dump($numerical);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi ksort() => mengurutkan array key secara ascending
 */
echo '<h3>Fungsi ksort() => mengurutkan array key secara ascending</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
$ksort = ksort($numerical);
echo '<pre>';
var_dump($numerical);
echo '</pre>';

echo '<br><br>';

/**
 * Fungsi krsort() => mengurutkan array key secara descending
 */
echo '<h3>Fungsi krsort() => mengurutkan array key secara descending</h3>';
$numerical = ['nol','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan'];
$krsort = krsort($numerical);
echo '<pre>';
var_dump($numerical);
echo '</pre>';

echo '<br><br>';

/**
 * STUDY CASE
 * 1. CRUD pada array
 * 2. Manual sorting
 */

// Reference: https://www.php.net/manual/en/ref.array.php
?>