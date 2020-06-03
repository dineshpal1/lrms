@include('layouts.adminLayout.admin_header')

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
										<a href="{{ url('/createFactSheet')}}">
											<span class="sub-item">Create Fact Sheet</span>
										</a>
									</li>
									<li class="active">
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
									<!--<li >
										<a href="{{ url('/addState')}}">
											<span class="sub-item">Add State </span>
										</a>
									</li>-->
								
									<!--<li >
										<a href="{{ url('/addBank')}}">
											<span class="sub-item">Add Bank </span>
										</a>
									</li>-->
									
									<!--<li >
										<a href="{{ url('/addCity')}}">
											<span class="sub-item">Add City </span>
										</a>
									</li>-->
								
								
									<!--<li >
										<a href="{{ url('/addBranch')}}">
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
                        @csrf
                      
        <div class="page-inner" id="printableArea">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                <a class="nav-link" href="{{action('FactSheetController@view', $factSheet->id)}}">Fact Sheet</a>
                  <!-- <a class="nav-link active" id="home-tab" data-toggle="tab" href="{{action('FactSheetController@view', $factSheet->id)}}" role="tab"
                    aria-controls="home" aria-selected="true">Fact Sheet</a> -->
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{action('FactSheetController@viewnew', $factSheet->id)}}">Attachement</a>
                  <!-- <a class="nav-link" id="home-tab" data-toggle="tab" href="{{action('FactSheetController@viewnew', $factSheet->id)}}" role="tab"
                    aria-controls="home" aria-selected="true">Attachement</a> -->
                </li>
               
                </ul>
            </div>
                       
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                  aria-labelledby="home-tab">

                  <div class="card">
                    
                    <div class="card-body">  
                   <div class="card-header">
                      <div class="card-title">Fact Premises Images 
                     <!--    <input type="button" onclick="printDiv('printableArea')" value="Print" style="float: right;padding: 4px;"/> -->
                      </div>
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
                     <div class="form-group" style="text-align:center">
                       
                      <img src="{{ asset('uploads/factsheet_premises/'.$img) }}" width="200" height="100">
					  
					 <!--  <a href="{{ action('FactSheetController@downloadImage', $factSheet->id)}}" class="btn btn-outline-warning">Download Cover</a>
 -->
 <a href="{{ asset('uploads/factsheet_premises/'.$img) }}" download> Download</a>
                       <?php

                      }
                    }else{

                        echo "<label for='inlineinput' style='color:red;important!'>No Premises Attached</label>";
                    }
                        ?>

                  </div>
                </div>
              </div>
            </div>

                   
                  <div class="card-body">  
                    
                    <div class="card-header">
                      <div class="card-title">All Owner Documents Details </div>
                    </div>
                     <br>
                        
                        <?php 
                     
                        if(!empty($ownerData))
                        {
                           foreach($ownerData as $owner)
                           {?>
                            <hr>
                          <div class="row">
                           <div class="col-12">
                               <label for="inlineinput">Cancelled Cheque</label>    <br><br>
                            <div class="form-group">         
                           <img src="{{ asset('uploads/owner_cancelled_cheque/'.$owner['owner_cancelled_cheque_copy']) }}" width="200" height="100" alt="No Image">
                            <a href="{{ asset('uploads/owner_cancelled_cheque/'.$owner['owner_cancelled_cheque_copy']) }}" download> Download</a>
                            </div>
                          </div>
                        </div>
                           <hr>

                           <div class="row">
                           <div class="col-12">
                            <label for="inlineinput">PAN Card</label>     <br><br>           
                            <div class="form-group">
                           <img src="{{ asset('uploads/owner_pan_card/'.$owner['owner_pan_card_copy']) }}" width="200" height="100" alt="No Image">
                           <a href="{{ asset('uploads/owner_pan_card/'.$owner['owner_pan_card_copy']) }}" download> Download</a>
                          </div>
                          </div>
                           </div>
                            <hr>

                           <div class="row">  
                          <div class="col-12">
                            <label for="inlineinput">Aadhaar Card</label>    <br><br>         
                            <div class="form-group">
                           <img src="{{ asset('uploads/owner_aadhaar_card/'.$owner['owner_aadhaar_card_copy']) }}" width="200" height="100" alt="No Image">
                            <a href="{{ asset('uploads/owner_aadhaar_card/'.$owner['owner_aadhaar_card_copy']) }}" download> Download</a>
                             </div>
                          </div>
                           </div>
                          <?php  }
                         
                        }else
                        {

                          echo "No Owner Document Details";
                        }?>
                        
                           </div>


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
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>