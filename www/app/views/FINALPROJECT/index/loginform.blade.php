<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#kk{width:200px; height:20px; margin-left:50px; border:1px solid black;}
#kk1{width:100px; height:20px; margin-left:90px; background-color:black;color:white;}
#showlogin{width:300px; height:240px; position:absolute; left:500px; top:30px; background-color:#666; border:1px solid black; box-shadow:0px 0px 4px 3px; display:none; z-index:10000; top:30px;}
#showlogin2{width:40px; height:40px; margin-left:10px; margin-top:10px;}
#neus{margin-left:90px; color:white; margin-top:10px; font-style:italic;}
#fops{margin-left:90px; color:white; margin-top:10px;}
</style>

<script type="text/javascript">
function hidelogin1()
{
	$("#showlogin").hide(1000);
}
function showlogin1()
{
	$("#showlogin").show(1000);
}

</script>
</head>

<body>
<div  id="showlogin">
<div id="showlogin2">
<img src="images/images (17).jpg" onclick="hidelogin1();" style="width:30px; height:30px;" />
</div>

<div>
<form enctype="multipart/form-data" action="ngo" method="post" id="frmm2">
<div>
<span id="email1"></span><br />
<input type="email" id="kk" name="email1" placeholder="EMAIL" required="required"/>

</div>
<div>
<span id="pswd1"></span><br />
<input type="password" id="kk" name="pswd" placeholder="PASSWORD" required="required"/>
</div>

<div>
<span id="pswd1"></span><br />
<input type="submit" id="kk1"  value="SUBMIT" onclick="login1();" required="required"/>
</div>
</form>

</div>
<a href="/newuser" style="text-decoration:none;"><p id="neus">New User?</p></a>
<a href="/loginagainpage" style="text-decoration:none;"><p id="fops">FORGOT PASSWORD</p></a>
</div>
</body>
</html>
