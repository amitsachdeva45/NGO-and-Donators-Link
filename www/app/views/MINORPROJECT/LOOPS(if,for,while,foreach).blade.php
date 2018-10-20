<!DOCtype html>
<html>
<body>
<h1>IF ELSE </h1>
<br>
@if(count($friends)==1)
I HAVE FRIEND CALLED{{$friends[0] /*echo $friends[0]*/}}


@elseif(count($friends)>1)
			I HAVE MULITPLE FRIENDS<br>
			@foreach($friends as $friend)<br>
			 I have a frined called {{$friend}}
 			@endforeach

@else
I HVE VERY LONELY
@endif


<br><br>
<h1>LOOP</h1>
@for($i=0;$i<10;$i++)
Current value of i is {{$i}}
<br>
@endfor


{{$i=0}}
@while($i!=5)
{{++$i}}



@endwhile
</body>
</html>