
<!DOCTYPE html >
<html>
<head>
<link rel="icon" href="/images/icon5_2.gif" type="image/gif">
<title>{{{$non}}}</title>

<script type="text/javascript" src="jquery-1.8.2.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript" >

function showevent1()
{
	
	$("#event1").slideToggle(1000);
}
function showhistory()
{
	$("#history").slideToggle(1000);
}
function deletengo()
{
	$("#deleteform").slideToggle(1000);$('#v1').hide();$("#pv1").hide();}
function showinbox()
{
	
	$("#inbox").slideToggle(2000);
}

function checkpswd()
{
	
	var c=$("#pswd").val();
	if(c.length<5)
	{
		$("#pswd1").html("WEAK");
		$("#pswd1").css("color","red");
	}
	else if(c.length>=5&& c.length<=10)
	{$("#pswd1").html("AVERAGE");
		$("#pswd1").css("color","yellow");
	}
	else
	{
		$("#pswd1").html(" ");
		
	}
}
function matchpswd()
{
	var c=$("#pswd").val();
	var d=$("#conpswd").val();
	if(c==d)
	{
		$("#pswd2").html(" ");
		
	}
	else
	{
		$("#pswd2").html("INCORRECT");
		$("#pswd2").css("color","blue");
	}
}
//EXTRA
function showngo()
{
	$("#ongo").slideToggle(1000);
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
#image2{float:left; width:99.8%; height:300px; min-width: 700px; border:1px black solid; border-top:0px ; min-width:730px; }
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
  border-radius: 5px;border:1px solid white;
 
}
#ongo::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#ongo::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#ongo::-webkit-scrollbar-thumb {
  background-color: black;
  
   border-radius: 5px;border:1px solid white;
}

