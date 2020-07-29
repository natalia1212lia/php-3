<?php

function papan_catur($angka) {
// tulis kode di sini
$text1 ='';
//jum;aj kotak
$jumlah="";
//membuat tag table
$text1 .='<table border=1>';

for ($n=0; $n < 4; $n++) { 
	$text1.='<tr>';
	for ($m=0; $m < 4; $m++) { 
		# warna...
		$warna='';
		if (($n % 2 == 0 && $m % 2 == 0)||($n % 2 == 0 && $m % 2 ==1 )) {
			$warna='#000';
			# code...
		}else $warna='#fff';
		$text1 .='<td width=30 height=30 bgcolor='.$warna.'></td>';
	}
	$text1 .='</tr>';
}
$text1.='</table>';
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #*/

echo papan_catur(5) ;
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>