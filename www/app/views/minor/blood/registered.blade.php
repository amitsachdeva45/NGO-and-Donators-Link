@extends('minor.blood.bloodmaster')
@extends('minor.blood.bloodcontent')
@section('script')
@yield('message');
@stop
@section('head')
body
{
	background-image: url("/css/blood/back11.jpg");
}
p.aa6
{
	position: absolute;
	top:120px;
	left:670px;
	font-size: 35px;
	font-family: comic sans MS;
	color:white;
	text-decoration: underline;
}
p.aa7
{
	position: absolute;
	top:210px;
	left:520px;
	font-size: 30px;
	font-family: comic sans MS;
	color:yellow;
	text-decoration: none;
}
p.aa8
{
	font-family: Comic Sans MS;
	font-size: 18px;
	color: green;
	position: absolute;
	left: 620px;
	top:300px;
}
p.aa9
{
	font-family: Comic Sans MS;
	font-size: 18px;
	color: green;
	position: absolute;
	left: 820px;
	top:340px;
}
p.aa10
{
	font-family: Comic Sans MS;
	font-size: 18px;
	color: green;
	position: absolute;
	left: 620px;
	top:380px;
}
p.aa11
{
	font-family: Comic Sans MS;
	font-size: 18px;
	color: green;
	position: absolute;
	left: 820px;
	top:420px;
}
@stop

@section('body')
				<p class="aa6"><b>Thank You</b></p>
				<p class="aa7">!! You have Registered Successfully !!</p>
				<p class="aa8"><i><b>Share a Little,Care a Little-</b></i></p>
				<p class="aa9"><i><b>Donate Blood.</b></i></p>
				<p class="aa10"><i><b>Excuses never save a life,</b></i></p>
				<p class="aa11"><i><b>Blood Donation does.</i></p>
@stop