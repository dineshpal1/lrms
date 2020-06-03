<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dst_lrms_fusion_call_payables_payments extends Model
{
    //OPS_LRM_MAST_ID	NUMBER

    protected $primaryKey = 'id';
    // protected $attributes = [

        
protected $fillable = ['CheckId','PaymentId','PaymentReference','PaymentNumber','PaymentFileReference','PaymentProcessRequest','PaymentAmount','PaymentDate','AccountingDate','PaymentDescription','VoidDate','PaymentStatus','AccountingStatus','PaymentType','Payee','PayeeSite','PaymentMethodCode','PaymentMethod','ClearingDate','ClearingAmount','	SupplierNumber','RemitToAccountNumber','VoucherNumber','CreationDate','CreatedBy','LastUpdatedBy','LastUpdateDate','LastUpdateLogin','api_call_date'];

    // ];
	
	
}
