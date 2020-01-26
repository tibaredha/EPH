<?php   
$per ->h(1,500,170,'إضافة تخصص');
$per ->f0('index.php?uc=ASPECIALITE1','post');
$per ->submit(1110,525,'إضافة تخصص');
$per ->fieldset("field1","***");
$per ->fieldset("field5","***");
$x=250;
$per ->label(850,$x,'specialitear');                    $per ->txtar(240,$x,'specialitear',70,"");
$per ->label(40,$x+50,'specialitefr');                  $per ->txtar(240,$x+50,'specialitefr',70,"");
$per ->hide(595,$x+90,'idspecialite',20,"");
$per ->url(810+210,250,"index.php?uc=SPECIALITE","القائمة الاسمية للتخصصات","2");  


$per ->f1();
$per -> sautligne (19);	
 ?>