#hjh::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#hjh::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#hjh::-webkit-scrollbar-thumb {
  background-color: black;
   border-radius: 5px;border:1px solid white;
  
}
#inbox::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#inbox::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#inbox::-webkit-scrollbar-thumb {
  background-color: black;
   border-radius: 5px;border:1px solid white;
  
}
#history::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#history::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#history::-webkit-scrollbar-thumb {
  background-color: black;
  border-radius: 5px;
  border:1px solid white;
  
  
}
.history1{text-decoration: underline;}
.history2{color:#900; font-style: italic;}
.pdet{color:white; margin-left: 3px; }
</style>
</head>
<body>
<!--PARTICULAR VOLUNTEER-->
<div id="pv1" style="position:absolute; left:300px; top:50px; background-color:#666; z-index:10000; border:1px solid black;  width:220px ; height:300px auto; oveflow:auto; display:none;">
<div style="width:90%; height:40px; float:left; background-color:black;  "><p style="color:white; font-size:20px; margin-left:5px; "  >PARTICULAR VOLUNTEER</p></div>
@foreach($ty as $ty)
<div style="width:200px ; height:200px auto; float:left; background-color:#CCC; border:1px solid black; margin-top:5px;">
<table style="width:100%; height:100%;"> 
<tr><td><p class="pdet">{{{$ty->nam}}}</p>
<tr><td><p class="pdet">{{{$ty->ema}}}</p>
<tr><td><p class="pdet">{{{$ty->address}}}</p>
<tr><td><p class="pdet">{{{$ty->city}}}</p>
<tr><td><p class="pdet">{{{$ty->mobile}}}</p>
<tr><td><p class="pdet">{{{$ty->gender}}}</p>
</table>
</div>
@endforeach
</div>
<!--PARTICULAR VOLUNTEER-->

<!-- VOLUNTEER-->
<div id="v1" style="position:absolute; left:100px; top:50px; background-color:#666; z-index:10000; border:1px solid black;  width:220px ; height:300px auto; oveflow:auto; display:none;">

@foreach($try as $try)
<div style="width:200px ; height:200px auto; float:left; background-color:#CCC; border:1px solid black; margin-top:5px;">
<table style="width:100%; height:100%;"> 
<tr><td><p class="pdet">{{{$try->nam}}}</p>
<tr><td><p class="pdet">{{{$try->ema}}}</p>
<tr><td><p class="pdet">{{{$try->address}}}</p>
<tr><td><p class="pdet">{{{$try->city}}}</p>
<tr><td><p class="pdet">{{{$try->mobile}}}</p>
<tr><td><p class="pdet">{{{$try->gender}}}</p>
</table>
</div>
@endforeach
</div>
<!-- VOLUNTEER-->

<!--UPDATE DETAILS-->

<input type="button" value="HISTORY" onclick="showhistory();" id="logout"/>
<!--UPDATE DETAILS-->

<!--HISTORY-->
<div  id="history" style="width:13%; height:300px ; background-color:#666; overflow:auto; float:left; border:2px solid black; display:none; position:absolute; left:10px; top:220px; z-index:10000;">
<div style="width:170px; height:30px; background-color:black; margin-left:5px;"><p style="color:white; font-size:26px; margin-left:5px;">HISTORY</p> </div>
@foreach($aw as $as)
<table style="width:80% auto; height:250px auto; border:1px solid black; margin-top:20px; background-color:#CCC; margin-left:10px; margin-bottom:5px; float:left;">
<tr><td><p class="history1">EMAIL</p><p class="history2">{{{$as->manemail or $as->manemail=''}}}</p>
<tr><td><p class="history1">Name</p><p class="history2">{{{$as->name or $as->name=''}}}</p>
<tr><td><p class="history1">Type Of Donation</p><p class="history2">{{{$as->typeofdon or $as->typeofdon=''}}}</p>
<tr><td><p class="history1">Mobile</p><p class="history2">{{{$as->mobile or $as->mobile=''}}}</p>
<tr><td><p class="history1">Address</p><p class="history2">{{{$as->address or $as->address=''}}}</p>
<tr><td><p class="history1">THING</p><p class="history2">{{{$as->thing or $as->thing=''}}} &nbsp; {{{$as->quantity or $as->quantity=''}}}</p>
</table>
@endforeach
</div>
<!--HISTORY-->



<!--INBOX-->
<!--ARTICle-->
<div id="inbox" style="width:300px; min-width:200px; height:350px; float:left; border:1px solid black; overflow:auto; margin-left:20px; position:absolute; z-index:10000; top:50px; left:450px; background-color:#666; display:none; ">
<div style="width:90%; height:40px; float:left; background-color:black;  "><p style="color:white; font-size:20px; margin-left:5px; cursor:pointer;" onclick="showinbox();" >PERSONNAL DONATION</p></div><div id="output"></div>
@foreach($ee as $mon)
<div style="width:90%; height:200px auto; float:left; margin-top:10px; background-color:#CCC; border:1px solid black; margin-left:10px; margin-bottom:5px;">
<table style="width:100%; height:100%;">
<form method="post" action="/donationacceptarticle">
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="email"  value="<?php echo $mon->email;?>">
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="nam" value="<?php echo $mon->name;?>">
<tr><td colspan="2"><input type="text" value="<?php echo $mon->address;?>"  style="border:0px; resize:none; color:#900; background-color:#CCC; height:auto; weight:150px; display:none;" name="address"><p style="color:#900;"><?php echo $mon->address;?></p>

<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>DONATION ARTICLE:</strong></label><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="articlename" value="<?php echo $mon->articlename;?>" >
<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>QUANTITY:</strong></label><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="quantity" value="<?php echo $mon->quantity;?>" >
<tr><td ><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="city" value="<?php echo $mon->city;?>"><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="mobile" value="<?php echo $mon->mobile;?>"> 
<tr><td colspan="2"><input type="submit" value="SUBMIT" style="background-color:black; color:white;" >
</form>
</table>
</div>
@endforeach
</div>
<!--ARTICLE-->
<!--INBOX-->





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


<!--DELETE FORM-->
<div id="deleteform" style="width:300px; height:200px auto; background-color:#666; position:absolute; top:100px; left:300px; border:1px solid black; display:none;">
<div style="width:100%; height:30px;float:left; background-color:black;"><p style="color:white; margin-left:60px; margin-top:5px;">DELETE FORM</p></div><br><br>
<form method="post" action="/deleteform1">
<table style="width:100%; height:100%;">
<tr><td><input type="email" placeholder="YOUR EMAIL ID" name="ema" style="width:200px; height:25px; margin-left:40px; border:1px solid black;" required><br>
<tr><td><input type="text" value="<?php echo $non; ?>" name="non" style="width:200px; height:25px; margin-left:40px; border:1px solid black;  display:none;"  readonly="readonly">
<tr><td><span id="pswd1"></span>
<tr><td><input type="password" placeholder="PASSWORD" id="pswd" name="pswd" onkeyup="checkpswd();" style="width:200px; height:25px; margin-left:40px; border:1px solid black;" required><br>
<tr><td><span id="pswd2"></span>
<tr><td><input type="password" placeholder="CONFIRM PASSWORD" id="conpswd" name="conpswd" onkeyup="matchpswd();" style="width:200px; margin-left:40px; height:25px; border:1px solid black;" required><br><br>
<tr><td><input type="submit" value="SUBMIT"  style="width:100px; height:25px;  margin-left:80px; background-color:black; color:white;" >

</table>
</form>
</div>
<!--DELETE FORM-->

<!--UPLOAD FILE-->
<!--SOLVE UPLOAD PROPERLY-->
 <!--HAAh-->@extends("FINALPROJECT/UPLOADFILe1/upload1")
<div id="uploadfile" >
<div style="background-color:black; width:100%; height:40px; float:left;">
<img src="/images/images (17).jpg" onclick="hideuploadfile1();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-left:50px;  ">UPLOAD  IMAGES</p>
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
{{ Form::open(array('url' => 'makevideo1','files' => true)) }}
                       
<tr><td><input type="text" style="display:none;"  name="city" value="<?php echo $city; ?>"/>
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="display:none;" name="non" value="<?php echo $non; ?>"/>
<tr><td><input type="file" name="video1">
<tr><td><input type="submit"   value="UPLOAD VIDEO" id="opo"/>
{{ Form::close() }}


</table>
</div>

</div>
<!--UPLAOD VIDEO-->
<!--MAKE EVENT-->
@extends('FINALPROJECT/ngo/makeevnt');
<!--MAKE EVENT-->


<!--OTHER NGO-->
<div id="ongo" style="width:14%; height:400px; overflow:auto; position:absolute; right:2px; top:220px;  display:none; border:1px solid black;  ">
<div style="width:90%; height:30px; background-color:black; cursor:pointer;"><p style="color:white; font-size:27px; margin-left:5px;" onclick="showngo();">ALL NGO</p></div>
<!--GGG-->
@foreach($ggg as $ngodet)
<div style="width:90% auto; height:200px auto; background-color:#CCC; margin-top:15px; float:left; margin-left:3px; border:1px solid black; margin-bottom:5px;">
<label style="text-decoration:underline; font-style:italic; "><strong>NAME OF NGO:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$ngodet->non or $ngodet->non=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic; "><strong>ADDRESS:</strong></label><br>
<div style="width:100% auto; height:120px auto; float:left;"><p style="color:#900;">{{{$ngodet->address or $ngodet->address=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic; "><strong>CITY:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$ngodet->city or $ngodet->city=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic; "><strong>CONTACT NUMBER:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$ngodet->mobile or $ngodet->mobile=''}}}</p></div>
</div>
@endforeach
<!--GGG-->


</div>
<!--OTHER NGO-->





<!--MAIN-->
<div id="ngomain">





<!--MENU BAR-->
<div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="#" style="height:44px;line-height:44px;" ><span>Event</span></a>
	<ul>
		<li class="subfirst"><a href="#" onClick="showevent1();">MAKE EVENT</a></li>
		
	</ul></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;">Upload </a><ul>
		<li class="subfirst"><a href="#" onClick="showuploadvideo1();">VIDEO</a></li>
		<li><a href="#" onClick="showuploadfile1();">IMAGES</a></li>
		
	</ul>
    </li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" >UPDATE DETAILS</a></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" >VOLUNTEER</a><ul>
		<li class="subfirst"><a href="#" onClick="showparticular();">PARTICULAR VOLUNTEER ({{{$cnt }}})</a></li>
		<li><a href="#" onClick="showvolunteer();">OTHER VOLUNTEER</a></li>
		
	</ul></li>
	
	
	<li class="topmenu"><a href="#" onclick="showngo();" style="height:44px;line-height:44px;  ">Other NGO's</a></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" onclick="showinbox();">Inbox   ({{{$pvp or $pvp=''}}})</a></li>
	<li class="topmenu"><a href="#" onclick="deletengo();" style="height:44px;line-height:44px;">Delete ID</a></li>
	<li class="toplast"><a href="/logout"  style="height:44px;line-height:44px;">LOGOUT</a></li>
</ul><p class="_css3m"><a href="http://css3menu.com/">CSS input Radio Button Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->
</div>
<!--MENU BAR-->





<!--iMAGE-->
<div id="image2">
<img src="/images/donations.jpg" lowsrc="images/3E_What_we_do.jpg" id="image22">
</div>
<!--iMAGE-->




<!--HEAD DIV OF EVENT-->
<div style="width:100%; height:auto; float:left;">








<!--EVENT-->
<div  id="sa" style="width:50%; min-width:700px; height:400px; border:1px solid black;  overflow:auto; float:left; ">
<div style="width:98%; height:40px; float:left; border:1px solid black; background-color:black;  "><p style="color:white; font-size:36px; margin-left:50px;">EVENTS</p></div>
<!--HH-->
@foreach($kk as $evn)
<div style="width:90%; height:400px; margin-top:10px; margin-left:20px;  border:1px solid black; background-color:#CCC; float:left; margin-bottom:5px;">

<div style="width:40%; height:60%; float:left;">
<img src="/FINALPROJECTPERSONAL/<?php echo $evn->non;?>/PHOTOS/<?php echo $evn->fileimage1;?>" style="width:100%; height:100%; margin-left:10px; border:1px solid black; " alt="NO IMAGE...............!">
</div>

<!--JJ-->
<div style="width:50%; height:70%; float:left; margin-left:20px;">
<label style="text-decoration:underline; font-style:italic; "><strong>NAME OF NGO:</strong></label><br>
<div style="width:100%; height:30px auto;  margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->non or $evn->non=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic;"><strong>TOPIC OF EVENT:</strong></label><br>
<div style="width:100%; height:30px auto;  margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->topic or $evn->topic=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic;"><strong>ADDRESS OF EVENT:</strong></label><br>
<div style="width:100%; height:100px auto;  float:left;"><p style="color:#900;">{{{$evn->address or $evn->address=''}}}</p></div><br>
<label style="text-decoration:underline; font-style:italic;"><strong>DATE OF EVENT:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$evn->dateofevent or $evn->dateofevent=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic;"><strong>CONTACT NUMBER:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$evn->mobile or $evn->mobile=''}}}</p></div>

<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$evn->mobile2 or $evn->mobile2=''}}}</p></div>
</div>
<!--JJ-->


