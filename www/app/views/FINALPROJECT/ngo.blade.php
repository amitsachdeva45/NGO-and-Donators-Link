
<!DOCTYPE html >
<html>
<head>
<link rel="icon" href="/images/icon5_2.gif" type="image/gif">
<title>{{{$non}}}</title>
<link rel="stylesheet" href="/ngomenu_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
<script  src="jquery-1.8.2.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript" >

function showevent1()
{
	
	$("#event1").slideToggle(2000); $('#v1').hide();$("#pv1").hide(); 
	$("#inbox").hide(); $("#uploadfile").hide();  $("#uploadvideo").hide();
	$("#deleteform").hide();$("#messagebox").hide();$("#article2").hide();$("#donaccept").hide();
	$("#event2").hide();$("#requestedevent").hide();
}
function showrequested()
{
	$("#requestedevent").slideToggle(2000);
	 $('#v1').hide();$("#pv1").hide(); 
	$("#inbox").hide(); $("#uploadfile").hide();  $("#uploadvideo").hide();
	$("#deleteform").hide();$("#messagebox").hide();$("#article2").hide();$("#donaccept").hide();
	$("#event2").hide();$("#event1").hide();
}
function showevent2()
{
	$("#event2").slideToggle(2000);
	 $('#v1').hide();$("#pv1").hide(); 
	$("#inbox").hide(); $("#uploadfile").hide();  $("#uploadvideo").hide();
	$("#deleteform").hide();$("#messagebox").hide();$("#article2").hide();$("#donaccept").hide();$("#event1").hide();$("#requestedevent").hide();
}
function showhistory()
{
	$("#history").slideToggle(2000);
}
function deletengo()
{
	$("#deleteform").slideToggle(2000);$('#v1').hide();$("#pv1").hide(); 
	$("#inbox").hide(); $("#uploadfile").hide();  $("#uploadvideo").hide(); $("#event1").hide();$("#messagebox").hide(); $("#article2").hide();$("#donaccept").hide();$("#event2").hide();$("#requestedevent").hide();}
function showinbox()
{
	
	$("#inbox").slideToggle(2000); $("#deleteform").hide();$('#v1').hide();$("#pv1").hide(); $("#uploadfile").hide();  $("#uploadvideo").hide(); $("#event1").hide(); $("#messagebox").hide();$("#article2").hide();$("#donaccept").hide();$("#event2").hide();$("#requestedevent").hide();
}
function showvolunteer()
{
	$("#v1").slideToggle(2000);$("#pv1").hide();$("#deleteform").hide();$("#inbox").hide(); $("#uploadfile").hide();  $("#uploadvideo").hide();   $("#event1").hide();$("#messagebox").hide();$("#article2").hide();$("#donaccept").hide();$("#event2").hide();$("#requestedevent").hide();
}
function showparticular()
{
	$("#pv1").slideToggle(2000);  $('#v1').hide();
	$("#deleteform").hide();$("#inbox").hide(); $("#uploadfile").hide();  $("#uploadvideo").hide();   $("#event1").hide();
	$("#messagebox").hide();$("#article2").hide();$("#donaccept").hide();$("#event2").hide();$("#requestedevent").hide();
}
function showmessage()
{
	$("#messagebox").slideToggle(2000);
	$('#v1').hide();$("#donaccept").hide();
	$("#deleteform").hide();$("#inbox").hide(); $("#uploadfile").hide();  $("#uploadvideo").hide();   $("#event1").hide();$("#pv1").hide();$("#article2").hide();$("#event2").hide();$("#requestedevent").hide();
}
function checkpswd()
{
	
	var c=$("#pswd").val();
	if(c.length<5)
	{
		$("#pswd1").html("WEAK");
		$("#pswd1").css("color","red");
	}
	else if(c.length>=5&& c.length<=10)
	{$("#pswd1").html("AVERAGE");
		$("#pswd1").css("color","yellow");
	}
	else
	{
		$("#pswd1").html(" ");
		
	}
}
function matchpswd()
{
	
	var c=$("#pswd").val();
	var d=$("#conpswd").val();
	if(c==d)
	{
		$("#pswd2").html(" ");
		
	}
	else
	{
		$("#pswd2").html("INCORRECT");
		$("#pswd2").css("color","blue");
	}
}
//EXTRA
function showngo()
{
	$("#ongo").slideToggle(1000);
}
//EXTRA



