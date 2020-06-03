@include('layouts.adminLayout.admin_header')

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
						<li class="nav-item submenu active">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Fact Sheet</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/createFactSheet')}}">
											<span class="sub-item">Create Fact Sheet</span>
										</a>
									</li>
									<li class="active">
										<a href="{{ url('/FactsList')}}">
											<span class="sub-item">Fact Sheet List  </span>
										</a>
									</li>
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
									
								</ul>
							</div>
						</li>
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
						
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		
        <!-- End Sidebar -->
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
    color: #575962;
    line-height: 145%;
    font-size: 1.2em;
    background-color: #dee2e6 !important;
}





      </style>

    <div class="main-panel">

      <div class="content">

           <form method="POST" action="">
                        @csrf
                      
        <div class="page-inner" id="printableArea">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Fact Sheet</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{action('FactSheetController@viewnew', $factSheet->id)}}">Attachement</a>
                  
                </li>
                <li class="nav-item">
                  <a class="btn btn-success btn-sm pull-right " href="{{url('FactsList')}}"  style="margin-left: 770px;">Back</a>
                  
                </li>
                </ul>
            </div>
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                  aria-labelledby="home-tab">
				  
<?php 
//echo"<pre>";
//print_r($factSheet); ?>

                  <div class="card">
                    <div class="card-header">
                      <div class="card-title">Branch Details     <input type="button"  class="noprint" id ="printbtn" onclick="printDiv('printableArea')" value="Print" style="float: right;padding: 4px;"/></div>

                      
                    </div>

                    <div class="card-body">

                          <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                        @php
                       $table='dst_region_masters';
                        $field='region_code';
                        $value=$factSheet->region_code;

                      $regionData=getRecordById($table,$field,$value);
                        
                       
                    @endphp

                     <label for="inlineinput">Region List</label> : {{ $factSheet->region_code }} ( <?php echo $regionData->name ?>)
             

                   </div>
                      

                        </div>
                          <div class="col-6">
                           <div class="form-group">

                           <label for="inlineinput">FactSheet Code</label> : {{ $factSheet->factsheet_code }}
                           
                           </div>

                          </div>
                      </div>

                      <div class="row">
                       <div class="col-6">
                            
                        <div class="form-group">

                       <label for="inlineinput">Branch Code</label> : {{ $factSheet->branch_code }}
                       
                       </div>
                       
                        </div>
                          <div class="col-3">
                            
                         <div class="form-group">

                        <label for="name">Branch Type</label> : {{ $factSheet->branch_type }}


                       </div>
                                         
                        </div>
						<div class="col-3">
                         
                           <div class="form-group">
                  
                            <label for="inlineinput">Branch Area</label> : {{ $factSheet->branch_area }}
                          </div> 
                        </div>


                    </div>

                      <div class="row">
                      
                        <div class="col-6">
                         
                           <div class="form-group">
                  
                            <label for="inlineinput">Branch location</label> : {{ $factSheet->branch_location }}
                          </div> 
                        </div>
						

                           <div class="col-6"> 

                          <div class="form-group">
                         
                                <label for="inlineinput">Fact Sheet Date</label> : {{ $factSheet->fact_sheet_date }}
                          </div>  

                        </div>
                     
                      </div>

                        <div class="row">
                      
                        <div class="col-6">
                         
                          <div class="form-group">

                          <label for="inlineinput">Occupancy Date</label> : {{ $factSheet->branch_occupancy_date }}

                         </div>     

                        </div>
                     
                      </div>
                 
                      </div>
                        <div class="card-body">
                   <div class="card-header">
                      <div class="card-title">Address & Premises Details </div>
                    </div>
                    <br>
                    <div class="row">
                       <div class="col-6">
                         <div class="form-group">
                            <label for="inlineinput">Address1</label> : {{ $factSheet->address1 }}
                       </div>
                        </div>
                          <div class="col-6">
                           <div class="form-group">
                                <label for="inlineinput">Address2</label> : {{ $factSheet->address2 }}
                         </div>                     
                        </div>
                    </div>

                   <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                 
                            <label for="inlineinput">Address3</label> : {{ $factSheet->address3 }}

                      </div>
                        </div>
                          <div class="col-6">
                           <div class="form-group">
                             <label for="inlineinput">City</label> : {{ $factSheet->city }}                        
                          </div>                    
                        </div>
                    </div>
                     <div class="row">
                       <div class="col-6">
                      <div class="form-group">
                           <label for="inlineinput">Pincode</label> : {{ $factSheet->postal_code }}
                      </div>
                        </div>
                          <div class="col-6">
                          <div class="form-group">
                       <label for="inlineinput">Office Tel.Phone</label> : {{ $factSheet->office_tele_no }}
                        </div>                    
                        </div>
                    </div>
                      </div>
                     <div class="card-body">
                     <div class="card-header">
                      <div class="card-title">Way to Office Details </div>
                    </div>
                     <br>
                     <div class="row">
                       <div class="col-4">
                      <div class="form-group">
                        <label for="inlineinput">Near By Highway</label> : {{ $factSheet->near_by_highway }}
                       </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                       <label for="inlineinput">Distance From Highway</label> : {{ $factSheet->dist_from_highway }}
                        </div>                   
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="inlineinput">Distance From Highway Unit</label> : {{ $factSheet->dist_from_highway_unit }}
                        </div>                   
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-4">
                        <div class="form-group">
                       <label for="inlineinput">Safexpress connectivity Route</label> : {{ $factSheet->safex_conectivity_route }}
                      </div>
                        </div>
                        <div class="col-4">
                       <div class="form-group">
                       <label for="inlineinput">Property Location(Direction)</label> : {{ $factSheet->property_location }}
                   </div>                 
                        </div>
                    </div>   
                     <div class="row">
                       <div class="col-4">
                         <div class="form-group">
                        <label for="inlineinput">Nearest Airport</label> : {{ $factSheet->nearest_airport }}
                     </div>
                        </div>
                        <div class="col-4">
                      <div class="form-group">
                         <label for="inlineinput">Nearest Railway Station</label> : {{ $factSheet->nearest_railway_station }}
                    </div>              
                        </div>
                    </div> 
                       </div>
                      <div class="card-body">
                        <div class="card-header">
                      <div class="card-title">Measurement & Flooring Details </div>
                    </div>
                    <!-- {{ $factSheet }} -->
                     <br>
                       <div class="row">
                         <div class="col-3">
                        <div class="form-group">
                          <label for="inlineinput">Length</label> : {{ $factSheet->premises_length }} {{ $factSheet->premises_length_unit }}
                        </div>                   
                        </div>
                        <!-- <div class="col-2">
                        <div class="form-group">
                        <label for="inlineinput">Length Unit</label> : {{ $factSheet->premises_length_unit }}
                        </div>                   
                        </div> -->

                        <div class="col-3">
                        <div class="form-group">
                       <label for="inlineinput">Height</label> : {{ $factSheet->premises_height }} {{ $factSheet->premises_height_unit }}

                        </div>                   
                        </div>
                        <!-- <div class="col-2">
                        <div class="form-group">
                        <label for="inlineinput">Height Unit</label> : {{ $factSheet->premises_height_unit }}
                        </div>                   
                        </div> -->
                        <div class="col-3">
                          <div class="form-group">
                            <label for="inlineinput">Breadth</label> : {{ $factSheet->premises_breadth }} {{ $factSheet->premises_breadth_unit }}
                          </div>                   
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                          <label for="inlineinput">Platform Height</label> : {{ $factSheet->platform_height }}  {{ $factSheet->platform_height_unit }}
    
                          </div>                   
                        </div>
                     </div> 
                     
                     <div class="row">
                         
                        <!-- <div class="col-2">
                        <div class="form-group">

                     <label for="inlineinput">Breadth Unit</label> : {{ $factSheet->premises_breadth_unit }}
      
                        </div>                   
                        </div> -->

                        

                        <!-- <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Platform Height Unit</label> : {{ $factSheet->platform_height_unit }}
                          </div>                   
                        </div> -->

                    </div> 
                  
                  <div class="row">
                        <div class="col-4">
                          <div class="form-group">
                            <label for="inlineinput">Total</label> : {{ $factSheet->premises_area }} {{ $factSheet->premises_area_unit }}
                          </div>                   
                        </div>
                        <!-- <div class="col-2">
                          <div class="form-group">
                              <label for="inlineinput">Total Unit</label> : {{ $factSheet->premises_area_unit }}
                          </div>                   
                        </div> -->

                    </div> 
                     <div class="row">
                       <div class="col-3">
                        <div class="form-group"> 
                       <label for="inlineinput">Flooring Type</label> : {{ $factSheet->flooring_type }}
   
                      </div>     
                        </div>
                         <div class="col-3">
                          <div class="form-group">
                            <label for="inlineinput">Front Road Breadth</label> : {{ $factSheet->front_road_breadth }} {{ $factSheet->front_road_breadth_unit }}
                          </div>
                      </div>
                      <div class="col-3">
                       <div class="form-group">
                       <label for="inlineinput">Operational Hours</label> : {{ $factSheet->operational_hours }}
      
                       </div>             
                        </div>
                      <!-- <div class="col-2">
                        <div class="form-group"> 
                          <label for="inlineinput">Front Road Breadth Unit</label> : {{ $factSheet->front_road_breadth_unit }}
                        </div>              
                      </div> -->
                      
                    </div> 

                    <div class="row">
                        <!-- <div class="col-3">
                       <div class="form-group">
                       <label for="inlineinput">Operational Hours</label> : {{ $factSheet->operational_hours }}
      
                       </div>             
                        </div> -->
                       <div class="col-3">
                       <div class="form-group">
                        <label for="inlineinput">Timings From</label> : {{ $factSheet->operational_timing_from }}
                      
                      </div>
                        </div>
                        <div class="col-3">
                       <div class="form-group">
                      <label for="inlineinput">Timings To</label> : {{ $factSheet->operational_timing_to }}
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
                        <label for="inlineinput">Connectivty Telephone</label> : {{ $factSheet->connectivity_telephone }}
     
                      </div>
                        </div>
                        <div class="col-4">
                      <div class="form-group">
                        <label for="inlineinput">Connectivty Mobile</label> : {{ $factSheet->connectivity_mobile }}
                       </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                          <label for="inlineinput">Internet service Provider</label> : {{ $factSheet->connectivity_isp }}
                       </div>
                        </div>
                       
                    </div>   
                    <br> 
                     <div class="card-sub-title">Surroundings Details </div>
                      <br> 
                      <div class="row">
                        <div class="col-3">
                        <div class="form-group">
                        <label for="inlineinput">Front</label> : {{ $factSheet->surrounding_front }}
                       </div>
                        </div>
                        <div class="col-3">
                       <div class="form-group">
                        <label for="inlineinput">Back</label> : {{ $factSheet->surrounding_back }}
                       </div>       
                        </div>
                          <div class="col-3">
                        <div class="form-group">
                        <label for="inlineinput">Left</label> : {{ $factSheet->surrounding_left }}
                       </div>
                        </div>
                        <div class="col-3">
                       <div class="form-group">
                        <label for="inlineinput">Right</label> : {{ $factSheet->surrounding_right }}
                       </div>      
                        </div>
                    </div>    
                   <div class="card-sub-title">Competitors Details </div>
                    <br> 
                          <div class="row">
                       <div class="col-4">
                        <div class="form-group">
                        <label for="inlineinput">Near By competitors1 : </label>  {{ $factSheet->near_by_competitors1 }}  ({{ $factSheet->near_by_competitors1_dis }} {{ $factSheet->near_by_competitors1_dis_unit }})
                        </div>
                        </div>
                       <!-- <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Distance</label> : {{ $factSheet->near_by_competitors1_dis }}
                          </div>
                        </div> -->
                        <!-- <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Distance unit</label> : {{ $factSheet->near_by_competitors1_dis_unit }}
                          </div>     
                        </div> -->
                       <br> 
                      <div class="col-4">
                        <div class="form-group">
                              <label for="inlineinput">Near By competitors2 : </label>  {{ $factSheet->near_by_competitors2 }}  ({{ $factSheet->near_by_competitors2_dis }} {{ $factSheet->near_by_competitors2_dis_unit }})
                        </div>
                      </div>
                      <div class="col-4">
                          <div class="form-group">
                          <label for="inlineinput">Near By competitors3 : </label>  {{ $factSheet->near_by_competitors3 }}  ({{ $factSheet->near_by_competitors3_dis }} {{ $factSheet->near_by_competitors3_dis_unit }})  
                          </div>
                        </div>
                       <!-- <div class="col-2">
                          <div class="form-group">
                        <label for="inlineinput">Distance</label> : {{ $factSheet->near_by_competitors2_dis }}
                      </div>
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="inlineinput">Distance unit</label> : {{ $factSheet->near_by_competitors2_dis_unit }}
                   
                        </div>     
                        </div> -->

                    </div>  
                     <!-- <br> 
                    <div class="row">
                       <div class="col-2">
                          <div class="form-group">
                          <label for="inlineinput">Near By competitors3</label> : {{ $factSheet->near_by_competitors3 }} {{ $factSheet->near_by_competitors3_dis }} {{ $factSheet->near_by_competitors3_dis_unit }}  
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Distance</label> : {{ $factSheet->near_by_competitors3_dis }}    
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Distance unit</label> : {{ $factSheet->near_by_competitors3_dis_unit }}  
                          </div>     
                        </div>
                    </div>  -->
                     <br>  
                     <div class="card-sub-title">Nearest Bank Details </div>
                      <br> 
                      <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                     <label for="inlineinput">Axis Bank nearest branch</label> : {{ $factSheet->axis_bank_nearest_branch }}   
                     </div>
                        </div>
                          <div class="col-6">
                          <div class="form-group">
                       <label for="inlineinput">Distance</label> : {{ $factSheet->office_to_axis_bank_distance }}  {{ $factSheet->office_to_axis_bank_distance_unit }}    
                      
                      </div>
                        </div>
                         <!--  <div class="col-2">
                          <div class="form-group">
                       <label for="inlineinput">Distance Unit</label> : {{ $factSheet->office_to_axis_bank_distance_unit }}     
                       
                      </div>
                        </div> -->
                      
                    </div>    
                    <br> 
                    <div class="row">
                        <div class="col-6">
                         <div class="form-group">
                     <label for="inlineinput">Neartest Bank Other Than Axis</label> : {{ $factSheet->nearest_bank_other_than_axis }}     
                       </div>  
                        </div>
                       <div class="col-6">
                      <div class="form-group">
                    <label for="inlineinput">Nearest ATM</label> : {{ $factSheet->nearest_atm }}    
                     </div>
                        </div>
                      </div>
                        <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                      <label for="inlineinput">Distance from Office to ATM</label> : {{ $factSheet->distance_from_office_to_atm }}  {{ $factSheet->distance_from_office_to_atm_unit }}       

                       </div> 
                        </div>
                          <!-- <div class="col-3">
                          <div class="form-group">
                        <label for="inlineinput">Distance Unit</label> : {{ $factSheet->distance_from_office_to_atm_unit }}      
                      </div>
                        </div> -->
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
                     <label for="inlineinput">No Of Owner</label> : {{ $factSheet->no_of_owner }}   
                       </div> 
                        </div>

                       <div class="col-6">
                      <div class="form-group">
                     <label for="inlineinput">Total Refundable Security Deposits</label> : {{ $factSheet->total_refundable_security_deposits }}   
                    </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                       <label for="inlineinput">Total Advances</label> : {{ $factSheet->total_advances }}    
                        </div> 
                        </div>
                         <div class="col-6">
                        <div class="form-group">
                         <label for="inlineinput">Total Month Rent</label> : {{ $factSheet->total_month_rent }}   
                        </div> 
                        </div>
                       </div>  
                        <br> 
                       <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                     <label for="inlineinput">Total Advance Deduction</label> : {{ $factSheet->total_advance_deduction }}     
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="inlineinput">Agreement Period Start Date</label> : {{ $factSheet->agreement_period_start }}    
                        </div>
                        </div>
                    </div> 

                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                      <label for="inlineinput">Agreement Period End Date</label> : {{ $factSheet->agreement_period_end }}     
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="inlineinput">Notice Period</label> : {{ $factSheet->notice_period }}   
                        
                        </div>
                        </div>
                    </div>   
					<?php
					//echo "<pre>";
					// print($factSheet);
					 ?>
                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                       <label for="inlineinput">Newly Constructed For Us</label> : {{ $factSheet->newly_constructed_for_us }}      
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                         <label for="inlineinput">Last Tenant 1</label> : {{$factSheet->last_tenant}} 
                        </div>
                        </div>
                    </div> 

                    <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                       <label for="inlineinput">Advance Deduction W.e.f.</label> : {{ $factSheet->advance_deduction_wef_date }}      
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="inlineinput">Enhancement Clause</label> : {{ $factSheet->enhancement_clause }}   
                        </div>
                        </div>
                    </div> 
                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                      <label for="inlineinput">Payment System</label> : {{ $factSheet->payment_system }}  
                      </div>
                        </div>
                       <div class="col-6">
                      <div class="form-group">
                      <label for="inlineinput">Associate Name</label> : {{ $factSheet->associate_name }}    
                      </div>
                     </div> 
                    </div> 
                      <div class="row">
                       <div class="col-3">
                       <div class="form-group">
                       <label for="inlineinput">Cordinator Name</label> : {{ $factSheet->cordinator_name }}     
                      </div>
                        </div>
                        <div class="col-3">
                         <div class="form-group">
                         <label for="inlineinput">Approved By</label> : {{ $factSheet->approved_by }}     
                        </div>
                        </div>
                        </div> 
                      </div>
                    <!--<div class="card-body">  
                   <div class="card-header">
                      <div class="card-title">Fact Premises Images </div>
                    </div>
                     <br>
                        <?php 
                        $img_array=array();
                       $premises_img=$factSheet->factsheet_premises_photos; 

                       if($premises_img!=''){

                        $img_array=explode('|',$premises_img);

                       }
                      
                       if(!empty($img_array)){
                      foreach($img_array as $img){ ?>
                        <br>
                       <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                       
                       <img src="{{ asset('uploads/factsheet_premises/'.$img) }}" width="600" height="300">
                       <?php

                      }
                    }else{

                        echo "<label for='inlineinput' style='color:red;important!'>No Premises Attached</label>";
                    }
                        ?>

                  </div>
                </div>
              </div>
            </div>-->
             <div class="card-body">  

               <div class="card-header">
                      <div class="card-title">All Owner Details </div>
                    </div>
                     <br>

                        <?php 

                          

                        if(!empty($ownerData))
                        {
                           foreach($ownerData as $owner)
                           {?>
                            <hr>
                            <div class="row">
                           <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Owner Name</label> : {{ $owner['property_owner_name'] }}   
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Payee Name</label> : {{ $owner['payee_name'] }}   
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Payee PAN</label> : {{ $owner['payee_pan'] }}   
                           </div>
                         </div>
                       </div>
                        <div class="row">

                         <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Payee GSTN</label> : {{ $owner['payee_gstin'] }}   
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Occupation</label> : {{ $owner['property_owner_occupation'] }}    
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                            <label for="inlineinput">Address</label> : {{ $owner['property_owner_address'] }}  
                           </div>
                         </div>
                       </div>
                        <div class="row">

                         <div class="col-4">
                            <div class="form-group">

                            <label for="inlineinput">District</label> : {{ $owner['property_owner_district'] }}    
                           </div>
                         </div>
                          <div class="col-4">
                            <div class="form-group">

                            <label for="inlineinput">State</label> : {{ $owner['property_owner_state'] }}    
                           </div>
                         </div>
                          <div class="col-4">
                            <div class="form-group">

                           <label for="inlineinput">PinCode</label> : {{ $owner['property_owner_postal_code'] }}      
                           </div>
                         </div>
                       </div>
                        <div class="row">

                          <div class="col-4">
                            <div class="form-group">

                          <label for="inlineinput">Email</label> : {{ $owner['property_owner_email'] }}  
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                          <label for="inlineinput">Contact No:</label> {{ $owner['property_owner_contact_no'] }}         
                           </div>
                         </div>
						 <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Supplier No.</label> : {{ $owner['supplier_no'] }}   
                           </div>
                         </div>
                         </div>
                             
                          <?php  }
                         
                        }else
                        {

                          echo "No Owner";
                        }?>

                       </div>


                    <div class="card-body">  

                     <div class="card-header">
                      <div class="card-title">All Owner Bank Details </div>
                    </div>
                     <br>

                        <?php 

                        if(!empty($ownerBankData))
                        {
                           foreach($ownerBankData as $ownerBank)
                           {?>
                            <hr>
                          <div class="row">

                           <div class="col-6">
                            <div class="form-group">

                             <label for="inlineinput">Payee Name</label> : {{ $ownerBank['payee_name'] }}   
                           </div>
                         </div>
                          <div class="col-6">
                            <div class="form-group">

                             <label for="inlineinput">Branch Name</label> : {{ $ownerBank['branch_name'] }} 
                           </div>
                         </div>
                       </div>
                       <div class="row">
                          <div class="col-6">
                            <div class="form-group">

                             <label for="inlineinput">Account Type</label> : {{ $ownerBank['account_type'] }} 
                           </div>
                         </div>
                          <div class="col-6">
                            <div class="form-group">

                            <label for="inlineinput">Account No.</label> : {{ $ownerBank['account_no'] }}  
                           </div>
                         </div>
                       </div>
                        <div class="row">

                          <div class="col-6">
                            <div class="form-group">

                              <label for="inlineinput">IFSC Code</label> : {{ $ownerBank['ifsc_code'] }}  
                           </div>
                         </div>
                          
                       </div>

                             
                          <?php  }?>
                           </div>
                            
                         
                       <?php  }else
                        {

                          echo "No Owner Bank Details";
                        }?>

                        </div>

                    <div class="card-body">  
                    <div class="card-header">
                      <div class="card-title">All Owner Rental Details </div>
                    </div>
                     <br>
                         
                        <?php 

                        if(!empty($ownerRentData))
                        {
                           foreach($ownerRentData as $ownerRent)
                           {?>
                            <hr>
                           <div class="row">
                           <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Refundable Security Deposit</label> : {{ $ownerRent['refundable_security_deposit'] }}   
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">
                             <label for="inlineinput">Advances</label> : {{ $ownerRent['advances'] }} 
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">
                             <label for="inlineinput">Monthly Rent</label> : {{ $ownerRent['monthly_rent'] }} 
                           </div>
                         </div>
                       </div>
                        <div class="row">
                         <div class="col-4">
                            <div class="form-group">
                             <label for="inlineinput">Advance Deduction</label> : {{ $ownerRent['advance_deduction'] }} 
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">
                             <label for="inlineinput">Payment System.</label> : {{ $factSheet['payment_system'] }} 
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">
                            <label for="inlineinput">Notice Period</label> : {{ $factSheet['notice_period'] }}   
                            </div>
                            </div>
                      </div>
                        <div class="row">
                            <div class="col-4">
                            <div class="form-group"> 
                            <label for="inlineinput">Enhancement Clause</label> : {{ $factSheet['enhancement_clause'] }} 
                            </div>
                            </div>
                            <div class="col-4">
                            <div class="form-group">   
                            <label for="inlineinput">Newly constructed For Us.</label> : {{ $factSheet['newly_constructed_for_us'] }}  
                            </div>
                            </div>
							 <div class="col-4">
                            <div class="form-group">  
                            <label for="inlineinput">Last Tenant </label> : {{$factSheet->last_tenant}} 
                            </div>
                            </div>
                          </div>
						  
                            <div class="row">
                            <div class="col-4">
                            <div class="form-group">   
                           <label for="inlineinput">Special Remarks</label> : {{ $ownerRent['special_remarks'] }}
                         </div>
                       </div>
                       <div class="col-4">
                            <div class="form-group">
                           <label for="inlineinput">Activity Status</label> : <?php if($factSheet['status']==0){echo "InActive";} else echo "Active";  ?>
                           </div>
                           </div>            
                          
                           </div>

                          <?php  }
                         
                        }else
                        {

                          echo "No Owner Rent Details";
                        }?>
                        
                           </div>


                     </div>
                    <!--<div class="card-body">  
                    
                    <div class="card-header">
                      <div class="card-title">All Owner Documents Details </div>
                    </div>
                     <br>
                        
                        <?php 
                     
                        if(!empty($ownerDocData))
                        {
                           foreach($ownerDocData as $ownerDoc)
                           {?>
                            <hr>
                          <div class="row">
                           <div class="col-6">
                            <div class="form-group">

                           
                                    <?php 
                            if($ownerDoc['doc_type']==0 && $ownerDoc['attachement']!=' ' ){
                                    ?>
                              <label for="inlineinput">Premises</label>      
                           <img src="{{ asset('uploads/factsheet_premises/'.$ownerDoc['attachement']) }}" width="600" height="300">
                         <?php }
                           
                            if($ownerDoc['doc_type']==1 && $ownerDoc['attachement']!=' '){
                                    ?>
                            <label for="inlineinput">Cancelled Cheque</label>             
                           <img src="{{ asset('uploads/owner_cancelled_cheque/'.$ownerDoc['attachement']) }}" width="600" height="300">
                          <?php }

                            if($ownerDoc['doc_type']==2 && $ownerDoc['attachement']!=' '){
                                    ?>
                           <label for="inlineinput">PAN Card</label>               
                           <img src="{{ asset('uploads/owner_pan_card/'.$ownerDoc['attachement']) }}" width="600" height="300">
                         <?php } 

                          if($ownerDoc['doc_type']==3 && $ownerDoc['attachement']!=' '){
                                    ?>
                           <label for="inlineinput">Aadhaar Card</label>            
                           <img src="{{ asset('uploads/owner_aadhaar_card/'.$ownerDoc['attachement']) }}" width="600" height="300">
                         <?php }?>
                        
                           
                          <?php  }
                         
                        }else
                        {

                          echo "No Owner Document Details";
                        }?>
                        
                           </div>


            </div>
          </div>
        </div>-->
      </form>
      </div>
     
    </div>

    <!-- Custom template | don't include it in your project! -->
   
    <!-- End Custom template -->
  </div>


 @include('layouts.adminLayout.admin_footer')
  
 
<script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
	 	 //document.getElementById('printbtn').style.visibility = 'hidden';

	 
}
</script>
<style>
@media print {
    #printbtn {display: none;}
	
}
</style>
