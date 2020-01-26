<?php
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont('aefurat', '', 11);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 


$pdf->AddPage();
// $pdf->SetLineWidth(0.4);
// $pdf->Rect(5, 5, 200, 285 ,'D');
// $pdf->Rect(5-1, 5-1, 200+2, 285+2 ,'D');




$data = array(
	'HTA' => array(
		'2010' => $_POST["HTA2010"],
		'2011' => $_POST["HTA2011"],
		'2012' => $_POST["HTA2012"],
		'2013' => $_POST["HTA2013"],
		'2014' => $_POST["HTA2014"]
	),
	'DIABETE' => array(
		'2010' => $_POST["DIABETE2010"],
		'2011' => $_POST["DIABETE2011"],
		'2012' => $_POST["DIABETE2012"],
		'2013' => $_POST["DIABETE2013"],
		'2014' => $_POST["DIABETE2014"]
	),
	'PKR' => array(
		'2010' => 0,
		'2011' => 0,
		'2012' => 0,
		'2013' => 0,
		'2014' => 0
	),
	'X' => array(
		'2010' => $_POST["X2010"],
		'2011' => $_POST["X2011"],
		'2012' => $_POST["X2012"],
		'2013' => $_POST["X2013"],
		'2014' => $_POST["X2014"]
	)
	
	
);
$colors = array(
	'HTA' => array(114,171,237),
	'DIABETE' => array(163,36,153),
	'PKR' => array(0,36,153),
	'X' => array(225,36,153)
);


$pdf->LineGraph(0,70,190,100,$data,'VHkBvBgBdB',$colors,1,3);
$pdf->SetFont('aefurat', '', 12);
$pdf->Text(45,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
$pdf->Text(30,15,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
$pdf->Text(55,20,"DIRECTION DE LA SANTE WILAYA DE DJELFA");
$pdf->Text(5,40,"ETABLISSEMENT PUBLIC HOSPITALIER  D'AIN - OUSSERA");
$pdf->Text(5,45,"SERVICE:HEMODIALYSE");
$pdf->Text(5,50,"N°.........../".date("Y"));
$pdf->SetFont('aefurat', '', 14);
$pdf->Text(65,60," Bultin Epidemiologique Instantané IRCT");

$pdf->Text(5,70," 1 - Evolution par année du type de nephropathie  a la mise en dialyse");

$pdf->SetFont('aefurat', '', 14);
$pdf->Text(100,230,"Ain oussera le :".date("d-m-Y"));
		$pdf->Text(120,240,"LE MEDECIN");$session=$_SESSION["USER"];
		$pdf->Text(125,245,"Dr ".$session);
// $pdf->PROTOCOLE($_POST["HVB"],$_POST["HVC"],$_POST["HIV"],$_POST["idp"],$_POST["NOM"],$_POST["PRENOM"],$pdf->dateUS2FR($_POST["DATENAISSANCE"]),$_POST["NBRS"],$pdf->dateUS2FR($_POST["DATE1ERSEA"]),$_POST["GROUPAGE"],$_POST["rhesus"],$_POST["CAUSEMALAD"]);
$pdf->Output();
?>
