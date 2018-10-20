@extends('minor.tophead')
@section('sidebar')
p.a1
{
	position: absolute;
	left:21%;
	font-family: Courier New;
	font-size: 20px;
	top:130px;
	right:40%;
	color:white; 
}

p.a3
{
	position: absolute;
	left:16%;
	font-family: Courier New;
	font-size: 20px;
	top:160px;
	right:40%;
	color:white; 
}
button.a4
{
	position: absolute;
	top:50px;
	left:17.5%;
}
@stop
@section('content')
<p class="a1"><b>Filter</b>:</p>
<p class="a3"><b>City</b>:<input type="text"></input>
<button class="a4" type="button">OK</button><br>
@stop