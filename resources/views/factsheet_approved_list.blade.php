  <!-- TOP NAV -->
 @include('layouts.userLayout.user_header')
   <!-- Sidebar -->
   <!-- End Sidebar -->
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
						
						<!-- <li class="nav-item">
							<a href="{{ url('/createFactSheet')}}">
								<i class="fas fa-desktop"></i>
								<p>Create Fact Sheet</p>
							</a>
						</li> -->
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
                                    @if(Auth::user()->role_id==1 || Auth::user()->role_id==4)

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
                         @if(Auth::user()->role_id==1 || Auth::user()->role_id==4)
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
									<li>
										<a href="{{ url('/RentalsNextDueReport')}}">
											<span class="sub-item">Rentals Next Due Report  </span>
										</a>
									</li>
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
								
								<li>
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
                                               @endif
								
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
                  <h4 class="card-title">Facts List  ( Total : {{$approvedList->count('id')}} )</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
						  <th>Sr. No</th>
                          <th>FactSheet Code</th>
						  <th>Branch Code</th>
						  <th>Location</th>
						  <th>Area Code</th>
                          <th>No. of Owner</th>
                           <th>PDF</th>
						   <th>DOC</th>
                            <th>Action</th>
                            <th>Current Status</th>
                            
                        </tr>
                      </thead>

                      <tbody>
                           <?php $i=1;?>
                        @foreach ($approvedList as $facts)
                        <tr style="text-align:left;">
						  <td><?php echo $i++; ?></td>
                          <td>{{$facts->factsheet_code}}</td>
						  <td>{{ $facts->branch_code}}</td>
						  <td>{{ $facts->branch_location}}</td>
						  <td>{{ $facts->branch_area}}</td>
                         
                           <td><a href="{{action('FactSheetController@noOfOwner', $facts->id)}}">{{$facts->no_of_owner}}</a></td>

                           <td><a href="{{action('FactSheetController@downloadPDF', $facts->id)}}">Premises</a><strong>|</strong><a href="{{action('FactSheetController@downloadMessPDF', $facts->id)}}">Mess</a></td>
						   <td><a href="{{action('ConvertToExcelController@exportToWord', $facts->id)}}">Premises</a><strong>|</strong><a href="{{action('ConvertToExcelController@exportToMessWord', $facts->id)}}">Mess</a></td>
                           <td><a href="{{action('FactSheetController@view', $facts->id)}}">View</a> |
                            <a href="{{action('FactSheetController@edit', $facts->id)}}">Edit</a>
                           </td>
                           <td>
							 
							 <button class="btn btn-success btn-default" style="background-color: #D5DBDB  !important;" data-id="{{$facts->id}}" data-toggle="modal" id="stus_{{$facts->approve_status}}" data-target="#modalForm2" style="padding-top: 2px;
                               height: 21px;"> <?php if($facts->approve_status==0)
							       {
							       	echo "<b style='background-color: #334BFF !important;'>";	
                                   echo "PENDING";
                                   echo "</b>";
							       }elseif($facts->approve_status==2)
							       {
							       	echo "<b style='background-color: #FF3333 !important;'>";
							       	echo "REJECT";
							       	echo "</b>";
							       }else
							       {
							       	echo "<b style='background-color: #33FF5D !important;'>";
							       	echo "APPROVED"; echo "</b>";
							       }
							 ?>
                                 </button>
							
							 <input type="hidden" name="prevremarks" id="prevremarks_{{$facts->id}}" value="{{ $facts->approve_status_remarks}}">
                           </td>
                         
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
              <form role="form" method="post" action="{{ url('addMoreNoOfOwner') }}">
			  @csrf
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
							
							     @if ($errors->has('no_of_owner'))
                        <span class="text-danger">{{ $errors->first('no_of_owner') }}</span>
                       
                        @endif
							
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


<!-- Modal2 -->
<div class="modal fade" id="modalForm2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
			                <h4 class="modal-title" id="myModalLabel">Fact Sheet Status Pending/Approved/Rejected</h4>

                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
<!--                 <p class="statusMsg"></p>
 -->              <!--   <form role="form" > -->
              <form role="form" method="post" action="{{ url('updateStatus') }}">
			  @csrf
                  <div class="row">
                    <div class="form-check">
                     <label for="name">FACT SHEET CURRENT STATUS</label>
                     <br>
						<label class="form-radio-label">
						<input class="form-radio-input" type="radio" name="approve_status" id="pending" value="0">
						<span class="form-radio-sign">Pending</span>
						</label>
						<label class="form-radio-label ml-3">
						<input class="form-radio-input" type="radio" name="approve_status" id="approved" value="1">
						<span class="form-radio-sign">Approved</span>
						</label>

						<label class="form-radio-label ml-3">
						<input class="form-radio-input" type="radio" name="approve_status" id="reject" value="2">
						<span class="form-radio-sign">Reject</span>
						</label>
                       </div> 
                  
                </div>
                 <div class="row">
                 <div class="form-group">
                     <label for="name">Remarks</label><br>
                     <textarea name="status_remarks" rows="4" cols="50" id="remarks"></textarea>
                     							
                       </div> 
                  
                </div>

                   

                      <!-- Modal Footer -->
            <div class="modal-footer">
                <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
              <button type="submit" class="btn btn-primary submitBtn">SUBMIT</button>

              <input type="hidden" name="fact_sheet_id_status" id="fact_sheet_id_status" value="">
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

   $('.btn-default').on('click', function() {
	$("#fact_sheet_id_status").val($(this).data('id'));

    //alert($(this).data('id'));
	var status = $(this).attr('id');
	//alert(status);
	var res = status.split("_");
	//console.log(res);
	//console.log(res[0]);
	//console.log(res[1]);
	if(res[1]==0)
	{
       $("#pending").prop("checked", true); 	
	}else if(res[1]==2)
	{
	  $("#reject").prop("checked", true); 	
	}else{
	  $("#approved").prop("checked", true); 	
	}
   var remarks_id=$(this).data('id');

   // var remarks_val=$('#prevremarks_'$(this).data('id')).val(); 

   var remarks_val=$('#prevremarks_' + remarks_id).val();

    $('#remarks').val(remarks_val); 
  
	
  });
});
</script>