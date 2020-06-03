@include('layouts.adminLayout.admin_header')

    <!-- Sidebar -->
      @include('layouts.adminLayout.admin_sidebar')

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
    color: #575962;
    line-height: 145%;
    font-size: 1.2em;
    background-color: #dee2e6 !important;
}



      </style>
      <div class="main-panel">
      <div class="content">
        <form action="{{url('updateOwnerDetails')}}" method="post" enctype="multipart/form-data">
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
				<?php //echo "<pre>";
               //print_r($ownerSingleRentData);
			  // print_r($ownerSingleBankData);
				?>
            </div>
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                  aria-labelledby="home-tab">

 
                  <div class="card">
                    <div class="card-header">
                      <div class="card-title">Owner Details 
                     
                      </div>
                    </div>

                    <div class="card-body">

                             <div class="row">
                       <div class="col-2">
                       <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="owner_name" name="owner_name" class="form-control  error" aria-required="true" value="{{ $ownerSingleData->property_owner_name }}">
                        
                        </div>
                        </div>
						<div class="col-2">
                       <div class="form-group">
                       <label for="name">Supplier No</label>
                        <input type="text" id="supplier_no" name="supplier_no" class="form-control  error" aria-required="true" value="{{ $ownerSingleData->supplier_no }}">
                        </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Payee Name</label>
                        <input type="text" id="payee_name" name="payee_name" class="form-control required error" aria-required="true" value="{{ $ownerSingleData->payee_name }}">
                    </div>
                        </div>
                    
                    <div class="col-4">
                       <div class="form-group">
                        <label for="name">Occupation Of Landlord</label>
                        <input type="text" id="property_owner_occupation" name="property_owner_occupation" class="form-control error" aria-required="true" value="{{ $ownerSingleData->property_owner_occupation }}">
                        </div>
                        </div>

                    </div> 

                    <div class="row">
					 <div class="col-4">
                       <div class="form-group">
                        <label for="name">Landlord Address</label>
                        <input type="text" id="landlord_address" name="landlord_address" class="form-control error" aria-required="true" value="{{ $ownerSingleData->property_owner_address }}">
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
                        <input type="text" id="pincode" name="pincode" class="form-control  error" aria-required="true" onblur="checkPincode()" value="{{ $ownerSingleData->property_owner_postal_code }}">
                    </div>
                        </div>
                       <div class="col-4">
                     <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" id="email" name="email" class="form-control  error" aria-required="true" value="{{ $ownerSingleData->property_owner_email }}">
                    </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Contact No.</label>
                        <input type="text" id="contact_no" name="contact_no" class="form-control  error" aria-required="true" value="{{ $ownerSingleData->property_owner_contact_no }}">
                    </div>
                        </div>

                    </div> 
                   
                   <div class="row">
				    <div class="col-4">
                   <div class="form-group">
                        <label for="name">PAN of Payee</label>
                      <input type="text" id="pan_of_payee" name="pan_of_payee" class="form-control  error" aria-required="true" onblur="checkPancard()" value="{{ $ownerSingleData->payee_pan }}" >
                    </div>
                        </div>
                       
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">GSTIN Of Payee</label>
                        <input type="text" id="gstn_of_payee" name="gstn_of_payee" class="form-control  error" aria-required="true" value="{{ $ownerSingleData->payee_gstin }}">
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
                      

                        <div class="col-4">
                    <div class="form-group">
                        <label for="name">Refundable Security Deposits</label>
                        <input type="text" id="refundable_security_deposits" name="refundable_security_deposits" class="form-control error" aria-required="true" value="{{ $ownerSingleRentData->refundable_security_deposit }}">
                    </div>
                        </div>

                          <div class="col-4">
                        <div class="form-group">
                        <label for="name">Advances</label>
                        <input type="text" id="advances" name="advances" class="form-control  error" aria-required="true" value="{{ $ownerSingleRentData->advances }}">
                        </div>
                        </div>

                    </div>
                   
                    <div class="row">
                      <input type="hidden" name="total_monthly_rent" id="total_monthly_rent" value="">
                      <input type="hidden" name="totalRentalSum" id="totalRentalSum" value="">
                          <div class="col-4">
                       <div class="form-group">
                        <label for="name">Month Rent </label>
                        <input type="text" id="month_rent" name="month_rent" class="form-control  error" aria-required="true" onblur="checkValue()" value="{{ $ownerSingleRentData->monthly_rent }}">
                      </div>
                     </div>
                        <div class="col-4">
                         <div class="form-group">
                        <label for="name">Advance Deduction</label>
                        <input type="text" id="advance_deduction" name="advance_deduction" class="form-control  error" aria-required="true" value="{{ $ownerSingleRentData->advance_deduction }}">
                        </div>
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
                        <input type="text" id="payee_name_for_rent" name="payee_name_for_rent" class="form-control  error" aria-required="true" value="{{ $ownerSingleBankData->payee_name }}">
                    </div>
                     </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Branch Name</label>
                        <input type="text" id="branch_name" name="branch_name" class="form-control  error" aria-required="true" value="{{ $ownerSingleBankData->branch_name }}">

                       </div>
                        </div>

                         <div class="col-4">
                     <div class="form-group">
                        <label for="name">Account Type</label>
                        <input type="text" id="account_type" name="account_type" class="form-control  error" aria-required="true" value="{{ $ownerSingleBankData->account_type }}">
                    </div>
                     </div>

                      </div>

                       <div class="row">
                      
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Bank Name</label>
                        <input type="text" id="bank_name" name="bank_name" class="form-control  error" aria-required="true" value="{{ $ownerSingleBankData->bank_name }}">
                      </div>
                        </div>

                         <div class="col-4">
                      <div class="form-group">
                        <label for="name">Account No</label>
                        <input type="text" id="account_no" name="account_no" class="form-control  error" aria-required="true" value="{{ $ownerSingleBankData->account_no }}">
                    </div>
                     </div>

                      <div class="col-6">
                       <div class="form-group">
                        <label for="name">IFSC Code</label>
                        <input type="text" id="ifsc_code" name="ifsc_code" class="form-control  error" aria-required="true" value="{{ $ownerSingleBankData->ifsc_code }}">
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

                          <div class="col-6">
                            <div class="form-group">
                              <label for="name">Previous Uploaded Cancelled Cheque</label>
                             <img src="{{ asset('uploads/owner_cancelled_cheque/'.$ownerSingleData->owner_cancelled_cheque_copy) }}" width="100" height="50" alt="No Image">
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

                          <div class="col-6">
                            <div class="form-group">
                            <label for="name">Previous Uploaded Pan Card</label>
  
                             <img src="{{ asset('uploads/owner_pan_card/'.$ownerSingleData->owner_pan_card_copy) }}" width="100" height="50" alt="No Image">
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

                          <div class="col-6">
                            <div class="form-group">
                        <label for="name">Previous Uploaded AAdhaar Card</label>
      
                             <img src="{{ asset('uploads/owner_aadhaar_card/'.$ownerSingleData->owner_aadhaar_card_copy) }}" width="100" height="50" alt="No Image">
                            </div>
                          </div>
                       </div>     


            </div>
                        

                    <div class="card-action">
                        
                     <!--<input type="hidden" name="master_id" value="">
                     <input type="hidden" name="totalRentalSum" value="">-->
					 <input type="hidden" name="owner_id" value="{{ $ownerSingleData->id }}">
					 <input type="hidden" name="owner_rent_id" value="{{ $ownerSingleRentData->id }}">
					 <input type="hidden" name="owner_bank_id" value="{{ $ownerSingleBankData->id }}">
					 <input type="hidden" name="owner_doc_id" value="">
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


  </div>


 @include('layouts.adminLayout.admin_footer')
  <script type="text/javascript">
 function checkPincode()
  {
    var pincode=$('#pincode').val();
   //alert(pincode);

   var pin_valid = /^\d{6}$/;
  if((pincode.match(pin_valid)))
        {
          ("#pincode").parent().next(".validation").remove();
           return true;
        }
      else
        {
        $("#pincode").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Pincode  Should be 6 Digits Numbers Only</div>");
        $('#pincode').val('');
       $('#pincode').focus();
        return false;
        }

  }

  $("select[name='region_code']").change(function(){
      var region_code = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ url('/getFactSheetCode')}}",
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
          url: "{{ url('/getBranchDetails')}}",
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