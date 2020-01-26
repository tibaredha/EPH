<?php
if($_POST["NOM"]!="" and $_POST["NOM"]!="" )
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
$ND=$_POST["ND"];
$DD=$_POST["DD"];
$DATO=$_POST["DATO"];
$DDT=$_POST["DDT"];
$DATA=$_POST["DATA"];
$ETAO=$_POST["ETAO"];//NUMERO POSTE SUPERIEUR
$ETAA=$_POST["ETAA"];

$cause="";
function changerdate($dx)
{
$J = substr($dx,0,2);
$M = substr($dx,3,2);
$A = substr($dx,6,4);
$APARTIR=$A."-".$M."-".$J;
return $APARTIR;
}
//NUMERO POST SUP TO TITRE DU POSTE pour regler le probleme de l affichage 
  $db_host="localhost";
  $db_name="grh"; 
  $db_user="root";
  $db_pass="";
  //la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  //sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
  $db  = mysql_select_db($db_name,$cnx) ;
  mysql_query("SET NAMES 'UTF8' ");
  $query = "SELECT * FROM postesup where idpostesup=$ETAO";
  $resultat=mysql_query($query);
  $result = mysql_fetch_array( $resultat ) ;
  $postesuperieure=$result["postesupar"];
  $niveau=$result["niveau"];
  $indice=$result["indice"];
  mysql_free_result($resultat); 
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
$pdf->SetFont('aefurat', '', 14);
//************************CORPS*************************// 
$pdf->Text(60,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(55,18,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(5,26,"مديرية الصحة و السكان لولاية الجلفة");
$pdf->Text(5,34,"المؤسسة العمومية الاستشفائية عين وسارة");
//$pdf->Text(5,42,"المديرية الفرعية للموارد البشرية ");
$pdf->Text(5,42," الرقم:......./".$date1);
$pdf->SetFont('aefurat', 'B', 18);
$pdf->Text(72,$pdf->GetY()+4,"مقرر تعين في منصب عالي ");$pdf->SetFont('aefurat', '', 14);
$pdf->Text(60,$pdf->GetY()+10,"إن مدير المؤسسة العمومية الإستشفائية بعين وسارة  ");
$pdf->Text(5,$pdf->GetY()+7,"بمقتضى : الأمر رقم 03-06 المؤرخ في 15 يوليو سنة 2006 المتضمن القانون الأساسي العام  للوظيفة العمومية . ");


$pdf->Text(5,$pdf->GetY()+7,"بمقتضى : المرسوم الرئاسي رقم 304-07 المؤرخ في 17 رمضان عام 1428 الموافق 29 سبتمبر سنة 2007 ");
$pdf->Text(22,$pdf->GetY()+7,"الذي يحدد الشبكة الاستدلالية لمرتبات الموظفين و نظام دفع رواتبهم .");

$pdf->Text(5,$pdf->GetY()+7,"بمقتضى :المرسوم الرئاسي رقم 307-07 المؤرخ في 17 رمضان عام 1428 الموافق 29 سبتمبر سنة 2007");
$pdf->Text(22,$pdf->GetY()+7,"الذي يحدد كيفيات منح الزيادة الإستدلالية لشلغلي المناصب العليا في المؤسسات و الإدارات العمومية .");


$pdf->Text(5,$pdf->GetY()+7,"بمقتضى : المرسوم التنفيذي رقم 99-90 المؤرخ في أول رمضان عام 1410 الموافق 27 مارس سنة 1990  ");
$pdf->Text(21,$pdf->GetY()+7," المتعلق  بسلطة التعيين و التسيير الإداري ,بالنسبة للموظفين و أعوان الإدارة المركزية و الولايات ");
$pdf->Text(21,$pdf->GetY()+7,"  و البلديات و المؤسسات العمومية ذات الطابع الإداري .");
$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 140-07 المؤرخ في 19 ماي سنة 2007 المتضمن إنشاء المؤسسات ");
$pdf->Text(25,$pdf->GetY()+7,"العمومية الإستشفائية و المؤسسات العمومية للصحة الجوارية و تنظيمها و سيرها.");
$uc=intval($_POST["idstatut"]);$H1=138;$H2=146;
switch($uc)
{
 case '1' ://specialiste
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 394-09  مؤرخ في 24 نوفمبر 2009 ,المتضمن القانون الأساسي   ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين لأسلاك الممارسين الطبيين المختصين  في الصحة العمومية");
		break;
		}	   
case '2' ://generaliste medecin pharmacien dentiste
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم  393-09  مؤرخ في 24 نوفمبر سنة 2009 ,المتضمن القانون الأساسي   ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين لأسلاك الممارسين الطبيين العامين في الصحة العمومية");
		break;
		}	    	
case '3' ://paramedicale
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى :المرسوم التنفيذي رقم 121-11 مؤرخ في 20 مارس 2011 ,يتضمن القانون الأساسي  ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين لأسلاك شبه الطبيين للصحة العمومية .");
		break;
		}        
