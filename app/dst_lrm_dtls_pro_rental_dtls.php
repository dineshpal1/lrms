<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrm_dtls_pro_rental_dtls extends Model
{
    //
    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['dst_lrms_master_id','dst_lrm_dtls_prorperty_owner_id','refundable_security_deposit','advances','monthly_rent','advance_deduction','payment_system','agreement_period','notice_period','enhancement_clause','newly_constructed_for_us','last_tenant','special_remarks','activity_status','created_by','created_date','last_updated_by','last_update_date'];

public function getPaymentSystemAttribute($value)
{
	return strtoupper($value);
}


public function getLastTenantAttribute($value)
{
	return strtoupper($value);
}
public function getSpecialRemarksAttribute($value)
{
	return strtoupper($value);   
}
public function getActivityStatusAttribute($value)
{
	return strtoupper($value);   
}

}