function showngo22(vv)
{
	var c="dtn";
	var d="adv";
	if(c==vv)
	{$(".hide1").show();$(".hide2").show(); $("#a22").hide(); $("#art").hide();
}
    if(d==vv)
	{$(".hide1").hide();$(".hide2").hide();$("#a22").show(); $("#art").show();}
}
function hideevent1()
{
	$("#event1").hide(2000);
}
function hideevent2()
{
	$("#event2").hide(2000);
}
function hideuploadfile1()
{
	$("#uploadfile").hide(2000);
}
function showuploadfile1()
{
	$("#uploadfile").show(2000); $("#deleteform").hide();$('#v1').hide();$("#pv1").hide();  $("#inbox").hide(); $("#uploadvideo").hide(); $("#event1").hide();
$("#messagebox").hide();$("#article2").hide();$("#donaccept").hide();$("#event2").hide();$("#requestedevent").hide();
}
function showuploadvideo1()
{
	$("#uploadvideo").show(2000); $("#deleteform").hide();$('#v1').hide();$("#pv1").hide();  $("#inbox").hide(); $("#uploadfile").hide();$("#event1").hide();
$("#messagebox").hide();$("#article2").hide();$("#donaccept").hide();$("#event2").hide();$("#requestedevent").hide();
}
function showdon()
{
	$("#article2").show(1000);$("#deleteform").hide();$('#v1').hide();$("#pv1").hide();  $("#inbox").hide(); $("#uploadfile").hide();$("#event1").hide();
$("#messagebox").hide(); $("#uploadvideo").hide(); $("#donaccept").hide();$("#event2").hide();$("#requestedevent").hide();
}  
function showotherdon()
{
	$("#donaccept").show(1000);
	$("#deleteform").hide();$('#v1').hide();$("#pv1").hide();  $("#inbox").hide(); $("#uploadfile").hide();$("#event1").hide();
$("#messagebox").hide(); $("#uploadvideo").hide(); $("#article2").hide();$("#event2").hide();$("#requestedevent").hide();
}
function hideotherdon()
{
	$("#donaccept").hide(1000);
}
function hideuploadvideo1()
{
	$("#uploadvideo").hide(2000);
}

function hiderequested()
{
	$("#requestedevent").hide(1000);
}
function showchat(fg)
{
	//alert(fg);
	var fg1=fg;
    $("#chat").show(1000);

	$("#group2").show();
	$("#group").hide();

document.getElementById("otherngo").value=fg1;
	//$("#otherngo").html(fg1);
}
function showgroupchat()
{
	$("#chat").show(1000);

	$("#group2").hide();
	$("#group").show();
	document.getElementById("otherngo").value="";
}
function hidechat()
{
 $("#chat").hide(1000);
}
function hidedon()
{
$("#article2").hide(1000);	
}

</script>

<!--GEOLOCATION-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
<script>
	var watchId = null;
	function geoloc() {
	if (navigator.geolocation) {
		var optn = {
				enableHighAccuracy : true,
				timeout : Infinity,
				maximumAge : 0
		};
	watchId = navigator.geolocation.watchPosition(showPosition, showError, optn);
	} else {
			alert('Geolocation is not supported in your browser');
	}
	}

function showPosition(position) {
		var googlePos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
		var mapOptions = {
			zoom : 12,
			center : googlePos,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		};
		var mapObj = document.getElementById('mapdiv');
		var googleMap = new google.maps.Map(mapObj, mapOptions);
		var markerOpt = {
			map : googleMap,
			position : googlePos,
			title : 'Hi , I am here',
			animation : google.maps.Animation.DROP
		};
		var googleMarker = new google.maps.Marker(markerOpt);
		var geocoder = new google.maps.Geocoder();
		geocoder.geocode({
			'latLng' : googlePos
			}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
				if (results[1]) {
					var popOpts = {
						content : results[1].formatted_address,
						position : googlePos
					};
				var popup = new google.maps.InfoWindow(popOpts);
				google.maps.event.addListener(googleMarker, 'click', function() {
				popup.open(googleMap);
			});
				} else {
					alert('No results found');
				}
				} else {
					alert('Geocoder failed due to: ' + status);
				}
			});
			}

			/*function stopWatch() {
				if (watchId) {
					navigator.geolocation.clearWatch(watchId);
					watchId = null;

				}
			}*/

		function showError(error) {
		var err = document.getElementById('mapdiv');
		switch(error.code) {
		case error.PERMISSION_DENIED:
		err.innerHTML = "User denied the request for Geolocation."
		break;
		case error.POSITION_UNAVAILABLE:
		err.innerHTML = "Location information is unavailable."
		break;
		case error.TIMEOUT:
		err.innerHTML = "The request to get user location timed out."
		break;
		case error.UNKNOWN_ERROR:
		err.innerHTML = "An unknown error occurred."
		break;
		}
		}
		</script>

<!--GEOLOCATION-->

<style type="text/css">
* {
	margin: 0px;
	outline: 0px;
	/* [disabled]padding:0px; */
	border: 0px;  
}
body, html
{
    width:100%;
    min-height: 100%;
	background-color:#666;
}
#ngomain
{
	width:70%;
	height:100%;
	margin:auto;
	background-color:red;
	margin-top: -20px;
}
#menu 
{
	width:100% ;
	height:37px ;
	
	
}
#image2{float:left; width:99.8%; height:300px; min-width: 700px; border:1px black solid; border-top:0px ; min-width:730px; }
#image22{width:100%; height:100%;}
#update{position:absolute; top:100px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#300; color:white; cursor:pointer;} 
#update:hover{position:absolute; top:100px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#900; color:white;}
#logout{position:absolute; top:160px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#300; color:white; cursor:pointer;} 
#logout:hover{position:absolute; top:160px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#900; color:white;}  
#historybutton{position:absolute; top:220px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#300; color:white; cursor:pointer;} 
#historybutton:hover{position:absolute; top:220px; left:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#900; color:white;}
#allngo{position:absolute; top:280px;right:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#300; color:white; cursor:pointer;} 
#allngo:hover{position:absolute; top:280px; right:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#900; color:white;}
#showgroup{position:absolute; top:220px;right:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#300; color:white; cursor:pointer;} 
#showgroup:hover{position:absolute; top:220px; right:0px; width:150px; min-width:100px; height:50px; max-height:80px; background-color:#900; color:white;}

