<?php
if(isset($_GET['pagess']) && $_GET['pagess']=='1' ){
	include get_template_directory() .'/inc/admin/billing/views/football/football_price_setting.php';
} 
else if($_GET['pagess']=='2' ){
	include get_template_directory() .'/inc/admin/billing/views/football/football_member_setting.php';
}
else if($_GET['pagess']=='3' ){
	include get_template_directory() .'/inc/admin/billing/views/football/football_billing.php';
}
else if($_GET['pagess']=='4' ){
	include get_template_directory() .'/inc/admin/billing/views/football/display_football_billing.php';
}
else{
	include get_template_directory() .'/inc/admin/billing/views/football/football_first.php';
}

?>

