<?php 
$per-> mysqlconnect();
$id  = $_GET["idon"] ; 
$sql = "SELECT * FROM users WHERE IDP = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{ 
$per ->h(3,600,180,'Modifier Membre Inscrit');
$per -> sautligne (2);
$per ->f0('index.php?uc=***','post');//nbrtostring("grh","wil","IDwil",$result->WILAYA,"WILAYASAR")
$per ->label(500,275,'WILAYA ');               $per ->label(670,275,nbrtostring("grh","wil","IDwil",$result->WILAYA,"WILAYASAR"));       $per ->combo(670+200,275,'WILAYA','grh','wil','الولاية',"WILAYAN",'0','2');                                                
$per ->label(500,305,'COMMUNE ');              $per ->label(670,305,nbrtostring("grh","com","IDCOM",$result->COMMUNE,"communear"));      $per ->combo1(670+200,305,'COMMUNE','COMMUNEN','البلدية');                                                 
$per ->label(500,335,'SERVICE :');             $per ->label(670,335,$result->SERVICE);                                                   $per ->combov(670+200,335,'SERVICE',array("GRH","PTS", "MEDECINE HOMME", "MEDECINE FEMME", "CHIRURGIE HOMME", "CHIRURGIE FEMME", "GYNECO","MATERNITE", "PEDIATRIE", "BLOC OPP A", "BLOC OPP B", "UMC", "HEMODIALYSE"))   ; 
$per ->label(500,365,'Nom d’utilisateur :');   $per ->label(670,365,$result->USER);                                                      $per ->TXT(670+200,365,'USER',20,$result->USER);
$per ->label(500,395,'Mot de passe:');         $per ->label(670,395,$result->MDP);                                                       $per ->PSW(670+200,395,'MDP',20,$result->MDP);
$per ->label(500,425,'Date inscription:');     $per ->label(670,425,$result->DATEINSC);                                                  $per ->TXT(670+200,425,'DATEINSC',20,date("d-m-Y")); 
$per ->label(500,460,'MODIFICATION');          $per ->submit(670,460,'MODIFICATION');

$per ->f1();
$per -> sautligne (15);
}
?> 










