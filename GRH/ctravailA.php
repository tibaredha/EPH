<?php
require_once('../tcpdf/GRH1.php');
//***************************post*************************//
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entete();
$pdf->titrec($_GET["idp"]);
$pdf->Output();
//******************************************************************************************************//
  // $IDRECmg ;
  //requette de recherche si un idrec existe 
  // mysql_query("SET NAMES 'UTF8' ");
  // $sql = "SELECT causedepart.causear,grh.Date_Cessation,grh.FILIERE,grh.DATEARRIVE,grh.Motif_Cessation,grh.Nom_Latin,wil.WILAYASAR as wilaya, com.communear as commune,grh.Nomarab as nomar,grade.gradear as grade,grh.Prenom_Arabe as prenomar,grh.Date_Naissance,grh.Commune_Naissancear,grh.Wilaya_Naissancear,grh.Grade_Actuel,grh.Date_Premier_Recrutement
  // FROM grh
  // inner join wil 
  // on grh.Wilaya_Naissancear=wil.idwil
  // inner join com 
  // on grh.Commune_Naissancear=com.idcom
  // inner join grade 
  // on grh.rnvgradear=grade.idg
  // inner join causedepart 
  // on causedepart.idcause=grh.Motif_Cessation
  // WHERE  idp = '".$ndp."' "; 
  //$sql = "SELECT * FROM grh WHERE  idp = '".$ndp."' "	;
  // $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error()) ;
  // $result = mysql_fetch_array( $requete ); 
  // mysql_free_result($requete);
//*********************************DONNES ****************************///
//aealarabiya
//aefurat
//dejavusans
//REGLAGE AFFICHAGE DE LA DATE NAISSANCE ET DATE RECRUTEMENT
// $J = substr($result["Date_Cessation"],0,2);
// $M = substr($result["Date_Cessation"],3,2);
// $A = substr($result["Date_Cessation"],6,4);


// $Date_Cessation=$A."-".$M."-".$J;
///////////////////////////////////////////////////////////
// $pdf->SetTextColor(225,0,0);
// $pdf->SetFont('aefurat','I', 19);
// $pdf->Text(165,220,$date);
// $pdf->Text(120,120,$result["nomar"]);
// $pdf->Text(25,120,$result["prenomar"]);
// $pdf->Text(50,130,$result["Date_Naissance"]);
// $pdf->Text(110,130,$result["commune"]);
// $pdf->Text(165,130,$result["wilaya"]);
// $pdf->Text(30,170,$result["grade"]);$pdf->Text(88,170,$result["FILIERE"]);
// $pdf->Text(26,180,$result["DATEARRIVE"]);
// $pdf->Text(120,180,"("."تاريخ ال".$result["causear"].")");
// $pdf->Text(87,180,$Date_Cessation);

// $pdf->Output();

?>
