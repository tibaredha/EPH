<?php
if
(
1==1
// $_POST["DD"] ="-1"
// and $_POST["NOM"]!=""
// and $_POST["PRENOM"]!=""
// and $_POST["FONCTION"]!=""
// and $_POST["GRADE"]!=""
// and $_POST["directeur"]!=""
)
{


require_once('../tcpdf/GP.php');
$pdf = new GP('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
$pdf->SetFont('aefurat','B',10);
$pdf->Text(50,5,"CERTIFICAT MEDICAL DE CONSTAT DE DECES");
$pdf->SetFont('aefurat','B',8);
$pdf->Text(51,10,"REMPLIR PAR LE MEDECIN adresser AU SEMEP DSP et INSP");
$pdf->SetFont('aefurat','B',10);
$pdf->Rect(4,14,202,240,"d");
$pdf->SetFont('aefurat','B',8);
$pdf->Text(160,15,"le docteur en médecine");
$pdf->Text(160,20,"sous-signé.certifie que ");
$pdf->Text(160,25,"la mort de la personne");
$pdf->Text(160,30,"désignée ci-contre survenue");
$pdf->Text(160,35,"le:");
$pdf->Text(179,35,"a");
$pdf->Text(190,35,"heure");
$pdf->Text(160,40,"est réelle et constante de ");
$pdf->Text(160,45,"Cause naturelle ");
$pdf->Text(160,50,"Cause violente ");
$pdf->Text(160,55,"Cause indéterminée");
$pdf->Text(164,65,"A Ain oussera le ".date('d/m/Y'));
$pdf->Text(161,70,"Signature et cachet du médecin ");
$pdf->Text(168,75,"Dr ".$_SESSION["USER"]);
$pdf->SetFont('aefurat','B',10);
$pdf->Line(159 ,14,159 ,254 );
$pdf->Text(5,15,"Commune de décés Ain oussera ");
$pdf->Text(115,15,"Wilaya de décés Djelfa ");
$pdf->Text(5,20,"Nom:");
$pdf->Text(50,20,"Prénom:");
$pdf->Text(115,20,"Sexe:");
$pdf->Text(5,25,"Date de naissance:");
$pdf->Text(115,25,"Age:");
$pdf->Text(5,30,"Commune de naissance:");
$pdf->Text(80,30,"Wilaya de naissance:");
$pdf->SetFont('aefurat','B',8);
$pdf->Text(5,35,"(si enfant moins de 1 an preciser l'age en mois si moins d'un mois preciser l'age en jours ) ");
$pdf->SetFont('aefurat','B',10);
$pdf->Text(5,40,"Commune de résidence:");
$pdf->Text(80,40,"Wilaya de résidence:");
$pdf->Text(5,45,"Fils(fille) de:");
$pdf->Text(80,45,"et de:");
$pdf->Text(5,50,"Lieu du décés");
$pdf->Text(5,55,"Domicile");
$pdf->Text(80,55,"Structure de santé publique ");
$pdf->Text(5,60,"Structure de santé privée");
$pdf->Text(80,60,"Voie publique");
$pdf->Text(5,65,"Autres (é preciser).......................................................................................");
//*****************************************************************************//
$pdf->Line(5 ,73 ,159 ,73 );
$pdf->Text(5,75,"Réservé a la commune N°.......................");
$pdf->Text(5,80,"N° d'ordre d'acte de décés inscrit sur le registre des actes de l'état civil ");
$pdf->Text(5,85,"Ce N°doit etre reproduit sur le certificat médical de cause de décés ");
$pdf->Text(5,90,"partie a découper , adresser la partie médicale a la DSP et INSP");
$pdf->Line(5 ,100 ,206 ,100 );
$pdf->SetFont('aefurat','B',8);
//****************************************************************************//
$pdf->Text(160,100," PARTIE RESERVEE A LA ");
$pdf->Text(160,105,"CODIFICATION DE LA CAUSE ");
$pdf->Text(160,110,"DU DECES(ne rien inscrire)");
$pdf->Text(177,150,"CODE");
$pdf->Text(178,155,"CIM");
$pdf->Text(173,160,"I___I___I___I");
//****************************************************************************//
$pdf->Text(5,100,"A remplir et a clore par le médecin(confidentiel):partie a separer de celle de l'etat civil et ");
$pdf->Text(5,105,"adresser a la tutelle car annonyme");
$pdf->SetFont('aefurat','B',10);
$pdf->Text(5,115,"Commune de décés: Ain oussera");
$pdf->Text(80,115,"Wilaya de décés: Djelfa");
$pdf->Text(5,120,"Date de naissance:");
$pdf->Text(80,120,"Date de décés:");
$pdf->Text(127,120,"Age:");
$pdf->Text(142,120,"Sexe:");
$pdf->Text(5,125,"Commune de résidence:");
$pdf->Text(80,125,"Wilaya de résidence:");
$pdf->SetFont('aefurat','B',8);
$pdf->Text(5,130,"(si enfant moins de 1an preciser lage en mois si moins d un mois preciser l age en jours ) ");
$pdf->SetFont('aefurat','B',10);
$pdf->Text(5,135,"lieu du décés:");
$pdf->Text(5,140,"Causes du décés : mentionner tous les évènements morbides ayant préceder le décés ");
$pdf->Text(5,145,"partie I ");
$pdf->Text(5,150,"Maladie(s) ou affection(s) ayant directement provoquée décés");
$pdf->Text(5,155,"la derniére ligne remplie doit correspondre a la cause initiale");
$pdf->Text(5,160,"Due ou consecutive ");
$pdf->Text(50,160,"a):");
$pdf->Text(5,165,"Due ou consecutive ");
$pdf->Text(50,165,"b):");
$pdf->Text(5,170,"Due ou consecutive ");
$pdf->Text(50,170,"c):");
$pdf->Text(5,175,"Due ou consecutive");
$pdf->Text(50,175,"d):");
$pdf->Text(5,180,"Il ne s'agit pas ici du mode de décés par exemple: défaillance cardiaque ,syncope");
$pdf->Text(5,185,"mais de la maladie , traumatisme ou de la complication qui a entrainé la mort");
$pdf->Text(5,190,"partie II");
$pdf->Text(5,195,"Autres *** morbides facteurs ou *** physiologiques (grossese..)ayant");
$pdf->Text(5,200,"Contribués mais non mentionnées en partie I");
$pdf->Text(5,205,".");
$pdf->Text(5,210,"");
$pdf->SetFont('aefurat','B',8);
$pdf->Text(5,215,"Si décés maternel: femme décédé durant une grossesse ,un avortement,un accouchement");
$pdf->Text(5,220,"ou dans les 42 jours apres un accouchement ou un avortement ,donner plus de precisions dans la partie I");
$pdf->Text(5,225,"Exemple de certification de décés");
$pdf->Text(5,230,"I.a)Septicémie");
$pdf->Text(5,235,"I.b)Péritonite");
$pdf->Text(5,240,"I.c)Perforation d'ulcère");
$pdf->Text(5,245,"I.d)Ulcére duodénal");
$pdf->Text(5,250,"II.Alcolisme");
$pdf->Text(40,230,"I.a)Accident vasculaire CB ");
$pdf->Text(40,235,"I.b)Artérosclérose et  ");
$pdf->Text(40,240,"I.c)Cardiopathie Hypertensive");
$pdf->Text(40,245,"I.d)................");
$pdf->Text(40,250,"II...................");
$pdf->Text(80,230,"I.a)Détresse respiratoire ");
$pdf->Text(80,235,"I.b)Embolie pulmonaire");
$pdf->Text(80,240,"I.c)Phlébite ");
$pdf->Text(80,245,"I.d)Accouchement compliqu");
$pdf->Text(80,250,"II.Varices");
$pdf->Text(120,230,"I.a)Coma");
$pdf->Text(120,235,"I.b)Oedéme cérébrale");
$pdf->Text(120,240,"I.c)Traumatisme cranien");
$pdf->Text(120,245,"I.d)Accident de la route ");
$pdf->Text(120,250,"II....................");
$pdf->SetFont('aefurat','B',10);
//*******************************************************************************//
$pdf->Text(20,260,"A Ain oussera le".date('d/m/Y'));
$pdf->Text(20,265,"Signature et cacher du médecin");
$pdf->Text(25,270,"Dr ".$_SESSION["USER"]);
//******************************donnes*************************************************//
$pdf->SetTextColor(225,0,0);
$pdf->Text(15,20,$_POST["NOM"]);
$pdf->Text(65,20,$_POST["PRENOM"]);
$pdf->Text(125,20,$_POST["SEXE"]);
$pdf->Text(37,25,$pdf->dateUS2FR($_POST["DATENAISSANCE"]));//$date
$pdf->Text(125,25,$_POST["AGE"]);
$pdf->Text(47,30,$pdf->nbrtostring("grh","com","IDCOM",$_POST["COMMUNE"],"COMMUNE"));
$pdf->Text(116,30,$pdf->nbrtostring("grh","wil","IDWIL",$_POST["WILAYA"],"WILAYAS"));
$pdf->Text(47,40,$pdf->nbrtostring("grh","com","IDCOM",$_POST["COMMUNER"],"COMMUNE"));
$pdf->Text(116,40,$pdf->nbrtostring("grh","wil","IDWIL",$_POST["WILAYAR"],"WILAYAS"));
$pdf->Text(28,45,$_POST["FILS"]);
$pdf->Text(90,45,$_POST["ETDE"]);
$pdf->SetFont('aefurat','B',8);
$pdf->Text(164,35,$pdf->dateUS2FR($_POST["DD"]));
$pdf->Text(182,35,$_POST["HD"]);
$pdf->SetFont('aefurat','B',09);
switch($_POST["CD"])  
{
    case 'CN':
		{
		$pdf->SetXY(188,45);
        $pdf->Cell(3,3,"X",1,1,'C');
		break;
		}
	case 'CV':
		{
		$pdf->SetXY(188,50);
        $pdf->Cell(3,3,"X",1,1,'C');
		break;
		}
	case 'CI':
		{
		$pdf->SetXY(188,55);
        $pdf->Cell(3,3,"X",1,1,'C'); 
		break;
		}			
}
$pdf->SetXY(188,45).
$pdf->Cell(3,3,"",1,1,'C');
$pdf->SetXY(188,50).
$pdf->Cell(3,3,"",1,1,'C');
$pdf->SetXY(188,55).
$pdf->Cell(3,3,"",1,1,'C'); 
switch($_POST["LD"])  
{
    case 'DOM':
		{
		$pdf->SetXY(60,55);
        $pdf->Cell(3,3,"X",1,1,'C');
		$pdf->Text(30,136,"Domicile");
		break;
		}
	case 'VP':
		{
		$pdf->SetXY(140,60);
        $pdf->Cell(3,3,"X",1,1,'C');
		$pdf->Text(30,136,"Voie publique");
		break;
		}
	case 'AAP':
		{
		$pdf->SetXY(140,65);
        $pdf->Cell(3,3,"X",1,1,'C');
		$pdf->SetXY(40,65);
        $pdf->Cell(3,3,$_POST["AUTRES"],0,1,'C');
		$pdf->Text(30,136,$_POST["AUTRES"]);
		
		break;
		}
    case 'SSP':
		{
		$pdf->SetXY(140,55);
		$pdf->Cell(3,3,"X",1,1,'C');
		$pdf->Text(30,136,"Structure de sante public");
		break;
		}
	case 'SSPV':
		{
		$pdf->SetXY(60,60);
        $pdf->Cell(3,3,"X",1,1,'C');
		$pdf->Text(30,136,"Structure de sante prive");
		break;
		}		
}
$pdf->SetXY(140,65).
$pdf->Cell(3,3,"",1,1,'C');
$pdf->SetXY(60,55);
$pdf->Cell(3,3,"",1,1,'C');
$pdf->SetXY(140,60).
$pdf->Cell(3,3,"",1,1,'C');
$pdf->SetXY(140,55).
$pdf->Cell(3,3,"",1,1,'C');
$pdf->SetXY(60,60).
$pdf->Cell(3,3,"",1,1,'C');
$pdf->Text(37,120,$pdf->dateUS2FR($_POST["DATENAISSANCE"]));
$pdf->Text(105,120,$pdf->dateUS2FR($_POST["DD"]));
$pdf->Text(135,120,$_POST["AGE"]);
$pdf->Text(152,120,$_POST["SEXE"]);
$pdf->Text(47,125,$pdf->nbrtostring("grh","com","IDCOM",$_POST["COMMUNER"],"COMMUNE"));
$pdf->Text(116,125,$pdf->nbrtostring("grh","wil","IDWIL",$_POST["WILAYAR"],"WILAYAS"));
$pdf->Text(55,160,$_POST["CIM1"]);
$pdf->Text(55,165,$_POST["CIM2"]);
$pdf->Text(55,170,$_POST["CIM3"]);
$pdf->Text(55,175,$_POST["CIM4"]);
$pdf->Text(5,205,".".$_POST["CIM5"].".");


$pdf->SetTextColor(0,0,0);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage
$pdf->setRTL(true);
$pdf->AddPage();
$pdf->SetFont('aefurat', '', 30);
$dateeuro=date('d/m/Y');
//************************CORPS*************************// 
$pdf->Text(25,10,"الجمهورية الجزائرية الديمقراطية الشعبية ");
$pdf->SetFont('aefurat', '', 20);
$pdf->Text(5,30,"ولاية الجلفة");
$pdf->Text(5,40,"دائرة عين وسارة ");
$pdf->Text(5,50,"المؤسسة العمومية الاستشفائية عين وسارة");
$pdf->Text(5,60,"رقم :...../".date('Y'));
$pdf->SetFont('aefurat', '', 30);
$pdf->Text(80,70,"إعلان بوفاة ");
$pdf->SetFont('aefurat', '', 18);
$pdf->Text(5,90,$pdf->DATEPV($_POST["DD"]));
$pdf->Text(5,100,"على الساعة: ".$_POST["HD"].".");
$pdf->Text(5,110,"توفي (ت) المسمى (ة) :".$_POST["NOMAR"]."   ".$_POST["PRENOMAR"]);
$pdf->Text(5,120," المولودة(ة)في: ".$_POST["DATENAISSANCE"]);
$pdf->Text(100,120,"بـ: ".$pdf->nbrtostring("grh","com","IDCOM",$_POST["COMMUNE"],"communear")." ولاية ".$pdf->nbrtostring("grh","wil","IDWIL",$_POST["WILAYAR"],"WILAYASAR") );
$pdf->Text(5,130,"إبن (ة):".$_POST["FILSDEAR"]);
$pdf->Text(100,130,"و:".$_POST["ETDEAR"]);
$pdf->Text(5,140,"زوج (ة)".$_POST["EPOUZE"]);
$pdf->Text(5,150,"المهنة :***");
$pdf->Text(100,150,"عنوان الإقامة :***");
$pdf->Text(5,160,"دخل (ت) الى المستشفى يوم : ".$pdf->dateUS2FR($_POST["DATEADMISSION"]));
$pdf->Text(5,170,"توفي (ت) يوم : ".$_POST["DD"]);
$pdf->Text(100,170,"على الساعة : ".$_POST["HD"]);
$pdf->Text(129,190,"في : ".date('Y/m/d'));
$pdf->Text(20,200,"امضاء الطبيب");
$pdf->Text(25,210,"Dr ".$_SESSION["USER"]);
$pdf->Text(150,200,"امضاء المدير");
$pdf->Text(5,240,"الكتابة السابقة للاسم و اللقب :");
$pdf->Text(5,250,"_____________________");$pdf->Text(30,249,$_POST["NOM"]."  ".$_POST["PRENOM"]);
$pdf->Text(5,260,"_____________________");

if ($_POST["SEXE"]=='F') // SI LE SEXE FEMININ ET LE DECES ET UN DECES MATERNEL
{
$pdf->AddPage();
$pdf->setRTL(false);
$pdf->SetFont('aefurat','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->Text(50,5,"FORMULAIRE DE DECLARATION OBLIGATOIRE DES DECES MATERNELS ");
$pdf->Text(5,15,"Wilaya De Djelfa ");
$pdf->Line(5 ,25 ,200 ,25 );
$pdf->Text(5,35,"Nom de jeune fille  "); $pdf->Text(100,35,"Epouse  ");
$pdf->Text(5,45,"Prenom");
$pdf->Text(5,55,"Date de naissance ");
$pdf->Text(5,65,"Lieu de résidence adresse complète ");
$pdf->Line(5 ,75 ,200 ,75 );
$pdf->Text(5,85,"Lieu du décès ");
$pdf->Text(15,95,"1.Domicile  ");
$pdf->Text(15,100,"2.Etablissement privée de santé ");
$pdf->Text(15,105,"Préciser Nom et adresse de l'établissement");
$pdf->Text(15,115,"3.Etablissement public de santé ");$pdf->Text(50,15,"Préciser  ");
$pdf->Text(15,120,"Etablissement Hospitalier Universitaire");         $pdf->Text(120,120,"Centre Hospitalo Universitaire");
$pdf->Text(15,125,"Etablissement Hospitalier spécialisé mère enfant");$pdf->Text(120,125,"Autres Etablissement Hospitalier  spécialisé ");
$pdf->Text(15,130,"Etablissement Hospitalier");$pdf->Text(60,130,"Etablissement publique Hospitalier");$pdf->Text(120,130,"Etablissement publique de sant2 de proximit2");
$pdf->Text(15,135,"Préciser Nom et adresse de l'établissement");
$pdf->Text(5,145,"Service ou a lieu le deces");
$pdf->Text(5,150,"Evacuée d'une autre structure");
$pdf->Text(5,155,"Date et heure de l'hospitalisation");
$pdf->Text(5,160,"Date et heure du décès");
$pdf->Line(5 ,170 ,200 ,170 );
$pdf->Text(5,175,"Moment du décès   ");
$pdf->Text(20,180,"pendant la grossesse ");
$pdf->Text(20,185,"Pendant le travail et l'accouchement  ");
$pdf->Text(20,190,"Dans le post partum immédiat ");
$pdf->Text(20,195,"Dans les 42 jours suivant un avortement ");
$pdf->Text(20,200,"Dans les 42 jours suivant un accouchement  ");
$pdf->text(5,205,"Cause du décès");
$pdf->text(20,210,"Hémorragie de la délivrance");
$pdf->text(20,215,"Autres hémorragies Avortement Hématome rétroplacentaire");
$pdf->text(20,220,"Placenta praevia ");
$pdf->text(20,225,"Rupture utérine");
$pdf->text(20,230,"Complication liées a une HTA gravidique éclampsie");
$pdf->text(20,235,"Septicémies puerpérales");
$pdf->text(20,240,"Cardiopathie");
$pdf->text(20,245,"Autre cause de décès  a préciser");
$pdf->Line(5 ,255 ,200 ,255 );
$pdf->Text(5,260,"Date    ");$pdf->Text(50,260,"et lieu  ");$pdf->Text(100,260,"Nom  et Prénom du medecin   ");
$pdf->Text(120,265,"Cachet et Signature   ");
$pdf->Text(5,270,"Visa du Directeur de la Santé et de la Population  ");
}
$pdf->Output();
}//fin if 
else
{
    $idp=$_POST["idp"];
    //echo("La modification à echouee redirection ver page") ;
	header("Location: ../index.php?uc=CD1&idp=$idp") ;
   
}  
?>