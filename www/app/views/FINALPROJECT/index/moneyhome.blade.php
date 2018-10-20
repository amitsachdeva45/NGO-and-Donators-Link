<!DOCTYPE html>
<html >
<head>

<title>DONATE MONEY</title>
<link rel="icon" href="../images/donate.ico" type="image/x-icon">
<script src="../jquery-1.8.2.min.js"></script>
<script type="text/javascript">

</script>
<style type="text/css">
* {
	margin: 0px;
	outline: 0px;
	/* [disabled]padding:0px; */
	border: 0px;  
}
body, html
{
    width:100%;background-color:#666;
    min-height: 100%;
	
}
#main{width:85%; height:100%; margin:auto; margin-top:-20px; }
#article{width:100%; height:300px; float:left;}
#article1{width:100%; height:300px; float:left; border:1px solid black;}
#home{width:100px; height:50px; background-color:black; color:white; position:absolute; left:0px; top:100px; border:1px solid white;}
#home:hover{width:100px; height:50px; background-color:#333; color:white; position:absolute; left:0px; top:100px; border:1px solid white;}
#ff{width:100%; height:550px; float:left;}
#a1
{
 width:200px; min-width: 100px; height:20px; margin-left:40px;	 border:1px solid black;
}
#a2
{
margin-left:40px;	border:1px solid black;
}
#a3
{
 width:200px;  min-width: 100px; height:40px; margin-left:40px; background-color:#666; color:white;	
}
#tble1
{
	width:100%; height:100%;
}
#ff111{width:55%; height:100%; float:left;}
#ff222{color:#900; font-size:40px; border-bottom:1px solid #900; margin-top:10px; }
#ff223{color:#900; font-size:20px; margin-top:10px;}
#money1{width:300px; min-width:210px; height:550px; background-color:#930; border:1px solid black; float:left; margin-left:10%; z-index:10000;}
</style>

</head>

<body>
<div>
<a href="/"><input type="button" value="HOME" id="home" ></a>
</div>
<div id="main">
<div id="article">
<img src="../images/1200x400.jpg" id="article1"/>
</div>
<!--FORM-->
<div id="ff">
<div id="ff111">
<p id="ff222">
Giving to charity may improve your sense of well-being</p>
<p id="ff223">


The act of helping others can create an improved sense of well-being. Knowing that you sacrificed something such as time, finances or property in order to help others in need can give you a sense of purpose in life or work and inner satisfaction.</p>
<p id="ff222">

Supporting a cause can help keep you informed about issues of social injustice</p>
<p id="ff223">
When considering donating to a charity, many people tend to research the issues connected to that organization. As a result, you become more educated about social injustices around the world. You may discover new points of view and opinions on topics about which you were previously uniformed. This knowledge may position you to help increase the awareness of social problems among those in your sphere of influence from a balanced and educated standpoint.
</p>
</div>
<div id="money1">
<div style="width:100%; height:90%; float:left;">
<table id="tble1">
<form action="/moneyhom" method="post" enctype="multipart/form-data" id="articlefrm">
<tr><td><input type="email" placeholder="EMAIL" name="n1" id="a1" />
<tr><td><input type="text" placeholder="NAME" name="n2" id="a1" required />
<tr><td><textarea placeholder="ADDRESS" id="a2" rows="5" cols="25" name="n3" required /></textarea>
<tr><td><input type="text" placeholder="CITY" id="a1"  name="n4" required/>
<tr><td><input type="text" placeholder="MOBILE"  id="a1" name="n5"  required/>


<tr><td><input type="text" placeholder="MONEY" id="a1" name="n6"  required/>
<tr><td><input type="submit"  id="a3" />
</form>
</table>
</div>
</div>

</div>
<!--FORM-->
</div>
</body>
</html>
