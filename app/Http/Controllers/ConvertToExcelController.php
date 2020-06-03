<?php
namespace App\Http\Controllers;

		use Illuminate\Http\Request;
		use App\dst_lrms_rent_agreements;
		use App\dst_lrms_details_property_owners;
		use App\Exports\FactsheetExcelExport;
		use Maatwebsite\Excel\Facades\Excel;
		use NumberToWords\NumberToWords;

		class ConvertToExcelController extends Controller
		{

		public function rentAgreement($id)
		{
		/*

		$factSheet=dst_lrms_rent_agreements::where('dst_lrms_master_id','=',$id)->get();

		$pdf = PDF::loadView('pdf', compact('factSheet'));

		return $pdf->download('lease_agreement.pdf');
		*/

		$factsheet=dst_lrms_rent_agreements::where('dst_lrms_master_id','=',$id)->get();
		return view("rent_agreement",compact('factsheet'));

		}
		public function export() 
		{
		return Excel::download(new FactsheetExcelExport, 'factsheet.xlsx');
		}
      public function exportToWord($id)
		{
		$factsheet=dst_lrms_rent_agreements::where('dst_lrms_master_id','=',$id)->get();
		//echo"pre";
		// print_r($factsheet);
		// exit;
		//$factsheet=dst_lrms_rent_agreements::all();
		$factsheet_code=$factsheet[0]->factsheet_code;
		//echo"<pre>";
		 //print_r($factsheet_code);
		////echo $factsheet_code;
		// exit;
   
		  $ownerData = dst_lrms_details_property_owners::where('factsheet_code', '=', $factsheet_code)->get()->toArray();

   		 $all_owner_name='';
           $all_owner_address='';
      	foreach($ownerData as $owner){
          $all_owner_name.=$owner['property_owner_name']. "," ;
           $all_owner_address.=$owner['property_owner_address']. "," ;

          }


		//number to word converter
		$numberToWords = new NumberToWords();
		$numberTransformer = $numberToWords->getNumberTransformer('en');
		$rent=ucwords($numberTransformer->toWords($factsheet[0]['monthly_rent']));
		$refund=ucwords($numberTransformer->toWords($factsheet[0]['total_refundable_security_deposits']));

		$std_dates = strtotime($factsheet[0]['lease_agreement_start_date']); 
		$start_date =date('d F,Y', $std_dates);

		$end_dates = strtotime($factsheet[0]['lease_agreement_end_date']); 
		$end_date =date('d F,Y', $end_dates);

		$year=$factsheet[0]['lease_period']/12;
		$year_new=number_format($year, 2);

		
		$word=new \PhpOffice\PhpWord\PhpWord();
		$newSection=$word->addSection();

		$desc1="<p align='justify' style='font-size:18px;margin-top:200px;text-align:center'> <strong>LEASE AGREEMENT</strong></p>";

		$desc2=" <p align='justify'>THIS Lease Agreement is made w.e.f.<strong>   1</strong><sup><strong>st</strong></sup><strong> Day of ". $start_date ." </strong>between <strong> ".rtrim($all_owner_name,',')."</strong>having its residence address at- <strong>".rtrim($all_owner_address,',')." </strong> <strong></strong> Hereinafter referred to as the LESSOR (which expression shall include his heirs, successors, administrators, executors, legal representative and assigns) of the ONE PART.<br>
		AND<br>
		<strong>M/S SAFEXPRESS PRIVATE LIMITED,</strong> a Company incorporated under the Companies Act, 1956 having its registered office at <strong>Safex Cargo, Complex N.H. No. 8 Mahipalpur Ext. New Delhi-110037,</strong> hereinafter referred to as the LESSEE (which expression shall include his heirs, successors, administrators, executors, legal representative and assigns) of the OTHER PART.</p>


		<p align='justify'>WHEREAS The LESSOR is the absolute and rightful owner of the PREMISES situated at- <strong>".$factsheet[0]['premises_address']." ,".$factsheet[0]['premises_state'].", </strong>having a covered area of <strong>".$factsheet[0]['premises_area']."</strong> <strong>Sq.Fts. </strong>&amp;&amp; having full and lawful rights to let out the same at such terms and conditions as he may think of AND WHEREAS the LESSOR has agreed to let out and the LESSEE has agreed to take on lease the above said Property, hereinafter referred to as “THE PREMISES”.</p>

		<p align='justify'>WHEREAS the LESSOR has agreed to grant the lease of the “THE PREMISES” and the LESSEE has agreed to take the “THE PREMISES” on lease for storage / Warehousing/Logistic Services (which will be outsourced / subcontracted to the other companies if required on behalf of the (LESSEE) on the following terms and conditions, which has been mutually agreed upon.</p>

		<p align='justify'>NOW, THIS LEASE AGREEMENT WITNESSETH AS FOLLOWS:</p>

		<p align='justify'>1. That the LESSOR is the sole and absolute owner of “THE PREMISES” and being legally authorized to let out “THE PREMISES” hereby reserved does hereby grant, demise and lease unto the LESSEE “THE PREMISES” subject to the covenants, conditions and agreement between the parties herein written.</p>

		<p align='justify'>2. The lease shall be for a period of <strong>". $year_new ." Years </strong>w.e.f. <strong> ". $start_date ."</strong><strong>  to </strong><strong> ". $end_date ."</strong></sup><strong> </strong> with the ".$factsheet[0]['increment_rate']." % Increase in rent after expiry of every one year. The Lease Deed shall be extended for another tenure of ". $year_new ." Years after the expiry of the initial terms of ". $year_new ." Years by executing fresh lease agreement.</p>

		<p align='justify'>3. That the LESSOR has agreed to let out “THE PREMISES” to the LESSEE at a monthly Rent of <strong>Rs. ".$factsheet[0]['monthly_rent']."/-(Rupees ".$rent." Only)</strong>. The LESSEE has to issue the Cheque or transfer online, amount for the Rent.</p>

		<p align='justify'>4. The tenancy shall be in accordance with English calendar month and shall be a monthly one ending with the last day of every month. All payments made by the Lessee shall be liable to applicable Tax deduction at source.</p>

		<p align='justify'> 5. The LESSEE had paid a total Sum of <strong>Rs.  ".$factsheet[0]['total_refundable_security_deposits']."/-(Rupees ".$refund." Only) </strong> towards payment of Refundable Security Deposit  The LESSOR acknowledges the same as received. The refundable Security Deposit will be refundable by the LESSOR at the time of vacation of the PREMISES. The LESSEE reserves its right to deduct the same from equivalent monthly rentals prior to vacation of the PREMISES.</p>

		<p align='justify'>6. That the “THE PREMISES” shall be used for the purpose of the Storage/Logistic Warehousing services and allied activities by Safexpress Private Ltd. or its Associates.</p>

		<p align='justify'>7. It is hereby agreed between the LESSOR and the LESSEE that during the currency of this Lease Agreement or any extension thereof, The PREMISES shall be used for all activities necessary for carrying on the business of the LESSEE providing transportation, C&amp;&amp;F activities, warehousing and logistics solutions to their clients, which is their core area of operation. Such activities may, for the purposes of this Deed, be deemed to include but would not be limited to transportation, pickup and delivery of goods, logistics support, C &amp;&amp; F activities, Warehousing, Third Party Logistics Solutions and other related services, etc. by Safexpress Private Ltd. and its Associates.</p>

		<p align='justify'>8. The LESSOR also agrees that if such activities require the LESSEE to apply for GST registration etc. in the name of their clients with The PREMISES as the address, the LESSEE may do so and that the LESSOR will not have any objection to this but in doing so the LESSEE shall not create or give any right in the THE PREMISES in their favour.</p>

		<p align='justify'>9. The LESSOR shall not encumber “THE PREMISES” or do or omit to do any act or deed during the term of this agreement which may in any manner jeopardize or disturb the LESSEE’s exclusive possession and peaceful enjoyment of DEMISE PREMISES.</p>

		<p align='justify'>10. The LESSEE shall pay the charges for the Electricity (power and light) and Telephone for “THE PREMISES” to the authorities concerned as per actual bills for the usage of the electricity by the LESSEE during the period of the lease.</p>

		<p align='justify'>11. The LESSEE shall retain the original bill and shall give the copies of the paid bills received from the concerned Government Authorities to the LESSOR upon its request. Charges of any means or manner whatsoever arising before the date of handling over “THE PREMISES” to the LESSEE shall be borne by the LESSOR.</p>

		<p align='justify'>12. That the LESSOR shall be responsible for the payment of all Property Tax and any other statutory taxes and or any levies/charges with respect to “THE PREMISES” that may be levied at any point in time by any Authority whatsoever in respect of the “THE PREMISES”. The LESSOR hereby agrees to indemnify the LESSEE in case such a demand is raised by any statutory authority and is paid by the LESSEE on behalf of the LESSOR.</p>

		<p align='justify'>13. That the LESSEE shall carry out normal day-to-day maintenance such as fuses leakage of taps, replacement of bulbs, tube lights, light fittings, sinks etc and other such repairs at his own cost.</p>

		<p align='justify'>14. The LESSOR shall attend to major repairs such as leakage in ceiling, electricity, bursting of sanitary pipes, cracks, replacement of electrical wiring, defective sewerage system. Corroding of water pipes etc., as and when required by the LESSEE. If the LESSOR does not attend such major repairs as pointed out by the LESSEE within reasonable time from the time of receiving the phone call from the LESSEE then the LESSEE may get the repairs done and deduct all expenses incurred from the amount payable under this Lease Agreement.</p>

		<p align='justify'>15. That the LESSEE shall not store any obnoxious, goods in “THE PREMISES”.</p>

		<p align='justify'>16. That the LESSEE shall be at liberty to have its goods and belongings kept in ‘THE PREMISES” insured at its own cost. The LESSEE will be permitted at its own expense to display its name and logo at an appropriate place.</p>

		<p align='justify'>17. That the LESSEE shall not be responsible for any loss, destruction, damage to ‘THE PREMISES” resulting from earthquake, storm, civil disturbances, fire and other conditions or acts of God or mankind e.g. War, civil disturbances, fire and other conditions or acts of God or mankind e.g. War, riots etc on which the LESSEE has no control. If in any circumstances the LESSEE is unable to use “THE PREMISES” (e.g. Earthquake, government restriction, war etc. etc.) then the LESSEE shall have the option of terminating the lease without giving notice to the LESSOR, however, in the event, the LESSEE, continues to occupy “THE PREMISES”, the LESSEE shall continue to pay a monthly Rent.</p>

		<p align='justify'>18. The LESSEE shall not carry out any structural additions or alterations to “THE PREMISES” without the written consent of the LESSOR. The lessee, however, shall have the right to install room/split air-conditioning units, coolers, exhaust fans, other electrical / electronic appliances and machines, room partitions etc. without causing any major damage to “THE PREMISES’, and shall on the expiry or termination of this Lease Agreement be entitled to remove all such units, appliances, etc., as also such other of its items that it had brought into “THE PREMISES” during the existence of this Lease Agreement.</p>

		<p align='justify'>19. That the LESSEE shall permit the LESSOR or its authorized agents to enter upon “THE PREMISES” for inspection and carrying our repairs at a reasonable time on prior written notice.</p>

		<p align='justify'>20. THE LESSOR shall provide suitable space with in the PREMISES to LESSEE for installation of its Network Antenna.</p>

		<p align='justify'>21. The LESSEE shall on expiry of the lease period, handover the vacant peaceful possession of “THE PREMISES” to the LESSOR in good condition subject to normal wear and tear arising from day to day use and from such causes as are beyond the control of the LESSEE viz. fire, earthquake, floods, riots etc.</p>

		<p align='justify'>22. Both the LESSOR &amp;&amp; The LESSEE reserves its right to terminate the Agreement by serving ".$factsheet[0]['notice_period']." months advance written notice for same.</p>

		<p align='justify'>23. That any notice required to be served upon the LESSEE shall be considered served if delivered at the registered office address stated above and duly acknowledged by the authorized representative of the LESSEE. That any notice, which may be required to be served upon the LESSOR shall sufficiently be served and given if delivered by Registered Post (or hand delivered) addressed to the address of the LESSOR.</p>

		<p align='justify'>24. That the LESSEE/LESSOR as the case may be, shall not be liable or responsible To each other for injury or loss to any individual due to the destruction or damage to “THE PREMISES” by reason of any force majeure circumstances, fire, act of God, riots, terrorism, earthquake or reasons beyond the reasonable control of the LESSOR or LESSEE.</p>
		<p align='justify'><br>
		</p><p align='justify'><br>
		</p>
		<p align='justify'>25. <strong>WARRANTY &amp;&amp; REPRESENTATIONS</strong></p>

		<p align='justify'>As an inducement to enter into these presents, each of the Parties hereby covenants, represents and warrants to the other, as may applicable, as follows:</p>

		<p align='justify'>1. That each of the Parties, is a company/ firm duly organized, validity existing and in good standing under the laws of its incorporation. The Lessor has absolute authority, good title and right to grant this Lease in respect of the Demised Premises and shall hold the Lessee free and harmless of any demands, claims, actions or proceedings by others in respect of quiet possession of the Demised Premises.</p>

		<p align='justify'>2. The deed of Lease has been duly authorized, executed and delivered by Lessor and assuming due authorization, execution and delivery by Lessee, constitutes the valid, legal and binding agreement of Lessor, enforceable against the Lessor in accordance with its terms.</p>

		<p align='justify'>3. The Lessee shall have free and unobstructed access to the Demised Premises at all times during the term of the Lease and the Lessee shall enjoy quiet and peaceful possession of Demised Premises, without disturbances by Lessor or by any other assignee or any successor – in- interest of the Lessor or by any other person claiming and proving title paramount to the Lessor.</p>

		<p align='justify'>4. Lessor assures that the Premises has been built as per the plans approved from the Competent authority.</p>

		<p align='justify'>5. The Lessor will keep informed the Lessee of any objections raised by the statutory bodies in connection with the use of “THE PREMISES” or otherwise. The Lessor shall resolve all such objections and ensure that the Lessee continues to use “THE PREMISES” for its business as stated herein.</p>

		<p align='justify'>26. <strong>INDEMNITY</strong></p>

		<p align='justify'>The LESSOR shall indemnify and keep indemnified the LESSEE, its affiliates and their officers indemnified against all costs, claims, expenses, losses, liability and damages that may be suffered or incurred by the LESSOR on account of: </p>

		<p align='justify'>i. Any financial and/or statutory liability incurred by the Lessee (which is the liability of the Lessor in connection with the Premises)</p>

		<p align='justify'>ii. Any actual or alleged breach of the terms of this Agreement by LESSOR.</p>

		<p align='justify'>And the LESSOR shall arrange to forthwith pay to Lessee without demur or delay such an amount as duly notified by the LESSEE.</p>

		<p align='justify'>27. In case of any dispute with regard to this Lease Deed, the same shall be subject to the jurisdiction of the courts of New Delhi and the India Law shall be applicable.</p>

		<p align='justify'>28. IN WITNESS WHEREOF both the parties hereto have executed this Lease Deed dated <strong>". $start_date ."<strong>  at NEW DELHI on the day first above written.</p>

		<p align='justify'><strong>WITNESS: LESSOR:</strong></p>

		<p align='justify'><strong><br>
		</strong></p>

		<p align='justify'>Signature: ________________________ ____________________________</p>

		<p align='justify'>Name:  ________________________ ____________________________</p>

		<p align='justify'>Address:  ________________________ ____________________________</p>

		<p align='justify'>________________________ ____________________________</p>

		<p align='justify'><br>
		</p>

		<p align='justify'><strong>WITNESS:</strong> <strong>LESSEE:</strong></p>

		<p align='justify'><br>
		</p>

		<p align='justify'>Signature: _______________________ ____________________________</p>

		<p align='justify'>Name:  _______________________ ____________________________</p>

		<p align='justify'>Address:  _______________________ ____________________________</p>

		<p align='justify'>_______________________ ____________________________</p>

		<p align='justify'>_______________________ ____________________________</p>

		<p align='justify'><br>
		</p>";
		//$desc3="this is text3";

		$newSection->addText($desc1);
		$newSection->addText($desc2);
		//$objectWriter=\PhpOffice\PhpWord\IOFactory::createWriter($word,'Word2007');
		$objectWriter=\PhpOffice\PhpWord\IOFactory::createWriter($word,'HTML');
		try{
		$objectWriter->save(storage_path('lrms_'.$factsheet_code.'_'.date('d-m-Y').'.doc'));
				//$objectWriter->save(storage_path('mess_lrms_'.$factsheet_code.'_'.date('d-m-Y').'.doc'));

		//$objectWriter->save(public_path('lrms.doc'));
		}
		catch(Exception $e){

		}
		return response()->download(storage_path('lrms_'.$factsheet_code.'_'.date('d-m-Y').'.doc'));

		//return response()->download(public_path('lrms.doc'));
		}
		
		public function exportToMessWord($id)
		{
		$factsheet=dst_lrms_rent_agreements::where('dst_lrms_master_id','=',$id)->get();
		//echo"pre";
		// print_r($factsheet);
		// exit;
		//$factsheet=dst_lrms_rent_agreements::all();
		$factsheet_code=$factsheet[0]->factsheet_code;
		//echo"<pre>";
		 //print_r($factsheet_code);
		////echo $factsheet_code;
		// exit;
   
		  $ownerData = dst_lrms_details_property_owners::where('factsheet_code', '=', $factsheet_code)->get()->toArray();

   		 $all_owner_name='';
           $all_owner_address='';
      	foreach($ownerData as $owner){
          $all_owner_name.=$owner['property_owner_name']. "," ;
           $all_owner_address.=$owner['property_owner_address']. "," ;

          }


		//number to word converter
		$numberToWords = new NumberToWords();
		$numberTransformer = $numberToWords->getNumberTransformer('en');
		$rent=ucwords($numberTransformer->toWords($factsheet[0]['monthly_rent']));
		$refund=ucwords($numberTransformer->toWords($factsheet[0]['total_refundable_security_deposits']));

		$std_dates = strtotime($factsheet[0]['lease_agreement_start_date']); 
		$start_date =date('d F,Y', $std_dates);

		$end_dates = strtotime($factsheet[0]['lease_agreement_end_date']); 
		$end_date =date('d F,Y', $end_dates);

		$year=$factsheet[0]['lease_period']/12;
		$year_new=number_format($year, 2);

		
		$word=new \PhpOffice\PhpWord\PhpWord();
		$newSection=$word->addSection();
			
		$desc1="<p align='justify' style='font-size:18px;margin-top:200px;text-align:center'> <strong>LEASE AGREEMENT</strong></p>";

		$desc2=" <p align='justify'>THIS Lease Agreement is made w.e.f.<strong>   1</strong><sup><strong>st</strong></sup><strong> Day of ". $start_date ." </strong>between <strong> ".rtrim($all_owner_name,',')."</strong>having its residence address at- <strong>".rtrim($all_owner_address,',')." </strong> <strong></strong> Hereinafter referred to as the LESSOR (which expression shall include his heirs, successors, administrators, executors, legal representative and assigns) of the ONE PART.<br>
		AND<br>
		<strong>M/S SAFEXPRESS PRIVATE LIMITED,</strong> a Company incorporated under the Companies Act, 1956 having its registered office at <strong>Safex Cargo, Complex N.H. No. 8 Mahipalpur Ext. New Delhi-110037,</strong> hereinafter referred to as the LESSEE (which expression shall include his heirs, successors, administrators, executors, legal representative and assigns) of the OTHER PART.</p>


		<p align='justify'>WHEREAS The LESSOR is the absolute and rightful owner of the PREMISES situated at- <strong>".$factsheet[0]['premises_address']." ,".$factsheet[0]['premises_state'].", </strong>having a covered area of <strong>".$factsheet[0]['premises_area']."</strong> <strong>Sq.Fts. </strong>; having full and lawful rights to let out the same at such terms and conditions as he may think of AND WHEREAS the LESSOR has agreed to let out and the LESSEE has agreed to take on lease the above said Property, hereinafter referred to as “THE PREMISES”.</p>

		<p align='justify'>WHEREAS the LESSOR has agreed to grant the lease of the “THE PREMISES” and the LESSEE has agreed to take the “THE PREMISES” on lease for residential accommodation of its Employees (MESS).</p>

		<p align='justify'>NOW, THIS LEASE AGREEMENT WITNESSETH AS FOLLOWS:</p>

		<p align='justify'>1. That the LESSOR is the sole and absolute owner of “THE PREMISES” and being legally authorized to let out “THE PREMISES” hereby reserved does hereby grant, demise and lease unto the LESSEE “THE PREMISES” subject to the covenants, conditions and agreement between the parties herein written.</p>

		<p align='justify'>2. The lease shall be for a period of <strong>". $year_new ." Years </strong>w.e.f. <strong> ". $start_date ."</strong><strong>  to </strong><strong> ". $end_date ."</strong></sup><strong> </strong> with the ".$factsheet[0]['increment_rate']." % Increase in rent after expiry of every one year. The Lease Deed shall be extended for another tenure of ". $year_new ." Years after the expiry of the initial terms of ". $year_new ." Years by executing fresh lease agreement.</p>

		<p align='justify'>3. That the LESSOR has agreed to let out “THE PREMISES” to the LESSEE at a monthly Rent of <strong>Rs. ".$factsheet[0]['monthly_rent']."/-(Rupees ".$rent." Only)</strong>. The LESSEE has to issue the Cheque or transfer online, amount for the Rent.</p>

		<p align='justify'>4. The tenancy shall be in accordance with English calendar month and shall be a monthly one ending with the last day of every month. All payments made by the Lessee shall be liable to applicable Tax deduction at source.</p>

		<p align='justify'> 5. The LESSEE had paid a total Sum of <strong>Rs.  ".$factsheet[0]['total_refundable_security_deposits']."/-(Rupees ".$refund." Only) </strong> towards payment of Refundable Security Deposit  The LESSOR acknowledges the same as received. The refundable Security Deposit will be refundable by the LESSOR at the time of vacation of the PREMISES. The LESSEE reserves its right to deduct the same from equivalent monthly rentals prior to vacation of the PREMISES.</p>

		<p align='justify'>6.That the “THE PREMISES” shall be used for the purpose of Residential accommodation of its Employees (MESS)..</p>

		<p align='justify'>7. It is hereby agreed between the LESSOR and the LESSEE that during the currency of this Lease Agreement or any extension thereof, The PREMISES shall be used for all activities necessary for carrying on the business of the LESSEE providing transportation,C&amp;&amp;F activities , warehousing and logistics solutions to their clients, which is their core area of operation. Such activities may, for the purposes of this Deed, be deemed to include but would not be limited to transportation, pickup and delivery of goods, logistics support, C and F activities, Warehousing, Third Party Logistics Solutions and other related services, etc. by Safexpress Private Ltd. and its Associates.</p>

		<p align='justify'>8. The LESSOR also agrees that if such activities require the LESSEE to apply for GST registration etc. in the name of their clients with The PREMISES as the address, the LESSEE may do so and that the LESSOR will not have any objection to this but in doing so the LESSEE shall not create or give any right in the THE PREMISES in their favour.</p>

		<p align='justify'>9. The LESSOR shall not encumber “THE PREMISES” or do or omit to do any act or deed during the term of this agreement which may in any manner jeopardize or disturb the LESSEE’s exclusive possession and peaceful enjoyment of DEMISE PREMISES.</p>

		<p align='justify'>10. The LESSEE shall pay the charges for the Electricity (power and light) and Telephone for “THE PREMISES” to the authorities concerned as per actual bills for the usage of the electricity by the LESSEE during the period of the lease.</p>

		<p align='justify'>11. The LESSEE shall retain the original bill and shall give the copies of the paid bills received from the concerned Government Authorities to the LESSOR upon its request. Charges of any means or manner whatsoever arising before the date of handling over “THE PREMISES” to the LESSEE shall be borne by the LESSOR.</p>

		<p align='justify'>12. That the LESSOR shall be responsible for the payment of all Property Tax and any other statutory taxes and or any levies/charges with respect to “THE PREMISES” that may be levied at any point in time by any Authority whatsoever in respect of the “THE PREMISES”. The LESSOR hereby agrees to indemnify the LESSEE in case such a demand is raised by any statutory authority and is paid by the LESSEE on behalf of the LESSOR.</p>

		<p align='justify'>13. That the LESSEE shall carry out normal day-to-day maintenance such as fuses leakage of taps, replacement of bulbs, tube lights, light fittings, sinks etc and other such repairs at his own cost.</p>

		<p align='justify'>14. The LESSOR shall attend to major repairs such as leakage in ceiling, electricity, bursting of sanitary pipes, cracks, replacement of electrical wiring, defective sewerage system. Corroding of water pipes etc., as and when required by the LESSEE. If the LESSOR does not attend such major repairs as pointed out by the LESSEE within reasonable time from the time of receiving the phone call from the LESSEE then the LESSEE may get the repairs done and deduct all expenses incurred from the amount payable under this Lease Agreement.</p>

		<p align='justify'>15. That the LESSEE shall not store any obnoxious, goods in “THE PREMISES”.</p>

		<p align='justify'>16. That the LESSEE shall be at liberty to have its goods and belongings kept in ‘THE PREMISES” insured at its own cost. The LESSEE will be permitted at its own expense to display its name and logo at an appropriate place.</p>

		<p align='justify'>17. That the LESSEE shall not be responsible for any loss, destruction, damage to ‘THE PREMISES” resulting from earthquake, storm, civil disturbances, fire and other conditions or acts of God or mankind e.g. War, civil disturbances, fire and other conditions or acts of God or mankind e.g. War, riots etc on which the LESSEE has no control. If in any circumstances the LESSEE is unable to use “THE PREMISES” (e.g. Earthquake, government restriction, war etc. etc.) then the LESSEE shall have the option of terminating the lease without giving notice to the LESSOR, however, in the event, the LESSEE, continues to occupy “THE PREMISES”, the LESSEE shall continue to pay a monthly Rent.</p>

		<p align='justify'>18. The LESSEE shall not carry out any structural additions or alterations to “THE PREMISES” without the written consent of the LESSOR. The lessee, however, shall have the right to install room/split air-conditioning units, coolers, exhaust fans, other electrical / electronic appliances and machines, room partitions etc. without causing any major damage to “THE PREMISES’, and shall on the expiry or termination of this Lease Agreement be entitled to remove all such units, appliances, etc., as also such other of its items that it had brought into “THE PREMISES” during the existence of this Lease Agreement.</p>

		<p align='justify'>19. That the LESSEE shall permit the LESSOR or its authorized agents to enter upon “THE PREMISES” for inspection and carrying our repairs at a reasonable time on prior written notice.</p>

		<p align='justify'>20. THE LESSOR shall provide suitable space with in the PREMISES to LESSEE for installation of its Network Antenna.</p>

		<p align='justify'>21. The LESSEE shall on expiry of the lease period, handover the vacant peaceful possession of “THE PREMISES” to the LESSOR in good condition subject to normal wear and tear arising from day to day use and from such causes as are beyond the control of the LESSEE viz. fire, earthquake, floods, riots etc.</p>

		<p align='justify'>22. Both the LESSOR &amp;&amp; The LESSEE reserves its right to terminate the Agreement by serving ".$factsheet[0]['notice_period']." months advance written notice for same.</p>

		<p align='justify'>23. That any notice required to be served upon the LESSEE shall be considered served if delivered at the registered office address stated above and duly acknowledged by the authorized representative of the LESSEE. That any notice, which may be required to be served upon the LESSOR shall sufficiently be served and given if delivered by Registered Post (or hand delivered) addressed to the address of the LESSOR.</p>

		<p align='justify'>24. That the LESSEE/LESSOR as the case may be, shall not be liable or responsible To each other for injury or loss to any individual due to the destruction or damage to “THE PREMISES” by reason of any force majeure circumstances, fire, act of God, riots, terrorism, earthquake or reasons beyond the reasonable control of the LESSOR or LESSEE.</p>
		<p align='justify'><br>
		</p><p align='justify'><br>
		</p>
		<p align='justify'>25. <strong>WARRANTY &amp;&amp; REPRESENTATIONS</strong></p>

		<p align='justify'>As an inducement to enter into these presents, each of the Parties hereby covenants, represents and warrants to the other, as may applicable, as follows:</p>

		<p align='justify'>1. That each of the Parties, is a company/ firm duly organized, validity existing and in good standing under the laws of its incorporation. The Lessor has absolute authority, good title and right to grant this Lease in respect of the Demised Premises and shall hold the Lessee free and harmless of any demands, claims, actions or proceedings by others in respect of quiet possession of the Demised Premises.</p>

		<p align='justify'>2. The deed of Lease has been duly authorized, executed and delivered by Lessor and assuming due authorization, execution and delivery by Lessee, constitutes the valid, legal and binding agreement of Lessor, enforceable against the Lessor in accordance with its terms.</p>

		<p align='justify'>3. The Lessee shall have free and unobstructed access to the Demised Premises at all times during the term of the Lease and the Lessee shall enjoy quiet and peaceful possession of Demised Premises, without disturbances by Lessor or by any other assignee or any successor – in- interest of the Lessor or by any other person claiming and proving title paramount to the Lessor.</p>

		<p align='justify'>4. Lessor assures that the Premises has been built as per the plans approved from the Competent authority.</p>

		<p align='justify'>5. The Lessor will keep informed the Lessee of any objections raised by the statutory bodies in connection with the use of “THE PREMISES” or otherwise. The Lessor shall resolve all such objections and ensure that the Lessee continues to use “THE PREMISES” for its business as stated herein.</p>

		<p align='justify'>26. <strong>INDEMNITY</strong></p>

		<p align='justify'>The LESSOR shall indemnify and keep indemnified the LESSEE, its affiliates and their officers indemnified against all costs, claims, expenses, losses, liability and damages that may be suffered or incurred by the LESSOR on account of: </p>

		<p align='justify'>i. Any financial and/or statutory liability incurred by the Lessee (which is the liability of the Lessor in connection with the Premises)</p>

		<p align='justify'>ii. Any actual or alleged breach of the terms of this Agreement by LESSOR.</p>

		<p align='justify'>And the LESSOR shall arrange to forthwith pay to Lessee without demur or delay such an amount as duly notified by the LESSEE.</p>

		<p align='justify'>27. In case of any dispute with regard to this Lease Deed, the same shall be subject to the jurisdiction of the courts of New Delhi and the India Law shall be applicable.</p>

		<p align='justify'>28. IN WITNESS WHEREOF both the parties hereto have executed this Lease Deed dated <strong>". $start_date ."<strong>  at NEW DELHI on the day first above written.</p>

		<p align='justify'><strong>WITNESS: LESSOR:</strong></p>

		<p align='justify'><strong><br>
		</strong></p>

		<p align='justify'>Signature: ________________________ ____________________________</p>

		<p align='justify'>Name:  ________________________ ____________________________</p>

		<p align='justify'>Address:  ________________________ ____________________________</p>

		<p align='justify'>________________________ ____________________________</p>

		<p align='justify'><br>
		</p>

		<p align='justify'><strong>WITNESS:</strong> <strong>LESSEE:</strong></p>

		<p align='justify'><br>
		</p>

		<p align='justify'>Signature: _______________________ ____________________________</p>

		<p align='justify'>Name:  _______________________ ____________________________</p>

		<p align='justify'>Address:  _______________________ ____________________________</p>

		<p align='justify'>_______________________ ____________________________</p>

		<p align='justify'>_______________________ ____________________________</p>

		<p align='justify'><br>
		</p>";
		//$desc3="this is text3";

		$newSection->addText($desc1);
		$newSection->addText($desc2);
		//$objectWriter=\PhpOffice\PhpWord\IOFactory::createWriter($word,'Word2007');
		$objectWriter=\PhpOffice\PhpWord\IOFactory::createWriter($word,'HTML');
		try{
		//$objectWriter->save(storage_path('mess_lrms.doc'));
		$objectWriter->save(storage_path('mess_lrms_'.$factsheet_code.'_'.date('d-m-Y').'.doc'));
		//$objectWriter->save(public_path('lrms.doc'));
		}
		catch(Exception $e){

		}
		return response()->download(storage_path('mess_lrms_'.$factsheet_code.'_'.date('d-m-Y').'.doc'));
			  	  //return $pdf->download('lease_agreement_'.$factsheet_code.'_'.date('d-m-Y').'.pdf');

		//return response()->download(public_path('lrms.doc'));
		}

		}
