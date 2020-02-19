<?php
ini_set("display_errors","on"); 
// Include the main TCPDF library (search for installation path).
require dirname(__FILE__).'/../tcpdf.php';

require dirname(__FILE__).'/../../calc_init.php';

function add_row_el($id, $name, $amount, $value){

	$tabela='<tr style="color:black; ">';
	$tabela.='<td style="" width="50px;" style="background-color:white;" valign="middle">'.$id.'</td>';
	$tabela.='<td style="background-color:white;text-align:left;" valign="middle">'.$name.'</td>';
	$tabela.='<td style="background-color:white;" valign="middle">'.$amount.'</td>';
	$tabela.='<td style="background-color:white;text-align:right;" valign="middle" height="25px">'.$value.' zł</td>';
	$tabela.='</tr>';
	
	return $tabela;
}

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ALARM CONCEPT');
$pdf->SetTitle('Konfiguracja systemu SSWIN');
$pdf->SetSubject('');
$pdf->SetKeywords('');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(10, 10, 10);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 10);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}



// set font
//$pdf->SetFont('', '', 12);

// add a page
$pdf->AddPage();

// set cell padding
//$pdf->setCellPaddings(1, 1, 1, 1);

// set font

// add a page

// add a page

// add a page



$pdf->SetFont('freesans', '', 10);
$pdf->setCellMargins(0, 0, 0, 0);



$tabela='<table cellspacing="0" style="background-color:black;">';

$tabela.='<tr style="color:black; ">';
$tabela.='<td style="" width="130px;" style="background-color:white;"><img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/cropped-Rysunek1111-3.png" width="300px;" /></td>';
$tabela.='<td style="background-color:white;"></td>';
$tabela.='<td style="background-color:white;text-align:right;" width="300px;">Bolesławiec, '.date('d').'-'.date('m').'-'.date('Y').'</td>';
$tabela.='</tr>';
  
                       
$tabela.='</table><br/><br/><br/><br/><br/><br/>';   

$tabela.='<table><tr><td width="3%;"></td><td><br/><br/><br/><br/><table cellspacing="0"  style="background-color:black;"  >';

$tabela.='<tr style="color:black; ">';

$tabela.='<td style="background-color:white;font-size:12px;text-align:left;padding:15px;" width="630px;border-width: 0px;">Szanowny kliencie,<br/><br/>

Przedstawiamy Ci propozycję instalacji systemu alarmowego według Twoich założeń.<br/>

Zestawienie zawiera wszystkie niezbędne elementy pozwalające na instalację systemu alarmowego w Twoim obiekcie.</td>';

$tabela.='</tr>';
  
                       
$tabela.='</table></td><td width="5%;"></td></tr></table><br/><br/><br/>';  

$tabela.='<table><tr><td width="3%;"></td><td><table align="center"  cellspacing="0" border="1" style="margin-left:50px;background-color:black;" width="70%"  >';

$tabela.='<tr style="color:black; ">';
$tabela.='<td style="" width="50px;" style="background-color:#ccc;">LP</td>';
$tabela.='<td style="background-color:#ccc;" width="400px;">Nazwa/kod produktu</td>';
$tabela.='<td style="background-color:#ccc;" width="60px;">Ilość</td>';
$tabela.='<td style="background-color:#ccc;" width="120px;">Wartość netto</td>';
$tabela.='</tr>';

$inc=1;
if($el_keypad){
	$tabela.=add_row_el($inc++,"Klawiatura",$el_keypad,number_format($val_keypad,2,',',''));
}
if($el_pir){
	$tabela.=add_row_el($inc++,"Czujnik ruchu wewnętrzny",$el_pir,number_format($val_pir,2,',',''));
}
if($el_openk){
	$tabela.=add_row_el($inc++,"Czujnik otwarcia (okna, drzwi)",$el_openk,number_format($val_openk,2,',',''));
}
if($el_gas){
	$tabela.=add_row_el($inc++,"Czujnik gazu",$el_gas,number_format($val_gas,2,',',''));
}
if($el_smoke){
	$tabela.=add_row_el($inc++,"Czujnik dymu",$el_smoke,number_format($val_smoke,2,',',''));
}
if($el_glass){
	$tabela.=add_row_el($inc++,"Czujnik zbicia szyb",$el_glass,number_format($val_glass,2,',',''));
}
if($el_siren){
	$tabela.=add_row_el($inc++,"Sygnalizator",$el_siren,number_format($val_siren,2,',',''));
}
if($el_panic){
	$tabela.=add_row_el($inc++,"Pilot napadowy",$el_panic,number_format($val_panic,2,',',''));
}
if($el_pirout){
	$tabela.=add_row_el($inc++,"Czujnik ruchu zewnętrzny",$el_pirout,number_format($val_pirout,2,',',''));
}





$tabela.='</table></td><td width="5%;"></td></tr></table>';                       
                      

$tabela.='<table><tr><td width="3%;"></td><td><br/><br/><br/><br/><table cellspacing="0"  style="background-color:black;"  >';

$tabela.='<tr style="color:black; ">';

$tabela.='<td style="background-color:white;font-size:12px;text-align:left;padding:15px;" width="630px;border-width: 0px;">Za tak skonfigurowany system alarmowy zapłacisz tylko <b>'.number_format($val_sum,2,',','').'</b> zł Brutto.<br/>

To bardzo dobra cena, za którą zapewnisz bezpieczeństwo sobie i swoim bliskim.</td>';

$tabela.='</tr>';
  
                       
$tabela.='</table></td><td width="5%;"></td></tr></table><br/><br/><br/><br/><br/>';  


$tabela.='<table cellspacing="0" style=""  >';

$tabela.='<tr style="color:black; ">';
$tabela.='<td style="" width="130px;" style="background-color:white;"></td>';
$tabela.='<td style="background-color:white;"></td>';
$tabela.='<td style="background-color:white;text-align:right;" width="280px;"><br/>Zespół Alarm-Concpet</td>';
$tabela.='</tr>';
  
                       
$tabela.='</table><br/><br/><br/><br/><br/><br/><br/>';   


$pdf->writeHTML($tabela, true, false, false, false, '');
//$pdf->AddPage();
$licznik_stron++;
                           
                           
                           
                   
$fileName = time() . '.pdf';
ob_clean();
$pdf->Output(dirname(__FILE__).'/files/' . $fileName, 'F');




//============================================================+
// END OF FILE
//============================================================+
