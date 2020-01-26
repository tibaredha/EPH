
<?php 
$per ->h(1,500,170,'محاكاة راتب مستحدم');
$per ->f0('./GRH/PAIE1.PHP','post');
$per ->submit(1110,525,'راتب مستحدم');
$per ->fieldset("field1","***");
$per ->fieldset("field2","***");
$per ->fieldset("field3","***");
$per ->fieldset("field5","***");
$per-> mysqlconnect(); 
$id  = $_GET["idp"] ;  
//$sql = "SELECT * FROM grh,grade where  grade.idg=grh.rnvgradear and   idp = ".$id;
//$sql = "SELECT grh.NCCP,grh.NSS,grh.ECHELON ,grh.CATEGORIE ,grh.Situation_familliale ,grh.Nomlatin  ,grh.Date_Naissance ,grh.Prenom_Latin ,grh.Prenom_Arabe ,grh.Nomarab ,grh.idp ,grade.gradeFR as gradefr,grade.gradear as gradear ,grh.rnvgradear as idgrade FROM grh,grade where  grade.idg=grh.rnvgradear and   idp = ".$id;
$sql = "SELECT grh.NCCP,grh.Situation_familliale ,grh.NSS,grade.gradeFR as gradefr,service.servicear as service,grh.ECHELON,grh.CATEGORIE,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.idg as idg,grade.ids as idstatut,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
  $x=250;
  $per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
  $per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
  $per ->label(329,$x,'الزوج');                  $per ->combov(280,$x,'CONJ',array("N","Y"));
  $per ->label(165,$x,'عدد الايام');              $per ->combov(30,$x,'JOURS',array("30","29","28","27","26","25","24","23","22","21","20","19","18","17","16","15","14","13","12","11","10","09","08","07","06","05","04","03","02","01","00"))   ;
  $per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
  $per ->label(165,$x+30,'* NSS رقم الضمان الاجتماعيى ');  $per ->txt(30,$x+29,'CNASAT',15,'0');
  $per ->label(630,$x+30,'ساعة الطلب');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
  $per ->label(930,$x+60,'الرتبة');              $per ->txtar(470-40,$x+60,'GRADE',72,$result->gradear); 
  $per ->label(165,$x+60,'* CCP رقم ح/ب');       $per ->txt(30,$x+60,'CCP',15,'0');
  $per ->label(910,$x+90,'المصلحة');              $per ->txtar(430,$x+90,'SERVICE0',72,$result->service); 
  $per ->label(165,$x+90,'المنصب العلي');         $per ->combov(30,$x+90,'PSUP',array("N", "Y"));      
  $per ->label(873,$x+140,'*الحالة العائلية');    $per ->combo(720,$x+140,'SF','grh','sfamiliale','الحالة العائلية','data','0','1'); 
  $per ->label(250,$x+140,'*عدد الاولاد');         $per ->combov(35,$x+140,'ENFS',array("0","1","2","3","5","6","7","8","9","10","11","12"));
  $per ->label(873,$x+140+55,'الصنف');           $per ->combov(720,$x+140+55,'CAT',array("9","10","11","12","13","14","15","16","17","hc1"));  
  $per ->label(250,$x+140+55,'ECH');             $per ->combov(35,$x+140+55,'ECH',array("0","1","2","3","4","5"));//$per ->txt(200,850,'',15,$result->ECHELON);
  $per ->hide(595,$x+90,'idg',20,$result->idg); 
  $per ->hide(595,$x+90,'idstatut',20,$result->idstatut); 
  $per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
  $per ->url(90+790+210,250,"index.php?uc=LGRH1&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"ادارة المستخدم","2");    
}
$per ->f1();
$per -> sautligne (19);
?>  
  
  