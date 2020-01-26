<?php
$nomfr           = $_POST["NOMFR"];
$prenomfr        = $_POST["PRENOMFR"];
$PRENOM          = $_POST["PRENOMAR"];
$NOM             = $_POST["NOMAR"];
$NOMM            = $_POST["NOMM"];        //NOM MARIE
$SEXE            = $_POST["SEXE"];
$PERE            = $_POST["PERE"];
$MERE            = $_POST["MERE"];
$DATENAISSANCEE  =$_POST["DATENAISSANCE"];
$NEC             = $_POST["NEC"] ;       //NUMERO ETAT CIVILE
$COMMUNEN        = $_POST["COMMUNEN"] ;  //COMMUNE DE NAISSANCE
$WILAYAN         = $_POST["WILAYAN"] ;  //WILAYA DE NAISSANCE
$ADRESSE         = $_POST["ADRESSE"] ;  //ADRESSE
$COMMUNER        = $_POST["COMMUNER"] ; //COMMUNE DERESIDENCE
$WILAYAR         = $_POST["WILAYAR"] ;  //WILAYA DERESIDENCE PAS EQUIVALENT DANS BASE DE DONNES
$SF              = $_POST["SF"] ;       //SITUATION FAMILIALE
$NBRE            = $_POST["NBRE"] ;     //NBR D ENFANT
$TELP            = $_POST["TELP"] ;     //TELPHONE PORTABLE 
$TELF            = $_POST["TELF"] ;     //TELPHONE FIXE
$NSS             = $_POST["NSS"] ;      //NUMER SS
$NE              = $_POST["NE"] ;       //NIVEAU DETUDE 
$SP              = $_POST["SP"] ;       //SPECIALITE
$GRADE           = $_POST["GRADE"] ;    // GRADE
$DATEARRIVE      = $_POST["DATEARRIVE"]; 
$SERVICE         = $_POST["SERVICE"];
$DATENOM         =$_POST["DATENOM"];
if  
(
$_POST["SERVICE"] =="1" 
)
{
$per ->h(1,450,170,'اضافة مستخدم فشلت بسبب الحقل الفارغ');
$per ->f0('index.php?uc=***','post');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->url(90+790+210,250,"index.php?uc=a","اضافة مستخدم جديد","2");   
$x=250;
$per ->f1();
$per -> sautligne (17);
}
else //tout est bon 
{
$per-> mysqlconnect();
$sql = "INSERT INTO grh (DATEARRIVE,FILIERE,FILIEREFR,NE,NSECU,NBRE,Situation_familliale,WILAYAR,COMMUNER,ADRESSEAR,Nomlatin,Prenom_Latin,Prenom_Arabe,Nomarab,Nom_Arabe,Sexe,pere,mere,Date_Naissance,nec,Commune_Naissancear,Wilaya_Naissancear,rnvgradear,Date_Premier_Recrutement,SERVICEAR ) 
VALUES ('".$DATEARRIVE."','".$SP."','".$SP."','".$NE."','".$NSS."','".$NBRE."','".$SF."','".$WILAYAR."','".$COMMUNER."','".$ADRESSE."','".$nomfr."','".$prenomfr."','".$PRENOM."','".$NOM."','".$NOMM."','".$SEXE."','".$PERE."','".$MERE."','".$DATENAISSANCEE."','".$NEC."','".$COMMUNEN."','".$WILAYAN."','".$GRADE."','".$DATENOM."','".$SERVICE."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());	
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->url(90+790+210,250,"index.php?uc=a","اضافة مستخدم اخر","2");  
$per ->h(1,450,240,'اضافةالمستخدم '.$nomfr."  ".$prenomfr);
$per ->h(1,490,280,'تمت بنجاح ');
$per -> sautligne (19);   
}


?>  
