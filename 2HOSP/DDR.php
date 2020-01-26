<?php
$per ->h(2,450,170,'Calendrier hebdomadaire et mensuel de grossesse ');
$per ->f0('./index.php?uc=DDR1','post');

$per ->fieldset("field1","***");$per ->fieldset("field5","***");$per ->submit(1110,325,'DDR');
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat where IDP = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'*Nom');                        $per ->txt(430,$x,'NOM',20,$result->NOM);
$per ->label(50,$x+30,'*Prenom');                  $per ->txt(430,$x+30,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+60,'date');                     $per ->txt(470-40,$x+60,'DATE',20,date("Y-m-d"));
$per ->label(50,$x+90,'heure');                    $per ->txt(470-40,$x+90,'HEUR',20,date("H:i"));

$per ->label(650,$x+90,'DDR');                     $per ->txt(770,$x+90,'DDR',20,date("Y-m-d"));
// $per ->hide(595,$x+90,'idp',20,$_GET["idp"]);    
$per ->url(60+790+200,250,"index.php?uc=SMH&idp=".$_GET["idp"]."","GESTION MALADE","2");  
}
$per -> sautligne (11);



?>

