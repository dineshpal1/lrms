<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_bank_branch_master extends Model
{
      protected $primaryKey = 'id';
     public $timestamps = false;
     protected $fillable = ['dst_lrms_bank_masters_id','ifsc_code','bank_name','bank_branch_name','ifsc_code','bank_branch_address'];
}
