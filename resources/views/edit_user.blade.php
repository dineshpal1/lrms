@include('layouts.adminLayout.admin_header')

<!--<link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>-->
 <link rel="stylesheet" type="text/css" href="http://164.52.196.61/lrms/public/css/fonts.min.css">

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
      <style>
.form-group label {
    margin-bottom: .5rem !important;
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

.swal-button{
  background-color: green;

}


      </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			<br><br><br><br>
                <div class="card-header">Update Register</div>
<br><br>
                <div class="card-body">
                    <form method="POST" action="{{ url('updateUser') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $userData['name'] }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $userData['email'] }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
								 <input id="password-field" type="text" class="form-control" name="password" value="{{ $userData['raw_value'] }}">
                                 <!--<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span-->
								 
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
							<input type="hidden" value="{{ $userData['id'] }}" name="user_id">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script >
    $(document).ready(function() {
		
		alert("call");
$(".toggle-password").click(function() {
	
	alert("inside calls");

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
	});
