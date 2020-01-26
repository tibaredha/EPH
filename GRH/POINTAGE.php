<?php
$per ->h(1,470,170,'ورقة الحضور للمستخدمين');
$per ->f0('./GRH/POINTAGE0.PHP','post');
$per ->submit(500,400,'ابحث عن المستخدمين حسب المصلحة');
$per ->label(670,300,'المصلحة');                
$per ->combo(500,350,'SERVICE','grh','service','المصلحة','data','0','2'); 
$per ->f1();
// $per ->REPSERVICE (500,250);
$per -> sautligne (17);
?>











