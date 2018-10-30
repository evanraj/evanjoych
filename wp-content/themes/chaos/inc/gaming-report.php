<?php 
/**
 * Template Name: Gaming Report
 *
 * This is the template that displays full width page without sidebar
 *
 * 
 */

  	global $wpdb; 
    $gaming_table           	= $wpdb->prefix.'chaos_gaming_billing';
    $gaming_details             = $wpdb->prefix.'chaos_gaming_billing_relation';
    $member_table 			   = $wpdb->prefix.'chaos_members';
	$timestamp1 = isset($_GET['date_from'])? $_GET['date_from'] : date("Y-m-d");
	$timestamp2 = isset($_GET['date_to'])? $_GET['date_to'] : date("Y-m-d");

	$query_details 			= "SELECT * FROM 
( 
    select bill.*, 
    (case when member_table.membership_no is null then 0 else member_table.membership_no end) as membership_no, 
    (case when member_table.first_name is null then '' else member_table.first_name end) as first_name, 
    (case when member_table.phone is null then 0 else member_table.phone end) as phone from 
    ( 
        select  * from {$gaming_table} WHERE active = 1 and was_bulid = 1 and game_date >='{$timestamp1}' and game_date <='{$timestamp2}' 
    ) as bill 
    left join 
    ( 
        select id as mem_id,membership_no,first_name,phone from {$member_table} WHERE active = 1 
    ) as member_table 
    on bill.member_id= member_table.mem_id 
    ) as gaming 
    left join 
    (
        select gaming_id,sum(gaming_hours) as hours,sum(gaming_total) as price from  {$gaming_details} WHERE active = 1 GROUP by gaming_id 
    ) as  gaming_details on gaming.id = gaming_details.gaming_id";
   	

   	$pricing_football   	= $wpdb->get_results( $query_details, OBJECT ); 

  
?>
<style type="text/css">
	/*body{-webkit-print-color-adjust:exact;border:1px solid;}*/
	.print_content{width:80%; margin: 0 auto;}
	.print_header{width:100%;float:left;margin:5px 0px}
	.header_inside{float:left}
	.info_bar{width:100%;float:left;font-size:14px}
	.customer_info_bar{width:50%;float:left;padding:5px 20px;font-size: 16px;}
	.bill_info_bar{width:23%;float:right;padding:0px 15px}
	.customer_info_bar ul,.bill_info_bar ul{width:100%;padding:0px;margin:0px}
	.customer_info_bar ul li,.bill_info_bar ul li{list-style:none;margin-bottom:5px}
	.customer_info_bar span,.bill_info_bar span{font-size:14px;font-weight:bold}
	.customer_info_bar h4{margin:5px 0px}
	.table-simple{margin-top:15px;width:100%;/*min-height:350px;*/float:left}
	.display{width:95%;margin:0 auto;border-collapse:collapse}
	.table-simple table thead tr th{font-size:14px;background-color:#777e8c!important;padding:10px 0px;color:#fff;font-weight:bold;border-right:1px solid #ccc}
	.table-simple table thead tr th,.table-simple table tbody tr td{font-size:14px;text-align:center;border-left:1px solid #ccc;border-right:1px solid #ccc}
	.table-simple table tbody tr td{border-bottom:1px solid #ccc;padding:5px 10px}
	.stock_ck_avail_no{width:10px;border-radius:50%;background:#d51d29;color:#fff}
	.footer_addr{width:100%;padding:10px 0px;bottom:0;left:0;border-top:1px solid}

@media print {
  @page {
    size: auto;   /* auto is the initial value */
    size: A4 portrait;
    margin: 0 auto;  /* this affects the margin in the printer settings */
    border: 1px solid black;  /* set a border for all printed pages */
    padding: 20px;
    margin-top: 20px;
  }
 
}
/*body {
    height: 297mm;
   	width: 210mm;
    padding: 20px;
    
}*/
	.row {
		position: relative;
	}
	.row-no {
		color: #fff;
	    position: absolute;
	    left: 18px;
		top: 8px;
	    font-size: 18px;
	}
	.type-original {
		width: 20px;
		height: 20px;
		background-color: #7d7f84;
		border-radius: 15px;
	}
	.type-duplicate {
		width: 18px;
		height: 18px;
		background-color: #7d7f84;
	}
	.type-health {
	    border-left: 10px solid transparent;
	    border-right: 10px solid transparent;
	    border-bottom: 18px solid #7d7f84;
	}
	.type-f {
		position: absolute;
		left: 0;
		left: 10px;
	}
	.first-col {
		width: 170px;
	}

	.print_content{
		width:100%;
	}
	.header_inside{
		margin-left: 100px;
	}
	.sub {
		float: right;
	}
	.logo_border{
		border: 1px solid rgba(0, 0, 0, 0.29);
		height: 166px;
	}
	.logo_border_right{
		font-size: 16px;
		padding: 8px;
		border: 1px solid rgba(0, 0, 0, 0.29);
		height:80px;
	}
	.logo_border_right div {
		margin-top: 5px;
	}
	.top_menu_left, .top_menu_right {
		float: left;
		width: 50%;

	}				
	.top_menu_right{
		height: 100px;					
			
	}
	
	.top_menu_down{
		margin-top: 174px;
	}
	.logo {
	    display: block;
	    -moz-box-sizing: border-box;
	    box-sizing: border-box;
	    width: 380px;
	    margin-top: 10px;
	   
	}
	.tin {
		float: left;
		width: 100px;
	}
	.content{
		float: left;
		width:120px;
	}
	.address{
		text-align: center;
		margin-top: 10px;
	}
	.rup{
		padding: 20px;
	    font-size: 16px;
	}
</style>

	<?php 


		$emailid = 'karthik97933@gmail.com';
		//$emailid = 'karthik@chaosentertainment.in';
		$subject = 'Gaming Daily Report - '.date("d-m-Y");




$message1 = '<html><body>
<h1 style="margin-top:30px;margin-bottom:0px;"><b>Gaming Daily Report</b></h1>
<table border="1">
	<thead>
		<tr>
			<th>S.No</th>
			<th>Billed By</th>
			<th>Inv Number</th>
			<th>Member Name</th>
			<th>Phone Number</th>
			<th>Member Number</th>						
			<th>No of Hours</th>							
			<th>Total Price</th>
			<th>Member Discount</th>
			<th>Discount</th>
			<th>Gst</th>
			<th>Bill Amount</th>
			
		</tr>
	</thead>
	<tbody>';

		$i=1;
		foreach($pricing_football as $played_detail){

	        $message2.= "<tr><td>".$i."</td>
	        <td>".$played_detail->created_by."</td>
            <td>".$played_detail->gaming_bill_no."</td> 
            <td>".$played_detail->gaming_member_name."</td>
            <td>".$played_detail->gaming_member_phone_number."</td>
            <td>".$played_detail->membership_no."</td>

            <td>".$played_detail->hours."</td>
            <td>".$played_detail->price."</td>
            <td>".$played_detail->gaming_discount_value."</td>
            <td>".$played_detail->gaming_member_discount_value."</td>
            <td>".$played_detail->gaming_gst_val."</td>
            <td>".$played_detail->gaming_bill."</td></tr>";

        $i++;
        } 
	$message3 = '</tbody></table></body></<html>';


	$final_msg = $message1. $message2 . $message3;
	$email_array = array('karthik97933@gmail.com', 'harsha@chaosentertainment.in', 'prasanth@chaosentertainment.in');
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	//Mail Function
    foreach ( $email_array as $tomail ) {
            wp_mail( $tomail, $subject, $final_msg, $headers );
        }				
		echo $final_msg;