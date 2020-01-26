<?php
//classe tcpdf 
class EFFFP extends TCPDF

{
    
    function grade($h1,$idg,$cat) 
    {
	$this->entetetableau($h1,$idg,$cat);	
    $db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query = "SELECT grh.DATEARRIVE,grh.INDICEE,grh.ECHELON,grh.Date_Premier_Recrutement,grh.Commune_Naissancear as Commune_Naissancear,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,com.communear as communear,grade.gradear as gradear,grh.rnvgradear as rnvgradear FROM grh,grade,com where  grade.idg=grh.rnvgradear and  com.IDCOM=grh.Commune_Naissancear and  cessation !='y'  and rnvgradear='$idg' order by Date_Premier_Recrutement";
	$resultat=mysql_query($query);
	$totalmbr1=mysql_num_rows($resultat);
	$this->SetXY(05,$this->GetY()+12); // marge sup 13 
	$i="";
	 while ($row=mysql_fetch_object($resultat) and $i<=$totalmbr1)
	  {
	   $this->cell(10,8,$i=$i+1,1,0,'C',0);//5  =hauteur de la cellule origine =7
	   $this->cell(20,8,$row->Nomarab,1,0,'R',0);//5  =hauteur de la cellule origine =7
	   $this->cell(24,8,$row->Prenom_Arabe,1,0,'R',0);
	   $this->cell(26,8,$row->Date_Naissance,1,0,'C',0);
	   $this->cell(35,8,$row->communear,1,0,'R',0);
	   $this->cell(30,8,$row->Date_Premier_Recrutement,1,0,'C',0);
	   $this->cell(30,8,$row->DATEARRIVE,1,0,'C',0);
	   $this->cell(15,8,"",1,0,'R',0);
	   $this->cell(15,8,$row->ECHELON,1,0,'C',0);
	   $this->cell(30,8,$row->INDICEE,1,0,'C',0);
	   $this->cell(50,8,"",1,0,'R',0);
	   $this->SetXY(05,$this->GetY()+8);  
	  }
	  $this->SetXY(220,$this->GetY()+10); 	  
	  $this->cell(6,0.5,"المدير",0,0,'C',0);
	  
    }
	
	function idggrade($idg) 
    {
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query1 = "SELECT * FROM grade where idg='$idg'";
	$resultat1=mysql_query($query1);
	
	$result = mysql_fetch_array( $resultat1 ) ;
	$grade=$result["gradear"]; 
	mysql_free_result($resultat1); 
	return $grade;
	}
	function soustitre($h,$st)
    {
	$this->SetXY(5,$h); 	  
    $this->cell(50,05,$st,1,0,'R',0);	
    }
    
	//entete
    function entete()
    {
    $this->SetFont('aefurat', '', 12);
    $this->Text(120,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
    $this->Text(115,20,"وزارة الصحة و السكان و إصلاح المستشفيات");
    $this->Text(05,30,"مديرية الصحة و السكان لولاية الجلفة");
    $this->Text(05,40,"المؤسسة العمومية الاستشفائية عين وسارة");
    $this->Text(05,50," الرقم:......./");
    $this->SetXY(5,50);
	$this->Cell(200,15,'قائمة مستخدمي المؤسسة العمومية الإستشفائية  بعين وسارة إلى غاية '.date('Y-12-31'),0,1,'C');
	}
	function entetetableau($h1,$idg,$cat)
	{
	$this->SetXY(05,$h1); 	  
	$this->cell(285,8,"الرتبة:"." ".$this->idggrade($idg) ,0,0,'R',0);
	$this->SetXY(05,$h1+8); 	  
	$this->cell(285,8,"الصنف:"." ".$cat,0,0,'R',0);
	$this->SetXY(05,$h1+16); 	  
	$this->cell(10,12,"الرقم",1,0,'C',1,0);
	$this->SetXY(15,$h1+16); 	  
	$this->cell(20,12,"اللقب",1,0,'C',1,0);
	$this->SetXY(35,$h1+16); 	  
	$this->cell(24,12,"الاسم",1,0,'C',1,0);
	$this->SetXY(59,$h1+16); 	  
	$this->cell(26,12,"تاريخ الميلاد",1,0,'C',1,0);
	$this->SetXY(85,$h1+16); 	  
	$this->cell(35,12,"مكان الميلاد",1,0,'C',1,0);
	$this->SetXY(120,$h1+16); 	  
	$this->cell(30,12,"تاريخ التنصيب",1,0,'C',1,0);
	$this->SetXY(150,$h1+16); 	  
	$this->cell(30,12,"تاريخ  الالتحاق",1,0,'C',1,0);
	$this->SetXY(180,$h1+16); 	  
	$this->cell(60,6,"الوضعية الحالية",1,0,'C',1,0);
	$this->SetXY(180,$h1+22); 	  
	$this->cell(15,6,"الوضعية",1,0,'C',1,0);
	$this->SetXY(195,$h1+22); 	  
	$this->cell(15,6,"الدرجة",1,0,'C',1,0);
	$this->SetXY(210,$h1+22); 	  
	$this->cell(30,6,"النقطة الاستدلالية",1,0,'C',1,0);
	$this->SetXY(240,$h1+16); 	  
	$this->cell(50,12,"الملاحضة",1,0,'C',1,0);
	}
}	