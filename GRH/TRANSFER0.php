<?php
if($_POST["SERVICE"]!="-1" and $_POST["APARTIR"]!="" )
{
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
//***************************post*************************//$_POST["idg"];
$idstatut=$_POST["idstatut"];
$idg=$_POST["idg"];
$idp=$_POST["idp"];
$date=date("Y-m-d");
$date1=date("Y");
$HEUR=$_POST["HEUR"];
$DATE=$_POST["DATE"];
$NOM=$_POST["NOM"];
$PRENOM=$_POST["PRENOM"];
$GRADE=$_POST["GRADE"];
$service=$_POST["SERVICE0"];
$cause=$_POST["cause"];
$J = substr($_POST["APARTIR"],0,2);
$M = substr($_POST["APARTIR"],3,2);
$A = substr($_POST["APARTIR"],6,4);
$APARTIR=$A."-".$M."-".$J;

//**************************************************************************//
// create new PDF document
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
$pdf->Text(5,60," الرقم:......./".$date1);
//$pdf->Text(35,60,$date1);
$pdf->SetFont('aefurat','', 26);
$pdf->SetXY(15,70);
$pdf->Cell(180,8,"مقرر تحويل",0,1,'C');
$pdf->SetXY(15,90);
$pdf->SetFont('aefurat', '', 16);
$pdf->Cell(180,8,"إن مدير المؤسسة العمومية الإستشفائية بعين وسارة  ",0,1,'C');
$pdf->Text(5,100,"بمقتضى : الأمر رقم 03-06 المؤرخ في 15 يوليو سنة 2006 المتضمن القانون الأساسي العام  ");
$pdf->Text(25,110,"للوظيفة العمومية .");
$pdf->Text(5,120," بمقتضى : المرسوم التنفيذي رقم 140-07 المؤرخ في 19 ماي سنة 2007 المتضمن إنشاء المؤسسات ");
$pdf->Text(25,130,"العمومية الإستشفائية و المؤسسات العمومية للصحة الجوارية و تنظيمها و سيرها.");
$uc=intval($_POST["idstatut"]);
switch($uc)
{
 case '1' ://specialiste
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 394-09  مؤرخ في 24 نوفمبر 2009 ,المتضمن القانون الأساسي   ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك الممارسين الطبيين المختصين  في الصحة العمومية");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}	   
case '2' ://generaliste medecin pharmacien dentiste
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم  393-09  مؤرخ في 24 نوفمبر سنة 2009 ,المتضمن القانون الأساسي   ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك الممارسين الطبيين العامين في الصحة العمومية");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}	    	
case '3' ://paramedicale
		{
		$pdf->Text(5,140," بمقتضى :المرسوم التنفيذي رقم 121-11 مؤرخ في 20 مارس 2011 ,يتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك شبه الطبيين للصحة العمومية .");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}        
case '4' ://psycholgue
		{
		
        $pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 240-09 المؤرخ في 22 يوليو سنة 2009 ,المتضمن القانون للأساسي ");
		$pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك النفسانيين للصحة العمومية ");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}        				
case '5' ://sage femme
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 122-11 المؤرخ في 20 مارس سنة 2011 ,المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفات المنتميات لسلك القابلات في الصحة العمومية");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}				
case '6' ://biologie
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 152-11 المؤرخ  في 3 ابريل سنة 2011  ,المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك البيولوجيين في الصحة العمومية ");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}				
case '7' ://annesthesiste
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 235-11 المؤرخ في 3 يوليو سنة 2011 ، المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك الأعوان الطبيين في التخذير و لإنعاش للصحة العمومية");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}				
case '8' ://corps communs
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 04-08 مؤرخ في يناير سنة 2008 المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين للأسلاك المشتركة في المؤسسات و الإدارات العمومية ");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}				
case '9' ://op
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 05-08 مؤرخ في 19 يناير سنة 2008 المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين للعمال المهنيين و سائقي السيارات و الحجاب  ");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}				
case '10' ://phisi
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 178-10 المؤرخ في 8 يوليو سنة 2010 المتضمن القانون الأساسي ");
        $pdf->Text(25,150," الخاص بالموظفين المنتمين لسلك الفيزيائيين الطبيين في الصحة العمومية ");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}				
case '11' ://idmage
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 126-08 المؤرخ في 19 ابريل سنة 2008 المتعلق بجهاز  ");
        $pdf->Text(25,150,"المساعدة على الإدماج المهني ");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}				
case '12' ://idmage
		{
		$pdf->Text(5,140," بمقتضى : المرسوم الرئاسي رقم 308-07 المؤرخ في 29  سبتمبر سنة 2007 المحدد لكيفيات توظيف");
        $pdf->Text(25,150," الأعوان المتعاقدين و حقوقهم وواجباتهم و العناصرالمشكلة لرواتبهم والقواعد المتعلقة ");
		$pdf->Text(25,160," بتسييرهم و كذا النظام التأديبي المطبق عليهم");
		$pdf->Text(5,170,"-بناء :  ".$cause);
		break;
		}	
case '13' ://idmage
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 161-09 المؤرخ في 02 ماي سنة 2009 ,المتضمن القانون الأساسي ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لسلك متصرفي مصالح الصحة");
		$pdf->Text(5,160,"-بناء :  ".$cause);
		break;
		}	
}
//************************************************************************************************************* 

