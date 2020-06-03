<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_dtls_documents extends Model
{
    //
     protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['dst_lrms_master_id','dst_lrm_dtls_property_owner_id','doc_type','attachement','created_by','created_date','created_at','updated_at'];
}
