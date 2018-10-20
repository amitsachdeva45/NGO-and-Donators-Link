<!DOCTYPE html >
<head>
  <!-- Start css3menu.com HEAD section -->
  <link rel="stylesheet" type="text/css" href="\css\style.css">
</head>
<head>
  <style>._css3m{display:none}</style>
  <!-- End css3menu.com HEAD section -->
<script type="text/javascript" src="jquery-1.8.2.min"></script>
<style type="text/css">
*
{
  margin:0px;
  border:0px;
  outline:0px;
}
body,html
{
  width:85%; height: 100%; margin: auto; margin-top: -10px;
  min-height: 100%;
}
#heading{width:100%; height:93px auto; }
#header1{width:100%; height:56px ;  background-color:#0CF; }
#search1{width:20%; height:50%; float:left; border:1px solid black; background-color:white; margin-top:10px; margin-left:3%;}
#font1{ margin-left:5%;   width:30%; height:95%; float:left; }
#input1{ width:48%; height:100%; color:white;  background-color:#06F; margin-left:2px; cursor:pointer; font-weight:bold; }
#input1:hover{width:48%; height:100%; color:#06F;  background-color:#999999; font-weight:bold; text-shadow:#000; margin-left:2px; cursor:pointer;}
#search11{width:64%; height:20px; }
#search12{width:32%; height:20px;  background-color:#0CF;  margin-top:1.5%;  color:white;  cursor:pointer;  }
div.a2
{
  background-color: blue;
  height: 100%;
  width:30%;
  margin-left: 0%;
  margin-top: -66%;
}

div.a7
{
  background-color: grey;
  height: 100%;
  width:70%;
  margin-left: 30%;
  margin-top: -2.1%;
}
@yield('sidebar')
</style>
</head>

<body>
 <div id="heading">
     			   <!-- IMAGE ---> <!-- margin-top create problem use float:left-->
                  `<div id="header1">
                     
                     <!--POST LARGE DATA AND SAFETY PURPOSE AND SEARCH OPTION--->
                     <div id="search1">
                     <form enctype="">
                     <input type="text" placeholder="SEARCH" id="search11" style="border:0px;" onKeyUp="" /><input type="submit" value="SEARCH" id="search12"   /></form>          </div>
                     <!--POST LARGE DATA AND SAFETY PURPOSE AND SEARCH OPTION--->
                     <!--TITLE-->
                       <div STYLE="     width:25% ;  height:38% auto; margin-left:11%; margin-top:1.1%;  float:left; ">
                       <FONT  style="font-style:italic; font-size:170%; width:100%; height:100% auto;  " COLOR="white">LIGHT The Future</FONT>
                        </div>
                        <!--TITLE-->
                       <!--LOGIN AND SIGNUP-->
                         <div id="font1">
                         <input type="button" value="LOGIN" onClick="showlogin1();" id="input1"/><input type="button" value="SIGNUP" onClick="showsignup1();" id="input1" />   
                         </div>
                       <!--LOGIN AND SIGNUP-->   
                 
                 </div>
                   <!-- IMAGE ---> <!-- margin-top create problem use float:left-->
			     <!--BUTTON-->
      <div id="button1">
      <ul id="css3menu1" class="topmenu" style="width:100%;  margin-left:-0.04%;  height:37px;">
	<li class="topfirst"><a href="#" style="height:16px;line-height:16px;"><span>ABOUT US</span></a>
	</li>
	
    <li class="topmenu"><a href="#" style="height:16px;line-height:16px;"><span>REGISTERED NGO</span></a>
	</li>
	
    <li class="topmenu"><a href="#" style="height:16px;line-height:16px;"><span>UPCOMING EVENTS<span></a>
	</li>
	
    <li class="topmenu"><a href="#" style="height:16px;line-height:16px;">GALLERY</a></li>
	
    <li class="topmenu"><a href="#" style="height:16px;line-height:16px;"><span>GET INVOLVED</span></a>
	<ul>
		
		<li><a href="#">AS A DONOR</a>
        <ul>
			<li class="subfirst"><a href="#">MONEY</a></li>
            <li class="subfirst"><a href="#">ARTICLE</a></li>
		</ul>
        </li>
       
		<li><a href="ass">AS A NGO</a></li>
		<li><a href="#">AS A VOLUNTEER</a></li>
	</ul></li>
	
    <li class="toplast"><a href="bd.html" target="_blank" style="height:16px;line-height:16px;">BLOOD DONATION</a></li>
   
    <li class="toplast"><a href="bd.html" target="_blank" style="height:16px;line-height:16px;">CONTACT US</a></li>
</ul><p class="_css3m"><a href="http://css3menu.com/"></a></p>

       </div>
       <!--BUTTON-->
      </div>
     <p> {{$user1}}</p>  
      <p>{{$user2}}</p>  
   @yield('content')
<div class="a7"></div>
<div class="a2"></div>
</body>
</html>
