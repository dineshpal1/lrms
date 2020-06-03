<?php echo $__env->make('layouts.adminLayout.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap_wizard.min.css')); ?>">-->
    <link href="<?php echo e(asset('js/dist/jquery.simplewizard.css')); ?>" rel="stylesheet" />  
    <link rel="stylesheet" href="<?php echo e(asset('css/tabnav.css')); ?>"> 

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
						
						<li class="nav-item submenu">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-table"></i>
								<p>Fact Sheet</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo e(url('/createFactSheet')); ?>">
											<span class="sub-item">Create Fact Sheet</span>
										</a>
									</li>
									<li>
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
						<li class="nav-item active">
							<a data-toggle="collapse" href="#tablesReport">
								<i class="fas fa-table"></i>
								<p>Report</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="tablesReport">
								<ul class="nav nav-collapse">
									<li class="active">
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

        
<div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <!-- <div class="page-header">
            <h4 class="page-title">DataTables.Net</h4>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="#">
                  <i class="flaticon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Tables</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Datatables</a>
              </li>
            </ul>
          </div> -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Rentals Next Due Report 
                  <div style="float:right;">				  
				  <a href="<?php echo e(url('/excelExportRentalNextDue')); ?>" >
				  <img src="<?php echo e(asset('images/excel_icon.jpg')); ?>" alt="Excel Export" title="Excel Export" width="50" height="20" >
				  </a>
				  </div>
				  </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
						   <th>Sr. No</th>
                          <th>REGION</th>
                          <th>CITY</th>
                          <th>OFFICE TYPE</th>
                          <th>BRANCH CODE</th>
						  <th>LANDLORD'S NAME</th>
						  <th>BASIC RENT</th>
						  <th>AREA IN SQ.FT</th>
						  <th>NEW PREMISESTAKEN W.E.F.</th>
						  <th>Last Change Month</th>
						  <th>Lease Period(In Years)</th>
						  <th>Lease Period(From)</th>
						  <th>Lease Period(To)</th>
						  <th>Enhancement(%)</th>
						  <th>Enhancement Clause</th>
						  <th>Next Due Date</th>
						  <th>Next New Basic Rent</th>
						  <th>Agreement/Factsheet</th>
						  <th>Payment System</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php $i=1;?>
   
                        <?php $__currentLoopData = $rentalReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
						 <td><?php echo $i++; ?></td>
                          <td><?php echo e($rental->region_code); ?></td>
                          <td><?php echo e($rental->city); ?></td>
                          <td><?php echo e($rental->branch_type); ?></td>
                          <td><?php echo e($rental->branch_code); ?></td>
                           <td><?php echo e($rental->property_owner_name); ?></td>
                           <td><?php echo e($rental->total_month_rent); ?></td>
                           <td><?php echo e($rental->premises_area); ?></td>
						    <td><?php echo e($rental->branch_occupancy_date); ?></td>
				            <td><?php echo e($rental->agreement_expired_on_next_month); ?></td>
                           <td><?php echo e($rental->premises_area); ?></td>
                           <td><?php echo e($rental->agreement_period_start); ?></td>
                           <td><?php echo e($rental->agreement_period_end); ?></td>
                           <td><?php echo e($rental->enhancement_clause); ?></td>
                           <td><?php echo e($rental->enhancement_clause); ?></td>
                           <td><?php echo e($rental->agreement_period_end); ?></td>
                           <td><?php echo e($rental->revised_rent); ?></td>
                           <td><?php echo "Agreement"; ?></td>
						   <td><?php echo e($rental->payment_system); ?></td>
						   

                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Multi Filter Select</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="multi-filter-select" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot>
                     <tbody>

                        

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
 -->
            <!-- <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Add Row</h4>
                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                      <i class="fa fa-plus"></i>
                      Add Row
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header no-bd">
                          <h5 class="modal-title">
                            <span class="fw-mediumbold">
                            New</span> 
                            <span class="fw-light">
                              Row
                            </span>
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="small">Create a new row using this form, make sure you fill them all</p>
                          <form>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Name</label>
                                  <input id="addName" type="text" class="form-control" placeholder="fill name">
                                </div>
                              </div>
                              <div class="col-md-6 pr-0">
                                <div class="form-group form-group-default">
                                  <label>Position</label>
                                  <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-group-default">
                                  <label>Office</label>
                                  <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer no-bd">
                          <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div> -->

            <!--       <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th style="width: 10%">Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Ashton Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Cedric Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Airi Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Brielle Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Herrod Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Rhona Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Colleen Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Sonya Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                <i class="fa fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
        </div>
      </div>
    
    </div>
    </div>
             <?php echo $__env->make('layouts.adminLayout.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      

     
  <script src="<?php echo e(asset('js/plugin/datatables/datatables.min.js')); ?>"></script>


    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>  
  <script >
    $(document).ready(function() {
      $('#basic-datatables').DataTable({
      });

      $('#multi-filter-select').DataTable( {
        "pageLength": 5,
        initComplete: function () {
          this.api().columns().every( function () {
            var column = this;
            var select = $('<select class="form-control"><option value=""></option></select>')
            .appendTo( $(column.footer()).empty() )
            .on( 'change', function () {
              var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
                );

              column
              .search( val ? '^'+val+'$' : '', true, false )
              .draw();
            } );

            column.data().unique().sort().each( function ( d, j ) {
              select.append( '<option value="'+d+'">'+d+'</option>' )
            } );
          } );
        }
      });

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 5,
      });

      var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $('#addRowButton').click(function() {
        $('#add-row').dataTable().fnAddData([
          $("#addName").val(),
          $("#addPosition").val(),
          $("#addOffice").val(),
          action
          ]);
        $('#addRowModal').modal('hide');

      });
    });
  </script>     
               <!--  fact sheet end --->
            </div>
         
          <?php /**PATH /var/www/html/lrms/resources/views/rentals_next_due_report.blade.php ENDPATH**/ ?>