<?php
$per ->h(1,200,170,'Score d\'Apgar de Virginia APGAR Médecin anesthésiste américaine');
$per ->f0('./***/***.php','post');
$per ->submit(1110,550,'Score d\'APGAR');
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
   <table  align="center" cellpadding="2" cellspacing="0" bgcolor="#fff7ed" style="border:1px solid  #CCC;">
   <tbody>
   <tr>
         <td class="ligne" > <span class="noir12"><b>Batements cardiaques</b></span></td>
         <td class="ligne" ><span class="noir12"><b>Mouvements respiratoires</b></span></td>  
         <td class="ligne" ><span class="noir12"><b>Tonus musculaire</b></span></td>
		 <td class="ligne" ><span class="noir12"><b>Réactivité à la stimulation</b></span></td> 
		 <td class="ligne" ><span class="noir12"><b>Coloration</b></span></td>   
    </tr>
    <tr>
         <td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y1" value="4" onclick="num11=0, calcull()">Absents  (0)<br>
            <input type="radio" name="y1" value="3" onclick="num11=1, calcull()">INF 100 / minutes  (1)<br>
            <input type="radio" name="y1" value="2" onclick="num11=2, calcull()">SUP 100 / minutes  (2)<br>
            </span>
		</td>
        <td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y2" value="4" onclick="num22=0, calcull()">Absents  (0)<br>
            <input type="radio" name="y2" value="3" onclick="num22=1, calcull()">Lents, irréguliers  (1)<br>
            <input type="radio" name="y2" value="2" onclick="num22=2, calcull()">Réguliers, vigoureux, avec cri  (2)<br>
            </span>
		</td>
		<td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y3" value="4" onclick="num33=0, calcull()">Nul, flasque   (0)<br>
            <input type="radio" name="y3" value="3" onclick="num33=1, calcull()">Faible : lègére flexion des extrémités  (1)<br>
            <input type="radio" name="y3" value="2" onclick="num33=2, calcull()">Fotrt : quadri-flexion, mouvements actifs   (2)<br>
            </span>
		</td>
		<td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y4" value="4" onclick="num44=0, calcull()">Nulle   (0)<br>
            <input type="radio" name="y4" value="3" onclick="num44=1, calcull()">Faible : léger muvement, grimace  (1)<br>
            <input type="radio" name="y4" value="2" onclick="num44=2, calcull()">Vive : cri, toux   (2)<br>
            </span>
		</td>
		<td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y5" value="4" onclick="num55=0, calcull()">Globalement bleue ou pâle   (0)<br>
            <input type="radio" name="y5" value="3" onclick="num55=1, calcull()">Corps rose, extrémités bleues  (1)<br>
            <input type="radio" name="y5" value="2" onclick="num55=2, calcull()">Totalement rose   (2)<br>
            </span>
		</td>
      </tr>
      <tr>
         <td class="ligne" colspan="5"  dotted #969696;">
            <span class="noir12"><b>score d'APGAR = </b> 
            <input type="text" align="center"  name="res"  value="10" size="2">  
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
