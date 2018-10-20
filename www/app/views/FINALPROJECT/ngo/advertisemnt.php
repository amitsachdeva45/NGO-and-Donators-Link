<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../jquery-1.8.2.min.js"></script>
<script type="text/javascript">
function advr()
{
	var url=$("#form1").serialize();
	var qs="event.php?"+url;
	$.get(url,function(data,status)
	{
	}
	);
}
function showevent1()
{
	$("#event1").show(1000);
}
function hideevent1()
{
	$("#event1").hide(2000);
}
</script>
<style type="text/css">
#eve{width:250px; height:20px; margin-top:5px; border:1px groove black; margin-left:40px; }

</style>
</head>

<body>
<!--ADVERTISEMNT-->

<div style="width:350px; height:450px; background-color:#666; border:1px solid black;" id="event1">
<div style="width:100%; height:40px; background-color:black; float:left;" >
<img src="images/images (17).jpg" onclick="hideevent1();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-top:10px; margin-left:30px; float:left; ">ADD NEW EVENT</p>

</div>
<div style="width:100%; height:auto; float:left; " >
<form method="post" action="" enctype="multipart/form-data" id="form1"> 
<table>
<tr><td><input type="email" style="display:none;" value=""/>
<tr><td><input type="text" placeholder="TOPIC" name="topic"  id="eve" required="required"/><br /><br />
<label>DATE OF EVENT</label>
<tr><td><input type="date" name="dateofevent" required="required"  id="eve"/>
<tr><td><textarea  cols="33" placeholder="VENUE" name="address" rows="4" required="required" style="border:1px groove black; margin-top:5px; margin-left:40px;" /></textarea>
<tr><td><input type="text"  placeholder="CITY" id="eve" name="city" required="required"/>
<tr><td><input type="text" pattern="[7-9]{1}[0-9]{9}" id="eve" placeholder="CONTACT NO." name="mobile" required="required"/>
<tr><td><textarea placeholder="DESCRIPTION" name="descript" style="border:1px groove black; margin-top:5px; margin-left:40px;"  cols="33" rows="4"/></textarea><br />
<label>ANY IMAGE</label>
<tr><td><input type="file" style="margin-left:40px;"  />
<tr><td><input type="submit" onclick="advr();" style="width:200px; height:30px; border:1px solid black; background-color:black; border-radius:5px; color:white; margin-left:40px;"/>

</table>
</form>
</div>
</div>
<!--ADVERTISEMNT-->
</body>
</html>