#personaldetails{position:absolute; right:1%; top:50px; height:150px; width:13%; min-width:140px; background-color:#999; margin-left:10px; border:1px solid black; }
#pd1{font-size:100%; color:white; width:auto; height:auto;}
#pd2{font-size:100%; color:white; width:100%; margin-top:5px;  height:5% auto; text-align:center;}
#pd3{font-size:100%; color:white; width:100%; margin-top:5px;  height:5% auto; text-align:center;}
#pd{width:100%; height:10% auto; margin-top:4px; background-color:#900; text-align:center; }
#pd11{height:80%; margin-top:20px; width:100%; }

#uploadfile{width:250px; height:150px; background-color:#666; border:1px solid black; position:absolute; left:400px; top:150px;   z-index:10000; display:none; margin-top:5px; }
#opo{background-color:black; color:white; width:120px; margin-left:90px; height:30px; margin-top:10px; cursor:pointer;} 
#sa::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#sa::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#sa::-webkit-scrollbar-thumb {
  background-color: black;
  border-radius: 5px;border:1px solid white;
 
}
#ongo::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#ongo::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#ongo::-webkit-scrollbar-thumb {
  background-color: black;
  
   border-radius: 5px;border:1px solid white;
}

#hjh::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#hjh::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#hjh::-webkit-scrollbar-thumb {
  background-color: black;
   border-radius: 5px;border:1px solid white;
  
}
#inbox::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#inbox::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#inbox::-webkit-scrollbar-thumb {
  background-color: black;
   border-radius: 5px;border:1px solid white;
  
}
#v1::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#v1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#v1::-webkit-scrollbar-thumb {
  background-color: black;
   border-radius: 5px;border:1px solid white;
  
}
#pv1::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#pv1::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#pv1::-webkit-scrollbar-thumb {
  background-color: black;
   border-radius: 5px;border:1px solid white;
  
}
#history::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#history::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#history::-webkit-scrollbar-thumb {
  background-color: black;
  border-radius: 5px;
  border:1px solid white;
  
  
}
#messagebox::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#messagebox::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#messagebox::-webkit-scrollbar-thumb {
  background-color: black;
  border-radius: 5px;
  border:1px solid white;
  
  
}

#donaccept::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#donaccept::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#donaccept::-webkit-scrollbar-thumb {
  background-color: black;
  border-radius: 5px;
  border:1px solid white;
  
  
}
#requestedevent::-webkit-scrollbar {
    width: 10px;
    background-color:#666;
    border: 0px;
}
 
#requestedevent::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
 
#requestedevent::-webkit-scrollbar-thumb {
  background-color: black;
  border-radius: 5px;
  border:1px solid white;
  
  
}
#history{width:13%; height:300px  ; min-height:100px;  background-color:#666; overflow:auto; float:left; border:2px solid black; display:none; position:absolute; left:10px; top:290px; z-index:10000;}
.history1{text-decoration: underline;}
.history2{color:#900; font-style: italic;}
.pdet{color:#900; margin-left: 3px; }
#v1{position:absolute; left:650px; top:100px; background-color:#666; z-index:10000; border:1px solid black;  width:220px ; 
	height:300px ; min-height:100px; overflow:auto; display:none;}
	#pv1{position:absolute; left:650px; top:100px; background-color:#666; z-index:10000; border:1px solid black;  width:220px ; height:300px; min-height:100px; overflow:auto; display:none;}
	#pver{width:200px ; height:200px auto; float:left; background-color:#CCC; border:1px solid black; margin-top:5px; 
		margin-left:2px;}
		#histab{width:80% auto; height:250px auto; border:1px solid black; margin-top:20px; background-color:#CCC; margin-left:10px; margin-bottom:5px; float:left;}
		#inbox{width:300px; min-width:200px; height:350px; float:left; border:1px solid black; overflow:auto; margin-left:20px; position:absolute; z-index:10000; top:50px; right:400px; background-color:#666; display:none;}
		#inbx{width:90%; height:200px auto; float:left; margin-top:10px; background-color:#CCC; border:1px solid black; margin-left:10px; margin-bottom:5px;}
#article2{min-width:300px;width: auto; min-height:200px; height:auto; background-color:#666; border:1px solid black; position: absolute; left:500px; top:100px;  z-index:10000; float:left; margin-left:10%;}
#formvala{width:100%; min-width:210px; height:90%; float:left;}
.hide1,.hide2{display: none;}
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
 width:200px; min-width: 100px; height:40px; margin-left:40px; background-color:#333; color:white; border:1px solid white;	
}
</style>
</head>
<body onload="geoloc();" >
<!--GEOLOCATION-->
<div style="width:13%; height:150px; position:absolute; left:0px; top:0px; border:1px solid black; ">
    
		<p id = 'mapdiv' style="width:100%; height:100%;"></p>
        </div>
