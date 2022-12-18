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
 * beri nilai awal
 * $num1 = 1; maksud dari $num1 adalah, variable untuk menyimpan nilai saat ini
 * $num2 = 1; maksud dari $num2 adalah, variable untuk menyimpan nilai selanjutnya
 * $num3 = 0; maksud dari $num3 adalah, variable untuk menyimpan nilai sementara hasil dari nilai saat ini + nilai selanjutnya
 * 
 * AWAL PERULANGAN KE-2
 * membuat for, nilai awal $i = 1, dan akan berhenti ketika menemukan kondisi $i<=$deret
 * 
 * OUTPUT $num1
 * 
 * HITUNG
 * $num3 = $num1 + $num2, maksudnya mendapatkan nilai sementara hasil dari penjumlahan nilai saat ini + nilai setelahnya
 * $num1 = $num2, maksudnya mengganti nilai saat ini menjadi nilai setelahnya
 * $num2 = $num3, mendapatkan nilai setelahnya yang baru untuk looping selanjutnya
 * 
 * AKHIR PERULANGAN KE-2
 * 
 * setelah akhir dari perulangan ke-2 maka tampilkan baris baru
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