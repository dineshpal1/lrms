<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: 400px;
}
</style>
</head>
<body>

<table style="width:50%;">
	<h2 align="center"><u>Lease Expiring in:{{Carbon\Carbon::now()->format('M,Y')}}</u></h2>
  <tr>
  	<th>S.No</th>
    <th>Factsheet Id</th>
    <th>Branch Code</th> 
    <th>Agreement End Date</th>
  </tr>
<tr >
	@php $no=1;  @endphp
	@foreach($current as $row)
	 <td>{{$no++}}</td>
    <td>{{$row->factsheet_code}}</td>
    <td>{{$row->branch_code}}</td>
    <td>{{$row->agreement_period_end}}</td>
  </tr>
  @endforeach
  
  

  <table style="width:50%;">
  	<h2 align="center"><u>Lease Expiring in:{{Carbon\Carbon::now()->addMonth()->format('M,Y')}}</u></h2>
  <tr>
  	<th>S.No</th>
    <th>Factsheet Id</th>
    <th>Branch Code</th> 
    <th>Agreement End Date</th>
  </tr>
  @php $no=1;  @endphp
	@foreach($next as $row)
<tr align="center">
	
	 <td>{{$no++}}</td>
    <td>{{$row->factsheet_code}}</td>
    <td>{{$row->branch_code}}</td>
    <td>{{$row->agreement_expired_on_next_month}}</td>
  </tr>
  @endforeach
  </table>
</body>
</html>