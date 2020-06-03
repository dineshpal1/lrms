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
									<li>
										<a href="{{ url('/FactsList')}}">
											<span class="sub-item">Fact Sheet List  </span>
										</a>
									</li>
									<li class="active">
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
.renew{
  
  background-color: #ff661a !important;
}


      </style>
    <div class="main-panel">

      <div class="content">

        <!--Error message start here--->
  
 {{-- <div class="error">
             @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                @endforeach
              </div>
             @endif
      </div> 
      --}}

<!--Error message end here--->
           <form method="POST" action="{{ url('saveRenewalData') }}" enctype="multipart/form-data">
                        @csrf
                      


                      
        <div class="page-inner">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Fact Sheet</a>
                    
                </li>
				
               <li class="float-sm-right" >
                  <a class="btn btn-success btn-sm "  href="{{url('FactsList')}}" style="margin-left: 884px;">Back</a>
					
					 
                </li>
               
                </ul>
            </div>
            <div class="col-md-12">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                  aria-labelledby="home-tab">

              <!-------Renewal section add start-------->

              <div class="card ">
                    <div class="card-header renew ">
                      <div class="card-title text-white ">Agreement Renewal Form </div>
                    </div>

                    <div class="card-body">

                          <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label for="inlineinput">FactSheet Code</label>
                           <input type="text" id="factsheet_code" name="factsheet_code" class="form-control" value="{{ $factSheet->factsheet_code }}" readonly>
                            </div>                                           
                         </div>
                         
                           @php
                            $data=$factSheet->no_of_renewal;
                            $unique_code=$factSheet->factsheet_code.'-'.($data+1);
                           // print_r($data);
                           


                            @endphp
                         
                         <div class="col-6">
                         
                          <div class="form-group">
                                <label for="name">Unique Code</label>
                              <input type="text" id="unique_code" name="unique_code" class="form-control  text-danger font-weight-bold" aria-required="true" value="{{ $unique_code }}">
                         </div>     

                    

                        </div>
                       </div>

                      

                        <div class="row">

                        {{-- <div class="col-6">
                            <div class="form-group">
                            <label for="inlineinput">Supplier No.</label>
                           <input type="text" id="supplier_no" name="supplier_no" class="form-control" value="{{ $supplier_list }}" readonly>
                            </div>                                           
                         </div>
                     
                         <div class="col-6">
                           <div class="form-group">
                            <label for="inlineinput">Name Of Landlord</label>
                          <input type="text" id="name_of_landlord" name="name_of_landlord" class="form-control" value="{{ $owner_name_list }}" readonly>
                        </div>                                           
                        </div>
                         --}}
                       </div>

                       


              <div class="row">
                       <div class="col-4">
                     <div class="form-group">
                      @php
                        
                         $renew_date= Carbon\Carbon::parse($factSheet->agreement_period_end)->format('Y-m-d'); 
                      @endphp
                        <label for="name">Agreement Renew Start Date : {{ $renew_date }}</label>


                         <!---------date conversion in carbon start here---------->
                          @php
                       $renew_start_date= Carbon\Carbon::parse($factSheet->agreement_period_end)->addDays(1)->format('Y-m-d');  
                       //$renew_start_date1=Carbon\Carbon::createFromFormat('d/m/Y',$renew_start_date)->format('Y-m-d');
   
      
                       @endphp
                        <!---------date conversion in carbon end here---------->
                        <input type="date" id="agreement_period_start" name="agreement_period_start" class="form-control  error" aria-required="true" value={{$renew_start_date}}>

                         @if ($errors->has('agreement_period_start'))
                        <span class="text-danger">{{ $errors->first('agreement_period_start') }}</span>
                       
                        @endif
                      </div>
                        </div>

                         @php
                        /*
                         $enddate=$factSheet->agreement_period_end;
                          $enddateArr=explode(" ",$enddate);
                          $date=$enddateArr[0];
                          //print_r($date);
                         // exit;
                       $end_renew_date= Carbon\Carbon::parse( $date)->addYears(0)->format('Y-m-d'); 
                       */

                       $end_renew_date= Carbon\Carbon::parse($factSheet->agreement_period_end)->addYears(1)->format('Y-m-d'); 
                       //print_r($end_renew_date);
                       //exit; 
                       
                       @endphp
                        <!---------date conversion in carbon end here---------->
						{{--
						  <div class="col-4">
                        <div class="form-group">
                        <label for="name">Renual Agreenent Period In Months</label>

                       <!---------date conversion in carbon start here---------->
                        @php
                        // $renew_start_date= Carbon\Carbon::parse($factSheet->agreement_period_end)
                        
                          $enddate=$factSheet->agreement_period_end;
                          $enddateArr=explode(" ",$enddate);
                         $date=$enddateArr[0];
                          //print_r($date);
                       //  // exit;
                       $end_renew_date= Carbon\Carbon::parse( $date)->addYears(1); 
                        $renew_start_date= Carbon\Carbon::parse($factSheet->agreement_period_end)->format('Y-m-d');

                       $diff_in_months=$end_renew_date->diffInYears($renew_start_date);
                       //dd($diff_in_months);
                      //exit;

                          @endphp
                       <!---------date conversion in carbon end here---------->

                         <input type="text" id="agreement_period_in_months" name="agreement_period_in_months" class="form-control error" aria-required="true" >
                           
                            
                            
                         
                        </div>                   
                        </div>
						--}}
						<div class="col-2">
                     <div class="form-group">
                        <label for="name">Renew period in year</label>
                        <select id="renewal_agreement_year" name="renewal_agreement_year" class="form-control error"  aria-required="true">
                        <?php 
                        //$cur_year = date('Y');
                        for ($i=00; $i<=99; $i++) 
                        {?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php }
                        ?>
                      </select>
                      </div>
                        </div>
						 <div class="col-2">
                         <div class="form-group">
                         <label for="name">Renew period in month</label>
                          <select id="renewal_agreement_month" name="renewal_agreement_month" class="form-control error"  aria-required="true">
                        <?php 
                       
                        for ($i=00; $i<=12; $i++) 
                        {?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                          <?php }
                        ?>
                      </select>
                      </div>
                        </div>




                         <div class="col-4">
                        <div class="form-group">
                        <label for="name" style="margin-left:20px;">Agreement Renew End Date {{--$end_renew_date--}}</label>

                              <!---------date conversion in carbon start here---------->
                       

                        <input type="date" id="agreement_period_end" name="agreement_period_end" class="form-control error" aria-required="true" value="" onBlur="checkRenewalEndDate()">

                       @if ($errors->has('agreement_period_end'))
                        <span class="text-danger">{{ $errors->first('agreement_period_end') }}</span>
                       
                        @endif

                        </div>
                        </div>
                        <!-----Add years to agreement perios start here---->

                      
      
                        <!-----Add years to agreement perios end here---->                     
                       
                    </div>   

                       

                        <div class="row">
                         
                         <div class="col-6">
                           <div class="form-group">
                            <label for="inlineinput">Present Rent</label>
                          <input type="text" id="present_rent" name="present_rent" class="form-control" value="{{ $factSheet->total_month_rent }}" readonly>
                        </div>                                           
                        </div>
                       </div>


                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label for="inlineinput">Revised Rent</label>
                           <input type="text" id="revised_rent" name="revised_rent" class="form-control" value="" onblur="checkRent()">

                        @if ($errors->has('revised_rent'))
                        <span class="text-danger">{{ $errors->first('revised_rent') }}</span>
                       
                        @endif
                            </div>                                           
                         </div>
                         <div class="col-6">
                           <div class="form-group">
                            <label for="inlineinput">Monthly Increase</label>
                          <input type="text" id="monthly_increase" name="monthly_increase" class="form-control" value="">
                        </div>                                           
                        </div>
                       </div>
        

                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                            <label for="inlineinput">Occupancy Date</label>
                           <input type="date" id="branch_occupancy_date" name="branch_occupancy_date" class="form-control" value="{{ $factSheet->branch_occupancy_date }}" readonly>
                            </div>                                           
                         </div>

                          <div class="col-6">
                            <div class="form-group">
                            <label for="inlineinput">No of Renewals</label>
                           <input type="text" id="no_of_renewal" name="no_of_renewal" class="form-control" value="{{ $factSheet->no_of_renewal}}" readonly>
                            </div>                                           
                         </div>
                        
                       </div>
                       <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                           <label for="inlineinput">Additional Information(Rental Past History)</label>
                           <textarea id="rental_past_history" name="rental_past_history" class="form-control" rows="4" cols="50" style="text-transform: uppercase"></textarea>
                            </div>                                           
                         </div>
                       <!-- </div>-->
        
                     <!-- <div class="row">-->
                          <div class="col-6">
                            <div class="form-group">
                           <label for="inlineinput">Action Taken(Concluded & Forward For Approval)</label>
                              <textarea id="action_taken" name="action_taken" class="form-control" rows="4" cols="50" style="text-transform: uppercase"></textarea>
                            </div>                                           
                         </div>
                       </div>

                        <div class="row">
                           <div class="col-12">
                            <div class="form-group">
                           <label for="inlineinput">Comment</label>
                              <textarea id="comment" name="comment" class="form-control" rows="4" cols="50" style="text-transform: uppercase"></textarea>
                            </div>                                           
                         </div>
                        </div>
                        </div>
              <!---------end here--------->

                  <div class="card">
                    <div class="card-header">
                      <div class="card-title">Branch Details </div>
                    </div>

                    <div class="card-body">

                          <div class="row">
                       <div class="col-6">
                         <div class="form-group">

                         <label for="inlineinput">Region List</label>
{{--                           <input type="text" id="region_code" name="region_code" class="form-control" value="{{ $factSheet->region_code }}" >
  --}}                     <select name="region_code" id="region_code" class="form-control" >
                            <option value=""></option>
                         <?php foreach($regionList as $region){?>
                         <option value="<?php echo  $region->region_code; ?>" <?php if($factSheet->region_code==$region->region_code) echo "selected";?>><?php echo  $region->name;?>(<?php echo  $region->region_code; ?>) </option>
                       <?php }?>
                        </select>

                          </div>

                        </div>
                          <div class="col-6">
                             <div class="form-group">
                            <label for="inlineinput">FactSheet Code</label>
                          <input type="text" id="factsheet_code" name="factsheet_code" class="form-control" value="{{ $factSheet->factsheet_code }}" readonly>
                        </div> 
                                           
                        </div>
                    </div>

                      <div class="row">
                       <div class="col-6">
                            <div class="form-group">
                            <label for="name">Branch Code</label>
                        <select name="branch_code" id="branch_code" class="form-control" aria-required="true">
                               <option value=""></option>
                         <?php foreach($branchList as $branch){?>
                         <option value="<?php echo  $branch->branch_code; ?>" <?php if($factSheet->branch_code==$branch->branch_code) echo "selected";?>><?php echo  $branch->branch_name; ?>(<?php echo  $branch->branch_code; ?>)</option>
                       <?php }?>
                        </select> 

                        </div> 
                       
                        </div>
                          <div class="col-6">
                              <div class="form-group">
                          <label for="name">Branch Type</label>
                           <input type="text" id="branch_type" name="branch_type" class="form-control error" aria-required="true" value="{{ $factSheet->branch_type }}" readonly>
                         </div>
                                         
                        </div>

                      <input type="hidden" id="branch_id" name="branch_id" class="form-control" value="{{ $factSheet->branch_id }}">

                    </div>

                      <div class="row">
                      
                        <div class="col-6">
                         
                           <div class="form-group">
                            <label for="name">Branch location</label>
                            <input type="text" id="branch_location" name="branch_location" class="form-control error" aria-required="true" value="{{ $factSheet->branch_location }}" style="text-transform: uppercase" readonly>
                          </div> 
                        </div>

                           <div class="col-6"> 

                          <div class="form-group">
                                <label for="name">Fact Sheet Date</label>
                              <input type="date" id="fact_sheet_date" name="fact_sheet_date" class="form-control error" aria-required="true" value="{{ $factSheet->fact_sheet_date }}" readonly>
                          </div>  

                        </div>
                     
                      </div>

                        <div class="row">
                      
                        <div class="col-6">
                         
                          <div class="form-group">
                                <label for="name">Occupancy Date</label>
                              <input type="date" id="branch_occupancy_date" name="branch_occupancy_date" class="form-control" aria-required="true" value="{{ $factSheet->branch_occupancy_date }}" readonly>
                         </div>     

                    
        
                        </div>  
						
							 <div class="col-3">
                         
                          <div class="form-group">
                                <label for="name">Inactive Date</label>
                              <input type="date" id="branch_inactive_date" name="branch_inactive_date" class="form-control" aria-required="true"  >
                        
                         </div>     

                    

                        </div>
						
						 <div class="col-3">
                         
                          <div class="form-group">
                                <label for="name">Vacation Date</label>
                              <input type="date" id="branch_vacation_date" name="branch_vacation_date" class="form-control" aria-required="true"  >
                        
                         </div>     

                    

                        </div>
						
						

                     
                      </div>
                 
                      </div>
                        <div class="card-body">
                   <div class="card-header">
                      <div class="card-title">Address & Premises Details </div>
                    </div>
                    <br>
                    <div class="row">
                       <div class="col-6">
                         <div class="form-group">
                         <label for="name">Address1</label>
                         <input type="text" id="address1" name="address1" class="form-control error" aria-required="true" value="{{ $factSheet->address1 }}" style="text-transform: uppercase" readonly>
                       </div>
                        </div>
                          <div class="col-6">
                           <div class="form-group">
                            <label for="name">Address2</label>
                             <input type="text" id="address2" name="address2" class="form-control  error" aria-required="true" value="{{ $factSheet->address2 }}" style="text-transform: uppercase" readonly>
                         </div>                     
                        </div>
                    </div>

                   <div class="row">
                       <div class="col-6">
                       <div class="form-group">
                        <label for="name">Address3</label>
                        <input type="text" id="address3" name="address3" class="form-control error" aria-required="true" value="{{ $factSheet->address3 }}" style="text-transform: uppercase" readonly>
                      </div>
                        </div>

                          <div class="col-6">
                       <div class="form-group">
                        <label for="name">City</label>
                        <select id="city" name="city" class="form-control error" aria-required="true">
                          <?php foreach($cityList as $cities) {?>
                          <option value="<?php echo $cities->city; ?>"><?php echo $cities->city; ?></option>
                        <?php }?>
                        </select>

                      </div>
                        </div>

                          
                    </div>
                     <div class="row">
                      <div class="col-6">
                           <div class="form-group">
                          <label for="name">State</label>
                           <select id="state" name="addr_state" class="form-control error" aria-required="true">
                               <option value="0">Select State</option>
                               <option value="ANDAMAN AND NICOBAR ISLANDS" {{ ($factSheet->state == "ANDAMAN AND NICOBAR ISLANDS") ? 'selected="selected"' : '' }}>ANDAMAN AND NICOBAR ISLANDS</option>  
                               <option value="ANDHRA PRADESH" {{ ($factSheet->state == "ANDHRA PRADESH") ? 'selected="selected"' : '' }}>ANDHRA PRADESH</option>
                               <option value="ANDHRA PRADESH(New)" {{ ($factSheet->state == "ANDHRA PRADESH(New)") ? 'selected="selected"' : '' }}>ANDHRA PRADESH(New)</option>
                               <option value="ARUNACHAL PRADESH" {{ ($factSheet->state == "ARUNACHAL PRADESH") ? 'selected="selected"' : '' }}>ARUNACHAL PRADESH</option>
                               <option value="ASSAM" {{ ($factSheet->state == "ASSAM") ? 'selected="selected"' : '' }}>ASSAM</option>
                               <option value="BIHAR" {{ ($factSheet->state == "BIHAR") ? 'selected="selected"' : '' }}>BIHAR</option>
                               <option value="CHANDIGARH">CHANDIGARH</option>
                               <option value="CHATTISGARH">CHATTISGARH</option>
                               <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                               <option value="DAMAN AND DIU" {{ ($factSheet->state == "DAMAN AND DIU") ? 'selected="selected"' : '' }}>DAMAN AND DIU</option>
                               <option value="DELHI" {{ ($factSheet->state == "DELHI") ? 'selected="selected"' : '' }}>DELHI</option>
                                <option value="GOA" {{ ($factSheet->state == "GOA") ? 'selected="selected"' : '' }}>GOA</option>
                               <option value="GUJARAT" {{ ($factSheet->state == "GUJARAT") ? 'selected="selected"' : '' }}>GUJARAT</option>
                               <option value="HARYANA" {{ ($factSheet->state == "HARYANA") ? 'selected="selected"' : '' }}>HARYANA</option>
                               <option value="HIMACHAL PRADESH" {{ ($factSheet->state == "HIMACHAL PRADESH") ? 'selected="selected"' : '' }}>HIMACHAL PRADESH</option>
                               <option value="JAMMU AND KASHMIR" {{ ($factSheet->state == "JAMMU AND KASHMIR") ? 'selected="selected"' : '' }}>JAMMU AND KASHMIR</option>
                               <option value="JHARKHAND" {{ ($factSheet->state == "JHARKHAND") ? 'selected="selected"' : '' }}>JHARKHAND</option>             
                               <option value="Karnataka" {{ ($factSheet->state == "Karnataka") ? 'selected="selected"' : '' }}>Karnataka</option>
                               <option value="KERALA" {{ ($factSheet->state == "KERALA") ? 'selected="selected"' : '' }}>KERALA</option>
                               <option value="LAKSHWADEEP" {{ ($factSheet->state == "LAKSHWADEEP") ? 'selected="selected"' : '' }}>LAKSHWADEEP</option>
                               <option value="MADHYA PRADESH" {{ ($factSheet->state == "MADHYA PRADESH") ? 'selected="selected"' : '' }}>MADHYA PRADESH</option>
                               <option value="MAHARASHTRA" {{ ($factSheet->state == "MAHARASHTRA") ? 'selected="selected"' : '' }}>MAHARASHTRA</option>
                               <option value="MANIPUR" {{ ($factSheet->state == "MANIPUR") ? 'selected="selected"' : '' }}>MANIPUR</option>
                               <option value="MEGHLAYA" {{ ($factSheet->state == "MEGHLAYA") ? 'selected="selected"' : '' }}>MEGHLAYA</option>
                               <option value="MIZORAM" {{ ($factSheet->state == "MIZORAM") ? 'selected="selected"' : '' }}>MIZORAM</option>
                                <option value="NAGALAND" {{ ($factSheet->state == "NAGALAND") ? 'selected="selected"' : '' }}>NAGALAND</option>
                                <option value="ODISHA" {{ ($factSheet->state == "ODISHA") ? 'selected="selected"' : '' }}>ODISHA</option>
                               <option value="PUDUCHERRY" {{ ($factSheet->state == "PUDUCHERRY") ? 'selected="selected"' : '' }}>PUDUCHERRY</option>    
                               <option value="PUNJAB" {{ ($factSheet->state == "PUNJAB") ? 'selected="selected"' : '' }}>PUNJAB</option>
                               <option value="RAJASTHAN" {{ ($factSheet->state == "RAJASTHAN") ? 'selected="selected"' : '' }}>RAJASTHAN</option>
                                <option value="SIKKIM" {{ ($factSheet->state == "SIKKIM") ? 'selected="selected"' : '' }}>SIKKIM</option>
                                <option value="TAMIL NADU" {{ ($factSheet->state == "TAMIL NADU") ? 'selected="selected"' : '' }}>TAMIL NADU</option>
                                <option value="TELANGANA" {{ ($factSheet->state == "TELANGANA") ? 'selected="selected"' : '' }}>TELANGANA</option>  
                               <option value="TRIPURA" {{ ($factSheet->state == "TRIPURA") ? 'selected="selected"' : '' }}>TRIPURA</option>  
                               <option value="UTTAR PRADESH" {{ ($factSheet->state == "UTTAR PRADESH") ? 'selected="selected"' : '' }}>UTTAR PRADESH</option>
                               <option value="UTTARAKHAND" {{ ($factSheet->state == "UTTARAKHAND") ? 'selected="selected"' : '' }}>UTTARAKHAND</option>
                               <option value="WEST BENGAL" {{ ($factSheet->state == "WEST BENGAL") ? 'selected="selected"' : '' }}>WEST BENGAL</option>
                              </select>
                          </div>                    
                        </div>
                       <div class="col-6">
                      <div class="form-group">
                        <label for="name">Pincode</label>
                        <input type="number" id="pincode" name="addr_pincode" maxlength="6" class="form-control error" aria-required="true" value="{{ $factSheet->postal_code }}" onblur="checkPincode()" readonly>

                         @if ($errors->has('addr_pincode'))
                        <span class="text-danger">{{ $errors->first('addr_pincode') }}</span>
                       
                        @endif
                      </div>
                        </div>
                         </div>
                          <div class="row">
                          <div class="col-6">
                          <div class="form-group">
                          <label for="name">Office Tel.Phone</label>
                        <input type="number" id="office_tele_phone" name="office_tele_phone" class="form-control error" aria-required="true" value="{{ $factSheet->office_tele_no }}" readonly>
                        </div>                    
                        </div>
                    </div>
                  
                      </div>
                     <div class="card-body">
                     <div class="card-header">
                      <div class="card-title">Way to Office Details </div>
                    </div>
                     <br>
                     <div class="row">
                       <div class="col-6">
                      <div class="form-group">
                        <label for="name">Near By Highway</label>
                        <input type="text" id="near_by_highway" name="near_by_highway" class="form-control error" aria-required="true" value="{{ $factSheet->near_by_highway }}" style="text-transform: uppercase" readonly>
                     </div>
                        </div>
                        <div class="col-3">
                        <div class="form-group">
                        <label for="name">Distance From Highway</label>
                    <input type="text" id="distance_from_highway" name="distance_from_highway" class="form-control error" aria-required="true" value="{{ $factSheet->dist_from_highway }}" readonly>
                        </div>                   
                        </div>
                        <div class="col-3">
                        <div class="form-group">
                        <label for="name">Distance From Highway Unit</label>
                    <select id="distance_from_highway_unit" name="distance_from_highway_unit" class="form-control" aria-required="true" >
                           <option value="0">Select</option>
                          <option value="Feet" {{ ($factSheet->dist_from_highway_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->dist_from_highway_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->dist_from_highway_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                           <option value="KM" {{ ($factSheet->dist_from_highway_unit == "KM") ? 'selected="selected"' : '' }}>KM</option>
                        </select>
                        </div>                   
                        </div>
                    </div>

                    <div class="row">
                       <div class="col-6">
                        <div class="form-group">
                        <label for="name">Safexpress connectivity Route</label>
                        <input type="text" id="safexpress_connectivity_route" name="safexpress_connectivity_route" class="form-control error" aria-required="true" value="{{ $factSheet->safex_conectivity_route }}" style="text-transform: uppercase" readonly>
                    </div>
                        </div>
                        <div class="col-6">
                       <div class="form-group">
                        <label for="name">Property Location(Direction)</label>
                        <input type="text" id="property_location_direction" name="property_location_direction" class="form-control error" aria-required="true" value="{{ $factSheet->property_location }}" style="text-transform: uppercase" readonly>
                   </div>                 
                        </div>
                    </div>   

                     <div class="row">
                       <div class="col-6">
                         <div class="form-group">
                        <label for="name">Nearest Airport</label>
                  <input type="text" id="nearest_airport" name="nearest_airport" class="form-control error" aria-required="true" value="{{ $factSheet->nearest_airport }}" style="text-transform: uppercase" readonly>
                     </div>
                        </div>
                        <div class="col-6">
                      <div class="form-group">
                        <label for="name">Nearest Railway Station</label>
                        <input type="text" id="nearest_railway_station" name="nearest_railway_station" class="form-control error" aria-required="true"value="{{ $factSheet->nearest_railway_station }}" style="text-transform: uppercase" readonly>
                    </div>              
                        </div>
                    </div> 


                       </div>
                      <div class="card-body">
                        <div class="card-header">
                      <div class="card-title">Measurement & Flooring Details </div>
                    </div>
                     <br>
                     <!-- {{$factSheet}}; -->

                       <div class="row">
                         <div class="col-4">
                        <div class="form-group">
                       <label for="name">Length</label>
                        <input type="text" id="length" name="length"  class="form-control error" aria-required="true" value="{{ $factSheet->premises_length }}" readonly>

                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Length Unit</label>
                    <select id="length_unit" name="length_unit" class="form-control" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" {{ ($factSheet->premises_length_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->premises_length_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->premises_length_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                        </select>
                        </div>                   
                        </div>

                             <div class="col-4">
                        <div class="form-group">
                       <label for="name">Height</label>
                        <input type="text" id="height" name="height" maxlength="10" class="form-control error" aria-required="true" value="{{ $factSheet->premises_height }}" readonly>
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Height Unit</label>
                    <select id="height_unit" name="height_unit" class="form-control" aria-required="true">
                           <option value="0">Select</option>
                           <option value="Feet" {{ ($factSheet->premises_height_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->premises_height_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->premises_height_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                        </select>
                        </div>                   
                        </div>

                    </div> 
                     

                     <div class="row">
                         <div class="col-4">
                        <div class="form-group">
                       <label for="name">Breadth</label>
                        <input type="text" id="breadth" name="breadth"  class="form-control error" aria-required="true" value="{{ $factSheet->premises_breadth }}" readonly>
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Breadth Unit</label>
                    <select name="breadth_unit" id="breadth_unit" class="form-control" aria-required="true">
                           <option value="0">Select</option>
                           <option value="Feet" {{ ($factSheet->premises_breadth_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->premises_breadth_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->premises_breadth_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                        </select>
                        </div>                   
                        </div>

                             <div class="col-4">
                        <div class="form-group">
                       <label for="name">Platform Height</label>
                        <input type="text" id="platform_height" name="platform_height"  maxlength="10" class="form-control error" aria-required="true"value="{{ $factSheet->platform_height }}" readonly>
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Platform Height Unit</label>
                    <select name="platform_height_unit" class="form-control" aria-required="true">
                          <option value="0">Select</option>
                          <option value="Feet" {{ ($factSheet->platform_height_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->platform_height_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->platform_height_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                        </select>
                        </div>                   
                        </div>

                    </div> 
                  
                  <div class="row">
                         <div class="col-4">
                        <div class="form-group">
                       <label for="name">Total</label>
                        <input type="text" id="total_length_breadth" name="total_length_breadth" class="form-control error" aria-required="true" value="{{ $factSheet->premises_area }}" readonly>
                        </div>                   
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Total Unit</label>
                    <select name="total_length_breadth_unit" id="total_length_breadth_unit" class="form-control" aria-required="true" readonly>
                           <option value="0">Select</option>
                           <option value="Sq.Feet" {{ ($factSheet->premises_area_unit == "Sq.Feet") ? 'selected="selected"' : '' }}>Sq Feet</option>
                          <option value="Sq.Inch" {{ ($factSheet->premises_area_unit == "Sq.Inch") ? 'selected="selected"' : '' }}>Sq Inch</option>
                          <option value="Sq.Meter" {{ ($factSheet->premises_area_unit == "Sq.Meter") ? 'selected="selected"' : '' }}>Sq Meter</option>
                          <!-- <option value="Sq.Feet">Sq.Feet</option>
                          <option value="Sq.Inch">Sq.Inch</option>
                          <option value="Sq.Meter">Sq.Meter</option> -->
                        </select>
                        </div>                   
                        </div>

                    </div> 
                     <div class="row">
                       <div class="col-6">
                        <div class="form-group"> 
                            <label for="name">Flooring Type</label>
                          <select name="flooring_type" class="form-control required error" aria-required="true">
                           <option value="0">Select Flooring Type</option>
                           <option value="Kota stone" {{ ($factSheet->flooring_type == "Kota stone") ? 'selected="selected"' : '' }}>Kota stone</option>
                          <option value="Plain Cemented" {{ ($factSheet->flooring_type == "Plain Cemented") ? 'selected="selected"' : '' }}>Plain Cemented</option>
                          <option value="Trimix Floor" {{ ($factSheet->flooring_type == "Trimix Floor") ? 'selected="selected"' : '' }}>Trimix Floor</option>
                          <option value="RCC Flooring" {{ ($factSheet->flooring_type == "RCC Flooring") ? 'selected="selected"' : '' }}>RCC Flooring</option>
                           <!-- <option value="Kota stone">Kota stone</option>
                          <option value="Plain Cemented">Plain Cemented</option>
                          <option value="Trimix Floor">Trimix Floor</option>
                          <option value="RCC Flooring">RCC Flooring</option> -->
                        </select>
                      </div>     
                        </div>
                         <div class="col-4">
                      <div class="form-group">
                        <label for="name">Front Road Breadth</label>
                      <input type="text" id="front_road_breadth" name="front_road_breadth" maxlength="10" class="form-control error" aria-required="true" value="{{ $factSheet->front_road_breadth }}" readonly>
                       </div>
                      </div>
                      <div class="col-2">
                        <div class="form-group"> 
                           <label for="name">Unit</label>
                          <select name="front_road_breadth_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                           <option value="Feet" {{ ($factSheet->front_road_breadth_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->front_road_breadth_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->front_road_breadth_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                          <!-- <option value="Feet">Feet</option>
                          <option value="Inch">Inch</option>
                          <option value="Meter">Meter</option> -->
                        </select>
                      </div>              
                        </div>
                      
                    </div> 

                    <div class="row">
                        <div class="col-6">
                       <div class="form-group">
                        <label for="name">Operational Hours</label>
                        <input type="text" id="operational_hours" name="operational_hours" maxlength="3" class="form-control error" aria-required="true" value="{{ $factSheet->operational_hours }}" readonly>
                </div>             
                        </div>
                       <div class="col-4">
                       <div class="form-group">
                        <label for="name">Timings From</label>
                      
                        <select  id="operational_timing_from" name="operational_timing_from" class="form-control error" aria-required="true">
                              <option value="00:00">12.00 AM</option>
                              <option value="00:30">12.30 AM</option>
                              <option value="01:00">01.00 AM</option>
                              <option value="01:30">01.30 AM</option>
                              <option value="02:00">02.00 AM</option>
                              <option value="02:30">02.30 AM</option>
                              <option value="03:00">03.00 AM</option>
                              <option value="03:30">03.30 AM</option>
                              <option value="04:00">04.00 AM</option>
                              <option value="04:30">04.30 AM</option>
                              <option value="05:00">05.00 AM</option>
                              <option value="05:30">05.30 AM</option>
                              <option value="06:00">06.00 AM</option>
                              <option value="06:30">06.30 AM</option>
                              <option value="07:00">07.00 AM</option>
                              <option value="07:30">07.30 AM</option>
                              <option value="08:00">08.00 AM</option>
                              <option value="08:30">08.30 AM</option>
                              <option value="09:00">09.00 AM</option>
                              <option value="09:30">09.30 AM</option>
                              <option value="10:00">10.00 AM</option>
                              <option value="10:30">10.30 AM</option>
                              <option value="11:00">11.00 AM</option>
                              <option value="11:30">11.30 AM</option>
                              <option value="12:00">12.00 PM</option>
                              <option value="12:30">12.30 PM</option>
                              <option value="13:00">01.00 PM</option>
                              <option value="13:30">01.30 PM</option>
                              <option value="14:00">02.00 PM</option>
                              <option value="14:30">02.30 PM</option>
                              <option value="15:00">03.00 PM</option>
                              <option value="15:30">03.30 PM</option>
                              <option value="16:00">04.00 PM</option>
                              <option value="16:30">04.30 PM</option>
                              <option value="17:00">05.00 PM</option>
                              <option value="17:30">05.30 PM</option>
                              <option value="18:00">06.00 PM</option>
                              <option value="18:30">06.30 PM</option>
                              <option value="19:00">07.00 PM</option>
                              <option value="19:30">07.30 PM</option>
                              <option value="20:00">08.00 PM</option>
                              <option value="20:30">08.30 PM</option>
                              <option value="21:00">09.00 PM</option>
                              <option value="21:30">09.30 PM</option>
                              <option value="22:00">10.00 PM</option>
                              <option value="22:30">10.30 PM</option>
                              <option value="23:00">11.00 PM</option>
                              <option value="23:30">11.30 PM</option>
                          </select>
                      </div>
                        </div>
                        <div class="col-2">
                       <div class="form-group">
                        <label for="name">Timings To</label>
                    <select  id="operational_timing_to" name="operational_timing_to" class="form-control error" aria-required="true">
                              <option value="00:00">12.00 AM</option>
                              <option value="00:30">12.30 AM</option>
                              <option value="01:00">01.00 AM</option>
                              <option value="01:30">01.30 AM</option>
                              <option value="02:00">02.00 AM</option>
                              <option value="02:30">02.30 AM</option>
                              <option value="03:00">03.00 AM</option>
                              <option value="03:30">03.30 AM</option>
                              <option value="04:00">04.00 AM</option>
                              <option value="04:30">04.30 AM</option>
                              <option value="05:00">05.00 AM</option>
                              <option value="05:30">05.30 AM</option>
                              <option value="06:00">06.00 AM</option>
                              <option value="06:30">06.30 AM</option>
                              <option value="07:00">07.00 AM</option>
                              <option value="07:30">07.30 AM</option>
                              <option value="08:00">08.00 AM</option>
                              <option value="08:30">08.30 AM</option>
                              <option value="09:00">09.00 AM</option>
                              <option value="09:30">09.30 AM</option>
                              <option value="10:00">10.00 AM</option>
                              <option value="10:30">10.30 AM</option>
                              <option value="11:00">11.00 AM</option>
                              <option value="11:30">11.30 AM</option>
                              <option value="12:00">12.00 PM</option>
                              <option value="12:30">12.30 PM</option>
                              <option value="13:00">01.00 PM</option>
                              <option value="13:30">01.30 PM</option>
                              <option value="14:00">02.00 PM</option>
                              <option value="14:30">02.30 PM</option>
                              <option value="15:00">03.00 PM</option>
                              <option value="15:30">03.30 PM</option>
                              <option value="16:00">04.00 PM</option>
                              <option value="16:30">04.30 PM</option>
                              <option value="17:00">05.00 PM</option>
                              <option value="17:30">05.30 PM</option>
                              <option value="18:00">06.00 PM</option>
                              <option value="18:30">06.30 PM</option>
                              <option value="19:00">07.00 PM</option>
                              <option value="19:30">07.30 PM</option>
                              <option value="20:00">08.00 PM</option>
                              <option value="20:30">08.30 PM</option>
                              <option value="21:00">09.00 PM</option>
                              <option value="21:30">09.30 PM</option>
                              <option value="22:00">10.00 PM</option>
                              <option value="22:30">10.30 PM</option>
                              <option value="23:00">11.00 PM</option>
                              <option value="23:30">11.30 PM</option>
                          </select>
                    </div>
                        </div>
                    </div>    
                 

                       </div> 
                        <div class="card-body">
                       
                        <div class="card-header">
                      <div class="card-title">Connectivity & Surroundings Details </div>
                    </div>
                     <br>
                      <div class="row">
                       <div class="col-4">
                      <div class="form-group">
                        <label for="name">Connectivty Telephone</label>
                          <select name="connectivity_telephone" id="connectivity_telephone" class="form-control error" aria-required="true">
                           <option value="Yes" <?php if($factSheet->connectivity_telephone=='Yes') echo "selected";?>>Yes</option>
                          <option value="No" <?php if($factSheet->connectivity_telephone=='No') echo "selected";?>>No</option>
                        </select>
                    </div>
                        </div>
                        <div class="col-4">
                      <div class="form-group">
                        <label for="name">Connectivty Mobile</label>
                       <select name="connectivity_mobile" id="connectivity_mobile" class="form-control error" aria-required="true">
                           <option value="Airtel"  <?php if($factSheet->connectivity_telephone=='Airtel') echo "selected";?>>Airtel</option>
                           <option value="BSNL"  <?php if($factSheet->connectivity_telephone=='BSNL') echo "selected";?>>BSNL</option>
                            <option value="Idea"  <?php if($factSheet->connectivity_telephone=='Idea') echo "selected";?>>Idea</option>
                            <option value="Jio"  <?php if($factSheet->connectivity_telephone=='Jio') echo "selected";?>>Jio</option>
                          <option value="MTNL"  <?php if($factSheet->connectivity_telephone=='MTNL') echo "selected";?>>MTNL</option>
                          <option value="Vodafone"  <?php if($factSheet->connectivity_telephone=='Vodafone') echo "selected";?>>Vodafone</option>
                      
                        </select>
                    </div>
                        </div>
                        <div class="col-4">
                          <div class="form-group">
                        <label for="name">Internet service Provider</label>
                        <input type="text" id="internet_service_provider" name="internet_service_provider" class="form-control error" aria-required="true" value="{{ $factSheet->connectivity_isp }}" style="text-transform: uppercase" readonly>
                    </div>
                        </div>
                       
                    </div>   
                    <br> 
                     <div class="card-sub-title">Surroundings Details </div>
                      <br> 
                      <div class="row">
                        <div class="col-3">
                        <div class="form-group">
                        <label for="name">Front</label>
                        <input type="text" id="surrounding_front" name="surrounding_front" maxlength="100" class="form-control error" aria-required="true" value="{{ $factSheet->surrounding_front }}" style="text-transform: uppercase" readonly>
                     </div>
                        </div>

                        <div class="col-3">
                       <div class="form-group">
                        <label for="name">Back</label>
                        <input type="text" id="surrounding_back" name="surrounding_back" maxlength="100" class="form-control error" aria-required="true" value="{{ $factSheet->surrounding_back }}" style="text-transform: uppercase" readonly>
                 </div>       
                        </div>
                          <div class="col-3">
                        <div class="form-group">
                        <label for="name">Left</label>
                        <input type="text" id="surrounding_left" name="surrounding_left" maxlength="100" class="form-control error" aria-required="true" value="{{ $factSheet->surrounding_left }}" style="text-transform: uppercase" readonly>
                       </div>
                        </div>
                        <div class="col-3">
                       <div class="form-group">
                        <label for="name">Right</label>
                        <input type="text" id="surrounding_right" name="surrounding_right" maxlength="100" class="form-control error" aria-required="true" value="{{ $factSheet->surrounding_right }}" style="text-transform: uppercase" readonly>
                   </div>      
                        </div>
                    </div>    
                   <div class="card-sub-title">Competitors Details </div>
                    <br> 
                          <div class="row">
                       <div class="col-2">
                        <div class="form-group">
                        <label for="name">Near By competitors1</label>
                        <input type="text" id="near_by_competitors1" name="near_by_competitors1" maxlength="100" class="form-control error" aria-required="true" value="{{ $factSheet->near_by_competitors1 }}" style="text-transform: uppercase" readonly>
                        </div>
                        </div>
                       <div class="col-2">
                          <div class="form-group">
                        <label for="name">Distance</label>
                        <input type="text" id="near_by_competitors1_dis" name="near_by_competitors1_dis" maxlength="3" class="form-control error" aria-required="true" value="{{ $factSheet->near_by_competitors1_dis }}" readonly>
                      </div>
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Distance unit</label>
                         <select name="near_by_competitors1_dis_unit" id="near_by_competitors1_dis_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" {{ ($factSheet->premises_length_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->premises_length_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->premises_length_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                          <option value="KM" {{ ($factSheet->premises_length_unit == "KM") ? 'selected="selected"' : '' }}>KM</option>
                        </select>
                     </div>     
                        </div>
                       <br> 
                      <div class="col-2">
                        <div class="form-group">
                        <label for="name">Near By competitors2</label>
                        <input type="text" id="near_by_competitors2" name="near_by_competitors2" maxlength="100" class="form-control error" aria-required="true" value="{{ $factSheet->near_by_competitors2 }}" style="text-transform: uppercase" readonly>
                        </div>
                        </div>
                       <div class="col-2">
                          <div class="form-group">
                        <label for="name">Distance</label>
                        <input type="text" id="near_by_competitors2_dis" name="near_by_competitors2_dis"  class="form-control error" aria-required="true" value="{{ $factSheet->near_by_competitors2_dis }}" readonly>
                      </div>
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                         <label for="name">Distance unit</label>
                        <select name="near_by_competitors2_dis_unit" id="near_by_competitors2_dis_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" {{ ($factSheet->premises_length_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->premises_length_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->premises_length_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                          <option value="KM" {{ ($factSheet->premises_length_unit == "KM") ? 'selected="selected"' : '' }}>KM</option>
                        </select>
                     </div>     
                        </div>

                    </div>  
                     <br> 
                    <div class="row">
                       <div class="col-2">
                        <div class="form-group">
                        <label for="name">Near By competitors3</label>
                        <input type="text" id="near_by_competitors3" name="near_by_competitors3" maxlength="100" class="form-control error" aria-required="true" value="{{ $factSheet->near_by_competitors3 }}" style="text-transform: uppercase" readonly>
                     </div>
                          </div>
                            <div class="col-2">
                          <div class="form-group">
                        <label for="name">Distance</label>
                        <input type="text" id="near_by_competitors3_dis" name="near_by_competitors3_dis"  class="form-control error" aria-required="true" value="{{ $factSheet->near_by_competitors3_dis }}" readonly>
                      </div>
                        </div>
                        <div class="col-2">
                        <div class="form-group">
                        <label for="name">Distance unit</label>
                        <select name="near_by_competitors3_dis_unit" id="near_by_competitors3_dis_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" {{ ($factSheet->near_by_competitors3_dis_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->near_by_competitors3_dis_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->near_by_competitors3_dis_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                          <option value="KM" {{ ($factSheet->near_by_competitors3_dis_unit == "KM") ? 'selected="selected"' : '' }}>KM</option>
                        </select>
                     </div>     
                        </div>
                    </div> 
                     <br>  
                     <div class="card-sub-title">Nearest Bank Details </div>
                      <br> 
                      <div class="row">
                       <div class="col-2">
                       <div class="form-group">
                        <label for="name">Axis Bank nearest branch</label>
                        <input type="text" id="office_to_axis_bank" name="office_to_axis_bank"  class="form-control error" aria-required="true" value="{{ $factSheet->axis_bank_nearest_branch }}" style="text-transform: uppercase" readonly>
                     </div>
                        </div>
                          <div class="col-2">
                          <div class="form-group">
                        <label for="name">Distance</label>
                        <input type="text" id="office_to_axis_bank_distance" name="office_to_axis_bank_distance"  class="form-control error" aria-required="true" value="{{ $factSheet->office_to_axis_bank_distance }}" value="{{ $factSheet->nearest_bank_other_than_axis }}" readonly>
                      </div>
                        </div>
                          <div class="col-2">
                          <div class="form-group">
                        <label for="name">Distance Unit</label>
                         <select id="office_to_axis_bank_distance_unit" name="office_to_axis_bank_distance_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" {{ ($factSheet->office_to_axis_bank_distance_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->office_to_axis_bank_distance_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->office_to_axis_bank_distance_unit == "Meter") ? 'selected="selected"' : '' }} >Meter</option>
                          <option value="KM" {{ ($factSheet->office_to_axis_bank_distance_unit == "KM") ? 'selected="selected"' : '' }}>KM</option>
                        </select>
                      </div>
                        </div>
                      
                    </div>    
                    <br> 
                    <div class="row">
                        <div class="col-3">
                         <div class="form-group">
                        <label for="name">Neartest Bank Other Than Axis</label>
                        <input type="text" id="nearest_bank_other_than_axis" name="nearest_bank_other_than_axis" maxlength="100" class="form-control error" aria-required="true" value="{{ $factSheet->nearest_bank_other_than_axis }}" style="text-transform: uppercase" readonly>
                       </div>  
                        </div>
                       <div class="col-3">
                      <div class="form-group">
                        <label for="name">Nearest ATM</label>
                        <input type="text" id="nearest_atm" name="nearest_atm" class="form-control error" maxlength="100" aria-required="true" value="{{ $factSheet->nearest_atm }}" style="text-transform: uppercase" readonly>
                     </div>
                        </div>
                        <div class="col-3">
                          <div class="form-group">
                        <label for="name">Distance from Office to ATM</label>
                        <input type="text" id="distance_from_office_to_atm" name="distance_from_office_to_atm"  class="form-control error" aria-required="true" value="{{ $factSheet->distance_from_office_to_atm }}" readonly >
                       </div> 
                        </div>
                          <div class="col-3">
                          <div class="form-group">
                        <label for="name">Distance Unit</label>
                          <select id="distance_from_office_to_atm_unit" name="distance_from_office_to_atm_unit" class="form-control error" aria-required="true">
                           <option value="0">Select</option>
                          <option value="Feet" {{ ($factSheet->distance_from_office_to_atm_unit == "Feet") ? 'selected="selected"' : '' }}>Feet</option>
                          <option value="Inch" {{ ($factSheet->distance_from_office_to_atm_unit == "Inch") ? 'selected="selected"' : '' }}>Inch</option>
                          <option value="Meter" {{ ($factSheet->distance_from_office_to_atm_unit == "Meter") ? 'selected="selected"' : '' }}>Meter</option>
                          <option value="KM" {{ ($factSheet->distance_from_office_to_atm_unit == "KM") ? 'selected="selected"' : '' }}>KM</option>
                        </select>
                      </div>
                        </div>
                    </div>    
                      <br> 
           
                      

                       </div> 
                        <div class="card-body">
                        <div class="card-header">
                      <div class="card-title">Rental Details </div>
                    </div>
                     <br>
                    
                         <div class="row">
                                 <div class="col-6">
                       <div class="form-group">
                        <label for="name">Enter No Of Owner</label>
                        <input type="text" id="total_refundable_security_deposits" name="no_of_owner" class="form-control error"  aria-required="true" value="{{ $factSheet->no_of_owner }}" readonly>

                       </div> 
                        </div>

                       <div class="col-6">
                      <div class="form-group">
                        <label for="name">Total Refundable Security Deposits</label>
                        <input type="text" id="total_refundable_security_deposits" name="total_refundable_security_deposits" maxlength="10" class="form-control error" aria-required="true" value="{{ $factSheet->total_refundable_security_deposits }}" readonly>

                    </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Total Advances</label>
                        <input type="text" id="total_advances" name="total_advances" class="form-control  error" maxlength="10" aria-required="true" value="{{ $factSheet->total_advances }}" readonly>
                        </div> 
                        </div>
                    </div>  
                        <br> 
                       <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Total Month Rent</label>
                        <input type="text" id="total_month_rent" name="total_month_rent" class="form-control  error" maxlength="10" aria-required="true" value="{{ $factSheet->total_month_rent }}" readonly>
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Total Advance Deduction</label>
                        <input type="text" id="total_advance_deduction" name="total_advance_deduction" class="form-control error" aria-required="true"value="{{ $factSheet->total_advance_deduction }}" readonly>
                        </div>
                        </div>
                    </div> 

                  {{--   <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Agreement Renewal Start Date</label>
                        <input type="date" id="agreement_period_start" name="agreement_period_start" class="form-control  error" aria-required="true" value="{{ $factSheet->agreement_period_start }}" readonly>
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Agreement Renewal End Date</label>
                        <input type="date" id="agreement_period_end" name="agreement_period_end" class="form-control error" aria-required="true" value="{{ $factSheet->agreement_period_end }}" readonly>
                        </div>
                        </div>
                    </div>  --}} 

                   
                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Notice Period</label>
                        <input type="text" id="notice_period" name="notice_period" class="form-control error" aria-required="true" value="{{ $factSheet->notice_period }}" readonly>
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Newly Constructed For Us</label>
                        <select id="newly_constructed_for_us" name="newly_constructed_for_us" class="form-control error" >
                          <option value="Yes" {{ ($factSheet->newly_constructed_for_us == "Yes") ? 'selected="selected"' : '' }}>Yes</option>
                           <option value="No" {{ ($factSheet->newly_constructed_for_us == "No") ? 'selected="selected"' : '' }}>No</option>
                        </select>
                        </div>
                        </div>
                    </div> 

                    <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Last Tenant</label>
                        <input type="text" id="last_tenant" name="last_tenant" class="form-control error" aria-required="true" value="{{ $factSheet->last_tenant }}" style="text-transform: uppercase" readonly>
                      </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                        <label for="name">Advance Deduction W.e.f.</label>
                      <input type="date" id="advance_deduction_wef_date" name="enhancement_clause" class="form-control error" aria-required="true" value="{{ $factSheet->advance_deduction_wef_date }}" readonly>
                        </div>
                        </div>
                    </div> 
                     <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Enhancement Clause(%)</label>
                        <input type="text" id="enhancement_clause" name="enhancement_clause" class="form-control error"  aria-required="true" value="{{ $factSheet->enhancement_clause }}" readonly>
                      </div>
                        </div>
                       <div class="col-3">
                     <div class="form-group">
                      <label for="name">Payment System</label>
                      <select id="payment_system" name="payment_system" class="form-control error"  aria-required="true">
                        <option value="CURRENT MONTH BASIS" {{ ($factSheet->payment_system == "CURRENT MONTH BASIS") ? 'selected="selected"' : '' }}>CURRENT MONTH BASIS</option>
                         <option value="NEXT MONTH BASIS" {{ ($factSheet->payment_system == "NEXT MONTH BASIS") ? 'selected="selected"' : '' }}>NEXT MONTH BASIS</option>
                      </select>
                      </div>
                        
                    </div> 
					
					  <div class="col-3">
                     <div class="form-group">
                        <label for="name">Payment Method</label>
                      <select id="payment_method" name="payment_method" class="form-control error"  aria-required="true">
                        <option value="EFT" {{ ($factSheet->payment_method == "EFT") ? 'selected="selected"' : '' }}>EFT</option>
                         <option value="RTGS" {{ ($factSheet->payment_method == "RTGS") ? 'selected="selected"' : '' }}>RTGS</option>
						 <option value="CHECK" {{ ($factSheet->payment_method == "CHECK") ? 'selected="selected"' : '' }}>CHECK</option>
						 <option value="CASH" {{ ($factSheet->payment_method == "CASH") ? 'selected="selected"' : '' }}>CASH</option>
                      </select>

                      </div>
                        
                    </div> 
                       
                    </div> 
                      <div class="row">
                       <div class="col-3">
                       <div class="form-group">
                        <label for="name">Associate Name</label>
                        <input type="text" id="associate_name" name="associate_name" class="form-control error" maxlength="100" aria-required="true" value="{{ $factSheet->associate_name }}" style="text-transform: uppercase" readonly>
                      </div>
                        </div>
                        <div class="col-3">
                         <div class="form-group">
                        <label for="name">Cordinator Name</label>
                        <input type="text" id="cordinator_name" name="cordinator_name" class="form-control error" maxlength="100" aria-required="true"value="{{ $factSheet->cordinator_name }}" style="text-transform: uppercase" readonly>
                      </div>
                        </div>
                         <div class="col-3">
                         <div class="form-group">
                      <label for="name">Approved By</label>
                        <input type="text" id="approved_by" name="approved_by" class="form-control error" maxlength="100" aria-required="true" value="{{ $factSheet->approved_by }}" style="text-transform: uppercase" readonly>
                      </div>
                        </div>
                    </div> 

         {{-- <div class="row">
                       <div class="col-6">
                     <div class="form-group">
                        <label for="name">Upload Photos Of Premises</label>
                     <input type="file" class="form-control" name="factsheet_premises_photos[]" multiple /> 
                      <input type="file" class="form-control" name="factsheet_premises_photos[]" multiple/>
                      </div>
                        </div>
                       
                       
                    </div> 
                    --}}
               
                     <input type="hidden" name="master_id" id="master_id" value="{{ $factSheet->id }}">
                  
                     <br/>
                      <input type="button" class="btn btn-danger" name="cancel" value="Cancel" onClick="window.location='http://164.52.196.61/lrms/public/agreementToBeRenewList';">
                       <button class="btn btn-success">Save</button>
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

    <!-- Custom template | don't include it in your project! -->
   
    <!-- End Custom template -->
  </div>


 @include('layouts.adminLayout.admin_footer')
  <script type="text/javascript">

  function renewEndDate(){
	
          var start_date=document.getElementById('agreement_period_start').value;
		  var years=document.getElementById('renewal_agreement_year').value;
		   var months=document.getElementById('renewal_agreement_month').value;	
		   
		   var d = new Date(start_date);
var st=d.setDate(d.getDate()+364);
/*
 alert(start_date);
		   alert(years);
		   alert(months);
alert(st);
		   
	*/	  
		   
	  
  }
     function checkRenewalEndDate(){
		 
		// var date = new Date(); 
		 var start_date=new Date(document.getElementById('agreement_period_start').value);
		  var years=document.getElementById('renewal_agreement_year').value;
		   var months=document.getElementById('renewal_agreement_month').value;
		   
		   //alert(start_date);
		   //alert(years);
		   //alert(months);
        //date.setDate(date.getDate() + days);
      var abc= start_date.setMonth(start_date.getMonth() + months);
	  alert(abc);
        //date.setFullYear(date.getFullYear() + years);
        //return date;     
		 
		 
		 
		 
		 ////////////////////////////////////

   // alert("Occupancy date");
   // var factsheet_date=document.getElementById('factsheet_date').value;
        //var agreement_period_end=document.getElementById('agreement_period_end').value;

        /////////////

       // var end_date=new Date($("#agreement_period_end").val());
 // var start_date=new Date($("#agreement_period_start").val());
   var end_date=new Date(document.getElementById('agreement_period_end').value);
  var start_date=new Date(document.getElementById('agreement_period_start').value);
  //alert(start_date);
  //alert(end_date);
   var oneDay=24*60*60*1000;

  var diffDays=Math.round(Math.abs((end_date.getTime()-start_date.getTime())/oneDay));

  var month=diffDays/30;

  //alert ("diffDay");
 // alert(diffDays);
   // alert(month);
document.getElementById('agreement_period_in_months').value=parseInt(month);

        //alert(factsheet_date);
     
    /* if(factsheet_date>branch_occupancy_date){
        alert("Occupancy date must be Greater than factsheet date");
        document.getElementById('branch_occupancy_date').value='mm/dd/yyyy';

     }*/

  }
 function checkPincode()
  {
    var pincode=$('#pincode').val();
   //alert(pincode);

   var pin_valid = /^\d{6}$/;
  if((pincode.match(pin_valid)))
        {
          ("#pincode").parent().next(".validation").remove();
           return true;
        }
      else
        {
        $("#pincode").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Pincode  Should be 6 Digits Numbers Only</div>");
        $('#pincode').val('');
       $('#pincode').focus();
        return false;
        }

  }

  $("select[name='region_code']").change(function(){
      var region_code = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ url('/getFactSheetCode')}}",
          method: 'POST',
          data: {region_code:region_code, _token:token},
          success: function(data) {
            //console.log(data);
            //return false;
            // $("input[name='factsheet_code'").html('');
            $("input[name='factsheet_code'").val(data);
          }
      });
  });


  $("select[name='branch_code']").change(function(){
      var branch_code = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ url('/getBranchDetails')}}",
          method: 'POST',
          data: {branch_code:branch_code, _token:token},
          success: function(data) {
           // console.log(data);
            //return false;

           // branch_location
             //$("input[name='branch_location'").val(data.branch_name);

             var arraydata = JSON.parse(data);

              //reading data using index
              var branch_location = arraydata[0]["branch_name"];
              var branch_type = arraydata[0]["branch_type"];
              var branch_id = arraydata[0]["branch_id"];
              //var branch_location = arraydata[0]["branch_name"];

              $("input[name='branch_location'").val(branch_location);
              $("input[name='branch_type'").val(branch_type);
              $("input[name='branch_id'").val(branch_id);

             //$("input[name='branch_location'").val(data);
             //$('#EmployeeId').val("fgg");
            // $("input[name='factsheet_code'").html('');
            //$("input[name='factsheet_code'").val(data);
          }
      });
  });


  
</script>
 <script>
        $(document).ready(function() {
            $('#breadth').keyup(function(ev) {

            var the_total_length = $("#length").val();
           // var length_unit = $("#length_unit").val();
            var the_total_breadth = $("#breadth").val();
            //var breadth_unit = $("#breadth_unit").val();
            var total = the_total_length * the_total_breadth;

            var inch=0;

             var length_unit = $("#length_unit").val();
            var breadth_unit = $("#breadth_unit").val();
  
              if (length_unit =='Feet') 
              {
                //console.log("inside feet");

                 var substr_total_length = the_total_length.split('.');

                 var substr_total_breadth = the_total_breadth.split('.');

                 var length_left= substr_total_length[0]*12;

                 var length_left_inch= parseInt(length_left) + parseInt(substr_total_length[1]);

                  var breadth_left= substr_total_breadth[0]*12;

                 var breadth_left_inch= parseInt(breadth_left) + parseInt(substr_total_breadth[1]);

                 var total_length_breadth=length_left_inch * breadth_left_inch;
                  // console.log(length_left);
                  // console.log(length_left_inch);
                  // console.log(breadth_left);
                  // console.log(breadth_left_inch);
                  // console.log(total_length_breadth);

                  var total_in_feet=total_length_breadth / 144;

                  // console.log(total_in_feet);

                   var total=total_in_feet.toFixed(2)

              }

               $("#total_length_breadth").val(total);
               //$("#total_length_breadth_unit").val(total_unit);

                      });

            /*
             $('#length').keyup(function(ev) {


            var the_total_length = $("#length").val();
           // var length_unit = $("#length_unit").val();
            var the_total_breadth = $("#breadth").val();
           // var breadth_unit = $("#breadth_unit").val();
            var total = the_total_length * the_total_breadth;

           
               $("#total_length_breadth").val(total);
             //  $("#total_length_breadth_unit").val(total_unit);

                      });

             */

             $('#length_unit').change(function(ev) {

            var length_unit = $("#length_unit").val();
            var breadth_unit = $("#breadth_unit").val();
  
              if (length_unit =='Feet') 
              {
             
                  var total_unit='Sq.Feet';
                  $("#breadth_unit option[value='Feet']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", "selected");
                  $("#breadth_unit option[value='Inch']").attr("selected", null);
                  $("#breadth_unit option[value='Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", null);

              }
              if (length_unit == 'Inch') 
              {
                 $("#breadth_unit option[value='Inch']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", "selected");
                 $("#breadth_unit option[value='Feet']").attr("selected", null);
                  $("#breadth_unit option[value='Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", null);
              
               }

              if (length_unit == 'Meter') 
              {
                 var total_unit='Sq.Meter';
                 $("#breadth_unit option[value='Meter']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", "selected");
                 $("#breadth_unit option[value='Feet']").attr("selected", null);
                  $("#breadth_unit option[value='Inch']").attr("selected", null);
                   $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", null);
                   $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", null);
              
               }
               
             });

                $('#breadth_unit').change(function(ev) {

            var length_unit = $("#length_unit").val();
            var breadth_unit = $("#breadth_unit").val();
  
              if (breadth_unit =='Feet') 
              {
             
                  var total_unit='Sq.Feet';
                  $("#length_unit option[value='Feet']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", "selected");

                  $("#length_unit option[value='Inch']").attr("selected", null);
                  $("#length_unit option[value='Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", null);

              }
              if (breadth_unit == 'Inch') 
              {
                 $("#length_unit option[value='Inch']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", "selected");

                 $("#length_unit option[value='Feet']").attr("selected", null);
                  $("#length_unit option[value='Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", null);
                  $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", null);
              
               }

              if (breadth_unit == 'Meter') 
              {
                 var total_unit='Sq.Meter';
                 $("#length_unit option[value='Meter']").attr("selected", "selected");
                 $("#total_length_breadth_unit option[value='Sq.Meter']").attr("selected", "selected");

                 $("#length_unit option[value='Feet']").attr("selected", null);
                  $("#length_unit option[value='Inch']").attr("selected", null);
                   $("#total_length_breadth_unit option[value='Sq.Inch']").attr("selected", null);
                   $("#total_length_breadth_unit option[value='Sq.Feet']").attr("selected", null);
              
               }
               
             });



            
        });
    </script>
    <script>
  function checkRent()
  {

    var present_rent = $("#present_rent").val();
            var revised_rent = $("#revised_rent").val();
            var monthly_increase = parseInt(revised_rent) - parseInt(present_rent);
      
      
    /*if(parseInt(revised_rent)>parseInt(present_rent)){
      
        $("#revised_rent").find('.validation').removeClass("validation");
        $('.validation').val('');
    $('.validation').hide();
    
           return true;
    } else {
        $("#revised_rent").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Revised Rent Must Be Grater Than Present Rent  </div>");
        $('#revised_rent').val('');
       $('#revised_rent').focus();
        return false;
    }*/
  

  }
        $(document).ready(function() {
            $('#revised_rent').keyup(function(ev) {

            var present_rent = $("#present_rent").val();
            var revised_rent = $("#revised_rent").val();
            var monthly_increase = parseInt(revised_rent) - parseInt(present_rent);

               $("#monthly_increase").val(monthly_increase);

             });

           
});
            
    </script>

 <script>
  /*
 $(document).ready(function(){

  var end_date=new Date($("#agreement_period_end").val());
  var start_date=new Date($("#agreement_period_start").val());
  var diff=new Date(end_date - start_date);
  var days=diff/1000/60/60/24;
  alert(Math.floor(diff));
 });
 /*
function diff_months(d2,d1)
{
   var diff =(dt2.getTime() - dt1.getTime()) / 1000;
     diff /= (60 * 60 * 24 * 7 * 4);
    return Math.abs(Math.round(diff));
    
}
  dt1 = new Date($("#agreement_period_end").val());
  dt2 = new Date($("agreement_period_start").val());
  console.log(diff_months(dt1, dt2));

*/
$(document).ready(function(){    
 
  var end_date=new Date($("#agreement_period_end").val());
  var start_date=new Date($("#agreement_period_start").val());
   var=oneDay=24*60*60*1000;

  var diffDays=Math.round(Math.abs((end_date.getTime()-start_date.getTime())/oneDay));
 alert ("diffDay");
  //var days=diff/1000/60/60/24;
  //alert(Math.floor(diff));
 });
    </script>
 <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment-with-locales.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#renewal_agreement_month").change(function () {
			
            var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
			var year=$('#renewal_agreement_year').val();
			var start_date=$('#agreement_period_start').val();
			var new_month=year * 12;
			var added_month=parseInt(new_month) + parseInt(selectedValue);
			dt3 = new Date(start_date);
			//console.log(add_months(dt3, added_month).toString());
			var end_date=add_months(dt3, added_month).toString();
			var date = moment(new Date(end_date.substr(0, 16)));
			//console.log(date.format("DD-MM-YYYY"));
			var end_date=date.format("YYYY-MM-DD");
			$('#agreement_period_end').val(end_date);
			});
    });

function add_months(dt, n)
 {

   return new Date(dt.setMonth(dt.getMonth() + n));      
 }


</script>
    
