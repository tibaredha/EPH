<?php
$per ->h(1,400,170,'القائمة الاسمية للمستخدمين  حسب المصلحة ');
$per ->f0('index.php?uc=REPGRH1','post');
$per ->submit(500,400,'ابحث عن المستخدمين حسب المصلحة');
$per ->label(500,300,'المصلحة');                
$per ->combo(500,350,'SERVICE','grh','service','المصلحة','data','0','2'); 
$per ->f1();
// $per ->REPSERVICE (500,250);
$per -> sautligne (17);
?>











