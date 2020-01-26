<?php
$per ->h(1,500,170,'Score de GLASGOW');
$per ->f0('./***/***.php','post');
$per ->submit(1110,525,'Score de GLASGOW');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT * FROM tpat where IDP = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(50,$x,'*Nom');                        $per ->txt(430,$x,'NOM',20,$result->NOM);
$per ->label(50,$x+30,'*Prenom');                  $per ->txt(430,$x+30,'PRENOM',20,$result->PRENOM);
$per ->label(50,$x+60,'date');                     $per ->txt(470-40,$x+60,'DATE',20,date("Y-m-d"));
$per ->label(50,$x+90,'heure');                    $per ->txt(470-40,$x+90,'HEUR',20,date("H:i"));

// $per ->hide(595,$x+90,'idp',20,$_GET["idp"]);    
$per ->url(60+790+200,250,"index.php?uc=SMH&idp=".$_GET["idp"]."","GESTION MALADE","2");  
}
$per -> sautligne (11);
?>
   <center>
   <table width="705" align="center" cellpadding="2" cellspacing="0" bgcolor="#fff7ed" style="border:1px solid  #CCC;">
   <tbody>
   <tr>
         <td class="ligne" > <span class="noir12"><b>Ouverture des   yeux</b></span></td>
         <td class="ligne" ><span class="noir12"><b>Réponse   verbale</b></span></td>  
         <td class="ligne" ><span class="noir12"><b>Meilleure  réponse motrice*</b></span></td>        
    </tr>
    <tr>
         <td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="yeux" value="4" onclick="num1=4, calcul()">Spontanée (4)<br>
            <input type="radio" name="yeux" value="3" onclick="num1=3, calcul()">A la demande (3)<br>
            <input type="radio" name="yeux" value="2" onclick="num1=2, calcul()">A la douleur (2)<br>
            <input type="radio" name="yeux" value="1" onclick="num1=1, calcul()">Aucune (1)<br> 
            </span>
		</td>
        <td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="repver" value="5" onclick="num2=5, calcul()">Orientée (5)<br>
            <input type="radio" name="repver" value="4" onclick="num2=4, calcul()">Confuse (4)<br>
            <input type="radio" name="repver" value="3" onclick="num2=3, calcul()">Inappropriée (3)<br>
            <input type="radio" name="repver" value="2" onclick="num2=2, calcul()">Incompréhensible (2)<br>
            <input type="radio" name="repver" value="1" onclick="num2=1, calcul()">Aucune (1)
            </span>
		</td>
         <td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="repmo" value="6" onclick="num3=6, calcul()">Obéit à la demande verbale (6)<br>
            <input type="radio" name="repmo" value="5" onclick="num3=5, calcul()">Orientée à la douleur (5)<br>
            <input type="radio" name="repmo" value="4" onclick="num3=4, calcul()">Evitement non adapté (4)<br> 
            <input type="radio" name="repmo" value="3" onclick="num3=3, calcul()">Décortication (flexion à la douleur)(3)<br>
            <input type="radio" name="repmo" value="2" onclick="num3=2, calcul()">Décérébration (extension à la douleur) (2)<br> 
            <input type="radio" name="repmo" value="1" onclick="num3=1, calcul()">Aucune (1)<br> 
            </span></td>
      </tr>
      <tr>
         <td class="ligne" colspan="3"  dotted #969696;">
            <span class="noir12"><b>Total Glasgow = </b> 
            <input type="text" align="center"  name="res"  value="" size="2">  
            </span>
			</td>
      </tr>
     
   </tbody>
   </table>
   </center>


<?php
$per ->f1();
$per -> sautligne (4);
?>
