<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/EFF.php');
//**********************************************************************************************
$annee="A2013";
$date=date("d-m-y");
$pdf=new EFF('P','mm','A4');
$pdf->setRTL(true);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 14);
$pdf->AddPage();
$pdf->SetXY(5,0); 	  
$pdf->cell(200,05,"الجمهورية الجزائرية الديمقراطية الشعبيـة",0,0,'C',0);
$pdf->SetXY(5,$pdf->GetY()+6.5); 	  
$pdf->cell(200,05,"وزارة الصحة و السكان و إصلاح المستشفيات ",0,0,'C',0);
$pdf->SetXY(5,$pdf->GetY()+6.5); 	  
$pdf->cell(200,05,"المؤسسة العمومية الاستشفائية عين وسارة",0,0,'C',0);
$pdf->entete(25);

$pdf->soustitre($pdf->GetY()+6.5,"سلك الممارسين الطبيين المتخصصين في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.01","ممارس متخصص رئيس (chef)",                               $pdf->$annee(4),$pdf->nbrgrade(4));
$pdf->lignen($pdf->GetY()+6.5,"1.02","ممارس متخصص رئيسي (principal)",                         $pdf->$annee(3),$pdf->nbrgrade(3));
$pdf->lignen($pdf->GetY()+6.5,"1.03","ممارس  متخصص  مساعد (assistant)",                       $pdf->$annee(1),$pdf->nbrgrade(1));
$pdf->soustitre($pdf->GetY()+6.5,"سلك الصيادلة المتخصصين في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.04","صيدلي متخصص رئيس (chef)",                               $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.05","صيدلي متخصص رئيسي (principal)",                         $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.06","صيدلي  متخصص مساعد (assistant)",                        $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->soustitre($pdf->GetY()+6.5,"سلك الجراحين الأسنان المتخصصين في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.07","جراح أسنان متخصص رئيس (chef)",                         $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.08","جراح أسنان متخصص رئيسي (principal)",                   $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.09","جراح أسنان  متخصص مساعد (assistant)",                  $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->soustotal($pdf->GetY()+6.5);


$pdf->soustitre($pdf->GetY()+6.5,"سلك الطبيين العامون في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.10","طبيب عام  رئيس (chef)",                                 $pdf->$annee(7),$pdf->nbrgrade(7));
$pdf->lignen($pdf->GetY()+6.5,"1.11","طبيب عام  رئيسي  (principal)",                          $pdf->$annee(6),$pdf->nbrgrade(6));
$pdf->lignen($pdf->GetY()+6.5,"1.12","طبيب عام",                                              $pdf->$annee(5),$pdf->nbrgrade(5));
$pdf->soustitre($pdf->GetY()+6.5,"سلك الصيادلة العامون في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.13","صيدلي عام  رئيس (chef)",                                 $pdf->$annee(10),$pdf->nbrgrade(10));
$pdf->lignen($pdf->GetY()+6.5,"1.14","صيدلي  عام  رئيسي  (principal)",                         $pdf->$annee(9),$pdf->nbrgrade(9));
$pdf->lignen($pdf->GetY()+6.5,"1.15","صيدلي  عام",                                             $pdf->$annee(8),$pdf->nbrgrade(8));
$pdf->soustitre($pdf->GetY()+6.5,"سلك جراحي الأسنان العامون في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.16","جراح أسنان  عام  رئيس (chef)",                          $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.17","جراح أسنان   عام  رئيسي  (principal)",                  $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.18","جراح أسنان   عام",                                      $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->soustotal($pdf->GetY()+6.5);


$pdf->soustitre($pdf->GetY()+6.5,"سلك الطبيين المفتشون في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.19","طبيب مفتش رئيس في الصحة العمومية ",                      $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.20","طبيب مفتش  في الصحة العمومية ",                          $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->soustitre($pdf->GetY()+6.5,"سلك الصيادلة المفتشون في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.21","صيدلي  مفتش رئيس في الصحة العمومية",                      $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.22","صيدلي  مفتش  في الصحة العمومية ",                         $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->soustitre($pdf->GetY()+6.5,"سلك جراحي الأسنان المفتشون في الصحة العمومية");
$pdf->lignen($pdf->GetY()+6.5,"1.23","جراح  أسنان مفتش رئيس في الصحة العمومية ",               $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->lignen($pdf->GetY()+6.5,"1.24","جراح أسنان  مفتش  في الصحة العمومية ",                   $pdf->$annee(null),$pdf->nbrgrade(0));
$pdf->soustotal($pdf->GetY()+6.5);


// $pdf->lignen($pdf->GetY()+6.5,"1.01","ممارس أخصائي أجنبي",                                     $pdf->$annee(0),$pdf->nbrgrade(0));//probleme
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"المجموع ");






// $pdf->soustotal($pdf->GetY()+6.5);


// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"المجموع ");


// $pdf->soustotal($pdf->GetY()+6.5);


// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->AddPage();

// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"المجموع ");

// $pdf->soustitre($pdf->GetY()+6.5,"4ـ ممارسين أجانب");
// $pdf->lignen($pdf->GetY()+6.5,"1.01","أطباء عامون أجانب ",                                    $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"مجموع المستخدمين الطبيين ");
// $pdf->SetXY(160,$pdf->GetY()+10); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);


// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"جدول تعداد المناصب العليا إلى غاية"." "."2013/12/31",0,0,'C',0);
// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"المناصب العليا ",0,0,'L',0);
// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"Postes Superieurs ",0,0,'L',0);
//********************************************ا-المناصب العليا*****************************************************************//
// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"ا-المناصب العليا",1,0,'R',0);
// $pdf->soustitre($pdf->GetY()+6.5,"1ـ  المستخدمين الإداريين و الإطارات ");
// $pdf->entete($pdf->GetY()+6.5);
// $pdf->lignen($pdf->GetY()+6.5,"1,01","مدير المؤسسة",                        $pdf->$annee(160),$pdf->nbrgrade(160));
// $pdf->lignen($pdf->GetY()+6.5,"1,02","نواب المدير",                         $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"1,03","رؤوساء المكاتب",                      $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->total($pdf->GetY()+6.5,"مجموع المستخدمين الإداريين و الإطارات ");
//**************************************************************//
// $pdf->soustitre($pdf->GetY()+6.5,"2ـ المستخدمين الطبيين المتخصصين في الصحة العمومية");
// $pdf->lignen($pdf->GetY()+6.5,"2,01","ممارس طبي متخصص  (رئيس مصلحة )",       $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,02","طبيب عمل مفتش",                      $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,03","طبيب متخصص (رئيس وحدة )",            $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
//*********************************************************************//
// $pdf->soustitre($pdf->GetY()+6.5,"3ـ المستخدمين الطبيين العامين في الصحة العمومية");
// $pdf->lignen($pdf->GetY()+6.5,"2,04","ممارس طبي مفتش منسق للصحة العمومية",    $pdf->$annee(1),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,05","طبيب رئيس وحدة",                      $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,06","طبيب منسق",                           $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,07","صيدلي منسق",                           $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,08","جراح أسنان رئيس وحدة ",               $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,09","جراح أسنان منسق",                     $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,10","ممارس طبي مفتش منسق في للصحة العمومية",  $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,11","فيزيائي طبي رئيس وحدة ",               $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"2,12","مفتش وحدة البيولوجيا ",               $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"مجموع المستخدمين الطبيين");
// $pdf->SetXY(160,$pdf->GetY()+15); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);
//*************************************************************************************************************//
// $pdf->AddPage();
// $pdf->entete(50);
// $pdf->soustitre($pdf->GetY()+6.5,"4ـ المستخدمين الشبه الطبيين");
// $pdf->lignen($pdf->GetY()+6.5,"3.01","إطار شبه طبي",                        $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.02","منسق النشاطات الطبية ",              $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5,"5ـ المستخدمين التكوين الشبه الطبي ");
// $pdf->lignen($pdf->GetY()+6.5,"4.01","مدير ملحقة التكوين الشبه الطبي",      $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.02","مدير الدراسات",                      $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.03","رئيس الإختبار",                       $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.04","رئيس مصلحة ",                        $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5," 6ـ المستخدمين النفسانيين في الصحة العمومية");
// $pdf->lignen($pdf->GetY()+6.5,"5.01","نفساني منسق للصحة العمومية ",        $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5,"7ـ المستخدمين المهنيين");
// $pdf->lignen($pdf->GetY()+6.5,"6.01","رئيس الحضيرة",                         $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"6.02","رئيس ورشة ",                         $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"6.03","رئيس مخزن ",                          $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"6.04","رئيس مطعم ",                         $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"6.05","مسؤول المصلحة الداخلية ",             $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5,"8ـ مستخدمي الأسلاك التقنية");
// $pdf->lignen($pdf->GetY()+6.5,"7.01","رئيس مخبر",                            $pdf->$annee(6),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"المجموع ");
// $pdf->total($pdf->GetY()+6.5,"مجموع المستخدمين ");
// $pdf->total($pdf->GetY()+6.5,"المجموع العام للمناصب العليا ");
// $pdf->SetXY(160,$pdf->GetY()+15); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);
//**************************************************المناصب المالية ***********************************************************//

// $pdf->AddPage();
// $pdf->SetXY(5,0); 	  
// $pdf->cell(200,05,"الجمهورية الجزائرية الديمقراطية الشعبيـة",0,0,'C',0);
// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"وزارة الصحة و السكان و إصلاح المستشفيات ",0,0,'C',0);
// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"المؤسسة العمومية الاستشفائية عين وسارة",0,0,'C',0);
// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"جدول تعداد المناصب العليا إلى غاية"." "."2013/12/31",0,0,'C',0);
// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"المناصب المالية ",0,0,'L',0);
// $pdf->SetXY(5,$pdf->GetY()+6.5); 	  
// $pdf->cell(200,05,"Postes Budgétaires ",0,0,'L',0);
// $pdf->entete($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5,"ـI - المستخدمين الإداريين");
// $pdf->soustitre($pdf->GetY()+6.5,"1ـ الإطارات المستخدمين الإداريين");
// $pdf->lignen($pdf->GetY()+6.5,"1.01","رؤوساء متصرفي مصالح الصحة ",           $pdf->$annee(161),$pdf->nbrgrade(161));
// $pdf->lignen($pdf->GetY()+6.5,"1.02","المتصرفون الرئيسيون لمصالح الصحة",      $pdf->$annee(160),$pdf->nbrgrade(160));
// $pdf->lignen($pdf->GetY()+6.5,"1.03","متصرفون مصالح الصحة ",                $pdf->$annee(159),$pdf->nbrgrade(159));
// $pdf->lignen($pdf->GetY()+6.5,"1.04","متصرفو مصالح الصحية من الصنف الثالث", $pdf->$annee(158),$pdf->nbrgrade(158));
// $pdf->lignen($pdf->GetY()+6.5,"1.05","متصرف مستشار",                       $pdf->$annee(115),$pdf->nbrgrade(115));
// $pdf->lignen($pdf->GetY()+6.5,"1.06","متصرف رئيسي ",                       $pdf->$annee(114),$pdf->nbrgrade(114));
// $pdf->lignen($pdf->GetY()+6.5,"1.07","متصرف ",                             $pdf->$annee(113),$pdf->nbrgrade(113));
// $pdf->total($pdf->GetY()+6.5,"المجموع");
// $pdf->soustitre($pdf->GetY()+6.5,"2ـ المستخدمين الإداريين المنفذين");
// $pdf->lignen($pdf->GetY()+6.5,"1.01","ملحق رئيسي للإدارة ",                 $pdf->$annee(117),$pdf->nbrgrade(117));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","ملحق الإدارة ",                       $pdf->$annee(116),$pdf->nbrgrade(116));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","عون إدارة رئيسي",                    $pdf->$annee(120),$pdf->nbrgrade(120));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","عون إدارة ",                         $pdf->$annee(119),$pdf->nbrgrade(119));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","عون مكتب ",                          $pdf->$annee(118),$pdf->nbrgrade(118));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","تقني سامي في الاعلام الالي",               $pdf->$annee(132),$pdf->nbrgrade(132));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","تقني في الإعلام الآلي",                    $pdf->$annee(131),$pdf->nbrgrade(131));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","معاون تقني في الإعلام الآلي",              $pdf->$annee(133),$pdf->nbrgrade(133));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","عون تقني في الإعلام الآلي",                $pdf->$annee(134),$pdf->nbrgrade(134));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","عون حفظ البيانات ",                  $pdf->$annee(121),$pdf->nbrgrade(121));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","كاتب",                               $pdf->$annee(122),$pdf->nbrgrade(122));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","كاتب مديرية رئيسي",                  $pdf->$annee(124),$pdf->nbrgrade(124));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","كاتب مديرية ",                       $pdf->$annee(123),$pdf->nbrgrade(123));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","محاسب إداري رئيسي",                   $pdf->$annee(127),$pdf->nbrgrade(127));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","محاسب إداري  ",                       $pdf->$annee(126),$pdf->nbrgrade(126));  
// $pdf->lignen($pdf->GetY()+6.5,"1.01","عون محاسب",                           $pdf->$annee(6),$pdf->nbrgrade(1));/////probleme
// $pdf->lignen($pdf->GetY()+6.5,"1.01","مساعد محاسب إداري ",                  $pdf->$annee(125),$pdf->nbrgrade(125));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","رئيس وثائقين أمناء محفوظات",           $pdf->$annee(146),$pdf->nbrgrade(146));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","وثائقين أمين محفوظات رئيسي",            $pdf->$annee(145),$pdf->nbrgrade(145));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","وثائقي  أمين محفوظات",                 $pdf->$annee(144),$pdf->nbrgrade(144));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","مساعد وثائقي امين محفوظات",            $pdf->$annee(148),$pdf->nbrgrade(148));
// $pdf->lignen($pdf->GetY()+6.5,"1.01","عون تقني في الوثائق و المحفوظات  ",      $pdf->$annee(147),$pdf->nbrgrade(147));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"مجموع المستخدمين الإداريين ");
// $pdf->SetXY(160,$pdf->GetY()+10); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);
//$pdf->SetAutoPageBreak(false, 0);
//*************************************************************************************************************//


// $pdf->AddPage();
// $pdf->entete(5);
// $pdf->soustitre($pdf->GetY()+6.5,"ـ III المستخدمين الشبه طبيين");
// $pdf->lignen($pdf->GetY()+6.5,"3.01","قابلة رئيسة في الصحة العمومية ",                         $pdf->$annee(24),$pdf->nbrgrade(24));
// $pdf->lignen($pdf->GetY()+6.5,"3.02","قابلة متخصصة  في الصحة العمومية",                        $pdf->$annee(23),$pdf->nbrgrade(23));
// $pdf->lignen($pdf->GetY()+6.5,"3.03","قابلة في الصحة العمومي",                                 $pdf->$annee(22),$pdf->nbrgrade(22));
// $pdf->lignen($pdf->GetY()+6.5,"3.04","عون طبي في التخدير و الإنعاش ممتاز في الصحة العمومية",       $pdf->$annee(28),$pdf->nbrgrade(28));
// $pdf->lignen($pdf->GetY()+6.5,"3.05","عون طبي في التخدير و الإنعاش للصحة العمومية",              $pdf->$annee(27),$pdf->nbrgrade(27));
// $pdf->lignen($pdf->GetY()+6.5,"3.06","ممرض ممتاز للصحة العمومية ",                              $pdf->$annee(44),$pdf->nbrgrade(44));
// $pdf->lignen($pdf->GetY()+6.5,"3.07","ممرض متخصص للصحة العمومية",                              $pdf->$annee(43),$pdf->nbrgrade(43));
// $pdf->lignen($pdf->GetY()+6.5,"3.08","ممرض للصحة العمومية ",                                   $pdf->$annee(42),$pdf->nbrgrade(42));
// $pdf->lignen($pdf->GetY()+6.5,"3.09","مختص في التغذية ممتاز للصحة العمومية",                     $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.10","مختص في التغذية  متخصص للصحة العمومية",                   $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.11","مختص في التغذية للصحة العمومية ",                         $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.12","مداوي بالعمل ممتاز للصحة العمومية",                      $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.13","مداوي بالعمل متخصص للصحة العمومية",                     $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.15","مرمم الأسنان ممتاز للصحة العمومية",                       $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.16","مرمم الأسنان متخصص للصحة العمومية",                      $pdf->$annee(56),$pdf->nbrgrade(56));
// $pdf->lignen($pdf->GetY()+6.5,"3.17","مرمم الأسنان للصحة العمومية ",                           $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.18","مقوم الأعضاء الإصطناعية ممتاز للصحة العمومية",             $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.18","مقوم الأعضاء الإصطناعية متخصص للصحة العمومية",            $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.20","مقوم الأعضاء الإصطناعية للصحة العمومية ",                 $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.21","مختص في العلاج الطبيعي و الفيزيائي ممتاز للصحة العمومية",   $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.22","مختص في العلاج الطبيعي و الفيزيائي متخصص للصحة العمومية",  $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.23","مختص في العلاج الطبيعي و الفيزيائي للصحة العمومية ",       $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.24","بصاراتي  نظاراتي ممتاز للصحة العمومية",                  $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.25","بصاراتي  نظاراتي متخصص للصحة العمومية ",                $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.26","بصاراتي  نظاراتي  للصحة العمومية",                      $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.27","مقوم البصر ممتاز للصحة العمومية",                        $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.28","مقوم البصر متخصص للصحة العمومية ",                      $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.29","مقوم البصر للصحة العمومية",                             $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.30","مقوم الحركية النفسية ممتاز للصحة العمومية",               $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.31","مقوم الحركية النفسية  متخصص للصحة العمومية",             $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.32","مقوم الحركية النفسية  للصحة العمومية",                   $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.33","مطبب القدم ممتاز للصحة العمومية",                        $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.34","مطبب القدم متخصص للصحة العمومية",                       $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.35","مطبب القدم للصحة العمومية ",                            $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.36","مقوم السمع ممتاز للصحة العمومية",                        $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.37","مقوم السمع متخصص للصحة العمومية",                       $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.38","مقوم السمع للصحة العمومية ",                            $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->AddPage();
// $pdf->lignen($pdf->GetY()+6.5,"3.39","مشغل أحهزة التصوير الطبي ممتاز للصحة العمومية",           $pdf->$annee(0),$pdf->nbrgrade(0));
// $pdf->lignen($pdf->GetY()+6.5,"3.40","مشغل أحهزة التصوير الطبي متخصص للصحة العمومية",          $pdf->$annee(86),$pdf->nbrgrade(86));

// $pdf->lignen($pdf->GetY()+6.5,"3.41","مشغل أحهزة التصوير الطبي للصحة العمومية ",               $pdf->$annee(85),$pdf->nbrgrade(85));
// $pdf->lignen($pdf->GetY()+6.5,"3.42","مخبري ممتاز للصحة العمومية",                               $pdf->$annee(92),$pdf->nbrgrade(92));
// $pdf->lignen($pdf->GetY()+6.5,"3.43","مخبري متخصص للصحة العمومية ",                             $pdf->$annee(91),$pdf->nbrgrade(91));
// $pdf->lignen($pdf->GetY()+6.5,"3.44","مخبري للصحة العمومية ",                                   $pdf->$annee(90),$pdf->nbrgrade(90));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->SetXY(160,$pdf->GetY()+10); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);
// $pdf->AddPage();
// $pdf->lignen($pdf->GetY()+6.5,"3.45"," محضر في الصيدلة ممتاز للصحة العمومية",                    $pdf->$annee(97),$pdf->nbrgrade(97));
// $pdf->lignen($pdf->GetY()+6.5,"3.46","محضر في الصيدلة  متخصص للصحة العمومية ",                  $pdf->$annee(96),$pdf->nbrgrade(96));
// $pdf->lignen($pdf->GetY()+6.5,"3.47","محضر في الصيدلة للصحة العمومية  ",                        $pdf->$annee(95),$pdf->nbrgrade(95));
// $pdf->lignen($pdf->GetY()+6.5,"3.48"," مختص في حفظ الصحة  ممتاز للصحة العمومية",                 $pdf->$annee(102),$pdf->nbrgrade(102));
// $pdf->lignen($pdf->GetY()+6.5,"3.49","مختص في حفظ الصحة  متخصص للصحة العمومية",                 $pdf->$annee(101),$pdf->nbrgrade(101));
// $pdf->lignen($pdf->GetY()+6.5,"3.50","مختص في حفظ الصحة  للصحة العمومية",                       $pdf->$annee(100),$pdf->nbrgrade(100));
// $pdf->lignen($pdf->GetY()+6.5,"3.51","مساعد طبي ممتاز للصحة العمومية",                          $pdf->$annee(0),$pdf->nbrgrade(0));// probleme
// $pdf->lignen($pdf->GetY()+6.5,"3.52","مساعد طبي متخصص للصحة العمومية ",                        $pdf->$annee(0),$pdf->nbrgrade(0));// probleme
// $pdf->lignen($pdf->GetY()+6.5,"3.53","مساعد طبي  للصحة العمومية",                              $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->lignen($pdf->GetY()+6.5,"3.45","مساعد التمريض رئيسي للصحة العمومية ",                   $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.55","مساعد التمريض للصحة العمومية ",                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.56","عون رعاية الأطفال رئيسي للصحة العمومية ",                $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.57"," عون رعاية الأطفال  للصحة العمومية ",                    $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.58","ساعد جراح الأسنان رئيسي للصحة العمومية",                 $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.59","مساعد جراح الأسنان  للصحة العمومية",                     $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->lignen($pdf->GetY()+6.5,"3.60","قابلة رئيسية ",                                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.61","قابلات",                                                 $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.62","عون طبي في التخذير والانعاش رئيسي",                        $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.63","عون طبي في التخذير و الانعاش ",                            $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.64","ممرض حاصل على شهادة دولة ",                              $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.65","ممرض مؤهل",                                              $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.66","مختص في التغذية حاصل على شهادة دولة ",                    $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.67","مختص في التغذية مؤهل",                                    $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.68"," مرمم الأسنان حاصل على شهادة دولة",                      $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.69","مرمم الأسنان مؤهل ",                                     $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.70","مدلك طبي حاصل على شهادة دولة ",                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.71","مدلك طبي مؤهل",                                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.72","بصاراتي نظاراتي حاصل على شهادة دولة ",                  $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.73","بصاراتي نظاراتي مؤهل",                                  $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.74","مشغل أحهزة الأشعة حاصل على شهادة دولة ",                 $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.75","مشغل أحهزة الأشعة مؤهل ",                                $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.76"," مخبري حاصل على شهادة دولة ",                             $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.77","مخبري مؤهل ",                                             $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.78"," محضر في الصيدلة حاصل على شهادة دولة ",                   $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.79","محضر في الصيدلة مؤهل",                                    $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.80","عون التطهير حاصل على شهادة دولة ",                       $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.81","عون التطهير مؤهل ",                                      $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.82","مساعدة إجتماعية حاصلة على شهادة دولة ",                 $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->AddPage();
// $pdf->lignen($pdf->GetY()+6.5,"3.83","مساعدة إجتماعية مؤهلة ",                                $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.84","أمين طبي حاصل على شهادة دولة  ",                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.85","أمين طبي مؤهلة ",                                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->SetXY(160,$pdf->GetY()+10); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);
// $pdf->AddPage();


// $pdf->entete(5);
// $pdf->lignen($pdf->GetY()+6.5,"3.86","مفتش بيداغوجي شبه طبي",                                  $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.87","أستاذ التعليم شبه طبي",                                  $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5," المستخدمين النفسانيين ");
// $pdf->lignen($pdf->GetY()+6.5,"3.88","نفساني عيادي ممتاز للصحة العمومية ",                     $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.89","نفساني عيادي رئيسي  للصحة العمومية ",                   $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.90","نفساني عيادي للصحة العمومية ",                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.91","نفساني في تصحيح التعبير اللغوي ممتاز للصحة العمومية ",     $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.92","نفساني في تصحيح التعبير اللغوي رئيسي  للصحة العمومية ",   $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.93","نفساني في تصحيح التعبير اللغوي للصحة العمومية ",          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.94","نفساني في التوجيه المدرسي ",                              $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5,"   المستخدمين المتعاونيين");
// $pdf->lignen($pdf->GetY()+6.5,"3.95","شبه طبي أجنبي ",                                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.96","أعوان أجانب",                                           $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.97","مترجم أجنبي",                                             $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.98","طباخ أجنبي ",                                            $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.99","ختص في قياس البصر",                                      $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.100","مربي متخصص رئيسي ",                                    $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"3.101","مربي متخصص ",                                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"المجموع ");
// $pdf->total($pdf->GetY()+6.5,"مجموع المستخدمين الشبه الطبيين");
// $pdf->SetXY(160,$pdf->GetY()+10); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);
// $pdf->AddPage();
// $pdf->entete(5);
// $pdf->soustitre($pdf->GetY()+6.5," 1ـ مستخدمين المصالح التقنية و الصيانة ");
// $pdf->lignen($pdf->GetY()+6.5,"4.01","فيزيائي طبي رئيس في الصحة العمومية ",                    $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.02","فيزيائي طبي رئيسي في الصحة العمومية ",                   $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.03","فيزيائي طبي في الصحة العمومية ",                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.04","مهندس رئيس في المخبر و الصيانة  ",                        $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.05","مهندس رئيسي في المخبر و الصيانة ",                        $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.06","مهندس دولة  في المخبر و الصيانة  ",                       $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.07","مهندس تطبيقي في المخبر و الصيانة ",                       $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.08","تقني سامي  في المخبر و الصيانة  ",                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.09","تقني  في المخبر و الصيانة",                                $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.10","بيولوجي رئيس في الصحة العمومية",                        $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.11","بيولوجي رئيسي في الصحة العمومية ",                      $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.12","بيولوجي  في الصحة العمومية الدرجة 02",                  $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.13","بيولوجي  في الصحة العمومية الدرجة 01",                  $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.14","ملحق بالمخبر في الصحة العمومية ",                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.15","مهندس رئيس في الإعلام الآلي ",                              $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.16","مهندس رئيسي في الإعلام الآلي",                              $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.17","مهندس دولة  في الإعلام الآلي ",                             $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.18","مهندس تطبيقي في الإعلام الآلي",                             $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.19","مهندس رئيسي في الإحصاء",                                 $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.20","مهندس في الإحصاء ",                                      $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.21","مهندس دولة ",                                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.22","مهندس تطبيقي في الإحصاء",                                $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.23","مهندس معماري",                                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.24","تقني سامي ",                                            $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.25","تقني  ",                                                $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5,"  2ـ مستخدمين المصالح العامة ");
// $pdf->lignen($pdf->GetY()+6.5,"4.26","معاون تقني",                                            $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.27","عون تقني ",                                             $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.28","كهربائي تقني ",                                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.29","كهربائي ميكانيكي",                                     $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.30","عامل مهني خارج الصنف ",                                 $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.31","عامل مهني  الصنف 01",                                   $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.32","عامل مهني  الصنف 02",                                   $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.33","عامل مهني  الصنف 03",                                   $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.34","سائقو الصنف 01",                                       $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.35","سائقو الصنف 02",                                       $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.36","حاجب رئيسي ",                                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->AddPage();
// $pdf->lignen($pdf->GetY()+6.5,"4.37","حاجب  ",                                               $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"4.38","منظفات ",                                              $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"مجموع مستخدمين المصالح التقنية و الصيانة ");
// $pdf->SetXY(160,$pdf->GetY()+10); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);
// $pdf->AddPage();
// $pdf->entete(5);
// $pdf->soustitre($pdf->GetY()+6.5,"   أعوان الوقاية و الحراس ");
// $pdf->lignen($pdf->GetY()+6.5,"5.01","عون وقاية من المستوى الثاني ",                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.02","عون وقاية  من المستوى الأول ",                           $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.03","حارس",                                                 $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5,"   العمال المهنيين");
// $pdf->lignen($pdf->GetY()+6.5,"5.04","عامل مهني من المستوى الرابع",                            $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.05","عامل مهني من المستوى  الثالث",                           $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.06","امل مهني من المستوى  الثاني",                            $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.07","عامل مهني من المستوى الأول ",                             $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5," سائقي السيارات");
// $pdf->lignen($pdf->GetY()+6.5,"5.08","سائق السيارات من المستوى  الثالث",                      $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.09","سائق السيارات من المستوى  الثاني",                      $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.10","سائق السيارات من المستوى الأول",                         $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5,"  أعوان الخدمات ");
// $pdf->lignen($pdf->GetY()+6.5,"5.11","عون خدمات من المستوى الثالث ",                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.12","عون خدمات من المستوى  الثاني",                          $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.13","عون خدمات من المستوى  الأول",                            $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->soustitre($pdf->GetY()+6.5," 2ـ الأعوان المتعاقدين بالتوقيت الجزئي");
// $pdf->lignen($pdf->GetY()+6.5,"5.14","عامل مهني من المستوى الأول ",                             $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->lignen($pdf->GetY()+6.5,"5.15","عون خدمات من المستوى  الأول",                            $pdf->$annee(5),$pdf->nbrgrade(1));
// $pdf->soustotal($pdf->GetY()+6.5);
// $pdf->total($pdf->GetY()+6.5,"المجموع");
// $pdf->total($pdf->GetY()+6.5,"مجموع الأعوان المتعاقدين  ");
// $pdf->total($pdf->GetY()+6.5,"مجموع مستخدمي المصالح العامة و التقنية  ");
// $pdf->total($pdf->GetY()+6.5,"المجموع العام ");
// $pdf->SetXY(160,$pdf->GetY()+10); 	  
// $pdf->cell(6,0.5,"المدير",0,0,'C',0);
$pdf->Output();
?>












