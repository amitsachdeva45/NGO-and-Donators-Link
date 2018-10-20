@extends('minor.blood.bloodmaster')
@section('head')

div#wowslider-container1
{
	position: absolute;
	top:150px;
	left: 450px;
}
body
{
	background-image: url("/css/blood/back11.jpg");
}
p.aa10
{
	color:yellow;
	background-color: black;
	font-size: 16px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    padding-left: 8px;
    position: absolute;
    top:400px;
    left:185px;

}
p.aa11
{
	color:#E0FFFF;
	font-size: 15px;
	font-family: Courier New;
    position: absolute;
    top:440px;
    left:158px;

}
label.aa12
{
    position: absolute;
    top:490px;
    left:205px;
    text-decoration:underline;
    color:black;
}
input.aa13
{
    position: absolute;
    top:520px;
    left:173px;
    width:180px;
}
input.aa14
{
    position: absolute;
    top:560px;
    left:230px;
}
p.aa15
{
	color:yellow;
	background-color: black;
	font-size: 16px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    padding-left: 8px;
    position: absolute;
    top:-1px;
    left:45px;

}
ul.aa16
{
    display: block;
    list-style-type: disc;
    margin-top: 1em;
    margin-bottom: 1 em;
    margin-left: 0;
    margin-right: 0;
    padding-left: 40px;
    position:absolute;
    left:-5px;
    top:36px;
    color:#E0FFFF;
}
img.aa17
{
	position:absolute;
	left:315px;
	top:150px;
	height:450px;
	border-radius:650px;
}
p.aa18
{
	color:yellow;
	background-color: black;
	font-size: 15px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    padding-left: 8px;
    position: absolute;
    top:-1px;
    left:32px;

}
ul.aa19
{
    display: block;
    list-style-type: disc;
    margin-top: 1em;
    margin-bottom: 1 em;
    margin-left: 0;
    margin-right: 0;
    padding-left: 40px;
    position:absolute;
    left:-5px;
    top:36px;
    color:#E0FFFF;
}
p.aa20
{
	color:yellow;
	background-color: black;
	font-size: 14px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    padding-left: 8px;
    position: absolute;
    top:-1px;
    left:25px;

}
ul.aa21
{
    display: block;
    list-style-type: disc;
    margin-top: 1em;
    margin-bottom: 1 em;
    margin-left: 0;
    margin-right: 0;
    padding-left: 40px;
    position:absolute;
    left:-5px;
    top:36px;
    color:#E0FFFF;
}
b.aa22
{
	color:black;
	text-decoration:underline;
}

@stop
@section('script')
<head><link rel="stylesheet" type="text/css" href="/css/engine1/style.css" /></head>
	<script type="text/javascript" src="/css/engine1/jquery.js"></script>
		<script type="text/javascript" src="/css/engine1/wowslider.js"></script>
	<script type="text/javascript" src="/css/engine1/script.js"></script>
	@yield('message')
@stop
@section('body')
	<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:400px;border-radius: 50px;left:140px;background-color:red;"></div>
	<p class="aa10"><i><b>Exisiting Donor</b></i><p>
	<p class="aa11">!!Want to Donate Again!!<p>
		<form action="/blood/alreadyuser" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label class="aa12">Enter EmailId:</label>
			<input class="aa13" type="text" name="exemail" required>
			<input class="aa14" type="submit" value="Submit" name="submit">
		</form>
	<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:160px;border-radius: 50px;
left:140px;background-color:red;">
	<p class="aa15"><i><b>Who Can Donate?</b></i>
		<ul class="aa16">
			<li>Your haemoglobin is 12.5 gm% minimum.</li>
			<li>Your weight is 45 kgs or more.</li>
			<li>Your last blood donation was 3 months earlier.</li>
			<li>You are between age group of Eighteen to Sixty years.</li>
		</ul></div>
<!--		<img class="aa17" src="/css/blood/header.jpg">      -->
		<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:160px;border-radius: 50px;
left:1190px;background-color:red;">
	<p class="aa18"><i><b>Blood Donation Facts</b></i>
		<ul class="aa19">
			<li>Every year our nation requires about 4 Crore units of blood.</li>
			<li>Every two seconds someone needs blood.</li>
			<li>Blood makes up about 7 percent of your body's weight.</li>
			<li>There is no substitute for human blood.</li>
		</ul></div>
		<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:400px;border-radius: 50px;
left:1190px;background-color:red;">
	<p class="aa20"><i><b>Types Of Blood Donation</b></i>
		<ul class="aa21">
			<li><b class="aa22">Whole Blood-</b>
			Help pregnant mothers and infants.</li>
			<li><b class="aa22">Red Cells-</b>
Help multiple patients with one donation.</li>
			<li><b class="aa22">Plasma-</b>
Help trauma victims, burn victims and surgery patients.</li>
		</ul></div>


		<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="/css/data1/images/1366768565098.jpg" style="border-radius:200px;"alt="1366-768-565098" title="" id="wows1_0"/></li>
		<li><img src="/css/data1/images/blood_donor_day_poster_by_mohamedraoofd53k76e.jpg" alt="blood_donor_day_poster_by_mohamedraoof-d53k76e" style="border-radius:200px;" title="" id="wows1_1"/></li>
		<li><a href="http://wowslider.net"><img src="/css/data1/images/maxresdefault.jpg" style="border-radius:200px;" alt="http://wowslider.net/" title="" id="wows1_2"/></a></li>
		<li><img src="/css/data1/images/stretched565097.jpg" alt="stretched-565097" title="" id="wows1_3" style="border-radius:200px;"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="/css/data1/tooltips/1366768565098.jpg" alt="1366-768-565098"/>1</span></a>
		<a href="#" title=""><span><img src="/css/data1/tooltips/blood_donor_day_poster_by_mohamedraoofd53k76e.jpg" alt="blood_donor_day_poster_by_mohamedraoof-d53k76e"/>2</span></a>
		<a href="#" title=""><span><img src="/css/data1/tooltips/maxresdefault.jpg" alt="maxresdefault"/>3</span></a>
		<a href="#" title=""><span><img src="/css/data1/tooltips/stretched565097.jpg" alt="stretched-565097"/>4</span></a>
	</div></div>
	<!-- End WOWSlider.com BODY section -->

@stop