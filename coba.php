<?php
function papan_catur($angka){
	$text = '';
 // Jumlah Kotak
 $jumlah = 8;
 // Membuat Tag Table
 $text .= '<table border=1>';
 // Perulangan pembuatan kotak catur
 for($n = 0; $n < 8; $n++) {
  $text .= '<tr>';
  for($m = 0; $m < 8; $m++) {
   // Pemberian Warna
   $warna = '';
      if(($n % 2 == 0 && $m % 2 == 0) || ($n % 2 == 1 && $m % 2 == 1)) {
          $warna = '#000';
      }
   else $warna = '#fff';
      $text .= '<td width=30 height=30 bgcolor='.$warna.'></td>';
  }
  $text .= '</tr>';
 }
 // Tag Penutup Table
 $text .= '</table>';
 
} 

?> 