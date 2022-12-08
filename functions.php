<?php
// fungsi dengan mengembalikan nilai
function kali($a, $b) {
  return $a * $b;
}
// echo kali(2, 2);   // coba jalankan fungsi ini

// fungsi tanpa mengembalikan nilai (void)
function bagi($a, $b) {
  echo $a / $b;
}
// bagi(10, 5);   // coba jalankan fungsi ini

// fungsi dengan nilai default
function modulus($a, $b = 2) {
  // a dibagi b sisa hasil baginya berapa
  return $a % $b;
}
// echo modulus(11);   // coba jalankan fungsi ini

// fungsi rekursif infinite loop tanpa mengembalikan nilai
function infinite_loop($start = 0) {
  echo $start;

  $next_value = ++$start;
  infinite_loop($next_value);
}
// infinite_loop();   // coba jalankan fungsi ini

// fungsi rekursif dengan batasan tanpa mengembalikan nilai
function kurangi_sampai_habis($start = 1, $penambah = 1, $sampai = 10) {
  echo $start.'<br>';

  $ditambah_jadi = $start + $penambah;

  if ($start >= $sampai) {
    echo 'Selesai';
    return true; // supaya berhenti
  }
  kurangi_sampai_habis($ditambah_jadi, $penambah, $sampai);
}
// kurangi_sampai_habis();   // coba jalankan fungsi ini


// fungsi rekursif infinite loop dengan mengembalikan nilai
function infinite_loop2($start = 0) {
  $next_value = $start + 1;
  echo infinite_loop2($next_value);
  return $start;
}
// echo infinite_loop2();   // coba jalankan fungsi ini

// fungsi rekursif dengan batasan dengan mengembalikan nilai (rekursif terbalik)
function dikurangi_sampai($start = 1, $penambah = 1, $sampai = 10) {
  $ditambah_jadi = $start + $penambah;

  if ($start > $sampai) {
    return 'Selesai'; // supaya berhenti
  }
  echo dikurangi_sampai($ditambah_jadi, $penambah).'<br>';
  return $start;
}
// echo dikurangi_sampai();   // coba jalankan fungsi ini

// fungsi dalam fungsi
function tambah($a, $b) {
  function tambah1($a, $b) {
    return $a + $b;
  }
  return tambah1($a, $b);
}
// echo tambah(2, 2);   // coba jalankan fungsi ini

/**
 * STUDY CASE tampilkan bilangan genap menggunakan fungsi rekursif dengan maksimal angka 100
 */
?>