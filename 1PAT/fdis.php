<?php
//******************************************************************************************************//
$idp=$_POST["idp"];
$NOMREC=$_POST["NOMREC"];              // 
$PRENOMREC=$_POST["PRENOMREC"];        //
$SEXE=$_POST["SEXE"];                  //
$DATENAISSANCE=$_POST["DATENAISSANCE"];//
$AGEN=$_POST["AGEN"];
$WILAYA=$_POST["WILAYA"];              //
$commune=$_POST["COMMUNE"];            //
$SERVICE=$_POST["SERVICE"];            //
$MATRICULE=$_POST["MATRICULE"];        //
$DOSSIER=$_POST["DOSSIER"];            //
$GROUPAGE=$_POST["GROUPAGE"];          //
$rhesus=$_POST["rhesus"];              //
$DIAGNOSTIC=$_POST["DIAGNOSTIC"];      //
$POLYTRANSFUSE=$_POST["POLYTRANSFUSE"];
$DDT=$_POST["DDT"];
$rta=$_POST["rta"];
$DRAI=$_POST["DRAI"];
$RES=$_POST["RES"];
$rta=$_POST["rta"];
$TYPE=$_POST["TYPE"];
$NBRG=$_POST["NBRG"];
//$ST=$_POST["ST"];
$CGR=$_POST["CGR"];
$PFC=$_POST["PFC"];
$CPS=$_POST["CPS"];
//$Qst=$_POST["Qst"];
$QCGR=$_POST["QCGR"];
$QPFC=$_POST["QPFC"];
$QCPS=$_POST["QCPS"];
$MEDECIN="k";//$_POST["MEDECIN"]
$datejour=$_POST["DATE"];
$datedemdis=$_POST["datedemdis"];
$heursdemdis=$_POST["heursdemdis"];
//******************************************************************************************************//

//constitution du idrec
$NOM1   = substr($_POST["NOMREC"],0,2) ;
$PRENOM1= substr($_POST["PRENOMREC"],0,2);
$J      = substr($_POST["DATENAISSANCE"],8,2);
$M      = substr($_POST["DATENAISSANCE"],5,2);
$A      = substr($_POST["DATENAISSANCE"],0,4);
$DNS    =  $J.$M.$A ;
$IDREC  = $DNS.$NOM1.$PRENOM1.$SEXE ;         //
$x=substr(date("d-m-Y"),6,4);
$Y=substr($_POST["DATENAISSANCE"],0,4);
$AGE=$x-$Y;

//******************************************************************************************************************//
require('../PDF/invoice.php');
require('../PDF/DIS.php');
$pdf = new DIS ( 'P', 'mm', 'A4' );
$pdf->entete($datejour);
$pdf->SetFont('Arial','B',13);
$pdf->Text(15,40,$NOMREC);
$pdf->Text(62,40,$PRENOMREC);
$pdf->Text(124,40,$DATENAISSANCE);
$pdf->Text(165,40,$AGE."ans");
$pdf->Text(190,40,$SEXE);
$pdf->Text(22,50,$SERVICE);
$pdf->Text(113,50,$MATRICULE);
$pdf->Text(173,50,$DOSSIER);
$pdf->Text(27,60,$GROUPAGE);
$pdf->Text(110,60,$rhesus);
$pdf->Text(177,60,"***");
$pdf->Text(70,72,$DIAGNOSTIC);
$pdf->Text(46,80,$POLYTRANSFUSE);
$pdf->Text(165,80,$DDT);
$pdf->Text(47,88,$DRAI);
$pdf->Text(128,88,$RES);
$pdf->Text(90,96,$rta);
$pdf->Text(122,96,$TYPE);
$pdf->Text(68,104,$NBRG);
// 
$pdf->Text(7,128,$CGR);//
$pdf->Text(95,128,$QCGR);
$pdf->Text(7,136,$CPS);//
$pdf->Text(95,136,$QCPS);
$pdf->Text(7,152,$PFC);//
$pdf->Text(95,152,$QPFC);
$pdf->SetXY(5,180);
$pdf->Cell(63,13,$MEDECIN,1,1,'C');
$pdf->SetFont('Arial','B',8);
//*******************************************************************************************************//
$pdf->Text(10,200,"NB :".$pdf->chercherec ($IDREC).$IDREC);
$pdf->insertiondis ($AGEN,$IDREC,$NOMREC,$PRENOMREC,$SEXE,$DATENAISSANCE,$WILAYA,$commune,$GROUPAGE,$rhesus,$SERVICE,$MATRICULE,$DOSSIER,$DIAGNOSTIC,$MEDECIN,$datedemdis,$heursdemdis,$QCGR,$QPFC,$QCPS); 
$pdf->SetFont('Arial','B',7);
$pdf->Text(50,280,$pdf->cherchestockCGR ($CGR,$GROUPAGE,$rhesus) );
$pdf->Text(50,285,$pdf->cherchestockPFC ($PFC,$GROUPAGE,$rhesus) );
$pdf->Text(50,290,$pdf->cherchestockCPS ($CPS,$GROUPAGE,$rhesus) );
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(250); //elle fonctionne avec 3 parametre si le 2et 3 sont absent  la couleurvarie du noire  au gris //sinon 1=rouge 2vert 3 bleu 
$pdf->setxy(10,10);
$pdf->Cell(20,10,'retour',0,1,'C',true,'http://localhost/EXPEMPLE/index.php?uc=SMH&idp='.$idp);
//***********************************************************************************************************************///
///fiche trasfusionnelle du receuveur 
 $pdf->fichetrans();
$pdf->SetFont('Arial','B',13);
$pdf->Text(15,40,$NOMREC);
$pdf->Text(62,40,$PRENOMREC);
$pdf->Text(124,40,$DATENAISSANCE);
$pdf->Text(165,40,$AGE."ans");
$pdf->Text(190,40,$SEXE);
$pdf->Text(22,50,$SERVICE);
$pdf->Text(113,50,$MATRICULE);
$pdf->Text(173,50,$DOSSIER);
$pdf->Text(27,60,$GROUPAGE);
$pdf->Text(110,60,$rhesus);
//**********************************//
$pdf->fichetrans1($IDREC);	
$pdf->Output();


?>


