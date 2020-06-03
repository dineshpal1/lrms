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
								
								<li>
										<a href="{{ url('/allBranch')}}">
											<span class="sub-item">View All Branch </span>
										</a>
									</li>
									<li class="active">
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
          
           <!--  <form name="factSheetForm" id="factSheetForm"> -->
              <form name='form2'  method="POST" action="{{ url('saveBranch') }}" id="addBranch">
              @csrf


            
        <div class="page-inner">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




          <div class="row">
            <div class="col-md-6">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Add Branch </a>

                </li>
               
                </ul>
            </div>
           
            </div>
           
             <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name"> Branch Id</label>
                  
                      <input type="text" class="form-control" name="branch_id" style="text-transform: uppercase" />
                      
                     
                      </div>
                        </div>
						 <div class="col-6">
                     <div class="form-group">
                        <label for="name"> Branch Code</label>
                  
                      <input type="text" class="form-control" name="branch_code" style="text-transform: uppercase" />
                      
                     
                      </div>
                        </div>

                       
                       
                    </div> 
					
					 <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name"> Branch Type</label>
                  
                      <input type="text" class="form-control" name="branch_type" style="text-transform: uppercase" />
                      
                     
                      </div>
                        </div>
						 <div class="col-6">
                     <div class="form-group">
                        <label for="name"> Branch Name</label>
                  
                      <input type="text" class="form-control" name="branch_name" style="text-transform: uppercase" />
                      
                     
                      </div>
                        </div>

                       
                       
                    </div> 
         
        <br/>
           <div class="card-action">
                  
                      <button type="button" class="btn btn-danger" onClick="window.location='{{url("allBranch")}}'" >Cancel</button>
                      <input type="submit" class="btn btn-success" value="Add">
                      
    
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


 <script>
function ValidationEvent() {
  var factsheet_type=document.getElementById("factsheet_type").value;
  if(factsheet_type=="0")
  {
    alert("Please Select Fact Sheet Type");
    return false;

  }else{
    return true;}
}
 </script>


 /*//Route::get("allCity","All_Masters@showAllCity");
//Route::get("addCity","All_Masters@addCity");
//Route::post("saveCity","All_Masters@saveCity");*/