<!--GEOLOCATION-->

<!--PARTICULAR VOLUNTEER-->
<div id="pv1" >
<div style="width:90%; height:40px auto; float:left; background-color:black;  "><p style="color:white; font-size:20px; margin-left:5px; ">PARTICULAR VOLUNTEER</p>
</div>
@foreach($ty as $ty)
<div  id="pver">
<table style="width:100%; height:100%;"> 
<tr><td><p class="pdet">{{{$ty->nam}}}</p>
<tr><td><p class="pdet">{{{$ty->ema}}}</p>
<tr><td><p class="pdet">{{{$ty->address}}}</p>
<tr><td><p class="pdet">{{{$ty->city}}}</p>
<tr><td><p class="pdet">{{{$ty->mobile}}}</p>
<tr><td><p class="pdet">{{{$ty->gender}}}</p>
</table>
</div>
@endforeach
</div>
<!--PARTICULAR VOLUNTEER-->

<!-- VOLUNTEER-->
<div id="v1"  >
<div style="width:90%; height:40px; float:left; background-color:black;  "><p style="color:white; font-size:20px; margin-left:5px; ">VOLUNTEER</p>
</div>
@foreach($try as $try)
<div style="width:200px ; height:200px auto; float:left; background-color:#CCC; border:1px solid black; margin-top:5px; margin-left:2px;">
<table style="width:100%; height:100%;"> 
<tr><td><p class="pdet">{{{$try->nam}}}</p>
<tr><td><p class="pdet">{{{$try->ema}}}</p>
<tr><td><p class="pdet">{{{$try->address}}}</p>
<tr><td><p class="pdet">{{{$try->city}}}</p>
<tr><td><p class="pdet">{{{$try->mobile}}}</p>
<tr><td><p class="pdet">{{{$try->gender}}}</p>
</table>
</div>
@endforeach
</div>
<!-- VOLUNTEER-->





<!--UPDATE DETAILS-->
<form method="post" action="/logout">
<input type="text" style="display:none;" value="<?php echo $ema; ?>" name="ema">
<input type="submit" value="LOGOUT"  id="logout"/></form>
<!--UPDATE DETAILS-->
<input type="button" value="HISTORY" onclick="showhistory();"  id="historybutton"/>
<input type="button" value="GROUP MESSAGE" onclick="showgroupchat();" id="showgroup"/>
<input type="button" value="ALL NGOS" onclick="showngo();" id="allngo"/>







<!--HISTORY-->
<div  id="history"   >
<div style="width:170px; height:30px; background-color:black; margin-left:5px;"><p style="color:white; font-size:26px; margin-left:5px;">HISTORY</p> </div>
@foreach($aw as $as)
<table  id="histab">
<tr><td><p class="history1">EMAIL</p><p class="history2">{{{$as->manemail or $as->manemail=''}}}</p>
<tr><td><p class="history1">Name</p><p class="history2">{{{$as->name or $as->name=''}}}</p>
<tr><td><p class="history1">Type Of Donation</p><p class="history2">{{{$as->typeofdon or $as->typeofdon=''}}}</p>
<tr><td><p class="history1">Mobile</p><p class="history2">{{{$as->mobile or $as->mobile=''}}}</p>
<tr><td><p class="history1">Address</p><p class="history2">{{{$as->address or $as->address=''}}}</p>
<tr><td><p class="history1">THING</p><p class="history2">{{{$as->thing or $as->thing=''}}} &nbsp; {{{$as->quantity or $as->quantity=''}}}</p>
</table>
@endforeach
</div>
<!--HISTORY-->



<!--INBOX-->
<!--ARTICle-->
<div id="inbox" >
<div style="width:90%; height:40px; float:left; background-color:black;  "><p style="color:white; font-size:20px; margin-left:5px; cursor:pointer;" onclick="showinbox();" >PERSONNAL DONATION</p></div><div id="output"></div>
@foreach($ee as $mon)
<div  id="inbx">
<table style="width:100%; height:100%;">
<form method="post" action="/donationacceptarticle">
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="email"  value="<?php echo $mon->ema;?>">
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="nam" value="<?php echo $mon->nam;?>">
<tr><td colspan="2"><input type="text" value="<?php echo $mon->address;?>"  style="border:0px; resize:none; color:#900; background-color:#CCC; height:auto; weight:150px; display:none;" name="address"><p style="color:#900;"><?php echo $mon->address;?></p>

<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>DONATION ARTICLE:</strong></label><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="articlename" value="<?php echo $mon->article;?>" >
<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>QUANTITY:</strong></label><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="quantity" value="<?php echo $mon->quantity;?>" >
<tr><td ><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="city" value="<?php echo $mon->city;?>"><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="mobile" value="<?php echo $mon->mobile;?>"> 
<tr><td colspan="2"><input type="submit" value="ACCEPT" style="background-color:black; color:white;" >
</form>
</table>
</div>
@endforeach
</div>
<!--ARTICLE-->
<!--INBOX-->





