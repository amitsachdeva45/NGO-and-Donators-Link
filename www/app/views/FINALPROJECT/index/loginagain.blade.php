<!DOCTYPE html>
<head>

<title>LOGIN</title>
<script src="jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
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
</script>

<style type="text/css">
*
{
	padding:0px;border:0px; margin:0px; outline:0px;
}
body,html
{
	width:100%; min-height:100%;background-color:#666;
}
#main
{
	width:50%;
	height:100%;
	margin:auto;
	
	
	
}
#co,#pswd,#conpswd
{
	width:300px; height:30px; border:1px solid black; margin-left:100px;
	margin-top:20px;  
}
#pok
{
	width:500px; height:300px; border:1px solid black; box-shadow:0px 0px 2px 2px black; background-color:#666; margin-left:20%; margin-top:100px; border:2px double black; 
}
#co1{ width:200px; height:34px; border-radius:4px; background-color:#900; margin-left:150px; border:1px solid black; color:white;}
#co2{ width:100px; height:34px; background-color:#900; position:absolute; left:0px;top:100px; border:1px solid black; color:white;}
#fp{width:100%; height:100%; color:#900;
 font-size:72px; margin-left:100px;}
</style>
</head>

<body>
<a href="/"><input type="button" id="co2" value="HOME"></a>
<!--MAIN-->
<div id="main">
<div style="width:100%; height:100px;"><p id="fp">FORGOT PASSWORD</p></div>
 <!--POK-->

<div id="pok" style="display:<?php echo $fq; ?>" >
<table style="width:100%; height:100%;">
<form action="loginagain1" method="post">
<tr><td><p style="color:white;">{{{$fe or $fe=''}}}</p>
<tr><td><input type="email" name="ema" id="co" placeholder="EMAIL ID" required>

<tr><td><input type="text" name="non" id="co"  placeholder="NAME OF NGO" required>
<tr><td><input type="text" name="mobile" id="co" pattern="[7-9]{1}[0-9]{9}" placeholder="MOBILE NUMBER" required>
<tr><td><input type="submit" id="co1" value="SUBMIT">

</form>
</table>
</div>
<!--POK-->
<!--POK2-->

<div id="pok" style="display:<?php echo $fr; ?>" >
<table style="width:100%; height:100%;">
<form action="loginagain2" method="post">

<tr><td><input type="email" name="ema" id="co" style="display:none;" value="<?php echo $ema; ?>" placeholder="EMAIL ID" required>
<span id="pswd1"></span>
<tr><td><input type="password" id="pswd" name="pswd"  onKeyUp="checkpswd();" placeholder="NEW PASSWORD" required>
<span id="pswd2"></span>
<tr><td><input type="password" id="conpswd" name="conpswd"  onKeyUp="matchpswd();"  placeholder="RE ENTER PASSWORD" required>
<tr><td><input type="submit" id="co1" value="SUBMIT">

</form>
</table>
</div>
<!--POK2-->
</div>
<!--MAIN-->
</body>
</html>
