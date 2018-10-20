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
	top:40px;
	left:17.5%;
}
p.a5
{
	position: absolute;
	left:16%;
	font-family: Courier New;
	font-size: 20px;
	top:240px;
	color:white; 
}
button.a6
{
	position: absolute;
	top:280px;
	left:23.5%;
}
@stop
@section('content')
<p class="a1"><b>Filter</b>:</p>
<p class="a3"><b>City</b>:<input type="text"></input>
<button class="a4" type="button">OK</button><br>
<p class="a5"><b>Search:</b><input type="text" style="width:150px"></input></p>
<button class="a6" type="button">OK</button><br>
@stop