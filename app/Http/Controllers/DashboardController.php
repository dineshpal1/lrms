<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\View;

use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

//use Illuminate\Support\Facades\Hash;

use App\dst_lrms_masters;
use App\dst_lrms_details_property_owners;
use App\dst_lrm_dtls_pro_rental_dtls;
use App\dst_lrm_dtls_pro_bank_dtls;
use App\dst_region_masters;
use App\dst_lrm_branch_dtls;
use App\dst_lrms_dtls_rental_renewals;
use App\dst_lrms_dtls_monthly_rentals;
use App\dst_lrms_rent_agreements;
use App\dst_lrms_dtls_documents;
use App\dst_city_masters;
use App\User;
use App\Role;
use DB;
use Hash;

use DateTime;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
	/*public function __construct()
    {
        $this->middleware('auth');
		date_default_timezone_set('Asia/Kolkata');
    }*/
    public function approvedList()
    {
      $approvedList=dst_lrms_masters::orderBy('id','ASC')->where('approve_status',1)->get();
      
      //echo "<pre>";
      //print_r($approvedList);

      //exit;

      return view("factsheet_approved_list",compact('approvedList'));
    }
    public function pendingList()
    {
      $pendingList=dst_lrms_masters::orderBy('id','ASC')->where('approve_status',0)->get();
      
      //echo "<pre>";
      //print_r($approvedList);

      //exit;

      return view("factsheet_pending_list",compact('pendingList'));
    }
    public function monthExpiry()
    {
    	DB::enableQueryLog(); 

    	$k=Carbon::now()->addMonths(1);
    	//echo $k;
    	//echo "\n";
    	$next_date=Carbon::parse($k)->format('Y-m-d');
//select *from dst_lrms_masters where agreement_period_end between curdate() AND curdate() + 30
//SELECT id, dst_lrms_master_id, agreement_period_end, DATEDIFF(agreement_period_end, '2020-04-03') remaining_days FROM dst_lrms_masters WHERE '2020-04-03' BETWEEN DATE_SUB(agreement_period_end, INTERVAL 30 DAY) AND agreement_period_end
       $today_date=DATE('Y-m-d');

    $monthExpiryList = DB::select("SELECT id, dst_lrms_master_id,region_code,factsheet_code,branch_location,branch_area,approve_status,agreement_period_start,agreement_period_end, DATEDIFF(agreement_period_end, '$today_date') remaining_days FROM dst_lrms_masters WHERE '$today_date' BETWEEN DATE_SUB(agreement_period_end, INTERVAL 30 DAY) AND agreement_period_end AND approve_status!=2");

   // dd(DB::getQueryLog()); 

//dd($users);
    /*

*/
   // echo "<pre>";
    //print_r($monthExpiryList);
   // echo count($monthExpiryList->id);
  // echo  $total = count((array)$monthExpiryList);
    //exit;
    			
    				$month_expiry_count=count((array)$monthExpiryList);
                    return view('factsheet_month_expiry',compact('month_expiry_count','monthExpiryList'));

      //return view("factsheet_month_expiry",compact('pendingList'));
    }
    public function totalNextExpiry()
    {
       
    DB::enableQueryLog(); 

    	$k=Carbon::now()->addMonths(1);
    	//echo $k;
    	//echo "\n";
    	$next_date=Carbon::parse($k)->format('Y-m-d');
//select *from dst_lrms_masters where agreement_period_end between curdate() AND curdate() + 30
//SELECT id, dst_lrms_master_id, agreement_period_end, DATEDIFF(agreement_period_end, '2020-04-03') remaining_days FROM dst_lrms_masters WHERE '2020-04-03' BETWEEN DATE_SUB(agreement_period_end, INTERVAL 30 DAY) AND agreement_period_end
       $today_date=DATE('Y-m-d');

    $totalExpiryList = DB::select("SELECT id, dst_lrms_master_id,region_code,factsheet_code,branch_location,branch_area,approve_status,agreement_period_start,agreement_period_end, DATEDIFF(agreement_period_end, '$today_date') remaining_days FROM dst_lrms_masters WHERE '$today_date' BETWEEN DATE_SUB(agreement_period_end, INTERVAL 90 DAY) AND agreement_period_end AND approve_status!=2");

   // dd(DB::getQueryLog()); 

//dd($users);
    /*

*/
   // echo "<pre>";
    //print_r($monthExpiryList);
   // echo count($monthExpiryList->id);
  // echo  $total = count((array)$monthExpiryList);
    //exit;
    			
    				$total_expiry_count=count((array)$totalExpiryList);
                    return view('factsheet_total_next_expiry',compact('total_expiry_count','totalExpiryList'));


    }
     public function fieldStaffDashboard()
    {
    	//return view("user_dashboard");
    	//echo "here";
    	//exit;
    	return view("field_staff/fieldstaff_dashboard");
    }
     public function assistantDashboard()
    {
    	//return view("user_dashboard");
    	return view("assistant/assistant_dashboard");
    }
     public function managerDashboard()
    {
    	//return view("user_dashboard");
    	return view("manager/manager_dashboard");
    }
	public function createUser()
	{

	 $roleList = role::orderBy('id', 'ASC')->where('id', '!=' , 1)->get();	
		
	   return view('create_user',compact('roleList'));
	}
	public function userList()
	{
		$userList = user::orderBy('id', 'ASC')->where('role_id','!=' , 1)->get();
	   return view('user_list',compact('userList'));
	
	}
	public function editUser($id)
	{
		//echo $id;
		$decode_id=base64_decode($id);
		//exit;
      $userData = user::find($decode_id);

      //echo "<pre>";
      //print_r($userData);
      //exit;

    //   $factSheet = dst_lrms_masters::find($id);

      // $regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();


      //$branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();
      // $cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");
	   
	   //$cityList=dst_city_masters::orderBy('city','ASC')->get();
	   
	   //$branchAreaList=dst_branch_area_masters::orderBy('area_name','ASC')->get();

      
     
       // return view('create_fact_sheet',compact('regionList','branchList'));


      return view('edit_user',compact('userData'));


	}
	public function saveUser(Request $request)
	{
		
		//print_r($_POST);
		 $name  = request('name');
		 $email  = request('email');
		 $token  = request('_token');

		 $role_id  = request('role_id');

		 //exit;
		//$password='12345678';
		// This function will generate 
      // Random string of length 8
	   $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  
    // Shufle the $str_result and returns substring 
    // of specified length 
    //return substr(str_shuffle($str_result),  0, $length_of_string); 
	$length_of_string=8;
	$random_string=substr(str_shuffle($str_result),  0, $length_of_string);
		$pwd_generate=$random_string;
	    $hash_password = Hash::make($pwd_generate);
		
		//exit;
	   
          /////////////////////////////

          /////////////////////INPUT DATA VALIDATION START///////////////////////////  

      $validator = Validator::make($request->all(),[
        'name'=>'required',
        'email'=>'required|unique:users',
      ]);

       if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator->errors());
        } 
        else
        {



        //////////////////////////////INPUT DATA VALIDATION END////////////////////

       try{
		    $user_tbl = new user();


			   $user_tbl->remember_token=isset($token) ? $token : '';
			   $user_tbl->name=isset($name) ? $name : '';
			   $user_tbl->email=isset($email) ? $email : '';
			   $user_tbl->role_id=isset($role_id) ? $role_id : '';
			   //$user_tbl->role_id=2;
			   $user_tbl->raw_value=$pwd_generate;
			   $user_tbl->password=$hash_password;
			   
			   //$user_tbl->save();
			   
			   if($user_tbl->save()){
				  return redirect('userList')->with('save', 'User is Created Successfully!');

			   }
			   //exit;
		   
		   }catch(\Illuminate\Database\QueryException $ex){ 
	 
	   		   return back()->withError($ex->getMessage());
			}catch(\Exception $ex){
				
					   return back()->withError('Something Wrong');
								  
	        } 
         ////////////////////////////////		  
          
	   
		exit;
		
		
	}
}	
	public function random_strings($length_of_string) 
{ 
  
    // String of all alphanumeric character 
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  
    // Shufle the $str_result and returns substring 
    // of specified length 
    return substr(str_shuffle($str_result),  
                       0, $length_of_string); 
} 

  public function updateUser(Request $request)
  {
	  //print_r($_POST);
	  //exit;
	  
	  $user_id = request('user_id');
	  $name    = request('name');
	  $email   = request('email');
	  $password   = request('password');
	  
	   $validator = Validator::make($request->all(),[
        'name'=>'required',
        //'email'=>'required|unique:users',
		'password'=>'required',
      ]);

       if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator->errors());
        } 
        else
        {



        //////////////////////////////INPUT DATA VALIDATION END////////////////////

       try{
		    $user_tbl = new user();
            
			///////////////////////
			$hash_password = Hash::make($password);
			
			 $affectedRows = user::where('id', $user_id)
       ->update([
           
             'name' => isset($name) ? $name : ' ',
             'password' => isset($hash_password) ? $hash_password : ' ',
       'raw_value' => isset($password) ? $password : ' ',

        ]);
			if($affectedRows)  
          {
            //return back()->with('success','FactSheet Updated Successfully!');
            return redirect('userList')->with('update', 'User Data has been updated successfully!');

              exit;
          }else
          {
            return back()->with('error','User Is Not Updated!');
              exit;
          }
			   //exit;
		   
		   }catch(\Illuminate\Database\QueryException $ex){ 
	 
	   		   return back()->withError($ex->getMessage());
			}catch(\Exception $ex){
				
					   return back()->withError('Something Wrong');
								  
	        } 
  }
  }
  

}
