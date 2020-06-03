<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dst_lrms_state_master;
use App\dst_lrms_bank_master;
use App\dst_city_masters;
use App\dst_lrm_branch_dtls;
use DB;

class All_Masters extends Controller
{
    public function showAllStates()
    {
		
    	$states=dst_lrms_state_master::orderBy("state_name","ASC")->get();;
    	//echo"<pre>";
    	//print_r($states);
    	return view("all_states",compact('states'));
    }
    public function addStates()
    {
    	return view("add_state ");
    }
    public function saveState(Request $request)
    {
    	$addStates 								=new dst_lrms_state_master;
    	$statename 								=strtoupper($request->add_state);
      $gstStateode							=strtoupper($request->gst_state_code);
    	$stateGstNo							    =strtoupper($request->state_gst_reg_no);
        $addStates->state_name                   = isset($statename) ? $statename : ' ';
        $addStates->gst_state_code              = isset($gstStateode) ? $gstStateode : ' ';
        $addStates->state_gst_reg_no             = isset($stateGstNo) ? $stateGstNo : ' ';
      $data= $addStates->save();
      if($data){
      	return redirect("state")->with("success","State has been added successfully");
      }

    }
	//Method for Bank maseters
	public function showAllbanks()
	{
		//$banks=dst_lrms_bank_master::all();
		$banks=dst_lrms_bank_master::orderBy("bank_name","ASC")->get();
		//echo"<pre>";
		//print_r($bank);
		return view("all_bank",compact('banks'));
	}
	 public function addBanks()
    {
    	return view("add_bank ");
    }
	public function saveBank(Request $request)

    {
		
		$request->validate(["bank_name"=>"required|unique:dst_lrms_bank_masters"],
        	["bank_name.unique"=>"This name is already taken",
        	"bank_name.required"=>"Bank name is required"
        ]);
    	$addBank 								=new dst_lrms_bank_master;
    	$bankname 								=strtoupper($request->bank_name);
		$ifsc 									=strtoupper($request->add_ifsc);
       $addBank->bank_name                   = isset($bankname) ? $bankname : ' ';
	   //$addBank->ifsc_code                   = isset($ifsc) ? $ifsc : ' ';
      $data= $addBank->save();
      if($data){
      	return redirect("allBank")->with("success","Bank has been added successfully");
      }

    }
	
	public function showAllCity()
	{
		
		$city=dst_city_masters::orderBy("city","ASC")->get();
		return view("all_city",compact('city'));
	}
	public function addCity()
	{
		return view("add_city");
	}
	
	public function saveCity(Request $request)
	{
	$addCity=new dst_city_masters;
	$city_name=strtoupper($request->add_city);
	$addCity->city=isset($city_name) ? $city_name : ' ';
	$data=$addCity->save();
	if($data){
      	return redirect("allCity")->with("success","City has been added successfully");
      }
	}
	
