
<?php 
$per ->h(1,500,170,'الترقية في الدرجة');
$per ->f0('./GRH/AVANCE1.php','post');
$per ->submit(1110,525,'الترقية في الدرجة');
$per ->fieldset("field1","***");
$per ->fieldset("field2","***");
$per ->fieldset("field3","***");
$per ->fieldset("field5","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT grh.CATEGORIE as CATEGORIE ,grh.ECHELON as ECHELON ,service.servicear as service,grh.Nomlatin as Nomlatin ,grh.NSS as NSS,grh.NCCP as NCCP,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.idg as idg,grade.ids as idstatut,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql) ; 
if( $result = mysql_fetch_object( $requete ) )//./1GRH/AVANCE1.php
{
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الترقية');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');              $per ->txtar(470-40,$x+60,'GRADE',72,$result->gradear); 
$per ->label(250,$x,'رقم  المقرر');             $per ->txtar(50,$x,'NDECISION',20,"0");
$per ->label(250,$x+30,'تاريخ  المقرر');        $per ->txtar(50,$x+30,'DATEDECISION',20,date("d-m-Y"));  
$per ->label(890,$x+90,'رقم المحضر');            $per ->txtar(800,$x+90,'NPV',5,"0"); 
$per ->label(890-200,$x+90,'تاريخ المحضر');      $per ->txtar(800-200,$x+90,'DATEPV',6,date("d-m-Y")); 
$per ->label(890-350,$x+90,' لسنة');           $per ->txtar(800-370,$x+90,'ANNEEPV',5,date("Y")); 
$per ->label(930,$x+145,' المدة');              $per ->combov(820,$x+142,'DUREE',array("الدنيا","المتوسطة","الطويلة"))   ; 
$per ->label(930-200,$x+145,' الصنف');         $per ->txtar(820-200,$x+142,'CATEGORIE',5,$result->CATEGORIE);
$per ->label(930-400,$x+145,' الدرجة');        $per ->txtar(820-400,$x+142,'ECHELON',5,$result->ECHELON);//$per ->combov(820-400,$x+142,'ECHELON',array("1","2","3","4","5","6","7","8","9","10","11","12")); 
$per ->label(860,$x+195,' الاقدمية المتبقية');   $per ->txtar(720+20,$x+195,'RESTE',10,"0");
$per ->label(860-300,$x+195,' تاريخ النفاذ '); $per ->txtar(720-290,$x+195,'DATEDEFFET',7,date("d-m-Y"));
$per ->hide(595,$x+90,'idg',20,$result->idg); 
$per ->hide(595,$x+90,'idstatut',20,$result->idstatut); 
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'INDICEB',20,"i");  
$per ->url(90+790+210,250,"index.php?uc=LGRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");   
} 
$per ->f1();
$per -> sautligne (19); 
?>  
 

