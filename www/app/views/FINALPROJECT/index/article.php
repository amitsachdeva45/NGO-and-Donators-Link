<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#a1
{
 width:200px; height:20px; margin-left:40px;	 border:1px solid black;
}
#a2
{
margin-left:40px;	border:1px solid black;
}
#a3
{
 width:200px; height:40px; margin-left:40px; background-color:black; color:white;	
}
#tble1
{
	width:100%; height:100%;
}
</style>
<script type="text/javascript" src="../jquery-1.8.2.min.js"></script>
<script>
function showarticle()
{
	$("#article1").show(2000);
	$("#money1").hide(2000);
}
function showmoney()
{$("#money1").show(2000);$("#article1").hide(2000);
}
function hidemoney()
{$("#money1").hide(2000);
}
function hidearticle()
{$("#article1").hide(2000);
}
function showngo(vv)
{
	var c="dtn";
	var d="adv";
	if(c==vv)
	$("#hide1").show();
	if(d==vv)
	$("#hide1").hide();
}
</script>
</head>

<body>
<div style="width:300px; height:550px; background-color:#666; border:1px solid black; position:absolute; left:550px; top:100px; display:none; z-index:10000;" id="article1">
<div style="width:100%; height:10%; float:left;">
<img src="images/images (17).jpg" onclick="hidearticle();" style="width:30px; height:30px;" />
</div>
<div style="width:100%; height:90%; float:left;">
<table id="tble1">
<form action="" method="get" enctype="multipart/form-data" id="articlefrm">
<tr><td><input type="email" placeholder="EMAIL" name="n1" id="a1" />
<tr><td><input type="text" placeholder="NAME" name="n2" id="a1" />
<tr><td><textarea placeholder="ADDRESS" id="a2" rows="5" cols="25" name="n3" /></textarea>
<tr><td><input type="text" placeholder="CITY" id="a1"  name="n4"/>
<tr><td><input type="text" placeholder="MOBILE" pattern="[7-9]{1}[0-9]{9}" id="a1" name="n5" />
<tr><td><input type="text" placeholder="ARTICLE NAME" id="a1" name="n6" />
<tr><td><input type="number" placeholder="QUANTITY" id="a1" name="n7"/>
<tr><td><select id="a1"   class="amit"  name="n8" onchange="showngo(this.value);">
  <option value=" " >--SELECT--
 <option value="dtn" >DONATE TO NGO
  <option value="adv">ADVERTISE
  </option>
</select>
 <tr id="hide1" style="display:none;"><td> <input type="text" placeholder="NAME OF NGO" id="a1" name="n7" /> 

<tr><td><input type="submit" onClick="" id="a3" />
</form>
</table>
</div>
</div>
<div style="width:300px; height:550px; background-color:#666; border:1px solid black; position:absolute; left:200px; top:100px; display:none; z-index:10000;" id="money1">
<div style="width:100%; height:10%; float:left;">
<img src="images/images (17).jpg" onclick="hidemoney();" style="width:30px; height:30px;" />
</div>
<div style="width:100%; height:90%; float:left;">
<table id="tble1">
<form action="" method="get" enctype="multipart/form-data" id="articlefrm">
<tr><td><input type="email" placeholder="EMAIL" name="n1" id="a1" />
<tr><td><input type="text" placeholder="NAME" name="n2" id="a1" />
<tr><td><textarea placeholder="ADDRESS" id="a2" rows="5" cols="25" name="n3" /></textarea>
<tr><td><input type="text" placeholder="CITY" id="a1"  name="n4"/>
<tr><td><input type="text" placeholder="MOBILE" pattern="[7-9]{1}[0-9]{9}" id="a1" name="n5" />


<tr><td><input type="text" placeholder="MONEY" id="a1" name="n6" />
<tr><td><input type="submit" onClick="" id="a3" />
</form>
</table>
</div>
</div>
</body>
</html>
