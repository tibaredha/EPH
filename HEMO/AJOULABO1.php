<?php
$dateeuro=date('d/m/Y');
$idp=$_POST["idp"];
$DATE=$_POST["DATE"];                      
$MEDECIN=$_SESSION["USER"] ; 
$GB=$_POST["GB"] ;$GR=$_POST["GR"] ;$HB=$_POST["HB"] ;$HT=$_POST["HT"] ;$PLQT=$_POST["PLQT"] ;
$TP=$_POST["TP"] ;$INR=$_POST["INR"] ;
$VS1H=$_POST["VS1H"] ;$VS2H=$_POST["VS2H"] ;
$GLYCE=$_POST["GLYCE"] ;$UREE=$_POST["UREE"] ;$CREAT=$_POST["CREAT"] ;$ACURIQUE=$_POST["ACURIQUE"] ;
$BILIT=$_POST["BILIT"] ;$BILID=$_POST["BILID"] ;
$TGO=$_POST["TGO"] ;$TGP=$_POST["TGP"] ;$ASLO=$_POST["ASLO"] ;$CRP=$_POST["CRP"] ;
$TG=$_POST["TG"] ;$CHOLES=$_POST["CHOLES"] ;
$NA=$_POST["NA"] ;$K=$_POST["K"] ;$PHOS=$_POST["PHOS"] ;$CL=$_POST["CL"] ;$CA=$_POST["CA"] ;
$HVB=$_POST["HVB"] ;$HVC=$_POST["HVC"] ;$HIV=$_POST["HIV"] ;$TPHA=$_POST["TPHA"] ;
$per-> mysqlconnect();
$sql = "INSERT INTO HEMOBIO
(idp,GB,GR,HB,HT,PLQT,TP,INR,VS1H,VS2H,ACURIQUE,BILIT,BILID,TGO,TGP,ASLO,CRP,TG,CHOLES,CL,HVB,HVC,HIV,TPHA,DATE,UREE,CREAT,GLYCE,CA,PHOS,NA,K,Poids,USER) 
VALUES 
('".$idp."','".$GB."','".$GR."','".$HB."','".$HT."','".$PLQT."','".$TP."','".$INR."','".$VS1H."','".$VS2H."','".$ACURIQUE."','".$BILIT."','".$BILID."','".$TGO."','".$TGP."','".$ASLO."','".$CRP."','".$TG."','".$CHOLES."','".$CL."','".$HVB."','".$HVC."','".$HIV."','".$TPHA."','".$DATE."','".$UREE."','".$CREAT."','".$GLYCE."','".$CA."','".$PHOS."','".$NA."','".$K."','".$Poids."','".$MEDECIN."')";
$requete = @mysql_query($sql) or die($sql."<br>".mysql_error());
if($requete)
{
header("Location: index.php?uc=AJOULABO") ;
}
else
{
header("Location: index.php?uc=AJOULABO") ;
}

?>
