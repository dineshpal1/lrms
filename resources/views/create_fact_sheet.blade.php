@include('layouts.adminLayout.admin_header')
<link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="{{ asset('css/bootstrap_wizard.min.css') }}">-->
    <link href="{{ asset('js/dist/jquery.simplewizard.css') }}" rel="stylesheet" />  
    <link rel="stylesheet" href="{{ asset('css/tabnav.css') }}"> 

        <!-- Sidebar -->
  <div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('img/safexprees_admin.jpeg') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Admin
								<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="{{ url('/dashboard')}}">
								<i class="fas fa-desktop"></i>
								<p>Dashboard</p>
							</a>
						</li>
						 @if(Auth::user()->role_id==1)
						<li class="nav-item">
							<a data-toggle="collapse" href="#usertablesReport">
								<i class="fas fa-table"></i>
								<p>User Management</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="usertablesReport">
								<ul class="nav nav-collapse">
								   <li>
										<a href="{{ url('/userList')}}">
											<span class="sub-item">User List  </span>
										</a>
									</li>
									
									
								</ul>
							</div>
						</li>
                                                @endif
						
						<li class="nav-item submenu active">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Fact Sheet</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="tables">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="{{ url('/createFactSheet')}}">
											<span class="sub-item">Create Fact Sheet</span>
                                                                                 
										</a>
									</li>
									<li>
										<a href="{{ url('/FactsList')}}">
											<span class="sub-item">Fact Sheet List  </span>
										</a>
									</li>
                                                                        @if(Auth::user()->role_id==1)
									<li>
										<a href="{{ url('/agreementToBeRenewList')}}">
											<span class="sub-item">Renewal Due </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/agreementRenewedList')}}">
											<span class="sub-item">Renewed Agreement </span>
										</a>
									</li>
										<li>
						 				<a href="{{ url('/view-fact')}}">
											<span class="sub-item">Lease expired 
										</a>
									</li>
                                                                       @endif
									
								</ul>
							</div>
						</li>
                                               @if(Auth::user()->role_id==1)

						<li class="nav-item">
							<a data-toggle="collapse" href="#tablesReport">
								<i class="fas fa-table"></i>
								<p>Report</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tablesReport">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/RentalsNextDueReport')}}">
											<span class="sub-item">Rentals Next Due Report  </span>
										</a>
									</li>
								   <li>
										<a href="{{ url('/rental_revision')}}">
											<span class="sub-item">Rentals Revision Report  </span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#apiReport">
								<i class="fas fa-table"></i>
								<p>Oracle Fusion Report</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="apiReport">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/getInvoiceById')}}">
											<span class="sub-item">Invoice Report  </span>
										</a>
									</li>
                                        <li>
										<a href="{{ url('/getCheckData')}}">
											<span class="sub-item">Check  </span>
										</a>
									</li>

								</ul>
							</div>
						</li>
						<li class="nav-item submenu">
							<a data-toggle="collapse" href="#tablesMaster">
								<i class="fas fa-table"></i>
								<p>Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tablesMaster">
								<ul class="nav nav-collapse">
									<li >
										<a href="{{ url('/state')}}">
											<span class="sub-item"> State Master  </span>
										</a>
									</li>
									
									<li >
										<a href="{{ url('/allCity')}}">
											<span class="sub-item"> City Master </span>
										</a>
									</li>
									<li >
										<a href="{{ url('/allBranch')}}">
											<span class="sub-item">Safexpress Branch </span>
										</a>
									</li>
									
									<li >
										<a href="{{ url('/allBank')}}">
											<span class="sub-item"> Bank Master  </span>
										</a>
									</li>
									<!--<li >
										<a href="{{ url('/addState')}}">
											<span class="sub-item">Add State </span>
										</a>
									</li>-->
								
									<!--<li >
										<a href="{{ url('/addBank')}}">
											<span class="sub-item">Add Bank </span>
										</a>
									</li>-->
									
									<!--<li >
										<a href="{{ url('/addCity')}}">
											<span class="sub-item">Add City </span>
										</a>
									</li>-->
								
								
									<!--<li >
										<a href="{{ url('/addBranch')}}">
											<span class="sub-item">Add Branch </span>
										</a>
									</li>-->
								
									
								</ul>
							</div>
						</li>
                                                  @endif
						
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		
        <!-- End Sidebar -->
      <style>
