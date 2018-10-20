<?php
                   //******* VIDEO 9 if else*******//

/*Route::get('/',function()

{
	$list=array('HARRY','AMIT','GAGA');
	return View::make('MINORPROJECT/variable1')->withfriends($list);
}

	);*/
/*
HOW TO RUN IN varaible1 page and {{$friends[0]}} is equal to //echo $friends[0]
                           
                          1) IF ELSE STAEMENT
@if(count($friends)==1)
I HAVE FRIEND CALLED{{$friends[0] }}    
@elseif(count($friends)>1)

I HAVE MULITPLE FRIENDS<br>
			@foreach($friends as $friend)<br>
			 I have a frined called {{$friend}}
 			@endforeach
@else
I HVE VERY LONELY
@endif
     
      OR

@unless('RUN if IS NOT TRUE')
@endunless
                        
                          2)  FOR LOOP

 <h1>LOOP</h1>
@for($i=0;$i<10;$i++)
Current value of i is {{$i}}
<br>
@endfor
							3)foreach

			I HAVE MULITPLE FRIENDS<br>
			@foreach($friends as $friend)<br>
			 I have a frined called {{$friend}}
 			@endforeach

 								4)WHILE LOOP
 								{{$i=0}}
								@while($i!=5)
								{{++$i}}


*/




                   //****VIDEO 8 VARIABLE PASS****/

/*                              PART 1

Route::get('test/{anything?}',function($anything='')
{return View::make('MINORPROJECT/variable1')->with('somevariable',$anything);
}	);//localhost:82/test/hhhh

*/


/*                            PART  2

Route::get('/', function () {
	$animal1='LION';
	$animal2='CHEETAH';
	$animal3='JAGUAR';
	$animal4='Pigeon';
	$list=array($animal1,$animal2,$animal3,$animal4);
                     //** 1)ARRAY**
	return View::make('MINORPROJECT/variable1')->with('list',$list);
	//<!--on variable1 page-->
	//<h1>{{$list[0]}}</h1>
	//<h1>{{$list[1]}}</h1>
	//<h1>{{$lsit[2]}}</h1>
	//<h1>{{$list[3]}}</h1>

                    //**2)MAGIC METHOD**
	 return view('MINORPROJECT/variable1')->withSomevariable($animal1);


                   //** 3)MULTIPLE VARIABLE**

//2nd way 
return view('MINORPROJECT/variable1',array('somevariable'=>$animal2,'somevariable2'=>$animal3));

//1st WAy
return view('MINORPROJECT/variable1')->with('somevariable',$animal1)->with('somevariable2',$animal2);

//<h1>{{$somevariable}}{{$somevariable1}}</h1><br>



                   //**4)SINGLE VARIABLE**
    
    //2nd way to pass single variable  
   return view('MINORPROJECT/variable1',array('somevariable'=>$animal2));
    
    //1 way to pass variable in ppp1 in minorproject page single variable
    return view('MINORPROJECT/variable1')->with('somevariable',$animal1);  //WELCOME.blade.php
});
//h1>{{$somevariable}}</h1><br>


//localhost:82

*/






//********************VIDEO 6&7 VIEW ON FIRST PAGe*****************************//
// DIFFERENT OF CALLING FIRST PAGE :)


//1st WAy
/*Route::get('milkshakes', function () {
    return 'milkkk';
});
localhost:82/milkshakes
*/

//2nd way
/*Route::get('milkshakes/(flavor)', function ($flavor) {
    return $flavor.'milkshakes';
});
localhost:82/milkshakes/banana*/

//3rd way
/*Route::get('articls/(title?)', function ($title=null) {
  if($title==null)
  return 'hello';
  //check if $title in database
  //if not return error page
  return 'this isbody';
});
localhost:82/articles/banana*/


//4th way
/*Route::get('a{par1}/b/{par2?}', function ($par1,$par2='default') {
 return 'PARAMETER1='.#par1.$
});
localhost:82/articles/banana*/
//********************************************************//