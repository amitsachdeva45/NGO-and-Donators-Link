<!DOCTYPE html >
<html >
<head>
<title>REGISTRATION</title>
<link rel="icon" href="../images/donate.ico" type="image/x-icon">
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
function showmemberdetails()
{
	var c1=checkfulldetails();
	if(c1==true)
	{
	$("#formsign2").show();
	$("#formsign1").hide();
	$("#head1").css("background-color","#930");
	}
}
function showoldevents()
{
	$("#formsign3").show();
	$("#formsign2").hide();
	$("#head1").css("background-color","#930");
	$("#head2").css("background-color","#930");
	
}
function finally1()
{
	alert("THANL");
}
function checkfulldetails()
{
	 var c="";
	if($("#non").val()==c)
	{
		 alert("ENTER NAME OF NGO");
		 
		 return false;
	}
	else if($("#ema").val()==c)
	{
		 alert("ENTER EMAIL ADDRESS");
		 return false;
	}
	else if($("#pswd").val()==c)
	{
		 alert("ENTER PASSWORD");
		 return false;
	}
	else if($("#conpswd").val()==c)
	{
		 alert("PLEASE ENTER TO CONFIRM PASSWORD");
		 return false;
	}
	else if($("#address").val()==c)
	{
		 alert("PLEASE ENTER TO ADDRESS");
		 return false;
	}
	else if($("#city").val()==c)
	{
		 alert("PLEASE ENTER TO CITY");
		 return false;
	}
	else if($("#mobile").val()==c)
	{
		 alert("PLEASE ENTER TO MOBILE");
		 return false;
	}
	else if($("#state").val()==c)
	{
		 alert("PLEASE ENTER TO STATE");
		 return false;
	}
	else if($("#pin").val()==c)
	{
		 alert("PLEASE ENTER TO PIN");
		 return false;
	}
	return true;
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
</script>
<style type="text/css">
*{margin:0px; border:0px; outline:0px; }
html,body{width:100%; min-height:100%; background-color:#666;}
#main1{margin:auto; width:80%; height:100%;margin-top:-20px;}
#pic{width:100%; height:100px; float:left; border:1px solid black; background-color:#900;}
#header{width:70%; height:30px; float:left; margin-left:15%; margin-top:2px;}
#head1,#head2,#head3{width:32%; height:100%; margin-left:3px; border:1px solid black; background-color:black; float:left;}
#st1,#st2,#st3{text-align:center; color:white; font-size:20px;}
#formsign1{width:100%; height:100%; box-shadow:0px 0px 4px 4px black; }
#formsign2{width:100%; height:100%; box-shadow:0px 0px 4px 4px black; display:none; }
#formsign3{width:100%; height:100%; box-shadow:0px 0px 4px 4px black; display:none; }
#aa1,#non,#ema{width:300px; height:30px; border:2px solid black; margin-left:56%; margin-top:20px; }
#city,#pin,#state,#pswd,#conpswd,#mobile,#mobile1,#member1,#member2,#mobile2,#member3,#mobile3,#poe1,#poe2,#date1,#date2,#date3,#poe3{width:300px; height:30px; border:2px solid black; margin-left:10%;  margin-top:20px;}
</style>
</head>

<body>
<a href="../index.php"><input type="button" value="HOME" style="position:absolute; top:100px; left:0px; width:100px; height:40px; background-color:black; color:white;"></a>
<!--MAIn-->
<div id="main1">
<!--IMG-->
<div id="pic">
<p style="color:white; margin-top:12px;  font-size:72px; margin-left:26%; ">REGISTRATION</p> 
</div>
<!--IMG-->
<!--HEAD-->
<div id="header">
<div id="head1">
<p id="st1">FULL DETAILS</p>
</div>
<div id="head2">
<p id="st2">MEMBERS DETAILS</p>
</div>
<div id="head3">
<p id="st3">OLD EVENTS</p>
</div>
</div>
<!--HEAD-->
<!--FORM-->
<div style="width:70%; height:500px auto; float:left; margin-left:15%; border:1px solid black; margin-top:30px;">
<form  action="/ngo"  method='post' id="formsign" >
<!--FORMSIGN1-->
<div id="formsign1"   >
<table style="width:100%; height:100%;">
<tr><td ><input type="text" placeholder="NAME OF NGO" name="non" id="non" required/>
<tr><td ><input type="email" placeholder="EMAIL" name="ema" id="ema" required/>
<tr><td><span id="pswd1"></span><td><span id="pswd2"></span><br>
<tr><td><input type="password" placeholder="PASSWORD" onkeyUp="checkpswd();" class="input1" id="pswd" name="pswd" required/><td><input type="password" placeholder="CONFIRM PASSWORD" onkeyUp="matchpswd();" class="input1" id="conpswd" name="conpswd"  required/>

<tr><td><textarea placeholder="ADDRESS" class="input2" style="margin-left:56%; margin-top:20px; border:2px solid black; resize:vertical;" name="address" id="address" cols="40" rows="7"  required/></textarea>

<tr><td><input type="text" placeholder="CITY" name="city" id="city" required/><td><input type="text" placeholder="PIN" name="pin" id="pin" required/>
<tr><td><input type="text" placeholder="STATE" name="state" id="state" required/><td><input type="text" placeholder="MOBILE NUMBER" class="input1" pattern="[7-9]{1}[0-9]{9}" name="mobile"  id="mobile" required/>


<tr><td><input type="button" value="NEXT   >>" onClick="showmemberdetails();" style="width:100px; height:40px; margin-left:10px; color:white; background-color:black; float:right;">

</table>

</div>



<!--FORMSIGN1-->
<!--FORMSIGN2-->

<div id="formsign2" >
<table style="width:100%; height:100%;">

<tr><td ><input type="text" placeholder="REGISTRATION NUMBER" name="renu" id="aa1" />
<tr><td ><input type="text" placeholder="NAME OF SECRETARY" name="secret" id="aa1" />
<tr><td><label style="margin-left:50%; margin-top:10px; color:white;">DATE OF ESTABLISHMENT</label>
<tr><td ><input type="date"  name="date" id="aa1" />
<tr><td><input type="text" placeholder="FIRST MEMBER "   id="member1" name="member1" /><td><input type="text" placeholder="CONTACT NUMBER"   id="mobile1" name="mobile1" />
<tr><td><input type="text" placeholder="SECOND MEMBER "   id="member2" name="member2" /><td><input type="text" placeholder="CONTACT NUMBER"   id="mobile2" name="mobile2" />
<tr><td><input type="text" placeholder="THIRD MEMBER "   id="member3" name="member3" /><td><input type="text" placeholder="CONTACT NUMBER"   id="mobile3" name="mobile3" />
<tr><td><textarea placeholder="OBJECTIVE OF YOUR NGO"  style="margin-left:56%; margin-top:20px; border:2px solid black; resize:vertical;" name="obj" cols="40" rows="7"  /></textarea>




<tr><td><input type="button" value="NEXT  >>" onClick="showoldevents();" style="width:100px; margin-left:10px; height:40px; color:white; background-color:black; float:right;">

</table>
</div>


<!--FOrM SiGN2-->
<!--FORM SIGN3-->
<div id="formsign3" >
<table style="width:100%; height:100%;">

<tr><td><label style="margin-left:49%; margin-top:10px; color:white;"> EVENT 1</label>
<tr><td><input type="date"   id="date1" name="date1" /><td><input type="text" placeholder="PLACE OF EVENT"   id="poe1" name="poe1" />
<tr><td><textarea placeholder="MAIN OBJECTIVE OF EVENT"  style="margin-left:55%; margin-top:20px; border:2px solid black; resize:vertical;" name="obj1" cols="50" rows="7" /></textarea>
<tr><td><label style="margin-left:49%; margin-top:10px; color:white;"> EVENT 2</label>
<tr><td><input type="date"   id="date2" name="date2" /><td><input type="text" placeholder="PLACE OF EVENT"   id="poe2" name="poe2" />
<tr><td><textarea placeholder="MAIN OBJECTIVE OF EVENT"  style="margin-left:55%; margin-top:20px; border:2px solid black; resize:vertical;" name="obj2" cols="50" rows="7"  /></textarea>
<tr><td><label style="margin-left:49%; margin-top:10px; color:white;"> EVENT 3</label>
<tr><td><input type="date"   id="date3" name="date3" /><td><input type="text" placeholder="PLACE OF EVENT"   id="poe3" name="poe3" />
<tr><td><textarea placeholder="MAIN OBJECTIVE OF EVENT"  style="margin-left:55%; margin-top:20px; border:2px solid black; resize:vertical;" name="obj3" cols="50" rows="7"  /></textarea>

<tr><td><input type='submit' value="SUBMIT"  style="width:100px; height:40px; color:white; background-color:black; float:right;"></form>




</table>




</div>
<!--FORM SIGN3-->

</div>
<!--FORM-->
</div>
<!--MAIN-->

</body>
</html>
