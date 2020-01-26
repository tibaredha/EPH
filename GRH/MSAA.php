<?php
$per ->h(1,500,170,'تعديل الضمان الاجتماعي  ');
$per ->f0('index.php?uc=MSAA1','post');
$per ->submit(1110,525,'تعديل  ');
$per ->fieldset("field1","***");
$per ->fieldset("field5","***");
$per-> mysqlconnect();  
$idp= $_GET["idp"] ; 
$sql = "SELECT * FROM grh WHERE 	idp = ".$idp ;
$requete = mysql_query( $sql) ;  
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(925,$x,'*اللقب');                        $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                         $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');                    $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');                 $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(930,$x+60,'الرتبة');                     $per ->txtar(470-40,$x+60,'GRADE',72,nbrtostring("grh","grade","idg",$result->rnvgradear,"gradear"));
$x3=340;
$per ->label(873,$x3,'*الحالة العائلية');              $per ->combo(740,$x3,'SF','grh','sfamiliale','الحالة العائلية','data','0','1'); 
$per ->label(640,$x3,'*عدد الاولاد');                   $per ->nbr(430,$x3,'NBRE','10',0,10); 
$per ->label(340-100,$x,'منح عائلية');             
$per ->label(385-100,$x+30,'نعم');                    $per ->radioed(360-100,$x+30,"ALLF","1");    
$per ->label(395-100,$x+60,' لا ');                    $per ->radio(360-100,$x+60,"ALLF","0");  
$per ->label(340-200,$x,'الزوج');             
$per ->label(385-200,$x+30,'نعم');                    $per ->radioed(360-200,$x+30,"CONJOINT","1");    
$per ->label(395-200,$x+60,' لا ');                    $per ->radio(360-200,$x+60,"CONJOINT","0");  
$x1=280;
$per ->fieldset("field5","****");
$per ->label(1140,$x,'* NSS رقم الضمان الاجتماعيى ');  $per ->txt(1005,$x,'NSS',15,'');
$per ->label(1238,$x1,'* CCP رقم ح/ب');               $per ->txt(1005,$x1,'CCP',15,'');
$per ->hide(595,$x+90,'idp',20,$_GET["idp"]);    
$per ->url(810+210,300,"index.php?uc=SAA","القائمة الاسمية ","2");  
}
$per ->f1();
$per -> sautligne (19);	
?>    
