<?php   
$per ->h(2,500,170,'MODIFICATION DU MEDICAMENT');
$per ->f0('index.php?uc=MMED1','post');
$per ->submit(1110,525,'MODIFICATION DU MEDICAMENT');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$id  = $_GET["idp"] ; 
$per-> mysqlconnect();
$sql = "SELECT * FROM T21 WHERE id = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'IDMED');                 $per ->txt(200,$x,'ID',20,$result->ID);
$per ->label(50,$x+30,'CODE MEDICAMENT ');   $per ->txt(200,$x+30,'code',20,$result->code);
$per ->label(50,$x+60,'DCI  ');              $per ->txt(200,$x+60,'dci',61,$result->dci);
$per ->label(50,$x+90,'PRESENTATION ');      $per ->txt(200,$x+90,'pre',20,$result->pre);
$per ->label(400,$x+90,'PRIX ');             $per ->txt(450,$x+90,'prix',20,$result->prix);
$per ->hide(595,$x+90,'ID',20,$result->ID);    
$per ->url(80+790+210,250,"index.php?uc=LMED","liste medicaments","2");  
}
$per ->f1();
$per -> sautligne (19);
?>



 





