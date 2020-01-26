<?php   
$per ->h(1,500,170,'تعديل تعداد المناصب');
$per ->f0('index.php?uc=MEFF1','post');
$per ->submit(1110,525,'تعديل تعداد المناصب');
$per ->fieldset("field1","***");
$per ->fieldset("field5","***");  
$ANNEE=date("Y");
$ANNEE2=date("Y")-1;
$ANNEE3=date("Y")-2;
$idg= $_GET["idg"] ; 
$per-> mysqlconnect(); 
$sql = "SELECT * FROM GRADE WHERE idg = ".$idg ;
$requete = mysql_query( $sql) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$A='A'.$ANNEE;
$A2='A'.$ANNEE2;
$A3='A'.$ANNEE3;
$per ->label(40,$x,'Année '.$ANNEE);                      $per ->txt(240,$x,'A'.$ANNEE,70,$result->$A);
$per ->label(40,$x+30,'Année '.$ANNEE2);                  $per ->txt(240,$x+30,'A'.$ANNEE2,70,$result->$A2);
$per ->label(40,$x+60,'Année '.$ANNEE3);                  $per ->txt(240,$x+60,'A'.$ANNEE3,70,$result->$A3);
$per ->hide(595,$x+90,'idg',20,$idg);
$per ->url(810+260,250,"index.php?uc=GRADE","القائمة الاسمية  للرتب","2");  
}
$per ->f1();
$per -> sautligne (19);	
?>    
 