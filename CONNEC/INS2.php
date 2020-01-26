<?php
if( $_POST["WILAYA"] != "" && $_POST["COMMUNE"] != "" && $_POST["SERVICE"] != "" && $_POST["USER"] != "" && $_POST["MDP"] != "" && isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"] )
{
  $WILAYA     = $_POST["WILAYA"] ;
  $COMMUNE    = $_POST["COMMUNE"] ;
  $SERVICE    = $_POST["SERVICE"] ;
  $USER       = $_POST["USER"] ;
  $MDP        = $_POST["MDP"] ;
  $NOM        = $per ->nbrtostring('grh','grh','idp',$USER,'Nomlatin') ;
  $PRENOM     = $per ->nbrtostring('grh','grh','idp',$USER,'Prenom_Latin') ;
  $NOMPRENOM=$NOM.'_'.substr($PRENOM, 0, 1);
  $ADMIN      = 0 ; 
  $DATEINSC   = $_POST["DATEINSC"] ;    
  $per-> mysqlconnect();
  $sql = "INSERT INTO users (USER,WILAYA,COMMUNE,SERVICE,CODEIDP,MDP,ADMIN,DATEINSC) VALUES ('".$NOMPRENOM."','".$WILAYA."','".$COMMUNE."','".$SERVICE."','".$USER."','".$MDP."','".$ADMIN."','".$DATEINSC."') ";
  $requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
  if($requete)
  {
  header("Location: index.php?uc=CONNECTION") ;
  }
  else
  {
  header("Location: index.php?uc=INSCRIPTION") ;
  }
  } 
  else
  { 
  header("Location: index.php?uc=INSCRIPTION") ;   
  }
?>