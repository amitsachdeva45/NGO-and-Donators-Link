<?php
//php  composer update
// $image = Image::make(sprintf('images/%s', $file->getClientOriginalName()))->resize(200, 200)->save();

//*******************APPPA
/*Route::controller('blood','BloodController');
Route::get('/', function() 	
{
   // return View::make('minor/tophead');
	//$name= DB::Connection()->getDatabaseName();
	$user1=DB::selectOne("SELECT * from users where id=1");
	$user2='';
		return View::make('minor/tophead')->with('user1',$user1->id)->with('user2',$user2);
}
		  );
//To upload photo:-
//

//To retrieve photo:-
Route::get('/getfile', function()
{
    /*$file = DB::selectOne("SELECT * FROM img where name=2");
    $data = $file->file;
    return Response::make($data, 200, array('Content-type' => $file->mime, 'Content-length' => $file->size));
    
    mysqli_query($con,"SELECT * FROM 'img' WHERE 'name'=2");
    $row=mysqli_fetch_assoc($query);
    $imageData=$row["file"];
    header("content-type:image/jpeg");
    return $imageData;
});

Route::get('ass',function()
{
          $user2=DB::selectOne("SELECT * from users where id=2");
		return View::make('minor/tophead')->with('user2',$user2->id);

}
	);

Route::get('ngoafterlogin', function() 
{
    return View::make('minor/ngoafterlogin');
}
		  );
Route::get('upcomingcamp', function() 
{
    return View::make('minor/upcomingcamp');
}
		  );*/
//****************************APPA

//CURDATE(); to check today date

//MY PAGE

Route::get('/', function()
{
	$dd=DB::table('php_interview_question')->get();
	return View::make('FINALPROJECT/index')->with('dd',$dd);
//return View::make('ad');
});
Route::get('ad',function()

{
	return View::make('MINORPROJECT/hhh')->with('y','hello');

}

	);
Route::post('ad',function()

{
	return View::make('MINORPROJECT/hhh')->with('y','hello');

}

	);


Route::get('kk',function()
{
	return Redirect::to('ad');
}
);
//**************IMAGEUPLOAD1


Route::post('/upload', function(){

//if (Input::file('photo')->isValid())
//{
    //

	if (Input::hasFile('avatar'))
	{
	    $file = Input::file('avatar');
	   return $file->getClientOriginalName();
	    $file->move('images', $file->getClientOriginalName());
//$size = Input::file('avatar')->getSize();

          
	   // $image = Image::make(sprintf('images/%s', $file->getClientOriginalName()))->resize(200, 200)->save();
	}
//}
	return View::make('imageupload1');
	//$img->insert('public/watermark.png'); ADD WATERMARK

});
//***********LOGINAGAIN`
Route::post('loginagain1',function()
{
	$l1=Input::get('ema');
	$l2=Input::get('non');
	$l3=Input::get('mobile');
	$ss1=DB::table('ngosign')->where('non',$l2)->where('ema',$l1)->where('mobile',$l3)->first();
	//$ss2=DB::selectOne("SELECT * FROM ngosign where non=$l2 and ema=$l1 and mobile=$l3");
	
	if($ss1!=null)
	{
		return View::make('FINALPROJECT/index/loginagain')->with('fq','none')->with('fr','')->with('ema',$l1);
	}
     else
     {
     	
     	return View::make('FINALPROJECT/index/loginagain')->with('fe','SORRY YOUR INFO IS WRONG TRY AGAIN')->with('fr','none')->with('fq','')->with('ema','');
     }
}

	);

//****************LOGIN AGAIN CHANGE PASSWORD
Route::post('loginagain2',function()
{
    $l1=Input::get('ema');
	$l2=Input::get('pswd');
	$l3=Input::get('conpswd');
	DB::table('ngosign')->where('ema',$l1)->update(array('pswd'=>$l2,'conpswd'=>$l3));
     return Redirect::to('/');
}

	);
//******************LOGIN AGAIN PAGE OPEN
Route::get('loginagainpage',function()
{
	return View::make('FINALPROJECT/index/loginagain')->with('fr','none')->with('fq','')->with('ema','');
}
);

