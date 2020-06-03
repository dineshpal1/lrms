<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_bank_master extends Model
{
     protected $primaryKey = 'id';
		 public $timestamps = false;
     protected $fillable = ['bank_name','ifsc_code'];
}
