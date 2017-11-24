<?php 
/**
 * Template Name: Foot Ball Print
 *
 * This is the template that displays full width page without sidebar
 *
 * 
 */

  global $wpdb; 
    $football_table           = $wpdb->prefix.'chaos_football_billing';

    if($_GET['action'] == 'football_print') {
    $bill_no        			= isset( $_GET['bill_no'] ) ? $_GET['bill_no']  : '';
	}
	$mylink          		= $wpdb->get_row( "SELECT * FROM $football_table  where ft_bill_no='$bill_no' AND active = 1 and was_bulid = 1" );

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
<style type="text/css">
	body{-webkit-print-color-adjust:exact;border:1px solid;}
	.print_content{width:80%; margin: 0 auto;}
	.print_header{width:100%;float:left;margin:5px 0px}
	.header_inside{float:left}
	.info_bar{width:100%;float:left;font-size:13px}
	.customer_info_bar{width:50%;float:left;padding:5px 20px;font-size: 16px;}
	.bill_info_bar{width:23%;float:right;padding:0px 15px}
	.customer_info_bar ul,.bill_info_bar ul{width:100%;padding:0px;margin:0px}
	.customer_info_bar ul li,.bill_info_bar ul li{list-style:none;margin-bottom:5px}
	.customer_info_bar span,.bill_info_bar span{font-size:14px;font-weight:bold}
	.customer_info_bar h4{margin:5px 0px}
	.table-simple{margin-top:15px;width:100%;/*min-height:350px;*/float:left}
	.display{width:95%;margin:0 auto;border-collapse:collapse}
	.table-simple table thead tr th{font-size:13px;background-color:#777e8c!important;padding:10px 0px;color:#fff;font-weight:bold;border-right:1px solid #ccc}
	.table-simple table thead tr th,.table-simple table tbody tr td{font-size:13px;text-align:center;border-left:1px solid #ccc;border-right:1px solid #ccc}
	.table-simple table tbody tr td{border-bottom:1px solid #ccc;padding:5px 10px}
	.stock_ck_avail_no{width:10px;border-radius:50%;background:#d51d29;color:#fff}
	.footer_addr{width:100%;padding:10px 0px;bottom:0;left:0;border-top:1px solid}

@media print {
  @page { margin: 0; }
  body { margin: 1.6cm; }
}
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

	<div class = "print_content">
		<div class="print_content_in">
			<div class="annex">
				<span>
					<label>Annexure ‘A’</label>
				</span>
				<span class="sub">
					<label>Subject to Chennai Jurisdiction Only</label>
				</span>
			</div>
			<div class = "print_header">
				<div style="width: 320px; margin: 0 auto; padding: 5px 0px; height: 75px;">
					<div class=header_inside><h2>Football Billing</h2></div>
					<br/><br/>
				</div>
			</div>
			<div class="top_menu_up">
		  		<div class="top_menu_left">
		  			<div class="logo_border">
				  		<div class="logo">
				  			<center><img style="width:60%;" src="<?php echo get_template_directory_uri().'/inc/img/chaos_logo.png'; ?>"></center>
				  		</div>
				  		<div class="address">Old no:57 New no:38, Balaraman Road, Adyar,Chennai-600020</div>
			  		</div>
		  		</div>
		  		<div class="top_menu_right" style="height: 167px;border-bottom: 1px solid rgba(0, 0, 0, 0.29);">
		  			<div class="logo_border_right">
				  		<div>+91 994 014 0757</div>
				  		<div>info@chaos.in</div>
				  		<div>www.chaosentertainment.in</div>
			  		</div>
			  		<div class="logo_border_right_down" style="margin-left: 5px;">
				  		<div class="top_menu_right_in" style="margin-top:5px;">
				  			<div class="tin">TIN No</div>
				  			<div>: 33600863401</div>
				  		</div>
				  		<div class="top_menu_right_area" style="margin-top:5px;">
				  			<div class="tin">Area Code</div>
				  			<div>: 044 </div>
				  		</div>
			  		</div>
		  		</div>
		  	</div>
			<div class="print_logo">
			</div>
			<div class=info_bar>
				<div class=customer_info_bar>
					
					<ul>
						<li><div class="content">Invoice No  </div> <div>: <?php echo $mylink->ft_bill_no;?></div></li>
						<li><div class="content">Date </div><div>: <?php echo $mylink->ft_date;?></div> </li>
						<li><div class="content">Member Name  </div><div>: <?php echo $mylink->ft_member_name;?></div></li>
						<li><div class="content">Phone Number  </div><div>: <?php echo $mylink->ft_member_phone_number;?></div></li>
					</ul>
				</div>
				
			<div style="clear:both;"></div>
			<h3 style="margin-top:30px;margin-bottom:0px;margin-left: 25px;">Item Ordered</h3>
			<div class=table-simple>
				<table class=display>
					<thead>
						<tr>
							<th class="first-col">S.No</th>
							<th>Hours</th>
							<th>Players</th>
							<th>Value</th>
							<th>Bill Amount</th>
						</tr>
					</thead>
					<tbody>

						<?php 
					        echo "<tr><td class='div-table-col'>1</td>";
                            echo "<td class='div-table-col'>".$mylink->ft_no_of_hours."</td>";
                            echo "<td class='div-table-col'>".$mylink->ft_no_of_member."</td>";
                            echo "<td class='div-table-col'>".$mylink->ft_amount_value."</td>";
                            echo "<td class='div-table-col'>".$mylink->ft_total."</td></tr>";

                        ?>
                        <tr>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label>Vat/Cst &nbsp;(Rs)</label>
							</td>
							<td><?php  echo $mylink->ft_vat_value;?></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label>Member Discount &nbsp;(Rs)</label>
							</td>
							<td><?php  echo $mylink->ft_member_discount_value;?></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label>Discount &nbsp;(Rs)</label>
							</td>
							<td><?php  echo $mylink->ft_discount_value;?></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<label>Total &nbsp;(Rs)</label>
							</td>
							<td><?php  echo $mylink->ft_football_bill;?></td>
						</tr>
						
					</tbody>
				</table>
				<div class="rup">
					<label>Rupees In Words :  </label><?php echo ucfirst($result) . "Rupees Only"; ?>
				</div>
			</div>		
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>