<script language="javascript">
function Comparaison(a,b) 
{
	if ((a)< (b)) return -1;
	else
	if ((b) == (a)) return 0;
	return 1;
	
	}
/* function comparaison was written by:trauma.org http://www.trauma.org/scores/triss.html*/

var isPaediatric=false

function  CalcISS(form){

form.zhead.value = form.head[form.head.selectedIndex].value
form.zface.value = form.face[form.face.selectedIndex].value
form.zchest.value = form.chest[form.chest.selectedIndex].value
form.zabdo.value = form.abdo[form.abdo.selectedIndex].value
form.zextre.value = form.extre[form.extre.selectedIndex].value
form.zexter.value = form.exter[form.exter.selectedIndex].value

organe = new Array(6);
	
	organe[0] = form.zhead.value;
	organe[1] = form.zface.value;
	organe[2] = form.zchest.value;
	organe[3] = form.zabdo.value;
	organe[4] = form.zextre.value;
	organe[5] = form.zexter.value;

	valeur = organe.sort(Comparaison);
	
	organe3 = Math.pow(valeur[3],2);
	organe4 = Math.pow(valeur[4],2);
	organe5 = Math.pow(valeur[5],2);
	
	
	if (organe5 == 36){iss = 75}
		else{iss = organe3 + organe4 + organe5}
			
form.ziss.value= iss
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)
return z
}


function CalcFR(form) {
form.zfr.value = form.fr[form.fr.selectedIndex].value
form.zrts.value = CalcRTS(form)
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)

}

function CalcPAS(form) {
form.zpas.value = form.pas[form.pas.selectedIndex].value
form.zrts.value = CalcRTS(form)
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)

}

function CalcGLASGOW(form) {
form.zglasgow.value = form.glasgow[form.glasgow.selectedIndex].value
form.zrts.value = CalcRTS(form)
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)


}function CalcRTS(form){
z = eval(form.zfr.value)
z = z *0.2908
t=eval(form.zpas.value)
t = t *0.7326
z = z+t
t = eval(form.zglasgow.value)
t = t *0.9368
z = z+t
z = Math.round(1000 * z)/1000
form.zrts.value = z
return z}




function CalcAGE(form) {
isPaediatric=form.age[form.age.selectedIndex].value==-1
form.zage.value=isPaediatric?0:form.age[form.age.selectedIndex].value
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)
}
/* function CalcAGE was written for usby Jean Marc Rosengard  http://www.jmrosengard.com*/

function CalcTRISS(form){

z = -0.4499
t = eval(form.zrts.value)
t = t*0.8085
z = z + t
t = eval(form.ziss.value)
t = -t*0.0835
z = z + t
t = eval(form.zage.value)
t = -t*1.7430
z = z + t
z = 1/(1 + Math.exp(z))
z = Fmt(100 * z)+ " %"
form.ztriss.value = z
return z
}

function  CalcTRISSS(form)  {
if(isPaediatric) return form.ztrisss.value=CalcTRISS(form)

z =-2.5355
t = eval(form.zrts.value)
t = t*0.9934
z = z + t
t = eval(form.ziss.value)
t = -t*0.0651
z = z+ t
t = eval(form.zage.value)
t = -t*1.1360
z = z + t
z =1/(1 + Math.exp(z))
z = Fmt(100 * z)+ " %"
form.ztrisss.value = z
return z
}
/* function Fmt(x )was written by John C. Pezzullo  http://www.pezzullo.net*/


function Fmt(x) {
var v
if(x>=0) { v=''+(x+0.05)}else{ v=''+(x-0.05) }
return v.substring(0,v.indexOf('.')+2)
}
</script>


