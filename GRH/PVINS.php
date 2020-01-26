<?php
require_once('../tcpdf/PVINS.php');
//***************************post*************************//
if
($_POST["DATEINS"]!=""
and $_POST["NOM"]!=""
and $_POST["PRENOM"]!=""
and $_POST["FONCTION"]!=""
and $_POST["GRADE"]!=""
and $_POST["directeur"]!=""
)
{
$NOM=$_POST["NOM"];
$PRENOM=$_POST["PRENOM"];
$GRADE=$_POST["GRADE"];
$FONCTION=$_POST["FONCTION"];
$DATEINS=$_POST["DATEINS"];
$directeur=$_POST["directeur"];
$pdf = new PVINS('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->entete();
$pdf->titre($directeur,$NOM,$PRENOM,$GRADE,$FONCTION,$DATEINS);
$pdf->Output();
}//fin if 
else
{
    
    //echo("La modification à echouee redirection ver page") ;
	header("Location: ../index.php?uc=PVINS0") ;
   
}       	
?>
