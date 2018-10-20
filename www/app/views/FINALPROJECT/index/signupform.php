<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REGISTRATION</title>
<link rel="icon" href="../images/donate.ico" type="image/x-icon">
<script src="../jquery-1.8.2.min.js"></script>
<script type="text/javascript" >
function showsignup1()
{
	$("#form1").show(2000);
}
function hidesignup1()
{
	$("#form1").hide(2000);
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
function validateContact()
{var valid = true;
	if(!$("#captcha").val()) {
		$("#captcha-info").html("(required)");
		$("#captcha").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
	}
function action1()
{   var valid;	
	valid = validateContact();
	if(valid)
	{
	var qs=$("frmm1").serialize();
	var url="signup.php?"+qs;
	if(url,function(data,status)
	{
	}
	);
	}
	else
	{
		
	}
}
function refreshCaptcha() {
	$("#captcha_code").attr('src','index/captcha_code.php');
}
</script>
<style type="text/css">
#form1{width:450px;  height:650px auto; background-color:#999; box-shadow:0px 0px 1px 1px #000; float:left; margin-left:2%; margin-top:1%; position:absolute; z-index:10000; left:500px; top:10px; border:1px solid black; display:none; }
#fillit1{width:40%; height:100%;}
.input1{width:300px; height:20px; margin-left:30%; border:1px solid #000;}
.input2{border:1px solid #000;}
.input3{width:300px; height:20px; margin-left:25%; border:1px solid #000;}
#submit11{ height:100px; width:21%;  margin-left:150px; margin-top:50px; float:left;}
#button45{ width:100px; height:45px; color:white; background-color:#000;}
#button45:hover{ width:100px; height:45px; color:white; background-color:#333;}
#enter1{width:20%; height:100%; float:left;}
#sign1{color:white; font-size:200%; margin-top:60%; margin-left:4%;}
.demoInputBox{width:200px; height:20px; border:#F0F0F0 1px solid; float:left; margin-left:30%;border:1px solid black; }
</style>
</head>

<body>
<div id="form1">
<div style="width:30px; height:30px;">
<img src="images/images (17).jpg" onclick="hidesignup1();" style="width:30px; margin-left:10px; margin-top:5px; height:30px;  "/>
</div>
<div id="fillit1">
<form autocomplete="off" enctype="multipart/form-data" method="get" action="signup.php" id="frmm1">
<div>
<span id="name1" class="span1"></span><br>
<input type="text" placeholder="NAME OF NGO" class="input1" name="nameid" required/>
</div>

<div>
<span id="email1" class="span1"></span><br>
<input type="email" placeholder="EMAIL ID" class="input1" name="emailid" required/>
</div>

<div>
&nbsp; &nbsp; &nbsp;<span id="pswd1" class="span1"></span><br>
<input type="password" placeholder="PASSWORD" onkeyUp="checkpswd();" class="input1" id="pswd" name="pswd" required/>
</div>

<div>
&nbsp; &nbsp; &nbsp;<span id="pswd2" class="span1" ></span><br>
<input type="password" placeholder="CONFIRM PASSWORD" onkeyUp="matchpswd();" class="input1" id="conpswd" name="conpswd" onKeyUp="conpswd();" required/>
</div>

<div>
<span id="hospital1" class="span1"></span><br>
<select id="don"   class="input1"  name="cateogry" >
  <option value=" " readonly="readonly" >--SELECT THE CATEOGRY--
 <option value="CHILD">CHILD
  <option value="WOMEN">WOMEN
   <option value="OLD">OLD
   <option value="OTHER">OTHER
  
  
</option>
</select>
</div>

<div>
<span id="address" class="span1"></span><br>
<textarea placeholder="ADDRESS" class="input2" style="margin-left:30%;" name="address" cols="40" rows="4" style="resize:vertical;"  required/></textarea>

</div>

<div>
<span id="mobile1" class="span1"></span><br>
<input type="text" placeholder="MOBILE NUMBER" class="input1" pattern="[7-9]{1}[0-9]{9}" name="mobile"  required/>

</div>
<div>
<span id="mobile2" class="span1"></span><br>
<input type="text" placeholder="ALTERNATE NUMBER" class="input1"  name="mobile2"  />

</div>

<div>
<span id="occupation1" class="span1"></span><br>
<textarea placeholder="WHAT IS YOUR AIM" class="input2" style="margin-left:30%; resize:vertical;"  name="occupation" cols="40" rows="7"  /></textarea>

</div>

<div style="float:left; height:50px; width:100%;">
<label style="margin-left:100px;">Captcha</label> 
<div  >
<span id="captcha-info" class="info"></span><br/>
<input type="text" name="captcha" id="captcha" placeholder="CAPTCHA" class="demoInputBox" required="required"/>

<img id="captcha_code" src="index/captcha_code.php" style=" margin-left:260px; margin-top:-25px;" /><button name="submit" class="btnRefresh" onClick="refreshCaptcha();" style=" margin-left:260px; width:150px; height:20px; color:white; background-color:black; ">Refresh Captcha</button>
</div>
</div>

<div id="submit11">
<input type="submit" value="SUBMIT" id="button45" onClick="action1();"    >
</div>

</form>
</div>
<!--ENTER VALUES 1-->
<!--SUBMIT 1-->

<!--SUBMIT 1-->

</div>
<!--FORM1-->

</body>
</html>
