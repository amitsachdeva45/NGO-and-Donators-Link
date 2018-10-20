<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#eve{width:250px; height:20px; margin-top:5px; border:1px groove black; margin-left:40px; }
</style>
</head>

<body>
<!--ADVERTISEMNT-->
<div style="width:350px; height:550px; background-color:#666; border:1px solid black; display:none; position:absolute; left:250px; z-index:10000; top:150px;" id="event1">
<div style="width:100%; height:40px; background-color:black; float:left;" >
<img src="/images/images (17).jpg" onclick="hideevent1();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-top:10px; margin-left:30px; float:left; ">ADD NEW EVENT</p>

</div>
<div style="width:100%; height:500px auto; float:left; " >
{{ Form::open(array('url' => '/makeevent1','files' => true)) }}
<table>
<tr><td><input type="text" style="display:none;"  name="city" value="<?php echo $city; ?>"/>
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="display:none;" name="non" value="<?php echo $non; ?>"/>
<tr><td><input type="text" placeholder="TOPIC" name="topic"  id="eve" required/><br /><br />
<label>DATE OF EVENT</label>
<tr><td><input type="date" name="dateofevent" required  id="eve"/>
<tr><td><textarea  cols="33" placeholder="VENUE" name="address" rows="4" required style="border:1px groove black; margin-top:5px; margin-left:40px;" /></textarea>
<tr><td><input type="text"  placeholder="CITY" id="eve" name="city2" required/>
<tr><td><input type="text" pattern="[7-9]{1}[0-9]{9}" id="eve" placeholder="ANY CONTACT NO." name="mobile" required/>
<tr><td><input type="text" pattern="[7-9]{1}[0-9]{9}" id="eve" placeholder="ALTRENATE CONTACT NO." name="mobile2" />
<tr><td><textarea placeholder="DESCRIPTION" name="descript" style="border:1px groove black; margin-top:5px; margin-left:40px;"  cols="33" rows="4"/></textarea><br />
<label>ANY IMAGE</label>
<tr><td><input type="file" style="margin-left:40px;" name="fileimage1"  />
<tr><td><input type="submit"  style="width:200px; cursor:pointer; height:30px; border:1px solid black; background-color:black; border-radius:5px; color:white; margin-left:40px;"/>

</table>
{{ Form::close() }}
</div>
</div>
<!--ADVERTISEMNT-->

<!--ADVERTISEMNT-->
<div style="width:350px; min-height:650px; height:auto; background-color:#666; border:1px solid black; display:none; position:absolute; left:250px; z-index:10000; top:100px;" id="event2">
<div style="width:100%; height:40px; background-color:black; float:left;" >
<img src="/images/images (17).jpg" onclick="hideevent2();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-top:10px; margin-left:30px; float:left; ">REQUEST EVENT</p>

</div>
<div style="width:100%; height:500px auto; float:left; " >
{{ Form::open(array('url' => '/requestevent1','files' => true)) }}
<table>
<tr><td><input type="text" style="display:none;"  name="p234" value="1"/>
<tr><td><input type="text" style="display:none;"  name="city" value="<?php echo $city; ?>"/>
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><label style="text-decoration:underline; color:red;">FROM:</label>&nbsp;&nbsp;<input type="text"  name="non" style="background-color" value="<?php echo $non; ?>"/>
<?php $r=0; ?>
<tr><td><label style="text-decoration:underline; color:red;">TO:</label>
<div style="overflow:auto; height:100px; width:70%; ">

<table style="width:100%; height:100%;">
@foreach($ggg as $ms1)
<tr><td><input type="checkbox" name="<?php echo "hh".$r; ?>" value="<?php echo $ms1->non; ?>"><?php echo $ms1->non;?>
<?php $r++; ?>
@endforeach
</table>
</div>

<tr><td><input type="text" placeholder="TOPIC" name="topic"  id="eve" required/><br /><br />
<label>DATE OF EVENT</label>
<tr><td><input type="date" name="dateofevent" required  id="eve"/>
<tr><td><textarea  cols="33" placeholder="VENUE" name="address" rows="4" required style="border:1px groove black; margin-top:5px; margin-left:40px;" /></textarea>
<tr><td><input type="text"  placeholder="CITY" id="eve" name="city2" required/>
<tr><td><input type="text" pattern="[7-9]{1}[0-9]{9}" id="eve" placeholder="ANY CONTACT NO." name="mobile" required/>
<tr><td><input type="text" pattern="[7-9]{1}[0-9]{9}" id="eve" placeholder="ALTRENATE CONTACT NO." name="mobile2" />
<tr><td><textarea placeholder="DESCRIPTION" name="descript" style="border:1px groove black; margin-top:5px; margin-left:40px;"  cols="33" rows="4"/></textarea><br />
<label>ANY IMAGE</label>
<tr><td><input type="file" style="margin-left:40px;" name="fileimage1"  />
<tr><td><input type="submit" value="REQUEST"  style="width:200px; cursor:pointer; height:30px; border:1px solid black; background-color:black; border-radius:5px; color:white; margin-left:40px;"/>

</table>
{{ Form::close() }}
</div>
</div>
<!--ADVERTISEMNT-->
<!--REQUESTED EVENT-->
<div id="requestedevent" style="width:300px;  height:350px; border:1px solid black; background-color:#666; overflow:auto; position:absolute; left:250px; top:200px; display:none;">
<div style="background-color:black; width:90%; height:30px;">
<label style="color:white; margin-left:30px; font-size:25px;">ALL REQUEST</label><img src="/images/images (17).jpg" onclick="hiderequested();" style="width:30px; margin-left:10px; height:30px; float:left; "/>	
</div>
@foreach($reqevn as $reqevn)
<div style="width:90%; min-height:200px; margin-left:10px; margin-top:10px; height:auto; background-color:#CCC; float:left; border:1px solid black;">
<table style="width:100%; height:100%;">
<?php $a1=$reqevn->fileimage1;
   if($a1==null)
   	$b1='none';
   else
   	$b1="";
?>
<tr><td><img src="/FINALPROJECTPERSONAL/<?php echo $reqevn->non;?>/REQUEST/<?php echo $reqevn->fileimage1;?>" style="display:<?php echo $b1; ?> ;width:90%; height:200px; border:1px solid black; margin-left:10px;">
<tr><td><label style="color:red; text-decoration:underline;">FROM:</label><br><?php echo $reqevn->non;?>

<tr><td><label style="color:red; text-decoration:underline;">TOPIC :</label><br><?php echo $reqevn->topic;?>
<tr><td><label style="color:red; text-decoration:underline;">ADDRESS:</label><br><?php echo $reqevn->address;?>

<tr><td><label style="color:red; text-decoration:underline;">DATE:</label><br><?php echo $reqevn->dateofevent;?>

<tr><td><label style="color:red; text-decoration:underline;">DESCRIPTION</label><br><?php echo $reqevn->descript;?>
<tr><td><label style="color:red; text-decoration:underline;">CONTACT:</label><br><?php echo $reqevn->mobile;?>
<tr><td>{{{$reqevn->mobile2 or $reqevn->mobile2=""}}}
</table>
</div>
@endforeach
</div>
<!--REQUESTED EVENT-->

</body>

</html>

