<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_details_property_owners extends Model
{
    //
     protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['dst_lrms_master_id','dst_lrm_dtls_property_owner_id','total_property_owner','property_owner_name','payee_name','payee_pan','payee_gstin','property_owner_occupation','property_owner_address','property_owner_district','property_owner_state','property_owner_postal_code','property_owner_email','property_owner_contact_no','owner_cancelled_cheque_copy','owner_pan_card_copy','owner_aadhaar_card_copy','created_by','created_date','last_updated_by','last_update_date'];

public function getPropertyOwnerNameAttribute($value)
{
	return strtoupper($value);
}

public function getPayeeNameAttribute($value)
{
	return strtoupper($value);
}

public function getPropertyOwnerOccupationAttribute($value)
{
	return strtoupper($value);
}

public function getPropertyOwnerAddressAttribute($value)
{
	return strtoupper($value);
}
public function getPropertyOwnerEmailAttribute($value)
{
	return strtoupper($value);
}

}

