<?php 
 $per ->h(1,500,170,'تعديل  المؤسسة');
$per ->f0('index.php?uc=METABLISSEMENT1','post');
$per ->submit(1110,525,'تعديل  المؤسسة');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per-> mysqlconnect();
$IDETABLISSEMENT= $_GET["IDETABLISSEMENT"] ; 
$sql = "SELECT * FROM etablissement WHERE  IDETABLISSEMENT = ".$IDETABLISSEMENT ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(900,$x,'المؤسسة');                   $per ->txtar(50,$x,'ETABLISSEMENTAR',100,$result->ETABLISSEMENTAR);
$per ->label(50,$x+60,'ETABLISSEMENT');          $per ->txtar(330,$x+60,'ETABLISSEMENTFR',100,$result->ETABLISSEMENTFR);
$per ->hide(595,$x+90,'IDETABLISSEMENT',20,$_GET["IDETABLISSEMENT"]);  
$per ->url(790+240,250,"index.php?uc=ETABLISSEMENT","القائمة الاسمية  للمؤسسات الصحية","2");  
}
$per ->f1();
$per -> sautligne (19);
?>    
 