<!--PERSONAL DETAILS-->
<div id="personaldetails">
<div id="pd">
 <p id="pd1">PERSONAL DETAILS</p></div>
 <div id="pd11">
 <p id="pd3">{{$non}}</p>
 <p id="pd2">{{$city}}</p>
 </div>
</div>
<!--PERSONAL DETAILS-->


<!--DELETE FORM-->
<div id="deleteform" style="width:300px; height:200px auto; background-color:#666; position:absolute; top:50px; right:250px; border:1px solid black; display:none;">
<div style="width:100%; height:30px;float:left; background-color:black;"><p style="color:white; margin-left:60px; margin-top:5px;">DELETE FORM</p></div><br><br>
<form method="post" action="/deleteform1">
<table style="width:100%; height:100%;">
<tr><td><input type="email" placeholder="YOUR EMAIL ID" name="ema" style="width:200px; height:25px; margin-left:40px; border:1px solid black;" required><br>
<tr><td><input type="text" value="<?php echo $non; ?>" name="non" style="width:200px; height:25px; margin-left:40px; border:1px solid black;  display:none;"  readonly="readonly">
<tr><td><span id="pswd1"></span>
<tr><td><input type="password" placeholder="PASSWORD" id="pswd" name="pswd" onkeyup="checkpswd();" style="width:200px; height:25px; margin-left:40px; border:1px solid black;" required><br>
<tr><td><span id="pswd2"></span>
<tr><td><input type="password" placeholder="CONFIRM PASSWORD" id="conpswd" name="conpswd" onkeyup="matchpswd();" style="width:200px; margin-left:40px; height:25px; border:1px solid black;" required><br><br>
<tr><td><input type="submit" value="SUBMIT"  style="width:100px; height:25px;  margin-left:80px; background-color:black; color:white;" >

</table>
</form>
</div>
<!--DELETE FORM-->

<!--UPLOAD FILE-->
<!--SOLVE UPLOAD PROPERLY-->
 <!--HAAh-->@extends("FINALPROJECT/UPLOADFILe1/upload1")
<div id="uploadfile" >
<div style="background-color:black; width:100%; height:40px; float:left;">
<img src="/images/images (17).jpg" onclick="hideuploadfile1();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-left:50px;  ">UPLOAD  IMAGES</p>
</div>
<br /><br />
<div style="width:100%; height:auto; float:left;">
{{ Form::open(array('url' => '/makefile1','files' => true)) }}
<table>
<tr><td><input type="text" style="display:none;"  name="city" value="<?php echo $city; ?>"/>
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="display:none;" name="non" value="<?php echo $non; ?>"/>
<tr><td><input id="filefield" type="file" name="filefield1"  />
<tr><td><input id="Upload" type="submit" name="Upload" value="Upload" style="width:150px; height:25px; background-color:black; color:white; border:1px solid black; margin-left:50px; margin-top:10px; cursor:pointer; " />
<!-- This hidden input will force the  PHP max upload size. it may work on all servers. -->
<tr><td><input type="hidden" name="MAX_FILE_SIZE" value="60485760" />
</table>
 {{ Form::close() }}
</div>
</div>

<!--UPLOAD FILE-->
<!--UPLOad Video-->
@extends("FINALPROJECT/UPLOADVIDEO/fileupload2")
<div id="uploadvideo" style="width:300px; height:200px; background-color:#666; left:400px; top:150px; position:absolute; z-index:10000; margin-top:5px; border:1px solid black; display:none;">
<div style="width:100%; height:40px; background-color:black; float:left;" >
<img src="/images/images (17).jpg" onclick="hideuploadvideo1();" style="width:30px; margin-left:10px; height:30px; float:left; "/>
<p style="color:white; text-align:center; margin-left:50px;  ">UPLOAD VIDEOS</p>

</div>
<div style="width:100%; height:auto; float:left;">
<table>
{{ Form::open(array('url' => 'makevideo1','files' => true)) }}
                       
<tr><td><input type="text" style="display:none;"  name="city" value="<?php echo $city; ?>"/>
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="display:none;" name="non" value="<?php echo $non; ?>"/>
<tr><td><input type="file" name="video1">
<tr><td><input type="submit"   value="UPLOAD VIDEO" id="opo"/>
{{ Form::close() }}
<tr><td><input type="submit" name="disp" value="DISPLAY VIDEO" id="opo"/>

</table>
</div>

</div>
<!--UPLAOD VIDEO-->
<!--MAKE EVENT-->
@extends('FINALPROJECT/ngo/makeevnt');
<!--MAKE EVENT-->


<!--OTHER NGO-->
<div id="ongo" style="width:14%; height:400px; overflow:auto; position:absolute; right:2px; top:340px;  display:none; border:1px solid black; ">
<div style="width:90%; height:30px; background-color:black; cursor:pointer;"><p style="color:white; font-size:27px; margin-left:5px;" onclick="showngo();">ALL NGO</p></div>
<!--GGG-->
@foreach($ggg as $ngodet)
<div style="width:90% auto; height:220px auto; background-color:#CCC; margin-top:15px; float:left; margin-left:3px; border:1px solid black; margin-bottom:5px; padding:5px; ">
<label style="text-decoration:underline; font-style:italic; "  ><strong>NAME OF NGO:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900; cursor:pointer;" onmouseup="showchat('<?php echo $ngodet->non; ?>');">{{{$ngodet->non or $ngodet->non=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic; "><strong>ADDRESS:</strong></label><br>
<div style="width:100% auto; height:120px auto; float:left;"><p style="color:#900;">{{{$ngodet->address or $ngodet->address=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic; "><strong>CITY:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$ngodet->city or $ngodet->city=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic; "><strong>CONTACT NUMBER:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$ngodet->mobile or $ngodet->mobile=''}}}</p></div>
<div>
<input type="button" onclick="showchat('<?php echo $ngodet->non; ?>');" style="background-color:black; color:white; cursor:pointer;" value="SEND MESSAGE" >
</div>
</div>

