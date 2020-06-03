<?php echo $__env->make('layouts.adminLayout.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Sidebar -->
      <?php echo $__env->make('layouts.adminLayout.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <style>
.form-group label {
    margin-bottom: 1rem !important;
  }
        .card-header{
  display: block;
    text-align: center;color:white;
    line-height: 100%;
    font-size: .85em;
    background-color: #dee2e6 !important;

        }

        
        .card-sub-title{
  display: block;
    text-align: center;
    color: green;
    line-height: 145%;
    font-size: 1.2em;
    background-color: #dee2e6 !important;
}



      </style>

    <div class="main-panel">
      <div class="content">
        <form action="<?php echo e(url('saveFactSheetPart2')); ?>" method="post" enctype="multipart/form-data" id="form2">
        <?php echo e(csrf_field()); ?>

        <div class="page-inner">
          
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Owner Details</a>
                </li>
               
                </ul>
            </div>
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                  aria-labelledby="home-tab">
  <?php
                            $master_id = Session::get('master_id');
							$ownerCount = Session::get('ownerCount');

                          ?>

                     <?php

                       $table='dst_lrms_masters';
                        $field='id';
                        $value=$master_id;

                      $masterData=getRecordById($table,$field,$value);
                       
                      $monthly_rental=$masterData->total_month_rent;
$totalRentalSum=\DB::table("dst_lrm_dtls_pro_rental_dtls")->where('dst_lrms_master_id', '=', $master_id)->get()->sum("monthly_rent");


$ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)
            ->get();
     

      $ownerCount = $ownerlist->count() + 1;


                        
                    ?>

 
                  <div class="card">
                    <div class="card-header">
                      <div class="card-title">Owner Details <?php echo e($ownerCount); ?>

                     
                      </div>
                    </div>

                    <div class="card-body">

                             <div class="row">
                       <div class="col-2">
                       <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="owner_name" name="owner_name" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                        <?php if($errors->has('owner_name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('owner_name')); ?></span>
                        <?php endif; ?>
                        
                        </div>
                        </div>
						<div class="col-2">
                       <div class="form-group">
                        <label for="name">Supplier No</label>
                        <input type="text" id="supplier_no" name="supplier_no" class="form-control  error" aria-required="true">
                        
                        </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Alternate Name</label>
                        <!--<input type="text" id="payee_name" name="payee_name" class="form-control required error" aria-required="true" style="text-transform: uppercase">-->
						 <input type="text" id="payee_name" name="payee_name" class="form-control required error"  style="text-transform: uppercase">
                      <!--   <label id="name-error" class="error" for="name">This field is required.</label> -->
                       <?php if($errors->has('payee_name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('payee_name')); ?></span>
                       <?php endif; ?>
                    </div>
                        </div>
                    
                    <div class="col-4">
                       <div class="form-group">
                        <label for="name">Landlord Address</label>
                        <input type="text" id="landlord_address" name="landlord_address" class="form-control error" aria-required="true" style="text-transform: uppercase">
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                         <?php if($errors->has('landlord_address')): ?>
                        <span class="text-danger"><?php echo e($errors->first('landlord_address')); ?></span>
                       <?php endif; ?>
                        </div>
                        </div>

                    </div> 

                    <div class="row">
                       
                        <div class="col-4">
                     
                        <div class="form-group">
                        <label for="name">City</label>
                        <select id="city" name="city" class="form-control error" aria-required="true" style="text-transform: uppercase">
                          <?php foreach($cityList as $cities) {?>
                          <option value="<?php echo $cities->city; ?>"><?php echo $cities->city; ?></option>
                        <?php }?>
                        </select>

                      </div>
                    </div>
                            <div class="col-4">
                           <div class="form-group">
                          <label for="name">State</label>
                           <select id="state" name="addr_state" class="form-control error" aria-required="true">
                               <option value="0">Select State</option>
                               <option value="ANDAMAN AND NICOBAR ISLANDS">ANDAMAN AND NICOBAR ISLANDS</option>  
                               <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                               <option value="ANDHRA PRADESH(New)">ANDHRA PRADESH(New)</option>
                               <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                               <option value="ASSAM">ASSAM</option>
                               <option value="BIHAR">BIHAR</option>
                               <option value="CHANDIGARH">CHANDIGARH</option>
                               <option value="CHATTISGARH">CHATTISGARH</option>
                               <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                               <option value="DAMAN AND DIU">DAMAN AND DIU</option>
                               <option value="DELHI">DELHI</option>
                               <option value="GOA">GOA</option>
                               <option value="GUJARAT">GUJARAT</option>
                               <option value="HARYANA">HARYANA</option>
                               <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                               <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                               <option value="JHARKHAND">JHARKHAND</option>             
                               <option value="Karnataka">Karnataka</option>
                               <option value="KERALA">KERALA</option>
                               <option value="LAKSHWADEEP">LAKSHWADEEP</option>
                               <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                               <option value="MAHARASHTRA">MAHARASHTRA</option>
                               <option value="MANIPUR">MANIPUR</option>
                               <option value="MEGHLAYA">MEGHLAYA</option>
                               <option value="MIZORAM">MIZORAM</option>
                                <option value="NAGALAND">NAGALAND</option>
								<option value="NEW DELHI">NEW DELHI</option>
                                <option value="ODISHA">ODISHA</option>
                               <option value="PUDUCHERRY">PUDUCHERRY</option>    
                               <option value="PUNJAB">PUNJAB</option>
                               <option value="RAJASTHAN">RAJASTHAN</option>
                                <option value="SIKKIM">SIKKIM</option>
                                <option value="TAMIL NADU">TAMIL NADU</option>
                                <option value="TELANGANA">TELANGANA</option>  
                               <option value="TRIPURA">TRIPURA</option>  
                               <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                               <option value="UTTARAKHAND">UTTARAKHAND</option>
                               <option value="WEST BENGAL">WEST BENGAL</option>
                              </select>
                          </div>                    
                        </div>
                   
                        <div class="col-4">
                       <div class="form-group">
                        <label for="name">Pincode</label>
                        <input type="text" id="pincode" name="pincode" class="form-control  error" aria-required="true" onblur="checkPincode()">
                         <div class='validation' style='color:red;margin-bottom: 20px;display:none'>Pincode  Should be 6 Digits Numbers Only</div>
                       <!--  <label id="name-error" class="error" for="name">This field is required.</label> -->
                        <?php if($errors->has('pincode')): ?>
                        <span class="text-danger"><?php echo e($errors->first('pincode')); ?></span>
                       <?php endif; ?>
                    </div>
                        </div>


                    </div> 
                     <div class="row">
                       <div class="col-4">
                     <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" id="email" name="email" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                       <?php if($errors->has('email')): ?>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                       <?php endif; ?>
                       <!--  <label id="name-error" class="error" for="name">This field is required.</label> -->
                    </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Contact No.</label>
                        <input type="text" id="contact_no" name="contact_no" class="form-control  error" aria-required="true">
                       <!--  <label id="name-error" class="error" for="name">This field is required.</label> -->
                    </div>
                        </div>

                        <div class="col-4">
                   <div class="form-group">
                        <label for="name">PAN of Payee</label>
                      <input type="text" id="pan_of_payee" name="pan_of_payee" class="form-control  error" aria-required="true" onblur="checkPancard()" style="text-transform: uppercase">
                      <div class='validation' style='color:red;margin-bottom: 20px;display:none'>Enter valid Pan Card Number</div>
                       <?php if($errors->has('pan_of_payee')): ?>
                        <span class="text-danger"><?php echo e($errors->first('pan_of_payee')); ?></span>
                       <?php endif; ?>
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                    </div>
                        </div>


                    </div> 
                   
                   <div class="row">
                       
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">GSTIN Of Payee</label>
                       <!-- <input type="text" id="gstn_of_payee" name="gstn_of_payee" class="form-control  error" aria-required="true" value="GSTIN" onBlur="checkGSTIN()" style="text-transform: uppercase">-->
					    <input type="text" id="gstn_of_payee" name="gstn_of_payee" class="form-control  error"  value="GSTIN" onBlur="checkGSTIN()" style="text-transform: uppercase">
                         <div class='gstin_validation
                         ' style='color:red;margin-bottom: 20px;display:none'>Enter valid GSTIN  Number</div>
                       <?php if($errors->has('gstn_of_payee')): ?>
                        <span class="text-danger"><?php echo e($errors->first('gstn_of_payee')); ?></span>
                       <?php endif; ?>
                       <!--  <label id="name-error" class="error" for="name">This field is required.</label> -->
                    </div>
                        </div>

                        <!-----TDS of Payee----->

                         <div class="col-4">
                        <div class="form-group">
                        <label for="name">TDS Of Payee</label>
                        <input type="text" id="tds_of_payee" name="tds_of_payee" class="form-control  error" aria-required="true" value="10%">
                      
                       <!--  <label id="name-error" class="error" for="name">This field is required.</label> -->
                    </div>
                        </div>

                          <!-----TDS of Payee end here----->
						   <div class="col-4">
                  <div class="form-group">
                        <label for="name">Occupation Of Landlord</label>
                      <input type="text" id="occupation_of_landlord" name="occupation_of_landlord" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                    </div>
                        </div>

                        


                    </div>

                   <br>
                 
                      </div>
                        <div class="card-body">
                   <div class="card-header">
                      <div class="card-title"> Rent Details</div>
                    </div>
                    <br>
                    <div class="row">
                      
						</div>
<div id="content">
  <div id="left">
   
	    <div class="row">
                      
                        <div class="col-4">
                    <div class="form-group">
                        <label for="name">Refundable Security Deposits</label>
                        <input type="text" id="refundable_security_deposits" name="refundable_security_deposits" class="form-control error" aria-required="true" value="">
                    </div>
                        </div>

                          <div class="col-4" style="margin-left: 20px;">
                        <div class="form-group">
                        <label for="name">Advances</label>
                        <input type="text" id="advances" name="advances" class="form-control  error" aria-required="true" value="">
                        </div>
                        </div>

                    </div>
                   
                    <div class="row">
                     
                          <div class="col-4">
                       <div class="form-group">
                        <label for="name">Month Rent </label>
                        <input type="text" id="month_rent" name="month_rent" class="form-control  error" aria-required="true" onblur="checkValue()" value="">
                      </div>
                     </div>
                        <div class="col-4">
                         <div class="form-group">
                        <label for="name">Advance Deduction</label>
                        <input type="text" id="advance_deduction" name="advance_deduction" class="form-control  error" aria-required="true" value="">
                        </div>
                        </div>
                   <div class="col-4">
                       <div class="form-group">
                        <label for="name">Special Remarks</label>
                        <input type="text" id="special_remarks" name="special_remarks" class="form-control  error" aria-required="true">
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                    </div>
                     </div>
                    </div> 
	 
  </div>

  <div id="right">
  <style>
  #content {
  background-color: rgba(210, 210, 210, 0.5);
  border: 1px solid #000;
  padding: 0.5rem;
  display: flex;
  margin: 0;
    width: 100%;
}
#left {
  /*background-color: rgba(10, 10, 10, 0.5);*/
  border: 1px solid #fff;
  padding: 0.5rem;
  flex-grow: 1;
  color: #fff;
  overflow: hidden;
    width: 50%;
}

  #right {
  background-color: rgba(10, 10, 10, 0.5);
  border: 1px solid #fff;
  padding: 0.5rem;
  flex-grow: 1;
  color: #fff;
  overflow: hidden;
    width: 30%;
}
  </style>
    <!-- <div id="object3">lorem ipsum</div>
     <div id="object4">dolor site amet</div>-->
	 <?php 
	// echo "<pre>";
	 //print_r($ownerRentData);
	  $table='dst_lrms_masters';
                        $field='id';
                        $value=$master_id;

                      $masterData=getRecordById($table,$field,$value);
                       
                      $master_monthly_rental=$masterData->total_month_rent;
					  $master_total_refundable=$masterData->total_refundable_security_deposits;
					  $master_total_advances=$masterData->total_advances;
					  $master_advance_deduction=$masterData->total_advance_deduction;
					  
					  $owner_total_monthly=0;
					  if(!empty($ownerRentData)){	
					  foreach($ownerRentData as $rent){
						  $owner_total_monthly +=$rent['monthly_rent'];
					  }
					  }
	 
		$balance_rent=$master_monthly_rental - $owner_total_monthly;
        echo "Total Rent"; echo "\t"; echo $master_monthly_rental;
        echo " | ";				
		echo "Paid Rent"; echo "\t";	echo $owner_total_monthly;
       echo " | ";		
        echo "Balance Rent"; echo "\t";	echo $balance_rent;			
       		
      echo "<hr>";
	  $i=1;
    if(!empty($ownerRentData)){	
	 foreach($ownerRentData as $rentData)
	 {?>
		 <div>		 
		 <?php //echo $rentData['monthly_rent']; echo "\t";?>
		 <?php 
		 echo "Owner"; echo $i++; echo '<br>';
		 echo "Refundable: ". $rentData['refundable_security_deposit'];
		 echo " | ";
		 echo "Advances: ". $rentData['advances']; 
echo " | ";
echo "Monthly Rent: ".$rentData['monthly_rent'];
echo " | ";
echo "Advance Deduction: ".$rentData['advance_deduction'];

?>
        </div>
		 <hr>
	<?php }
	}
	 
	 ?>
	 <input type="hidden" name="master_id" value="<?php echo isset($rentData['dst_lrms_master_id']) ? $rentData['dst_lrms_master_id'] : ' ';?>">
	  <input type="hidden" name="total_monthly_rent" id="total_monthly_rent" value="<?php echo isset($balance_rent) ? $balance_rent : 0;?>">
       <input type="hidden" name="totalRentalSum" id="totalRentalSum" value="">
  </div>
</div>
                        <!--<div class="col-4">
                    <div class="form-group">
                        <label for="name">Refundable Security Deposits</label>
                        <input type="text" id="refundable_security_deposits" name="refundable_security_deposits" class="form-control error" aria-required="true">
                         <?php if($errors->has('refundable_security_deposits')): ?>
                        <span class="text-danger"><?php echo e($errors->first('refundable_security_deposits')); ?></span>
                       <?php endif; ?>
                    </div>
                        </div>

                          <div class="col-4">
                        <div class="form-group">
                        <label for="name">Advances</label>
                        <input type="text" id="advances" name="advances" class="form-control  error" aria-required="true">
                          <?php if($errors->has('advances')): ?>
                        <span class="text-danger"><?php echo e($errors->first('advances')); ?></span>
                       <?php endif; ?>
                        </div>
                        </div>



                    </div>
                   

                    <div class="row">
                      <input type="hidden" name="total_monthly_rent" id="total_monthly_rent" value="<?php echo e($monthlyRental); ?>">
                      <input type="hidden" name="totalRentalSum" id="totalRentalSum" value="<?php echo e($totalRentalSum); ?>">
                          <div class="col-4">
                       <div class="form-group">
                        <label for="name">Monthly  Rent <?php echo e($totalRentalSum); ?></label>
                        <input type="text" id="month_rent" name="month_rent" class="form-control  error" aria-required="true" onblur="checkValue()">
                        <?php if($errors->has('month_rent')): ?>
                        <span class="text-danger"><?php echo e($errors->first('month_rent')); ?></span>
                       <?php endif; ?>
                      </div>
                     </div>
                        <div class="col-4">
                         <div class="form-group">
                        <label for="name">Advance Deduction</label>
                        <input type="text" id="advance_deduction" name="advance_deduction" class="form-control  error" aria-required="true">
                         <?php if($errors->has('advance_deduction')): ?>
                        <span class="text-danger"><?php echo e($errors->first('advance_deduction')); ?></span>
                       <?php endif; ?>
                        </div>
                        </div>
                   
                       <div class="col-4">
                       <div class="form-group">
                        <label for="name">Special Remarks</label>
                        <input type="text" id="special_remarks" name="special_remarks" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                    </div>
                     </div>

                    </div> -->

                    <!-- <div class="row">
                      
                        <div class="col-4">
                         <div class="form-group">
                        <label for="name">Payment System</label>
                      <select id="payment_system" name="payment_system" class="form-control error"  aria-required="true">
                        <option value="CURRENT MONTH BASIS">CURRENT MONTH BASIS</option>
                         <option value="NEXT MONTH BASIS">NEXT MONTH BASIS</option>
                      </select>

                      </div>
                        </div>

                      <div class="col-4">
                         <div class="form-group">
                      <label for="name">Notice Period</label>
                         <select name="notice_period" id="notice_period" class="form-control error" aria-required="true">
                           <option value="1 Month">1 Month</option>
                           <option value="2 Month">2 Month</option>
                          <option value="3 Month">3 Month</option>
                          <option value="4 Month">4 Month</option>
						  <option value="5 Month">5 Month</option>
                          <option value="6 Month">6 Month</option>
                          <option value="7 Month">7 Month</option>
                          <option value="8 Month">8 Month</option>
                          <option value="9 Month">9 Month</option>
                          <option value="10 Month">10 Month</option>
                          <option value="11 Month">11 Month</option>
                          <option value="12 Month">12 Month</option>
                        </select>
                    </div>
                        </div>

                    </div> -->



               <!--<div class="row">
                      
                           <div class="col-4">
                       <div class="form-group">
                        <label for="name">Enhancement Clause</label>
                      <input type="text" id="enhancement_clause" name="enhancement_clause" class="form-control  error" aria-required="true">
                    </div>
                     </div>

                         <div class="col-4">
                         <div class="form-group">
                        <label for="name">Newly constructed for us</label>
                        <input type="text" id="newly_constructed_for_us" name="newly_constructed_for_us" class="form-control  error" aria-required="true">
                    </div>
                        </div>

                         <div class="col-4">
                        <div class="form-group">
                        <label for="name">Last Tenants</label>
                        <input type="text" id="last_tenants" name="last_tenants" class="form-control  error" aria-required="true">
                    </div>
                     </div>
 


                    </div> -->
                       </div>
                      <div class="card-body">
                        <div class="card-header">
                      <div class="card-title">Bank Details </div>
                    </div>
                     <br>
                    <div class="row">
                      

                     <div class="col-4">
                      <div class="form-group">
                        <label for="name">Payee Name</label>
                        <input type="text" id="payee_name_for_rent" name="payee_name_for_rent" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                        <?php if($errors->has('payee_name_for_rent')): ?>
                        <span class="text-danger"><?php echo e($errors->first('payee_name_for_rent')); ?></span>
                       <?php endif; ?>
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                    </div>
                     </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Branch Name</label>
                        <input type="text" id="branch_name" name="branch_name" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                       <?php if($errors->has('branch_name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('branch_name')); ?></span>
                       <?php endif; ?>

                       </div>
                        </div>

                         <div class="col-4">
                     <div class="form-group">
                        <label for="name">Account Type</label>
                         <select name="account_type" id="account_type" class="form-control error" aria-required="true" style="text-transform: uppercase">
                           <option value="Current Account">Current Account</option>
                           <option value="Savings Account">Savings Account</option>
                          <option value="Escrow">Escrow</option>
                        </select>                    
						</div>
                     </div>

                      </div>

                       <div class="row">
                      
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Bank Name</label>
                        <input type="text" id="bank_name" name="bank_name" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                        <?php if($errors->has('bank_name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('bank_name')); ?></span>
                       <?php endif; ?>
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                      </div>
                        </div>
						
						 <div class="col-4">
                        <div class="form-group">
                        <label for="name">Bank Address</label>
                        <input type="text" id="bank_address" name="bank_address" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                       
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                      </div>
                        </div>
						
						

                         <div class="col-4">
                      <div class="form-group">
                        <label for="name">Account No</label>
                        <input type="text" id="account_no" name="account_no" class="form-control  error" aria-required="true">
                        <?php if($errors->has('account_no')): ?>
                        <span class="text-danger"><?php echo e($errors->first('account_no')); ?></span>
                       <?php endif; ?>
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                    </div>
                     </div>

                      <div class="col-4">
                       <div class="form-group">
                        <label for="name">IFSC Code</label>
                        <input type="text" id="ifsc_code" name="ifsc_code" class="form-control  error" aria-required="true" style="text-transform: uppercase" onBlur="checkIfsc()">
						 <div class='validation' style='color:red;margin-bottom: 20px;display:none'>Ifsc code  Should be 11 Digits alphanumeric  Only</div>
                         <?php if($errors->has('ifsc_code')): ?>
                        <span class="text-danger"><?php echo e($errors->first('ifsc_code')); ?></span>
                       <?php endif; ?>
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                       </div> 
                        </div>
						
					  <div class="col-4">
                       <div class="form-group">
                        <label for="name">MICR Code</label>
                        <input type="text" id="micr_code" name="micr_code" class="form-control  error" aria-required="true" style="text-transform: uppercase" >
						
                       
                        <!-- <label id="name-error" class="error" for="name">This field is required.</label> -->
                       </div> 
                        </div>

                    </div> 
                 <label for="name">Upload Owner Document</label>

                      <br> 
                   
                      <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                      <label for="name">Upload Owner Cancelled Cheque Copy</label>
                      <input type="file" class="form-control" name="owner_cancelled_cheque_copy" id="owner_cancelled_cheque_copy"/>
                       <?php if($errors->has('owner_cancelled_cheque_copy')): ?>
                        <span class="text-danger"><?php echo e($errors->first('owner_cancelled_cheque_copy')); ?></span>
                       <?php endif; ?>
                      </div>
                      </div>
                       <div class="col-6">
                       <div class="form-group">
                      <label for="name">Upload Owner PAN Card Copy</label>
                      <input type="file" class="form-control" name="owner_pan_card_copy" id="owner_pan_card_copy"/>
                       <?php if($errors->has('owner_pan_card_copy')): ?>
                        <span class="text-danger"><?php echo e($errors->first('owner_pan_card_copy')); ?></span>
                       <?php endif; ?>
                      </div>
                      </div>
                    </div> 

                     <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                      <label for="name">Upload Owner Aadhaar Card Copy</label>
                      <input type="file" class="form-control" name="owner_aadhaar_card_copy" id="owner_aadhaar_card_copy"/>
                       <?php if($errors->has('owner_aadhaar_card_copy')): ?>
                        <span class="text-danger"><?php echo e($errors->first('owner_aadhaar_card_copy')); ?></span>
                      <?php endif; ?>
                      </div>
                      </div>
                      
                    </div> 
           
                      

                       </div> 
                        

                    <div class="card-action">
                        
                     <input type="hidden" name="master_id" value="<?php echo $master_id; ?>">
                     <input type="hidden" name="totalRentalSum" value="<?php echo $totalRentalSum; ?>">
                      <button class="btn btn-success" onclick="checkValue()">Submit</button>
                      <button class="btn btn-danger">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    
    </div>

    <!-- Custom template | don't include it in your project! -->
   
    <!-- End Custom template -->
  </div>


 <?php echo $__env->make('layouts.adminLayout.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <script type="text/javascript">
	function checkIfsc()
	{
		//alert ("hggg");
		var ifsc=$('#ifsc_code').val();
		//alert(ifsc);
		var valid_ifsc=/^[A-Za-z]{4}0[A-Z0-9a-z]{6}$/;
		
		if(ifsc.match(valid_ifsc))
		{
			$(".validation").css("display","none");
			
			return true;
		}
		else
		{
			  $(".validation").css("display", "block");

        $('#ifsc').val('');
       $('#ifsc').focus();
        return false;
			
		}
	}


    function checkPincode()
  {
    var pincode=$('#pincode').val();

  

   var pin_valid = /^\d{6}$/;
  if((pincode.match(pin_valid)))
        {
        // ("#pincode").parent().next(".validation").remove();
                 // ('.validation').hide();
                          $(".validation").css("display", "none");


           return true;
        }
      else
        {
       // $("#pincode").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Pincode  Should be 6 Digits Numbers Only</div>");
       // ('.validation').show();
        $(".validation").css("display", "block");

        $('#pincode').val('');
       $('#pincode').focus();
        return false;
       
        }

  }
 
  function checkGSTIN(){
 var gstn_of_payee=$('#gstn_of_payee').val();
   //alert(pincode);

   var pin_valid = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
   
   if((gstn_of_payee==='') || (gstn_of_payee === null)){
				
				 $(".gstin_validation").css("display", "none");
           return true;
    }
  else {
	  if((gstn_of_payee.match(pin_valid)))
        {
         // ("#gstn_of_payee").parent().next(".validation").remove();
             $(".gstin_validation").css("display", "none");

           return true;
        }
      else
        {
       // $("#gstn_of_payee").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>GSTIN is Not Valid </div>");
                $(".gstin_validation").css("display", "block");

        //$('#gstn_of_payee').val('');
       $('#gstn_of_payee').focus();
        return false;
        }
  }
  }
  
  /*
  function checkPancard()
  {

    var panVal = $('#pan_of_payee').val();
    var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

    //alert(panVal);
	if (panVal=""){
		$(".validation").css("display", "none");

        $('.validation').val('');
           return true;
	}else if (regpan.test(panVal)){
		
    //if(regpan.test(panVal)){
       // valid pan card number
        //("#pan_of_payee").parent().next(".validation").remove();

        //$("#pan_of_payee").find('.validation').removeClass("validation");
           $(".validation").css("display", "none");

        $('.validation').val('');
           return true;
    } else {
       // invalid pan card number
     //   $("#pan_of_payee").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>PAN Card  Should be Alphanumeric 10 Character  Only</div>");
                $(".validation").css("display", "block");

        $('#pan_of_payee').val('');
       $('#pan_of_payee').focus();
        return false;
    }

  }*/
function checkPancard()
  {

    var panVal = $('#pan_of_payee').val();
    var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

  
			
			if((panVal==='') || (panVal === null)){
				
				
           return true;
    } else {
		    if((regpan.test(panVal)) && (panVal!=''))
			{
				alert("else if"+panVal);
				$(".validation").css("display", "none");

					$('.validation').val('');
					   return true;
							
			}
			else{
                $(".validation").css("display", "block");

			//$('#pan_of_payee').val('');
		   $('#pan_of_payee').focus();
			return false;
				
			}
    
	}

  }
function checkValue() {

  //alert("call");
//var val = parseInt(sender.value);
var val=parseInt($("#month_rent").val());


var month_rent = $("#total_monthly_rent").val();
var totalRentalSum = $("#totalRentalSum").val();

var total_sum = val + parseInt(totalRentalSum);
//alert("total sum >> "+total_sum);
//alert(val + month_rent + totalRentalSum + total_sum);

if(total_sum>month_rent)
{
  alert("Owner Rent May Not Be Grater Than Agreement Montly Rental Amount");
  $("#month_rent").val('');
  $("#month_rent").focus();
return false;
}

/*
  if (value > month_rent) {
     sender.value = 20;
  } else if (value < 0){
     sender.value = 0;
  } else if (value == '' || isNan(value)) {
     sender.value = 0;
  } else {
     return sender.value;
  }*/
}
    



  $("select[name='region_code']").change(function(){
      var region_code = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo e(url('/getFactSheetCode')); ?>",
          method: 'POST',
          data: {region_code:region_code, _token:token},
          success: function(data) {
            //console.log(data);
            //return false;
            // $("input[name='factsheet_code'").html('');
            $("input[name='factsheet_code'").val(data);
          }
      });
  });


  $("select[name='branch_code']").change(function(){
      var branch_code = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo e(url('/getBranchDetails')); ?>",
          method: 'POST',
          data: {branch_code:branch_code, _token:token},
          success: function(data) {
           // console.log(data);
            //return false;

           // branch_location
             //$("input[name='branch_location'").val(data.branch_name);

             var arraydata = JSON.parse(data);

              //reading data using index
              var branch_location = arraydata[0]["branch_name"];
              var branch_type = arraydata[0]["branch_type"];
              var branch_id = arraydata[0]["branch_id"];
              //var branch_location = arraydata[0]["branch_name"];

              $("input[name='branch_location'").val(branch_location);
              $("input[name='branch_type'").val(branch_type);
              $("input[name='branch_id'").val(branch_id);

             //$("input[name='branch_location'").val(data);
             //$('#EmployeeId').val("fgg");
            // $("input[name='factsheet_code'").html('');
            //$("input[name='factsheet_code'").val(data);
          }
      });
  });


  
</script>
 <script>
        $(document).ready(function() {
            $('#breadth').keyup(function(ev) {

            var the_total_length = $("#length").val();
           // var length_unit = $("#length_unit").val();
            var the_total_breadth = $("#breadth").val();
            //var breadth_unit = $("#breadth_unit").val();
            var total = the_total_length * the_total_breadth;

            var inch=0;

             var length_unit = $("#length_unit").val();
            var breadth_unit = $("#breadth_unit").val();
  
              if (length_unit =='Feet') 
              {
                //console.log("inside feet");

                 var substr_total_length = the_total_length.split('.');

                 var substr_total_breadth = the_total_breadth.split('.');

                 var length_left= substr_total_length[0]*12;

                 var length_left_inch= parseInt(length_left) + parseInt(substr_total_length[1]);

                  var breadth_left= substr_total_breadth[0]*12;

                 var breadth_left_inch= parseInt(breadth_left) + parseInt(substr_total_breadth[1]);

                 var total_length_breadth=length_left_inch * breadth_left_inch;
                  // console.log(length_left);
                  // console.log(length_left_inch);
                  // console.log(breadth_left);
                  // console.log(breadth_left_inch);
                  // console.log(total_length_breadth);

                  var total_in_feet=total_length_breadth / 144;

                  // console.log(total_in_feet);

                   var total=total_in_feet.toFixed(2)

              }

               $("#total_length_breadth").val(total);
               //$("#total_length_breadth_unit").val(total_unit);

                      });

            /*
             $('#length').keyup(function(ev) {


            var the_total_length = $("#length").val();
           // var length_unit = $("#length_unit").val();
            var the_total_breadth = $("#breadth").val();
           // var breadth_unit = $("#breadth_unit").val();
            var total = the_total_length * the_total_breadth;

           
               $("#total_length_breadth").val(total);
             //  $("#total_length_breadth_unit").val(total_unit);

                      });

             */

             $('#length_unit').change(function(ev) {

            var length_unit = $("#length_unit").val();
            var breadth_unit = $("#breadth_unit").val();
  
              if (length_unit =='Feet') 
              {
             
                  var total_unit='Sq.Feet';
                  $("#breadth_unit option[value='Feet']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", "selected");
                  $("#breadth_unit option[value='Inch']").attr("selected", null);
                  $("#breadth_unit option[value='Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", null);

              }
              if (length_unit == 'Inch') 
              {
                 $("#breadth_unit option[value='Inch']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", "selected");
                 $("#breadth_unit option[value='Feet']").attr("selected", null);
                  $("#breadth_unit option[value='Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", null);
              
               }

              if (length_unit == 'Meter') 
              {
                 var total_unit='Sq.Meter';
                 $("#breadth_unit option[value='Meter']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", "selected");
                 $("#breadth_unit option[value='Feet']").attr("selected", null);
                  $("#breadth_unit option[value='Inch']").attr("selected", null);
                   $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", null);
                   $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", null);
              
               }
               
             });

                $('#breadth_unit').change(function(ev) {

            var length_unit = $("#length_unit").val();
            var breadth_unit = $("#breadth_unit").val();
  
              if (breadth_unit =='Feet') 
              {
             
                  var total_unit='Sq.Feet';
                  $("#length_unit option[value='Feet']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", "selected");

                  $("#length_unit option[value='Inch']").attr("selected", null);
                  $("#length_unit option[value='Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", null);

              }
              if (breadth_unit == 'Inch') 
              {
                 $("#length_unit option[value='Inch']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", "selected");

                 $("#length_unit option[value='Feet']").attr("selected", null);
                  $("#length_unit option[value='Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", null);
              
               }

              if (breadth_unit == 'Meter') 
              {
                 var total_unit='Sq.Meter';
                 $("#length_unit option[value='Meter']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", "selected");

                 $("#length_unit option[value='Feet']").attr("selected", null);
                  $("#length_unit option[value='Inch']").attr("selected", null);
                   $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", null);
                   $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", null);
              
               }
               
             });



            
        });
    </script>
    <!------jquery validation start here------------>
     <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#form2').validate({ // initialize the plugin
        rules: {
            owner_name: {
                required: true
            },
            payee_name: {
                required: true
            },
            landlord_address: {
                required: true
            },
            pincode: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
           // pan_of_payee: {
                //required: true
                //email: true
           // },
            // gstn_of_payee: {
                //required: true
                
           // },

            refundable_security_deposits: {
                required: true
                
            },

            advances: {
                required: true
                
            },
            month_rent: {
                required: true
                
            },


             advance_deduction: {
                required: true
                
            },
             payee_name_for_rent: {
                required: true
                
            },
             branch_name: {
                required: true
                
            },
             bank_name: {
                required: true
                //email: true
            },
             account_no: {
                required: true
                //email: true
            },
             ifsc_code: {
                required: true
                //email: true
            },
             //owner_cancelled_cheque_copy: {
                //required: true
                //email: true
           // },
            
             //owner_aadhaar_card_copy: {
              //  required: true
                //email: true
           // },
            
           
           
           
            
            
        }
    });
});
</script><?php /**PATH /var/www/html/lrms/resources/views/create_fact_sheet_part2.blade.php ENDPATH**/ ?>