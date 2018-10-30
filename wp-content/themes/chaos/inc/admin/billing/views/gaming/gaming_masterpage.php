<?php
 
if(isset($_GET['pagess']) && $_GET['pagess']=='1' ){
	include get_template_directory() .'/inc/admin/billing/views/gaming/gaming_billing.php';	
}
else if(isset($_GET['pagess']) && $_GET['pagess']=='2' ){

	include get_template_directory() .'/inc/admin/billing/views/gaming/display_gaming_billing.php';	

}
else {
	include get_template_directory() .'/inc/admin/billing/views/gaming/gaming_member_setting.php';

}
