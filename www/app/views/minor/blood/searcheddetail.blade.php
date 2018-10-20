@extends('minor.blood.bloodmaster')
@extends('minor.blood.bloodcontent')
@section('head')
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
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
p.a6
{
	position: absolute;
	top:120px;
	left:660px;
	font-size: 40px;
	font-family: comic sans MS;
	color:white;
	text-decoration: underline;
}
body,html
{
	background-image: url("/css/blood/back11.jpg");
	background-size:cover;
	width:100%;
	min-height:100%;
}
@stop
@section('body')
				<p class="a6"><b>Donor's List</b></p>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
			@foreach($donarsdata as $donar)
				<br>
				<table id="t01" style="position:relative;left:410px;top:-750px">
					<tr>
						<th>Name</th>
						<th>Gender</th>
						<th>Blood-Group</th>
						<th>Contact No.</th>
						<th>Email ID</th>
						<th>Address</th>
					</tr>
					<tr>
						<td><b>{{$donar->name}}</b></td>
						<td><b>{{$donar->gender}}</b></td>
				    	<td><b>{{$donar->bloodgroup}}</b></td>
				    	<td><b>{{$donar->mobileno}}</b></td>
				    	<td style="width:180px;"><b>{{$donar->email}}</b></td>
				    	<td style="width:180px;height:70px;"><b>{{$donar->address}}</b></td>
					</tr>
					<br><br>
			    </table>
			@endforeach
@stop