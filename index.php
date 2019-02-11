<?php
//pc bac 2 $ax^2 + $bx +c = 0
/*$a = 3;
$b = 5;
$c = 8;
if ($a !=0) {
 $delta = $b*$b - 4*$a*$c;
 	if ($delta >=0) {
 		echo "La phuong trinh bac 2";
 	}
 	else {
 		echo"Ko phai pt bac 2";
 	}
} else {
	echo "Ko phai phuong trinh bac 2";
}
*/
$diemCC = 2;
$diemGK = 5;
$diemCK = 8;
$sobuoidihoc = 12;
if (
	(1 < $diemCC && $diemCC < 10)
	&& (1 < $diemGK && $diemGK <= 10)
	&& (1 < $diemCK && $diemCK <= 10)
	&& ($sobuoidihoc > 5)
	) {
	$diemTB = $diemCC*0.1 + $diemGK*0.4 + $diemCK*0.5;
	if ( $diemTB > 4 ) {
		echo "qua mon";
	}
} else {
	echo "ko duoc di thi";
}
?>
