<?php   
$per ->h(1,500,170,'إضافة  مستوى دراسى');
$per ->f0('index.php?uc=ANIVEAUETUDE1','post');
$per ->submit(1110,525,'إضافة  مستوى دراسى');
$per ->fieldset("field1","***");
$per ->fieldset("field5","***");
$x=250;
$per ->label(850,$x,'niveauetudear');                    $per ->txtar(240,$x,'NIVEAUETUDEAR',70,"");
$per ->label(40,$x+50,'niveauetudefr');                  $per ->txtar(240,$x+50,'NIVEAUETUDEFR',70,"");
$per ->url(810+210,250,"index.php?uc=NIVEAUETUDE","القائمة الاسمية للمستويات الدراسية","2");  
$per ->f1();
$per -> sautligne (19);	  
?>



 