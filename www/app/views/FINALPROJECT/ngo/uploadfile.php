<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#uploadfile{width:250px; height:150px; background-color:#666; border:1px solid black;}
</style>
</head>

<body>
<!--UPLOAD FILE-->
<div id="uploadfile" >
<div style="background-color:black; width:100%; height:40px; float:left;">
<img src="images/images (17).jpg" onclick="hideuploadfile1();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-left:50px;  ">UPLOAD FILE / IMAGES</p>
</div>
<br /><br />
<div style="width:100%; height:auto; float:left;">
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr><td><input type="email" value=" " style="display:none;" name="email1"  />
<tr><td><input id="filefield" type="file" name="filefield"  />
<tr><td><input id="Upload" type="submit" name="Upload" value="Upload" style="width:150px; height:25px; background-color:black; color:white; border:1px solid black; margin-left:50px; margin-top:10px; " />
<!-- This hidden input will force the  PHP max upload size. it may work on all servers. -->
<tr><td><input type="hidden" name="MAX_FILE_SIZE" value="60485760" />
</table>
 </form>
</div>
</div>

<!--UPLOAD FILE-->
</body>
</html>
