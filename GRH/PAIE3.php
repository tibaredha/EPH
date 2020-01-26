<?php
$per ->h(2,500,180,'الراتب الشهري');
$per ->f0('./GRH/PAIEX.php','post');
$per ->submit(1110,525,'FICHE DE PAIE');
$per ->fieldset("field1","***");
// $per ->fieldset("field11","***");
$per ->fieldset("field5","***");
$per-> mysqlconnect();
$id  = $_GET["idp"] ; 
$sql = "SELECT  * FROM grh where idp = ".$id;
$requete = mysql_query( $sql ) ; 
if( $result = mysql_fetch_object( $requete ) )
{
$x=250;
$per ->label(925,$x,'*اللقب');                             $per ->txtar(720+20,$x,'NOM',20,$result->Nomarab);
$per ->label(665,$x,'*الاسم');                              $per ->txtar(470-40,$x,'PRENOM',20,$result->Prenom_Arabe);
$per ->label(925,$x+30,'التاريخ');                         $per ->txtar(720+20,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(630,$x+30,'ساعة الطلب');                      $per ->txtar(470-40,$x+30,'HEUR',20,date("H:i"));
$per ->label(340,$x+30,'تاريخ الميلاد');                     $per ->txtar(210,$x+30,'Date_Naissance',10,$result->Date_Naissance );

$per ->label(930,$x+60,'الرتبة');                          $per ->txtar(470-40,$x+60,'GRADE',72,nbrtostring("grh","grade","idg",$result->rnvgradear,"gradear") );
$per ->label(928,$x+90,'الصنف');                           $per ->txtar(720+20,$x+90,'CATEGORIE',20,$result->CATEGORIE );
$per ->label(595,$x+90,'الدرجة');                          $per ->txtar(470-40,$x+90,'ECHELON',20,$result->ECHELON );  
$per ->label(320,$x+90,'المنصب العالي');                     $per ->txtar(30,$x+90,'PS',40,$per->nbrtostring('grh','postesup','idpostesup',$result->POSTESUP,'postesupar') );  //
$per ->label(330,$x+60,'الحالة العائلية');                  $per ->txtar(210,$x+60,'Situation_familliale',10,$result->Situation_familliale );
$per ->label(130,$x+60,'عدد الاولاد');                       $per ->txtar(30,$x+60,'ENFS',8,$result->NBRENF );  //
$per ->label(285,$x,'رقم الحساب الجاري');                    $per ->txtar(30,$x,'NCCP',30,$result->NCCP );  //
$per ->label(130,$x+30,'عدد الايام');                       $per ->txtar(30,$x+30,'NBRJ',8,"30" );  //
$per ->hide(595,$x+90,'NSS',20,$result->NSS); 
$per ->hide(595,$x+90,'GRADENBR',20,$result->rnvgradear);  
//************************************************************************************************************//
$per ->label(50,$x+140,'salaire de base');                        $per ->label(880,$x+140,'الاجر القاعدى');                   $per ->txtar(470-40,$x+140,'SB',20,$per->sdb($result->CATEGORIE)); 
$per ->label(50,$x+170,'indemnite experience professionel');      $per ->label(830,$x+170,'تعويض الخبرة المهنية');              $per ->txtar(470-40,$x+170,'IEP',20,$per->iep($result->CATEGORIE,$result->ECHELON));  
//*************************************************************************************************************//
$per ->label(50,$x+170+30,'indemnite forfetaire compensatrice');  $per ->label(800,$x+170+30,'المنحة الخزافية التعويضية');     $per ->txtar(470-40,$x+170+30,'IFC',20,$per ->ifc($result->CATEGORIE)); 
$per ->label(50,$x+170+60,'زيادة استدلالية منصب عالى');      $per ->label(790,$x+170+60,'زيادة استدلالية منصب عالى');            $per ->txtar(470-40,$x+170+60,'BIPS',20,$per->BIPS($result->POSTESUP));  
$per ->label(50,$x+170+90,'التعويض عن العدوى');            $per ->label(835,$x+170+90,'التعويض عن العدوى');                  $per ->txtar(490,$x+170+90,'CONT1',10,$result->CONTAG); //$per ->combov(470-40,$x+170+90,'CONT1',array("2000","2500", "3000","4000","5800","7200"));
$per ->label(50,$x+170+120,'منحة الانتفاع');                $per ->label(885,$x+170+120,'منحة الانتفاع');                      $per ->txtar(470-40,$x+170+120,'INT',20,$per->INTE(0) );  
//******************************************************************************************************************//
$per ->label(50,$x+170+150,'علاوة تحسين الخدمات الطبية');     $per ->label(780,$x+170+150,'علاوة تحسين الخدمات الطبية');            $per ->txtar(470-40,$x+170+150,'PAPM',20,$per ->PAPM($result->CATEGORIE,$result->ECHELON,30,$result->rnvgradear) ); // 30 = le pourcentage  de 0 30 % fixer a 30 versser trimestriellement  
$per ->label(50,$x+170+180,'تعويض  التأهيل');             $per ->label(873,$x+170+180,'تعويض  التأهيل');                    $per ->txtar(470-40,$x+170+180,'IQUA',20,$per ->IQUA($result->CATEGORIE,$result->ECHELON,$result->rnvgradear) ); 
$per ->label(50,$x+170+180+30,'تعويض التوثيق');           $per ->label(873,$x+170+180+30,'تعويض التوثيق');                  $per ->txtar(470-40,$x+170+180+30,'IDOC',20,$per ->IDOC($result->rnvgradear)  ); 
$per ->label(50,$x+410,'تعويض دعم  نشاطات الصحة');        $per ->label(784,$x+410,'تعويض دعم  نشاطات الصحة');               $per ->txtar(470-40,$x+410,'ISAS',20,$per ->ISAS($result->CATEGORIE,$result->ECHELON,$result->rnvgradear)); 
//*****************************************************************************************************************//
$per ->label(50,$x+440,'التخلي عن النشاط التكميلي');      $per ->label(784,$x+440,'التخلي عن النشاط التكميلي');             $per ->txtar(470-40,$x+440,'IAC',20,$per ->IAC($result->rnvgradear,$result->IAC)); // condition sup a 05 ans  
$per ->label(50,$x+470,'??????????????');                 $per ->label(862,$x+470,'التعويض النوعي');                        $per ->txtar(470-40,$x+470,'ISP',20,$per ->ISP($result->rnvgradear)); //80 du salaire de base iep de 1980 ????? A COMPLETE 
$per ->label(50,$x+500,'علاوة التاطير ');                   $per ->label(890,$x+500,'علاوة التاطير ');                          $per ->txtar(470-40,$x+500,'IENC',20,$per->IENC($result->CATEGORIE,$result->ECHELON,$result->rnvgradear)); 
//تعويض التوثيق
//تعويض  التأهيل
$per ->label(50,$x+530,'علاوة تحسين الاداء');                 $per ->label(850,$x+530,'علاوة تحسين الاداء');                        $per ->txtar(470-40,$x+530,'PAP',20,$per ->PAP($result->CATEGORIE,$result->ECHELON,$result->rnvgradear)); 
$per ->label(50,$x+560,'تعويض الالزام في العلاج المتخصص  ');  $per ->label(740,$x+560,'تعويض الالزام في العلاج المتخصص  ');         $per ->txtar(470-40,$x+560,'IASS',20,$per ->IASS($result->CATEGORIE,$result->ECHELON,$result->rnvgradear) ); 
//********************************************************************************************************************//
//علاوة تحسين الاداء
$per ->label(50,$x+590,'تعويض الالزام الشبه طبي ');         $per ->label(800,$x+590,'تعويض الالزام الشبه طبي ');                $per ->txtar(470-40,$x+590,'IASSP',20,$per ->IASSP($result->CATEGORIE,$result->ECHELON,$result->rnvgradear) ); 
$per ->label(50,$x+620,'تعويض دعم  النشطات  شبه الطبية ');$per ->label(750,$x+620,'تعويض دعم  النشطات  شبه الطبية');        $per ->txtar(470-40,$x+620,'ISASP',20,$per ->ISASP($result->CATEGORIE,$result->ECHELON,$result->rnvgradear) ); 
$per ->label(50,$x+650,'تعويض التقنية ');                 $per ->label(880,$x+650,'تعويض التقنية ');                        $per ->txtar(470-40,$x+650,'ITEC',20,$per ->ITEC($result->CATEGORIE,$result->ECHELON,$result->rnvgradear) ); //10 SUP 11








 //*****************************************************************************************************************//
$per ->label(50,$x+680,'منح عائلية');                     $per ->label(899,$x+680,'منح عائلية');                             $per ->txtar(470-40,$x+680,'ALLF',20,$per ->allocation($result->CATEGORIE,$result->NBRENF,$result->ALLF)  ); // il faut regler la case ALLF pour tous le personnels PAR DEFFAULT =1  
$per ->label(50,$x+710,'اجر وحيد');                       $per ->label(910,$x+710,'اجر وحيد');                                 $per ->txtar(470-40,$x+710,'SUNIQUE',20,"800"  );                                                        // il faut regler la case SUNIQUE pour tous le personnels PAR DEFFAULT =1    FEMME AU FOYEE


$per ->hide(595,$x+90,'idp',20,$_GET["idp"]);    
$per ->url(790+210,250,"index.php?uc=PAIE2","القائمة الاسمية للمستخدمين  المتواجدين بالمؤسسة ","3"); 
}
$per ->f1();
$per -> sautligne (40);
 
?>