.form-group label {
    margin-bottom: .5rem !important;
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

.swal-button{
  background-color: green;

}


      </style>

    <div class="main-panel">
      <div class="content">
           <!--<form name="factSheetForm" id="factSheetForm" method="POST" action="{{ url('saveFactData') }}">-->
<!--            <form name="factSheetForm" id="factSheetForm" method="POST" action="">  
  qrcode
firm name
qrcode remove
dashboard no of company

Add Access permission
Grant Access

store should be removed by member

remove member

 -->
           <!--  <form name="factSheetForm" id="factSheetForm"> -->
              <form name='form1' onsubmit="return checkform(this);" method="POST" action="{{ url('saveFactData') }}" enctype="multipart/form-data" id="create_form">
              @csrf


            
        <div class="page-inner">
{{--
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
--}}
@if(session('error'))
	    <div class="alert alert-danger">{{ session('error')}}</div>
	@endif

          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Fact Sheet</a>
                </li>
               
                </ul>
            </div>
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                  aria-labelledby="home-tab">

                  <div class="card">
                    <div class="card-header">
                      <div class="card-title">Branch Details </div>
                    </div>

                    <div class="card-body">

                          <div class="row">
                       <div class="col-6">
                         <div class="form-group">
                         <label for="exampleFormControlSelect1">Select Region</label>
                          <select name="region_code" id="region_code" class="form-control">
                            <option value=""></option>
                         <?php foreach($regionList as $region){?>
                         <option value="<?php echo  $region->region_code; ?>"><?php echo  $region->name; ?>(<?php echo  $region->region_code; ?>) </option>
                       <?php }?>
                        </select>
                          </div>

                        </div>
                          <div class="col-6">
                             <div class="form-group">
                            <label for="inlineinput">FactSheet Code</label>
                            <input type="text" id="factsheet_code" name="factsheet_code" class="form-control" readonly>
                        </div> 
                                           
                        </div>
                    </div>

                      <div class="row">
                       <div class="col-6">
                            <div class="form-group">
                            <label for="name">Branch Code</label>

                          <select name="branch_code" id="branch_code" class="form-control" aria-required="true">
                               <option value=""></option>
                         <?php foreach($branchList as $branch){?>
                         <option value="<?php echo  $branch->branch_code; ?>"><?php echo  $branch->branch_name; ?>(<?php echo  $branch->branch_code; ?>)</option>
                       <?php }?>
                        </select>  
                        </div> 
                       
                        </div>
                          <div class="col-3">
                              <div class="form-group">
                          <label for="name">Branch Type</label>
                           <input type="text" id="branch_type" name="branch_type" class="form-control error" aria-required="true">
                         </div>
                                         
                        </div>
                     <div class="col-3">

 			<div class="form-group">
                            <label for="name">Branch Location</label>
                            <input type="text" id="branch_location" name="branch_location" class="form-control error" aria-required="true" style="text-transform: uppercase">
		
                          </div>
			</div>                     
 <input type="hidden" id="branch_id" name="branch_id" class="form-control" value="">

                    </div>

                      <div class="row">
                      
                        <div class="col-6">
                         <div class="form-group">
                            <label for="name">Area Code</label>

                          <select name="branch_area" id="branch_area" class="form-control" aria-required="true">
                               <option value=""></option>
                         <?php foreach($branchAreaList as $branch_area){?>
                         <option value="<?php echo  $branch_area->area_name; ?>"><?php echo  $branch_area->area_name; ?></option>
                       <?php }?>
                        </select>  
                        </div> 

                           
                        </div>

                           <div class="col-6"> 

                          <div class="form-group">
                                <label for="name">Fact Sheet Date</label>
                            <!--  <input type="date" id="fact_sheet_date" name="fact_sheet_date" class="form-control error" aria-required="true" data-date-format="yyyy-mm-dd" onBlur="checkCurrentDate()">-->
							<input type="date" id="fact_sheet_date" name="fact_sheet_date" class="form-control error" aria-required="true" data-date-format="yyyy-mm-dd">
							  

                         @if ($errors->has('fact_sheet_date'))
                        <span class="text-danger">{{ $errors->first('fact_sheet_date') }}</span>
                        @endif
                         </div>  

                        </div>
                     
                      </div>

                        <div class="row">
                      
                        <div class="col-6">
                         
                          <div class="form-group">
                                <label for="name">Occupancy Date</label>
                            <!--  <input type="date" id="branch_occupancy_date" name="branch_occupancy_date" class="form-control" aria-required="true" onBlur="checkDate()"> -->
							 <input type="date" id="branch_occupancy_date" name="branch_occupancy_date" class="form-control" aria-required="true">
                         @if ($errors->has('branch_occupancy_date'))
                        <span class="text-danger">{{ $errors->first('branch_occupancy_date') }}</span>
                        @endif

                         </div>     

                    

                        </div>
						<!-------------inactive and vacation date start------------>
						
						 <div class="col-3">
                         
                          <div class="form-group">
                                <label for="name">Inactive Date</label>
                              <input type="date" id="branch_inactive_date" name="branch_inactive_date" class="form-control" aria-required="true"  >
                        
                         </div>     

                    

                        </div>
						
						 <div class="col-3">
                         
                          <div class="form-group">
                                <label for="name">Vacation Date</label>
                              <input type="date" id="branch_vacation_date" name="branch_vacation_date" class="form-control" aria-required="true"  >
                        
                         </div>     

                    

                        </div>
						
						
						
						
						<!-------------inactive and vacation date end------------>
                     
                      </div>
                 
                      </div>
                        <div class="card-body">
                   <div class="card-header">
                      <div class="card-title">Address & Premises Details </div>
                    </div>
                    <div class="row">
                       <div class="col-6">
                         <div class="form-group">
                         <label for="name">Address1</label>
                         <input type="text" id="address1" name="address1" class="form-control error" aria-required="true" style="text-transform: uppercase">
                        @if ($errors->has('address1'))
                        <span class="text-danger">{{ $errors->first('address1') }}</span>
                        @endif
                       </div>
                        </div>
                          <div class="col-6">
                           <div class="form-group">
                            <label for="name">Address2</label>
                             <input type="text" id="address2" name="address2" class="form-control  error" aria-required="true" style="text-transform: uppercase">
                         </div>                     
                        </div>
                    </div>	
                   <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                        <label for="name">Address3</label>
                        <input type="text" id="address3" name="address3" class="form-control error" aria-required="true" style="text-transform: uppercase">
                      </div>
                        </div>
                         <div class="col-6">
                       <div class="form-group">
                        <label for="name">City</label>
                        <select id="city" name="city" class="form-control error" aria-required="true">
                          <?php foreach($cityList as $cities) {?>
						   <option value="0">Select City</option>
                          <option value="<?php echo $cities->city; ?>"><?php echo $cities->city; ?></option>
                        <?php }?>
						
                        </select>

                      </div>
                        </div>
                         
                    </div>
                     <div class="row">
                       <div class="col-6">
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
                       <div class="col-6">
                      <div class="form-group">
                        <label for="name">Pincode</label>
                        <input type="text" id="pincode" name="addr_pincode" maxlength="6" class="form-control error" aria-required="true" onblur="checkPincode()">
                        <div class='validation' style='color:red;margin-bottom: 20px;display:none'>Pincode  Should be 6 Digits Numbers Only</div>
                         @if ($errors->has('addr_pincode'))

                        <span class="text-danger">{{ $errors->first('addr_pincode') }}</span>
                        @endif
                      </div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-6">
                          <div class="form-group">
                          <label for="name">Office Tel.Phone</label>
                        <input type="text" id="office_tele_phone" name="office_tele_phone" maxlength="12" class="form-control error" aria-required="true">
                        </div>                    
                        </div>
                    </div>
                      </div>
                     <div class="card-body">
                     <div class="card-header">
                      <div class="card-title">Way to Office Details </div>
                    </div>
					<br><br><br>
                     <div class="row">
                       <div class="col-6">
                      <div class="form-group">
                        <label for="name">Near By Highway</label>
                        <input type="text" id="near_by_highway" name="near_by_highway" class="form-control error" aria-required="true" style="text-transform: uppercase">
                     </div>
                        </div>
                        <div class="col-3">
                        <div class="form-group">
                        <label for="name">Distance From Highway</label>
                    <input type="text" id="distance_from_highway" name="distance_from_highway" class="form-control error" aria-required="true" value="0.0">
                        </div>                   
                        </div>
                        <div class="col-3">
                        <div class="form-group">
                        <label for="name">Distance From Highway Unit</label>
                    <select id="distance_from_highway_unit" name="distance_from_highway_unit" class="form-control" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                           <option value="KM" selected="">KM</option>
                        </select>
                        </div>                   
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-6">
                        <div class="form-group">
                        <label for="name">Safexpress Connectivity Route</label>
                        <input type="text" id="safexpress_connectivity_route" name="safexpress_connectivity_route" class="form-control error" aria-required="true"  style="text-transform: uppercase">
                    </div>
                        </div>
                        <div class="col-6">
                       <div class="form-group">
                        <label for="name">Property Location(Direction)</label>
                        <input type="text" id="property_location_direction" name="property_location_direction" class="form-control error" aria-required="true" style="text-transform: uppercase">
                   </div>                 
                        </div>
                    </div>   
                     <div class="row">
                       <div class="col-6">
                         <div class="form-group">
                        <label for="name">Nearest Airport</label>
                        <input type="text" id="nearest_airport" name="nearest_airport" class="form-control error" aria-required="true" style="text-transform: uppercase">
                     </div>
                        </div>
                        <div class="col-6">
                      <div class="form-group">
                        <label for="name">Nearest Railway Station</label>
                        <input type="text" id="nearest_railway_station" name="nearest_railway_station" class="form-control error" aria-required="true" style="text-transform: uppercase">
                    </div>              
                        </div>
                    </div> 
                       </div>
                      <div class="card-body">
                        <div class="card-header">
                      <div class="card-title">Measurement & Flooring Details </div>
                    </div>
                       <div class="row">
                         <div class="col-4">
                        <div class="form-group">
                       <label for="name">Length (with decimal point)</label>
                    <input type="text" id="length" name="length"  class="form-control error" aria-required="true" value="0.0" onBlur="convertIntoDouble(this);">
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Length Unit</label>
                    <select id="length_unit" name="length_unit" class="form-control" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" selected="">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                        </select>
                        </div>                   
                        </div>
                       <div class="col-4">
                        <div class="form-group">
                       <label for="name">Height (with decimal point)</label>
                        <input type="text" id="height" name="height" maxlength="10" class="form-control error" aria-required="true" value="0.0" onblur="checkValue()">
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Height Unit</label>
                    <select id="height_unit" name="height_unit" class="form-control" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" selected="">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                        </select>
                        </div>                   
                        </div>
                    </div> 
                     <div class="row">
                         <div class="col-4">
                        <div class="form-group">
                       <label for="name">Breadth (with decimal point)</label>
                        <input type="text" id="breadth" name="breadth"  class="form-control error" aria-required="true" value="0.0" onBlur="convertIntoDoubleBreadth(this)">
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Breadth Unit</label>
                    <select name="breadth_unit" id="breadth_unit" class="form-control" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" selected="">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                        </select>
                        </div>                   
                        </div>

                        <div class="col-4">
                        <div class="form-group">
                       <label for="name">Platform Height (with decimal point)</label>
                      <input type="text" id="platform_height" name="platform_height"  maxlength="10" class="form-control error" aria-required="true" value="0.0">
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Platform Height Unit</label>
                    <select name="platform_height_unit" class="form-control" aria-required="true">
                          <option value="0">Select</option>
                          <option value="Feet" selected="">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                        </select>
                        </div>                   
                        </div>

                    </div> 
                  
                  <div class="row">
                         <div class="col-4">
                        <div class="form-group">
                       <label for="name">Total</label>
                        <input type="text" id="total_length_breadth" name="total_length_breadth" class="form-control error" aria-required="true" value="0.0">
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Total Unit</label>
                    <select name="total_length_breadth_unit" id="total_length_breadth_unit" class="form-control" aria-required="true" readonly>
                           <option value="0">Select</option>
                          <option value="Sq.Feet" selected="">Sq.Feet</option>
                          <option value="Sq.Inch">Sq.Inch</option>
                          <option value="Sq.Meter">Sq.Meter</option>
                        </select>
                        </div>                   
                        </div>

                    </div> 
                     <div class="row">
                       <div class="col-6">
                        <div class="form-group"> 
                            <label for="name">Flooring Type</label>
                          <select name="flooring_type" class="form-control required error" aria-required="true" style="text-transform: uppercase">
                           <option value="0">Select Flooring Type</option>
                           <option value="Kota stone">Kota stone</option>
                          <option value="Plain Cemented">Plain Cemented</option>
                          <option value="Trimix Floor">Trimix Floor</option>
                          <option value="RCC Flooring">RCC Flooring</option>
                        </select>
                      </div>     
                        </div>
                         <div class="col-4">
                      <div class="form-group">
                        <label for="name">Front Road Breadth</label>
                      <input type="text" id="front_road_breadth" name="front_road_breadth" maxlength="10" class="form-control error" aria-required="true" value="0.0">
                       </div>
                      </div>
                      <div class="col-2">
                        <div class="form-group"> 
                           <label for="name">Unit</label>
                          <select name="front_road_breadth_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" selected="">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                        </select>
                      </div>              
                        </div>
                      
                    </div> 

                    <div class="row">
                        <div class="col-6">
                       <div class="form-group">
                        <label for="name">Operational Hours</label>
                         <select  id="operational_hours" name="operational_hours" class="form-control error" aria-required="true">
                              <option value="3 Hrs.">3 Hrs.</option>
                              <option value="4 Hrs.">4 Hrs.</option>
                              <option value="5 Hrs.">5 Hrs.</option>
                              <option value="6 Hrs.">6 Hrs.</option>
                              <option value="7 Hrs.">7 Hrs.</option>
                              <option value="8 Hrs.">8 Hrs.</option>
                              <option value="9 Hrs.">9 Hrs.</option>
                              <option value="10 Hrs.">10 Hrs.</option>
                              <option value="11 Hrs.">11 Hrs.</option>
                              <option value="12 Hrs.">12 Hrs.</option>
                              <option value="13 Hrs.">13 Hrs.</option>
                              <option value="14 Hrs.">14 Hrs.</option>
                              <option value="15 Hrs.">15 Hrs.</option>
                              <option value="16 Hrs.">16 Hrs.</option>
                              <option value="17 Hrs.">17 Hrs.</option>
                              <option value="18 Hrs.">18 Hrs.</option> 
                              <option value="19 Hrs.">19 Hrs.</option> 
                              <option value="20 Hrs.">20 Hrs.</option> 
                              <option value="21 Hrs.">21 Hrs.</option> 
                              <option value="22 Hrs.">22 Hrs.</option> 
                              <option value="23 Hrs.">23 Hrs.</option> 
                              <option value="24 Hrs.">24 Hrs.</option> 
                            
                          </select>
                </div>             
                        </div>
                       <div class="col-4">
                       <div class="form-group">
                        <label for="name">Timings From</label>
                      
                        <select  id="operational_timing_from" name="operational_timing_from" class="form-control error" aria-required="true">
                              <option value="00:00">12.00 AM</option>
                              <option value="00:30">12.30 AM</option>
                              <option value="01:00">01.00 AM</option>
                              <option value="01:30">01.30 AM</option>
                              <option value="02:00">02.00 AM</option>
                              <option value="02:30">02.30 AM</option>
                              <option value="03:00">03.00 AM</option>
                              <option value="03:30">03.30 AM</option>
                              <option value="04:00">04.00 AM</option>
                              <option value="04:30">04.30 AM</option>
                              <option value="05:00">05.00 AM</option>
                              <option value="05:30">05.30 AM</option>
                              <option value="06:00">06.00 AM</option>
                              <option value="06:30">06.30 AM</option>
                              <option value="07:00">07.00 AM</option>
                              <option value="07:30">07.30 AM</option>
                              <option value="08:00">08.00 AM</option>
                              <option value="08:30">08.30 AM</option>
                              <option value="09:00">09.00 AM</option>
                              <option value="09:30">09.30 AM</option>
                              <option value="10:00">10.00 AM</option>
                              <option value="10:30">10.30 AM</option>
                              <option value="11:00">11.00 AM</option>
                              <option value="11:30">11.30 AM</option>
                              <option value="12:00">12.00 PM</option>
                              <option value="12:30">12.30 PM</option>
                              <option value="13:00">01.00 PM</option>
                              <option value="13:30">01.30 PM</option>
                              <option value="14:00">02.00 PM</option>
                              <option value="14:30">02.30 PM</option>
                              <option value="15:00">03.00 PM</option>
                              <option value="15:30">03.30 PM</option>
                              <option value="16:00">04.00 PM</option>
                              <option value="16:30">04.30 PM</option>
                              <option value="17:00">05.00 PM</option>
                              <option value="17:30">05.30 PM</option>
                              <option value="18:00">06.00 PM</option>
                              <option value="18:30">06.30 PM</option>
                              <option value="19:00">07.00 PM</option>
                              <option value="19:30">07.30 PM</option>
                              <option value="20:00">08.00 PM</option>
                              <option value="20:30">08.30 PM</option>
                              <option value="21:00">09.00 PM</option>
                              <option value="21:30">09.30 PM</option>
                              <option value="22:00">10.00 PM</option>
                              <option value="22:30">10.30 PM</option>
                              <option value="23:00">11.00 PM</option>
                              <option value="23:30">11.30 PM</option>
                          </select>
                      </div>
                        </div>
                        <div class="col-2">
                       <div class="form-group">
                        <label for="name">Timings To</label>
                    <select  id="operational_timing_to" name="operational_timing_to" class="form-control error" aria-required="true">
                              <option value="00:00">12.00 AM</option>
                              <option value="00:30">12.30 AM</option>
                              <option value="01:00">01.00 AM</option>
                              <option value="01:30">01.30 AM</option>
                              <option value="02:00">02.00 AM</option>
                              <option value="02:30">02.30 AM</option>
                              <option value="03:00">03.00 AM</option>
                              <option value="03:30">03.30 AM</option>
                              <option value="04:00">04.00 AM</option>
                              <option value="04:30">04.30 AM</option>
                              <option value="05:00">05.00 AM</option>
                              <option value="05:30">05.30 AM</option>
                              <option value="06:00">06.00 AM</option>
                              <option value="06:30">06.30 AM</option>
                              <option value="07:00">07.00 AM</option>
                              <option value="07:30">07.30 AM</option>
                              <option value="08:00">08.00 AM</option>
                              <option value="08:30">08.30 AM</option>
                              <option value="09:00">09.00 AM</option>
                              <option value="09:30">09.30 AM</option>
                              <option value="10:00">10.00 AM</option>
                              <option value="10:30">10.30 AM</option>
                              <option value="11:00">11.00 AM</option>
                              <option value="11:30">11.30 AM</option>
                              <option value="12:00">12.00 PM</option>
                              <option value="12:30">12.30 PM</option>
                              <option value="13:00">01.00 PM</option>
                              <option value="13:30">01.30 PM</option>
                              <option value="14:00">02.00 PM</option>
                              <option value="14:30">02.30 PM</option>
                              <option value="15:00">03.00 PM</option>
                              <option value="15:30">03.30 PM</option>
                              <option value="16:00">04.00 PM</option>
                              <option value="16:30">04.30 PM</option>
                              <option value="17:00">05.00 PM</option>
                              <option value="17:30">05.30 PM</option>
                              <option value="18:00">06.00 PM</option>
                              <option value="18:30">06.30 PM</option>
                              <option value="19:00">07.00 PM</option>
                              <option value="19:30">07.30 PM</option>
                              <option value="20:00">08.00 PM</option>
                              <option value="20:30">08.30 PM</option>
                              <option value="21:00">09.00 PM</option>
                              <option value="21:30">09.30 PM</option>
                              <option value="22:00">10.00 PM</option>
                              <option value="22:30">10.30 PM</option>
                              <option value="23:00">11.00 PM</option>
                              <option value="23:30">11.30 PM</option>
                          </select>
                    </div>
                        </div>
                    </div>    
                 

                       </div> 
                        <div class="card-body">
                       
                        <div class="card-header">
                      <div class="card-title">Connectivity & Surroundings Details </div>
                    </div>
                     <br>
                      <div class="row">
                       <div class="col-4">
                      <div class="form-group">
                        <label for="name">Connectivty Telephone</label>
                          <select name="connectivity_telephone" id="connectivity_telephone" class="form-control error" aria-required="true" style="text-transform: uppercase">
                           <option value="Yes" selected="">Yes</option>
                          <option value="No">No</option>
                        </select>
                    </div>
                        </div>
                        <div class="col-4">
                      <div class="form-group">
                        <label for="name">Connectivty Mobile</label>
                        <select name="connectivity_mobile" id="connectivity_mobile" class="form-control error" aria-required="true" style="text-transform: uppercase">
                           <option value="Airtel" selected="">Airtel</option>
                           <option value="BSNL" >BSNL</option>
                            <option value="Idea">Idea</option>
                            <option value="Jio">Jio</option>
                          <option value="MTNL">MTNL</option>
                          <option value="Vodafone">Vodafone</option>
                      
                        </select>
                    </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                        <label for="name">Internet service Provider</label>
                        <input type="text" id="internet_service_provider" name="internet_service_provider" class="form-control error" aria-required="true" style="text-transform: uppercase">
                    </div>
                        </div>
                       
                    </div>   
                    <br> 
                     <div class="card-sub-title">Surroundings Details </div>
                      <br> 
                      <div class="row">
                        <div class="col-3">
                        <div class="form-group">
                        <label for="name">Front</label>
                        <input type="text" id="surrounding_front" name="surrounding_front" maxlength="100" class="form-control error" aria-required="true" style="text-transform: uppercase">
                     </div>
                        </div>

                        <div class="col-3">
                       <div class="form-group">
                        <label for="name">Back</label>
                        <input type="text" id="surrounding_back" name="surrounding_back" maxlength="100" class="form-control error" aria-required="true" style="text-transform: uppercase">
                 </div>       
                        </div>
                          <div class="col-3">
                        <div class="form-group">
                        <label for="name">Left</label>
                        <input type="text" id="surrounding_left" name="surrounding_left" maxlength="100" class="form-control error" aria-required="true" style="text-transform: uppercase">
                       </div>
                        </div>
                        <div class="col-3">
                       <div class="form-group">
                        <label for="name">Right</label>
                        <input type="text" id="surrounding_right" name="surrounding_right" maxlength="100" class="form-control error" aria-required="true" style="text-transform: uppercase">
                   </div>      
                        </div>
                    </div>    
                   <div class="card-sub-title">Competitors Details </div>
                    <br> 
                          <div class="row">
                       <div class="col-4">
                        <div class="form-group">
                        <label for="name">Near By Competitors1</label>
                        <input type="text" id="near_by_competitors1" name="near_by_competitors1" maxlength="100" class="form-control error" aria-required="true" style="text-transform: uppercase">
                        </div>
                        </div>
                       <div class="col-4">
                          <div class="form-group">
                        <label for="name">Distance (with decimal point)</label>
                        <input type="text" id="near_by_competitors1_dis" name="near_by_competitors1_dis"  class="form-control error" aria-required="true" value="0.0">
                      </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Distance Unit</label>
                         <select name="near_by_competitors1_dis_unit" id="near_by_competitors1_dis_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                          <option value="KM" selected="">KM</option>
                        </select>
                     </div>     
                        </div>
						</div>
                       <br> 
					   <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                        <label for="name">Near By Competitors2 </label>
                        <input type="text" id="near_by_competitors2" name="near_by_competitors2" maxlength="100" class="form-control error" aria-required="true" style="text-transform: uppercase">
                        </div>
                        </div>
                       <div class="col-4">
                          <div class="form-group">
                        <label for="name">Distance (with decimal point)</label>
                        <input type="text" id="near_by_competitors2_dis" name="near_by_competitors2_dis"  class="form-control error" aria-required="true" value="0.0">
                      </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                         <label for="name">Distance unit</label>
                        <select name="near_by_competitors2_dis_unit" id="near_by_competitors2_dis_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                          <option value="KM" selected="">KM</option>
                        </select>
                     </div>     
                        </div>

                    </div>  
					
					<br> 
                    <div class="row">
                       <div class="col-4">
                        <div class="form-group">
                        <label for="name">Near By Competitors3</label>
                        <input type="text" id="near_by_competitors3" name="near_by_competitors3" maxlength="100" class="form-control error" aria-required="true" style="text-transform: uppercase">
                     </div>
                          </div>
                            <div class="col-4">
                          <div class="form-group">
                        <label for="name">Distance (with decimal point)</label>
                        <input type="text" id="near_by_competitors3_dis" name="near_by_competitors3_dis"  class="form-control error" aria-required="true" value="0.0">
                      </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="name">Distance unit</label>
                        <select name="near_by_competitors3_dis_unit" id="near_by_competitors3_dis_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                          <option value="KM" selected="">KM</option>
                        </select>
                     </div>     
                        </div>
                    </div> 
                     <br>  
                     <div class="card-sub-title">Nearest Bank Details </div>
                      <br> 
                      <div class="row">
                       <div class="col-3">
                       <div class="form-group">
                        <label for="name">Axis Bank nearest branch</label>
                        <input type="text" id="office_to_axis_bank" name="office_to_axis_bank"  class="form-control error" aria-required="true" style="text-transform: uppercase">
                     </div>
                        </div>
                          <div class="col-3">
                          <div class="form-group">
                        <label for="name">Distance (Office To Axis Bank)</label>
                        <input type="text" id="office_to_axis_bank_distance" name="office_to_axis_bank_distance"  class="form-control error" aria-required="true" value="0.0">
                      </div>
                        </div>
                          <div class="col-2">
                          <div class="form-group">
                        <label for="name">Distance Unit</label>
                         <select id="office_to_axis_bank_distance_unit" name="office_to_axis_bank_distance_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                          <option value="KM" selected="">KM</option>
                        </select>
                      </div>
                        </div>
                      
                    </div>    
                    <br> 
                    <div class="row">
                        <div class="col-3">
                         <div class="form-group">
                        <label for="name">Neartest Bank Other Than Axis</label>
                        <input type="text" id="nearest_bank_other_than_axis" name="nearest_bank_other_than_axis" maxlength="100" class="form-control error" aria-required="true" style="text-transform: uppercase">
                       </div>  
                        </div>
                       <div class="col-3">
                      <div class="form-group">
                        <label for="name">Nearest ATM</label>
                        <input type="text" id="nearest_atm" name="nearest_atm" class="form-control error" maxlength="100" aria-required="true" style="text-transform: uppercase">
                     </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                        <label for="name">Distance From Office to ATM</label>
                        <input type="text" id="distance_from_office_to_atm" name="distance_from_office_to_atm"  class="form-control error" aria-required="true">
                       </div> 
                        </div>
                          <div class="col-3">
                          <div class="form-group">
                        <label for="name">Distance Unit</label>
                          <select id="distance_from_office_to_atm_unit" name="distance_from_office_to_atm_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option>
                          <option value="KM" selected="">KM</option>
                        </select>
                      </div>
                        </div>
                    </div>    
                      <br> 
           
                      

                       </div> 
                        <div class="card-body">
                        <div class="card-header">
                      <div class="card-title">Rental Details </div>
                    </div>
                     <br>
                    
                         <div class="row">
                                 <div class="col-6">
                       <div class="form-group">
                        <label for="name">Enter No Of Owner</label>
                       <!-- <input type="text" id="no_of_owner" name="no_of_owner" class="form-control error"  aria-required="true">-->
							
							<select name="no_of_owner" id="no_of_owner" class="form-control error" aria-required="true">
                           <option value="0">Select No Of Owners </option>
                           <option value="1">1</option>
                           <option value="2">2</option>
            						   <option value="3">3</option>
            						   <option value="4">4</option>
            						   <option value="5">5</option>
            						   <option value="6">6</option>
            						   <option value="7">7</option>
            						   <option value="8">8</option>
            						   <option value="9">9</option>
            						   <option value="10">10</option>
            					      </select>                    
							
							     @if ($errors->has('no_of_owner'))
                        <span class="text-danger">{{ $errors->first('no_of_owner') }}</span>
                       
                        @endif
							
                       </div> 
                        </div>

                       <div class="col-6">
                      <div class="form-group">
                        <label for="name">Total Refundable Security Deposits</label>
                        <input type="text" id="total_refundable_security_deposits" name="total_refundable_security_deposits" maxlength="10" class="form-control error" aria-required="true" value="0.0">
                          @if ($errors->has('total_refundable_security_deposits'))
                        <span class="text-danger">{{ $errors->first('total_refundable_security_deposits') }}</span>
                       
                        @endif

                    </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Total Advances</label>
                        <input type="text" id="total_advances" name="total_advances" class="form-control  error" maxlength="10" aria-required="true" value="0.0">
                          @if ($errors->has('total_advances'))
                        <span class="text-danger">{{ $errors->first('total_advances') }}</span>
                       
                        @endif
                        </div> 
                        </div>
                    </div>  
                        <br> 
                       <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Total Month Rent</label>
                        <input type="text" id="total_month_rent" name="total_month_rent" class="form-control  error" maxlength="10" aria-required="true">
                          @if ($errors->has('total_month_rent'))
                        <span class="text-danger">{{ $errors->first('total_month_rent') }}</span>
                       
                        @endif
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Total Advance Deduction</label>
                        <input type="text" id="total_advance_deduction" name="total_advance_deduction" class="form-control error" aria-required="true"value="0.0">
                          @if ($errors->has('total_advance_deduction'))
                        <span class="text-danger">{{ $errors->first('total_advance_deduction') }}</span>
                       
                        @endif
                        </div>
                        </div>
                    </div> 

                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Agreement Period Start Date</label>
                        <input type="date" id="agreement_period_start" name="agreement_period_start" class="form-control  error" aria-required="true">
                          @if ($errors->has('agreement_period_start'))
                        <span class="text-danger">{{ $errors->first('agreement_period_start') }}</span>
                       
                        @endif
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Agreement Period End Date</label>
                        <input type="date" id="agreement_period_end" name="agreement_period_end" class="form-control error" aria-required="true" onBlur="checkAgreementPeriod()">
                          @if ($errors->has('agreement_period_end'))
                        <span class="text-danger">{{ $errors->first('agreement_period_end') }}</span>
                       
                        @endif
                        </div>
                        </div>
                    </div>   

                   
                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Notice Period</label>
                         <select name="notice_period" id="notice_period" class="form-control error" aria-required="true">
                           <option value="0 Month">0 Month </option>
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
                        
                        </select>
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Newly Constructed For Us</label>
                        <select id="newly_constructed_for_us" name="newly_constructed_for_us" class="form-control error"  style="text-transform: uppercase">
                          <option value="Yes">Yes</option>
                           <option value="No">No</option>
                        </select>
                        </div>
                        </div>
                    </div> 

                    <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Last Tenant</label>
                        <input type="text" id="last_tenant" name="last_tenant" class="form-control error" aria-required="true" style="text-transform: uppercase">
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Advance Deduction W.e.f.</label>
                      <input type="date" id="advance_deduction_wef_date" name="advance_deduction_wef_date" class="form-control error" aria-required="true">
                        </div>
                        </div>
                    </div> 
                     <div class="row">
                       <div class="col-2">
                     <div class="form-group">
                        <label for="name">Enhancement(%)</label>
                        <input type="text" id="enhancement_clause" name="enhancement_clause" class="form-control error"  aria-required="true">
                      </div>
                        </div>
                        <div class="col-2">
                     <div class="form-group">
                        <label for="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year</label>
                        <select id="enhancement_clause_year" name="enhancement_clause_year" class="form-control error"  aria-required="true">
                        <?php 
                        //$cur_year = date('Y');
                        for ($i=0; $i<=99; $i++) 
                        {?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php }
                        ?>
                      </select>
                      </div>
                        </div>
                        <div class="col-2">
                         <div class="form-group">
                         <label for="name">Month</label>
                          <select id="enhancement_clause_month" name="enhancement_clause_month" class="form-control error"  aria-required="true">
                        <?php 
                       
                        for ($i=0; $i<=11; $i++) 
                        {?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php }
                        ?>
                      </select>
                      </div>
                        </div>
                       <div class="col-3">
                     <div class="form-group">
                        <label for="name">Payment System</label>
                      <select id="payment_system" name="payment_system" class="form-control error"  aria-required="true">
                        <option value="CURRENT MONTH BASIS">CURRENT MONTH BASIS</option>
                         <option value="NEXT MONTH BASIS">NEXT MONTH BASIS</option>
                      </select>

                      </div>
                        
                    </div> 
					  <div class="col-3">
                     <div class="form-group">
                        <label for="name">Payment Method</label>
                      <select id="payment_method" name="payment_method" class="form-control error"  aria-required="true">
                        <option value="EFT">EFT</option>
                         <option value="RTGS">RTGS</option>
						 <option value="CHECK">CHEQUE</option>
						 <option value="CASH">CASH</option>
                      </select>

                      </div>
                        
                    </div> 
                       
                    </div> 
                      <div class="row">
                       <div class="col-3">
                       <div class="form-group">
                        <label for="name">Associate Name</label>
                        <input type="text" id="associate_name" name="associate_name" class="form-control error" maxlength="100" aria-required="true" style="text-transform: uppercase">
                      </div>
                        </div>
                        <div class="col-3">
                         <div class="form-group">
                        <label for="name">Cordinator Name</label>
                        <input type="text" id="cordinator_name" name="cordinator_name" class="form-control error" maxlength="100" aria-required="true" style="text-transform: uppercase">
                      </div>
                        </div>
                         <div class="col-3">
                         <div class="form-group">
                      <label for="name">Approved By</label>
                        <input type="text" id="approved_by" name="approved_by" class="form-control error" maxlength="100" aria-required="true" style="text-transform: uppercase">
                      </div>
                        </div>
                    </div> 

                   
                    <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Upload Photos Of Premises</label>
                   <!--  <input type="file" class="form-control" name="factsheet_premises_photos[]" multiple /> -->
                      <input type="file" class="form-control" name="factsheet_premises_photos[]" multiple/>
                      @if ($errors->has('factsheet_premises_photos'))
                        <span class="text-danger">{{ $errors->first('factsheet_premises_photos') }}</span>
                       
                     @endif
                      </div>
                        </div>
                       
                       
                    </div> 

                    <div class="card-action">
                   <!--    <button class="btn btn-success">Submit</button> -->
                      <input type="submit" class="btn btn-success" value="Submit">
                      <input type="button" class="btn btn-danger" name="cancel" value="Cancel" onClick="window.location='http://164.52.196.61/lrms/public/FactsList';">
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



 @include('layouts.adminLayout.admin_footer')


 <script language="JavaScript">
 
  function checkCurrentDate(){
	    
	var curday = function(sp){
today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //As January is 0.
var yyyy = today.getFullYear();

if(dd<10) dd='0'+dd;
if(mm<10) mm='0'+mm;
//return (mm+sp+dd+sp+yyyy);
return (yyyy+sp+mm+sp+dd);
};

var current_date=curday('-');
//alert(current_date);
      var factsheet_date=document.getElementById('fact_sheet_date').value;
	  //alert(factsheet_date);

if(factsheet_date<current_date){
        swal("Factsheet  date must be Greater than or equal to current date");
        document.getElementById('factsheet_date').value='mm/dd/yyyy';

     }

/*
console.log(curday('/'));
console.log(curday('-'));

//alert(curday('-'));
var current_date=curday('-');
	  
	  
     //var current_date =new Date();
      var factsheet_date=document.getElementById('fact_sheet_date').value;
alert(current_date);
alert(factsheet_date);
 if(factsheet_date<current_date){
        swal("Factsheet  date must be Greater than or equal to current date");
        document.getElementById('factsheet_date').value='mm/dd/yyyy';

     }else{
		 //alert("else");
	 }
*/
   }

  function checkDate(){

   // alert("Occupancy date");
    var factsheet_date=document.getElementById('fact_sheet_date').value;
        var branch_occupancy_date=document.getElementById('branch_occupancy_date').value;

        //alert(factsheet_date);
     
     if(factsheet_date>branch_occupancy_date){
        swal("Occupancy date must be Greater than factsheet date");
        document.getElementById('branch_occupancy_date').value='dd/mm/yyyy';

     }

  }
  function checkAgreementPeriod(){

   // alert("Occupancy date");
    var agreement_period_end=document.getElementById('agreement_period_end').value;
        var agreement_period_start=document.getElementById('agreement_period_start').value;

        //alert(factsheet_date);
     
     if(agreement_period_start>agreement_period_end){
        swal("Agreement End Period date must be Greater than Agreement start Date");
        document.getElementById('agreement_period_end').value='mm/dd/yyyy';

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
  
  function checkPancard()
  {

    var panVal = $('#pan_of_payee').val();
    var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

    if(regpan.test(panVal)){
       // valid pan card number
    } else {
       // invalid pan card number
    }

  }
function checkform ( form )
{


  $("#length").parent().next(".validation").remove(); // remove it
  $("#breadth").parent().next(".validation").remove(); // remove it


    var valid = parseFloat(form.length.value);
        
    if( !valid )
    {
      $("#length").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Length  Should be Floating Value Only</div>");
      form.length.focus();
      return false;
    }
    else
    {
       $("#length").parent().next(".validation").remove(); // remove it
     // return true ;
    }


    var valid_breadth = parseFloat(form.breadth.value);
        
    if( !valid_breadth )
    {
      $("#breadth").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>breadth  Should be Floating Value Only</div>");
      form.breadth.focus();
      return false;
    }
    else
    {
       $("#breadth").parent().next(".validation").remove(); // remove it
      return true ;
    }



}
</script>

  <script type="text/javascript">

   //  $('form').on('submit', function (e) {
   //  var focusSet = false;


   //  var valid = parseFloat(form.txtFloat.value);
        
   //  if( !valid )
   //  {
   //    alert( "Please enter valid float number." );
   //    form.txtFloat.focus();
   //    return false;
   //  }
   //  else
   //    return true ;

   // // To validate Pincode

   // if ($('#pincode').val()!=("^[0-9]+$")){

   //    $("#pincode").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Pin Code Should be Numbers Only</div>");
   //        e.preventDefault(); // prevent form from POST to server
   //      $('#pincode').focus();
   //      focusSet = true;

   //    }
   //    else{
   //      $("#pincode").parent().next(".validation").remove(); // remove it
   //    }


   //  if ($('#office_tele_phone').val()!=("^[0-9]+$")){

   //    $("#office_tele_phone").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Telephone Number Should be Numbers Only</div>");
   //      e.preventDefault(); // prevent form from POST to server
   //      $('#office_tele_phone').focus();
   //      focusSet = true;
   //    }
   //    else{
   //      $("#office_tele_phone").parent().next(".validation").remove(); // remove it
   //    }


   //     if ($('#distance_from_highway').val()!=("^\d{0,2}(\.\d{1,2})?$")){

   //    $("#distance_from_highway").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Distance  Should be Floating Value Only</div>");

   //    e.preventDefault(); // prevent form from POST to server
   //      $('#distance_from_highway').focus();
   //      focusSet = true;

   //    }
   //    else{
   //      $("#distance_from_highway").parent().next(".validation").remove(); // remove it
   //    }

   //    if ($('#length').val()!=("\d+(\.\d{1,2})?")){

   //    $("#length").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Length  Should be Floating Value Only</div>");
   //     e.preventDefault(); // prevent form from POST to server
   //      $('#length').focus();
   //      focusSet = true;
   //    }
   //    else{
   //      $("#length").parent().next(".validation").remove(); // remove it
   //    }

    
   //   if ($('#breadth').val()!=("\d+(\.\d{1,2})?")){
   //    $("#breadth").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Breadth  Should be Floating Value Only</div>");
   //      e.preventDefault(); // prevent form from POST to server
   //      $('#breadth').focus();
   //      focusSet = true;
   //    }
   //    else{
   //      $("#breadth").parent().next(".validation").remove(); // remove it
   //    }

   //    if ($('#total_length_breadth').val()!=("^\d{0,2}(\.\d{1,2})?$")){

   //    $("#total_length_breadth").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Total Length * Breadth  Should be Floating Value Only</div>");
   //     e.preventDefault(); // prevent form from POST to server
   //      $('#total_length_breadth').focus();
   //      focusSet = true;
   //    }
   //    else{
   //      $("#total_length_breadth").parent().next(".validation").remove(); // remove it
   //    }
   
   //    if ($('#height').val()!=("^\d{0,2}(\.\d{1,2})?$")){

   //    $("#height").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Height  Should be Floating Value Only</div>");
   //      e.preventDefault(); // prevent form from POST to server
   //      $('#height').focus();
   //      focusSet = true;
   //    }
   //    else{
   //      $("#height").parent().next(".validation").remove(); // remove it
   //    }


   //    if ($('#platform_height').val()!=("^\d{0,2}(\.\d{1,2})?$")){

   //    $("#platform_height").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Platform Height  Should be Floating Value Only</div>");
   //     e.preventDefault(); // prevent form from POST to server
   //      $('#platform_height').focus();
   //      focusSet = true;
   //    }
   //    else{
   //      $("#platform_height").parent().next(".validation").remove(); // remove it
   //    }

/*
       if ($('#connectivity_mobile').val()!=("^[0-9]+$")){

      $("#connectivity_mobile").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Connectivity Phone Number Should be Numbers Only</div>");
      e.preventDefault(); // prevent form from POST to server
        $('#connectivity_mobile').focus();
        focusSet = true;
      }
      else{
        $("#connectivity_mobile").parent().next(".validation").remove(); // remove it
      }
*/
/*
    if (!$('#address1').val()) {
        if ($("#address1").parent().next(".validation").length == 0) // only add if not added
        {
            $("#address1").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter email address</div>");
        }
        e.preventDefault(); // prevent form from POST to server
        $('#address1').focus();
        focusSet = true;
    } else {
        $("#address1").parent().next(".validation").remove(); // remove it
    }

    if (!$('#address2').val()) {
        if ($("#address2").parent().next(".validation").length == 0) // only add if not added
        {
            $("#address2").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Please enter password</div>");
        }
        e.preventDefault(); // prevent form from POST to server
        if (!focusSet) {
            $("#address2").focus();
        }
    } else {
        $("#address2").parent().next(".validation").remove(); // remove it
    }
*/
    
    //////////////

    // if(focusSet = false){

    // $.ajax({
    //   url: "{{ url('/saveFactData')}}",
    //   method: 'post',
    //   data: $('#factSheetForm').serialize(),
    //   success: function(response){

    //     console.log(response);

    //    return false;
    //    // window.location = "http://lrms-safexpress.com/lrms/public/createFactSheetPart2";
        
    //   }});

    // }

   
    /////////


//});  

    /*
function validateForm() {



  var pincode = document.forms["factSheetForm"]["addr_pincode"].value;
  

var pat1=/^\d{6}$/;
var pattern=/^\d{10}$/;

 if(!pat1.test(pincode.value))
{
alert("Pin code should be 6 digits ");
pin_code.focus();
return false;
}


}*/

  $("select[name='region_code']").change(function(){
      var region_code = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ url('/getFactSheetCode')}}",
          method: 'POST',
          data: {region_code:region_code, _token:token},
          success: function(data) {
          
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
        
             var arraydata = JSON.parse(data);

              //reading data using index
              var branch_location = arraydata[0]["branch_name"];
              var branch_type = arraydata[0]["branch_type"];
              var branch_id = arraydata[0]["branch_id"];
              $("input[name='branch_location'").val(branch_location);
              $("input[name='branch_type'").val(branch_type);
              $("input[name='branch_id'").val(branch_id);

            
          }
      });
  });


  
