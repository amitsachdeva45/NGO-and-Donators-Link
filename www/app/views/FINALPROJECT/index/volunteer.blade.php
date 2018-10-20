<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Volunteer</title>
<script src="../jquery-1.8.2.min.js"></script>
<script type="text/javascript">

function chse1(vv)
{
	 var c="ch";
	var d="adv";
	if(c==vv)
	{$(".hide1").show();$(".hide2").show();
}
    
	if(d==vv)
	{$(".hide1").hide();$(".hide2").hide();}
}

</script>
<style type="text/css">
*{
	margin:0px; border:0px; outline:0px; 
}
body,html{width:100%; min-height:100%; background-color:#666; }
#main{width:70%; height:100%; margin:auto;}
.sw{width:200px; min-width:100px; height:25px; border:1px solid black; margin-left:17%;}
#fm11{width:30%; min-width:210px; min-height:400px; height:auto;background-color:#930; float:left; border:1px solid black;}
#sbmt{width:100px; min-width:50px; height:30px; background-color:black; margin-left:27%; color:white; border:1px solid white;}
.hide1,.hide2{display: none;}

</style>

</head>

<body>
<a href="/"><input type="button" style="width:100px; height:30px; border:1px solid white; background-color:black; color:white; position:absolute; left:0px; top:100px;" value="HOME"></a>
<!--MAIN-->
<div id="main">
<!--IMAGE-->
<div style="width:100%; height:300px; border:1px solid black; float:left;">
<img src="/images/NPOs_NGOs_and_Volunteer_Work_Abroad.jpg" style="width:100%; height:100%;">
</div>
<!--IMAGE-->
<!--FORM-->
<div style="width:100%; height:450px; float:left;">
<!--DETAILS-->
<div style="width:60%; height:100%; float:left; ">
<p style="color:white; font-size:35px; margin-top:30px; margin-left:30px; ">Volunteering can be an exciting, growing ,enjoyable experience. It is truly gratifying to serve a cause, practice one &rsquo;s ideals, work with people, solve problems, see benefits, and know one had a hand in them.<br><br>

-Harriet Naylor</p>

</div>
<!--DETAILS-->
<!--FORM!11-->
<div id="fm11">
<table style="width:100%; height:100%;">
<form method="post"  action="/volunt">
<tr><td><input type="text" class="sw" placeholder="NAME" name="nam" required>
<tr><td><input type="text" class="sw" placeholder="EMAIl" name="ema" >
<tr><td><input type="text" class="sw" pattern="[7-9]{1}[0-9]{9}" placeholder="MOBILE NUMBER" name="mobile" required>
<tr><td><textarea name="address" placeholder="ADDRESS" style="border:1px solid black; resize:none; margin-left:17%;" cols="25" rows="5"></textarea>
<tr><td><input type="text" class="sw" placeholder="CITY" name="city" required>
<br>
<label style="margin-left:18%;" >GENDER</label><br>
<tr><td><select class="sw" name="gender" required >
<option value="" readonly>--SELECT--
<option value="Male">MALE
<option value="Female">FEMALE
<option value="Others">OTHERS
</option>
</select><br>
<label style="margin-left:18%;" >SELECT YOUR CHOICE</label><br>
<tr><td><select class="sw" id="choose1" name="non" onChange="chse1(this.value);" required>
<option value="" readonly>---SELECT---
<option value="adv">ADVERTISE YOUR PROFILE
<option value="ch">CHOOSE PARTICULAR NGO
</option>
</select>

 <tr class="hide1"><td><label>SELECT NGO</label>
<?php $a=0;?>
@foreach($fr as $rt)
<tr class="hide2"><td><input type="checkbox" name="<?php echo "aa".$a;?>" id="<?php echo $rt->non;?>" value="<?php echo $rt->non;?>" >{{{ $rt->non}}}
<?php $a++;?>
 @endforeach
<tr><td><input type="submit" id="sbmt" value="SUBMIT" >
</form>

</table>
</div>
<!--FORM!11-->
</div>
<!--FORM-->
</div>
<!--MAIN-->
</body>
</html>
