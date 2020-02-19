<?php
require 'calc_init.php';
require 'email_permissions.php';
$confromcust = array("emailclient"=>$emailclient,"phonenumber"=>$phonenumber,"clientname"=>$clientname,"localisation"=>$localisation,"val_sum"=>$val_sum);
//include phpmail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



include 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



require 'tcpdf/examples/gen_pdf_zam.php';


$email_11=$emailclient;
//echo $email_11;
if (file_exists(dirname(__FILE__).'/tcpdf/examples/files/' . $fileName)) {
        if (!empty($email_11)) {
			
            $status = sendCompanyEmail($fileName, $email_11,$confromcust ,$email_permissions);
			echo  $status;
            //return $status;   
        } else {
			
            return false;
        }
    } else {
		
        return false;
    }



function sendReceiptEmail($fileName, $mailto, $email_permissions)
{
    $file = dirname(__FILE__).'/tcpdf/examples/files/' . $fileName;
    date_default_timezone_set('Europe/Berlin');
	$mail = new PHPMailer(true);


    //require __DIR__.'/../libraries/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
	
    //$mail->SMTPDebug =  SMTP::DEBUG_SERVER;  
	$mail->SMTPDebug =  0;  
    $mail->Debugoutput = 'html';
	
    $mail->IsSMTP();
    $mail->Host = "alarm-concept.pl";
    $mail->Port = 587;
	$mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
	$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
    $mail->Username = $email_permissions['username'];
    $mail->Password = $email_permissions['password'];
    $mail->setFrom('konfigurator@alarm-concept.pl', 'Alarm-Concept.pl');
    //$mail->addReplyTo('info@xxx.com');
    $mail->addAddress($mailto);
    $mail->Subject = 'Twoja konfiguracja systemu alarmowego.';
    $mail->Body = 'Szanowny kliencie,

Jest nam niezmiernie miło wiedząc, że skorzystałeś z naszego kalkulatora w celu przygotowania dla Ciebie propozycji instalacji alarmu.
W załączniku dostałeś wyliczenia według Twoich założeń.
Przejrzyj spokojnie przygotowane zestawienie a w razie niejasności skontaktuj się z nami, chętnie wszystko wyjaśnimy.

Z wyrazami szacunku zespół Alarm – Concept.

 
Informacje zawarte w przedstawionej propozycji nie są prawnie wiążące i nie stanowią oferty handlowej, w tym w rozumieniu art. 66 par.1 Kodeksu Cywilnego.';

    $mail->addAttachment($file);
	
    //send the message, check for errors
    if (!$mail->send()) {
        return false;
    } else {
        $file = dirname(__FILE__).'/tcpdf/examples/files/' . $fileName;
        if (file_exists($file)) {
            unlink($file);
        }
        return true;
    }
	
}
function sendCompanyEmail($fileName, $mailto,$confromcust , $email_permissions)
{
    $file = dirname(__FILE__).'/tcpdf/examples/files/' . $fileName;
    date_default_timezone_set('Europe/Berlin');
	$mail = new PHPMailer(true);


    //require __DIR__.'/../libraries/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
	
    //$mail->SMTPDebug =  SMTP::DEBUG_SERVER;  
	$mail->SMTPDebug =  0;  
    $mail->Debugoutput = 'html';
	
    $mail->IsSMTP();
    $mail->Host = "alarm-concept.pl";
    $mail->Port = 587;
	$mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
	$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
    $mail->Username = $email_permissions['username'];
    $mail->Password = $email_permissions['password'];
    $mail->setFrom('konfigurator@alarm-concept.pl', 'Alarm-Concept.pl');
    //$mail->addReplyTo('info@xxx.com');
    $mail->addAddress('m.grzegrzolka@op.pl');
    $mail->Subject = 'Konfigurator - zgłoszenie.';
    $mail->Body = 'Wiadomość generowana automatycznie.<br/><br/><br/>
	Imię/nazwa     :  '.$confromcust["clientname"].'<br/>
	Miejscowość    :  '.$confromcust["localisation"].'<br/>
	Telefon		   :  '.$confromcust["phonenumber"].'<br/>
	Adres email	   :  '.$confromcust["emailclient"].'<br/>
	Wartość brutto :  '.$confromcust["val_sum"].'zł brutto<br/>';

    $mail->addAttachment($file);
	
    //send the message, check for errors
    if (!$mail->send()) {
        return false;
    } else {
        sendReceiptEmail($fileName, $mailto , $email_permissions);
        return true;
    }
	
}
/*
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
<<<<<<< HEAD

*/


?>