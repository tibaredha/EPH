<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
//***************************post*************************//
$ndp=$_GET["idregcong"];
$dateent=$_GET["date"];
$date=date("Y-m-d");
$date1=date("Y");
//**********************************connection sql*******************************///
  $db_host="localhost";
  $db_name="grh"; 
  $db_user="root";
  $db_pass="";
  //la connection a la base de donnes 
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  //sélection de la base de données
  $db  = mysql_select_db($db_name,$cnx) ;
//******************************************************************************************************//
  $IDRECmg ;
  //requette de recherche si un idrec existe 
  mysql_query("SET NAMES 'UTF8' ");
  $sql = "SELECT grh.Nomarab as nomar,service.SERVICEAR as service,grh.idp as idp,grh.Prenom_Arabe as prenomar,grh.Grade_Actuel,grade.gradear as grade,regcong.idregcong as idregcong ,regcong.datesor as datesor ,regcong.dateent as dateent,regcong.cause as  cause,regcong.remplacant as remplacant ,regcong.duree as duree
  FROM grh
  inner join regcong 
  on grh.idp=regcong.idp
  
  inner join service 
  on grh.SERVICEAR=service.ids
  
  inner join grade 
  on grh.rnvgradear=grade.idg
  where idregcong = '$ndp'
  order by datesor "; 
  
  //$sql = "SELECT *  FROM regcong WHERE  idregcong = '".$ndp."' "; 
 
  
  $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error()) ;
  $result = mysql_fetch_array( $requete ); 
  mysql_free_result($requete);
//********************************************************//
// create new PDF document
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
//$lg['w_page'] = 'page';
//$pdf->setLanguageArray($lg);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 18);
//************************CORPS*************************// 
$pdf->Text(60,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(55,20,"وزارة الصحة و السكان و إصلاح المستشفيات");
//$pdf->Text(5,30,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(5,30,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(5,40,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(5,50," الرقم:......./");
$pdf->Text(35,50,$date1);
$pdf->SetFont('aefurat', '', 20);
$pdf->Text(85,55,"إلــى السيد(ة): ".$result["nomar"]."  ".$result["prenomar"]);
$pdf->Text(5,65,"الرتبة :".$result["grade"]);
$pdf->Text(75,78,"إعـــــــــذار رقم.....");
$pdf->SetFont('aefurat', '', 18);
$pdf->Text(5,90,"إنكم في حالة غياب غير شرعي ابتداءا من تاريخ "."   ".$dateent);
$pdf->Text(155,90,"إلى غاية يومنا هذا ");
$pdf->Text(5,100,"لذا نطلب منكم الالتحاق فورا بمنصب عملكم مع تبرير هذا الغياب.");
$pdf->Text(128,110,"عين وسارة في :  ");
$pdf->Text(150,120," المدير");

//*********************************DONNES ****************************///
//aealarabiya
//aefurat
//dejavusans
$pdf->SetTextColor(225,0,0);
$pdf->SetFont('aefurat','I', 19);
$pdf->Text(165,110,$date);
$pdf->SetTextColor(0,0,0);
//********************************2eme partie*************************//
$pdf->Line(5 ,145 ,200 ,145 );
$pdf->Text(60,150,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(55,160,"وزارة الصحة و السكان و إصلاح المستشفيات");
//$pdf->Text(5,170,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(5,170,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(5,180,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(5,190," الرقم:......./");
$pdf->Text(35,190,$date1);
$pdf->SetFont('aefurat', '', 20);
$pdf->Text(85,195,"إلــى السيد(ة): ".$result["nomar"]."  ".$result["prenomar"]);
$pdf->Text(5,205,"الرتبة :  ".$result["grade"]);
$pdf->Text(75,218,"إعـــــــــذار رقم.....");
$pdf->SetFont('aefurat', '', 18);
$pdf->Text(5,230,"إنكم في حالة غياب غير شرعي ابتداءا من تاريخ"."   ".$dateent);
$pdf->Text(155,230,"إلى غاية يومنا هذا ");
$pdf->Text(5,240,"لذا نطلب منكم الالتحاق فورا بمنصب عملكم مع تبرير هذا الغياب.");
$pdf->Text(128,250,"عين وسارة في :  ");
$pdf->Text(150,260," المدير");

//*********************************DONNES ****************************///
//aealarabiya
//aefurat
//dejavusans
$pdf->SetTextColor(225,0,0);
$pdf->SetFont('aefurat','I', 19);
$pdf->Text(165,250,$date);
$pdf->Output();

?>