//******************SIGNUP PAGE
Route::get('newuser', function()
{
	
	return View::make('FINALPROJECT/index/signupmainpage');

});

//**************ARTICLE HOME
Route::get('articlehome', function()
{
	$fr=DB::table('ngosign')->get();
	return View::make('FINALPROJECT/index/articlehome')->with('fr',$fr);

});
//**************MONEY HOME
Route::get('moneyhome', function()
{
	
	return View::make('FINALPROJECT/index/moneyhome');

});
//******************LOGOUT 
Route::get('logout', function()
{
	
	return Redirect::to('/');

});

//********************MAKE DIRECTORY NOT USE
Route::get('hello',function(){
//public_path().
	$jj=Input::get('hh');
	$path = 'FINALPROJECT/'.$jj;
File::makeDirectory($path, $mode = 0777, true, true);

});


//***********NOT USE
Route::get('jk',function()

{

$a=Input::get('id');
$b=Input::get('username');
	 DB::insert("INSERT into user(id,name1) values(?,?)",array($a,$b));
	 	return 'submitted';
}

	);




//**************SIGNUP FORM
Route::post('FINALPROJECT/ngosign',function()
{
$l1=Input::get('non');
$l2=Input::get('ema');
$l3=Input::get('pswd');
$l4=Input::get('conpswd');
$l5=Input::get('address');
$l6=Input::get('city');
$l7=Input::get('pin');
$l8=Input::get('state');
$l9=Input::get('mobile');
$l10=Input::get('renu');
$l11=Input::get('secret5');
$l12=Input::get('date5');
$l13=Input::get('member1');
$l14=Input::get('mobile1');
$l15=Input::get('member2');
$l16=Input::get('mobile2');
$l17=Input::get('member3');
$l18=Input::get('mobile3');
$l19=Input::get('obj');
$l20=Input::get('date1');
$l21=Input::get('poe1');
$l22=Input::get('obj1');
$l23=Input::get('date2');
$l24=Input::get('poe2');
$l25=Input::get('obj2');
$l26=Input::get('date3');
$l27=Input::get('poe3');
$l28=Input::get('obj3');
$l29=Input::get('website');

DB::insert("INSERT into ngosign(non,ema,pswd,conpswd,address,city,pin,state,mobile,renu,secret5,date5,member1,mobile1
	,member2,mobile2,member3,mobile3,obj,date1,poe1,obj1,date2,poe2,obj2,date3,poe3,obj3,website) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
  array($l1,$l2,$l3,$l4,$l5,$l6,$l7,$l8,$l9,$l10,$l11,$l12,$l13,$l14,$l15,$l16
,$l17,$l18,$l19,$l20,$l21,$l22,$l23,$l24,$l25,$l26,$l27,$l28,$l29));

	$path = 'FINALPROJECTPERSONAL/'.$l1;
File::makeDirectory($path, $mode = 0777, true, true);
$path2=$path.'/PHOTOS';
$path3=$path.'/VIDEOS';
$path4=$path.'/FILES';

File::makeDirectory($path2, $mode = 0777, true, true);
File::makeDirectory($path3, $mode = 0777, true, true);
File::makeDirectory($path4, $mode = 0777, true, true);

	
return Redirect::to('/');


}

	);



//*************LOGIN FORM
Route::post('ngo',function()
{

$aa=Input::get('email1');
$b=Input::get('pswd');

$ss=DB::table('ngosign')->where('ema',$aa)->where('pswd',$b)->first();
if($ss!=null)
{
	$aw=DB::table('donationaccept')->where('ngoemail',$aa)->get();

	$ee=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$ss->non)->get();
$rr=DB::table('articlehom')->where('flag1',1)->where('typeofwork','adv')->get();
$oo=DB::table('moneyhom')->where('flag1',1)->get();	
$kk=DB::table('makeevent1')->get();
$ggg=DB::table('ngosign')->get();
$pvp=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$ss->non)->count();
	return View::make('FINALPROJECT/ngo')->with('aw',$aw)->with('oo',$oo)->with('rr',$rr)->with('pvp',$pvp)->with('ee',$ee)->with('non',$ss->non)->with('city',$ss->city)->with('ema',$ss->ema)->with('kk',$kk)->with('ggg',$ggg);
}
else
{
	return Redirect::to('/');
	//return 'hello';
}

}
	);
