<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\View;

use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

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
use App\dst_branch_area_masters;
use DB;

use DateTime;
use Illuminate\Support\Carbon;


class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
		/* $leases=DB::table("dst_lrms_masters")
           ->select('id','factsheet_code','branch_code','branch_location',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on' ))
           ->whereNotNull('agreement_period_end')
          //->take(5)
            ->get();
            
            $no=$leases->count('id');

             $expire_fact=DB::table("dst_lrms_masters")
           ->select('id','factsheet_code','branch_code','branch_location',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on' ))
           ->orderBy('id','DESC')
           ->whereNotNull('agreement_period_end')
          ->take(5)
            ->get();
         return view('layouts/adminLayout/admin_design',compact('no','expire_fact'));
		*/
		 $pendingCount = dst_lrms_masters::where('approve_status', '==', 0)->count();

    $approvedCount=dst_lrms_masters::where('approve_status', 1)->count();

    $today_date=DATE('Y-m-d');

     $monthExpiryList = DB::select("SELECT id,approve_status,agreement_period_start,agreement_period_end, DATEDIFF(agreement_period_end, '$today_date') remaining_days FROM dst_lrms_masters WHERE '$today_date' BETWEEN DATE_SUB(agreement_period_end, INTERVAL 30 DAY) AND agreement_period_end AND approve_status!=2");

  
     $month_expiry_count=count((array)$monthExpiryList);

     // Total Next 90 days Expiry Count

     $nextExpiryList = DB::select("SELECT id,approve_status,agreement_period_start,agreement_period_end, DATEDIFF(agreement_period_end, '$today_date') remaining_days FROM dst_lrms_masters WHERE '$today_date' BETWEEN DATE_SUB(agreement_period_end, INTERVAL 90 DAY) AND agreement_period_end AND approve_status!=2");

  
      $next_expiry_count=count((array)$nextExpiryList);
         
		// return view('dashboard');
		   return view('dashboard',compact('pendingCount','approvedCount','month_expiry_count','next_expiry_count'));
    }
    public function dashboard()
    {
         //return view('dashboard');
		   $pendingCount = dst_lrms_masters::where('approve_status', '==', 0)->count();

    $approvedCount=dst_lrms_masters::where('approve_status', 1)->count();

    $today_date=DATE('Y-m-d');

     $monthExpiryList = DB::select("SELECT id,approve_status,agreement_period_start,agreement_period_end, DATEDIFF(agreement_period_end, '$today_date') remaining_days FROM dst_lrms_masters WHERE '$today_date' BETWEEN DATE_SUB(agreement_period_end, INTERVAL 30 DAY) AND agreement_period_end AND approve_status!=2");

  
     $month_expiry_count=count((array)$monthExpiryList);

     // Total Next 90 days Expiry Count

     $nextExpiryList = DB::select("SELECT id,approve_status,agreement_period_start,agreement_period_end, DATEDIFF(agreement_period_end, '$today_date') remaining_days FROM dst_lrms_masters WHERE '$today_date' BETWEEN DATE_SUB(agreement_period_end, INTERVAL 90 DAY) AND agreement_period_end AND approve_status!=2");

  
      $next_expiry_count=count((array)$nextExpiryList);
       // return view("manager/manager_dashboard",compact('pendingCount','approvedCount','month_expiry_count','next_expiry_count'));
      
         return view('dashboard',compact('pendingCount','approvedCount','month_expiry_count','next_expiry_count'));
    
    }
    public function createFactSheet()
    {
       

      $regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();


      $branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();

      //$cityList=SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS ExtractString from dst_lrm_branch_dtls order by branch_name;

      //$cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");
	  
	  $cityList=dst_city_masters::orderBy('city','ASC')->get();
	  
	  $branchAreaList=dst_branch_area_masters::orderBy('area_name','ASC')->get();
	  
	  //$cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");
	  
        return view('create_fact_sheet',compact('regionList','branchList','cityList','branchAreaList'));
    }
	
	
	/////////////save date//////////////////////////////////////////////
	  public function saveFactData(Request $request)
    {
    
	//echo "<pre>";
	//print_r($_POST);
	//exit;
	 
        $validator = Validator::make($request->all(), [
            //'factsheet_premises_photos' => 'mimes:tiff,pdf,jpeg,bmp,png|max:504800'
            'factsheet_premises_photos.*' => 'mimes:pdf,jpeg,png,jpg|max:50480'
        ],[  

          "factsheet_premises_photos.mimes"=>"Please upload the photos inpdf,jpeg,png,jpg format only"




        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator->errors());
        } 
        else {

                  $data=array();
                    $destinationPath = 'uploads/factsheet_premises';

                           if($request->file('factsheet_premises_photos')!='')
                           {

                                 
                                  foreach($request->file('factsheet_premises_photos') as $image)
                                {
                                    $name=$image->getClientOriginalName();
                                      $imageName = time().'_'.$image->getClientOriginalName();
                                    //$image->move(public_path().'/images/', $name);  
                                    $image->move($destinationPath,$imageName);  
                                    $data[]= $imageName;  
                                }

                           }

                   

            }
    

     // Master

        $region_code                   = request('region_code');
        $factsheet_code                = request('factsheet_code');
        $branch_id                     = request('branch_id');
        
        $branch_location               = request('branch_location');
        $branch_code                   = request('branch_code');
        $branch_type                   = request('branch_type');
        $branch_area                   = request('branch_area');
        $fact_sheet_date               = request('fact_sheet_date');
        $branch_occupancy_date         = request('branch_occupancy_date');
        $address1                      = strtoupper(request('address1'));
        $address2                      = strtoupper(request('address2'));
        $address3                      = strtoupper(request('address3'));
        $addr_state                    = request('addr_state');
        $addr_city                    = request('city');
        $addr_pincode                  = request('addr_pincode');
       $office_tele_phone              = request('office_tele_phone');
        $near_by_highway               = strtoupper(request('near_by_highway'));
        $distance_from_highway         = request('distance_from_highway');
		$distance_from_highway_unit    = request('distance_from_highway_unit');
        $safexpress_connectivity_route = request('safexpress_connectivity_route');
        $property_location_direction   = strtoupper(request('property_location_direction'));
        $nearest_airport               = strtoupper(request('nearest_airport'));
        $nearest_railway_station       = strtoupper(request('nearest_railway_station'));
        $length                        = request('length');
        $length_unit                   = request('length_unit');
        $height                        = request('height');
        $height_unit                   = request('height_unit');
        $breadth                       = request('breadth');
        $breadth_unit                  = request('breadth_unit');
        $platform_height               = request('platform_height');
        $platform_height_unit          = request('platform_height_unit');
        $total_length_breadth          = request('total_length_breadth');
        $total_length_breadth_unit     = request('total_length_breadth_unit');

        $flooring_type                 = request('flooring_type');
        $front_road_breadth            = request('front_road_breadth');
        $front_road_breadth_unit       = request('front_road_breadth_unit');
        $operational_hours             = request('operational_hours');
        $operational_timing_from       = request('operational_timing_from');
        $operational_timing_to         = request('operational_timing_to');
 
        $connectivity_telephone        = request('connectivity_telephone');
		$connectivity_mobile           = request('connectivity_mobile');
        $internet_service_provider     = strtoupper(request('internet_service_provider'));
        $surrounding_front             = strtoupper(request('surrounding_front'));
        $surrounding_back              = strtoupper(request('surrounding_back'));
        $surrounding_left              = strtoupper(request('surrounding_left'));
        $surrounding_right             = strtoupper(request('surrounding_right'));
        $near_by_competitors1          = strtoupper(request('near_by_competitors1'));
        $near_by_competitors1_dis      = request('near_by_competitors1_dis');
		$near_by_competitors1_dis_unit = request('near_by_competitors1_dis_unit');
        $near_by_competitors2          = request('near_by_competitors2');
        $near_by_competitors2_dis      = strtoupper(request('near_by_competitors2_dis'));
		$near_by_competitors2_dis_unit = request('near_by_competitors2_dis_unit');
        $near_by_competitors3          = request('near_by_competitors3');
        $near_by_competitors3_dis      = request('near_by_competitors3_dis');
		$near_by_competitors3_dis_unit = request('near_by_competitors3_dis_unit');
	
        $axis_bank_nearest_branch      = request('office_to_axis_bank');
        $office_to_axis_bank_distance  = request('office_to_axis_bank_distance');
	    $office_to_axis_bank_distance_unit  = request('office_to_axis_bank_distance_unit');

        $nearest_bank_other_than_axis  = request('nearest_bank_other_than_axis');
        $nearest_atm                   = strtoupper(request('nearest_atm'));
        $distance_from_office_to_atm   = request('distance_from_office_to_atm');
        $distance_from_office_to_atm_unit   = request('distance_from_office_to_atm_unit');
		
		
        $associate_name                = strtoupper(request('associate_name'));
        $cordinator_name               = strtoupper(request('cordinator_name'));
        $approved_by                   = strtoupper(request('approved_by'));
        $no_of_owner                   = request('no_of_owner');
        $total_refundable_security_deposits   = request('total_refundable_security_deposits');
        $total_advances                = request('total_advances');
        $total_month_rent              = request('total_month_rent');
        $total_advance_deduction       = request('total_advance_deduction');
        $advances_start_date           = request('advances_start_date');
        $advances_end_date             = request('advances_end_date');

        $payment_system                = request('payment_system');
        $agreement_period_start        = request('agreement_period_start');
         $agreement_period_end         = request('agreement_period_end');
        $notice_period                = request('notice_period');
        $enhancement_clause             = request('enhancement_clause');
        $newly_constructed_for_us      = request('newly_constructed_for_us');
        $last_tenant                  = request('last_tenant');
        $advance_deduction_wef_date    = request('advance_deduction_wef_date');

        $total_length_breadth             = request('total_length_breadth');
        $total_length_breadth_unit        = request('total_length_breadth_unit');
		
		//echo "<pre>";
		//print_r($_POST);
		//exit;
     /////////////////////INPUT DATA VALIDATION START///////////////////////////  

      $validator = Validator::make($request->all(),[
       // 'fact_sheet_date'=>'required|date',
        //'branch_occupancy_date'=>'required|after_or_equal:fact_sheet_date',
       // 'address1'=>'required|alpha_num',
        'addr_pincode'=>'required|regex:/^[1-9][0-9]{5}$/',
        'no_of_owner'=>'required|numeric',
        'total_refundable_security_deposits'=>'required|numeric',
        'total_advances'=>'required|numeric',
        'total_month_rent'=>'required|numeric',
        'total_advance_deduction'=>'required|numeric',
        'agreement_period_start'=>'required|date|before:agreement_period_end',
        'agreement_period_end'=>'required|after:agreement_period_start'
      ],[

        //'fact_sheet_date.required'=>"Factsheet date is required",
       // 'branch_occupancy_date.required'=>'Please enter the branch occupancy date',
       // 'branch_occupancy_date.after_or_equal'=>'Branch occupancy date must be after or equal to factsheet date',
        'address1.required'=>'Please enter the address',
        'addr_pincode.regex'=>'Please enter the correct 6 digit pin code number',
        'addr_pincode.required'=>'Pin code is required',
        'no_of_owner.required'=>'No of owner is required',
        'no_of_owner.numeric'=>'Enter no of owner in numeric value',
        'total_refundable_security_deposits.numeric'=>'Please enter value in numbers only',
        'total_advances.numeric'=>'Please enter the value in numbers',
        'total_month_rent.numeric'=>'Please enter rent in numeric digits',
        'total_advance_deduction.numeric'=>'Please enter value in numeric digits',
        'agreement_period_start.before'=>'Agreement period start must be lower than agreement period end ',
        'agreement_period_end.after'=>'Agreement period end must be greater than agreement period start'
        
      ]);

       if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator->errors());
        } 
        else
        {



        //////////////////////////////INPUT DATA VALIDATION END////////////////////

       try{
		    // To save into lrms master table
       $lrms_master = new dst_lrms_masters();


        $lrms_master->region_code                 =  isset($region_code) ? $region_code : ' ';
        $lrms_master->factsheet_code              =  isset($factsheet_code) ? $factsheet_code : ' ';
        $lrms_master->branch_id                   =  isset($branch_id) ? $branch_id : ' ';
        $lrms_master->branch_location             =  isset($branch_location) ? $branch_location : ' ';
        $lrms_master->branch_code                 =  isset($branch_code) ? $branch_code : ' ';
        $lrms_master->branch_type                 = isset($branch_type) ? $branch_type : ' ';
        $lrms_master->branch_area                 = isset($branch_area) ? $branch_area : ' ';
 
        $lrms_master->fact_sheet_date             = isset($fact_sheet_date) ? $fact_sheet_date : '0000-00-00';
        $lrms_master->branch_occupancy_date       = isset($branch_occupancy_date) ? $branch_occupancy_date : '0000-00-00';
        $lrms_master->address1                    = isset($address1) ? $address1 : ' ';
        $lrms_master->address2                    = isset($address2) ? $address2 : ' ';
        $lrms_master->address3                    = isset($address3) ? $address3 : ' ';
        $lrms_master->city                        = isset($addr_city) ? $addr_city : ' ';
        $lrms_master->state                       = isset($addr_state) ? $addr_state : ' ';
        $lrms_master->postal_code                 = isset($addr_pincode) ? $addr_pincode : 0;
        $lrms_master->office_tele_no              = isset($office_tele_phone) ? $office_tele_phone  : ' ';
        $lrms_master->near_by_highway             = isset($near_by_highway) ? $near_by_highway : ' ';
        $lrms_master->dist_from_highway           = isset($distance_from_highway) ? $distance_from_highway : ' ';
		$lrms_master->dist_from_highway_unit      = isset($distance_from_highway_unit) ? $distance_from_highway_unit : ' ';
        $lrms_master->safex_conectivity_route     = isset($safexpress_connectivity_route) ? $safexpress_connectivity_route : ' ';
        $lrms_master->property_location           = isset($property_location_direction) ? $property_location_direction : ' ';
        $lrms_master->nearest_airport             = isset($nearest_airport) ? $nearest_airport : ' ';
        $lrms_master->nearest_railway_station     = isset($nearest_railway_station) ? $nearest_railway_station : ' ';
        $lrms_master->premises_length             = isset($length) ? $length : 0.0;
        $lrms_master->premises_length_unit        = isset($length_unit) ? $length_unit : ' ';
        $lrms_master->premises_breadth            = isset($breadth) ? $breadth : 0.0;
        $lrms_master->premises_breadth_unit       = isset($breadth_unit) ? $breadth_unit : ' ';

       $lrms_master->premises_area                = isset($total_length_breadth) ? $total_length_breadth : 0.0;
       $lrms_master->premises_area_unit           = isset($total_length_breadth_unit) ? $total_length_breadth_unit : ' ';

        $lrms_master->premises_height             = isset($height) ? $height : 0.0;
        $lrms_master->premises_height_unit        = isset($height_unit) ? $height_unit : ' ';
        $lrms_master->platform_height             = isset($platform_height) ? $platform_height : 0.0;
        $lrms_master->platform_height_unit        = isset($platform_height_unit) ? $platform_height_unit : ' ';
        $lrms_master->flooring_type               = isset($flooring_type) ? $flooring_type : ' ';  
        $lrms_master->front_road_breadth          = isset($front_road_breadth) ? $front_road_breadth : 0.0;  
        $lrms_master->front_road_breadth_unit     = isset($front_road_breadth_unit) ? $front_road_breadth_unit : ' '; 
        $lrms_master->operational_hours           = isset($operational_hours) ? $operational_hours : 0.0;  
        $lrms_master->operational_timing_from     = isset($operational_timing_from) ? $operational_timing_from : ' ';  
        $lrms_master->operational_timing_to       = isset($operational_timing_to) ? $operational_timing_to : ' ';  
       $lrms_master->connectivity_telephone       = isset($connectivity_telephone) ? $connectivity_telephone : ' '; 
       $lrms_master->connectivity_mobile       = isset($connectivity_mobile) ? $connectivity_mobile : ' ';  
	   
	   
       $lrms_master->connectivity_isp             = isset($internet_service_provider) ? $internet_service_provider : ' ';  
       $lrms_master->surrounding_front            = isset($surrounding_front) ? $surrounding_front : ' ';  
       $lrms_master->surrounding_back             = isset($surrounding_back) ? $surrounding_back : ' ';  
       $lrms_master->surrounding_left             = isset($surrounding_left) ? $surrounding_left : ' ';  
       $lrms_master->surrounding_right            = isset($surrounding_right) ? $surrounding_right : ' ';  
       $lrms_master->near_by_competitors1         = isset($near_by_competitors1) ? $near_by_competitors1 : ' ';  
       $lrms_master->near_by_competitors1_dis     = isset($near_by_competitors1_dis) ? $near_by_competitors1_dis : ' ';  
	   $lrms_master->near_by_competitors1_dis_unit     = isset($near_by_competitors1_dis_unit) ? $near_by_competitors1_dis_unit : ' ';  

       $lrms_master->near_by_competitors2         = isset($near_by_competitors2) ? $near_by_competitors2 : ' ';  
       $lrms_master->near_by_competitors2_dis     = isset($near_by_competitors2_dis) ? $near_by_competitors2_dis : ' ';  
	   $lrms_master->near_by_competitors2_dis_unit     = isset($near_by_competitors2_dis_unit) ? $near_by_competitors2_dis_unit : ' ';  
	   
       $lrms_master->near_by_competitors3         = isset($near_by_competitors3) ? $near_by_competitors3 : ' '; 
      $lrms_master->near_by_competitors3_dis      = isset($near_by_competitors3_dis) ? $near_by_competitors3_dis : ' ';  
	   $lrms_master->near_by_competitors3_dis_unit     = isset($near_by_competitors3_dis_unit) ? $near_by_competitors3_dis_unit : ' ';  
	  
	  $lrms_master->axis_bank_nearest_branch     = isset($axis_bank_nearest_branch) ? $axis_bank_nearest_branch : ' ';  

       $lrms_master->office_to_axis_bank_distance  = isset($office_to_axis_bank_distance) ? $office_to_axis_bank_distance : ' ';
	   $lrms_master->office_to_axis_bank_distance_unit  = isset($office_to_axis_bank_distance_unit) ? $office_to_axis_bank_distance_unit : ' ';

       $lrms_master->nearest_bank_other_than_axis  = isset($nearest_bank_other_than_axis) ? $nearest_bank_other_than_axis : ' '; 
       $lrms_master->nearest_atm                   = isset($nearest_atm) ? $nearest_atm : ' ';  
       $lrms_master->distance_from_office_to_atm   = isset($distance_from_office_to_atm) ? $distance_from_office_to_atm : ' ';  
	   
	  $lrms_master->distance_from_office_to_atm_unit   = isset($distance_from_office_to_atm_unit) ? $distance_from_office_to_atm_unit : ' ';  

      $lrms_master->associate_name                = isset($associate_name) ? $associate_name : ' ';  
      $lrms_master->cordinator_name              = isset($cordinator_name) ? $cordinator_name : ' ';  
      $lrms_master->approved_by                  = isset($approved_by) ? $approved_by : ' ';  
      $lrms_master->no_of_owner                 = isset($no_of_owner) ? $no_of_owner : ' ';

      $lrms_master->total_refundable_security_deposits    = isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : 0.0;
      $lrms_master->total_advances               = isset($total_advances) ? $total_advances : 0.0;
      $lrms_master->total_month_rent             = isset($total_month_rent) ? $total_month_rent : 0.0;
      $lrms_master->total_advance_deduction       = isset($total_advance_deduction) ? $total_advance_deduction : 0.0;
      $lrms_master->payment_system                   = isset($payment_system) ? $payment_system : ' ';          
      $lrms_master->agreement_period_start          = isset($agreement_period_start) ? $agreement_period_start : '0000-00-00'; 
      $lrms_master->agreement_period_end            = isset($agreement_period_end) ? $agreement_period_end : '0000-00-00'; 
      $lrms_master->notice_period                   = isset($notice_period) ? $notice_period : ' '; 
      $lrms_master->enhancement_clause              = isset($enhancement_clause) ? $enhancement_clause : ' ';
      $lrms_master->newly_constructed_for_us        = isset($newly_constructed_for_us) ? $newly_constructed_for_us : ' ';
      $lrms_master->last_tenant                     = isset($last_tenant) ? $last_tenant : ' ';
      $lrms_master->advance_deduction_wef_date      = isset($advance_deduction_wef_date) ? $advance_deduction_wef_date : '0000-00-00';
      $lrms_master->created_date                    = date("Y-m-d");
      $lrms_master->created_by                      = Auth::user()->email;
  

       $premises_photos  =  implode("|",$data);

       $lrms_master->factsheet_premises_photos     = isset($premises_photos) ? $premises_photos : ' ';
       
       $lrms_master->save();
	   
	   /*if($lrms_master->save()){
		   echo "Inserted";
	   }else{
		  echo "Not Inserted"; 
	   }
	   
	   exit;*/

    // To save into premises
         $lrms_dtls_documents = new dst_lrms_dtls_documents();
       
       if(!empty($data))
       {

            foreach($data as $doc)
             {
              
               $lrms_dtls_documents->dst_lrms_master_id              = $lrms_master->id;
            $lrms_dtls_documents->doc_type =0;
            $lrms_dtls_documents->attachement = isset($doc) ? $doc : ' ';

             $lrms_dtls_documents->save();

             }


       }
     

       // To save into rental details 
     /* $no_of_increment_number=0;   // Not Needed Now

    $lrms_rental_renewals = new dst_lrms_dtls_rental_renewals();


    $lrms_rental_renewals->dst_lrms_master_id       = isset($lrms_master->id) ? $lrms_master->id : ' ';     
   $lrms_rental_renewals->total_refundable_security_deposits   = isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : ' ';  
        $lrms_rental_renewals->payment_system                    = isset($payment_system) ? $payment_system : ' ';      
       $lrms_rental_renewals->total_month_rent                    = isset($total_month_rent) ? $total_month_rent : 0.0;          
        $lrms_rental_renewals->agreement_period_start                 = isset($agreement_period_start) ? $agreement_period_start : ' '; 
         $lrms_rental_renewals->agreement_period_end                 = isset($agreement_period_end) ? $agreement_period_end : ' '; 
       $lrms_rental_renewals->notice_period                     = isset($notice_period) ? $notice_period : ' '; 
        $lrms_rental_renewals->enhancement_clause               = isset($enhancement_clause) ? $enhancement_clause : ' ';
        $lrms_rental_renewals->newly_constructed_for_us         = isset($newly_constructed_for_us) ? $newly_constructed_for_us : ' ';
       $lrms_rental_renewals->last_tenant                       = isset($last_tenant) ? $last_tenant : ' ';
        $lrms_rental_renewals->total_advances                       = isset($total_advances) ? $total_advances : ' ';
        $lrms_rental_renewals->renewal_start                    = isset($renewal_start) ? $renewal_start : ' ';
        $lrms_rental_renewals->no_of_increment_number                    = isset($no_of_increment_number) ? $no_of_increment_number : 0;

        
         $lrms_rental_renewals->save();
		 */

        //echo  $lrms_rental_renewals->id;
       // exit;

       if($lrms_master->id)
       {
         

           $request->session()->put('master_id', $lrms_master->id);
           $request->session()->put('no_of_owner', $lrms_master->no_of_owner);
           

       }


  // To save into monthly rental details 

  /*

    $lrms_monthly_rental = new dst_lrms_dtls_monthly_rentals();


       $lrms_monthly_rental->dst_lrms_master_id                = isset($lrms_master->id) ? $lrms_master->id : ' ';      
        
       $lrms_monthly_rental->payment_system                   = isset($payment_system) ? $payment_system : ' ';     
        $lrms_monthly_rental->total_month_rent                = isset($total_month_rent) ? $total_month_rent : 0.0;          
      

       $lrms_monthly_rental->save();

*/
       // To save into rent agreement details 


    $lrms_rent_agreements = new dst_lrms_rent_agreements();

    $full_address=$address1 ." ". $address2 ." ". $address3;

	$lrms_rent_agreements->factsheet_code                = isset($factsheet_code) ? $factsheet_code : ' ';  
    $lrms_rent_agreements->dst_lrms_master_id                = isset($lrms_master->id) ? $lrms_master->id : ' ';     

    $lrms_rent_agreements->lease_agreement_start_date        = isset($agreement_period_start) ? $agreement_period_start : ' ';     

    $lrms_rent_agreements->lease_agreement_end_date          = isset($agreement_period_end) ? $agreement_period_end : ' ';     

    $lrms_rent_agreements->premises_address                  = isset($full_address) ? $full_address : ' ';     

    $lrms_rent_agreements->premises_state                    = isset($addr_state) ? $addr_state : ' ';     

    $lrms_rent_agreements->premises_pin_code                = isset($addr_pincode) ? $addr_pincode : ' ';     

    $lrms_rent_agreements->premises_area                    = isset($total_length_breadth) ? $total_length_breadth : ' ';     

    $lrms_rent_agreements->premises_area_unit                = isset($total_length_breadth_unit) ? $total_length_breadth_unit : ' ';    

   


    /////////////////

    $start = Carbon::parse($agreement_period_start);
    $end = Carbon::parse($agreement_period_end);
    //$now = Carbon::now();

     $no_of_days = $end->diffInDays($start);
     $no_of_months=$end->diffInMonths($start);

    $lrms_rent_agreements->lease_period                     = isset($no_of_months) ? $no_of_months : ' ';     

    $lrms_rent_agreements->increment_rate                = isset($enhancement_clause) ? $enhancement_clause : ' ';     

    $lrms_rent_agreements->monthly_rent                = isset($total_month_rent) ? $total_month_rent : ' ';    

    $lease_total_amount=$no_of_months * $total_month_rent;

    $lrms_rent_agreements->lease_total_amount                     = isset($lease_total_amount) ? $lease_total_amount : ' ';  
    $lrms_rent_agreements->notice_period                    = isset($notice_period) ? $notice_period : ' ';   

    $lrms_rent_agreements->no_of_owner                    = isset($no_of_owner) ? $no_of_owner : ' ';   

    $lrms_rent_agreements->total_refundable_security_deposits  = isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : ' ';   


    $lrms_rent_agreements->save();
   
        
	   }catch(\Illuminate\Database\QueryException $ex){ 
	   //echo "here1";
	   //print_r($ex->getMessage());
	   //exit;
	   		   return back()->withError($ex->getMessage());

  //dd($ex->getMessage()); 
  // Note any method of class PDOException can be called on $ex.
}catch(\Exception $ex){
	// echo "here2";
	  // exit;
		   return back()->withError('Something Wrong');
		              // return redirect()->back()->withErrors('Something Wrong');
					 // return redirect()->back()->withErrors($validator->errors());


		   
	   } 
	   }
    
  //$this->createFactSheetPart2();

  return redirect('createFactSheetPart2');


       exit;

    }

  


