<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequest;
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
		use App\dst_lrms_factsheet_agreement_document;
		use DB;
		use Illuminate\Support\Facades\Validator;
		use DateTime;
		use Illuminate\Support\Carbon;

class FactSheetRenewController extends Controller
{
   public function factSheetRenew($id)
		{

		$factSheet = dst_lrms_masters::find($id);	
		//$factSheet = dst_lrms_masters::find([$id,'status'=>1]);

		// echo "<pre>";
		// print_r($factSheet);
		// exit;

		//   $factSheet = dst_lrms_masters::find($id);

		$regionList = dst_region_masters::orderBy('region_code', 'ASC')->get();


		$branchList =dst_lrm_branch_dtls::orderBy('branch_code', 'ASC')->get();
		$cityList=\DB::select("SELECT DISTINCT SUBSTR(branch_name, 1, (INSTR(branch_name,'-'))-1) AS city from dst_lrm_branch_dtls order by branch_name");



		// return view('create_fact_sheet',compact('regionList','branchList'));


		return view('agreement_renew_sheet',compact('factSheet','regionList','branchList','cityList'));





		}
		public function saveRenewalData(Request $request)
		{
		//echo"<pre>";
		//print_r($request->all());
		//exit;

		/////////////////////////////////////////////////////////////////////////////
		/*
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
		$advances_balance_from     = request('advances_balance_from');
		$advance_deduction_if_any  = request('advance_deduction_if_any');
		$present_rent              = request('present_rent');
		$revised_rent              = request('revised_rent');
		$monthly_increase          = request('monthly_increase');
		$branch_occupancy_date     = request('branch_occupancy_date');
		$rental_past_history       = request('rental_past_history');
		$action_taken              = request('action_taken');


		// To save into lrms rental renewals table
		//$lrms_rental_renewals = new dst_lrms_dtls_rental_renewals();
		$lrms_rental_renewals = new dst_lrms_masters();

		$lrms_rental_renewals->dst_lrms_master_id     = isset($dst_lrms_master_id) ? $dst_lrms_master_id : ' ';
		$lrms_rental_renewals->factsheet_code         = isset($factsheet_code) ? $factsheet_code : ' ';

		$lrms_rental_renewals->branch_location        = isset($branch_location) ? $branch_location : ' ';
		$lrms_rental_renewals->payment_system         = isset($payment_system) ? $payment_system : ' ';
		//$lrms_rental_renewals->supplier_no                        = isset($supplier_no) ? $supplier_no : ' ';
		// $lrms_rental_renewals->name_of_landlord                   = isset($name_of_landlord) ? $name_of_landlord : ' ';
		$lrms_rental_renewals->agreement_period_start   = isset($agreement_period_start) ? $agreement_period_start : ' ';
		$lrms_rental_renewals->agreement_period_end     = isset($agreement_period_end) ? $agreement_period_end : ' ';
		//$lrms_rental_renewals->premises_area                      = isset($premises_area) ? $premises_area : ' ';
		//$lrms_rental_renewals->advances_balance_from              = isset($advances_balance_from) ? $advances_balance_from : ' ';
		// $lrms_rental_renewals->advance_deduction_if_any           = isset($advance_deduction_if_any) ? $advance_deduction_if_any : ' ';
		// $lrms_rental_renewals->present_rent                       = isset($present_rent) ? $present_rent : ' ';
		$lrms_rental_renewals->revised_rent         = isset($revised_rent) ? $revised_rent : ' ';
		$lrms_rental_renewals->monthly_increase     = isset($monthly_increase) ? $monthly_increase : ' ';
		$lrms_rental_renewals->branch_occupancy_date    = isset($branch_occupancy_date) ? $branch_occupancy_date : ' ';
		$lrms_rental_renewals->rental_past_history  = isset($rental_past_history) ? $rental_past_history : ' ';
		$lrms_rental_renewals->action_taken         = isset($action_taken) ? $action_taken : ' ';

		//$lrms_rental_renewals->save();

		//$factSheet = dst_lrms_masters::find($id);




		// echo $get_no_of_renewal=dst_lrms_masters::find($dst_lrms_master_id,['no_of_renewal']);
		//echo $get_no_of_renewal=dst_lrms_masters::where('id', '=', $dst_lrms_master_id)->first(['no_of_renewal']);
		//$get_no_of_renewal=dst_lrms_masters::where('id', '=', $dst_lrms_master_id)->first(['no_of_renewal']);
		$get_no_of_renewal=dst_lrms_masters::where('id', '=', $dst_lrms_master_id)->first();
		$no_of_renewal=$get_no_of_renewal->no_of_renewal;
		// echo "<pre>";
		//print_r($_POST);
		//print_r($no_of_renewal);
		echo "<pre>";
		// print_r($_POST); 
		//echo "<br> FAct shet code";
		// print_r($factsheet_code);

		$data= $lrms_rental_renewals->no_of_renewal=$no_of_renewal;



		$unique_code=$factsheet_code.'-'.($no_of_renewal+1);
		echo "<pre>";
		// print_r($_POST); 
		//echo"<br/>";
		//print_r($unique_code);
		$lrms_rental_renewals->unique_renewal_code   = isset($unique_code) ? $unique_code : ' ';
		// echo"<pre>";
		//print_r( $lrms_rental_renewals);
		//exit;
		//exit;
		/* $affectedBankRows = dst_lrm_dtls_pro_bank_dtls::where('id', $owner_bank_id)
		->update([
		'payee_name' => isset($payee_name) ? $payee_name : ' ',
		'branch_name' => isset($branch_name) ? $branch_name : ' ',
		'account_type'   => isset($account_type) ? $account_type : ' ',
		'bank_name' => isset($bank_name) ? $bank_name : ' ',
		'account_no' => isset($account_no) ? $account_no : ' ',
		'ifsc_code' => isset($ifsc_code) ? $ifsc_code : ' ',
		]);


		$lrms_rental_renewals->save();
		$data=DB::table("dst_lrms_lease_renewals")
		->where("factsheet_code",$req->factsheet_code)
		->update(['status'=>0]);


		//print_r($data);
		if($data)
		{
		return redirect('agreementRenewedList');
		}
		else{  
		echo"faild";
		}

		return redirect('agreementRenewedList');

		*/
		///////////////////////////////////////////////////////////////////////

 
//////////////////////////////
 $validator = Validator::make($request->all(), [
            //'factsheet_premises_photos' => 'mimes:jpeg,bmp,png|max:50480'

            'agreement_period_end'        => 'date|after:agreement_period_start|required',
            'agreement_period_start'	  => 'date|before:agreement_period_end|required',
            'revised_rent'				  => 'required|numeric',
            'addr_pincode'				  =>  'required|regex:/^[0-9]{6}$/'

        ],[

        	'agreement_period_end.after'   =>'Agrement renew end  date must be greater than start date',
        	'agreement_period_start.before'=>'Agrement renew start date must be lower than end date',
        	'revised_rent.numeric'		   =>'Please enter numeric value only',	
        	 'addr_pincode'				   => 'Please enter 6 digit pin code number '

        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator->errors());
        } 



///////////////////////////////


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


		///////////////
						
                          
                           


                         

		/////////////////

                            
		$unique_renewal_code            = request('unique_code');
		$revised_rent                   = request('revised_rent');
		$monthly_increase               = request('monthly_increase');
		$action_taken                   = request('action_taken');
		$rental_past_history            = request('rental_past_history');
		$comment                        = request('comment');

		
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
		$lrms_master->total_month_rent             = isset($revised_rent) ? $revised_rent   : 0.0;
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

		 //$data=$factSheet->no_of_renewal;
         //$unique_code=$factSheet->factsheet_code.'-'.($data+1);

		$lrms_master->unique_renewal_code             =  request('unique_code');
		$lrms_master->revised_rent              =  isset($revised_rent) ? $revised_rent : ' ';
		$lrms_master->monthly_increase                   =  isset($monthly_increase) ? $monthly_increase : ' ';
		$lrms_master->action_taken                   =  isset($action_taken) ? $action_taken : ' ';	
		$lrms_master->rental_past_history                   =  isset($rental_past_history) ? $rental_past_history : ' ';	
		$lrms_master->comment                   =  isset($comment) ? $comment : ' ';

		


		//$premises_photos  =  implode("|",$data);

		//$lrms_master->factsheet_premises_photos     = isset($premises_photos) ? $premises_photos : ' ';
/*echo $u=request('unique_code');
		echo"<pre>";
print_r($request->all());
 echo $request->unique_code;
exit; */


		//updating status value to 0
		$data=DB::table("dst_lrms_masters")
		->where("factsheet_code",$request->factsheet_code)
		->update(['status'=>0]);
		$e=$lrms_master->save();



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

		$full_address=$address1. $address2 . $address3;
		
		$lrms_rent_agreements->factsheet_code              =  isset($factsheet_code) ? $factsheet_code : ' ';

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



		return redirect('agreementRenewedList');  







		}
		public function agreementRenewedList()
		{
		//$renewedList = dst_lrms_masters::orderBy('id', 'DESC')->where('no_of_renewal','>', 0)->get();
			$renewedList = dst_lrms_masters::orderBy('id', 'DESC')->where('agreement_period_end', '<', DB::raw("NOW() + INTERVAL 1 MONTH"))
			->where('status',1)
			->get();
			//echo"<pre>";
			//print_r($renewedList);
			//exit;
		 return view('renewed_agreement_list',compact('renewedList'));
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

    public function uploadFactsheet($id)
    {

    	return view("upload",compact('id'));
    }

		public function saveUploadFactsheet(Request $request)
		{

			//echo"<pre>";
		//	print_r($request->all());
		//	exit;
			$master_id=request('master_id');
			//if($request->hasFile('factsheet_for_upload')){
			$validator = Validator::make($request->all(), [
          
            'factsheet_for_upload' => 'required|mimes:tiff,pdf,jpeg,png,jpg|max:5048000',
            'factsheet_type'		=>'required'
        ],[

        	'factsheet_for_upload.required'=>"Fact sheet for upload is required",
        	'factsheet_for_upload.required.mimes'=>"Please use only tiff,jpeg,pdf,jpg and png format only",
        	'factsheet_type.required'=>"Fact sheet type is required"




        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator->errors());
        } 
        else{

		$filename= $request->factsheet_for_upload->getClientOriginalName();
		//return $filename;
		//exit;
		$destination_path=$request->factsheet_for_upload->storeAs('public/uploads/signed_unsigned_factsheet',$filename);
		//return $destination_path;
		//exit;

		$fact_upload=new dst_lrms_factsheet_agreement_document;
		$fact_upload->document_path=$destination_path;
	    $fact_upload->dst_lrms_master_id=$master_id;

		$fact_upload->factsheet_type=$request->factsheet_type;
		
		$fact_upload->save();
				
				
			}
				return redirect('FactsList')->with('status','Agreement uploaded successfully');  


}

}
