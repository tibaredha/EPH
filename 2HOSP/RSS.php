<?php
$IDP=$_POST["id"]; 
$NOM=$_POST["NOM"];             
$PRENOM=$_POST["PRENOM"];        
$SEXE=$_POST["SEXE"];                  
$DATENAISSANCE=$_POST["DATENAISSANCE"];
$AGE=$_POST["AGE"];
$FILS=$_POST["FILS"];
$ETDE=$_POST["ETDE"];
$COMMUNE=$_POST["COMMUNE"];
$WILAYA=$_POST["WILAYA"];
$COMMUNER=$_POST["COMMUNER"];
$WILAYAR=$_POST["WILAYAR"];
$ADRESSE=$_POST["ADRESSE"];
$SERVICEHOSP=$_POST["SERVICEHOSP"];
$PRATICIEN=$_POST["PRATICIEN"];
$DATE=$_POST["DATE"];
$HEURE=$_POST["HEURE"];
$M=$_POST["M"];
$ND=$_POST["ND"];
$MDS=$_POST["MDS"];
$DSH=$_POST["DSH"];
$MH=$_POST["MH"];
$DPS=$_POST["DPS"];
$DA1=$_POST["DA1"];
$DA2=$_POST["DA2"];
$DA3=$_POST["DA3"];
require('../PDF/GEPH.php');
$dateeuro=date('d/m/Y');
$dateeuro1=date('H:i');
$pdf = new EPH( 'P', 'mm', 'A4' );
//$pdf->SetDisplayMode('fullpage','two');//mode d affichage 
$pdf->AddPage('p','A4');
$pdf->SetFont('Arial','B',14);
//******************************************//
$pdf->RoundedRect(4, 4, 202, 15, 2, $style = '');
$pdf->Text(60,13,"RESUME STANDARD DE SORTIE ");
//******************************************//
$pdf->SetFont('Arial','B',12);
$pdf->RoundedRect(4, 20, 135, 25, 2, $style = '');
$pdf->Text(5,25,"ETABLISSEMENT:EPH AIN OUSSERA ");
$pdf->Text(5,34,"SERVICE DE:");                  
$pdf->Text(5,43,"CHEF DE SERVICE: ");            
//********************************************//
$pdf->Text(142,25,"RESERVE AU BUREAU DES");
$pdf->Text(160,30,"ENTREES");
$pdf->Text(155,43,"CODE SERVICE:");
//********************************************//
$pdf->SetFont('Arial','B',10);
$pdf->RoundedRect(4, 45, 135, 46, 2, $style = '');
$pdf->RoundedRect(6, 47, 64, 15, 2, $style = '');                      
$pdf->RoundedRect(73, 47, 64, 15, 2, $style = '');
$pdf->Text(10,56,"MATRICULE:");                  
$pdf->Text(80,52,"N DOSSIER DANS SERVICE: ");
$pdf->Text(5,68,"NOM   ET  PRENOM : ");   
$pdf->Text(100,68,"SEXE:");
$pdf->Text(5,73,"DATE DE NAISSANCE: ");  
$pdf->Text(100,73,"AGE:");
$pdf->Text(5,78,"COMMUNE DE NAISSANCE: "); 
$pdf->Text(5,83,"WILAYAS DE RESIDENCE: ");  
$pdf->Text(5,88,"DATE D ADMISSION A L'HOPITAL: ");
$pdf->RoundedRect(4, 91, 135, 10, 2, $style = '');
//***********************************************//
$pdf->Text(142,73,"CODE COMMUNE DE NAISSANCE :");
$pdf->Text(145,83,"CODE WILAYA DE RESIDENCE : ");
$pdf->Text(148,106,"MATRICULE DU PRATITIEN:");
$pdf->Text(150,116,"CODE MODE DE SORTIE :");
$pdf->Text(141,166,"CIM-10");
$pdf->Text(141,196,"CIM-10");
$pdf->Text(141,206,"CIM-10");
$pdf->Text(141,216,"CIM-10");
//******************************************************//
$pdf->Text(35,97," DERNIER SERVICE  D'HOSPITALISATION");
$pdf->RoundedRect(4, 101, 135, 40, 2, $style = '');
$pdf->Text(5,106,"DATE D ENTREE AU SERVICE:");
$pdf->Text(5,116,"MEDECIN TRAITANT:");
$pdf->Text(5,126,"MODE DE SORTIE:");
$pdf->Text(5,136,"DATE DE SORTIE DE L'HOPITAL:");
$pdf->RoundedRect(4, 141, 135, 100, 2, $style = '');
//*************************************************//
$pdf->Text(5,146,"MOTIF D HOSPITALISATION");
$pdf->Text(5,166,"DIAGNOSTIC PRINCIPAL DE SORTIE");
//$pdf->Text(5,171,".................................");
$pdf->Text(50,186,"DIAGNOSTICS ASSOCIES ");
$pdf->Text(5,196,"1-");
$pdf->Text(5,206,"2-");
$pdf->Text(5,216,"3-");
$pdf->Text(5,250,"chef de service :");
$pdf->Text(150,250,"medecin traitant:");
//*****************************donnes**************************************************************//
$pdf->SetTextColor(225,0,0);
$pdf->Text(33,56,$M);//"MATRICULE:".                  
$pdf->Text(80,56,$ND);//"N DOSSIER DANS SERVICE: ".
$pdf->Text(41,68,$NOM.$PRENOM);   
$pdf->Text(112,68,$SEXE);
$pdf->Text(44,73,$pdf->dateUS2FR($DATENAISSANCE));  
$pdf->Text(110,73,$AGE."ans");
$pdf->Text(53,78,$pdf->nbrtostring("grh","com","IDCOM",$COMMUNE,"COMMUNE")); 
$pdf->Text(51,83,$pdf->nbrtostring("grh","wil","IDWIL",$WILAYA,"WILAYAS"));
$pdf->Text(33,34,$pdf->nbrtostring("grh","service","ids",$SERVICEHOSP,"servicefr"));// 
$pdf->Text(42,116,"DR ".$PRATICIEN);
$pdf->Text(64,88,$DATE);//DATE D ADMISSION A L'HOPITAL:
$pdf->Text(58,106,$DATE);//DATE D ENTREE AU SERVICE:
$pdf->Text(38,126,$MDS);//MODE DE SORTIE
$pdf->Text(62,136,$pdf->dateUS2FR($DSH));//DATE DE SORTIE DE L'HOPITAL
//*************************************************//
$pdf->Text(5,156,$MH);//MOTIF D HOSPITALISATION
$pdf->Text(5,176,$DPS);//DIAGNOSTIC PRINCIPAL DE SORTIE
$pdf->Text(10,196,$DA1);//DIAGNOSTICS ASSOCIES
$pdf->Text(10,206,$DA2);//DIAGNOSTICS ASSOCIES
$pdf->Text(10,216,$DA3);//DIAGNOSTICS ASSOCIES
$pdf->Text(153,260,"Dr".$PRATICIEN);
$pdf->SetTextColor(0,0,0); 
//*****************************************2eme page**********************************************//
$pdf->RoundedRect(140, 20, 66, 40, 2, $style = '');
$pdf->RoundedRect(140, 62, 66, 179, 2, $style = '');
$pdf->AddPage('p','A4');
$pdf->SetFont('Arial','B',14);
$pdf->Text(5,5,"RESUME CLINIQUE DE SORTIE ");
$pdf->Text(150,5,"MATRICULE:");
$pdf->Text(5,15,"ETABLISSEMENT:EPH AIN OUSSERA");
$pdf->Text(150,15,"N DOSSIER:");
$pdf->RoundedRect(4, 20, 202, 40, 2, $style = '');
$pdf->SetFont('Arial','B',10);
$pdf->Text(5,25,"NOM:");
$pdf->Text(50,25,"PRENOM:");
$pdf->Text(180,25,"SEXE:");
$pdf->Text(115,25,"DATE DE NAISSANCE:");
$pdf->Text(5,35,"COMMUNE DE NAISSANCE:");
$pdf->Text(115,35,"WILAYA DE NAISSANCE:");
$pdf->Text(5,45,"DATE HOSPITALISATION:");
$pdf->Text(115,45,"MODE D'ENTREE:");
$pdf->Text(5,55,"SERVICE:");
$pdf->Text(60,55,"DATE D'ENTREE AU SERVICE:");
$pdf->Text(135,55,"DATE SORTI DU SERVICE:");
$pdf->SetFont('Arial','B',14);
$pdf->RoundedRect(4, 65, 202, 170, 2, $style = '');
$pdf->Text(5,70,"MOTIF D HOSPITALISATION:");
$pdf->Line(4 ,90,206 ,90 );
$pdf->Text(5,95,"BILAN BIOLOGIQUE: ");
$pdf->Line(4 ,124,206 ,124);
$pdf->Text(5,129,"BILAN RADIOLOGIQUE:"); 
$pdf->Line(4 ,157,206 ,157 );
$pdf->Text(5,162,"AUTRES EXAMENS :");
$pdf->Line(4 ,180,206 ,180 ); 
$pdf->Text(5,185,"DIAGNOSTIC PRINCIPAL DE SORTIE :");
$pdf->Text(5,195,"DIAGNOSTICS ASSOCIES"); 
$pdf->SetFont('Arial','B',10);
$pdf->Text(5,200,"DA1:");
$pdf->Text(5,205,"DA2:");
$pdf->Text(5,210,"DA2:");
$pdf->SetFont('Arial','B',14);
$pdf->Text(5,215,"ACTES ET TRAITEMENTS :");
$pdf->Text(5,250,"chef de service :");
$pdf->Text(150,250,"medecin traitant:");
//*****************************************************************//
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(225,0,0);
$pdf->Text(182,5,$M);//"MATRICULE "
$pdf->Text(182,15,$ND);//"N DOSSIER"
$pdf->Text(15,25,$NOM);
$pdf->Text(67,25,$PRENOM);
$pdf->Text(192,25,$SEXE);
$pdf->Text(154,25,$pdf->dateUS2FR($DATENAISSANCE));
$pdf->Text(53,35,$pdf->nbrtostring("grh","com","IDCOM",$COMMUNE,"COMMUNE"));
$pdf->Text(158,35,$pdf->nbrtostring("grh","wil","IDWIL",$WILAYA,"WILAYAS"));
$pdf->Text(50,45,$DATE);//DATE HOSPITALISATION

$pdf->Text(22,55,$pdf->nbrtostring("grh","service","ids",$SERVICEHOSP,"servicefr"));//"SERVICE:".
$pdf->Text(114,55,$DATE);//"DATE D'ENTREE AU SERVICE:".
$pdf->Text(181,55,$pdf->dateUS2FR($DSH));//"DATE SORTI DU SERVICE:".
$pdf->Text(5,80,$MH);//"MOTIF D HOSPITALISATION:".
$pdf->Text(96,185,$DPS);//"DIAGNOSTIC PRINCIPAL DE SORTIE :".
$pdf->Text(15,200,$DA1);
$pdf->Text(15,205,$DA2);
$pdf->Text(15,210,$DA3);
$pdf->Text(155,260,"Dr ".$PRATICIEN);
$pdf->SetTextColor(0,0,0);
$pdf->Output();
?>