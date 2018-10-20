@extends('minor.blood.bloodmaster')
@extends('minor.blood.bloodcontent')
@section('head')
p.a6
{
	position: absolute;
	top:180px;
	left:660px;
	font-size: 40px;
	font-family: comic sans MS;
	color:white;
	text-decoration: underline;
}
p.a7
{
	position: absolute;
	top:290px;
	left:620px;
	font-size: 25px;
	font-family: comic sans MS;
	color:yellow;
	text-decoration: none;
}
body
{
	background-image: url("/css/blood/back11.jpg");
}
@stop
@section('body')
				<p class="a6"><b>Donor's List</b></p>
				<p class="a7">!! Sorry No Donor Available !!</p
@stop