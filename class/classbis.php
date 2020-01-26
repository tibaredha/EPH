<?php
function arDate() 
	{
    $Jour = array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
    $Mois = array("", "جانفى", "فيفري", "مارس", "افريل", "ماي", "جوان", "جويلية", "اوت", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر");
    $datear = $Jour[date("w")] . " " . date("d") . " " . $Mois[date("n")] . " " . date("Y");
    return $datear;
    }
	function datearabe($x,$y,$h)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo "<h".$h." >".$this->arDate()."</h".$h.">";
	 echo "</div>";
	}
	
	function dateUS2FR($date)//2013-01-01
    {
	$J      = substr($date,8,2);
    $M      = substr($date,5,2);
    $A      = substr($date,0,4);
	$dateUS2FR =  $J."/".$M."/".$A ;
    return $dateUS2FR;//01/01/2013
    }
	
	function dateFR2US($date)//01/01/2013
	{
	$J      = substr($date,0,2);
    $M      = substr($date,3,2);
    $A      = substr($date,6,4);
	$dateFR2US =  $A."-".$M."-".$J ;
    return $dateFR2US;//2013-01-01
	}
	
	function QHD($OHB,$MHB,$PD) //fonction qui calcule  quantite de hb 
	{
	$QHD=($OHB-$MHB)*10*($PD/75);
	
	return $QHD;
	}
	
	function BSA($w,$h) 
	{
	//Formule Dubois et Dubois² (1916).
	//Surface corporelle (m²) = 0,007184 x Taille(cm)0,725 x Poids(kg)0,425  
	//poids entre 6 et 93 kg taille entre 73 et 184 cm.
	$BSA = 0.007184 * pow($w,0.425)* pow($h,0.725) ."m2" ;
	
	//Formule de Gehan et George (1970)poids entre 4 et 132 kg ;taille entre 50 et 220 cm.
	//Surface corporelle (m²) = 0,0235 x Taille(cm)0,42246 x Poids(kg)0,51456
	$BSA1 = 0.0235 * pow($w,0.51456)* pow($h,0.42246) ."m2" ;
	
	//pour enfant 
	 //Surface corporelle (m²) = [4 x Poids(kg) +7] / [Poids(kg) + 90]
	$BSA2 = (4*$w+7)/($w+90) ."m2" ;
	
	
	//poid ideal Formule de Lorentz
	//Femme = Taille(cm) - 100 - [Taille(cm) - 150] / 2   Homme = Taille(cm) - 100 - [Taille(cm) - 150] / 4
	//âge de supérieur à 18 ans ;taille entre 140 et 220 cm (55 à 87 inch)
	//Poids idéal = 50 + [Taille(cm) - 150]/4 + [Age(an) - 20]/4
	
	//Calcul du poids maigre (LBM)
	//Poids maigre (homme) en kg = 1.10 x Poids(kg) - 128 [Poids(kg)2/Taille(cm)2]
	//Poids maigre (femme) en kg  = 1.07 x Poids(kg) - 148 [Poids(kg)2/Taille(cm)2]
	//âge entre 18 et 80 ans ; poids entre 35 et 130 kg ;aille entre 140 et 185 cm.
	
	
	return $BSA;
	}
	
	
	
	
	
	
	function connection($cnx,$REGION,$WILAYA,$STRUCTURE,$SERVICE,$USER,$MDP)
	{
		if($REGION != "" && $WILAYA != "" && $STRUCTURE != "" && $SERVICE != "" &&  $USER != "" && $MDP != ""  )
		{
			$this->mysqlconnect();       
			$sql = "SELECT * FROM USERS WHERE USER ='".$USER."' and MDP ='".$MDP."' and REGION ='".$REGION."' and WILAYA ='".$WILAYA."' and  STRUCTURE ='".$STRUCTURE."' and SERVICE ='".$SERVICE."'";
			$requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error()) ;
			$result = mysql_fetch_object($requete) ;
			    echo "bien0";
				echo '</br>';
			if(is_object($result))
			{
			    echo "bien1";
				echo '</br>';
				session_start() ;
				$_SESSION["REGION"]   = $REGION  ;
				$_SESSION["WILAYA"]   = $WILAYA ;
				$_SESSION["STRUCTURE"]= $STRUCTURE ;
				$_SESSION["SERVICE"]  = $SERVICE ;
				$_SESSION["USER"]     = $USER ;
				$_SESSION["MDP"]      = $MDP ;
				echo("<pre>") ;
				print_r($_SESSION) ;
				echo("</pre>") ;
				//header("Location: index.php?uc=accueil") ;
			}
			else
			{
			    echo "bien2";
				echo '</br>';
				//header("Location: index.php?uc=INSCRIPTION") ;
			 }
		}
		else
		{
		        echo "bien3";
			    echo '</br>';
		  //header("Location: index.php?uc=CONNECTION") ;
		}
	}
	function inscription($cnx,$REGION,$WILAYA,$STRUCTURE,$SERVICE,$USER,$MDP,$ADMIN,$DATEINSC,$NOMARABE)
	{
		if($REGION != "" && $WILAYA != "" && $STRUCTURE != "" && $SERVICE != "" &&  $USER != "" && $MDP != ""  )
		{
		    $ADMIN      = 1 ; 
			$this->mysqlconnect();       
			$sql = "INSERT INTO users ( REGION,WILAYA,STRUCTURE,SERVICE,USER,MDP,ADMIN,DATEINSC,NOMARABE) VALUES ('".$REGION."','".$WILAYA."','".$STRUCTURE."','".$SERVICE."','".$USER."','".$MDP."','".$ADMIN."','".$DATEINSC."','".$NOMARABE."') ";
			$requete = @mysql_query($sql, $cnx) or die($sql."<br>".mysql_error()) ; 
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
					
	}
	
    function deconnection()
	{
	session_start() ;
	//destruction de toutes les variable de sessions
	session_unset() ;
	//destruction de la session
	session_destroy() ;
	header("location: index.php?uc=accueil") ;					
	}
	function sessions()
	{
	session_start() ;
		if(!isset($_SESSION["USER"]) || $_SESSION["USER"] == "")
		{	
		  header("Location: index.php?uc=CONNECTION") ;
		}
			
	}
	function lgrh($cnx)  //fonction incomplete reste effctue le choix avec le grade 
	{
	$this->mysqlconnect(); 
	$query_liste = "SELECT * FROM grh  where cessation !='y'  order by Nomlatin ";
    $requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	
    $totalmbr1=mysql_num_rows($requete);
	echo "<h2  align=\"center\" class=\"hfgh\"> القائمة الاسمية للمستخدمين و عددهم".$totalmbr1."مستخدم </h2>";
    echo "<h2  align=\"center\" class=\"hfgh\">".$this->arDate()."</h2>";
	echo( "<table width=\"75%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف  </div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">إختار</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">ادارة المستخدم</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">"); 
	while( $result = mysql_fetch_array( $requete ) )
	{
	echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
	//supression desactive
	echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=SUPGRH&idp=".$result["idp"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
	echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
	echo( "<td><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>\n" );
	echo ("<td align=center><input type='checkbox' name='state[]' value=".$result["idp"]."></td>");
	echo( "<td><div align=\"right\">".$result["pere"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
	echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\"ادارة المستخدم \"href=\"index.php?uc=GRH&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
	echo( "</tr>\n" );
	} 
	echo( "<h2 align=\"center\"  ><input type=\"submit\" name=\"VALIDER\" value=\"إختار\" /></h2>"); 
	echo( "<tr>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\" > حذف  </div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">إختار</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	<td bgcolor=\"#993333\"><div align=\"center\"><font  color=\"#FFFFFF\">ادارة المستخدم</div></td>
	</tr>" ); 
	echo( "</form >"); 
	echo( "</table><br>\n" );
	mysql_free_result($requete);	
	}
	
	function stat()  //
	{
	$a = array(6, 2, 8);
	$moyenne = array_sum($a)/count($a);
	$et = 0;
	foreach ($a as $v){

	  $et += pow(($v - $moyenne), 2);

	}
	$et = $et / (count($a) - 1);

	$et = pow($et, 1/2);
    return $et;
	//echo $et;echo '</br>';
    }

     function median()
    {
	$numbers=array( 1,1,1,2,2,3,3,3 ) ;
	if (!is_array($numbers))
		$numbers = func_get_args();
	
	rsort($numbers);
	$mid = (count($numbers) / 2);
	return ($mid % 2 != 0) ? $numbers{$mid-1} : (($numbers{$mid-1}) + $numbers{$mid}) / 2;
    }

    
  function conn($db_name)
   {
  $db_host="localhost";
  //$db_name="grh"; 
  $db_user="root";
  $db_pass="";
  //la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
  $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
  //sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
  $db  = mysql_select_db($db_name,$cnx) ;
  mysql_query("SET NAMES 'UTF8' ");
  echo "connection reusi";
  return $cnx;
  return $db;
  
  }
  
  function ARS($x,$y,$name,$db_name,$tb_name) 
	{
	$db_host="localhost"; 
    $db_user="root";
    $db_pass="";
    //la connection a la base de donnes par le biais de la commande mysql_connect qui a pour parametre (serveur, login, mdp)
    $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    //sélection de la base de données par le biais de la commande mysql_select_db qui a pour parametre (nom de la base, la chaine de connection) 
    $db  = mysql_select_db($db_name,$cnx) ;
    mysql_query("SET NAMES 'UTF8' ");
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"ARS\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">AGENCE REGIONAL DU SANG</option>"."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM $tb_name order by WILAYAS" );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data[1].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	function WRS($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"WRS\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">WILAYA</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}
	function STR($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"STR\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">STRUCTURE</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}
	/////////////////////specialite chapitre diagnostique 
	function SPC($x,$y,$name,$db_name,$tb_name) 
	{
	$db_host="localhost"; 
    $db_user="root";
    $db_pass="";
    $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($db_name,$cnx) ;
    mysql_query("SET NAMES 'UTF8' ");
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"SPESC\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">choisir une specialite</option>"."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM $tb_name order by IDS" );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data[3].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	function CHA($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"CHA\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">choisir un chapitre</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}
	function DGC($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"DGC\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">choisir un diagnostique</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}
	function NOMUTILISATEUR($x,$y,$name) 
	{
	    echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	    echo "<select size=1 name=\"".$name."\">"."\n";
		echo "<option   value=\"-1\">user</option>"."\n";
		mysql_query("SET NAMES 'UTF8' ");
		$result = mysql_query("SELECT * FROM USERS " );
		while($data =  mysql_fetch_array($result))
		{
		echo '<option value="'.$data[5].'">'.$data['USER'];
		echo '</option>'."\n";
		}
		echo '</select>'."\n"; 
		echo "</div>";
	}
	
	function PSW($x,$y,$name,$size,$value)
	{
	 echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"password\" name=\"".$name."\" size=\"".$size."\" value=\"".$value."\" />";
	 echo "</div>";
	}
	function nbrtostring($db_name,$tb_name,$colonename,$colonevalue,$resultatstring) 
	{
	$db_host="localhost"; 
    $db_user="root";
    $db_pass="";
    $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($db_name,$cnx) ;
    mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM $tb_name where $colonename=$colonevalue" );
    $row=mysql_fetch_object($result);
	$resultat=$row->$resultatstring;
	return $resultat;
	}
	
  // $per = new grh();
// echo $per -> nomprenom ;
// $per -> mysqlconnect();
// $per -> connection($per -> mysqlconnect(),"DJELFA","DJELFA","EPH AIN OUSSERA","GRH","admin1","0");
// $per -> inscription($per -> mysqlconnect(),"DJELFA","DJELFA","EPH AIN OUSSERA","GRH","admin1","0","1","03-05-1970","arabe");
//$per -> deconnection();
// echo $per -> stat();echo '</br>';
// echo $per -> median();echo '</br>';
// $per -> lgrh($per -> mysqlconnect());
//$per -> conn('grh');echo '</br>';
// $per -> lgrh($per -> conn('grh'));

  ?>
  