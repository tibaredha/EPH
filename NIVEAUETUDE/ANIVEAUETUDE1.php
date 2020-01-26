<?php 
if
($_POST["NIVEAUETUDEAR"]!="" and $_POST["NIVEAUETUDEFR"]!="" )
{
  $NIVEAUETUDEAR         = $_POST["NIVEAUETUDEAR"] ;
  $NIVEAUETUDEFR        = $_POST["NIVEAUETUDEFR"];
  $per-> mysqlconnect(); 
  $sql = "INSERT INTO niveauetude (niveauetudefr,niveauetudear) 
                   VALUES ('".$NIVEAUETUDEFR."','".$NIVEAUETUDEAR."')";
  $requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
 header("Location: ./index.php?uc=ANIVEAUETUDE2&NIVEAUETUDEFR=$NIVEAUETUDEFR&NIVEAUETUDEAR=$NIVEAUETUDEAR") ;

}//fin if 
else
{
header("Location: ./index.php?uc=ANIVEAUETUDE") ;  
}

 
?>  
