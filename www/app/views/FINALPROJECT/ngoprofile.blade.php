
<!DOCTYPE html >
<html>
<head>
<link rel="icon" href="images/icon5_2.gif" type="image/gif">
<title>CHILD NGO</title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript">

function showevent1()
{
	$("#event1").show(2000);
}
//EXTRA
function showuploaddetails()
{
	$("#sa").slideToggle();
}
//EXTRA
function hideevent1()
{
	$("#event1").hide(2000);
}
function hideuploadfile1()
{
	$("#uploadfile").hide(2000);
}
function showuploadfile1()
{
	$("#uploadfile").show(2000);
}
function showuploadvideo1()
{
	$("#uploadvideo").show(2000);
}
function hideuploadvideo1()
{
	$("#uploadvideo").hide(2000);
}
</script>
<link rel="stylesheet" href="/ngomenu_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<style type="text/css">
* {
	margin: 0px;
	outline: 0px;
	/* [disabled]padding:0px; */
	border: 0px;  
}
body, html
{
    width:100%;
    min-height: 100%;
	background-color:#666;
}
#ngomain
{
	width:70%;
	height:100%;
	margin:auto;
	background-color:red;
	margin-top: -20px;
}
#menu 
{
	width:100% ;
	height:37px ;
	
	
}
#image2{float:left; width:99.8%; height:400px; min-width: 700px; border:1px black solid; border-top:0px ; min-width:730px; }
#image22{width:100%; height:100%;}
#update{position:absolute; top:100px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#300; color:white; cursor:pointer;} 
#update:hover{position:absolute; top:100px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#900; color:white;}
#logout{position:absolute; top:160px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#300; color:white; cursor:pointer;} 
#logout:hover{position:absolute; top:160px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#900; color:white;}  
#personaldetails{position:absolute; right:1%; top:50px; height:150px; width:13%; min-width:140px; background-color:#999; margin-left:10px; border:1px solid black; }
#pd1{font-size:100%; color:white; width:auto; height:auto;}
#pd2{font-size:100%; color:white; width:100%; margin-top:5px;  height:5% auto; text-align:center;}
#pd3{font-size:100%; color:white; width:100%; margin-top:5px;  height:5% auto; text-align:center;}
#pd{width:100%; height:10% auto; margin-top:4px; background-color:#900; text-align:center; }
#pd11{height:80%; margin-top:20px; width:100%; }

#uploadfile{width:250px; height:150px; background-color:#666; border:1px solid black; position:absolute; left:690px; top:220px;   z-index:10000; display:none; margin-top:5px; }
#opo{background-color:black; color:white; width:120px; margin-left:90px; height:30px; margin-top:10px; cursor:pointer;} 
#sa::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#sa::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#sa::-webkit-scrollbar-thumb {
  background-color: black;
  
  
}
</style>
</head>
<body>
<!--UPDATE DETAILS-->
<input type="button" value="UPDATE DETAILS" id="update"/>
<a href="logout"><input type="button" value="LOGOUT" id="logout"/></a>
<!--UPDATE DETAILS-->
<!--PERSONAL DETAILS-->
<div id="personaldetails">
<div id="pd">
 <p id="pd1">PERSONAL DETAILS</p></div>
 <div id="pd11">
 

<p id="pd3">{{$non}}</p>
 <p id="pd2">{{$city}}</p>
 
 
 </div>
</div>
<!--PERSONAL DETAILS-->


<!--UPLOAD FILE-->
<!--SOLVE UPLOAD PROPERLY-->
 <!--HAAh-->@extends("FINALPROJECT/UPLOADFILe1/upload1")
<div id="uploadfile" >
<div style="background-color:black; width:100%; height:40px; float:left;">
<img src="/images/images (17).jpg" onclick="hideuploadfile1();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-left:50px;  ">UPLOAD FILE / IMAGES</p>
</div>
<br /><br />
<div style="width:100%; height:auto; float:left;">
{{ Form::open(array('url' => '/makefile1','files' => true)) }}
<table>
<tr><td><input type="text" style="display:none;"  name="city" value="<?php echo $city; ?>"/>
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="display:none;" name="non" value="<?php echo $non; ?>"/>
<tr><td><input id="filefield" type="file" name="filefield1"  />
<tr><td><input id="Upload" type="submit" name="Upload" value="Upload" style="width:150px; height:25px; background-color:black; color:white; border:1px solid black; margin-left:50px; margin-top:10px; cursor:pointer; " />
<!-- This hidden input will force the  PHP max upload size. it may work on all servers. -->
<tr><td><input type="hidden" name="MAX_FILE_SIZE" value="60485760" />
</table>
 {{ Form::close() }}
</div>
</div>

