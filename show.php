<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('imagestore',$conn);
if(!$db)
{
echo mysql_error();
}
$q="SELECT * FROM students";
$r=mysql_query("$q",$conn);
if($r)
{
while($row=mysql_fetch_array($r))
{
//echo $row['image'];
//echo "</br>";
echo $row ['name'];
echo "</br>";
echo "<img src=image.php?rollNo=".$row['rollNo']." width=300 height=300/>";
echo "</br>";
}
}
else
{
echo mysql_error();
}
?>