<label style="text-decoration:underline; font-style:italic;"><strong>DESCRIPTION:</strong></label><br>
<div style="width:100%; height:20px; float:left;"><p style="color:#900;">{{{$evn->descript or $evn->descript=''}}}</p></div>
</div>
<!--HH-->
@endforeach
</div>
<!--EVENT-->











<!--NGO-->

<div id="hjh" style="width:32%; min-width:200px; height:350px; float:left; border:1px solid black; overflow:auto; margin-left:20px; ">
<div style="width:90%; height:40px; float:left; background-color:black;  "><p style="color:white; font-size:36px; margin-left:30px;" >DONATOR LIST</p></div>
<!--MONEY-->
@foreach($oo as $mon)
<div style="width:90%; height:200px auto; float:left; margin-top:10px; background-color:#CCC; border:1px solid black; margin-left:10px; margin-bottom:5px;">
<table style="width:100%; height:100%;">
<form method="post" action="/donationacceptmoney">
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>" readonly/>
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="email"readonly value="<?php echo $mon->email;?>">
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="nam"readonly value="<?php echo $mon->name;?>">
<tr><td><input type="text" value="<?php echo $mon->address;?>" cols="20" rows="3"  style="border:1px; resize:none; color:#900;  weight:150px auto; display:none;" name="address" readonly><p style="color:#900;"><?php echo $mon->address;?></p>
<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>DONATION MONEY:</strong></label>
<tr><td>Rs&nbsp;<input type="text" style="border:0px; color:#900;  background-color:#CCC;" name="money1" readonly value="<?php echo $mon->money1;?>" >
<tr><td ><input type="text"readonly style="border:0px; color:#900; background-color:#CCC;" name="city" value="<?php echo $mon->city;?>"><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="mobile" readonly value="<?php echo $mon->mobile;?>"> 
<tr><td colspan="2"><input type="submit" value="SUBMIT" style="background-color:black; color:white;" >
</form>
</table>
</div>
@endforeach
<!--MONEY-->


