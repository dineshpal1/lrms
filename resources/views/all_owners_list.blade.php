@include('layouts.adminLayout.admin_header')

 <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="{{ asset('css/bootstrap_wizard.min.css') }}">-->
   <!--  <link href="{{ asset('js/dist/jquery.simplewizard.css') }}" rel="stylesheet" />  
    <link rel="stylesheet" href="{{ asset('css/tabnav.css') }}">  -->

        <!-- Sidebar -->
  @include('layouts.adminLayout.admin_sidebar')   
   
       
        <!-- End Sidebar -->

        
<div class="main-panel">
      <div class="content">
        <div class="page-inner">
          <!-- <div class="page-header">
            <h4 class="page-title">DataTables.Net</h4>
            <ul class="breadcrumbs">
              <li class="nav-home">
                <a href="#">
                  <i class="flaticon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Tables</a>
              </li>
              <li class="separator">
                <i class="flaticon-right-arrow"></i>
              </li>
              <li class="nav-item">
                <a href="#">Datatables</a>
              </li>
            </ul>
          </div> -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Owner List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                           <th>Sr. No</th>
                           <th>FactSheet Code</th>
                          <th>Owner Name</th>
                          <th>PAN</th>
                          <th>GST</th>
                          <th>Occupation</th>
                          <th>Owner Address</th>
                          <th>Email</th>
                          <th>Contact </th>
                          <th>No Of Owner</th>
                        </tr>
                      </thead>
                     
                      <tbody>
                       <?php $i=1;?>
                        @foreach ($ownersList as $owners)
                        <tr>
                           <td><?php echo $i++; ?></td>
                           <td><?php $FactSheet=getRecordById('dst_lrms_masters','id',$owners->dst_lrms_master_id);
                            echo $FactSheet->factsheet_code;
                            ?></td>
                          <td>{{$owners->property_owner_name}}</td>
                          <td>{{$owners->payee_pan}}</td>
                          <td>{{$owners->payee_gstin}}</td>
                          <td>{{$owners->property_owner_occupation}}</td>
                           <td>{{$owners->property_owner_address}}</td>
                           <td>{{$owners->property_owner_email}}</td>
                           <td>{{$owners->property_owner_contact_no}}</td>
                           <td>{{$owners->total_property_owner}}</td>
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

       <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script src="{{ asset('js/dist/jquery.simplewizard.js') }}"></script>

    <!-- jQuery UI -->
  <script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
  
  <!-- jQuery Scrollbar -->
  <script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
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
               <!--  fact sheet end --->
            </div>
         
          