      //DESCRIBE tablename; to check description of table



  //dd and var_Dump are same and array is use for SECURITY
   /*---------DIFFERENt------*/
DB::statement("ALTER TABLE users ADD email varchar(30)");
return 'statement alter';
  
  /*-------------DELETE------------*/
   DB::update("DELETE from users where name=?",array('pop'));
     return 'delete successful';

   /*-----------update----------------*/
     DB::update("UPDATE users Set age =? where name=?",array(200,'pop'));
     return 'update successful';


   /*----------------insert-----------------*/
   //MULITPLE INSERTION
   DB::insert("INSERT into users(id,name,age) values(7,'loc',80),(9,'pop',70)");
   return 'new insert succesful';
   //SINGLE INSERTION USONG ARRAY 
   DB::insert("INSERT into users(id,name,age) values(?,?,?)",array(6,'hunk',90));
   return 'insert succesful';


   /*---------------SELECT----------------------*/

 //GRAB USERS ATTRIBUTES
  $user=DB::selectOne("SELECT * from users where id=2 ");
return $user->name. '  is an'.$user->age; 

	//GRAB SINGL USERS and work ad first()
	$user=DB::selectOne("SELECT * from users where id=2 ");
	dd($user);
	
	//multiple matchin in database
	$user=DB::selectOne("SELECT * from users where id=2  and name='amit'");
	dd($user);
	
    //GRAB SINGL USERS and work as get()
	$user=DB::select("SELECT * from users where id=2");
	dd($user);
	
	//GRAB ALL USERS
	$users=DB::select("SELECT * from users");
	var_dump($users);
    