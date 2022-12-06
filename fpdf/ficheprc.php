
<?php

$conn=mysqli_connect('localhost','root','','final')or die('echec de connection');
require('fpdf.php');
$pdf=new FPDF('p','mm','A4');
$pdf -> AddPage();

$pdf -> Ln(2);
$pdf ->SetFont('Arial','B',8);
$pdf -> Cell(100,10,' Societe National de Commercialisation Et de Distribution des Produits Petroliers',0,1,'C');
$pdf -> Cell(13,10,'NAFTAL S.P.A',0,1,'C');
$pdf -> Cell(31,10,'Branche Commercialisation',0,1,'C');
$pdf ->SetFont('Arial','B',18);
$pdf -> Cell(0,35,'Taux PRC du mois de : Janvier  2022',0,1,'C');
$pdf -> Cell(0,6,'Centres Bitumes',0,1,'C');
$pdf ->SetFont('Arial','B',9);
$pdf -> Cell(56,30,'A Appliquer sur la paie du mois  : Fevrier  2022',0,1,'C');

$pdf -> Ln(1);
$pdf -> Cell(60,10,' Code Centres Operationnels',1,0,'C');
$pdf -> Cell(60,10,'Centres Operationnels',1,0,'C');
$pdf -> Cell(60,10,'Taux PRC',1,0,'C');

$pdf -> Ln();
$pdf ->SetFont('Arial','',12);
$pdf -> Cell(60,10,'460',1,0,'C');
$pdf -> Cell(60,10,'Oum El Bouaghi',1,0,'C');
$pdf -> Cell(60,10,'35%',1,0,'C');

$pdf -> Ln();

$pdf -> Cell(60,10,'560',1,0,'C');
$pdf -> Cell(60,10,'Batna',1,0,'C');
$pdf -> Cell(60,10,'30%',1,0,'C');

$pdf -> Ln();

$pdf -> Cell(60,10,'660',1,0,'C');
$pdf -> Cell(60,10,'Bejaia',1,0,'C');
$pdf -> Cell(60,10,'35%',1,0,'C');

$pdf -> Ln();

$pdf -> Cell(60,10,'860',1,0,'C');
$pdf -> Cell(60,10,'Ain Sefra',1,0,'C');
$pdf -> Cell(60,10,'30%',1,0,'C');

$pdf -> Ln();

$pdf -> Cell(60,10,'1160',1,0,'C');
$pdf -> Cell(60,10,'In Salah',1,0,'C');
$pdf -> Cell(60,10,'33%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'1660',1,0,'C');
$pdf -> Cell(60,10,'Alger',1,0,'C');
$pdf -> Cell(60,10,'35%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'2160',1,0,'C');
$pdf -> Cell(60,10,'Skikda',1,0,'C');
$pdf -> Cell(60,10,'32%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'2360',1,0,'C');
$pdf -> Cell(60,10,'Annaba',1,0,'C');
$pdf -> Cell(60,10,'32%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'2760',1,0,'C');
$pdf -> Cell(60,10,'Mostaganem',1,0,'C');
$pdf -> Cell(60,10,'32%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'3060',1,0,'C');
$pdf -> Cell(60,10,'Touggourt',1,0,'C');
$pdf -> Cell(60,10,'35%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'3160',1,0,'C');
$pdf -> Cell(60,10,'Oran',1,0,'C');
$pdf -> Cell(60,10,'32%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'4460',1,0,'C');
$pdf -> Cell(60,10,'Ain Defla',1,0,'C');
$pdf -> Cell(60,10,'35%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'4760',1,0,'C');
$pdf -> Cell(60,10,'Ghardaia',1,0,'C');
$pdf -> Cell(60,10,'35%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'1960',1,0,'C');
$pdf -> Cell(60,10,'El Eulma',1,0,'C');
$pdf -> Cell(60,10,'35%',1,0,'C');


$pdf -> Ln();

$pdf -> Cell(60,10,'1161',1,0,'C');
$pdf -> Cell(60,10,'Tamanrasset',1,0,'C');
$pdf -> Cell(60,10,'35%',1,0,'C');






$pdf->OutPut();
?>