<div id="middle2">
<h1>Ressources et utilitaires</h1>
<h2 class="bleu"><a name="haut" id="haut"></a>Scores :</h2>
<h4>ISS - RTS - TRISS (Injury Severity Score - Revised Trauma Score - Trauma Injury Severity Score) </h4>
<br>
<form action="" method="POST">
   <p></p><table width="705" align="center" cellpadding="2" cellspacing="0" bgcolor="#fff7ed" style="border:1px solid  #CCC;">
      <tbody><tr class="bleu12">
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;" height="20">
            <p><strong>Variables</strong></p>
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;" height="20">
            <p><strong>Gravité
            </strong><strong>(</strong><a href="http://www.sfar.org/scores/triss.php#def"><strong>aide</strong></a><strong>)</strong></p>
         </td>
         <td style="border-bottom:1px dotted #969696;" height="20">
            <p><strong>Points</strong></p>
         </td>
      </tr>
      <tr>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal"><strong>Tête et
            cou</strong></span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
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
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal">
              <input type="text" name="zhead" value="0" size="4">
            </span></p>
         </td>
      </tr>
      <tr>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;" nowrap="">
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
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;" nowrap="">
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
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal"><strong>Abdomen,
            pelvis</strong></span></p>
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
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal"><strong>Membres,
            bassin</strong></span></p>
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
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal"><strong>Peau, tissus
            sous cutané</strong></span></p>
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
         <td style="border-bottom:1px dotted #969696;" colspan="3">
            <center>
              <span class="normal">&nbsp;<br>
              <strong>ISS =
              </strong>
              <input type="text" name="ziss" value="0" size="5"><br>
            .</span>
            </center>
         </td>
      </tr>
      <tr>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal"><strong>Fréquence
            respiratoire (par min)</strong></span></p>
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
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
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
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal"><strong>Score de Glasgow
            (</strong><a href="http://www.sfar.org/scores/triss.php#glasgow"><strong>aide</strong></a><strong>)</strong></span></p>
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
         <td style="border-bottom:1px dotted #969696;" colspan="3">
            <center>
              <span class="normal"><strong><br>
            RTS</strong> = <input type="text" name="zrts" value="0" size="5"><br>
            .</span>
            </center>
         </td>
      </tr>
      <tr>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
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
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal"><strong><br>
            Mortalité prédite (lésion
            fermée)<br>
            TRISS </strong>= <input type="text" name="ztriss" value="0" size="11">
            </span></p>
         </td>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;" align="center" valign="middle">
           
              <span class="normal">
            <input type="reset" value="  Effacer " class="btn-rouge"><br>
              </span>
            
         </td>
         <td style="border-bottom:1px dotted #969696;">
            <p><span class="normal"><strong><br>
            Mortalité prédite (lésion
            pénétrante)<br>
            TRISS </strong>= <input type="text" name="ztrisss" value="0" size="11">
            </span></p>
         </td>
      </tr>
      <tr>
         <td style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;">
            <p><span class="normal">ISS =
            Somme ((trois régions les plus
            atteintes)<sup>2</sup>)<br>
            ISS = 75 pour tout patient ayant une lésion
            cotée AIS 6.</span></p>
         </td>
         <td style="border-right:1px dotted #969696;" rowspan="2">
            <p><span class="normal">TRISS
            (lésion fermée): Logit =-0.4499 +
            RTS*0.8085 + ISS*-0.0835 + (age.points)*-1.7430<br>
            Mortalité prédite = 1/(1 +
            e<sup>Logit</sup>)</span></p>
         </td>
         <td rowspan="2">
            <p><span class="normal">TRISS
            (lésion pénétrante): Logit =-2.5355
            + RTS*0.9934 + ISS*-0.0651 + (age.points)*-1.1360<br>
            Mortalité prédite = 1/(1 +
            e<sup>Logit</sup>)</span></p>
         </td>
      </tr>
      <tr>
         <td style="border-right:1px dotted #969696;">
            <p><span class="normal">RTS =
            Somme ((points fréq. resp.)*0.2908; (points
            P.A.S.)*0.7326; ( points Glasgow)*0.9368)</span></p>
         </td>
      </tr>
   </tbody></table>
    
</form>




<a name="def"></a>





<p align="center" class="gris12-2"><a href="http://www.sfar.org/scores/triss.php#haut"><strong>Retour
TRISS</strong></a></p>





  

</div>