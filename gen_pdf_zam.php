<?php
ini_set("display_errors","on"); 
// Include the main TCPDF library (search for installation path).
require dirname(__FILE__).'/../tcpdf.php';

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



$tabela='<table cellspacing="0" style="background-color:black;"  >';

$tabela.='<tr style="color:black; ">';
$tabela.='<td style="" width="130px;" style="background-color:white;"><img src="http://mkumosz2.vot.pl/wp-content/uploads/2020/01/cropped-Rysunek1111-3.png" width="110px;" /></td>';
$tabela.='<td style="background-color:white;">PIAST PATROL Sp. z o.o.<br>ul. Jaworzyńska 67<br/>59-220 Legnica<br/>NIP: 691-249-73-35</td>';
$tabela.='<td style="background-color:white;text-align:right;" width="300px;">Legnica, 1212</td>';
$tabela.='</tr>';
  
                       
$tabela.='</table><br/><br/><br/><br/><br/><br/><br/>';   

$tabela.='<table cellspacing="0" style=""  >';

$tabela.='<tr style="color:black; ">';

$tabela.='<td style="background-color:white;font-size:25px;text-align:center;">ZAMÓWIENIE NR 11</td>';

$tabela.='</tr>';
$tabela.='<tr style="color:black; ">';

$tabela.='<td style="background-color:white;font-size:12px;text-align:center;">Zlecenie:11</td>';

$tabela.='</tr>';
  
                       
$tabela.='</table><br/><br/><br/><br/>';  

$tabela.='<table><tr><td width="3%;"></td><td><table align="center"  cellspacing="0" border="1" style="margin-left:50px;background-color:black;" width="70%"  >';

$tabela.='<tr style="color:black; ">';
$tabela.='<td style="" width="50px;" style="background-color:#ccc;">LP</td>';
$tabela.='<td style="background-color:#ccc;" width="400px;">Nazwa/kod produktu</td>';
$tabela.='<td style="background-color:#ccc;" width="30px;">Ilość</td>';
$tabela.='<td style="background-color:#ccc;" width="150px;">Uwagi</td>';
$tabela.='</tr>';




$tabela.='<tr style="color:black; ">';
$tabela.='<td style="" width="50px;" style="background-color:white;" valign="middle">1</td>';
$tabela.='<td style="background-color:white;text-align:left;" valign="middle">2</td>';
$tabela.='<td style="background-color:white;" valign="middle">3</td>';
$tabela.='<td style="background-color:white;text-align:left;" valign="middle">2</td>';
$tabela.='</tr>';



$tabela.='</table></td><td width="5%;"></td></tr></table>';                       
                      

$tabela.='<table><tr><td width="3%;"></td><td><br/><br/><br/>Uwagi:<br/><table cellspacing="0" border="1" style="background-color:black;"  >';

$tabela.='<tr style="color:black; ">';

$tabela.='<td style="background-color:white;font-size:12px;text-align:left;padding:15px;" width="630px;border-width: 1px;
border-style: solid;
border-color: red;">1212</td>';

$tabela.='</tr>';
  
                       
$tabela.='</table></td><td width="5%;"></td></tr></table><br/><br/><br/><br/><br/>';  


$tabela.='<br/><br/><table cellspacing="0" style=""  >';

$tabela.='<tr style="color:black; ">';
$tabela.='<td style="" width="130px;" style="background-color:white;"></td>';
$tabela.='<td style="background-color:white;"></td>';
$tabela.='<td style="background-color:white;text-align:right;" width="280px;"><br/>'.$w_zam[3].' '.$w_zam[4].'</td>';
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
