<?php echo $__env->make('layouts.adminLayout.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('js/dist/jquery.simplewizard.css')); ?>" rel="stylesheet" />
<!-- <link rel="stylesheet" href="<?php echo e(asset('css/tabnav.css')); ?>"> -->
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
                     <li>
                        <a href="<?php echo e(url('/RentalsNextDueReport')); ?>">
                        <span class="sub-item">Rentals Next Due Report  </span>
                        </a>
                     </li>
                     <li class="active">
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
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">RENTAL REVISION DECISIONS-<?php echo e(strtoupper($month_year)); ?> MONTH OF FORWARDED FOR APPROVAL
					 <div style="float:right;">				  
				  <a href="<?php echo e(url('/excelExportRentalRevision')); ?>" >
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
                                 <th>LOCATION</th>
                                 <th>CODE</th>
                                 <th>PAYMENT SYSTEM</th>
                                 <th>NAME OF LANDLORD</th>
                                 <th>AREA(SQFT)</th>
                                 <th>SECURITY/ADV</th>
                                 <th>ADVANCE DEDUCTION IF ANY</th>
                                 <th>PRESENT RENT</th>
                                 <th>REVISED RENT</th>
                                 <th>MONTHLY INCREASE</th>
                                 <th>OCCUPANCY DATE</th>
                                 <th>ADDITIONAL INFORMATION(RENTAL PAST HISTORY)</th>
                                 <th>ADDITIONAL INFORMATION-2(AGREEMENT DETAILS)</th>
                                 <th>ACTION TAKEN (CONCLUDED & FORWARDED FOR APPROVAL)</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i=1;?>
                              <?php $__currentLoopData = $rental_revision; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                 <td><?php echo $i++; ?></td>
                                 <td><?php echo e($rent->branch_location); ?></td>
                                 <td><?php echo e($rent->branch_code); ?></td>
                                 <td><?php echo e($rent->payment_system); ?></td>
                                 <td><?php echo e($rent->property_owner_name); ?></td>
                                 <td><?php echo e($rent->premises_area); ?></td>
                                 <td><?php echo e($rent->total_advances); ?></td>
                                 <td><?php echo e($rent->total_advance_deduction); ?></td>
                                 <td><?php echo e($rent->total_month_rent); ?></td>
                                 <td><?php echo e($rent->revised_rent); ?></td>
                                 <td><?php echo e($rent->monthly_increase); ?></td>
                                 <td><?php echo e($rent->branch_occupancy_date); ?></td>
                                 <td><b><u>Past Rental Changes:-<br/>
                                    Earlier rent was <?php echo e($rent->total_month_rent); ?>

                                    since  occupancy <?php echo e(date("d-F-Y", strtotime($rent->branch_occupancy_date))); ?><br> 
                                    </u></b>
                                    <?php $i =1;?>
                                    <?php $__currentLoopData = $renewal1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $i++.") ";?>
                                    <?php echo e(date("F-Y", strtotime($deed->branch_occupancy_date))); ?> from 
                                    <?php echo e($deed->total_month_rent); ?> to<?php echo e($deed->revised_rent); ?>i.e.<?php echo e($deed->monthly_increase); ?><?php 
                                    $diff= $deed->revised_rent-$deed->total_month_rent;
                                    $hike=($diff *100)/$deed->total_month_rent;
                                    echo "\t";echo "( \t";echo  $percent= number_format($hike, 2);echo " %)";
                                    echo "hike";
                                    ?> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </td>
                                 <td>As per  available agreement dt<?php echo e($rent->agreement_period_start); ?>Rent per month as agreed Rs<?php echo e($rent->total_month_rent); ?>& there is an ehhancement clause of <?php echo e($rent->enhancement_clause); ?>% after expiry of every two years</td>
                                 <td><?php echo e($rent->action_taken); ?></td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php echo $__env->make('layouts.adminLayout.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      
<!--<script src="<?php echo e(asset('js/plugin/datatables/datatables.min.js')); ?>"></script>-->
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>-->
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
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
		 "columns": [
   null,
    null,
    null,
    null,
    null,
	null,
    null,
    null,
    null,
	null,
    null,
    null,
	 { "width": "80%" },
	  null,
	  null,
	
  ]
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
</div><?php /**PATH /var/www/html/lrms/resources/views/rental_revision_decisions.blade.php ENDPATH**/ ?>