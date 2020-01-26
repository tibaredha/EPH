<?php 

$per-> mysqlconnect(); 
$id  = $_GET["idp"] ; 
$sql = "SELECT grh.Motif_Cessation as Cessation,service.servicear as service,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.idg as idg,grade.ids as idstatut,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ))
{
if ($result->Cessation =='1 ' )
{
$per ->fieldset("field1","***");
$per ->fieldset("field2","***");
$per ->fieldset("field3","***");
$per ->fieldset("field5","***");
$per ->h(1,500,170,'مقرر إستقالة');
$per ->f0('./GRH/DEMISSION.php','post');
$per ->submit(1110,525,'مقرر إستقالة');
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');              $per ->txtar(470-40,$x+60,'GRADE',72,$result->gradear); 
$per ->label(910,$x+90,'المصلحة');              $per ->txtar(430,$x+90,'SERVICE0',72,$result->service); 
$per ->label(860,$x+142,' إدماج رقم');  $per ->txtar(740,$x+142,'ND',5,""); 
$per ->label(860-310,$x+142,'المؤرخ فى');        $per ->txtar(740-310,$x+142,'DD',5,""); 
$per ->label(200,$x+142,'ابتداء من');          $per ->txtar(50,$x+142,'DT',5,""); 
$per ->label(840,$x+142+55,'تاريح طلب الاستقالة');                     $per ->txtar(740,$x+142+55,'DDT',5,""); 
$per ->hide(595,$x+90,'idg',20,$result->idg); 
$per ->hide(595,$x+90,'idstatut',20,$result->idstatut); 
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->url(90+790+210,250,"index.php?uc=GRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");    
$per ->f1();
}
else 
{
$per ->fieldset("field1","***");
$per ->fieldset("field2","***");
$per ->fieldset("field3","***");$per ->fieldset("field33","***");
$per ->fieldset("field5","***");
$per ->h(1,390,270,'لايمكن إستخراج مقرر إستقالة');
$per ->h(1,400,270+100,'إن المستخدم في حالة '); 
$per ->h(1,490,270+150,"(".$per ->nbrtostring('grh','causedepart','idcausedepart',$result->Cessation,'causedepartar').")" ); 
$per ->h(1,430,270+200,'حاول مرة اخرى'); 
$per ->url(90+790+210,250,"index.php?uc=GRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");    
}
}
$per -> sautligne (19);	
?>




 
  
	
  
	
	
    
    
    
  
