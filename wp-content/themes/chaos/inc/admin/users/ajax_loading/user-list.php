
<h1>List Team</h1>
<table class="wp-list-table widefat fixed " cellspacing="0" >
    <thead>
        <tr style="background: #23282d;color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Member Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Member Number</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Date</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="">
    <?php
    global $wpdb;
    $table = $wpdb->prefix. 'chaos_members';
  

   if(isset($_POST['action']) && $_POST['action'] == 'user_listing') {
        $user_per_page                           = $_POST['user_per_page'];
        $user_name                               = $_POST['user_name'];
        $user_phone                              = $_POST['user_phone'];
        
    
    } 
    else {
        $user_per_page                       = isset( $_GET['user_per_page'] ) ? abs( (int) $_GET['user_per_page'] ) : 5;
        $user_name                           = isset( $_GET['user_name'] ) ? $_GET['user_name']  : '';
        $user_phone                          = isset( $_GET['user_phone'] ) ? $_GET['user_phone']  : ''; 
    
    }


    $condition = '';
    if($user_name != '') {
        $condition .= ' AND member_table.first_name LIKE "'.$user_name.'%"';
    }
    if($user_phone != '') {
        $condition .= ' AND member_table.phone LIKE "'.$user_phone.'%"';
    }
  

    $result_args = array(
        'orderby_field' => 'user_registered',
        'page' => 1,
        'order_by' => 'DESC',
        'items_per_page' => $user_per_page,
        'condition' => $condition,
    );


    $results = user_list_pagination($result_args);


    // echo "<pre>";
    // var_dump($results); die();

        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
            $per_page = $results['start_count'];
            foreach ($results['result'] as $d_value) {
                $per_page++;
    ?>
    <tr>
        <td> <?php echo $per_page; ?></td>
        <td> <?php echo $d_value->first_name; ?></td>
        <td> <?php echo $d_value->phone; ?></td>
        <td> <?php echo $d_value->user_registered; ?></td>
        <td class="">
            <a href="<?php echo menu_page_url( 'add_redeem_points', 0 )."&user_id={$d_value->user_id}&action=member_data"; ?>">Redeem</a> /<a href="<?php echo menu_page_url( 'view_history', 0 )."&user_id={$d_value->user_id}&action=history";?>" >Point History</a>/
            <a href="<?php echo menu_page_url( 'add_admin', 0 )."&user_id={$d_value->user_id}"; ?>">Update</a>
        </td> 
    </tr>
    <?php
    }
}
 ?>
    </tbody>
</table>
<?php echo $results['pagination']; ?>








