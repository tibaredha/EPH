<?php
//******************************************************************************************************//
$SERVICE=$_POST["SERVICE"]; //
//POUR REGLER LE PROBLEME DU SERVICE QUI DANS LA BASE DE DONNES PTS LE SERVICE EST SOUS FORME STRING ALORS  LE SERVICE DANS EPH EST SOUS FORME NUMERIQUE 
//MAIS NE POSE PAS DE PROBLEME AVEC LE SERVICE D HEMODIALISE PARCEQUE LA VARIABLE EST ENVOYER A LA BASE DE DONNES PTS SOUS FORME STRING 
switch($_POST["IDSERVICE"])  
{  
	case '1':
		{
		$IDSERVICE="MEDECINE HOMME";
		break;
		}
	case '2':
		{
		$IDSERVICE="MEDECINE FEMME";
		break;
		}
	case '3':
		{
		$IDSERVICE="CHIRURGIE HOMME";
		break;
		}
	case '4':
		{
		$IDSERVICE="CHIRURGIE FEMME";
		break;
		}
	case '7':
		{
		$IDSERVICE="GYNECO";
		break;
		}
	case '8':
		{
		$IDSERVICE="MATERNITE"; 
		break;
		}
	case '5':
		{
		$IDSERVICE="PEDIATRIE";
		break;
		}
	case '44':
		{
		$IDSERVICE="BLOC OPP A";
		break;
		}
	case '45':
		{
		$IDSERVICE="BLOC OPP B";
		break;
		}
	case '9':
		{
		$IDSERVICE="UMC";
		break;
		}
	case '15':
		{
		$IDSERVICE="HEMODIALYSE";
		break;
		}		
}
// $idp=$_POST["idp"];
$NOMREC=$_POST["NOM"];              // 
$PRENOMREC=$_POST["PRENOM"];        //
$SEXE=$_POST["SEXE"];                  //
$DATENAISSANCE=$_POST["DATENAISSANCE"];//
$MATRICULE=$_POST["MATRICULE"];        //
$DOSSIER=$_POST["DOSSIER"];            //
$GROUPAGE=$_POST["GROUPAGE"];          //
$rhesus=$_POST["rhesus"];              //
$DIAGNOSTIC=$_POST["DIAGNOSTIC"];      //
$DDT=$_POST["DDT"];
$TYPE=$_POST["TYPE"];
$DRAI=$_POST["DRAI"];
$RES=$_POST["RES"];
$NBRG=$_POST["NBRG"];
$CGR=$_POST["CGR"];
$PFC=$_POST["PFC"];
$CPS=$_POST["CPS"];
$QCGR=$_POST["QCGR"];
$QPFC=$_POST["QPFC"];
$QCPS=$_POST["QCPS"];
$WILAYA=$_POST["WILAYA"];
$COMMUNE=$_POST["COMMUNE"];
$datejour=$_POST["DATE"];
$datedemdis=$_POST["DATE"];
$heursdemdis=$_POST["HEUR"];
//******************************************************************************************************//
$NOM1   = substr($_POST["NOM"],0,2) ;
$PRENOM1= substr($_POST["PRENOM"],0,2);
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
$pdf->entete($pdf->dateUS2FR($datejour));
$pdf->SetFont('Arial','B',13);
$pdf->Text(15,40,$NOMREC);
$pdf->Text(62,40,$PRENOMREC);
$pdf->Text(124,40,$pdf->dateUS2FR($DATENAISSANCE));
$pdf->Text(165,40,$AGE."ans");
$pdf->Text(190,40,$SEXE);
$pdf->Text(20,50,$SERVICE);
$pdf->Text(113,50,$MATRICULE);
$pdf->Text(173,50,$DOSSIER);
$pdf->Text(27,60,$GROUPAGE);
$pdf->Text(110,60,$rhesus);
$pdf->Text(177,60,"***");
$pdf->Text(70,72,$DIAGNOSTIC);
switch($_POST["POLYTRANSFUSE"])  
{  
	case 'OUI':
		{
		$pdf->SetXY(40,77);
        $pdf->Cell(3,3,"X",1,1,'C');
		$pdf->SetXY(54,77);
        $pdf->Cell(3,3,"",1,1,'C');
		$pdf->Text(165,80,$pdf->dateUS2FR($DDT));
		break;
		}
	case 'NON':
		{
		$pdf->SetXY(40,77);
        $pdf->Cell(3,3,"",1,1,'C');
		$pdf->SetXY(54,77);
        $pdf->Cell(3,3,"X",1,1,'C');
		break;
		}		
}
switch($_POST["RTA"])  
{  
	case 'OUI':
		{
		$pdf->SetXY(82,93);
        $pdf->Cell(3,3,"X",1,1,'C');
		$pdf->SetXY(98,93);
        $pdf->Cell(3,3,"",1,1,'C');
		$pdf->Text(122,96,$TYPE);
		break;
		}
	case 'NON':
		{
		$pdf->SetXY(98,93);
        $pdf->Cell(3,3,"X",1,1,'C');
		$pdf->SetXY(82,93);
        $pdf->Cell(3,3,"",1,1,'C');
		break;
		}		
}
$pdf->Text(47,88,$pdf->dateUS2FR($DRAI));
$pdf->Text(128,88,$RES);
$pdf->Text(68,104,$NBRG);
$pdf->Text(7,128,$CGR);
$pdf->Text(95,128,$QCGR);
$pdf->Text(7,136,$CPS);
$pdf->Text(95,136,$QCPS);
$pdf->Text(7,152,$PFC);
$pdf->Text(95,152,$QPFC);
$pdf->SetXY(5,180);
$pdf->Cell(63,13,"Dr ".$_SESSION["USER"],1,1,'C');//
$MEDECIN=$_SESSION["USER"];
$pdf->SetFont('Arial','B',8);
//*******************************************************************************************************//
// $pdf->Text(10,200,"NB :".$pdf->chercherec ($IDREC).$IDREC);
$pdf->insertiondis ($AGE,$IDREC,$NOMREC,$PRENOMREC,$SEXE,$pdf->dateUS2FR($DATENAISSANCE),$WILAYA,$COMMUNE,$GROUPAGE,$rhesus,$IDSERVICE,$MATRICULE,$DOSSIER,$DIAGNOSTIC,$MEDECIN,$datedemdis,$heursdemdis,$QCGR,$QPFC,$QCPS); 
$pdf->SetFont('Arial','B',7);
// $pdf->Text(50,280,$pdf->cherchestockCGR ($CGR,$GROUPAGE,$rhesus) );
// $pdf->Text(50,285,$pdf->cherchestockPFC ($PFC,$GROUPAGE,$rhesus) );
// $pdf->Text(50,290,$pdf->cherchestockCPS ($CPS,$GROUPAGE,$rhesus) );
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(250); //elle fonctionne avec 3 parametre si le 2et 3 sont absent  la couleurvarie du noire  au gris //sinon 1=rouge 2vert 3 bleu 
$pdf->setxy(10,10);
//$pdf->Cell(20,10,'retour',0,1,'C',true,'http://localhost/EXPEMPLE/index.php?uc=SMH&idp='.$idp);
//***********************************************************************************************************************///
///fiche trasfusionnelle du receuveur 
 // $pdf->fichetrans();
// $pdf->SetFont('Arial','B',13);
// $pdf->Text(15,40,$NOMREC);
// $pdf->Text(62,40,$PRENOMREC);
// $pdf->Text(124,40,$pdf->dateUS2FR($DATENAISSANCE));
// $pdf->Text(165,40,$AGE."ans");
// $pdf->Text(190,40,$SEXE);
// $pdf->Text(22,50,$SERVICE);
// $pdf->Text(113,50,$MATRICULE);
// $pdf->Text(173,50,$DOSSIER);
// $pdf->Text(27,60,$GROUPAGE);
// $pdf->Text(110,60,$rhesus);
//**********************************//
// $pdf->fichetrans1($IDREC);	
$pdf->Output();






?>


