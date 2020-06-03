<?php

namespace App\Http\Controllers;

/*
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


*/

use Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\View;

use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

use App\dst_lrms_masters;
use App\dst_lrms_details_property_owners;
use App\dst_lrm_dtls_pro_rental_dtls;
use App\dst_lrm_dtls_pro_bank_dtls;
use App\dst_region_masters;
use App\dst_lrm_branch_dtls;
use App\dst_lrms_dtls_rental_renewals;
use App\dst_lrms_dtls_monthly_rentals;
use App\dst_lrms_rent_agreements;
use App\dst_lrms_dtls_documents;
use App\dst_city_masters;
use App\dst_branch_area_masters;
use App\dst_lrms_fusion_call_payables_payments;

use DB;

use DateTime;
use Illuminate\Support\Carbon;


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
    // echo "in checkSupplierData function";
	   echo $username = Session::get('api_username');
	   echo $password = Session::get('api_password');

	   $paymentstart_from=$_POST['from_date'];

	    echo   $paymentstart_from=$_POST['from_date'];
	     echo   $paymentstart_to=$_POST['to_date'];
	   

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
			  //$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate BETWEEN 2018-07-30 AND 2018-08-30";

			 //$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate after '2020-01-01'";
			//?q=dateAdded after '2015-01-01'SupplierNumber=28452
			  
			    //$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentAmount > 22000";
			//$suppliernumber=28452;
			//$suppliernumber2=30000;

			//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber=$suppliernumber";

			//ok $url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber BETWEEN $suppliernumber AND $suppliernumber2";

			//$url='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate after "2017-07-13"';

			//$url='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate=2018-07-30';


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



			//  https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate=2018-07-30&limit=50&offset=0


			//https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=PaymentDate=2018-07-30&limit=50&offset=0&totalResults=true

			//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?limit=50&offset=0&totalResults=true&q=PaymentDate >=to_date('2017-01-01','YYYY-MM-DD') and PaymentDate < to_date('2017-01-30','YYYY-MM-DD')";


			//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?limit=50&offset=50&totalResults=true&q=PaymentDate >=to_date('2017-01-01','YYYY-MM-DD') and PaymentDate < to_date('2017-01-30','YYYY-MM-DD')";

			//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?limit=100&offset=0&totalResults=true&q=PaymentDate >=to_date('2017-01-01','YYYY-MM-DD') and PaymentDate < to_date('2017-01-30','YYYY-MM-DD')";


			//$url="https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?limit=100&offset=0&totalResults=true&q=PaymentDate >=to_date('2017-01-01','YYYY-MM-DD') and PaymentDate < to_date('2017-01-30','YYYY-MM-DD')";


			//// To check API Credential

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
				 return back()->with('error','Username & Password is Expire For API Call!');
			}

			//$url='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?limit=2&offset=0&totalResults=true&q=PaymentDate='.$paymentstart_from.'';

			echo $url='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber=338;PaymentDate >='.$paymentstart_from.' and <=2018-03-05&totalResults=true';


			//q=PaymentDate=2018-07-30&limit=50&offset=50&totalResults=true
			//echo $url;

			   
			        $header = array(
			       "authorization: Basic cHJhbmF2LnZlcm1hOldlbGNvbWVAMTIz",
			       "cache-control: no-cache",
			       "content-type: application/json",
			       "password: $password",
			       "username: $username"
			       );
              // print_r($header);


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
					
					//echo "<pre>";
					//print_r($result);

				//exit;
					$paymentfirstData=json_decode($result,true);

					echo "<pre>";
					
					print_r($paymentfirstData);
                // suppliernumber,payment date range
				//	https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber=338;PaymentDate >=2018-01-05 and <=2018-03-05&totalResults=true

             exit;
				if($paymentfirstData['totalResults']==0)
				{
			       return back()->with('error','No Record From API Call AS Given Parameter!');
				}else
				{

				   echo $total=$paymentfirstData['totalResults'];	

					echo $url_again='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?limit='.$total.'&offset=0&q=PaymentDate='.$paymentstart_from.'';

					$url_again='https://eftd-test.fa.us6.oraclecloud.com/fscmRestApi/resources/11.13.18.05/payablesPayments?q=SupplierNumber=338;PaymentDate >='.$paymentstart_from.' and <=2018-03-05&totalResults=true';
				exit;

					$ch_again = curl_init();
					curl_setopt($ch_again, CURLOPT_URL, $url_again);
					    //curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
					    curl_setopt($ch_again, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
					    curl_setopt($ch_again, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
					    curl_setopt($ch_again, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
					    curl_setopt($ch_again, CURLOPT_HTTPHEADER, $header);
					        $result_again = curl_exec($ch_again);
					        $err = curl_error($ch_again);
					    curl_close($ch_again);
						
						//echo "<pre>";
						//print_r($result_again);

					//exit;
					$paymentData=json_decode($result_again,true);


					//print_r($paymentData);

                    exit;

			       

						       	// To Save data into Table
						  foreach ($paymentData['items'] as $pmntRecord)
						   {


						      	 // To save into lrms master table
						       $dataSet[]=[

						     'CheckId'  =>   isset($pmntRecord['CheckId']) ? $pmntRecord['CheckId'] : ' ',

						       'PaymentId' => isset($pmntRecord['PaymentId']) ? $pmntRecord['PaymentId'] : ' ',
						       'PaymentReference'  =>    isset($pmntRecord['PaymentReference']) ? $pmntRecord['PaymentReference'] : ' ',
						        'PaymentNumber'  =>    isset($pmntRecord['PaymentNumber']) ? $pmntRecord['PaymentNumber'] : ' ',
						        'PaymentFileReference'  =>    isset($pmntRecord['PaymentFileReference']) ? $pmntRecord['PaymentFileReference'] : '',
						        'PaymentProcessRequest'  =>    isset($pmntRecord['PaymentProcessRequest']) ? $pmntRecord['PaymentProcessRequest'] : ' ',
						        'PaymentAmount'  =>    isset($pmntRecord['PaymentAmount']) ? $pmntRecord['PaymentAmount'] : ' ',
						        'PaymentDate'  =>    isset($pmntRecord['PaymentDate']) ? $pmntRecord['PaymentDate'] : ' ',
						        'AccountingDate'  =>    isset($pmntRecord['AccountingDate']) ? $pmntRecord['AccountingDate'] : ' ',
						        'PaymentDescription'  =>    isset($pmntRecord['PaymentDescription']) ? $pmntRecord['PaymentDescription'] : ' ',
						        //$payments->VoidDate  =    isset($pmntRecord['VoidDate']) ? $pmntRecord['VoidDate'] : ' ';
						        'PaymentStatus'  =>    isset($pmntRecord['PaymentStatus']) ? $pmntRecord['PaymentStatus'] : ' ',
						        'AccountingStatus'  =>    isset($pmntRecord['AccountingStatus']) ? $pmntRecord['AccountingStatus'] : ' ',
						        'PaymentType'  =>    isset($pmntRecord['PaymentType']) ? $pmntRecord['PaymentType'] : ' ',
						        'PaymentMethodCode'  =>    isset($pmntRecord['PaymentMethodCode']) ? $pmntRecord['PaymentMethodCode'] : ' ',
						        'PaymentMethod'  =>    isset($pmntRecord['PaymentMethod']) ? $pmntRecord['PaymentMethod'] : ' ',
						        'ClearingDate'  =>    isset($pmntRecord['ClearingDate']) ? $pmntRecord['ClearingDate'] : ' ',
						        'ClearingAmount'  =>    isset($pmntRecord['ClearingAmount']) ? $pmntRecord['ClearingAmount'] : ' ',

						       'SupplierNumber'  =>    isset($pmntRecord['SupplierNumber']) ? $pmntRecord['SupplierNumber'] : ' ',

						       'RemitToAccountNumber'  =>    isset($pmntRecord['RemitToAccountNumber']) ? $pmntRecord['RemitToAccountNumber'] : ' ',

						       'VoucherNumber'  =>    isset($pmntRecord['VoucherNumber']) ? $pmntRecord['VoucherNumber'] : ' ',

						       'CreationDate'  =>    isset($pmntRecord['CreationDate']) ? $pmntRecord['CreationDate'] : ' ',
						        'CreatedBy'  =>    isset($pmntRecord['CreatedBy']) ? $pmntRecord['CreatedBy'] : ' ',
						         'LastUpdatedBy'  =>    isset($pmntRecord['LastUpdatedBy']) ? $pmntRecord['LastUpdatedBy'] : ' ',
						          'LastUpdateDate'  =>    isset($pmntRecord['LastUpdateDate']) ? $pmntRecord['LastUpdateDate'] : ' ',
						           'LastUpdateLogin'  =>    isset($pmntRecord['LastUpdateLogin']) ? $pmntRecord['LastUpdateLogin'] : ' ',
						           'api_call_date'  =>    Date('y-m-d'),

						       ];

						      }

			       DB::table('dst_lrms_fusion_call_payables_payments')->insert($dataSet);

				}
	
     exit;
   }
}

 
