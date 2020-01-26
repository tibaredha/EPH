<?php 
$per ->h(1,500,170,'غياب خاص مدفوع الأجر');
$per ->f0('./GRH/tCONGE1.php','post');
$per ->submit(1110,525,'إطبع رخصة العطلة');
$per ->fieldset("field1","***");
$per ->fieldset("field2","***");
$per ->fieldset("field3","***");
$per ->fieldset("field5","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT service.servicear as service,grh.Sexe as Sexe ,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(925,$x,'*اللقب');                     $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                      $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');                 $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');              $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');                  $per ->txtar(470-40,$x+60,'GRADE',72,$result->gradear); 
$per ->label(330,$x+60,'الوظيفة');                 $per ->txtar(80-40,$x+60,'FONCTION',40,""); 
$per ->label(928,$x+90,'المدة*');                   $per ->txtar(720+20,$x+90,'DUREE',10,"0"); //$per ->combov(720+20,$x+90,'DUREE',array("03 أيام", "15 أيام", "21 أيام", "30 يوم"))   ; 
$per ->label(595,$x+90,'تاريخ بداية العطلة*');     $per ->datetime(470-40,$x+90,'DC');   
$per ->label(918,$x+142,'السبب');             
$per ->combo(520,$x+142,'CC','grh','causeconge','','data','0','1'); 
$per ->label(430,$x+142,'المصلحة');                 $per ->txtar(40,$x+142,'SERVICE',50,$result->service); 
$per ->label(900,$x+142+55,'المستخلف');             $per ->txtar(720,$x+142+50,'REMPLACANT',20,""); 
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->url(90+790+210,250,"index.php?uc=LGRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");    
}
$per ->f1();
$per -> sautligne (19);
?>  