case '4' ://psycholgue
		{
        $pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 240-09 المؤرخ في 22 يوليو سنة 2009 ,المتضمن القانون للأساسي ");
		$pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين لأسلاك النفسانيين للصحة العمومية ");
		break;
		}        				
case '5' ://sage femme
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 122-11 المؤرخ في 20 مارس سنة 2011 ,المتضمن القانون الأساسي  ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفات المنتميات لسلك القابلات في الصحة العمومية");
		break;
		}				
case '6' ://biologie
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 152-11 المؤرخ  في 3 ابريل سنة 2011  ,المتضمن القانون الأساسي  ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين لأسلاك البيولوجيين في الصحة العمومية ");
		break;
		}				
case '7' ://annesthesiste
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 235-11 المؤرخ في 3 يوليو سنة 2011 ، المتضمن القانون الأساسي  ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين لأسلاك الأعوان الطبيين في التخذير و لإنعاش للصحة العمومية");
		break;
		}				
case '8' ://corps communs
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 04-08 مؤرخ في يناير سنة 2008 المتضمن القانون الأساسي  ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين للأسلاك المشتركة في المؤسسات و الإدارات العمومية ");
		break;
		}				
case '9' ://op
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 05-08 مؤرخ في 19 يناير سنة 2008 المتضمن القانون الأساسي  ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين للعمال المهنيين و سائقي السيارات و الحجاب  ");
		break;
		}				
case '10' ://phisi
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 178-10 المؤرخ في 8 يوليو سنة 2010 المتضمن القانون الأساسي ");
        $pdf->Text(25,$pdf->GetY()+7," الخاص بالموظفين المنتمين لسلك الفيزيائيين الطبيين في الصحة العمومية ");
		break;
		}				
case '11' ://idmage
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 126-08 المؤرخ في 19 ابريل سنة 2008 المتعلق بجهاز  ");
        $pdf->Text(25,$pdf->GetY()+7,"المساعدة على الإدماج المهني ");
		break;
		}				
case '12' ://idmage
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم الرئاسي رقم 308-07 المؤرخ في 29  سبتمبر سنة 2007 المحدد لكيفيات توظيف");
        $pdf->Text(25,$pdf->GetY()+7," الأعوان المتعاقدين و حقوقهم وواجباتهم و العناصرالمشكلة لرواتبهم والقواعد المتعلقة ");
		$pdf->Text(25,$pdf->GetY()+7," بتسييرهم و كذا النظام التأديبي المطبق عليهم");
		break;
		}	
case '13' ://idmage
		{
		$pdf->Text(5,$pdf->GetY()+7," بمقتضى : المرسوم التنفيذي رقم 161-09 المؤرخ في 02 ماي سنة 2009 ,المتضمن القانون الأساسي ");
        $pdf->Text(25,$pdf->GetY()+7,"الخاص بالموظفين المنتمين لسلك متصرفي مصالح الصحة");
		break;
		}	
}

$pdf->Text(5,$pdf->GetY()+7,"  و بناءا على القرار الوزاري المشترك رقم ".$ND." المؤرخ في ".$DD." الذي يحدد عدد المناصب العليا .");
$pdf->Text(5,$pdf->GetY()+7," و بناءا على المقرر رقم ".$DDT." المؤرخ في ".$DATO. " المتضمن تعين /إدماج و إعادة ترتيب : ".$NOM." ".$PRENOM);
$pdf->Text(25,$pdf->GetY()+7," في رتبة : ".$GRADE." ابتداء من: ".$DATA.".");

