@extends('minor.blood.bloodmaster')
@extends('minor.blood.bloodcontent')
@section('script')
@yield('message')
<script type="text/javascript">
function func() 
{
  var aa = document.getElementById('in').value;
  var bb=new Date();
  var y=aa.slice(0,4);
  var m=aa.slice(5,7);
  var d=aa.slice(8,10);
  if((y<=(bb.getFullYear()-18) && y>=(bb.getFullYear()-60))!=1) 
  {
    alert('!! Yor are not Eligible to Donate Blood. !!\nDonor should have born In/Before '+(bb.getFullYear()-18)+' and In/After '+(bb.getFullYear()-60)+'.');
    return false;
  }
}
</script>
@stop
@section('head')
body
{
	background-image: url("/css/blood/back11.jpg");
}
p.aa6
{
	position: absolute;
	top:170px;
	left:550px;
	font-size: 35px;
	font-family: comic sans MS;
	color:white;
	text-decoration: underline;
}
div.aa7
{
	position: absolute;
	top:280px;
	left:620px;
	font-size: 18px;
	font-family: gadget;
	color: black;
}
div#d1
{
	color:yellow;
	position:absolute;
	left:-10px;
}
a.aa8
{
	position:absolute;
	left:1300px;
	top:250px;
	font-size:20px;
	background-color:blue;
	color:grey;
	text-decoration:none;
	width:100px;
}
@stop

@section('body')
				<p class="aa6"><b>Register as a Blood Donor</b></p>
	<div class="aa7">

		<form action="/blood/registered" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div id="d1"><b style="padding-right:70px" id="b1">Full Name:</b>    <input type="text" name="dfullname" required><br><br>
			<b style="padding-right:90px;">Gender:</b>     <input type="radio" name="dgender" value="Male" checked required><b style="color:red;">Male</b>
						   <input type="radio" name="dgender" value="Female" required><b style="color:red;">Female</b><br><br>
			<b style="padding-right:50px;">Date of Birth:</b> 			   <input type="date" id="in" name="ddate" value="date" required><br><br>
			<b style="padding-right:50px;">Blood Group:</b>          <select name="dbloodgroup">
										<option>A+</option>
										<option>B+</option>
										<option>AB+</option>
										<option>O+</option>
										<option>A-</option>
										<option>B-</option>
										<option>AB-</option>
										<option>O-</option>
															
			</select><br><br>
			<b style="padding-right:30px;">Mobile Number:</b>       <input type="text" name="dmobile" required><br><br>
			<b style="padding-right:85px;">Email Id:</b>       <input type="email" name="demail" required><br><br>
			<b style="padding-right:90px;">Address:</b>       <textarea name="daddress" required></textarea><br><br>
			<b style="padding-right:120px;">State:</b><select name="dstate">
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select><br><br>
			<b style="padding-right:125px;">City:</b><input type="text" name="dcity" required><br><br><br>
			<input type="submit" onClick="return func()" style="position:absolute;right:120px;" name="dsubmit" value="Register">
		</div>


		</form>		
	</div>
@stop