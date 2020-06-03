<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//use Session;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\View;

use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Validator;

//use Illuminate\Routing\Controller;



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

use DateTime;
use Illuminate\Support\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
    public function dashboard()
    {
         return view('dashboard');
    }
    public function createFactSheet()
    {
       

      $regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();


      $branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();
      
     
        return view('create_fact_sheet',compact('regionList','branchList'));


    }
    public function saveFactData(Request $request)
    {

        // if ($request->session()->has('master_id')) {
        //    $request->session()->forget('master_id');
        //    $request->session()->forget('ownerCount');
        // }
        // echo "<pre>";
        //   print_r($_POST);
        //  exit;
// $test = $this->validate($request, [
//     'name' => 'required|min:2|max:255'
// ]);

       // dd(request()->all());

  //       echo $request->file('factsheet_premises_photos');

  // $factsheet_premises_photos=$request->file('factsheet_premises_photos');
  //   $imageName = time().'.'.$factsheet_premises_photos->getClientOriginalExtension();

  //       $destinationPath = 'uploads/factsheet_premises';

  //          $factsheet_premises_photos->move($destinationPath, $imageName);

  //          exit;

$validator = Validator::make($request->all(), [
    //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480'
    'factsheet_premises_photos.*' => 'mimes:jpeg,png,jpg|max:50480'
]);

if ($validator->fails()) {
   // return view('view_name');
    //echo "falis";
    return redirect()->back()->withErrors($validator->errors());
    //exit;
} else {
    //echo "true";

$data=array();
    ////////////////
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

           

    //////////////

    // $factsheet_premises_photos=$request->file('factsheet_premises_photos');
    // $imageName = time().'-'.$factsheet_premises_photos->getClientOriginalName();

    //     $destinationPath = 'uploads/factsheet_premises';

    //        $factsheet_premises_photos->move($destinationPath, $imageName);

           // echo "uploaded";
            //exit;
  
}

// $test = $request->validate([
//            'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480',
//         ]);

//         if( $test )
// { //Ok 
// $factsheet_premises_photos=$request->file('factsheet_premises_photos');

//         $imageName = time().'.'.$factsheet_premises_photos->getClientOriginalExtension();

  
//       $destinationPath = 'uploads/factsheet_premises';
//         $factsheet_premises_photos->move($destinationPath, $imageName);


//   $premises_photos=  $imageName;
// }
// else
// { //No
// return redirect()->back()->withErrors($v->errors());
// }

/*
exit;


       $v = Validator::make($request->all(), [
        //'last_tenant' => 'required|unique|max:255',
        //'factsheet_premises_photos' => 'mimetypes:image/jpeg,image/png',
         //'factsheet_premises_photos' => 'mimes:jpeg,png',
           'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480',
           //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png'
         
       // required|mimes:jpeg
    ]);



   

    if ($v->fails())
    {
        return redirect()->back()->withErrors($v->errors());
    }else{

$factsheet_premises_photos=$request->file('factsheet_premises_photos');

        $imageName = time().'.'.$factsheet_premises_photos->getClientOriginalName();

  
      $destinationPath = 'uploads/factsheet_premises';
        $factsheet_premises_photos->move($destinationPath, $imageName);


  $premises_photos=  $imageName;

    }
 
*/

     // if($request->hasfile('factsheet_premises_photos'))
     //     {
     //        $destinationPath = 'uploads/factsheet_premises';

     //        foreach($request->file('factsheet_premises_photos') as $image)
     //        {
     //            $name=$image->getClientOriginalName();
     //              $imageName = time().'.'.$factsheet_premises_photos->getClientOriginalExtension();
     //            //$image->move(public_path().'/images/', $name);  
     //            $image->move($destinationPath,$name);  
     //            $data= $name;  
     //        }
     //     }


         //exit;
//$premises_photos=  implode("|",$data);
     // Master

        $region_code                   = request('region_code');
        $factsheet_code                = request('factsheet_code');
        $branch_id                     = request('branch_id');
        
        $branch_location               = request('branch_location');
        $branch_code                   = request('branch_code');
        $branch_type                   = request('branch_type');
        $fact_sheet_date               = request('fact_sheet_date');
        $branch_occupancy_date         = request('branch_occupancy_date');
        $address1                      = request('address1');
        $address2                      = request('address2');
        $address3                      = request('address3');
        $addr_state                    = request('addr_state');
        $addr_pincode                  = request('addr_pincode');
       $office_tele_phone              = request('office_tele_phone');
        $near_by_highway               = request('near_by_highway');
        $distance_from_highway         = request('distance_from_highway');
        $safexpress_connectivity_route = request('safexpress_connectivity_route');
        $property_location_direction   = request('property_location_direction');
        $nearest_airport               = request('nearest_airport');
        $nearest_railway_station       = request('nearest_railway_station');
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
        $surrounding_front             = request('surrounding_front');
        $surrounding_back              = request('surrounding_back');
        $surrounding_left              = request('surrounding_left');
        $surrounding_right             = request('surrounding_right');
        $near_by_competitors1          = request('near_by_competitors1');
        $near_by_competitors1_dis     = request('near_by_competitors1_dis');
        $near_by_competitors2          = request('near_by_competitors2');
        $near_by_competitors2_dis     = request('near_by_competitors2_dis');
        $near_by_competitors3          = request('near_by_competitors3');
        $near_by_competitors3_dis     = request('near_by_competitors3_dis');
        $axis_bank_nearest_branch      = request('axis_bank_nearest_branch');
        $office_to_axis_bank_distance  = request('office_to_axis_bank_distance');
        $nearest_bank_other_than_axis  = request('nearest_bank_other_than_axis');
        $nearest_atm                   = request('nearest_atm');
        $distance_from_office_to_atm   = request('distance_from_office_to_atm');
        $associate_name                = request('associate_name');
        $cordinator_name               = request('cordinator_name');
        $approved_by                   = request('approved_by');
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

       $lrms_master->premises_area                = isset($total_length_breadth) ? $total_length_breadth : 0.0;
       $lrms_master->premises_area_unit          = isset($total_length_breadth_unit) ? $total_length_breadth_unit : ' ';

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
        $lrms_master->agreement_period_start                        = isset($agreement_period_start) ? $agreement_period_start : '0000-00-00'; 

        $lrms_master->agreement_period_end                        = isset($agreement_period_end) ? $agreement_period_end : '0000-00-00'; 
        $lrms_master->notice_period                           = isset($notice_period) ? $notice_period : ' '; 
        $lrms_master->enhancement_clause                       = isset($enhancement_clause) ? $enhancement_clause : ' ';
        $lrms_master->newly_constructed_for_us                 = isset($newly_constructed_for_us) ? $newly_constructed_for_us : ' ';
        $lrms_master->last_tenant                              = isset($last_tenant) ? $last_tenant : ' ';
        $lrms_master->advance_deduction_wef_date               = isset($advance_deduction_wef_date) ? $advance_deduction_wef_date : '0000-00-00';
        $lrms_master->created_date                                   = date("Y-m-d");







// if($request->hasFile('factsheet_premises_photos')) {

//     echo $file = $request->file('factsheet_premises_photos');

//     echo $fileName = $file->getClientOriginalName();


// }

// if ($request->hasFile('factsheet_premises_photos')) {

//     echo "hjhhjkhkjhj";
    
// }else{

//     echo "not";
// }

// exit;

//factsheet_premises_photos

        /*

         $file = $request->file('factsheet_premises_photos');
   
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = 'uploads/factsheet_premises';
      $file->move($destinationPath,$file->getClientOriginalName());

     */

      /*

     if($request->hasfile('factsheet_premises_photos'))
         {
            $destinationPath = 'uploads/factsheet_premises';

            foreach($request->file('factsheet_premises_photos') as $image)
            {
                $name=$image->getClientOriginalName();
                //$image->move(public_path().'/images/', $name);  
                $image->move($destinationPath,$name);  
                $data[] = $name;  
            }
         }
$premises_photos=  implode("|",$data);

*/
$premises_photos=  implode("|",$data);
//$premises_photos=  $imageName;

$lrms_master->factsheet_premises_photos               = isset($premises_photos) ? $premises_photos : ' ';
        // $form= new Form();
        // $form->filename=json_encode($data);


       $lrms_master->save();



       //exit;
      //echo $lrms_master->id;


      // exit;
//echo "<br>";
// echo $start_date = strtotime($agreement_period_start); 
 //echo "<br>";
   //  echo $end_date = strtotime($agreement_period_end);
    // echo "<br>"; 


    //echo $lease_period = (($end_date - $start_date)/60/60/24);
    //echo "<br>";


//     $datetime1 = new DateTime($start_date);

// $datetime2 = new DateTime($end_date);

// echo $date = DateTime::createFromFormat('d/m/Y', trim($encDateTime));

// $difference = $datetime1->diff($datetime2);

// echo 'Difference: '.$difference->y.' years, ' 
//                    .$difference->m.' months, ' 
//                    .$difference->d.' days';

// print_r($difference);

//$start = Carbon::parse($agreement_period_start);
//$end = Carbon::parse($agreement_period_end);
//$now = Carbon::now();

//echo $start;
//echo "<br>";
//echo $end;
//echo "<br>";

//echo $length = $end->diffInDays($start);

 //echo "<br>";

  //echo $lease_period_month=$lease_period /12;


  //exit;


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



       // To save into rent agreement details 


    $lrms_rent_agreements = new dst_lrms_rent_agreements();

    $full_address=$address1. $address2 . $address3;

    $lrms_rent_agreements->dst_lrms_master_id                = isset($lrms_master->id) ? $lrms_master->id : ' ';     

    $lrms_rent_agreements->lease_agreement_start_date        = isset($agreement_period_start) ? $agreement_period_start : ' ';     

    $lrms_rent_agreements->lease_agreement_end_date          = isset($agreement_period_end) ? $agreement_period_end : ' ';     

    $lrms_rent_agreements->premises_address                  = isset($full_address) ? $full_address : ' ';     

    $lrms_rent_agreements->premises_state                    = isset($addr_state) ? $addr_state : ' ';     

    $lrms_rent_agreements->premises_pin_code                = isset($addr_pincode) ? $addr_pincode : ' ';     

    $lrms_rent_agreements->premises_area                    = isset($total_length_breadth) ? $total_length_breadth : ' ';     

    $lrms_rent_agreements->premises_area_unit                = isset($total_length_breadth_unit) ? $total_length_breadth_unit : ' ';    

   // $start_date = strtotime($agreement_period_start); 
    // $end_date = strtotime($agreement_period_end); 


    //$lease_period = (($end_date - $start_date)/60/60/24);

  //$lease_period_month=$lease_period /12;


/////////////////

$start = Carbon::parse($agreement_period_start);
$end = Carbon::parse($agreement_period_end);
//$now = Carbon::now();

//echo $start;
//echo "<br>";
//echo $end;
//echo "<br>";

 $no_of_days = $end->diffInDays($start);
 $no_of_months=$end->diffInMonths($start);

 //echo "<br>";

  ////////





    $lrms_rent_agreements->lease_period                     = isset($no_of_months) ? $no_of_months : ' ';     

    $lrms_rent_agreements->increment_rate                = isset($enhancement_clause) ? $enhancement_clause : ' ';     

    $lrms_rent_agreements->monthly_rent                = isset($total_month_rent) ? $total_month_rent : ' ';    

    $lease_total_amount=$no_of_months * $total_month_rent;

    $lrms_rent_agreements->lease_total_amount                     = isset($lease_total_amount) ? $lease_total_amount : ' ';  
    $lrms_rent_agreements->notice_period                    = isset($notice_period) ? $notice_period : ' ';   

    $lrms_rent_agreements->no_of_owner                    = isset($no_of_owner) ? $no_of_owner : ' ';   

    $lrms_rent_agreements->total_refundable_security_deposits  = isset($total_refundable_security_deposits) ? $total_refundable_security_deposits : ' ';   

    

    

 $lrms_rent_agreements->save();
   



//$this->createFactSheetPart2();

return redirect('createFactSheetPart2');


       exit;

    }

