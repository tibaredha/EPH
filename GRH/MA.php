<?php
$per ->h(1,500,170,'تعديل مستخدم');
$per ->f0('index.php?uc=***','post');
$per ->submit(1110,525,'تعديل مستخدم');
$per ->fieldset("field1","Donnees de l'état civil");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT service.servicear as service,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{


$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->label1(720,$x,$result->Nomarab); 
$per ->label(650,$x,'*الاسم');                  $per ->label1(470,$x,$result->Prenom_Arabe);//$per ->txtar(,$x,'PRENOMAR',20,'');
$per ->label(380,$x,'لقب الزوج');              // $per ->txtar(200,$x,'NOMM',20,'');
$per ->label(110,$x,'*الجنس');                  //$per ->combo(33,$x,'sexe','grh','SEXE','الجنس','','0','1');
$x1=280;
$per ->label(905,$x1,'*إسم الأب  ');           // $per ->txtar(720,$x1,'PERE',20,'');
$per ->label(220,$x1,'*إسم و لقب الأم');       // $per ->txtar(35,$x1,'MERE',24,'');
$x2=310;
$per ->label(885,$x2,'*تاريخ الميلاد');          //$per ->datetime(720,$x2,'DATENAISSANCE');
$per ->label(610,$x2,'*رقم عقد الميلاد ');      // $per ->txtar(550,$x2,'NEC',3,'');
$per ->label(455,$x2,'*ولاية الميلاد');           //$per ->combo(350,$x2,'WILAYAN','grh','wil','الولاية',"WILAYAN",'0','2'); 
$per ->label(240,$x2,'*بلدية الميلاد');          //$per ->combo1(35,$x2,'COMMUNEN','COMMUNEN','البلدية'); 
$x3=340;
$per ->label(873,$x3,'*الحالة العائلية');      // $per ->combo(720,$x3,'SF','grh','sfamiliale','الحالة العائلية','data','0','1'); 
$per ->label(250,$x3,'*عدد الاولاد');           // $per ->nbr(35,$x3,'NBRE','10',0,10); 
$per ->fieldset("field2","Adresse de residence");
$x4=390;
$per ->label(255,$x4,'*العنوان');             // $per ->txtar(35,$x4,'ADRESSE',24,'');
$per ->label(625,$x4,'*بلدية الإقامة ');       // $per ->combo1(500,$x4,'COMMUNER','COMMUNER','بلدية الإقامة '); 
$per ->label(885,$x4,'*ولاية الإقامة');         // $per ->combo(720,$x4,'WILAYAR','grh','wil','الولاية','WILAYAR','0','2'); 
$per ->fieldset("field3","Diplome");
$x5=445;
$per ->label(840,$x5,'*المستوى الدراسي');     // $per ->combo(720,$x5,'NE','grh','niveauetude','المستوى الدراسي','data','0','2'); 
$per ->label(650,$x5,'*المؤهل');               //$per ->combo(500,$x5,'NE','grh','niveauetude','المؤهل','data','0','1'); 
$per ->label(250,$x5,'التخصص');               // $per ->combo(35,$x5,'SP','grh','specialite','التخصص','data','0','2'); 
$per ->fieldset("field4","Recrutement");
$x6=508;
$per ->label(925,$x6,'*الرتبة');              // $per ->combo(580,$x6,'GRADE','grh','grade','الرتبة','data','0','gradear'); 
$per ->label(485,$x6,'*تاريخ التعيين ');       // $per ->datetime(320,$x6,'DATENOM');
$per ->label(212,$x6,'*تاريخ الالتحاق');       // $per ->datetime(35,$x6,'DATEARRIVE');
$per ->fieldset("field5","****");
$per ->label(1140,$x,'* NSS رقم الضمان الاجتماعيى '); // $per ->txt(1005,$x,'NSS',15,'');
$per ->label(1238,$x1,'* CCP رقم ح/ب');              // $per ->txt(1005,$x1,'CCP',15,'');
$per ->label(1195,$x2,'*رقم الهاتف المحمول ');          // $per ->txt(1005,$x2,'TELP',15,'');
$per ->label(1215,$x3,'*رقم الهاتف الثابت');          // $per ->txt(1005,$x3,'TELF',15,'');
$per ->fieldset("field6",'*المصلحة');
//$per ->combo(1050,$x4,'SERVICE','grh','service','المصلحة','data','0','2'); 
$per ->fieldset("field7",'***');
$per ->label(1005,$x5,'*Nom');                 // $per ->txt(1195,$x5,'NOMFR',15,'');
$per ->label(1005,$x5+30,'*Prenom');           // $per ->txt(1195,$x5+30,'PRENOMFR',15,'');
$per ->url(90+790+210,180,"index.php?uc=LGRHP&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"قائمة المستخدمين","2");  
}
$per ->f1();
$per -> sautligne (19);

?>