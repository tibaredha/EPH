<?PHP
function ctomysqlcgr($GROUPAGE,$RHESUS) 
{
$db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
$sql = " select GROUPAGE,RHESUS from cgr where GROUPAGE='$GROUPAGE' and  RHESUS='$RHESUS'";
$requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
$OP=mysql_num_rows($requete);
mysql_free_result($requete);
return $OP;
}

function ctomysqlpfc($GROUPAGE,$RHESUS) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
$sql = " select GROUPAGE,RHESUS from pfc where GROUPAGE='$GROUPAGE' and  RHESUS='$RHESUS'";
$requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
$OP=mysql_num_rows($requete);
mysql_free_result($requete);
return $OP;
}

function ctomysqlcps($GROUPAGE,$RHESUS) 
{
$db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
$sql = " select GROUPAGE,RHESUS from cps where GROUPAGE='$GROUPAGE' and  RHESUS='$RHESUS'";
$requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
$OP=mysql_num_rows($requete);
mysql_free_result($requete);
return $OP;
}



function ctomysql1() 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
$sql = " select GROUPAGE,RHESUS from tdon ";
$requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
$OP=mysql_num_rows($requete);
mysql_free_result($requete);
return $OP;
}
function fixemobile($datejour1,$datejour2,$ind,$STR) 
	{
	 $db_host="localhost";
	 $db_name="GPTS2012"; 
	 $db_user="root";
	 $db_pass="";
	 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	 $db  = mysql_select_db($db_name,$cnx) ;
	 mysql_query("SET NAMES 'UTF8' "); 
	 $sql = " select TDNR,str,datedon,IND from tdon where str='$STR'and  IND='$ind' and datedon >='$datejour1'and datedon <='$datejour2'";
	 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
	 $OP=mysql_num_rows($requete);
	 mysql_free_result($requete);
	 return $OP;
	}
function donparmois($datejour1,$datejour2,$ind) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select TDNR,STR,datedon,IND from tdon where  IND='$ind' and datedon >='$datejour1'and datedon <='$datejour2'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}
function ABODON($datejour1,$datejour2,$GROUPAGE,$RHESUS) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select TDNR,STR,datedon,IND,GROUPAGE from tdon where  GROUPAGE='$GROUPAGE' and  RHESUS='$RHESUS'  and  datedon >='$datejour1'and datedon <='$datejour2'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}
function stockparmois($datejour1,$datejour2,$idproduit) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select IDPRODUIT,DATE from stock where IDPRODUIT=$idproduit  and DATE >='$datejour1'and DATE <='$datejour2'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}


function donparanee($datejour1,$datejour2,$ind) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select DATE,DONS from dnr11 where DONS='$ind' and DATE >='$datejour1'and DATE <='$datejour2'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}
function donparaneeplus($datejour1,$datejour2,$ind) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select datedon,IND from tdon where IND='$ind' and datedon >='$datejour1'and datedon <='$datejour2'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}

function disparanee($datejour1,$datejour2) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select DATE from dis11 where  DATE >='$datejour1'and DATE <='$datejour2'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}
function disparaneen($datejour1,$datejour2) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select DATE from dis11 where  DATE >='$datejour1'and DATE <='$datejour2'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}

function DISSERV($datejour1,$datejour2,$service) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select condate,PSL,service from tdis1 where condate >='$datejour1'and condate <='$datejour2'  and  service='$service' and PSL='CGR' ";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}
function disparaneea($datejour1,$datejour2) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select condate,PSL from tdis1 where  condate >='$datejour1'and condate <='$datejour2'  and PSL='CGR'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}

function disparaneeb($datejour1,$datejour2) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select condate,PSL from tdis1 where  condate >='$datejour1'and condate <='$datejour2'  and PSL='PFC'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}

function disparaneec($datejour1,$datejour2) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select condate,PSL from tdis1 where  condate >='$datejour1'and condate <='$datejour2'  and PSL='CPS'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}

function disparaneed($datejour1,$datejour2) 
{
 $db_host="localhost";
 $db_name="GPTS2012"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select condate,PSL from tdis1 where  condate >='$datejour1'and condate <='$datejour2'  and PSL='ST'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}
function decesparmois($datejour1,$datejour2,$ind) 
{
 $db_host="localhost";
 $db_name="grh"; 
 $db_user="root";
 $db_pass="";
 $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
 $db  = mysql_select_db($db_name,$cnx) ;
 mysql_query("SET NAMES 'UTF8' "); 
 $sql = " select * from deces where  DATEDUDECE >='$datejour1'and DATEDUDECE <='$datejour2'";
 $requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error());
 $OP=mysql_num_rows($requete);
 mysql_free_result($requete);
 return $OP;
}






// function date ($date) {
 
  // $date = explode("-",$date);
  // if ($date[0]<=9) { 
	// $date[0]="0".$date[0]; 
  // }
  // if ($date[1]<=9) {
	// $date[1]="0".$date[1]; 
  // }
  // $date = array($date[2], $date[1], $date[0]);
 
  // return $n_date=implode("-", $date);
// }
// function date1($date) {
      
  // $new = explode("-",$date);
  // $a=array ($new[2], $new[1], $new[0]);
 
  // return $n_date=implode("-", $a);
// }

?>