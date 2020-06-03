@include('layouts.adminLayout.admin_header')
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="{{ asset('js/dist/jquery.simplewizard.css') }}" rel="stylesheet" />
<!-- <link rel="stylesheet" href="{{ asset('css/tabnav.css') }}"> -->
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
			<li class="nav-item active">
							<a data-toggle="collapse" href="#usertablesReport">
								<i class="fas fa-table"></i>
								<p>User Management</p>
								<span class="caret"></span>
							</a>
							<div class="collapse show" id="usertablesReport">
								<ul class="nav nav-collapse">
								   <li class="active">
										<a href="{{ url('/userList')}}">
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
										<a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
											<span class="sub-item">Check  </span>
										</a>
									</li>
                                    <!--{{ url('/getCheckData')}}<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
									
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
									<li>
										<a href="{{ url('/allBankBranch')}}">
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
             <form name='form1'  method="POST" action="{{ url('saveUser') }}" enctype="multipart/form-data" id="create_form">
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
                      <div class="card-title">Create User</div>
                    </div>
                    <div class="card-body">
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">User Type</label>

                            <div class="col-md-6"> 
                             <select name="role_id" class="form-control">
                            <?php foreach($roleList as $role){?>
                            <option value="<?php echo $role->id?>"><?php echo $role->role_name?></option>
                         
                            <?php }?>
                        </select>

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
   
   </div>
</div>
</div>
@include('layouts.adminLayout.admin_footer')      
<!--<script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>-->
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
		@csrf
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
          url: "{{ url('/checkApiCredential')}}",
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
</script>