<?php
if(!function_exists('weekdays')) {
  function weekdays() {
    return [
      'Mon' => 'Monday',
      'Tus' => 'Tuesday',
      'Wed' => 'Wednesday',
      'Thu' => 'Thursday',
      'Fri' => 'Friday',
      'Sat' => 'Saturday',
      'Sun' => 'Sunday'
    ];
  }
}

if(!function_exists('getRecordById')) {
  function getRecordById($table,$field,$value) {

    //$user = DB::table('dst_lrms_masters')->where('id', $id)->first();

$recordData = DB::table($table)->where($field, $value)->first();



//return $user->email;

return $recordData;



  }
}

if(!function_exists('getNotification')) {
  function getNotification() {

    //$user = DB::table('dst_lrms_masters')->where('id', $id)->first();


      /*$lease=DB::table("dst_lrms_masters")
           ->select('id','factsheet_code','branch_code','branch_location','agreement_period_start',DB::raw(' NOW() + INTERVAL 1 MONTH as agreement_expired_on_next_month' ))
           ->whereNotNull('agreement_period_end')
          
            ->get();
			*/
			
			 $lease=DB::table("dst_lrms_masters")
                 ->select('id','factsheet_code','branch_code','branch_location','agreement_period_start','agreement_period_end')
                 ->where('agreement_period_end',"<",NOW())
                
                   ->get();
			
			
			
            //$users=User::find(4);
                   // Notification::send($users, new Lease_Expire());
            $no=$lease->count('id');
                   // return view('welcome',compact('no'));

                    return $no;

//$recordData = DB::table($table)->where($field, $value)->first();



//return $user->email;

//return $recordData;



  }
}




?>