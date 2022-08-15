<?php
require_once('../tcpdf/config/lang/eng.php');
require_once('../tcpdf/tcpdf.php'); //SESSION INITIER DANS TCPDF LIGNE 1843
class GRH1 extends TCPDF
{
//******************************************//titre
    public $db_host="localhost";
	public $db_name="grh"; 
    public $db_user="root";
    public $db_pass="";
	function mysqlconnect()
	{
	$this->db_host;
	$this->db_name;
	$this->db_user;
	$this->db_pass;
    $cnx = mysql_connect($this->db_host,$this->db_user,$this->db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($this->db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	return $cnx;
	return $db;
	}
	
	function nbrtostring($db_name,$tb_name,$colonename,$colonevalue,$resultatstring) 
	{
	$this-> mysqlconnect();
    $result = mysql_query("SELECT * FROM $tb_name where $colonename=$colonevalue" );
    
	// $row=mysql_fetch_object($result);
	// $resultat=$row->$resultatstring;
	// return $resultat;
	if ($row=mysql_fetch_object($result))
	{
	$resultat=$row->$resultatstring;
	return $resultat;
	}
	return $resultat="null";
	}
	
	
	function SITUATION($idp,$date1) 
	{
	$this-> mysqlconnect();
    $result = mysql_query("SELECT * FROM regcong where idp=$idp and ok=''  order by idregcong desc   " );
	if ($row=mysql_fetch_object($result))
	{
	$resultat=$row->cause;
	return $resultat;
	}
	return "...";
	}
    function gs($h,$v) 
	{ 
	$gs = array(); 

	$gs['1']['c']   =1 ;
	$gs['1']['ifc'] =3200 ;
	$gs['1']['i'] =200 ;
	$gs['1']['0'] =0 ;   
	$gs['1']['1'] =10 ;  
	$gs['1']['2'] =20 ;  
	$gs['1']['3'] =30 ;  
	$gs['1']['4'] =40 ;  
	$gs['1']['5'] =50 ;  
	$gs['1']['6'] =60 ;  
	$gs['1']['7'] =70 ;  
	$gs['1']['8'] =80 ;  
	$gs['1']['9'] =90 ;  
	$gs['1']['10'] =100 ;  
	$gs['1']['11'] =110 ;  
	$gs['1']['12'] =120 ; 
	//********************// 
	$gs['2']['c'] =2 ;
	$gs['2']['ifc'] =3200 ;
	$gs['2']['i'] =219 ; 
	$gs['2']['0'] =0 ;  
	$gs['2']['1'] =11 ;  
	$gs['2']['2'] =22 ;  
	$gs['2']['3'] =33 ;  
	$gs['2']['4'] =44 ;  
	$gs['2']['5'] =55 ;  
	$gs['2']['6'] =66 ;  
	$gs['2']['7'] =77 ;  
	$gs['2']['8'] =88 ;  
	$gs['2']['9'] =99 ;  
	$gs['2']['10'] =110 ;  
	$gs['2']['11'] =120 ;  
	$gs['2']['12'] =131 ; 
	//********************// 
	$gs['3']['c'] =3 ;
	$gs['3']['ifc'] =3200 ;
	$gs['3']['i'] =240 ;
	$gs['3']['0'] =0 ;  
	$gs['3']['1'] =12 ;  
	$gs['3']['2'] =24 ;  
	$gs['3']['3'] =36 ;  
	$gs['3']['4'] =48 ;  
	$gs['3']['5'] =60 ;  
	$gs['3']['6'] =72 ;  
	$gs['3']['7'] =84 ;  
	$gs['3']['8'] =96 ;  
	$gs['3']['9'] =108 ;  
	$gs['3']['10'] =120 ;  
	$gs['3']['11'] =132 ;  
	$gs['3']['12'] =144 ;
	//********************//
	$gs['4']['c'] =4 ;
	$gs['4']['ifc'] =3200 ;
	$gs['4']['i'] =263 ;
	$gs['4']['0'] =0 ; 
	$gs['4']['1'] =13 ;  
	$gs['4']['2'] =26 ;  
	$gs['4']['3'] =39 ;  
	$gs['4']['4'] =53 ;  
	$gs['4']['5'] =66 ;  
	$gs['4']['6'] =79 ;  
	$gs['4']['7'] =92 ;  
	$gs['4']['8'] =105 ;  
	$gs['4']['9'] =118 ;  
	$gs['4']['10'] =132 ;  
	$gs['4']['11'] =145 ;  
	$gs['4']['12'] =158 ;
	//*******************//
	$gs['5']['c'] =5 ;
	$gs['5']['ifc'] =3200 ;
	$gs['5']['i'] =288 ; 
	$gs['5']['0'] =0 ;  
	$gs['5']['1'] =14 ;  
	$gs['5']['2'] =29 ;  
	$gs['5']['3'] =43 ;  
	$gs['5']['4'] =58 ;  
	$gs['5']['5'] =72 ;  
	$gs['5']['6'] =86 ;  
	$gs['5']['7'] =101 ;  
	$gs['5']['8'] =115 ;  
	$gs['5']['9'] =130 ;  
	$gs['5']['10'] =144 ;  
	$gs['5']['11'] =158 ;  
	$gs['5']['12'] =173 ;
	//********************//
	$gs['6']['ifc'] =3200 ;
	$gs['6']['c'] =6 ;
	$gs['6']['i'] =315 ;
	$gs['6']['0'] =0 ;  
	$gs['6']['1'] =16 ;  
	$gs['6']['2'] =32 ;  
	$gs['6']['3'] =47 ;  
	$gs['6']['4'] =63 ;  
	$gs['6']['5'] =79 ;  
	$gs['6']['6'] =95 ;  
	$gs['6']['7'] =110 ;  
	$gs['6']['8'] =126 ;  
	$gs['6']['9'] =142 ;  
	$gs['6']['10'] =158 ;  
	$gs['6']['11'] =173 ;  
	$gs['6']['12'] =189 ;
	//********************//
	$gs['7']['c'] =7 ;
	$gs['7']['ifc'] =2500 ;
	$gs['7']['i'] =348 ;
	$gs['7']['0'] =0 ;   
	$gs['7']['1'] =17 ;  
	$gs['7']['2'] =35 ;  
	$gs['7']['3'] =52 ;  
	$gs['7']['4'] =70 ;  
	$gs['7']['5'] =87 ;  
	$gs['7']['6'] =104 ;  
	$gs['7']['7'] =122 ;  
	$gs['7']['8'] =139 ;  
	$gs['7']['9'] =157 ;  
	$gs['7']['10'] =174 ;  
	$gs['7']['11'] =191 ;  
	$gs['7']['12'] =209 ;
	//********************//
	$gs['8']['c'] =8 ;
	$gs['8']['ifc'] =2500 ;
	$gs['8']['i'] =379 ;
	$gs['8']['0'] =0 ; 
	$gs['8']['1'] =19 ;  
	$gs['8']['2'] =38 ;  
	$gs['8']['3'] =57 ;  
	$gs['8']['4'] =76 ;  
	$gs['8']['5'] =95 ;  
	$gs['8']['6'] =114 ;  
	$gs['8']['7'] =133 ;  
	$gs['8']['8'] =152 ;  
	$gs['8']['9'] =171 ;  
	$gs['8']['10'] =190 ;  
	$gs['8']['11'] =208 ;  
	$gs['8']['12'] =225 ;
	//********************//
	$gs['9']['c'] =9 ;
	$gs['9']['ifc'] =2000 ;
	$gs['9']['i'] =418 ;  
	$gs['9']['0'] =0 ; 
	$gs['9']['1'] =21 ; 
	$gs['9']['2'] =42 ;  
	$gs['9']['3'] =63 ;  
	$gs['9']['4'] =84 ;  
	$gs['9']['5'] =105 ;  
	$gs['9']['6'] =125 ;  
	$gs['9']['7'] =146 ;  
	$gs['9']['8'] =167 ;  
	$gs['9']['9'] =188 ;  
	$gs['9']['10'] =209 ;  
	$gs['9']['11'] =230 ;  
	$gs['9']['12'] =251 ;
	//********************//
	$gs['10']['c'] =10 ;
	$gs['10']['ifc'] =2000 ;
	$gs['10']['i'] =453 ; 
	$gs['10']['0'] =0 ; 
	$gs['10']['1'] =23 ;  
	$gs['10']['2'] =45 ;  
	$gs['10']['3'] =68 ;  
	$gs['10']['4'] =91 ;  
	$gs['10']['5'] =113 ;  
	$gs['10']['6'] =136 ;  
	$gs['10']['7'] =159 ;  
	$gs['10']['8'] =181 ;  
	$gs['10']['9'] =204 ;  
	$gs['10']['10'] =227 ;  
	$gs['10']['11'] =249 ;  
	$gs['10']['12'] =272 ;
	//********************//
	$gs['11']['c'] =11 ;
	$gs['11']['ifc'] =1500 ;
	$gs['11']['i'] =498 ;
	$gs['11']['0'] =0 ;   
	$gs['11']['1'] =25 ;  
	$gs['11']['2'] =50 ;  
	$gs['11']['3'] =75 ;  
	$gs['11']['4'] =100 ;  
	$gs['11']['5'] =125 ;  
	$gs['11']['6'] =149 ;  
	$gs['11']['7'] =174 ;  
	$gs['11']['8'] =199 ;  
	$gs['11']['9'] =224 ;  
	$gs['11']['10'] =249 ;  
	$gs['11']['11'] =274 ;  
	$gs['11']['12'] =299 ;
	//********************//
	$gs['12']['c'] =12 ;
	$gs['12']['ifc'] =1500 ;
	$gs['12']['i'] =537 ; 
	$gs['12']['0'] =0 ; 
	$gs['12']['1'] =27 ;  
	$gs['12']['2'] =54 ;  
	$gs['12']['3'] =81 ;  
	$gs['12']['4'] =107 ;  
	$gs['12']['5'] =134 ;  
	$gs['12']['6'] =161 ;  
	$gs['12']['7'] =188 ;  
	$gs['12']['8'] =215 ;  
	$gs['12']['9'] =242 ;  
	$gs['12']['10'] =269 ;  
	$gs['12']['11'] =295 ;  
	$gs['12']['12'] =322 ;
	//********************//
	$gs['13']['c'] =13 ;
	$gs['13']['ifc'] =1500 ;
	$gs['13']['i'] =578 ; 
	$gs['13']['0'] =0; 
	$gs['13']['1'] =29;  
	$gs['13']['2'] =58 ;  
	$gs['13']['3'] =87 ;  
	$gs['13']['4'] =116 ;  
	$gs['13']['5'] =145 ;  
	$gs['13']['6'] =173 ;  
	$gs['13']['7'] =202 ;  
	$gs['13']['8'] =231 ;  
	$gs['13']['9'] =260 ;  
	$gs['13']['10'] =289 ;  
	$gs['13']['11'] =318 ;  
	$gs['13']['12'] =347 ;
	//********************//
	$gs['14']['c'] =14 ;
	$gs['14']['ifc'] =1500 ;
	$gs['14']['i'] =621 ; 
	$gs['14']['0'] =0; 
	$gs['14']['1'] =31;  
	$gs['14']['2'] =62 ;  
	$gs['14']['3'] =93 ;  
	$gs['14']['4'] =124 ;  
	$gs['14']['5'] =155 ;  
	$gs['14']['6'] =186 ;  
	$gs['14']['7'] =217 ;  
	$gs['14']['8'] =248 ;  
	$gs['14']['9'] =279 ;  
	$gs['14']['10'] =311 ;  
	$gs['14']['11'] =342 ;  
	$gs['14']['12'] =373 ;
	//********************//
	$gs['15']['c'] =15 ;
	$gs['15']['ifc'] =1500 ;
	$gs['15']['i'] =666 ;
	$gs['15']['0'] =0;  
	$gs['15']['1'] =33;  
	$gs['15']['2'] =67 ;  
	$gs['15']['3'] =100 ;  
	$gs['15']['4'] =133 ;  
	$gs['15']['5'] =167 ;  
	$gs['15']['6'] =200 ;  
	$gs['15']['7'] =233 ;  
	$gs['15']['8'] =266 ;  
	$gs['15']['9'] =300 ;  
	$gs['15']['10'] =333 ;  
	$gs['15']['11'] =366 ;  
	$gs['15']['12'] =400 ;
	//********************//
	$gs['16']['c'] =16 ;
	$gs['16']['ifc'] =1500 ;
	$gs['16']['i'] =713 ;
	$gs['16']['0'] =0; 
	$gs['16']['1'] =36;  
	$gs['16']['2'] =71;  
	$gs['16']['3'] =107 ;  
	$gs['16']['4'] =143 ;  
	$gs['16']['5'] =178 ;  
	$gs['16']['6'] =214 ;  
	$gs['16']['7'] =250 ;  
	$gs['16']['8'] =285 ;  
	$gs['16']['9'] =321 ;  
	$gs['16']['10'] =357 ;  
	$gs['16']['11'] =392 ;  
	$gs['16']['12'] =428 ;
	//********************//
	$gs['17']['c'] =17 ;
	$gs['17']['ifc'] =1500 ;
	$gs['17']['i'] =762 ;
	$gs['17']['0'] =0;   
	$gs['17']['1'] =38;  
	$gs['17']['2'] =76;  
	$gs['17']['3'] =114 ;  
	$gs['17']['4'] =152 ;  
	$gs['17']['5'] =191 ;  
	$gs['17']['6'] =229 ;  
	$gs['17']['7'] =267 ;  
	$gs['17']['8'] =305 ;  
	$gs['17']['9'] =343 ;  
	$gs['17']['10'] =381 ;  
	$gs['17']['11'] =419 ;  
	$gs['17']['12'] =457 ;
	//********************//
	$gs['hc1']['c'] =171 ;
	$gs['hc1']['ifc'] =0 ;
	$gs['hc1']['i'] =930 ; 
	$gs['hc1']['0'] =0; 
	$gs['hc1']['1'] =47;  
	$gs['hc1']['2'] =93;  
	$gs['hc1']['3'] =140 ;  
	$gs['hc1']['4'] =186 ;  
	$gs['hc1']['5'] =233 ;  
	$gs['hc1']['6'] =279 ;  
	$gs['hc1']['7'] =326 ;  
	$gs['hc1']['8'] =372 ;  
	$gs['hc1']['9'] =419 ;  
	$gs['hc1']['10'] =465 ;  
	$gs['hc1']['11'] =512 ;  
	$gs['hc1']['12'] =558 ;
	//********************//
	$gs['hc2']['c'] =172;
	$gs['hc2']['ifc'] =0 ;
	$gs['hc2']['i'] =990 ;
	$gs['hc2']['0'] =0;   
	$gs['hc2']['1'] =50;  
	$gs['hc2']['2'] =99;  
	$gs['hc2']['3'] =149 ;  
	$gs['hc2']['4'] =198 ;  
	$gs['hc2']['5'] =248 ;  
	$gs['hc2']['6'] =297 ;  
	$gs['hc2']['7'] =347 ;  
	$gs['hc2']['8'] =396 ;  
	$gs['hc2']['9'] =446 ;  
	$gs['hc2']['10'] =495 ;  
	$gs['hc2']['11'] =545 ;  
	$gs['hc2']['12'] =594 ;
	//********************//
	$gs['hc3']['c'] =173 ;
	$gs['hc3']['ifc'] =0 ;
	$gs['hc3']['i'] =1055 ;
	$gs['hc3']['0'] =0;  
	$gs['hc3']['1'] =53;  
	$gs['hc3']['2'] =106;  
	$gs['hc3']['3'] =158 ;  
	$gs['hc3']['4'] =211 ;  
	$gs['hc3']['5'] =264 ;  
	$gs['hc3']['6'] =317 ;  
	$gs['hc3']['7'] =369 ;  
	$gs['hc3']['8'] =422 ;  
	$gs['hc3']['9'] =475 ;  
	$gs['hc3']['10'] =528 ;  
	$gs['hc3']['11'] =580 ;  
	$gs['hc3']['12'] =633 ;
	//********************//
	$gs['hc4']['c'] =174 ;
	$gs['hc4']['ifc'] =0 ;
	$gs['hc4']['i'] =1125 ; 
	$gs['hc4']['0'] =0; 
	$gs['hc4']['1'] =56;  
	$gs['hc4']['2'] =113;  
	$gs['hc4']['3'] =169 ;  
	$gs['hc4']['4'] =225 ;  
	$gs['hc4']['5'] =281 ;  
	$gs['hc4']['6'] =338 ;  
	$gs['hc4']['7'] =394 ;  
	$gs['hc4']['8'] =450 ;  
	$gs['hc4']['9'] =506 ;  
	$gs['hc4']['10'] =563 ;  
	$gs['hc4']['11'] =619 ;  
	$gs['hc4']['12'] =675 ;
	//********************//
	$gs['hc5']['c'] =175 ;
	$gs['hc5']['ifc'] =0 ;
	$gs['hc5']['i'] =1200 ; 
	$gs['hc5']['0'] =0;
	$gs['hc5']['1'] =60;  
	$gs['hc5']['2'] =120;  
	$gs['hc5']['3'] =180 ;  
	$gs['hc5']['4'] =240 ;  
	$gs['hc5']['5'] =300 ;  
	$gs['hc5']['6'] =360 ;  
	$gs['hc5']['7'] =420 ;  
	$gs['hc5']['8'] =480 ;  
	$gs['hc5']['9'] =540 ;  
	$gs['hc5']['10'] =600 ;  
	$gs['hc5']['11'] =660 ;  
	$gs['hc5']['12'] =720 ;

	//********************//
	$gs['hc6']['c'] =176 ;
	$gs['hc6']['ifc'] =0 ;
	$gs['hc6']['i'] =1280 ;
	$gs['hc6']['0'] =0;  
	$gs['hc6']['1'] =64;  
	$gs['hc6']['2'] =128;  
	$gs['hc6']['3'] =192 ;  
	$gs['hc6']['4'] =256 ;  
	$gs['hc6']['5'] =320 ;  
	$gs['hc6']['6'] =384 ;  
	$gs['hc6']['7'] =448 ;  
	$gs['hc6']['8'] =512 ;  
	$gs['hc6']['9'] =576 ;  
	$gs['hc6']['10'] =640 ;  
	$gs['hc6']['11'] =704 ;  
	$gs['hc6']['12'] =768 ;

	//********************//
	$gs['hc7']['c'] =177 ;
	$gs['hc7']['ifc'] =0 ;
	$gs['hc7']['i'] =1480 ;
	$gs['hc7']['0'] =0;  
	$gs['hc7']['1'] =74;  
	$gs['hc7']['2'] =148;  
	$gs['hc7']['3'] =222 ;  
	$gs['hc7']['4'] =296 ;  
	$gs['hc7']['5'] =370 ;  
	$gs['hc7']['6'] =444 ;  
	$gs['hc7']['7'] =518 ;  
	$gs['hc7']['8'] =592 ;  
	$gs['hc7']['9'] =666 ;  
	$gs['hc7']['10'] =740 ;  
	$gs['hc7']['11'] =814 ;  
	$gs['hc7']['12'] =888 ;
	return $gs[$h][$v] ;
	}
   //**********************************************************************//
    function entete()
    {
	$this->setPrintHeader(false);
    $this->setPrintFooter(false);
	$this->AddPage();
    $this->SetDisplayMode('fullpage','single'); 
	$this->setRTL(true);
	$date1=date("Y");
    $this->SetFont('aefurat', '', 18);
    $this->Text(60,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
    $this->Text(55,20,"وزارة الصحة و السكان و إصلاح المستشفيات");
    $this->Text(5,30,"مديرية الصحة و السكان لولاية الجلفة");
    $this->Text(5,40,"المؤسسة العمومية الاستشفائية عين وسارة");
    $this->Text(5,50,"المديرية الفرعية للموارد البشرية ");
    $this->Text(5,60,"الرقم:");
	$this->Text(35,60,$date1."/");
	// $this->Text(30,60,"2013");
    }
    
	function titre($ndp)
    {
	$this-> mysqlconnect();
	$sql = "SELECT Nomarab,Prenom_Arabe,Date_Premier_Recrutement,Date_Naissance,Commune_Naissancear,Wilaya_Naissancear,rnvgradear,FILIERE,DATEARRIVE FROM grh WHERE  idp = '".$ndp."' "; 
    $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
    $result = mysql_fetch_array( $requete ); 
    mysql_free_result($requete);
		 $this->SetLineWidth(0.4);
		 $this->Rect(5, 5, 200, 285 ,'D');
		 $this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
         $this->SetFont('aefurat', '', 28);
         $this->SetXY(70,80);
         $this->Cell(65,15,'شهادة عمل',1,1,'C');
	     $this->SetFont('aefurat', '', 18);
		 $this->Text(5,110," يشهد السيـد مديـرالمؤسسة العمومية الاستشفائية بعين وسارة بأن السيد(ة):");
		 $this->Text(5,120," الاسم :");
		 $this->Text(100,120," اللقب :");
		 $this->Text(5,130,"المولود (ة) بتاريخ : ");
		 $this->Text(82,130," بـ");
		 $this->Text(150,130," ولاية ");
		 $this->Text(5,140,"تم تعيينه (ها) بتاريخ:");
		 $this->Text(60,160,"و"." (ت) يعمل بمؤسستنا كما يلي : ");
		 $this->Text(10,170,"الرتبة :  ");
		 $this->Text(10,180,"منذ :");
		 $this->Text(65,180,"إلى غاية يومنا هذا ");
		 $this->Text(10,200,"سلمت هذه الشهادة للمعني (ة) بناء على طلب منه (ها) لغرض ملف اداري");
		 $this->Text(60,210,"و في حدود ما يسمح به القانون");
		 $this->Text(128,220,"عين وسارة في :  ");
		 $this->Text(150,230," المدير");
		 $this->SetFont('aefurat', '', 12);
		 $this->Text(5,240," حررت من طرف :");//
		 $this->Text(6,245," السيد(ة):".$_SESSION["USER"]);//
		 $this->Code39(172,252,$ndp,1,5);
		 $this->SetFont('aefurat', '', 28);
		 $date=date("Y-m-d");
	$this->SetTextColor(225,0,0);
	$this->SetFont('aefurat','I', 19);
	$this->Text(165,220,$date);
	$this->Text(120,120,$result["Nomarab"]);
	$this->Text(25,120,$result["Prenom_Arabe"]);
	$this->Text(50,130,$result["Date_Naissance"]);
	$this->Text(54,140,$result["Date_Premier_Recrutement"]);
	$this->Text(95,130,$this->nbrtostring("grh","com","IDCOM",$result["Commune_Naissancear"],"communear"));
	$this->Text(165,130,$this->nbrtostring("grh","wil","IDWIL",$result["Wilaya_Naissancear"],"WILAYASAR"));
	$this->Text(30,170,$this->nbrtostring("grh","grade","idg",$result["rnvgradear"],"gradear"));
	
	if($result["rnvgradear"]==1 or $result["rnvgradear"]==3 )
	{
	$this->Text(88,170," في ".$this->nbrtostring("grh","specialite","idspecialite",$result["FILIERE"],"specialitear"));
	}
	$this->Text(26,180,$result["DATEARRIVE"]);
    }
	function titreFICHEREN($ndp)
    {
	$this-> mysqlconnect();
	$sql = "SELECT * FROM grh WHERE  idp = '".$ndp."' "; 
    $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
    $result = mysql_fetch_array( $requete ); 
    mysql_free_result($requete);
		 $this->SetLineWidth(0.4);
		 $this->Rect(5, 5, 200, 285 ,'D');
		 $this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
         $this->SetFont('aefurat', '', 28);
         $this->SetXY(70,80);
         $this->Cell(65,15,'استمارة معلومات',1,1,'C');
	     $this->SetFont('aefurat', '', 18);
		 $this->Text(6,100,"الاسم :");
		 $this->Text(6,110,"اللقب :");
		 $this->Text(6,120,"تاريخ الميلاد :");
		 $this->Text(6,130,"مكان الميلاد :");
		 $this->Text(6,140,"اسم الاب : ");
		 $this->Text(6,150,"اسم و لقب الام :");
		 $this->Text(6,160,"الحالة العائلية :");
		 $this->Text(6,170,"عدد الاولاد :");
		 $this->Text(6,180,"الرتبة :");
		 $this->Text(6,190,"تاريخ التوظيف :"); $this->Text(90,190,"تاريخ الإلتحاق :");
		 $this->Text(6,200,"رقم بطاقة التعريف :");
		 $this->Text(6,210,"رقم الضمان الاجتماعي :");
		 $this->Text(6,220,"العنوان :");
		 $this->Text(128,230,"عين وسارة في :  ");
		 $this->Text(150,240," المدير");
		 $this->SetFont('aefurat', '', 12);
		 $this->Text(5,250," حررت من طرف :");//
		 $this->Text(6,255," السيد(ة):".$_SESSION["USER"]);//
		 $this->Code39(172,262,$ndp,1,5);
		 $this->SetFont('aefurat', '', 28);
		 $date=date("Y-m-d");
	$this->SetTextColor(225,0,0);
	$this->SetFont('aefurat','I', 19);
	$this->Text(165,230,$date);
	$this->Text(25,100,$result["Prenom_Arabe"]);
	$this->Text(25,110,$result["Nomarab"]);
	$this->Text(40,120,$result["Date_Naissance"]);
	$this->Text(40,130,$this->nbrtostring("grh","com","IDCOM",$result["Commune_Naissancear"],"communear")." ولاية ".$this->nbrtostring("grh","wil","IDWIL",$result["Wilaya_Naissancear"],"WILAYASAR"));
	$this->Text(30,140,$result["pere"]);
	$this->Text(45,150,$result["mere"]);
	$this->Text(25,180,$this->nbrtostring("grh","grade","idg",$result["rnvgradear"],"gradear"));
	$this->Text(43,190,$result["Date_Premier_Recrutement"]);$this->Text(126,190,$result["DATEARRIVE"]);
	if($result["rnvgradear"]==1 or $result["rnvgradear"]==3 )
	{
		$this->Text(88,180," في ".$this->nbrtostring("grh","specialite","idspecialite",$result["FILIERE"],"specialitear"));
	}
	$this->Text(43,160,$this->nbrtostring("grh","sfamiliale","idsfamiliale",$result["Situation_familliale"],"sfamilialear"));
    $this->Text(35,170,$result["NBRENF"]);
	$this->Text(63,210,$result["NSECU"]);
	$this->Text(28,220,$result["ADRESSEAR"]);
    }
	
	function titrec($ndp)
    {
	$this-> mysqlconnect();
	$sql = "SELECT Motif_Cessation,Date_Cessation,Nomarab,Prenom_Arabe,Date_Naissance,Commune_Naissancear,Wilaya_Naissancear,rnvgradear,FILIERE,DATEARRIVE FROM grh WHERE  idp = '".$ndp."' "; 
    $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
    $result = mysql_fetch_array( $requete ); 
    mysql_free_result($requete);
		 $this->SetLineWidth(0.4);
		 $this->Rect(5, 5, 200, 285 ,'D');
		 $this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
         $this->SetFont('aefurat', '', 28);
         $this->SetXY(70,80);
         $this->Cell(65,15,'شهادة عمل',1,1,'C');
	     $this->SetFont('aefurat', '', 18);
		 $this->Text(5,110," يشهد السيـد مديـرالمؤسسة العمومية الاستشفائية بعين وسارة بأن السيد(ة):");
		 $this->Text(5,120," الاسم :");
		 $this->Text(100,120," اللقب :");
		 $this->Text(5,130,"المولود (ة) بتاريخ : ");
		 $this->Text(82,130," بـ");
		 $this->Text(150,130," ولاية ");
		 $this->Text(60,160," (ت) يعمل بمؤسستنا كما يلي :");
		 $this->Text(10,170,"الرتبة :  ");
		 $this->Text(10,180,"منذ :");
		 $this->Text(65,180,"إلى غاية ");
		 $this->Text(10,200,"سلمت هذه الشهادة للمعني (ة) بناء على طلب منه (ها) لغرض ملف اداري");
		 $this->Text(60,210,"و في حدود ما يسمح به القانون");
		 $this->Text(128,220,"عين وسارة في :  ");
		 $this->Text(150,230," المدير");
		 $this->SetFont('aefurat', '', 12);
		 $this->Text(5,240," حررت من طرف :");//
		 $this->Text(6,245," السيد(ة):".$_SESSION["USER"]);//
		 $this->Code39(172,252,$ndp,1,5);
		 $this->SetFont('aefurat', '', 28);
		 $date=date("Y-m-d");
	$this->SetTextColor(225,0,0);
	$this->SetFont('aefurat','I', 19);
	$this->Text(165,220,$date);
	$this->Text(120,120,$result["Nomarab"]);
	$this->Text(25,120,$result["Prenom_Arabe"]);
	$this->Text(50,130,$result["Date_Naissance"]);
	$this->Text(95,130,$this->nbrtostring("grh","com","IDCOM",$result["Commune_Naissancear"],"communear"));
	$this->Text(165,130,$this->nbrtostring("grh","wil","IDWIL",$result["Wilaya_Naissancear"],"WILAYASAR"));
	$this->Text(30,170,$this->nbrtostring("grh","grade","idg",$result["rnvgradear"],"gradear"));
	if($result["rnvgradear"]==1 or $result["rnvgradear"]==3 )
	{
		$this->Text(88,170,"في ".$this->nbrtostring("grh","specialite","idspecialite",$result["FILIERE"],"specialitear"));
	}
	$this->Text(26,180,$result["DATEARRIVE"]);
	$this->Text(120,180,"("."تاريخ ال".$this->nbrtostring("grh","causedepart","idcausedepart",$result["Motif_Cessation"],"causedepartar").")");
    $A = substr($result["Date_Cessation"],0,2);
	$M = substr($result["Date_Cessation"],3,2);
	$J = substr($result["Date_Cessation"],6,4);
	$Date_Cessation=$J."-".$M."-".$A;
    $this->Text(87,180,$Date_Cessation);
    }	
  
	function entetefr($ndp)
		{
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 14);
        $this->SetDisplayMode('fullpage','single');//mode d affichage 
        $this->AddPage();
		$this->SetLineWidth(0.4);
		$this->Rect(5, 5, 200, 285 ,'D');
		$this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
		$this->Text(30,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(5,20,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(5,30,"Direction de la Santé Wilaya de Djelfa");
		$this->Text(5,40,"Etablissement public hospitalier  D'Ain - Oussera");
		$this->Text(5,50,"S/Direction des Ressources  Humaines ");
		$this->Text(5,60,"N°.........../");
		$this->Text(28,60,date("Y"));
		$this->SetFont('aefurat', '', 20);
		$this->Text(60,80," ATTESTATION DE TRAVAIL");
		$this->SetFont('aefurat', '', 14);
		$this->Text(10,110," Je soussigné , Directeur d établissement public hospitalier d'Ain Oussera Atteste que : ");
		$this->Text(100,120," Prénom:");
		$this->Text(10,120,"Nom:");
		$this->Text(140,130,"wilaya de");
		$this->Text(65,130," a");
		$this->Text(10,130,"Né(e) le:");
		$this->Text(10,140,"Date premier recrutement:");
		$this->Text(10,160,"Est employé(e) a notre  établissement en qualité de:");
		$this->Text(70,180,"jusqu'à ce jour.");
		$this->Text(10,180,"Depuis  Le:");
		$this->Text(10,200,"En foi de quoi , la présente attestation est délivrée sur demande de ");
		$this->Text(10,210,"l'intéressé(e)  pour servir et valoir ce que de droit");
		$this->Text(120,230,"AIN - OUSSERA , LE");
		$this->Text(120,240," LE DIRECTEUR");
		$this->SetFont('aefurat', '', 12);
		$this->Text(5,250," Etabblit par :");
		$this->Text(12,255,$session);
		// $this->Code39(7,262,$ndp,1,5);
		}
		function fichemedicale($ndp)
		{
	    $session=$_SESSION["USER"];
		// $this->setPrintHeader(false);
        // $this->setPrintFooter(false);
        // $this->SetFont('aefurat', '', 14);
        // $this->SetDisplayMode('fullpage','single');//mode d affichage 
        // $this->AddPage();
		// $this->SetLineWidth(0.4);
		// $this->Rect(78, 1, 70, 100 ,'D');
		// $this->Rect(1, 1, 70, 100 ,'D');
		// $this->SetFont('aefurat','B',6);
		// $this->Text(82,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE ");
	    // $this->Text(95,10,"DSP DE LA WILAYA DE DJELFA");
		// $this->Text(85,15,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA");
		
		// $this->Line(80 ,23 ,145 ,23 );
		// $this->SetFont('aefurat','B',14);
		// $this->Text(90,48,"FICHE MEDICALE");
		
		// $this->SetFont('aefurat','B',10);
		// $this->Text(80,60,"SERVICE D'HOSPITALISATION");
		// $this->Text(80,65,".........................");
		// $this->Text(80,85,"GROUPAGE SANGUIN");
		// $this->Text(80,90,"..................");
		}
		
		function CSEJOUR($idp)
		{
		$this-> mysqlconnect();
	    $sql = "SELECT * FROM tpat WHERE idp = '".$idp."' "; 
        $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
        if( $result = mysql_fetch_object( $requete ) )
        {
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 14);
        $this->SetDisplayMode('fullpage','single');//mode d affichage 
        $this->AddPage();
		$this->SetLineWidth(0.4);
		$this->Rect(5, 5, 200, 285 ,'D');
		$this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
		$this->Text(30,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(5,20,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(5,30,"Direction de la Santé Wilaya de Djelfa");
		$this->Text(5,40,"Etablissement public hospitalier  D'Ain - Oussera");
		$this->Text(5,50,"Service:Bureau des entrées");
		$this->Text(5,60,"N°.........../");
		$this->Text(28,60,date("Y"));
		$this->SetFont('aefurat', '', 20);
		$this->Text(62,80," CERTIFICAT DE SEJOUR");
		$this->SetFont('aefurat', '', 14);
		$this->Text(10,110," Je soussigné,directeur de l'Etablissement public hospitalier  D'Ain - Oussera certifie que ");
		$this->Text(10,120,"Le(La) nommé(e):".$result->NOM."_".$result->PRENOM);     $this->Text(120,120,"Matricule: ");
		$this->Text(10,130,"Age De: ".$result->AGE." Ans");
		$this->Text(10,140,"Est Entrée le: ".$result->DATE);
		$this->Text(10,150,"Est Sortie Le:");              $this->Text(120,150,"Mode De Sortie:");
		$this->Text(10,160,"Service de: ".$this->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));
		$this->Text(20,180,"LE MEDECIN:");$this->Text(20,190,"Dr ".$session);
		$this->Text(110,200,"Ain Oussera Le ".date("d-m-Y"));
		$this->Text(120,210,"LE DIRECTEUR");
		$this->Text(10,270,"Important : A garder dans le dossier médical");
		$this->SetFont('aefurat', '', 12);
         }
		}
		function entetefrcao($idp)
		{
		$this-> mysqlconnect();
	    $sql = "SELECT * FROM tpat WHERE idp = '".$idp."' "; 
        $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
        if( $result = mysql_fetch_object( $requete ) )
        {
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 14);
        $this->SetDisplayMode('fullpage','single');//mode d affichage 
        $this->AddPage();
		$this->SetLineWidth(0.4);
		$this->Rect(5, 5, 200, 285 ,'D');
		$this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
		$this->Text(30,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(5,20,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(5,30,"Direction de la Santé Wilaya de Djelfa");
		$this->Text(5,40,"Etablissement public hospitalier  D'Ain - Oussera");
		$this->Text(5,50,"Service:".$this->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));
		$this->Text(5,60,"N°.........../");
		$this->Text(28,60,date("Y"));
		$this->SetFont('aefurat', '', 20);
		$this->Text(45,80," Autorisation d'opérer un patient mineur");
		$this->SetFont('aefurat', '', 14);
		$this->Text(10,100,"Nom :".$result->NOM);  $this->Text(70,100,"Prénom :".$result->PRENOM); $this->Text(130,100,"Date De Naissance :". $this->dateUS2FR($result->DATENAISSANCE));
		$this->Text(10,110," Je soussigné certifie ètre representant légal de l'enfant désigné si dessus : ");
		$this->Text(10,120," Autorise l'equipe médicochirurgicale de Etablissement public hospitalier  D'Ain - Oussera ");
		$this->Text(10,130,"a l'opérer de  :......................................................................................................");
		$this->Text(10,140,"Et a utiliser tous les moyens necessaires a sa prise en charge y compris l'anesthesie generale");
		$this->Text(80,160,"Pére / Mére / Tuteur");
		$this->Text(10,170,"Nom:...........................................");  $this->Text(110,170,"Signature Et Empreinte Digitale");
		$this->Text(10,180,"Prenom:......................................"); $this->Text(110,180,"......................................................");
		$this->Text(10,190,"Date De Naissance:....................");$this->Text(110,190,"......................................................");
		$this->Text(10,200,"N° CIN/PC:................................");
		
		$this->Text(20,220,"LE MEDECIN:");$this->Text(110,220,"Ain Oussera Le ".date("d-m-Y"));
		$this->Text(20,230,"Dr ".$session);$this->Text(120,230,"LE DIRECTEUR");
		
		$this->Text(10,270,"Important : A garder dans le dossier médical");
		$this->SetFont('aefurat', '', 12); //0771218289 Dr mehalbi 
		}
		}
		function P0($y)//entete fiche navette
		{
		$this->SetXY(10,$y); 	  
        $this->cell(40,6,"",1,0,'C',0);
		$this->SetXY(50,$y); 	  
        $this->cell(40,6,"",1,0,'C',0);
		$this->SetXY(90,$y); 	  
        $this->cell(40,6,"",1,0,'C',0);
		$this->SetXY(90+40,$y); 	  
        $this->cell(30,6,"",1,0,'C',0);
		$this->SetXY(90+40+30,$y); 	  
        $this->cell(40,6,"",1,0,'C',0);
		}
		
		function P2($y)//entete fiche navette
		{
		$this->SetXY(10,$y); 	  
        $this->cell(40,10,"",1,0,'C',0);
		$this->SetXY(50,$y); 	  
        $this->cell(40,10,"",1,0,'C',0);
		$this->SetXY(90,$y); 	  
        $this->cell(20,10,"",1,0,'C',0);
		$this->SetXY(90+20,$y); 	  
        $this->cell(90,10,"",1,0,'C',0);
		$this->SetXY(90+20+90,$y); 	  
        $this->cell(30,10,"",1,0,'C',0);
		$this->SetXY(90+20+90+30,$y); 
		$this->cell(60,10,"",1,0,'C',0);
		}
		function P4($y)//entete fiche navette
		{
		$this->SetXY(10,$y); 	  
        $this->cell(20,10,"",1,0,'C',0);
		$this->SetXY(30,$y); 	  
        $this->cell(30,10,"",1,0,'C',0);
		$this->SetXY(60,$y); 	  
        $this->cell(20,10,"",1,0,'C',0);
		$this->SetXY(60+20,$y); 	  
        $this->cell(60,10,"",1,0,'C',0);
		$this->SetXY(60+20+60,$y); 	  
        $this->cell(20,10,"",1,0,'C',0);
		$this->SetXY(160,$y); 
		$this->cell(40,10," ",1,0,'C',0);
		}
		function P44($y,$d,$c,$n,$co,$p)//entete fiche navette
		{
		$this->SetXY(10,$y); 	  
        $this->cell(20,5,$d,1,0,'C',0);
		$this->SetXY(30,$y); 	  
        $this->cell(30,5,"HEMODIALYSE",1,0,'C',0);
		$this->SetXY(60,$y); 	  
        $this->cell(20,5,$c,1,0,'C',0);
		$this->SetXY(60+20,$y); 	  
        $this->cell(60,5,$n,1,0,'L',0);
		$this->SetXY(60+20+60,$y); 	  
        $this->cell(20,5,$co,1,0,'C',0);
		$this->SetXY(160,$y); 
		$this->cell(40,5,$p,1,0,'C',0);
		}
		function P444($y,$d,$c,$dci,$pre,$four,$pra)//entete fiche navette
		{
		$this->SetXY(10,$y); 	  
        $this->cell(20,5,$d,1,0,'C',0);
		
		$this->SetXY(30,$y); 	  
        $this->cell(30,5,$c,1,0,'C',0);
		
		$this->SetXY(60,$y); 	  
        $this->cell(60,5,$dci,1,0,'L',0);
		
		$this->SetXY(120,$y); 	  
        $this->cell(20,5,$pre,1,0,'C',0);
		
		$this->SetXY(60+20+60,$y); 	  
        $this->cell(20,5,$four,1,0,'C',0);
		
		$this->SetXY(160,$y); 
		$this->cell(40,5,$pra,1,0,'C',0);
		}
		
		
		function P5($y)//entete fiche navette
		{
		$this->SetXY(10,$y); 	  
        $this->cell(20,10,"",1,0,'C',0);
		$this->SetXY(30,$y); 	  
        $this->cell(30,10,"",1,0,'C',0);
		$this->SetXY(60,$y); 	  
        $this->cell(20,10,"",1,0,'C',0);
		$this->SetXY(60+20,$y); 	  
        $this->cell(90,10,"",1,0,'C',0);
		$this->SetXY(60+20+90,$y); 	  
        $this->cell(30,10,"",1,0,'C',0);
		$this->SetXY(60+20+90+30,$y); 
		$this->cell(40,10,"",1,0,'C',0);
		$this->SetXY(60+180,$y); 
		$this->cell(40,10," ",1,0,'C',0);
		}
		function P6($y)//entete fiche navette
		{
		$this->SetXY(10,$y); 	  
        $this->cell(55,10,"",1,0,'C',0);
		$this->SetXY(65,$y); 	  
        $this->cell(30,10," ",1,0,'C',0);
		$this->SetXY(95,$y); 	  
        $this->cell(90,10," ",1,0,'C',0);
		$this->SetXY(185,$y); 	  
        $this->cell(25,10,"",1,0,'C',0);
		$this->SetXY(185+25,$y); 	  
        $this->cell(25,10,"",1,0,'C',0);
		$this->SetXY(190+45,$y); 
		$this->cell(50,10,"",1,0,'C',0);
		}
		
		
		
		function fichenavette($ndp)//entete fiche navette
		{
		$this-> mysqlconnect();
	    $sql = "SELECT * FROM tpat WHERE idp = '".$ndp."' "; 
        $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
        if( $result = mysql_fetch_object( $requete ) )
        {
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 10);
        $this->SetDisplayMode('fullpage','single');
        //P1 FICHE NAVETTE
		$this->AddPage();
		$this->Text(55,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(35,10,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(40.5,15,"DIRECTION DE LA SANTE ET DE LA POPULAION DE LA WILAYA DE DJELFA");
		$this->Text(60,20,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA");$this->Text(185,28," PAGE 1");
		$this->SetFont('aefurat', '', 24);
		$this->Text(65,28," FICHE NAVETTE");
		$this->SetFont('aefurat', '', 10);
		$this->Rect(10, 40, 190, 15 ,'D');
        $this->Text(10,40,"IDENTIFICATION DE L'ASSURE:");
        $this->Text(15,45,"Nom:".$result->NOM);$this->Text(105,45,"Prénom:".$result->PRENOM);
        $this->Text(15,50,"Date de Naissance:". $this->dateUS2FR($result->DATENAISSANCE));$this->Text(105,50,"N°Immatriculation:");
		$this->Rect(10, 40+18, 190, 15 ,'D');                                                          
		$this->Text(10,40+18,"IDENTIFICATION DU DEMUNI:");
        $this->Text(15,45+18,"Nom:");$this->Text(105,45+18,"Prénom:");
        $this->Text(15,50+18,"Date de Naissance:");$this->Text(105,50+18,"N°Immatriculation:");
		$this->Text(10,40+18+18+12,"IDENTIFICATION DU PATIENT:");$this->Rect(140, 40+18+18, 60, 15 ,'D');$this->Text(140,40+18+23,"N°SS:"); 
		$this->Rect(10, 40+18+18+18, 190, 20 ,'D'); 
		$this->Text(15,45+18+18+15,"1.N° D'ADMISSION:");$this->Text(80,45+18+18+15,"2.GROUPAGE SANGUIN:");$this->Text(150,45+18+18+15,"3.AGE:");
        $this->SetXY(15,45+18+18+20); 	  
        $this->cell(60,6,"",1,0,'L',0);
	    $this->SetXY(80,45+18+18+20); 	  
        $this->cell(60,6,"".$result->GROUPAGE,1,0,'C',0);
	    $this->SetXY(150,45+18+18+20); 	  
        $this->cell(40,6,"".$result->AGE,1,0,'C',0);
		$this->Rect(10,40+18+18+18+20, 190, 14 ,'D'); 
		$this->Text(15,40+18+18+18+23,"4.Nom:".$result->NOM);$this->Text(80,40+18+18+18+23,"5.Nom de jeune fille:");$this->Text(150,40+18+18+18+23,"6.Prénom:".$result->PRENOM);
		$this->Rect(10,40+18+18+18+38, 190, 48 ,'D');
		$this->Text(10,133,"7.Service:".$this->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));$this->Text(100,133,"8.Nom et qualité du chef de Service:");
		$this->Text(10,133+10,"9.Date d'entree: ".$result->DATE);$this->Text(100,133+10,"10.Heure d'entree:".$result->HEURE);
		$this->Text(10,133+20,"11.Nom de la Salle:".$this->nbrtostring("grh","service","ids",$result->SERVICEHOSP,"servicefr"));$this->Text(100,133+20,"12.N°lit:".$this->nbrtostring("grh","lit","idlit",$result->NLIT,"nlit"));
		$this->Text(10,133+30,"13.Nom Prénom et Qualite du medecin traitant: Dr ".$session);
		$this->Text(10,133+40,"14.Mode d'entree: NORMAL");$this->Text(100,133+40,"15.Code entrée:");
		$this->Text(10,133+55,"HOSPITALISATION DANS UN AUTRE SERVICE (Mouvement du malade):");
		$this->Rect(10,133+65, 190, 60 ,'D');
		$this->SetXY(10,133+65); 	  
        $this->cell(40,6,"16.SERVICE",1,0,'L',0);
		$this->SetXY(50,133+65); 	  
        $this->cell(40,6,"17.DATE D'ENTREE",1,0,'L',0);
		$this->SetXY(90,133+65); 	  
        $this->cell(40,6,"18.HEURE D'ENTREE",1,0,'L',0);
		$this->SetXY(90+40,133+65); 	  
        $this->cell(30,6,"19.N° DU LIT",1,0,'L',0);
		$this->SetXY(90+40+30,133+65); 	  
        $this->cell(40,6,"20.Médecin Traitant ",1,0,'L',0);
		
		$this->SetXY(10,198+6); // marge sup 13
		$this->mysqlconnect();
		$query11 = "SELECT * FROM  tchaserpat where idp='".$ndp."'  ORDER BY idchaserpat ASC limit 0,6 ";//
		$resultat11=mysql_query($query11);
		$totalmbr111=mysql_num_rows($resultat11);
		while($row11=mysql_fetch_object($resultat11))
		  {
		   $this->cell(40,6,$this->nbrtostring("grh","service","ids",$row11->schaserpat,"servicefr"),1,0,'C',0);//$this->dateUS2FR($row1->DATE)
		   $this->cell(40,6,$this->dateUS2FR($row11->datechaserpat),1,0,'C',0);//$this->nbrtostring("grh","t21","ID",$row1->MED1,"code")
		   $this->cell(40,6,$row11->heurechaserpat,1,0,'C',0);//$this->nbrtostring("grh","t21","ID",$row1->MED1,"dci")
		   $this->cell(30,6,$this->nbrtostring("grh","lit","idlit",$row11->nlitchaserpat,"nlit"),1,0,'C',0);
		   $this->cell(40,6,$row11->medecin,1,0,'C',0);
		   $this->SetXY(10,$this->GetY()+6); 
		  }
		
		
		$this->P0(204);
		$this->P0(204+6);
		$this->P0(204+12);
		$this->P0(204+18);
		$this->P0(204+24);
		$this->P0(204+30);
		$this->P0(204+36);
		$this->P0(204+42);
		$this->P0(204+48);
		//P3
		$this->AddPage('L', 'mm', 'A4', true, 'UTF-8', false);
		$this->Text(10,10,"1.ACTES MEDICAUX CHIRURGICAUX ET EXAMENTS  PRATIQUES DANS L'ETABLISSEMENT D'HOSPITALISATION :");
		$this->Text(10,15,"Y COMPRIS LES CONSULTATION EFFECTUEES PAR LES PRATICIENS EXTERNE AU SERVICE");$this->Text(265,10," PAGE 3");
		$this->SetXY(10,20); 	  
        $this->cell(40,10,"1.1 DATE",1,0,'C',0);
		$this->SetXY(50,20); 	  
        $this->cell(40,10,"1.2 SERVICE",1,0,'C',0);
		$this->SetXY(90,20); 	  
        $this->cell(140,5,"ACTE ET EXAMENS ",1,0,'C',0);
		$this->SetXY(90,25); 	  
        $this->cell(20,5,"1.3 Code",1,0,'C',0);
		$this->SetXY(90+20,25); 	  
        $this->cell(90,5,"1.4 Nature",1,0,'C',0);
		$this->SetXY(90+20+90,25); 	  
        $this->cell(30,5,"1.5 Cotation",1,0,'C',0);
		$this->SetXY(90+20+90+30,20); 
		$this->cell(60,10,"1.6.Nom Prenom et Qualite du Praticien ",1,0,'C',0);
		$this->P2(30);
		$this->P2(40);
		$this->P2(50);
		$this->P2(60);
		$this->P2(70);
		$this->P2(80);
		$this->P2(90);
		$this->P2(100);
		$this->P2(110);
		$this->P2(120);
		$this->P2(130);
		$this->P2(140);
		$this->P2(150);
		$this->P2(160);
		$this->P2(170);
		
		//P5
		$this->AddPage('L', 'mm', 'A4', true, 'UTF-8', false);
		$this->Text(10,10,"3.ACTES MEDICAUX CHIRURGICAUX ET EXAMENTS EFFECTUES DANS UNE STRUCTURE EXTERNE  :");
		$this->Text(10,15,"PUBLIC OU PRIVEE");$this->Text(265,10," PAGE 5");
		$this->SetXY(10,20); 	  
        $this->cell(20,10,"3.1 DATE",1,0,'C',0);
		$this->SetXY(30,20); 	  
        $this->cell(30,10,"3.2 SERVICE",1,0,'C',0);
		$this->SetXY(60,20); 	  
        $this->cell(140,5,"ACTE ET EXAMENS ",1,0,'C',0);
		$this->SetXY(60,25); 	  
        $this->cell(20,5,"3.3 Code",1,0,'C',0);
		$this->SetXY(60+20,25); 	  
        $this->cell(90,5,"3.4 Nature",1,0,'C',0);
		$this->SetXY(60+20+90,25); 	  
        $this->cell(30,5,"3.5 Cotation",1,0,'C',0);
		$this->SetXY(60+20+90+30,20); 
		$this->cell(40,5,"3.6.Nom Prenom  ",1,0,'C',0);
		$this->SetXY(60+20+90+30,25); 
		$this->cell(40,5,"et Qualite du paramedical ",1,0,'C',0);
		$this->SetXY(60+180,20); 
		$this->cell(40,10,"3.7 N°Prise En Charge ",1,0,'C',0);
		$this->P5(30);
		$this->P5(40);
		$this->P5(50);
		$this->P5(60);
		$this->P5(70);
		$this->P5(80);
		$this->P5(90);
		$this->P5(100);
		$this->P5(110);
		$this->P5(120);
		$this->P5(130);
		$this->P5(140);
		$this->P5(150);
		$this->P5(160);
		$this->P5(170);
		
		//P7 MEDICAMENTS
		$this->AddPage('L', 'mm', 'A4', true, 'UTF-8', false);
		
		$this->Text(130,10,"4.MEDICAMENTS :");$this->Text(265,10," PAGE 7");
		$this->SetXY(10,20); 	  
        $this->cell(55,5,"4.1 DATE ",1,0,'C',0);
		$this->SetXY(10,25); 	  
        $this->cell(55,5," DE LA PRESCRIPTION",1,0,'C',0);
		$this->SetXY(65,20); 	  
        $this->cell(30,5,"4.2 CODE ",1,0,'C',0);
		$this->SetXY(65,25); 	  
        $this->cell(30,5," DCI",1,0,'C',0);
		$this->SetXY(95,20); 	  
        $this->cell(90,5,"4.3 LIBELLE DCI   ",1,0,'C',0);
		$this->SetXY(95,25); 	  
        $this->cell(90,5," FORME ET DOSAGE  ",1,0,'C',0);
		$this->SetXY(185,20); 	  
        $this->cell(25,5,"4.4 QUANTITE ",1,0,'C',0);
		$this->SetXY(185,25); 	  
        $this->cell(25,5," PRESCRITE",1,0,'C',0);
		$this->SetXY(185+25,20); 	  
        $this->cell(25,5,"4.5 QUANTITE ",1,0,'C',0);
		$this->SetXY(185+25,25); 	  
        $this->cell(25,5," FOURNIE",1,0,'C',0);
		$this->SetXY(190+45,20); 
		$this->cell(50,5,"4.6.Nom Prenom  ",1,0,'C',0);
		$this->SetXY(190+45,25); 
		$this->cell(50,5,"Qualite du Praticien ",1,0,'C',0);
		//********************************************************************************************//
		$this->SetXY(10,30); // marge sup 13
		$this->mysqlconnect();
		$query1 = "SELECT * FROM medfn where idp='".$ndp."' limit 15,15";
		$resultat1=mysql_query($query1);
		$totalmbr11=mysql_num_rows($resultat1);
		while($row1=mysql_fetch_object($resultat1))
		  {
		   $this->cell(55,10,$this->dateUS2FR($row1->DATE),1,0,'C',0);
		   $this->cell(30,10,$this->nbrtostring("grh","t21","ID",$row1->MED1,"code"),1,0,'C',0);
		   $this->cell(90,10,$this->nbrtostring("grh","t21","ID",$row1->MED1,"dci"),1,0,'L',0);
		   $this->cell(25,10,$row1->QUT1,1,0,'C',0);
		   $this->cell(25,10,$row1->QUT1,1,0,'C',0);
		   $this->cell(50,10,"Dr ".$row1->USER,1,0,'C',0);
		   $this->SetXY(10,$this->GetY()+10); 
		  }
		$this->P6(30);
		$this->P6(40);
		$this->P6(50);
		$this->P6(60);
		$this->P6(70);
		$this->P6(80);
		$this->P6(90);
		$this->P6(100);
		$this->P6(110);
		$this->P6(120);
		$this->P6(130);
		$this->P6(140);
		$this->P6(150);
		$this->P6(160);
		$this->P6(170);
		//P8 SORTIE
		$this->AddPage('P', 'mm', 'A4', true, 'UTF-8', false);
		$this->SetFont('aefurat', '', 24);
		$this->Text(90,8,"SORTIE");
		$this->SetFont('aefurat', '', 10);
		$this->Rect(10, 25, 190, 55 ,'D');
        $this->Text(10,20,"CADRE RESERVE AU PRATICIEN");
        $this->Text(10,30,"1.Date de sortie: ".$this->dateUS2FR($result->DATESORTIE));$this->Text(100,30,"2.Heure de Sortie: ".$this->dateUS2FR($result->HEURESORTIE));
        $this->Text(10,40,"3.Mode de Sortie: ".$this->nbrtostring("grh","mods","IDMODS",$result->MODSORTIE,"MODS"));$this->Text(100,40,"4.Code de Sortie:".$result->MODSORTIE);
		$this->Text(10,50,"5.Diagnostic ou Motif d'entrée : ".$result->DGC);
		$this->Text(10,60,"6.Diagnostic de Sortie: ".$result->DGC);
		$this->Text(10,70,"7.code CIM:***");$this->Text(100,70,"8.Code GHM:***");
		$this->Text(10,85,"NOM PRENOM ET GRADE DU PRATICIEN");$this->Text(150,85,"VISA DU CHEF DE SERVICE");//.$session
		$this->Text(30,92,"Dr ".$session);
		$this->Text(25,100,"DATE ET CACHET");
		$this->Text(30,107,$this->dateUS2FR($result->DATESORTIE));
		$this->Text(29,120,"SIGNATURE");
		$this->Text(10,145,"CADRE RESERVE A L ADMINISTRATION DE LETABLISSEMENT");$this->Text(185,10," PAGE 8");
		$this->Rect(10,150, 190, 55 ,'D'); 
		$this->Text(10,155,"9.N° Facture:");$this->Text(70,155,"10.Date:");$this->Text(120,155,"11.Montant Total De La Prestation:");
        $this->Text(10,165,"12.N° quitance:");$this->Text(70,165,"13.part ss:");$this->Text(120,165,"14.Part Patient:");
		$this->Text(10,175,"15.Nature Du Document De Sortie:");$this->Text(120,175,"16.Document:");
		$this->Text(10,185,"17.Etablissement d'acceuil:");$this->Text(120,185,"18.N°Prise En Charge:");
		$this->Text(10,195,"19.Mineur Accopagne A Sa Sortie Par");
		$this->Text(10,215,"NOM PRENOM ET FONCTION DU SIGNATAIRE");$this->Text(150,215,"DATE ET CACHET");$this->Text(155,225,"SIGNATURE");
		//P6 MEDICAMENTS
		$this->AddPage('L', 'mm', 'A4', true, 'UTF-8', false);
		$this->Text(130,10,"4.MEDICAMENTS :");$this->Text(265,10," PAGE 6");
		$this->SetXY(10,20); 	  
        $this->cell(55,5,"4.1 DATE ",1,0,'C',0);
		$this->SetXY(10,25); 	  
        $this->cell(55,5," DE LA PRESCRIPTION",1,0,'C',0);
		$this->SetXY(65,20); 	  
        $this->cell(30,5,"4.2 CODE ",1,0,'C',0);
		$this->SetXY(65,25); 	  
        $this->cell(30,5," DCI",1,0,'C',0);
		$this->SetXY(95,20); 	  
        $this->cell(90,5,"4.3 LIBELLE DCI   ",1,0,'C',0);
		$this->SetXY(95,25); 	  
        $this->cell(90,5," FORME ET DOSAGE  ",1,0,'C',0);
		$this->SetXY(185,20); 	  
        $this->cell(25,5,"4.4 QUANTITE ",1,0,'C',0);
		$this->SetXY(185,25); 	  
        $this->cell(25,5," PRESCRITE",1,0,'C',0);
		$this->SetXY(185+25,20); 	  
        $this->cell(25,5,"4.5 QUANTITE ",1,0,'C',0);
		$this->SetXY(185+25,25); 	  
        $this->cell(25,5," FOURNIE",1,0,'C',0);
		$this->SetXY(190+45,20); 
		$this->cell(50,5,"4.6.Nom Prenom  ",1,0,'C',0);
		$this->SetXY(190+45,25); 
		$this->cell(50,5,"Qualite du Praticien ",1,0,'C',0);
		//********************************************************************************************//
		$this->SetXY(10,30); // marge sup 13
        $this->mysqlconnect();
		$query0 = "SELECT * FROM medfn where idp='".$ndp."' limit  0,15";
		$resultat0=mysql_query($query0);
		$totalmbr10=mysql_num_rows($resultat0);
		while($row0=mysql_fetch_object($resultat0))
		  {
		   $this->cell(55,10,$this->dateUS2FR($row0->DATE),1,0,'C',0);
		   $this->cell(30,10,$this->nbrtostring("grh","t21","ID",$row0->MED1,"code"),1,0,'C',0);
		   $this->cell(90,10,$this->nbrtostring("grh","t21","ID",$row0->MED1,"dci"),1,0,'L',0);
		   $this->cell(25,10,$row0->QUT1,1,0,'C',0);
		   $this->cell(25,10,$row0->QUT1,1,0,'C',0);
		   $this->cell(50,10,"Dr ".$row0->USER,1,0,'C',0);
		   $this->SetXY(10,$this->GetY()+10); 
		  }
		$this->P6(30);
		$this->P6(40);
		$this->P6(50);
		$this->P6(60);
		$this->P6(70);
		$this->P6(80);
		$this->P6(90);
		$this->P6(100);
		$this->P6(110);
		$this->P6(120);
		$this->P6(130);
		$this->P6(140);
		$this->P6(150);
		$this->P6(160);
		$this->P6(170);
		//P4
		$this->AddPage('P', 'mm', 'A4', true, 'UTF-8', false);
		$this->Text(10,10,"2.SOINS INFIRMIERS ACTES PARAMEDICAUX :");
		$this->Text(10,15,"EFFECTUES DANS L'ETABLISSEMENT D'HOSPITALISATION");$this->Text(185,10," PAGE 4");
		$this->SetXY(10,20); 	  
        $this->cell(20,10,"2.1 DATE",1,0,'C',0);
		$this->SetXY(30,20); 	  
        $this->cell(30,10,"2.2 SERVICE",1,0,'C',0);
		$this->SetXY(60,20); 	  
        $this->cell(100,5,"ACTE ET EXAMENS ",1,0,'C',0);
		$this->SetXY(60,25); 	  
        $this->cell(20,5,"2.3 Code",1,0,'C',0);
		$this->SetXY(60+20,25); 	  
        $this->cell(60,5,"2.4 Nature",1,0,'C',0);
		$this->SetXY(60+20+60,25); 	  
        $this->cell(20,5,"2.5 Cotation",1,0,'C',0);
		$this->SetXY(160,20); 
		$this->cell(40,5,"2.6.Nom Prenom  ",1,0,'C',0);
		$this->SetXY(160,25); 
		$this->cell(40,5,"et Qualite du paramedical ",1,0,'C',0);
		$this->P4(30);
		$this->P4(40);
		$this->P4(50);
		$this->P4(60);
		$this->P4(70);
		$this->P4(80);
		$this->P4(90);
		$this->P4(100);
		$this->P4(110);
		$this->P4(120);
		$this->P4(130);
		$this->P4(140);
		$this->P4(150);
		$this->P4(160);
		$this->P4(170);
		$this->P4(180);
		$this->P4(190);
		$this->P4(200);
		$this->P4(210);
		$this->P4(220);
		$this->P4(230);
		$this->P4(240);
		$this->P4(250);
		$this->P4(260);
		//P2
		$this->AddPage('L', 'mm', 'A4', true, 'UTF-8', false);
		// $this->StartTransform();
		// $this->MirrorP(150,100);
		// $this->StopTransform();
		$this->Text(10,10,"1.ACTES MEDICAUX CHIRURGICAUX ET EXAMENTS  PRATIQUES DANS L'ETABLISSEMENT D'HOSPITALISATION :");
		$this->Text(10,15,"Y COMPRIS LES CONSULTATION EFFECTUEES PAR LES PRATICIENS EXTERNE AU SERVICE");
		$this->SetXY(10,20); 	  
        $this->cell(40,10,"1.1 DATE",1,0,'C',0);
		$this->SetXY(50,20); 	  
        $this->cell(40,10,"1.2 SERVICE",1,0,'C',0);
		$this->SetXY(90,20); 	  
        $this->cell(140,5,"ACTE ET EXAMENS ",1,0,'C',0);
		$this->SetXY(90,25); 	  
        $this->cell(20,5,"1.3 Code",1,0,'C',0);
		$this->SetXY(90+20,25); 	  
        $this->cell(90,5,"1.4 Nature",1,0,'C',0);
		$this->SetXY(90+20+90,25); 	  
        $this->cell(30,5,"1.5 Cotation",1,0,'C',0);
		$this->SetXY(90+20+90+30,20); 
		$this->cell(60,10,"1.6.Nom Prenom et Qualite du Praticien ",1,0,'C',0);
		$this->P2(30);
		$this->P2(40);
		$this->P2(50);
		$this->P2(60);
		$this->P2(70);
		$this->P2(80);
		$this->P2(90);
		$this->P2(100);
		$this->P2(110);
		$this->P2(120);
		$this->P2(130);
		$this->P2(140);
		$this->P2(150);
		$this->P2(160);
		$this->P2(170);
		}
		}
		function fichenavettehd($ndp)//entete fiche navette
		{
		$this-> mysqlconnect();
	    $sql = "SELECT * FROM hemo WHERE ID = '".$ndp."' "; 
        $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
        if( $result = mysql_fetch_object( $requete ) )
        {
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 10);
        $this->SetDisplayMode('fullpage','single');
        //P1 FICHE NAVETTE
		$this->AddPage();
		$this->Text(55,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(35,10,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(40.5,15,"DIRECTION DE LA SANTE ET DE LA POPULAION DE LA WILAYA DE DJELFA");
		$this->Text(60,20,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA");
		$this->SetFont('aefurat', '', 24);
		$this->Text(52,28," FICHE D'HEMODIALYSE");
		$this->SetFont('aefurat', '', 10);
		$this->Rect(10, 40, 190, 15 ,'D');
        $this->Text(10,40,"IDENTIFICATION DE L'ASSURE:");
        $this->Text(15,45,"Nom:".$result->NOM);$this->Text(105,45,"Prénom:".$result->PRENOM);
        $this->Text(15,50,"Date de Naissance:". $this->dateUS2FR($result->DATENAISSA));$this->Text(105,50,"N°Immatriculation:");
		$this->Rect(10, 40+18, 190, 15 ,'D');                                                          
		$this->Text(10,40+18,"IDENTIFICATION DU DEMUNI:");
        $this->Text(15,45+18,"Nom:");$this->Text(105,45+18,"Prénom:");
        $this->Text(15,50+18,"Date de Naissance:");$this->Text(105,50+18,"N°Immatriculation:");
		$this->Rect(140, 74.5, 60, 5 ,'D');$this->Text(140,74.5,"N°SS:".$result->NSS); 
		$this->Rect(10, 81, 190, 20 ,'D');
		$this->Text(10,81,"IDENTIFICATION DU PATIENT:"); 
		$this->Text(15,86,"1.N° D'ADMISSION:");$this->Text(80,86,"2.GROUPAGE SANGUIN:");$this->Text(150,86,"3.AGE:");
        $this->SetXY(15,91);$this->cell(60,6,"",1,0,'L',0); 	  
	    $this->SetXY(80,91);  $this->cell(60,6,"".$result->GRABO."_".$result->GRRH,1,0,'C',0);	  
	    $this->SetXY(150,91);  $AGE1=substr(DATE('Y-m-d'),0,4)-substr($result->DATENAISSA,0,4); $this->cell(40,6,$AGE1." ans",1,0,'C',0);//$this->dateUS2FR($result->DATENAISSA)	  
		$this->Rect(10,101, 190, 7 ,'D'); 
		$this->Text(15,102,"4.Nom : ".$result->NOM);$this->Text(80,102,"5.Nom de jeune fille : ");$this->Text(150,102,"6.Prénom : ".$result->PRENOM);
		$this->Rect(10,109, 190, 25 ,'D');
		$this->Text(10,109,"7.Service: Hemodialyse");                        $this->Text(100,109,"8.Nom et qualité du chef de Service : MR BOUZAHAR");
		$this->Text(10,109+5,"9.Date d'entree : ".date('d-m-Y'));            $this->Text(100,109+5,"10.Heure d'entree : ");//.date("H:i")
		$this->Text(10,109+10,"11.Nom de la Salle : Hemodialyse");           $this->Text(100,109+10,"12.N°lit : ".$result->NLIT);
		$this->Text(10,109+15,"13.Nom Prénom et Qualite du medecin traitant : Dr ".$session);
		$this->Text(10,109+20,"14.Mode d'entree : NORMAL");                  $this->Text(100,109+20,"15.Code entrée : ");
		$this->Text(10,135,"SEANCE D HEMODIALYSE:");
		$this->Rect(10,135, 190, 25 ,'D');
		$this->Text(10,135+5,"APPREIL UTILISE : ".$result->NLIT);             $this->Text(100,135+5,"DATES : ".date('d-m-Y'));
		$this->Text(10,135+10,"ACCES SANG : FAV    CJ    CF    VP");          $this->Text(100,135+10,"BAIN DE DIALYSE : ");
		$this->Text(10,135+15,"INFIRMIER : ");                                $this->Text(100,135+15,"N° LOT DE LOT  DE SOLUTION CONCENTREE:");
		$this->Text(10,135+20,"POIDS SEC : ".$result->POIDS."  Kg");          $this->Text(100,135+20,"TYPE DE DIALYSE : Programme     Urgence");
		$this->Rect(10,135+25, 90, 20 ,'D');$this->Rect(100,135+25, 100, 20 ,'D');
		$this->Text(10,135+25,"DEBUT DE LA DIALYSE ");                        $this->Text(100,135+25,"FIN DE LA DIALYSE ");
		$this->Text(10,135+30,"Heure : _ _ _ heures ");                       $this->Text(100,135+30,"Heure : _ _ _ heures "); 
		$this->Text(10,135+35,"Poids : _ _ _ Kg");                            $this->Text(100,135+35,"Poids :  _ _ _ Kg");   
		$this->Text(10,130+45,"TA : _ _ _ /_ _ mmhg");  $this->Text(65,130+45,"Temperature : _ _ C°"); 	                $this->Text(100,130+45,"TA : _ _ _ /_ _ mmhg"); $this->Text(165,130+45,"Temperature : _ _ C°");        
		//        
		$this->SetXY(10,181); 	  
        $this->cell(20,10,"HEURE",1,0,'C',0);
		$this->SetXY(30,181); 	  
        $this->cell(10,10,"TA",1,0,'C',0);
		$this->SetXY(40,181); 	  
        $this->cell(30,10,"DEBIT SANGUIN",1,0,'C',0);
		$this->SetXY(70,181); 	  
        $this->cell(10,10,"HEP",1,0,'C',0);
		$this->SetXY(80,181); 	  
        $this->cell(15,10,"UF ml/h",1,0,'C',0);
		$this->SetXY(95,181); 	  
        $this->cell(15,10,"PTM",1,0,'C',0);
		$this->SetXY(110,181); 	  
        $this->cell(40,10,"Pression Ultra Filtra Sang",1,0,'C',0);
		$this->SetXY(150,181); 	  
        $this->cell(50,10,"OBSERVATION ET TRT",1,0,'C',0);
		$this->SetXY(10,191); 	  
        $this->cell(20,18,"",1,0,'C',0);
		$this->SetXY(30,191); 	  
        $this->cell(10,18,"",1,0,'C',0);
		$this->SetXY(40,191); 	  
        $this->cell(30,18,"",1,0,'C',0);
		$this->SetXY(70,191); 	  
        $this->cell(10,18,"",1,0,'C',0);
		$this->SetXY(80,191); 	  
        $this->cell(15,18,"",1,0,'C',0);
		$this->SetXY(95,191); 	  
        $this->cell(15,18,"",1,0,'C',0);
		$this->SetXY(110,191); 	  
        $this->cell(40,18,"",1,0,'C',0);
		$this->SetXY(150,191); 	  
        $this->cell(50,18,"",1,0,'C',0);
		
		
		
		$this->Rect(10,185+30, 190, 60 ,'D');
		$this->Text(10,180+30,"2.SOINS INFIRMIERS ACTES PARAMEDICAUX EFFECTUES DANS L'ETABLISSEMENT D'HOSPITALISATION:");
		$this->SetXY(10,185+30); 	  
        $this->cell(20,10,"2.1 DATE",1,0,'C',0);
		$this->SetXY(30,185+30); 	  
        $this->cell(30,10,"2.2 SERVICE",1,0,'C',0);
		$this->SetXY(60,185+30); 	  
        $this->cell(100,5,"ACTE ET EXAMENS ",1,0,'C',0);
		$this->SetXY(60,190+30); 	  
        $this->cell(20,5,"2.3 Code",1,0,'C',0);
		$this->SetXY(60+20,190+30); 	  
        $this->cell(60,5,"2.4 Nature",1,0,'C',0);
		$this->SetXY(60+20+60,190+30); 	  
        $this->cell(20,5,"2.5 Cotation",1,0,'C',0);
		$this->SetXY(160,185+30); 
		$this->cell(40,5,"2.6.Nom Prenom  ",1,0,'C',0);
		$this->SetXY(160,190+30); 
		$this->cell(40,5,"et Qualite du paramedical ",1,0,'C',0);
		$this->P44(195+30,date('d-m-Y'),"1173","injection isolée","ami2","","");
		$this->P44(200+30,date('d-m-Y'),"1175","prélèvement multiples","ami4","","");
		$this->P44(205+30,date('d-m-Y'),"1167","injection sous cutané","ami1","","");
		$this->P44(210+30,date('d-m-Y'),"1180","panssement petit","ami1","","");
		$this->P44(215+30,date('d-m-Y'),"1190","perfusion iv","ami5","","");
		$this->P44(220+30,date('d-m-Y'),"1194","surveillance et observation","ami1","","");
		$this->P44(225+30,date('d-m-Y'),"","","","","");
		$this->P44(230+30,date('d-m-Y'),"","","","","");
		$this->P44(235+30,date('d-m-Y'),"","","","","");
		$this->P44(240+30,date('d-m-Y'),"","","","","");
		
		
		
		$this->AddPage();
		$this->Text(10,10,"1.ACTES MEDICAUX CHIRURGICAUX ET EXAMENTS  PRATIQUES DANS L'ETABLISSEMENT D'HOSPITALISATION :");
		$this->Text(10,15,"Y COMPRIS LES CONSULTATION EFFECTUEES PAR LES PRATICIENS EXTERNE AU SERVICE");
		$this->SetXY(10,20); 	  
        $this->cell(20,10,"2.1 DATE",1,0,'C',0);
		$this->SetXY(30,20); 	  
        $this->cell(30,10,"2.2 SERVICE",1,0,'C',0);
		$this->SetXY(60,20); 	  
        $this->cell(100,5,"ACTE ET EXAMENS ",1,0,'C',0);
		$this->SetXY(60,25); 	  
        $this->cell(20,5,"2.3 Code",1,0,'C',0);
		$this->SetXY(60+20,25); 	  
        $this->cell(60,5,"2.4 Nature",1,0,'C',0);
		$this->SetXY(60+20+60,25); 	  
        $this->cell(20,5,"2.5 Cotation",1,0,'C',0);
		$this->SetXY(160,20); 
		$this->cell(40,5,"2.6.Nom Prenom  ",1,0,'C',0);
		$this->SetXY(160,25); 
		$this->cell(40,5,"et Qualite du Praticien ",1,0,'C',0);
		$this->P44(30,date('d-m-Y'),"0869/01","séance d'hemodialyse pour IRC","k100","Dr ".$_SESSION["USER"],"");
		$this->P44(35,date('d-m-Y'),"0868","surveillance d'une séance d'hémodialyse ","k20","Dr ".$_SESSION["USER"],"");
		$this->P44(40,date('d-m-Y'),"","","","","");
		$this->P44(45,date('d-m-Y'),"","","","","");
		$this->P44(50,date('d-m-Y'),"","","","","");
		$this->P44(55,date('d-m-Y'),"","","","","");
		$this->Text(10,62,"4.MEDICAMENTS :");$this->Text(265,10," PAGE 7");
		$this->SetXY(10,68); 	  
        $this->cell(20,10,"4.1 DATE",1,0,'C',0);
		$this->SetXY(30,68); 	  
        $this->cell(30,10,"4.2 CODE",1,0,'C',0);
		$this->SetXY(60,68); 	  
        $this->cell(100,5,"PRESCRIPTION MEDICAMENTS",1,0,'C',0);
		$this->SetXY(60,68+5); 	  
        $this->cell(60,5,"4.3 LIBELLE DCI ",1,0,'C',0);
		$this->SetXY(120,68+5); 	  
        $this->cell(20,5,"4.4 Prescrite",1,0,'C',0);
		$this->SetXY(60+20+60,68+5); 	  
        $this->cell(20,5,"4.5 Fournie ",1,0,'C',0);
		$this->SetXY(160,68); 
		$this->cell(40,5,"4.6.Nom Prenom ",1,0,'C',0);
		$this->SetXY(160,68+5); 
		$this->cell(40,5,"Qualite du Praticien   ",1,0,'C',0);
		$this->P444(68+10,date('d-m-Y'),"14078","SSI 0.9 %","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+15,date('d-m-Y'),"14044","SGI 05 %","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+20,date('d-m-Y'),"70503/35","LIGNES A/V","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+25,date('d-m-Y'),"70501","DIALYSEUR F06","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+30,date('d-m-Y'),"70506","AIGUILLES A/V","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+35,date('d-m-Y'),"25020","ACIDE B/10L","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+40,date('d-m-Y'),"26029","BICA","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+45,date('d-m-Y'),"70230","COMPRESSE 5*5","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+50,date('d-m-Y'),"70192","GANT JETABLES","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+55,date('d-m-Y'),"70302","SPARADRAP","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+60,date('d-m-Y'),"70002","TRANSFUSEUR","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+65,date('d-m-Y'),"5589","LOVENOX","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+70,date('d-m-Y'),"7167","EPO","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+75,date('d-m-Y'),"","","","","","6");
		$this->P444(68+80,date('d-m-Y'),"","","","","","6");
		$this->SetFont('aefurat', '', 15);
		$this->Text(90,68+87,"SORTIE");
		$this->SetFont('aefurat', '', 10);
		$this->Rect(10, 68+95, 190, 55 ,'D');
        $this->Text(10,68+95,"CADRE RESERVE AU PRATICIEN");
	    $this->Text(10,168,"1.Date de sortie: ".$this->dateUS2FR(DATE('Y-m-d')));$this->Text(100,168,"2.Heure de Sortie: ");
        $this->Text(10,168+10,"3.Mode de Sortie: NORMAL ");$this->Text(100,168+10,"4.Code de Sortie:");
		$this->Text(10,168+20,"5.Diagnostic ou Motif d'entrée : Séance D'hémodialyse ");
	    $this->Text(10,168+30,"6.Diagnostic de Sortie: IRCT  ");
		$this->Text(10,168+40,"7.code CIM:Z49");$this->Text(100,168+40,"8.Code GHM: ");
		$this->Text(10,168+52,"NOM PRENOM ET GRADE DU PRATICIEN");$this->Text(150,168+52,"VISA DU CHEF DE SERVICE");//.$session
		$this->Text(30,168+60,"Dr ".$session);
		$this->Text(25,168+70,"DATE ET CACHET");
		$this->Text(30,168+80,$this->dateUS2FR(DATE('Y-m-d')));
		$this->Text(29,168+90,"SIGNATURE");
		}
		}
		function fichenavettehda($ndp)//entete fiche navette
		{
		$this-> mysqlconnect();
	    $sql = "SELECT * FROM hemo WHERE ID = '".$ndp."' "; 
        $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
        if( $result = mysql_fetch_object( $requete ) )
        {
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 10);
        $this->SetDisplayMode('fullpage','single');
        //P1 FICHE NAVETTE
		$this->AddPage();
		$this->Text(55,5,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(35,10,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(40.5,15,"DIRECTION DE LA SANTE ET DE LA POPULAION DE LA WILAYA DE DJELFA");
		$this->Text(60,20,"ETABLISSEMENT PUBLIC HOSPITALIER AIN OUSSERA");$this->Text(185,28," PAGE 1");
		$this->SetFont('aefurat', '', 24);
		$this->Text(52,28," FICHE D'HEMODIALYSE");
		$this->SetFont('aefurat', '', 10);
		$this->Rect(10, 40, 190, 15 ,'D');
        $this->Text(10,40,"IDENTIFICATION DE L'ASSURE:");
        $this->Text(15,45,"Nom:".$result->NOM);$this->Text(105,45,"Prénom:".$result->PRENOM);
        $this->Text(15,50,"Date de Naissance:". $this->dateUS2FR($result->DATENAISSA));$this->Text(105,50,"N°Immatriculation:");
		$this->Rect(10, 40+18, 190, 15 ,'D');                                                          
		$this->Text(10,40+18,"IDENTIFICATION DU DEMUNI:");
        $this->Text(15,45+18,"Nom:");$this->Text(105,45+18,"Prénom:");
        $this->Text(15,50+18,"Date de Naissance:");$this->Text(105,50+18,"N°Immatriculation:");
		$this->Rect(140, 74.5, 60, 5 ,'D');$this->Text(140,74.5,"N°SS:".$result->NSS); 
		$this->Rect(10, 81, 190, 20 ,'D');
		$this->Text(10,81,"IDENTIFICATION DU PATIENT:"); 
		$this->Text(15,86,"1.N° D'ADMISSION:");$this->Text(80,86,"2.GROUPAGE SANGUIN:");$this->Text(150,86,"3.AGE:");
        $this->SetXY(15,91);$this->cell(60,6,"",1,0,'L',0); 	  
	    $this->SetXY(80,91);  $this->cell(60,6,"".$result->GRABO."_".$result->GRRH,1,0,'C',0);	  
	    $this->SetXY(150,91);  $AGE1=substr(DATE('Y-m-d'),0,4)-substr($result->DATENAISSA,0,4); $this->cell(40,6,$AGE1." ans",1,0,'C',0);//$this->dateUS2FR($result->DATENAISSA)	  
		$this->Rect(10,101, 190, 7 ,'D'); 
		$this->Text(15,102,"4.Nom : ".$result->NOM);$this->Text(80,102,"5.Nom de jeune fille : ");$this->Text(150,102,"6.Prénom : ".$result->PRENOM);
		$this->Rect(10,109, 190, 25 ,'D');
		$this->Text(10,109,"7.Service: Hemodialyse");                        $this->Text(100,109,"8.Nom et qualité du chef de Service : MR BOUZAHAR");
		$this->Text(10,109+5,"9.Date d'entree : ".date('d-m-Y'));            $this->Text(100,109+5,"10.Heure d'entree : ".date("H:i"));
		$this->Text(10,109+10,"11.Nom de la Salle : Hemodialyse");           $this->Text(100,109+10,"12.N°lit : ".$result->NLIT);
		$this->Text(10,109+15,"13.Nom Prénom et Qualite du medecin traitant : Dr ".$session);
		$this->Text(10,109+20,"14.Mode d'entree : NORMAL");                  $this->Text(100,109+20,"15.Code entrée : ");
		$this->Text(10,135,"SEANCE D HEMODIALYSE:");
		$this->Rect(10,135, 190, 25 ,'D');
		$this->Text(10,135+5,"APPREIL UTILISE : ".$result->NLIT);             $this->Text(100,135+5,"DATES : ".date('d-m-Y'));
		$this->Text(10,135+10,"ACCES SANG : FAV    CJ    CF    VP");          $this->Text(100,135+10,"BAIN DE DIALYSE : ");
		$this->Text(10,135+15,"INFIRMIER : ");                                $this->Text(100,135+15,"N° LOT DE LOT  DE SOLUTION CONCENTREE:");
		$this->Text(10,135+20,"POIDS SEC : ".$result->POIDS."  Kg");          $this->Text(100,135+20,"TYPE DE DIALYSE : Programme     Urgence");
		$this->Rect(10,135+25, 190, 20 ,'D');
		$this->Text(30,135+25,"DEBUT DE LA DIALYSE");        $this->Text(130,135+25,"FIN DE LA DIALYSE");
		$this->Text(10,135+30,"Poids : _ _ Kg");             $this->Text(50,135+30,"Prise de poids : _ _ Kg");         $this->Text(100,135+30,"Poids :  _ _ Kg");$this->Text(140,135+30,"Prise de poids :  _ _ Kg");    
		$this->Text(10,130+40,"TA Sys : _ _ _ mmhg"); 	     $this->Text(50,130+40,"TA Dia : _ _ _ mmhg");             $this->Text(100,130+40,"TA SYS : _ _ _ mmhg");$this->Text(140,130+40,"TA DIA : _ _ _ mmhg");           
		$this->Text(10,130+45,"Temperature : _ _ C°");       $this->Text(100,130+45,"Temperature : _ _ C°");
		$this->SetXY(10,181); 	  
        $this->cell(20,10,"HEURE",1,0,'C',0);
		$this->SetXY(30,181); 	  
        $this->cell(10,10,"TA",1,0,'C',0);
		$this->SetXY(40,181); 	  
        $this->cell(30,10,"DEBIT SANGUIN",1,0,'C',0);
		$this->SetXY(70,181); 	  
        $this->cell(10,10,"HEP",1,0,'C',0);
		$this->SetXY(80,181); 	  
        $this->cell(15,10,"UF ml/h",1,0,'C',0);
		$this->SetXY(95,181); 	  
        $this->cell(15,10,"PTM",1,0,'C',0);
		$this->SetXY(110,181); 	  
        $this->cell(40,10,"Pression Ultra Filtra Sang",1,0,'C',0);
		$this->SetXY(150,181); 	  
        $this->cell(50,10,"OBSERVATION ET TRT",1,0,'C',0);
		$this->SetXY(10,191); 	  
        $this->cell(20,18,"",1,0,'C',0);
		$this->SetXY(30,191); 	  
        $this->cell(10,18,"",1,0,'C',0);
		$this->SetXY(40,191); 	  
        $this->cell(30,18,"",1,0,'C',0);
		$this->SetXY(70,191); 	  
        $this->cell(10,18,"",1,0,'C',0);
		$this->SetXY(80,191); 	  
        $this->cell(15,18,"",1,0,'C',0);
		$this->SetXY(95,191); 	  
        $this->cell(15,18,"",1,0,'C',0);
		$this->SetXY(110,191); 	  
        $this->cell(40,18,"",1,0,'C',0);
		$this->SetXY(150,191); 	  
        $this->cell(50,18,"",1,0,'C',0);
		$this->Rect(10,185+30, 190, 60 ,'D');
		$this->Text(10,180+30,"2.SOINS INFIRMIERS ACTES PARAMEDICAUX EFFECTUES DANS L'ETABLISSEMENT D'HOSPITALISATION:");
		$this->SetXY(10,185+30); 	  
        $this->cell(20,10,"2.1 DATE",1,0,'C',0);
		$this->SetXY(30,185+30); 	  
        $this->cell(30,10,"2.2 SERVICE",1,0,'C',0);
		$this->SetXY(60,185+30); 	  
        $this->cell(100,5,"ACTE ET EXAMENS ",1,0,'C',0);
		$this->SetXY(60,190+30); 	  
        $this->cell(20,5,"2.3 Code",1,0,'C',0);
		$this->SetXY(60+20,190+30); 	  
        $this->cell(60,5,"2.4 Nature",1,0,'C',0);
		$this->SetXY(60+20+60,190+30); 	  
        $this->cell(20,5,"2.5 Cotation",1,0,'C',0);
		$this->SetXY(160,185+30); 
		$this->cell(40,5,"2.6.Nom Prenom  ",1,0,'C',0);
		$this->SetXY(160,190+30); 
		$this->cell(40,5,"et Qualite du paramedical ",1,0,'C',0);
		$this->P44(195+30,date('d-m-Y'),"1173","injection isolée","ami2","","");
		$this->P44(200+30,date('d-m-Y'),"1175","prelevement multiples","ami4","","");
		$this->P44(205+30,date('d-m-Y'),"1167","injection sous cutané","ami1","","");
		$this->P44(210+30,date('d-m-Y'),"1180","panssement petit","ami1","","");
		$this->P44(215+30,date('d-m-Y'),"1190","parfusion iv","ami5","","");
		$this->P44(220+30,date('d-m-Y'),"1194","surveillance et observation","ami1","","");
		$this->P44(225+30,date('d-m-Y'),"","","","","");
		$this->P44(230+30,date('d-m-Y'),"","","","","");
		$this->P44(235+30,date('d-m-Y'),"","","","","");
		$this->P44(240+30,date('d-m-Y'),"","","","","");
		$this->AddPage();
		$this->Text(10,10,"1.ACTES MEDICAUX CHIRURGICAUX ET EXAMENTS  PRATIQUES DANS L'ETABLISSEMENT D'HOSPITALISATION :");
		$this->Text(10,15,"Y COMPRIS LES CONSULTATION EFFECTUEES PAR LES PRATICIENS EXTERNE AU SERVICE");
		$this->SetXY(10,20); 	  
        $this->cell(20,10,"2.1 DATE",1,0,'C',0);
		$this->SetXY(30,20); 	  
        $this->cell(30,10,"2.2 SERVICE",1,0,'C',0);
		$this->SetXY(60,20); 	  
        $this->cell(100,5,"ACTE ET EXAMENS ",1,0,'C',0);
		$this->SetXY(60,25); 	  
        $this->cell(20,5,"2.3 Code",1,0,'C',0);
		$this->SetXY(60+20,25); 	  
        $this->cell(60,5,"2.4 Nature",1,0,'C',0);
		$this->SetXY(60+20+60,25); 	  
        $this->cell(20,5,"2.5 Cotation",1,0,'C',0);
		$this->SetXY(160,20); 
		$this->cell(40,5,"2.6.Nom Prenom  ",1,0,'C',0);
		$this->SetXY(160,25); 
		$this->cell(40,5,"et Qualite du Praticien ",1,0,'C',0);
		$this->P44(30,date('d-m-Y'),"0868","survellance d'une seance d'hemodialyse ","k20","Dr ".$_SESSION["USER"],"");
		$this->P44(35,date('d-m-Y'),"0869/01","seance dhemodialyse pour IRC","k100","Dr ".$_SESSION["USER"],"");
		$this->P44(40,date('d-m-Y'),"","","","","");
		$this->P44(45,date('d-m-Y'),"","","","","");
		$this->P44(50,date('d-m-Y'),"","","","","");
		$this->P44(55,date('d-m-Y'),"","","","","");
		$this->Text(10,62,"4.MEDICAMENTS :");$this->Text(265,10," PAGE 7");
		$this->SetXY(10,68); 	  
        $this->cell(20,10,"4.1 DATE",1,0,'C',0);
		$this->SetXY(30,68); 	  
        $this->cell(30,10,"4.2 CODE",1,0,'C',0);
		$this->SetXY(60,68); 	  
        $this->cell(100,5,"PRESCRIPTION MEDICAMENTS",1,0,'C',0);
		$this->SetXY(60,68+5); 	  
        $this->cell(60,5,"4.3 LIBELLE DCI ",1,0,'C',0);
		$this->SetXY(120,68+5); 	  
        $this->cell(20,5,"4.4 Prescrite",1,0,'C',0);
		$this->SetXY(60+20+60,68+5); 	  
        $this->cell(20,5,"4.5 Fournie ",1,0,'C',0);
		$this->SetXY(160,68); 
		$this->cell(40,5,"4.6.Nom Prenom ",1,0,'C',0);
		$this->SetXY(160,68+5); 
		$this->cell(40,5,"Qualite du Praticien   ",1,0,'C',0);
		$this->P444(68+10,date('d-m-Y'),"14078","SSI 0.9 %","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+15,date('d-m-Y'),"14044","SGI 05 %","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+20,date('d-m-Y'),"70503/35","LIGNES A/V","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+25,date('d-m-Y'),"70501","DIALYSEUR F06","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+30,date('d-m-Y'),"70506","AIGUILLES A/V","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+35,date('d-m-Y'),"25020","ACIDE B/10L","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+40,date('d-m-Y'),"26029","BICA","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+45,date('d-m-Y'),"70230","COMPRESSE 5*5","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+50,date('d-m-Y'),"70192","GANT JETABLES","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+55,date('d-m-Y'),"70302","SPARADRAP","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+60,date('d-m-Y'),"70002","TRANSFUSEUR","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+65,date('d-m-Y'),"5589","LOVENOX ","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+70,date('d-m-Y'),"7167","EPO","","","Dr ".$_SESSION["USER"],"6");
		$this->P444(68+75,date('d-m-Y'),"","","","","","6");
		$this->P444(68+80,date('d-m-Y'),"","","","","","6");
		$this->SetFont('aefurat', '', 15);
		$this->Text(90,68+87,"SORTIE");
		$this->SetFont('aefurat', '', 10);
		$this->Rect(10, 68+95, 190, 55 ,'D');
        $this->Text(10,68+95,"CADRE RESERVE AU PRATICIEN");
	    $this->Text(10,168,"1.Date de sortie: ".$this->dateUS2FR(DATE('Y-m-d')));$this->Text(100,168,"2.Heure de Sortie: ");
        $this->Text(10,168+10,"3.Mode de Sortie: NORMAL ");$this->Text(100,168+10,"4.Code de Sortie:");
		$this->Text(10,168+20,"5.Diagnostic ou Motif d'entrée : Séance D'hémodialyse ");
	    $this->Text(10,168+30,"6.Diagnostic de Sortie: IRCT  ");
		$this->Text(10,168+40,"7.code CIM:Z49");$this->Text(100,168+40,"8.Code GHM: ");
		$this->Text(10,168+52,"NOM PRENOM ET GRADE DU PRATICIEN");$this->Text(150,168+52,"VISA DU CHEF DE SERVICE");//.$session
		$this->Text(30,168+60,"Dr ".$session);
		$this->Text(25,168+70,"DATE ET CACHET");
		$this->Text(30,168+80,$this->dateUS2FR(DATE('Y-m-d')));
		$this->Text(29,168+90,"SIGNATURE");
		}
		}
		
		function entetecertificat($ndp,$nom,$prenom,$naissance,$nbrs,$pdialise,$transport)
		{
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 11);
        $this->SetDisplayMode('fullpage','single');//mode d affichage 
        $this->AddPage();
		$this->SetLineWidth(0.4);
		$this->Rect(5, 5, 200, 285 ,'D');
		$this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
		$this->Text(45,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(30,15,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(55,20,"DIRECTION DE LA SANTÉ WILAYA DE DJELFA");
		$this->Text(5,40,"ETABLISSEMENT PUBLIC HOSPITALIER  D'AIN - OUSSERA");
		$this->Text(5,45,"SERVICE:HEMODIALYSE");
		$this->Text(5,50,"N°.........../".date("Y"));
		$this->SetFont('aefurat', '', 14);
		$this->SetFont('aefurat', '', 20);
		$this->Text(65,80," CERTIFICAT MEDICAL");
		$this->SetFont('aefurat', '', 14);
		// $this->Text(10,100,"Nom :........................");  $this->Text(70,100,"Prénom :........................"); $this->Text(130,100,"Date De Naissance :....................");
		$this->Text(10,110," Je soussigné Dr:".$session);
		$this->Text(10,120," Médecin du service d'hémodialyse");
		$this->Text(10,130," certifie que le nomé : ".$nom." ".$prenom);
		$this->Text(10,140," Né le : ".$naissance);
		$this->Text(10,150,"presente une insuffisance renale chronique depuis : ".$pdialise);
		$this->Text(10,160,"Est programme pour ".$nbrs." seances d'hemodialyse par semaine");
		$this->Text(10,170,"son état de santé necessite ");
		$this->SetFont('aefurat', '', 10);
		switch($transport)  
		{  
			case 'PA':
				{
				$this->SetXY(135,180);
				$this->Cell(3,3,"X",1,1,'C');
				$this->SetXY(135,190);
				$this->Cell(3,3,"",1,1,'C');
				
				break;
				}
			case 'PC':
				{
				$this->SetXY(135,180);
				$this->Cell(3,3,"",1,1,'C');
				$this->SetXY(135,190);
				$this->Cell(3,3,"X",1,1,'C');
				break;
				}
				
		}
        $this->SetFont('aefurat', '', 14);
		$this->Text(20,180,"un transport ambuambulance sanitare position assise");
		$this->Text(20,190,"un transport ambuambulance sanitare position allongée");
		$this->Text(10,200,"dont certificat");
		$this->Text(100,230,"ain oussera le :".date("d-m-Y"));
		$this->Text(120,240,"LE MEDECIN");
		$this->Text(125,245,"Dr ".$session);
		}
		
		function PROTOCOLE($HVB,$HVC,$HIV,$ndp,$nom,$prenom,$naissance,$nbrs,$pdialise,$groupage,$rhesus,$cause)
		{
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 11);
        $this->SetDisplayMode('fullpage','single');//mode d affichage 
        $this->AddPage();
		$this->SetLineWidth(0.4);
		$this->Rect(5, 5, 200, 285 ,'D');
		$this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
		$this->Text(45,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(30,15,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(55,20,"DIRECTION DE LA SANTÉ WILAYA DE DJELFA");
		$this->Text(5,40,"ETABLISSEMENT PUBLIC HOSPITALIER  D'AIN - OUSSERA");
		$this->Text(5,45,"SERVICE:HEMODIALYSE");
		$this->Text(5,50,"N°.........../".date("Y"));
		$this->SetFont('aefurat', '', 14);
		$this->SetFont('aefurat', '', 20);
		$this->Text(65,80," PROTOCOLE MEDICAL");
		$this->SetFont('aefurat', '', 14);
		$this->Text(10,100,"Nom :".$nom);  
		$this->Text(10,110,"Prénom :".$prenom); 
		$this->Text(10,120,"Date De Naissance :".$naissance);
		$this->Text(10,130,"Nephropathie Initiale :".$cause);
		$this->Text(10,140,"Groupage sanguin :".$groupage."_".$rhesus);
		$this->Text(10,150,"Profil Sérologique : ");
		$this->Text(50,150,"HVB:".$HVB);
		$this->Text(80,150,"HVC:".$HVC);
		$this->Text(110,150,"HIV:".$HIV);
		$this->Text(10,160,"Type capillaire  : NIPRO");
		$this->Text(10,170,"Type Génerateur  : FRESINUS 4008");
		$this->Text(10,180,"Poids sec  :_ _ Kg");
		$this->Text(10,190,"Prise de poids inter dialytique  :_ _ Kg");
		$this->Text(10,200,"Nombre de séance  : ".$nbrs." seances");
		$this->Text(10,210,"Date de la première  séance  : ".$pdialise);
		
		
		
		// $this->Text(10,110," Je soussigné Dr:".$session);
		// $this->Text(10,120," Médecin du service d'hémodialyse");
		// $this->Text(10,130," certifie que le nomé : ".$nom." ".);
		// $this->Text(10,140," Né le : ");
		// $this->Text(10,150,"presente une insuffisance renale chronique depuis : ".);
		// $this->Text(10,160,"Est programme pour ".$nbrs." seances d'hemodialyse par semaine");
		// $this->Text(10,170,"son état de santé necessite ");
		// $this->SetFont('aefurat', '', 10);
		// switch($transport)  
		// {  
			// case 'PA':
				// {
				// $this->SetXY(135,180);
				// $this->Cell(3,3,"X",1,1,'C');
				// $this->SetXY(135,190);
				// $this->Cell(3,3,"",1,1,'C');
				
				// break;
				// }
			// case 'PC':
				// {
				// $this->SetXY(135,180);
				// $this->Cell(3,3,"",1,1,'C');
				// $this->SetXY(135,190);
				// $this->Cell(3,3,"X",1,1,'C');
				// break;
				// }
				
		// }
        // $this->SetFont('aefurat', '', 14);
		// $this->Text(20,180,"un transport ambuambulance sanitare position assise");
		// $this->Text(20,190,"un transport ambuambulance sanitare position allongée");
		// $this->Text(10,200,"dont certificat");
		$this->Text(100,230,"Ain oussera le :".date("d-m-Y"));
		$this->Text(120,240,"LE MEDECIN");
		$this->Text(125,245,"Dr ".$session);
		}
	function entetefrc($ndp)
		{
	    $session=$_SESSION["USER"];
		$this->setPrintHeader(false);
        $this->setPrintFooter(false);
        $this->SetFont('aefurat', '', 14);
        $this->SetDisplayMode('fullpage','single');//mode d affichage 
        $this->AddPage();
		$this->SetLineWidth(0.4);
		$this->Rect(5, 5, 200, 285 ,'D');
		$this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
		$this->Text(30,10,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
		$this->Text(5,20,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
		$this->Text(5,30,"Direction de la Santé Wilaya de Djelfa");
		$this->Text(5,40,"Etablissement public hospitalier  D'Ain - Oussera");
		$this->Text(5,50,"S/Direction des Ressources  Humaines ");
		$this->Text(5,60,"N°.........../");
		$this->Text(28,60,date("Y"));
		$this->SetFont('aefurat', '', 20);
		$this->Text(60,80," ATTESTATION DE TRAVAIL");
		$this->SetFont('aefurat', '', 14);
		$this->Text(10,110," Je soussigné , Directeur d établissement public hospitalier d'Ain Oussera Atteste que : ");
		$this->Text(100,120," Prénom:");
		$this->Text(10,120,"Nom:");
		$this->Text(140,130,"wilaya de");
		$this->Text(65,130," a");
		$this->Text(10,130,"Né(e) le:");
		$this->Text(10,160,"Est employé(e) a notre  établissement en qualité de:");
		$this->Text(70,180,"jusqu'au:");
		$this->Text(10,180,"Depuis  Le:");
		$this->Text(10,200,"En foi de quoi , la présente attestation est délivrée sur demande de ");
		$this->Text(10,210,"l'intéressé(e)  pour servir et valoir ce que de droit");
		$this->Text(120,230,"AIN - OUSSERA , LE");
		$this->Text(120,240," LE DIRECTEUR");
		 $this->SetFont('aefurat', '', 12);
		$this->Text(5,250," Etabblit par :");
		$this->Text(12,255,$session);
		// $this->Code39(7,262,$ndp,1,5);
		}	
	function titrefr($ndp)
    {
	$date=date("d-m-Y");
	$this-> mysqlconnect();  
	$sql = "SELECT Nomlatin,Prenom_Latin,Date_Premier_Recrutement,Date_Naissance,Commune_Naissancear,Wilaya_Naissancear,rnvgradear,DATEARRIVE,FILIEREFR FROM grh WHERE  idp = '".$ndp."' ";    
    $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
    $result = mysql_fetch_array( $requete ); 
	$J = substr($result["Date_Naissance"],8,2);
	$M = substr($result["Date_Naissance"],5,2);
	$A = substr($result["Date_Naissance"],0,4);
	$date1=$J."-".$M."-".$A;
	$J2 = substr($result["DATEARRIVE"],8,2);
	$M2 = substr($result["DATEARRIVE"],5,2);
	$A2 = substr($result["DATEARRIVE"],0,4);
	$date2=$J2."-".$M2."-".$A2;
	$this->SetTextColor(225,0,0);
	$this->SetFont('dejavusans','B', 14);
	$this->Text(120,120,$result["Prenom_Latin"]);
	$this->Text(25,120,$result["Nomlatin"]);
	$this->Text(30,130,$date1);
	$this->Text(64,140,$this->dateUS2FR($result["Date_Premier_Recrutement"]));
	$this->Text(72,130,$this->nbrtostring("grh","com","IDCOM",$result["Commune_Naissancear"],"COMMUNE"));
	$this->Text(160,130,$this->nbrtostring("grh","wil","IDWIL",$result["Wilaya_Naissancear"],"WILAYAS"));
	$this->Text(15,170,$this->nbrtostring("grh","grade","idg",$result["rnvgradear"],"gradefr"));
	if($result["rnvgradear"]==1 or $result["rnvgradear"]==3 )
	{
	$this->Text(100,170," en ".$this->nbrtostring("grh","specialite","idspecialite",$result["FILIEREFR"],"specialitefr"));
	}
	$this->Text(35,180,$date2);
	$this->Text(170,230,$date);	 
    }	
	function titrefrc($ndp)  
    {
	$date=date("d-m-Y");
	$this-> mysqlconnect();  
	$sql = "SELECT Motif_Cessation,Date_Cessation,Nomlatin,Prenom_Latin,Date_Naissance,Commune_Naissancear,Wilaya_Naissancear,rnvgradear,DATEARRIVE,FILIEREFR FROM grh WHERE  idp = '".$ndp."' ";    
    $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
    $result = mysql_fetch_array( $requete ); 
	$J = substr($result["Date_Naissance"],8,2);
	$M = substr($result["Date_Naissance"],5,2);
	$A = substr($result["Date_Naissance"],0,4);
	$date1=$J."-".$M."-".$A;
	$J2 = substr($result["DATEARRIVE"],8,2);
	$M2 = substr($result["DATEARRIVE"],5,2);
	$A2 = substr($result["DATEARRIVE"],0,4);
	$date2=$J2."-".$M2."-".$A2;
	$this->SetTextColor(225,0,0);
	$this->SetFont('dejavusans','B', 14);
	$this->Text(120,120,$result["Prenom_Latin"]);
	$this->Text(25,120,$result["Nomlatin"]);
	$this->Text(30,130,$date1);
	$this->Text(72,130,$this->nbrtostring("grh","com","IDCOM",$result["Commune_Naissancear"],"COMMUNE"));
	$this->Text(160,130,$this->nbrtostring("grh","wil","IDWIL",$result["Wilaya_Naissancear"],"WILAYAS"));
	$this->Text(15,170,$this->nbrtostring("grh","grade","idg",$result["rnvgradear"],"gradefr"));
	if($result["rnvgradear"]==1 or $result["rnvgradear"]==3 )
	{
	$this->Text(100,170," en ".$this->nbrtostring("grh","specialite","idspecialite",$result["FILIEREFR"],"specialitefr"));
	}
	$this->Text(35,180,$date2);
	$this->Text(170,230,$date);
	$J = substr($result["Date_Cessation"],0,2);
	$M = substr($result["Date_Cessation"],3,2);
	$A = substr($result["Date_Cessation"],6,4);
	$Date_Cessation=$J."-".$M."-".$A;
	$this->Text(90,180,$Date_Cessation." (Date de ".$this->nbrtostring("grh","causedepart","idcausedepart",$result["Motif_Cessation"],"causedepartfr").")");
    }	
	 function entetetel()
    {
	$this->setPrintHeader(false);
    $this->setPrintFooter(false);
	$this->AddPage();
    $this->SetDisplayMode('fullpage','single'); 
	$this->setRTL(true);
	$date1=date("Y");
    $this->SetFont('aefurat', '', 18);
    $this->Text(60,10,"الجمهورية الجزائرية الديمقراطية الشعبيـة");
    $this->Text(55,20,"وزارة الصحة و السكان و إصلاح المستشفيات");
    $this->Text(5,30,"مديرية الصحة و السكان لولاية الجلفة");
    $this->Text(5,40,"المؤسسة العمومية الاستشفائية عين وسارة");
    $this->Text(5,50,"المديرية الفرعية للموارد البشرية ");
    $this->Text(5,60," الرقم:......./");
	$this->Text(35,60,$date1);
    }
    
	function titretel($ndp)
    {
	$this-> mysqlconnect();
	$sql = "SELECT Nomarab,Prenom_Arabe,Date_Naissance,Commune_Naissancear,Wilaya_Naissancear,rnvgradear,FILIERE,DATEARRIVE FROM grh WHERE  idp = '".$ndp."' "; 
    $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()) ;
    $result = mysql_fetch_array( $requete ); 
    mysql_free_result($requete);
		 $this->SetLineWidth(0.4);
		 $this->Rect(5, 5, 200, 285 ,'D');
		 $this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
         $this->SetFont('aefurat', '', 28);
         $this->SetXY(70,80);
         $this->Cell(65,15,'شهادة عمل',1,1,'C');
	     $this->SetFont('aefurat', '', 18);
		 $this->Text(5,110," يشهد السيـد مديـرالمؤسسة العمومية الاستشفائية بعين وسارة بأن السيد(ة):");
		 $this->Text(5,120," الاسم :");
		 $this->Text(100,120," اللقب :");
		 $this->Text(5,130,"المولود (ة) بتاريخ : ");
		 $this->Text(82,130," بـ");
		 $this->Text(150,130," ولاية ");
		 $this->Text(60,160," (ت) يعمل بمؤسستنا كما يلي :");
		 $this->Text(10,170,"الرتبة :  ");
		 $this->Text(10,180,"منذ :");
		 $this->Text(65,180,"إلى غاية يومنا هذا ");
		 $this->Text(10,200,"سلمت هذه الشهادة للمعني (ة) بناء على طلب منه (ها) لغرض ملف اداري");
		 $this->Text(60,210,"و في حدود ما يسمح به القانون");
		 $this->Text(128,220,"عين وسارة في :  ");
		 $this->Text(150,230," المدير");
		 $this->SetFont('aefurat', '', 12);
		 $this->Text(5,240," حررت من طرف :".$_SESSION["USER"]);//
		 $this->SetFont('aefurat', '', 28);
		 $date=date("Y-m-d");
	$this->SetTextColor(225,0,0);
	$this->SetFont('aefurat','I', 19);
	$this->Text(165,220,$date);
	$this->Text(120,120,$result["Nomarab"]);
	$this->Text(25,120,$result["Prenom_Arabe"]);
	$this->Text(50,130,$result["Date_Naissance"]);
	$this->Text(95,130,$this->nbrtostring("grh","com","IDCOM",$result["Commune_Naissancear"],"communear"));
	$this->Text(165,130,$this->nbrtostring("grh","wil","IDWIL",$result["Wilaya_Naissancear"],"WILAYASAR"));
	$this->Text(30,170,$this->nbrtostring("grh","grade","idg",$result["rnvgradear"],"gradear"));
	$this->Text(88,170,$result["FILIERE"]);
	$this->Text(26,180,$result["DATEARRIVE"]);
    }	
	function MAL()
    {
	// $this->SetLineWidth(0.4);
	// $this->Rect(5, 5, 200, 285 ,'D');
    // $this->Rect(5-1, 5-1, 200+2, 285+2 ,'D');
	$this->SetFont('aefurat','', 26);
	$this->SetXY(15,70);
	$this->Cell(180,8,"مــقرر عطلة مرضية ",0,1,'C');
	$this->SetXY(15,90);
	$this->SetFont('aefurat', '', 16);
	$this->Cell(180,8,"إن مدير المؤسسة العمومية الإستشفائية بعين وسارة  ",0,1,'C');
	$this->Text(5,100,"بمقتضى : الأمر رقم 03-06 المؤرخ في 15 يوليو سنة 2006 المتضمن القانون الأساسي العام  ");
	$this->Text(25,110,"للوظيفة العمومية .");
	$this->Text(5,120,"بمقتضى :القانون رقم 11-83 المؤرخ في 02 يوليو سنة 1983 المتعلق بالتأمينات الإجتماعية ");
	$this->Text(25,130,"المعدل بالقانون 01-08 المؤرخ في 23 جانفي سنة 2008.");
	$this->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 140-07 المؤرخ في 19 ماي سنة 2007 المتضمن إنشاء المؤسسات ");
	$this->Text(25,150,"العمومية الإستشفائية و المؤسسات العمومية للصحة الجوارية و تنظيمها و سيرها.");
	$this->Text(5,160,"-بناء : على الشهادة الطبية المقدمة .");
	$this->Text(90,170,"يقـــــرر");
	$this->Text(5,180,"المادة الأولى : تقبل العطلة المرضية المقدرة بـ");
	$this->Text(35,190,"لفائدة السيد(ة):");
	$this->Text(35,200,"بصفته (ها) :");
	$this->Text(35,210,"إبتداء من :");
	$this->Text(95,210,"إلى غاية :");
	//$pdf->Text(5,220,"المادة الثانية :خلال هذه العطلة لا تتحصل المسماة أعلاه على أجرها.");
	$this->Text(5,220,"المادة الثانية : خلال هذه المدة لا (ت) يتحصل المعني (ة) على أجره (ها).");
	$this->Text(5,230,"المادة الثالثة : يكلف كل من السادة المديرة الفرعية للموارد البشرية و أمين الخزينة ");
	$this->Text(34,240,"بعين وسارة بتنفيذ هذا المقرر.");
	$this->Text(140,250," عين وسارة في :  ");
	//$pdf->Text(175,250,$date);
	$this->Text(150,260,"  المدير");
	$this->SetFont('aefurat', '', 12);
	$this->Text(5,260," حررت من طرف :");//
    $this->Text(6,265," السيد(ة):".$_SESSION["USER"]);//
	$this->SetFont('aefurat', '', 28);
    }	
	function datePlus($dateDo,$nbrJours)
	{
	$timeStamp = strtotime($dateDo); 
	$timeStamp += 24 * 60 * 60 * $nbrJours;
	$newDate = date("Y-m-d", $timeStamp);
	return  $newDate;
	}
	function registreconges($idp,$DUREE,$JMADC,$FIN,$CC,$REMPLACANT,$dif)
	{
	$this-> mysqlconnect(); 
	$sql = "INSERT INTO regcong (idp,duree,datesor,dateent,cause,remplacant,STOCK ) VALUES ('".$idp."','".$DUREE."','".$JMADC."','".$FIN."','".$CC."','".$REMPLACANT."','".$dif."')";
	$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());  
	}
	function maj($dif,$idp)  //
	{
	$this-> mysqlconnect(); 
	$sql = "UPDATE grh SET  QUT = '$dif' WHERE idp = $idp " ; 
    $requete = @mysql_query($sql) or die($sql."<br>".mysql_error()); 
	}
	function congespecial($CC)
    {
	$this->SetFont('aefurat', '', 20);
    $this->SetXY(15,80);
    $this->Cell(180,8,$this->nbrtostring("grh","causeconge","idcc",$CC,"causecongear"),1,1,'C');
	$this->SetFont('aefurat', '', 16);
	$this->Text(5,100," الاسم :");
	$this->Text(5,110,"اللقب:");
	$this->Text(5,120,"الرتبـــة:");
	$this->Text(5,130," الوظيفـة :");
	$this->Text(5,140,"المصلحة :");
	$this->Text(5,150,"المدة :");
	$this->Text(35,150,"يوم / ايام");
	$this->Text(5,160,"تاريخ الخروج:");
	$this->Text(5,170,"تاريخ الدخول:");
	$this->Text(5,180," سبب الخروج:");
	$this->Text(5,190," المستخلـف:");
	$this->Text(140,220," عين وسارة في :  ");
	//$this->Text(175,220,date("Y-m-d"));
	$this->Text(150,240,"  المدير");
	$this->SetFont('aefurat', '', 12);
	$this->Text(5,260," حررت من طرف :");//
    $this->Text(6,265," السيد(ة):".$_SESSION["USER"]);//
	$this->SetFont('aefurat','I', 17);
    $this->SetTextColor(225,0,0);
	}
	
	function maternite()
    {
	$this->SetFont('aefurat','', 26);
	$this->SetXY(15,70);
	$this->Cell(180,8,"مــقرر عطلة أمومة ",0,1,'C');
	$this->SetXY(15,90);
	$this->SetFont('aefurat', '', 16);
	$this->Cell(180,8,"إن مدير المؤسسة العمومية الإستشفائية بعين وسارة  ",0,1,'C');
	$this->Text(5,100,"بمقتضى : الأمر رقم 03-06 المؤرخ في 15 يوليو سنة 2006 المتضمن القانون الأساسي العام  ");
	$this->Text(25,110,"للوظيفة العمومية .");
	$this->Text(5,120,"بمقتضى :القانون رقم 11-83 المؤرخ في 02 يوليو سنة 1983 المتعلق بالتأمينات الإجتماعية ");
	$this->Text(25,130,"المعدل بالقانون 01-08 المؤرخ في 23 جانفي سنة 2008.");
	$this->Text(5,140," بمقتضى : المرسوم التنفيذي رقم 140-07 المؤرخ في 19 ماي سنة 2007 المتضمن إنشاء المؤسسات ");
	$this->Text(25,150,"العمومية الإستشفائية و المؤسسات العمومية للصحة الجوارية و تنظيمها و سيرها.");
	$this->Text(5,160,"بناء :على عطلة الأمومة المقدمة .");
	$this->Text(90,170,"يقـــــرر");
	$this->Text(5,180,"المادة الأولى :تمنح عطلة أمومة مدتها (98 يوم) لفائدة السيدة ");
	$this->Text(35,190,"بصفتها :");
	$this->Text(35,200,"إبتداء من :");
	$this->Text(95,200,"إلى غاية :");
	$this->Text(5,210,"المادة الثانية :خلال هذه العطلة لا تتحصل المسماة أعلاه على أجرها.");
	$this->Text(5,220,"المادة الثالثة : يكلف كل من السادة المديرة الفرعية للموارد البشرية و أمين الخزينة ");
	$this->Text(34,230,"بعين وسارة بتنفيذ هذا المقرر.");
	$this->Text(140,240," عين وسارة في :  ");
	//$pdf->Text(175,240,$date);
	$this->Text(150,250,"  المدير");
	$this->SetFont('aefurat', '', 12);
	$this->Text(5,260," حررت من طرف :");//
    $this->Text(6,265," السيد(ة):".$_SESSION["USER"]);//
	$this->SetFont('aefurat','I', 17);
	$this->SetTextColor(225,0,0);
	}
	//*********************************************************//	
   function dateUS2FR($date)
	{
	  $date = explode('-', $date);
	  $date = array_reverse($date);
	  $date = implode('-', $date);
	  return $date;
	}
    

    function tabfr($colone) 
    {
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	//**************************************************************************************************************************
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM grade where idg = $colone  ";
	$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$result = mysql_fetch_array( $requete ) ;
	$gradeidp=$result["gradefr"];  
	mysql_free_result($requete);
	//**************************************************************************************************************************
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query = "SELECT service.servicefr as service,grh.postesupfr,idp,Date_Premier_Recrutement,DATEARRIVE ,Date_Naissance,Prenom_Latin,Nomlatin,rnvgradear,grade.gradefr as gradefr FROM grh,grade,service  where cessation !='y'   and rnvgradear = $colone and grade.idg=grh.rnvgradear and  service.ids=grh.servicear   order by Nomlatin ";
	$resultat=mysql_query($query);
    $totalmbr1=mysql_num_rows($resultat);
	if($totalmbr1!=0){
	$this->SetFont('aefurat', '', 12);
	$this->AddPage();
    $this->Text(8,1,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
	$this->Text(6,1.5,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
	$this->Text(12,2,"CANEVAS N° 6");
	$this->Text(8,2.5,"SUIVIE DES RESSOURCES HUMAINES DU SECTEUR PUBLIC");
	$this->Text(9,3,"(A adresser a la fin de chaque semestre au Ministere) ");
	$this->Text(0.5,3.5,"WILAYA DE DJELFA : EPH AIN OUSSERA");
	$this->Text(0.5,4,"SUIVI DES CORPS ");
	$this->SetFont('aefurat', '', 10);
    $this->SetXY(9,4);
    $this->Cell(6.5,1.5,"Grade :".$gradeidp,0,1,'L');
	$this->SetFont('aefurat', '', 9);
	$h=6;
	$this->SetXY(0.5,$h); 	  
	$this->cell(3.5,0.5,"Nom",1,0,'C',1,0);
	$this->SetXY(4,$h); 	  
	$this->cell(3.5,0.5,"Prenom",1,0,'C',1,0);
	$this->SetXY(7.5,$h); 	  
	$this->cell(2.5,0.5,"Date naissance",1,0,'C',1,0);
	$this->SetXY(10,$h); 	  
	$this->cell(9,0.5,"Grade",1,0,'C',1,0);
	$this->SetXY(19,$h); 	  
	$this->cell(2.5,0.5,"Poste sup ",1,0,'C',1,0);
	$this->SetXY(21.5,$h); 	  
	$this->cell(2.5,0.5,"Date de nomination",1,0,'C',1,0);
	$this->SetXY(24,$h); 	  
	$this->cell(4.5,0.5,"lieu d exercice",1,0,'C',1,0);
	$this->SetFont('aefurat', '', 10);
	$this->SetXY(0.5,6.5); // marge sup 13
	while($row=mysql_fetch_object($resultat))
      {
	   $this->cell(3.5,0.7,$row->Nomlatin,1,0,'L',0);//5  =hauteur de la cellule origine =7
	   $this->cell(3.5,0.7,$row->Prenom_Latin,1,0,'L',0);
	   $this->cell(2.5,0.7,$this->dateUS2FR($row->Date_Naissance),1,0,'C',0);
	   $this->cell(9,0.7,$row->gradefr,1,0,'L',0);
	   $this->cell(2.5,0.7,"",1,0,'C',0);//$row->ps
	   $this->cell(2.5,0.7,$row->Date_Premier_Recrutement,1,0,'C',0);
	   $this->cell(4.5,0.7,$row->service,1,0,'L',0);
	   $this->SetXY(0.5,$this->GetY()+0.7); 
      }
	}
    }

    function tabfr1($colone) //maj
    {
	$db_host="localhost";
	$db_name="grh"; 
	$db_user="root";
	$db_pass="";
	//**************************************************************************************************************************
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query_liste = "SELECT * FROM grade where idg = $colone  ";
	$requete = mysql_query( $query_liste, $cnx ) or die( "ERREUR MYSQL num?: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
	$result = mysql_fetch_array( $requete ) ;
	$corpsfr=$result["corpsfr"];  
	mysql_free_result($requete);
	//**************************************************************************************************************************
	$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
	$db  = mysql_select_db($db_name,$cnx) ;
	mysql_query("SET NAMES 'UTF8' ");
	$query = "SELECT service.servicefr as service,grh.postesupfr,idp,Date_Premier_Recrutement,DATEARRIVE ,Date_Naissance,Prenom_Latin,Nomlatin,rnvgradear,grade.gradefr as gradefr FROM grh,grade,service  where cessation !='y'   and rnvgradear = $colone and grade.idg=grh.rnvgradear and  service.ids=grh.servicear   order by Nomlatin ";
	$resultat=mysql_query($query);
    $totalmbr1=mysql_num_rows($resultat);
	if($totalmbr1!=0){
	$this->SetFont('aefurat', '', 12);
	$this->AddPage();
    $this->Text(8,1,"REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE");
	$this->Text(6,1.5,"MINISTERE DE LA SANTE DE LA POPULATION ET DE LA REFORME HOSPITALIERE");
	$this->Text(12,2,"CANEVAS N° 6");
	$this->Text(8,2.5,"SUIVIE DES RESSOURCES HUMAINES DU SECTEUR PUBLIC");
	$this->Text(9,3,"(A adresser a la fin de chaque semestre au Ministere) ");
	$this->Text(0.5,3.5,"WILAYA DE DJELFA : EPH AIN OUSSERA");
	$this->Text(0.5,4,"SUIVI DES CORPS ");
	$this->SetFont('aefurat', '', 10);
    $this->SetXY(9,4);
    $this->Cell(6.5,1.5,"CORPS :".$corpsfr,0,1,'L');
	$this->SetFont('aefurat', '', 9);
	$h=6;
	$this->SetXY(0.5,$h); 	  
	$this->cell(3.5,0.5,"Nom",1,0,'C',1,0);
	$this->SetXY(4,$h); 	  
	$this->cell(3.5,0.5,"Prenom",1,0,'C',1,0);
	$this->SetXY(7.5,$h); 	  
	$this->cell(2.5,0.5,"Date naissance",1,0,'C',1,0);
	$this->SetXY(10,$h); 	  
	$this->cell(9,0.5,"Grade",1,0,'C',1,0);
	$this->SetXY(19,$h); 	  
	$this->cell(2.5,0.5,"Poste sup ",1,0,'C',1,0);
	$this->SetXY(21.5,$h); 	  
	$this->cell(2.5,0.5,"Date de nomination",1,0,'C',1,0);
	$this->SetXY(24,$h); 	  
	$this->cell(4.5,0.5,"lieu d exercice",1,0,'C',1,0);
	$this->SetFont('aefurat', '', 10);
	$this->SetXY(0.5,6.5); // marge sup 13
	while($row=mysql_fetch_object($resultat))
      {
	   $this->cell(3.5,0.7,$row->Nomlatin,1,0,'L',0);//5  =hauteur de la cellule origine =7
	   $this->cell(3.5,0.7,$row->Prenom_Latin,1,0,'L',0);
	   $this->cell(2.5,0.7,$this->dateUS2FR($row->Date_Naissance),1,0,'C',0);
	   $this->cell(9,0.7,$row->gradefr,1,0,'L',0);
	   $this->cell(2.5,0.7,"",1,0,'C',0);//$row->ps
	   $this->cell(2.5,0.7,$row->Date_Premier_Recrutement,1,0,'C',0);
	   $this->cell(4.5,0.7,$row->service,1,0,'L',0);
	   $this->SetXY(0.5,$this->GetY()+0.7); 
      }
	}
    }	
	
	function totalmbr1 ($CATEGORIE) 
    {
    $db_host="localhost";
    $db_name="grh"; 
    $db_user="root";
    $db_pass="";
    $cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
    $db  = mysql_select_db($db_name,$cnx) ;
    mysql_query("SET NAMES 'UTF8' ");
	//jai ajouter le guillemet $CATEGORIE pour quil accept string 
    $query = "SELECT service.servicear as service,grh.ECHELON,grh.CATEGORIE,grh.RELIQUAT,grh.DATEDEFFET,grh.INDICE,grh.DATEDECISION,grh.NDECISION,grh.Nomlatin as Nomlatin ,grh.Prenom_Latin as Prenom_Latin,grh.Commune_Naissancear as Commune_Naissancear,grh.Sexe as Sexe ,grh.Date_Naissance as Date_Naissance ,grh.Prenom_Arabe as Prenom_Arabe,grh.Nomarab as Nomarab ,grh.idp as idp,grade.gradear as gradear FROM grh,grade,service where  grade.idg=grh.rnvgradear and  service.ids=grh.servicear  and CATEGORIE='$CATEGORIE' order by ECHELON";
    $resultat=mysql_query($query);
    $totalmbr1=mysql_num_rows($resultat);
    return $totalmbr1;
    }
	
	//entete
   

		function entetetableau($CAT)
		{
		$h2=90;
		$h1=105;
		$h=110;
		$this->SetXY(05,$h2);
		$this->cell(20,11,"الصنف:".$CAT,1,0,'C',1,0);
		$this->SetXY(05,$h1); 	  
		$this->cell(10,11,"الرقم",1,0,'C',1,0);
		$this->SetXY(15,$h1); 	  
		$this->cell(20,11,"اللقب",1,0,'C',1,0);
		$this->SetXY(35,$h1); 	  
		$this->cell(20,11,"الاسم",1,0,'C',1,0);
		$this->SetXY(55,$h1); 	  
		$this->cell(89,05,"اخر ترقية فى الرتبة التالية",1,0,'C',1,0);
		$this->SetXY(55,$h); 	  
		$this->cell(30,05,"رقم و تاريخ المقرر",1,0,'C',1,0);
		$this->SetXY(85,$h); 	  
		$this->cell(12,05,"الدرجة",1,0,'C',1,0);
		$this->SetXY(97,$h); 	  
		$this->cell(25,05,"الرقم الاستدلالى",1,0,'C',1,0);
		$this->SetXY(122,$h); 	  
		$this->cell(22,05,"تاريخ النفاد",1,0,'C',1,0);
		$this->SetXY(144,$h1); 	  
		$this->cell(36,05,"الاقدمية المحتفض بها",1,0,'C',1,0);
		$this->SetXY(144,$h); 	  
		$this->cell(12,05,"يوم",1,0,'C',1,0);
		$this->SetXY(156,$h); 	  
		$this->cell(12,05,"شهر",1,0,'C',1,0);
		$this->SetXY(168,$h); 	  
		$this->cell(12,05,"سنة",1,0,'C',1,0);
		$this->SetXY(180,$h1); 	  
		$this->cell(36,05,"الاقدمية  الجديدة",1,0,'C',1,0);
		$this->SetXY(180,$h); 	  
		$this->cell(12,05,"يوم",1,0,'C',1,0);
		$this->SetXY(192,$h); 	  
		$this->cell(12,05,"شهر",1,0,'C',1,0);
		$this->SetXY(204,$h); 	  
		$this->cell(12,05,"سنة",1,0,'C',1,0);
		$this->SetXY(216,$h1); 	  
		$this->cell(30,11,"النقطة السنوية",1,0,'C',1,0); 
		$this->SetXY(05,116); // marge sup 13   
        }
		
	function Code39($xpos, $ypos, $code, $baseline=0.5, $height=5){
    
	$wide = $baseline;
	$narrow = $baseline / 3 ; 
	$gap = $narrow;

	$barChar['0'] = 'nnnwwnwnn';
	$barChar['1'] = 'wnnwnnnnw';
	$barChar['2'] = 'nnwwnnnnw';
	$barChar['3'] = 'wnwwnnnnn';
	$barChar['4'] = 'nnnwwnnnw';
	$barChar['5'] = 'wnnwwnnnn';
	$barChar['6'] = 'nnwwwnnnn';
	$barChar['7'] = 'nnnwnnwnw';
	$barChar['8'] = 'wnnwnnwnn';
	$barChar['9'] = 'nnwwnnwnn';
	$barChar['A'] = 'wnnnnwnnw';
	$barChar['B'] = 'nnwnnwnnw';
	$barChar['C'] = 'wnwnnwnnn';
	$barChar['D'] = 'nnnnwwnnw';
	$barChar['E'] = 'wnnnwwnnn';
	$barChar['F'] = 'nnwnwwnnn';
	$barChar['G'] = 'nnnnnwwnw';
	$barChar['H'] = 'wnnnnwwnn';
	$barChar['I'] = 'nnwnnwwnn';
	$barChar['J'] = 'nnnnwwwnn';
	$barChar['K'] = 'wnnnnnnww';
	$barChar['L'] = 'nnwnnnnww';
	$barChar['M'] = 'wnwnnnnwn';
	$barChar['N'] = 'nnnnwnnww';
	$barChar['O'] = 'wnnnwnnwn'; 
	$barChar['P'] = 'nnwnwnnwn';
	$barChar['Q'] = 'nnnnnnwww';
	$barChar['R'] = 'wnnnnnwwn';
	$barChar['S'] = 'nnwnnnwwn';
	$barChar['T'] = 'nnnnwnwwn';
	$barChar['U'] = 'wwnnnnnnw';
	$barChar['V'] = 'nwwnnnnnw';
	$barChar['W'] = 'wwwnnnnnn';
	$barChar['X'] = 'nwnnwnnnw';
	$barChar['Y'] = 'wwnnwnnnn';
	$barChar['Z'] = 'nwwnwnnnn';
	$barChar['-'] = 'nwnnnnwnw';
	$barChar['.'] = 'wwnnnnwnn';
	$barChar[' '] = 'nwwnnnwnn';
	$barChar['*'] = 'nwnnwnwnn';
	$barChar['$'] = 'nwnwnwnnn';
	$barChar['/'] = 'nwnwnnnwn';
	$barChar['+'] = 'nwnnnwnwn';
	$barChar['%'] = 'nnnwnwnwn';

	$this->SetFont('aefurat','',10);
	
	$this->SetFillColor(0);

	$code = '*'.strtoupper($code).'*';
	for($i=0; $i<strlen($code); $i++){
		$char = $code[$i];
		if(!isset($barChar[$char])){
			$this->Error('Invalid character in barcode: '.$char);
		}
		$seq = $barChar[$char];
		for($bar=0; $bar<9; $bar++){
			if($seq[$bar] == 'n'){
				$lineWidth = $narrow;
			}else{
				$lineWidth = $wide;
			}
			if($bar % 2 == 0){
				$this->Rect($xpos, $ypos, $lineWidth, $height, 'F');
			}
			$xpos += $lineWidth;
		}
		$xpos += $gap;
	}
}	
		
		
		
}	