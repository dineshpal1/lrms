<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//use Session;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\View;

use Illuminate\Routing\Route;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;


use PDF;

//use App\Http\Requests;
 
use App\dst_lrms_masters;
use App\dst_lrms_details_property_owners;
use App\dst_lrm_dtls_pro_rental_dtls;
use App\dst_lrm_dtls_pro_bank_dtls;
use App\dst_lrms_rent_agreements;
use App\dst_region_masters;
use App\dst_lrm_branch_dtls;
use App\dst_lrms_dtls_documents;
use App\dst_lrms_dtls_rental_renewals;
use App\dst_city_masters;
use App\dst_lrms_dtls_monthly_rentals;
use App\dst_branch_area_masters;

use DateTime;
use Illuminate\Support\Carbon;



class FactSheetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		date_default_timezone_set('Asia/Kolkata');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
         return view('layouts/adminLayout/admin_design');
    }
    public function createFactSheet()
    {
        //return view('home');
        //return view('layouts/adminLayout/admin_design');
        return view('create_fact_sheet');


    }
    public function saveFactData(Request $request)
    {
        echo "<pre>";
        print_r($_POST);
       exit;

     // Master

        $branch_location = request('branch_location');
        $branch_code     = request('branch_code');
        $branch_type     = request('branch_type');
        $fact_sheet_date = request('fact_sheet_date');
        $address1        = request('address1');
        $address2        = request('address2');
        $address3        = request('address3');
        $addr_state      = request('addr_state');
        $addr_pincode    = request('addr_pincode');
       $office_tele_phone   = request('office_tele_phone');
        $near_by_highway = request('near_by_highway');
        $distance_from_highway = request('distance_from_highway');
        $safexpress_connectivity_route = request('safexpress_connectivity_route');
        $property_location_direction = request('property_location_direction');
        $nearest_airport = request('nearest_airport');
        $nearest_railway_station = request('nearest_railway_station');
        $length = request('length');
        $height = request('height');
        $flooring_type = request('flooring_type');
        $operational_hours = request('operational_hours');
        $breadth = request('breadth');
        $platform_height = request('platform_height');
        $front_road_breadth = request('front_road_breadth');
        $timings = request('timings');
        $total_lb_sqt = request('total_lb_sqt');
        $cantiliver_length = request('cantiliver_length');
        $front = request('front');
        $back = request('back');
        $left = request('left');
        $right = request('right');
        $near_by_competitors = request('near_by_competitors');
        $axis_bank_nearest_branch = request('axis_bank_nearest_branch');
        $office_to_axis_bank_distance = request('office_to_axis_bank_distance');
        $nearest_bank_other_than_axis = request('nearest_bank_other_than_axis');
        $nearest_atm = request('nearest_atm');
        $distance_from_office_to_atm = request('distance_from_office_to_atm');
        $connectivity_telephone = request('connectivity_telephone');
        $internet_service_provider = request('internet_service_provider');
        $associate_name = request('associate_name');
        $cordinator_name = request('cordinator_name');
        $approved_by = request('approved_by');

        $no_of_owner = request('no_of_owner');




         
        // To save into lrms master table
$lrms_master = new dst_lrms_masters();


        $lrms_master->branch_location = request('branch_location');
        $lrms_master->branch_code = request('branch_code');
        $lrms_master->branch_type = request('branch_type');
        $lrms_master->fact_sheet_date = request('fact_sheet_date');
        $lrms_master->address1 = request('address1');
        $lrms_master->address2 = request('address2');
        $lrms_master->address3 = request('address3');
        $lrms_master->state = $addr_state;
        $lrms_master->postal_code = $addr_pincode;
        $lrms_master->office_tele_no = request('office_tele_phone');
        $lrms_master->near_by_highway = request('near_by_highway');
        $lrms_master->dist_from_highway = request('distance_from_highway');
        $lrms_master->safex_conectivity_route = request('safexpress_connectivity_route');
        $lrms_master->property_location = request('property_location_direction');
        $lrms_master->nearest_airport = request('nearest_airport');
        $lrms_master->nearest_railway_station = request('nearest_railway_station');
        $lrms_master->premises_length = request('length');
        $lrms_master->premises_height = request('height');
        $lrms_master->flooring_type1 = request('flooring_type');
        $lrms_master->operational_hours = request('operational_hours');
        $lrms_master->premises_breadth = request('breadth');
        $lrms_master->platform_height = request('platform_height');
        $lrms_master->front_road_breadth = request('front_road_breadth');
        $lrms_master->operational_timing_from = request('timings');

        $lrms_master->no_of_owner = request('no_of_owner');

       $lrms_master->save();



       if($lrms_master->id)
       {

      

//$email=1;


 $request->session()->put('master_id', $lrms_master->id);
 $request->session()->put('no_of_owner', $lrms_master->no_of_owner);
 

//echo $name= $request->session()->get('master_id');

 return $lrms_master->id;




       }


       exit;
/*


        
        $no_of_owner = request('no_of_owner');

      // Owner
        $owner_name        = request('owner_name');
        $payee_name        = request('payee_name');
        $landlord_address  = request('landlord_address');
        $district          = request('district');
        $state             = request('state');
        $pincode           = request('pincode');
        $email             = request('email');
        $contact_no        = request('contact_no');
        $pan_of_payee      = request('pan_of_payee');
        $gstn_of_payee      = request('gstn_of_payee');


      // Rent
      $occupation_of_landlord      = request('occupation_of_landlord');
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
        $last_tenants      = request('last_tenants');



      // Bank
      $payee_name_for_rent      = request('payee_name_for_rent');
        $branch_name      = request('branch_name');
        $account_type      = request('account_type');
        $bank_name      = request('bank_name');
        $account_no      = request('account_no');
        $ifsc_code      = request('ifsc_code');

$owner=array();
$no_of_owner = request('no_of_owner');


        // To save into lrms master table
$lrms_master = new dst_lrms_masters();



        $lrms_master->branch_code = request('branch_code');
        $lrms_master->branch_type = request('branch_type');
        $lrms_master->fact_sheet_date = request('fact_sheet_date');
        $lrms_master->address1 = request('address1');
        $lrms_master->address2 = request('address2');
        $lrms_master->address3 = request('address3');
        $lrms_master->state = $addr_state;
        $lrms_master->postal_code = $addr_pincode;
        $lrms_master->office_tele_no = request('office_tele_phone');
        $lrms_master->near_by_highway = request('near_by_highway');
        $lrms_master->dist_from_highway = request('distance_from_highway');
        $lrms_master->safex_conectivity_route = request('safexpress_connectivity_route');
        $lrms_master->property_location = request('property_location_direction');
        $lrms_master->nearest_airport = request('nearest_airport');
        $lrms_master->nearest_railway_station = request('nearest_railway_station');
        $lrms_master->premises_length = request('length');
        $lrms_master->premises_height = request('height');
        $lrms_master->flooring_type1 = request('flooring_type');
        $lrms_master->operational_hours = request('operational_hours');
        $lrms_master->premises_breadth = request('breadth');
        $lrms_master->platform_height = request('platform_height');
        $lrms_master->front_road_breadth = request('front_road_breadth');
        $lrms_master->operational_timing_from = request('timings');

       $lrms_master->save();

$lrms_master->id


   for($i=1;$i<$no_of_owner;$i++){

    $owner[$i]['owner']['owner_name']=$owner_name[$i];

    $owner[$i]['owner']['owner_name']=$owner_name[$i];
    $owner[$i]['owner']['payee_name']=$payee_name[$i];
    $owner[$i]['owner']['landlord_address']=$landlord_address[$i];
    $owner[$i]['owner']['district']=$district[$i];
    $owner[$i]['owner']['state']=$state[$i];
    $owner[$i]['owner']['pincode']=$pincode[$i];
    $owner[$i]['owner']['email']=$email[$i];
    $owner[$i]['owner']['contact_no']=$contact_no[$i];
    $owner[$i]['owner']['pan_of_payee']=$contact_no[$i];
    $owner[$i]['owner']['gstn_of_payee']=$contact_no[$i];

    

    $owner[$i]['rent']['occupation_of_landlord']=$occupation_of_landlord[$i];
    $owner[$i]['rent']['refundable_security_deposits']=$refundable_security_deposits[$i];
    $owner[$i]['rent']['advances']=$advances[$i];
    $owner[$i]['rent']['month_rent']=$month_rent[$i];
    $owner[$i]['rent']['advance_deduction']=$advance_deduction[$i];
    $owner[$i]['rent']['special_remarks']=$special_remarks[$i];  
    $owner[$i]['rent']['payment_system']=$payment_system[$i];  
    $owner[$i]['rent']['agreement_period']=$agreement_period[$i];  
    $owner[$i]['rent']['notice_period']=$notice_period[$i];  
    $owner[$i]['rent']['enhancement_clause']=$enhancement_clause[$i];  
    $owner[$i]['rent']['newly_constructed_for_us']=$newly_constructed_for_us[$i];  
    $owner[$i]['rent']['last_tenants']=$last_tenants[$i];  


       $payee_name_for_rent      = request('payee_name_for_rent');
        $branch_name      = request('branch_name');
        $account_type      = request('account_type');
        $bank_name      = request('bank_name');
        $account_no      = request('account_no');
        $ifsc_code      = request('ifsc_code');

    $owner[$i]['bank']['payee_name_for_rent']=$payee_name_for_rent[$i];
    $owner[$i]['bank']['branch_name']=$branch_name[$i];
    $owner[$i]['bank']['account_type']=$account_type[$i];
    $owner[$i]['bank']['bank_name']=$bank_name[$i];
    $owner[$i]['bank']['account_no']=$account_no[$i];
    $owner[$i]['bank']['ifsc_code']=$ifsc_code[$i];

   }

   print_r($owner);

   exit;



        // To save into lrms master table


        $lrms_master->branch_code = request('branch_code');
        $lrms_master->branch_type = request('branch_type');
        $lrms_master->fact_sheet_date = request('fact_sheet_date');
        $lrms_master->address1 = request('address1');
        $lrms_master->address2 = request('address2');
        $lrms_master->address3 = request('address3');
        $lrms_master->state = $addr_state;
        $lrms_master->postal_code = $addr_pincode;
        $lrms_master->office_tele_no = request('office_tele_phone');
        $lrms_master->near_by_highway = request('near_by_highway');
        $lrms_master->dist_from_highway = request('distance_from_highway');
        $lrms_master->safex_conectivity_route = request('safexpress_connectivity_route');
        $lrms_master->property_location = request('property_location_direction');
        $lrms_master->nearest_airport = request('nearest_airport');
        $lrms_master->nearest_railway_station = request('nearest_railway_station');
        $lrms_master->premises_length = request('length');
        $lrms_master->premises_height = request('height');
        $lrms_master->flooring_type1 = request('flooring_type');
        $lrms_master->operational_hours = request('operational_hours');
        $lrms_master->premises_breadth = request('breadth');
        $lrms_master->platform_height = request('platform_height');
        $lrms_master->front_road_breadth = request('front_road_breadth');
        $lrms_master->operational_timing_from = request('timings');

       $lrms_master->save();





 // To save into owner details

 //dd($data->id);

//echo $no_of_owner;

     for ($i=0;$i<$no_of_owner;$i++)
     {
       $data[]  = [ 
          
            'dst_lrms_master_id'=>$lrms_master->id,
            'total_property_owner'=>$no_of_owner,
            'property_owner_name'=>$owner_name[$i],
            'payee_name'=>$payee_name[$i],
            'property_owner_address'=>$landlord_address[$i], 
            'property_owner_district'=>$district[$i], 
            'property_owner_email'=>$email[$i], 
            'property_owner_contact_no'=>$contact_no[$i], 
            'payee_pan'=>$pan_of_payee[$i], 
            'payee_gstin'=>$gstn_of_payee[$i]
            //'property_owner_occupation'=>$occupation_of_landlord[$i], 

       ];
     }

     $lrms_property_owners = new dst_lrms_details_property_owners();
       $criteresperso = $lrms_property_owners->insert($data);

     
      // To save into Rental details

 //dd($data->id);

 //print_r($owner_name);

     for ($i=0;$i<$no_of_owner;$i++)
     {
       $data_rent[]  = [ 
          
            'dst_lrms_master_id'=>$lrms_master->id,
           // 'prorperty_owner_name'=>$owner_name[$i],
            //'refundable_security_deposit'=>$refundable_security_deposits[$i],
           // 'advances'=>$advances[$i], 
           // 'monthly_rent'=>$month_rent[$i], 
            //'advance_deduction'=>$advance_deduction[$i], 
            'payment_system'=>$payment_system[$i], 
            'agreement_period'=>$agreement_period[$i], 
            'notice_period'=>$notice_period[$i], 
            'enhancement_clause'=>$enhancement_clause[$i], 
            'newly_constructed_for_us'=>$newly_constructed_for_us[$i],
            'last_tenant'=>$last_tenants[$i],
           // 'special_remarks'=>$special_remarks[$i],
            //'activity_status'=>$activity_status[$i],

       ];
     }

     $lrms_property_rental = new dst_lrm_dtls_pro_rental_dtls();
       $criterrent = $lrms_property_rental->insert($data_rent);


       // To save into Bank details

 //dd($data->id);


     for ($i=0;$i<$no_of_owner;$i++)
     {
       $data_bank[]  = [ 
          
            'dst_lrms_master_id'=>$lrms_master->id,
            'payee_name'=>$payee_name_for_rent[$i],
            'branch_name'=>$branch_name[$i],
            'account_type'=>$account_type[$i], 
            'bank_name'=>$bank_name[$i], 
            'account_no'=>$account_no[$i], 
            'ifs_code'=>$ifsc_code[$i], 
            //'activity_status'=>$activity_status[$i], 
            
       ];
     }

     $lrms_property_bank = new dst_lrm_dtls_pro_bank_dtls();
       $critebank = $lrms_property_bank->insert($data_bank);

//Password  : Giant@lrms2020#@
 
        return redirect('/createFactSheet');

        */
    }
    //  public function createFactSheetPart2($id)
    // {

    //   $data = array('id'=>$id);

    //   return view('create_fact_sheet_part2')->with($data);


    // }

    
    public function createFactSheetPart2(Request $request)
    {

     // echo $id;
     // exit;
      //$data = array('id'=>$id);

       //echo $request->session()->put('no_of_owner', $lrms_master->no_of_owner);


      //return view('create_fact_sheet_part2');
      $master_id= $request->session()->get('master_id');
      $ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)->get();
      $ownerCount = $ownerlist->count() + 1;
	  
	  
      return view("create_fact_sheet_part2",compact('ownerCount'));


    }

     public function updateFactSheetData(Request $request)
    {
      
      /*echo "<pre>";
       print_r($_POST);
     print_r($_FILES);
        exit;*/
    
     $validator = Validator::make($request->all(), [
            //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480'
            'factsheet_premises_photos.*' => 'mimes:jpeg,png,jpg|max:50480'
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

    
          
         $premises_photos=  implode("|",$data);

        $master_id     = request('master_id');

        $region_code     = request('region_code');
        $factsheet_code     = request('factsheet_code');
        $branch_location = request('branch_location');
        $branch_code     = request('branch_code');
        $branch_type     = request('branch_type');
        $branch_id       = request('branch_id');
		$branch_area     = request('branch_area');
        $fact_sheet_date = request('fact_sheet_date');
       $branch_occupancy_date = request('branch_occupancy_date'); 
        $address1        = strtoupper(request('address1'));
        $address2        = strtoupper(request('address2'));
        $address3        = strtoupper(request('address3'));
        $addr_state      = strtoupper(request('addr_state'));
         $city      = strtoupper(request('city'));
        $addr_pincode    = request('addr_pincode');
       $office_tele_phone   = request('office_tele_phone');
        $near_by_highway = strtoupper(request('near_by_highway'));
        $distance_from_highway = request('distance_from_highway');
        $distance_from_highway_unit = request('distance_from_highway_unit');
        $safexpress_connectivity_route = strtoupper(request('safexpress_connectivity_route'));
        $property_location_direction = strtoupper(request('property_location_direction'));
        $nearest_airport = strtoupper(request('nearest_airport'));
        $nearest_railway_station = strtoupper(request('nearest_railway_station'));
        $length = request('length');
        $length_unit = request('length_unit');
        $height = request('height');
        $height_unit = request('height_unit');
        $flooring_type = request('flooring_type');
        $operational_hours = request('operational_hours');
        $breadth = request('breadth');
        $breadth_unit = request('breadth_unit');
        $platform_height = request('platform_height');
        $platform_height_unit = request('platform_height_unit');
        $total_length_breadth = request('total_length_breadth');
        $total_length_breadth_unit = request('total_length_breadth_unit');
        $front_road_breadth = request('front_road_breadth');
        $front_road_breadth_unit = request('front_road_breadth_unit');
        $operational_hours = request('operational_hours');
        $operational_timing_from = request('operational_timing_from');
        $operational_timing_to = request('operational_timing_to');
        $connectivity_telephone = request('connectivity_telephone');
        $connectivity_mobile = request('connectivity_mobile');
        $internet_service_provider = request('internet_service_provider');
        $surrounding_front = strtoupper(request('surrounding_front'));
        $surrounding_back = strtoupper(request('surrounding_back'));
        $surrounding_left = strtoupper(request('surrounding_left'));
        $surrounding_right = strtoupper(request('surrounding_right'));
        $near_by_competitors1 = strtoupper(request('near_by_competitors1'));
        $near_by_competitors1_dis = request('near_by_competitors1_dis');
        $near_by_competitors1_dis_unit = request('near_by_competitors1_dis_unit');

        $near_by_competitors2 = strtoupper(request('near_by_competitors2'));
        $near_by_competitors2_dis = request('near_by_competitors2_dis');
        $near_by_competitors2_dis_unit = request('near_by_competitors2_dis_unit');
        $near_by_competitors3 = strtoupper(request('near_by_competitors3'));
        $near_by_competitors3_dis = request('near_by_competitors3_dis');
        $near_by_competitors3_dis_unit = request('near_by_competitors3_dis_unit');

         $office_to_axis_bank = strtoupper(request('office_to_axis_bank'));
         $office_to_axis_bank_distance = request('office_to_axis_bank_distance');
         $office_to_axis_bank_distance_unit = request('office_to_axis_bank_distance_unit');
         $nearest_bank_other_than_axis = strtoupper(request('nearest_bank_other_than_axis'));
         $nearest_atm = strtoupper(request('nearest_atm'));
         $distance_from_office_to_atm = request('distance_from_office_to_atm');
         $distance_from_office_to_atm_unit = request('distance_from_office_to_atm_unit');
         $no_of_owner = request('no_of_owner');
         $total_refundable_security_deposits = request('total_refundable_security_deposits');
         $total_advances = request('total_advances');
         $total_month_rent = request('total_month_rent');
         $total_advance_deduction = request('total_advance_deduction');
         $agreement_period_start = request('agreement_period_start');
         $agreement_period_end = request('agreement_period_end');
         $notice_period = request('notice_period');
         $newly_constructed_for_us = request('newly_constructed_for_us');
         $last_tenant = strtoupper(request('last_tenant'));
         $enhancement_clause = request('enhancement_clause');
         $payment_system = request('payment_system');
         $associate_name = strtoupper(request('associate_name'));
         $cordinator_name = strtoupper(request('cordinator_name'));
         $approved_by = strtoupper(request('approved_by'));


      /////////////////////////////////////////////////
         $current_image=array();

     $current_image=$_FILES["factsheet_premises_photos"]['name']; 

    /*echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
print_r($current_image);
if (empty(array_filter($current_image))) {
    echo 'empty OK';
} else {
    echo 'not EMPTY ARRAY';
}
*/
    //exit;

       if(empty(array_filter($current_image)))
         {
          //echo "in if";
          //exit;
           $affectedRows = dst_lrms_masters::where('id', $master_id)
       ->update([
           'region_code' => isset($region_code) ? $region_code : ' ',
            'factsheet_code' => isset($factsheet_code) ? $factsheet_code : ' ',
             'branch_id'   => isset($branch_id) ? $branch_id : ' ',
             'branch_code' => isset($branch_code) ? $branch_code : ' ',
             'branch_type' => isset($branch_type) ? $branch_type : ' ',
             'branch_location' => isset($branch_location) ? $branch_location : ' ',
			 'branch_area' => isset($branch_area) ? $branch_area : ' ',
             'branch_occupancy_date' => isset($branch_occupancy_date) ? $branch_occupancy_date : ' ',
              'fact_sheet_date' => isset($fact_sheet_date) ? $fact_sheet_date : ' ',
              'address1' => isset($address1) ? $address1 : ' ',
              'address2' => isset($address2) ? $address2 : ' ',
              'address3' => isset($address3) ? $address3 : ' ',
              'city' => isset($city) ? $city : ' ',
              'state' => isset($addr_state) ? $addr_state : ' ',
              'postal_code' => isset($addr_pincode) ? $addr_pincode : ' ',
              'office_tele_no' => isset($office_tele_no) ? $office_tele_no : ' ',
              'near_by_highway' => isset($near_by_highway) ? $near_by_highway : ' ',
             'dist_from_highway' => isset($distance_from_highway) ? $distance_from_highway : ' ',
       'dist_from_highway_unit' => isset($distance_from_highway_unit) ? $distance_from_highway_unit : ' ',
             'safex_conectivity_route' => isset($safexpress_connectivity_route) ? $safexpress_connectivity_route : ' ',
             'property_location' => isset($property_location_direction) ? $property_location_direction : ' ',
             'nearest_airport' => isset($nearest_airport) ? $nearest_airport : ' ',
             'nearest_railway_station' => isset($nearest_railway_station) ? $nearest_railway_station : ' ',
             'premises_length' => isset($length) ? $length : ' ',
             'premises_length_unit' => isset($length_unit) ? $length_unit : ' ',
             'premises_breadth' => isset($breadth) ? $breadth : ' ',
             'premises_breadth_unit' => isset($breadth_unit) ? $breadth_unit : ' ',
             'premises_area' => isset($total_length_breadth) ? $total_length_breadth : ' ',
             'premises_area_unit' => isset($total_length_breadth_unit) ? $total_length_breadth_unit : ' ',
             'premises_height' => isset($height) ? $height : ' ',
             'premises_height_unit' => isset($height_unit) ? $height_unit : ' ',
             'front_road_breadth' => isset($front_road_breadth) ? $front_road_breadth : ' ',
             'front_road_breadth_unit' => isset($front_road_breadth_unit) ? $front_road_breadth_unit : ' ',
             'operational_hours' => isset($operational_hours) ? $operational_hours : ' ',
             'operational_timing_from' => isset($operational_timing_from) ? $operational_timing_from : ' ',
             'connectivity_isp' => isset($internet_service_provider) ? $internet_service_provider : ' ',
             'surrounding_front' => isset($surrounding_front) ? $surrounding_front : ' ',
             'surrounding_back' => isset($surrounding_back) ? $surrounding_back : ' ',
             'surrounding_left' => isset($surrounding_left) ? $surrounding_left : ' ',
             'surrounding_right' => isset($surrounding_right) ? $surrounding_right : ' ',
             'near_by_competitors1' => isset($near_by_competitors1) ? $near_by_competitors1 : ' ',
             'near_by_competitors1_dis' => isset($near_by_competitors1_dis) ? $near_by_competitors1_dis : ' ',
             'near_by_competitors1_dis_unit' => isset($near_by_competitors1_dis_unit) ? $near_by_competitors1_dis_unit : ' ',
             'near_by_competitors2' => isset($near_by_competitors2) ? $near_by_competitors2 : ' ',
             'near_by_competitors2_dis' => isset($near_by_competitors2_dis) ? $near_by_competitors2_dis : ' ',
             'near_by_competitors2_dis_unit' => isset($near_by_competitors2_dis_unit) ? $near_by_competitors2_dis_unit : ' ',
             'near_by_competitors3' => isset($near_by_competitors3) ? $near_by_competitors3 : ' ',
             'near_by_competitors3_dis' => isset($near_by_competitors3_dis) ? $near_by_competitors3_dis : ' ',
             'near_by_competitors3_dis_unit' => isset($near_by_competitors3_dis_unit) ? $near_by_competitors3_dis_unit : ' ',
             'axis_bank_nearest_branch' => isset($office_to_axis_bank) ? $office_to_axis_bank : ' ',
             'office_to_axis_bank_distance' => isset($office_to_axis_bank_distance) ? $office_to_axis_bank_distance : ' ',
             'office_to_axis_bank_distance_unit' => isset($office_to_axis_bank_distance_unit) ? $office_to_axis_bank_distance_unit : ' ',
             'nearest_bank_other_than_axis' => isset($nearest_bank_other_than_axis) ? $nearest_bank_other_than_axis : ' ',
             'nearest_atm' => isset($nearest_atm) ? $nearest_atm : ' ',
             'distance_from_office_to_atm' => isset($distance_from_office_to_atm) ? $distance_from_office_to_atm : ' ',
             'distance_from_office_to_atm_unit' => isset($distance_from_office_to_atm_unit) ? $distance_from_office_to_atm_unit : ' ',
             'no_of_owner' => isset($no_of_owner) ? $no_of_owner : ' ',
             'total_refundable_security_deposits' => isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : ' ',
             'total_advances' => isset($total_advances) ? $total_advances : ' ',
             'total_month_rent' => isset($total_month_rent) ? $total_month_rent : ' ',
             'total_advance_deduction' => isset($total_advance_deduction) ? $total_advance_deduction : ' ',
             'last_tenant'=> isset($last_tenant) ? $last_tenant : ' ',
             'agreement_period_start' => isset($agreement_period_start) ? $agreement_period_start : ' ',
             'agreement_period_end' => isset($agreement_period_end) ? $agreement_period_end : ' ',
             'notice_period' => isset($notice_period) ? $notice_period : ' ',
             'newly_constructed_for_us' => isset($newly_constructed_for_us) ? $newly_constructed_for_us : ' ',
             'enhancement_clause' => isset($enhancement_clause) ? $enhancement_clause : ' ',
             'payment_system' => isset($payment_system) ? $payment_system : ' ',
             'associate_name' => isset($associate_name) ? $associate_name : ' ',
             'cordinator_name' => isset($cordinator_name) ? $cordinator_name : ' ',
             'approved_by' => isset($approved_by) ? $approved_by : ' ',

        ]);
  
         }else{
       //echo "in else";
         // exit;
       $affectedRows = dst_lrms_masters::where('id', $master_id)
       ->update([
           'region_code' => isset($region_code) ? $region_code : ' ',
            'factsheet_code' => isset($factsheet_code) ? $factsheet_code : ' ',
             'branch_id'   => isset($branch_id) ? $branch_id : ' ',
             'branch_code' => isset($branch_code) ? $branch_code : ' ',
             'branch_type' => isset($branch_type) ? $branch_type : ' ',
             'branch_location' => isset($branch_location) ? $branch_location : ' ',
			 'branch_area' => isset($branch_area) ? $branch_area : ' ',
             'branch_occupancy_date' => isset($branch_occupancy_date) ? $branch_occupancy_date : ' ',
              'fact_sheet_date' => isset($fact_sheet_date) ? $fact_sheet_date : ' ',
              'address1' => isset($address1) ? $address1 : ' ',
              'address2' => isset($address2) ? $address2 : ' ',
              'address3' => isset($address3) ? $address3 : ' ',
              'city' => isset($city) ? $city : ' ',
              'state' => isset($addr_state) ? $addr_state : ' ',
              'postal_code' => isset($addr_pincode) ? $addr_pincode : ' ',
              'office_tele_no' => isset($office_tele_no) ? $office_tele_no : ' ',
              'near_by_highway' => isset($near_by_highway) ? $near_by_highway : ' ',
             'dist_from_highway' => isset($distance_from_highway) ? $distance_from_highway : ' ',
       'dist_from_highway_unit' => isset($distance_from_highway_unit) ? $distance_from_highway_unit : ' ',
             'safex_conectivity_route' => isset($safexpress_connectivity_route) ? $safexpress_connectivity_route : ' ',
             'property_location' => isset($property_location_direction) ? $property_location_direction : ' ',
             'nearest_airport' => isset($nearest_airport) ? $nearest_airport : ' ',
             'nearest_railway_station' => isset($nearest_railway_station) ? $nearest_railway_station : ' ',
             'premises_length' => isset($length) ? $length : ' ',
             'premises_length_unit' => isset($length_unit) ? $length_unit : ' ',
             'premises_breadth' => isset($breadth) ? $breadth : ' ',
             'premises_breadth_unit' => isset($breadth_unit) ? $breadth_unit : ' ',
             'premises_area' => isset($total_length_breadth) ? $total_length_breadth : ' ',
             'premises_area_unit' => isset($total_length_breadth_unit) ? $total_length_breadth_unit : ' ',
             'premises_height' => isset($height) ? $height : ' ',
             'premises_height_unit' => isset($height_unit) ? $height_unit : ' ',
             'front_road_breadth' => isset($front_road_breadth) ? $front_road_breadth : ' ',
             'front_road_breadth_unit' => isset($front_road_breadth_unit) ? $front_road_breadth_unit : ' ',
             'operational_hours' => isset($operational_hours) ? $operational_hours : ' ',
             'operational_timing_from' => isset($operational_timing_from) ? $operational_timing_from : ' ',
             'connectivity_isp' => isset($internet_service_provider) ? $internet_service_provider : ' ',
             'surrounding_front' => isset($surrounding_front) ? $surrounding_front : ' ',
             'surrounding_back' => isset($surrounding_back) ? $surrounding_back : ' ',
             'surrounding_left' => isset($surrounding_left) ? $surrounding_left : ' ',
             'surrounding_right' => isset($surrounding_right) ? $surrounding_right : ' ',
             'near_by_competitors1' => isset($near_by_competitors1) ? $near_by_competitors1 : ' ',
             'near_by_competitors1_dis' => isset($near_by_competitors1_dis) ? $near_by_competitors1_dis : ' ',
             'near_by_competitors1_dis_unit' => isset($near_by_competitors1_dis_unit) ? $near_by_competitors1_dis_unit : ' ',
             'near_by_competitors2' => isset($near_by_competitors2) ? $near_by_competitors2 : ' ',
             'near_by_competitors2_dis' => isset($near_by_competitors2_dis) ? $near_by_competitors2_dis : ' ',
             'near_by_competitors2_dis_unit' => isset($near_by_competitors2_dis_unit) ? $near_by_competitors2_dis_unit : ' ',
             'near_by_competitors3' => isset($near_by_competitors3) ? $near_by_competitors3 : ' ',
             'near_by_competitors3_dis' => isset($near_by_competitors3_dis) ? $near_by_competitors3_dis : ' ',
             'near_by_competitors3_dis_unit' => isset($near_by_competitors3_dis_unit) ? $near_by_competitors3_dis_unit : ' ',
             'axis_bank_nearest_branch' => isset($office_to_axis_bank) ? $office_to_axis_bank : ' ',
             'office_to_axis_bank_distance' => isset($office_to_axis_bank_distance) ? $office_to_axis_bank_distance : ' ',
             'office_to_axis_bank_distance_unit' => isset($office_to_axis_bank_distance_unit) ? $office_to_axis_bank_distance_unit : ' ',
             'nearest_bank_other_than_axis' => isset($nearest_bank_other_than_axis) ? $nearest_bank_other_than_axis : ' ',
             'nearest_atm' => isset($nearest_atm) ? $nearest_atm : ' ',
             'distance_from_office_to_atm' => isset($distance_from_office_to_atm) ? $distance_from_office_to_atm : ' ',
             'distance_from_office_to_atm_unit' => isset($distance_from_office_to_atm_unit) ? $distance_from_office_to_atm_unit : ' ',
             'no_of_owner' => isset($no_of_owner) ? $no_of_owner : ' ',
             'total_refundable_security_deposits' => isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : ' ',
             'total_advances' => isset($total_advances) ? $total_advances : ' ',
             'total_month_rent' => isset($total_month_rent) ? $total_month_rent : ' ',
             'total_advance_deduction' => isset($total_advance_deduction) ? $total_advance_deduction : ' ',
             'last_tenant'=> isset($last_tenant) ? $last_tenant : ' ',
             'agreement_period_start' => isset($agreement_period_start) ? $agreement_period_start : ' ',
             'agreement_period_end' => isset($agreement_period_end) ? $agreement_period_end : ' ',
             'notice_period' => isset($notice_period) ? $notice_period : ' ',
             'newly_constructed_for_us' => isset($newly_constructed_for_us) ? $newly_constructed_for_us : ' ',
             'enhancement_clause' => isset($enhancement_clause) ? $enhancement_clause : ' ',
             'payment_system' => isset($payment_system) ? $payment_system : ' ',
             'associate_name' => isset($associate_name) ? $associate_name : ' ',
             'cordinator_name' => isset($cordinator_name) ? $cordinator_name : ' ',
             'approved_by' => isset($approved_by) ? $approved_by : ' ',
       'factsheet_premises_photos' => isset($premises_photos) ? $premises_photos : ' ',

        ]);

     }
    // exit;
////////////////////////////////////////////////////////////////////////////////////////////
       
if($affectedRows)  
          {
            //return back()->with('success','FactSheet Updated Successfully!');
            return redirect('FactsList')->with('update', 'FactSheet has been updated successfully!');

              exit;
          }else
          {
            return back()->with('error','FactSheet Is Not Updated!');
              exit;
          }

     // $data = array('id'=>$id);

     // print_r($data);

 
      // $master_id= $request->session()->get('master_id');


      // $ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)->get();
      // $ownerCount = $ownerlist->count() + 1;
      // return view("create_fact_sheet_part2",compact('ownerCount'));

   // $this->allFactsList();


    }

       public function saveFactSheetPart2(Request $request)
    {
        

        //  $no_of_owner= $request->session()->get('no_of_owner');

        //  $ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)
        //     ->get();
        // echo "ownerCount>> ".$ownerCount = $ownerlist->count();

        // echo "no_of_owner >>".$no_of_owner;
        //     if($ownerCount<=$no_of_owner){
        //       echo "ownerCount if >> ".$ownerCount = $ownerlist->count();

        //       echo "no_of_owner if >>".$no_of_owner; 
        //       //return view('create_fact_sheet_part2');
        //        return redirect('createFactSheetPart2');

        //     }else{
        //  //return view('home');

        //  return redirect('home');


        //     }



        $no_of_owner= $request->session()->get('no_of_owner');

     $master_id= $request->session()->get('master_id');
    
     $ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)
            ->get();
     echo "ownerCount >> ". $ownerCount = $ownerlist->count();


    if($ownerCount<$no_of_owner){
      


    // Owner
        $owner_name        = request('owner_name');
        $payee_name        = request('payee_name');
        $landlord_address  = request('landlord_address');
        // $district          = request('district');
        // $state             = request('state');
        // $pincode           = request('pincode');
        // $email             = request('email');
        // $contact_no        = request('contact_no');
        // $pan_of_payee      = request('pan_of_payee');
        // $gstn_of_payee      = request('gstn_of_payee');


      // Rent
      $occupation_of_landlord      = request('occupation_of_landlord');
        $refundable_security_deposits      = request('refundable_security_deposits');
        $advances           = request('advances');
        // $month_rent      = request('month_rent');
        // $advance_deduction      = request('advance_deduction');
        // $special_remarks      = request('special_remarks');
        // $payment_system      = request('payment_system');
        // $agreement_period      = request('agreement_period');
        // $notice_period      = request('notice_period');
        // $enhancement_clause      = request('enhancement_clause');
        // $newly_constructed_for_us      = request('newly_constructed_for_us');
        // $last_tenants      = request('last_tenants');



      // Bank
      $payee_name_for_rent      = request('payee_name_for_rent');
        $branch_name      = request('branch_name');
        $account_type      = request('account_type');
        // $bank_name      = request('bank_name');
        // $account_no      = request('account_no');
        // $ifsc_code      = request('ifsc_code');

        $master_id= $request->session()->get('master_id');

         $lrms_property_owners = new dst_lrms_details_property_owners();

       
       $lrms_property_owners->property_owner_name = request('owner_name');
        $lrms_property_owners->payee_name = request('payee_name');
        $lrms_property_owners->property_owner_address = request('landlord_address');
         $lrms_property_owners->dst_lrms_master_id = $master_id;




        $lrms_property_owners->save();


        $lrms_property_rental = new dst_lrm_dtls_pro_rental_dtls();
        $lrms_property_rental->refundable_security_deposit = request('refundable_security_deposits');
        $lrms_property_rental->advances = request('advances');

        $lrms_property_rental->dst_lrms_master_id = $master_id;

       $lrms_property_rental->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;

       $lrms_property_rental->save();


       $lrms_property_bank = new dst_lrm_dtls_pro_bank_dtls();

        $lrms_property_bank->payee_name = request('payee_name_for_rent');
        $lrms_property_bank->branch_name = request('branch_name');
        $lrms_property_bank->account_type = request('account_type');

         $lrms_property_bank->dst_lrms_master_id = $master_id;

       $lrms_property_bank->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;

       $lrms_property_bank->save();

      //return view('create_fact_sheet_part2');
       return redirect('createFactSheetPart2');

       
    }else{
 //return view('home');

 //return redirect('home');



 return redirect()->route('home');

 //return 5;

    }
    


    }

     public function allFactsList()
    {
        //return view('home');
        //return view('layouts/adminLayout/admin_design');

      //$master_id= $request->session()->get('master_id');
     // $factDatalist = \DB::table('dst_lrms_masters')->get();

     // $factDatalist = dst_lrms_masters::where('status',1)->orderBy('id', 'DESC')->get();

    if(Auth::user()->role->role_name=="fieldstaff")
		{
			 $created_by= Auth::user()->email;
        $factDatalist = dst_lrms_masters::where('created_by',$created_by)
                                         ->where('status',1)
                                          ->orderBy('id', 'DESC')
                                         
                                         ->get();
			
		}
		else if(Auth::user()->role->role_name=="admin")
		{
      $factDatalist = dst_lrms_masters::where('status',1)->orderBy('id', 'DESC')->get();
		}
     else{
   echo"No Authorization";
      }


        return view('all_facts_list',compact('factDatalist'));


    }

     public function allOwnerList()
    {
       
      $ownersList = \DB::table('dst_lrms_details_property_owners')->orderBy('id','DESC')->get();

    

        return view('all_owners_list',compact('ownersList'));


    }
     public function allRentalList()
    {
       
      $rentalList = \DB::table('dst_lrm_dtls_pro_rental_dtls')->get();
       


    

        return view('rental_list',compact('rentalList'));


    }
    public function allBankList()
    {
       
      $owner_bankList = \DB::table('dst_lrm_dtls_pro_bank_dtls')->get();

   
        return view('bank_list',compact('owner_bankList'));


    }
     public function getFactSheetCode(Request $request)
    {

        $region_code=$_POST['region_code'];

        $regionCountlist = \DB::table('dst_lrms_masters')->where('region_code', '=', $region_code)
              ->get();

        $regionCount = $regionCountlist->count();
       $regionCountNo = $regionCount + 1;
       $formattedNumber = sprintf('%03d', $regionCountNo);
       $fact_sheet_code=$region_code . $formattedNumber;

       return $fact_sheet_code;

    
    }
      public function getBranchDetails(Request $request)
    {

      //print_r($_POST);
     // exit;

      $branch_code=$_POST['branch_code'];

       $branchList = \DB::table('dst_lrm_branch_dtls')->where('branch_code', '=', $branch_code)
            ->get();



            echo json_encode($branchList,true);


            exit;

    }

    public function downloadPDF($id){
     // $factSheet = dst_lrms_rent_agreements::find($id);

      $factSheet=dst_lrms_rent_agreements::where('dst_lrms_master_id','=',$id)->get();
    
    $factsheet_code=$factSheet[0]->factsheet_code;
   
     // To Get Owner Data Using Master factsheetcode
	  //$ownerData = dst_lrms_details_property_owners::where('dst_lrms_master_id', '=', $id)->get()->toArray();
         $ownerData = dst_lrms_details_property_owners::where('factsheet_code', '=', $factsheet_code)->get()->toArray();

	  $all_owner_name='';
           $all_owner_address='';
	    foreach($ownerData as $owner){
          $all_owner_name.=$owner['property_owner_name']. "," ;
           $all_owner_address.=$owner['property_owner_address']. "," ;

          }
	  

	  
	  //echo "<pre>";
           //print_r($factSheet);
  
	  //print_r($ownerData);

//echo $all_owner_name;
//echo $all_owner_address;
	  //exit;
	  


      //$reviews = dst_lrms_rent_agreements::all();
    //return view('posts.index')->with(compact('posts','reviews'));
    
   // echo "<pre>";
   //   print_r($factSheet);
    
   //  exit;

      //Route::get('/', 'RegisterController@adduser');

      $pdf = PDF::loadView('pdf', compact('factSheet','all_owner_name','all_owner_address','ownerData'));
    
    
    
     // return $pdf->download('lease_agreement.pdf');
	  	  return $pdf->download('lease_agreement_'.$factsheet_code.'_'.date('d-m-Y').'.pdf');


    }

    public function view($id){
      $factSheet = dst_lrms_masters::find($id);

      //$ownerData=dst_lrms_details_property_owners::find($id);
  $ownerData = dst_lrms_details_property_owners::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     $ownerBankData = dst_lrm_dtls_pro_bank_dtls::where('dst_lrms_master_id', '=', $id)->get()->toArray();
   $ownerRentData = dst_lrm_dtls_pro_rental_dtls::where('dst_lrms_master_id', '=', $id)->get()->toArray();
	 
	  
	 
	 
     $ownerDocData = dst_lrms_dtls_documents::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     //echo "<pre>";
     // print_r($factSheet);
     //  echo "Owner";
     //  echo "<br>";
     //  print_r($ownerData);
     //  print_r($ownerBankData);
     //  print_r($ownerRentData);



     //   exit;

      return view('view_fact_sheet',compact('factSheet','ownerData','ownerBankData','ownerRentData','ownerDocData'));

    }

    public function edit($id){
      $factSheet = dst_lrms_masters::find($id);

      // echo "<pre>";
      // print_r($factSheet);
      // exit;

    //   $factSheet = dst_lrms_masters::find($id);

       $regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();


      $branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();
      // $cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");
	   
	   $cityList=dst_city_masters::orderBy('city','ASC')->get();
	   
	   $branchAreaList=dst_branch_area_masters::orderBy('area_name','ASC')->get();

      
     
       // return view('create_fact_sheet',compact('regionList','branchList'));


      return view('edit_fact_sheet',compact('factSheet','regionList','branchList','cityList','branchAreaList'));



    }
   
   public function noOfOwner($id)
   {
     //echo $id;
     $ownerData = dst_lrms_details_property_owners::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     //$ownerBankData = dst_lrm_dtls_pro_bank_dtls::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     //$ownerRentData = dst_lrm_dtls_pro_rental_dtls::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     $ownerDocData = dst_lrms_dtls_documents::where('dst_lrms_master_id', '=', $id)->get()->toArray();
	 
	 $ownerActiveData = dst_lrms_details_property_owners::where([['dst_lrms_master_id', '=', $id],['status', '=', 1]])->get()->toArray();
     $ownerBankData = dst_lrm_dtls_pro_bank_dtls::where([['dst_lrms_master_id', '=', $id],['status', '=', 1]])->get()->toArray();
     $ownerRentData = dst_lrm_dtls_pro_rental_dtls::where([['dst_lrms_master_id', '=', $id],['status', '=', 1]])->get()->toArray();
   
   $regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();
   //echo "<pre>";

   //print_r($ownerRentData);
   //exit;
   
    $master_id=$id;

      $branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();
       $cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");

   return view('factsheet_no_of_owner',compact('ownerData','ownerActiveData','ownerBankData','ownerRentData','ownerDocData','cityList','master_id'));

}
   public function editOwnerDetails($id)
   {
     
     //echo $id;
   $ownerSingleData = dst_lrms_details_property_owners::where('id', '=', $id)->first();
     $ownerSingleBankData = dst_lrm_dtls_pro_bank_dtls::where('dst_lrm_dtls_prorperty_owner_id', '=', $id)->first();
     $ownerSingleRentData = dst_lrm_dtls_pro_rental_dtls::where('dst_lrm_dtls_prorperty_owner_id', '=', $id)->first();
     $ownerSingleDocData = dst_lrms_dtls_documents::where('dst_lrm_dtls_prorperty_owner_id', '=', $id)->get()->toArray();
   
   $regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();


      $branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();
       $cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");

      //$ownerData = dst_lrms_details_property_owners::where('id', '=', $id)->get();
    
    //echo "<pre>";
    //print_r($ownerSingleDocData);
    //exit;
    
       return view('edit_owner_details',compact('ownerSingleData','ownerSingleBankData','ownerSingleRentData','ownerSingleDocData','cityList'));

     //exit;
   }
   public function updateOwnerDetails(Request $request)
   {
    /* echo "<pre>";
     print_r($_POST);
     print_r($_FILES);
     exit;
*/
     $owner_id           = request('owner_id');
    $owner_rent_id      = request('owner_rent_id');
    $owner_bank_id      = request('owner_bank_id');
     
     /////////////////////////////////////
      $validator = Validator::make($request->all(), [
            //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480'
           // 'month_rent' => 'lte:'. ($remaining_rent) .'',
            'owner_cancelled_cheque_copy' => 'mimes:jpeg,png,jpg|max:5048',
            'owner_pan_card_copy' => 'mimes:jpeg,png,jpg|max:5048',
            'owner_aadhaar_card_copy' => 'mimes:jpeg,png,jpg|max:5048',
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

                        // To Update cancelled cheque in table
                        $cancelledCol = dst_lrms_details_property_owners::where('id', $owner_id)
                        ->update([
           
              'owner_cancelled_cheque_copy' => isset($imageName_cancelled) ? $imageName_cancelled : ' ',

                   ]);       
                                    
                    }
                    if($request->file('owner_pan_card_copy')!='')
                    {
                        $image_pan_card=$request->file('owner_pan_card_copy');
                                      $imageName_pan_card = time().'_'.$image_pan_card->getClientOriginalName();
                                    $image_pan_card->move($owner_pan_card_destinationPath,$imageName_pan_card);  
                        // To Update Pan Card in table
                        $cancelledCol = dst_lrms_details_property_owners::where('id', $owner_id)
                        ->update([
           
              'owner_pan_card_copy' => isset($imageName_pan_card) ? $imageName_pan_card : ' ',

                   ]);                
                    }
                     if($request->file('owner_aadhaar_card_copy')!='')
                    {
                        $image_aadhaar_card=$request->file('owner_aadhaar_card_copy');
                                      $imageName_aadhaar_card = time().'_'.$image_aadhaar_card->getClientOriginalName();
                                    $image_aadhaar_card->move($owner_aadhar_card_destinationPath,$imageName_aadhaar_card);  
                            // To Update Aadhaar Card in table
                        $cancelledCol = dst_lrms_details_property_owners::where('id', $owner_id)
                        ->update([
           
              'owner_aadhaar_card_copy' => isset($imageName_aadhaar_card) ? $imageName_aadhaar_card : ' ',

                   ]);            
                    }
           }         
     ////////////////////////////////////
    
     // Owner
        $owner_name        = strtoupper(request('owner_name'));
		$supplier_no        = request('supplier_no');
        $payee_name        = strtoupper(request('payee_name'));
    $property_owner_occupation      = strtoupper(request('property_owner_occupation'));
        $landlord_address  = strtoupper(request('landlord_address'));
        $city               = request('city');
         $state             = request('addr_state');
        $pincode           = request('pincode');
         $email             = request('email');
         $contact_no        = request('contact_no');
         $pan_of_payee      = request('pan_of_payee');
         $gstn_of_payee      = request('gstn_of_payee');

    

      // Rent
      
        $refundable_security_deposits      = request('refundable_security_deposits');
        $advances           = request('advances');
        $month_rent      = request('month_rent');
         $advance_deduction      = request('advance_deduction');
        $special_remarks      = request('special_remarks');
         //$payment_system      = request('payment_system');
         //$agreement_period      = request('agreement_period');
        //$notice_period      = request('notice_period');
        //$enhancement_clause      = request('enhancement_clause');
         //$newly_constructed_for_us      = request('newly_constructed_for_us');
         //$last_tenants      = request('last_tenants');



      // Bank
      $payee_name_for_rent      = strtoupper(request('payee_name_for_rent'));
        $branch_name      = strtoupper(request('branch_name'));
        $account_type      = request('account_type');
        $bank_name      = strtoupper(request('bank_name'));
         $account_no      = request('account_no');
        $ifsc_code      = request('ifsc_code');
    
    
    
    
    
    ////////////////////////////////////////////////
        $affectedOwnerRows = dst_lrms_details_property_owners::where('id', $owner_id)
       ->update([
           'property_owner_name' => isset($owner_name) ? $owner_name : ' ',
		     'supplier_no' => isset($supplier_no) ? $supplier_no : ' ',
            'payee_name' => isset($payee_name) ? $payee_name : ' ',
             'property_owner_occupation'   => isset($property_owner_occupation) ? $property_owner_occupation : ' ',
             'property_owner_address' => isset($landlord_address) ? $landlord_address : ' ',
              'property_owner_district' => isset($city) ? $city : ' ',
              'property_owner_state' => isset($state) ? $state : ' ',
              'property_owner_postal_code' => isset($pincode) ? $pincode : ' ',
              'property_owner_email' => isset($email) ? $email : ' ',
              'property_owner_contact_no' => isset($contact_no) ? $contact_no : ' ',
             'payee_pan' => isset($pan_of_payee) ? $pan_of_payee : ' ',
       'payee_gstin' => isset($gstn_of_payee) ? $gstn_of_payee : ' ',

        ]);
    
     $affectedRentRows = dst_lrm_dtls_pro_rental_dtls::where('id', $owner_rent_id)
       ->update([
           'refundable_security_deposit' => isset($refundable_security_deposits) ? $refundable_security_deposits : 0.00,
            'advances' => isset($advances) ? $advances : 0.00,
             'monthly_rent' => isset($month_rent) ? $month_rent : 0.00,
             'advance_deduction' => isset($advance_deduction) ? $advance_deduction : 0.00,
        ]);
    
    $affectedBankRows = dst_lrm_dtls_pro_bank_dtls::where('id', $owner_bank_id)
       ->update([
           'payee_name' => isset($payee_name) ? $payee_name : ' ',
            'branch_name' => isset($branch_name) ? $branch_name : ' ',
             'account_type'   => isset($account_type) ? $account_type : ' ',
             'bank_name' => isset($bank_name) ? $bank_name : ' ',
       'account_no' => isset($account_no) ? $account_no : ' ',
       'ifsc_code' => isset($ifsc_code) ? $ifsc_code : ' ',
        ]);

if($affectedOwnerRows)  
          {
           // return back()->with('success','Owner Details Updated Successfully!');
      //return redirect()->route('/FactsList')->with('update', 'Content has been updated successfully!');
      return redirect('FactsList')->with('update', 'Owner Details has been updated successfully!');

              exit;
          }else
          {
            return back()->with('error','Owner Details Is Not Updated!');
              exit;
          }
    
    
   }
 public function addMoreOwnerDetails(Request $request)
   {
	 
    /*echo "<pre>";	 
    print_r($_POST);
    print_r($_FILES);
*/
     //exit;
	   $validator = Validator::make($request->all(), [
            //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480'
           // 'month_rent' => 'lte:'. ($remaining_rent) .'',
          'owner_cancelled_cheque_copy' => 'mimes:jpeg,png,jpg|max:50480',
          'owner_pan_card_copy' => 'mimes:jpeg,png,jpg|max:50480',
            'owner_aadhaar_card_copy' => 'mimes:pdf,jpeg,png,jpg|max:50480',
          
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
        }
            

     // Owner
        $owner_name        = strtoupper(request('owner_name'));
       $supplier_no        = request('supplier_no');
        $payee_name        = strtoupper(request('payee_name'));
        $landlord_address  = strtoupper(request('landlord_address'));
        $district          = request('district');
         $state             = request('state');
        $pincode           = request('pincode');
         $email             = request('email');
         $contact_no        = request('contact_no');
         $pan_of_payee      = strtoupper(request('pan_of_payee'));
         $gstn_of_payee      = strtoupper(request('gstn_of_payee'));
        $tds_of_payee        =request('tds_of_payee');

    

      // Rent
      $occupation_of_landlord      = strtoupper(request('property_owner_occupation'));
        $refundable_security_deposits      = request('refundable_security_deposits');
        $advances           = request('advances');
        $month_rent      = request('month_rent');
         $advance_deduction      = request('advance_deduction');
        $special_remarks      = request('special_remarks');
         //$payment_system      = request('payment_system');
         //$agreement_period      = request('agreement_period');
        //$notice_period      = request('notice_period');
        //$enhancement_clause      = request('enhancement_clause');
         //$newly_constructed_for_us      = request('newly_constructed_for_us');
         //$last_tenants      = request('last_tenants');



      // Bank
      $payee_name_for_rent      = request('payee_name_for_rent');
        $branch_name      = request('branch_name');
        $account_type      = request('account_type');
        $bank_name      = request('bank_name');
         $account_no      = request('account_no');
        $ifsc_code      = request('ifsc_code');

        $master_id   = request('master_id');
		
		
		// Get Master Data
		
        $masterData = dst_lrms_masters::find($master_id);
		
		//print_r($masterData);
		
//		exit;
		
		
		$factsheet_code=$masterData['factsheet_code'];
		
		$no_of_owner=$masterData['no_of_owner'];
		
		$no_of_owner_new=$no_of_owner + 1;
		
		
		
         $lrms_property_owners = new dst_lrms_details_property_owners();

      $lrms_property_owners->factsheet_code = isset($factsheet_code) ? $factsheet_code : ' '; 
        $lrms_property_owners->property_owner_name = isset($owner_name) ? $owner_name : ' '; 
      $lrms_property_owners->supplier_no = request('supplier_no');
        $lrms_property_owners->payee_name = isset($payee_name) ? $payee_name : ' '; 
        $lrms_property_owners->property_owner_address = isset($landlord_address) ? $landlord_address : ' '; 
        $lrms_property_owners->property_owner_district = isset($district) ? $district : ' ';  
        $lrms_property_owners->property_owner_state = isset($state) ? $state : ' '; 
        $lrms_property_owners->property_owner_postal_code = isset($pincode) ? $pincode : ' ';
        $lrms_property_owners->property_owner_email = isset($email) ? $email : ' ';
        $lrms_property_owners->property_owner_contact_no = isset($contact_no) ? $contact_no : ' ';
        $lrms_property_owners->payee_pan = isset($pan_of_payee) ? $pan_of_payee : ' ';
        $lrms_property_owners->payee_gstin = isset($gstn_of_payee) ? $gstn_of_payee : ' ';
        $lrms_property_owners->payee_tds = isset($tds_of_payee) ? $tds_of_payee : ' ';



        $lrms_property_owners->owner_cancelled_cheque_copy = isset($imageName_cancelled) ? $imageName_cancelled : ' ';
        $lrms_property_owners->owner_pan_card_copy = isset($imageName_pan_card) ? $imageName_pan_card : ' ';
        $lrms_property_owners->owner_aadhaar_card_copy = isset($imageName_aadhaar_card) ? $imageName_aadhaar_card : ' ';
      

         $lrms_property_owners->dst_lrms_master_id = $master_id;


        $lrms_property_owners->save();


        $lrms_property_rental = new dst_lrm_dtls_pro_rental_dtls();
      $lrms_property_rental->factsheet_code = isset($factsheet_code) ? $factsheet_code : ' '; 
        $lrms_property_rental->refundable_security_deposit = request('refundable_security_deposits');
        $lrms_property_rental->monthly_rent = request('month_rent');
        $lrms_property_rental->advance_deduction = request('advance_deduction');
        $lrms_property_rental->special_remarks = request('special_remarks');
       // $lrms_property_rental->payment_system = request('payment_system');
        
        //$lrms_property_rental->enhancement_clause = request('enhancement_clause');
      
         
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

         $lrms_property_bank->dst_lrms_master_id = $master_id;

       $lrms_property_bank->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;

       $lrms_property_bank->save();

     // echo  $lrms_property_bank->id;

       //exit;
	   
	   // To Update No of Owner in Master Table
	   
	    $data= dst_lrms_details_property_owners::where('dst_lrms_master_id', $master_id)->count('id');
	  
	   //exit;
	   if(!$data==$no_of_owner){
		  $affectedMasterRows = dst_lrms_masters::where('id', $master_id)
       ->update([
           'no_of_owner' => isset($no_of_owner_new) ? $no_of_owner_new : ''
        ]);
		
	   }
	    

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

return redirect('FactsList')->with('update', 'Owner has been added successfully!');
    exit;
    }

    public function agreementToBeRenewList()
    {

     $factDatalist = dst_lrms_masters::where('status',1)->orderBy('id', 'DESC')->get();

     // echo "<pre>";
     // print_r($factDatalist);

      //exit;
     // $ownerCount = $ownerlist->count() + 1;
      //return view("create_fact_sheet_part2",compact('ownerCount'));


        return view('agreement_to_be_renew_list',compact('factDatalist'));


    }
    public function agreementRenew($id)
    {

     
    // print_r($id);
    // exit;

      $factSheet = dst_lrms_masters::find($id);
	  $ownerData = dst_lrms_details_property_owners::where('dst_lrms_master_id', '=', $id)->get()->toArray();
//$ownerBankData = dst_lrm_dtls_pro_bank_dtls::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     $ownerRentData = dst_lrm_dtls_pro_rental_dtls::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     //$ownerDocData = dst_lrms_dtls_documents::where('dst_lrms_master_id', '=', $id)->get()->toArray();
	  

       $regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();


     $branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();
      //$cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");
     $cityList=dst_city_masters::orderBy('city','ASC')->get();

      
     
       // return view('create_fact_sheet',compact('regionList','branchList'));
	   
	   //echo "<pre>";
	   //print_r($ownerData);
	   $supplier_array=array();
	   $property_owner_name_array=array();
	   
	   
	   foreach($ownerData as $owner)
	   {
		   $supplier_array[]             = $owner['supplier_no'];
		   $property_owner_name_array[]  = $owner['property_owner_name'];
	   }
	   
	   //print_r($supplier_array);
	   //print_r($property_owner_name_array);
	   
	    $supplier_list=implode(',',$supplier_array);
	    $owner_name_list=implode(',',$property_owner_name_array);

	   //exit;


      return view('agreement_renew_sheet',compact('factSheet','supplier_list','owner_name_list','regionList','branchList','cityList'));


    }
	public function saveFactSheetRenewalData()
	{
		/*echo "<pre>";
		print_r($_POST);
		exit;
		*/
		/*
       $validator = Validator::make($request->all(), [
            //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480'
            'factsheet_premises_photos.*' => 'mimes:jpeg,png,jpg|max:50480'
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
			*/
    

	  // Renewal Field Added
	    $unique_renewal_code            = request('unique_code');
	    $revised_rent                   = request('revised_rent');
        $monthly_increase               = request('monthly_increase');
        $action_taken                   = request('action_taken');
		$rental_past_history            = request('rental_past_history');
		$comment                        = request('comment');
		$status                         = request('comment');  

	  
	
     // Master
        $dst_lrms_master_id            = request('master_id');
        $region_code                   = request('region_code');
        $factsheet_code                = request('factsheet_code');
        $branch_id                     = request('branch_id');
        
        $branch_location               = request('branch_location');
        $branch_code                   = request('branch_code');
        $branch_type                   = request('branch_type');
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
		    $connectivity_mobile            = request('connectivity_mobile');
        $internet_service_provider     = strtoupper(request('internet_service_provider'));
        $surrounding_front             = strtoupper(request('surrounding_front'));
        $surrounding_back              = strtoupper(request('surrounding_back'));
        $surrounding_left              = strtoupper(request('surrounding_left'));
        $surrounding_right             = strtoupper(request('surrounding_right'));
        $near_by_competitors1          = strtoupper(request('near_by_competitors1'));
        $near_by_competitors1_dis      = request('near_by_competitors1_dis');
		   $near_by_competitors1_dis_unit  = request('near_by_competitors1_dis_unit');
        $near_by_competitors2          = request('near_by_competitors2');
        $near_by_competitors2_dis     = strtoupper(request('near_by_competitors2_dis'));
		    $near_by_competitors2_dis_unit  = request('near_by_competitors2_dis_unit');
        $near_by_competitors3          = request('near_by_competitors3');
        $near_by_competitors3_dis     = request('near_by_competitors3_dis');
		   $near_by_competitors3_dis_unit  = request('near_by_competitors3_dis_unit');
	
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
       
       
         
        // To save into lrms master table
       $lrms_master = new dst_lrms_masters();
	   
	   $unique_renewal_code            = request('unique_code');
	    $revised_rent                   = request('revised_rent');
        $monthly_increase               = request('monthly_increase');
        $action_taken                   = request('action_taken');
		$rental_past_history            = request('rental_past_history');
		$comment                        = request('comment');
		$status                         = 1; 

        $lrms_master->unique_renewal_code             =  isset($unique_renewal_code) ? $unique_renewal_code : ' ';
        $lrms_master->revised_rent              =  isset($revised_rent) ? $revised_rent : ' ';
        $lrms_master->monthly_increase                   =  isset($monthly_increase) ? $monthly_increase : ' ';
	    $lrms_master->action_taken                   =  isset($action_taken) ? $action_taken : ' ';	
		$lrms_master->rental_past_history                   =  isset($rental_past_history) ? $rental_past_history : ' ';	
		$lrms_master->comment                   =  isset($comment) ? $comment : ' ';
		$lrms_master->status                   =  isset($status) ? $status : ' ';	

		
        $lrms_master->region_code                 =  isset($region_code) ? $region_code : ' ';
        $lrms_master->factsheet_code              =  isset($factsheet_code) ? $factsheet_code : ' ';
        $lrms_master->branch_id                   =  isset($branch_id) ? $branch_id : ' ';
        $lrms_master->branch_location             =  isset($branch_location) ? $branch_location : ' ';
        $lrms_master->branch_code                 =  isset($branch_code) ? $branch_code : ' ';
        $lrms_master->branch_type                 = isset($branch_type) ? $branch_type : ' ';
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
       // $lrms_master->advance_deduction_wef_date      = isset($advance_deduction_wef_date) ? $advance_deduction_wef_date : '0000-00-00';
        $lrms_master->created_date                    = date("Y-m-d");
		
		
		$get_no_of_renewal=dst_lrms_masters::where('id', '=', $dst_lrms_master_id)->first(['no_of_renewal']);
		$no_of_renewal=$get_no_of_renewal['no_of_renewal'];
		$new_no_of_renewal=$no_of_renewal + 1;
		
		$lrms_master->no_of_renewal      = isset($new_no_of_renewal) ? $new_no_of_renewal : '0';


       //$premises_photos  =  implode("|",$data);

       //$lrms_master->factsheet_premises_photos     = isset($premises_photos) ? $premises_photos : ' ';
       
       $lrms_master->save();

    // To save into premises
        /* $lrms_dtls_documents = new dst_lrms_dtls_documents();
       
       if(!empty($data))
       {

            foreach($data as $doc)
             {
              
               $lrms_dtls_documents->dst_lrms_master_id              = $lrms_master->id;
            $lrms_dtls_documents->doc_type =0;
            $lrms_dtls_documents->attachement = isset($doc) ? $doc : ' ';

             $lrms_dtls_documents->save();

             }


       }*/
     

       // To save into rental details 
      /*$no_of_increment_number=0;

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

        
         $lrms_rental_renewals->save();*/

        //echo  $lrms_rental_renewals->id;
       // exit;

       /*if($lrms_master->id)
       {
         

           $request->session()->put('master_id', $lrms_master->id);
           $request->session()->put('no_of_owner', $lrms_master->no_of_owner);
           

       }
      */

  // To save into monthly rental details 


    $lrms_monthly_rental = new dst_lrms_dtls_monthly_rentals();


       $lrms_monthly_rental->dst_lrms_master_id                = isset($lrms_master->id) ? $lrms_master->id : ' ';      
        
       $lrms_monthly_rental->payment_system                   = isset($payment_system) ? $payment_system : ' ';     
        $lrms_monthly_rental->total_month_rent                = isset($total_month_rent) ? $total_month_rent : 0.0;          
      

       $lrms_monthly_rental->save();


       // To save into rent agreement details 


    $lrms_rent_agreements = new dst_lrms_rent_agreements();

    //$full_address=$address1. $address2 . $address3;
	$full_address=$address1 ." ". $address2 ." ". $address3;

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

    $lrms_rent_agreements->monthly_rent                = isset($revised_rent) ? $revised_rent : ' ';    

    $lease_total_amount=$no_of_months * $revised_rent;

    $lrms_rent_agreements->lease_total_amount                     = isset($lease_total_amount) ? $lease_total_amount : ' ';  
    $lrms_rent_agreements->notice_period                    = isset($notice_period) ? $notice_period : ' ';   

    $lrms_rent_agreements->no_of_owner                    = isset($no_of_owner) ? $no_of_owner : ' ';   

    $lrms_rent_agreements->total_refundable_security_deposits  = isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : ' ';   


    $lrms_rent_agreements->save();
   
        
		
return redirect('agreementRenewedList');
		
	}
	public function saveRenewalData()
	{
		// echo "<pre>";
		// print_r($_POST);
		// exit;
		  // Renewal Data
        $dst_lrms_master_id        = request('master_id');
        $factsheet_code            = request('factsheet_code');
        $unique_code               = request('unique_code');
        $branch_location           = request('branch_location');
        $payment_system            = request('payment_system');
        $supplier_no               = request('supplier_no');
        $name_of_landlord          = request('name_of_landlord');
		$agreement_period_start    = request('agreement_period_start');
		$agreement_period_end      = request('agreement_period_end');
        $premises_area             = request('premises_area');
        //$advances_balance_from     = request('advances_balance_from');
        $advance_deduction_if_any  = request('advance_deduction_if_any');
        $present_rent              = request('present_rent');
        $revised_rent              = request('revised_rent');
        $monthly_increase          = request('monthly_increase');
        $branch_occupancy_date     = request('branch_occupancy_date');
        $rental_past_history       = request('rental_past_history');
        $action_taken              = request('action_taken');
		
		// To get Number of Renewal Times
       
         $get_no_of_renewal=dst_lrms_masters::where('id', '=', $dst_lrms_master_id)->first(['no_of_renewal']);
		$no_of_renewal=$get_no_of_renewal['no_of_renewal'];
		$new_no_of_renewal=$no_of_renewal + 1;
		
        // To save into lrms rental renewals table
       $lrms_rental_renewals = new dst_lrms_dtls_rental_renewals();


        $lrms_rental_renewals->dst_lrms_master_id                 = isset($dst_lrms_master_id) ? $dst_lrms_master_id : ' ';
        $lrms_rental_renewals->factsheet_code                     = isset($factsheet_code) ? $factsheet_code : ' ';
        $lrms_rental_renewals->unique_code                        = isset($unique_code) ? $unique_code : ' ';
        $lrms_rental_renewals->branch_location                    = isset($branch_location) ? $branch_location : ' ';
        $lrms_rental_renewals->payment_system                     = isset($payment_system) ? $payment_system : ' ';
        $lrms_rental_renewals->supplier_no                        = isset($supplier_no) ? $supplier_no : ' ';
        $lrms_rental_renewals->name_of_landlord                   = isset($name_of_landlord) ? $name_of_landlord : ' ';
		$lrms_rental_renewals->agreement_period_start             = isset($agreement_period_start) ? $agreement_period_start : ' ';
	    $lrms_rental_renewals->agreement_period_end               = isset($agreement_period_end) ? $agreement_period_end : ' ';
        $lrms_rental_renewals->premises_area                      = isset($premises_area) ? $premises_area : ' ';
        //$lrms_rental_renewals->advances_balance_from              = isset($advances_balance_from) ? $advances_balance_from : ' ';
        $lrms_rental_renewals->advance_deduction_if_any           = isset($advance_deduction_if_any) ? $advance_deduction_if_any : ' ';
        $lrms_rental_renewals->present_rent                       = isset($present_rent) ? $present_rent : ' ';
        $lrms_rental_renewals->revised_rent                       = isset($revised_rent) ? $revised_rent : ' ';
        $lrms_rental_renewals->monthly_increase                   = isset($monthly_increase) ? $monthly_increase : ' ';
		$lrms_rental_renewals->branch_occupancy_date              = isset($branch_occupancy_date) ? $branch_occupancy_date : ' ';
        $lrms_rental_renewals->rental_past_history                = isset($rental_past_history) ? $rental_past_history : ' ';
        $lrms_rental_renewals->action_taken                       = isset($action_taken) ? $action_taken : ' ';
		$lrms_rental_renewals->no_of_increment_number             = isset($new_no_of_renewal) ? $new_no_of_renewal : ' ';

       $lrms_rental_renewals->save();
	   
	   //$factSheet = dst_lrms_masters::find($id);
	   
	   // echo $get_no_of_renewal=dst_lrms_masters::find($dst_lrms_master_id,['no_of_renewal']);
	    
	    //echo "<pre>";
		//print_r($_POST);
		//print_r($get_no_of_renewal);
	   
	   //exit;
	   $affectedRows = dst_lrms_masters::where('id', $dst_lrms_master_id)
       ->update([
           'no_of_renewal' => isset($new_no_of_renewal) ? $new_no_of_renewal : ' ',
        ]);
		
		
	   
	    return redirect('agreementRenewedList');
	}
    public function agreementRenewedList()
	{
		$renewedList = dst_lrms_masters::orderBy('id', 'DESC')->where('no_of_renewal','>', 0)->get();
		//$renewedList = DB::table('dst_lrms_dtls_rental_renewals')->where('no_of_increment_number','>', 0)->orderBy('id', 'DESC')->first();
       
		/*echo "<pre>";
		print_r($renewedList);
		exit;*/
	  return view('agreement_renewed_list',compact('renewedList'));

	}
 public function viewnew($id){
      $factSheet = dst_lrms_masters::find($id);

      //$ownerData=dst_lrms_details_property_owners::find($id);

     $ownerData = dst_lrms_details_property_owners::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     $ownerBankData = dst_lrm_dtls_pro_bank_dtls::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     $ownerRentData = dst_lrm_dtls_pro_rental_dtls::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     $ownerDocData = dst_lrms_dtls_documents::where('dst_lrms_master_id', '=', $id)->get()->toArray();
     // echo "<pre>";
     //  print_r($factSheet);
     //  echo "Owner";
     //  echo "<br>";
     //  print_r($ownerData);
     //  print_r($ownerBankData);
     //  print_r($ownerRentData);



     //   exit;

      return view('view_fact_sheet_new',compact('factSheet','ownerData','ownerBankData','ownerRentData','ownerDocData'));

    }

	public function downloadImage($imageId)
	{
	   $book_cover = dst_lrms_masters::where('id', $imageId)->firstOrFail();
	   $path = public_path(). '/uploads/factsheet_premises/'. $book_cover->factsheet_premises_photos;
	   return response()->download($path, $book_cover
				->original_filename, ['Content-Type' => $book_cover->mime]);
   }

    public function changeStatus(Request $request)
    {
    //print_r($_POST);
    //exit;
    $owner_id=$_POST['id'];
    $status=$_POST['status'];
    $affectedRows = dst_lrms_details_property_owners::where('id', $owner_id)
       ->update([
           'status' => isset($status) ? $status : ' ',
        ]);

 $affectedBankRows = dst_lrm_dtls_pro_bank_dtls::where('dst_lrm_dtls_prorperty_owner_id', $owner_id)
       ->update([
           'status' => isset($status) ? $status : ' ',
        ]);

 $affectedRentRows = dst_lrm_dtls_pro_rental_dtls::where('dst_lrm_dtls_prorperty_owner_id', $owner_id)
       ->update([
           'status' => isset($status) ? $status : ' ',
        ]);		
        return response()->json(['success'=>'Status change successfully.']);
    /*
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);*/
    }
	public function addMoreNoOfOwner(Request $request){
		
		//print_r($_POST);
		$master_id=$_POST['fact_sheet_id'];
		$no_of_owner=$_POST['no_of_owner'];
		//exit;
		$affectedRows = dst_lrms_masters::where('id', $master_id)
       ->update([
           'no_of_owner' => isset($no_of_owner) ? $no_of_owner : ' '
        ]);
		
		return redirect('FactsList')->with('update', 'Fact Sheet No. Of Owner has been added successfully!');
    exit;
		
	}
	public function downloadMessPDF($id)
	{

      $factSheet=dst_lrms_rent_agreements::where('dst_lrms_master_id','=',$id)->get();
    
    $factsheet_code=$factSheet[0]->factsheet_code;
   
     // To Get Owner Data Using Master factsheetcode
	  //$ownerData = dst_lrms_details_property_owners::where('dst_lrms_master_id', '=', $id)->get()->toArray();
         $ownerData = dst_lrms_details_property_owners::where('factsheet_code', '=', $factsheet_code)->get()->toArray();

	  $all_owner_name='';
           $all_owner_address='';
	    foreach($ownerData as $owner){
          $all_owner_name.=$owner['property_owner_name']. "," ;
           $all_owner_address.=$owner['property_owner_address']. "," ;

          }
	

      $pdf = PDF::loadView('mess_pdf', compact('factSheet','all_owner_name','all_owner_address','ownerData'));
    
    
     // return $pdf->download('mess_lease_agreement.pdf');
	 
	  //return $pdf->download('mess_lease_agreement'.date('d-m-Y').'.pdf');
	  return $pdf->download('mess_lease_agreement_'.$factsheet_code.'_'.date('d-m-Y').'.pdf');

    }
	  public function updateStatus()
    {
      
     // print_r($_POST);
      //exit;
      $approve_status=$_POST['approve_status'];
      $status_remarks=$_POST['status_remarks'];
      $fact_sheet_id=$_POST['fact_sheet_id_status'];

      $affectedRows = dst_lrms_masters::where('id', $fact_sheet_id)
       ->update([
           'approve_status' => isset($approve_status) ? $approve_status : ' ',
           'approve_status_remarks' => isset($status_remarks) ? $status_remarks : ' ',

        ]);
    
    return redirect('FactsList')->with('update', 'Fact Sheet Status is Updated successfully!');

    }

}
