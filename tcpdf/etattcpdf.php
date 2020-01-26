<?php
//classe tcpdf 
class GRH1 extends TCPDF

{
    function connection ($idp) 
    {
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass=""; 
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	$IDRECmg ;
   
	mysql_query("SET NAMES 'UTF8' ");
	$sql = "SELECT grh.Nom_Latin,grh.FILIERE, grh.Nomarab as nomar,grade.gradear as grade,grh.Prenom_Arabe as prenomar,grh.Date_Naissance,grh.Commune_Naissancear,grh.Wilaya_Naissancear,grh.Grade_Actuel,grh.DATEARRIVE,regcong.idregcong as idregcong ,regcong.datesor as datesor ,regcong.dateent as dateent,regcong.cause as  cause,regcong.remplacant as remplacant ,regcong.duree as duree,regcong.idp as idpreg,regcong.QUT as reliquat
	
	FROM grh
	
	inner join grade 
	on grh.rnvgradear=grade.idg
	
	inner join regcong 
    on grh.idp=regcong.idp
	
	WHERE  regcong.idp = '".$idp."' "; 
	
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
	//$this->Text(165,220,$date);
	$this->Text(114,89,$result["nomar"]);
	$this->Text(19,89,$result["prenomar"]);
	$this->Text(24,98,$result["grade"]);
	$this->Text(32,109,$result["DATEARRIVE"]);
	}
	//entete
    function entete()
    {
	
	$this->setPrintHeader(false);
    $this->setPrintFooter(false);
	$this->AddPage();
	$this->setRTL(true);
    $this->SetDisplayMode('fullpage','single');//mode d affichage 
	$date1=date("Y");
    $this->SetFont('aefurat', '', 14);
    $this->Text(60,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
    $this->Text(55,20,"وزارة الصحة و السكان و إصلاح المستشفيات");
    $this->Text(5,30,"مديرية الصحة و السكان لولاية الجلفة");
    $this->Text(5,40,"المؤسسة العمومية الاستشفائية عين وسارة");
    $this->Text(5,50,"المديرية الفرعية للموارد البشرية ");
    // $this->Text(5,60," الرقم:......./");
    $this->Text(5,60,"الرقم : ....... /");
	$this->Text(30,60,$date1);
    }
    function titre()
    {
         $this->SetFont('aefurat', '', 14);
         $this->SetXY(70,70);
         $this->Cell(65,15,'بطاقــــة حساب العطلــة السنوية',1,1,'C');
	     $this->SetFont('aefurat', '', 14);
		 $this->Text(5,90," الاسم :"."" );
		 $this->Text(100,90," اللقب :");
		 $this->Text(5,100,"الرتبـــة:");
		 $this->Text(5,110,"تاريخ الالتحاق:");
		 
    }	

	function entetetableau()
	{
	$this->SetFillColor(220);//il faut ajouter au cell un autre parametre pour qui accepte la coloration
    $this->SetDrawColor(0,0,150);
	$this->SetTextColor(0,0,0);
	$this->SetFont('aefurat','I', 13);
	$h=125;
	$this->SetXY(5,$h); 	  
	$this->cell(20,5,"السنوات",1,0,'C',1,0);
	$this->SetXY(25,$h); 	  
	$this->cell(30,05,"تاريخ   الخروج ",1,0,'C',1,0);
	$this->SetXY(55,$h); 	  
	$this->cell(30,05,"تاريخ الدخول",1,0,'C',1,0);
	$this->SetXY(85,$h); 	  
	$this->cell(15,05,"المدة ",1,0,'C',1,0);
	$this->SetXY(100,$h); 	  
	$this->cell(35,0.5,"نوع العطلة ",1,0,'C',1,0);
	$this->SetXY(135,$h); 	  
	$this->cell(35,0.5,"الباقي من السنة ",1,0,'C',1,0);
	$this->SetXY(170,$h); 	  
	$this->cell(35,05,"الملاحظة ",1,0,'C',1,0);
	$this->SetXY(5,135); // marge sup 13
	}
	 
	function tableau()
	{
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$colone=$_POST['idp'];
	$query_liste = "SELECT grh.Nomarab as nomar,service.SERVICEAR as service,grh.idp as idp,grh.Prenom_Arabe as prenomar,grh.Grade_Actuel,grade.gradear as grade,regcong.idregcong as idregcong ,regcong.datesor as datesor ,regcong.dateent as dateent,regcong.cause as  cause,regcong.remplacant as remplacant ,regcong.duree as duree,regcong.idp as idpreg,regcong.QUT as reliquat
	  FROM grh
	  inner join regcong 
	  on grh.idp=regcong.idp
	  
	  inner join service 
	  on grh.SERVICEAR=service.ids
	  
	  inner join grade 
	  on grh.rnvgradear=grade.idg
	  
	  where regcong.idp=$colone
	  order by datesor "; 
	$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete);

	//***************************************************************************************************************************************//
	while($row=mysql_fetch_object($requete))
	  {
	   //$this->SetTextColor(225,0,0);
	   $this->SetFillColor(220);//il faut ajouter au cell un autre parametre pour qui accepte la coloration
       $this->SetDrawColor(0,0,150);
	   $this->SetFont('aefurat','I', 13);
	   $this->cell(20,05,"***",1,0,'C',0);//5  =hauteur de la cellule origine =7  //السنوات
	   $this->cell(30,05,$row->datesor,1,0,'C',1,0);//تاريخ   الخروج
	   $this->cell(30,05,$row->dateent,1,0,'C',0);//تاريخ الدخول
	   $this->cell(15,05,$row->duree,1,0,'C',0);//المدة 
	   $this->cell(35,05,$row->cause,1,0,'C',0);//نوع العطلة 
	   $this->cell(35,05,$row->reliquat,1,0,'C',0);//الباقي من السنة
	   $this->cell(35,05,"***",1,0,'C',0);//الملاحظة
	   $this->SetXY(05,$this->GetY()+7.5); 
	  }
	$this->SetXY(05,$this->GetY()); 	  
	$this->cell(70,05,"المجموع الكلى  ".$totalmbr1,1,0,'C',1,0);	  
	
	$this->SetXY(75,$this->GetY()); 	  
	$this->cell(130,05,"",1,0,'C',1,0);				 
	
	$this->SetXY(110,$this->GetY()+8); 	  
	$this->cell(60,05,"عين وسارة في :  ".date("Y-m-j"),0,0,'C',0);	
	
	$this->SetXY(130,$this->GetY()+10); 	  
	$this->cell(60,05,"امضاء المدير",0,0,'C',0);	
	
	 
		
	
	}
	
	
}	