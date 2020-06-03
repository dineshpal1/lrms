  <!-- TOP NAV -->
  @include('layouts.adminLayout.admin_header')
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
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#tablesReport">
								<i class="fas fa-table"></i>
								<p>User Management</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tablesReport">
								<ul class="nav nav-collapse">
								   <li>
										<a href="{{ url('/userList')}}">
											<span class="sub-item">User List  </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/createUser')}}">
											<span class="sub-item">Create User  </span>
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
										<a href="{{ url('/createFactSheet')}}">
											<span class="sub-item">Create Fact Sheet</span>
										</a>
									</li>
									<li>
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
						<li class="nav-item submenu active">
							<a data-toggle="collapse" href="#tablesMaster">
								<i class="fas fa-table"></i>
								<p>Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="tablesMaster">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ url('/state')}}">
											<span class="sub-item">View All State  </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/addState')}}">
											<span class="sub-item">Add State </span>
										</a>
									</li>
								    <li>
										<a href="{{ url('/allBank')}}">
											<span class="sub-item">View All Bank  </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/addBank')}}">
											<span class="sub-item">Add Bank </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/allCity')}}">
											<span class="sub-item">View All City </span>
										</a>
									</li>
									<li>
										<a href="{{ url('/addCity')}}">
											<span class="sub-item">Add City </span>
										</a>
									</li>
								
								<li class="active">
										<a href="{{ url('/allBranch')}}">
											<span class="sub-item">View All Branch </span>
										</a>
									</li>
									<li >
										<a href="{{ url('/addBranch')}}">
											<span class="sub-item">Add Branch </span>
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
        <div class="page-inner">
		@if(session()->has('status'))
<div class="btn btn-block btn-success">
 
  {{session('status')}}
  
  </div>

@endif
@if (session('update'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('update') }} </strong>
  </div>
@endif
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Branch List  </h4>
				  <a class="btn btn-success btn-lg pull-right" href="{{url('addBranch')}}" >Add Branch</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                 <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
						                <th>Sr. No</th>
										<th>Branch_Id</th>
										<th>Branch_Code</th>
										<th>Branch_Type</th>
										<th>Branch_Name</th>
                         
                        </tr>
                      </thead>

                      <tbody>
                           <?php $i=1;?>
                        @foreach ($branch as $row)
                        <tr>
						           <td><?php echo $i++; ?></td>
									<td>{{$row->branch_id}}</td>
									<td>{{$row->branch_code}}</td>
									<td>{{$row->branch_type}}</td>
									<td>{{$row->branch_name}}</td>
                          


                        </tr>
                      @endforeach

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
             @include('layouts.adminLayout.admin_footer')      
  <!-- Datatables -->
  <script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>


    
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
