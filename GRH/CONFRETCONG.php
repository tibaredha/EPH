<?php
$per ->h(1,500,170,'مــقرر إستئناف عمل');
$per ->f0('./GRH/CONFRETCONG1.php','post');
$per ->submit(1110,525,'مــقرر إستئناف عمل');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per-> mysqlconnect();



$id  = $_GET["idregcong"] ; 
  // $cause  = $_GET["cause"] ;
  // $dateent  = $_GET["dateent"] ;
  //requête SQL:
  $sql = "SELECT grh.Nomarab as nomar,service.SERVICEAR as service,grh.idp as idp,grh.Prenom_Arabe as prenomar,grh.Grade_Actuel,grade.gradear as grade,regcong.idregcong as idregcong ,regcong.datesor as datesor ,regcong.dateent as dateent,regcong.cause as  cause,regcong.remplacant as remplacant ,regcong.duree as duree
  FROM grh
  inner join regcong 
  on grh.idp=regcong.idp
  
  inner join service 
  on grh.SERVICEAR=service.ids
  
  inner join grade 
  on grh.rnvgradear=grade.idg
  where idregcong = '$id'
  order by datesor "; 
 // $sql = "SELECT * FROM  regcong where idregcong = ".$id;
$requete = mysql_query( $sql) ; 
if( $result = mysql_fetch_object( $requete )  )
{
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$per->nbrtostring("grh","grh","idp",$result->idp,"Nomarab"));
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$per->nbrtostring("grh","grh","idp",$result->idp,"Prenom_Arabe"));
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(870,$x+60,'تاريخ الإستئناف');      $per ->txtar(720+20,$x+60,'DATERETOUR',10,date("Y-m-d"));
$per ->label(630,$x+60,'سبب العطلة');          $per ->txtar(470-40,$x+60,'cause',10,$result->cause);//cause  


$per ->hide(595,$x+90,'GRADE',20,$per->nbrtostring("grh","grade","idg",$per->nbrtostring("grh","grh","idp",$result->idp,"rnvgradear"),"gradear")); 
$per ->hide(595,$x+90,'OK',20,"1"); 
$per ->hide(595,$x+90,'idregcong',20,$_GET["idregcong"]); 
 $per ->url(90+790+210,250,"index.php?uc=ENTREECONG","الدخول من العطل ليوم","2");  
}
$per ->f1();
$per -> sautligne (19);
?>  


