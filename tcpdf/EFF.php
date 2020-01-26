<?php
//classe tcpdf 
class EFF extends TCPDF
{
    function nbrgrade($idgrade)
	{
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query = "SELECT  grh.cessation,grh.rnvgradear,grh.idp as idp,grade.gradear as gradear,grade.A2011 as A2011,grade.A2012 as A2012,grade.A2013 as A2013 FROM grh,grade where  grade.idg=grh.rnvgradear and rnvgradear='$idgrade' and grh.cessation !='y'  order by gradear";
	$resultat=mysql_query($query);
	$totalmbr1=mysql_num_rows($resultat);
	$A2013=mysql_num_rows($resultat);
	return $totalmbr1;
	}
	function A2013($idgrade) 
	{
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query = "SELECT * FROM GRADE  WHERE idg=$idgrade   ";
	IF($resultat=mysql_query($query))
	{
	$result = mysql_fetch_array( $resultat ) ;
	$A2013=$result["A2013"];
	return $A2013;
	}
	else
	{
	return $A2013="0";
	}
	}
	function titre($h)
    {
	$this->SetXY(05,$h); 	  
	$this->cell(35,05,"رقم الترتيب",1,0,'C',1,0);
	$this->SetXY(40,$h); 	  
	$this->cell(105,05,"الرتبة و الإختصاص ",1,0,'C',1,0);
	$this->SetXY(145,$h); 	  
	$this->cell(20,05,"المالي ",1,0,'C',1,0);
	$this->SetXY(165,$h); 	  
	$this->cell(20,05,"الحقيقي  ",1,0,'C',1,0);
	$this->SetXY(185,$h); 	  
	$this->cell(20,05,"الفارق ",1,0,'C',1,0);
    }
	function soustitre($h,$st)
    {
	$this->SetXY(5,$h); 	  
    $this->cell(200,05,$st,1,0,'R',0);	
    }
    function entete($h)
    {
	$this->SetXY(05,$h); 	  
	$this->cell(35,05,"رقم الترتيب",1,0,'C',1,0);
	$this->SetXY(40,$h); 	  
	$this->cell(105,05,"01"."                                                            مناصب العمل ",1,0,'R',1,0);
	$this->SetXY(145,$h); 	  
	$this->cell(20,05,"المالي ",1,0,'C',1,0);
	$this->SetXY(165,$h); 	  
	$this->cell(20,05,"الحقيقي  ",1,0,'C',1,0);
	$this->SetXY(185,$h); 	  
	$this->cell(20,05,"الفارق ",1,0,'C',1,0);
    }
    // LIGNE NORMALE 
    function lignen($h,$no,$gr,$f,$r)
    {
	$this->SetXY(05,$h); 	  
	$this->cell(35,05,$no,1,0,'C',0);
	$this->SetXY(40,$h); 	  
	$this->cell(105,05,$gr,1,0,'R',0);
	$this->SetXY(145,$h); 	  
	$this->cell(20,05,$f,1,0,'C',0);
	$this->SetXY(165,$h); 	  
	$this->cell(20,05,$r,1,0,'C',0);
	$this->SetXY(185,$h); 	  
	$this->cell(20,05,$f-$r,1,0,'C',0);
    }
	function lignep($h,$no,$gr,$f,$r)
    {
	$this->SetXY(05,$h); 	  
	$this->cell(35,05,$no,1,0,'C',0);
	$this->SetXY(40,$h); 	  
	$this->cell(105,05,$gr,1,0,'C',1,0);
	$this->SetXY(145,$h); 	  
	$this->cell(20,05,$f,1,0,'C',1,0);
	$this->SetXY(165,$h); 	  
	$this->cell(20,05,$r,1,0,'C',1,0);
	$this->SetXY(185,$h); 	  
	$this->cell(20,05,$f-$r,1,0,'C',1,0);
    }
	function soustotal($h)
    {
	$this->SetXY(05,$h); 	  
	$this->cell(140,05,"المجموع الفرعي  ",1,0,'L',1,0);
	$this->SetXY(145,$h); 	  
	$this->cell(20,05," ",1,0,'C',1,0);
	$this->SetXY(165,$h); 	  
	$this->cell(20,05," ",1,0,'C',1,0);
	$this->SetXY(185,$h); 	  
	$this->cell(20,05," ",1,0,'C',1,0);
    }
	function total($h,$hh)
    {
	$this->SetXY(05,$h); 	  
	$this->cell(140,05,$hh,1,0,'L',1,0);
	$this->SetXY(145,$h); 	  
	$this->cell(20,05," ",1,0,'C',1,0);
	$this->SetXY(165,$h); 	  
	$this->cell(20,05," ",1,0,'C',1,0);
	$this->SetXY(185,$h); 	  
	$this->cell(20,05," ",1,0,'C',1,0);
    }
    
}	