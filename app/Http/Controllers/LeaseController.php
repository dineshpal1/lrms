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
class LeaseController extends Controller
{
    public function leaseExpire()
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
				/*
                $leases=DB::table("dst_lrms_masters")
                 ->select('id','factsheet_code','branch_code','branch_location','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
                 ->whereNotNull('agreement_period_end')
                
                    ->get();
                   

                    $no=$leases->count('id');
                    return view('lease_expire_one_month',compact('leases','no'));
			*/
			  $leases=DB::table("dst_lrms_masters")
                 ->select('id','factsheet_code','branch_code','branch_location','agreement_period_start','agreement_period_end')
                 ->where('agreement_period_end',"<",NOW())
                
                   ->get();
                   // echo"<pre>";
                   // print_r($leases);
                   // exit;
                   

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
    
    
    }

 

   





//SELECT id,`factsheet_code`,`branch_code`,`branch_location`, NOW() + INTERVAL 1 MONTH FROM `dst_lrms_masters` WHERE agreement_period_end is not NULL