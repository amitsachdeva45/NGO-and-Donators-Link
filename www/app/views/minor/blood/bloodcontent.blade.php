<html>
<style>
body,html{width:100%; min-height: 100%;}
#main{
    width: 80%; height: 100%; margin:auto;
}
p.a10
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
p.a11
{
	color:#E0FFFF;
	font-size: 15px;
	font-family: Courier New;
    position: absolute;
    top:440px;
    left:158px;

}
label.a12
{
    position: absolute;
    top:490px;
    left:205px;
    text-decoration:underline;
    color:black;
}
input.a13
{
    position: absolute;
    top:520px;
    left:173px;
    width:180px;
}
input.a14
{
    position: absolute;
    top:560px;
    left:230px;
}
p.a15
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
ul.a16
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
p.a18
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
ul.a19
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
p.a20
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
ul.a21
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
b.a22
{
	color:black;
	text-decoration:underline;
}
</style>
<BODY>
<div id="main">
	<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:400px;border-radius: 50px;left:140px;background-color:red;"></div>
	<p class="a10"><i><b>Exisiting Donar</b></i><p>
	<p class="a11">!!Want to Donate Again!!<p>
		<form action="/blood/alreadyuser" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label class="a12">Enter EmailId:</label>
			<input class="a13" type="text" name="exemail" required>
			<input class="a14" type="submit" value="Submit" name="submit">
		</form>
	<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:160px;border-radius: 50px;
left:140px;background-color:red;">
	<p class="a15"><i><b>Who Can Donate?</b></i>
		<ul class="a16">
			<li>Your haemoglobin is 12.5 gm% minimum.</li>
			<li>Your weight is 45 kgs or more.</li>
			<li>Your last blood donation was 3 months earlier.</li>
			<li>You are between age group of Eighteen to Sixty years.</li>
		</ul></div>
		<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:160px;border-radius: 50px;
left:1190px;background-color:red;">
	<p class="a18"><i><b>Blood Donation Facts</b></i>
		<ul class="a19">
			<li>Every year our nation requires about 4 Crore units of blood.</li>
			<li>Every two seconds someone needs blood.</li>
			<li>Blood makes up about 7 percent of your body's weight.</li>
			<li>There is no substitute for human blood.</li>
		</ul></div>
		<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:400px;border-radius: 50px;
left:1190px;background-color:red;">
	<p class="a20"><i><b>Types Of Blood Donation</b></i>
		<ul class="a21">
			<li><b class="a22">Whole Blood-</b>
			Help pregnant mothers and infants.</li>
			<li><b class="a22">Red Cells-</b>
Help multiple patients with one donation.</li>
			<li><b class="a22">Plasma-</b>
Help trauma victims, burn victims and surgery patients.</li>
		</ul></div>
        </div>
</body>
</html>