public function convertNumberToString($num){ 
  $decones = array( 
          '01' => "One", 
          '02' => "Two", 
          '03' => "Three", 
          '04' => "Four", 
          '05' => "Five", 
          '06' => "Six", 
          '07' => "Seven", 
          '08' => "Eight", 
          '09' => "Nine", 
          10 => "Ten", 
          11 => "Eleven", 
          12 => "Twelve", 
          13 => "Thirteen", 
          14 => "Fourteen", 
          15 => "Fifteen", 
          16 => "Sixteen", 
          17 => "Seventeen", 
          18 => "Eighteen", 
          19 => "Nineteen" 
  );
  $ones = array( 
          0 => " ",
          1 => "One",     
          2 => "Two", 
          3 => "Three", 
          4 => "Four", 
          5 => "Five", 
          6 => "Six", 
          7 => "Seven", 
          8 => "Eight", 
          9 => "Nine", 
          10 => "Ten", 
          11 => "Eleven", 
          12 => "Twelve", 
          13 => "Thirteen", 
          14 => "Fourteen", 
          15 => "Fifteen", 
          16 => "Sixteen", 
          17 => "Seventeen", 
          18 => "Eighteen", 
          19 => "Nineteen" 
  ); 
  $tens = array( 
          0 => "",
          2 => "Twenty", 
          3 => "Thirty", 
          4 => "Forty", 
          5 => "Fifty", 
          6 => "Sixty", 
          7 => "Seventy", 
          8 => "Eighty", 
          9 => "Ninety" 
  ); 
  $hundreds = array( 
          "Hundred", 
          "Thousand", 
          "Million", 
          "Billion", 
          "Trillion", 
          "Quadrillion" 
  ); //limit t quadrillion 
  $num = number_format($num,2,".",","); 
  $num_arr = explode(".",$num); 
  $wholenum = $num_arr[0]; 
  $decnum = $num_arr[1]; 
  $whole_arr = array_reverse(explode(",",$wholenum)); 
  krsort($whole_arr); 
  $rettxt = ""; 
  foreach($whole_arr as $key => $i){ 
      if($i < 20){ 
          $rettxt .= $ones[$i]; 
      }
      elseif($i < 100){ 
          $rettxt .= $tens[substr($i,0,1)]; 
          $rettxt .= " ".$ones[substr($i,1,1)]; 
      }
      else{ 
          $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
          $rettxt .= " ".$tens[substr($i,1,1)]; 
          $rettxt .= " ".$ones[substr($i,2,1)]; 
      } 
      if($key > 0){ 
          $rettxt .= " ".$hundreds[$key]." "; 
      } 
  } 
  if($decnum > 0){ 
      $rettxt .= " point "; 
      if($decnum < 20){ 
          $rettxt .= $decones[$decnum]; 
      }
      elseif($decnum < 100){ 
          $rettxt .= $tens[substr($decnum,0,1)]; 
          $rettxt .= " ".$ones[substr($decnum,1,1)]; 
      }
  } 
  return $rettxt;
}
    public function createFactSheetPart2(Request $request)
    {

   
      //$data = array('id'=>$id);

       //echo $request->session()->put('no_of_owner', $lrms_master->no_of_owner);


      //return view('create_fact_sheet_part2');
      echo $master_id= $request->session()->get('master_id');
      $ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)->get();
      $ownerCount = $ownerlist->count() + 1;

      //$totalRentalSum=$this->getRentalSum($master_id);

       $totalRentalSum=\DB::table("dst_lrm_dtls_pro_rental_dtls")->where('dst_lrms_master_id', '=', $master_id)->get()->sum("monthly_rent");

        //$monthlyRentalquery = \DB::table('dst_lrms_masters')->where('dst_lrms_master_id', '=', $master_id)->get();
        //$monthlyRentalquery =\DB::table('dst_lrms_masters')->select('total_month_rent')->where('dst_lrms_master_id', '=', $master_id)->get();

        $monthlyRentalquery = \DB::table('dst_lrms_masters')->where('dst_lrms_master_id', '=', $master_id)->get();
      
      //echo "here";
      // echo $monthlyRentalquery['total_month_rent'];
        
        //echo "<pre>";
        print_r($monthlyRentalquery);
        exit;


        $monthlyRental=$monthlyRentalquery->total_month_rent;

       //$monthlyRental=\DB::table("dst_lrms_masters")->where('dst_lrms_master_id', '=', $master_id)->select('total_month_rent')->pluck('total_month_rent')->first();

     // $myquery = DB::table('attendances')->where('date_only', $newdate)->select('user_id')->pluck('user_id')->first();

       //print_r($totalRentalSum);
       //exit;
      return view("create_fact_sheet_part2",compact('ownerCount','totalRentalSum','monthlyRental'));


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
        



        $no_of_owner= $request->session()->get('no_of_owner');

     $master_id= $request->session()->get('master_id');
    
     $ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)
            ->get();
    // echo "ownerCount >> ". $ownerCount = $ownerlist->count();
     $ownerCount = $ownerlist->count();

      $request->session()->put('ownerCount', $ownerCount);


    if($ownerCount<$no_of_owner){
      


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

        $master_id= $request->session()->get('master_id');

         $lrms_property_owners = new dst_lrms_details_property_owners();

       
       $lrms_property_owners->property_owner_name = request('owner_name');
        $lrms_property_owners->payee_name = request('payee_name');
        $lrms_property_owners->property_owner_address = request('landlord_address');
        $lrms_property_owners->property_owner_district = isset($district) ? $district : ' ';  
        $lrms_property_owners->property_owner_state = isset($state) ? $state : ' '; 
        $lrms_property_owners->property_owner_postal_code = isset($pincode) ? $pincode : ' ';
        $lrms_property_owners->property_owner_email = isset($email) ? $email : ' ';
        $lrms_property_owners->property_owner_contact_no = isset($contact_no) ? $contact_no : ' ';
        $lrms_property_owners->payee_pan = isset($pan_of_payee) ? $pan_of_payee : ' ';
        $lrms_property_owners->payee_gstin = isset($gstn_of_payee) ? $gstn_of_payee : ' ';
            

         $lrms_property_owners->dst_lrms_master_id = $master_id;




        $lrms_property_owners->save();


        $lrms_property_rental = new dst_lrm_dtls_pro_rental_dtls();
        $lrms_property_rental->refundable_security_deposit = request('refundable_security_deposits');
        $lrms_property_rental->monthly_rent = request('month_rent');
        $lrms_property_rental->advance_deduction = request('advance_deduction');
        $lrms_property_rental->special_remarks = request('special_remarks');
        $lrms_property_rental->payment_system = request('payment_system');
        //$lrms_property_rental->agreement_period = request('agreement_period');
        //$lrms_property_rental->notice_period = request('notice_period');
        $lrms_property_rental->enhancement_clause = request('enhancement_clause');
        //$lrms_property_rental->newly_constructed_for_us = request('newly_constructed_for_us');
               // $lrms_property_rental->last_tenants = request('last_tenants');


         
        $lrms_property_rental->dst_lrms_master_id = $master_id;

       $lrms_property_rental->dst_lrm_dtls_prorperty_owner_id = $lrms_property_owners->id;

       $lrms_property_rental->save();

        //echo $lrms_property_rental->id;

      /// exit;



       $lrms_property_bank = new dst_lrm_dtls_pro_bank_dtls();

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

      //return view('create_fact_sheet_part2');
       return redirect('createFactSheetPart2');

       
    }else{
 //return view('home');

 //return redirect('home');



 return redirect()->route('home');

 //return 5;

    }
    


    }

 public function logout () {
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
        $address1                      = request('address1');
        $address2                      = request('address2');
        $address3                      = request('address3');
        $addr_state                    = request('addr_state');
        $addr_pincode                  = request('addr_pincode');
       $office_tele_phone              = request('office_tele_phone');
        $near_by_highway               = request('near_by_highway');
        $distance_from_highway         = request('distance_from_highway');
        $safexpress_connectivity_route = request('safexpress_connectivity_route');
        $property_location_direction   = request('property_location_direction');
        $nearest_airport               = request('nearest_airport');
        $nearest_railway_station       = request('nearest_railway_station');
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
        $surrounding_front             = request('surrounding_front');
        $surrounding_back              = request('surrounding_back');
        $surrounding_left              = request('surrounding_left');
        $surrounding_right             = request('surrounding_right');
        $near_by_competitors1          = request('near_by_competitors1');
        $near_by_competitors1_dis     = request('near_by_competitors1_dis');
        $near_by_competitors2          = request('near_by_competitors2');
        $near_by_competitors2_dis     = request('near_by_competitors2_dis');
        $near_by_competitors3          = request('near_by_competitors3');
        $near_by_competitors3_dis     = request('near_by_competitors3_dis');
        $axis_bank_nearest_branch      = request('axis_bank_nearest_branch');
        $office_to_axis_bank_distance  = request('office_to_axis_bank_distance');
        $nearest_bank_other_than_axis  = request('nearest_bank_other_than_axis');
        $nearest_atm                   = request('nearest_atm');
        $distance_from_office_to_atm   = request('distance_from_office_to_atm');
        $associate_name                = request('associate_name');
        $cordinator_name               = request('cordinator_name');
        $approved_by                   = request('approved_by');
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

    
}
