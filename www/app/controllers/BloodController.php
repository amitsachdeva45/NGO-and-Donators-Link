<?php 
/*namespace App\Http\Controllers;
use View;
use DB;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;*/

class BloodController extends Controller{

	public function getIndex()
	{
		return View::make('minor/blood/blooddonation');
	}
	public function getDonarreg()
	{
		return View::make('minor/blood/donarform');
	}
	public function getSearchdonar()
	{
		return View::make('minor/blood/searchdonar');
	}
	public function getUrgent()
	{
		return View::make('minor/blood/urgent');
	}
	public function getBloodrequest()
	{
		return View::make('minor/blood/bloodrequest');
	}
	public function getSeebloodrequest()
	{
		$request=DB::select("SELECT * FROM requestblood");
		return View::make('minor/blood/seebloodrequest')->with('data',$request);
	}
	public function postRegistered()
	{
		$a1=Input::get('dfullname');
		$a2=Input::get('dgender');
		$a3=Input::get('ddate');
		$a4=Input::get('dbloodgroup');
		$a5=Input::get('dmobile');
		$a6=Input::get('demail');
		$a7=Input::get('daddress');
		$a8=Input::get('dstate');
		$a9=Input::get('dcity');
		$colemail=DB::table('donarreg')->lists('email');
		$flag=0;
		foreach ($colemail as $key) 
		{
			if($key==$a6)
				$flag=1;		
		}
		if($flag==1)
		{
			return View::make('minor/blood/emailexist');
		}
		else
		{
			DB::insert("INSERT INTO donarreg (name, gender, dob, bloodgroup, mobileno, email, address, state, city) VALUES(?,?,?,?,?,?,?,?,?)" ,array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9));
			return View::make('minor/blood/registered');
		}
	}
	public function postSearch()
	{
		$donars=DB::table('donarreg')->get();
		$a1=Input::get('sstate');
		$a2=Input::get('scity');
		$a3=Input::get('sbloodgroup');
		$i=0;
		foreach ($donars as $donar) 
		{
			if($donar->state==$a1 && $donar->city==$a2 && $donar->bloodgroup==$a3 )
			{
				$array[$i]=$donar;
				$i=$i+1;
			}
		}
		if($i!=0)
		{
			return View::make('minor/blood/searcheddetail')->with('donarsdata',$array);
		}
		else
		{	
			return View::make('minor/blood/donarnotexist');
		}
	}
	public function postUrgentneed()
	{
		$a1=Input::get('ustate');
		$a2=Input::get('ucity');
		$a3=Input::get('ubloodgroup');
		$a4=Input::get('uhosandadd');
		$a5=Input::get('ucontact');
		DB::insert("INSERT INTO urgentneed(state,city,bloodgroup,address,contact) VALUES(?,?,?,?,?)",array($a1,$a2,$a3,$a4,$a5));
		$mobileno=DB::table('donarreg')->lists('mobileno');	
		// Textlocal account details
		$username = 'ayushcse13@gmail.com';
		$hash = 'e2695a03e479e3b925c6619c1e2dd73a3df25f28';
	
		// Message details
		$numbers = array();
		$i=0;
		foreach ($mobileno as $number) 
		{
			$numbers[$i]=$number;
			$i++;
		}
		$sender = urlencode('TXTLCL');
		$msg='There is an Urgent need of Blood in '.$a4.','.$a2.','.$a1.'.Blood Group Required:- '.$a3.'.Contact No.- '.$a5. '. !! Donate Blood,Save Lives.!!';
		$message = rawurlencode($msg);
 
        $numbers = implode(',', $numbers);
 
		// Prepare data for POST request
		$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
		// Send the POST request with cURL
		$ch = curl_init('http://api.textlocal.in/send/');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
	
		// Process your response here
		//echo $response;
		return View::make('minor/blood/notified');
	}
	public function postRequested()
	{
		$a1=Input::get('rfullname');
		$a2=Input::get('rbloodgroup');
		$a3=Input::get('raddress');
		$a4=Input::get('rcity');
		$a5=Input::get('runit');
		$a6=Input::get('rdate');
		$a7=Input::get('rmobile');
		$a8=Input::get('rmessage');
		$ldate = date('Y-m-d H:i:s');
			DB::insert("INSERT INTO requestblood(patientname,bloodgroup,address,city,uni2,whe1,mobile,message) VALUES(?,?,?,?,?,?,?,?)",array($a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8));

			return View::make('minor/blood/requestsent');
	}
	public function postAlreadyuser()
	{
		$a1=Input::get('exemail');
		$colemail=DB::table('donarreg')->get();
		$flag=0;
		foreach($colemail as $key) 
		{
			if($key->email==$a1)
			{
						$flag=1;
						$colemail1[0]=$key->name;
						$colemail1[1]=$key->gender;
						$colemail1[2]=$key->dob;
						$colemail1[3]=$key->bloodgroup;
						$colemail1[4]=$key->mobileno;
						$colemail1[5]=$key->email;
						$colemail1[6]=$key->address;
						$colemail1[7]=$key->state;		
						$colemail1[8]=$key->city;
			}
		}
		if($flag==1)
		{
			DB::insert("INSERT INTO donarreg (name, gender, dob, bloodgroup, mobileno, email, address, state, city) VALUES(?,?,?,?,?,?,?,?,?)" ,array($colemail1[0],$colemail1[1],$colemail1[2],$colemail1[3],$colemail1[4],$colemail1[5],$colemail1[6],$colemail1[7],$colemail1[8]));
			return View::make('minor/blood/registered');
		}
		else
		{
			return View::make('minor/blood/emailnotexist');
		}
	}
}