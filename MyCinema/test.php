<?php

require('CONNEXION/CONNECT.php');

if ($_POST['datedays']!="")
{
$day=$_POST['datedays'];
}
else
{
$day="%";
}
 
if ($_POST['datemonth']!="")
{
$month=$_POST['datemonth'];
}
else
{
$month="%";
}   
 
if ($_POST['dateyears']!="")
{
$years=$_POST['dateyears'];
}
else
{
$years="%";
}  
 
$date= $years ."-". $month ."-" . $day ;

$reponse = mysql_query("SELECT * FROM events WHERE Name LIKE '%$description%' AND Date LIKE '$date'  ORDER BY Date");

$req = mysql_query("SELECT COUNT(*) as nbr FROM events WHERE Name LIKE '%$description%' AND Date Like '$date'");