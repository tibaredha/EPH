<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php'); 
class PVINS extends TCPDF

{

    //******************************************//
    public $db_host="localhost";
	public $db_name="grh"; 
    public $db_user="root";
    public $db_pass="";
	function mysqlconnect()
	{
	$this->db_host;
	$this->db_name;
	$this->db_user;
	$this->db_pass;
    $cnx = mysql_connect($this->db_host,$this->db_user,$this->db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($this->db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	return $cnx;
	return $db;
	}
	function nbrtostring($db_name,$tb_name,$colonename,$colonevalue,$resultatstring) 
	{
	$this-> mysqlconnect();
    $result = mysql_query("SELECT * FROM $tb_name where $colonename=$colonevalue" );
    $row=mysql_fetch_object($result);
	$resultat=$row->$resultatstring;
	return $resultat;
	}
	

	function arDate() {
		$Jour = array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
		$Mois = array("", "جانفى", "فيفري", "مارس", "افريل", "ماي", "جوان", "جويلية", "اوت", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر");
		$Jour1 = array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
		$anne1 = array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
		$datear = $Jour[date("w")] . " " . date("d") . " " . $Mois[date("n")] . " " . date("Y");
		return $datear;
	}
	
	function DATEPV($DATEINS) {
	
		$J      = substr($DATEINS,8,2);                  
		$M      = substr($DATEINS,5,2);
		$A      = substr($DATEINS,2,2); 
		//transformer une date donne en lettre
		$JOURS = array("الاول","الثانى","الثالث","الرابع","الخامس","السادس","السابع","الثامن","التاسع","العاشر","الحادي عشر","الثاني عشر","الثالث عشر"," الرابع عشر  "," الخامس عشر "," السادس عشر "," السابع عشر "," الثامن عشر "," التاسع عشر "," العشرين "," الواحد و العشرين"," الثاني و العشرين "," الثالث و العشرين "," الرابع و العشرين "," الخامس و العشرين "," السادس و العشرين "," السابع و العشرين "," الثامن و العشرين "," التاسع و العشرين "," الثلاثين "," الواحد و الثلاثين ");
	    //$JOURS1 = $JOURS[date("d")-1] ;
		$JOURS1 = $JOURS[$J-1] ;
		$MOIS = array("", "جانفى", "فيفري", "مارس", "افريل", "ماي", "جوان", "جويلية", "اوت", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر");
		$MOIS1 =  $MOIS[ $M-0 ] ;
		//$MOIS1 =  $MOIS[date("n")] ;
		$ANNEE = array("ثلاثة عشر  "," أربعة عشر  "," خمسة عشر  "," ستة عشر  "," سبعة عشر  "," ثمانية عشر "," تسعة عشر  "," عشرين");
		//$ANNEE1 =  $ANNEE[date("y")-13] ;
		$ANNEE1 =  $ANNEE[ $A - 13] ;
		$DATEPV=" في عام الفين و".$ANNEE1."وفي اليوم ".$JOURS1." من شهر ".$MOIS1;
		
		return $DATEPV;
	}
    function connection ($ndp) 
    {
	
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass=""; 
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	$IDRECmg ;
   
	mysql_query("SET NAMES 'UTF8' ");
	$sql = "SELECT grh.Nom_Latin,grh.FILIERE,wil.WILAYASAR as wilaya, com.communear as commune,grh.Nomarab as nomar,grade.gradear as grade,grh.Prenom_Arabe as prenomar,grh.Date_Naissance,grh.Commune_Naissancear,grh.Wilaya_Naissancear,grh.Grade_Actuel,grh.DATEARRIVE
	FROM grh
	inner join wil 
	on grh.Wilaya_Naissancear=wil.idwil
	inner join com 
	on grh.Commune_Naissancear=com.idcom
	inner join grade 
	on grh.rnvgradear=grade.idg
	WHERE  idp = '".$ndp."' "; 
    $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error()) ;
    $result = mysql_fetch_array( $requete ); 
    mysql_free_result($requete);
    return $result;
    }
	
	function totalmbr1 ($CATEGORIE) 
    {
    $db_host="localhost";
    $db_name="grh"; 
    $db_user="root";
    $db_pass="";
    $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($db_name,$cnx) ;
    mysql_query("SET NAMES 'UTF8' ");
	//jai ajouter le guillemet $CATEGORIE pour quil accept string 
    $query = "SELECT service.servicear as service,grh.ECHELON,grh.CATEGORIE,grh.RELIQUAT,grh.DATEDEFFET,grh.INDICE,grh.DATEDECISION,grh.NDECISION,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear  and CATEGORIE='$CATEGORIE' order by ECHELON";
    $resultat=mysql_query($query);
    $totalmbr1=mysql_num_rows($resultat);
    return $totalmbr1;
    }
	function row($result)//resulta/
    {
	$date=date("Y-m-d");
	$this->SetTextColor(225,0,0);
	$this->SetFont('aefurat','I', 19);
	$this->Text(165,220,$date);
	
	// $this->Text(25,120,);
	// $this->Text(50,130,$result["Date_Naissance"]);
	// $this->Text(95,130,$result["commune"]);
	// $this->Text(165,130,$result["wilaya"]);
	$this->Text(38,160,$result["grade"]);
	// $this->Text(88,170,$result["FILIERE"]);
	// $this->Text(26,180,$result["DATEARRIVE"]);
	}
	//entete
    function entete()
    {
	
	$this->setPrintHeader(false);
    $this->setPrintFooter(false);
	$this->AddPage();
    $this->SetDisplayMode('fullpage','single');//mode d affichage 
	$this->setRTL(true);
	$date1=date("Y");
    $this->SetFont('aefurat', '', 18);
    $this->Text(60,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
    $this->Text(55,20,"وزارة الصحة و السكان و إصلاح المستشفيات");
    $this->Text(5,30,"مديرية الصحة و السكان لولاية الجلفة");
    $this->Text(5,40,"المؤسسة العمومية الاستشفائية عين وسارة");
    $this->Text(5,50,"المديرية الفرعية للموارد البشرية ");
    $this->Text(5,60," الرقم:......./");
	$this->Text(35,60,$date1);
    }
    function titre($directeur,$NOM,$PRENOM,$GRADE,$FONCTION,$DATEINS)
    {
	     // session_start() ;
	     // $session=$_SESSION["USER"];
         $this->SetFont('aefurat', '', 28);
         $this->SetXY(70,80);
         $this->Cell(65,15,'محضر تنصيب',1,1,'C');
	     $this->SetFont('aefurat', '', 18);
		 $this->Text(10,110,$this->DATEPV($DATEINS)." قمنا نحن ");
		 $this->Text(5,120," السيد(ة) ".$directeur." مديـر المؤسسة العمومية الإستشفائية  بعين وسارة  بتنصيب ");
		 $this->Text(65,140," السيد(ة):  ".$NOM.'  '.$PRENOM);
		 $this->Text(38,160,$this->nbrtostring("grh","grade","idg",$GRADE,"gradear"));//
		 $this->Text(10,160,"بصفته (ها) :");
		 $this->SetXY(30,180);
         //$this->MultiCell(160, 30, ''.$FONCTION."\n", 1, 'J', 0, 2, '' ,'', true); // le 8eme parametre 0=transparent 1=jaune
		 $this->Text(10,180,"بمقتضى  : ".$FONCTION);
		 $this->Text(25,200,"أقفل هذا المحضر في نفس اليوم و الشهر و السنة المذكورين أعلاه");
		 $this->Text(128,220,"عين وسارة في :  ");//.$DATEINS
		 $this->Text(150,240," المدير");$this->Text(15,230," المعني (ة) ");
		 $this->SetFont('aefurat', '', 12);
		 //$this->Text(5,240," حررت من طرف :".$session);
		 $this->SetFont('aefurat', '', 28);
         }	

		
}	