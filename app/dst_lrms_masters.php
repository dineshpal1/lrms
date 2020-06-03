<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_masters extends Model
{
    //OPS_LRM_MAST_ID	NUMBER

    protected $primaryKey = 'id';
    // protected $attributes = [
    //     'dst_lrms_master_id'=> int(11),
    //      'branch_id'=> int(11)
        
protected $fillable = ['dst_lrms_master_id','branch_id','branch_code','branch_type','branch_location','branch_area','branch_occupancy_date','fact_sheet_date','address1','address2','address3','city','state','postal_code','office_tele_no','near_by_highway','dist_from_highway','safex_conectivity_route','property_location','nearest_airport','nearest_railway_station','premises_length','premises_breadth','premises_area','premises_height','platform_height','cantiliver_length','flooring_type1','flooring_type2','flooring_type3','flooring_type4','front_road_breadth','oprational_hours','operational_timing_from','operational_timing_to','connectivity_telephone','connectivity_isp','surrounding_front','surrounding_back','surrounding_right','surrounding_left','near_by_competitors1','near_by_competitors2','near_by_competitors3','axis_bank_nearest_branch','office_to_axis_bank_distance','nearest_bank_other_than_axis','nearest_atm','distance_from_office_to_atm','associate_name','cordinator_name','approved_by','no_of_owner','total_refundable_security_deposits','total_advances','total_month_rent','total_advance_deduction','advances_start_date','advances_end_date','payment_system','agreement_period','notice_period','enhancement_clause','newly_constructed_for_us','last_tenant','advance_deduction_wef_date','created_by','created_date','created_datetime','last_updated_by','last_update_date'];

    // ];
	
	
	public function getSafexConectivityRouteAttribute($value)
{
	return strtoupper($value);
}
public function getNearByCompetitors1Attribute($value)   
{
	return strtoupper($value);
}
public function getNearByCompetitors2Attribute($value)   
{
	return strtoupper($value);
}
public function getNearByCompetitors3Attribute($value)   
{
	return strtoupper($value);
}
public function getAxisBankNearestBranchAttribute($value)   
{
	return strtoupper($value);
}
public function getNearestBankOtherThanAxisAttribute($value)   
{
	return strtoupper($value);
}
public function getNewlyConstructedForUsAttribute($value)   
{
	return strtoupper($value);
}
public function getLastTenantAttribute($value)   
{
	return strtoupper($value);
}
public function getNoticePeriodAttribute($value)   
{
	return strtoupper($value);
}
}
