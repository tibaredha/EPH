<?php
//effectif pour fonction publique 
//grade en fonction du categorie   
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php');
require_once('../tcpdf/EFFFP.php');
//**********************************************************************************************
//$date=date("d-m-y");
$pdf=new EFFFP('L','mm','A4');
$pdf->setRTL(true);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDisplayMode('fullpage','single');//mode d affichage 
$pdf->SetFillColor(230);    //fond gris il faut ajouter au cell un autre parametre pour qui accepte la coloration
$pdf->SetTextColor(0,0,0);//text noire
$pdf->SetFont('aefurat', '', 12);
$pdf->AddPage();
$pdf->entete();
// $pdf->compteur(161);
$pdf->grade($pdf->GetY()+10,161,16);$pdf->AddPage(); //الرتبة:  رئيس متصرفي مصالح الصحة 
$pdf->grade($pdf->GetY()+10,159,12);$pdf->AddPage(); //الرتبة: متصرف مصالح صحية
$pdf->grade($pdf->GetY()+10,158,10);$pdf->AddPage(); //الرتبة: متصرف مصالح صحية من الصنف الثالث 
$pdf->grade($pdf->GetY()+10,114,14);$pdf->AddPage(); //الرتبة: :  متصرف رئيسي 
$pdf->grade($pdf->GetY()+10,113,12);$pdf->AddPage(); //الرتبة: :  متصرف 
$pdf->grade($pdf->GetY()+10,117,10);$pdf->AddPage(); //الرتبة: ملحق رئيسي للإدارة 
$pdf->grade($pdf->GetY()+10,116,9);$pdf->AddPage(); //ا/لرتبة:ملحق الإدارة 
$pdf->grade($pdf->GetY()+10,120,8);$pdf->AddPage(); //الرتبة: عون إدارة رئيسي 
$pdf->grade($pdf->GetY()+10,119,7);$pdf->AddPage(); ///الرتبة: عون إدارة 
$pdf->grade($pdf->GetY()+10,132,10);$pdf->AddPage(); //الرتبة:تقني سامي في الإعلام الآلي 
$pdf->grade($pdf->GetY()+10,131,8);$pdf->AddPage(); //لرتبة : تقني في الإعلام  الآلي
$pdf->grade($pdf->GetY()+10,133,7);$pdf->AddPage(); //الرتبة :معاون  تقني في الإعلام  الآلي
$pdf->grade($pdf->GetY()+10,121,5);$pdf->AddPage(); //الرتبة:عون حفظ البيانات 
$pdf->grade($pdf->GetY()+10,122,6);$pdf->AddPage(); //الرتبة:كاتب 
$pdf->grade($pdf->GetY()+10,126,8);$pdf->AddPage(); //الرتبة : محاسب إداري 
$pdf->grade($pdf->GetY()+10,125,5);$pdf->AddPage(); //الرتبة:مساعد محاسب إداري 
$pdf->grade($pdf->GetY()+10,144,12);$pdf->AddPage(); //الرتبة : وثائقي أمين المحفوظات 

