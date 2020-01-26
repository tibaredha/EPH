<?php 
$per ->f0('./GRH/***.php','post');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ;
$sql = "SELECT grh.Date_Premier_Recrutement,grh.rnvgradear,service.servicear as service,grh.Nomlatin as Nomlatin ,grh.Sexe as Sexe,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete )  )//and $Sexe =="2"
{
if ($result->rnvgradear==1 || $result->rnvgradear==3 )
{
$per ->h(1,500,170,' التخلي عن النشاط التكميلي ');
$per ->submit(1110,525,'التخلي عن النشاط التكميلي');
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');              $per ->txtar(470-40,$x+60,'GRADE',72,$result->gradear); 
$per ->label(878,$x+90,'تاريخ اول تعين');       $per ->txtar(470-40,$x+90,'DPR',8,$result->Date_Premier_Recrutement);       
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'Sexe',20,$result->Sexe); 
$per ->url(90+790+210,250,"index.php?uc=LGRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");  
$per -> sautligne (19);//fin if 
}
ELSE
{
$per ->h(1,500,170,' التخلي عن النشاط التكميلي  ');
$per ->h(1,400,260,'.......لا يمكن المستخدم  يجب ان يكون طبيب مختص ');
$per ->url(90+790+210,250,"index.php?uc=LGRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");  
$per -> sautligne (19);        
}
}
$per ->f1();
?>



