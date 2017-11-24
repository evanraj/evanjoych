<h1>Chaos Members</h1>

<?php 
global $wpdb;
$table_name = $wpdb->prefix. 'chaos_members';

if(isset($_POST['action']) AND $_POST['action'] == 'chaos_member_info') {
    $membership_no  = ( isset($_POST['membership_no']) && $_POST['membership_no']!='')  ? $_POST['membership_no'] : '';    
    $name  			= ( isset($_POST['name']) && $_POST['name']!='')  ? $_POST['name'] : '';    
    $phone  		= ( isset($_POST['phone']) && $_POST['phone']!='')  ? $_POST['phone'] : '';    
    $email  		= ( isset($_POST['email']) && $_POST['email']!='')  ? $_POST['email'] : '';   
        
	        if($_POST['name'] !='') {
	            $wpdb->insert($table_name, array(
	            'membership_no' => $membership_no,
	            'name'         	=> $name,
	            'phone'         => $phone,
	            'email'        	=> $email
	        ));
        } else {
        	echo "Fill Data";
        }
}

$member_data = false;
if(isset($_GET['action']) && $_GET['action'] == 'edit' ) {
    $member_id = $_GET['member_id'];

	if(isset($_POST['action']) AND $_POST['action'] == 'member_update') {
		$membership_no 				= ( isset($_POST['membership_no']) && $_POST['membership_no']!='')  ? $_POST['membership_no'] : '';
		$name 						= ( isset($_POST['name']) && $_POST['name']!='')  ? $_POST['name'] : '';
		$phone 						= ( isset($_POST['phone']) && $_POST['phone']!='')  ? $_POST['phone'] : '';
		$email 						= ( isset($_POST['email']) && $_POST['email']!='')  ? $_POST['email'] : '';

		$wpdb->update($table_name, array(
			'membership_no' => esc_attr($membership_no),
			'name' 			=> esc_attr($name),
			'phone' 		=> esc_attr($phone),
			'email' 		=> esc_attr($email),
			),
			array(
				'id' => $_POST['member_id']
			)
		);
	}       
    $result = $wpdb->get_row("SELECT * FROM ${table_name} WHERE id = $member_id");
    $member_data = $result;
} 
?>
<center>
<form class="form-horizontal" action="" method="POST" id="chaos_member_info">
	<label>Membership Id</label>
	<input type="text" class="form-control" name="membership_no" id="membership_no" value="<?php echo $result->membership_no; ?>">
	<label>Name</label>
	<input type="text" class="form-control" name="name" id="name" value="<?php echo $result->name; ?>">
	<label>Mobile</label>
	<input type="text" class="form-control" name="phone" id="phone" value="<?php echo $result->phone; ?>">
	<label>E-mail</label>
	<input type="text" class="form-control" name="email" id="email" value="<?php echo $result->email; ?>" ><br>
	<?php
	if($member_data) {  ?>
		<input type="hidden" name="member_id" value="<?php echo $result->id; ?>">
		<input type="hidden" name="action" value="member_update">
		<input type="submit" name="" id="member_update" value="Update">
    <?php }else {  ?>
    	<input type="hidden" name="action" value="chaos_member_info">
    	<input type="submit" name="submit" id="customer-info" value="Submit">
	<?php } ?>
</form>
</center>



