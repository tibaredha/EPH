<?php
require_once('../tcpdf/GP.php');
$pdf = new GP('L', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTextColor(0,0,0);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
$pdf->SetFont('aefurat', '', 10);
$dateeuro=date('d/m/Y');
$idhemobio=$_GET["idhemobio"];
$pdf->Text(5,10,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(10,15,"ETABLISSEMENT PUBLIC");
$pdf->Text(8,20,"HOSPITALIER AIN OUSSERA");
$pdf->Rect(70+150,5,65,25,"d");
$pdf->Text(85+150,7,"N° d'enregistrement ");
$pdf->Text(83+145,12,"Au Laboratoire D'Hemodialyse ");
$pdf->Text(83+150,17,"......................................");
$pdf->Text(80+150,22,"AIN OUSSERA LE :".$dateeuro);
$pdf->Image('../images/MSCP.jpg', $x='135', $y='8', $w=20, $h=20, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false, $alt=false, $altimgs=array());
$pdf->SetFont('aefurat', '', 14);
$pdf->Text(30+70,32,"RESULTATS D'EXAMENS BIOLOGIQUES");//analyses médicales
$pdf->SetFont('aefurat', '', 12);
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");
$query_liste = "SELECT * FROM HEMOBIO where idhemobio=$idhemobio";
$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
$totalmbr1=mysql_num_rows($requete);
while($row=mysql_fetch_object($requete))
{
$pdf->SetFont('aefurat', '', 14);
$pdf->Text(30+70,32,"RESULTATS D'EXAMENS BIOLOGIQUES (Duplicta du) ".$pdf->dateUS2FR($row->DATE));//analyses médicales
$pdf->SetFont('aefurat', '', 12);
//DATE 
$pdf->Text(5,40,"Nom,Prénom du malade:".$pdf->nbrtostring("grh","hemo","ID",$row->idp,"NOM")."_".$pdf->nbrtostring("grh","hemo","ID",$row->idp,"PRENOM"));
$pdf->Text(5,45,"Date De Naissance:".$pdf->dateUS2FR($pdf->nbrtostring("grh","hemo","ID",$row->idp,"DATENAISSA")));       
$AGE=substr(date('d/m/Y'),6,4)-substr($pdf->nbrtostring("grh","hemo","ID",$row->idp,"DATENAISSA"),0,4); 
$pdf->Text(100+150,45,"Age: ".$AGE." Ans " );
$pdf->Text(5,50,"Laboratoire:  Hemodialyse"); // n tel poste                               $pdf->Text(100+150,50,"Matricule:-------");
$pdf->SetFont('aefurat', '', 10);
$pdf->hemoligne(60,"Examens","Résultats","Unités","Valeurs de références");  //valeures anterieur a prevoire date  
$pdf->hemoligne(60+5,"Globule Blanc",$row->GB,"10P3/mm3","04.00-11.00");//04.00 à 11.00
$pdf->hemoligne(65+5,"Globule Rouge",$row->GR,"10P6/mm3","03.50-05.60");
$pdf->hemoligne(70+5,"Hemoglobine",$row->HB,"g/dl","11.00-18.00");
$pdf->hemoligne(75+5,"Hematocrite",$row->HT,"%","32.00-54.00");
$pdf->hemoligne(80+5,"Plaquette",$row->PLQT,"10P3/mm3","120.00-500.00");
$pdf->hemoligne(85+5,"TP",$row->TP,"%","70.00-100.00");
$pdf->hemoligne(90+5,"INR",$row->INR,"","01.00-01.20");
$pdf->hemoligne(95+5,"VS 01 Heure",$row->VS1H,"mm","<10");
$pdf->hemoligne(100+5,"VS 02 Heure",$row->VS2H,"mm","<20");
$pdf->hemoligne(105+5,"Glycémie",$row->GLYCE,"g/l","00.70-01.10");
$pdf->hemoligne(110+5,"Urée sanguine",$row->UREE,"g/l","00.15-00.50");
$pdf->hemoligne(115+5,"Créatinémie",$row->CREAT,"mg/l","06.00-16.00");
$pdf->hemoligne(120+5,"Calcemie",$row->CA,"mg/l","82.00-106.00");
$pdf->hemoligne(125+5,"Phos",$row->PHOS,"mg/l","28.00-45.00");
$pdf->hemoligne(130+5,"Bilirubine Total",$row->BILIT ,"mg/l","00.00-11.50");
$pdf->hemoligne(135+5,"Bilirubine Direct",$row->BILID ,"mg/l","00.00-2.50");
$pdf->hemoligne(140+5,"TGO",$row->TGO,"UI/l","00.00-40.00");
$pdf->hemoligne(145+5,"TGP",$row->TGP,"UI/l","00.00-38.00");
$pdf->hemoligne(150+5,"ASLO",$row->ASLO,"UI/l","<200");
$pdf->hemoligne(155+5,"CRP",$row->CRP,"mg/l","<6");
$pdf->hemoligne(160+5,"Cholésterol",$row->CHOLES,"g/l","01.50-02.50");
$pdf->hemoligne(165+5,"Triglyceride",$row->TG,"g/l","00.50-01.50");
$pdf->hemoligne(170+5,"Acide Urique",$row->ACURIQUE,"mg/l","27.00-70.00");
$pdf->Rect(70+150,5+150,65,25,"d");
$pdf->Text(80+150,155,"Laboratoire : Hemodialyse");
$pdf->Text(80+150,160,"FATOUH Mustapha");
///****************************************************************************************//
$pdf->hemoligneg(60,"Examens","Résultats","Unités","Valeurs Usuels");
$pdf->hemoligneg(65,"NA+",$row->NA,"mmol/l","135.00-153.00");
$pdf->hemoligneg(70,"K+",$row->K,"mmol/l","03.50-05.00");
$pdf->hemoligneg(75,"CL-",$row->CL,"mmol/l","98.00-106.00");
$pdf->hemoligneg(95,"Groupage",$pdf->nbrtostring("grh","hemo","ID",$row->idp,"GRABO"),"***","A-B-AB-O");
$pdf->hemoligneg(100,"Rhesus",$pdf->nbrtostring("grh","hemo","ID",$row->idp,"GRRH"),"***","POS-NEG");
$pdf->hemoligneg(105,"VIH",$row->HIV,"***","POS-DOUT-NEG");
$pdf->hemoligneg(110,"HVB",$row->HVB,"***","POS-DOUT-NEG");
$pdf->hemoligneg(115,"HVC",$row->HVC,"***","POS-DOUT-NEG");
$pdf->hemoligneg(120,"TPHA",$row->TPHA,"***","POS-DOUT-NEG");
$pdf->hemoligne1(130,"Chimie des urines ","PH ","Proteine","Glucose","Acetone","Sang");
$pdf->hemoligne1(135,"Résultats "," ","","","","");
}
$pdf->Output();

?>
