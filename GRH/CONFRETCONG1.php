<?php
//conge maladie grh
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
//***************************post*************************//$_POST[""];
// $idp=$_POST["idp"];
$date=date("Y-m-d");
$date1=date("Y");
// $HEUR=$_POST["HEUR"];
// $DATE=$_POST["DATE"];
$NOM=$_POST["NOM"];
$PRENOM=$_POST["PRENOM"];
$GRADE=$_POST["GRADE"];
$cause=$_POST["cause"];
$DATERETOUR=$_POST["DATERETOUR"];
// $DUREE=$_POST["DUREE"];
// $JANNPRI=$_POST["DUREE"];
// $REMPLACANT="***";
// $CC="مرضية";
//DEBUT CONGE
// $J = substr($_POST["DATERETOUR"],0,2);
// $M = substr($_POST["DATERETOUR"],3,2);
// $A = substr($_POST["DATERETOUR"],6,4);
// $DATERETOUR=$A."-".$M."-".$J;

//********************************************************//
// la fonction marche bien 
function datePlus($DATERETOUR,$nbrJours)
{
$timeStamp = strtotime($DATERETOUR); 
$timeStamp += 24 * 60 * 60 * $nbrJours;
$newDate = date("Y-m-d", $timeStamp);
return  $newDate;
}
//$dateDo=;
// $nbrJours =$DUREE ;
// $FIN=datePlus($dateDo,$nbrJours);

//***************************registre conges********************************//
$db_host="localhost";$db_name="grh"; $db_user="root";$db_pass=""; 
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());  
$db  = mysql_select_db($db_name,$cnx) ;  
mysql_query("SET NAMES 'UTF8' ");    
$idon      = $_POST["OK"] ;
$idregcong = $_POST["idregcong"] ;
$sql = "UPDATE regcong SET ok     = '$idon' WHERE idregcong = '$idregcong'" ;
$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$lg['w_page'] = 'page';
$pdf->setLanguageArray($lg);
$pdf->AddPage();
$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 18);
//************************CORPS*************************// 
$pdf->Text(60,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(55,20,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(5,30,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(5,40,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(5,50,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(5,60," الرقم:......./");
$pdf->Text(35,60,$date1);
$pdf->SetFont('aefurat','', 26);
$pdf->SetXY(15,70);
$pdf->Cell(180,8,"مــقرر إستئناف عمل ",0,1,'C');
$pdf->SetXY(15,90);
$pdf->SetFont('aefurat', '', 16);
$pdf->Cell(180,8,"إن مدير المؤسسة العمومية الإستشفائية بعين وسارة  ",0,1,'C');
$pdf->Text(5,100,"بمقتضى : الأمر رقم 03-06 المؤرخ في 15 يوليو سنة 2006 المتضمن القانون الأساسي العام  ");
$pdf->Text(25,110,"للوظيفة العمومية .");
$pdf->Text(5,120,"بمقتضى :القانون رقم 11-83 المؤرخ في 02 يوليو سنة 1983 المتعلق بالتأمينات الإجتماعية ");
$pdf->Text(25,130,"المعدل بالقانون 01-08 المؤرخ في 23 جانفي سنة 2008.");
$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 140-07 المؤرخ في 19 ماي سنة 2007 المتضمن إنشاء المؤسسات ");
$pdf->Text(25,150,"العمومية الإستشفائية و المؤسسات العمومية للصحة الجوارية و تنظيمها و سيرها.");
$pdf->Text(5,160,"نظرا : للتصريح بإستئناف العمل المقدم.");
$pdf->Text(90,170,"يقـــــرر");
$pdf->Text(5,180,"المادة الأولى :  يسمح للسيد(ة) ");
$pdf->Text(35,190,"بصفته (ها) :");
$pdf->Text(35,200,"بإستئناف العمل بعد عطلة ");
$pdf->Text(35,210,"إبتداء من :");
$pdf->Text(5,220,"المادة الثانية : يعاد الراتب الشهري للمعني (ة) إبتداء من :");
$pdf->Text(5,230,"المادة الثالثة : يكلف كل من السادة المديرة الفرعية للموارد البشرية و أمين الخزينة ");
$pdf->Text(34,240,"بعين وسارة بتنفيذ هذا المقرر.");
$pdf->Text(140,250," عين وسارة في :  ");
//$pdf->Text(175,250,$date);
$pdf->Text(150,260,"  المدير");
//*********************************DONNES ****************************///تاريخ بداية العطلة :
$pdf->SetFont('aefurat','I', 17);
$pdf->SetTextColor(225,0,0);
// $pdf->Text(98,180,$DUREE."  "."( يوم  /  أيام )");
$pdf->Text(68,180,$NOM." ".$PRENOM);
$pdf->Text(62,190,$GRADE);
$pdf->Text(88,200,$cause);
$pdf->Text(60,210,$DATERETOUR);
$pdf->Text(120,220,$DATERETOUR);
//********************************************************************************//
//aealarabiya
//almohanad
//dejavusans
//aefurat
$pdf->SetFont('dejavusans','B', 18); //police d ecriture  
$pdf->Output();
?>

