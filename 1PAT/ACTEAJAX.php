﻿<?php
function ajax()
{
$db_host="localhost";
$db_name="grh"; 
$db_user="root";
$db_pass="";
$cnx = mysql_connect($db_host,$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db  = mysql_select_db($db_name,$cnx) ;
mysql_query("SET NAMES 'UTF8' ");

if($_POST['id'])
{
$id=$_POST['id'];
$sql=mysql_query("select * from t11 where CODE_CHAP='$id' AND CODE_TITRE='I' ORDER BY LIB_COURAN");
while($row=mysql_fetch_array($sql))
{
echo '<option value="'.$row[4].'">'.$row[3].'</option>';
}
}
}
ajax();
?>