<!DOCTYPE html>
<html >
<head>

<title>DONATE ARTICLE</title>
<link rel="icon" href="../images/donate.ico" type="image/x-icon">
<script src="../jquery-1.8.2.min.js"></script>
<script type="text/javascript">
function showngo(vv)
{
	var c="dtn";
	var d="adv";
	if(c==vv)
	{$(".hide1").show();$(".hide2").show(); $("#a22").hide(); $("#art").hide();
}
    if(d==vv)
	{$(".hide1").hide();$(".hide2").hide();$("#a22").show(); $("#art").show();}
}
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
#a1,#a22,#art
{
 width:200px; min-width: 100px; height:20px; margin-left:40px;	 border:1px solid black;
}
#a2
{
margin-left:40px;	border:1px solid black;
}
#a3
{
 width:200px; min-width: 100px; height:40px; margin-left:40px; background-color:#333; color:white;	
}
#tble1
{
	width:100%; height:100%;
}
#ff111{width:45%; height:100%; float:left;}
#ff222{color:#900; font-size:40px; border-bottom:1px solid #900; margin-top:10px; }
#ff223{color:#900; font-size:20px; margin-top:10px;}
#article2{min-width:300px;width: auto; height:550px; background-color:#930; border:1px solid black;  z-index:10000; float:left; margin-left:10%;}
#formvala{width:100%; min-width:210px; height:90%; float:left;}
.hide1,.hide2{display: none;}
</style>

</head>

<body>
<div>
<a href="/"><input type="button" value="HOME" id="home" ></a>
</div>
<div id="main">
<div id="article">
<img src="../images/gep_banner_1200x400.jpg" id="article1"/>
</div>
<!--FORM-->
<div id="ff">
<div id="ff111">
<p id="ff222">
Donating household items gives a second life to the things you no longer need</p>
<p id="ff223">
Many of us have clothing and household items piling up in the closets and the corners of our homes &ndash; things that we just don&acute;t use anymore. Maybe it&acute;s an appliance that you no longer find yourself using (that bread machine sure seemed like a good idea at the time!). Perhaps you&acute;ve bought new dishes and don&acute;t have room for the old set. Maybe you&acute;ve decided that you just don&acute;t need the piles and piles of blankets that you&acute;ve accumulated over the years. Donating your household items to charity can give a new life to your all of your useful goods by putting them in the hands of people who need them today. The bread machine can enable parents to prepare good, wholesome meals for their kids. The dishes can be used by a person in transition to serve up a warm, home-cooked dinner. And a warm blanket is a welcome comfort on cold nights for our neighbors who are less fortunate. Right now, someone in your community is struggling to make ends meet &ndash; and your donation of clothing and household items can help make a major difference.
</p>
</div>
<div  id="article2">

<div id="formvala">
<table id="tble1">
<form action="/articlehom" method="post" enctype="multipart/form-data" id="articlefrm">
<tr><td><input type="email" placeholder="EMAIL" name="n1" id="a1"  />
<tr><td><input type="text" placeholder="NAME" name="n2" id="a1"  required/>
<tr><td><textarea placeholder="ADDRESS" id="a2" rows="5" cols="25" name="n3" required /></textarea>
<tr><td><input type="text" placeholder="CITY" id="a1"  name="n4" required/>
<tr><td><input type="text" placeholder="MOBILE"  id="a1" name="n5" required />


<tr><td><select id="a1"   class="amit"  name="n8" onchange="showngo(this.value);" required>
  <option value=" " readonly >--SELECT--
 <option value="dtn" >DONATE TO NGO
  <option value="adv">ADVERTISE
  </option>
</select>

 <tr class="hide1" colspan="3"><td><label>SELECT NGO</label><td><label>QUANTITY</label><td style="margin-left:10px;"><label>ARTICLE</label></td>
<?php $a=0;?>
@foreach($fr as $rt)
 <tr colspan="3" class="hide2"><td><input type="checkbox" name="<?php echo "aa".$a; ?>" value="<?php echo $rt->non;?>" >{{{ $rt->non}}}<td><input type="number" min=0 max=20 name="<?php echo "bb".$a; ?>" ><td><input type="text" placeholder="ARTICLE NAME"  id="a1" name="<?php echo "cc".$a;?>" />
 <?php $a++;?>
 @endforeach

<tr><td><input type="number" placeholder="QUANTITY" min='0' id="a22" style="display:none;" name="n7" />
<tr><td><input type="text" placeholder="ARTICLE NAME" style="display:none;" id="art" name="n6" />
<tr><td><input type="submit" onClick="" id="a3" />
</form>
</table>
</div>
</div>

</div>
<!--FORM-->
</div>
</body>
</html>
