<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_state_master extends Model
{
	 public $timestamps = false;
     protected $primaryKey = 'id';

     protected $fillable = ['state_name'];
}
