<?php
//mysql_real_escape_string($_POST['login']) protege des injection sql  
if( $_POST["WILAYA"] != "" && $_POST["COMMUNE"] != "" && $_POST["SERVICE"] != "" && $_POST["USER"] != "" && $_POST["MDP"] != ""  )
{
  $per->mysqlconnect();
  $WILAYA     = $_POST["WILAYA"];     
  $COMMUNE    = $_POST["COMMUNE"];    
  $SERVICE    = $_POST["SERVICE"];    
  $USER       = $_POST["USER"];       
  $MDP        = $_POST["MDP"];        
  $sql = "SELECT * FROM USERS WHERE USER ='$USER' and MDP ='".mysql_real_escape_string($MDP)."' and SERVICE ='".mysql_real_escape_string($SERVICE)."' and WILAYA ='".mysql_real_escape_string($WILAYA)."'  and  COMMUNE ='".mysql_real_escape_string($COMMUNE)."' and ADMIN='1'    ";
  $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
  $result = mysql_fetch_object($requete) ;
  if(is_object($result))
  {
	$_SESSION["WILAYA"]   = $WILAYA ;
	$_SESSION["COMMUNE"]  = $STRUCTURE ;
	$_SESSION["SERVICE"]  = $SERVICE ;
	$_SESSION["USER"]     = $USER ;
    $_SESSION["IDP"]      = $result->CODEIDP ;

	//suite user online du ficier uol.php
	$session=session_id();
    $time=time();
    $time_check=$time-300; //SET TIME 5 Minute
	$tbl_name="user_online"; 
	$sql="SELECT * FROM $tbl_name WHERE user='$USER'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
    if($count=="0")
	{
	$sql1="INSERT INTO $tbl_name(session,time,user)VALUES('$session','$time','$USER')";
	$result1=mysql_query($sql1);
	}
	else 
	{
	$sql2="UPDATE $tbl_name SET time='$time' WHERE user='$USER'";
	$result2=mysql_query($sql2);
	}
	// if over 5 minute, delete session 
	$sql4="DELETE FROM $tbl_name WHERE time<$time_check";
	$result4=mysql_query($sql4); 
    header("Location: index.php?uc=accueil") ;
  }
  else
  {
   header("Location: index.php?uc=INSCRIPTION") ;
  }
}
else
{
  header("Location: index.php?uc=CONNECTION") ;
}
?>