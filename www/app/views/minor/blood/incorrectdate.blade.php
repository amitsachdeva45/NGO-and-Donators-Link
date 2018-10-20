<html>
<script type="text/javascript">
alert('!!Please Enter Future Date!!');
</script>
<style>
a.a1
{
	color:red;
	background-color: black;
	font-size: 20px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
    position: absolute;
    top:70px;
    left: 90px;
}
a.a2
{
	color:red;
	background-color: black;
	font-size: 20px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
    position: absolute;
    top:70px;
    left:340px;

}
a.a3
{
	color:red;
	background-color: black;
	font-size: 20px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
    position: absolute;
    top:70px;
    left:530px;

}
a.a4
{
	color:red;
	background-color: black;
	font-size: 20px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
    position: absolute;
    top:70px;
    left:790px;

}
a.a5
{
	color:red;
	background-color: black;
	font-size: 20px;
	font-family: Courier New;
	text-decoration: none;
	padding-top: 15px;
    padding-right: 15px;
    padding-bottom: 15px;
    padding-left: 15px;
    position: absolute;
    top:70px;
    left:1100px;

}
a.a1:hover
{
	color:white;
	background-color: grey;
	text-decoration: none;
}
a.a2:hover
{
	color:white;
	background-color: grey;
	text-decoration: none;
}
a.a3:hover
{
	color:white;
	background-color: grey;
	text-decoration: none;
}
a.a4:hover
{
	color:white;
	background-color: grey;
	text-decoration: none;
}
a.a5:hover
{
	color:white;
	background-color: grey;
	text-decoration: none;
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
    left:85px;

}
p.a11
{
	color:#E0FFFF;
	font-size: 15px;
	font-family: Courier New;
    position: absolute;
    top:440px;
    left:58px;

}
label.a12
{
    position: absolute;
    top:490px;
    left:105px;
    text-decoration:underline;
    color:black;
}
input.a13
{
    position: absolute;
    top:520px;
    left:73px;
    width:180px;
}
input.a14
{
    position: absolute;
    top:560px;
    left:130px;
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
body
{
	background-image: url("/css/blood/back11.jpg");
}
div.d1
{
	color:yellow;
}
p.a6
{
	position: absolute;
	top:150px;
	left:580px;
	font-size: 35px;
	font-family: comic sans MS;
	color:white;
	text-decoration: underline;
}
div.a7
{
	position: absolute;
	top:280px;
	left:520px;
	font-size: 18px;
	font-family: gadget;
	color: black;
}
</style>
<BODY>
	<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:400px;border-radius: 50px;left:40px;background-color:red;"></div>
	<p class="a10"><i><b>Exisiting Donar</b></i><p>
	<p class="a11">!!Want to Donate Again!!<p>
		<form action="/blood/alreadyuser" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label class="a12">Enter EmailId:</label>
			<input class="a13" type="text" name="exemail" required>
			<input class="a14" type="submit" value="Submit" name="submit">
		</form>
	<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:160px;border-radius: 50px;
left:40px;background-color:red;">
	<p class="a15"><i><b>Who Can Donate?</b></i>
		<ul class="a16">
			<li>Your haemoglobin is 12.5 gm% minimum.</li>
			<li>Your weight is 45 kgs or more.</li>
			<li>Your last blood donation was 3 months earlier.</li>
			<li>You are between age group of Eighteen to Sixty years.</li>
		</ul></div>
		<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:160px;border-radius: 50px;
left:1090px;background-color:red;">
	<p class="a18"><i><b>Blood Donation Facts</b></i>
		<ul class="a19">
			<li>Every year our nation requires about 4 Crore units of blood.</li>
			<li>Every two seconds someone needs blood.</li>
			<li>Blood makes up about 7 percent of your body's weight.</li>
			<li>There is no substitute for human blood.</li>
		</ul></div>
		<div style="width:250px;height:200px;border:4px solid black;position:absolute;top:400px;border-radius: 50px;
left:1090px;background-color:red;">
	<p class="a20"><i><b>Types Of Blood Donation:</b></i>
		<ul class="a21">
			<li><b class="a22">Whole Blood-</b>
			Help pregnant mothers and infants.</li>
			<li><b class="a22">Red Cells-</b>
Help multiple patients with one donation.</li>
			<li><b class="a22">Plasma-</b>
Help trauma victims, burn victims and surgery patients.</li>
		</ul></div>
		<a href="/blood" style="position:absolute;left:35px;top:70px;">
	<img src="/css/blood/home.jpg" alt="Home" width="50" height="55" title="Home"></a>
	<a class="a1" href="/blood/donarreg"><b>Donar Registration</b></a>
	<a class="a2" href="/blood/searchdonar"><b>Search Donars</b></a>
	<a class="a3" href="/blood/urgent"><b>Urgent Blood Need!!</b></a>
	<a class="a4" href="/blood/bloodrequest"><b>Post Your Blood Request</b></a>
	<a class="a5" href="/blood/seebloodrequest"><b>See Blood Requests</b></a>
		<p class="a6"><b>Request Blood</b></p>
	<div class="a7">

		<form action="/blood/requested" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="d1"><b style="padding-right:110px;">Patient's Name:</b>    <input type="text" name="rfullname" required><br><br>
		<b style="padding-right:50px;">Required Blood Group:</b>          <select name="rbloodgroup">
										<option>A+</option>
										<option>B+</option>
										<option>AB+</option>
										<option>O+</option>
										<option>A-</option>
										<option>B-</option>
										<option>AB-</option>
										<option>O-</option>
															
			</select><br><br>
			<b style="padding-right:165px;">Hospital Name and<br>Address:</b><textarea name="raddress" required></textarea><br><br>
			<b style="padding-right:190px;">City:</b>    <input type="text" name="rcity" required><br><br>
			<b style="padding-right:38px;">How many units needed:</b>    <input type="text" name="runit" required><br><br>
			<b style="padding-right:100px;">When Required:</b>   <input id="in"type="date" name="rdate" required><br><br>
			<b style="padding-right:92px;">Contact Number:</b>   <input type="text" name="rmobile" required><br><br>
			<b style="padding-right:112px;">Other Message:</b><textarea name="rmessage" required></textarea><br><br><br>
			<input type="submit" style="position:absolute;right:170px;" name="submit" value="Request">
</div>
		</form>		
	</div>
</body>
</html>