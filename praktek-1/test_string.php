<?php

$kalimat = 'php adalah bahasa pemrograman web yang mudah dipelajari';
echo substr($kalimat, 1); //hp adalah bahasa pemrograman web yang mudah dipelajari
echo "<br>";

echo substr($kalimat, -10); //dipelajari
echo "<br>";

echo substr($kalimat, 0, 4); //php
echo "<br>";

echo substr($kalimat, 4, -10); //adalah bahasa pemrograman web yang mudah
echo "<br>";

echo strlen($kalimat); // 55
echo "<br>";

echo str_replace ( "a", "o", "mari kita belajar" );
echo "<br>";

$strings = array (
		'hari ini hari libur',
		'hari besok tidak libur lagi',
		'setiap hari harus belajar' 
);
$search = array (
		'hari',
		'besok',
		'libur',
		'belajar' 
);
$replace = array (
		'minggu',
		'depan',
		'kerja',
		'bekerja' 
);

$replaced = str_replace ( $search, $replace, $strings );

echo "<pre>";
print_r ( $replaced );
echo "</pre>";

?>
