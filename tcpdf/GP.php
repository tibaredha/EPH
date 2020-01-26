<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
class GP extends TCPDF
{

    function arDate() {
		$Jour = array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
		$Mois = array("", "جانفى", "فيفري", "مارس", "افريل", "ماي", "جوان", "جويلية", "اوت", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر");
		// $Jour1 = array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
		// $anne1 = array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
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

    function ARABHEUR() {
		$Jour = array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
		$Mois = array("", "جانفى", "فيفري", "مارس", "افريل", "ماي", "جوان", "جويلية", "اوت", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر");
		
		$datear = $Jour[date("w")] . " " . date("d") . " " . $Mois[date("n")] . " " . date("Y");
		return $datear;
	} 



   function dateUS2FR($date)
	{
	  $date = explode('-', $date);
	  $date = array_reverse($date);
	  $date = implode('-', $date);
	  return $date;
	}
	function evahemomois($datejour1,$datejour2,$parametre) 
	{
	$db_host="localhost"; 
    $db_user="root";
    $db_pass="";
	$db_name="grh";
    $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($db_name,$cnx) ;
    mysql_query("SET NAMES 'UTF8' ");
	$query_liste1 = "SELECT DATE,$parametre FROM HEMOBIO WHERE  $parametre !=0 and DATE >='$datejour1'and DATE <='$datejour2'  ";
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete1);
	return $totalmbr1;
	}
	
	 function hemoeva($h,$t,$r,$datejour1,$datejour2,$parametre,$nbrb)
	{
	$h1=70;
	$this->SetXY(5,$h); 	  
	$this->cell($h1,05,$t,1,0,'L',0);
	$this->SetXY(75,$h); 	  
	$this->cell($h1,05,$r,1,0,'C',0);
	$this->SetXY(145,$h); 	  
	$this->cell($h1,05,$this->evahemomois($datejour1,$datejour2,$parametre),1,0,'C',0);
	$this->SetXY(215,$h); 	  
	$this->cell($h1,05,$this->evahemomois($datejour1,$datejour2,$parametre)*$nbrb,1,0,'C',0);
	} 
	 function hemoeva1($h,$t,$r,$u,$n)
	{
	$h1=70;
	$this->SetXY(5,$h); 	  
	$this->cell($h1,05,$t,1,0,'L',0);
	$this->SetXY(75,$h); 	  
	$this->cell($h1,05,$r,1,0,'C',0);
	$this->SetXY(145,$h); 	  
	$this->cell($h1,05,$u,1,0,'C',0);
	$this->SetXY(215,$h); 	  
	$this->cell($h1,05,$n,1,0,'C',0);
	}  
	 function hemoligne($h,$t,$r,$u,$n)
	{
	$this->SetXY(5,$h); 	  
	$this->cell(33,05,$t,1,0,'L',0);
	$this->SetXY(38,$h); 	  
	$this->cell(33,05,$r,1,0,'C',0);
	$this->SetXY(71,$h); 	  
	$this->cell(33,05,$u,1,0,'C',0);
	$this->SetXY(104,$h); 	  
	$this->cell(33,05,$n,1,0,'C',0);
	}
     function hemoligneg($h,$t,$r,$u,$n)
	{
	$this->SetXY(5+150,$h); 	  
	$this->cell(33,05,$t,1,0,'L',0);
	$this->SetXY(38+150,$h); 	  
	$this->cell(33,05,$r,1,0,'C',0);
	$this->SetXY(71+150,$h); 	  
	$this->cell(33,05,$u,1,0,'C',0);
	$this->SetXY(104+150,$h); 	  
	$this->cell(33,05,$n,1,0,'C',0);
	}	
	 function hemoligne1($h,$t,$ph,$pr,$gl,$ac,$sa)
	{
	$this->SetXY(5+150,$h); 	  
	$this->cell(33,05,$t,1,0,'L',0);
	$this->SetXY(38+150,$h); 	  
	$this->cell(20,05,$ph,1,0,'C',0);
	$this->SetXY(58+150,$h); 	  
	$this->cell(20,05,$pr,1,0,'C',0);
	$this->SetXY(78+150,$h); 	  
	$this->cell(20,05,$gl,1,0,'C',0);
	$this->SetXY(98+150,$h); 	  
	$this->cell(20,05,$ac,1,0,'C',0);
	$this->SetXY(118+150,$h); 	  
	$this->cell(20,05,$sa,1,0,'C',0);
	}
    function historiquebilan0($idp,$h,$t,$ph1,$ph2,$ph3,$ph4,$ph5,$ph6,$ph7,$ph8,$ph9,$ph10,$ph11,$ph12,$ph13,$ph14,$ph15,$ph16,$ph17,$ph18,$ph19,$ph20,$ph21,$ph22,$ph23,$ph24,$ph25,$ph26)
	{
	$h1=10;
	$this->SetXY(5,$h); 	  
	$this->cell(25,05,$t,1,0,'C',0);
	$this->SetXY(30,$h); 	  
	$this->cell($h1,05,$ph1,1,0,'C',0);
	$this->SetXY(40,$h); 	  
	$this->cell($h1,05,$ph2,1,0,'C',0);
	$this->SetXY(50,$h); 	  
	$this->cell($h1,05,$ph3,1,0,'C',0);
	$this->SetXY(60,$h); 	  
	$this->cell($h1,05,$ph4,1,0,'C',0);
	$this->SetXY(70,$h); 	  
	$this->cell($h1,05,$ph5,1,0,'C',0);
	$this->SetXY(80,$h); 	  
	$this->cell($h1,05,$ph6,1,0,'C',0);
	$this->SetXY(90,$h); 	  
	$this->cell($h1,05,$ph7,1,0,'C',0);
	$this->SetXY(100,$h); 	  
	$this->cell($h1,05,$ph8,1,0,'C',0);
	$this->SetXY(110,$h); 	  
	$this->cell($h1,05,$ph9,1,0,'C',0);
	$this->SetXY(120,$h); 	  
	$this->cell($h1,05,$ph10,1,0,'C',0);
	$this->SetXY(130,$h); 	  
	$this->cell($h1,05,$ph11,1,0,'C',0);
	$this->SetXY(140,$h); 	  
	$this->cell($h1,05,$ph12,1,0,'C',0);
	$this->SetXY(150,$h); 	  
	$this->cell($h1,05,$ph13,1,0,'C',0);
	$this->SetXY(160,$h); 	  
	$this->cell($h1,05,$ph14,1,0,'C',0);
	$this->SetXY(170,$h); 	  
	$this->cell($h1,05,$ph15,1,0,'C',0);
	$this->SetXY(180,$h); 	  
	$this->cell($h1,05,$ph16,1,0,'C',0);
	$this->SetXY(190,$h); 	  
	$this->cell($h1,05,$ph17,1,0,'C',0);
	$this->SetXY(200,$h); 	  
	$this->cell($h1,05,$ph18,1,0,'C',0);
	$this->SetXY(210,$h); 	  
	$this->cell($h1,05,$ph19,1,0,'C',0);
	$this->SetXY(220,$h); 	  
	$this->cell($h1,05,$ph20,1,0,'C',0);
	$this->SetXY(230,$h); 	  
	$this->cell($h1,05,$ph21,1,0,'C',0);
	$this->SetXY(240,$h); 	  
	$this->cell($h1,05,$ph22,1,0,'C',0);
	$this->SetXY(250,$h); 	  
	$this->cell($h1,05,$ph23,1,0,'C',0);
	$this->SetXY(260,$h); 	  
	$this->cell($h1,05,$ph24,1,0,'C',0);
	$this->SetXY(270,$h); 	  
	$this->cell($h1,05,$ph25,1,0,'C',0);
	$this->SetXY(280,$h); 
	$this->cell($h1,05,$ph26,1,0,'C',0);
	}
	
	function bilan($h)
	{
	$h1=10;
	$this->SetXY(5,$h); 	  
	$this->cell(25,05,"Nom du Malade",1,0,'C',0);
	$this->SetXY(30,$h); 	  
	$this->cell($h1,05,"GB",1,0,'C',0);
	$this->SetXY(40,$h); 	  
	$this->cell($h1,05,"GR",1,0,'C',0);
	$this->SetXY(50,$h); 	  
	$this->cell($h1,05,"HB",1,0,'C',0);
	$this->SetXY(60,$h); 	  
	$this->cell($h1,05,"HT",1,0,'C',0);
	$this->SetXY(70,$h); 	  
	$this->cell($h1,05,"PLQT",1,0,'C',0);
	$this->SetXY(80,$h); 	  
	$this->cell($h1,05,"TP",1,0,'C',0);
	$this->SetXY(90,$h); 	  
	$this->cell($h1,05,"INR",1,0,'C',0);
	$this->SetXY(100,$h); 	  
	$this->cell($h1,05,"VS1",1,0,'C',0);
	$this->SetXY(110,$h); 	  
	$this->cell($h1,05,"VS2",1,0,'C',0);
	$this->SetXY(120,$h); 	  
	$this->cell($h1,05,"GLYC",1,0,'C',0);
	$this->SetXY(130,$h); 	  
	$this->cell($h1,05,"UREE",1,0,'C',0);
	$this->SetXY(140,$h); 	  
	$this->cell($h1,05,"CRET",1,0,'C',0);
	$this->SetXY(150,$h); 	  
	$this->cell($h1,05,"ACUR",1,0,'C',0);
	$this->SetXY(160,$h); 	  
	$this->cell($h1,05,"BLT",1,0,'C',0);
	$this->SetXY(170,$h); 	  
	$this->cell($h1,05,"BLD",1,0,'C',0);
	$this->SetXY(180,$h); 	  
	$this->cell($h1,05,"TGO",1,0,'C',0);
	$this->SetXY(190,$h); 	  
	$this->cell($h1,05,"TGP",1,0,'C',0);
	$this->SetXY(200,$h); 	  
	$this->cell($h1,05,"ASLO",1,0,'C',0);
	$this->SetXY(210,$h); 	  
	$this->cell($h1,05,"CRP",1,0,'C',0);
	$this->SetXY(220,$h); 	  
	$this->cell($h1,05,"TGC",1,0,'C',0);
	$this->SetXY(230,$h); 	  
	$this->cell($h1,05,"CHO",1,0,'C',0);
	$this->SetXY(240,$h); 	  
	$this->cell($h1,05,"NA",1,0,'C',0);
	$this->SetXY(250,$h); 	  
	$this->cell($h1,05,"K",1,0,'C',0);
	$this->SetXY(260,$h); 	  
	$this->cell($h1,05,"PHO",1,0,'C',0);
	$this->SetXY(270,$h); 	  
	$this->cell($h1,05,"CL",1,0,'C',0);
	$this->SetXY(280,$h); 	  
	$this->cell($h1,05,"CA",1,0,'C',0);
	//***********************************************************************//
	$this->SetXY(5,$h+5);
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMOBIO order by DATE ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	while($row=mysql_fetch_object($requete))
	  {
	  $this->SetFont('aefurat', '', 6);
	  $this->cell(25,05,$this->nbrtostring("grh","hemo","ID",$row->idp,"NOM")."_".$this->nbrtostring("grh","hemo","ID",$row->idp,"PRENOM") ,1,0,'L',0);
	  $this->SetFont('aefurat', '', 10);
	  $this->cell($h1,05,$row->GB,1,0,'C',0);
	  $this->cell($h1,05,$row->GR,1,0,'C',0);
	  $this->cell($h1,05,$row->HB,1,0,'C',0);
	  $this->cell($h1,05,$row->HT,1,0,'C',0);
	  $this->cell($h1,05,$row->PLQT,1,0,'C',0);
	  $this->cell($h1,05,$row->TP,1,0,'C',0);
	  $this->cell($h1,05,$row->INR,1,0,'C',0);
	  $this->cell($h1,05,$row->VS1H,1,0,'C',0);
	  $this->cell($h1,05,$row->VS2H,1,0,'C',0);
	  $this->cell($h1,05,$row->GLYCE,1,0,'C',0);
	  $this->cell($h1,05,$row->UREE,1,0,'C',0);
	  $this->cell($h1,05,$row->CREAT,1,0,'C',0);
	  $this->cell($h1,05,$row->ACURIQUE,1,0,'C',0);
	  $this->cell($h1,05,$row->BILIT,1,0,'C',0);
	  $this->cell($h1,05,$row->BILID,1,0,'C',0);
	  $this->cell($h1,05,$row->TGO,1,0,'C',0);
	  $this->cell($h1,05,$row->TGP,1,0,'C',0);
	  $this->cell($h1,05,$row->ASLO,1,0,'C',0);
	  $this->cell($h1,05,$row->CRP,1,0,'C',0);
	  $this->cell($h1,05,$row->TG,1,0,'C',0);
	  $this->cell($h1,05,$row->CHOLES,1,0,'C',0);
	  $this->cell($h1,05,$row->NA,1,0,'C',0);
	  $this->cell($h1,05,$row->K,1,0,'C',0);
	  $this->cell($h1,05,$row->PHOS,1,0,'C',0);
	  $this->cell($h1,05,$row->CL,1,0,'C',0);
	  $this->cell($h1,05,$row->CA,1,0,'C',0);
	  $this->SetXY(5,$this->GetY()+5); 
	  }
	$this->SetXY(5,$this->GetY()); 	
	$this->cell(25,05,"Total",1,0,'C',0);	  
	$this->SetXY(30,$this->GetY()); 	  
	$this->cell(260,05,$totalmbr1."  "."BILANS",1,0,'C',0);				 
	$this->Text(80+150,$this->GetY()+10,"Laboratoire : Hemodialyse");
    $this->Text(80+150,$this->GetY()+5,"FATOUH Mustapha");
	}
	function bilanS($h,$datejour1,$datejour2)
	{
	$h1=10;
	$this->SetXY(5,$h); 	  
	$this->cell(50,05,"Date Du Prélèvement",1,0,'C',0);
	$this->SetXY(55,$h); 	  
	$this->cell(60,05,"Nom du Malade",1,0,'C',0);
	$this->SetXY(55+60,$h); 	  
	$this->cell(60,05,"Date De Naissance",1,0,'C',0);
	$this->SetXY(175,$h); 	  
	$this->cell($h1+3,05,"HVB",1,0,'C',0);
	$this->SetXY(185+3,$h); 	  
	$this->cell($h1+3,05,"HVC",1,0,'C',0);
	$this->SetXY(195+3+3,$h); 	  
	$this->cell($h1+3,05,"HIV",1,0,'C',0);
	$this->SetXY(205+3+3+3,$h); 	  
	$this->cell($h1+3,05,"TPHA",1,0,'C',0);
	$this->SetXY(225+2,$h); 	  
	$this->cell(63,05,"OBSERVATION",1,0,'C',0);
	
	//***********************************************************************//
	$this->SetXY(5,$h+5);
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMOBIO WHERE  DATE >='$datejour1' and DATE <='$datejour2' order by DATE ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	while($row=mysql_fetch_object($requete))
	  {
	 if($row->HVB!=0 or $row->HVC!=0 or $row->HIV!=0 or $row->TPHA!=0 ) 
	   {
	  $this->cell(50,05,$this->dateUS2FR($row->DATE),1,0,'C',0);
	  $this->cell(60,05,$this->nbrtostring("grh","hemo","ID",$row->idp,"NOM")."_".$this->nbrtostring("grh","hemo","ID",$row->idp,"PRENOM") ,1,0,'L',0);
	  $this->cell(60,05,$this->dateUS2FR($this->nbrtostring("grh","hemo","ID",$row->idp,"DATENAISSA")),1,0,'C',0);
	  $this->cell($h1+3,05,$row->HVB,1,0,'C',0);
	  $this->cell($h1+3,05,$row->HVC,1,0,'C',0);
	  $this->cell($h1+3,05,$row->HIV,1,0,'C',0);
	  $this->cell($h1+3,05,$row->TPHA,1,0,'C',0);
	
	  $this->cell(63,05,"",1,0,'C',0);
	  $this->SetXY(5,$this->GetY()+5); 
	  }
	  }
	$this->SetXY(5,$this->GetY()); 	
	$this->cell(50,05,"Total",1,0,'C',0);	  
	$this->SetXY(55,$this->GetY()); 	  
	$this->cell(235,05,"  "."BILANS",1,0,'C',0);				 
	$this->Text(80+150,$this->GetY()+10,"Laboratoire : Hemodialyse");
    $this->Text(80+150,$this->GetY()+5,"FATOUH Mustapha");
	} 
    function bilanH($h,$datejour1,$datejour2)
	{
	$h1=10;
	$this->SetXY(5,$h); 	  
	$this->cell(50,05,"Date Du Prélèvement",1,0,'C',0);
	$this->SetXY(55,$h); 	  
	$this->cell(60,05,"Nom du Malade",1,0,'C',0);
	$this->SetXY(55+60,$h); 	  
	$this->cell(60,05,"Date De Naissance",1,0,'C',0);
	$this->SetXY(175,$h); 	  
	$this->cell($h1,05,"GB",1,0,'C',0);
	$this->SetXY(185,$h); 	  
	$this->cell($h1,05,"GR",1,0,'C',0);
	$this->SetXY(195,$h); 	  
	$this->cell($h1,05,"HB",1,0,'C',0);
	$this->SetXY(205,$h); 	  
	$this->cell($h1,05,"HT",1,0,'C',0);
	$this->SetXY(215,$h); 	  
	$this->cell($h1,05,"PLQT",1,0,'C',0);
	$this->SetXY(225,$h); 	  
	$this->cell(65,05,"OBSERVATION",1,0,'C',0);
	
	//***********************************************************************//
	$this->SetXY(5,$h+5);
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMOBIO WHERE  DATE >='$datejour1' and DATE <='$datejour2' order by DATE ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	while($row=mysql_fetch_object($requete))
	  {
	 if($row->GB!=0 or $row->GR!=0 or $row->HB!=0 or $row->HT!=0 or $row->PLQT!=0 ) 
	   {
	  $this->cell(50,05,$this->dateUS2FR($row->DATE),1,0,'C',0);
	  $this->cell(60,05,$this->nbrtostring("grh","hemo","ID",$row->idp,"NOM")."_".$this->nbrtostring("grh","hemo","ID",$row->idp,"PRENOM") ,1,0,'L',0);
	  $this->cell(60,05,$this->dateUS2FR($this->nbrtostring("grh","hemo","ID",$row->idp,"DATENAISSA")),1,0,'C',0);
	  $this->cell($h1,05,$row->GB,1,0,'C',0);
	  $this->cell($h1,05,$row->GR,1,0,'C',0);
	  $this->cell($h1,05,$row->HB,1,0,'C',0);
	  $this->cell($h1,05,$row->HT,1,0,'C',0);
	  $this->cell($h1,05,$row->PLQT,1,0,'C',0);
	  $this->cell(65,05,"",1,0,'C',0);
	  $this->SetXY(5,$this->GetY()+5); 
	  }
	  }
	$this->SetXY(5,$this->GetY()); 	
	$this->cell(50,05,"Total",1,0,'C',0);	  
	$this->SetXY(55,$this->GetY()); 	  
	$this->cell(235,05,"  "."BILANS",1,0,'C',0);				 
	$this->Text(80+150,$this->GetY()+10,"Laboratoire : Hemodialyse");
    $this->Text(80+150,$this->GetY()+5,"FATOUH Mustapha");
	} 
   function bilanB($h,$datejour1,$datejour2)
	{
	$h1=10;
	$this->SetXY(5,$h); 	  
	$this->cell(20,05,"Date ",1,0,'C',0);
	$this->SetXY(25,$h); 	  
	$this->cell(35,05,"Nom du Malade",1,0,'C',0);
	$this->SetXY(60,$h); 	  
	$this->cell(20,05,"Naissance",1,0,'C',0);
	$this->SetXY(80,$h); 	  
	$this->cell($h1,05,"TP",1,0,'C',0);
	$this->SetXY(90,$h); 	  
	$this->cell($h1,05,"INR",1,0,'C',0);
	$this->SetXY(100,$h); 	  
	$this->cell($h1,05,"VS1",1,0,'C',0);
	$this->SetXY(110,$h); 	  
	$this->cell($h1,05,"VS2",1,0,'C',0);
	$this->SetXY(120,$h); 	  
	$this->cell($h1,05,"GLYC",1,0,'C',0);
	$this->SetXY(130,$h); 	  
	$this->cell($h1,05,"UREE",1,0,'C',0);
	$this->SetXY(140,$h); 	  
	$this->cell($h1,05,"CRET",1,0,'C',0);
	$this->SetXY(150,$h); 	  
	$this->cell($h1,05,"ACUR",1,0,'C',0);
	$this->SetXY(160,$h); 	  
	$this->cell($h1,05,"BLT",1,0,'C',0);
	$this->SetXY(170,$h); 	  
	$this->cell($h1,05,"BLD",1,0,'C',0);
	$this->SetXY(180,$h); 	  
	$this->cell($h1,05,"TGO",1,0,'C',0);
	$this->SetXY(190,$h); 	  
	$this->cell($h1,05,"TGP",1,0,'C',0);
	$this->SetXY(200,$h); 	  
	$this->cell($h1,05,"ASLO",1,0,'C',0);
	$this->SetXY(210,$h); 	  
	$this->cell($h1,05,"CRP",1,0,'C',0);
	$this->SetXY(220,$h); 	  
	$this->cell($h1,05,"TGC",1,0,'C',0);
	$this->SetXY(230,$h); 	  
	$this->cell($h1,05,"CHO",1,0,'C',0);
	$this->SetXY(240,$h); 	  
	$this->cell($h1,05,"NA",1,0,'C',0);
	$this->SetXY(250,$h); 	  
	$this->cell($h1,05,"K",1,0,'C',0);
	$this->SetXY(260,$h); 	  
	$this->cell($h1,05,"PHO",1,0,'C',0);
	$this->SetXY(270,$h); 	  
	$this->cell($h1,05,"CL",1,0,'C',0);
	$this->SetXY(280,$h); 	  
	$this->cell($h1,05,"CA",1,0,'C',0);
	//***********************************************************************//
	$this->SetXY(5,$h+5);
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMOBIO where DATE >='$datejour1' and DATE <='$datejour2'order by DATE ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	while($row=mysql_fetch_object($requete))
	  {
	  if($row->TP!=0 or $row->INR!=0 or $row->VS1H!=0 or $row->VS2H!=0 or $row->GLYCE!=0 or $row->UREE!=0 or $row->CREAT!=0 or $row->ACURIQUE!=0 or $row->BILIT!=0 or $row->BILID!=0 or $row->TGO!=0 or $row->TGP!=0 or $row->TGP!=0 or $row->ASLO!=0 or $row->CRP!=0 or $row->TG!=0 or $row->CHOLES!=0 or $row->NA!=0  or $row->K!=0 or $row->PHOS!=0or $row->CL!=0or $row->CA!=0) 
	  {
	  $this->cell(20,05,$this->dateUS2FR($row->DATE),1,0,'C',0);
	  $this->SetFont('aefurat', '', 7);
	  $this->cell(35,05,$this->nbrtostring("grh","hemo","ID",$row->idp,"NOM")."_".$this->nbrtostring("grh","hemo","ID",$row->idp,"PRENOM") ,1,0,'L',0);
	  $this->SetFont('aefurat', '', 10);
	  $this->cell(20,05,$this->dateUS2FR($this->nbrtostring("grh","hemo","ID",$row->idp,"DATENAISSA")),1,0,'C',0);
	  $this->cell($h1,05,$row->TP,1,0,'C',0);
	  $this->cell($h1,05,$row->INR,1,0,'C',0);
	  $this->cell($h1,05,$row->VS1H,1,0,'C',0);
	  $this->cell($h1,05,$row->VS2H,1,0,'C',0);
	  $this->cell($h1,05,$row->GLYCE,1,0,'C',0);
	  $this->cell($h1,05,$row->UREE,1,0,'C',0);
	  $this->cell($h1,05,$row->CREAT,1,0,'C',0);
	  $this->cell($h1,05,$row->ACURIQUE,1,0,'C',0);
	  $this->cell($h1,05,$row->BILIT,1,0,'C',0);
	  $this->cell($h1,05,$row->BILID,1,0,'C',0);
	  $this->cell($h1,05,$row->TGO,1,0,'C',0);
	  $this->cell($h1,05,$row->TGP,1,0,'C',0);
	  $this->cell($h1,05,$row->ASLO,1,0,'C',0);
	  $this->cell($h1,05,$row->CRP,1,0,'C',0);
	  $this->cell($h1,05,$row->TG,1,0,'C',0);
	  $this->cell($h1,05,$row->CHOLES,1,0,'C',0);
	  $this->cell($h1,05,$row->NA,1,0,'C',0);
	  $this->cell($h1,05,$row->K,1,0,'C',0);
	  $this->cell($h1,05,$row->PHOS,1,0,'C',0);
	  $this->cell($h1,05,$row->CL,1,0,'C',0);
	  $this->cell($h1,05,$row->CA,1,0,'C',0);
	  $this->SetXY(5,$this->GetY()+5); 
	  }
	  }
	$this->SetXY(5,$this->GetY()); 	
	$this->cell(20,05,"Total",1,0,'C',0);	  
	$this->SetXY(25,$this->GetY()); 	  
	$this->cell(265,05,"  "."BILANS",1,0,'C',0);				 
	$this->Text(80+150,$this->GetY()+10,"Laboratoire : Hemodialyse");
    $this->Text(80+150,$this->GetY()+5,"FATOUH Mustapha");
	}


	
	function historiquebilan($idp,$h)
	{
	$h1=10;
	$this->SetXY(5,$h); 	  
	$this->cell(25,05,"Date d'Examens",1,0,'C',0);
	$this->SetXY(30,$h); 	  
	$this->cell($h1,05,"GB",1,0,'C',0);
	$this->SetXY(40,$h); 	  
	$this->cell($h1,05,"GB",1,0,'C',0);
	$this->SetXY(50,$h); 	  
	$this->cell($h1,05,"HB",1,0,'C',0);
	$this->SetXY(60,$h); 	  
	$this->cell($h1,05,"HT",1,0,'C',0);
	$this->SetXY(70,$h); 	  
	$this->cell($h1,05,"PLQT",1,0,'C',0);
	$this->SetXY(80,$h); 	  
	$this->cell($h1,05,"TP",1,0,'C',0);
	$this->SetXY(90,$h); 	  
	$this->cell($h1,05,"INR",1,0,'C',0);
	$this->SetXY(100,$h); 	  
	$this->cell($h1,05,"VS1",1,0,'C',0);
	$this->SetXY(110,$h); 	  
	$this->cell($h1,05,"VS2",1,0,'C',0);
	$this->SetXY(120,$h); 	  
	$this->cell($h1,05,"GLYC",1,0,'C',0);
	$this->SetXY(130,$h); 	  
	$this->cell($h1,05,"UREE",1,0,'C',0);
	$this->SetXY(140,$h); 	  
	$this->cell($h1,05,"CRET",1,0,'C',0);
	$this->SetXY(150,$h); 	  
	$this->cell($h1,05,"ACUR",1,0,'C',0);
	$this->SetXY(160,$h); 	  
	$this->cell($h1,05,"BLT",1,0,'C',0);
	$this->SetXY(170,$h); 	  
	$this->cell($h1,05,"BLD",1,0,'C',0);
	$this->SetXY(180,$h); 	  
	$this->cell($h1,05,"TGO",1,0,'C',0);
	$this->SetXY(190,$h); 	  
	$this->cell($h1,05,"TGP",1,0,'C',0);
	$this->SetXY(200,$h); 	  
	$this->cell($h1,05,"ASLO",1,0,'C',0);
	$this->SetXY(210,$h); 	  
	$this->cell($h1,05,"CRP",1,0,'C',0);
	$this->SetXY(220,$h); 	  
	$this->cell($h1,05,"TGC",1,0,'C',0);
	$this->SetXY(230,$h); 	  
	$this->cell($h1,05,"CHO",1,0,'C',0);
	$this->SetXY(240,$h); 	  
	$this->cell($h1,05,"NA",1,0,'C',0);
	$this->SetXY(250,$h); 	  
	$this->cell($h1,05,"K",1,0,'C',0);
	$this->SetXY(260,$h); 	  
	$this->cell($h1,05,"PHO",1,0,'C',0);
	$this->SetXY(270,$h); 	  
	$this->cell($h1,05,"CL",1,0,'C',0);
	$this->SetXY(280,$h); 	  
	$this->cell($h1,05,"CA",1,0,'C',0);
	//***********************************************************************//
	$this->SetXY(5,$h+5);
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMOBIO WHERE idp  ='$idp' ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	while($row=mysql_fetch_object($requete))
	  {
	  $this->cell(25,05,$row->DATE,1,0,'C',0);
	  $this->cell($h1,05,$row->GB,1,0,'C',0);
	  $this->cell($h1,05,$row->GR,1,0,'C',0);
	  $this->cell($h1,05,$row->HB,1,0,'C',0);
	  $this->cell($h1,05,$row->HT,1,0,'C',0);
	  $this->cell($h1,05,$row->PLQT,1,0,'C',0);
	  $this->cell($h1,05,$row->TP,1,0,'C',0);
	  $this->cell($h1,05,$row->INR,1,0,'C',0);
	  $this->cell($h1,05,$row->VS1H,1,0,'C',0);
	  $this->cell($h1,05,$row->VS2H,1,0,'C',0);
	  $this->cell($h1,05,$row->GLYCE,1,0,'C',0);
	  $this->cell($h1,05,$row->UREE,1,0,'C',0);
	  $this->cell($h1,05,$row->CREAT,1,0,'C',0);
	  $this->cell($h1,05,$row->ACURIQUE,1,0,'C',0);
	  $this->cell($h1,05,$row->BILIT,1,0,'C',0);
	  $this->cell($h1,05,$row->BILID,1,0,'C',0);
	  $this->cell($h1,05,$row->TGO,1,0,'C',0);
	  $this->cell($h1,05,$row->TGP,1,0,'C',0);
	  $this->cell($h1,05,$row->ASLO,1,0,'C',0);
	  $this->cell($h1,05,$row->CRP,1,0,'C',0);
	  $this->cell($h1,05,$row->TG,1,0,'C',0);
	  $this->cell($h1,05,$row->CHOLES,1,0,'C',0);
	  $this->cell($h1,05,$row->NA,1,0,'C',0);
	  $this->cell($h1,05,$row->K,1,0,'C',0);
	  $this->cell($h1,05,$row->PHOS,1,0,'C',0);
	  $this->cell($h1,05,$row->CL,1,0,'C',0);
	  $this->cell($h1,05,$row->CA,1,0,'C',0);
	  $this->SetXY(5,$this->GetY()+5); 
	  }
	$this->SetXY(5,$this->GetY()); 	
	$this->cell(25,05,"Total",1,0,'C',0);	  
	$this->SetXY(30,$this->GetY()); 	  
	$this->cell(260,05,$totalmbr1."  "."BILANS",1,0,'C',0);				 
	} 
	function historiqueseance($idp,$h)
	{
	$h1=10;
	$this->SetXY(5,$h); 	  
	$this->cell(25,05,"Date Séance",1,0,'C',0);
	$this->SetXY(30,$h); 	  
	$this->cell(20,05,"Heure",1,0,'C',0);
	$this->setxy(50,$h); 	  
	$this->cell(25,05,"Type",1,0,'C',0);
	$this->SetXY(75,$h); 	  
	$this->cell($h1+5,05,"N°APP",1,0,'C',0);
	$this->SetXY(90,$h); 	  
	$this->cell($h1+5,05,"ACC",1,0,'C',0);
	$this->SetXY(105,$h); 	  
	$this->cell($h1+5,05,"POIDS",1,0,'C',0);
	$this->SetXY(120,$h); 	  
	$this->cell($h1+5,05,"POIDSD",1,0,'C',0);
	$this->SetXY(135,$h); 	  
	$this->cell($h1+5,05,"SYSD",1,0,'C',0);
	$this->SetXY(150,$h); 	  
	$this->cell($h1+5,05,"DIAD",1,0,'C',0);
	$this->SetXY(165,$h); 	  
	$this->cell($h1+5,05,"TD",1,0,'C',0);
	$this->SetXY(180,$h); 	  
	$this->cell($h1+5,05,"POIDSF",1,0,'C',0);
	$this->SetXY(195,$h); 	  
	$this->cell($h1+5,05,"SYSF",1,0,'C',0);
	$this->SetXY(210,$h); 	  
	$this->cell($h1+5,05,"DIAF",1,0,'C',0);
	$this->SetXY(225,$h); 	  
	$this->cell($h1+5,05,"TF",1,0,'C',0);
	$this->SetXY(240,$h); 	  
	$this->cell($h1+15,05,"IDE",1,0,'C',0);
	$this->SetXY(265,$h); 	  
	$this->cell($h1+15,05,"MEDECIN",1,0,'C',0);
	//***********************************************************************//
	$this->SetXY(5,$h+5);
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMOSEANCE WHERE idp  ='$idp' ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	while($row=mysql_fetch_object($requete))
	  {
	  $this->cell(25,05,$row->dateseance,1,0,'C',0);
	  $this->cell($h1+10,05,$row->heures,1,0,'C',0);
	  $this->cell($h1+15,05,$row->TYPEDIA,1,0,'C',0);
	  $this->cell($h1+5,05,$row->NAPP,1,0,'C',0);
	  $this->cell($h1+5,05,$row->ACCSANG,1,0,'C',0);
	  $this->cell($h1+5,05,$row->POIDS,1,0,'C',0);
	  $this->cell($h1+5,05,$row->POIDSD,1,0,'C',0);
	  $this->cell($h1+5,05,$row->SYSD,1,0,'C',0);
	  $this->cell($h1+5,05,$row->DIAD,1,0,'C',0);
	  $this->cell($h1+5,05,$row->TD,1,0,'C',0);
	  $this->cell($h1+5,05,$row->POIDSF,1,0,'C',0);
	  $this->cell($h1+5,05,$row->SYSF,1,0,'C',0);
	  $this->cell($h1+5,05,$row->DIAF,1,0,'C',0);
	  $this->cell($h1+5,05,$row->TF,1,0,'C',0);
	  $this->cell($h1+15,05,$row->IDE,1,0,'C',0);
	  $this->cell($h1+15,05,$row->MEDECIN,1,0,'C',0);
	  $this->SetXY(5,$this->GetY()+5); 
	  }
	$this->SetXY(5,$this->GetY()); 	
	$this->cell(25,05,"Total",1,0,'C',0);	  
	$this->SetXY(30,$this->GetY()); 	  
	$this->cell(260,05,$totalmbr1."  "."Séances",1,0,'C',0);				 
	}
    function nbrseance()
	{
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMOSEANCE  ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	return $totalmbr1;	  				 
	}
 	function nbrmaladehemo()
	{
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMO WHERE SORTI =''  ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	return $totalmbr1;	  				 
	}
    function nbrgroupage($GRABO,$GRRH)
	{
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMO WHERE SORTI ='' and GRABO='$GRABO' and GRRH='$GRRH' ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	return $totalmbr1;	  				 
	}
    function nbrserologie($type,$resulta)
	{
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM HEMO WHERE SORTI ='' and $type !='$resulta'  ";
    $requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);
	return $totalmbr1;	  				 
	}



	
     function etiquette($date)
	{
    $this->RoundedRect(5, 5, 138, 65, 2, $style = '');
	$this->RoundedRect(80, 8, 60, 59, 2, $style = '');
	$this->SetTextColor(225,0,0);
	$this->SetXY(100,20);
	$this->Cell(30,8,trim($result->GROUPAGE),0,1,'r');
	$this->SetXY(85,40);
	$this->Cell(30,8,trim($result->RHESUS),0,1,'r');
	$this->SetTextColor(0,0,0);
	$this->SetFont('aefurat', '', 11);
	$this->Text(5,5,"PTS EPH AIN OUSSERA DJELFA");$pdf->Text(93,10,"Groupage CGR");
	$this->Text(5,10,"Type PSL : CGR ");
	$this->Text(5,15,"Prelever Le: ".$pdf->dateUS2FR($result->datedon));
	$this->Text(5,20,"Perimer  Le: ".$pdf->dateUS2FR($pdf->datePlus($result->datedon,30)));
	$this->Text(5,25,"Conserver Entre (4° et 6°) ");
	$this->Text(5,38,"NDP:");$pdf->Text(5,52,"ENA13");
	$this->SetFont('aefurat', '', 22);
	$this->SetTextColor(225,0,0);
	$this->SetXY(20,35);
	$this->Cell(50,8,trim($result->IDP),1,1,'C');
	$this->EAN13(27, 48, trim($result->IDP), $h=16, $w=.35);
	$this->SetTextColor(0,0,0);
	$this->SetFont('aefurat', '', 50);
    }
   function nbrtostring($db_name,$tb_name,$colonename,$colonevalue,$resultatstring) 
	{
	$db_host="localhost"; 
    $db_user="root";
    $db_pass="";
    $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($db_name,$cnx) ;
    mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM $tb_name where $colonename=$colonevalue" );
    $row=mysql_fetch_object($result);
	$resultat=$row->$resultatstring;
	return $resultat;
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
	$this->Text(120,120,$result["nomar"]);
	$this->Text(25,120,$result["prenomar"]);
	$this->Text(50,130,$result["Date_Naissance"]);
	$this->Text(95,130,$result["commune"]);
	$this->Text(165,130,$result["wilaya"]);
	$this->Text(30,170,$result["grade"]);
	$this->Text(88,170,$result["FILIERE"]);
	$this->Text(26,180,$result["DATEARRIVE"]);
	}
	
	function CONGE($IDP,$dateeuro)
    {
	
	$session=$_SESSION["USER"];
	$this->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
	$this->Text(5,20,"مصلحة او وحدة :");
	$this->SetFont('aefurat', '', 20);
	$this->Text(45,30," شـــهادة طبية رقم ".$IDP);
	$this->SetFont('aefurat', '', 18);
	$this->Text(5,50," انا الموقع  اسفله _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(100,50," اشهد ان الحالة  ");
	$this->Text(5,60," الصحية للسيد (ة) :_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(5,70," المولود(ة) في:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(65,80,"تتطلــب");
	$this->Text(5,90,"1) علاج مع التوقف عن العمل لمدة :_ _ _ _ _ _ _ _"." يوم/ ايام ");
	$this->Text(8,100,"عقدا ابتداء من :_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(5,110,"2) تمديد توقف عن العمل لمدة :_ _ _ _ _ _ _ _ _ _"." يوم/ ايام ");
	$this->Text(8,120,"عقدا ابتداء من :_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(10,130,"1) ملزم بالبقاء فى الغرفة");
	$this->Text(10,140,"2)يسمح له الخروج من الساعة ");
	$this->Text(100,140,"الى الساعة");
	$this->Text(5,150,"3) السماح له بستئناف العمل يوم :_ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(5,160,"الشهادة الحالية تسلم على نسخة واحدة بدون شطب او تغير");
	$this->Text(50,170,"حرر بعين وسارة فى ".$dateeuro);
	$this->Text(90,180,"الطبيب");
	$this->Text(70,50,"Dr ".$session);
	
	
	}
	
	
	
	
	//entete
    function entete($dateeuro)
    {
	
	$session=$_SESSION["USER"];
	$this->SetTextColor(0,0,255);
	$this->setPrintHeader(false);
    $this->setPrintFooter(false);
	$this->AddPage();
	//$this->setRTL(true); 
	$this->SetDisplayMode('fullpage','single');//mode d affichage 
	$this->SetFont('aefurat', '', 10);
	$this->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
	$this->Text(100,10,"poids:");
	$this->Text(10,15,"ETABLISSEMENT PUBLIC");
	$this->Text(8,20,"HOSPITALIER AIN OUSSERA");
	$this->Text(80,30,"AIN OUSSERA LE :");$this->SetTextColor(225,0,0);
	$this->Text(112,30,$dateeuro);$this->SetTextColor(0,0,255);
	$this->SetFont('aefurat', '', 15);
	$this->Text(98,40,"وصــفــة");
	$this->Text(92,48,"ORDONNACE");
	$this->SetFont('aefurat', '', 14);
	$this->Text(5,60,"Delivrée par le Docteur :_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");
	$this->Text(5,70,"A Mr/Mme/Melle :_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(103,70,"Age_ _ _ _ans");
	$this->Text(5,80,"Domicile :_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(5,90,"1)");
	$this->Text(5,105,"2)");
	$this->Text(5,120,"3)");
	$this->Text(5,135,"4)");
	$this->Text(5,150,"5)");
	$this->SetFont('aefurat', '', 12);
	$this->Text(100,160,"Le Medecin");
	$this->SetTextColor(225,0,0);
	$this->SetFont('aefurat', '', 14);
	$this->Text(55,60,$session);
	$this->Text(100,165,$session);
	$this->SetFont('aefurat', '', 12);
	$this->SetTextColor(0,0,255);
	$this->Line(5 ,174 ,142 ,174 );
    $this->Text(45,175,"لاتتركو ابدا الادوية فى متناول الاطفال");
    $this->Text(30,180," Ne Laissez Jamais Les Medicament a La Portée Des Enfants");
	$this->SetFont('aefurat', '', 10);
    }
    function enteterx($dateeuro)
    {
	
	$session=$_SESSION["USER"];
	$this->SetTextColor(0,0,255);
	$this->setPrintHeader(false);
    $this->setPrintFooter(false);
	$this->AddPage();
	//$this->setRTL(true); 
	$this->SetDisplayMode('fullpage','single');//mode d affichage 
	$this->SetFont('aefurat', '', 10);
	$this->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
	$this->Text(10,15,"ETABLISSEMENT PUBLIC");
	$this->Text(8,20,"HOSPITALIER AIN OUSSERA");
	$this->Rect(70,5,65,25,"d");
	$this->Text(85,7,"N° d'enregistrement ");
	$this->Text(83,12,"au service de radiologie ");
	$this->Text(83,17,"_ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(80,32,"AIN OUSSERA LE :");
	$this->SetTextColor(225,0,0);
	$this->Text(112,32,$dateeuro);
	$this->SetTextColor(0,0,255);
	$this->SetFont('aefurat', '', 15);
	$this->Text(40,40,"DEMANDE D 'EXAMEN ");
	$this->Text(35,48,"RADIOLOGIQUE   N°_ _ _ _ ");
	$this->SetFont('aefurat', '', 10);
	$this->Text(5,60,"Docteur:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(5,65,"Nom,Prénom du malade:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(5,70,"Date De Naissance:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");$this->Text(100,70,"Age:_ _ _ ans_ _ _ _ _ _ _ _ _");
	$this->Text(5,75,"Service Hospitalier:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");$this->Text(100,75,"Matricule:_ _ _ _ _ _ _ _ _ _ _");
	$this->Text(5,80,"Service Extra Hospitalier:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(5,85,"Adresse:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->SetFont('aefurat', '', 15);
	$this->Text(40,90,"DIAGNOSTIC CLINIQUE :");
	$this->Text(40,95,"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");
	$this->SetFont('aefurat', '', 10);
	$this->Text(5,105,"Examen demandés :");$this->Text(90,105,"Resultats :");
	$this->Line(50 ,110 ,50 ,163);
	$this->Text(5,110,"1)-");
	$this->Text(5,120,"2)-");
	$this->Text(5,130,"3)-");
	$this->Text(5,140,"4)-");
	$this->Text(5,150,"5)-");
	$this->Text(52,110,"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(52,120,"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(52,130,"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(52,140,"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->Text(52,150,"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	$this->SetFont('aefurat', '', 10);
    $this->Text(80,165,"AIN OUSSERA LE :".$dateeuro);
    $this->Text(100,170,"Le Medecin");
	$this->SetTextColor(225,0,0);
	$this->SetFont('aefurat', '', 12);
	$this->Text(20,60,$session);
	$this->Text(100,175,$session);
	$this->SetTextColor(0,0,255);
	
    }
    function datePlus($dateDo,$nbrJours)
	{
	$timeStamp = strtotime($dateDo); 
	$timeStamp += 24 * 60 * 60 * $nbrJours;
	$newDate = date("Y-m-d", $timeStamp);
	return  $newDate;
	}


	
    function entetesur($dateeuro,$SERVICEHOSP)
    {
	
	$session=$_SESSION["USER"];
	$this->SetTextColor(0,0,255);
	$this->setPrintHeader(false);
    $this->setPrintFooter(false);
	$this->AddPage();
	//$this->setRTL(true); 
	$this->SetDisplayMode('fullpage','single');//mode d affichage 
	$this->SetFont('aefurat', '', 10);
	$this->Text(85,10,"ETABLISSEMENT PUBLIC HOSPITALIER  AIN OUSSERA");
    $this->Text(85,15,"FEUILLE DE SURVEILLANCE SERVICE DE :".$SERVICEHOSP);
	$this->Text(5,30,"Nom:");
	$this->Text(50,30,"Prénom:");
	$this->Text(100,30,"Date De Naissance:");
	$this->Text(170,30,"Age:"."_ _ _"."ans");
	$this->Text(210,30,"date:");
	$this->Text(264,30,"heure:");
	//ligne horizentale
	for($i=60; $i<=195; $i += 10) 
	{
	$this->Line(35 ,$i,294 ,$i );
	}
	for($i=75; $i<=195; $i += 10) 
	{
	$this->Line(35 ,$i,294 ,$i );
	}
	//ligne verticale
	for($i=40; $i<=290; $i += 10) 
	{
	$this->Line($i,70,$i,195);
	}

	for($i=35; $i<=290; $i += 10) 
	{
	$this->Line($i,60,$i,195);
	}
	for($i=0;$i<=25;$i +=1) 
	{
	$this->Text($i."3"+34,64,substr($this->datePlus(date('Y/m/d'),$i),8,2));
	}
    }
	//*******************************************rage*************************************//
    function rdvrage($dateDo,$nbrJours)
	{$timeStamp = strtotime($dateDo); 
	$timeStamp += 24 * 60 * 60 * $nbrJours;
	$newDate = date("Y-m-d", $timeStamp);
	$J      = substr($newDate,8,2);
	$M      = substr($newDate,5,2);
	$A      = substr($newDate,0,4);
	$DNS    =  $J."-".$M."-".$A ;
	//return  $newDate;//date u
	return  $DNS;//date europo
	}
	function RAGE0()
    {
	$this->RoundedRect(77, 1, 70, 100, 2, $style = '');
	$this->RoundedRect(1, 1, 70, 100, 2, $style = '');
	$this->SetFont('aefurat', '', 6);
	$this->Text(82,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
	$this->Text(84,15,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA ");
	$this->Line(80 ,23 ,145 ,23 );
	$this->SetFont('aefurat','B',13);
	$this->Text(95,45,"CARTE SUIVIE");
	$this->Text(79,50,"VACCINATION ANTIRABIQUE");
	$this->SetFont('aefurat','B',8);
	$this->Text(86,60,"service des urgences medico-chirurgicales");
	$this->SetFont('aefurat','B',7);
	$this->Text(80,94,"Numéro d'identification du malade: ");//
	$this->Text(80,98,"Delivrée le: ");
	}
	
	function RAGE($age,$pd,$tv)//age ,poid, avec ou sans vaccination
    {
	$x=78;//marge gauche
	$x1=$x+38;//marge gauche du 2eme tableau ne pas modifier 
	$h=5;//HAUTER CELLULE
	$i=5;//INTERVALE CELLULE
	$l=35;//largeur cellule
	$this->RoundedRect(77, 1, 70, 100, 2, $style = '');
	$this->RoundedRect(1, 1, 70, 100, 2, $style = '');
	// $this->Rect(1, 1,80, 100 ,"d");
    // $this->Rect(82, 1,80, 100 ,"d");
	if ($age >=5)
	{
	$D="  "."inj 02ml en S/C";//DOSE ADULTE EN S/C
	$D1="  "."inj 0.25ml en I/D";//DOSE ADULTE EN I/D
	$D2="  "."inj 01 ml en IM";// DOSE SPECIAL CELLULAIRE
	}
	else
	{
	$D="  "."inj 01ml en S/C";//DOSE ENFANT EN S/C
	$D1="  "."inj 0.1ml en I/D";//DOSE ENFANT EN I/D
	$D2="  "."inj 01 ml en IM";// DOSE SPECIAL CELLULAIRE
	}
	$this->SetXY($x,$this->GetY()); 	  
	$this->cell(73-5,$h,"RDV->SHEMA ANTIRABIQUE ",1,0,'C',0);
	switch($tv) 
	{
	 case '1' ://vaccination souriceau
			{
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RDV->vaccin souriceau ",1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j0->:".$this->rdvrage(date("Y-m-d"),0).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j1->:".$this->rdvrage(date("Y-m-d"),1).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j2->:".$this->rdvrage(date("Y-m-d"),2).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j3->:".$this->rdvrage(date("Y-m-d"),3).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j4->:".$this->rdvrage(date("Y-m-d"),4).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j5->:".$this->rdvrage(date("Y-m-d"),5).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j6->:".$this->rdvrage(date("Y-m-d"),6).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RAPEL VACCINATION",1,0,'C',0);
			//*****************************RAPEL**********************************//
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j10->:".$this->rdvrage(date("Y-m-d"),10).$D1,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j14->:".$this->rdvrage(date("Y-m-d"),14).$D1,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j29->:".$this->rdvrage(date("Y-m-d"),29).$D1,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j90->:".$this->rdvrage(date("Y-m-d"),90).$D1,1,0,'C',0);
			//**************************confirmation*****************************//
			$this->SetXY($x1,$this->GetY()-60); 	  
			$this->cell($l-5,$h,"confirmation de la vaccination ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h,"confirmation de la vaccination ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			//*****************************************************************//
			break;
			}
	case '2' ://serovaccination souriceau
			{
			$s="  inj 40 ui/kg en im";
			$dose=round(($pd*40)/344,2)  ;
			//round($NET,2)
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RDV->serologie",1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j0->:".$this->rdvrage(date("Y-m-d"),0).$s,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RDV->vaccin souriceau",1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j0->:".$this->rdvrage(date("Y-m-d"),0).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j1->:".$this->rdvrage(date("Y-m-d"),1).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j2->:".$this->rdvrage(date("Y-m-d"),2).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j3->:".$this->rdvrage(date("Y-m-d"),3).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j4->:".$this->rdvrage(date("Y-m-d"),4).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j5->:".$this->rdvrage(date("Y-m-d"),5).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j6->:".$this->rdvrage(date("Y-m-d"),6).$D,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RAPEL VACCINATION",1,0,'C',0);
			//*****************************RAPEL**********************************//
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j10->:".$this->rdvrage(date("Y-m-d"),10).$D1,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j14->:".$this->rdvrage(date("Y-m-d"),14).$D1,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j24->:".$this->rdvrage(date("Y-m-d"),24).$D1,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j34->:".$this->rdvrage(date("Y-m-d"),34).$D1,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j90->:".$this->rdvrage(date("Y-m-d"),90).$D1,1,0,'C',0);
			//**************************confirmation*****************************//
			$this->SetXY($x1,$this->GetY()-75); 	  
			$this->cell($l-5,$h,"confirmation de seologie ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h,$dose." ml en IM",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," confirmation de la vaccination",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h,"confirmation de la vaccination ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l-5,$h," ",1,0,'C',0);
			//*****************************************************************//
			break;
			}
            case '3' ://vaccination CELLULAIRE
			{
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RDV->vaccin cellulaire ",1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j0->:".$this->rdvrage(date("Y-m-d"),0).$D2,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j0->:".$this->rdvrage(date("Y-m-d"),0).$D2,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j7->:".$this->rdvrage(date("Y-m-d"),7).$D2,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j21->:".$this->rdvrage(date("Y-m-d"),21).$D2,1,0,'C',0);
			//**************************confirmation*****************************//
			$this->SetXY($x1,$this->GetY()-20); 	  
			$this->cell($l,$h,"confirmation de la vaccination ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			//*****************************************************************//
			break;
			}
            case '4' ://SERO-vaccination CELLULAIRE
			{
			$s="  inj 40 ui/kg en im";
			$dose=round(($pd*40)/344,2)  ;
			//round($NET,2)
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RDV->serologie",1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j0->:".$this->rdvrage(date("Y-m-d"),0).$s,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RDV->vaccin cellulaire",1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j0->:".$this->rdvrage(date("Y-m-d"),0).$D2,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j3->:".$this->rdvrage(date("Y-m-d"),3).$D2,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j7->:".$this->rdvrage(date("Y-m-d"),7).$D2,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j14->:".$this->rdvrage(date("Y-m-d"),14).$D2,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"RAPEL VACCINATION",1,0,'C',0);
			//*****************************RAPEL**********************************//
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j30->:".$this->rdvrage(date("Y-m-d"),30).$D2,1,0,'C',0);
			$this->SetXY($x,$this->GetY()+$i); 	  
			$this->cell($l,$h,"j90->:".$this->rdvrage(date("Y-m-d"),90).$D2,1,0,'C',0);
			//**************************confirmation*****************************//
			$this->SetXY($x1,$this->GetY()-45); 	  
			$this->cell($l,$h,"confirmation de seologie ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h,$dose." ml en IM",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," confirmation de la vaccination",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h,"confirmation de la vaccination ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			$this->SetXY($x1,$this->GetY()+$i); 	  
			$this->cell($l,$h," ",1,0,'C',0);
			//*****************************************************************//
			break;
			}			
			
	}
	}
	
	function DEMHOS($MEDECIN,$SERVICE,$NOM,$PRENOM,$SEXE,$DATENAISSANCE,$dgc,$NLIT,$WILAYAR,$COMMUNER,$ADRESSE)
	{
	$session=$_SESSION["USER"];
	$this->AddPage();
	$this->SetDisplayMode('fullpage','single');//mode d affichage
	$J      = substr($DATENAISSANCE,8,2);
	$M      = substr($DATENAISSANCE,5,2);
	$A      = substr($DATENAISSANCE,0,4);
	$DNS    =  $J."-".$M."-".$A ;
	$DNSENA =  $J.$M.$A ;
	$AGE    = date("Y")-$A;
	$this->EAN13(170,15,$DNSENA);
	$this->SetFont('aefurat','I', 10);
	$this->Text(50,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
	$this->Text(35,10,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
	$this->Text(55,15,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA");
	$this->SetFont('aefurat','I', 22);
	$this->Text(50,35,"DEMANDE D'HOSPITALISATION  ");
	$this->SetFont('aefurat','I', 14);
	$this->RoundedRect(4, 55, 202, 35, 2, $style = ''); //Rect(4,50,202,35,"d");
	$this->Text(5,56,"SERVICE : ".$this->nbrtostring("grh","service","ids",$SERVICE,"servicefr") );
	$this->Text(100,56,"SPECIALITE :");
	$this->Text(5,66,"Non Du Praticien Ayant Accordé L'hospitalisation : DR ".$MEDECIN);
	$this->Text(5,76,"Grade : ");
	$this->RoundedRect(4, 94, 202, 50, 2, $style = '');//Rect(4,94,202,50,"d");
	$this->SetFont('aefurat','I', 18);
	$this->Text(90,95,"PATIENT");
	$this->SetFont('aefurat','I', 14);
	$this->Text(5,105,"Nom : ".$NOM);
	$this->Text(100,105,"Nom De Jeune Fille:"); 
	$this->Text(175,105,"Sexe : ".$SEXE); 
	$this->Text(5,115,"Prénom : ".$PRENOM);
	$this->Text(100,115,"Date  De Naissance : ".$DNS);
	$this->Text(175,115,"Age : ".$AGE );
	$this->Text(5,125,"Nom De La Salle : ".$this->nbrtostring("grh","service","ids",$SERVICE,"servicefr"));   
	$this->Text(100,125,"N°Du Lit D'Hospitalisation : ".$this->nbrtostring("grh","lit","idlit",$NLIT,"nlit"));
	$this->Text(5,135,"Date Admission Hopital : ".date("d-m-Y")); 
	$this->Text(100,135,"Heure Hospitalisation : ".date("H:i"));
	$this->RoundedRect(4, 147, 202, 40, 2, $style = '');//$this->Rect(4,147,202,40,"d");
	$this->SetFont('aefurat','I', 18);
	$this->Text(45,148,"MALADE ORIENTE OU ADRESSE PAR :");
	$this->SetFont('aefurat','I', 14);
	$this->Text(5,158,"Nom et Prémom Du Médecin :");
	$this->Text(5,168,"Grade : "); 
	$this->Text(100,168,"Etablissement :"); 
	$this->Text(5,178,"Etablissement / Unite / Service :");
	$this->RoundedRect(4, 190, 202, 50, 2, $style = '');//$this->Rect(4,190,202,50,"d");
	$this->SetFont('aefurat','I', 18);
	$this->Text(75,190,"GARDE MALADE "); 
	$this->SetFont('aefurat','I', 14);
	$this->Text(5,200,"Nom et Prénom Du Garde Malade :"); 
	$this->Text(5,210,"Pièce D'identité N°:"); 
	$this->Text(100,210,"Délivrée Le :");
	$this->Text(5,220,"Par :");
	$this->Text(5,250,"Signature");
	$this->Text(100,250,"Date : ".date("d-m-Y"));
	$this->Text(100,260,"Visa Du Praticien : Dr ".$MEDECIN);
	$this->SetFont('aefurat','I', 8);
	$this->Text(5,265,"NB:");
	$this->SetFillColor(250); 
	$this->setxy(10,10);
	//********************bultin d admission *********************//
	// $this->AddPage();
	// $this->SetDisplayMode('fullpage','single');//mode d affichage
	// $this->SetFont('aefurat','I', 10);
	// $this->Text(50,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
	// $this->Text(55,10,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA");
	// $this->Text(80,15,"BULTIN D ADMISSION");
	// $this->SetFont('aefurat','I', 12); 
	// $this->Text(5,20,"IDENTIFICATION DU PATIENT");
	// $this->RoundedRect(5, 25, 202, 115, 2, $style = '');
	// $this->Text(5,30-5,"N° D'ADMISSION");        $this->Text(80,30-5,$this->nbrtostring("grh","service","ids",$SERVICE,"servicefr")); $this->Text(170,30-5,"DATE ");                                                                            
	// $this->Text(5,45,"Qualite du patient vis a vis de l'assurance");             $this->Text(120,45,"Age: ".$AGE." Ans");
	// $this->Text(5,55,"Nom: ".$NOM);      $this->Text(50,55,"Prénom: ".$PRENOM);    $this->Text(120,55,"Sexe: ".$SEXE);
	// $this->Text(5,65,"Date De Naissance: ".$DNS);                                 $this->Text(120,65,"Lieu De Naissance");
	// $this->Text(5,75,"Fils De ");                                                $this->Text(120,75,"Et De ");
	// $this->Text(5,85,"Nationalite ");                                            $this->Text(120,85,"Profession");
	// $this->Text(5,95,"Situation Familiale ");                                    $this->Text(120,95,"Epouse De ");
	// $this->Text(5,105,"Situation Familiale ");                                   $this->Text(120,105,"Epouse De ");
	// $this->Text(5,115,"Adresse De Residence ");
	// $this->Text(5,125,"Nom Et Prenom De La Personne A Contacter ");              $this->Text(120,125,"N° Telphone ");
	// $this->Text(5,135,"Adresse De Contact ");                                   
	// $this->Text(5,140,"IDENTIFICATION DE ASSURER");
	// $this->RoundedRect(5, 145, 202, 45, 2, $style = ''); 
	// $this->Text(5,145,"Immatriculation");                      $this->Text(50,145,"N° De Prise Encharge SS");
	// $this->Text(5,155,"Nom");                                  $this->Text(50,155,"Prenom");
	// $this->Text(5,165,"Date De Naissance");
	// $this->Text(5,175,"Caisse D Affiliation");
	// $this->Text(5,185,"Employeur");
	// $this->Text(5,190,"HOSPITALISATION");
	// $this->RoundedRect(5, 195, 202, 35, 2, $style = ''); 
	// $this->Text(5,195,"Service D Hospitalisation:".$this->nbrtostring("grh","service","ids",$SERVICE,"servicefr"));$this->Text(100,195,"Date Entree: ".date("d-m-Y")); $this->Text(150,195,"Heure : ".date("H:i"));
	// $this->Text(5,205,"Nom unite ");                                        $this->Text(50,205,"N° De Lit: ".$this->nbrtostring("grh","lit","idlit",$NLIT,"nlit"));$this->Text(100,205,"Medecin Traitant : Dr ".$MEDECIN);
	// $this->Text(5,215,"Mode  D Entree ");                                   $this->Text(50,215,"N° Prise En Charge Sante ");
	// $this->Text(5,225,"Etablissemnet D origine ");                                  
	// $this->Text(5,230,"ACCIDENT");
	// $this->RoundedRect(5, 235, 202, 35, 2, $style = ''); 
	// $this->Text(5,235,"Type D accident");
	// $this->Text(5,245,"Date De Levnement");
	// $this->Text(5,255,"Patient Transporte Par");
	// $this->Text(5,265,"Autorite Charge De Lenquete");
	// observation
	$this->AddPage();
	$this->SetDisplayMode('fullpage','single');//mode d affichage
	$this->SetFont('aefurat','I', 10);
	$this->Text(50,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
	$this->Text(35,10,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
	$this->Text(55,15,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA");
	$this->Text(5,20,"MATRICULE : ...................................");$this->Text(130,20,"DOSSIER N° : ...................................");
	$this->Text(5,25,"SERVICE : ".$this->nbrtostring("grh","service","ids",$SERVICE,"servicefr") );
	$this->SetFont('aefurat','I', 20);
	$this->Text(60,30,"FEUILLE D'OBSERVATION");
	$this->SetFont('aefurat','I', 12);
	
	$this->RoundedRect(5, 40, 125, 32, 2, $style = '');$this->RoundedRect(130, 40, 77, 32, 2, $style = ''); 
	$this->Text(5,40,"Service Du docteur :");        $this->Text(130,40,"Salle : ".$this->nbrtostring("grh","service","ids",$SERVICE,"servicefr")); 
	$this->Text(5,45,"Nom : ".$NOM);                 $this->Text(70,45,"Prénom : ".$PRENOM); $this->Text(130,45,"N°Du Lit : ".$this->nbrtostring("grh","lit","idlit",$NLIT,"nlit"));
	$this->Text(5,50,"Nom De Jeune Fille : ");       $this->Text(70,50,"Sexe : ".$SEXE);
	$this->Text(5,55,"Date  De Naissance : ".$DNS);  $this->Text(70,55,"Age : ".$AGE );      $this->Text(130,55,"Entree le : ".date("d-m-Y")); $this->Text(180,55,"Heure : ".date("H:i")); 
	$this->Text(5,60,"Lieu  De Naissance : ");                                             $this->Text(130,60,"Sortie le : "); $this->Text(180,60,"Heure :"); 
	$this->Text(5,65,"Etat Civil : ");                                                     $this->Text(130,65,"diagnostic : ".$dgc);                                             
	
	$this->RoundedRect(5, 72, 202, 30, 2, $style = ''); 
	$this->Text(5,72,"Sommaire de l'Observation:");//
	
	$this->RoundedRect(5,50+38+14, 30, 10, 2, $style = '');$this->RoundedRect(35,50+38+14, 172, 10, 2, $style = '');
	$this->Text(15,105,"Dates:");$this->Text(90,105,"Observations Medicales");
	$this->RoundedRect(5,50+38+14, 30, 170+15, 2, $style = '');$this->RoundedRect(35,50+38+14, 172,170+15, 2, $style = '');
	$this->SetFont('aefurat','I', 11);
	$this->Text(6,115,date("d-m-Y"));
	
	
	$this->RoundedRect(35,112, 172,34-14, 2, $style = '');
	$this->Text(35,115,"Il s'agit de M.".$NOM."_".$PRENOM." âgé de ".$AGE." ans de sexe : ".$SEXE);
	$this->Text(35,120,"Résidant a : /_/ ".$ADRESSE." /_/ ".$this->nbrtostring("grh","com","IDCOM",$COMMUNER,"COMMUNE")." /_/ ".$this->nbrtostring("grh","wil","idwil",$WILAYAR,"WILAYAS"));
	
	
	
	$this->RoundedRect(35,146-14, 172,14, 2, $style = '');
	$this->Text(35,146-14,"MOTIF D'HOSPITALISATION ");
	$this->Text(35,152-14,"Accompagné par                                   Pour Bilan Dgc et Thérapeutique : ".$dgc); //sf signe fonctionnel sphsigne physique srsigne radiologique sbsigne général
	
	
	
	$this->RoundedRect(35,160-14, 172,25, 2, $style = '');
	$this->Text(35,160-14,"ANTECEDENTS ");
	$this->Text(40,165-14,"ATCDs Personnels");
	$this->Text(45,170-14,"* Médicaux :       ------------------------------------------------------------------");
	$this->Text(45,175-14,"* Chirurgicaux :  ------------------------------------------------------------------");
	$this->Text(40,180-14,"ATCDs Familiaux :  ------------------------------------------------------------------");
	
	$this->RoundedRect(35,185-14, 172,25, 2, $style = '');
	$this->Text(35,185-14,"HISTOIRE DE LA MALADIE ");
     

	$this->RoundedRect(35,185+25-14, 172,30, 2, $style = '');
	$this->Text(35,185+25-14,"EXAMEN PHYSIQUE ");
	$this->Text(35,215-14,"Score Glasgow : _ _ /15 ");$this->Text(75,215-14,"Coloration Cutaneo-muqueuse : ");  $this->Text(145,215-14,"Poids: _ _ Kg");       $this->Text(176,215-14,"Taille : _ _ _ Cm");
	$this->Text(35,220-14,"TA : _ _ _ / _ _ _ mmhg ");$this->Text(75,220-14,"FC : _ _ _ batt/m : ");          $this->Text(145,220-14,"FR : _ _  cycles/m");$this->Text(176,220-14,"T° :  _ _ °C");
	$this->Text(35,225-14,"_ ");
	$this->Text(35,230-14,"_ ");
	$this->Text(35,235-14,"Le reste de l'examen somatique est sans particularité.");
	
	
	$this->RoundedRect(35,240-14, 172,5, 2, $style = '');
	$this->Text(35,240-14,"LE DIAGNOSTIC A EVOQUER : ".$dgc);
	
    $this->RoundedRect(35,231, 172,42+14, 2, $style = '');
    $this->Text(35,245-14,"Hospitalisation,Mise en condition,Abord veineux Péripherique avec : SSI9% / SGI5% / plasmagel /manitol");
    $this->Text(35,250-14,"Bilan biologique standard : FNS  / GROUPAGE  / UREE  / CREAT  / GLYCEMIE  / TP ");
	$this->Text(35,255-14,"Bilan radiologique : ");
	$this->Text(35,260-14,"Traitement Médical Initiale:");

    $this->AddPage();
	$this->RoundedRect(5,5, 30, 10, 2, $style = '');$this->RoundedRect(35,5, 172, 10, 2, $style = '');
	$this->Text(15,8,"Dates:");$this->Text(80,8,"Evolution Médicales Du Patient : ".$NOM."_".$PRENOM);
	$this->RoundedRect(5,5, 30, 280, 2, $style = '');$this->RoundedRect(35,5, 172,280, 2, $style = '');
	
	
	
	
	// +Faire un bilan : NFS, bilan hépatique ; cardio-vasculaire ***************************.
	// +Traitement approprié : 
	// *********************************************)
	// *********************************
	// EVOLUTION :
	// Le patient semble s’améliorer**********. Il prend *************** son traitement, et ne présente *********** effet indésirable.
	// **********************************)
	// On note la disparition de ****************************.
	// SURVEILLANCE :
	// +Evolution de la maladie.
	// +Réponse au traitement.
	// +Rechercher les effets secondaires au traitement.
	// +Contrôle de la NFS, bilan hépatique, rénal, et 
	// Cardiovasculaire.***************
	
    // $this->Cell(20,10,'retour',1,1,'C',true,'http://localhost/EXPEMPLE/index.php?uc=NPAT');
	// if ($dgc == 'ps') 
	// {
	// $this->AddPage();
	// $x=5;
	// $y=6.5;
	// $this->SetFont('aefurat','I', 14);
	// $this->Text($x+60,$this->GetY()+$y,"Fiche initiale et de liaison des cas ");
	// $this->Text($x+60,$this->GetY()+$y,"d envenimation scorpionique - 1 -");
	// $this->SetFont('aefurat','I', 12);
	// $this->Text($x,$this->GetY()+$y,"Année : ".date('Y'));
    // $this->Text($x,$this->GetY()+$y,"Wilaya : DJELFA");          $this->Text($x+100,$this->GetY(),"Commune: AIN OUSSERA");
    // $this->Text($x,$this->GetY()+$y,"EPSP de:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");
    // $this->Text($x,$this->GetY()+$y,"Salle de soins de: _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");       $this->Text($x+100,$this->GetY(),"Polyclinique de:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");
    // $this->Text($x,$this->GetY()+$y,"EPH de : AIN OUSSERA");                 $this->Text($x+100,$this->GetY(),"EHS de:_ _ _ _ _ _ _ _ _ _ _"); $this->Text($x+150,$this->GetY(),"CHU de:_ _ _ _ _ _ _ _ _");
	// $this->SetFont('aefurat','B', 13);
	// $this->Text($x,$this->GetY()+$y,"1ère partie : Volet socio démographique et environnemental");
	// $this->SetFont('aefurat','I', 12);
	// $this->Text($x,$this->GetY()+$y,"1. Nom du patient : ".$NOM);      $this->Text($x+100,$this->GetY(),"Prénom :".$PRENOM);
	// if ($SEXE=='M')
	// {
	// $SEXE1="X";$SEXE2="";
	// }
	// else
	// {
	// $SEXE1="";$SEXE2="X";
	// }
	// $this->Text($x,$this->GetY()+$y,"2. Sexe : M /___/ F /___/");$this->Text($x+23,$this->GetY(),$SEXE1);$this->Text($x+36,$this->GetY(),$SEXE2);
	// $this->Text($x,$this->GetY()+$y,"3. Date de naissance : /___/___/_____/ (Préciser le jour, le mois et l année)");$this->Text($x+40,$this->GetY(),$J);$this->Text($x+48,$this->GetY(),$M);$this->Text($x+55,$this->GetY(),$A);
	// $this->Text($x,$this->GetY()+$y,"4. Profession:_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");
	// $this->Text($x,$this->GetY()+$y,"5. Adresse de résidence :".$ADRESSE);
	// $this->Text($x,$this->GetY()+$y,"6. Commune de résidence :".$this->nbrtostring("grh","com","IDCOM",$COMMUNER,"COMMUNE"));$this->Text($x+100,$this->GetY(),"Wilaya de résidence :".$this->nbrtostring("grh","wil","IDWIL",$WILAYAR,"WILAYAS"));
	// $this->Text($x,$this->GetY()+$y,"7. Date de l accident : /____/____/_______/ (Préciser le jour, le mois et l année)");
	// $this->Text($x,$this->GetY()+$y,"   Heure de l accident : /__/__/H /__/__/ Min");
	// $this->Text($x,$this->GetY()+$y,"8. Lieu de l accident :");
	// $this->Text($x,$this->GetY()+$y,"   8.1. Wilaya : ");
	// $this->Text($x,$this->GetY()+$y,"   8.2. Commune : ");
	// $this->Text($x,$this->GetY()+$y,"   8.3. Zone rurale /__/ Zone urbaine /__/");
	// $this->Text($x,$this->GetY()+$y,"   8.4. Intérieur du logement /__/ Extérieur du logement /__/");
	// $this->Text($x,$this->GetY()+$y,"9. Type d habitat : - Maison individuelle / Villa /__/ - Immeuble /__/");
	// $this->Text($x,$this->GetY()+$y,"                    - Habitat précaire /__/                              - Maison traditionnelle (haouch) /__/");
	// $this->Text($x,$this->GetY()+$y,"                    - Tente de nomade /__/                            - Autres /__/, préciser :");
	// $this->Text($x,$this->GetY()+$y,"10. Le scorpion a-t il été vu par le patient ou sa famille? Oui /__/ Non /__/");
	// $this->Text($x,$this->GetY()+$y,"    Si oui : préciser sa couleur :");
	// $this->Text($x,$this->GetY()+$y,"    préciser sa taille : /____/ cm");
	// $this->Text($x,$this->GetY()+$y,"11. Le patient a-t-il fait l objet de gestes inutiles ou dangereux avant de se présenter en consultation?");
	// $this->Text($x,$this->GetY()+$y,"    Oui /__/ Non /__/");
	// $this->Text($x,$this->GetY()+$y,"    Si oui, le(s)quel(s) ?");
	// $this->Text($x,$this->GetY()+$y," ");
	// $this->SetFont('aefurat','B', 14);
	// $this->Text($x,$this->GetY()+$y,"2ème partie : Volet sanitaire");
	// $this->SetFont('aefurat','I', 12);
	// $this->Text($x,$this->GetY()+$y,"12. Date du 1er examen : /___/___/_____/ (Préciser le jour, le mois et l année)");$this->Text($x+46,$this->GetY(),date('j'));$this->Text($x+53,$this->GetY(),date('m'));$this->Text($x+61,$this->GetY(),date('Y'));
	// $this->Text($x,$this->GetY()+$y,"     Heure du 1er examen : /____/H /____/ Min");$this->Text($x+48,$this->GetY(),date('h')); $this->Text($x+63,$this->GetY(),date('i'));
	// $this->Text($x,$this->GetY()+$y,"13. Antécédents pathologiques : Oui /__/ Non /__/");
	// $this->Text($x,$this->GetY()+$y,"     Si oui, préciser :");
	// $this->Text($x,$this->GetY()+$y,"14. Siège anatomique de la piqûre (Cf. Schéma dans le guide d utilisation)");
	// $this->Text($x,$this->GetY()+$y,"    - Tête / Cou /__/                         - Tronc /__/");
	// $this->Text($x,$this->GetY()+$y,"    - Membre supérieur /__/            - Membre inférieur /__/");
	// $this->AddPage();
	// $y=6;
	// $this->Text($x,$this->GetY()+$y,"15.Classe sur le lieu du 1er examen");
	// $this->Text($x,$this->GetY()+$y,"Piqûre de scorpion");                    $this->Text($x+70,$this->GetY(),"Signes d envenimation scorpionique");
	// $this->Text($x,$this->GetY()+$y,"Signes locaux");                         $this->Text($x+70,$this->GetY(),"Signes généraux");                   $this->Text($x+125,$this->GetY(),"Signes de détresse vitale");
	// $this->Text($x,$this->GetY()+$y,"Douleur /___/");                         $this->Text($x+70,$this->GetY(),"Facteurs de risque");                $this->Text($x+125,$this->GetY(),"Respiratoire");
	// $this->Text($x,$this->GetY()+$y,"Fourmillements /___/");                  $this->Text($x+70,$this->GetY(),"Bradycardie /___/");                 $this->Text($x+125,$this->GetY(),"Insuffisance respiratoire /___/");
	// $this->Text($x,$this->GetY()+$y,"Paresthésies/Brûlures /___/");           $this->Text($x+70,$this->GetY(),"Fièvre /___/");                      $this->Text($x+125,$this->GetY(),"OAP cardiogénique /___/");
	// $this->Text($x,$this->GetY()+$y,"Engourdissement /___/");                 $this->Text($x+70,$this->GetY(),"Hypersudation /___/");               $this->Text($x+125,$this->GetY(),"Cardiovasculaire");
	                                                                          // $this->Text($x+70,$this->GetY()+$y,"Priapisme /___/");                $this->Text($x+125,$this->GetY(),"Hypotension artérielle /___/");
	                                                                          // $this->Text($x+70,$this->GetY()+$y,"Hyperglycémie > 2 g/l /___/");    $this->Text($x+125,$this->GetY(),"Troubles du rythme /___/");
	                                                                          // $this->Text($x+70,$this->GetY()+$y,"Autres signes"); 	                $this->Text($x+125,$this->GetY(),"Neurologique centrale");
	                                                                          // $this->Text($x+70,$this->GetY()+$y,"généraux");
	                                                                          // $this->Text($x+70,$this->GetY()+$y,"Diarrhée /___/");                 $this->Text($x+125,$this->GetY(),"Coma /___/");
	                                                                          // $this->Text($x+70,$this->GetY()+$y,"Vomissements /___/");             $this->Text($x+125,$this->GetY(),"Convulsions /___/");
	// $this->Text($x,$this->GetY()+$y,"Classe 1 : /__/");                       $this->Text($x+70,$this->GetY(),"Classe 2 : /__/");                   $this->Text($x+125,$this->GetY(),"Classe 3 : /__/");
	
	
	// $this->Text($x,$this->GetY()+$y,"16.CAT sur le lieu du 1er examen");
	// $this->Text($x,$this->GetY()+$y,"SAS : oui /__/ non /__/ si oui, Nombre d ampoules : /____/");
	// $this->Text($x,$this->GetY()+$y,"      Heure d administration de la première ampoule : /___/___/H /___/___/ mn");
	// $this->Text($x,$this->GetY()+$y,"      Heure d administration de la dernière ampoule : /___/___/H /___/___/ mn");
	// $this->Text($x,$this->GetY()+$y,"Traitement symptomatique reçu :_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");
	// $this->Text($x,$this->GetY()+$y,"                                                      _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");
	// $this->Text($x,$this->GetY()+$y,"                                                      _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ ");
	  
	// $this->Text($x,$this->GetY()+$y,"17. Si évacuation motifs d évacuation : _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _");
	// $this->Text($x,$this->GetY()+$y,"18. Date /____/____/_______/ et heure de l évacuation /__/__/H /__/__/ Min");
	// $this->Text($x,$this->GetY()+$y,"19. Classe au moment de l évacuation");
	// $this->Text($x,$this->GetY()+$y,"Signes d envenimation scorpionique");
	// $this->Text($x,$this->GetY()+$y,"Signes généraux");       $this->Text($x+90,$this->GetY(),"Signes de détresse vitale");
	// $this->Text($x,$this->GetY()+$y,"Facteurs de risque");    $this->Text($x+90,$this->GetY(),"Respiratoire");
	// $this->Text($x,$this->GetY()+$y,"Bradycardie /___/");     $this->Text($x+90,$this->GetY(),"Insuffisance respiratoire /___/");
	// $this->Text($x,$this->GetY()+$y,"Fièvre /___/");          $this->Text($x+90,$this->GetY(),"OAP cardiogénique /___/");
	// $this->Text($x,$this->GetY()+$y,"Hypersudation /___/");   $this->Text($x+90,$this->GetY(),"Cardiovasculaire");
	// $this->Text($x,$this->GetY()+$y,"Priapisme /___/");       $this->Text($x+90,$this->GetY(),"Hypotension artérielle /___/");
	
	
	// $this->Text($x,$this->GetY()+$y,"Hyperglycémie > 2 g/l /___/");  $this->Text($x+90,$this->GetY(),"Troubles du rythme /___/");
	// $this->Text($x,$this->GetY()+$y,"Autres signes");                $this->Text($x+90,$this->GetY(),"Neurologique");
	// $this->Text($x,$this->GetY()+$y,"généraux");                     $this->Text($x+90,$this->GetY(),"centrale");
	// $this->Text($x,$this->GetY()+$y,"Diarrhée /___/");               $this->Text($x+90,$this->GetY(),"Coma /___/");
	
	// $this->Text($x,$this->GetY()+$y,"Vomissements /___/");           $this->Text($x+90,$this->GetY(),"Convulsions /___/");
	// $this->Text($x,$this->GetY()+$y,"Classe 2 : /__/");              $this->Text($x+90,$this->GetY(),"Classe 3 : /__/");
	
	// $this->Text($x,$this->GetY()+$y,"20. Si décès");
	// $this->Text($x,$this->GetY()+$y,"     Noter : la date du décès: /___/___/______/ (Préciser le jour, le mois et l année)");
	// $this->Text($x,$this->GetY()+$y,"             et l heure du décès : /__/__/H /__/__/ Min");
	// $this->SetFont('aefurat','B', 14);
	// $this->Text($x,$this->GetY()+$y,"     Remplir la fiche -2- et la transmettre au SEMEP.");
	// $this->SetFont('aefurat','I', 12);
	// $this->Text($x+100,$this->GetY()+$y," Médecin traitant : Dr ".$MEDECIN);
	// $this->Text($x+100,$this->GetY()+$y," Cachet de la structure et signature");
	
	// $this->SetFont('aefurat','I', 8);
	// $this->SetFillColor(250); 
	// $this->setxy(10,10);
    // $this->Cell(20,10,'retour',1,1,'C',true,'http://localhost/PATIENT/index.php?uc=NPAT');
	// }
	
	}	
	
// ***************************************************barre code******************************************
//ne pas modifier
	function EAN13($x, $y, $barcode, $h=16, $w=.35)
	{
		$this->Barcode($x,$y,$barcode,$h,$w,13);
	}

	function UPC_A($x, $y, $barcode, $h=16, $w=.35)
	{
		$this->Barcode($x,$y,$barcode,$h,$w,12);
	}

	function GetCheckDigit($barcode)
	{
		//Calcule le chiffre de contrôle
		$sum=0;
		for($i=1;$i<=11;$i+=2)
			$sum+=3*$barcode[$i];
		for($i=0;$i<=10;$i+=2)
			$sum+=$barcode[$i];
		$r=$sum%10;
		if($r>0)
			$r=10-$r;
		return $r;
	}

	function TestCheckDigit($barcode)
	{
		//Vérifie le chiffre de contrôle
		$sum=0;
		for($i=1;$i<=11;$i+=2)
			$sum+=3*$barcode[$i];
		for($i=0;$i<=10;$i+=2)
			$sum+=$barcode[$i];
		return ($sum+$barcode[12])%10==0;
	}

	function Barcode($x, $y, $barcode, $h, $w, $len)
	{
		//Ajoute des 0 si nécessaire
		$barcode=str_pad($barcode,$len-1,'0',STR_PAD_LEFT);
		if($len==12)
			$barcode='0'.$barcode;
		//Ajoute ou teste le chiffre de contrôle
		if(strlen($barcode)==12)
			$barcode.=$this->GetCheckDigit($barcode);
		elseif(!$this->TestCheckDigit($barcode))
			$this->Error('Incorrect check digit');
		//Convertit les chiffres en barres
		$codes=array(
			'A'=>array(
				'0'=>'0001101','1'=>'0011001','2'=>'0010011','3'=>'0111101','4'=>'0100011',
				'5'=>'0110001','6'=>'0101111','7'=>'0111011','8'=>'0110111','9'=>'0001011'),
			'B'=>array(
				'0'=>'0100111','1'=>'0110011','2'=>'0011011','3'=>'0100001','4'=>'0011101',
				'5'=>'0111001','6'=>'0000101','7'=>'0010001','8'=>'0001001','9'=>'0010111'),
			'C'=>array(
				'0'=>'1110010','1'=>'1100110','2'=>'1101100','3'=>'1000010','4'=>'1011100',
				'5'=>'1001110','6'=>'1010000','7'=>'1000100','8'=>'1001000','9'=>'1110100')
			);
		$parities=array(
			'0'=>array('A','A','A','A','A','A'),
			'1'=>array('A','A','B','A','B','B'),
			'2'=>array('A','A','B','B','A','B'),
			'3'=>array('A','A','B','B','B','A'),
			'4'=>array('A','B','A','A','B','B'),
			'5'=>array('A','B','B','A','A','B'),
			'6'=>array('A','B','B','B','A','A'),
			'7'=>array('A','B','A','B','A','B'),
			'8'=>array('A','B','A','B','B','A'),
			'9'=>array('A','B','B','A','B','A')
			);
		$code='101';
		$p=$parities[$barcode[0]];
		for($i=1;$i<=6;$i++)
			$code.=$codes[$p[$i-1]][$barcode[$i]];
		$code.='01010';
		for($i=7;$i<=12;$i++)
			$code.=$codes['C'][$barcode[$i]];
		$code.='101';
		//Dessine les barres
		for($i=0;$i<strlen($code);$i++)
		{
			if($code[$i]=='1')
				$this->Rect($x+$i*$w,$y,$w,$h,'F');
		}
		//Imprime le texte sous le code-barres
		$this->SetFont('aefurat','', 12);//$this->SetFont('Arial','',12);
		//$this->Text($x,$y+$h+11/$this->k,substr($barcode,-$len));
	}
// ***************************************************barre code******************************************
function BONPRODUCTION( $mode,$nbc )
{
	$r1  = 53;
	$r2  = $r1 + 95;
	$y1  = 60;
	$y2  = $y1+10;
	$mid = $y1 + (($y2-$y1) / 2);
	$this->RoundedRect($r1, $y1, ($r2 - $r1), ($y2-$y1), 2.5, 'D');
	//$this->Line( $r1, $mid, $r2, $mid);
	$this->SetXY( $r1 + ($r2-$r1)/2 -5 , $y1+3 );
	$this->SetFont( "aefurat", "B", 18);
	$this->Cell(10,4, "BON DE PRODUCTION N°:".$nbc, 0, 0, "C");
	$this->SetXY( $r1 + ($r2-$r1)/2 -5 , $y1 + 5 );
	$this->SetFont( "aefurat", "", 10);
	$this->Cell(10,5,$mode, 0,0, "C");
}



function temporaire( $texte )
{
	$this->SetFont('aefurat','B',50);
	$this->SetTextColor(203,203,203);
	$this->Rotate(45,55,190);
	$this->Text(55,190,$texte);
	$this->Rotate(0);
	$this->SetTextColor(0,0,0);
}


function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
{
	$h = $this->h;
	$this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
						$x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
}
function RoundedRect($x, $y, $w, $h, $r, $style = '')
{
	$k = $this->k;
	$hp = $this->h;
	if($style=='F')
		$op='f';
	elseif($style=='FD' || $style=='DF')
		$op='B';
	else
		$op='S';
	$MyArc = 4/3 * (sqrt(2) - 1);
	$this->_out(sprintf('%.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));
	$xc = $x+$w-$r ;
	$yc = $y+$r;
	$this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));

	$this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);
	$xc = $x+$w-$r ;
	$yc = $y+$h-$r;
	$this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
	$this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);
	$xc = $x+$r ;
	$yc = $y+$h-$r;
	$this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
	$this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);
	$xc = $x+$r ;
	$yc = $y+$r;
	$this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
	$this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
	$this->_out($op);
}
}	