$pdf->grade($pdf->GetY(),1,"رقم استدلالي :990");$pdf->AddPage(); //الرتبة:ممارس متخصص مساعد في جراحة العظام  
$pdf->grade($pdf->GetY()+10,6,"قسم فرعي 1");$pdf->AddPage(); //الرتبة: طبيب عام رئيسي  في الصحة العمومية 
$pdf->grade($pdf->GetY()+10,5,16);$pdf->AddPage();  //الرتبة: طبيب عام في الصحة العمومية 
$pdf->grade($pdf->GetY()+10,8,13);$pdf->AddPage();  //الرتبة: صيدلي عام في الصحة العمومية 
$pdf->grade($pdf->GetY()+10,26,12);$pdf->AddPage();  //الرتبة:عون طبي في التخذير و الانعاش رئيسي
$pdf->grade($pdf->GetY()+10,25,11);$pdf->AddPage();  //عون طبي في التخذير و الانعاشالرتبة:عون طبي في التخذير و الانعاش
$pdf->grade($pdf->GetY()+10,20,11);$pdf->AddPage();  //الرتبة:قابلات 
$pdf->grade($pdf->GetY()+10,43,12);$pdf->AddPage();  //الرتبة:ممرض  متخصص للصحة العمومية  
$pdf->grade($pdf->GetY()+10,101,12);$pdf->AddPage(); //الرتبة: مختص في حفظ الصحة متخصص للصحة العمومية 
$pdf->grade($pdf->GetY()+10,56,12);$pdf->AddPage();  //الرتبة:مرمم أسنان متخصص للصحة العمومية 
$pdf->grade($pdf->GetY()+10,96,12);$pdf->AddPage();  //الرتبة: محضر في الصيدلة متخصص للصحة العمومية 
$pdf->grade($pdf->GetY()+10,86,12);$pdf->AddPage();   //الرتبة:مشغل أجهزة التصوير الطبي المتخصص للصحة العمومية 
$pdf->grade($pdf->GetY()+10,42,11);$pdf->AddPage();   //الرتبة:ممرض للصحة العمومية 
$pdf->grade($pdf->GetY()+10,41,10);$pdf->AddPage();  //الرتبة:ممرض حاصل على شهادة دولة  
$pdf->grade($pdf->GetY()+10,110,11);$pdf->AddPage();  //الرتبة:مساعد طبي  للصحة العمومية 
$pdf->grade($pdf->GetY()+10,85,11);$pdf->AddPage();  //الرتبة:مشغل أجهزة التصوير الطبي للصحة العمومية 
$pdf->grade($pdf->GetY()+10,84,10);$pdf->AddPage();  //الرتبة:مشغل أجهزة الشعة حاصل على شهادة دولة 
$pdf->grade($pdf->GetY()+10,90,11);$pdf->AddPage();  //الرتبة:مخبري  للصحة العمومية 
$pdf->grade($pdf->GetY()+10,89,10);$pdf->AddPage();   //الرتبة:مخبري حاصل على شهادة دولة 
$pdf->grade($pdf->GetY()+10,2,9);$pdf->AddPage();   //الرتبة:ممرض مؤهل
$pdf->grade($pdf->GetY()+10,36,9);$pdf->AddPage();   //الرتبة:مساعد التمريض رئيسي للصحة العمومية 
$pdf->grade($pdf->GetY()+10,35,8);$pdf->AddPage();//الرتبة:مساعد التمريض للصحة العمومية 
$pdf->grade($pdf->GetY()+10,14,12);$pdf->AddPage();   //الرتبة:نفساني عيادي للصحة العمومية   
$pdf->grade($pdf->GetY()+10,31,12);$pdf->AddPage(); //الرتبة:بيولوجي في الصحة العمومية من الدرجة الأولى
$pdf->grade($pdf->GetY()+10,154,10);$pdf->AddPage(); //الرتبة:تقني سامي في المخبر و الصيانة
$pdf->grade($pdf->GetY()+10,128,13);$pdf->AddPage(); //الرتبة:مهندس دولة في الإعلام الآلي
$pdf->grade($pdf->GetY()+10,136,11);$pdf->AddPage(); //الرتبة:مهندس تطبيقي في الاحصائيات
$pdf->grade($pdf->GetY()+10,165,6);$pdf->AddPage();  ///الرتبة: عمال مهنيون خارج الصنف
$pdf->grade($pdf->GetY()+10,164,5);$pdf->AddPage();  //الرتبة:عمال مهنيون من الصنف الأول 
$pdf->grade($pdf->GetY()+10,163,3);$pdf->AddPage();  //الرتبة:عمال مهنيون  من الصنف الثاني 
$pdf->grade($pdf->GetY()+10,166,3);$pdf->AddPage();  //الرتبة:سائق سيارات من الصنف الأول 
$pdf->grade($pdf->GetY()+10,167,2);$pdf->AddPage();  //الرتبة:سائق سيارات من الصنف الثاني  
$pdf->grade($pdf->GetY()+10,162,1);$pdf->AddPage();  //الرتبة:عمال مهنيون من الصنف الثالث 
$pdf->grade($pdf->GetY()+10,181,5);$pdf->AddPage();  //الرتبة:عون وقاية من المستوى الأول 
$pdf->grade($pdf->GetY()+10,168,1);$pdf->AddPage();  //الوظيفة: عامل مهني  من المستوى الأول متعاقد بالتوقيت الكامل 
$pdf->grade($pdf->GetY()+10,176,2);$pdf->AddPage();  //الوظيفة: سائق سيارات من المستوى الأول متعاقد بالتوقيت الكامل 
$pdf->grade($pdf->GetY()+10,172,1);$pdf->AddPage();  //الوظيفة: عامل مهني  من المستوى الأول متعاقد بالتوقيت الجزئي 
 
$pdf->Output();
?>


