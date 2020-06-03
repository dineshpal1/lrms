<?php echo $__env->make('layouts.adminLayout.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<li class="nav-item submenu active">
<a data-toggle="collapse" href="#tablesMaster">
<i class="fas fa-table"></i>
<p>Master</p>
<span class="caret"></span>
</a>
<div class="collapse show" id="tablesMaster">
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
									<li class="active">
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
<form name='form2'  method="POST" action="<?php echo e(url('saveBankbranch')); ?>" id="add_banks">
<?php echo csrf_field(); ?>



<div class="page-inner">





<div class="row">
<div class="col-md-6">
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
aria-controls="home" aria-selected="true">Add Bank Branch </a>

</li>

</ul>
</div>

</div>

<div class="row">
<div class="col-6">
<div class="form-group">
<label for="name">Bank Name</label>
<select id="bank_name" name="bank_name" class="form-control error" aria-required="true">
<option value="" selected disabled>Select Bank Name</option>

<?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($bank->id); ?>"><?php echo e($bank->bank_name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php if($errors->has('bank_name')): ?>
<span class="text-danger"><?php echo e($errors->first('bank_name')); ?></span>
<?php endif; ?>
</div>
</div>


<div class="col-6">
<div class="form-group">
<label for="name">Bank Branch Name</label>

<input type="text" class="form-control" name="bank_branch_name" style="text-transform: uppercase" />
<?php if($errors->has('bank_branch_name')): ?>
<span class="text-danger"><?php echo e($errors->first('bank_branch_name')); ?></span>
<?php endif; ?>

</div>
</div>



</div> 

<div class ="row">
<div class="col-6">
<div class="form-group">
<label for="name">Add IFSC Code</label>

<input type="text" class="form-control" name="ifsc_code" style="text-transform: uppercase" />
<?php if($errors->has('ifsc_code')): ?>
<span class="text-danger"><?php echo e($errors->first('ifsc_code')); ?></span>
<?php endif; ?>

</div>
</div>

<div class="col-6">
<div class="form-group">
<label for="name">Bank Branch Address (Optional)</label>

<textarea class="form-control" name="bank_branch_address" style="text-transform: uppercase"  ></textarea>

<?php if($errors->has('bank_branch_address')): ?>
<span class="text-danger"><?php echo e($errors->first('bank_branch_address')); ?></span>
<?php endif; ?>


</div>
</div>

</div>


<br/>
<div class="card-action">
	 

<button type="button" class="btn btn-danger" onClick="window.location='<?php echo e(url("allBankBranch")); ?>'" >Cancel</button>
<input type="submit" class="btn btn-success" value="Add Bank Branch">


</div>
</div>
</div>
</form>
</div>


</div>


<!-- Custom template | don't include it in your project! -->

<!-- End Custom template -->
</div>

<?php echo $__env->make('layouts.adminLayout.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH /var/www/html/lrms/resources/views/add_bank_branch.blade.php ENDPATH**/ ?>