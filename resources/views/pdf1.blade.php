<!-- pdf.blade.php -->
<style>
p {
  padding: 10px 40px;
}
</style>

<?php

function convert_number_to_words($number) {

    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'One',
        2                   => 'Two',
        3                   => 'Three',
        4                   => 'Four',
        5                   => 'Five',
        6                   => 'Six',
        7                   => 'Seven',
        8                   => 'Eight',
        9                   => 'Nine',
        10                  => 'Ten',
        11                  => 'Eleven',
        12                  => 'Twelve',
        13                  => 'Thirteen',
        14                  => 'Fourteen',
        15                  => 'Fifteen',
        16                  => 'Sixteen',
        17                  => 'Seventeen',
        18                  => 'Eighteen',
        19                  => 'Nineteen',
        20                  => 'Twenty',
        30                  => 'Thirty',
        40                  => 'Fourty',
        50                  => 'Fifty',
        60                  => 'Sixty',
        70                  => 'Seventy',
        80                  => 'Eighty',
        90                  => 'Ninety',
        100                 => 'Hundred',
        1000                => 'Thousand',
        1000000             => 'Million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );

    if (!is_numeric($number)) {
        return false;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}
?>
<?php
echo "<img src='http://164.52.196.61/lrms/public/img/thumb.jpeg'  width='150px' height='50px' alt='SAFEXPRESS' style='margin-left:250px;'>";
?>
<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>
 <p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>
 <p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>

<p align='justify'><br>
 </p>
<?php 
//print_r($factSheet);

//echo date('d F, Y');

//$input = '05/10/2011 15:00:02'; 
$std_dates = strtotime($factSheet[0]['lease_agreement_start_date']); 
$start_date =date('d F Y', $std_dates);

$end_dates = strtotime($factSheet[0]['lease_agreement_end_date']); 
$end_date =date('d F Y', $end_dates);

$year=$factSheet[0]['lease_period']/12;
$year_new=number_format($year, 2);

 $month_rent_word=convert_number_to_words($factSheet[0]['monthly_rent']);

$security_deposite_word=convert_number_to_words($factSheet[0]['total_refundable_security_deposits']);

//$occupancy_dates = strtotime($factSheet[0]['branch_occupancy_date']); 
//$occupancy_date =date('d F,Y', $occupancy_dates);

//echo $security_deposite_word=convert_number_to_words($factSheet[0]['total_refundable_security_deposits']);

//echo "<img src='http://164.52.196.61/lrms/public/img/thumb.jpeg'  width='275px' height='100px' alt='SAFEXPRESS' align='middle'>";
//echo "<embed src='http://164.52.196.61/lrms/public/img/thumb.jpeg' width='275px' height='100px' alt='logo'>";

echo "
<p align='justify' style='font-size:20px'> <strong>LEASE AGREEMENT</strong></p>

<p align='justify'>THIS Lease Agreement is made w.e.f.<strong> ". $start_date ." </strong>between"; 
foreach($ownerData as $owner)
{
	//print_r($owner['property_owner_name']);
	//exit;
	echo "<strong>";echo "\t"; echo $owner['property_owner_name']; echo "</strong>"; echo "\t";echo "having its residence address at-";echo "\t"; echo "<strong>";echo "\t";echo $owner['property_owner_address']; echo "\t"; echo "</strong>"; echo ",";
}
 
echo "<strong></strong> Hereinafter referred to as the LESSOR (which expression shall include his heirs, successors, administrators, executors, legal representative and assigns) of the ONE PART.<br>
AND<br>
<strong>M/S SAFEXPRESS PRIVATE LIMITED,</strong> 

'<img src='http://164.52.196.61/lrms/public/img/thumb.jpeg'  width='150px' height='50px' alt='SAFEXPRESS' style='margin-left:250px;'>'
<br>
a Company incorporated under the Companies Act, 1956 having its registered office at <strong>Safex Cargo, Complex N.H. No. 8 Mahipalpur Ext. New Delhi-110037,</strong> hereinafter referred to as the LESSEE (which expression shall include his heirs, successors, administrators, executors, legal representative and assigns) of the OTHER PART.</p>


<p align='justify'>WHEREAS The LESSOR is the absolute and rightful owner of the PREMISES situated at- <strong>".$factSheet[0]['premises_address']." ,".$factSheet[0]['premises_state'].", </strong>having a covered area of <strong>".$factSheet[0]['premises_area']."</strong><strong>Sq.Fts. </strong> having full and lawful rights to let out the same at such terms and conditions as he may think of AND WHEREAS the LESSOR has agreed to let out and the LESSEE has agreed to take on lease the above said Property, hereinafter referred to as “THE PREMISES”.</p>

<p align='justify'>WHEREAS the LESSOR has agreed to grant the lease of the “THE PREMISES” and the LESSEE has agreed to take the “THE PREMISES” on lease for storage / Warehousing/Logistic Services (which will be outsourced / subcontracted to the other companies if required on behalf of the (LESSEE) on the following terms and conditions, which has been mutually agreed upon.</p>

<p align='justify'>NOW, THIS LEASE AGREEMENT WITNESSETH AS FOLLOWS:</p>

<p align='justify'>1. That the LESSOR is the sole and absolute owner of “THE PREMISES” and being legally authorized to let out “THE PREMISES” hereby reserved does hereby grant, demise and lease unto the LESSEE “THE PREMISES” subject to the covenants, conditions and agreement between the parties herein written.</p>

<p align='justify'>2. The lease shall be for a period of <strong>". $year_new ."Years </strong>w.e.f. <strong> ". $start_date ."</strong><strong>  to </strong><strong> ". $end_date ."</strong></sup><strong> </strong> with the ".$factSheet[0]['increment_rate']." % Increase in rent after expiry of every one year. The Lease Deed shall be extended for another tenure of ". $year_new ." Years after the expiry of the initial terms of ". $year_new ." Years by executing fresh lease agreement.</p>

 <p align='justify'>3. That the LESSOR has agreed to let out “THE PREMISES” to the LESSEE at a monthly Rent of <strong>Rs. ".$factSheet[0]['monthly_rent']."/-(Rupees ".$month_rent_word." Only)</strong>. The LESSEE has to issue the Cheque or transfer online, amount for the Rent.</p>

 <p align='justify'>4. The tenancy shall be in accordance with English calendar month and shall be a monthly one ending with the last day of every month. All payments made by the Lessee shall be liable to applicable Tax deduction at source.</p>

 <p align='justify'> 5. The LESSEE had paid a total Sum of <strong>Rs.  ".$factSheet[0]['total_refundable_security_deposits']."/-(Rupees ".$security_deposite_word." Only)  towards payment of Refundable Security Deposit  The LESSOR acknowledges the same as received. The refundable Security Deposit will be refundable by the LESSOR at the time of vacation of the PREMISES. The LESSEE reserves its right to deduct the same from equivalent monthly rentals prior to vacation of the PREMISES.</p>
 
'<img src='http://164.52.196.61/lrms/public/img/thumb.jpeg'  width='150px' height='50px' alt='SAFEXPRESS' style='margin-left:250px;'>'
<br>
<p align='justify'>6. That the “THE PREMISES” shall be used for the purpose of the Storage/Logistic Warehousing services and allied activities by Safexpress Private Ltd. or its Associates.</p>

<p align='justify'>7. It is hereby agreed between the LESSOR and the LESSEE that during the currency of this Lease Agreement or any extension thereof, The PREMISES shall be used for all activities necessary for carrying on the business of the LESSEE providing transportation, C&amp;amp;F activities, warehousing and logistics solutions to their clients, which is their core area of operation. Such activities may, for the purposes of this Deed, be deemed to include but would not be limited to transportation, pickup and delivery of goods, logistics support, C &amp;amp; F activities, Warehousing, Third Party Logistics Solutions and other related services, etc. by Safexpress Private Ltd. and its Associates.</p>

<p align='justify'>8. The LESSOR also agrees that if such activities require the LESSEE to apply for GST registration etc. in the name of their clients with The PREMISES as the address, the LESSEE may do so and that the LESSOR will not have any objection to this but in doing so the LESSEE shall not create or give any right in the THE PREMISES in their favour.</p>

<p align='justify'>9. The LESSOR shall not encumber “THE PREMISES” or do or omit to do any act or deed during the term of this agreement which may in any manner jeopardize or disturb the LESSEE’s exclusive possession and peaceful enjoyment of DEMISE PREMISES.</p>

<p align='justify'>10. The LESSEE shall pay the charges for the Electricity (power and light) and Telephone for “THE PREMISES” to the authorities concerned as per actual bills for the usage of the electricity by the LESSEE during the period of the lease.</p>

<p align='justify'>11. The LESSEE shall retain the original bill and shall give the copies of the paid bills received from the concerned Government Authorities to the LESSOR upon its request. Charges of any means or manner whatsoever arising before the date of handling over “THE PREMISES” to the LESSEE shall be borne by the LESSOR.</p>

<p align='justify'>12. That the LESSOR shall be responsible for the payment of all Property Tax and any other statutory taxes and or any levies/charges with respect to “THE PREMISES” that may be levied at any point in time by any Authority whatsoever in respect of the “THE PREMISES”. The LESSOR hereby agrees to indemnify the LESSEE in case such a demand is raised by any statutory authority and is paid by the LESSEE on behalf of the LESSOR.</p>

<p align='justify'>13. That the LESSEE shall carry out normal day-to-day maintenance such as fuses leakage of taps, replacement of bulbs, tube lights, light fittings, sinks etc and other such repairs at his own cost.</p>

<br><br><br>
'<img src='http://164.52.196.61/lrms/public/img/thumb.jpeg'  width='150px' height='50px' alt='SAFEXPRESS' style='margin-left:250px;'>'
<br>
<p align='justify'>14. The LESSOR shall attend to major repairs such as leakage in ceiling, electricity, bursting of sanitary pipes, cracks, replacement of electrical wiring, defective sewerage system. Corroding of water pipes etc., as and when required by the LESSEE. If the LESSOR does not attend such major repairs as pointed out by the LESSEE within reasonable time from the time of receiving the phone call from the LESSEE then the LESSEE may get the repairs done and deduct all expenses incurred from the amount payable under this Lease Agreement.</p>

<p align='justify'>15. That the LESSEE shall not store any obnoxious, goods in “THE PREMISES”.</p>

<p align='justify'>16. That the LESSEE shall be at liberty to have its goods and belongings kept in ‘THE PREMISES” insured at its own cost. The LESSEE will be permitted at its own expense to display its name and logo at an appropriate place.</p>

<p align='justify'>17. That the LESSEE shall not be responsible for any loss, destruction, damage to ‘THE PREMISES” resulting from earthquake, storm, civil disturbances, fire and other conditions or acts of God or mankind e.g. War, civil disturbances, fire and other conditions or acts of God or mankind e.g. War, riots etc on which the LESSEE has no control. If in any circumstances the LESSEE is unable to use “THE PREMISES” (e.g. Earthquake, government restriction, war etc. etc.) then the LESSEE shall have the option of terminating the lease without giving notice to the LESSOR, however, in the event, the LESSEE, continues to occupy “THE PREMISES”, the LESSEE shall continue to pay a monthly Rent.</p>

<p align='justify'>18. The LESSEE shall not carry out any structural additions or alterations to “THE PREMISES” without the written consent of the LESSOR. The lessee, however, shall have the right to install room/split air-conditioning units, coolers, exhaust fans, other electrical / electronic appliances and machines, room partitions etc. without causing any major damage to “THE PREMISES’, and shall on the expiry or termination of this Lease Agreement be entitled to remove all such units, appliances, etc., as also such other of its items that it had brought into “THE PREMISES” during the existence of this Lease Agreement.</p>

 <p align='justify'>19. That the LESSEE shall permit the LESSOR or its authorized agents to enter upon “THE PREMISES” for inspection and carrying our repairs at a reasonable time on prior written notice.</p>

<p align='justify'>20. THE LESSOR shall provide suitable space with in the PREMISES to LESSEE for installation of its Network Antenna.</p>

<p align='justify'>21. The LESSEE shall on expiry of the lease period, handover the vacant peaceful possession of “THE PREMISES” to the LESSOR in good condition subject to normal wear and tear arising from day to day use and from such causes as are beyond the control of the LESSEE viz. fire, earthquake, floods, riots etc.</p>
<br>

'<img src='http://164.52.196.61/lrms/public/img/thumb.jpeg'  width='150px' height='50px' alt='SAFEXPRESS' style='margin-left:250px;'>'

<p align='justify'>22. Both the LESSOR &amp;amp; The LESSEE reserves its right to terminate the Agreement by serving ".$factSheet[0]['notice_period']." months advance written notice for same.</p>


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
<br>
'<img src='http://164.52.196.61/lrms/public/img/thumb.jpeg'  width='150px' height='50px' alt='SAFEXPRESS' style='margin-left:250px;'>'
<br>
<p align='justify'>4. Lessor assures that the Premises has been built as per the plans approved from the Competent authority.</p>

<p align='justify'>5. The Lessor will keep informed the Lessee of any objections raised by the statutory bodies in connection with the use of “THE PREMISES” or otherwise. The Lessor shall resolve all such objections and ensure that the Lessee continues to use “THE PREMISES” for its business as stated herein.</p>

<p align='justify'>26. <strong>INDEMNITY</strong></p>



<p align='justify'>The LESSOR shall indemnify and keep indemnified the LESSEE, its affiliates and their officers indemnified against all costs, claims, expenses, losses, liability and damages that may be suffered or incurred by the LESSOR on account of: </p>

<p align='justify'>i. Any financial and/or statutory liability incurred by the Lessee (which is the liability of the Lessor in connection with the Premises)</p>

 <p align='justify'>ii. Any actual or alleged breach of the terms of this Agreement by LESSOR.</p>

<p align='justify'>And the LESSOR shall arrange to forthwith pay to Lessee without demur or delay such an amount as duly notified by the LESSEE.</p>

 <p align='justify'>27. In case of any dispute with regard to this Lease Deed, the same shall be subject to the jurisdiction of the courts of New Delhi and the India Law shall be applicable.</p>

<p align='justify'>28. IN WITNESS WHEREOF both the parties hereto have executed this Lease Deed dated <strong> ". $start_date ."</strong> at NEW DELHI on the day first above written.</p>

 <br>
 <br>
 <br>
<br>
 <br>
 <br>
 <br>
 <br><br>
 <br><br>
 <br><br>
 <br>
 '<img src='http://164.52.196.61/lrms/public/img/thumb.jpeg'  width='150px' height='50px' alt='SAFEXPRESS' style='margin-left:250px;'>'
 <br>
 
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
 </p>
";
?>




 