<!--ARTICle-->
@foreach($rr as $mon)
<div style="width:90%; height:200px auto; float:left; margin-top:10px; background-color:#CCC; border:1px solid black; margin-left:10px; margin-bottom:5px; ">
<table style="width:100%; height:100%;">
<form method="post" action="/donationacceptarticle">
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="email"  value="<?php echo $mon->email;?>">
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="nam" value="<?php echo $mon->name;?>">
<tr><td colspan="2"><input type="text" value="<?php echo $mon->address;?>"  style="border:0px; resize:none; color:#900; background-color:#CCC; height:auto; weight:150px; display:none;" name="address"><p style="color:#900;"><?php echo $mon->address;?></p>

<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>DONATION ARTICLE:</strong></label><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="articlename" value="<?php echo $mon->articlename;?>" >
<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>QUANTITY:</strong></label><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="quantity" value="<?php echo $mon->quantity;?>" >
<tr><td ><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="city" value="<?php echo $mon->city;?>"><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="mobile" value="<?php echo $mon->mobile;?>"> 
<tr><td colspan="2"><input type="submit" value="SUBMIT" style="background-color:black; color:white;" >
</form>
</table>
</div>
@endforeach
<!--ARTICLE-->
</div>
<!--NGO-->




</div>
<!--HEAD DIV OF EVENT-->

</div>
<!--MAIN-->
</body>
</html>


