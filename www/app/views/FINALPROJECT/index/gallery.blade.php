<!DOCTYPE html >
<html>
<head>
<link rel="icon" href="images/icon5_2.gif" type="image/gif">
<title>GALLERY</title>
<style type="text/css">
*{
	margin:0px; outline:0px; border:0px; 
}
body,html{
	width:100%; min-height:100%; background-color:#666;
	}
#main
{
	width:70%;
	height:100%;margin:auto;
}
#head
{
	width:100%; height:70px; background-color:black;border:1px double white;
	}
	#gallery
	{
		font-size:60px; margin-left:38%; font-style:italic; color:white; float:left; 
	}
	#bottom
	{
		width:100%; height:90%; float:left;  border:1px solid white;
	}
	.hed1
	{
		width:50%; height:45px; float:left; background-color:black; border:1px solid white; margin-left:20px;
	}
	.nm1
	{color:white; font-size:40px; margin-left:30px;
		}
		#images1,#images2{
			width:99.9%; height:445px; float:left; border: 1px solid white; margin-top:10px; overflow:auto;
			}
			.hgh{width:30%; min-weight:200px; height:260px; float:left;margin-top:20px; margin-left:30px; border:1px solid black; background-color:#CCC;
				}
				.fgf{width:100%; height:30px; float:left; background-color:#900;
					}
					.jhj
					{color:white; margin-left:20px;}
					#images1::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#images1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#images1::-webkit-scrollbar-thumb {
  background-color: black;border-radius:5px; border: 1px solid white;
  
  }

#images2::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#images2::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#images2::-webkit-scrollbar-thumb {
  background-color: black;border-radius:5px; border: 1px solid white;
  
  }
#filter1{width:150px; float:left; height:30px; margin-left:10%; margin-top:10px;}
#hme{width:100px; height:40px; position:absolute; left:0px; top:100px; background-color:black; color:white;}
#a1{width:150px; height:30px; border:1px solid white; background-color:#666; color:white;}
#gall2{background-color:#666; color:white; width:100px; height:30px; border:1px solid white;}
.imgh1{width:100%; height:500px auto;  margin-top:10px; float:left;  }
.vid1{width:100%; min-width:200px; height:230px; margin-top:10px;}
</style>
</head>

<body>
<a href="/"><input type="button" id="hme" value="HOME"></a>
<!--MAIN-->
<div id="main">
<!--HEAD-->
<div id="head">
<p id="gallery">GALLERY</p>
<!--FILTER-->
<div id="filter1">
<form method="get" action="gallery">
<input type="text" style="display:none;" value="1" name="pp1">
<table>
<tr><td><select id="a1"    name="n8"  required>
  <option value="" readonly >--SELECT NGO--

 @foreach($gg as $gg)
 <option value="<?php echo $gg->non; ?>" >{{{$gg->non}}}
 @endforeach
 <option value="all">ALL NGOS
  </option>
</select>
<td><input type="submit" value="SUBMIT" id="gall2">
</table>
</form>
</div>

</div>

<!--HEAD-->
<!--div-->
<div id="bottom">
<!--IMAGES-->
<div class="imgh1" >
<div class="hed1"><p class="nm1">IMAGES</p></div>
<div id="images1">
<!--IMA-->
@foreach($rde as $te)
<div class="hgh">
<div class="fgf"><p class="jhj">{{{$te->non}}}</p></div>
<div class="vid1"  >
<img src="<?php echo '/FINALPROJECTPERSONAL/'.$te->non.'/FILES/'.$te->filefield1; ?>" style="width:100%; height:100%;">
</div>
</div>
@endforeach
<!--IMA-->
</div>

</div>
<!--IMAGES-->


<!--EVENTS-->
<div  class="imgh1" >
<div class="hed1"><p class="nm1">EVENTS<p></div>
<div id="images2">
<!--VID-->
@foreach($fde as $te)
<div class="hgh">
<div class="fgf"><p class="jhj">{{{$te->non}}}</p></div>
<div class="vid1">
<img src="<?php echo '/FINALPROJECTPERSONAL/'.$te->non.'/PHOTOS/'.$te->fileimage1; ?>" style="width:100%; height:100%;">
</div>
</div>
@endforeach
<!--VID-->
</div>

</div>
<!--EVENTS-->
</div>
<!--div-->

</div>
<!--MAIN-->
</body>
</html>
