<?php
$per ->h(2,200,170,'ISS - RTS - TRISS (Injury Severity Score - Revised Trauma Score - Trauma Injury Severity Score)');
$per ->f0('./***/***.php','post');
$per ->submit(1110,525,'Score ISS - RTS - TRISS');
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
  
   <p></p><table width="705" align="center" cellpadding="2" cellspacing="0" bgcolor="#fff7ed" style="border:1px solid  #CCC;">
      <tbody><tr class="bleu12">
         <td class="ligne">
            <p><strong>Variables</strong></p>
         </td>
         <td class="ligne">
            <p><strong>Gravité
            </strong></p>
         </td>
         <td class="ligne">
            <p><strong>Points</strong></p>
         </td>
      </tr>
      <tr>
         <td class="ligne2">
            <p><span class="normal"><strong>Tête etcou</strong></span></p>
            
         </td>
         <td class="ligne2">
            <p><span class="normal">
              <select name="head" onchange="CalcISS(form)">
                <option value="0" selected="">
                </option><option value="1">Mineure (1)
                </option><option value="2">Modérée (2)
                </option><option value="3">Sérieuse (3)
                </option><option value="4">Sévère (4)
                </option><option value="5">Critique (5)
                </option><option value="6">Maximale (6)
              </option></select>
            </span></p>
         </td>
         <td class="ligne2">
            <p><span class="normal">
              <input type="text" name="zhead" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td class="ligne2">
            <p><span class="normal"><strong>Face</strong></span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="face" onchange="CalcISS(form)">
                <option value="0" selected="">
                </option><option value="1">Mineure (1)
                </option><option value="2">Modérée (2)
                </option><option value="3">Sérieuse (3)
                </option><option value="4">Sévère (4)
                </option><option value="5">Critique (5)
                </option><option value="6">Maximale (6)
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zface" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
          <td class="ligne2">
            <p><span class="normal"><strong>Thorax</strong></span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="chest" onchange="CalcISS(form)">
                <option value="0" selected="">
                </option><option value="1">Mineure (1)
                </option><option value="2">Modérée (2)
                </option><option value="3">Sérieuse (3)
                </option><option value="4">Sévère (4)
                </option><option value="5">Critique (5)
                </option><option value="6">Maximale (6)
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zchest" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td class="ligne2">
            <p><span class="normal"><strong>Abdomen, pelvis</strong></span></p>
           
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="abdo" onchange="CalcISS(form)">
                <option value="0" selected="">
                </option><option value="1">Mineure (1)
                </option><option value="2">Modérée (2)
                </option><option value="3">Sérieuse (3)
                </option><option value="4">Sévère (4)
                </option><option value="5">Critique (5)
                </option><option value="6">Maximale (6)
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zabdo" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td class="ligne2">
            <p><span class="normal"><strong>Membres, bassin</strong></span></p>
           
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="extre" onchange="CalcISS(form)">
                <option value="0" selected="">
                </option><option value="1">Mineure (1)
                </option><option value="2">Modérée (2)
                </option><option value="3">Sérieuse (3)
                </option><option value="4">Sévère (4)
                </option><option value="5">Critique (5)
                </option><option value="6">Maximale (6)
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zextre" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td class="ligne2">
            <p><span class="normal"><strong>Peau, tissus sous cutané</strong></span></p>
           
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="exter" onchange="CalcISS(form)">
                <option value="0" selected="">
                </option><option value="1">Mineure (1)
                </option><option value="2">Modérée (2)
                </option><option value="3">Sérieuse (3)
                </option><option value="4">Sévère (4)
                </option><option value="5">Critique (5)
                </option><option value="6">Maximale (6)
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zexter" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td class="ligne" colspan="3">
            <center>
              <span class="normal">&nbsp;<br>
              <strong>ISS =
              </strong>
              <input type="text" name="ziss" value="0" size="5"><br><br>
            </span>
            </center>
         </td>
      </tr>
      <tr>
        <td class="ligne2">
            <p><span class="normal"><strong>Fréquence respiratoire (par min)</strong></span></p>
            
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="fr" onchange="CalcFR(form)">
                <option value="0" selected="">
                </option><option value="0">0
                </option><option value="1">1 - 5
                </option><option value="2">6 - 9
                </option><option value="4">10 - 29
                </option><option value="3">&gt; = 30
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zfr" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td class="ligne2">
            <p><span class="normal"><strong>Pression
            artérielle systolique (mmHg)</strong></span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="pas" onchange="CalcPAS(form)">
                <option value="0" selected="">
                </option><option value="0">0
                </option><option value="1">1 - 49
                </option><option value="2">50 - 75
                </option><option value="3">76 - 89
                </option><option value="4">&gt; =  90
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zpas" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td class="ligne2">
            <p><span class="normal"><strong>Score de Glasgow </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="glasgow" onchange="CalcGLASGOW(form)">
                <option value="0" selected="">
                </option><option value="0">3
                </option><option value="1">4 - 5
                </option><option value="2">6 - 8
                </option><option value="3">9 - 11
                </option><option value="4">12 - 15
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zglasgow" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td class="ligne" colspan="3">
            <center>
              <span class="normal"><strong><br>
            RTS</strong> = <input type="text" name="zrts" value="0" size="5"><br><br>
           </span>
            </center>
         </td>
      </tr>
      <tr>
         <td class="ligne2">
            <p><span class="normal"><strong>Age<br>
            </strong>si
            age &lt; 15ans , le modèle "lésion
            fermée" est utilisé quelque soit le
            mécanisme.</span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">
              <select name="age" onchange="CalcAGE(form)">
                <option value="0" selected="">
                </option><option value="-1">&lt; 15 ans
                </option><option value="0">15 à 54 ans
                </option><option value="1">&gt; =  55 ans
              </option></select>
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zage" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
          <td class="ligne">
            <p><span class="normal"><strong><br>  Mortalité prédite <br>
            </span></p>
         </td>
		 <td class="ligne">
            <p><span class="normal"><strong><br>(lésion fermée)<br>
            TRISS </strong>= <input type="text" name="ztriss" value="0" size="11">
            </span></p>
         </td>
         
          <td class="ligne">
            <p><span class="normal"><strong><br> (lésion pénétrante)<br>
            TRISS </strong>= <input type="text" name="ztrisss" value="0" size="11">
            </span></p>
         </td>
      </tr>   
   </tbody>
   </table>
<?php
$per ->f1();
$per -> sautligne (4);
?>