////////////////////////////////////////////////////////////////////////////////////////////

    public function createFactSheetPart2(Request $request)
    {


       //echo $request->session()->put('no_of_owner', $lrms_master->no_of_owner);


      $master_id= $request->session()->get('master_id');
      $ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)->get();
      $ownerCount = $ownerlist->count() + 1;

      //$totalRentalSum=$this->getRentalSum($master_id);

       $totalRentalSum=\DB::table("dst_lrm_dtls_pro_rental_dtls")->where('dst_lrms_master_id', '=', $master_id)->get()->sum("monthly_rent");

        //$cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");
		
			  $cityList=dst_city_masters::orderBy('city','ASC')->get();

       
        $monthlyRentalquery = \DB::table('dst_lrms_masters')->where('id', '=', $master_id)->get();
        $monthlyRental=$monthlyRentalquery[0]->total_month_rent;
		
		 $ownerActiveData = dst_lrms_details_property_owners::where([['dst_lrms_master_id', '=', $master_id],['status', '=', 1]])->get()->toArray();
     //$ownerBankData = dst_lrm_dtls_pro_bank_dtls::where([['dst_lrms_master_id', '=', $master_id],['status', '=', 1]])->get()->toArray();
     $ownerRentData = dst_lrm_dtls_pro_rental_dtls::where([['dst_lrms_master_id', '=', $master_id],['status', '=', 1]])->get()->toArray();


     //echo "<pre>";
	 //print_r($ownerRentData);
	 //exit;
      return view("create_fact_sheet_part2",compact('ownerCount','totalRentalSum','monthlyRental','cityList','ownerRentData','ownerActiveData'));
	 

    }
    public function getRentalSum($master_id)
    {
      
      //$ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)->get();

      $total_rental_sum=\DB::table("dst_lrm_dtls_pro_rental_dtls")->where('dst_lrms_master_id', '=', $master_id)->get()->sum("monthly_rent");

      //print_r($total_rental_sum);
      return $total_rental_sum;

    }

    public function saveFactSheetPart2(Request $request)
    {
    
      $total_monthly_rent=request('total_monthly_rent');
      $totalRentalSum=request('totalRentalSum');

      $remaining_rent=$total_monthly_rent - $totalRentalSum;

      /////////////////
      // $validator = Validator::make($request->all(), [
      //             //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480'
      //             'factsheet_premises_photos.*' => 'mimes:jpeg,png,jpg|max:50480'
      //         ]);

      //         if ($validator->fails()) 
      //         {
      //             return redirect()->back()->withErrors($validator->errors());
      //         } 
      //         else {

      /////////
     
     $validator = Validator::make($request->all(), [
            //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480'
            'month_rent' => 'lte:'. ($remaining_rent) .'',
          //  'owner_cancelled_cheque_copy' => 'mimes:pdf,jpeg,png,jpg|max:5048|required',
          //  'owner_pan_card_copy' => 'mimes:pdf,jpeg,png,jpg|max:5048|required',
           // 'owner_aadhaar_card_copy' => 'mimes:pdf,jpeg,png,jpg|max:5048|required',
            //'owner_name'=>'required|alpha',
           // 'payee_name'=>'required|alpha',
            'landlord_address'=>'required',
            'pincode'=>'required|regex:/^[1-9][0-9]{5}$/',
            'email'=>'required|email',
            //'pan_of_payee'=>'regex:/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/',
           // 'gstn_of_payee'=>'regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/',
            'refundable_security_deposits'=>'required|numeric',
            'advances'=>'required|numeric',
            'month_rent'=>'required|numeric',
            'advance_deduction'=>'required|numeric',
           // 'payee_name_for_rent'=>'required|alpha',
            //'branch_name'=>'required|alpha',
            //'bank_name'=>'required|alpha',
            'account_no'=>'required|numeric',
            'ifsc_code'=>'required|alpha_num',
            'supplier_no'=>'required|unique'
           
        ],[

        //  'owner_cancelled_cheque_copy.mimes'=>'Please upload document in pdf,jpeg,png,jpg only',
         // 'owner_cancelled_cheque_copy.required'=>'Owner cancelled cheque copy is required',
         // 'owner_pan_card_copy.mimes'=>'Please upload document in pdf,jpeg,png,jpg only',
         // 'owner_pan_card_copy.required'=>'Owner pan cord copy is required',
         // 'owner_aadhaar_card_copy.mimes'=>'Please upload document in pdf,jpeg,png,jpg only',
          //'owner_aadhaar_card_copy.required'=>'Owner aadhaar card copy is required',
         // 'owner_name.required'=>'Owner name is required ',
         // 'owner_name.alpha'=>'Pleae enter ownre name in alphabets only',
         // 'payee_name.required'=>'Payee name is required',
         // 'payee_name.alpha'=>'Please enter payee name in alphabets only',
          'landlord_address.required'=>'Land lord address is required',
          'pincode.required'=>'Pincode is required',
          'pincode.regex'=>'Plese enter correct 6 digit  pincode',
          'email.required'=>'Email is required',
          'email.email'=>'Please enter correct email',
          
          //'pan_of_payee.required'=>'Pan no is required',
          'pan_of_payee.regex'=>'Please enter correct pan number',
         // 'gstn_of_payee.required'=>'GSTN is required',
		//'gstn_of_payee.regex'=>'Please enter correct gstn number',
          'refundable_security_deposits.numeric'=>'Please enter ref.sec.deposit in numbers only',
          'advances.numeric'=>'Enter the advances in numeric value',
          'month_rent.numeric'=>'Please enter the monthly rent in numeric value',
          'advance_deduction.numeric'=>'Enter the advances deduction in numeric value',
        //  'payee_name_for_rent.alpha'=>'Enter the payee name in alphabets',
         // 'branch_name.alpha'=>'Please enter the Bank branch name in alphabets only',
          //'bank_name.alpha'=>'Please enter the Bank name in alphabets only',
          'account_no.numeric'=>'Please enter the Bank account number in digits only',
          'ifsc_code.alpha_num'=>'Enter the correct ifsc code',





        ]);

        if ($validator->fails()) 
        {
           
            return redirect()->back()->withErrors($validator->errors());
        } 
        else {
           

                    $cancelled_cheque_destinationPath = 'uploads/owner_cancelled_cheque';
                    $owner_pan_card_destinationPath = 'uploads/owner_pan_card';
                    $owner_aadhar_card_destinationPath = 'uploads/owner_aadhaar_card';

                    if($request->file('owner_cancelled_cheque_copy')!='')
                    {
                        $image_cancelled=$request->file('owner_cancelled_cheque_copy');
                                      $imageName_cancelled = time().'_'.$image_cancelled->getClientOriginalName();
                                    $image_cancelled->move($cancelled_cheque_destinationPath,$imageName_cancelled);  
                    }
                    if($request->file('owner_pan_card_copy')!='')
                    {
                        $image_pan_card=$request->file('owner_pan_card_copy');
                                      $imageName_pan_card = time().'_'.$image_pan_card->getClientOriginalName();
                                    $image_pan_card->move($owner_pan_card_destinationPath,$imageName_pan_card);  
                    }
                     if($request->file('owner_aadhaar_card_copy')!='')
                    {
                        $image_aadhaar_card=$request->file('owner_aadhaar_card_copy');
                                      $imageName_aadhaar_card = time().'_'.$image_aadhaar_card->getClientOriginalName();
                                    $image_aadhaar_card->move($owner_aadhar_card_destinationPath,$imageName_aadhaar_card);  
                    }

            

        $no_of_owner= $request->session()->get('no_of_owner');

     $master_id= $request->session()->get('master_id');
    
     $ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)
            ->get();
    // echo "ownerCount >> ". $ownerCount = $ownerlist->count();
      $ownerCount = $ownerlist->count();

      $request->session()->put('ownerCount', $ownerCount);
	  /*
	  print_r($ownerCount);
	 
	  //$lrms_master = new dst_lrms_masters();
	  
	  $masterData = dst_lrms_masters::where('id', '=', $master_id)->first();
	 echo  $get_no_owner=$masterData['no_of_owner'];
	 echo "<pre>";
print_r($masterData);
 exit;
 */
//0<2

$masterData = dst_lrms_masters::where('id', '=', $master_id)->first();
$factsheet_code=isset($masterData['factsheet_code']) ? $masterData['factsheet_code'] : ' ';
	 
    if($ownerCount<$no_of_owner){
      
    // Owner
        $owner_name        = strtoupper(request('owner_name'));
		$supplier_no        = request('supplier_no');
        $payee_name        = strtoupper(request('payee_name'));
        $landlord_address  = strtoupper(request('landlord_address'));
        $district          = request('city');
         $state             = request('addr_state');
         $email             = request('email');
         $contact_no        = request('contact_no');
         $pan_of_payee      = strtoupper(request('pan_of_payee'));
         $gstn_of_payee      = strtoupper(request('gstn_of_payee'));
         $tds_of_payee        =request('tds_of_payee');
		 $pincode        =request('pincode');

    

      // Rent
      $occupation_of_landlord      = strtoupper(request('occupation_of_landlord'));
        $refundable_security_deposits      = request('refundable_security_deposits');
        $advances           = request('advances');
        $month_rent      = request('month_rent');
         $advance_deduction      = request('advance_deduction');
        $special_remarks      = request('special_remarks');
         $payment_system      = request('payment_system');
         $agreement_period      = request('agreement_period');
        $notice_period      = request('notice_period');
        $enhancement_clause      = request('enhancement_clause');
         $newly_constructed_for_us      = request('newly_constructed_for_us');
         $last_tenants      = strtoupper(request('last_tenants'));



      // Bank
      $payee_name_for_rent      =strtoupper( request('payee_name_for_rent'));
        $branch_name      = strtoupper(request('branch_name'));
        $account_type      = request('account_type');
        $bank_name      = strtoupper(request('bank_name'));
         $account_no      = request('account_no');
        $ifsc_code      = request('ifsc_code');

        $master_id= $request->session()->get('master_id');

         $lrms_property_owners = new dst_lrms_details_property_owners();

	    $lrms_property_owners->factsheet_code = isset($factsheet_code) ? $factsheet_code : ' '; 
        $lrms_property_owners->property_owner_name = request('owner_name');
	    $lrms_property_owners->supplier_no = request('supplier_no');
        $lrms_property_owners->payee_name = request('payee_name');
        $lrms_property_owners->property_owner_address = request('landlord_address');
        $lrms_property_owners->property_owner_district = isset($district) ? $district : ' ';  
        $lrms_property_owners->property_owner_state = isset($state) ? $state : ' '; 
        $lrms_property_owners->property_owner_postal_code = isset($pincode) ? $pincode : ' ';
        $lrms_property_owners->property_owner_email = isset($email) ? $email : ' ';
        $lrms_property_owners->property_owner_contact_no = isset($contact_no) ? $contact_no : ' ';
        $lrms_property_owners->payee_pan = isset($pan_of_payee) ? $pan_of_payee : ' ';
        $lrms_property_owners->payee_gstin = isset($gstn_of_payee) ? $gstn_of_payee : ' ';
        $lrms_property_owners->payee_tds = isset($tds_of_payee) ? $tds_of_payee : ' ';
		$lrms_property_owners->property_owner_occupation = isset($occupation_of_landlord) ? $occupation_of_landlord : ' ';  



        $lrms_property_owners->owner_cancelled_cheque_copy = isset($imageName_cancelled) ? $imageName_cancelled : ' ';
        $lrms_property_owners->owner_pan_card_copy = isset($imageName_pan_card) ? $imageName_pan_card : ' ';
        $lrms_property_owners->owner_aadhaar_card_copy = isset($imageName_aadhaar_card) ? $imageName_aadhaar_card : ' ';
      

         $lrms_property_owners->dst_lrms_master_id = $master_id;


        $lrms_property_owners->save();


        $lrms_property_rental = new dst_lrm_dtls_pro_rental_dtls();
	    $lrms_property_rental->factsheet_code = isset($factsheet_code) ? $factsheet_code : ' '; 
        $lrms_property_rental->refundable_security_deposit = request('refundable_security_deposits');

        $lrms_property_rental->advances = request('advances');

        $lrms_property_rental->monthly_rent = request('month_rent');
        $lrms_property_rental->advance_deduction = request('advance_deduction');
        $lrms_property_rental->special_remarks = request('special_remarks');
        $lrms_property_rental->payment_system = request('payment_system');
        
        $lrms_property_rental->enhancement_clause = request('enhancement_clause');
      
         
        $lrms_property_rental->dst_lrms_master_id = $master_id;

       $lrms_property_rental->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;

       $lrms_property_rental->save();

        //echo $lrms_property_rental->id;

      /// exit;



       $lrms_property_bank = new dst_lrm_dtls_pro_bank_dtls();
       
	    $lrms_property_bank->factsheet_code = isset($factsheet_code) ? $factsheet_code : ' '; 
        $lrms_property_bank->payee_name = request('payee_name_for_rent');
        $lrms_property_bank->branch_name = request('branch_name');
        $lrms_property_bank->account_type = request('account_type');
        $lrms_property_bank->bank_name = request('bank_name');
        $lrms_property_bank->account_no = request('account_no');
        $lrms_property_bank->ifsc_code = request('ifsc_code');
		
		$lrms_property_bank->micr_code = request('micr_code');
		$lrms_property_bank->bank_address = request('bank_address');

         $lrms_property_bank->dst_lrms_master_id = $master_id;

       $lrms_property_bank->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;

       $lrms_property_bank->save();

     // echo  $lrms_property_bank->id;

       //exit;

       // To save into dst_lrms_dtls_documents

        if($request->file('owner_cancelled_cheque_copy')!='')
                    {
                      $lrms_dtls_documents = new dst_lrms_dtls_documents();
                      $lrms_dtls_documents->factsheet_code = isset($factsheet_code) ? $factsheet_code : ' '; 
                      $lrms_dtls_documents->dst_lrms_master_id              = $master_id;
                      $lrms_dtls_documents->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;
                      $lrms_dtls_documents->doc_type =1;
                      $lrms_dtls_documents->attachement = isset($imageName_cancelled) ? $imageName_cancelled : ' ';

                      $lrms_dtls_documents->save(); 
                    }
                    if($request->file('owner_pan_card_copy')!='')
                    {
                        
                        $lrms_dtls_documents_pan = new dst_lrms_dtls_documents();
                      $lrms_dtls_documents_pan->factsheet_code = isset($factsheet_code) ? $factsheet_code : ' '; 
                      $lrms_dtls_documents_pan->dst_lrms_master_id              = $master_id;
                      $lrms_dtls_documents_pan->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;
                      $lrms_dtls_documents_pan->doc_type =2;
                      $lrms_dtls_documents_pan->attachement = isset($imageName_pan_card) ? $imageName_pan_card : ' ';

                      $lrms_dtls_documents_pan->save();
 
                    }
                     if($request->file('owner_aadhaar_card_copy')!='')
                    {
                        $lrms_dtls_documents_aadhaar= new dst_lrms_dtls_documents();
                        $lrms_dtls_documents_aadhaar->factsheet_code = isset($factsheet_code) ? $factsheet_code : ' '; 
                        $lrms_dtls_documents_aadhaar->dst_lrms_master_id              = $master_id;
                        $lrms_dtls_documents_aadhaar->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;
                        $lrms_dtls_documents_aadhaar->doc_type =3;
                        $lrms_dtls_documents_aadhaar->attachement = isset($imageName_aadhaar_card) ? $imageName_aadhaar_card : ' ';

                        $lrms_dtls_documents_aadhaar->save(); 
                    }


          //return view('create_fact_sheet_part2');
    	  
    	  $ownerlistAgain = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)
                ->get();
        // echo "ownerCount >> ". $ownerCount = $ownerlist->count();
          $ownerCountAgain = $ownerlistAgain->count();
    	  
    	  if($ownerCountAgain<$no_of_owner){
           return redirect('createFactSheetPart2');
    	  }else{
    		   return redirect()->route('home');

    	  }

       
    }else{
 //return view('home');

 //return redirect('home');

 return redirect()->route('home');


    }

                   

            }
   

    }

 public function logout () 
 {
    //logout user
    auth()->logout();
    // redirect to homepage
    return redirect('/');
}

