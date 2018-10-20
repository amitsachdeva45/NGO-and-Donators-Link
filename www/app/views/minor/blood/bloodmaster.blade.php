<!Doctype html>
<html>
@yield('script')
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
    left: 190px;
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
    left:440px;

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
    left:630px;

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
    left:890px;

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
    left:1200px;

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

@yield('head')
</style>
<body>
<a href="/"><input type="button" style="position:absolute;left:0px; top:50px; background-color:black; color:white;border:1px solid white; width:100px; height:35px;" value="HOME"></a>
	<a href="/blood" style="position:absolute;left:135px;top:70px;">
	<img src="/css/blood/home.jpg" alt="Home" width="50" height="55" title="Home"></a>
	<a class="a1" href="/blood/donarreg"><b>Donor Registration</b></a>
	<a class="a2" href="/blood/searchdonar"><b>Search Donors</b></a>
	<a class="a3" href="/blood/urgent"><b>Urgent Blood Need!!</b></a>
	<a class="a4" href="/blood/bloodrequest"><b>Post Your Blood Request</b></a>
	<a class="a5" href="/blood/seebloodrequest"><b>See Blood Requests</b></a>
@yield('body')
</body>
</html>