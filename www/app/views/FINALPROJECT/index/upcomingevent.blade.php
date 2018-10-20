<!DOCTYPE html >
<html >
<head>
<link rel="icon" href="images/icon5_2.gif" type="image/gif">
<title>UPCOMING EVENT</title>
<style type="text/css">
*{margin:0px; border:0px; outline:0px;} 
body,html{width:100%; min-height:100%; background-color:#666;}
#main{width:65%; height:100%; margin:auto;}
#head{background-color:black; width:100%; height:60px; background-color:black;}
#hd1{margin-left:40px; margin-top:5px; font-size:45px; color:white; float:left;}
#hd2{width:250px; height:40px;  float:left; margin-left:60px; margin-top:15px;}
#hd3{width:170px; height:30px; border:1px solid black;}
#lp{width:99.9%; height:100%; float:left; box-shadow:0px 0px 2px 2px black;}
#lp1{width:70%; min-height:400px; height:auto; margin-left:17%;  float:left;  }
#fes{background-image: url(/images/10448204_739992549394042_2706379719248067307_n.jpg); background-size: cover; opacity: 0.8px; background-repeat: no-repeat; z-index: 10000;}
#jhg{background-color:black; color:white; width:100px; height:30px; border:1px solid white;}
#rfg{position: fixed; left: 0px; top:150px; width: 120px; border: 1px solid white; height:40px; color:white; background-color: black;}
.lbl1{text-decoration:underline; font-style:italic; margin-left:40px; }
</style>
</head>

<body>
<a href="/"><input type="button" value="HOME" id="rfg"></a>
<div id="main">
<!--HEAd-->
<div id="head">
<p id="hd1">UPCOMING EVENT</p>
<div id="hd2">
<table style="width:100%; height:100%;">
<form method="get" action="/upcomingevent">
<input type="text" value="1" name="code" style="display:none;">
<tr><td><select id="hd3" name="hd3" style="background-color:#666;" required>
<option value="" readonly >--SELECT NGO--
@foreach($rf as $rf)
<option value="<?php echo $rf->non; ?>">{{{$rf->non}}}
@endforeach
<option value="all">ALL NGO
</option>
</select>
<td><input type="submit" value="SUBMIT" id="jhg">
</form>
</table>
</div>
</div>
<!--HEAD-->
<!--LOWER PORTION-->
<div id="lp">
<!--CONTENT-->

<!--HAHA-->
<div id="lp1">
<!--HH-->
@foreach($kk as $evn)
<div style="width:95%; height:400px; margin-top:10px;   border:2px solid black; background-color:#CCC; float:left; margin-bottom:5px;">

<div style="width:40%; height:60%; float:left;">
<img src="/FINALPROJECTPERSONAL/<?php echo $evn->non;?>/PHOTOS/<?php echo $evn->fileimage1;?>" style="width:100%; height:100%; margin-left:10px; border:1px solid black; "  id="fes">
</div>

<!--JJ-->
<div style="width:50%; height:70%; float:left; margin-left:20px;">
<label  class="lbl1"><strong>NAME OF NGO:</strong></label><br>
<div style="width:100%; height:30px auto;  margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->non or $evn->non=''}}}</p></div>
<label class="lbl1" ><strong>TOPIC OF EVENT:</strong></label><br>
<div style="width:100%; height:30px auto;  margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->topic or $evn->topic=''}}}</p></div>
<label  class="lbl1"><strong>ADDRESS OF EVENT:</strong></label><br>
<div style="width:100%; height:100px auto; margin-left:15%;  float:left;"><p style="color:#900;">{{{$evn->address or $evn->address=''}}}</p></div><br>
<label class="lbl1"><strong>DATE OF EVENT:</strong></label><br>
<div style="width:100%; height:20px auto;margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->dateofevent or $evn->dateofevent=''}}}</p></div>
<label class="lbl1"><strong>CONTACT NUMBER:</strong></label><br>
<div style="width:100%; height:20px auto; margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->mobile or $evn->mobile=''}}}</p></div>

<div style="width:100%; height:20px auto; margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->mobile2 or $evn->mobile2=''}}}</p></div>
</div>
<!--JJ-->


<label class="lbl1"><strong>DESCRIPTION:</strong></label><br>
<div style="width:100%; height:20px;margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->descript or $evn->descript=''}}}</p></div>
</div>
<!--HH-->



@endforeach
</div>
<!--HAHA-->


</div>
<!--CONTENT-->
</div>
<!--LOWER PORTION-->
</div>
</body>
</html>
