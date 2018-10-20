<!DOCTYPE html >
<html>
<head>

<title>VOLUNTEER</title>
<style type="text/css">
*
{
	margin:0px; border:0px; outline:0px;
}
body,html
{
	width:100%;
	min-height:100%;
	background-color:#666;
}
#main{
	width:80%;
	height:100%;
	margin:auto;
}
#mainhead{width:100%; height:100px; float:left; background-color:#900;}
#formvolunteer{width:80%; height:auto;margin-top:30px; border:1px solid black ; box-shadow:0px 0px 4px 4px #000000; float:left; margin-left:10%; }
#occ,#nog,#state,#city,#mobile,#date1,#ema,#sn,#fn,#qual{width:80%; margin-top:20px; height:30px; border:1px solid black;  margin-left:40%; }
#male,#female{width:300px; margin-top:20px;  border:1px solid black;}
</style>
</head>

<body>
<a href="../index.php"><input type="button" value="HOME" style=" position:absolute; top:100px; left:0px;width:100px; height:40px; color:white; background-color:black;"></a>
<div id="main">
<!--MAIN HEAD-->
<div id="mainhead">
<p style="width:70%; height:100%; color:white; margin-left:30%; font-size:400%;" >VOLUNTEER</p>
</div>
<!--MAIN HEAD-->
<!--FORM-->
<div id="formvolunteer">
<table>
<form id="form1" action="" enctype="multipart/form-data" method="get">
<tr><td><input type="text" placeholder="FIRST NAME" id="fn" name="fn" required/><td><input type="text" placeholder="LAST NAME" id="sn" name="sn">
<tr><td><input type="email" placeholder="EMAIL" id="ema" name="ema"><td><input type="text" placeholder="QUALIFICATION" id="qual" name="qual" required>
<tr><td><input type="radio" value="male" id="male" name="sex">MALE<td><input type="radio" value="female" id="female" name="sex">FEMALE
<tr><td><label>DATE OF BIRTH</label>
<tr><td><input type="date" id="date1" name="date1" required><td><input type="text" pattern="[7-9]{1}[0-9]{9}" placeholder="CONTACT NO." id="mobile" name="mobile" required> 
<tr><td colspan="2"><textarea placeholder="ADDRESS" name="address" style=" margin-top:20px; margin-left:45%; border:1px solid black; resize:vertical;" cols="50" rows="7" required></textarea>
<tr><td><input type="text" placeholder="CITY" name="city" id="city" required ><td><input type="state" placeholder="STATE" id="state" name="state" required>

<tr><td><input type="text" placeholder="OCCUPATION" id="occ" name="occ"><td><input type="text" id="nog" name="nog" placeholder="NAME OF NGO">
<tr><td colspan="2"><input type="submit" value="SUBMIT" style="width:150px; height:40px; border:1px solid black; background-color:#000; color:white; margin-top:20px; margin-left:55%;" onClick="">  
</form>
</table>

</div>
<!--FORM-->
</div>
</body>
</html>
