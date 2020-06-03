<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_dtls_monthly_rentals extends Model
{
    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['dst_lrms_master_id','total_month_rent','payment_system'];


}
