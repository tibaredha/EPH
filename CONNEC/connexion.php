<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Connection</title>
    </head>
    <body>
    	<div class="header">
        	<H3>ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA WILAYA DE DJELFA</H3>
                   <H3>GESTION DES RESSOURCES HUMAINES </H3>
	    </div>
<?php

if(isset($_SESSION['username'])) //deconnection  
{
unset($_SESSION['username'], $_SESSION['userid']);
echo"<div class=\"message\">Vous avez bien été déconnecté.<br />";
echo"<a href=\"$url_home\">Accueil</a></div>";
}
else                             // connection
{
	$ousername = '';
	//On verifie si le formulaire a ete envoye
	if(isset($_POST['username'], $_POST['password']))
	{
		//On echappe les variables pour pouvoir les mettre dans des requetes SQL
		if(get_magic_quotes_gpc())
		{
			$ousername = stripslashes($_POST['username']);
			$username  = mysql_real_escape_string(stripslashes($_POST['username']));
			$password  = stripslashes($_POST['password']);
		}
		else
		{
			$username = mysql_real_escape_string($_POST['username']);
			$password = $_POST['password'];
		}
		//On recupere le mot de passe de l utilisateur
		$req = mysql_query('select password,id from users where username="'.$username.'"');
		$dn = mysql_fetch_array($req);
		//On le compare a celui quil a entre et on verifie si le membre existe
		if($dn['password']==$password and mysql_num_rows($req)>0)
		{
			//Si le mot de passe es bon, on ne vas pas afficher le formulaire
			$form = false;
			//On enregistre son pseudo dans la session username et son identifiant dans la session userid
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['userid']   = $dn['id'];			
            echo"<div class=\"message\">Vous avez bien &eacute;t&eacute; connect&eacute;. Vous pouvez acc&eacute;der &agrave; votre espace membre.<br />";
            echo"<a href=\"$url_home\">Accueil</a></div>";
		}
		else
		{
			//Sinon, on indique que la combinaison nest pas bonne
			$form = true;
			$message = 'La combinaison que vous avez entr&eacute; n\'est pas bonne.';
		}
	}
	else
	{
		$form = true;
	}
	
	
	if($form)
	{
		//On affiche un message sil y a lieu
	   if(isset($message))
	   {
		echo '<div class="message">'.$message.'</div>';
	   }
	    //On affiche le formulaire
		echo"<div class=\"content\">";
		echo" <form action=\"connexion.php\" method=\"post\">";	
		echo" Veuillez entrer vos identifiants pour vous connecter:<br />";
		echo"<div class=\"center\">";	
		echo"<label for=\"username\">Nom d'utilisateur</label>";
		echo"<select name=\"username\" id=\"username\">";	
		echo"<option>__________________</option>";
		echo"<option>tibaredha</option>";	
		echo"<option>amranemimi</option>";
		echo"<option>BENYAHIA</option>";	
		echo"<option>AMINE</option>";
		echo" </select>";	
		echo"<br/><br />";
		echo"<label for=\"password\">Mot de passe</label><input type=\"password\" name=\"password\" id=\"password\" /><br /><br />";	
		echo"<input type=\"submit\" value=\"Connection\" />";
		echo"</div>";	
		echo"</form>";	
		echo"</div>";	
    }
}
echo"<div class=\"foot\"><a href=\" $url_home\">Retour &agrave; l'accueil</a> - </div>";	
echo"</body>";	
echo"</html>";	
?>
		
	
