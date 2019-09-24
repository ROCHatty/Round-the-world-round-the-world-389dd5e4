<?php
$a = round(intval($argv[1]),1);
if ($a >= 50) {
	$b = explode('.', (string)$a/50);
	echo $b[0]." x 50 euro\r\n";
	$a = round($b[1]*50/10, 2);
}
if ($a >= 20) {
	$b = explode('.', (string)$a/20);
	echo $b[0]." x 20 euro\r\n";
	$a = round($b[1]*20, 2)/10;
}
if ($a >= 10) {
	$b = explode('.', (string)$a/10);
	echo $b[0]." x 10 euro\r\n";
	$a = round($b[1]*10, 2)/10;
}
if ($a >= 5) {
	$b = explode('.', (string)$a/5);
	echo $b[0]." x 5 euro\r\n";
	$a = round($b[1]*5, 2)/10;
}
if ($a >= 2) {
	$b = explode('.', (string)$a/2);
	echo $b[0]." x 2 euro\r\n";
	$a = round($b[1]*2, 2)/10;
}
if ($a >= 1) {
	$b = explode('.', (string)$a/1);
	echo $b[0]." x 1 euro\r\n";
	$a = round($b[1]*1, 2)/10;
}
if ($a >= 0.5) {
	$b = explode('.', (string)$a/0.5);
	echo $b[0]." x 0,50 euro\r\n";
	$a = round($b[1]*0.5, 2)/10;
}
if ($a >= 0.2) {
	$b = explode('.', (string)$a/0.2);
	echo $b[0]." x 0,20 euro\r\n";
	$a = round($b[1]*0.2, 2)/10;
}
if ($a >= 0.1) {
	$b = explode('.', (string)$a/0.1);
	echo $b[0]." x 0,10 euro\r\n";
	$a = round($b[1]*0.1, 2)/10;
}
if ($a >= 0.05) {
	$b = explode('.', (string)$a/0.05);
	echo $b[0]." x 0,05 euro\r\n";
	$a = round($b[1]*0.05, 2)/10;
}
?>
