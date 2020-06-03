<?php echo $__env->make('layouts.adminLayout.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <!-- Sidebar -->
  <div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo e(asset('img/safexprees_admin.jpeg')); ?>" alt="..." class="avatar-img rounded-circle">
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
							<a href="<?php echo e(url('/dashboard')); ?>">
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
										<a href="<?php echo e(url('/userList')); ?>">
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
										<a href="<?php echo e(url('/createFactSheet')); ?>">
											<span class="sub-item">Create Fact Sheet</span>
										</a>
									</li>
									<li class="active">
										<a href="<?php echo e(url('/FactsList')); ?>">
											<span class="sub-item">Fact Sheet List  </span>
										</a>
									</li>
									<li>
										<a href="<?php echo e(url('/agreementToBeRenewList')); ?>">
											<span class="sub-item">Renewal Due </span>
										</a>
									</li>
									<li>
										<a href="<?php echo e(url('/agreementRenewedList')); ?>">
											<span class="sub-item">Renewed Agreement </span>
										</a>
									</li>
										<li>
						 				<a href="<?php echo e(url('/view-fact')); ?>">
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
										<a href="<?php echo e(url('/RentalsNextDueReport')); ?>">
											<span class="sub-item">Rentals Next Due Report  </span>
										</a>
									</li>
								    <li>
										<a href="<?php echo e(url('/rental_revision')); ?>">
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
										<a href="<?php echo e(url('/getInvoiceById')); ?>">
											<span class="sub-item">Invoice Report  </span>
										</a>
									</li>
                                        <li>
										<a href="<?php echo e(url('/getCheckData')); ?>">
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
										<a href="<?php echo e(url('/state')); ?>">
											<span class="sub-item"> State Master  </span>
										</a>
									</li>
									
									<li >
										<a href="<?php echo e(url('/allCity')); ?>">
											<span class="sub-item"> City Master </span>
										</a>
									</li>
									<li >
										<a href="<?php echo e(url('/allBranch')); ?>">
											<span class="sub-item">Safexpress Branch </span>
										</a>
									</li>
									
									<li >
										<a href="<?php echo e(url('/allBank')); ?>">
											<span class="sub-item"> Bank Master  </span>
										</a>
									</li>
									<!--<li >
										<a href="<?php echo e(url('/addState')); ?>">
											<span class="sub-item">Add State </span>
										</a>
									</li>-->
								
									<!--<li >
										<a href="<?php echo e(url('/addBank')); ?>">
											<span class="sub-item">Add Bank </span>
										</a>
									</li>-->
									
									<!--<li >
										<a href="<?php echo e(url('/addCity')); ?>">
											<span class="sub-item">Add City </span>
										</a>
									</li>-->
								
								
									<!--<li >
										<a href="<?php echo e(url('/addBranch')); ?>">
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
                        <?php echo csrf_field(); ?>
                      
        <div class="page-inner" id="printableArea">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Fact Sheet</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(action('FactSheetController@viewnew', $factSheet->id)); ?>">Attachement</a>
                  
                </li>
                <li class="nav-item">
                  <a class="btn btn-success btn-sm pull-right " href="<?php echo e(url('FactsList')); ?>"  style="margin-left: 770px;">Back</a>
                  
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
                        <?php
                       $table='dst_region_masters';
                        $field='region_code';
                        $value=$factSheet->region_code;

                      $regionData=getRecordById($table,$field,$value);
                        
                       
                    ?>

                     <label for="inlineinput">Region List</label> : <?php echo e($factSheet->region_code); ?> ( <?php echo $regionData->name ?>)
             

                   </div>
                      

                        </div>
                          <div class="col-6">
                           <div class="form-group">

                           <label for="inlineinput">FactSheet Code</label> : <?php echo e($factSheet->factsheet_code); ?>

                           
                           </div>

                          </div>
                      </div>

                      <div class="row">
                       <div class="col-6">
                            
                        <div class="form-group">

                       <label for="inlineinput">Branch Code</label> : <?php echo e($factSheet->branch_code); ?>

                       
                       </div>
                       
                        </div>
                          <div class="col-3">
                            
                         <div class="form-group">

                        <label for="name">Branch Type</label> : <?php echo e($factSheet->branch_type); ?>



                       </div>
                                         
                        </div>
						<div class="col-3">
                         
                           <div class="form-group">
                  
                            <label for="inlineinput">Branch Area</label> : <?php echo e($factSheet->branch_area); ?>

                          </div> 
                        </div>


                    </div>

                      <div class="row">
                      
                        <div class="col-6">
                         
                           <div class="form-group">
                  
                            <label for="inlineinput">Branch location</label> : <?php echo e($factSheet->branch_location); ?>

                          </div> 
                        </div>
						

                           <div class="col-6"> 

                          <div class="form-group">
                         
                                <label for="inlineinput">Fact Sheet Date</label> : <?php echo e($factSheet->fact_sheet_date); ?>

                          </div>  

                        </div>
                     
                      </div>

                        <div class="row">
                      
                        <div class="col-6">
                         
                          <div class="form-group">

                          <label for="inlineinput">Occupancy Date</label> : <?php echo e($factSheet->branch_occupancy_date); ?>


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
                            <label for="inlineinput">Address1</label> : <?php echo e($factSheet->address1); ?>

                       </div>
                        </div>
                          <div class="col-6">
                           <div class="form-group">
                                <label for="inlineinput">Address2</label> : <?php echo e($factSheet->address2); ?>

                         </div>                     
                        </div>
                    </div>

                   <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                 
                            <label for="inlineinput">Address3</label> : <?php echo e($factSheet->address3); ?>


                      </div>
                        </div>
                          <div class="col-6">
                           <div class="form-group">
                             <label for="inlineinput">City</label> : <?php echo e($factSheet->city); ?>                        
                          </div>                    
                        </div>
                    </div>
                     <div class="row">
                       <div class="col-6">
                      <div class="form-group">
                           <label for="inlineinput">Pincode</label> : <?php echo e($factSheet->postal_code); ?>

                      </div>
                        </div>
                          <div class="col-6">
                          <div class="form-group">
                       <label for="inlineinput">Office Tel.Phone</label> : <?php echo e($factSheet->office_tele_no); ?>

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
                        <label for="inlineinput">Near By Highway</label> : <?php echo e($factSheet->near_by_highway); ?>

                       </div>
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                       <label for="inlineinput">Distance From Highway</label> : <?php echo e($factSheet->dist_from_highway); ?>

                        </div>                   
                        </div>
                        <div class="col-4">
                        <div class="form-group">
                        <label for="inlineinput">Distance From Highway Unit</label> : <?php echo e($factSheet->dist_from_highway_unit); ?>

                        </div>                   
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-4">
                        <div class="form-group">
                       <label for="inlineinput">Safexpress connectivity Route</label> : <?php echo e($factSheet->safex_conectivity_route); ?>

                      </div>
                        </div>
                        <div class="col-4">
                       <div class="form-group">
                       <label for="inlineinput">Property Location(Direction)</label> : <?php echo e($factSheet->property_location); ?>

                   </div>                 
                        </div>
                    </div>   
                     <div class="row">
                       <div class="col-4">
                         <div class="form-group">
                        <label for="inlineinput">Nearest Airport</label> : <?php echo e($factSheet->nearest_airport); ?>

                     </div>
                        </div>
                        <div class="col-4">
                      <div class="form-group">
                         <label for="inlineinput">Nearest Railway Station</label> : <?php echo e($factSheet->nearest_railway_station); ?>

                    </div>              
                        </div>
                    </div> 
                       </div>
                      <div class="card-body">
                        <div class="card-header">
                      <div class="card-title">Measurement & Flooring Details </div>
                    </div>
                    <!-- <?php echo e($factSheet); ?> -->
                     <br>
                       <div class="row">
                         <div class="col-3">
                        <div class="form-group">
                          <label for="inlineinput">Length</label> : <?php echo e($factSheet->premises_length); ?> <?php echo e($factSheet->premises_length_unit); ?>

                        </div>                   
                        </div>
                        <!-- <div class="col-2">
                        <div class="form-group">
                        <label for="inlineinput">Length Unit</label> : <?php echo e($factSheet->premises_length_unit); ?>

                        </div>                   
                        </div> -->

                        <div class="col-3">
                        <div class="form-group">
                       <label for="inlineinput">Height</label> : <?php echo e($factSheet->premises_height); ?> <?php echo e($factSheet->premises_height_unit); ?>


                        </div>                   
                        </div>
                        <!-- <div class="col-2">
                        <div class="form-group">
                        <label for="inlineinput">Height Unit</label> : <?php echo e($factSheet->premises_height_unit); ?>

                        </div>                   
                        </div> -->
                        <div class="col-3">
                          <div class="form-group">
                            <label for="inlineinput">Breadth</label> : <?php echo e($factSheet->premises_breadth); ?> <?php echo e($factSheet->premises_breadth_unit); ?>

                          </div>                   
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                          <label for="inlineinput">Platform Height</label> : <?php echo e($factSheet->platform_height); ?>  <?php echo e($factSheet->platform_height_unit); ?>

    
                          </div>                   
                        </div>
                     </div> 
                     
                     <div class="row">
                         
                        <!-- <div class="col-2">
                        <div class="form-group">

                     <label for="inlineinput">Breadth Unit</label> : <?php echo e($factSheet->premises_breadth_unit); ?>

      
                        </div>                   
                        </div> -->

                        

                        <!-- <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Platform Height Unit</label> : <?php echo e($factSheet->platform_height_unit); ?>

                          </div>                   
                        </div> -->

                    </div> 
                  
                  <div class="row">
                        <div class="col-4">
                          <div class="form-group">
                            <label for="inlineinput">Total</label> : <?php echo e($factSheet->premises_area); ?> <?php echo e($factSheet->premises_area_unit); ?>

                          </div>                   
                        </div>
                        <!-- <div class="col-2">
                          <div class="form-group">
                              <label for="inlineinput">Total Unit</label> : <?php echo e($factSheet->premises_area_unit); ?>

                          </div>                   
                        </div> -->

                    </div> 
                     <div class="row">
                       <div class="col-3">
                        <div class="form-group"> 
                       <label for="inlineinput">Flooring Type</label> : <?php echo e($factSheet->flooring_type); ?>

   
                      </div>     
                        </div>
                         <div class="col-3">
                          <div class="form-group">
                            <label for="inlineinput">Front Road Breadth</label> : <?php echo e($factSheet->front_road_breadth); ?> <?php echo e($factSheet->front_road_breadth_unit); ?>

                          </div>
                      </div>
                      <div class="col-3">
                       <div class="form-group">
                       <label for="inlineinput">Operational Hours</label> : <?php echo e($factSheet->operational_hours); ?>

      
                       </div>             
                        </div>
                      <!-- <div class="col-2">
                        <div class="form-group"> 
                          <label for="inlineinput">Front Road Breadth Unit</label> : <?php echo e($factSheet->front_road_breadth_unit); ?>

                        </div>              
                      </div> -->
                      
                    </div> 

                    <div class="row">
                        <!-- <div class="col-3">
                       <div class="form-group">
                       <label for="inlineinput">Operational Hours</label> : <?php echo e($factSheet->operational_hours); ?>

      
                       </div>             
                        </div> -->
                       <div class="col-3">
                       <div class="form-group">
                        <label for="inlineinput">Timings From</label> : <?php echo e($factSheet->operational_timing_from); ?>

                      
                      </div>
                        </div>
                        <div class="col-3">
                       <div class="form-group">
                      <label for="inlineinput">Timings To</label> : <?php echo e($factSheet->operational_timing_to); ?>

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
                        <label for="inlineinput">Connectivty Telephone</label> : <?php echo e($factSheet->connectivity_telephone); ?>

     
                      </div>
                        </div>
                        <div class="col-4">
                      <div class="form-group">
                        <label for="inlineinput">Connectivty Mobile</label> : <?php echo e($factSheet->connectivity_mobile); ?>

                       </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                          <label for="inlineinput">Internet service Provider</label> : <?php echo e($factSheet->connectivity_isp); ?>

                       </div>
                        </div>
                       
                    </div>   
                    <br> 
                     <div class="card-sub-title">Surroundings Details </div>
                      <br> 
                      <div class="row">
                        <div class="col-3">
                        <div class="form-group">
                        <label for="inlineinput">Front</label> : <?php echo e($factSheet->surrounding_front); ?>

                       </div>
                        </div>
                        <div class="col-3">
                       <div class="form-group">
                        <label for="inlineinput">Back</label> : <?php echo e($factSheet->surrounding_back); ?>

                       </div>       
                        </div>
                          <div class="col-3">
                        <div class="form-group">
                        <label for="inlineinput">Left</label> : <?php echo e($factSheet->surrounding_left); ?>

                       </div>
                        </div>
                        <div class="col-3">
                       <div class="form-group">
                        <label for="inlineinput">Right</label> : <?php echo e($factSheet->surrounding_right); ?>

                       </div>      
                        </div>
                    </div>    
                   <div class="card-sub-title">Competitors Details </div>
                    <br> 
                          <div class="row">
                       <div class="col-4">
                        <div class="form-group">
                        <label for="inlineinput">Near By competitors1 : </label>  <?php echo e($factSheet->near_by_competitors1); ?>  (<?php echo e($factSheet->near_by_competitors1_dis); ?> <?php echo e($factSheet->near_by_competitors1_dis_unit); ?>)
                        </div>
                        </div>
                       <!-- <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Distance</label> : <?php echo e($factSheet->near_by_competitors1_dis); ?>

                          </div>
                        </div> -->
                        <!-- <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Distance unit</label> : <?php echo e($factSheet->near_by_competitors1_dis_unit); ?>

                          </div>     
                        </div> -->
                       <br> 
                      <div class="col-4">
                        <div class="form-group">
                              <label for="inlineinput">Near By competitors2 : </label>  <?php echo e($factSheet->near_by_competitors2); ?>  (<?php echo e($factSheet->near_by_competitors2_dis); ?> <?php echo e($factSheet->near_by_competitors2_dis_unit); ?>)
                        </div>
                      </div>
                      <div class="col-4">
                          <div class="form-group">
                          <label for="inlineinput">Near By competitors3 : </label>  <?php echo e($factSheet->near_by_competitors3); ?>  (<?php echo e($factSheet->near_by_competitors3_dis); ?> <?php echo e($factSheet->near_by_competitors3_dis_unit); ?>)  
                          </div>
                        </div>
                       <!-- <div class="col-2">
                          <div class="form-group">
                        <label for="inlineinput">Distance</label> : <?php echo e($factSheet->near_by_competitors2_dis); ?>

                      </div>
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="inlineinput">Distance unit</label> : <?php echo e($factSheet->near_by_competitors2_dis_unit); ?>

                   
                        </div>     
                        </div> -->

                    </div>  
                     <!-- <br> 
                    <div class="row">
                       <div class="col-2">
                          <div class="form-group">
                          <label for="inlineinput">Near By competitors3</label> : <?php echo e($factSheet->near_by_competitors3); ?> <?php echo e($factSheet->near_by_competitors3_dis); ?> <?php echo e($factSheet->near_by_competitors3_dis_unit); ?>  
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Distance</label> : <?php echo e($factSheet->near_by_competitors3_dis); ?>    
                          </div>
                        </div>
                        <div class="col-2">
                          <div class="form-group">
                            <label for="inlineinput">Distance unit</label> : <?php echo e($factSheet->near_by_competitors3_dis_unit); ?>  
                          </div>     
                        </div>
                    </div>  -->
                     <br>  
                     <div class="card-sub-title">Nearest Bank Details </div>
                      <br> 
                      <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                     <label for="inlineinput">Axis Bank nearest branch</label> : <?php echo e($factSheet->axis_bank_nearest_branch); ?>   
                     </div>
                        </div>
                          <div class="col-6">
                          <div class="form-group">
                       <label for="inlineinput">Distance</label> : <?php echo e($factSheet->office_to_axis_bank_distance); ?>  <?php echo e($factSheet->office_to_axis_bank_distance_unit); ?>    
                      
                      </div>
                        </div>
                         <!--  <div class="col-2">
                          <div class="form-group">
                       <label for="inlineinput">Distance Unit</label> : <?php echo e($factSheet->office_to_axis_bank_distance_unit); ?>     
                       
                      </div>
                        </div> -->
                      
                    </div>    
                    <br> 
                    <div class="row">
                        <div class="col-6">
                         <div class="form-group">
                     <label for="inlineinput">Neartest Bank Other Than Axis</label> : <?php echo e($factSheet->nearest_bank_other_than_axis); ?>     
                       </div>  
                        </div>
                       <div class="col-6">
                      <div class="form-group">
                    <label for="inlineinput">Nearest ATM</label> : <?php echo e($factSheet->nearest_atm); ?>    
                     </div>
                        </div>
                      </div>
                        <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                      <label for="inlineinput">Distance from Office to ATM</label> : <?php echo e($factSheet->distance_from_office_to_atm); ?>  <?php echo e($factSheet->distance_from_office_to_atm_unit); ?>       

                       </div> 
                        </div>
                          <!-- <div class="col-3">
                          <div class="form-group">
                        <label for="inlineinput">Distance Unit</label> : <?php echo e($factSheet->distance_from_office_to_atm_unit); ?>      
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
                     <label for="inlineinput">No Of Owner</label> : <?php echo e($factSheet->no_of_owner); ?>   
                       </div> 
                        </div>

                       <div class="col-6">
                      <div class="form-group">
                     <label for="inlineinput">Total Refundable Security Deposits</label> : <?php echo e($factSheet->total_refundable_security_deposits); ?>   
                    </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                        <div class="form-group">
                       <label for="inlineinput">Total Advances</label> : <?php echo e($factSheet->total_advances); ?>    
                        </div> 
                        </div>
                         <div class="col-6">
                        <div class="form-group">
                         <label for="inlineinput">Total Month Rent</label> : <?php echo e($factSheet->total_month_rent); ?>   
                        </div> 
                        </div>
                       </div>  
                        <br> 
                       <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                     <label for="inlineinput">Total Advance Deduction</label> : <?php echo e($factSheet->total_advance_deduction); ?>     
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="inlineinput">Agreement Period Start Date</label> : <?php echo e($factSheet->agreement_period_start); ?>    
                        </div>
                        </div>
                    </div> 

                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                      <label for="inlineinput">Agreement Period End Date</label> : <?php echo e($factSheet->agreement_period_end); ?>     
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="inlineinput">Notice Period</label> : <?php echo e($factSheet->notice_period); ?>   
                        
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
                       <label for="inlineinput">Newly Constructed For Us</label> : <?php echo e($factSheet->newly_constructed_for_us); ?>      
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                         <label for="inlineinput">Last Tenant 1</label> : <?php echo e($factSheet->last_tenant); ?> 
                        </div>
                        </div>
                    </div> 

                    <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                       <label for="inlineinput">Advance Deduction W.e.f.</label> : <?php echo e($factSheet->advance_deduction_wef_date); ?>      
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="inlineinput">Enhancement Clause</label> : <?php echo e($factSheet->enhancement_clause); ?>   
                        </div>
                        </div>
                    </div> 
                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                      <label for="inlineinput">Payment System</label> : <?php echo e($factSheet->payment_system); ?>  
                      </div>
                        </div>
                       <div class="col-6">
                      <div class="form-group">
                      <label for="inlineinput">Associate Name</label> : <?php echo e($factSheet->associate_name); ?>    
                      </div>
                     </div> 
                    </div> 
                      <div class="row">
                       <div class="col-3">
                       <div class="form-group">
                       <label for="inlineinput">Cordinator Name</label> : <?php echo e($factSheet->cordinator_name); ?>     
                      </div>
                        </div>
                        <div class="col-3">
                         <div class="form-group">
                         <label for="inlineinput">Approved By</label> : <?php echo e($factSheet->approved_by); ?>     
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
                       
                       <img src="<?php echo e(asset('uploads/factsheet_premises/'.$img)); ?>" width="600" height="300">
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

                             <label for="inlineinput">Owner Name</label> : <?php echo e($owner['property_owner_name']); ?>   
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Payee Name</label> : <?php echo e($owner['payee_name']); ?>   
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Payee PAN</label> : <?php echo e($owner['payee_pan']); ?>   
                           </div>
                         </div>
                       </div>
                        <div class="row">

                         <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Payee GSTN</label> : <?php echo e($owner['payee_gstin']); ?>   
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Occupation</label> : <?php echo e($owner['property_owner_occupation']); ?>    
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                            <label for="inlineinput">Address</label> : <?php echo e($owner['property_owner_address']); ?>  
                           </div>
                         </div>
                       </div>
                        <div class="row">

                         <div class="col-4">
                            <div class="form-group">

                            <label for="inlineinput">District</label> : <?php echo e($owner['property_owner_district']); ?>    
                           </div>
                         </div>
                          <div class="col-4">
                            <div class="form-group">

                            <label for="inlineinput">State</label> : <?php echo e($owner['property_owner_state']); ?>    
                           </div>
                         </div>
                          <div class="col-4">
                            <div class="form-group">

                           <label for="inlineinput">PinCode</label> : <?php echo e($owner['property_owner_postal_code']); ?>      
                           </div>
                         </div>
                       </div>
                        <div class="row">

                          <div class="col-4">
                            <div class="form-group">

                          <label for="inlineinput">Email</label> : <?php echo e($owner['property_owner_email']); ?>  
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">

                          <label for="inlineinput">Contact No:</label> <?php echo e($owner['property_owner_contact_no']); ?>         
                           </div>
                         </div>
						 <div class="col-4">
                            <div class="form-group">

                             <label for="inlineinput">Supplier No.</label> : <?php echo e($owner['supplier_no']); ?>   
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

                             <label for="inlineinput">Payee Name</label> : <?php echo e($ownerBank['payee_name']); ?>   
                           </div>
                         </div>
                          <div class="col-6">
                            <div class="form-group">

                             <label for="inlineinput">Branch Name</label> : <?php echo e($ownerBank['branch_name']); ?> 
                           </div>
                         </div>
                       </div>
                       <div class="row">
                          <div class="col-6">
                            <div class="form-group">

                             <label for="inlineinput">Account Type</label> : <?php echo e($ownerBank['account_type']); ?> 
                           </div>
                         </div>
                          <div class="col-6">
                            <div class="form-group">

                            <label for="inlineinput">Account No.</label> : <?php echo e($ownerBank['account_no']); ?>  
                           </div>
                         </div>
                       </div>
                        <div class="row">

                          <div class="col-6">
                            <div class="form-group">

                              <label for="inlineinput">IFSC Code</label> : <?php echo e($ownerBank['ifsc_code']); ?>  
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

                             <label for="inlineinput">Refundable Security Deposit</label> : <?php echo e($ownerRent['refundable_security_deposit']); ?>   
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">
                             <label for="inlineinput">Advances</label> : <?php echo e($ownerRent['advances']); ?> 
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">
                             <label for="inlineinput">Monthly Rent</label> : <?php echo e($ownerRent['monthly_rent']); ?> 
                           </div>
                         </div>
                       </div>
                        <div class="row">
                         <div class="col-4">
                            <div class="form-group">
                             <label for="inlineinput">Advance Deduction</label> : <?php echo e($ownerRent['advance_deduction']); ?> 
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">
                             <label for="inlineinput">Payment System.</label> : <?php echo e($factSheet['payment_system']); ?> 
                           </div>
                         </div>
                         <div class="col-4">
                            <div class="form-group">
                            <label for="inlineinput">Notice Period</label> : <?php echo e($factSheet['notice_period']); ?>   
                            </div>
                            </div>
                      </div>
                        <div class="row">
                            <div class="col-4">
                            <div class="form-group"> 
                            <label for="inlineinput">Enhancement Clause</label> : <?php echo e($factSheet['enhancement_clause']); ?> 
                            </div>
                            </div>
                            <div class="col-4">
                            <div class="form-group">   
                            <label for="inlineinput">Newly constructed For Us.</label> : <?php echo e($factSheet['newly_constructed_for_us']); ?>  
                            </div>
                            </div>
							 <div class="col-4">
                            <div class="form-group">  
                            <label for="inlineinput">Last Tenant </label> : <?php echo e($factSheet->last_tenant); ?> 
                            </div>
                            </div>
                          </div>
						  
                            <div class="row">
                            <div class="col-4">
                            <div class="form-group">   
                           <label for="inlineinput">Special Remarks</label> : <?php echo e($ownerRent['special_remarks']); ?>

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
                           <img src="<?php echo e(asset('uploads/factsheet_premises/'.$ownerDoc['attachement'])); ?>" width="600" height="300">
                         <?php }
                           
                            if($ownerDoc['doc_type']==1 && $ownerDoc['attachement']!=' '){
                                    ?>
                            <label for="inlineinput">Cancelled Cheque</label>             
                           <img src="<?php echo e(asset('uploads/owner_cancelled_cheque/'.$ownerDoc['attachement'])); ?>" width="600" height="300">
                          <?php }

                            if($ownerDoc['doc_type']==2 && $ownerDoc['attachement']!=' '){
                                    ?>
                           <label for="inlineinput">PAN Card</label>               
                           <img src="<?php echo e(asset('uploads/owner_pan_card/'.$ownerDoc['attachement'])); ?>" width="600" height="300">
                         <?php } 

                          if($ownerDoc['doc_type']==3 && $ownerDoc['attachement']!=' '){
                                    ?>
                           <label for="inlineinput">Aadhaar Card</label>            
                           <img src="<?php echo e(asset('uploads/owner_aadhaar_card/'.$ownerDoc['attachement'])); ?>" width="600" height="300">
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


 <?php echo $__env->make('layouts.adminLayout.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
 
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
@media  print {
    #printbtn {display: none;}
	
}
</style>
<?php /**PATH /var/www/html/lrms/resources/views/view_fact_sheet.blade.php ENDPATH**/ ?>