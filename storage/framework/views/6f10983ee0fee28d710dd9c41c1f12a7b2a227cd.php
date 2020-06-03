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
							<a data-toggle="collapse" href="#tablesReport">
								<i class="fas fa-table"></i>
								<p>User Management</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tablesReport">
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
			<li class="nav-item active">
							<a data-toggle="collapse" href="#apiReport">
								<i class="fas fa-table"></i>
								<p>Oracle Fusion Report</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="apiReport">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo e(url('/getInvoiceById')); ?>">
											<span class="sub-item">Invoice Report  </span>
										</a>
									</li>
                                     <li class="active">
										<a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
											<span class="sub-item">Check  </span>
										</a>
									</li>
                                    <!--<?php echo e(url('/getCheckData')); ?><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
									
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
                  <li >
                    <a href="<?php echo e(url('/allBankBranch')); ?>">
                      <span class="sub-item"> Bank Branch Master  </span>
                    </a>
                  </li>
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
             <form name='form1'  method="POST" action="<?php echo e(url('checkSupplierData')); ?>" enctype="multipart/form-data" id="create_form">
              <?php echo csrf_field(); ?>


            
        <div class="page-inner">

<?php if(session('error')): ?>
	    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
	<?php endif; ?>

          <div class="row">
            <div class="col-md-12">
              <!--<ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Fact Sheet</a>
                </li>
               
                </ul>-->
            </div>
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                  aria-labelledby="home-tab">

                  <div class="card">
                    <div class="card-header">
                      <div class="card-title">Payment Api Details </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                       <div class="col-6">
                         <div class="form-group">
                         <label for="exampleFormControlSelect1">Select Supplier</label>
                          <select name="supplier" id="supplier" class="form-control">
                            <option value=""></option>
                         <?php foreach($supplierList as $supplier){?>
                         <option value="<?php echo  $supplier; ?>"><?php echo  $supplier ?></option>
                       <?php }?>
                        </select>
                          </div>
                        </div>
                       </div>
                         
                        <div class="row">
                          <div class="col-6"> 
                          <div class="form-group">
                          <label for="name">From Date</label>
                          <input type="date" id="from_date" name="from_date" class="form-control error" aria-required="true" data-date-format="yyyy-mm-dd">
                         </div>  
                          </div>
                       </div>

                       <div class="row">
                       
                        <div class="col-6"> 
                          <div class="form-group">
                            <label for="name">To Date</label>    
                            <input type="date" id="to_date" name="to_date" class="form-control error" aria-required="true" data-date-format="yyyy-mm-dd">
                              
                         </div>  
                        </div>


                       </div>


                      </div>
               
                    <div class="card-action">
                   <!--    <button class="btn btn-success">Submit</button> -->
                      <input type="submit" class="btn btn-success" value="Submit">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="page-inner">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">Payables Payment Report
					 <!--<div style="float:right;">				  
				  <a href="<?php echo e(url('/excelExportRentalRevision')); ?>" >
				  <img src="<?php echo e(asset('images/excel_icon.jpg')); ?>" alt="Excel Export" title="Excel Export" width="50" height="20" >
				  </a>
				  </div>-->
					 </h4>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                           <thead>
                              <tr>
                                 <th>Sr. No</th>
                                 <th>CheckId</th>
                                 <th>PaymentNumber</th>
                                 <th>PaymentAmount</th>
                                 <th>PaymentDate</th>
                                 <th>AccountingDate</th>
                                 <th>VoidDate</th>
                                 <th>PaymentStatus</th>
                                 <th>AccountingStatus</th>
                                 <th>PaymentType</th>
                                 <th>Payee</th>
                                 <th>PayeeSite</th>
                                 <th>PaymentMethodCode</th>
                                 <th>PaymentMethod</th>
                                 <th>PaymentDescreption</th>
								 <th>ClearingDate</th>
								 <th>ClearingAmount</th>
								 <th>SupplierNumber</th>
								 <th>RemitToAccountNumber</th>
								 <th>VoucherNumber</th>
								 <!--<th>CanceledDate</th>
								 <th>CanceledBy</th>-->
								 <th>CreationDate</th>
								 <th>CreatedBy</th>
								 <th>LastUpdatedBy</th>
								 <th>LastUpdateDate</th> 
								 <th>LastUpdateLogin</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $i=1;?>
                              
                              <tr>
                                 <td><?php echo $i++; ?></td>
                                 <td><?php echo e($invoiceData['CheckId']); ?></td>
								 <td><?php echo e($invoiceData['PaymentNumber']); ?></td>
								 <td><?php echo e($invoiceData['PaymentAmount']); ?></td>
								 <td><?php echo e($invoiceData['PaymentDate']); ?></td>
								 <td><?php echo e($invoiceData['AccountingDate']); ?></td>
								 <td><?php echo e($invoiceData['VoidDate']); ?></td>
								 <td><?php echo e($invoiceData['PaymentStatus']); ?></td>
								 <td><?php echo e($invoiceData['AccountingStatus']); ?></td>
								 <td><?php echo e($invoiceData['PaymentType']); ?></td>
								 <td><?php echo e($invoiceData['Payee']); ?></td>
								 <td><?php echo e($invoiceData['PayeeSite']); ?></td>
								 <td><?php echo e($invoiceData['PaymentMethodCode']); ?></td>
								 <td><?php echo e($invoiceData['PaymentMethod']); ?></td>
								 <td><?php echo e($invoiceData['SupplierNumber']); ?></td>
								 <td><?php echo e($invoiceData['ClearingDate']); ?></td>
								 <td><?php echo e($invoiceData['ClearingAmount']); ?></td>
								 <td><?php echo e($invoiceData['SupplierNumber']); ?></td>
								 <td><?php echo e($invoiceData['RemitToAccountNumber']); ?></td>
								 <td><?php echo e($invoiceData['VoucherNumber']); ?></td>
								
								 <td><?php echo e($invoiceData['CreationDate']); ?></td>
								 <td><?php echo e($invoiceData['CreatedBy']); ?></td>
								 <td><?php echo e($invoiceData['LastUpdatedBy']); ?></td>
								<td><?php echo e($invoiceData['LastUpdateDate']); ?></td>
                                <td><?php echo e($invoiceData['LastUpdateLogin']); ?></td>
                                 
                              </tr>
                             
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
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
	  
	   <div class="modal-header">
	   <h4 class="modal-title" id="myModalLabel">API Call Login Credential</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            
        </div>
        <form class="tagForm" id="tag-form" action="" method="post" enctype="multipart/form-data">
		<?php echo csrf_field(); ?>
            <div class="modal-body">
                <label for="tagName">Username: </label>
                <input id="tagName" class="form-control" type="text" name="username"/>
				
				 <label for="tagName">Password: </label>
                <input id="password" class="form-control" type="password" name="password"/>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input id="tag-form-submit" type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
	  
	  
    </div>

  </div>
</div>
<script>
$(function() {

$('#tag-form-submit').on('click', function(e) {
    e.preventDefault();
   /* $.ajax({
        type: "POST",
        url: "",
        data: $('form.tagForm').serialize(),
        success: function(response) {
            alert(response['response']);
        },
        error: function() {
            alert('Error');
        }
    });*/
	//var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo e(url('/checkApiCredential')); ?>",
          method: 'POST',
          //data: {region_code:region_code, _token:token},
		  data: $('form.tagForm').serialize(),
          success: function(data) {
			  
			  console.log(data);
			  if(data==200)
			  {
				  
			  }else{
				  
			  }
			 // return false;
          
           // $("input[name='factsheet_code'").val(data);
          },
		  error: function() {
            alert('Error');
        }
      });
    return false;
});
});
</script><?php /**PATH /var/www/html/lrms/resources/views/check_report.blade.php ENDPATH**/ ?>