@extends('minor.blood.bloodmaster')
@extends('minor.blood.bloodcontent')
@section('head')
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
	left:650px;
	font-size: 35px;
	font-family: comic sans MS;
	color:white;
	text-decoration: underline;
}
div.a7
{
	position: absolute;
	top:280px;
	left:620px;
	font-size: 18px;
	font-family: gadget;
	color: black;
}
@stop

@section('body')
				<p class="a6"><b>Find a Donor</b></p>
	<div class="a7">

		<form action="/blood/search" method="post">
						<!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
			<div class="d1"><b style="padding-right:110px;">State:</b>    <select name="sstate">
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
</select>
<br><br>
			<b style="padding-right:115px;">City:</b>    <input type="text" name="scity" required><br><br>
			<b style="padding-right:50px;">Blood Group:</b>          <select name="sbloodgroup">
										<option>A+</option>
										<option>B+</option>
										<option>AB+</option>
										<option>O+</option>
										<option>A-</option>
										<option>B-</option>
										<option>AB-</option>
										<option>O-</option>
															
			</select><br><br>
			<input type="submit" style="position:absolute;right:120px;" name="submit" value="Search Donars >>">
		</div>


<!-- Script by hscripts.com -->
<!-- Script by hscripts.com -->



		</form>		
	</div>
@stop