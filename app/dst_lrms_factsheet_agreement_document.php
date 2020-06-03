<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_factsheet_agreement_document extends Model
{
     protected $primaryKey = 'id';
    
        
protected $fillable = ['dst_lrms_master_id','factsheet_code','document_path','created_at'];
}
