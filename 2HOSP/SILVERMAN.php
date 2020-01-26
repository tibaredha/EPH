<?php
$per ->h(1,500,170,'score de SILVERMAN ');
$per ->f0('./***/***.php','post');
$per ->submit(1110,550,'score de SILVERMAN ');
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
         <td class="ligne" > <span class="noir12"><b>Balancement thoraco-abdominal</b></span></td>
         <td class="ligne" ><span class="noir12"><b>Tirag</b></span></td>  
         <td class="ligne" ><span class="noir12"><b>Entonnoir xyphoidien</b></span></td>
		 <td class="ligne" ><span class="noir12"><b>Batement des ailes du nez</b></span></td> 
		 <td class="ligne" ><span class="noir12"><b>Geignement expiratoire</b></span></td>   
    </tr>
    <tr>
         <td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y1" value="4" onclick="num111=0, calculll()">Absents  (0)<br>
            <input type="radio" name="y1" value="3" onclick="num111=1, calculll()">Thorax immobile  (1)<br>
            <input type="radio" name="y1" value="2" onclick="num111=2, calculll()">Respiration paradoxale (2)<br>

            </span>
		</td>
        <td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y2" value="4" onclick="num222=0, calculll()">Absents  (0)<br>
            <input type="radio" name="y2" value="3" onclick="num222=1, calculll()">intercostal discret  (1)<br>
            <input type="radio" name="y2" value="2" onclick="num222=2, calculll()">intercostal + sus et sous sternal  (2)<br>
            </span>
		</td>
		<td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y3" value="4" onclick="num333=0, calculll()">Absents   (0)<br>
            <input type="radio" name="y3" value="3" onclick="num333=1, calculll()">modéré  (1)<br>
            <input type="radio" name="y3" value="2" onclick="num333=2, calculll()">intense   (2)<br>
            </span>
		</td>
		<td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y4" value="4" onclick="num444=0, calculll()">Absents   (0)<br>
            <input type="radio" name="y4" value="3" onclick="num444=1, calculll()">modéré  (1)<br>
            <input type="radio" name="y4" value="2" onclick="num444=2, calculll()">intense   (2)<br>
            </span>
		</td>
		<td class="ligne2" >
            <span class="noir12">
            <input type="radio" name="y5" value="4" onclick="num555=0, calculll()">Absents  (0)<br>
            <input type="radio" name="y5" value="3" onclick="num555=1, calculll()">perçu au sthétoscope  (1)<br>
            <input type="radio" name="y5" value="2" onclick="num555=2, calculll()">audible continu   (2)<br>
            </span>
		</td>
      </tr>
      <tr>
         <td class="ligne" colspan="5"  dotted #969696;">
            <span class="noir12"><b>score de SILVERMAN = </b> 
            <input type="text" align="center"  name="res"  value="0" size="2">  
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
