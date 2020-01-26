<?php
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";
echo "<head>";
echo "<title>EPH AO</title>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
echo "<link rel=\"icon\" type=\"image/png\" href=\"design/gs.jpg\" />";
echo "<link type=\"text/css\" href=\"./CSS/css.css\" rel=\"stylesheet\" />";
echo "<script type=\"text/javascript\" src=\"./JVS/jquery.js\"></script>";
echo "<script type=\"text/javascript\" src=\"./JVS/menu.js\"></script>";
echo "<script type=\"text/javascript\" src=\"./JVS/masquer.js\"></script>";
echo "<script type=\"text/javascript\" src=\"./JVS/js.js\"></script>";
echo "<script type=\"text/javascript\" src=\"./JVS/masqueedite.js\" ></script>";
echo "<script type=\"text/javascript\" src=\"./JVS/jquery.ui.autocomplete.js\"></script>";
echo "<script type=\"text/javascript\" src=\"./JVS/calendrier_grossesse.asr\"></script>";
echo "</head>";
session_start();
echo "<body>";
include("./class/class.PHP") ;
//include("./STAT/SITE.PHP");// pour les states de page 
$per ->photosx(13+40,33,"med.jpg",100,100);
$per ->photosx(1255-40,33,"med.jpg",100,100);
$per ->aspirateur();
$per ->entete();
//************************//SUPGRH
$per ->entetemenu();
if(isset($_SESSION['USER']))  // si  user existe 
{
$service=$_SESSION["SERVICE"];
switch($service)  
{
    case 'GRH':
		{
		if($_SESSION["USER"] =='عمران')
		{
		include("vue/MENU.php") ;  //MENU COMPLET
		}
		else
		{
		include("vue/MENUV.php") ; //MENU PARTIEL
		}  
		break;
		}
	// case 'HEMODIALYSE':
		// {
		// include("vue/MENUHEMOD.php") ; 
		// break;
		// }
    // case 'PTS':
		// {
		// include("vue/MENUPTS.php") ; 
		// break;
		// }		
	default : include("vue/MENUP.php") ;  
		
}	   
}
else  //si user nexiste pas 
{
include("vue/MENU0.php") ;  
}
$per ->piedmenu();
//***********************// PREVISION 
if(!isset($_REQUEST['uc']))
{
$uc = 'accueil';
}    
else
{
$uc = $_REQUEST['uc'];
}	
switch($uc)  
{
//accueil
    case 'accueil':
		{
		$per -> sautligne (20);
		$x=900;
		$y=210;
		echo "<div class=\"mydiv\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
		//echo "<div id=\"mydiv\">";
		echo "<marquee behavior=\"scroll\" direction=\"up\" scrollamount=\"3\" scrolldelay=\"80\" onmouseover=\"this.stop()\"onmouseout=\"this.start()\" height=\"350\" width=\"350\" bgcolor=\"GREEN\">";
		echo "<H2 align=\"center\"   >Bienvenue sur G-EPH 4.0 </H2>";
		echo "<p align=\"center\" ><img  id=\"mydiv2\"   align=\"center\"  src=\"IMAGES/med.jpg\" width=\"300\" height=\"300\" alt=\"1\" /></p>";
		echo "<H3 align=\"center\" >1. l EPH  ain oussera </H3>";
		echo "<p align=\"center\" ><img  id=\"mydiv2\"   align=\"center\"  src=\"IMAGES/1.JPG\" width=\"300\" height=\"300\" alt=\"1\" /></p>";
		echo "</marquee>";
		echo "</div>";
		$x=250;
        $per ->label(50,$x,'Hospital Managment Systeme '); //.$_SESSION["idp"]
		// behavior="scroll":définit le type de glissement : scroll = défilement - slide = glissade - alternate = va-et-vient
		// direction="down": Direction du défilement : down, up, right, left 
		// scrollamount="2": Indique de combien de pixels le texte avance. 
		// scrolldelay="80": définit le temps ou le texte reste dans la même position.Donc la vitesse de défillement
		// onmouseover="this.stop()" onmouseout="this.start()": javascript stoppant le défilement au passage de la souris
		// height="150" width="450":hauteur et largeur de la fenêtre en pixels
		// bgcolor="#2B53A8": couleur du fond
		break;
		}
	case 'agendax' :
		{include("./agenda/agendax.php");break;}
	case 'adevent' :
		{include("./agenda/add_events.php");break;}	
	case 'SUPRDV' :
		{include("./agenda/SUPRDV.PHP");break;}	
	
	case 'calendrier' :
		{include("./agenda/CAL.php");break;}		
	case 'cal' :
		{include("./agenda/cal1.php");break;}
	//LES MALADIES ADECLARATION OBLIGATOIRE 
	case 'MDO' :
		{ include("./2HOSP/MDO.php");break;}	
	//panier
	case 'P' :
		{include("./PAN/P.php");break;}
	//STATSITE 
	case 'SITE1':
		{include("./STAT/SITE1.php");break;}
	//SCORES MEDICALES
	case 'SG' :
		{ include("./2HOSP/SG.php");break;}	
	case 'ISS' :
		{ include("./2HOSP/ISS.php");break;}		
	case 'APGAR' :
		{ include("./2HOSP/APGAR.php");break;}	
	case 'SILVERMAN' :
		{ include("./2HOSP/SILVERMAN.php");break;}	
	case 'DDR' :
		{ include("./2HOSP/DDR.php");break;}	
	case 'DDR1' :
		{ include("./2HOSP/DDR1.php");break;}
	//HEMODIALYSE
	
	case 'POINTAGEH' :
		{ include("./HEMO/POINTAGEH.php.php");break;}	
	
	case 'POINTAGEH' :
		{ include("./HEMO/POINTAGEH.php.php");break;}	
	case 'HBGRAPHE' :
		{ include("./CHART/HBGRAPHE.php");break;}
	case 'SEANCEGRAPHE' :
		{ include("./CHART/SEANCEGRAPHE.php");break;}		
	case 'LISTEBILAN' :
		{ include("./HEMO/LISTEBILAN.php");break;}	
	case 'LABORATOIRE' :
		{ include("./HEMO/LABORATOIRE.php");break;}		
	case 'SCEANCE' :
		{ include("./HEMO/SCEANCE.php");break;}
	case 'AJOULABO' :
		{ include("./HEMO/AJOULABO.php");break;}
	case 'AJOULABO1' :
		{ include("./HEMO/AJOULABO1.php");break;}
	case 'LABHEMO' :
		{ include("./HEMO/LAB0.php");break;}	
	case 'LABHEMO1' :
		{ include("./HEMO/LAB01.php");break;}
	case 'LISTMHEMO' :
		{ include("./HEMO/LISTMHEMO.php");break;}	
	case 'SMHEMO' :
		{ include("./HEMO/LISTMHEMO1.php");break;}	
	case 'NHEMO' :
		{ include("./HEMO/PAT1.php");break;}	
	case 'NHEMO1' :
		{ include("./HEMO/PAT2.php");break;}
	
	
	case 'LABOHEMO' :
		{ include("./HEMO/LABOHEMO.php");break;}
	case 'LABOBIO' :
		{ include("./HEMO/LABOBIO.php");break;}
	case 'LABOSERO' :
		{ include("./HEMO/LABOSERO.php");break;}
	
	case 'AJOUS0' :
		{ include("./HEMO/AJOUS0.php");break;}
	case 'AJOUS' :
		{ include("./HEMO/AJOUS.php");break;}
	
	
	
	
	// case 'MNHEMO1' :
		// { include("./HEMO/MPAT1.php");break;}
	case 'MNHEMO2' :
		{ include("./HEMO/MPAT2.php");break;}
	case 'SNHEMO1' :
		{ include("./HEMO/SPAT1.php");break;}
	case 'SORTHEMO' :
		{ include("./HEMO/SORTHEMO.php");break;}	
	case 'SORTHEMO1' :
		{ include("./HEMO/SORTHEMO1.php");break;}	
	case 'HEMOSORT' :
		{ include("./HEMO/LISTMHEMOSORT.php");break;}	
	case 'DISAH' :
		{ include("./HEMO/DISAH.php");break;}
    case 'CERT' :
		{ include("./HEMO/CERT.php");break;}
	case 'PROTOCOLE' :
		{ include("./HEMO/PROTOCOLE.php");break;}	
    case 'FHEMO' :
		{ include("./HEMO/FHEMO.php");break;}	
    case 'SHEMO' :
		{ include("./HEMO/SHEMO.php");break;}
	case 'LISTESEANCE' :
		{ include("./HEMO/LISTESEANCE.php");break;}	
	case 'MPOIDS1' :
		{ include("./HEMO/MPOIDS1.php");break;}	
	case 'MPOIDS2' :
		{ include("./HEMO/MPOIDS2.php");break;}	
	case 'MLIT1' :
		{ include("./HEMO/MLIT1.php");break;}	
	case 'MLIT2' :
		{ include("./HEMO/MLIT2.php");break;}	
	case 'NSS1' :
		{ include("./HEMO/NSS1.php");break;}	
	case 'NSS2' :
		{ include("./HEMO/NSS2.php");break;}	
	
	case 'REGSEANCE' :
		{ include("./HEMO/REGSEANCE.php");break;}	
	case 'BULTIN' :
		{ include("./HEMO/BULTIN.php");break;}	
	case 'BULTIN1' :
		{ include("./HEMO/BULTIN1.php");break;}	
	
	
	
	
	//DECESSUPDECES 
        case 'LISTDECES0' :
		{ include("./DECES/LISTDECES0.php");break;}		
		case 'LISTDECES' :
		{ include("./DECES/LISTDECES.php");break;}	
		case 'DECES1' :
		{ include("./DECES/DECES1.php");break;}
		case 'DECES2' :
		{ include("./DECES/DECES2.php");break;}	
		case 'MODDECES' :
		{ include("./DECES/MODDECES.php");break;}	
		case 'MODDECES1' :
		{ include("./DECES/MODDECES1.php");break;}	
		case 'SUPDECES' :
		{ include("./DECES/SUPDECES.php");break;}	
		case 'GRAPHEDECES' :
		{ include("./CHART/GRAPHEDECES.php");break;}	
		case 'DECESANNEE' :
		{ include("./CHART/DECESANNEE.php");break;}
		case 'DECESDATEBE' :
		{ include("./DECES/DECESDATEBE.php");break;}	
		case 'DECESDATEDSS' :
		{ include("./DECES/DECESDATEDSS.php");break;}	
		
	//PATIENT
	
	case 'PERINAT' :
		{include("./GRH/PERINAT.php");break;}
	
	
	case 'NPAT' :
		{include("./1PAT/PAT1.php");break;}
	case 'PAT2' :
		{ include("./1PAT/PAT2.php");break;}
	case 'SMH' :
		{ include("./2HOSP/LISTMHOSP1.php");break;}	
	case 'LISTMNHOSP' :
		{ include("./2HOSP/LISTMNHOSP.php");break;}	
	case 'LISTMSORT' :
		{ include("./2HOSP/LISTMSORT.php");break;}			
	case 'SUR' :
		{ include("./2HOSP/SUR0.php");break;}	
	case 'DHOS' :
		{include("./1PAT/DHOS.php");break;}	
    case 'RAGE' :
		{include("./1PAT/RAGE0.php");break;} 	
	case 'CPAT' :
		{include("./1PAT/PAT3.php");break;}		
	case 'HOSP' :
		{include("./1PAT/HOSP.php");break;}	
	case 'LISTMHOSP' :
		{ include("./2HOSP/LISTMHOSP.php");break;}
	case 'GMS' :
		{ include("./2HOSP/GMS.php");break;}
	case 'SMH1' :
		{ include("./2HOSP/LISTMNHOSP1.php");break;}		
	case 'deces' :
		{ include("./2HOSP/deces.php");break;}
	case 'CD1' :
		{ include("./2HOSP/CD1.php");break;}
	case 'RSCS' :
		{ include("./2HOSP/RSCS.php");break;}	
	case 'CODECIM' :
		{ include("./2HOSP/CIM0.php");break;}
	case 'CODECIM1' :
		{ include("./2HOSP/CIM1.php");break;}	
	case 'LAB' :
		{ include("./2HOSP/LAB0.php");break;}	
	case 'CHANGSERV' :
		{ include("./2HOSP/CHANGSERV.php");break;}
	case 'CHANGSERV1' :
		{ include("./2HOSP/CHANGSERV1.php");break;}
    case 'ACTMED' :
		{ include("./2HOSP/ACTMED.php");break;}
	case 'ACTMED1' :
		{ include("./2HOSP/ACTMED1.php");break;}			
	case 'RAD' :
		{ include("./2HOSP/RAD0.php");break;}	
	case 'ORD' :
		{ include("./2HOSP/ORD0.php");break;}
	case 'ORDFN' :
		{ include("./2HOSP/ORD0FN.php");break;}
	case 'ORDFN1' :
		{ include("./2HOSP/ORD0FN1.php");break;}
	case 'DISA' :
		{ include("./2HOSP/DISA.php");break;}
	case 'CONG' :
		{ include("./2HOSP/CONG0.php");break;}			
	case 'SCOR' :
		{ include("./2HOSP/SCOR.php");break;}	
	case 'MORS' :
		{ include("./2HOSP/MORS.php");break;}
	case 'PO1' :
		{ include("./2HOSP/PO1.php");break;}
	case 'SORT0' :
		 { include("./2HOSP/SORT0.php");break;}
	case 'SORT' :
		 { include("./2HOSP/SORT.php");break;}	
    case 'EVA' :
		{ include("./2HOSP/EVA1.php");break;}
	case 'SUPPMH' :
		{ include("./2HOSP/SUPPMH.php");break;}
	case 'SUPPMNH' :
		{ include("./2HOSP/SUPPMNH.php");break;}		
    // case 'MODPAT1' :
		// { include("./2HOSP/MODPAT1.php");break;}	
	// case 'MODPAT2' :
		// { include("./2HOSP/MODPAT2.php");break;}	
	// case 'LISTMCONS1' :
		// { include("./4CONS/LISTMCONS1.php");break;}		
    // case 'LIB' :
		// { include("./4CONS/LISTMCONS.php");break;}	
	
	
	
	//rapport de garde  
	case 'RAPGARD' :
		{include("./RAPGARD/RAPGARD.php");break;}	
	case 'PERGARD' :
		{include("./RAPGARD/PERGARD.php");break;}	
	case 'PERMUGARD' :
		{include("./RAPGARD/PERMUGARD.php");break;}
	
	
	
	//ACTE MEDICAL
	
	case 'LACTE' :
		{include("./ACTE/LCIM.php");break;}	
	////PHARMACIE  
	case 'LMED' :
		{include("./MED/LMED.php");break;}	
	case 'MMED' :
		{include("./MED/MMED.php");break;}	
	case 'MMED1' :
		{include("./MED/MMED1.php");break;}	
	case 'SMED' :
		{include("./MED/SMED.php");break;}		
	case 'SMED1' :
		{include("./MED/SMED1.php");break;}		
	////CIM  
	case 'LCIM' :
		{include("./CIM/LCIM.php");break;}	
	case 'MCIM' :
		{include("./CIM/MCIM.php");break;}	
	case 'MCIM1' :
		{include("./CIM/MCIM1.php");break;}	
	case 'SCIM' :
		{include("./CIM/SCIM.php");break;}		
	case 'SCIM1' :
		{include("./CIM/SCIM1.php");break;}	
	case 'CATEECHE' :
		{include("./7AVAN/CATEECHE.php");break;}
	case 'PREVISION' :
		{include("./7AVAN/LGRH.php");break;}
	//Etablissement
    case 'ETABLISSEMENT' :
		{include("./ETABLISSEMENT/ETABLISSEMENT.php");break;}
    case 'METABLISSEMENT' :
		{include("./ETABLISSEMENT/METABLISSEMENT.php");break;}
    case 'METABLISSEMENT1' :
		{include("./ETABLISSEMENT/METABLISSEMENT1.php");break;}
	  ///SPECIALITE
	 case 'ASPECIALITE' :
		{include("./SPECIALITE/ASPECIALITE.php");break;}
	case 'ASPECIALITE1' :
		{include("./SPECIALITE/ASPECIALITE1.php");break;}
    case 'ASPECIALITE2' :
		{include("./SPECIALITE/ASPECIALITE2.php");break;}			
     case 'SPECIALITE' :
		{include("./SPECIALITE/SPECIALITE.php");break;}
	 case 'MSPECIALITE' :
		{include("./SPECIALITE/MSPECIALITE.php");break;}
     case 'MSPECIALITE1' :
		{include("./SPECIALITE/MSPECIALITE1.php");break;}
    case 'SPECIALISTE' :
		{include("./SPECIALITE/SPECIALISTE.php");break;}
	case 'MSPECIALISTE' :
		{include("./SPECIALITE/MSPECIALISTE.php");break;}
     case 'MSPECIALISTE1' :
		{include("./SPECIALITE/MSPECIALISTE1.php");break;}
	///NIVEAUETUDE  
	 case 'ANIVEAUETUDE' :
		{include("./NIVEAUETUDE/ANIVEAUETUDE.php");break;}
	case 'ANIVEAUETUDE1' :
		{include("./NIVEAUETUDE/ANIVEAUETUDE1.php");break;}
    case 'ANIVEAUETUDE2' :
		{include("./NIVEAUETUDE/ANIVEAUETUDE2.php");break;}			
     case 'NIVEAUETUDE' :
		{include("./NIVEAUETUDE/NIVEAUETUDE.php");break;}
	 case 'MNIVEAUETUDE' :
		{include("./NIVEAUETUDE/MNIVEAUETUDE.php");break;}
	case 'SNIVEAUETUDE' :
		{include("./NIVEAUETUDE/SUPNIVEAUETUDE.PHP");break;}	
     case 'MNIVEAUETUDE1' :
		{include("./NIVEAUETUDE/MNIVEAUETUDE1.php");break;}
	//GRADE searchgrh
    case 'GRHGRADE':
		{include("./2GRADE/GRHGRADE.php");break;}
	case 'GRADE':
		{include("./2GRADE/GRADE.php");break;}
	case 'MGRHGRADE':
		{include("./2GRADE/MGRHGRADE.php");break;}
	case 'MGRHGRADE1':
		{include("./2GRADE/MGRHGRADE1.php");break;}			
	case 'MGRADE':
		{include("./2GRADE/MGRADE.php");break;}
	case 'MGRADE1':
		{include("./2GRADE/MGRADE1.php");break;}
    case 'REPGRADE':
		{include("./2GRADE/REPGRADE.php");break;}
	case 'REPGRADE1':
		{include("./2GRADE/REPGRADE1.php");break;}
	// EFFECTIF
    case 'MEFF' :
		{include("./2GRADE/MEFF.php");break;}
    case 'MEFF1' :
		{include("./2GRADE/MEFF1.php");break;}		
     //POSTESUP 
	 case 'POSTESUP' :
		{include("./POSTESUP/POSTESUP.php");break;}
	 case 'MPOSTESUP' :
		{include("./POSTESUP/MPOSTESUP.php");break;}
	 case 'MPOSTESUP1' :
		{include("./POSTESUP/MPOSTESUP1.php");break;}
	case 'MEFFPS' :
		{include("./POSTESUP/MEFFPS.php");break;}	
	case 'MEFFPS1' :
		{include("./POSTESUP/MEFFPS1.php");break;}		
	case 'PSUP0' :
		{include("./POSTESUP/PSUP0.php");break;}	
	case 'POSTESUPGRH' :
		{include("./GRH/POSTESUPGRH.php");break;}
	case 'APOSTESUPGRH' :
		{include("./GRH/APOSTESUPGRH.php");break;}	
	//WILAYA
    case 'WC':
		{include("./4WC/W.php");break;}
	case 'MW':
		{include("./4WC/MW.php");break;}
	case 'MW1':
		{include("./4WC/MW1.php");break;}		
	case 'WC1':
		{include("./4WC/C.php");break;}	
	case 'MC':
		{include("./4WC/MC.php");break;}
	case 'MC1':
		{include("./4WC/MC1.php");break;}	
	//SAA	
	case 'SAA' :
		{include("./GRH/SAA.php");break;}
	case 'MSAA' :
		{include("./GRH/MSAA.php");break;}
	case 'MSAA1' :
		{include("./GRH/MSAA1.php");break;}		
	
	
	//Garde medicale GARDES
    case 'GARDES' :
		{include("./GARDE/GARDES.php");break;}
	case 'DEMPERS' :
		{include("./GARDE/DEMPERS.php");break;}	
	case 'DEMPERG' :
		{include("./GARDE/DEMPERG.php");break;}	
    case 'DEMPERGP' :
		{include("./GARDE/DEMPERGP.php");break;}				
    case 'GARDEG' :
		{include("./GARDE/GARDEG.php");break;}
	case 'GARDEGP' :
		{include("./GARDE/GARDEGP.php");break;}
	case 'LISTGARDE' :
		{include("./GARDE/LISTGARDE.php");break;}	
	
	
	
	//CONNECTION INSCRIPTION
	case 'LISTINS':
		{include("./CONNEC/LISTINS1.php");break;}
	case 'UOL':
		{include("./CONNEC/UOL.php");break;}
	case 'MODCOMPT':
		{include("./CONNEC/MODCOMPT.php");break;}
	case 'MODCOMPT1':
		{include("./CONNEC/MODCOMPT1.php");break;}
	
	case 'CONNECTION':
		{include("./CONNEC/CON1.php");break;}
	case 'CONN2':
		{include("./CONNEC/CON2.php");break;}	
	case 'DECONNECTION':
		{include("CONNEC/DECON.php");break;}
	case 'UOL':
		{include("./CONNEC/UOL.php");break;}
	case 'CONF':
		{include("./CONNEC/CONF.php");break;}
	case 'CONF1':
		{include("./CONNEC/CONF1.php");break;}
	case 'INSCRIPTION':
		// {include("./CONNEC/CON1.php");break;}
	    {include("./CONNEC/INS1.php");break;}
	case 'INS2':
		{include("./CONNEC/INS2.php");break;}
	case 'ACTIV':
		{include("./CONNEC/ACTIV.php");break;}
	case 'ACTIV1':
		{include("./CONNEC/ACTIV1.php");break;}
	case 'DACTIV':
		{include("./CONNEC/DACTIV.php");break;}
	case 'DACTIV1':
		{include("./CONNEC/DACTIV1.php");break;}
    case 'MBRINS':
		{include("./CONNEC/LISTINS1.php");break;}		
	case 'MODMBR':
		{include("./CONNEC/MODMBR.php");break;}	
	case 'SUPMBR':
		{include("./CONNEC/SUP.php");break;}
	case 'SUPMBR1':
		{include("./CONNEC/SUP1.php");break;}
	case 'CU':
		{include("./CONNEC/CU.php");break;}		
   //SERVICE
    case 'SERVICE':
		{include("./3SERVICE/SERVICE.php");break;}
	case 'MSERVICE':
		{include("./3SERVICE/MSERVICE.php");break;}	
	case 'MSERVICE1':
		{include("./3SERVICE/MSERVICE1.php");break;}
	case 'AJSERVICE':
		{include("./3SERVICE/AJSERVICE.php");break;}
	case 'AJSERVICE1':
		{include("./3SERVICE/AJSERVICE1.php");break;}
    case 'SUPSERVICE':
		{include("./3SERVICE/SUPSERVICE.php");break;}	
    //case 'LIT1':
		//{include("./3SERVICE/LIT1.php");break;}	
	case 'LIT2':
		{include("./3SERVICE/LIT2.php");break;}	
	case 'LLITS':
		{include("./3SERVICE/LLITS.php");break;}	
	case 'CREERLITS':
		{include("./3SERVICE/CREERLITS.php");break;}	
	case 'SUPLITS':
		{include("./3SERVICE/SUPLITS.php");break;}	
	case 'REPGRH':
		{include("./GRH/REPGRH.php");break;}
	case 'REPGRH1':
		{include("./GRH/REPGRH1.php");break;}
    case 'POINTAGE':
		{include("./GRH/POINTAGE.php");break;}
	case 'POINTAGE1':
		{include("./3SERVICE/POINAGEGRH1.php");break;}	
    case 'REGTRANSFER' :
		{include("./GRH/REGTRANSFER.php");break;}	
   //********************************************// LGRHD
	case 'MUTATION':
		{include("./GRH/MUTATION0.php");break;}	
	case 'RETRAITE':
		{include("./GRH/RETRAITE0.php");break;}
	case 'DEMISSION':
		{include("./GRH/DEMISSION0.php");break;}
	case 'DECES':
		{include("./GRH/DECES0.php");break;}
	//PV INSALATION
    case 'PVINS0' :
		{include("./GRH/PVINS0.php");break;}
	//GRH
	case 'SUPGRH' :
		{include("./GRH/SUPGRH.php");break;}
	case 'MA':
		{include("./GRH/MA.php");break;}	
	case 'a':
		{include("./GRH/a.php");break;}	
	case 'NPER2':
		{include("./GRH/NPER2.php");break;}	
	case 'LGRHP':
		{include("./GRH/LGRHP.php");break;}
	case 'searchgrh': 
		{include("./GRH/searchgrh.php");break;}	
	case 'SGRH':
		{include("./GRH/SGRH.php");break;}	
	case 'LGRH1':
		{include("./GRH/LGRH1.php");break;}
    case 'LGRHD':
		{include("./GRH/LGRHD.php");break;}
    case 'GRH1' :
		{include("./GRH/GRH1.php");break;}
	case 'DEMCON' :
		{include("./GRH/DEMCON.php");break;}	
	case 'MAL' :
		{include("./GRH/MAL.php");break;}	
	case 'EXCE' :
		{include("./GRH/EXCE.php");break;}	
	case 'MAT' :
		{include("./GRH/MAT.php");break;}
	case 'CAP' :
		{include("./GRH/CAP.php");break;}
	case 'FC' :
		{include("./GRH/FC.php");break;}
	case 'RELIQUAT' :
		{include("./GRH/RELIQUAT.php");break;}
	case '30' :
		{include("./GRH/30.php");break;}
	case '00' :
		{include("./GRH/00.php");break;}
	case 'MAJRESTCONG' :
		{include("./GRH/MAJRESTCONG.php");break;}
	case 'MAJRESTCONG1' :
		{include("./GRH/MAJRESTCONG1.php");break;}		
	case 'SUPCONG' :
		{include("./GRH/SUPCONG.php");break;}
	case 'SUPCONGT' :
		{include("./GRH/SUPCONGT.php");break;}
	case 'SUPCONGR' :
		{include("./GRH/SUPCONGR.php");break;}	
    case 'REGCONG' :
		{include("./GRH/REGCONG.php");break;}
	case 'CONGEPARPER' :
		{include("./GRH/CONGEPARPER.php");break;}	
	case 'ENTREECONG' :
		{include("./GRH/ENTREECONG.php");break;}		
	case 'CONFRETCONG' :
		{include("./GRH/CONFRETCONG.php");break;}	
	case 'CONFRETCONG1' :
		{include("./GRH/CONFRETCONG1.php");break;}	
    case 'AVERTISSEMENT' :
		{include("./GRH/AVERTISSEMENT0.php");break;}
	case 'DEP' :
		{include("./GRH/cessation.php");break;}	
	case 'DEP1' :
		{include("./GRH/cessation2.php");break;}
	case 'QES0' :
		{include("./GRH/QES0.php");break;}	
    case 'AMPUTATION' :
		{include("./GRH/AMPUTATION0.php");break;}
    case 'TRANSFER' :
		{include("./GRH/TRANSFER.php");break;}
    case 'POSTSUP' :
		{include("./GRH/PSUP0.php");break;}
	 case 'TITULARISATION' :
		{include("./GRH/TITULARISATION0.php");break;}	
	case 'searchgrhjs' :
		{ include("./GRH/searchgrhjs.php");break;}		
	case 'searchdnr1' :
		{ include("./GRH/searchdnr1.php");break;}		
	case 'searchdnr2' :
		{ include("./GRH/searchdnr2.php");break;}	
	case 'IAC' :
		{include("./GRH/IAC.php");break;}
	//
	case 'PAIE' :
		{include("./GRH/PAIE.php");break;}
	case 'PAIE1' :
		{include("./GRH/PAIE1.php");break;}		
	case 'PAIE2' :
		{include("./GRH/PAIE2.php");break;}	
	case 'PAIE3' :
		{include("./GRH/PAIE3.php");break;}		
	case 'ETATMAT2' :
		{include("./PAIE/ETATMAT2.php");break;}	
	case 'ETATMAT3' :
		{include("./PAIE/ETATMAT3.php");break;}	
	//AVANACEMENT
	case 'AVANCE' :
		{include("./GRH/AVANCE.php");break;}	
	case 'PREVISION' :
		{include("./GRH/LGRH.php");break;}	
    //CONTAGIEUX  
    case 'CONTAG' :
		{include("./GRH/CONTA0.php");break;}
    //INDEMNITE GLOBAL 
	case 'INDEMG' :
		{include("./GRH/INDEMG0.php");break;}		
	//PANIER	
	case 'PAN' :
		{include("./PAN/PAN.php");break;}		
	case 'PAN1' :
		{include("./PAN/PAN1.php");break;}		
	default: include('./GRH/ER.php');	
}
echo "<div class=\"footer\">";
echo "<p>";
echo "<strong>Copyright © 2013 DR TIBA Tous droits réservés.</strong>";
echo "<a href=\"mailto:tibaredha@yahoo.fr\">          Email    <img src=\"./IMAGES/mail_open_document.png\"></a>";
echo "<a href=\"https://www.facebook.com/redha.tiba\">facebook<img src=\"./IMAGES/pfb.png\">                </a>";
echo "</p>";
echo "</div>	";
echo "</body>";
echo "</html>";		
?>	





   
	


