<?php
require_once('../tcpdf/GP.php');
$date=date("d-m-y");
$pdf=new GP('P','cm','A4');
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);  //text noire
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetFont('aefurat', '', 12);
$pdf->AddPage();
$pdf->Text(6,1,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
$pdf->Text(3,1.5,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
$pdf->Text(7,2.0,"DIRECTION DE LA SANTÉ WILAYA DE DJELFA");
$pdf->Text(0.5,3.0,"ETABLISSEMENT PUBLIC HOSPITALIER  D'AIN - OUSSERA");
$pdf->Text(0.5,3.5,"SERVICE: HEMODIALYSE");$pdf->Text(13,3.5,"AIN OUSSERA LE :".date("j-m-Y"));
$pdf->Text(0.5,4,"N°.........../".date("Y"));
$pdf->SetXY(6.0,5.0);
$pdf->Cell(9.5,1.5,'Liste Nominative Des Malades Hémodialysés',1,1,'C');
$h=7;
$pdf->SetXY(0.5,$h); 	  
$pdf->cell(1,0.5,"N°",1,0,'C',1,0);
$pdf->SetXY(1.5,$h); 	  
$pdf->cell(4,0.5,"Nom",1,0,'C',1,0);
$pdf->SetXY(5.5,$h); 	  
$pdf->cell(4,0.5,"Prenom",1,0,'C',1,0);
$pdf->SetXY(9.5,$h); 	  
$pdf->cell(3,0.5,"Date Naissance",1,0,'C',1,0);
$pdf->SetXY(12.5,$h); 	  
$pdf->cell(5,0.5,"Lieu de naissance",1,0,'C',1,0);
$pdf->SetXY(17.5,$h); 	  
$pdf->cell(3,0.5,"Observation",1,0,'C',1,0);
$pdf->SetXY(0.5,7.55); // marge sup 13
//********************************************************************************************//
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query = "SELECT * FROM HEMO where SORTI =''  ORDER BY NOM";//where SORTI =''
$resultat=mysql_query($query);
$totalmbr1=mysql_num_rows($resultat);
//***********************************************************************//
while($row=mysql_fetch_object($resultat))
  {
    $pdf->cell(1,1,$row->ID,1,0,'C',0);
    $pdf->cell(4,1,$row->NOM,1,0,'L',0);//5  =hauteur de la cellule origine =7
    $pdf->cell(4,1,$row->PRENOM,1,0,'L',0);
    $pdf->cell(3,1,$row->DATENAISSA,1,0,'C',0);
    $pdf->cell(5,1,$pdf->nbrtostring("grh","com","IDCOM",$row->COMMUNE,"COMMUNE") ,1,0,'L',0);
	$pdf->cell(3,1,"",1,0,'L',0);
    $pdf->SetXY(0.5,$pdf->GetY()+1); 
  }
$pdf->SetXY(0.5,$pdf->GetY()); 	  
$pdf->cell(6,0.5,"TOTAL",1,0,'C',1,0);	  
$pdf->SetXY(6.5,$pdf->GetY()); 	  
$pdf->cell(14,0.5,$totalmbr1." Malades",1,0,'C',1,0);				 
$pdf->SetXY(13,$pdf->GetY()+2); 	  
$pdf->cell(6,0.5,"LE MEDECIN",0,0,'C',0);		
$pdf->Output();
?>


