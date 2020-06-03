<?php
namespace App\Larademo;
use DB;
class Larademo
{
	public  function sayHello()
	{
		echo "Hello from custom facades";
	}
	public function getRecord()
	{
	  return $lease=DB::table("dst_lrms_masters")
    			 ->select('id','factsheet_code','branch_code','branch_location','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
    			 ->whereNotNull('agreement_period_end')
    			
    				->get();
	}
}



?>