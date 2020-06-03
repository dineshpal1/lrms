<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrm_branch_dtls extends Model
{
    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
	public $timestamps = false;
        
protected $fillable = ['branch_id','branch_code','branch_type','branch_name','created'];


}