//*********************reste aprogrammer????????????????????????****////
$pdf->Text(5,$pdf->GetY()+7," و بناءا على المقرر رقم "."*1**"."المؤرخ في"."**2*"."المتضمن تثبيت المعني (ة)  ");
$pdf->Text(25,$pdf->GetY()+7," في رتبة : ".$GRADE." ابتداء من: "."******3****".".");
//*********************************************************************************//
  $db_host="localhost";
  $db_name="grh"; 
  $db_user="root";
  $db_pass="";
  //la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  //sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
  $db  = mysql_select_db($db_name,$cnx) ;
  mysql_query("SET NAMES 'UTF8' ");
  $query = "SELECT * FROM GRH where idp=$idp";
  $resultat=mysql_query($query);
  $result = mysql_fetch_array( $resultat ) ;
  $NDECISION=$result["NDECISION"];
  $DATEDECISION=$result["DATEDECISION"];
  $ECHELON=$result["ECHELON"];
  $INDICEE=$result["INDICEE"];
  $CATEGORIE=$result["CATEGORIE"];
  $DATEDEFFET=$result["DATEDEFFET"];
  mysql_free_result($resultat); 
$pdf->Text(5,$pdf->GetY()+7," و بناءا على مستخرج المقرر رقم ".$NDECISION." المؤرخ في ".$DATEDECISION." المتضمن ترقية المعني (ة) إلى الدرجة ".$ECHELON);
$pdf->Text(25,$pdf->GetY()+7," الرقم الاستدلالى ".$INDICEE." للصنف ".$CATEGORIE." ابتداء من: ".$DATEDEFFET.".");
$pdf->Text(55,$pdf->GetY()+7,"باقتراح من السيدة المديرة الفرعية للموارد البشرية ");                
$pdf->Text(90,$pdf->GetY()+7,"يقـــــرر");
//*****************************************************************************************************//

$pdf->Text(5,$pdf->GetY()+7,"المادة الأولى : (ت) يعين  ".$NOM." ".$PRENOM." "."فى المنصب العالى ".$postesuperieure);
$pdf->Text(5,$pdf->GetY()+7,"ب :"."****4***"."ابتداء من تاريخ التوقيع على هذا المقرر".$ETAA);
$pdf->Text(5,$pdf->GetY()+7,"المادة الثانية : يستفيد المعني (ة) الى جانب الراتب المرتبط برتبته من زيادة إستدلالية تقدر ب ".$indice." نقطة");	
$pdf->Text(5,$pdf->GetY()+7,"موافقة للمستوى ".$niveau." بعنوان شغل المنصب العالى");	
$pdf->Text(5,$pdf->GetY()+7,"المادة الثانية :تكـلف كل من السيدة المديرة الفرعية للموارد البشرية  و أمين الخزينة  ما بين البلديات لعين وسارة  ");
$pdf->Text(30,$pdf->GetY()+7,"كل حسب اختصاصه بتنفيـذ هـذا المقرر.");
$pdf->Text(140,$pdf->GetY()+7," عين وسارة في :  ");
$pdf->Text(150,$pdf->GetY()+7,"  المدير");
//******************************************************************************************************
// $pdf->SetTextColor(225,0,0);
// $pdf->Text(148,162,$NOM." ".$PRENOM);
//******************************************modification dans base de donnes **************************//
  $db_host="localhost";
  $db_name="grh"; 
  $db_user="root";
  $db_pass="";
  //la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  //sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
  $db  = mysql_select_db($db_name,$cnx) ;
  mysql_query("SET NAMES 'UTF8' ");
  $sql = "UPDATE grh SET postesupfr = '$ETAO',niveau='$niveau',indiceps='$indice',datepostesup='$ETAA' WHERE idp = '$idp'" ;
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
//affichage des résultats, pour savoir si la modification a marchée:
//***************************************************************************************//







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
	header("Location: ../index.php?uc=MUTATION&idp=$idp") ;
    mysql_free_result($requete);
}
?>
