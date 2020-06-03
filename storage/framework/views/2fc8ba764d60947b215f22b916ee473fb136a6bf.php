  <!-- TOP NAV -->
  <?php echo $__env->make('layouts.adminLayout.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- Sidebar -->
   <!-- End Sidebar -->
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
						
						<!-- <li class="nav-item">
							<a href="<?php echo e(url('/createFactSheet')); ?>">
								<i class="fas fa-desktop"></i>
								<p>Create Fact Sheet</p>
							</a>
						</li> -->
						<li class="nav-item active">
							<a data-toggle="collapse" href="#usertablesReport">
								<i class="fas fa-table"></i>
								<p>User Management</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="usertablesReport">
								<ul class="nav nav-collapse">
								   <li class="active">
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
									<li>
										<a href="<?php echo e(url('/allBankBranch')); ?>">
											<span class="sub-item"> Bank Branch Master  </span>
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
		<?php if(session()->has('status')): ?>
<div class="btn btn-block btn-success">
 
  <?php echo e(session('status')); ?>

  
  </div>

<?php endif; ?>
<?php if(session('save')): ?>
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> <?php echo e(session('save')); ?> </strong>
  </div>
<?php endif; ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">User List  ( Total : <?php echo e($userList->count('id')); ?> )</h4>
                  <a class="btn btn-success btn-lg pull-right" href="<?php echo e(url('/createUser')); ?>" >Add User</a>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
						  <th>Sr. No</th>
						   <th>Role Type</th>
                          <th>Name</th>
						  <th>Email</th>
						  <th>Password</th>
                            <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                           <?php $i=1;?>
                        <?php $__currentLoopData = $userList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="text-align:left;">
						            <td><?php echo $i++; ?></td>
						 <td><?php echo e($users->role_name); ?></td>			
                          <td><?php echo e($users->name); ?></td>
						  <td><?php echo e($users->email); ?></td>
						  <td>
						  
						  <input id="password-field<?php echo e($users->id); ?>" type="password" class="form-control" name="password" value="<?php echo e($users->raw_value); ?>">
              <span toggle="#password-field<?php echo e($users->id); ?>" class="fa fa-fw fa-eye field-icon toggle-password" id="toggle-password<?php echo e($users->id); ?>" data-id="<?php echo e($users->id); ?>"></span>
						  </td>
                         
                          
                           <td>
						   <?php 
						   $encode_id=base64_encode($users->id);
						   
						   ?>
                            <a href="<?php echo e(action('UserController@editUser', $encode_id)); ?>">Edit</a>
                           </td>
                          
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
  <!-- Datatables -->
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
		
		$(".toggle-password").click(function() {
			//alert($(this).data("id"));

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
		
		/*
		$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
*/
		
		
		
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
<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
			                <h4 class="modal-title" id="myModalLabel">Update No. Of Owner In Factsheet</h4>

                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
              <!--   <form role="form" > -->
              <form role="form" method="post" action="<?php echo e(url('addMoreNoOfOwner')); ?>">
			  <?php echo csrf_field(); ?>
                  <div class="row">
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
							
							     <?php if($errors->has('no_of_owner')): ?>
                        <span class="text-danger"><?php echo e($errors->first('no_of_owner')); ?></span>
                       
                        <?php endif; ?>
							
                       </div> 
                  
                </div>

                   

                      <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary submitBtn" onclick="return submitContactForm();" >SUBMIT</button>

              <input type="hidden" name="fact_sheet_id" id="fact_sheet_id" value="">
            </div>
                </form>
            </div>
            
          
        </div>
    </div>
</div> 
<script>
$(document).ready(function() {
  $('.btn-sm').on('click', function() {
    //console.log(this.dataset.id, $(this).data().id, $(this).data('id'));
	$("#fact_sheet_id").val($(this).data('id'));
	
  });
});
</script><?php /**PATH /var/www/html/lrms/resources/views/user_list.blade.php ENDPATH**/ ?>