//*******************MAKE EVENT 1
Route::post('makeevent1',function()

{
	//$dd=DB::table('php_interview_question')->get();
    $l7=Input::get('non');
    $aa='FINALPROJECTPERSONAL/'.$l7.'/PHOTOS';
	$l1=Input::get('ema');
    $l2=Input::get('topic');
	$l3=Input::get('dateofevent');
	$l4=Input::get('address');
	$l5=Input::get('mobile');
	$l9=Input::get('mobile2');
	$l6=Input::get('descript');
	$ll=Input::get('city');
	$l10=Input::get('city2');
	$l8='';
	$count=0;
	if (Input::hasFile('fileimage1'))
	{
	    $file = Input::file('fileimage1');
	    
         $l8=$file->getClientOriginalName();
     $count=1;
	 }
	$pp=DB::table('makeevent1')->where('ema',$l1)->where('topic',$l2)->where('dateofevent',$l3)->where('address',$l4)->where('mobile',$l5)->where('descript',$l6)->where('non',$l7)->where('fileimage1',$l8)->where('city2',$l10)->first(); 
	if($pp==null)
	{
		if($count==1)
		{
$file->move($aa, $file->getClientOriginalName());}
DB::insert("INSERT into makeevent1(ema,topic,dateofevent,address,mobile,descript,non,fileimage1,mobile2,city2) VALUES(?,?,?,?,?,?,?,?,?,?)",array($l1,$l2,$l3,$l4,$l5,$l6,$l7,$l8,$l9,$l10));
}
$aw=DB::table('donationaccept')->where('ngoemail',$l1)->get();
$ee=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$l7)->get();
$rr=DB::table('articlehom')->where('flag1',1)->where('typeofwork','adv')->get();
$oo=DB::table('moneyhom')->where('flag1',1)->get();	
$kk=DB::table('makeevent1')->get();
$ggg=DB::table('ngosign')->get();
$pvp=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$l7)->count();
return View::make('FINALPROJECT/ngo')->with('aw',$aw)->with('oo',$oo)->with('rr',$rr)->with('pvp',$pvp)->with('ee',$ee)->with('non',$l7)->with('city',$ll)->with('ema',$l1)->with('kk',$kk)->with('ggg',$ggg);

}
);

