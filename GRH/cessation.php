<?php
$per ->h(1,500,170,'الذهاب من المؤسسة');
$per ->f0('index.php?uc=DEP1','post');
$per ->submit(1110,525,'الذهاب من المؤسسة');
$per ->fieldset("field1","***");
$per ->fieldset("field2","***");
$per ->fieldset("field5","***");
$per-> mysqlconnect(); 
$id  = $_GET["idp"] ; 
$sql = "SELECT service.servicear as service,grh.Date_Cessation,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Date_Naissance as Date_Naissance ,grh.Sexe as Sexe,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');              $per ->txtar(470-40,$x+60,'GRADE',72,$result->gradear); 
$per ->label(910,$x+90,'المصلحة');              $per ->txtar(430,$x+90,'SERVICE',72,$result->service); 
$per ->label(885,$x+142,'تاريخ الذهاب ');      $per ->txtar(720,$x+138,'datecessation',20,$result->Date_Cessation);            
$per ->label(620,$x+142,' سبب الذهاب');        $per ->combo(430,$x+142,'motifcessation','grh','causedepart','',"WILAYAN",'0','1');          
$per ->hide(595,$x+90,'Sexe',20,$result->Sexe); 
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->url(90+790+210,250,"index.php?uc=LGRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");    
}
$per ->f1();
$per -> sautligne (19);
?>  




