<?php
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A5', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);


$pdf->fichemedicale($_GET["idp"]);

$IDP=$_GET["idp"];
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM tpat where IDP=$IDP";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
while($row=mysql_fetch_object($requete))
{
$pdf->SetFont('aefurat', '', 14);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
$pdf->SetLineWidth(0.4);
$pdf->Rect(78, 1, 70, 100 ,'D');
$pdf->Rect(1, 1, 70, 100 ,'D');
$pdf->SetFont('aefurat','B',6);
$pdf->Text(82,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
$pdf->Text(95,10,"DSP DE LA WILAYA DE DJELFA");
$pdf->Text(85,15,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA");
$pdf->Line(80 ,23 ,145 ,23 );
$pdf->SetFont('aefurat','B',14);
$pdf->Text(90,48,"FICHE MEDICALE");
$pdf->SetFont('aefurat','B',10);
$pdf->Text(80,60,"SERVICE D'HOSPITALISATION");
$pdf->Text(80,65,$pdf->nbrtostring("grh","service","ids",$row->SERVICEHOSP,"servicefr"));
$pdf->Text(80,85,"GROUPAGE SANGUIN");
$pdf->Text(80,90,"..................");
$pdf->AddPage('p','A5');
$pdf->SetFont('aefurat','B',10);
$pdf->Rect(1, 1, 70, 100,'D');
$pdf->Rect(78, 1, 70, 100,'D');
$pdf->Text(4,10,"NOM : ".$row->NOM);
$pdf->Text(4,20,"PRENOM : ".$row->PRENOM);
$pdf->Text(4,30,"DATE ENTREE : ".$row->DATE);
$pdf->Text(4,40,"DATE SORTIE :  ".$pdf->dateUS2FR($row->DATESORTIE));
$pdf->Text(4,50,"DGC : ".$row->DGC);
$pdf->Text(80,10,"BILANS : ");
$pdf->Text(80,30,"EXAMENS : ");
$pdf->Text(80,50,"RDV : A partir du  ".$pdf->dateUS2FR($pdf->datePlus($row->DATESORTIE,30))." a 08 H");
$pdf->Text(80,55,"POLYCLINIQUE GHAZAL AMEUR");
$pdf->Text(110,80,"LE MEDECIN");
$pdf->Text(113,85,"Dr ".$_SESSION["USER"]);



}
$pdf->Output();
?>
