<?php
//autocompletion  necessite 03 fichiers
//01 js jquery.ui.autocomplete.js
//02 css jquery.autocomplete.css
//03 php auto
//04 php Tapez une lettre : <input type="text" id="langages" />

 



if(isset($_GET['q'])) 
{
    $q = htmlentities($_GET['q']); // protection
    try 
	{
        $bdd = new PDO('mysql:host=localhost;dbname=grh','root','');
    } 
	catch(Exception $e) 
	{
        exit('Impossible de se connecter à la base de données.');
    } 
	
    $requete = "SELECT * FROM grh WHERE Nomlatin LIKE '". $q ."%' ";
    $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) 
	{
	
        echo $donnees['Nomlatin'] ."\n";
    }
}
?>