<?php
$per ->h(1,500,170,'تعديل  المستوى الدراسي');
$per ->f0('index.php?uc=MNIVEAUETUDE1','post');
$per ->submit(1110,525,'تعديل  المستوى الدراسي');
$per ->fieldset("field1","***");
$per ->fieldset("field5","***");
$per-> mysqlconnect();  
$idniveauetude= $_GET["idniveauetude"] ; 
$sql = "SELECT * FROM niveauetude WHERE 	idniveauetude = ".$idniveauetude ;
$requete = mysql_query( $sql) ; 
  
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(850,$x,'niveauetudear');                    $per ->txtar(240,$x,'niveauetudear',70,$result->niveauetudear);
$per ->label(40,$x+50,'niveauetudefr');                  $per ->txtar(240,$x+50,'niveauetudefr',70,$result->niveauetudefr);
$per ->hide(595,$x+90,'idniveauetude',20,$idniveauetude);
$per ->url(810+210,250,"index.php?uc=NIVEAUETUDE","القائمة الاسمية للمستويات الدراسية","2");  
}
$per ->f1();
$per -> sautligne (19);	
?>    
