<?php
require_once('../tcpdf/GRH1.php');
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->entetetel();
$pdf->titretel($_GET["idp"]);


// $ndp=$_GET["idp"];
// $date=date("Y-m-d");
// $date1=date("Y");

  //requette de recherche si un idrec existe 
  // mysql_query("SET NAMES 'UTF8' ");
  // $sql = "SELECT grh.Nom_Latin,wil.WILAYASAR as wilaya, com.communear as commune,grh.Nomarab as nomar,grade.gradear as grade,grh.Prenom_Arabe as prenomar,grh.Date_Naissance,grh.Commune_Naissancear,grh.Wilaya_Naissancear,grh.Grade_Actuel,grh.Date_Premier_Recrutement
  // FROM grh
  // inner join wil 
  // on grh.Wilaya_Naissancear=wil.idwil
  // inner join com 
  // on grh.Commune_Naissancear=com.idcom
  // inner join grade 
  // on grh.rnvgradear=grade.idg
  // WHERE  idp = '".$ndp."' "; 
  //$sql = "SELECT * FROM grh WHERE  idp = '".$ndp."' "	;
  // $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error()) ;
  // $result = mysql_fetch_array( $requete ); 
  // mysql_free_result($requete);


// $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// $pdf->setPrintHeader(false);
// $pdf->setPrintFooter(false);

// $pdf->SetDisplayMode('fullpage','single');//mode d affichage 
// $pdf->AddPage();
// $pdf->setRTL(true);
// $pdf->SetFont('aefurat', '', 18);
//************************CORPS*************************// 
$pdf->Text(90,10,"برقيــــــة");
$pdf->Text(5,30,"السيد  : مدير المؤسسة العمومية الاستشفائية عين وسارة ");
$pdf->Line(5 ,38 ,203 ,38 );
$pdf->SetFont('aefurat', '', 18);
// $pdf->Text(5,45,"إلــى السيد(ة): ".$result["nomar"]."  ".$result["prenomar"]);
$pdf->Text(5,55,"العنوان:");
$pdf->Line(5 ,70 ,203 ,70 );
$pdf->Text(5,70,"النص:");
$pdf->Text(5,78,"إعـــــــــذار رقم.....");
$pdf->Text(5,90,"يؤسفني أن أخبركم أنكم في غياب غير شرعي عن العمل منذ");
$pdf->Text(155,90,"إلى غاية يومنا هذا ");
$pdf->Text(5,100,"وعليه المطلوب منكم الإلتحاق بمنصب عملكم فور إستلامكم لهذه البرقية .");
$pdf->Text(128,110,"عين وسارة في :  ");
$pdf->Text(150,120," المدير");
//******************************************************//
// $pdf->Text(90,150,"برقيــــــة");
// $pdf->Text(5,170,"السيد  : مدير المؤسسة العمومية الاستشفائية عين وسارة ");
// $pdf->Line(5 ,178 ,203 ,178 );
// $pdf->SetFont('aefurat', '', 18);
// $pdf->Text(5,185,"إلــى السيد(ة): ".$result["nomar"]."  ".$result["prenomar"]);
// $pdf->Text(5,195,"العنوان:");
// $pdf->Line(5 ,210 ,203 ,210 );
// $pdf->Text(5,210,"النص:");
// $pdf->Text(5,220,"إعـــــــــذار رقم.....");
// $pdf->Text(5,230,"يؤسفني أن أخبركم أنكم في غياب غير شرعي عن العمل منذ");
// $pdf->Text(155,230,"إلى غاية يومنا هذا ");
// $pdf->Text(5,240,"وعليه المطلوب منكم الإلتحاق بمنصب عملكم فور إستلامكم لهذه البرقية .");
// $pdf->Text(128,250,"عين وسارة في :  ");
// $pdf->Text(150,260," المدير");





// $pdf->SetTextColor(225,0,0);
// $pdf->SetFont('aefurat','I', 19);

// $pdf->SetTextColor(0,0,0);

// $pdf->Line(5 ,145 ,200 ,145 );

$pdf->Output();

?>
