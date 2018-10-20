4<!DOCTYPE html >
<html >
<head>
<link rel="icon" href="images/1440205592_injection_blood.ico" type="image/x-icon">
<title>BLOOD DONATION</title>
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
	
}
#back{width:100px; height:40px; background-color:#900; color:white; position:absolute; left:0px; top:100px; cursor:pointer;}
#enter{width:30%; height:60px; margin-left:auto; float:left; margin-left:80%; margin-top:3px;}
#login1{width:150px; height:60px; color:white; font-weight:bold; background-color:#900;   cursor:pointer;}
#login1:hover{width:150px; height:60px; color:#900; font-weight:bold; background-color:#666; cursor:pointer;}
#main{width:70%; height:100%; margin:auto;  background-color:red; }
#pic{width:100%; height:300px; float:left; }
#pic12{width:100%; height:100%; }
#form{width:100%; height:450px; float:left; }
#form1{width:60%; height:420px; background-color:#999; box-shadow:0px 0px 1px 1px #000; float:left; margin-left:2%; margin-top:1%; }
#form2{width:33%; height:420px; background-color:#999; box-shadow:0px 0px 1px 1px #000; float:left; margin-left:2%; margin-top:1%;}
.input1{width:100%; height:20px; margin-left:30%; border:1px solid #000;}
.input2{border:1px solid #000;}
.input3{width:100%; height:20px; margin-left:25%; border:1px solid #000;}
#fillit1{width:40%; height:100%; float:left;}
#fillit2{width:70%; height:70%; float:left;}
#enter1{width:20%; height:100%; float:left;}
#sign1{color:white; font-size:200%; margin-top:60%; margin-left:4%;}
#submit11{float:left; height:100%; width:21%;  margin-left:15%;}
#button45{margin-top:250px; width:100%; height:45px; color:white; background-color:#000;}
#button45:hover{margin-top:250px; width:100%; height:45px; color:white; background-color:#333;}
#sign2{color:white; font-size:150%; margin-left:7%; margin-top:2%;}
#enter2{margin-left:5%; margin-top:2%;}
#submit22{height:45px; width:50%; float:left; margin-left:40%;}
#button55{margin-top:15px; width:100%; height:45px; color:white; background-color:#000;}
#button55:hover{width:100%; height:45px; color:white; background-color:#333; margin-top:15px;}
</style>
</head>

<body>
<!--BACK-->
<a href="index.php"><input type="button" value="BACK" id="back"></a>
<!--BACK-->

<!--MAIN-->
<div id="main">
<!--LOGIN-->
<div id="enter">
<input type="button" value="LOGIN DOCTOR" id="login1">
</div>
<!--LOGIN-->

<!--pic-->
<div id="pic">
<img src="images/65b899cc-0991-4f76-bfee-3c9726e886d7.jpg" id="pic12">
</div>
<!--pic-->

<!--FORM-->
<div id="form">


<!--FORM1-->
<div id="form1">
<!--TEXT 1-->
<div id="enter1"><p id="sign1">DOCTOR SIGNUP FORM</p>
</div>
<!--TEXT 1-->
<!--ENTER VALUES 1-->
<div id="fillit1">
<form autocomplete="off">
<div>
<span id="name1" class="span1"></span><br>
<input type="text" placeholder="NAME" class="input1" name="nameid" required/>

</div>

<div>
<span id="email1" class="span1"></span><br>
<input type="email" placeholder="EMAIL ID" class="input1" name="emailid" required/>

</div>

<div>
<span id="pswd1" class="span1"></span><br>
<input type="password" placeholder="PASSWORD" class="input1" name="pswd" required/>

</div>


<div>
<span id="pswd1" class="span1"></span><br>
<input type="password" placeholder="NEW PASSWORD" class="input1" name="pswd" onKeyUp="newpswd();" required/>

</div>

<div>
<span id="pswd2" class="span1"></span><br>
<input type="password" placeholder="CONFIRM PASSWORD" class="input1" name="conpswd" onKeyUp="conpswd();" required/>

</div>

<div>
<span id="hospital1" class="span1"></span><br>
<input type="text" placeholder="HOSPITAL/CLINIC" class="input1" name="hospital"  required/>

</div>

<div>
<span id="address" class="span1"></span><br>
<textarea placeholder="ADDRESS" class="input2" style="margin-left:30%;" name="address" cols="35" rows="3" style="resize:none;"  required/></textarea>

</div>

<div>
<span id="mobile1" class="span1"></span><br>
<input type="text" placeholder="MOBILE NUMBER" class="input1" pattern="[7-9]{1}[0-9]{9}" name="mobile"  required/>

</div>

<div>
<span id="occupation1" class="span1"></span><br>
<input type="text" placeholder="OCCUPATION" class="input1"  name="occupation" required/>

</div>




</form>
</div>
<!--ENTER VALUES 1-->
<!--SUBMIT 1-->
<div id="submit11">
<input type="submit" value="SUBMIT" id="button45" onClick=""   >
</div>
<!--SUBMIT 1-->
</div>
<!--FORM1-->

<!--FORM2-->
<div id="form2">
<!--TEXT2-->
<div id="enter3"><p id="sign2">
DONATORS SIGNUP FORM</p>
</div>
<!--TEXT2-->
<div id="fillit2">
<form autocomplete="off">
<div>
<span id="name2" class="span1"></span><br>
<input type="text" placeholder="NAME" class="input3" name="nameid2" required/>

</div>

<div>
<span id="email2" class="span1"></span><br>
<input type="email" placeholder="EMAIL ID" class="input3" name="emailid2" required/>

</div>

<div>
<span id="address2" class="span1"></span><br>
<textarea placeholder="ADDRESS" class="input4" style="margin-left:25%; border:1px solid black;" name="address" cols="33" rows="3" style="resize:none;"  required/></textarea>

</div>
<div>
<span id="city2" class="span1"></span><br>
<input type="text" placeholder="CITY" class="input3"  name="city"  required/>

</div>

<div>
<span id="mobile2" class="span1"></span><br>
<input type="text" placeholder="MOBILE NUMBER" class="input3" pattern="[7-9]{1}[0-9]{9}" name="mobile2"  required/>

</div>

<div>
<br>
<label style="color:white; margin-left:25%;">BLOOD GROUP</label>
<br>
<select id="select1" name="select1" style="width:100%; margin-left:25%; border:1px solid black; height:20px;">
  <option value=" " >--SELECT--
 <option value="O+">MONEY
  <option value="O-">FOOD
   <option value="AB+">BOOKS
  <option value="AB-">MEDICAL
  <option value="A-">SEMINARS
  <option value="A+">MOTIVATION
  <option value="B+">CLOTHES
  <option value="B-">OTHERS
  
</option>
</select>
</div>
<!--SUBMIT 2-->
<div id="submit22">
<input type="submit" value="SUBMIT" id="button55" onClick=""   >
</div>
<!--SUBMIT 2-->
</div>
<!--FORM2-->

</div>
<!--FORM-->


</div>
<!--MAIN-->


</body>
</html>