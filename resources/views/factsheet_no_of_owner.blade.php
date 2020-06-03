@include('layouts.adminLayout.admin_header')

    <!-- Sidebar -->
      @include('layouts.adminLayout.admin_sidebar')
	  <link rel="stylesheet" type="text/css" href="http://164.52.196.61/lrms/public/css/fonts.min.css">

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
        <!--<form action="{{url('saveFactSheetPart2')}}" method="post" enctype="multipart/form-data">-->
        {{ csrf_field() }}
        <div class="page-inner">
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
                           /* $master_id = Session::get('master_id');*/

                          ?>

                     @php
/*
                       $table='dst_lrms_masters';
                        $field='id';
                        $value=$master_id;

                      $masterData=getRecordById($table,$field,$value);
                       
                      $monthly_rental=$masterData->total_month_rent;
$totalRentalSum=\DB::table("dst_lrm_dtls_pro_rental_dtls")->where('dst_lrms_master_id', '=', $master_id)->get()->sum("monthly_rent");


$ownerlist = \DB::table('dst_lrms_details_property_owners')->where('dst_lrms_master_id', '=', $master_id)
            ->get();
     

      $ownerCount = $ownerlist->count() + 1;*/


                        
                    @endphp

                <?php 
				//echo "<pre>";
				//print_r($ownerData);
				//print_r($ownerBankData);
				//print_r($ownerRentData);
				//print_r($ownerDocData);
				?>
				
				
                  <div class="card">
				   <?php foreach($ownerData as $owner){ 
					  	   ?>
                    <div class="card-header">

<span style="display: inline-block;">
					<a href="{{action('FactSheetController@editOwnerDetails', $owner['id'])}}">
                      <div class="card-title" style="line-height: 0.2 !important;">Edit Owner     {{ ucfirst($owner['property_owner_name']) }}
                      Details 


                           

							  
                      </div>

					  </a>
          </span>
          <span style="display: inline-block; float:right;">
            <i data="<?php echo $owner['id'];?>" class="status_checks btn
  <?php echo $owner['status']?
  'btn-success': 'btn-danger'?>" style="float: right;"><?php echo ($owner['status'])? 'Active' : 'Inactive'?>
 </i> </span>
            <hr>
<style>.owner-rent{font-size: 16px;
  color:green !important;
    position: relative;
    margin-left: 25px;
    opacity: .85;}</style>
            <h4 class="owner-rent"><?php
 $rent=getRecordById('dst_lrm_dtls_pro_rental_dtls','dst_lrm_dtls_prorperty_owner_id',$owner['id']); 
echo "Advances: ". $rent->advances; 
echo " | ";
echo "Monthly Rent: ".$rent->monthly_rent;


?></h4>
                    </div>
					 <?php }?>
            
                     
                   </div>
                   <hr>
				   
				   
                <form action="{{url('addMoreOwnerDetails')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="page-inner">
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif     
<div class="row">
            <div class="col-md-12">
              <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Owner Details</a>
                </li>
               
                </ul> -->
        <?php //echo "<pre>";
               //print_r($ownerSingleRentData);
        // print_r($ownerSingleBankData);
		
		
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
        ?>
            </div>
			<?php 
			$no_of_owner=$masterData->no_of_owner;  // No Of Owner from Fact sheet
			$no_of_record=count($ownerData);// No of record from owner on behalf of fsct sheet from owner table
			if($no_of_owner>$no_of_record){
			?>
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                  aria-labelledby="home-tab">

 
                  <div class="card">
                    <div class="card-header">
                      <div class="card-title">Add Owner Details 
                     
                      </div>
                    </div>

                    <div class="card-body">

                             <div class="row">
                       <div class="col-3">
                       <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="owner_name" name="owner_name" class="form-control  error" aria-required="true" value="" style="text-transform: uppercase">
                        
                        </div>
                        </div>
						 <div class="col-3">
                       <div class="form-group">
                        <label for="name">Supplier No</label>
                        <input type="text" id="supplier_no" name="supplier_no" class="form-control  error" aria-required="true">
                        
                        </div>
                        </div>
                        <div class="col-3">
                        <div class="form-group">
                        <label for="name">Alternate Name</label>
                        <input type="text" id="payee_name" name="payee_name" class="form-control required error" aria-required="true" value="" style="text-transform: uppercase">
                    </div>
                        </div>
                    
                    <div class="col-3">
                       <div class="form-group">
                        <label for="name">Occupation Of Landlord</label>
                        <input type="text" id="property_owner_occupation" name="property_owner_occupation" class="form-control error" aria-required="true" value="" style="text-transform: uppercase">
                        </div>
                        </div>

                    </div> 

                    <div class="row">
                    <div class="col-4">
                       <div class="form-group">
                        <label for="name">Landlord Address</label>
                        <input type="text" id="landlord_address" name="landlord_address" class="form-control error" aria-required="true" value="" style="text-transform: uppercase">
                        </div>
                        </div>
                      
                        <div class="col-4">
                     
                       <div class="form-group">
                        <label for="name">City</label>
                        <select id="city" name="city" class="form-control error" aria-required="true">
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
                   
                       


                    </div> 
                     <div class="row">
            <div class="col-4">
                       <div class="form-group">
                        <label for="name">Pincode</label>
                        <input type="text" id="pincode" name="pincode" maxlength="6" class="form-control error" aria-required="true" onblur="checkPincode()">
                        <div class='validation' style='color:red;margin-bottom: 20px;display:none'>Pincode  Should be 6 Digits Numbers Only</div>
                    </div>
                        </div>
                       <div class="col-4">
                     <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" id="email" name="email" class="form-control  error" aria-required="true" value="" style="text-transform: uppercase">
                    </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Contact No.</label>
                        <input type="text" id="contact_no" name="contact_no" class="form-control  error" aria-required="true" value="" maxlength="10">
                    </div>
                        </div>

                    </div> 
                   
                   <div class="row">
            <div class="col-4">
                   <div class="form-group">
                        <label for="name">PAN of Payee</label>
                         <input type="text" id="pan_of_payee" name="pan_of_payee" class="form-control  error" aria-required="true" onblur="checkPancard()" style="text-transform: uppercase">
                      <div class='pancard_validation' style='color:red;margin-bottom: 20px;display:none'>Enter valid Pan Card Number</div>
                    </div>
                        </div>
                       
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">GSTIN Of Payee</label>
                        <input type="text" id="gstn_of_payee" name="gstn_of_payee" class="form-control  error" aria-required="true" value="" maxlength="16" style="text-transform: uppercase">
                    </div>
                        </div>
						
						 <div class="col-4">
                        <div class="form-group">
                        <label for="name">TDS Of Payee</label>
                        <input type="text" id="tds_of_payee" name="tds_of_payee" class="form-control  error" aria-required="true" value="10%">
                      
                       <!--  <label id="name-error" class="error" for="name">This field is required.</label> -->
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
					<div id="content">
  <div id="left">
     <!--<div id="object1">lorem ipsum</div>
     <div id="object2">dolor site amet</div>-->
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
	 
		$balance_rent=$master_monthly_rental - $owner_total_monthly;		  
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
                        <input type="text" id="payee_name_for_rent" name="payee_name_for_rent" class="form-control  error" aria-required="true" value="">
                    </div>
                     </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Branch Name</label>
                        <input type="text" id="branch_name" name="branch_name" class="form-control  error" aria-required="true" value="">

                       </div>
                        </div>

                         <div class="col-4">
                     <div class="form-group">
                         <label for="name">Account Type</label>
                         <select name="account_type" id="account_type" class="form-control error" aria-required="true">
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
                        <input type="text" id="bank_name" name="bank_name" class="form-control  error" aria-required="true" value="">
                      </div>
                        </div>

                         <div class="col-4">
                      <div class="form-group">
                        <label for="name">Account No</label>
                        <input type="text" id="account_no" name="account_no" class="form-control  error" aria-required="true" value="" maxlength="16">
                    </div>
                     </div>

                      <div class="col-6">
                       <div class="form-group">
                        <label for="name">IFSC Code</label>
                        <input type="text" id="ifsc_code" name="ifsc_code" class="form-control  error" aria-required="true" value="" maxlength="16">
                       </div> 
                        </div>

                    </div> 
                
                       </div> 

                       <div class="card-body">
                        <div class="card-header">
                      <div class="card-title">Document Details </div>
                    </div>
                     <br>
                      <div class="row">
                           <div class="col-6">
                            <div class="form-group">
                           <label for="name">Cancelled Cheque</label>
                      <input type="file" class="form-control" name="owner_cancelled_cheque_copy"/>
                            </div>
                          </div>

                       </div>
                       <div class="row">
                           <div class="col-6">
                            <div class="form-group">
                           <label for="name">PAN Card</label>
                      <input type="file" class="form-control" name="owner_pan_card_copy"/>
                            </div>
                          </div>
                       </div> 

                       <div class="row">
                           <div class="col-6">
                            <div class="form-group">
                           <label for="name">Aadhaar Card</label>
                      <input type="file" class="form-control" name="owner_aadhaar_card_copy"/>
                            </div>
                          </div>

                       </div>     


            </div>
             <div class="card-action">
                        
                      <button class="btn btn-success" onclick="checkValue()">Add Owner</button>
                    </div>
</form>
<?php }?>

                   <hr>


 @include('layouts.adminLayout.admin_footer')
  
  <script>
    function checkPincode()
  {
    var pincode=$('#pincode').val();
	
	//alert(pincode);

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

        $('#gstn_of_payee').val('');
       $('#gstn_of_payee').focus();
        return false;
        }

  }
  function checkPancard()
  {

    var panVal = $('#pan_of_payee').val();
    var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

   // alert(panVal);

    if((regpan.test(panVal)) && (panVal!='')){
       // valid pan card number
        //("#pan_of_payee").parent().next(".validation").remove();

        //$("#pan_of_payee").find('.validation').removeClass("validation");
           $(".pancard_validation").css("display", "none");

        $('.pancard_validation').val('');
           return true;
    } else {
       // invalid pan card number
     //   $("#pan_of_payee").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>PAN Card  Should be Alphanumeric 10 Character  Only</div>");
                $(".pancard_validation").css("display", "block");

        $('#pan_of_payee').val('');
       $('#pan_of_payee').focus();
        return false;
    }

  }

  
  $(document).on('click','.status_checks',function(){
      var status = ($(this).hasClass("btn-success")) ? '0' : '1';
      var msg = (status=='0')? 'Inactive' : 'Active';
    var token = $("input[name='_token']").val();

      if(confirm("Are you sure to "+ msg)){
        var current_element = $(this);
        $.ajax({
          type:"POST",
          //data: {id:$(current_element).attr('data'),status:status},
      
      url: "{{ url('/changeStatus')}}",
            //data: {'status': status, 'owner_id': owner_id, _token:token},
      data: {id:$(current_element).attr('data'),status:status, _token:token},
         
          success: function(data)
          { 
            //console.log(data);
         //return false;  
            location.reload();
          }
        });
      }      
    });
  
  
  function checkValue() 
  {

	var val=parseInt($("#month_rent").val());
	var month_rent = $("#total_monthly_rent").val();
	//var totalRentalSum = $("#totalRentalSum").val();

	//var total_sum = val + parseInt(totalRentalSum);

	if(val>month_rent)
	{
	  alert("Owner Rent May Not Be Grater Than Agreement Montly Rental Amount");
	  $("#month_rent").val('');
	  $("#month_rent").focus();
	return false;
	}


  }
</script>                
