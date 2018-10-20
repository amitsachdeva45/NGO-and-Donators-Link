@extends('minor.blood.bloodmaster')
@extends('minor.blood.bloodcontent')
@section('head')
body
{
	background-image: url("/css/blood/back11.jpg");
}
p.aa6
{
	position: absolute;
	top:140px;
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
	left:150px;
	font-size: 18px;
	font-family: courier New;
	color: blue;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
td
{
	width:200px;
}
table#t01 tr:nth-child(even) {
    background-color: #F0F0F0;
    color:black;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th	{
    background-color: #202020;
    color: #00BFFF;
}
@stop

@section('body')
				<p class="aa6"><b>Blood Requests:</b></p>
			@foreach($data as $row)
				<br>
				<table id="t01" style="position:relative;left:525px;top:-500px;">
					<tr>
						<th>Blood Group Required</th>
						<td>{{$row->bloodgroup}}
					</tr>
					<tr>
						<th>Hospital Name And Address</th>
						<td>{{$row->address}}
					</tr>
					<tr>
						<th>Units Needed</th>
						<td>{{$row->uni2}}
					</tr>
					<tr>
						<th>When Required</th>
						<td>{{$row->whe1}}
					</tr>
					<tr>
						<th>Contact No.</th>
						<td>{{$row->mobile}}
					</tr>
					<tr>
						<th style="width:300px;">Message</th>
						<td>{{$row->message}}
					</tr>
					<br><br>
				</table>
			@endforeach
@stop






