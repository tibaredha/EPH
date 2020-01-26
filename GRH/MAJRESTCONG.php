<?php
$per ->h(1,500,170,'تعديل  الباقى من العطلة السنوية');
$per ->f0('index.php?uc=MAJRESTCONG1','post');
$per ->submit(1110,525,'تعديل');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM grh WHERE idp = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(800,$x+63,'الباقى من العطلة السنوية');             $per ->txtar(720+20,$x+60,'QUT0',3,$result->QUT);
$per ->label(500,$x+63,'تعديل  الباقى من العطلة السنوية');          $per ->txtar(470-40,$x+60,'QUT',3,$result->QUT);
$per ->hide(595,$x+90,'idp',20,$result->idp); 
$per ->url(790+250,250,"index.php?uc=RELIQUAT","تعديل  الباقى من العطلة السنوية","2");  
}
$per ->f1();
$per -> sautligne (19);
?>    
  