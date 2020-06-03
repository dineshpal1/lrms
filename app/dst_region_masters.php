<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_region_masters extends Model
{
    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['region_id','region_code','name'];


}