//****************************MAKE FILE1 NGO PAGE
Route::post('makefile1',function()
{
$l4=Input::get('city');
	$l2=Input::get('non');
    $aa='FINALPROJECTPERSONAL/'.$l2.'/FILES';
	$l1=Input::get('ema');
	$dd=DB::table('php_interview_question')->get();
	if (Input::hasFile('filefield1'))
	{
	    $file = Input::file('filefield1');
	     $l3=$file->getClientOriginalName();
	  }

$pp=DB::table('makefile1')->where('ema',$l1)->where('non',$l2)->where('fileToUpload1',$l3)->first();
	if($pp==null)
	{
	    $file->move($aa, $file->getClientOriginalName());
        

	   
	
	DB::insert("INSERT into makefile1(ema,non,filefield1) VALUES(?,?,?)",array($l1,$l2,$l3));
     }
     $aw=DB::table('donationaccept')->where('ngoemail',$l1)->get();
     $rr=DB::table('articlehom')->where('flag1',1)->where('typeofwork','adv')->get();
$oo=DB::table('moneyhom')->where('flag1',1)->get();	
    $kk=DB::table('makeevent1')->get();
    $ggg=DB::table('ngosign')->get();
    $ee=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$l2)->get();
    $pvp=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$l2)->count();
    return View::make('FINALPROJECT/ngo')->with('aw',$aw)->with('oo',$oo)->with('ee',$ee)->with('pvp',$pvp)->with('rr',$rr)->with('non',$l2)->with('city',$l4)->with('ema',$l1)->with('kk',$kk)->with('ggg',$ggg);
});
//********************************MAKE VIDEO1 NGO PAGE AND USE UPLOAD FILE
Route::post('makevideo1',function()
{
	$l4=Input::get('city');
	$l2=Input::get('non');
    $aa='FINALPROJECTPERSONAL/'.$l2.'/VIDEOS';
	$l1=Input::get('ema');


	if (Input::hasFile('video1'))
	{
	    $file = Input::file('video1');
	    $l3=$file->getClientOriginalName();
	}

	$pp=DB::table('makevideo1')->where('ema',$l1)->where('non',$l2)->where('fileToUpload1',$l3)->first();
	if($pp==null)
	{
	     $file->move($aa, $file->getClientOriginalName());
	
	   DB::insert("INSERT into makevideo1(ema,non,fileToUpload1) VALUES(?,?,?)",array($l1,$l2,$l3));
    } 
    $aw=DB::table('donationaccept')->where('ngoemail',$l1)->get();
$rr=DB::table('articlehom')->where('flag1',1)->where('typeofwork','adv')->get();
$oo=DB::table('moneyhom')->where('flag1',1)->get();	
    $kk=DB::table('makeevent1')->get();
    $ggg=DB::table('ngosign')->get();
    $ee=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$l2)->get();
    $pvp=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$l2)->count();
    
  return View::make('FINALPROJECT/ngo')->with('aw',$aw)->with('oo',$oo)->with('rr',$rr)->with('pvp',$pvp)->with('ee',$ee)->with('non',$l2)->with('city',$l4)->with('kk',$kk)->with('ema',$l1)->with('ggg',$ggg);
//return Redirect::to('ngo');
});
//*************************************ARTICLE HOME
Route::post('articlehom',function()

{
	$n1=Input::get('n1');
	$n2=Input::get('n2');
	$n3=Input::get('n3');
	$n4=Input::get('n4');
	$n5=Input::get('n5');
	$n6=Input::get('n6');
	$n7=Input::get('n7');
	$n8=Input::get('n8');
	$n9=Input::get('n9');
	$n10='1';
	
	
	DB::insert("INSERT into articlehom(email,name,address,city,mobile,articlename,quantity,typeofwork,non,flag1) VALUES(?,?,?,?,?,?,?,?,?,?)",array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10));
   return Redirect::to('/');
}
	);
//*************************************MONEY HOME
Route::post('moneyhom',function()

{
	$n1=Input::get('n1');
	$n2=Input::get('n2');
	$n3=Input::get('n3');
	$n4=Input::get('n4');
	$n5=Input::get('n5');
	$n6=Input::get('n6');
	$n7='1';


	DB::insert("INSERT into moneyhom(email,name,address,city,mobile,money1,flag1) VALUES(?,?,?,?,?,?,?)",array($n1,$n2,$n3,$n4,$n5,$n6,$n7));
   return Redirect::to('/');
}
	);
//*********************DELETE FORM NGO
Route::post('deleteform1',function()
{
$l1=Input::get('ema');
$l2=Input::get('non');
$l3=Input::get('pswd');
$l4=Input::get('conpswd');
$ff=DB::table('ngosign')->where('ema',$l1)->where('pswd',$l3)->where('conpswd',$l4);
if($ff!=null)
{
	$directory1='FINALPROJECTPERSONAL/'.$l2;
 DB::table('makeevent1')->where('ema',$l1)->delete();
 DB::table('makevideo1')->where('ema',$l1)->delete();
 DB::table('makefile1')->where('ema',$l1)->delete();
 DB::table('ngosign')->where('ema',$l1)->delete();
 $success = File::deleteDirectory($directory1);
 return View::make('FINALPROJECT/ngo/deletedngo')->with('vvv','Your Details And All Data Has Been Deleted ......        Thanks Be Part Of Light The Future');
}

else
 {
 	return View::make('FINALPROJECT/ngo/deletedngo')->with('vvv','DETAILS YOU HAVE ENTERED TO DELETE ID IS WRONG..... Your Id is Not Deleted');
}

}
	);
