<?php 
$NIVEAUETUDEFR=$_GET['NIVEAUETUDEFR'];
$NIVEAUETUDEAR=$_GET['NIVEAUETUDEAR'];
$per ->h(1,500,170,'إضافة  مستوى دراسى');

$per ->f0('index.php?uc=ANIVEAUETUDE','post');
$per ->submit(1110,525,'إضافة  مستوى دراسى');
$per ->fieldset("field1","***");
$per ->fieldset("field5","***");
$x=250;
$per ->h(1,200,270,' بنجاح '.$NIVEAUETUDEFR.' لقد تم اضافة المستوى الدراسي ');
$per ->url(810+210,250,"index.php?uc=NIVEAUETUDE","القائمة الاسمية للمستويات الدراسية","2");  
$per ->f1();
$per -> sautligne (19);






?>









