<?php
if($_POST["CATEGORIE"]!="----" and $_POST["ECHELON"]!="----" and $_POST["DUREE"]!="----" )
{
require_once('../tcpdf/GRH1.php');
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
//*************************//
$NDECISION=$_POST["NDECISION"];
//transforme date euro
$J1 = substr($_POST["DATEDECISION"],0,2);
$M1 = substr($_POST["DATEDECISION"],3,2);
$A1 = substr($_POST["DATEDECISION"],6,4);
$DATEDECISION=$A1."-".$M1."-".$J1;
$NPV=$_POST["NPV"];
//transforme date euro
$J2 = substr($_POST["DATEPV"],0,2);
$M2 = substr($_POST["DATEPV"],3,2);
$A2 = substr($_POST["DATEPV"],6,4);
$DATEPV=$A2."-".$M2."-".$J2;
$ANNEEPV=$_POST["ANNEEPV"];
$DUREE=$_POST["DUREE"];
$CATEGORIE=$_POST["CATEGORIE"];
$ECHELON=$_POST["ECHELON"];
//transforme date euro
$J3 = substr($_POST["DATEDEFFET"],0,2);
$M3 = substr($_POST["DATEDEFFET"],3,2);
$A3 = substr($_POST["DATEDEFFET"],6,4);
$DATEDEFFET=$A3."-".$M3."-".$J3;
//**************************************************************************//
// create new PDF document
$pdf = new GRH1('P', 'mm', 'A4', true, 'UTF-8', false);
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
$pdf->Text(5,60," الرقم: ".$NDECISION." / ".$date1);
//$pdf->Text(35,60,$date1);
$pdf->SetFont('aefurat','', 26);
$pdf->SetXY(15,70);
$pdf->Cell(180,8,"مقرر ترقية فى الدرجة",0,1,'C');
$pdf->SetXY(15,90);
$pdf->SetFont('aefurat', '', 16);
$pdf->Cell(180,8,"إن مدير المؤسسة العمومية الإستشفائية بعين وسارة  ",0,1,'C');
$pdf->Text(5,100,"بمقتضى : الأمر رقم 03-06 المؤرخ في 15 يوليو سنة 2006 المتضمن القانون الأساسي العام  ");
$pdf->Text(25,110,"للوظيفة العمومية .");
$pdf->Text(5,120," بمقتضى : المرسوم التنفيذي رقم 140-07 المؤرخ في 19 ماي سنة 2007 المتضمن إنشاء المؤسسات ");
$pdf->Text(25,130,"العمومية الإستشفائية و المؤسسات العمومية للصحة الجوارية و تنظيمها و سيرها.");
$J4 = substr($_POST["RESTE"],0,2);
$M4 = substr($_POST["RESTE"],3,2);
$A4 = substr($_POST["RESTE"],6,4);
$RESTE=$_POST["RESTE"];
$INDICEB=$_POST["INDICEB"];
$INDICEBV=$pdf->gs($CATEGORIE,$INDICEB);
$INDICEE=$pdf->gs($CATEGORIE,$ECHELON) ;
$INDICE=$INDICEBV+$INDICEE;
$uc=intval($_POST["idstatut"]);
switch($uc)
{
 case '1' ://specialiste
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 394-09  مؤرخ في 24 نوفمبر 2009 ,المتضمن القانون الأساسي   ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك الممارسين الطبيين المختصين  في الصحة العمومية");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV."الخاصة برتبة"." ".$GRADE.".");
		break;
		}	   
case '2' ://generaliste medecin pharmacien dentiste
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم  393-09  مؤرخ في 24 نوفمبر سنة 2009 ,المتضمن القانون الأساسي   ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك الممارسين الطبيين العامين في الصحة العمومية");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."  المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "."  ".$ANNEEPV."  "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}	    	
case '3' ://paramedicale
		{
		$pdf->Text(5,140," بمقتضى :المرسوم التنفيذي رقم 121-11 مؤرخ في 20 مارس 2011 ,يتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك شبه الطبيين للصحة العمومية .");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."  المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}        
case '4' ://psycholgue
		{
		
        $pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 240-09 المؤرخ في 22 يوليو سنة 2009 ,المتضمن القانون للأساسي ");
		$pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك النفسانيين للصحة العمومية ");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."  المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}        				
case '5' ://sage femme
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 122-11 المؤرخ في 20 مارس سنة 2011 ,المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفات المنتميات لسلك القابلات في الصحة العمومية");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."  المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}				
case '6' ://biologie
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 152-11 المؤرخ  في 3 ابريل سنة 2011  ,المتضمن القانون الأساسي  ");
        $pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}				
