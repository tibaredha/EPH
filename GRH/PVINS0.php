<?php  
$per ->h(1,500,170,'محضر تنصيب ');
$per ->f0('./GRH/PVINS.php','post');
$per ->submit(1110,525,'إطبع محضر تنصيب');
$per ->fieldset("field1","***");
$per ->fieldset("field2","***");
// $per ->fieldset("field3","***");
$per ->fieldset("field5","***");
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,"");
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,"");
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATEINS',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة ');               $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');              $per ->combo(430,$x+60,'GRADE','grh','grade','الرتبة','data','0','gradear');  
$per ->label(910,$x+90,'بمقتضى ');              $per ->txtar(430,$x+90,'FONCTION',72,""); 
$per ->label(918,$x+142,'المدير');              $per ->txtar(430,$x+142,'directeur',72,"");    
$per ->url(90+790+210,250,"index.php?uc=a","اضافة مستخدم جديد","2");   
$per ->f1();
$per -> sautligne (19);
?>
   


    
	
	
	
  

   
	

 