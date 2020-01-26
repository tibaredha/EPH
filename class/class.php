<?php
class grh
{
	 public $nomprenom ="tibaredha";
	 public $utf8 = "" ;
	// protected $;
	// private  $;
	function __construct()
	{
	$this-> mysqlconnect();
	//echo 'this object has been constructed';
	}
	function __destruct()
	{
	 //echo 'this object has been destroyed';
    }
	function medecinliste()
	{
	echo '<option value="-1"></option>'."\n";
	$result = mysql_query("SELECT Nomlatin,Prenom_Latin,Grade_Premier_Recrutement,rnvgradear FROM grh where rnvgradear=5   or rnvgradear=6    order by  Nomlatin" );
	while($data =  mysql_fetch_array($result))
	{
	echo '<option value="'.$data[0].'">'.$data['Nomlatin'].' '.$data['Prenom_Latin'];
	echo '</option>'."\n";
	}
	}
	//*************************************************morbidite//
	function nbrhemo($datejour1,$datejour2,$COMMUNER) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE COMMUNER ='$COMMUNER' and DATE1ERSEA >='$datejour1' and DATE1ERSEA <='$datejour2'  ";//
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	return $totalmbr1=mysql_num_rows($requete1);
	}
	function nbrhemototal($datejour1,$datejour2) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE  DATE1ERSEA >='$datejour1' and DATE1ERSEA <='$datejour2'  ";//
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	return $totalmbr1=mysql_num_rows($requete1);
	}
	function rapporth($datejour1,$datejour2,$COMMUNER) 
	{
	$n=$this->nbrhemo($datejour1,$datejour2,$COMMUNER);
	$d=$this->nbrhemototal($datejour1,$datejour2); 
	if ($d !=0) {
	$r=round($n/$d,2);
	return $r ;
	}
	else 
	{
	return $r=0 ;
	}
	}
	function nbrhemocarct($datejour1,$datejour2,$caractere,$valeur) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE $caractere ='$valeur' and DATE1ERSEA >='$datejour1' and DATE1ERSEA <='$datejour2'  ";//
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	return $totalmbr1=mysql_num_rows($requete1);
	}
	function rapportn($datejour1,$datejour2,$caractere,$valeur) 
	{
	$n=$this->nbrhemocarct($datejour1,$datejour2,$caractere,$valeur) ;
	$d=$this->nbrhemototal($datejour1,$datejour2); 
	if ($d !=0) {
	$r=round($n/$d,2);
	return $r ;
	}
	else 
	{
	return $r=0 ;
	}
	}
	
	function tranchehemo($datejour1,$datejour2,$age1,$age2) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE DATE1ERSEA >='$datejour1' and DATE1ERSEA <='$datejour2' and  AGE1SEANCE >='$age1' and  AGE1SEANCE <='$age2' ";
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	return $totalmbr1=mysql_num_rows($requete1);
	}
	
	
	function rapportt($datejour1,$datejour2,$age1,$age2) 
	{
	$n=$this->tranchehemo($datejour1,$datejour2,$age1,$age2); 
	$d=$this->nbrhemototal($datejour1,$datejour2); 
	if ($d !=0) {
	$r=round($n/$d,2);
	return $r ;
	}
	else 
	{
	return $r=0 ;
	}
	}
	
	
	//**************************************************mortalite//
	function nbrhemod($datejour1,$datejour2,$COMMUNER) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE COMMUNER ='$COMMUNER' and DATESORTI >='$datejour1' and DATESORTI <='$datejour2' and  SORTI ='DECES'  ";//
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	return $totalmbr1=mysql_num_rows($requete1);
	}
	function nbrhemototald($datejour1,$datejour2) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE  DATESORTI >='$datejour1' and DATESORTI <='$datejour2' and  SORTI ='DECES' ";//
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	return $totalmbr1=mysql_num_rows($requete1);
	}
	function rapport($datejour1,$datejour2,$COMMUNER) 
	{
	$n=$this->nbrhemod($datejour1,$datejour2,$COMMUNER);
	$d=$this->nbrhemototald($datejour1,$datejour2); 
	if ($d !=0) {
	$r=round($n/$d,2);
	return $r ;
	}
	else 
	{
	return $r=0 ;
	}
	}
	
	
	
	function AGEDEBUTDIALYSE($caractere,$valeur) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE $caractere ='$valeur'  ";//
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$result1 = mysql_fetch_array( $requete1 ) ;
	$DATE1ERSEA=substr($result1["DATE1ERSEA"],0,4);
	$DATENAISSA=substr($result1["DATENAISSA"],0,4);
	$AGE=$DATE1ERSEA-$DATENAISSA;
	return $AGE;
	}
	function AGEDIALYSE($caractere,$valeur) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE $caractere ='$valeur'  ";//
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$result1 = mysql_fetch_array( $requete1 ) ;
	$DATE1ERSEA=substr(date('Y-m-d'),0,4);
	$DATENAISSA=substr($result1["DATENAISSA"],0,4);
	$AGE=$DATE1ERSEA-$DATENAISSA;
	return $AGE;
	}
	function DUREEDIALYSE($caractere,$valeur) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT * FROM HEMO WHERE $caractere ='$valeur'  ";//
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$result1 = mysql_fetch_array( $requete1 ) ;
	$DATE=substr(date('Y-m-d'),0,4);
	$DATE1ERSEA=substr($result1["DATE1ERSEA"],0,4);
	$AGE=$DATE-$DATE1ERSEA;
	return $AGE;
	}
	
	
	
	
	function jours()
	{
	for ($i=1; $i<=10; $i++) 
	{ 
	echo "<option value=\"0$i\">". $i."</option><br />"; 
	}
	 for ($i=11; $i<=31; $i++) 
	{ 
	echo "<option value=\"$i\">". $i."</option><br />"; 
	}   
	}

	function mois()
	{
	for ($i=1; $i<=10; $i++) 
	{ 
	echo "<option value=\"0$i\">". $i."</option><br />"; 
	}
	 for ($i=11; $i<=12; $i++) 
	{ 
	echo "<option value=\"$i\">". $i."</option><br />"; 
	}   
	}
	function anee()
	{
	for ($i=2000; $i<=2020; $i++) 
	{ 
	echo "<option value=\"$i\">". $i."</option><br />"; 
	}  
	}
	function NOMPRENOMHEMO($x,$y,$name) 
		{
		$this-> mysqlconnect();
		echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
		echo "<select size=1 class=\"CHAP\" name=\"".$name."\">"."\n";
		echo"<option value=\"1\" selected=\"selected\">Selectionner Malade </option>"."\n";
		mysql_query("SET NAMES 'UTF8' ");
		$result = mysql_query("SELECT * FROM hemo order by NOM" );
		while($data =  mysql_fetch_array($result))
		{
		echo '<option value="'.$data[0].'">'.$data[1].'_'.''.$data[2].'</option>';
		}
		echo '</select>'."\n"; 
		echo "</div>";
		}
	
	function CHAPITRE($x,$y,$name,$db_name,$tb_name) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"CHAPITRE\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">selectionner chapitre</option>"."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM $tb_name order by CHAP" );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data[1].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
    function CATEGORIECIM($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"CATEGORIECIM\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">sous-categorie</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}

    //******* ACTE MEDICALE//
	function CHAP($x,$y,$name,$db_name,$tb_name) 
		{
		$this-> mysqlconnect();
		echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
		echo "<select size=1 class=\"CHAP\" name=\"".$name."\">"."\n";
		echo"<option value=\"1\" selected=\"selected\">Selectionner Chapitre</option>"."\n";
		mysql_query("SET NAMES 'UTF8' ");
		$result = mysql_query("SELECT * FROM $tb_name order by LIB_CHAP" );
		while($data =  mysql_fetch_array($result))
		{
		echo '<option value="'.$data[0].'">'.$data[1].'</option>';
		}
		echo '</select>'."\n"; 
		echo "</div>";
		}
	function ACTE($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"ACTE\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">Selectionner Acte</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}	
	
	function hemomois($datejour1,$datejour2,$idp,$parametre) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT idp,DATE,$parametre FROM HEMOBIO WHERE idp ='$idp' and $parametre !=0 and DATE >='$datejour1'and DATE <='$datejour2'  ";
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete1);
	$query_liste = "SELECT idp,DATE,$parametre,SUM($parametre)as bilan FROM HEMOBIO WHERE idp ='$idp' and DATE >='$datejour1'and DATE <='$datejour2' ";
	$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	// $totalmbr1=mysql_num_rows($requete);
	$this -> sautligne (3); 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$DPVAB=$result['bilan'];
	}
	mysql_free_result($requete);
	if ($totalmbr1=='0')
	{
	return $DPVAB=0;
	}
	else
	{
	return $DPVAB/$totalmbr1;
	}
	}
    function hemomoisp($datejour1,$datejour2,$idp,$parametre) 
	{
	$this-> mysqlconnect();
	$query_liste1 = "SELECT idp,dateseance,$parametre FROM hemoseance WHERE idp ='$idp' and $parametre !=0 and dateseance >='$datejour1'and dateseance <='$datejour2'  ";
	$requete1 = mysql_query( $query_liste1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$totalmbr1=mysql_num_rows($requete1);
	$query_liste = "SELECT idp,dateseance,$parametre,SUM($parametre)as bilan FROM hemoseance WHERE idp ='$idp' and dateseance >='$datejour1'and dateseance <='$datejour2' ";
	$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	// $totalmbr1=mysql_num_rows($requete);
	$this -> sautligne (3); 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$DPVAB=$result['bilan'];
	}
	mysql_free_result($requete);
	if ($totalmbr1=='0')
	{
	return $DPVAB=0;
	}
	else
	{
	return $DPVAB/$totalmbr1;
	}
	}
	//******************************************article pour panier  //
	function article($type,$image,$nom,$prix) 
	{
	echo"<li class=\"thumb\">";
	echo"<img src=\"design/images/$type/$image\" width=\"200\" height=\"200\" alt=\"vide\" />";
	echo"<div class=\"alt\">";
	echo"<p>";
	echo"<br/><br/>$nom<br/>$prix Euros<br/><br/>	";
	echo"<a href=\"index.php?uc=PAN\">Ajouter au panier</a>";
	echo"</p>";
	echo"</div>";
	echo"</li>";						
	}
	//*******************ainti aspirateur***************************//regconget
	function aspirateur()
	{	
	//anti aspirateur qui marche bien 
	$navigateur = $_SERVER["HTTP_USER_AGENT"];
	$bannav = Array('HTTrack','httrack','WebCopier','HTTPClient'); // liste d'aspirateurs bannis
	foreach ($bannav as $banni)
	{ $comparaison = strstr($navigateur, $banni);
	if($comparaison!==false)
		{
		 echo '<center>Aspirateur interdit !<br><br>Votre IP est :<br>';
		 $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		 echo '<br>';
		 echo $hostname;
		 echo '</center>';
		 exit;
		}
	}
	}
	//*******************connection base de donnes**************************//
	public $db_host="localhost";
	public $db_name="grh"; 
    public $db_user="root";
    public $db_pass="";
	function mysqlconnect()
	{
	$this->db_host;
	$this->db_name;
	$this->db_user;
	$this->db_pass;
    $cnx = mysql_connect($this->db_host,$this->db_user,$this->db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($this->db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	return $cnx;
	return $db;
	}
	function nbrtostring($db_name,$tb_name,$colonename,$colonevalue,$resultatstring) 
	{
	$this-> mysqlconnect();
    $result = mysql_query("SELECT * FROM $tb_name where $colonename=$colonevalue" );
    
	
	// $row=mysql_fetch_object($result);
	// $resultat=$row->$resultatstring;
	// return $resultat;
	
	
	if ($row=mysql_fetch_object($result))
	{
	$resultat=$row->$resultatstring;
	return $resultat;
	}
	return $resultat="null";
	}
	function datePlus($dateDo,$nbrJours)
	{
	$timeStamp = strtotime($dateDo); 
	$timeStamp += 24 * 60 * 60 * $nbrJours;
	$newDate = date("Y-m-d", $timeStamp);
	return  $newDate;
	}
	function dateUS2FR($date)
	{
	  $date = explode('-', $date);
	  $date = array_reverse($date);
	  $date = implode('-', $date);
	  return $date;
	}
	//******************************************************************************//
	function WILAYAN($x,$y,$name,$db_name,$tb_name) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"WILAYANFR\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">selectionner wilaya</option>"."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM $tb_name order by WILAYAS" );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data[1].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	function COMMUNEN($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"COMMUNENFR\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">COMMUNE</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}
	function WILAYAR($x,$y,$name,$db_name,$tb_name) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"WILAYARFR\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">selectionner wilaya</option>"."\n";
	mysql_query("SET NAMES 'UTF8' ");
    $result = mysql_query("SELECT * FROM $tb_name order by WILAYAS" );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[0].'">'.$data[1].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	function COMMUNER($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"COMMUNERFR\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">COMMUNE</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}
	//***********************************************************************// entete
	function med($MED)
		{
		echo '<select size=1 name="MED'.$MED.'">'."\n";
		echo '<option   value="-1">______________________</option>'."\n";
		mysql_query("SET NAMES 'UTF8' ");
		$result = mysql_query("SELECT * FROM t21 order by dci  " );
		while($data =  mysql_fetch_array($result))
		{
		echo '<option value="'.$data[2].'">'.$data['dci'];
		echo '</option>'."\n";
		}
		echo '</select>'."\n"; 
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
	function NOMUTILISATEUR($x,$y,$name) 
	{
	    $this-> mysqlconnect(); 
	    echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	    echo "<select size=1 name=\"".$name."\">"."\n";
		echo "<option   value=\"-1\">user</option>"."\n";
		mysql_query("SET NAMES 'UTF8' ");
		$result = mysql_query("SELECT * FROM USERS ORDER BY USER" );
		while($data =  mysql_fetch_array($result))
		{
		echo '<option value="'.$data[4].'">'.$data['USER'];
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
	//********************************// 
	function barre_navigation ($nb_total,$nb_affichage_par_page,$debut,$nb_liens_dans_la_barre,$d,$f)
	{
	$barre = '';
	// on recherche l'URL courante munie de ses paramètre auxquels on ajoute le paramètre'debut' qui jouera le role du premier élément de notre LIMIT
	if ($_SERVER['QUERY_STRING'] == "") 
	{
	$query = $_SERVER['PHP_SELF'].'?debut=';
	}
	else 
	{
	$tableau = explode ("debut=", $_SERVER['QUERY_STRING']);
	$nb_element = count ($tableau);

	   if ($nb_element == 1) 
	   {
		$query = $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'&debut=';
	   }
	   else 
	   {
		 if ($tableau[0] == "") 
		 {
		 $query = $_SERVER['PHP_SELF'].'?debut=';
		 }
		 else 
		 {
		 $query = $_SERVER['PHP_SELF'].'?'.$tableau[0].'debut=';
		 }
	   }
	}
	// on calcul le numéro de la page active
	$page_active    = floor(($debut/$nb_affichage_par_page)+1);

	// on calcul le nombre de pages total que va prendre notre affichage
	$nb_pages_total = ceil($nb_total/$nb_affichage_par_page);// la fonction ceil arrondie au nbr sup


	// on calcul le premier numero de la barre qui va s'afficher, ainsi que le dernier($cpt_deb et $cpt_fin) 
	// exemple : 2 3 4 5 6 7 8 9 10 11 << $cpt_deb = 2 et $cpt_fin = 11
	if ($nb_liens_dans_la_barre%2==0) 
	{
	$cpt_deb1 = $page_active - ($nb_liens_dans_la_barre/2)+1;
	$cpt_fin1 = $page_active + ($nb_liens_dans_la_barre/2);
	}
	else {
	$cpt_deb1 = $page_active - floor(($nb_liens_dans_la_barre/2));
	$cpt_fin1 = $page_active + floor(($nb_liens_dans_la_barre/2));
	}
	if ($cpt_deb1 <= 1) {
	$cpt_deb = 1;
	$cpt_fin = $nb_liens_dans_la_barre;
	}
	elseif ($cpt_deb1>1 && $cpt_fin1<$nb_pages_total) {
	$cpt_deb = $cpt_deb1;
	$cpt_fin = $cpt_fin1;
	}
	else {
	$cpt_deb = ($nb_pages_total-$nb_liens_dans_la_barre)+1;
	$cpt_fin = $nb_pages_total;
	}
	if ($nb_pages_total <= $nb_liens_dans_la_barre) {
	$cpt_deb=1;
	$cpt_fin=$nb_pages_total;
	}
	// si le premier numéro qui s'affiche est différent de 1, on affiche << qui sera unlien vers la premiere page

	if ($cpt_deb != 1) {
	$cible = $query.(0);
	$lien = '<A HREF="'.$cible.'">'.$d.'</A>&nbsp;&nbsp;';
	}
	else {
	$lien='';
	}
	$barre .= $lien;
	// on affiche tous les liens de notre barre, tout en vérifiant de ne pas mettre delien pour la page active

	for ($cpt = $cpt_deb; $cpt <= $cpt_fin; $cpt++) {
	if ($cpt == $page_active) {
	if ($cpt == $nb_pages_total) {
	$barre .= $cpt;
	}
	else {
	$barre .= $cpt.'&nbsp;-&nbsp;';
	}
	}
	else {
	if ($cpt == $cpt_fin) {
	$barre .= "<A HREF='".$query.(($cpt-1)*$nb_affichage_par_page);
	$barre .= "'>".$cpt."</A>";
	}
	else {
	$barre .= "<A HREF='".$query.(($cpt-1)*$nb_affichage_par_page);
	$barre .= "'>".$cpt."</A>&nbsp;-&nbsp;";
	}
	}
	}
	$fin = ($nb_total - ($nb_total % $nb_affichage_par_page));
	if (($nb_total % $nb_affichage_par_page) == 0) {
	$fin = $fin - $nb_affichage_par_page;
	}
	// si $cpt_fin ne vaut pas la dernière page de la barre de navigation, on affiche un >> qui sera un lien vers la dernière page de navigation

	if ($cpt_fin != $nb_pages_total) {
	$cible = $query.$fin;
	$lien = '&nbsp;&nbsp;<A HREF="'.$cible.'">'.$f.'</A>';
	}
	else {
	$lien='';
	}
	$barre .= $lien;
	return $barre;
	}
	function ETATMAT2 ($type,$titre,$dif)
	{
	$this-> mysqlconnect();//SUM($colvaccin)as $colvaccin,
    $query_liste4 = "SELECT ECHELON,CATEGORIE,INDICEE,INDICEBV,POSTESUP,rnvgradear,Prenom_Arabe,Nomarab FROM grh  where cessation ='' and   (rnvgradear='5' || rnvgradear='6'|| rnvgradear='1' || rnvgradear='3')  " ;
    $requete4 = mysql_query( $query_liste4) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr4=mysql_num_rows($requete4);
	if (!isset($_GET['debut']) )$_GET['debut']=0;
	$nb_affichage_par_page=10;
	$query_liste = "SELECT ECHELON,CATEGORIE,INDICEE,INDICEBV,POSTESUP,rnvgradear,Prenom_Arabe,Nomarab FROM grh  where cessation ='' and   (rnvgradear='5' || rnvgradear='6'|| rnvgradear='1' || rnvgradear='3')  " ;
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	$this->h(1,350,170,$titre.$totalmbr4 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">السنوى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الشهرى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">م.منصب العالي</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ع. الخبرة المهنية</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاجر القاعدى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">عدد نقاط</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">درجة</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">رقم استد</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الصنف</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">المنصب العالي </div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الرتبـــة</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; // ligne en couleur alterne
	$mois=$this->sdb($result["CATEGORIE"])+$this->iep($result["CATEGORIE"],$result["ECHELON"]);
	$annee=$mois*12;
	echo( "<td><div align=\"right\">".$annee."</div></td>\n" );
	echo( "<td><div align=\"right\">".$mois."</div></td>\n" );
	echo( "<td><div align=\"right\">".""."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->iep($result["CATEGORIE"],$result["ECHELON"])."</div></td>\n" );//
	echo( "<td><div align=\"right\">".$this->sdb($result["CATEGORIE"])."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["INDICEE"]."</div></td>\n" );//
	echo( "<td><div align=\"right\">".$result["ECHELON"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["INDICEBV"]."</div></td>\n" );//
	echo( "<td><div align=\"right\">".$result["CATEGORIE"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["POSTESUP"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["rnvgradear"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
	echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
	echo( "</tr>\n" );
	}
	$this-> sautligne (3);
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">السنوى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الشهرى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">م.منصب العالي</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ع. الخبرة المهنية</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاجر القاعدى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">عدد نقاط</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">درجة</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">رقم استد</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الصنف</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">المنصب العالي </div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الرتبـــة</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	</tr>" ); 
	echo( "</form >"); 
	echo( "</table><br>\n" );
	
	mysql_free_result($requete);
	}
	function ETATMAT3 ($type,$titre,$dif)
	{
	$this-> mysqlconnect();//SUM($colvaccin)as $colvaccin,
    $query_liste4 = "SELECT IAC,ECHELON,CATEGORIE,INDICEE,INDICEBV,POSTESUP,rnvgradear,Prenom_Arabe,Nomarab FROM grh  where cessation ='' and   (rnvgradear='5' || rnvgradear='6'|| rnvgradear='1' || rnvgradear='3')  " ;
    $requete4 = mysql_query( $query_liste4) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr4=mysql_num_rows($requete4);
	if (!isset($_GET['debut']) )$_GET['debut']=0;
	$nb_affichage_par_page=10;
	$query_liste = "SELECT IAC,ECHELON,CATEGORIE,INDICEE,INDICEBV,POSTESUP,rnvgradear,Prenom_Arabe,Nomarab FROM grh  where cessation ='' and   (rnvgradear='5' || rnvgradear='6'|| rnvgradear='1' || rnvgradear='3')  " ;
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	$this->h(1,350,170,$titre.$totalmbr4 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"100%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">السنوى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الشهرى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IQUA</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IFC</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">CONT</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ISP</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">BIPS</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IASS</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IENC</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IAC</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IDOC</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ISAS</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الرتبـــة</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; // ligne en couleur alterne
	$mois=$this->ISAS($result["CATEGORIE"],$result["ECHELON"],$result["rnvgradear"])+$this->IDOC($result["rnvgradear"])+2000+$this->ifc($result["CATEGORIE"])+$this->IQUA($result["CATEGORIE"],$result["ECHELON"],$result["rnvgradear"])+$this->IAC($result["rnvgradear"],$result["IAC"])+$this->IENC($result["CATEGORIE"],$result["ECHELON"],$result["rnvgradear"])+$this->IASS($result["CATEGORIE"],$result["ECHELON"],$result["rnvgradear"])+$this->BIPS($result["POSTESUP"])+$this->ISP($result["rnvgradear"]);
	$annee=$mois*12;
	echo( "<td><div align=\"right\">".$annee."</div></td>\n" );
	echo( "<td><div align=\"right\">".$mois."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->IQUA($result["CATEGORIE"],$result["ECHELON"],$result["rnvgradear"])."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->ifc($result["CATEGORIE"])."</div></td>\n" );
	echo( "<td><div align=\"right\">"."2000"."</div></td>\n" );//RESTE PROGRAMME CONTAGIEUX
	echo( "<td><div align=\"right\">".$this->ISP($result["rnvgradear"]) ."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->BIPS($result["POSTESUP"])."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->IASS($result["CATEGORIE"],$result["ECHELON"],$result["rnvgradear"])."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->IENC($result["CATEGORIE"],$result["ECHELON"],$result["rnvgradear"])."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->IAC($result["rnvgradear"],$result["IAC"])."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->IDOC($result["rnvgradear"])."</div></td>\n" );
	echo( "<td><div align=\"right\">".$this->ISAS($result["CATEGORIE"],$result["ECHELON"],$result["rnvgradear"])."</div></td>\n" ); 
	echo( "<td><div align=\"right\">".$result["rnvgradear"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
	echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );
	echo( "</tr>\n" );
	}
	$this-> sautligne (3);
	echo( "<tr>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">السنوى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الشهرى</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IQUA</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IFC</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">CONT</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ISP</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">BIPS</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IASS</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IENC</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IAC</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">IDOC</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ISAS</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الرتبـــة</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	</tr>" ); 
	echo( "</form >"); 
	echo( "</table><br>\n" );
	
	mysql_free_result($requete);
	}
	
	function rdv ($titre,$date)
	{
	$this-> mysqlconnect();
    $query_liste4 = "SELECT * FROM agenda_events WHERE date='".(int)$date."'" ;
    $requete4 = mysql_query( $query_liste4) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr4=mysql_num_rows($requete4);
	if (!isset($_GET['debut']) )$_GET['debut']=0;
	$nb_affichage_par_page=10;
	$query_liste = "SELECT * FROM agenda_events WHERE date='".(int)$date."'" ;
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	
	if ($totalmbr1 >= 1)
    {
	echo( "<table width=\"53%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">id</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">id_membre</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">type</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">texte</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">titre</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; // ligne en couleur alterne
	echo( "<td><div align=\"center\">".$result["id"]."</div></td>\n" );
	echo( "<td><div align=\"center\">".$result["id_membre"]."</div></td>\n" );
	echo( "<td><div align=\"center\">".$this->nbrtostring("grh","agenda_theme","id",$result["type"],"titre") ."</div></td>\n" );
	echo( "<td><div align=\"center\">".$result["texte"]."</div></td>\n" );
	echo( "<td><div align=\"center\">".$result["titre"]."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=SUPRDV&id=".$result["id"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "</tr>\n" );
	}
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">id</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">id_membre</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">type</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">texte</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">titre</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	</tr>" ); 
	echo( "</form >"); 
	echo( "</table><br>\n" );
	$this->h(1,570,470,$titre.$totalmbr4 );
	mysql_free_result($requete);
	}
	else
	{
	$this ->label(640,500,'لاتوجد مواعيد ');
	$this -> sautligne (2);
	}
	}
	function nbrtomois ($def_mois)
{
switch($def_mois)  
{
    case '01':
		{
		return "جانفي";
        }
	case '02':
		{
		return "فيفري";
        }	
	case '03':
		{
		return "مارس";
        }	
	case '04':
		{
		return "أفريل";
        }	
	case '05':
		{
		return "ماي";
        }	
	case '06':
		{
		return "جوان";
        }	
	case '07':
		{
		return "جويلية";
        }	
	case '08':
		{
		return "أوت";
        }	
	case '09':
		{
		return "سبتمبر";
        }	
	case '10':
		{
		return "أكتوبر";
        }	
	case '11':
		{
		return "نوفمبر";
        }	
	case '12':
		{
		return "ديسمبر";
        }			
}
}
	function nbre ($month,$d,$year)
	{
	$this-> mysqlconnect();
	$dateLa = mktime(0, 0, 0, $month, $d, $year);
	$extraire1 = mysql_query("select * from agenda_events WHERE date='$dateLa'");
	$nbrEvents1 = mysql_numrows($extraire1);
	if ($nbrEvents1 > 0) 
	{
	$nbrEvents1='*';
	return $nbrEvents1;
	}
	else
	{
	$nbrEvents1='';
	return $nbrEvents1;
	}
	}
	function rdv1 ($date)
	{
	$this-> mysqlconnect();
    $query_liste4 = "SELECT * FROM agenda_events WHERE date='".(int)$date."'" ;
    $requete4 = mysql_query( $query_liste4) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr4=mysql_num_rows($requete4);
	if (!isset($_GET['debut']) )$_GET['debut']=0;
	$nb_affichage_par_page=10;
	$query_liste = "SELECT * FROM agenda_events WHERE date='".(int)$date."'" ;
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	
	if ($totalmbr1 >= 1)
    {
	 //echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	
	 
	echo( "<table width=\"53%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">id</div></td>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">type</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">texte</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">titre</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; // ligne en couleur alterne
	echo( "<td><div align=\"center\">".$result["id"]."</div></td>\n" );
	// echo( "<td><div align=\"center\">".$result["id_membre"]."</div></td>\n" );
	echo( "<td><div align=\"center\">".$this->nbrtostring("grh","agenda_theme","id",$result["type"],"TYPEAR")."</div></td>\n" );
	echo( "<td><div align=\"center\">".$result["texte"]."</div></td>\n" );
	echo( "<td><div align=\"center\">".$result["titre"]."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=SUPRDV&id=".$result["id"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "</tr>\n" );
	}
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">id</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">type</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">texte</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">titre</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	</tr>" ); 
	echo( "</form >"); 
	echo( "</table><br>\n" );
	// echo "</div>";
	$this ->label(1050,450,'قائمة المواعيد وعددهم'.$totalmbr4);
	mysql_free_result($requete);
	}
	else
	{
	$this ->label(1050,450,'لاتوجد مواعيد ');
	$this -> sautligne (2);
	}
	}
	
	
	
	
	
	function LGRH ($type,$titre,$dif)
	{
	$this-> mysqlconnect();
    $query_liste4 = "SELECT * FROM grh  where cessation ='$type'" ;
    $requete4 = mysql_query( $query_liste4) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr4=mysql_num_rows($requete4);
	if (!isset($_GET['debut']) )$_GET['debut']=0;
	$nb_affichage_par_page=600;
	$query_liste = "SELECT * FROM grh  where cessation ='$type'   order by Nomlatin limit ".$_GET['debut'].",".$nb_affichage_par_page ;
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	$this->h(1,350,170,$titre.$totalmbr4 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >photos</div></td>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">N°</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ادارة المستخدم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">إختار</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	
	
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; // ligne en couleur alterne
	//echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
	//supression desactive
	$num=$result["idp"];
	echo "<td><div align=\"center\"><img src='./images/photos/$num.jpg'  width='50' height='50' border='0' alt=''/></div></td>\n" ;
	echo( "<td><div align=\"left\">".$result["idp"]."</div></td>\n" );
	echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
	echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\""."ادارة المستخدم"."  ".$result["Nomarab"]." ".$result["Prenom_Arabe"]." \"href=\"index.php?uc=$dif&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
	
	echo( "<td><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>\n" );
	echo ("<td align=center><input type='checkbox' name='state[]' value=".$result["idp"]."****".$result["Nomlatin"]."*****".$result["Prenom_Latin"]."></td>");
	echo( "<td><div align=\"right\">".$result["pere"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
	echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );//
	echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=&idp=***".$result["idp"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );//SUPGRH
	echo( "<td><div align=\"center\">"."<a title=\" اتعديل\" href=\"index.php?uc=MA&idp=".$result["idp"]."\"><img src='./images/b_edit.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	
	
	
	
	//echo( "<td ><div align=\"center\">".$result["Date_Cessation"]."</div></td>\n" );
	//echo( "<td ><div align=\"right\">".$result["Motif_Cessation"]."</div></td>\n" ); // manque les numero du motif dan la base
	//echo( "<td ><div align=\"right\">".$this->nbrtostring('grh','causedepart','idcausedepart',$result["Motif_Cessation"],'causedepartar') ."</div></td>\n" );//
	echo( "</tr>\n" );
	}
	$this-> sautligne (3);
	// $this->submit(1110,220,'إختار');
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >photos</div></td>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">N°</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ادارة المستخدم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
	
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">إختار</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	
	
	</tr>" ); 
	echo( "</form >"); 
	echo( "</table><br>\n" );
	echo '<p align= "center"  >'.$this->barre_navigation ($totalmbr4,$nb_affichage_par_page,$_GET['debut'],10,"<img src='./images/bd_lastpage.png' width='16' height='16' border='0' alt=''/>","<img src='./images/bd_firstpage.png' width='16' height='16' border='0' alt=''/>").' </p>';
	mysql_free_result($requete);
	}
	
	
	function LGRHPS ($type,$titre,$dif)
	{
	$this-> mysqlconnect();
    $query_liste4 = "SELECT * FROM grh  where cessation ='$type'and POSTESUP!='0'" ;
    $requete4 = mysql_query( $query_liste4) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr4=mysql_num_rows($requete4);
	if (!isset($_GET['debut']) )$_GET['debut']=0;
	$nb_affichage_par_page=10;
	$query_liste = "SELECT * FROM grh  where cessation ='$type' and POSTESUP!='0'  order by Nomlatin limit ".$_GET['debut'].",".$nb_affichage_par_page ;
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	$this->h(1,350,170,$titre.$totalmbr4 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">إختار</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">المنصب العالي</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">إلغاء المنصب العالي</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; // ligne en couleur alterne
	echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
	echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
	echo( "<td><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>\n" );
	echo ("<td align=center><input type='checkbox' name='state[]' value=".$result["idp"]."****".$result["Nomlatin"]."*****".$result["Prenom_Latin"]."></td>");
	echo( "<td><div align=\"right\">".$result["pere"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
	echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );//
	echo( "<td ><div align=\"center\">".$this->nbrtostring('grh','postesup','idpostesup',$result["POSTESUP"],'postesupar')."</div></td>\n" );//
	echo( "<td><div align=\"center\">"."<a title=\""."إلغاء المنصب العالي"."  ".$result["Nomarab"]." ".$result["Prenom_Arabe"]." \"href=\"index.php?uc=$dif&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
	echo( "</tr>\n" );
	}
	$this-> sautligne (3);
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">إختار</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">المنصب العالي</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">إلغاء المنصب العالي</div></td>
	</tr>" ); 
	echo( "</form >"); 
	echo( "</table><br>\n" );
	echo '<p align= "center"  >'.$this->barre_navigation ($totalmbr4,$nb_affichage_par_page,$_GET['debut'],10,"<img src='./images/bd_lastpage.png' width='16' height='16' border='0' alt=''/>","<img src='./images/bd_firstpage.png' width='16' height='16' border='0' alt=''/>").' </p>';
	mysql_free_result($requete);
	}
	function LGRHD ($type,$titre,$dif)
	{
	$this-> mysqlconnect();
    $query_liste4 = "SELECT * FROM grh  where cessation ='$type'" ;
    $requete4 = mysql_query( $query_liste4) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr4=mysql_num_rows($requete4);
	if (!isset($_GET['debut']) )$_GET['debut']=0;
	$nb_affichage_par_page=100;
	$query_liste = "SELECT * FROM grh  where cessation ='$type'   order by Nomlatin limit ".$_GET['debut'].",".$nb_affichage_par_page ;
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	$this->h(1,350,170,$titre.$totalmbr4 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >photos</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">إختار</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ الذهاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">سبب الذهاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ادارة المستخدم</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; // ligne en couleur alterne
	//echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
	//supression desactive
	$num=$result["idp"];
	echo "<td><div align=\"center\"><img src='./images/photos/$num.jpg'  width='50' height='50' border='1' alt=''/></div></td>\n" ;
	echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من قاعدة البيانات \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=***&idp=".$result["idp"]."'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );//SUPGRH
	echo( "<td><div align=\"left\">".$result["Nomlatin"]."</div></td>\n" );
	echo( "<td><div align=\"left\">".$result["Prenom_Latin"]."</div></td>\n" );
	echo( "<td><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>\n" );
	echo ("<td align=center><input type='checkbox' name='state[]' value=".$result["idp"]."****".$result["Nomlatin"]."*****".$result["Prenom_Latin"]."></td>");
	echo( "<td><div align=\"right\">".$result["pere"]."</div></td>\n" );
	echo( "<td><div align=\"right\">".$result["Prenom_Arabe"]."</div></td>\n" );
	echo( "<td ><div align=\"right\">".$result["Nomarab"]."</div></td>\n" );//
	echo( "<td ><div align=\"center\">".$result["Date_Cessation"]."</div></td>\n" );
	echo( "<td ><div align=\"right\">".$this->nbrtostring('grh','causedepart','idcausedepart',$result["Motif_Cessation"],'causedepartar') ."</div></td>\n" );//
	echo( "<td><div align=\"center\">"."<a title=\""."ادارة المستخدم"."  ".$result["Nomarab"]." ".$result["Prenom_Arabe"]." \"href=\"index.php?uc=$dif&idp=".$result["idp"]."&Nomlatin=".$result["Nomarab"]."&Prenom_Latin=".$result["Prenom_Arabe"]."&Sexe=".$result["Sexe"]."\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
	echo( "</tr>\n" );
	}
	$this-> sautligne (3);
	// $this->submit(1110,220,'إختار');
	echo( "<tr>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >photos</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">Nom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"-1\" color=\"#FFFFFF\">Prénom</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\"><img src='./images/Button Stop.png' width='16' height='16' border='0' alt=''/></div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">إختار</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">الاسم</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ الذهاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">سبب الذهاب</div></td>
	<td class=\"ligne\"><div align=\"center\"><font  color=\"#FFFFFF\">ادارة المستخدم</div></td>
	</tr>" );
	echo( "</form >"); 
	echo( "</table><br>\n" );
	echo '<p align= "center"  >'.$this->barre_navigation ($totalmbr4,$nb_affichage_par_page,$_GET['debut'],10,"<<<",">>>").' </p>';
	mysql_free_result($requete);
	}
		
	function regconge($id)
	{
	$this-> mysqlconnect();
	$query_liste = "SELECT * FROM regcong WHERE idp=$id order by idregcong desc";
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	// $this->h(1,350,170,$titre.$totalmbr1 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"95%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحظة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المستخلف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الباقي من السنة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">نوع العطلة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المدة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ الدخول</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ   الخروج</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الرقم</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$idregcong=$result["idregcong"];
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; 
	//echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
	$d=$result["duree"];
	$s=$result["STOCK"];
	
	echo( "<td><div align=\"center\">"."<a title=\" تعديل عطلة \" href=\" index.php?uc=***&idp=$id&idregcong=$idregcong\"><img src='./images/e.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "<td ><div align=\"center\">".""."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["remplacant"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["STOCK"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["cause"]."</div></td>\n" );//$this->nbrtostring("grh","causeconge","idcc",$result["cause"],"causecongear")
	echo( "<td ><div align=\"center\">".$result["duree"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["dateent"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["datesor"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["idregcong"]."</div></td>\n" );             
	//echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من سجل العطل \"      href=\" index.php?uc=SUPCONG&idp=$id&idregcong=$idregcong&duree=$d&STOCK=$s                                \"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من سجل العطل \" href=\"\"  onclick=\"ConfirmDeleteMessage('index.php?uc=SUPCONG&idp=$id&idregcong=$idregcong&duree=$d&STOCK=$s'); return false;\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	
	echo( "</tr>\n" );
	}
	echo( "<tr>
	
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحظة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المستخلف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الباقي من السنة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">نوع العطلة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المدة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ الدخول</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ   الخروج</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الرقم</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	</tr>" );  
	echo( "</form >"); 
	echo( "</table><br>\n" );
	mysql_free_result($requete);
	}
	function regconget()
	{
	$this-> mysqlconnect();
	
	$query_liste = "SELECT * FROM regcong ";
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	// $this->h(1,350,170,$titre.$totalmbr1 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحظة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المستخلف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الباقي من السنة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">نوع العطلة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المدة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ الدخول</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ   الخروج</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المصلحة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب و الاسم</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الرقم</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$idregcong=$result["idregcong"];
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; 
	//echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
	echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من سجل العطل \" href=\" index.php?uc=SUPCONGT&idregcong=$idregcong\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\" تعديل عطلة \" href=\" index.php?uc=***&idregcong=$idregcong\"><img src='./images/e.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "<td ><div align=\"center\">".""."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["remplacant"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".""."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["cause"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["duree"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["dateent"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["datesor"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$this->nbrtostring("grh","service","ids",$this->nbrtostring("grh","grh","idp",$result["idp"],"SERVICEAR"),"servicear")."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$this->nbrtostring("grh","grh","idp",$result["idp"],"Nomarab")."  ".$this->nbrtostring("grh","grh","idp",$result["idp"],"Prenom_Arabe")."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["idregcong"]."</div></td>\n" );
	echo( "</tr>\n" );
	}
	echo( "<tr>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحظة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المستخلف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الباقي من السنة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">نوع العطلة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المدة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ الدخول</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ   الخروج</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المصلحة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب و الاسم</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الرقم</div></td>
	
	</tr>" );  
	echo( "</form >"); 
	echo( "</table><br>\n" );
	mysql_free_result($requete);
	}
	function congeparper()
	{
	$this-> mysqlconnect();
	$query_liste = "SELECT COUNT(idp) as nbr,idp,idregcong FROM regcong    GROUP BY idp HAVING COUNT( idp ) >=1   order by nbr desc ";
	// $query_liste = "SELECT * FROM regcong ";
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	// $this->h(1,350,170,$titre.$totalmbr1 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"50%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحظة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المستخلف</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$idregcong=$result["idregcong"];
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; 
	//echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
	$idp=$result["idp"];
	echo( "<td ><div align=\"center\">".$result["nbr"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$this->nbrtostring("grh","service","ids",$this->nbrtostring("grh","grh","idp",$result["idp"],"SERVICEAR"),"servicear")."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$this->nbrtostring("grh","grh","idp",$result["idp"],"Nomarab")."  ".$this->nbrtostring("grh","grh","idp",$result["idp"],"Prenom_Arabe")."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\" بطاقة العطل \" href=\" index.php?uc=FC&idp=$idp\"><img src='./images/s_reload.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	// echo( "</tr>\n" );
	}
	echo( "<tr>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحظة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المستخلف</div></td>
	
	
	
	</tr>" );  
	echo( "</form >"); 
	echo( "</table><br>\n" );
	mysql_free_result($requete);
	}
	function regcongete($datejour1) //maj
	{
	$this-> mysqlconnect();//
	$query_liste = "SELECT * FROM regcong where  ok ='' and dateent <= '$datejour1' and cause='مرضية' or cause='امومة'  order by datesor ";
    $requete = mysql_query( $query_liste) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
    $totalmbr1=mysql_num_rows($requete);
	// $this->h(1,350,170,$titre.$totalmbr1 );
	// $this->h(1,500,200,' ليوم '.$this->arDate() );
	echo( "<table width=\"85%\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحظة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المستخلف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الباقي من السنة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">نوع العطلة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المدة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ الدخول</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ   الخروج</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المصلحة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب و الاسم</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الرقم</div></td>
	<td bgcolor=\"red\"><div align=\"center\"><font  color=\"#FFFFFF\">تحديث</div></td>
	<td bgcolor=\"#cccccc\"><div align=\"center\">اعدار</div></td>
	</tr>" ); 
	echo( "<form action=\"index.php?uc=cheked \" method=\"post\" name=\"form1\">");  $i = 0; 
	while( $result = mysql_fetch_array( $requete ) )
	{
	$idregcong=$result["idregcong"];
	$bgcolor = ($i++ & 1) ? '#fff' : '#E6E6E6';echo '<tr bgcolor='.$bgcolor.'>'; 
	//echo( "<tr bgcolor=\"#E6E6E6\" >\n" );
	echo( "<td><div align=\"center\">"."<a title=\" الحذف النهائي من سجل العطل \" href=\" index.php?uc=SUPCONGR&idregcong=$idregcong\"><img src='./images/b_empty.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\" تعديل عطلة \" href=\" index.php?uc=***&idregcong=$idregcong\"><img src='./images/e.png' width='16' height='16' border='0' alt=''  /></a>"."</div></td>\n" );
	echo( "<td ><div align=\"center\">".""."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["remplacant"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".""."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["cause"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["duree"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["dateent"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["datesor"]."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$this->nbrtostring("grh","service","ids",$this->nbrtostring("grh","grh","idp",$result["idp"],"SERVICEAR"),"servicear")."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$this->nbrtostring("grh","grh","idp",$result["idp"],"Nomarab")."  ".$this->nbrtostring("grh","grh","idp",$result["idp"],"Prenom_Arabe")."</div></td>\n" );
	echo( "<td ><div align=\"center\">".$result["idregcong"]."</div></td>\n" );
	echo( "<td><div align=\"center\">"."<a title=\"تئكيد الدخول من العطلة \"href=\"index.php?uc=CONFRETCONG&idregcong=".$result["idregcong"]."\"><img src='./images/ok.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
    echo( "<td><div align=\"center\">"."<a title=\" اعدار كتابيى \"href=\"./GRH/MEDRC.php?idregcong=".$result["idregcong"]."&date=".$result["dateent"]."\"><img src='./images/s_warn.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );

	echo( "</tr>\n" );
	}
	echo( "<tr>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\" >حذف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تعديل</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الملاحظة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المستخلف</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الباقي من السنة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">نوع العطلة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المدة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ الدخول</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">تاريخ   الخروج</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">المصلحة</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">اللقب و الاسم</div></td>
	<td bgcolor=\"blue\"><div align=\"center\"><font  color=\"#FFFFFF\">الرقم</div></td>
	<td bgcolor=\"red\"><div align=\"center\"><font  color=\"#FFFFFF\">تحديث</div></td>
	<td bgcolor=\"#cccccc\"><div align=\"center\">اعدار</div></td>
	</tr>" );  
	echo( "</form >"); 
	echo( "</table><br>\n" );
	mysql_free_result($requete);
	}
		
	function REPSERVICE ($x,$y)
	{
	$this-> mysqlconnect(); 
	$query_liste = "SELECT count(grh.Nomlatin) as nbr,service.servicear as service FROM grh,service where grh.SERVICEar= service.ids and cessation !='y' group by service order by nbr desc ";
	$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL num곯: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo( "<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" align=\"center\">\n" );
	echo( "<tr>
	<td bgcolor=\"#cccccc\"><div align=\"center\">العدد</div></td>
	<td bgcolor=\"#cccccc\"><div align=\"center\">المصلحة</div></td>
	</tr>" ); 
	while( $result = mysql_fetch_array( $requete ) )
	{
	echo( "<tr>\n" );
	echo( "<td ><div align=\"right\">".$result["nbr"]."</div></td>\n" );
	echo( "<td ><div align=\"right\">".$result["service"]."</div></td>\n" );
	echo( "</tr>\n" );
	} 
	echo( "</table><br>\n" );
	echo "</div>";
	mysql_free_result($requete);
	}
		
	function suite($colone) 
	{
	return $requete;
	}
	function gestion ($x,$y,$colone,$titre,$fichier,$image)
	{
	$this-> mysqlconnect();
	$query_liste = "SELECT * FROM grh where  idp=$colone ";
	$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo( "<table width=\"100%\" bgcolor=\"white\"  bordercolor=\"green\" border=\"1\" cellpadding=\"2\" cellspacing=\"2\" align=\"center\">\n " );
	echo( "<tr>
	<td bgcolor=\"#cccccc\"><div align=\"center\">$titre</div></td>
	</tr>" ); 
	while( $result = mysql_fetch_array( $requete ) )
	{
	echo( "<tr>\n" );
	echo( "<td><div align=\"center\">"."<a title=\"$titre\"href=\"./GRH/$fichier.php?idp=".$result["idp"]."\"><img src='./images/$image.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
	echo( "</tr>\n" );
	echo( "<tr>
	<td bgcolor=\"#cccccc\"><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>
	</tr>" );
	} 
	echo( "</table><br>\n" );
	mysql_free_result($requete);
	echo "</div>";
	}
	function gestion1 ($x,$y,$colone,$titre,$fichier,$image)
	{
	$this-> mysqlconnect();
	$query_liste = "SELECT * FROM grh where  idp=$colone ";
	$requete = mysql_query( $query_liste ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo( "<table width=\"100%\" bgcolor=\"white\"  bordercolor=\"green\" border=\"1\" cellpadding=\"2\" cellspacing=\"2\" align=\"center\">\n " );
	echo( "<tr>
	<td bgcolor=\"#cccccc\"><div align=\"center\">$titre</div></td>
	</tr>" ); 
	while( $result = mysql_fetch_array( $requete ) )
	{
	echo( "<tr>\n" );
	echo( "<td><div align=\"center\">"."<a title=\"$titre\"href=\"index.php?uc=$fichier&idp=".$result["idp"]."\"><img src='./images/$image.png' width='16' height='16' border='0' alt=''/></a>"."</div></td>\n" );
	echo( "</tr>\n" );
	echo( "<tr>
	<td bgcolor=\"#cccccc\"><div align=\"center\"><img src='./images/Button Square.png' width='16' height='16' border='0' alt=''/></div></td>
	</tr>" );
	} 
	echo( "</table><br>\n" );
	mysql_free_result($requete);
	echo "</div>";
	}
	function arDate() 
	{
    $Jour = array("الاحد", "الاثنين", "الثلاثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
    $Mois = array("", "جانفى", "فيفري", "مارس", "افريل", "ماي", "جوان", "جويلية", "اوت", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر");
    $datear = $Jour[date("w")] . " " . date("d") . " " . $Mois[date("n")] . " " . date("Y");
    return $datear;
    }
	//*************************************************************************************//.$per ->nbrtostring("grh","wil","IDWIL",'17000',"WILAYASAR").$this->nbrtostring("grh","wil","IDWIL",'17000',"WILAYAS")
	function entete()
	{
	echo "<div class=\"header\">"; 
	echo "<H4><strong> REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE </strong></H4>";
	echo "<H4><strong> MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE</strong></H4>"; 
	echo "</div>"; 
    }
	function baniere()
	{
	echo "<p><img  id=\"mydiv2\"   align=\"center\"  src=\"IMAGES/Azul.jpg\" width=\"1365\" height=\"80\" alt=\"1\" /></p>"; 
    }
	function entetemenu()
	{
	echo "<div id=\"menu\">"; 
    echo "<ul class=\"menu\">";
    }
	function piedmenu()
	{
	echo "</ul>"; 
    echo "</div>"; 
    }
	function h($h,$x,$y,$txt)
    {
    echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
    echo "<h".$h." >".$txt."</h".$h.">";
    echo "</div>";
	}
	//*******************form********************//
	function f0($url,$method)
	{
	 echo "<form class=\"form\" action=\"".$url."\" method=\"".$method."\" name=\"form1\" id=\"form1\">";
	}
	function fieldset($class,$legend)
	{
	echo "<fieldset class=\"".$class."\">";
	echo " <legend  class=\"legend\">".$legend."</legend>";
	echo "</fieldset>";
    }
	function label($x,$y,$l)
	{
	 echo "<div class=\"label\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo $l;
	 echo "</div>";
	}
	function label1($x,$y,$l)
	{
	 echo "<div class=\"label1\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo $l;
	 echo "</div>";
	}
	function txtar($x,$y,$name,$size,$value)
	{
	 echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input STYLE=\"Text-ALIGN:right\" type=\"text\" name=\"".$name."\" size=\"".$size."\" value=\"".$value."\" required />";
	 echo "</div>";
	}
	
	function txtme($x,$y,$name,$size,$value)
	{
	 echo "<div class=\"date\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input id=\"date\" STYLE=\"Text-ALIGN:left\" type=\"text\" name=\"".$name."\" size=\"".$size."\" value=\"".$value."\" required />";
	 echo "</div>";
	}	
	//onKeypress="return valid_mail(event); eviter les saisie de caracterev non autoriser //onKeypress=\"return valid_mail(event);\" 
	function txt($x,$y,$name,$size,$value)
	{
	 echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"text\" name=\"".$name."\" size=\"".$size."\" value=\"".$value."\" required          />";
	 echo "</div>";
	}
	function txtjs($x,$y,$name,$size,$value,$action)
	{
	 echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"text\" name=\"".$name."\" size=\"".$size."\" value=\"".$value."\"  onblur=\"".$action."\" required />";
	 echo "</div>";
	}
	function txtauto($x,$y,$name,$size,$value)
	{
	 echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"text\" name=\"".$name."\" size=\"".$size."\" value=\"".$value."\" id=\"langages\"  />";
	 echo "</div>";
	}
		
	function hide($x,$y,$name,$size,$value)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"hidden\" name=\"".$name."\" size=\"".$size."\" value=\"".$value."\" />";
	 echo "</div>";
	}
	function datetime ($x,$y,$name)
	{
	 echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"date\" name=\"".$name."\"   />";
	 echo "</div>";
	}
	function nbr ($x,$y,$name,$size,$min,$max)  
	{
	 echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"number\" name=\"".$name."\" size=\"".$size."\" min=\"".$min."\" max=\"".$max."\" />";
	 echo "</div>";
	}
	function combov($x,$y,$name,$Jour)  //como vierge   //$per ->combov(100,900,'gggg',array("الاحد", "الاثنين", "الثلثاء", "الاربعاء", "الخميس", "الجمعة", "السبت"))   ;  
	{
	 echo "<div class=\"data\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo "<select name=\"".$name."\" >";
	 foreach ($Jour as $value) 
    {
	 echo "<option>$value</option>";
    }
	 echo "</select> ";	
	 echo "</div>"; 
    }
	function combo($x,$y,$name,$db_name,$tb_name,$choisir,$class,$ve,$va) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option   value=\"1\" selected=\"selected\">".$choisir."</option>"."\n";
    $result = mysql_query("SELECT * FROM $tb_name" );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[$ve].'">'.$data[$va].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	//*****************************************************************************//
	function comboservice($x,$y,$name,$db_name,$tb_name,$choisir,$class,$ve,$va) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option   value=\"1\" selected=\"selected\">".$choisir."</option>"."\n";
    $result = mysql_query("SELECT * FROM $tb_name  where NBRLIT > 0  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[$ve].'">'.$data[$va].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	function NLIT($x,$y,$name) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"NLIT\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">N°DU LIT</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}
	//***********************************************************************************//		
	function combomed($x,$y,$name,$db_name,$tb_name,$choisir,$class,$ve,$va) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option   value=\"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ \" selected=\"selected\">".$choisir."</option>"."\n";
    $result = mysql_query("SELECT * FROM $tb_name" );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[$ve].'_'.$data["pre"].'">'.$data[$va].'_'.$data["pre"].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	function combospecialite($x,$y,$name,$db_name,$tb_name,$choisir,$class,$ve,$va) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option   value=\"1\" selected=\"selected\">".$choisir."</option>"."\n";
    $result = mysql_query("SELECT * FROM $tb_name " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[$ve].'">'.$data[$va].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	
	function usereph($x,$y,$name,$db_name,$choisir,$class,$ve,$va) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option   value=\"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ \" selected=\"selected\">".$choisir."</option>"."\n";
    $result = mysql_query("SELECT * FROM grh order by Nomlatin  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[$ve].'">'.$data["Nomlatin"].'_'.$data["Prenom_Latin"].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	function MEDECIN($x,$y,$name,$db_name,$choisir,$class,$ve,$va) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option   value=\"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ \" selected=\"selected\">".$choisir."</option>"."\n";
    $result = mysql_query("SELECT * FROM grh WHERE  rnvgradear='1' or  rnvgradear='5' or  rnvgradear='6' order by Nomlatin  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[$ve].'">'.$data["Nomlatin"].'_'.$data["Prenom_Latin"].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}
	function userephar($x,$y,$name,$db_name,$choisir,$class,$ve,$va) 
	{
	$this-> mysqlconnect();
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option   value=\"_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ \" selected=\"selected\">".$choisir."</option>"."\n";
    $result = mysql_query("SELECT * FROM grh order by Nomlatin  " );
    while($data =  mysql_fetch_array($result))
    {
    echo '<option value="'.$data[$ve].'">'.$data["Nomarab"].'_'.$data["Prenom_Arabe"].'</option>';
    }
	echo '</select>'."\n"; 
	echo "</div>";
	}	
	function combo1($x,$y,$name,$class,$choisir) 
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	echo "<select size=1 class=\"".$class."\" name=\"".$name."\">"."\n";
	echo"<option value=\"1\" selected=\"selected\">".$choisir."</option>"."\n";
    echo '</select>'."\n"; 
	echo "</div>";
	}
	function chekboxed($x,$y,$nom)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"checkbox\" name=\"$nom\" checked=\"checked\" />";
	 echo "</div>";
	}
	function chekbox($x,$y,$nom)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"checkbox\" name=\"$nom\"  />";
	 echo "</div>";
	}
	 function ques ($x,$y,$nom,$ques) // OUI PAR DEFAUT 
	{
	echo "<div class=\"question_grand\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";
	echo "<div class=\"question\">$ques</div>";
	echo "<div class=\"check\"><input type=\"radio\" name=\"$nom\" value=\"1\" checked > Oui <input type=\"radio\" name=\"$nom\" value=\"0\" >Non</div>";
	echo "</div>";
    }
    function ques1 ($x,$y,$nom,$ques) // NON PAR DEFAUT 
	{
	echo "<div class=\"question_grand\" style=\" position:absolute;left:".$x."px;top:".$y."px;\">";
	echo "<div class=\"question\">$ques</div>";
	echo "<div class=\"check\"><input type=\"radio\" name=\"$nom\" value=\"1\" > Oui <input value=\"0\" checked type=\"radio\" name=\"$nom\">Non</div>";
	echo "</div>";
    }
	function reset($x,$y,$value)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"reset\" name=\"VALIDER\" id=\"VALIDER\" value=\" ".$value."\" />";
	 echo "</div>";
	}
	function submit($x,$y,$value)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 
    //onClick=\"this.form.submit();this.disabled=true;this.value='$value...'\" evite double clic 
	 echo " <input type=\"submit\" name=\"VALIDER\" id=\"VALIDER\" style=\"color: red\"value=\" ".$value."\"  onClick=\"this.form.submit();this.disabled=true;this.value='$value...'\"     />";
	 echo "</div>";
	}
	function textarea($x,$y,$nom)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo "<textarea STYLE=\"Text-ALIGN:right\" rows=10 cols=35   name=\"".$nom."\"  value=\"\"> </textarea>";
	 echo "</div>";
	}
	function textarea1($x,$y,$nom,$rows,$cols) 
	{
	
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo "<textarea STYLE=\"Text-ALIGN:right\" rows=$rows cols=$cols   name=\"".$nom."\"  value=\"\"> </textarea>";
	 echo "</div>";
	}
	function f1()
	{
	 echo "</form> ";
	}
	//*******************************************//
	function sautligne ($x) // fonction saut de lignes 
	{
	for ($i=1; $i<=$x; $i++) 
	{ 
	echo "<br />"; 
	} 
	}
	function photosx($x,$y,$nom,$w,$h)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <img   src=\"./IMAGES/".$nom."\" width=\"".$w."\" height=\"".$h."\" alt=\"1\" />";
	 echo "</div>";
	}
	function photosuser($x,$y,$nom,$w,$h)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <img   src=\"./IMAGES/photos/".$nom."\" width=\"".$w."\" height=\"".$h."\" alt=\"1\" />";
	 echo "</div>";
	}
	function photosuser1($nom,$w,$h)
	{
	 echo " <img   src=\"./IMAGES/photos/".$nom."\" width=\"".$w."\" height=\"".$h."\" alt=\"1\" />";
	}
	
	
	
	function photoscaptacha($x,$y)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <img   src=\"./connec/captcha.php\"  />";
	 echo "</div>";
	}
    function url($x,$y,$url,$value,$h)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";
	 echo "<h".$h." >"."<a href=\"".$url."\">".$value."</a>"."</h".$h.">";
	 echo "</div>";
	}
	function urlbutton($x,$y,$url,$value,$h)
	{
	echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";
	echo "<a href=\"".$url."\"><input type=\"button\"value=\"".$value."\"style=\"color: red  \" /></a>";
	echo "";
	echo "</div>";
	}	
	 function radio($x,$y,$nom,$val)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"radio\" name=\"$nom\" value=\"$val\"  />";
	 echo "</div>";
	}
	
	function radioed($x,$y,$nom,$val)
	{
	 echo "<div style=\" position:absolute;left:".$x."px;top:".$y."px;\">";	 
	 echo " <input type=\"radio\" name=\"$nom\" value=\"$val\" checked=\"checked\"    />";
	 echo "</div>";
	}
	//************************SALAIRE DE BASE*****// EN FONCTION DE CATEGORIE ECHELEON
	function gs($h,$v) //BIEN VERIFIER  
	{ 
	$gs = array(); 
	$gs['1']['c']   =1 ;
	$gs['1']['ifc'] =3200 ;
	$gs['1']['i'] =200 ;
	$gs['1']['0'] =0 ;   
	$gs['1']['1'] =10 ;  
	$gs['1']['2'] =20 ;  
	$gs['1']['3'] =30 ;  
	$gs['1']['4'] =40 ;  
	$gs['1']['5'] =50 ;  
	$gs['1']['6'] =60 ;  
	$gs['1']['7'] =70 ;  
	$gs['1']['8'] =80 ;  
	$gs['1']['9'] =90 ;  
	$gs['1']['10'] =100 ;  
	$gs['1']['11'] =110 ;  
	$gs['1']['12'] =120 ; 
	//********************// 
	$gs['2']['c'] =2 ;
	$gs['2']['ifc'] =3200 ;
	$gs['2']['i'] =219 ; 
	$gs['2']['0'] =0 ;  
	$gs['2']['1'] =11 ;  
	$gs['2']['2'] =22 ;  
	$gs['2']['3'] =33 ;  
	$gs['2']['4'] =44 ;  
	$gs['2']['5'] =55 ;  
	$gs['2']['6'] =66 ;  
	$gs['2']['7'] =77 ;  
	$gs['2']['8'] =88 ;  
	$gs['2']['9'] =99 ;  
	$gs['2']['10'] =110 ;  
	$gs['2']['11'] =120 ;  
	$gs['2']['12'] =131 ; 
	//********************// 
	$gs['3']['c'] =3 ;
	$gs['3']['ifc'] =3200 ;
	$gs['3']['i'] =240 ;
	$gs['3']['0'] =0 ;  
	$gs['3']['1'] =12 ;  
	$gs['3']['2'] =24 ;  
	$gs['3']['3'] =36 ;  
	$gs['3']['4'] =48 ;  
	$gs['3']['5'] =60 ;  
	$gs['3']['6'] =72 ;  
	$gs['3']['7'] =84 ;  
	$gs['3']['8'] =96 ;  
	$gs['3']['9'] =108 ;  
	$gs['3']['10'] =120 ;  
	$gs['3']['11'] =132 ;  
	$gs['3']['12'] =144 ;
	//********************//
	$gs['4']['c'] =4 ;
	$gs['4']['ifc'] =3200 ;
	$gs['4']['i'] =263 ;
	$gs['4']['0'] =0 ; 
	$gs['4']['1'] =13 ;  
	$gs['4']['2'] =26 ;  
	$gs['4']['3'] =39 ;  
	$gs['4']['4'] =53 ;  
	$gs['4']['5'] =66 ;  
	$gs['4']['6'] =79 ;  
	$gs['4']['7'] =92 ;  
	$gs['4']['8'] =105 ;  
	$gs['4']['9'] =118 ;  
	$gs['4']['10'] =132 ;  
	$gs['4']['11'] =145 ;  
	$gs['4']['12'] =158 ;
	//*******************//
	$gs['5']['c'] =5 ;
	$gs['5']['ifc'] =3200 ;
	$gs['5']['i'] =288 ; 
	$gs['5']['0'] =0 ;  
	$gs['5']['1'] =14 ;  
	$gs['5']['2'] =29 ;  
	$gs['5']['3'] =43 ;  
	$gs['5']['4'] =58 ;  
	$gs['5']['5'] =72 ;  
	$gs['5']['6'] =86 ;  
	$gs['5']['7'] =101 ;  
	$gs['5']['8'] =115 ;  
	$gs['5']['9'] =130 ;  
	$gs['5']['10'] =144 ;  
	$gs['5']['11'] =158 ;  
	$gs['5']['12'] =173 ;
	//********************//
	$gs['6']['ifc'] =3200 ;
	$gs['6']['c'] =6 ;
	$gs['6']['i'] =315 ;
	$gs['6']['0'] =0 ;  
	$gs['6']['1'] =16 ;  
	$gs['6']['2'] =32 ;  
	$gs['6']['3'] =47 ;  
	$gs['6']['4'] =63 ;  
	$gs['6']['5'] =79 ;  
	$gs['6']['6'] =95 ;  
	$gs['6']['7'] =110 ;  
	$gs['6']['8'] =126 ;  
	$gs['6']['9'] =142 ;  
	$gs['6']['10'] =158 ;  
	$gs['6']['11'] =173 ;  
	$gs['6']['12'] =189 ;
	//********************//
	$gs['7']['c'] =7 ;
	$gs['7']['ifc'] =2500 ;
	$gs['7']['i'] =348 ;
	$gs['7']['0'] =0 ;   
	$gs['7']['1'] =17 ;  
	$gs['7']['2'] =35 ;  
	$gs['7']['3'] =52 ;  
	$gs['7']['4'] =70 ;  
	$gs['7']['5'] =87 ;  
	$gs['7']['6'] =104 ;  
	$gs['7']['7'] =122 ;  
	$gs['7']['8'] =139 ;  
	$gs['7']['9'] =157 ;  
	$gs['7']['10'] =174 ;  
	$gs['7']['11'] =191 ;  
	$gs['7']['12'] =209 ;
	//********************//
	$gs['8']['c'] =8 ;
	$gs['8']['ifc'] =2500 ;
	$gs['8']['i'] =379 ;
	$gs['8']['0'] =0 ; 
	$gs['8']['1'] =19 ;  
	$gs['8']['2'] =38 ;  
	$gs['8']['3'] =57 ;  
	$gs['8']['4'] =76 ;  
	$gs['8']['5'] =95 ;  
	$gs['8']['6'] =114 ;  
	$gs['8']['7'] =133 ;  
	$gs['8']['8'] =152 ;  
	$gs['8']['9'] =171 ;  
	$gs['8']['10'] =190 ;  
	$gs['8']['11'] =208 ;  
	$gs['8']['12'] =225 ;
	//********************//
	$gs['9']['c'] =9 ;
	$gs['9']['ifc'] =2000 ;
	$gs['9']['i'] =418 ;  
	$gs['9']['0'] =0 ; 
	$gs['9']['1'] =21 ; 
	$gs['9']['2'] =42 ;  
	$gs['9']['3'] =63 ;  
	$gs['9']['4'] =84 ;  
	$gs['9']['5'] =105 ;  
	$gs['9']['6'] =125 ;  
	$gs['9']['7'] =146 ;  
	$gs['9']['8'] =167 ;  
	$gs['9']['9'] =188 ;  
	$gs['9']['10'] =209 ;  
	$gs['9']['11'] =230 ;  
	$gs['9']['12'] =251 ;
	//********************//
	$gs['10']['c'] =10 ;
	$gs['10']['ifc'] =2000 ;
	$gs['10']['i'] =453 ; 
	$gs['10']['0'] =0 ; 
	$gs['10']['1'] =23 ;  
	$gs['10']['2'] =45 ;  
	$gs['10']['3'] =68 ;  
	$gs['10']['4'] =91 ;  
	$gs['10']['5'] =113 ;  
	$gs['10']['6'] =136 ;  
	$gs['10']['7'] =159 ;  
	$gs['10']['8'] =181 ;  
	$gs['10']['9'] =204 ;  
	$gs['10']['10'] =227 ;  
	$gs['10']['11'] =249 ;  
	$gs['10']['12'] =272 ;
	//********************//
	$gs['11']['c'] =11 ;
	$gs['11']['ifc'] =1500 ;
	$gs['11']['i'] =498 ;
	$gs['11']['0'] =0 ;   
	$gs['11']['1'] =25 ;  
	$gs['11']['2'] =50 ;  
	$gs['11']['3'] =75 ;  
	$gs['11']['4'] =100 ;  
	$gs['11']['5'] =125 ;  
	$gs['11']['6'] =149 ;  
	$gs['11']['7'] =174 ;  
	$gs['11']['8'] =199 ;  
	$gs['11']['9'] =224 ;  
	$gs['11']['10'] =249 ;  
	$gs['11']['11'] =274 ;  
	$gs['11']['12'] =299 ;
	//********************//
	$gs['12']['c'] =12 ;
	$gs['12']['ifc'] =1500 ;
	$gs['12']['i'] =537 ; 
	$gs['12']['0'] =0 ; 
	$gs['12']['1'] =27 ;  
	$gs['12']['2'] =54 ;  
	$gs['12']['3'] =81 ;  
	$gs['12']['4'] =107 ;  
	$gs['12']['5'] =134 ;  
	$gs['12']['6'] =161 ;  
	$gs['12']['7'] =188 ;  
	$gs['12']['8'] =215 ;  
	$gs['12']['9'] =242 ;  
	$gs['12']['10'] =269 ;  
	$gs['12']['11'] =295 ;  
	$gs['12']['12'] =322 ;
	//********************//
	$gs['13']['c'] =13 ;
	$gs['13']['ifc'] =1500 ;
	$gs['13']['i'] =578 ; 
	$gs['13']['0'] =0; 
	$gs['13']['1'] =29;  
	$gs['13']['2'] =58 ;  
	$gs['13']['3'] =87 ;  
	$gs['13']['4'] =116 ;  
	$gs['13']['5'] =145 ;  
	$gs['13']['6'] =173 ;  
	$gs['13']['7'] =202 ;  
	$gs['13']['8'] =231 ;  
	$gs['13']['9'] =260 ;  
	$gs['13']['10'] =289 ;  
	$gs['13']['11'] =318 ;  
	$gs['13']['12'] =347 ;
	//********************//
	$gs['14']['c'] =14 ;
	$gs['14']['ifc'] =1500 ;
	$gs['14']['i'] =621 ; 
	$gs['14']['0'] =0; 
	$gs['14']['1'] =31;  
	$gs['14']['2'] =62 ;  
	$gs['14']['3'] =93 ;  
	$gs['14']['4'] =124 ;  
	$gs['14']['5'] =155 ;  
	$gs['14']['6'] =186 ;  
	$gs['14']['7'] =217 ;  
	$gs['14']['8'] =248 ;  
	$gs['14']['9'] =279 ;  
	$gs['14']['10'] =311 ;  
	$gs['14']['11'] =342 ;  
	$gs['14']['12'] =373 ;
	//********************//
	$gs['15']['c'] =15 ;
	$gs['15']['ifc'] =1500 ;
	$gs['15']['i'] =666 ;
	$gs['15']['0'] =0;  
	$gs['15']['1'] =33;  
	$gs['15']['2'] =67 ;  
	$gs['15']['3'] =100 ;  
	$gs['15']['4'] =133 ;  
	$gs['15']['5'] =167 ;  
	$gs['15']['6'] =200 ;  
	$gs['15']['7'] =233 ;  
	$gs['15']['8'] =266 ;  
	$gs['15']['9'] =300 ;  
	$gs['15']['10'] =333 ;  
	$gs['15']['11'] =366 ;  
	$gs['15']['12'] =400 ;
	//********************//
	$gs['16']['c'] =16 ;
	$gs['16']['ifc'] =1500 ;
	$gs['16']['i'] =713 ;
	$gs['16']['0'] =0; 
	$gs['16']['1'] =36;  
	$gs['16']['2'] =71;  
	$gs['16']['3'] =107 ;  
	$gs['16']['4'] =143 ;  
	$gs['16']['5'] =178 ;  
	$gs['16']['6'] =214 ;  
	$gs['16']['7'] =250 ;  
	$gs['16']['8'] =285 ;  
	$gs['16']['9'] =321 ;  
	$gs['16']['10'] =357 ;  
	$gs['16']['11'] =392 ;  
	$gs['16']['12'] =428 ;
	//********************//
	$gs['17']['c'] =17 ;
	$gs['17']['ifc'] =1500 ;
	$gs['17']['i'] =762 ;
	$gs['17']['0'] =0;   
	$gs['17']['1'] =38;  
	$gs['17']['2'] =76;  
	$gs['17']['3'] =114 ;  
	$gs['17']['4'] =152 ;  
	$gs['17']['5'] =191 ;  
	$gs['17']['6'] =229 ;  
	$gs['17']['7'] =267 ;  
	$gs['17']['8'] =305 ;  
	$gs['17']['9'] =343 ;  
	$gs['17']['10'] =381 ;  
	$gs['17']['11'] =419 ;  
	$gs['17']['12'] =457 ;
	//********************//
	$gs['hc1']['c'] =171 ;
	$gs['hc1']['ifc'] =0 ;
	$gs['hc1']['i'] =930 ; 
	$gs['hc1']['0'] =0; 
	$gs['hc1']['1'] =47;  
	$gs['hc1']['2'] =93;  
	$gs['hc1']['3'] =140 ;  
	$gs['hc1']['4'] =186 ;  
	$gs['hc1']['5'] =233 ;  
	$gs['hc1']['6'] =279 ;  
	$gs['hc1']['7'] =326 ;  
	$gs['hc1']['8'] =372 ;  
	$gs['hc1']['9'] =419 ;  
	$gs['hc1']['10'] =465 ;  
	$gs['hc1']['11'] =512 ;  
	$gs['hc1']['12'] =558 ;
	//********************//
	$gs['hc2']['c'] =172;
	$gs['hc2']['ifc'] =0 ;
	$gs['hc2']['i'] =990 ;
	$gs['hc2']['0'] =0;   
	$gs['hc2']['1'] =50;  
	$gs['hc2']['2'] =99;  
	$gs['hc2']['3'] =149 ;  
	$gs['hc2']['4'] =198 ;  
	$gs['hc2']['5'] =248 ;  
	$gs['hc2']['6'] =297 ;  
	$gs['hc2']['7'] =347 ;  
	$gs['hc2']['8'] =396 ;  
	$gs['hc2']['9'] =446 ;  
	$gs['hc2']['10'] =495 ;  
	$gs['hc2']['11'] =545 ;  
	$gs['hc2']['12'] =594 ;
	//********************//
	$gs['hc3']['c'] =173 ;
	$gs['hc3']['ifc'] =0 ;
	$gs['hc3']['i'] =1055 ;
	$gs['hc3']['0'] =0;  
	$gs['hc3']['1'] =53;  
	$gs['hc3']['2'] =106;  
	$gs['hc3']['3'] =158 ;  
	$gs['hc3']['4'] =211 ;  
	$gs['hc3']['5'] =264 ;  
	$gs['hc3']['6'] =317 ;  
	$gs['hc3']['7'] =369 ;  
	$gs['hc3']['8'] =422 ;  
	$gs['hc3']['9'] =475 ;  
	$gs['hc3']['10'] =528 ;  
	$gs['hc3']['11'] =580 ;  
	$gs['hc3']['12'] =633 ;
	//********************//
	$gs['hc4']['c'] =174 ;
	$gs['hc4']['ifc'] =0 ;
	$gs['hc4']['i'] =1125 ; 
	$gs['hc4']['0'] =0; 
	$gs['hc4']['1'] =56;  
	$gs['hc4']['2'] =113;  
	$gs['hc4']['3'] =169 ;  
	$gs['hc4']['4'] =225 ;  
	$gs['hc4']['5'] =281 ;  
	$gs['hc4']['6'] =338 ;  
	$gs['hc4']['7'] =394 ;  
	$gs['hc4']['8'] =450 ;  
	$gs['hc4']['9'] =506 ;  
	$gs['hc4']['10'] =563 ;  
	$gs['hc4']['11'] =619 ;  
	$gs['hc4']['12'] =675 ;
	//********************//
	$gs['hc5']['c'] =175 ;
	$gs['hc5']['ifc'] =0 ;
	$gs['hc5']['i'] =1200 ; 
	$gs['hc5']['0'] =0;
	$gs['hc5']['1'] =60;  
	$gs['hc5']['2'] =120;  
	$gs['hc5']['3'] =180 ;  
	$gs['hc5']['4'] =240 ;  
	$gs['hc5']['5'] =300 ;  
	$gs['hc5']['6'] =360 ;  
	$gs['hc5']['7'] =420 ;  
	$gs['hc5']['8'] =480 ;  
	$gs['hc5']['9'] =540 ;  
	$gs['hc5']['10'] =600 ;  
	$gs['hc5']['11'] =660 ;  
	$gs['hc5']['12'] =720 ;
	//********************//
	$gs['hc6']['c'] =176 ;
	$gs['hc6']['ifc'] =0 ;
	$gs['hc6']['i'] =1280 ;
	$gs['hc6']['0'] =0;  
	$gs['hc6']['1'] =64;  
	$gs['hc6']['2'] =128;  
	$gs['hc6']['3'] =192 ;  
	$gs['hc6']['4'] =256 ;  
	$gs['hc6']['5'] =320 ;  
	$gs['hc6']['6'] =384 ;  
	$gs['hc6']['7'] =448 ;  
	$gs['hc6']['8'] =512 ;  
	$gs['hc6']['9'] =576 ;  
	$gs['hc6']['10'] =640 ;  
	$gs['hc6']['11'] =704 ;  
	$gs['hc6']['12'] =768 ;
	//********************//
	$gs['hc7']['c'] =177 ;
	$gs['hc7']['ifc'] =0 ;
	$gs['hc7']['i'] =1480 ;
	$gs['hc7']['0'] =0;  
	$gs['hc7']['1'] =74;  
	$gs['hc7']['2'] =148;  
	$gs['hc7']['3'] =222 ;  
	$gs['hc7']['4'] =296 ;  
	$gs['hc7']['5'] =370 ;  
	$gs['hc7']['6'] =444 ;  
	$gs['hc7']['7'] =518 ;  
	$gs['hc7']['8'] =592 ;  
	$gs['hc7']['9'] =666 ;  
	$gs['hc7']['10'] =740 ;  
	$gs['hc7']['11'] =814 ;  
	$gs['hc7']['12'] =888 ;
	//********************//
	return $gs[$h][$v] ;
	}
	//salaire de base 
	function sdb($h) 
	{ 
	$sdb=$this->gs($h,"i")*45;
	return $sdb ;
	}
	
	function iep($h,$v) 
	{ 
	$iep=$this->gs($h,$v)*45;
	return $iep ;
	}
	
	function ifc($h) 
	{ 
	$ifc=$this->gs($h,"ifc");
	return $ifc ;
	}
	function BIPS($IPS) 
	{ 
	$BIPS=$this->nbrtostring('grh','postesup','idpostesup',$IPS,'indice')*45;
	return $BIPS ;
	}
	//****************INTERESSEMENT****************************// POUR SPECIALISTE  
	function INTE($h) 
	{ 
	$INTE=$h;
	return $INTE ;
	}
	//*************************************************// MEDECIN GENERALISTE
	function PAPM($h,$v,$pc,$grade) 
	{
	switch($grade)  
    {
    case '5': 
		{
		$PAPM=(($this->sdb($h) + $this->iep($h,$v))*$pc)/100;//de 0% a 30%  (($this->sdb($h) + $this->iep($h,$v))*$pc)/100;
		break;
		}
	case '6':  
		{
		$PAPM=(($this->sdb($h) + $this->iep($h,$v))*$pc)/100; //de 0% a 30%
		break;
		}	
	case '7': 
		{
		$PAPM=(($this->sdb($h) + $this->iep($h,$v))*$pc)/100; //de 0% a 30%
		break;
		}		
	default:$PAPM=00;break;		
	}
	return $PAPM ;
	}
	//**************************************************//MEDECIN GENERALISTE
	function IQUA($h,$v,$grade) 
	{
	switch($grade)  
    {
	case '1': 
		{
		$IQUA=(($this->sdb($h) + $this->iep($h,$v))*35)/100; 
		break;
		}
	case '3': 
		{
		$IQUA=(($this->sdb($h) + $this->iep($h,$v))*40)/100; 
		break;
		}
	case '4': 
		{
		$IQUA=(($this->sdb($h) + $this->iep($h,$v))*50)/100; 
		break;
		}
	
	case '5': 
		{
		$IQUA=(($this->sdb($h) + $this->iep($h,$v))*45)/100; 
		break;
		}
	case '6':  
		{
		$IQUA=(($this->sdb($h) + $this->iep($h,$v))*45)/100; 
		break;
		}	
	case '7': 
		{
		$IQUA=(($this->sdb($h) + $this->iep($h,$v))*50)/100; 
		break;
		}	
	default:$IQUA=00;break;	
	}
	return $IQUA ;
	}
	//**************************************************//MEDECIN GENERALISTE
    function IDOC($grade) 
	{
	switch($grade)  
    {
	
	case '1': //
		{
		$IDOC=8000;
		break;
		}
	case '3': //
		{
		$IDOC=10000;
		break;
		}
	case '4': //medecin generaliste 
		{
		$IDOC=12000;
		break;
		}
	
	case '5': //medecin generaliste 
		{
		$IDOC=4000;
		break;
		}
	case '6'://medecin generaliste principal
		{
		$IDOC=5000;
		break;
		}
	case '7':
		{
		$IDOC=6000;//medecin generaliste chef
		break;
		}
	default:$IDOC=00;break;			
	}
	return $IDOC ;
	}
    //**************************************************//MEDECIN GENERALISTE
	function ISAS($h,$v,$grade) 
	{
	switch($grade)  
    {
    case '5': //medecin generaliste 
		{
		$ISAS=(($this->sdb($h) + $this->iep($h,$v))*45)/100;
		break;
		}
	case '6'://medecin generaliste principal
		{
		$ISAS=(($this->sdb($h) + $this->iep($h,$v))*45)/100;
		break;
		}
	case '7'://medecin generaliste chef
		{
		$ISAS=(($this->sdb($h) + $this->iep($h,$v))*45)/100;
		break;
		}
	case '8'://pharmacien generaliste chef
		{
		$ISAS=(($this->sdb($h) + $this->iep($h,$v))*35)/100;
		break;
		}
	default:$ISAS=00;break;	
	}
	return $ISAS ;
	}	
   
    //**************************************************//MEDECIN SPECIALISTE ACTIVITE COMPLEMENTAIRE
    function IAC($grade,$IACP) // APRES 5ANS DEXERCICE  IL FAUT INTRODUIRE L ANCIENTE DATE NOMINATION   
	{
	
	switch($grade)  
    {
    case '1': //medecin SPECIALISTE 
		{
		if ($IACP==1)
		{
		$IAC=8000;
		}
		else
		{
		$IAC=00;
		}
		break;
		}
	case '3': //medecin SPECIALISTE 
		{
		if ($IACP==1)
		{
		$IAC=8000;
		}
		else
		{
		$IAC=00;
		}
		break;
		}
	case '4': //medecin SPECIALISTE 
		{
		if ($IACP==1)
		{
		$IAC=8000;
		}
		else
		{
		$IAC=00;
		}
		break;
		}	
	default:$IAC=00;break;	
	}
	return $IAC ;
	}
	
	
	
    //**************************************************//MEDECIN SPECIALISTE INDEMNITE SPECIFIQUE pas de fformule 
	function ISP($grade) 
	{
	switch($grade)  
    {
    case '1': //medecin SPECIALISTE $sb,$iep,$pc,
		{
		$ISP=12119.38;
		// $ISP=(($sb+$iep)*$pc)/100; //80%
		break;
		}
	case '3': //medecin SPECIALISTE 
		{
		$ISP=12119.38;
		// $ISP=(($sb+$iep)*$pc)/100; //80%
		break;
		}
	case '4': //medecin SPECIALISTE 
		{
		$ISP=12119.38;
		// $ISP=(($sb+$iep)*$pc)/100; //80%
		break;
		}	
	default:$ISP=00;break;
	}
	return $ISP ;
	}
	//**************************************************//MEDECIN SPECIALISTE encadrement
	function IENC($h,$v,$grade) //
	{
	switch($grade)  
    {
    case '1': //medecin specialiste 
		{
		$IENC=(($this->sdb($h)+$this->iep($h,$v))*35)/100;
		break;
		}
	case '3'://medecin specialiste principal
		{
		$IENC=(($this->sdb($h) + $this->iep($h,$v))*40)/100;
		break;
		}
	case '4'://medecin specialiste chef
		{
		$IENC=(($this->sdb($h) + $this->iep($h,$v))*50)/100;
		break;
		}
	default:$IENC=00;break;	
	}
	return $IENC ;
	}
	//**************************************//
	function PAP($h,$v,$grade) //
	{
	switch($grade)  
    {
    case '1': //medecin specialiste 
		{
		$PAP=(($this->sdb($h) + $this->iep($h,$v))*30)/100;
		break;
		}
	case '3'://medecin specialiste principal
		{
		$PAP=(($this->sdb($h) + $this->iep($h,$v))*30)/100;
		break;
		}
	case '4'://medecin specialiste chef
		{
		$PAP=(($this->sdb($h) + $this->iep($h,$v))*30)/100;
		break;
		}
	case '42'://para medical
		{
		$PAP=(($this->sdb($h) + $this->iep($h,$v))*30)/100;
		break;
		}	
	default:$PAP=00;break;	
	}
	return $PAP ;
	}
	
	function IASS($h,$v,$grade) //
	{
	switch($grade)  
    {
    case '1': //medecin specialiste 
		{
		$IASS=(($this->sdb($h) + $this->iep($h,$v))*30)/100;
		break;
		}
	case '3'://medecin specialiste principal
		{
		$IASS=(($this->sdb($h) + $this->iep($h,$v))*40)/100;
		break;
		}
	case '4'://medecin specialiste chef
		{
		$IASS=(($this->sdb($h) + $this->iep($h,$v))*45)/100;
		break;
		}
	// case '42'://paramedicale
		// {
		// $IASS=(($this->sdb($h) + $this->iep($h,$v))*25)/100;
		// break;
		// }	
	default:$IASS=00;break;	
	}
	return $IASS ;
	}
	
	function IASSP($h,$v,$grade) //
	{
	switch($grade)  
    {
	case '42'://paramedicale
		{
		$IASSP=(($this->sdb($h) + $this->iep($h,$v))*25)/100;
		break;
		}	
	default:$IASSP=00;break;	
	}
	return $IASSP ;
	}
	
	function ITEC($h,$v,$grade) //
	{
	if ($h >= 11 ) {
	switch($grade)  
    {
	case '42'://paramedicale
		{
		$ITEC=(($this->sdb($h) + $this->iep($h,$v))*10)/100;
		break;
		}	
	default:$ITEC=00;break;	
	}
	return $ITEC ;
	
	}
	$ITEC=0;
	return $ITEC ;
	}
	
	function ISASP($h,$v,$grade) //
	{
	if ($h >= 11 ) 
	{
	switch($grade)  
    {
	case '42'://paramedicale
		{
		$ISASP=(($this->sdb($h) + $this->iep($h,$v))*25)/100;
		break;
		}	
	default:$ISASP=00;break;	
	}
	return $ISASP ;
	
	}
	if ($h <= 10 ) 
	{
	switch($grade)  
    {
	case '42'://paramedicale
		{
		$ISASP=(($this->sdb($h) + $this->iep($h,$v))*30)/100;
		break;
		}	
	default:$ISASP=00;break;	
	}
	return $ISASP ;
	
	}
	$ISASP=0;
	return $ISASP ;
	}
	
	//**********allocation familiale ********/// incomplete reste nbr enfant sup a 5 
	function allocation($h,$ENFS,$ALL) 
	{
	if ($ALL=="1") // 1 = alloction familiale  a la charge de employe  0= alloction familiale  a la charge de conjouint
	{
		if ($ENFS <= 5) 
		{
			   if ($this->sdb($h) > 15000)
				{
				$ALLOCF=300*$ENFS;
				}
				else
				{
				$ALLOCF=600*$ENFS;
		        }  
	   }
	   else
	   {
	           if ($this->sdb($h) > 15000)
				{
				$ALLOCF=300*$ENFS;  //5 300 le reste 300
				}
				else
				{
				$ALLOCF=(600*5)+(300*($ENFS-5)); 
		        } 
	   }   
	}
	else
	{
	$ALLOCF =0; 
	}
	return $ALLOCF ;
	}
		
}
$per = new grh();
$per-> mysqlconnect();
?>
