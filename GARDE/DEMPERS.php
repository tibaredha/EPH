<?php 
$per ->h(1,500,170,'طلـــــب   تبديل مداومة ');
$per ->f0('./garde/DEMPERS1.php','post');
$per ->submit(1110,525,'طلـــــب   تبديل مداومة ');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("field2","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT service.servicear as service,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear and idp = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(925,$x,'*اللقب');                 $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                  $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');             $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');          $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');              $per ->txtar(470-40,$x+60,'GRADE',72,$result->gradear);
$per ->label(928,$x+90,'المدة*');               $per ->combov(720+20,$x+90,'DUREE',array("8h-16h", "16h-8h"));   //$per ->txtar(720+20,$x+90,'DUREE',20,'');
$per ->label(595,$x+90,'تاريخ بداية العطلة*'); $per ->datetime(470-40,$x+90,'DC');  
$per ->label(910,$x+145,'المصلحة');             $per ->txtar(720+20,$x+140,'SERVICE',20,$result->service);
$per ->label(910-260,$x+145,'المستخلف');        $per ->txtar(720-290,$x+140,'REMPLACANT',20,"");


// echo "<div style=\" position:absolute;left:805px;top:520px;\">";
// echo '<select size=1 name="REMPLACANT">'."\n";
    // echo '<option value="-1">----------المستخلف----------</option>'."\n";
	//include('./GRH/connec.php');
	// mysql_query("SET NAMES 'UTF8' ");
	// $result = mysql_query("SELECT * FROM grh WHERE rnvgradear=1" );
    // while($data =  mysql_fetch_array($result))
    // {
    // echo '<option value="'.$data[6].' '.$data[7].'">'.$data['Nomarab']." ".$data['Prenom_Arabe'];
    // echo '</option>'."\n";
    // }
    // echo '</select>'."\n";

// echo "</div>";





$per ->hide(595,$x+90,'idp',20,$_GET["idp"]);    
$per ->url(790+210,250,"index.php?uc=GARDES&idp=".$_GET["idp"]."&Nomlatin=".$result->Nomarab."&Prenom_Latin=".$result->Prenom_Arabe."&Sexe=".$result->Sexe,"تحصيل المداومة ممارس أخصائي مساعد","2");  
}
$per ->f1();
$per -> sautligne (19);
?>  

	

		
	
 