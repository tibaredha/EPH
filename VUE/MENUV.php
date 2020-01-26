<?php
echo "<li><a href=\"#\" class=\"parent\"><span>Menu</span></a>"; 
						echo "<ul>";
						echo " <li><a href=\"index.php?uc=searchgrhjs\"><span><img src=\"./IMAGES/"."search.png"."\"  alt=\"1\" />AUTO Cherche per</span></a></li>";
						echo " <li><a href=\"index.php?uc=LGRHP\"><span>Present</span></a></li>";
						echo " <li><a href=\"index.php?uc=LGRHD\"><span>Depart</span></a></li>";
						echo " <li><a href=\"index.php?uc=ENTREECONG\"><span>Retour Conge</span></a></li>"; 
						echo "</ul>";
echo " </li>";	
echo "<li><a href=\"\" class=\"parent\"><span>"." La Date Du Jours  :".date("d-m-Y")."</span></a></li>"; 
echo "<li><a href=\"\" class=\"parent\"><span>"." Vous etes Connecté  :<<".$_SESSION["USER"].">>"."</span></a></li>"; 
echo "<li><a href=\"index.php?uc=DECONNECTION\" class=\"parent\"><span>Deconnection</span></a></li>"; 
?>	



