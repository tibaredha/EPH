<?php
require_once('../tcpdf/PAIE.php');
//**********************************************************************************************
//$date=date("d-m-y");
$pdf=new PAIE('L','mm','A4');
$pdf->setRTL(true);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 12);


// $pdf->AddPage();
// $C="hc1";
// $pdf->entete();
// $pdf->titre($C);
// $pdf->entetetableau($C);
// $resultat=$pdf->connection ($C);
// $pdf->row($resultat);


// $pdf->AddPage();
// $C="hc2";
// $pdf->entete();
// $pdf->titre($C);
// $pdf->entetetableau($C);
// $resultat=$pdf->connection ($C);
// $pdf->row($resultat);

// $pdf->AddPage();
// $C="17";
// $pdf->entete();
// $pdf->titre($C);
// $pdf->entetetableau($C);
// $resultat=$pdf->connection ($C);
// $pdf->row($resultat);

$pdf->AddPage();
$pdf->entete();$c=16;
$pdf->titre();
$pdf->entetetableau($c);
$resultat=$pdf->connection ($c);
$pdf->row($resultat);	 

// $pdf->AddPage();
// $pdf->entete();$c=15;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);  

// $pdf->AddPage();
// $pdf->entete();$c=14;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);		

// $pdf->AddPage();
// $pdf->entete();$c=13;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);	

// $pdf->AddPage();
// $pdf->entete();$c=12;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);	

// $pdf->AddPage();
// $pdf->entete();$c=11;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);		 

// $pdf->AddPage();
// $pdf->entete();$c=10;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);	  

// $pdf->AddPage();
// $pdf->entete();$c=9;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);

// $pdf->AddPage();
// $pdf->entete();$c=8;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);								  

// $pdf->AddPage();
// $pdf->entete();$c=7;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);

// $pdf->AddPage();
// $pdf->entete();$c=6;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);	

// $pdf->AddPage();
// $pdf->entete();$c=5;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);

// $pdf->AddPage();
// $pdf->entete();$c=4;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);

// $pdf->AddPage();
// $pdf->entete();$c=3;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);

// $pdf->AddPage();
// $pdf->entete();$c=2;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);

// $pdf->AddPage();
// $pdf->entete();$c=1;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat); 


// $pdf->AddPage();
// $pdf->entete();$c=0;$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat); 

// $pdf->AddPage();
// $pdf->entete();$c="";$pdf->titre($c);
// $pdf->entetetableau($c);
// $resultat=$pdf->connection ($c);
// $pdf->row($resultat);
$pdf->Output();
?>


