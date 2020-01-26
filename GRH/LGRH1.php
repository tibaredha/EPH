<?php 
$Sexe=$_GET['Sexe'];
$per ->h(1,500,170,' ادارة المستخدم '.'   '.'<font color=\"black\"  >'.$_GET['Nomlatin'].'  '.$_GET['Prenom_Latin'].'</font>');
$per ->fieldset("field1","***");$per ->fieldset("field11","***");
$per ->fieldset("field5","***");$per ->fieldset("field55","***");


$per->gestion (40,260,$_GET['idp'],' شهادة عمل عربى','ctravail','b_props');
$per->gestion (40+100,260,$_GET['idp'],'شهادة عمل فرنسي','ctravail1','b_props');
$per->gestion1 (100+145,260,$_GET['idp'],'طلب عطلة','DEMCON','s_loggoff');
$per->gestion1 (90+100+120,260,$_GET['idp'],'سنوية مهنية','CAP','b_usrlist');
$per->gestion1 (90+145+145,260,$_GET['idp'],'عطلة مرضية','MAL','b_usradd');
$per->gestion1 (350+110,260,$_GET['idp'],'غياب خاص مدفوع الأجر','EXCE','b_index');
$per->gestion1 (90+450+60,260,$_GET['idp'],'عطلة أمومة','MAT','b_usrlist');
$per->gestion1 (90+600,260,$_GET['idp'],'بطاقة','FC','b_props');
$per->gestion1 (90+650,260,$_GET['idp'],'الترسيم','TITULARISATION','b_props');
$per->gestion1 (90+700,260,$_GET['idp'],'الترقية في الدرجة','AVANCE','b_props');
$per->gestion1 (90+800,260,$_GET['idp'],'منصب عالي ','POSTSUP','b_props');
$per->gestion1 (40,260+150,$_GET['idp'],' إنذار كتابي','AVERTISSEMENT','b_props');
$per->gestion1 (110,260+150,$_GET['idp'],' طلب استفسار','QES0','b_props');
$per->gestion1 (90+100+10,260+150,$_GET['idp'],'مقرر خصم','AMPUTATION','b_props');
$per->gestion1 (60+200+10,260+150,$_GET['idp'],'مقرر تحويل مصلحة ','TRANSFER','b_props');
$per->gestion1 (375+10,260+150,$_GET['idp'],'الراتب الشهريى ','PAIE','b_props');
$per->gestion (465+10,260+150,$_GET['idp'],'DRT','DRT','b_props');//'تصريح بمباشرة العمل'
$per->gestion (510+10,260+150,$_GET['idp'],'ATS','ATS','b_props');//'شهادة العمل و الأجر '
$per->gestion (550+10,260+150,$_GET['idp'],'دعوة ','INVITATION','b_props');
$per->gestion (590+10,260+150,$_GET['idp'],'التنقيط ','NOTATIONIND','b_props');



$per->gestion1 (650+10,260+150,$_GET['idp'],' العلاوات','INDEMG','b_props');

$per->gestion (720,260+150,$_GET['idp'],'FR','FR','b_props');

$per->gestion (755,260+150,$_GET['idp'],'CP','BADGE','b_props');

$per->gestion1 (790+10,260+150,$_GET['idp'],' العدوى','CONTAG','b_props');
$per->gestion1 (850+10,260+150,$_GET['idp'],'النشاط التكميلي','IAC','b_usrlist');


$per->photosuser(790+220,255,$_GET['idp'],100,100);

$per->gestion1 (90+790+270,260,$_GET['idp'],'الرجوع إلى القائمة الإسمية','LGRHP','b_home');


$per->gestion1 (90+790+150,260+150,$_GET['idp'],' تعديل بيانات مستخدم','','e');
$per->gestion1 (90+790+300,260+150,$_GET['idp'],' الذهاب من المؤسسة','DEP','b_deltbl');
$per -> sautligne (19);
?>