@endforeach
<!--GGG-->


</div>
<!--OTHER NGO-->

<!--DONATION-->
<div  id="article2" style="display:none;">

<div id="formvala">
<table id="tble1">
<tr style="background-color:black; "><td><label style=" color:white; margin-left:40px;">DONATE TO NGO</label><img src="/images/images (17).jpg" style="float:left; margin-left:20px; height:20px;cursor:pointer;" onclick="hidedon();" >
<form action="/ngo" method="post" enctype="multipart/form-data" id="articlefrm">
<tr><td><input type="text" name="k234" id="a1" value="1" style="display:none;" />
<tr><td><input type="email" name="n1" id="a1" value="<?php echo $ema; ?>" style="display:none;" />
<tr><td><input type="text" placeholder="NAME" name="n2" id="a1"  value="<?php echo $pswd2; ?>"  style="display:none;" />
<tr><td><label style="color:red;">FROM:-></label><input type="text" name="n3" id="a1" value="<?php echo $non;?>" />



<tr><td><label style="color:red;">SELECT OPTION:-></label><select id="a1"   class="amit"  name="n8" onchange="showngo22(this.value);" required>
  <option value=" " readonly >--SELECT--
 <option value="dtn" >DONATE TO NGO
  <option value="adv">ADVERTISE
  </option>
</select>

 <tr class="hide1" colspan="3"><td><label>SELECT NGO</label><td><label>QUANTITY</label><td style="margin-left:10px;"><label>ARTICLE</label></td>
<?php $a=0;?>
@foreach($ggg as $rt)
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
<!--DONATION-->

<!--DONATION BY NGO ACCEPT-->
<div style="width:300px; height:300px; overflow:auto; background-color:#666; border:1px solid black; position:absolute; right:550px; top:100px; display:none;" id="donaccept">
<div style="background-color:black;width:90%; height:35px; float:left;"><label style="color:white; font-size:20px; margin-left:15px;">NGO DONATION</label>
<img src="/images/images (17).jpg" style="float:left; height:25px;cursor:pointer;" onclick="hideotherdon();" >
</div>


@foreach($dn as $dn3)
<table style="width:70%; border:1px solid black; margin-left:30px; margin-top:20px; min-height:100px;height:auto; background-color:#CCC; float:left;">
<tr><td><p style="text-decoration:underline;">FROM:</p><p style="color:#960;">{{{$dn3->ngoname}}}</p>
<tr><td><p style="text-decoration:underline;">ARTICLE NAME</p><p style="color:#960;">{{{$dn3->articlename}}}</p>
<tr><td><p style="text-decoration:underline;">QUANTITY</p><p style="color:#960;">{{{$dn3->quantity}}}</p>
</table>
@endforeach

@foreach($dn1 as $dn3)
<table style="width:70%; border:1px solid black; margin-left:30px; margin-top:20px; min-height:100px;height:auto; background-color:#CCC; float:left;">
<tr><td><p style="text-decoration:underline;">FROM:</p><p style="color:#960;">{{{$dn3->ngoname}}}</p>
<tr><td><p style="text-decoration:underline;">ARTICLE NAME</p><p style="color:#960;">{{{$dn3->articlename}}}</p>
<tr><td><p style="text-decoration:underline;">QUANTITY</p><p style="color:#960;">{{{$dn3->quantity}}}</p>
</table>
@endforeach
</div>
<!--DONATION  BY NGO ACCEPT-->


<!--CHAT BOX-->
<div style="width:300px; height:350px; bottom:0px; right:250px; position:absolute; background-color:grey; border:black 1px solid; display:none;" id="chat">

<div style="background-color:black; width:100%; height:30px; float:left;"><p style="color:white; margin-left:50px; font-size:28px; float:left;">MESSAGE</p>
<img src="/images/images (17).jpg" style="float:left; margin-left:50px; height:30px;cursor:pointer;" onclick="hidechat();" >

</div>
{{ Form::open(array('url' => '/ngo','files' => true)) }} 
<input type="text" value="1" name="pp" style="display:none;">
<input type="text" value="<?php echo $ema; ?>" name="email12" style="display:none;">

