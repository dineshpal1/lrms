<?php

namespace App\Http\Controllers;

use App\Notifications\FactsheetExpire;
use App\Notifications\Lease_Expire;
use App\User;
use App\dst_lrms_masters;
use App\dst_lrms_details_property_owners;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{
  public function getInvoiceById()
    {
		//echo "here";
		//exit;
		
		$Username='pranav.verma';
		$Password='Welcome@123';
		
		$invoiceId='300000010698071';
		
		$url = 'https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/invoices/300000010698071';
		
		/*
    $data=array(
      'branch'=>$parms['branch'],
      'channel'=>$parms['channel']
    );*/
    $params = '';
    /*foreach($data as $key=>$value)
                $params .= $key.'='.$value.'&';
        $params = trim($params, '&');
		
		*/
        $header = array(
    "authorization: Basic cHJhbmF2LnZlcm1hOldlbGNvbWVAMTIz",
    "cache-control: no-cache",
    "content-type: application/json",
    "password: Welcome@123",
    "username: pranav.verma"
);



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        $err = curl_error($ch);
    curl_close($ch);
	
	//echo $url;
	//print_r($ch);
	//echo "<pre>";
	//print_r($result);
	
	$invoiceData=json_decode($result,true);
	
	//print_r($invoiceData);
	//exit;
	
	 return view('invoice_report',compact('invoiceData'));
/*
 if ($err) {
       echo "cURL Error #:" . $err;
      // echo 'Request Error:' . curl_error($ch);
    } else {
      // return  $response;
       //echo $result;
       return $result;
    }
		
	*/	
		/*
		$branch=$this->input->post('name',TRUE);
    $channel=$this->input->post('day',TRUE);
    	
    	$tokenData['iss'] = $this->apiKey;
    $tokenData['iat'] = strtotime("now");
    $jwtToken =$this->Generatetoken($tokenData,$this->secretKey);

   $url = 'https://api.ristaapps.com/v1/items';
    $data=array(
      'branch'=>$parms['branch'],
      'channel'=>$parms['channel']
    );
    $params = '';
    foreach($data as $key=>$value)
                $params .= $key.'='.$value.'&';
        $params = trim($params, '&');
        $header = array(
    "Content-Type: application/json",
      "cache-control: no-cache",
      "x-api-key: $this->apiKey",
      "x-api-token: $jwtToken"
);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        $err = curl_error($ch);
    curl_close($ch);

 if ($err) {
       echo "cURL Error #:" . $err;
      // echo 'Request Error:' . curl_error($ch);
    } else {
      // return  $response;
       //echo $result;
       return $result;
    }
	
	*/
    	
                  
      //return view('rentals_next_due_report',compact('rentalReport'));

    }    

	 public function getCheckData()
    {
		
		
		//$supplierList=dst_lrms_details_property_owners::orderBy('supplier_no','ASC')->get();
	        $supplierList = dst_lrms_details_property_owners::orderBy('supplier_no', 'ASC')->distinct()->whereNotNull('supplier_no')->pluck('supplier_no');
                 //echo "<pre>";
	          //print_r($supplierList);
                  //exit;

		$Username='pranav.verma';
		$Password='Welcome@123';
		
		$invoiceId='300000010698071';
		
		//$url = 'https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/invoices/300000010698071';
		$url='https://eftd-test.fa.us6.oraclecloud.com//fscmRestApi/resources/11.13.18.05/payablesPayments/300000010607851';
		
		//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber=338";
		
      $params = '';
   
        $header = array(
       "authorization: Basic cHJhbmF2LnZlcm1hOldlbGNvbWVAMTIz",
       "cache-control: no-cache",
       "content-type: application/json",
       "password: Welcome@123",
       "username: pranav.verma"
       );



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        $err = curl_error($ch);
    curl_close($ch);
	
	//echo $url;
	//print_r($ch);
	//echo "<pre>";
	//print_r($result);
	
	//exit;
	
	$invoiceData=json_decode($result,true);
	
	//print_r($invoiceData);
	//exit;
	
	
	 return view('check_report',compact('invoiceData','supplierList'));
/*
 if ($err) {
       echo "cURL Error #:" . $err;
      // echo 'Request Error:' . curl_error($ch);
    } else {
      // return  $response;
       //echo $result;
       return $result;
    }
		
	*/	
		/*
		$branch=$this->input->post('name',TRUE);
    $channel=$this->input->post('day',TRUE);
    	
    	$tokenData['iss'] = $this->apiKey;
    $tokenData['iat'] = strtotime("now");
    $jwtToken =$this->Generatetoken($tokenData,$this->secretKey);

   $url = 'https://api.ristaapps.com/v1/items';
    $data=array(
      'branch'=>$parms['branch'],
      'channel'=>$parms['channel']
    );
    $params = '';
    foreach($data as $key=>$value)
                $params .= $key.'='.$value.'&';
        $params = trim($params, '&');
        $header = array(
    "Content-Type: application/json",
      "cache-control: no-cache",
      "x-api-key: $this->apiKey",
      "x-api-token: $jwtToken"
);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        $err = curl_error($ch);
    curl_close($ch);

 if ($err) {
       echo "cURL Error #:" . $err;
      // echo 'Request Error:' . curl_error($ch);
    } else {
      // return  $response;
       //echo $result;
       return $result;
    }
	
	*/
    	
                  
      //return view('rentals_next_due_report',compact('rentalReport'));

    }    
    
    public function checkApiCredential()
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		//echo "Now check Username and Password";
		//$username='pranav.verm';
	    //$password='Welcome@123';
		$URL='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments/300000010467679';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$URL);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
		$result11=curl_exec ($ch);
		$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
		curl_close ($ch);

		//print_r($result11);
		//echo $status_code;
		if($status_code==401)
		{
			echo "401";
			//return false;
		}else{
			
			
			Session::put('api_username', $username);
			Session::put('api_password', $password);
			echo "200";
			//return true;
		}
		  /*
				print_r($_POST);
				//exit;
				$Username=$_POST['username'];
				$Password=$_POST['password'];
				
				//$Username='pranav.verma';
				//$Password='Welcome@123';
				
				$invoiceId='300000010698071';
				
				//$url = 'https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/invoices/300000010698071';
				//$url='https://eftd-test.fa.us6.oraclecloud.com//fscmRestApi/resources/11.13.18.05/payablesPayments/300000010607851';
				
				//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber=338";
				
				$url='https://eftd-test.fa.us6.oraclecloud.com//fscmRestApi/resources/11.13.18.05/payablesPayments/300000010467679';
			
			$params = '';
			
				$header = array(
			//"authorization: Basic cHJhbmF2LnZlcm1hOldlbGNvbWVAMTIz",
			"authorization: Basic cHJhbmF2LnZlcm1hOldlbGNvbWVAMTIz",
			"cache-control: no-cache",
			"content-type: application/json",
			"Username: $Username",
			"Password: $Password"
		);

		print_r($header);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
			//curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
			curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
				$result = curl_exec($ch);
				$err = curl_error($ch);
			curl_close($ch);
			
			//echo $url;
			//print_r($ch);
			echo "<pre>";
			print_r($result);
			
			echo "Now check Username and Password";
			$username='pranav.verm';
		$password='Welcome@123';
		$URL='https://eftd-test.fa.us6.oraclecloud.com//fscmRestApi/resources/11.13.18.05/payablesPayments/300000010467679';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$URL);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
		$result11=curl_exec ($ch);
		$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
		curl_close ($ch);

		print_r($result11);
		echo $status_code;
       */
	
	}
  public function checkSupplierData()
  {

     print_r($_POST);
   echo $username = Session::get('api_username');
   echo $password = Session::get('api_password');
        $paymentstart_from=$_POST['from_date'];
        $paymentstart_to=$_POST['to_date'];
   

   //q=dateAdded after '2015-01-01'
//content?q=dateAdded+after+'2015-01-01'&orderBy=dateAdded:desc&limit=10

    // $url='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments/300000010607851';
		
		//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber=338";
		
   // $url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate='2018-07-31'";
/*
   SELECT count(*)
  FROM activity
   WHERE contact_id = 192271
   and completed_date
     BETWEEN to_date('01-Mar-2004','dd-mon-yyyy')
     AND to_Date('30-Nov-2004','dd-mon-yyyy');
	 
	 ?q=Deptno BETWEEN 10 AND 30

Payment Date Between
	 
	 */
  //$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate BETWEEN 2018-07-30 AND 2018-07-31";

 //$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate after '2020-01-01'";
//?q=dateAdded after '2015-01-01'SupplierNumber=28452
  
    //$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentAmount > 22000";
//$suppliernumber=28452;
//$suppliernumber2=30000;

//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber=$suppliernumber";

//ok $url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber BETWEEN $suppliernumber AND $suppliernumber2";

//$url='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate after "2017-07-13"';

$url='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate=2018-07-30';
//ge_lt 100 and 200
//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate >=to_date('2017-01-01','YYYY-MM-DD') and PaymentDate < to_date('2017-01-30','YYYY-MM-DD')";

//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?finder=PaymentDate;StartDtRFAttr=2017-07-01,EndDtRFAttr=2017-07-30";

//?finder=MyAppointmentsInDateRange;StartDtRFAttr=2013-08-11,EndDtRFAttr=2016-01-01
//q=OwnerName='Oliver Steinmeier' OR 'Richard Bingham'
//date >= to_date('20020101', 'YYYYMMDD')2017-07-13
//and date < to_date('20010117', 'YYYYMMDD')
//date >= to_date('20020101', 'YYYYMMDD')
//and date < to_date('20010117', 'YYYYMMDD') + 1
//$paymentstart_from
echo $url;

   
        $header = array(
       "authorization: Basic cHJhbmF2LnZlcm1hOldlbGNvbWVAMTIz",
       "cache-control: no-cache",
       "content-type: application/json",
       "password: Welcome@123",
       "username: pranav.verma"
       );



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
    //curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
    curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        $result = curl_exec($ch);
        $err = curl_error($ch);
    curl_close($ch);
	
	echo "<pre>";
	print_r($result);

exit;
	$invoiceData=json_decode($result,true);
	
	print_r($invoiceData);
	//exit;
	


     exit;
   }
}

 
