
<h1>List Team</h1>
<table class="wp-list-table widefat fixed " cellspacing="0" >
    <thead>
        <tr style="background: #23282d;color: #fff;">
            <th class="manage-column column-id"><span>S No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Member Name</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Member Number</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Date</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Bill No</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Bill Amount</span></th>
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Football Bill</span></th> 
            <th scope="col" id="wplc_name_colum" class="manage-column column-id"><span>Action</span></th>
        </tr>
    </thead>
    <tbody id="the-list" class="">
    <?php
    global $wpdb;
    $table = $wpdb->prefix. 'chaos_football_billing';
    $member_table = $wpdb->prefix. 'chaos_members';
    $history_table = $wpdb->prefix. 'chaos_credits_points';

    if($_GET['action']=='delete'){
        $id = $_GET['id'];
        $query = "SELECT  member_id,ft_credit_points from $table where id = $id";
       

        $data_delete=$wpdb->update( $table ,array( 'active' =>'0' ),array( 'id' => $id ));

    }

   if(isset($_POST['action']) && $_POST['action'] == 'football_listing') {
        $receipt_per_page                           = $_POST['receipt_per_page'];
        $member_name                                = $_POST['member_name'];
        $member_number                              = $_POST['member_number'];
        $football_bill_date                         = $_POST['football_bill_date'];
        $bill_no                                    = $_POST['bill_no'];
        $bill_amt                                   = $_POST['bill_amt'];
        
    
    } 
    else {
        $receipt_per_page                       = isset( $_GET['receipt_per_page'] ) ? abs( (int) $_GET['receipt_per_page'] ) : 5;
        $member_name                            = isset( $_GET['member_name'] ) ? $_GET['member_name']  : '';
        $member_number                          = isset( $_GET['member_number'] ) ? $_GET['member_number']  : '';
        $football_bill_date                     = isset( $_GET['football_bill_date'] ) ? $_GET['football_bill_date']  : '';
        $bill_no                                = isset( $_GET['bill_no'] ) ? $_GET['bill_no']  : '';
        $bill_amt                               = isset( $_GET['bill_amt'] ) ? $_GET['bill_amt']  : '';
    
    }


    $condition = '';
    if($member_name != '') {
        $condition .= ' AND ft_member_name LIKE "'.$member_name.'%"';
    }
    if($member_number != '') {
        $condition .= ' AND ft_membership_no LIKE "'.$member_number.'%"';
    }
    if($football_bill_date != '') {
        $condition .= ' AND ft_date LIKE "'.$football_bill_date.'%"';
    }
    if($bill_no != '') {
        $condition .= ' AND ft_bill_no LIKE "'.$bill_no.'%"';
    }
    if($bill_amt != '') {
        $condition .= ' AND  ft_football_bill LIKE "'.$bill_amt.'%"';
    }
    

    $result_args = array(
        'table_name' => $table,
        'orderby_field' => 'id',
        'page' => 1,
        'order_by' => 'DESC',
        'items_per_page' => $receipt_per_page,
        'condition' => $condition,
    );
    $results = custom_pagination_football_billing($result_args);


    // echo "<pre>";
    // var_dump($results); die();

        if(isset($results['result']) && is_array($results['result']) && count($results['result'])>0 ) {
            $per_page = $results['start_count'];
            foreach ($results['result'] as $d_value) {
                $per_page++;
    ?>
    <tr>
        <td> <?php echo $per_page; ?></td>
        <td> <?php echo $d_value->ft_member_name; ?></td>
        <td> <?php echo $d_value->ft_membership_no; ?></td>
        <td> <?php echo $d_value->ft_date; ?></td>
        <td> <?php echo $d_value->ft_bill_no; ?></td>
        <td> <?php echo $d_value->ft_football_bill; ?></td>
        <td> <a href="<?php echo admin_url('admin.php?page=display_football').'&bill_no='.$d_value->ft_bill_no.'&action=display_football'; ?>">View</a></td>
        <td class="center">
            <span>
                <a class="action-icons c-edit employee_edit dashicons dashicons-edit" href="<?php echo admin_url('admin.php?page=football_billing').'&id='.$d_value->id.'&action=update'; ?>" title="Edit" data-roll="1" data-id="26"></a>
            </span>
            <span><a class="action-icons c-delete-football user_delete dashicons dashicons-trash" title="delete" data-action="employees" data-roll="1" data-id="<?php  echo $d_value->id; ?>"></a>
            </span>
        </td>
    </tr>
    <?php
    }
}
 ?>
    </tbody>
</table>
<?php echo $results['pagination']; ?>








