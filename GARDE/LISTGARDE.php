<?php
$per-> mysqlconnect();
$per ->h(1,500,170,'برنامج المداومة الطبية');
$per -> sautligne (3);
$per ->f0('./garde/sur.php','post');
$per ->submit(1000,200,'برنامج المداومة الطبية');
echo"<table bgcolor=\"white\"  bordercolor=\"green\" align=\"center\" border=\"1\">";
echo"<thead>";
echo"<tr>";
echo"<th>DATE</th>";
echo"<th colspan=\"2\" >08H-16H</th>";
echo"<th colspan=\"2\" >16H-08H</th> ";
echo" </tr>";
echo"</thead> ";
echo" <tbody>";   
$mois =date("m")+1;
$an = date("Y");
$debut = mktime(0,0,0,$mois,1,$an);    
$premJour = date("w" , $debut );
$nbJours = date("t" , $debut);    // nb de jours dans le mois
$numero_semaine=date("W");
$jour_semaine=date("w",mktime(0,0,0,$mois,1,$an)); // Jour de la semaine au format numérique 0 (pour dimanche) à 6 (pour samedi)   
$per ->hide(595,90,'mois',20,$mois); 
$per ->hide(595,90,'an',20,$an);
   for ($i=1;$i<=$nbJours;$i++)
   {
    echo '<tr valign="baseline">';
	 echo '<td bgcolor=""><input STYLE="Text-ALIGN:center" type="text" name="DATE[]" value="'.$i."-".$mois."-".$an. '" size="10" /></td>';
	 echo '<td bgcolor="">';
	 echo '<select size=1 name="'.$i.'M1'.'">'."\n";
     $per ->medecinliste();
	 echo '</td>';
	 echo '<td bgcolor="">';
	 echo '<select size=1 name="'.$i.'M2'.'">'.'"\n"';
     $per ->medecinliste();
	 echo '</td>';
	 echo '<td bgcolor="">';
	 echo '<select size=1 name="'.$i.'M3'.'">'.'"\n"';
     $per ->medecinliste();
	 echo '</td>';
	 echo '<td bgcolor="">';
	 echo '<select size=1 name="'.$i.'M4'.'">'."\n";
     $per ->medecinliste();
	 echo '</td>';
   }
echo "</tbody>";  
echo"</table>";
echo"";  
$per ->f1();
$per -> sautligne (2);
 ?>