	public function showAllBranch()
	{
		$branch=dst_lrm_branch_dtls::all();
		return view("all_branch",compact('branch'));
	}
	public function addBranch()
	{
		return view("add_branch");
	}
	public function saveBranch(Request $request)
	{
	$addBranch=new dst_lrm_branch_dtls;
	//$city_name=strtoupper($request->add_city);
	$branch_id=strtoupper($request->branch_id);
	$branch_code=strtoupper($request->branch_code);
	$branch_type=strtoupper($request->branch_type);
	$branch_name=strtoupper($request->branch_name);
	$addBranch->branch_id	=isset($branch_id) ? $branch_id : ' ';
	$addBranch->branch_code	=isset($branch_code) ? $branch_code : ' ';
	$addBranch->branch_type =isset($branch_type) ? $branch_type : ' ';
	$addBranch->branch_name =isset($branch_name) ? $branch_name : ' ';
	$data=$addBranch->save();
	
	
	
	//$addCity->city=isset($city_name) ? $city_name : ' ';
	//$data=$addCity->save();
	if($data){
      	return redirect("allBranch")->with("success","Branch has been added successfully");
      }
	  
	}	  
	  
	
	/////////////BANK  BRANCH////////////////////////////////////////////////
	public function addBankBranch()
{
$banks=dst_lrms_bank_master::all();
//echo"<pre>";
//print_r($bank);
return view("add_bank_branch",compact("banks"));


} 
public function saveBankbranch(Request $request)
{
$validator = Validator::make($request->all(), [

"bank_name"	                 =>"required",
"bank_branch_name"    		 =>"required",
//"ifsc"    				 =>array("required","regex:/^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/"),
//"ifsc_code"    				 =>["required","regex:/^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/","unique:dst_bank_branch_masters"],
"ifsc_code"    				 =>["required","regex:/^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/"],

//"bank_branch_address"        =>"required",



],[

"bank_name.required"        =>"BANK NAME IS REQUIRED",
"bank_branch_name.required"    =>"BANK BRANCH NAME IS REQUIRED",
"ifsc_code.required"	=>"IFSC CODE IS REQUIRED",
"ifsc_code.unique"=>"THIS IFSC CODE IS ALREADY EXISTS",
"ifsc_code.regex"	=>"PLEASE ENTER CORRECT IFSC CODE",
//"bank_branch_address.required"      =>"THIS FIELD IS REQUIRED"

]);
if ($validator->fails()) {


return redirect()->back()->withInput()->withErrors($validator->errors());
}
else{
$banks=dst_lrms_bank_master::all();
//print_r($banks[]['id']);
//exit;

$branch_name=new dst_bank_branch_master();


//$branch_name->dst_lrms_bank_masters_id=$banks->id;
$branch_name->bank_name 		 =$request->bank_name;
$branch_name->bank_branch_name 	 =$request->bank_branch_name;
$branch_name->ifsc_code  		 =$request->ifsc_code;
$branch_name->bank_branch_address =$request->bank_branch_address;
$branch_name->save();
return redirect("allBankBranch")->with("successMsg","BANK BRANCH ADDED SUCCESSFULLY");


}
}
public function allBankBranch()
{


$allBankBranches=DB::table("dst_bank_branch_masters")

->select('dst_bank_branch_masters.id','dst_bank_branch_masters.bank_name','dst_bank_branch_masters.bank_branch_name','dst_bank_branch_masters.ifsc_code','dst_bank_branch_masters.bank_branch_address','dst_lrms_bank_masters.bank_name as bank')   
->Join('dst_lrms_bank_masters', 'dst_bank_branch_masters.bank_name', '=', 'dst_lrms_bank_masters.id')

->get();


return view("all_bank_branch",compact("allBankBranches"));




}

public function editBankBranch($id)
{
	$banks=dst_lrms_bank_master::all();
	$editBankBranch=dst_bank_branch_master::findOrFail($id);
	return view("edit_bank_branch",compact("editBankBranch","banks"));
}


public function updateBankbranch(Request $request,$id)
{
	$validator = Validator::make($request->all(), [

"bank_name"	                 =>"required",
"bank_branch_name"    		 =>"required",
//"ifsc"    				 =>array("required","regex:/^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/"),
//"ifsc_code"    				 =>["required","regex:/^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/","unique:dst_bank_branch_masters"],
"ifsc_code"    				 =>["required","regex:/^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/"],
//"bank_branch_address"        =>"required",



],[

"bank_name.required"        =>"BANK NAME IS REQUIRED",
"bank_branch_name.required"    =>"BANK BRANCH NAME IS REQUIRED",
"emp_email.required"    =>"EMAIL IS REQUIRED",
"ifsc_code.required"	=>"IFSC CODE IS REQUIRED",
"ifsc_code.unique"=>"THIS IFSC CODE IS ALREADY EXISTS",
"ifsc_code.regex"	=>"PLEASE ENTER CORRECT IFSC CODE",
//"bank_branch_address.required"      =>"THIS FIELD IS REQUIRED"

]);
if ($validator->fails()) {


return redirect()->back()->withInput()->withErrors($validator->errors());
}

	else
	{
	$updateBranch=dst_bank_branch_master::findOrFail($id);
	$updateBranch->bank_name =$request->bank_name;;
	$updateBranch->bank_branch_name =$request->bank_branch_name;
	$updateBranch->ifsc_code =$request->ifsc_code;
	$updateBranch->bank_branch_address =$request->bank_branch_address;
	$updateBranch->save();
    return redirect("allBankBranch")->with("successMsg","BANK BRANCH UPDATED SUCCESSFULLY");

}
}

public function deleteBankBranch($id)
{
	$deleteBranch=dst_bank_branch_master::findOrFail($id);
	$deleteBranch->delete();
	return redirect()->back()->with("successMsg","BANK BRANCH DELETED SUCCESSFULLY");

}

	
	
	
	
	
}
