<?php 
$per ->h(1,500,170,'CODE CIM 10');
$per ->f0('index.php?uc=CODECIM1','post');
$per ->submit(1110,525,'CODE CIM 10');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field11","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat WHERE idp = ".$id ;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'Non :');                   $per ->txt(120,$x,'NOM',20,$result->NOM);
$per ->label(350,$x,'Prenom :');               $per ->txt(470-40,$x,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+30,'Date :');               $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');             $per ->txt(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(50,$x+60,'Diagnostic');           $per ->txt(120,$x+60,'GRADE',72,$result->DGC);
$per ->label(50,$x+90,'Entree le');            $per ->txt(120,$x+90,'DUREE',20,$result->DATE);
$per ->label(350,$x+90,'Service');             $per ->txt(470-40,$x+90,'DUREE',20,$per->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));
$per ->label(50,$x+145,'Ancien Code');        


if($result->CODCIM!="")
{
$per ->txt(180,$x+145,'CHAPITRE',3,$per->nbrtostring("grh"," cim","row_id",$result->CODCIM,"diag_cod")); 
$per ->txt(240,$x+145,'CHAPITRE',85,$per->nbrtostring("grh"," cim","row_id",$result->CODCIM,"diag_nom")); 
}
else
{
$per ->txt(180,$x+145,'CHAPITRE',3,"");  
$per ->txt(240,$x+145,'CHAPITRE',85,""); 
}



$per ->label(50,$x+145+50,'Chapitre');         $per ->CHAPITRE(180,$x+145+50,'CHAPITRE','grh','CHAPITRE');  
$per ->label(50,$x+185+50,'Sous-Categorie');   $per ->CATEGORIECIM(180,$x+185+50,'CATEGORIECIM'); 
$per ->hide(595,$x+90,'ADRESSE',20,$result->ADRESSE);
$per ->hide(595,$x+90,'SERVICEHOSP',20,$result->SERVICEHOSP);
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]); 
$per ->hide(595,$x+90,'AGE',20,$result->AGE);   
$per ->url(790+210,250,"index.php?uc=SMH&idp=".$_GET["idp"],"SUIVIE DU PATIENT HOSPITALISE","3");  
}
$per ->f1();
$per -> sautligne (20);
?>  