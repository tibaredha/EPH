<?php
$idp=$_GET["idp"];
require_once('../tcpdf/GRH1.php');
//***************************post*************************//
$pdf = new GRH1('p', 'mm', 'A5', true, 'UTF-8', false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

$pdf->SetDisplayMode('fullpage','single'); 
$pdf->setRTL(true);
$date1=date("Y");
$pdf->SetFont('aefurat', 'B', 9);
$pdf->Image('../images/c3.jpg', $x='147', $y='1', $w=85, $h=55, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false, $alt=false, $altimgs=array());

$pdf->Text(1,1,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
$pdf->Text(1,6,"وزارة الصحة و السكان و إصلاح المستشفيات");
$pdf->Text(1,11,"المؤسسة العمومية الاستشفائية عين وسارة");

$pdf->SetFont('aefurat', 'B', 15);
$pdf->Text(5,17,"بطاقة التعريف المهنية");
$pdf->SetFont('aefurat', 'B', 10);


$pdf-> mysqlconnect();
$sql = "SELECT * FROM grh WHERE  idp = '".$idp."' "; 
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
$result = mysql_fetch_array( $requete ); 
mysql_free_result($requete);
$pdf->Text(1,26," الاسم :".$result["Prenom_Arabe"]);
$pdf->Text(1,31," اللقب :".$result["Nomarab"]);
$pdf->Text(1,36,"المولود (ة) بتاريخ : ".$result["Date_Naissance"]);
$pdf->Text(1,41," بـ : ".$pdf->nbrtostring("grh","com","IDCOM",$result["Commune_Naissancear"],"communear")." ولاية ".$pdf->nbrtostring("grh","wil","IDWIL",$result["Wilaya_Naissancear"],"WILAYASAR"));
$pdf->Text(1,46,"الرتبة : ".$pdf->nbrtostring("grh","grade","idg",$result["rnvgradear"],"gradear"));
if($result["rnvgradear"]==1 or $result["rnvgradear"]==3 )
{
$pdf->Text(40,46," في ".$pdf->nbrtostring("grh","specialite","idspecialite",$result["FILIERE"],"specialitear"));
}
$pdf->Text(1,51,"المصلحة : ".$pdf->nbrtostring("grh","service","ids",$result["SERVICEAR"],"servicear"));

// $pdf->Text(26,180,$result["DATEARRIVE"]);
$pdf->Rect(62, 1, 85, 55, 2, $style = '');
$pdf->Rect(62.5,1.5, 84, 54.1, 2, $style = '');
$pdf->Rect(100, 17,43, 8, 2, $style = '');
$pdf->Image('../images/photos/'.$idp.'.jpg', $x='93', $y='2', $w=30, $h=35, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=1, $fitbox=false, $hidden=false, $fitonpage=false, $alt=false, $altimgs=array());





// $border_style = array('all' => array('width' => 10, 'cap' => 'square', 'join' => 'miter', 'dash' => 1, 'phase' => 2));
// $pdf->SetDrawColor(50, 0, 0, 0);
// $pdf->SetFillColor(100, 0, 0, 0);
// $pdf->SetTextColor(100, 0, 0, 0);
// $pdf->Rect(30, 60, 30, 30, 'DF', $border_style);



// $pdf->SetFillColor(0, 255, 0);

// $pdf->SetDrawColor(0, 127, 0);

// $pdf->Rect(50, 60, 60, 60, 'DF');




$pdf->AddPage();
$pdf->SetDisplayMode('fullpage','single'); 
$pdf->setRTL(true);
$pdf->Rect(1, 1, 85, 55, 2, $style = '');
$pdf->SetFont('aefurat', 'B', 14);
$pdf->Text(25+62,6," تنبيـــــــــه");
$pdf->SetFont('aefurat', '', 10);
$pdf->Text(62,16," *هذه البطاقة شخصية لا يحملها إلا صاحبها");
$pdf->Text(62,21," *يجب أن تعاد إلى  مصلحة المستخدمين عند قطع علاقة العمل");
$pdf->Text(62,26," *يجب إبلاغ رئيس مصلحة المستخدمين فورا عند ضياعها ");
$pdf->Text(50+62,36," المدير");
$pdf->Code39(55,45,$idp,1,5);


$pdf->Output();

?>
