<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_city_masters extends Model
{
    protected $primaryKey = 'id';
	public $timestamps = false;
      
protected $fillable = ['city'];


}
