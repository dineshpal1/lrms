<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrm_dtls_pro_bank_dtls extends Model
{
    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['dst_lrm_dtls_prorperty_owner_id','dst_lrm_dtls_pro_bank_dtl_id','payee_name','branch_name','account_type','bank_name','account_no','ifsc_code','activity_status','created_by','created_date','last_updated_by','last_update_date'];

	public function getPayeeNameAttribute($value)
{
	return strtoupper($value);
}

public function getBranchNameAttribute($value)
{
	return strtoupper($value);
}
public function getAccountTypeAttribute($value)
{
	return strtoupper($value);
}
public function getIfscCodeAttribute($value)
{
	return strtoupper($value);
}
}
