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

$emailclient 	= $_POST['emailclient'];
$phonenumber 	= $_POST['phonenumber'];
$clientname 	= $_POST['clientname'];
$localisation 	= $_POST['localisation'];
$agre1			= $_POST['agre1'];


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

$temat='TEAMT';
$tresc='
                <META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=iso-8859-2">
                    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
                    <HTML><HEAD>
                    <META content="text/html; charset=iso-8859-2" http-equiv=Content-Type>
                    <META name=GENERATOR content="MSHTML 9.00.8112.16520">
                    <STYLE></STYLE>
                    </HEAD>
                    <BODY bgColor="white">

                    <DIV><FONT size=5 face=Arial><strong>Nagłówek</strong></FONT>&nbsp;</DIV>

                    <table style="background:white;">
                    Description
                    <br/>
                    <br/>
                    <b>email:</b> '.$emailclient.'
                    <br/>
                    <b>name:</b> '.$clientname.'
                    <br/>
                    <b>telefon</b> '.$phonenumber.'
                    <br/>
                    <b>localisation</b> '.$localisation.'
                    <br/>
                    <b>Description</b> Description
                    <br/>
                    <b>Description:</b> Description
                    <br/>
                    <b>Description:</b> <b style="color:red;">Description</b>
                    <br/>
                    <b>Uwagi:</b>Description
                    <br/>
                    


            <BR><B>Wiadomość generowana automatycznie.</B></FONT> 
            </DIV></BODY></HTML>
 ';
            
$od='From: konfigurator_test@alarm-concept.pl'.PHP_EOL;
$od .="MIME-Version: 1.0".PHP_EOL;
$od .="Content-type: text/html; charset=utf-8".PHP_EOL;

$respon = mail($emailclient,$temat,$tresc,$od);
if($respon){
	mail('m.grzegrzolka@op.pl',$temat,$tresc,$od);
}
echo $respon;
?>