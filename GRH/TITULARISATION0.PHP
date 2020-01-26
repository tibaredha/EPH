<?php   
$per ->h(1,500,170,'مقرر الترسيم');
$per ->f0('./GRH/TITULARISATION.PHP','post');
$per ->submit(1110,525,'مقرر الترسيم');
$per ->fieldset("field1","***");
$per ->fieldset("field11","***");
$per ->fieldset("field5","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT service.servicear as service,grh.Motif_Cessation as Cessation ,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.idg as idg,grade.ids as idstatut,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql) ; 
if( $result = mysql_fetch_object( $requete ))
{
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');              $per ->txtar(470-40,$x+60,'GRADE',72,$result->gradear); 

  
$per ->label(790,$x+60+90,'رقم  مقرر التثبيت ');    $per ->txtar(670,$x+60+90,'ND',10,"x");
$per ->label(590,$x+60+90,'المؤرخ فى ');               $per ->txtar(470,$x+60+90,'DD',10,"x");
$per ->label(390,$x+60+90,'ابتداء من');              $per ->txtar(270,$x+60+90,'DT',10,"x"); 
 
$per ->label(790,$x+60+120,'تاريخ محضر اللجنة المتساوية الاعضاء ');              $per ->txtar(670,$x+60+120,'ND',10,"x");
$per ->label(590,$x+60+120,'المؤرخ فى ');                               $per ->txtar(470,$x+60+120,'DDT',10,"x");

$per ->label(790,$x+60+150,'الصنف  ');                $per ->txtar(670,$x+60+150,'ETAO',10,"x");
$per ->label(590,$x+60+150,'الرقم الاستدلالي ');               $per ->txtar(470,$x+60+150,'ETAA',10,"x");
$per ->label(390,$x+60+150,'ابتداء من');              $per ->txtar(270,$x+60+150,'APARTIRDATE',10,"x"); 

$per ->hide(595,$x+90,'idg',20,$result->idg);  
$per ->hide(595,$x+90,'idstatut',20,$result->idstatut);  
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]);     
$per ->url(90+790+210,250,"index.php?uc=LGRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");  
}
$per ->f1();
$per -> sautligne (19);	

// $sql = "SELECT service.servicear as service,grh.Motif_Cessation as Cessation ,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.idg as idg,grade.ids as idstatut,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
// $requete = mysql_query( $sql, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
// $result = mysql_fetch_array( $requete ) ;
// mysql_free_result($requete);
// $PULP=$result["Cessation"]; 
// echo $PULP ;
//$PULP='فسخ عقد ';
// switch($PULP) 
// {
    // case 'إستقالة ' :
		// {   ECHO '1';break;}
	// case 'وفاة' :
		// {   ECHO '2';break;}
    // case 'تقاعد ' :
		// {   ECHO '3';break;}
    // case 'عزل' :
		// {   ECHO '4';break;}
    // case 'تسريح ' :
		// {   ECHO '5';break;}		
	// case 'نقل ' :
		// {   ECHO '6';break;}	
	// case 'فسخ عقد ' :
		// {   ECHO '7';;break;}		
// }

		 


		
?>  