</script>
 <script>
 function convertIntoDoubleBreadth(item){
console.log(item.value);
	//alert(item.toFixed(2));
	var k=(Math.round((item.value)*100)/100).toFixed(1);
	//alert(k);
	console.log(k);
	item.value = k;
	
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

                     var substr_total_length = the_total_length.split('.');
                     var substr_total_breadth = the_total_breadth.split('.');
                     var length_left= substr_total_length[0]*12;
                     var length_left_inch= parseInt(length_left) + parseInt(substr_total_length[1]);
                     var breadth_left= substr_total_breadth[0]*12;
                     var breadth_left_inch= parseInt(breadth_left) + parseInt(substr_total_breadth[1]);
                     var total_length_breadth=length_left_inch * breadth_left_inch;
                    
                     var total_in_feet=total_length_breadth / 144;

                     var total=total_in_feet.toFixed(2)

                   }

                   $("#total_length_breadth").val(total);
				   
				   

	return item.value;	
	
 }
 function convertIntoDouble(item){
	//alert(item.value);
	console.log(item.value);
	//alert(item.toFixed(2));
	var k=(Math.round((item.value)*100)/100).toFixed(1);
	//alert(k);
	console.log(k);
	item.value = k;
	
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

                     var substr_total_length = the_total_length.split('.');
                     var substr_total_breadth = the_total_breadth.split('.');
                     var length_left= substr_total_length[0]*12;
                     var length_left_inch= parseInt(length_left) + parseInt(substr_total_length[1]);
                     var breadth_left= substr_total_breadth[0]*12;
                     var breadth_left_inch= parseInt(breadth_left) + parseInt(substr_total_breadth[1]);
                     var total_length_breadth=length_left_inch * breadth_left_inch;
                    
                     var total_in_feet=total_length_breadth / 144;

                     var total=total_in_feet.toFixed(2)
					 
					 $("#total_length_breadth").val(total);


                   }

				   
	//$("input[name='total_length_breadth'").val(0.00);
	return item.value;
	

	
}
  $(document).ready(function() {

/*
  function checkValue() 
  {

               var the_total_length = $("#length").val();
                var the_total_breadth = $("#breadth").val();
                var total = the_total_length * the_total_breadth;



                var inch=0;
                var length_unit = $("#length_unit").val();
                var breadth_unit = $("#breadth_unit").val();
      
                  if (length_unit =='Feet') 
                  {

                     var substr_total_length = the_total_length.split('.');
                     var substr_total_breadth = the_total_breadth.split('.');
                     var length_left= substr_total_length[0]*12;
                     var length_left_inch= parseInt(length_left) + parseInt(substr_total_length[1]);
                     var breadth_left= substr_total_breadth[0]*12;
                     var breadth_left_inch= parseInt(breadth_left) + parseInt(substr_total_breadth[1]);
                     var total_length_breadth=length_left_inch * breadth_left_inch;
                    
                     var total_in_feet=total_length_breadth / 144;

                     var total=total_in_feet.toFixed(2)

                   }

                   $("#total_length_breadth").val(total);


   }
   */

            $('#breadth').keyup(function(ev) 
            {

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

                     var substr_total_length = the_total_length.split('.');
                     var substr_total_breadth = the_total_breadth.split('.');
                     var length_left= substr_total_length[0]*12;
                     var length_left_inch= parseInt(length_left) + parseInt(substr_total_length[1]);
                     var breadth_left= substr_total_breadth[0]*12;
                     var breadth_left_inch= parseInt(breadth_left) + parseInt(substr_total_breadth[1]);
                     var total_length_breadth=length_left_inch * breadth_left_inch;
                    
                     var total_in_feet=total_length_breadth / 144;

                     var total=total_in_feet.toFixed(2)

                   }

                   $("#total_length_breadth").val(total);

             });

            
             $('#length').keyup(function(ev) 
             {


                  var the_total_length = $("#length").val();
                 // var length_unit = $("#length_unit").val();
                  var the_total_breadth = $("#breadth").val();
                 // var breadth_unit = $("#breadth_unit").val();
                  var total = the_total_length * the_total_breadth;

                   var inch=0;
                   var length_unit = $("#length_unit").val();
                   var breadth_unit = $("#breadth_unit").val();

                    if (length_unit =='Feet') 
                    {

                       var substr_total_length = the_total_length.split('.');
                       var substr_total_breadth = the_total_breadth.split('.');
                       var length_left= substr_total_length[0]*12;
                       var length_left_inch= parseInt(length_left) + parseInt(substr_total_length[1]);
                       var breadth_left= substr_total_breadth[0]*12;
                       var breadth_left_inch= parseInt(breadth_left) + parseInt(substr_total_breadth[1]);
                       var total_length_breadth=length_left_inch * breadth_left_inch;
                       var total_in_feet=total_length_breadth / 144;
                       var total=total_in_feet.toFixed(2)

                      $("#total_length_breadth").val(total);

                     }

               });

             

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
    <!------jquery validation start here-------->
    
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script>
   /*$(document).ready(function () {
	   btn-danger
   }*/
   
    $(document).ready(function () {
    $('#create_form').validate({ // initialize the plugin
        rules: {
            //fact_sheet_date: {
               // required: true
           // },
           // branch_occupancy_date: {
              //  required: true
            //},
            address1: {
                required: true
            },
            addr_pincode: {
                required: true
            },
            total_refundable_security_deposits: {
                required: true
            },
            total_advances: {
                required: true
                //email: true
            },
             total_month_rent: {
                required: true
                //email: true
            },
             total_advance_deduction: {
                required: true
                //email: true
            },
             agreement_period_start: {
                required: true
                //email: true
            },
             agreement_period_end: {
                required: true
                //email: true
            },
             total_advance_deduction: {
                required: true
                //email: true
            },
           
           
           
            
            
        }
    });
});
</script>