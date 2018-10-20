@extends('minor.blood.bloodmaster')
@extends('minor.blood.bloodcontent')
@section('script')
<script type="text/javascript">
function func() 
{
  var aa = document.getElementById('in').value;
  var bb=new Date();
  var y=aa.slice(0,4);
  var m=aa.slice(5,7);
  var d=aa.slice(8,10);
  if((y>=bb.getFullYear() && m>=(bb.getMonth()+1) && d>=bb.getDate())!=1) {
    alert('!!Please Enter Current Or Future Date!!');
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
div.d1
{
	color:yellow;
}
p.a6
{
	position: absolute;
	top:150px;
	left:680px;
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
			<b style="padding-right:100px;">When Required:</b>   <input id="in" type="date" name="rdate" required><br><br>
			<b style="padding-right:92px;">Contact Number:</b>   <input type="text" name="rmobile" required><br><br>
			<b style="padding-right:112px;">Other Message:</b><textarea name="rmessage" required></textarea><br><br><br>
			<input type="submit" onClick="return func()" style="position:absolute;right:170px;" name="submit" value="Request">
</div>
		</form>		
	</div>
@stop