 
<?php
//LIKE
Player::where('name', 'LIKE', '%'.$name.'%')->get();
//ORDER BY
$users = DB::table('users')
                ->orderBy('name', 'desc')
                ->get();
//WHERE NULL
                $users = DB::table('users')
                    ->whereNull('updated_at')
                    ->get();
//WHERE NOT NULL
                    $users = DB::table('users')
                    ->whereNotNull('updated_at')
                    ->get();
//OR 
                    $users = DB::table('users')
                    ->where('votes', '>', 100)
                    ->orWhere('name', 'John')
                    ->get();
//group by
                $users = DB::table('users')
                ->groupBy('account_id')
                ->having('account_id', '>', 100)
                ->get();

                //The havingRaw method may be used to set a raw string
                // as the value of the having clause. 
                //For example, we can find all of the departments 
                //with sales greater than $2,500:


                $users = DB::table('orders')
                ->select('department', DB::raw('SUM(price) as total_sales'))
                ->groupBy('department')
                ->havingRaw('SUM(price) > 2500')
                ->get();
 //skip
 $users = DB::table('users')->skip(10)->take(5)->get();

 //DESCRIBE tablename;


 //------------delete query
DB::table('users')->whereName('kaka')->delete();
    return 'deleted';
     
     //----------UPADATe
	DB::table('users')->where('id',1)->update(array('name'=>'harami'));
	return 'updated';
	
	// -------------insert query and grab id
	$id=DB::table('users')->insertGetId(array('id'=>4,'name'=>'kaka','age'=>50));
	return 'successful'.$id;


// ------------insert query

	DB::table('users')->insert(array('id'=>4,'name'=>'kaka','age'=>50));
	return 'successful';
	

	//--------------select * from users where id>2; and  first() only give data not array in row
	$ss=DB::table('users')->where('id','>',2)->first();
	dd($ss);
	

	//---------------select * from users where id=2; and first 
	$ss=DB::table('users')->where('id',2)->first();
	dd($ss);

	//-------------------select * from users where id=2;
	$ss=DB::table('users')->where('id',2)->get();
	dd($ss);

	//--------------select * from users

	$ss=DB::table('users')->get();
     dd($ss);