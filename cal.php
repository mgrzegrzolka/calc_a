<?php

$el_keypad = $_POST['el_keypad'];
$el_pir = $_POST['el_pir'];
$el_openk = $_POST['el_openk'];
$el_gas = $_POST['el_gas'];
$el_smoke = $_POST['el_smoke'];
$el_glass = $_POST['el_glass'];
$el_siren = $_POST['el_siren'];
$el_panic = $_POST['el_panic'];
$el_pirout = $_POST['el_pirout'];
$vat = (int)$_POST['vat'];
$app = (int)$_POST['f_app'];

if($vat==8){
	$vat=1.08 ;
}else{
	$vat=1.23;
}

if($app == 1){
	$val_catral = 1200;
}else{
	$val_catral = 800;
}


$val_keypad = (int)$el_keypad * 350;
$val_pir = (int)$el_pir * 		55;
$val_openk = (int)$el_openk *   30;
$val_gas = (int)$el_gas * 		200;
$val_smoke = (int)$el_smoke * 	180;
$val_glass = (int)$el_glass * 	130;
$val_siren = (int)$el_siren * 	140;
$val_panic = (int)$el_panic * 	50;
$val_pirout = (int)$el_pirout * 390;

$sum_el=$el_keypad+$el_pir+$el_openk+$el_gas+$el_smoke+$el_glass+$el_siren+$el_panic+$el_pirout;

$val_sum= ($val_catral + $val_keypad + $val_pir + $val_openk + $val_gas + $val_smoke + $val_glass + $val_siren + 
$val_panic + $val_pirout) * $vat;


if($sum_el==0){
	
	echo "0 zł brutto";
}else{
	echo number_format($val_sum,2,',','')." zł brutto";
}
?>