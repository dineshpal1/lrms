<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_branch_area_masters extends Model
{
    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['area_name'];


}
