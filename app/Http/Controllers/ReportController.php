<?php

namespace App\Http\Controllers;

use App\Notifications\FactsheetExpire;
use App\Notifications\Lease_Expire;
use App\User;
use App\dst_lrms_masters;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
class ReportController extends Controller
{
public function RentalsNextDueReport()
    {
    	
    	
    	$rentalReport=DB::table("dst_lrms_masters")
    			 ->select('dst_lrms_masters.id','region_code','city','branch_type','branch_code','branch_location','total_month_rent','premises_area','branch_occupancy_date','dst_lrms_masters.factsheet_code','agreement_period_start','agreement_period_end','enhancement_clause','revised_rent','payment_system','dst_lrms_details_property_owners.property_owner_name','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
				 ->leftJoin('dst_lrms_details_property_owners', 'dst_lrms_masters.id', '=', 'dst_lrms_details_property_owners.dst_lrms_master_id')
    			 ->whereNotNull('agreement_period_end')
    			
    				->get();
   	
//echo "<pre>";		
//print_r($rentalReport);
//exit;
                  
      return view('rentals_next_due_report',compact('rentalReport'));

    }    public function leaseExpire()
    {
    	
    	
    	$lease=DB::table("dst_lrms_masters")
    			 ->select('id','factsheet_code','branch_code','branch_location','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
    			 ->whereNotNull('agreement_period_end')
    			
    				->get();
    				//$users=User::find(4);
                   // Notification::send($users, new Lease_Expire());
    				$no=$lease->count('id');
                    return view('welcome',compact('no'));
                  

    }
    public function view_fact_sheet()
    {
                $leases=DB::table("dst_lrms_masters")
                 ->select('id','factsheet_code','branch_code','branch_location','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
                 ->whereNotNull('agreement_period_end')
                
                    ->get();
                   

                    $no=$leases->count('id');
                    return view('lease_expire_one_month',compact('leases','no'));

    }

    public function fact_sheet_for_mail()

    {
        //$now=Carbon::now();
        //$y=$now->year;
        
         //$m=$now->month;
        
        //echo $now->format('M')
        
       //$currentMonth=date('m');
        //$currentYear=date('Y');
        $m=Carbon::now()->month;
        $y=Carbon::now()->year;

        $current=DB::table('dst_lrms_masters')
                ->select('id','factsheet_code','branch_code','agreement_period_end')
               
               ->where('agreement_period_end',$m)
                ->where('agreement_period_end',$y)
                ->whereNotNull('agreement_period_end')

                 ->get();


        $next=DB::table("dst_lrms_masters")
                 ->select('id','factsheet_code','branch_code','branch_location','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
                 ->whereNotNull('agreement_period_end')
                
                    ->get();

                    $users=User::find(5);
                    Notification::send($users, new Lease_Expire());
                   // Notification::send($users, new FactsheetExpire());
            return view("notification_view",compact('current','next'));
                  
    
              

    }
	
	public function rentalRevision()
    {

      $rental_revision=DB::table("dst_lrms_masters")
           ->select('dst_lrms_masters.id','region_code','monthly_increase','city','branch_type','branch_code','branch_location','total_month_rent','total_advances','total_advance_deduction','rental_past_history','action_taken','premises_area','branch_occupancy_date','dst_lrms_masters.factsheet_code','agreement_period_start','agreement_period_end','enhancement_clause','revised_rent','payment_system','dst_lrms_details_property_owners.property_owner_name','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
         ->leftJoin('dst_lrms_details_property_owners', 'dst_lrms_masters.id', '=', 'dst_lrms_details_property_owners.dst_lrms_master_id')
           ->whereNotNull('agreement_period_end')
          
            ->get();
            $month=DB::table("dst_lrms_masters")
                      ->select(DB::raw('NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))->get()->toArray();
                    //  print_r($month);
                     // echo $month[0]->agreement_expired_on_next_month;
//2020-04-04 22:13:20
         $month_year= date("F Y", strtotime($month[0]->agreement_expired_on_next_month));
           // exit;
            $agreement=DB::table('dst_lrms_rent_agreements')
                       ->select('lease_agreement_start_date','monthly_rent','increment_rate')->get();
                       // echo"<pre>";
                       // print_r($agreement);
                        //exit;
                 $renewal1=DB::table("dst_lrms_masters")
                                ->select('agreement_period_start','total_month_rent','enhancement_clause','revised_rent','monthly_increase','branch_occupancy_date')
                                ->where('no_of_renewal','>',0)
                                ->where('revised_rent','>',0)
                                ->get()->toArray(); 
                               // echo"<pre>";
                              // print_r( $renewal1);
                              //  exit;
                              //  echo $renewal->total_month_rent;
                  //$hike=($renewal->total_month_rent/$renewal->revised_rent)*100;

                              //  echo"<pre>"; 
                     // print_r($hike);
                   //   exit;    

            $area=DB::table("dst_lrms_masters")->
                   pluck("premises_area")->sum();
             $advances= DB::table("dst_lrms_masters")->pluck("total_advances")->sum(); 
             $advance_deduction= DB::table("dst_lrms_masters")->pluck("total_advance_deduction")->sum();  
               $present_rent= DB::table("dst_lrms_masters")->pluck("total_month_rent")->sum();  
               // $present_rent= DB::table("dst_lrms_masters")->pluck("total_month_rent")->sum();
                $revised_rent=$rental_revision->pluck("revised_rent")->sum(); 
               // $increae=  $revised_rent-$present_rent;
                $increae=  $rental_revision->pluck("monthly_increase")->sum();
$rentalReport=DB::table("dst_lrms_masters")
    			 ->select('dst_lrms_masters.id','region_code','city','branch_type','branch_code','branch_location','total_month_rent','premises_area','branch_occupancy_date','dst_lrms_masters.factsheet_code','agreement_period_start','agreement_period_end','enhancement_clause','revised_rent','payment_system','dst_lrms_details_property_owners.property_owner_name','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
				 ->leftJoin('dst_lrms_details_property_owners', 'dst_lrms_masters.id', '=', 'dst_lrms_details_property_owners.dst_lrms_master_id')
    			 ->whereNotNull('agreement_period_end')
    			
    				->get();
   	

         return view('rental_revision_decisions',compact('rental_revision','area','advances','advance_deduction','present_rent','revised_rent','increae','month_year','renewal1','rentalReport'));
            //print_r( $increae);

    }



public function excelExportRentalRevision(){



//$result = $this->login_database->company_list_export();	

//$this->db->select('org_name AS "Company Name", pname AS "Product Name", website  AS website,gstin  AS GSTIN,concat(fname," ",mname," ",lname) as Name,email  AS Email,mobile  AS Mobile,concat(building," ",street," ",city," ",state," ",pin)AS Address,no_user  AS "No Of Users"', FALSE);
	//$query=$this->db->get('company');
	
	//print_r($this->db->last_query()); 
	//exit;
        //return $query->result_array();

/*
echo "<pre>";
print_r($result);
exit;*/
$result1=DB::table("dst_lrms_masters")
    			 ->select('dst_lrms_masters.id','region_code','city','branch_type','branch_code','branch_location','total_month_rent','premises_area','branch_occupancy_date','dst_lrms_masters.factsheet_code','agreement_period_start','agreement_period_end','enhancement_clause','revised_rent','payment_system','dst_lrms_details_property_owners.property_owner_name','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
				 ->leftJoin('dst_lrms_details_property_owners', 'dst_lrms_masters.id', '=', 'dst_lrms_details_property_owners.dst_lrms_master_id')
    			 ->whereNotNull('agreement_period_end')
    			
    				->get()->toArray();
					
//print_r($result1);					
//$k=array($result1);
//$result = dst_lrms_masters::where('status',1)->orderBy('id', 'DESC')->get()->toArray();

$result = dst_lrms_masters::select('branch_location as Branch Location','branch_code as Branch Code','payment_system as Payment System','property_owner_name as Landlord Name','premises_area as Area','total_advances as Total Advances','total_advance_deduction as Advance Deduction','total_month_rent as Present Rent','revised_rent as Revised Rent','monthly_increase as Monthly Increase','branch_occupancy_date as Occupancy Date','rental_past_history as Additional Information','action_taken as Action')
 ->leftJoin('dst_lrms_details_property_owners', 'dst_lrms_masters.id', '=', 'dst_lrms_details_property_owners.dst_lrms_master_id')
    			 ->whereNotNull('agreement_period_end')->where('dst_lrms_masters.status',1)->orderBy('dst_lrms_masters.id', 'DESC')->get()->toArray();


//Table::select('name','surname')->where('id', 1)->get();
/*echo "<pre>";
print_r($result1);
print_r($result);
exit;*/
$filename = "rentalRevision.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

$flag = false;

foreach($result as $data)
{
	//echo $data->id;
	//echo $data->proj_name;

	 //echo implode("\t", array_keys($data)) . "\r\n";
    //echo implode("\t", array_values($data)) . "\r\n";

    if (!$flag) {
        echo implode("\t", array_keys($data)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($data)) . "\r\n";

}

}    
 

public function excelExportRentalNextDue(){


/*
$rentalReport=DB::table("dst_lrms_masters")
    			 ->select('dst_lrms_masters.id','region_code','city','branch_type','branch_code','branch_location','total_month_rent','premises_area','branch_occupancy_date','dst_lrms_masters.factsheet_code','agreement_period_start','agreement_period_end','enhancement_clause','revised_rent','payment_system','dst_lrms_details_property_owners.property_owner_name','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
				 ->leftJoin('dst_lrms_details_property_owners', 'dst_lrms_masters.id', '=', 'dst_lrms_details_property_owners.dst_lrms_master_id')
    			 ->whereNotNull('agreement_period_end')
    			
    				->get();
					
	*/				
$result = dst_lrms_masters::select('region_code as REGION','city as CITY','branch_type as OFFICE TYPE','branch_code as BRANCH CODE','property_owner_name as LANDLORD NAME','total_month_rent as BASIC RENT','premises_area as AREA IN SQ.FT','branch_occupancy_date as NEW PREMISES TAKEN','agreement_period_start as Lease Period From','agreement_period_end as Lease Period To','enhancement_clause as Enhancement','payment_system as Payment System')
 ->leftJoin('dst_lrms_details_property_owners', 'dst_lrms_masters.id', '=', 'dst_lrms_details_property_owners.dst_lrms_master_id')
    			 ->whereNotNull('agreement_period_end')->where('dst_lrms_masters.status',1)->orderBy('dst_lrms_masters.id', 'DESC')->get()->toArray();					
	/*
	echo "<pre>";
print_r($rentalReport);
print_r($result);
exit;	

*/			
					

$filename = "rentalNextDue.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");

$flag = false;

foreach($result as $data)
{
	//echo $data->id;
	//echo $data->proj_name;

	 //echo implode("\t", array_keys($data)) . "\r\n";
    //echo implode("\t", array_values($data)) . "\r\n";

    if (!$flag) {
        echo implode("\t", array_keys($data)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($data)) . "\r\n";

}

}     
    }

 