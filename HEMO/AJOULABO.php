<?php 
$per ->h(1,500,170,'Ajout Bilan Biologique');
$per ->f0('index.php?uc=AJOULABO1','post');
$per ->fieldset("field1","***");$per ->fieldset("field5","***");
$per ->fieldset("BILANHEMO","***");$per ->submit(1090,320,'Ajout Bilan Biologique');
$x=250;
$per ->label(50,$x,'Nom Prénom:');             $per ->NOMPRENOMHEMO(150,$x,"idp");       
$per ->label(50,$x+30,'Date :');               $per ->txt(120,$x+30,'DATE',20,date("Y-m-d"));
$per ->label(350,$x+30,'Heure :');             $per ->txt(470-40,$x+30,'HEURE',20,date("H:i"));
$per ->label(50,$x+90,'Service');             $per ->txt(120,$x+90,'SERVICE',20,"HEMODIALYSE");
$per ->label(650,$x+60,'HVB');                 $per ->combov(720,$x+60,'HVB',array("*","negatif","douteux","Positif")); 
$per ->label(650,$x+90,'HVC');                 $per ->combov(720,$x+90,'HVC',array("*","negatif","douteux","Positif")); 
$per ->label(760+40,$x+60,'HIV');              $per ->combov(810+40,$x+60,'HIV',array("*","negatif","douteux","Positif")); 
$per ->label(760+40,$x+90,'VDRL');             $per ->combov(810+40,$x+90,'TPHA',array("*","negatif","douteux","Positif")); 
$per ->label(50,$x+136,'GB');                 $per ->txt(120,$x+135,'GB',5,'0');
$per ->label(50,$x+136+30,'GR');              $per ->txt(120,$x+135+30,'GR',5,'0');
$per ->label(50,$x+136+60,'HB');              $per ->txt(120,$x+135+60,'HB',5,'0');
$per ->label(50,$x+136+90,'HT');              $per ->txt(120,$x+135+90,'HT',5,'0');
$per ->label(50,$x+136+120,'PLQT');            $per ->txt(120,$x+135+120,'PLQT',5,'0');
$per ->label(250,$x+136,'TP');                $per ->txt(320,$x+135,'TP',5,'0');
$per ->label(250,$x+136+30,'INR');            $per ->txt(320,$x+135+30,'INR',5,'0');
$per ->label(250,$x+136+60,'VS1H');           $per ->txt(320,$x+135+60,'VS1H',5,'0');
$per ->label(250,$x+136+90,'VS2H');           $per ->txt(320,$x+135+90,'VS2H',5,'0');
$per ->label(450,$x+136,'GLYCE');             $per ->txt(520,$x+135,'GLYCE',5,'0');
$per ->label(450,$x+136+30,'UREE');           $per ->txt(520,$x+135+30,'UREE',5,'0');
$per ->label(450,$x+136+60,'CRAET');          $per ->txt(520,$x+135+60,'CREAT',5,'0');
$per ->label(450,$x+136+90,'AC URIQ');          $per ->txt(520,$x+135+90,'ACURIQUE',5,'0');
$per ->label(650,$x+136,'BILI T');            $per ->txt(720,$x+135,'BILIT',5,'0');
$per ->label(650,$x+136+30,'BILI D');         $per ->txt(720,$x+135+30,'BILID',5,'0');
$per ->label(650,$x+136+60,'TGO');            $per ->txt(720,$x+135+60,'TGO',5,'0');
$per ->label(650,$x+136+90,'TGP');            $per ->txt(720,$x+135+90,'TGP',5,'0');
$per ->label(850,$x+136,'ASLO');              $per ->txt(920,$x+135,'ASLO',5,'0');
$per ->label(850,$x+136+30,'CRP');            $per ->txt(920,$x+135+30,'CRP',5,'0');
$per ->label(850,$x+136+60,'TRIGLI');         $per ->txt(920,$x+135+60,'TG',5,'0');
$per ->label(850,$x+136+90,'CHOLES');         $per ->txt(920,$x+135+90,'CHOLES',5,'0');
$per ->label(1050,$x+136,'NA+');              $per ->txt(1120,$x+135,'NA',5,'0');
$per ->label(1050,$x+136+30,'K+');            $per ->txt(1120,$x+135+30,'K',5,'0');
$per ->label(1050,$x+136+60,'PHOS');          $per ->txt(1120,$x+135+60,'PHOS',5,'0');
$per ->label(1050,$x+136+90,'CL');            $per ->txt(1120,$x+135+90,'CL',5,'0');
$per ->label(1050,$x+136+120,'CA++');          $per ->txt(1120,$x+135+120,'CA',5,'0');
$per ->url(1050,250,"index.php?uc=LISTMHEMO","Suivie Du Patient Hemodialyse","3");   

$per ->f1();
$per -> sautligne (20);
?>  