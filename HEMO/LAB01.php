<?php
require_once('../tcpdf/GP.php');
$pdf = new GP('L', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTextColor(0,0,0);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->AddPage();
//$pdf->setRTL(true);
$pdf->SetFont('aefurat', '', 10);
$dateeuro=date('d/m/Y');
$idp=$_POST["idp"];
$DATE=$_POST["DATE"];                      
$MEDECIN=$_SESSION["USER"] ; 
//ETAT CIVIL
$NOM=$_POST["NOM"] ; 
$PRENOM=$_POST["PRENOM"] ; 
$SEXE=$_POST["SEXE"]; 
$DATENAISSA=$_POST["DATENAISSA"] ; 
$Poids=$_POST["Poids"];
//BILAN  
$GB=$_POST["GB"] ;$GR=$_POST["GR"] ;$HB=$_POST["HB"] ;$HT=$_POST["HT"] ;$PLQT=$_POST["PLQT"] ;
$TP=$_POST["TP"] ;$INR=$_POST["INR"] ;
$VS1H=$_POST["VS1H"] ;$VS2H=$_POST["VS2H"] ;
$GLYCE=$_POST["GLYCE"] ;$UREE=$_POST["UREE"] ;$CREAT=$_POST["CREAT"] ;$ACURIQUE=$_POST["ACURIQUE"] ;
$BILIT=$_POST["BILIT"] ;$BILID=$_POST["BILID"] ;
$TGO=$_POST["TGO"] ;$TGP=$_POST["TGP"] ;$ASLO=$_POST["ASLO"] ;$CRP=$_POST["CRP"] ;
$TG=$_POST["TG"] ;$CHOLES=$_POST["CHOLES"] ;
$CLCREAT=2;//??????????????????                    
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
$pdf->Text(5,40,"Nom,Prénom du malade:".$NOM."_".$PRENOM);
$pdf->Text(5,45,"Date De Naissance:".$pdf->dateUS2FR($DATENAISSA));       
$AGE=substr(date('d/m/Y'),6,4)-substr($DATENAISSA,0,4); 
$pdf->Text(100+150,45,"Age: ".$AGE." Ans " );
$pdf->Text(5,50,"Laboratoire:  Hemodialyse"); // n tel poste                               $pdf->Text(100+150,50,"Matricule:-------");
$pdf->SetFont('aefurat', '', 10);
$pdf->hemoligne(60,"Examens","Résultats","Unités","Valeurs de références");  //valeures anterieur a prevoire date  
$pdf->hemoligne(60+5,"Globule Blanc",$_POST["GB"],"10P3/mm3","04.00-11.00");//04.00 à 11.00
$pdf->hemoligne(65+5,"Globule Rouge",$_POST["GR"],"10P6/mm3","03.50-05.60");
$pdf->hemoligne(70+5,"Hemoglobine",$_POST["HB"],"g/dl","11.00-18.00");
$pdf->hemoligne(75+5,"Hematocrite",$_POST["HT"],"%","32.00-54.00");
$pdf->hemoligne(80+5,"Plaquette",$_POST["PLQT"],"10P3/mm3","120.00-500.00");
$pdf->hemoligne(85+5,"TP",$_POST["TP"],"%","70.00-100.00");
$pdf->hemoligne(90+5,"INR",$_POST["INR"],"","01.00-01.20");
$pdf->hemoligne(95+5,"VS 01 Heure",$_POST["VS1H"],"mm","<10");
$pdf->hemoligne(100+5,"VS 02 Heure",$_POST["VS2H"],"mm","<20");
$pdf->hemoligne(105+5,"Glycémie",$_POST["GLYCE"],"g/l","00.70-01.10");
$pdf->hemoligne(110+5,"Urée sanguine",$_POST["UREE"],"g/l","00.15-00.50");
$pdf->hemoligne(115+5,"Créatinémie",$_POST["CREAT"],"mg/l","06.00-16.00");
$pdf->hemoligne(120+5,"Calcemie",$_POST["CA"],"mg/l","82.00-106.00");
$pdf->hemoligne(125+5,"Phos",$_POST["PHOS"],"mg/l","28.00-45.00");
$pdf->hemoligne(130+5,"Bilirubine Total",$_POST["BILIT"] ,"mg/l","00.00-11.50");
$pdf->hemoligne(135+5,"Bilirubine Direct",$_POST["BILID"] ,"mg/l","00.00-2.50");
$pdf->hemoligne(140+5,"TGO",$_POST["TGO"],"UI/l","00.00-40.00");
$pdf->hemoligne(145+5,"TGP",$_POST["TGP"],"UI/l","00.00-38.00");
$pdf->hemoligne(150+5,"ASLO",$_POST["ASLO"],"UI/l","<200");
$pdf->hemoligne(155+5,"CRP",$_POST["CRP"],"mg/l","<6");
$pdf->hemoligne(160+5,"Cholésterol",$_POST["CHOLES"],"g/l","01.50-02.50");
$pdf->hemoligne(165+5,"Triglyceride",$_POST["TG"],"g/l","00.50-01.50");
$pdf->hemoligne(170+5,"Acide Urique",$_POST["ACURIQUE"],"mg/l","27.00-70.00");
$pdf->Rect(70+150,5+150,65,25,"d");
$pdf->Text(80+150,155,"Laboratoire : Hemodialyse");
$pdf->Text(80+150,160,"FATOUH Mustapha");
///****************************************************************************************//
$NA=$_POST["NA"] ;$K=$_POST["K"] ;$PHOS=$_POST["PHOS"] ;$CL=$_POST["CL"] ;$CA=$_POST["CA"] ;
$GROUPAGE=$_POST["GROUPAGE"] ;$rhesus=$_POST["rhesus"] ;
$pdf->hemoligneg(60,"Examens","Résultats","Unités","Valeurs Usuels");
$pdf->hemoligneg(65,"NA+",$_POST["NA"],"mmol/l","135.00-153.00");
$pdf->hemoligneg(70,"K+",$_POST["K"],"mmol/l","03.50-05.00");
$pdf->hemoligneg(75,"CL-",$_POST["CL"],"mmol/l","98.00-106.00");
$pdf->hemoligneg(95,"Groupage",$_POST["GROUPAGE"],"***","A-B-AB-O");
$pdf->hemoligneg(100,"Rhesus",$_POST["rhesus"],"***","POS-NEG");
$HVB=$_POST["HVB"] ;$HVC=$_POST["HVC"] ;$HIV=$_POST["HIV"] ;$TPHA=$_POST["TPHA"] ;
$pdf->hemoligneg(105,"VIH",$_POST["HIV"],"***","POS-DOUT-NEG");
$pdf->hemoligneg(110,"HVB",$_POST["HVB"],"***","POS-DOUT-NEG");
$pdf->hemoligneg(115,"HVC",$_POST["HVC"],"***","POS-DOUT-NEG");
$pdf->hemoligneg(120,"TPHA",$_POST["TPHA"],"***","POS-DOUT-NEG");
$pdf->hemoligne1(130,"Chimie des urines ","PH ","Proteine","Glucose","Acetone","Sang");
$pdf->hemoligne1(135,"Résultats "," ","","","","");
$db_host="localhost";$db_name="grh"; $db_user="root";$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ; 
$sql = "INSERT INTO HEMOBIO
(idp,GB,GR,HB,HT,PLQT,TP,INR,VS1H,VS2H,ACURIQUE,BILIT,BILID,TGO,TGP,ASLO,CRP,TG,CHOLES,CL,HVB,HVC,HIV,TPHA,DATE,UREE,CREAT,GLYCE,CA,PHOS,NA,K,Poids,USER) 
VALUES 
('".$idp."','".$GB."','".$GR."','".$HB."','".$HT."','".$PLQT."','".$TP."','".$INR."','".$VS1H."','".$VS2H."','".$ACURIQUE."','".$BILIT."','".$BILID."','".$TGO."','".$TGP."','".$ASLO."','".$CRP."','".$TG."','".$CHOLES."','".$CL."','".$HVB."','".$HVC."','".$HIV."','".$TPHA."','".$DATE."','".$UREE."','".$CREAT."','".$GLYCE."','".$CA."','".$PHOS."','".$NA."','".$K."','".$Poids."','".$MEDECIN."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
$pdf->Output();

?>