<input type="text" value="<?php echo $pswd2; ?>" name="pswd12" style="display:none;" >
<table style="width:100%; height:90%; "cellpadding="7px" >
<tr colspan="2" ><td><label style="color:red;">FROM:-></label><input type="text" value="<?php echo $non; ?>" name="non" style="  background-color:transparent;" readonly>
<tr colspan="2" id="group2" style="display:none;"><td ><label style="color:red;" >TO:-></label><input type="text"  placeholder="OTHER NGO" style=" background-color:transparent;" id="otherngo" name="otherngo" readonly>
<tr id="group" ><td><div  style="width:100%; height:80px; overflow:auto;  border:1px solid black;" >
<table style="width:100%; height:100%;">
<tr><td style="background-color:black; color:white;"><label>SELECT NGOS</label>
<?php $a=0; ?>
@foreach($ggg as $ngod)
<tr><td><input type="checkbox" value="<?php echo $ngod->non; ?>" name="<?php echo "aa".$a; ?>"><?php echo $ngod->non; ?>
<?php $a++; ?>
@endforeach
</table>
</div>
<tr ><td><textarea rows="5" cols="35" placeholder="TYPE A MESSAGE" style="border:1px solid black;" name="message"></textarea>
<tr ><td><input type="file" style="margin-left:40px;" name="fileimage1"  />

<tr><td><input type="submit" value="SEND" style="background-color:black; margin-left:40px; width:100px; height:25px; color:white;"> 
</table>
{{ Form::close() }}
</div>
<!--CHAT BOx-->
<!--MESSAGE-->
<div style="width:300px; height:400px; overflow:auto; position:absolute;right:350px; display:none; top:50px; border:1px solid black; background-color:#666;" id="messagebox">
@foreach($mes as $ms)
<div style="width:90%; min-height:100px; height:auto; background-color:#CCC; border:1px solid black; float:left; margin-left:10px; margin-top:10px;">
<table style="width:100%; height:100%;" cellpadding="5px">
<tr><td><p style="color:#960;">{{{$ms->ngoname or $ms->ngoname=""}}}</p>
<tr><td><p>{{{$ms->message or $ms->message=""}}}</p>
<?php $a=$ms->fileimage1;
   if($a==null)
   	$b='none';
   else
   	$b="";
?>
<tr><td><img src="/FINALPROJECTPERSONAL/<?php echo $ms->ngoname;?>/MESSAGE/<?php echo $ms->fileimage1;?>" style="width:90%; height:100px; display:<?php echo $b;?>">
</table>
</div>
@endforeach
</div>
<!--MESSAGE-->




<!--MAIN-->
<div id="ngomain">




<!--MENU BAR-->
<div id="menu">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="#" style="height:44px;line-height:44px;" ><span>Event</span></a>
	<ul>
		<li class="subfirst"><a href="#" onClick="showevent1();">MAKE EVENT</a></li>
		<li ><a href="#" onClick="showevent2();">REQUEST EVENT</a></li>
		<li ><a href="#" onClick="showrequested();">CHECK REQUEST</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;">Upload </a><ul>
		<li class="subfirst"><a href="#" onClick="showuploadvideo1();">VIDEO</a></li>
		<li><a href="#" onClick="showuploadfile1();">IMAGES</a></li>
		
	</ul>
    </li>
	<!--<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" >UPDATE DETAILS</a></li>-->
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" >VOLUNTEER</a><ul>
		<li class="subfirst"><a href="#" onClick="showparticular();">PARTICULAR VOLUNTEER ({{{$cnt or $cnt=''}}})</a></li>
		<li><a href="#" onClick="showvolunteer();">OTHER VOLUNTEER</a></li>
		
	</ul></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" >AS A DONATOR</a><ul>
		<li class="subfirst"><a href="#" onClick="showdon();">DONATE TO NGO</a></li>
		<li><a href="#" onClick="showotherdon();">DONATION FROM NGO</a></li>
		
	</ul></li>
	
	
	
   
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" onclick="showinbox();">DONATION   ({{{$pvp or $pvp=''}}})</a></li>
	<li class="topmenu"><a href="#" style="height:44px;line-height:44px;" onclick="showmessage();">INBOX   ({{{$mescount or $mescount=''}}})</a></li>
	<li class="topmenu"><a href="#" onclick="deletengo();" style="height:44px;line-height:44px;">Delete ID</a></li>
	
</ul><p class="_css3m"><a href="http://css3menu.com/">CSS input Radio Button Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->
</div>
<!--MENU BAR-->





<!--iMAGE-->
<div id="image2">
<img src="/images/donations.jpg" lowsrc="images/3E_What_we_do.jpg" id="image22">
</div>
<!--iMAGE-->




<!--HEAD DIV OF EVENT-->
<div style="width:100%; height:auto; float:left;">








<!--EVENT-->
<div  id="sa" style="width:50%; min-width:700px; height:400px; border:1px solid black;  overflow:auto; float:left; ">
<div style="width:98%; height:40px; float:left; border:1px solid black; background-color:black;  "><p style="color:white; font-size:36px; margin-left:50px;">EVENTS</p></div>
<!--HH-->
@foreach($kk as $evn)
<div style="width:90%; height:400px; margin-top:10px; margin-left:20px;  border:1px solid black; background-color:#CCC; float:left; margin-bottom:5px;">