case '7' ://annesthesiste
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 235-11 المؤرخ في 3 يوليو سنة 2011 ، المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لأسلاك الأعوان الطبيين في التخذير و لإنعاش للصحة العمومية");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."  المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}				
case '8' ://corps communs
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 04-08 مؤرخ في يناير سنة 2008 المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين للأسلاك المشتركة في المؤسسات و الإدارات العمومية ");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}				
case '9' ://op
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 05-08 مؤرخ في 19 يناير سنة 2008 المتضمن القانون الأساسي  ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين للعمال المهنيين و سائقي السيارات و الحجاب  ");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."  المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}				
case '10' ://phisi
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 178-10 المؤرخ في 8 يوليو سنة 2010 المتضمن القانون الأساسي ");
        $pdf->Text(25,150," الخاص بالموظفين المنتمين لسلك الفيزيائيين الطبيين في الصحة العمومية ");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}				
case '11' ://idmage
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 126-08 المؤرخ في 19 ابريل سنة 2008 المتعلق بجهاز  ");
        $pdf->Text(25,150,"المساعدة على الإدماج المهني ");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."  المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}				
case '12' ://idmage
		{
		$pdf->Text(5,140," بمقتضى : المرسوم الرئاسي رقم 308-07 المؤرخ في 29  سبتمبر سنة 2007 المحدد لكيفيات توظيف");
        $pdf->Text(25,150," الأعوان المتعاقدين و حقوقهم وواجباتهم و العناصرالمشكلة لرواتبهم والقواعد المتعلقة ");
		$pdf->Text(25,160," بتسييرهم و كذا النظام التأديبي المطبق عليهم");
		$pdf->Text(5,170," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(15,180," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}	
case '13' ://idmage
		{
		$pdf->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 161-09 المؤرخ في 02 ماي سنة 2009 ,المتضمن القانون الأساسي ");
        $pdf->Text(25,150,"الخاص بالموظفين المنتمين لسلك متصرفي مصالح الصحة");
		$pdf->Text(5,160," بموجب :المحضر رقم ".$NPV."المؤرخ في  ".$DATEPV."  المتضمن المصادقة على جدول الترقية ");
		$pdf->Text(25,170," في الدرجات لسنة "." ".$ANNEEPV." "."الخاصة برتبة"." ".$GRADE.".");
		break;
		}	
}
//************************************************************************************************************* 
$pdf->SetFont('aefurat', '', 18);
$pdf->Text(90,$pdf->GetY()+10,"يقـــــرر");
$pdf->SetFont('aefurat', '', 16);
$pdf->Text(5,$pdf->GetY()+10,"المادة الأولى : (ت) يرقى  السيد (ة):");$pdf->Text(77,$pdf->GetY(),$NOM." ".$PRENOM);
$pdf->Text(35,$pdf->GetY()+10,"الرتبة:");$pdf->Text(50,$pdf->GetY(),$GRADE);
$pdf->SetFont('aefurat','I', 17);
$pdf->SetTextColor(225,0,0);
$pdf->SetTextColor(0,0,0);
$pdf->SetXY(5,$pdf->GetY()+10);
$pdf->Cell(25,8,'المدة',1,1,'C');
$pdf->SetXY(30,$pdf->GetY()-8);
$pdf->Cell(16,8,'الصنف',1,1,'C');
$pdf->SetXY(46,$pdf->GetY()-8);
$pdf->Cell(16,8,'الدرجة',1,1,'C');
$pdf->SetXY(62,$pdf->GetY()-8);
$pdf->Cell(40,8,'الرقم الاستدلالى',1,1,'C');
$pdf->SetXY(102,$pdf->GetY()-8);
$pdf->Cell(30,8,'تاريخ النفاذ',1,1,'C');
$pdf->SetXY(132,$pdf->GetY()-8);
$pdf->Cell(68,8,'الاقدمية المتبقية'.'  '.$ANNEEPV.'/12/31',1,1,'C');
//*********************//
$pdf->SetTextColor(225,0,0);
$pdf->SetXY(5,$pdf->GetY());
$pdf->Cell(25,8,$DUREE,1,1,'C');
$pdf->SetXY(30,$pdf->GetY()-8);
$pdf->Cell(16,8,$CATEGORIE,1,1,'C');
$pdf->SetXY(46,$pdf->GetY()-8);
$pdf->Cell(16,8,$ECHELON,1,1,'C');
$pdf->SetXY(62,$pdf->GetY()-8);
$pdf->Cell(40,8,$INDICE,1,1,'C');
$pdf->SetXY(102,$pdf->GetY()-8);
$pdf->Cell(30,8,$DATEDEFFET,1,1,'C');
$pdf->SetXY(132,$pdf->GetY()-8);
$pdf->Cell(24,8,$A4." سنة ",1,1,'C');
$pdf->SetXY(156,$pdf->GetY()-8);
$pdf->Cell(22,8,$M4." شهر ",1,1,'C');
$pdf->SetXY(178,$pdf->GetY()-8);
$pdf->Cell(22,8,$J4." يوم ",1,1,'C');
$pdf->SetTextColor(0,0,0);
$pdf->Text(5,$pdf->GetY()+4,"المادة الثانية : تكلف السيدة المديرة الفرعية للموارد البشرية و أمين خزينة المؤسسة العمومية ");
$pdf->Text(25,$pdf->GetY()+8," الإستشفائية بعين وسارة بتنفيذ هذا المقرر.");
$pdf->Text(140,$pdf->GetY()+8," عين وسارة في : ".$DATEDECISION);
$pdf->Text(150,$pdf->GetY()+8,"  المدير");
//********************************************//
// la fonction marche bien 
function datePlus($dateDo,$nbrJours)
{$timeStamp = strtotime($dateDo); 
$timeStamp += 24 * 60 * 60 * $nbrJours;
$newDate = date("Y-m-d", $timeStamp);
return  $newDate;
}
$dateDo=$DATEDEFFET;
$nbrJours =912 ;
$PREVISION=datePlus($dateDo,$nbrJours);
$RELIQUAT=$A4."-".$M4."-".$J4;
//***********************************modification service base de donnes *********************************************//
$db_host="localhost";$db_name="grh"; $db_user="root";$db_pass=""; 
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());  
$db  = mysql_select_db($db_name,$cnx) ;   
mysql_query("SET NAMES 'UTF8' ");
$sql = "UPDATE grh SET
	NDECISION      = '$NDECISION',
    DATEDECISION   = '$DATEDECISION',
    NPV            = '$NPV',
    DATEPV         = '$DATEPV',
    ANNEEPV        = '$ANNEEPV',
    DUREE          = '$DUREE',
    CATEGORIE      = '$CATEGORIE',
    ECHELON        = '$ECHELON',
    DATEDEFFET     = '$DATEDEFFET', 
	INDICEBV       = '$INDICEBV',
	INDICEE        = '$INDICEE',
	INDICE         = '$INDICE',
	PREVISION      = '$PREVISION',	
	RELIQUAT       = '$RELIQUAT'	
	WHERE idp = '$idp'" ;	
$requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
$pdf->Output();
}//fin if 
else
{
$idp=$_POST["idp"];
header("Location: ../index.php?uc=AVANCE&idp=$idp") ;   
}
?>
