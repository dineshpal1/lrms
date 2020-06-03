<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_dtls_rental_renewals extends Model
{
    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['dst_lrms_master_id','factsheet_code','unique_code','branch_location','supplier_no','name_of_landlord','premises_area','advances_balance_from','advance_deduction_if_any','present_rent','revised_rent','monthly_increase','branch_occupancy_date','rental_past_history','action_taken','total_refundable_security_deposits','total_advances','total_month_rent','payment_system','agreement_period','notice_period','enhancement_clause','newly_constructed_for_us','last_tenant','no_of_increment_number','renewal_start'];


}