//****************DELETED ID AND GO BACK HOME
Route::get('deletehome',function()
{
	return Redirect::to('/');
}

	);
//**************DONATIONACCEPT ARTICLE
Route::post('donationacceptarticle',function()
{
  $r1=Input::get('ema');
  $r2=Input::get('email');
  $r3=Input::get('nam');
  $r4=Input::get('mobile');
  $r5='article';
  $r6=Input::get('articlename');
  $r7=Input::get('address');
  $r8=Input::get('quantity');
  $ssd=DB::table('ngosign')->where('ema',$r1)->first();
  $lop=DB::table('donationaccept')->where('ngoemail',$r1)->where('manemail',$r2)->where('typeofdon',$r5)->where('name',$r3)->where('mobile',$r4)->where('address',$r7)->get();
  if($lop==null)
  {
  DB::insert("INSERT into donationaccept(ngoemail,manemail,typeofdon,name,mobile,address,thing,quantity) VALUES(?,?,?,?,?,?,?,?)",array($r1,$r2,$r5,$r3,$r4,$r7,$r6,$r8));}
DB::table('articlehom')->where('email',$r2)->where('articlename',$r6)->update(array('flag1'=>'0'));
$aw=DB::table('donationaccept')->where('ngoemail',$r1)->get();
$rr=DB::table('articlehom')->where('flag1',1)->where('typeofwork','adv')->get();
$oo=DB::table('moneyhom')->where('flag1',1)->get();	
    $kk=DB::table('makeevent1')->get();
    $ggg=DB::table('ngosign')->get();
    $ee=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$ssd->non)->get();
    $pvp=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$ssd->non)->count();
    
   return View::make('FINALPROJECT/ngo')->with('aw',$aw)->with('oo',$oo)->with('rr',$rr)->with('pvp',$pvp)->with('ee',$ee)->with('non',$ssd->non)->with('city',$ssd->city)->with('kk',$kk)->with('ema',$r1)->with('ggg',$ggg);
}
);
//************DONATION ACCEPT MONEY
Route::post('donationacceptmoney',function()
{
  $r1=Input::get('ema');
  $r2=Input::get('email');
  $r3=Input::get('nam');
  $r4=Input::get('mobile');
  $r5='money';
  $r6=Input::get('money1');
  $r7=Input::get('address');
  $r8='';
  $ssd=DB::table('ngosign')->where('ema',$r1)->first();
  $lop=DB::table('donationaccept')->where('ngoemail',$r1)->where('manemail',$r2)->where('typeofdon',$r5)->where('name',$r3)->where('mobile',$r4)->where('address',$r7)->get();
  if($lop==null)
  {
  DB::insert("INSERT into donationaccept(ngoemail,manemail,typeofdon,name,mobile,address,thing,quantity) VALUES(?,?,?,?,?,?,?,?)",array($r1,$r2,$r5,$r3,$r4,$r7,$r6,$r8));}
DB::table('moneyhom')->where('email',$r2)->where('money1',$r6)->update(array('flag1'=>'0'));
$aw=DB::table('donationaccept')->where('ngoemail',$r1)->get();
$rr=DB::table('articlehom')->where('flag1',1)->where('typeofwork','adv')->get();
$oo=DB::table('moneyhom')->where('flag1',1)->get();	
    $kk=DB::table('makeevent1')->get();
    $ggg=DB::table('ngosign')->get();
    $ee=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$ssd->non)->get();
    $pvp=DB::table('articlehom')->where('flag1',1)->where('typeofwork','dtn')->where('non',$ssd->non)->count();
    
  return View::make('FINALPROJECT/ngo')->with('aw',$aw)->with('oo',$oo)->with('rr',$rr)->with('pvp',$pvp)->with('ee',$ee)->with('non',$ssd->non)->with('city',$ssd->city)->with('kk',$kk)->with('ema',$r1)->with('ggg',$ggg);
   // return Redirect::to('/ngo');
}
);
//************NO USE DELETE DIRECTORY

Route::get('hello1',function()
{
	$directory1='sachdeva';	$success = File::deleteDirectory($directory1);
}
	);
