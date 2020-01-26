<?php   
$per ->h(2,500,170,'MODIFICATION CIM');
$per ->f0('index.php?uc=MCIM1','post');
$per ->submit(1110,525,'MODIFICATION CIM');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$id  = $_GET["idp"] ; 
$per-> mysqlconnect();
$sql = "SELECT * FROM CIM WHERE row_id = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'IDCIM');                 $per ->txt(200,$x,'ID',20,$result->row_id);
$per ->label(50,$x+30,'CODE CIM ');          $per ->txt(200,$x+30,'code',20,$result->diag_cod);
$per ->label(50,$x+60,'DGC  ');              $per ->txt(200,$x+60,'dci',120,$result->diag_nom);
$per ->hide(595,$x+90,'ID',20,$result->row_id);    
$per ->url(80+790+210,250,"index.php?uc=LCIM","CIM","2");  
}
$per ->f1();
$per -> sautligne (19);
?>



 





