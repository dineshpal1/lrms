<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_rent_agreements extends Model
{
    //
    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['dst_lrms_master_id','lease_agreement_start_date','lease_agreement_end_date','premises_address','premises_state','premises_pin_code','premises_area','premises_area_unit','lease_period','increment_rate','monthly_rent','monthly_rent_in_words','lease_total_amount','total_refundable_security_deposits','notice_period','no_of_owner','name_of_owner','owner_full_address','created_by','created_date','last_updated_by','last_update_date'];


}