public function updateFactData(Request $request)
    {
       echo "<pre>";
         print_r($_POST);
        exit;


     // Master

        $region_code                   = request('region_code');
        $factsheet_code                = request('factsheet_code');
        $branch_id                     = request('branch_id');
        
        $branch_location               = request('branch_location');
        $branch_code                   = request('branch_code');
        $branch_type                   = request('branch_type');
        $fact_sheet_date               = request('fact_sheet_date');
        $branch_occupancy_date         = request('branch_occupancy_date');
		$branch_inactive_date		   = request ('branch_inactive_date');
		$branch_vacation_date		   = request ('branch_vacation_date');
		
		
		
        $address1                      = strtoupper(request('address1'));
        $address2                      = strtoupper(request('address2'));
        $address3                      = strtoupper(request('address3'));
        $addr_state                    = request('addr_state');
        $addr_pincode                  = request('addr_pincode');
       $office_tele_phone              = request('office_tele_phone');
        $near_by_highway               = strtoupper(request('near_by_highway'));
        $distance_from_highway         = request('distance_from_highway');
        $safexpress_connectivity_route = strtoupper(request('safexpress_connectivity_route'));
        $property_location_direction   = strtoupper(request('property_location_direction'));
        $nearest_airport               = strtoupper(request('nearest_airport'));
        $nearest_railway_station       = strtoupper(request('nearest_railway_station'));
        $length                        = request('length');
        $length_unit                   = request('length_unit');
        $height                        = request('height');
        $height_unit                   = request('height_unit');
        $breadth                       = request('breadth');
        $breadth_unit                  = request('breadth_unit');
        $platform_height               = request('platform_height');
        $platform_height_unit          = request('platform_height_unit');
        //$cantiliver_length             = request('cantiliver_length');
        //$cantiliver_length_unit        = request('cantiliver_length_unit');
        $flooring_type                 = request('flooring_type');
        $front_road_breadth            = request('front_road_breadth');
        $front_road_breadth_unit       = request('front_road_breadth_unit');
        $operational_hours             = request('operational_hours');
        $operational_timing_from       = request('operational_timing_from');
        $operational_timing_to         = request('operational_timing_to');
 
        $connectivity_telephone        = request('connectivity_telephone');
        $internet_service_provider     = request('internet_service_provider');
        $surrounding_front             = strtoupper(request('surrounding_front'));
        $surrounding_back              = strtoupper(request('surrounding_back'));
        $surrounding_left              = strtoupper(request('surrounding_left'));
        $surrounding_right             = strtoupper(request('surrounding_right'));
        $near_by_competitors1          = strtoupper(request('near_by_competitors1'));
        $near_by_competitors1_dis     = request('near_by_competitors1_dis');
        $near_by_competitors2          = strtoupper(request('near_by_competitors2'));
        $near_by_competitors2_dis     = request('near_by_competitors2_dis');
        $near_by_competitors3          = strtoupper(request('near_by_competitors3'));
        $near_by_competitors3_dis     = request('near_by_competitors3_dis');
        $axis_bank_nearest_branch      = strtoupper(request('axis_bank_nearest_branch'));
        $office_to_axis_bank_distance  = request('office_to_axis_bank_distance');
        $nearest_bank_other_than_axis  = strtoupper(request('nearest_bank_other_than_axis'));
        $nearest_atm                   = strtoupper(request('nearest_atm'));
        $distance_from_office_to_atm   = request('distance_from_office_to_atm');
        $associate_name                = strtoupper(request('associate_name'));
        $cordinator_name               = strtoupper(request('cordinator_name'));
        $approved_by                   = strtoupper(request('approved_by'));
        $no_of_owner                   = request('no_of_owner');
        $total_refundable_security_deposits   = request('total_refundable_security_deposits');
        $total_advances                = request('total_advances');
        $total_month_rent              = request('total_month_rent');
        $total_advance_deduction       = request('total_advance_deduction');
        $advances_start_date           = request('advances_start_date');
        $advances_end_date             = request('advances_end_date');

        $payment_system                = request('payment_system');
        $agreement_period_start        = request('agreement_period_start');
         $agreement_period_end         = request('agreement_period_end');
        $notice_period                = request('notice_period');
        $enhancement_clause             = request('enhancement_clause');
        $newly_constructed_for_us      = request('newly_constructed_for_us');
        $last_tenant                  = strtoupper(request('last_tenant'));
        $advance_deduction_wef_date                  = request('advance_deduction_wef_date');

        $total_length_breadth             = request('total_length_breadth');
        $total_length_breadth_unit        = request('total_length_breadth_unit');
       
       
       
        

         
        // To save into lrms master table
       $lrms_master = new dst_lrms_masters();


        $lrms_master->region_code                 =  isset($region_code) ? $region_code : ' ';
        $lrms_master->factsheet_code              =  isset($factsheet_code) ? $factsheet_code : ' ';
        $lrms_master->branch_id                   =  isset($branch_id) ? $branch_id : ' ';


        $lrms_master->branch_location             =  isset($branch_location) ? $branch_location : ' ';
        $lrms_master->branch_code                 =  isset($branch_code) ? $branch_code : ' ';
        $lrms_master->branch_type                 = isset($branch_type) ? $branch_type : ' ';
        $lrms_master->fact_sheet_date             = isset($fact_sheet_date) ? $fact_sheet_date : ' ';
        $lrms_master->branch_occupancy_date       = isset($branch_occupancy_date) ? $branch_occupancy_date : ' ';
		
		 $lrms_master->inactive_date      		  = isset($branch_inactive_date) ? $branch_inactive_date : '0000-00-00';
		 $lrms_master->vacation_date      	      = isset($branch_vacation_date) ? $branch_vacation_date : '0000-00-00';
		 
        $lrms_master->address1                    = isset($address1) ? $address1 : ' ';
        $lrms_master->address2                    = isset($address2) ? $address2 : ' ';
        $lrms_master->address3                    = isset($address3) ? $address3 : ' ';
        $lrms_master->state                       = isset($addr_state) ? $addr_state : ' ';
        $lrms_master->postal_code                 = isset($addr_pincode) ? $addr_pincode : 0;
        $lrms_master->office_tele_no              = isset($office_tele_phone) ? $office_tele_phone  : ' ';
        $lrms_master->near_by_highway             = isset($near_by_highway) ? $near_by_highway : ' ';
        $lrms_master->dist_from_highway           = isset($distance_from_highway) ? $distance_from_highway : ' ';
        $lrms_master->safex_conectivity_route     = isset($safexpress_connectivity_route) ? $safexpress_connectivity_route : ' ';
        $lrms_master->property_location           = isset($property_location_direction) ? $property_location_direction : ' ';
        $lrms_master->nearest_airport             = isset($nearest_airport) ? $nearest_airport : ' ';
        $lrms_master->nearest_railway_station     = isset($nearest_railway_station) ? $nearest_railway_station : ' ';
        $lrms_master->premises_length             = isset($length) ? $length : 0.0;
        $lrms_master->premises_length_unit        = isset($length_unit) ? $length_unit : ' ';
        $lrms_master->premises_breadth            = isset($breadth) ? $breadth : 0.0;
        $lrms_master->premises_breadth_unit       = isset($breadth_unit) ? $breadth_unit : ' ';
        $lrms_master->premises_height             = isset($height) ? $height : 0.0;
        $lrms_master->premises_height_unit        = isset($height_unit) ? $height_unit : ' ';
        $lrms_master->platform_height             = isset($platform_height) ? $platform_height : 0.0;
        $lrms_master->platform_height_unit        = isset($platform_height_unit) ? $platform_height_unit : ' ';
       // $lrms_master->cantiliver_length           = isset($cantiliver_length) ? $cantiliver_length : ' ';
        //$lrms_master->cantiliver_length_unit      = isset($cantiliver_length_unit) ? $cantiliver_length_unit : ' ';
        $lrms_master->flooring_type               = isset($flooring_type) ? $flooring_type : ' ';  
        $lrms_master->front_road_breadth          = isset($front_road_breadth) ? $front_road_breadth : 0.0;  
        $lrms_master->front_road_breadth_unit     = isset($front_road_breadth_unit) ? $front_road_breadth_unit : ' '; 
        $lrms_master->operational_hours           = isset($operational_hours) ? $operational_hours : 0.0;  
        $lrms_master->operational_timing_from     = isset($operational_timing_from) ? $operational_timing_from : ' ';  
        $lrms_master->operational_timing_to       = isset($operational_timing_to) ? $operational_timing_to : ' ';  
       $lrms_master->connectivity_telephone       = isset($connectivity_telephone) ? $connectivity_telephone : ' ';  
       $lrms_master->connectivity_isp             = isset($internet_service_provider) ? $internet_service_provider : ' ';  
       $lrms_master->surrounding_front            = isset($surrounding_front) ? $surrounding_front : ' ';  
       $lrms_master->surrounding_back             = isset($surrounding_back) ? $surrounding_back : ' ';  
       $lrms_master->surrounding_left             = isset($surrounding_left) ? $surrounding_left : ' ';  
       $lrms_master->surrounding_right            = isset($surrounding_right) ? $surrounding_right : ' ';  
       $lrms_master->near_by_competitors1         = isset($near_by_competitors1) ? $near_by_competitors1 : ' ';  
       $lrms_master->near_by_competitors1_dis     = isset($near_by_competitors1_dis) ? $near_by_competitors1_dis : ' ';  
       $lrms_master->near_by_competitors2         = isset($near_by_competitors2) ? $near_by_competitors2 : ' ';  
       $lrms_master->near_by_competitors2_dis     = isset($near_by_competitors2_dis) ? $near_by_competitors2_dis : ' ';  
       $lrms_master->near_by_competitors3         = isset($near_by_competitors3) ? $near_by_competitors3 : ' '; 
      $lrms_master->near_by_competitors3_dis      = isset($near_by_competitors3_dis) ? $near_by_competitors3_dis : ' ';  
       $lrms_master->near_by_competitors3         = isset($near_by_competitors3) ? $near_by_competitors3 : ' ';   
       $lrms_master->axis_bank_nearest_branch     = isset($axis_bank_nearest_branch) ? $axis_bank_nearest_branch : ' ';  

       $lrms_master->office_to_axis_bank_distance  = isset($office_to_axis_bank_distance) ? $office_to_axis_bank_distance : ' '; 
       $lrms_master->nearest_bank_other_than_axis  = isset($nearest_bank_other_than_axis) ? $nearest_bank_other_than_axis : ' '; 
       $lrms_master->nearest_atm                   = isset($nearest_atm) ? $nearest_atm : ' ';  
       $lrms_master->distance_from_office_to_atm   = isset($distance_from_office_to_atm) ? $distance_from_office_to_atm : ' ';  
       $lrms_master->associate_name                = isset($associate_name) ? $associate_name : ' ';  
       $lrms_master->cordinator_name              = isset($cordinator_name) ? $cordinator_name : ' ';  
       $lrms_master->approved_by                  = isset($approved_by) ? $approved_by : ' ';  
        $lrms_master->no_of_owner                 = isset($no_of_owner) ? $no_of_owner : ' ';

    $lrms_master->total_refundable_security_deposits    = isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : 0.0;
      $lrms_master->total_advances               = isset($total_advances) ? $total_advances : 0.0;
      $lrms_master->total_month_rent             = isset($total_month_rent) ? $total_month_rent : 0.0;
     $lrms_master->total_advance_deduction       = isset($total_advance_deduction) ? $total_advance_deduction : 0.0;
    //$lrms_master->advances_start_date            = isset($advances_start_date) ? $advances_start_date : ' ';

     //$lrms_master->advances_end_date             = isset($advances_end_date) ? $advances_end_date : ' ';


       $lrms_master->payment_system                            = isset($payment_system) ? $payment_system : ' ';          
        $lrms_master->agreement_period_start                        = isset($agreement_period_start) ? $agreement_period_start : ' '; 

        $lrms_master->agreement_period_end                        = isset($agreement_period_end) ? $agreement_period_end : ' '; 
        $lrms_master->notice_period                           = isset($notice_period) ? $notice_period : ' '; 
        $lrms_master->enhancement_clause                       = isset($enhancement_clause) ? $enhancement_clause : ' ';
        $lrms_master->newly_constructed_for_us                 = isset($newly_constructed_for_us) ? $newly_constructed_for_us : ' ';
        $lrms_master->last_tenant                              = isset($last_tenant) ? $last_tenant : ' ';
        $lrms_master->advance_deduction_wef_date               = isset($advance_deduction_wef_date) ? $advance_deduction_wef_date : ' ';
        $lrms_master->created_date                                   = date("Y-m-d");

       $lrms_master->save();
      //echo $lrms_master->id;


      // exit;

       // To save into rental details 
      $no_of_increment_number=0;

    $lrms_rental_renewals = new dst_lrms_dtls_rental_renewals();


    $lrms_rental_renewals->dst_lrms_master_id                = isset($lrms_master->id) ? $lrms_master->id : ' ';     

   $lrms_rental_renewals->total_refundable_security_deposits   = isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : ' ';  
        $lrms_rental_renewals->payment_system                    = isset($payment_system) ? $payment_system : ' ';      
       $lrms_rental_renewals->total_month_rent                    = isset($total_month_rent) ? $total_month_rent : 0.0;          
        $lrms_rental_renewals->agreement_period_start                 = isset($agreement_period_start) ? $agreement_period_start : ' '; 
         $lrms_rental_renewals->agreement_period_end                 = isset($agreement_period_end) ? $agreement_period_end : ' '; 
       $lrms_rental_renewals->notice_period                     = isset($notice_period) ? $notice_period : ' '; 
        $lrms_rental_renewals->enhancement_clause               = isset($enhancement_clause) ? $enhancement_clause : ' ';
        $lrms_rental_renewals->newly_constructed_for_us         = isset($newly_constructed_for_us) ? $newly_constructed_for_us : ' ';
       $lrms_rental_renewals->last_tenant                       = isset($last_tenant) ? $last_tenant : ' ';
        $lrms_rental_renewals->total_advances                       = isset($total_advances) ? $total_advances : ' ';
        $lrms_rental_renewals->renewal_start                    = isset($renewal_start) ? $renewal_start : ' ';
        $lrms_rental_renewals->no_of_increment_number                    = isset($no_of_increment_number) ? $no_of_increment_number : 0;

        

         $lrms_rental_renewals->save();

        //echo  $lrms_rental_renewals->id;
       // exit;

       if($lrms_master->id)
       {
         

           $request->session()->put('master_id', $lrms_master->id);
           $request->session()->put('no_of_owner', $lrms_master->no_of_owner);
           

       

       }


  // To save into monthly rental details 


    $lrms_monthly_rental = new dst_lrms_dtls_monthly_rentals();


       $lrms_monthly_rental->dst_lrms_master_id                = isset($lrms_master->id) ? $lrms_master->id : ' ';      
        
       $lrms_monthly_rental->payment_system                = isset($payment_system) ? $payment_system : ' ';     
        $lrms_monthly_rental->total_month_rent                = isset($total_month_rent) ? $total_month_rent : 0.0;          
      
      

  $lrms_monthly_rental->save();


//$this->createFactSheetPart2();

return redirect('createFactSheetPart2');

//echo  $lrms_monthly_rental->id;
       exit;

    }
public function test22(){
	
	
	return view('test22');
	
}
public function createFactSheet2()
    {
       

      $regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();


      $branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();

      //$cityList=SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS ExtractString from dst_lrm_branch_dtls order by branch_name;

      //$cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");
	  
	  $cityList=dst_city_masters::orderBy('city','ASC')->get();
	  
	  //$cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");
	  
        return view('create_fact_sheet_25_2',compact('regionList','branchList','cityList'));
    }
	public function createUser(){
		
		        return view('create_user');

		
	}
    
}