<!--UPLOAD FILE-->
<!--UPLOad Video-->
@extends("FINALPROJECT/UPLOADVIDEO/fileupload2")
<div id="uploadvideo" style="width:300px; height:200px; background-color:#666; left:690px; top:0px; position:absolute; z-index:10000; margin-top:5px; border:1px solid black; display:none;">
<div style="width:100%; height:40px; background-color:black; float:left;" >
<img src="/images/images (17).jpg" onclick="hideuploadvideo1();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-left:50px;  ">UPLOAD VIDEOS</p>

</div>
<div style="width:100%; height:auto; float:left;">
<table>
{{ Form::open(array('url' => '/ngo/makevideo1','files' => true)) }}
                       
<tr><td><input type="text" style="display:none;"  name="city" value="<?php echo $city; ?>"/>
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="display:none;" name="non" value="<?php echo $non; ?>"/>
<tr><td><input type="file" name="video1">
<tr><td><input type="submit"   value="UPLOAD VIDEO" id="opo"/>
{{ Form::close() }}
<tr><td><input type="submit" name="disp" value="DISPLAY VIDEO" id="opo"/>

</table>
</div>

</div>
<!--UPLAOD VIDEO-->
<!--Advertisement-->
@extends('FINALPROJECT/ngo/makeevnt');
<!--/Advertisement-->
<!--MAIN-->
<div id="ngomain">
<!--MENU BAR-->
<div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="#" style="height:44px;line-height:44px;" ><span>Event</span></a>
	<ul>
		<li class="subfirst"><a href="#" onClick="showevent1();">MAKE EVENT</a></li>
		<li><a href="">CHECK EVENT</a></li>
		<li><a href="">DELETE EVENT</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;">Upload </a><ul>
		<li class="subfirst"><a href="#" onClick="showuploadvideo1();">VIDEO</a></li>
		<li><a href="#" onClick="showuploadfile1();">FILES</a></li>
		
	</ul>
    </li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" onClick="showuploaddetails();">BLOG</a></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;">History</a></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;">Advertisement</a></li>
	
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;">Other NGO's</a></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;">Inbox{{{$var or $var=''}}}</a></li>
	<li class="toplast"><a href="#" style="height:44px;line-height:44px;">Delete ID</a></li>
</ul><p class="_css3m"><a href="http://css3menu.com/">CSS input Radio Button Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->
</div>
<!--MENU BAR-->





<!--iMAGE-->
<div id="image2">

<img src="/images/donations.jpg" lowsrc="images/3E_What_we_do.jpg" id="image22">

</div>
<!--iMAGE-->


<!--EXTRA        iframe-->
<div  id="sa" style="width:50%; min-width:700px; height:400px; border:1px solid black; overflow:auto; float:left; ">
<!--HH-->
<div style="width:90%; height:400px; margin-top:10px; margin-left:20px; backgorund-color:red; border:1px solid black; float:left;">

<div style="width:40%; height:60%; float:left;">
<img src="/images/65b899cc-0991-4f76-bfee-3c9726e886d7.jpg" style="width:100%; height:100%; margin-left:10px;">
</div>

<!--JJ-->
<div style="width:50%; height:100%; float:left; margin-left:20px;">
<label style="text-decoration:underline;">NAME OF NGO:</label><br>
<div style="width:100%; height:30px;  margin-left:15%; float:left;"><p style="color:white;">SMILE FOUNDATION</p></div>
<label style="text-decoration:underline;">TOPIC:</label><br>
<div style="width:100%; height:30px;  margin-left:15%; float:left;"><p style="color:white;">HELLO</p></div>
<label style="text-decoration:underline;">ADDRESS OF EVENT:</label><br>
<div style="width:100%; height:100px auto;  float:left;"><p style="color:white;">NEAR CIVIL DISPENSARY SURGAPURI MUKTSAR ROAD KOTKAPURA PUNJAB FARIDKOT</p></div><br>
<label style="text-decoration:underline;">DATE OF EVENT:</label><br>
<div style="width:100%; height:20px; float:left;"><p style="color:white;">2015-12-20</p></div>
<label style="text-decoration:underline;">CONTACT NUMBER:</label><br>
<div style="width:100%; height:20px; float:left;"><p style="color:white;">8447136634</p></div>
<label style="text-decoration:underline;">DESCRIPTION:</label><br>
<div style="width:100%; height:20px; float:left;"><p style="color:white;">NEAR CIVIL DISPENSARY SURGAPURI MUKTSAR ROAD KOTKAPURA PUNJAB FARIDKOT NEAR CIVIL DISPENSARY SURGAPURI MUKTSAR ROAD KOTKAPURA PUNJAB FARIDKOT NEAR CIVIL DISPENSARY SURGAPURI MUKTSAR ROAD KOTKAPURA PUNJAB FARIDKOT</p></div>
</div>
<!--JJ-->

</div>
<!--HH-->
</div>
<!--EXTRA           iframe-->


</div>
<!--MAIN-->
</body>
</html>


