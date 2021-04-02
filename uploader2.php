<?php









if($name=$_FILES['file']['name'])
{
$size=$_FILES['file']['size'];

$tmp_name=$_FILES['file']['tmp_name'];

$type=$_FILES['file']['type'];
$location='upload/';
$extension=strtolower(substr($name, strpos($name, '.')+1));
$response='<?xml version="1.0" encoding="utf-8" standalone="yes">';
if(($extension=='jpg' || $extension=='jpeg'|| $extension=='png' || $extension=='gif') 
&& ($type == 'image/jpeg' || $type == 'image/png' || $type == 'image/gif')&& $size<3000000) 

{if (move_uploaded_file($tmp_name, $location.$name))
	{
 

$response=$location.$name;

echo $response;
}
	
	
	
}else{$response.='<messages>'.'your files must be less than 3mb; it must be in .jpg format or .png format  '.'</messages>';
return $response;
}}


?>