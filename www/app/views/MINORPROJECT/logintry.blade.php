
<html>
<head>
<style type="text/css">

#jj1
{
	background:-webkit-radial-gradient(#CCC,#999,#666);
	width:400px;
	height:300px;
	border:3px inset #333;
}
#jj2
{
	width:394px;
	height:15%;
	background-color:#036;

	border:3px outset #036;
}
#jj3
{
	background-image:url("images/download%20(18).jpg");
	width:25px;
	height:25px;
	border:1px white inset;
	border-radius:14px;
	margin-left:90%;
	margin-right:30%;
	margin-top:-10%; 
}
#jj4
{
	margin-left:50px;
	margin-top:10px;
	
	width:300px;
}
.jj5
{
	width:200px;
	height:35px;
	border:8px inset grey; 
}
</style>
<script src="jquery-1.8.2.min.js"></script>
<script type="text/javascript">
function login()
{
	var qs=$("#frm").serialize();
	var url="loginsave.php?"+qs;
	$.get(url,function(data,status)
	{
		});

}
	
	
</script>
</head>
<body style="background:-webkit-linear-gradient(#00F,#FFF,#00F)">

<div id="jj1">
<div id="jj2">
<font style="color:white; font-size:40px; margin-left:15%;">LOGIN FORM</font>
<a href="index.php"><div id="jj3"></div></a>
</div>


<form id="frm" enctype="multipart/form-data"  action="loginsave" method="get">
<table id="jj4" cellspacing="30px">

<tr><td ><input type="email"  class="jj5" placeholder="EMAIL"  required name="email" id="email"/>
<tr><td ><input type="password" placeholder="PASSWORD" class="jj5" required name="pswd" id="pswd"/>

<tr><td><input type="submit"  style="background-color:#006; color:white;"value="LOGIN" onClick="login();"><input type="submit" style="background-color:#006; color:white;"value="FORGOT PASSWORD" onClick="password();"><a href="forgot.php"></a>
<tr><td>
</table>
</form>     
     

</div>
<div style="margin-left:40%; margin-top:-10%;"><font style="color:RED; font-size:50px;">PLEASE LOGIN AGAIN. <br>PASSWORD OR EMAIL ID IS WRONG</font></div>
<div  style="margin-left:2%; margin-top:10%;"><div><font style="color:RED; font-size:30px;">GO BACK TO HOME PAGE</font></div><div><a href="index.php"><input type="submit" value="<-BACK"/></a></div></div>

</body>
</html>