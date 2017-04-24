<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
$conn = mysql_connect('localhost','root','');
$db = mysql_select_db('imagestore',$conn);
if(!$db)
{
echo mysql_error();
}
//$rollNo = $_POST['rollNo'];
$image = addslashes (file_get_contents($_FILES['image']['tmp_name']));
$name=$_POST['name'];
$image_s=getimagesize($_FILES['image']['tmp_name']);
$imgtype = $image_s['mime'];
$q = "INSERT INTO students(rollNo,image,name,imgtype) VALUES('','$image','$name','$imgtype')";

$r=mysql_query($q, $conn);
if($r)
{
echo "Information stored successfully";
}
else
{
echo mysql_error();
}

?>