$pdf->SetFont('aefurat', '', 18);
$pdf->Text(90,180,"يقـــــرر");
$pdf->SetFont('aefurat', '', 16);
//$pdf->Text(5,190,"المادة الأولى :  : تحول السيد(ة) :");
$pdf->Text(5,190,"المادة الأولى : (ت) يحول السيد(ة) :");
$pdf->Text(35,200,"الرتبة:");
$pdf->Text(35,210,"من :");
$pdf->Text(35,220,"الى :");
$pdf->Text(35,230,"ابتداء من :");
$pdf->Text(5,240,"المادة الثانية : تكلف السيدة المديرة الفرعية للموارد البشرية بتنفيذ هذا المقرر.");
$pdf->Text(140,250," عين وسارة في :  ");
//$pdf->Text(175,250,$date);
$pdf->Text(150,260,"  المدير");
$servicenum=$_POST["SERVICE"];
//*********************************DONNES *************************************************************
$db_host="localhost";$db_name="grh"; $db_user="root";$db_pass=""; 
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());  
$db  = mysql_select_db($db_name,$cnx) ;  
mysql_query("SET NAMES 'UTF8' ");
$requete = mysql_query("SELECT ids,servicear as service FROM service where ids=$servicenum" );
 if( $result = mysql_fetch_object( $requete ) )
 {
 $servicef=$result->service;
 }
//******************************************************************************************************

$pdf->SetFont('aefurat','I', 17);
$pdf->SetTextColor(225,0,0);
$pdf->Text(76,190,$NOM." ".$PRENOM);
$pdf->Text(50,200,$GRADE);
$pdf->Text(45,210,$service);
$pdf->Text(45,220,$servicef);
//$pdf->Text(30,170,$cause);
$pdf->Text(58,230,$APARTIR);
// $pdf->Text(100,220,$result2);
//***********************************modification service base de donnes *********************************************//
$db_host="localhost";$db_name="grh"; $db_user="root";$db_pass=""; 
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());  
$db  = mysql_select_db($db_name,$cnx) ;   
$sql = "UPDATE grh SET
	SERVICEAR   = '$servicenum'
	WHERE idp = '$idp'" ;
$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//**********************************registre des changement de service**********************************************

mysql_query("SET NAMES 'UTF8' ");
$sql = "INSERT INTO changeservice (idp,idsa,idsn,cause,date) 
                          VALUES ('".$_POST["idp"]."','".$service."','".$servicef."','".$_POST["cause"]."','".$APARTIR."')";

$requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());







//*****************************************************************************************************************//
//aealarabiya
//almohanad
//dejavusans
//aefurat


$pdf->Output();
}//fin if 
else
{
    $idp=$_POST["idp"];
    //echo("La modification à echouee redirection ver page") ;
	header("Location: ../index.php?uc=TRANSFER&idp=$idp") ;
    mysql_free_result($requete);
}
?>
