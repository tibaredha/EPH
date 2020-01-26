<?php
$Sexe=$_GET['Sexe'];
$per ->h(1,500,170,' ادارة المستخدم '.'   '.'<font color=\"black\"  >'.$_GET['Nomlatin'].'  '.$_GET['Prenom_Latin'].'</font>');
$per ->fieldset("field1","***");$per ->fieldset("field11","***");
$per ->fieldset("field5","***");$per ->fieldset("field55","***");
$per->gestion (40,260,$_GET['idp'],' شهادة عمل عربى','ctravailA','b_props');
$per->gestion (40+100,260,$_GET['idp'],'شهادة عمل فرنسي','ctravail1FR','b_props');
$per->gestion1 (100+210,260,$_GET['idp'],'مقررنقل','MUTATION','b_props');
$per->gestion1 (90+200+210,260,$_GET['idp'],'مقرر تقاعد','RETRAITE','b_props');
$per->gestion1 (350+240,260,$_GET['idp'],'مقرر إستقالة','DEMISSION','b_props');
$per->gestion1 (90+100+210,260,$_GET['idp'],'مقرر وفاة','DECES','b_props');
$per->gestion1 (90+790+210,260,$_GET['idp'],'الرجوع إلى القائمة الإسمية','LGRHD','b_home');
$per->gestion1 (90+790+150,260+150,$_GET['idp'],' تعديل بيانات مستخدم','DEP','e');
$per->gestion1 (80+790+300,260+150,$_GET['idp'],'الغاء الذهاب من المؤسسة','','b_deltbl');
$per -> sautligne (19);
?>



