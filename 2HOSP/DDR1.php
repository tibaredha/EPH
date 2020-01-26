<?PHP
// $per ->h(1,500,170,'عطلة مرضية');
$brush_price = 5; 
echo "</br>";echo "</br>";
// echo "<table border=\"1\" align=\"center\">";
// echo "<tr><th>Quantity</th>";
// echo "<th>Price</th></tr>";
for ( $counter = 1; $counter <= 365; $counter += 7) {
	// echo "<tr><td>";
	// echo $counter;
	// echo "</td><td>";
	// echo $brush_price * $counter;
	// echo "</td></tr>";
}
echo "</table>";

$nbJours=314;

for ($i=7;$i<=$nbJours;$i+=7)
{

$per ->label(250,200+$i*5,"Fin ".(($i/7)-1)." SA : ".$per->dateUS2FR($per->datePlus($_POST['DATE'],$i-7)));    
}
$per -> sautligne (80);
   
?>
<!-- 
<form name="form">
  <div align="center"> 
    <table width="1000" border="0" align="center" cellspacing="0">
      <tbody>
	  <tr> 
        
        <td bgcolor="#FFCC00" width="60%"> 
          <div align="center">
            <table width="94%" border="0" cellspacing="0" align="center" bgcolor="#FFCC00">
              <tbody>
			  <tr> 
                
              </tr>
              <tr bgcolor="#FF9900"> 
                <td colspan="7"> 
                  <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b>Introduisez  la date présumée du début de grossesse</b></font></div> 
                </td>
              </tr>
              <tr> 
                <td width="7%"> 
                  <div align="right"><font face="Times New Roman, Times, serif" size="2" color="#000000">&nbsp;Jour  :</font></div> 
                </td>
                <td width="16%"> 
                  <div align="left"> <font face="Times New Roman, Times, serif" size="2" color="#000000"> 
                    <input size="2" name="njour" VALUE="00">
                    </font></div>
                </td>
                <td width="8%"> 
                  <div align="right"><font face="Times New Roman, Times, serif" size="2" color="#000000">Mois   :</font></div>
                  
                </td>
                <td width="20%"> 
                  <div align="left"> <font face="Times New Roman, Times, serif" size="2" color="#000000"> 
                    <input size="2" name="nmois" VALUE="00" >
                    </font></div>
                </td>
                <td width="11%"> 
                  <div align="center"><font face="Times New Roman, Times, serif" size="2" color="#000000">Année<br>
                    <font size="1">AAAA</font></font></div>
                </td>
                <td width="8%"> 
                  <div align="left"> <font face="Times New Roman, Times, serif" size="2" color="#000000"> 
                    <input size="4" name="nannee" VALUE="0000" >
                    </font></div>
                </td>
                <td width="30%" bgcolor="#FEE1A5"> 
                  <div align="center"><font face="Times New Roman, Times, serif" size="2" color="#000000"> C'est un  
                    <input size="8" name="jsemaine">
                    </font></div>
                </td>
              </tr>
              <tr> 
                <td width="7%"><font color="#000000"></font></td>
                <td width="16%"> 
                  <div align="center"> <font color="#000000"> 
                    <input onclick="calculjourjulien(form) ; calculjourjulienT9(form) ; calculjourjulienT8(form) ; calculjourjulienT7(form) ; calculjourjulienT6(form) ; calculjourjulienT5(form) ; calculjourjulienT4(form) ; calculjourjulienT3(form) ; calculjourjulienT2(form) ; calculjourjulienT1(form) ; conversionjourjulien(this.form) ; conversionjourjulien2(this.form) ; conversionjourjulien3(this.form) ; conversionjourjulien4(this.form) ; conversionjourjulien5(this.form) ; conversionjourjulien6(this.form) ; conversionjourjulien7(this.form) ; conversionjourjulien8(this.form) ; conversionjourjulien9(this.form) ; conversionjourjulien10(this.form) ; conversionjourjulien11(this.form) ; conversionjourjulien12(this.form) ; conversionjourjulien13(this.form) ; conversionjourjulien14(this.form) ; conversionjourjulien15(this.form) ; conversionjourjulien16(this.form) ; conversionjourjulien17(this.form) ; conversionjourjulien18(this.form) ; conversionjourjulien19(this.form); conversionjourjulien20(this.form) ; conversionjourjulien21(this.form) ; conversionjourjulien22(this.form) ; conversionjourjulien23(this.form) ; conversionjourjulien24(this.form) ; conversionjourjulien25(this.form) ; conversionjourjulien26(this.form) ; conversionjourjulien27(this.form) ; conversionjourjulien28(this.form) ; conversionjourjulien29(this.form) ; conversionjourjulien30(this.form) ; conversionjourjulien31(this.form) ; conversionjourjulien32(this.form) ; conversionjourjulien33(this.form) ; conversionjourjulien34(this.form) ; conversionjourjulien35(this.form) ; conversionjourjulien36(this.form) ; conversionjourjulien37(this.form) ; conversionjourjulien38(this.form) ; conversionjourjulien39(this.form) ; conversionjourjulienT9(this.form) ; conversionjourjulienT8(this.form) ; conversionjourjulienT7(this.form) ; conversionjourjulienT6(this.form) ; conversionjourjulienT5(this.form) ; conversionjourjulienT4(this.form) ; conversionjourjulienT3(this.form) ; conversionjourjulienT2(this.form) ; conversionjourjulienT1(this.form) ; conversionjourjulienT9conge1(form) ; conversionjourjulienT9conge1p(form) ; conversionjourjulienT9conge2(form) ; conversionjourjulienT9conge2p(form) ; conversionjourjulienT9conge3(form) ; conversionjourjulienT9conge3p(form) ; conversionjourjulienT9conge4(form) ; conversionjourjulienT9conge4p(form)" type="button" value=" Calculer " name="button">
                    </font></div>
                </td>
                <td width="8%"><font color="#000000"></font></td>
                <td width="20%"><b> <font color="#000000"> 
                  <input onclick="Newdate(this.form)" type="button" value="Nouvelle date" name="button2">
                  </font></b></td>
                <td width="11%"><font color="#000000">
                  </font></td>
                <td width="8%"><b><font color="#000000">&nbsp; </font></b></td>
                <td width="30%" bgcolor="#FEE1A5"> 
                  <div align="right"><font size="2" color="#000000">Laissez cette case vide</font></div>
                    
                </td>
              </tr>
            </tbody>
			</table>
          </div>
        </td>
        <td bgcolor="#FFCC00" width="18%" align="center" valign="middle"> 
          
        </td>
      </tr>
      <tr bgcolor="#6699FF"> 
        <td colspan="3"> 
          <div align="center"><font face="Times New Roman, Times, serif" size="3" color="#FFFFFF"><b><br>
            <font color="#000000">La date prévue d'accouchement est le :</font><br>
            
            </b> </font><font face="Times New Roman, Times, serif" size="2" color="#990000"> 
            <input size="8" name="jsemaineterme">
            </font><font face="Times New Roman, Times, serif" color="#FFFFFF"><b> 
            <input size="2" name="njourT92">
            <input size="10" name="nmoisT92">
            <input size="4" name="nanneeT92">
            </b></font><font face="Times New Roman, Times, serif" size="2" color="#FFFFFF"><br>
            <br>
            </font>
			</div>
        </td>
      </tr>
    </tbody>
	</table>
  </div>
  
  
  <div align="center"></div>
  
  
  
  
  
  
  
  
  
  <table width="1000" border="0" cellspacing="0" align="center">
    <tbody><tr bgcolor="#99CCFF"> 
      <td colspan="15"> 
        <div align="center"><b><font color="#000066"><a name="sa"></a>L'âge  de grossesse en semaines d'aménorrhée <font color="#000000">(<font color="#CC0000">SA</font>)</font>  révolues </font></b></div>
      </td>
    </tr>
    <tr> 
      <td colspan="4" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b>Premier trimestre</b></font></div>
          
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td colspan="4" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b>Deuxième  trimestre</b></font></div>
         
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td colspan="4" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b>Troisième  trimestre</b></font></div>
         
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#CC0000" face="Times New Roman, Times, serif"><b>SA</b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Jour  </font><font size="2" face="Times New Roman, Times, serif"> à
          
          0h0</font><font color="#000000" face="Times New Roman, Times, serif"> 
          </font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Mois 
          </font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Année</font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#FFFFFF"><font color="#0000FF"><font face="Courier New, Courier, mono"><font face="Times New Roman, Times, serif"><font color="#000000"></font></font></font></font></font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif"><font color="#CC0000"><b>SA</b></font></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Jour 
          </font><font size="2" face="Times New Roman, Times, serif"> à 
          0h0</font><font color="#000000" face="Times New Roman, Times, serif"> 
          </font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Mois 
          </font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Année</font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#FFFFFF"><font color="#0000FF"><font face="Courier New, Courier, mono"><font face="Times New Roman, Times, serif"><font color="#000000"></font></font></font></font></font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif"><font color="#CC0000"><b>SA</b></font></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Jour 
          </font><font size="2" face="Times New Roman, Times, serif"> à 
          0h0</font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Mois 
          </font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">Année</font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif" color="#000000"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin03<sup>e </sup>SA</font></div></td> 
      <td width="5%" bgcolor="#99CCFF"><div align="center"><font face="Times New Roman, Times, serif"><b><input size="20" name="njour2" value="<?PHP ECHO $per->datePlus($_POST['DATE'],7); ?>"></b></font></div>  </td>
        
          


          
    
      <td width="7%" bgcolor="#99CCFF"> 
        
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Courier New, Courier, mono"><font face="Times New Roman, Times, serif"></font></font></div>
      </td>
      <td width="9%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          16<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour15">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois15">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee15">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">de</font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          29<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour28">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois28">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee28">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          04<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour3">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois3">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee3">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Courier New, Courier, mono"><font face="Times New Roman, Times, serif"></font></font></div>
      </td>
      <td width="9%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          17<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour16">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois16">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee16">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">trisomie</font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          30<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour29">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois29">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee29">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          05<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour4">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois4">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee4">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          18<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour17">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois17">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee17">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">21</font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          31<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour30">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois30">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee30">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          06<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour5">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois5">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee5">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          19<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour18">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois18">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee18">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Courier New, Courier, mono"><font face="Times New Roman, Times, serif"></font></font> 
        </div>
      </td>
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          32<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour31">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois31">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee31">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">3<sup>e</sup></font></div>
      </td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          07<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour6">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois6">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee6">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          20<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour19">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois19">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee19">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          33<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour32">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois32">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee32">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">écho-</font></div>
      </td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          08<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour7">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois7">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee7">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          21<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour20">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois20">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee20">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          34<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour33">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois33">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee33">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">graphie</font></div>
      </td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          09<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour8">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois8">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee8">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          22<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour21">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois21">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee21">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">2<sup>e</sup></font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          35<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour34">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois34">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee34">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          10<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour9">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois9">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee9">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          23<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour22">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois22">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee22">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">écho-</font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          36<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour35">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois35">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee35">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          11<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour10">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois10">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee10">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font color="#000000" size="2" face="Times New Roman, Times, serif">1</font><font size="2" face="Times New Roman, Times, serif"><sup>ere</sup> 
          </font></div>
      </td>
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          24<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour23">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois23">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee23">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">graphie</font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          37<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour36">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois36">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee36">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          12<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour11">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois11">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee11">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font color="#000000" size="2" face="Times New Roman, Times, serif">écho-</font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          25<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour24">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois24">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee24">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          38<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour37">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois37">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee37">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#FFCCCC"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          13<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour12">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois12">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCCCC"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee12">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCCCC"> 
        <div align="center"><font color="#000000" size="2" face="Times New Roman, Times, serif">graphie</font><font size="2" face="Times New Roman, Times, serif"></font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          26<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour25">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois25">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee25">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          39<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour38">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois38">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee38">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          14<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour13">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois13">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee13">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font color="#000000" size="2" face="Times New Roman, Times, serif">Dépistage</font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 
          27<sup>e</sup></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour26">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois26">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee26">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 40<sup>e</sup></font></div>
          
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour39">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois39">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee39">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr> 
      <td width="9%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin 15<sup>e</sup></font></div>
          
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour14">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois14">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#FFCC99"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee14">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#FFCC99"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">sérique</font></div>
      </td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin  28<sup>e</sup></font></div>
         
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour27">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois27">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee27">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
      <td width="9%" bgcolor="#99CCFF"> 
        <div align="center"><font size="2" face="Times New Roman, Times, serif">Fin  41<sup>e</sup></font></div>
         
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="2" name="njour40">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="10" name="nmois40">
          </b></font></div>
      </td>
      <td width="5%" bgcolor="#99CCFF"> 
        <div align="center"><font face="Times New Roman, Times, serif"><b> 
          <input size="4" name="nannee40">
          </b></font></div>
      </td>
      <td width="7%" bgcolor="#99CCFF"><font face="Times New Roman, Times, serif"></font></td>
    </tr>
    <tr bgcolor="#99CCFF"> 
      <td width="9%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="9%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="9%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="7%">&nbsp;</td>
    </tr>
  </tbody></table>
  
  
  
  
  
  
  <table width="1000" border="0" align="center" bgcolor="#6699FF" cellspacing="0">
    <tbody><tr bgcolor="#6699FF"> 
      <td colspan="15"> 
        <div align="center"><b><font color="#000000">L'âge de grossesse  en mois de gestation révolus</font></b></div>
         
      </td>
    </tr>
    <tr bgcolor="#6699FF"> 
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin 
          1<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT1">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT1">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT1">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000" face="Times New Roman, Times, serif">&nbsp;&nbsp;</font></div>
      </td>
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin 
          4<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT4">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT4">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT4">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000">&nbsp;&nbsp;</font></div>
      </td>
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin7<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT7">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT7">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT7">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000">&nbsp;</font></div>
      </td>
    </tr>
    <tr bgcolor="#6699FF"> 
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin 
          2<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT2">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT2">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT2">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000">&nbsp;</font></div>
      </td>
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin 
          5<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT5">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT5">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT5">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000">&nbsp;&nbsp;&nbsp;</font></div>
      </td>
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin 
          8<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT8">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT8">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT8">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000">&nbsp;</font></div>
      </td>
    </tr>
    <tr bgcolor="#6699FF"> 
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin 
          3<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT3">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT3">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT3">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000">&nbsp;</font></div>
      </td>
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin 
          6<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT6">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT6">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT6">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000">&nbsp;</font></div>
      </td>
      <td width="9%"> 
        <div align="center"><font size="2" color="#000000" face="Times New Roman, Times, serif">Fin 
          9<sup>e</sup></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="2" name="njourT9">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="10" name="nmoisT9">
          </b></font></div>
      </td>
      <td width="5%"> 
        <div align="center"><font face="Times New Roman, Times, serif" color="#000000"><b> 
          <input size="4" name="nanneeT9">
          </b></font></div>
      </td>
      <td width="7%"> 
        <div align="center"><font color="#000000">&nbsp;</font></div>
      </td>
    </tr>
    <tr bgcolor="#6699FF"> 
      <td colspan="15"> 
        <div align="right"><font face="Times New Roman, Times, serif" size="2" color="#000000">
         </font><font color="#000000">&nbsp;&nbsp;</font></div>
      </td>
    </tr>
  </tbody></table>
  <br>
  <div align="center"><font face="Times New Roman, Times, serif" color="#FFFFFF"><b> 
    </b></font> 
   
    <br>
  
  </div>
</form>

-->