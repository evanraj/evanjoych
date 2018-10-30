<?php 
/**
 * Template Name: Football Mail
 *
 * This is the template that displays full width page without sidebar
 *
 * 
 */

	global $wpdb; 
    $football_table           = $wpdb->prefix.'chaos_football_billing';
    $billing_detail_table 	  = $wpdb->prefix. 'chaos_football_billing_details';

    if($_GET['action'] == 'football_email') {

    $bill_id        			= isset( $_GET['bill_id'] ) ? $_GET['bill_id']  : '';
	}
	$mylink          		= $wpdb->get_row( "SELECT * FROM $football_table  where id='$bill_id' AND active = 1 and was_bulid = 1" );

	$query_details 			= "SELECT * FROM {$billing_detail_table} WHERE active = 1 and inv_id ='$bill_id'";
   	$pricing_football   	= $wpdb->get_results( $query_details, OBJECT ); 



	$number = $mylink->ft_football_bill;
   	$no = round($number);
   	$point = round($number - $no, 2) * 100;
   	$hundred = null;
   	$digits_1 = strlen($no);
   	$i = 0;
   	$str = array();
   	$words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   	$digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   	while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     	} else $str[] = null;
  	}	
  	$str = array_reverse($str);
  	$result = implode('', $str);
  	$points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
  
?>



<?php
		//$emailid = 'karthik97933@gmail.com';
		$emailid = 'sowmiya@ajnainfotech.com';
		$subject = 'Football Bill';
		
$message3 = null;
 
	$message1 = '<html>
		<body>
			<table  style="width: 100%;">
				<tr>
					<td>
						<label>Annexure ‘A’</lable>
					</td>
					<td>
						<label style="float:right">Subject to Chennai Jurisdiction Only</lable>
					</td>
				</tr>
				<tr>
					<td  colspan="2">
					<label style="text-align: center"><h2>Football Billing</h2></label>
					</td>
				</tr>
				<tr>
					<td style="width: 50%;">
					<center><img style="width:30%;" src="'.get_template_directory_uri().'/inc/img/chaos_logo.png"></center>
					</td>
					<td>
					<table>
					<tr>
						<td>
							<label>Old no:57 New no:38, Balaraman Road, Adyar,Chennai-600020</label>
						</td>

					</tr>

					<tr>
						<td>
							<label>+91 994 014 0757</label>
						</td>
					</tr>
					<tr>
						<td>
							<label>info@chaos.in</label>
						</td>
					</tr>
					<tr>
						<td>
							<label>www.chaosentertainment.in</label>
						</td>
					</tr>
					<tr>
						<td>
							<label>GSTIN No : 33AAMFC0405F1Z2</label>
						</td>
					</tr>
					<tr>
						<td>
							<label>Area Code : 044</label>
						</td>
					</tr>

					</table>
					
					</td>
				</tr>
				<tr>
					<td  colspan="2">
						<label>Invoice No : '.$mylink->ft_bill_no.'</label>
					</td>	
				</tr>
				<tr>
					<td  colspan="2">
						<label>Date: '.$mylink->ft_date.'</label>
					</td>
				</tr>
				<tr>
					<td  colspan="2">
						<label>Member Name : '.$mylink->ft_member_name.'</label>
					</td>
				</tr>
				<tr>
					<td  colspan="2">
						<label>Phone Number : '.$mylink->ft_member_phone_number.'</label>
					</td>		
				</tr>
				<tr>
					<td  colspan="2">
						<label>Email Id : '.$mylink->ft_member_email.'</label>
					</td>		
				</tr>

			
			<tr>
			<td  colspan="2">
			<table style="width:100%;text-align: center;" border="1">
					<thead >
						<tr>
							<th>S.No</th>
							<th>Hours</th>
							<th>Price Per Hour</th>
							<th>Bill Amount</th>
						</tr>
					</thead>
					<tbody>';

						
						$i=1;
						foreach($pricing_football as $played_detail){

					        $message2.= '<tr><td>'.$i.'</td>
                            <td>'.$played_detail->hours.'</td>
                            <td>'.$played_detail->price_per_hour.'</td>
                            <td>'.$played_detail->price.'</td></tr>';

                        $i++;
                        }
                        var_dump($mylink ->ft_member_discount_value != '0.00');
                       if($mylink ->ft_member_discount_value != '0.00'){ 
						$message3.= '<tr>
							<td></td>
							
							<td></td>
							
							<td>
								<label>Member Discount  ('.$mylink->ft_member_discount.'" %")</label>
							</td>
							<td>'.$mylink->ft_member_discount_value.'</td>
						</tr>';
						 } 
							if($mylink ->ft_discount_value != '0.00'){ 
						$message3.='<tr>
							<td></td>
							
							<td></td>
							
							<td>
								<label>Discount ('.$mylink->ft_discount.'" %")</label>
							</td>
							<td>'.$mylink->ft_discount_value.'</td>
						</tr>';
						 } 
							 if($mylink ->ft_gst_value != '0.00'){ 
						$message3.='<tr>
							<td></td>
							
							<td></td>
							
							<td>
								<label>GST ('.$mylink->ft_gst.'" %")</label>
							</td>
							<td>'.$mylink->ft_gst_value.'></td>
						</tr>';
						 } 
						$message3.= '<tr>
							<td></td>
							
							<td></td>
							
							<td>
								<label>Total &nbsp;(Rs)</label>
							</td>
							<td>'.$mylink->ft_football_bill.'</td>
						</tr>	
					</tbody>
				</table>
				<table>
				<tr>
				<td>
					<label>Rupees In Words :  </label>'.ucfirst($result) .'Rupees Only
				</td>
				</tr>
				<table>
				</td>
				</tr>
				</table>'; 

						

$final_msg = $message1. $message2 . $message3;
echo $final_msg;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// var_dump(wp_mail( $emailid, $subject, $final_msg ));
		//Mail Function
		wp_mail( $emailid, $subject, $final_msg,$headers );


//array 1
// 		$cars=array("1"=>"A","2"=>"B","3"=>"C","4"=>"D","5"=>"E");
// 		$array_chunk=array("1","2","3","4","5");
// // 2
// 		 array_change_key_case($cars,CASE_UPPER);

// // 3
// 		 $array_split = array_chunk($array_chunk,2);
		
// //4

// 			$a = array(
// 		  array(
// 		    'id' => 5698,
// 		    'first_name' => 'Peter',
// 		    'last_name' => 'Griffin',
// 		  ),
// 		  array(
// 		    'id' => 4767,
// 		    'first_name' => 'Ben',
// 		    'last_name' => 'Smith',
// 		  ),
// 		  array(
// 		    'id' => 3809,
// 		    'first_name' => 'Joe',
// 		    'last_name' => 'Doe',
// 		  )
// 		);

// 		$last_names = array_column($a, 'last_name');
// 		//print_r($last_names);

// 	//5
// 		$a = array('green', 'red', 'yellow');
// 		$b = array('avocado', 'apple', 'banana');
// 		$c = array_combine($a, $b);

// 		//print_r($c);

// 		//6
// 		$a1=array("a"=>"red","e"=>"yellow","c"=>"blue");
// 		$a2=array("a"=>"red","b"=>"green","c"=>"blue");

// 		$result=array_diff($a1,$a2);
// 		print_r($result);
