<?php
/**
 * flownya seperti yang dijelaskan pada flowchart, disini kita akan membahas implementasinya
 * 
 * sebelum itu, flowchart ada / dibuat untuk menggambarkan kodingannya nanti akan seperti apa. (bisa dibilang semacam pseudocode)
 * jadi apa yang ada di flowchart tidak akan sama persis ketika implementasi di kodingan
 * tetapi flownya sama
 * 
 * fungsi isset($_POST['jumlah_baris']), untuk mengecek apakah inputannya ada
 * 
 * kemudian ada pengecekan $_POST['jumlah_baris'] > 0, untuk memastikan yang diinput lebih besar dari 0
 * fungsi round($_POST['jumlah_baris']), untuk membulatkan bilangan
 * 
 * membuat fungsi rekursif dengan parameter
 * parameter1 $jumlah_baris_tersisa dengan nilai awalnya 1
 * parameter2 $deret dengan nilai awalnya 1
 * 
 * Bisa dikatakan fungsi rekursif ini adalah PERULANGAN KE-1
 * 
 * DIDALAM FUNGSI rekursif
 * 
 * beri nilai awal $penambah = 2;, karena bilangan ganjil dimulai dari 1, jadi ketika ditambah 2:
 * 1 + 2 = 3
 * 3 + 2 = 5,
 * dst...
 * 
 * $hasil = 0, untuk mendapatkan sum(total hasil dari setiap deretnya)
 * kenapa diberi nilai awal 0, supaya tidak pengaruh pada baris diatasnya
 * 
 * AWAL PERULANGAN KE-2
 * membuat for, nilai awal $i = 1, dan akan berhenti ketika menemukan kondisi $i<=$deret
 * 
 * OUTPUT $i
 * HITUNG $hasil = $hasil + $i;
 * 
 * jika $deret sudah mencapat deret terakhir, maka OUTPUT symbol =
 * jika belum, maka OUTPUT sysmbol +
 * 
 * HITUNG $i = $i + 2;
 * 
 * AKHIR PERULANGAN KE-2
 * 
 * setelah akhir dari perulangan ke-2 maka tampilkan $hasil yaitu sum(total hasil) dari deretnya
 * tag <br>, gunanya untuk membuat baris / tabulasi baru
 * 
 * pengecekan kondisi
 * jika $jumlah_baris_tersisa kurang dari sama dengan 1 maka berhenti
 * jika $jumlah_baris_tersisa lebih dari 1, maka:
 * - HITUNG $jumlah_baris_tersisa = $jumlah_baris_tersisa - 1
 * - HITUNG $deret = $deret + $penambah
 * - maka memanggil lagi fungsi rekursif, disinilah terjadi PERULANGAN
 * 
 * AKHIR BLOK CODE FUNGSI rekursif
 * 
 * menjalankan fungsi rekursif pertama kali
 * rekursif($jumlah_baris, 1);
 */