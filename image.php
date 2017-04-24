<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('imagestore',$conn);
if(!$db)
{
echo mysql_error();
}
$rollNo=$_GET['rollNo'];
$q="SELECT image,imgtype FROM students where rollNo='$rollNo'";
$r=mysql_query("$q",$conn);
if($r)
{
$row=mysql_fetch_array($r);
$type="Content-type: ".$row['imgtype'];
header($type);
echo $row['image'];
}
else
{
echo mysql_error();
}
?>