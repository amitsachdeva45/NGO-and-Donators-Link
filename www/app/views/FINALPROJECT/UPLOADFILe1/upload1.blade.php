<?php

if(isset($_FILES['filefield'])){

$file=$_FILES['filefield'];

$upload_directory='uploads/';

$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf,html,php,mp4,3gp,png,gif";

$allowed_extensions=explode(',',$ext_str);

$max_file_size = 60485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */

$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character

if (!in_array($ext, $allowed_extensions) ) {

echo "only".$ext_str." files allowed to upload"; // exit the script by warning
sleep(3);
header('Location: upload.php');
    die;

} /* check file size of the file if it exceeds the specified size warn user */

if($file['size']>=$max_file_size){

echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning

}

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

$path=md5(microtime()).'.'.$ext;

if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){

mysql_connect("localhost:3306","root","amit");

mysql_select_db("amit1");


$str=0;
$result=mysql_query("select count(id) as T from gravator");
while($row=mysql_fetch_array($result))
{extract($row);
$str2=$row["T"];}
$str2=$str2+1;
mysql_query("INSERT INTO gravator VALUES ('$str2', '$path')") or die(mysql_error());
echo $str2;
echo"Your File Successfully Uploaded";
}

else{

echo "The file cant moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning

}

}



?>