<div style="width:40%; height:60%; float:left;">
<img src="/FINALPROJECTPERSONAL/<?php echo $evn->non;?>/PHOTOS/<?php echo $evn->fileimage1;?>" style="width:100%; height:100%; margin-left:10px; border:1px solid black; background-image:url('/images/10448204_739992549394042_2706379719248067307_n.jpg'); background-repeat:no-repeat; background-size:cover;" alt="NO IMAGE...............!">
</div>

<!--JJ-->
<div style="width:50%; height:70%; float:left; margin-left:20px;">
<label style="text-decoration:underline; font-style:italic; "><strong>NAME OF NGO:</strong></label><br>
<div style="width:100%; height:30px auto;  margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->non or $evn->non=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic;"><strong>TOPIC OF EVENT:</strong></label><br>
<div style="width:100%; height:30px auto;  margin-left:15%; float:left;"><p style="color:#900;">{{{$evn->topic or $evn->topic=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic;"><strong>ADDRESS OF EVENT:</strong></label><br>
<div style="width:100%; height:100px auto;  float:left;"><p style="color:#900;">{{{$evn->address or $evn->address=''}}}</p></div><br>
<label style="text-decoration:underline; font-style:italic;"><strong>DATE OF EVENT:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$evn->dateofevent or $evn->dateofevent=''}}}</p></div>
<label style="text-decoration:underline; font-style:italic;"><strong>CONTACT NUMBER:</strong></label><br>
<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$evn->mobile or $evn->mobile=''}}}</p></div>

<div style="width:100%; height:20px auto; float:left;"><p style="color:#900;">{{{$evn->mobile2 or $evn->mobile2=''}}}</p></div>
</div>
<!--JJ-->


<label style="text-decoration:underline; font-style:italic;"><strong>DESCRIPTION:</strong></label><br>
<div style="width:100%; height:20px; float:left;"><p style="color:#900;">{{{$evn->descript or $evn->descript=''}}}</p></div>
</div>
<!--HH-->
@endforeach
</div>
<!--EVENT-->











<!--NGO-->

<div id="hjh" style="width:32%; min-width:200px; height:350px; float:left; border:1px solid black; overflow:auto; margin-left:20px; ">
<div style="width:90%; height:40px; float:left; background-color:black;  "><p style="color:white; font-size:36px; margin-left:30px;" >DONOR LIST</p></div>
<!--MONEY-->
@foreach($oo as $mon)
<div style="width:90%; height:200px auto; float:left; margin-top:10px; background-color:#CCC; border:1px solid black; margin-left:10px; margin-bottom:5px;">
<table style="width:100%; height:100%;">
<form method="post" action="/donationacceptmoney">
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>" readonly/>
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="email"readonly value="<?php echo $mon->email;?>">
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="nam"readonly value="<?php echo $mon->name;?>">
<tr><td><input type="text" value="<?php echo $mon->address;?>" cols="20" rows="3"  style="border:1px; resize:none; color:#900;  weight:150px auto; display:none;" name="address" readonly><p style="color:#900;"><?php echo $mon->address;?></p>
<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>DONATION MONEY:</strong></label>
<tr><td>Rs&nbsp;<input type="text" style="border:0px; color:#900;  background-color:#CCC;" name="money1" readonly value="<?php echo $mon->money1;?>" >
<tr><td ><input type="text"readonly style="border:0px; color:#900; background-color:#CCC;" name="city" value="<?php echo $mon->city;?>"><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="mobile" readonly value="<?php echo $mon->mobile;?>"> 
<tr><td colspan="2"><input type="submit" value="ACCEPT" style="background-color:black; color:white;" >
</form>
</table>
</div>
@endforeach
<!--MONEY-->


<!--ARTICle-->
@foreach($rr as $mon)
<div style="width:90%; height:200px auto; float:left; margin-top:10px; background-color:#CCC; border:1px solid black; margin-left:10px; margin-bottom:5px; ">
<table style="width:100%; height:100%;">
<form method="post" action="/donationacceptarticle">
<tr><td><input type="email" style="display:none;"  name="ema" value="<?php echo $ema; ?>"/>
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="email"  value="<?php echo $mon->ema;?>">
<tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="nam" value="<?php echo $mon->nam;?>">
<tr><td colspan="2"><input type="text" value="<?php echo $mon->address;?>"  style="border:0px; resize:none; color:#900; background-color:#CCC; height:auto; weight:150px; display:none;" name="address"><p style="color:#900;"><?php echo $mon->address;?></p>

<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>DONATION ARTICLE:</strong></label><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="articlename" value="<?php echo $mon->article;?>" >
<tr><td><label style="text-decoration:underline; font-style:italic;"><strong>QUANTITY:</strong></label><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="quantity" value="<?php echo $mon->quantity;?>" >
<tr><td ><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="city" value="<?php echo $mon->city;?>"><tr><td><input type="text" style="border:0px; color:#900; background-color:#CCC;" name="mobile" value="<?php echo $mon->mobile;?>"> 
<tr><td colspan="2"><input type="submit" value="ACCEPT" style="background-color:black; color:white;" >
</form>
</table>
</div>
@endforeach
<!--ARTICLE-->
</div>
<!--NGO-->




</div>
<!--HEAD DIV OF EVENT-->

</div>
<!--MAIN-->
</body>
</html>


